<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Event\EventInterface;
use Cake\Http\Response;
use Cake\Mailer\MailerAwareTrait;
use Cake\Utility\Text;
use CakePdf\Pdf\CakePdf;
use CakePdf\Pdf\Engine\DomPdfEngine;
use Cake\Http\StringResponse;
use Cake\Http\ResponseHeaderBag;
use Cake\Filesystem\File;
use Cake\Filesystem\Folder;
use Cake\Collection\Collection;
use Cake\Utility\Security;

date_default_timezone_set('America/Sao_Paulo');

class PromocoesController extends AppController
{
    use MailerAwareTrait;
    
    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('Authorization.Authorization');
        //$this->Authorization->authorize(new PromocaoPolicy());
    }

    public function beforeFilter(EventInterface $event)
    {
        parent::beforeFilter($event);
        //$this->Authentication->addUnauthenticatedActions(['login']); // Ação de login não requer autenticação
        $this->Authorization->skipAuthorization();

        if (!$this->Authentication->getIdentity()) {
            return $this->redirect(['controller' => 'Users', 'action' => 'login']);
        }

        return true;
    }

    public function isAuthorized($user)
    {
        // Permitir acesso a todas as ações para usuários logados
        return $this->Authentication->getIdentity() !== null;
    }

    public function index($loja = "", $vigencia = "V", $livramento = 'N')
    {
        $logged_level_2 = $this->getRequest()->getSession()->read('logged_level_2');

        //se escolheu entradas e não logou novamente
        if ( empty($logged_level_2) && $vigencia == "E" ) {
            
            //se foi post, o usuário ta tentando logar
            if ($this->request->is('post')) {

                $data = $this->getRequest()->getData();        
                $result = $this->authenticateLevel2($data);
        
                // If the user is logged in send them away.
                if ( $result ) {
                    $this->getRequest()->getSession()->write('logged_level_2', '1');
                } else {
                    $this->getRequest()->getSession()->delete('logged_level_2');
                    $this->Flash->error(__('Nome de usuários e/ou senha inválidos!'));
                }

                // Obtém os parâmetros da URL atual
                $currentUrl = $this->request->getUri()->getPath();

                // Redireciona para a mesma action (reload) com os mesmos parâmetros
                return $this->redirect($currentUrl);
            }

            return $this->render('login');
        }

        $this->loadModel('ApoUsuarioloja');
        $usuario = $this->Authentication->getIdentity();
        $lojas = $this->ApoUsuarioloja->find('all')
        ->where([
            'ApoUsuarioloja.Login' => $usuario->login
        ])
        ->select(['ApoUsuarioloja.Loja'])
        ->group(['ApoUsuarioloja.Loja'])
        ->toArray();


        if ( !empty($loja) ) {
            $procura_loja_selecionada = array_filter($lojas, function ($item) use ($loja) {
                return $item->Loja == $loja;
            });

            if (empty($procura_loja_selecionada)) {                
                $this->Flash->error('Sem permissão de acesso a loja');
                return $this->redirect(['action' => 'index']);
            }

        } else {
            //remove o segundo login do usuario
            $this->getRequest()->getSession()->delete('logged_level_2');
        }

        $request = $this->getRequest();
        $search = $request->getQuery('search');
        $filter_type = $request->getQuery('type');

        $conditions = [
            'Promocoes.loja' => $loja,
            'Promocoes.VlrVendaNormal >' => 0,
            //'Promocoes.tppromocao' => 2, //leve x pague y - depende de outras variaveis
            //'Promocoes.precoclube >' => 0, //Clube
            //'Promocoes.formaetq' => 100,
            //'Promocoes.local' => 'v'
            //'Promocoes.local' => 'k' // Cashback
            //'Promocoes.tppromocao' => 6 // A partir de -desc qutd minima
            //'Promocoes.descricao' => 'REFRIGERANTE COCA COLA PACK 6X600ML'
        ];

        if ( $livramento == 'N' && empty($search) ) {
            $conditions['NOT'] = [
                'Promocoes.finalidade' => 'L',
            ];
        }

        if ( $livramento == 'Y' ) {
            $conditions['Promocoes.finalidade'] = 'L';
        }

        if (  !empty($search) ) {
            $conditions['OR'] = [
                'Promocoes.descricao LIKE' => '%' . $search . '%',
                'Promocoes.CODIGOINT' => $search,
            ];
        }

        //se o usuário logou pela segunda vez
        if ( !empty($logged_level_2) ) {
            $conditions['vigencia'] = $vigencia;
        } else {
            $conditions['vigencia'] = 'V';
        }
        
        // Busca os tipos de cartazes disponíveis
        $filtros_tipos = $this->Promocoes->find('list', [
            'valueField' => 'nomepromocao'
        ])
        ->where($conditions)
        ->group(['nomepromocao'])
        ->order(['nomepromocao' => 'ASC'])
        ->toArray();

        if (  !empty($filter_type) ) {
            $conditions['nomepromocao'] = $filter_type;
        }

        // Retrieve promotions based on the selected store (if any)
        $query = $this->Promocoes->find('all')
        ->where($conditions)
        //->limit(200)
        ->order(['Promocoes.descricao']);

        // Execute the query and retrieve the promotions
        $promocoes = $query->toArray();

        // Filter the promotions array to keep only the products with the lowest VlrVenda for each CODIGOINT
        $filteredPromocoes = [];
        $uniqueCODIGOINTs = [];

        foreach ($promocoes as $promocao) {
        
            $vigencia = $promocao->vigencia;
            $CODIGOINT = $promocao->CODIGOINT;
            $VlrVenda = $promocao->VlrVenda;

            if (!isset($uniqueCODIGOINTs[$CODIGOINT.$vigencia]) || $VlrVenda < $uniqueCODIGOINTs[$CODIGOINT.$vigencia]->VlrVenda) {
                $uniqueCODIGOINTs[$CODIGOINT.$vigencia] = $promocao;
            }
        }

        $promocoes = array_values($uniqueCODIGOINTs);

        $promocoes = $this->definirTiposCartaz($promocoes, $livramento);
         
        // Ordena as promoções por tipoCartaz não nulo antes de passá-las para a visualização
        /*usort($promocoes, function ($a, $b) {
            if ($a->tipoCartaz !== null && $b->tipoCartaz === null) {
                return -1; // $a vem antes de $b
            } elseif ($a->tipoCartaz === null && $b->tipoCartaz !== null) {
                return 1; // $b vem antes de $a
            }
            return 0; // mantém a ordem atual
        });*/

        /*usort($promocoes, function ($a, $b) {
            if ($a['tipoCartaz'] == $b['tipoCartaz']) {
                return 0;
            }
            return ($a['tipoCartaz'] < $b['tipoCartaz']) ? -1 : 1;
        });*/

        $loja_selecionada = $loja;

        $this->loadModel('TemasCartazes');

        $temas = [];
        $now = date('Y-m-d H:i:s');

        $temas_bd = $this->TemasCartazes->find('all')->where([
            'TemasCartazes.inicio <=' => $now,
            'TemasCartazes.fim >=' => $now
        ]);

        if ( $temas_bd ) {
            $temas = $temas_bd->toArray();
        }
    
        $this->set(compact(
            'promocoes', 
            'lojas', 
            'loja_selecionada',
            'search',
            'logged_level_2',
            'vigencia',
            'livramento',
            'filtros_tipos',
            'filter_type',
            'temas'
        ));
    }

    private function definirTiposCartaz($promocoes, $livramento = 'N')
    {
        foreach ($promocoes as $promocao) {

            if ( empty($promocao->tipoCartaz) && !empty($promocao->PrFinalDesconto) && !empty($promocao->qtdgatilho) ) {
                $promocao->tipoCartaz = 'Livramento Normal';
            }

            if ( $promocao->CodPromocao == 0 && $livramento != 'Y' && empty($promocao->tipoCartaz && $promocao->finalidade !== 'L') ) {
                $promocao->tipoCartaz = 'Sem Promocao';
                continue;
            }

            if ( $promocao->formaetq == 100 ) {
                $promocao->VlrVenda = $promocao->VlrVenda / 10;
                $promocao->VlrVendaNormal = $promocao->VlrVendaNormal / 10;

                if ( !empty($promocao->precoclube) ) {
                    $promocao->precoclube = $promocao->precoclube / 10;
                }
            }

            if ($promocao->finalidade === 'V') {
                $promocao->tipoCartaz = 'Data Curta';
            } else if ($promocao->finalidade === 'L') {
                if ($promocao->precoclube > 0 && $promocao->tppromocao == 0) {
                    $promocao->tipoCartaz = 'Livramento Clube';
                } else if ( $promocao->VlrVenda != $promocao->VlrVendaNormal ) {
                    $promocao->tipoCartaz = 'Livramento Promocao';
                } else {
                    $promocao->tipoCartaz = 'Livramento Normal';
                }
            } else if ($promocao->local != "G" && $promocao->local != null){
                if ($promocao->local === 'K') {
                    $promocao->tipoCartaz = 'Cashback';
                    //$promocao->VlrVenda -= ($promocao->VlrVenda * 0.1); // Diminui 10% do campo VlrVenda
                } else {
                    if ($promocao->precoclube > 0 && $promocao->tppromocao == 0 ) {
                        if ( $promocao->precoclube <= $promocao->VlrVenda ) {
                            $promocao->tipoCartaz = 'Clube';                            
                        }
                    } elseif ($promocao->tppromocao == 2 && $promocao->codproddesconto == $promocao->CODIGOINT ) {
                        $promocao->tipoCartaz = 'Leve X pague Y';
                    } elseif ($promocao->tppromocao == 2 && $promocao->codproddesconto != $promocao->CODIGOINT ) {
                        $promocao->tipoCartaz = 'Leve X pague Y - Tipo 2';
                    } elseif ($promocao->tppromocao == 6) {
                        $promocao->tipoCartaz = 'Desconto Qtd Min';
                    } elseif ($promocao->precoclube == 0 && (($promocao->VlrVendaNormal - $promocao->VlrVenda) / $promocao->VlrVendaNormal) < 0.2) {
                        $promocao->tipoCartaz = 'Normal';
                        //$promocao->tipoCartaz = 'Normal Novo';
                    } elseif ($promocao->precoclube == 0 && (($promocao->VlrVendaNormal - $promocao->VlrVenda) / $promocao->VlrVendaNormal) > 0.2) {
                        $promocao->tipoCartaz = 'De Por';
                    }
                }

            }

            if ( empty($promocao->tipoCartaz) && $livramento != 'Y' ) {
                $promocao->tipoCartaz = 'Sem Promocao';
            }
        }
        return $promocoes;
    }

    public function imprimir()
    {
        // Verifica se há produtos selecionados
        if (!$this->request->getData('selecionados')) {
            $this->Flash->error('Nenhum produto selecionado.');
            return $this->redirect(['action' => 'index']);
        }
        
        $dados_loja = $this->lojas[$this->request->getData('loja_selecionada_id')];
        $tema = $this->request->getData('input_tema');
    
        $selecionados = []; // Array para armazenar os IDs das promoções selecionadas
    
        foreach ($this->request->getData('selecionados') as $key => $value) {
            if ($value !== '0') {
                $idprom = $value; // O ID da promoção é o índice do array
                $selecionados[] = $idprom;
            }
        }
    
        // Obtém todas as promoções
        $promocoes = $this->Promocoes->find('all')
        ->where(['Promocoes.idprom IN' => $selecionados])->toArray();

    
        // Agrupa as promoções por tipo_cartaz e tamanho_cartaz
        $gruposPromocoes = [];
        foreach ($promocoes as $promocao) {

            $promocao['descricao_impressao'] = $this->request->getData('descricao_impressao_' . $promocao['idprom']);
            $promocao['un_medida'] = "";
            
            if ( $promocao['formaetq'] == 100 ) {
                $promocao['VlrVenda'] = $promocao['VlrVenda'] / 10;
                $promocao['VlrVendaNormal'] = $promocao['VlrVendaNormal'] / 10;

                if ( !empty($promocao['precoclube']) ) {
                    $promocao['precoclube'] = $promocao['precoclube'] / 10;
                }

                $promocao['un_medida'] = "a cada 100g";
            } else {
                if ( !empty($promocao['precoclube']) ) {
                    $promocao['un_medida'] = $promocao->unidade;
                }
            }
        
            $tipoCartaz = $this->request->getData('tipo_cartaz_' . $promocao['idprom']);
            $tipoCartazSlug = strtolower(Text::slug($tipoCartaz, '-'));
    
            $tamanhoCartaz = $this->request->getData('tamanho_cartaz_' . $promocao['idprom']);
    
            $qtd_copias = $this->request->getData('quantidade_copias_' . $promocao['idprom']);

            $promocao['tipo_cartaz'] = $tipoCartaz;
            $promocao['tipo_cartaz_slug'] = $tipoCartazSlug;

            for ( $i = 1; $i <= $qtd_copias; $i++ ) {
                $gruposPromocoes[$tamanhoCartaz][] = $promocao;
            }

        }

        foreach ($gruposPromocoes as $chave => $itens) {
            usort($itens, function ($a, $b) {
                if ($a['tipo_cartaz'] == $b['tipo_cartaz']) {
                    return 0;
                }
                return ($a['tipo_cartaz'] < $b['tipo_cartaz']) ? -1 : 1;
            });

            $gruposPromocoes[$chave] = $itens;
        }

        $arquivos = [];

        //$this->clear_html_folder();
    
        // Gera um arquivo PDF para cada grupo de promoções
        foreach ($gruposPromocoes as $tamanhoCartaz => $gruposTamanhoCartaz) {


            // Crie o nome do arquivo PDF com base no tipo de cartaz e tamanho do cartaz
            $filename = 'promocoes_' . $gruposTamanhoCartaz[0]['loja'] . '_' . Text::slug(strtolower($tamanhoCartaz)) . '.html';

            if ( $tamanhoCartaz != 'A6' ) {
                //continue;
            }

            if ( !isset($this->poster_sizes[$tamanhoCartaz]) ) {
                continue;
            }

            $dimensoes_cartaz = $this->poster_sizes[$tamanhoCartaz];

            // Renderize a visualização e obtenha o conteúdo HTML
            $this->viewBuilder()->setLayout('ajax');
            $this->set(compact(
                'gruposTamanhoCartaz', 
                'dimensoes_cartaz', 
                'tamanhoCartaz', 
                'dados_loja',
                'tema'
            ));
            $html = $this->render('cartazes')->getBody()->__toString();

            //echo $html;
            //die();
            //continue;

            $arquivos[] = [
                'filename' => $filename,
                //'tipoCartaz' => $tipoCartaz,
                'tamanhoCartaz' => $tamanhoCartaz,
            ];

            // Crie um novo objeto File com o caminho e o nome do arquivo desejado
            $file = new File(WWW_ROOT . 'html' . DS . $filename, true, 0644);

            // Salve o texto HTML no arquivo
            $file->write($html);

            // Feche o arquivo
            $file->close();
        }

        //die();
    
        $this->getRequest()->getSession()->write('arquivos', $arquivos);
        return $this->redirect(['action' => 'visualizarArquivos']);
    
        // Redirecione para a página inicial ou exiba uma mensagem de sucesso
        $this->Flash->success('Arquivos PDF gerados com sucesso.');
        return $this->redirect(['action' => 'index']);
    }

    public function visualizarArquivos() {
        $arquivos = $this->getRequest()->getSession()->read('arquivos');

        $this->set(compact('arquivos'));
    }

    private function clear_html_folder() {
        // Caminho da pasta que você deseja limpar
        $folderPath = WWW_ROOT . 'html';

        // Cria uma instância da classe Folder
        $folder = new Folder($folderPath);

        // Obtém a lista de arquivos dentro da pasta
        $fileList = $folder->read();

        // Itera sobre a lista de arquivos e exclui cada um deles
        foreach ($fileList[0] as $file) {
            $filePath = $folderPath . DS . $file;
            unlink($filePath);
        }

        // Itera sobre a lista de arquivos e exclui cada um deles
        foreach ($fileList[1] as $file) {
            $filePath = $folderPath . DS . $file;
            unlink($filePath);
        }
    }
    
    public function authenticateLevel2($dados)
    {
 
        $this->loadModel('Users');
   
        $user = $this->Users->find()
            ->where([
                'login' => @$dados["login"]
            ])
            ->first();

        $password = md5(@$dados["pswd"]);

        if ($user && $user->pswd == $password) {
            return true;
        } else {
            return false;
        }
    }

}
