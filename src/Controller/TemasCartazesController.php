<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Event\EventInterface;
use Cake\Utility\Security;
use Cake\Utility\Text;

class TemasCartazesController extends AppController
{
    
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

    public function index()
    {
        $temasCartazes = $this->paginate($this->TemasCartazes);

        $this->set(compact('temasCartazes'));
    }


    public function view($id = null)
    {
        $temasCartaze = $this->TemasCartazes->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('temasCartaze'));
    }


    public function add()
    {
        $temasCartaze = $this->TemasCartazes->newEmptyEntity();
        if ($this->request->is('post')) {
            $dados = $this->request->getData();

            $dados['diretorio'] = $dados['nome'];
            $slugWithHyphens = Text::slug($dados['diretorio']);
            $dados['diretorio'] = str_replace('-', '_', strtolower($slugWithHyphens));

            $temasCartaze = $this->TemasCartazes->patchEntity($temasCartaze, $dados);

            $directory = WWW_ROOT . 'img' . DS . $temasCartaze->diretorio;

            if ( !is_dir($directory) ) {
                mkdir($directory, 0755, true);
                mkdir($directory . DS . "A3", 0755, true);
                mkdir($directory . DS . "A4", 0755, true);
                mkdir($directory . DS . "A5", 0755, true);
                mkdir($directory . DS . "A6", 0755, true);
            }

            if ($this->TemasCartazes->save($temasCartaze)) {


                foreach ($this->request->getUploadedFiles() as $key => $fileObject) {
                    $nomeArquivo = $this->determinarNomeArquivo($key, $fileObject);
                    if ($fileObject->getError() === UPLOAD_ERR_OK) {
            
                        $destination = WWW_ROOT . 'img' . DS . $temasCartaze->diretorio . DS . $nomeArquivo;
        
                        if ($fileObject->moveTo($destination) === null) {
                            $this->Flash->success('Arquivo ' . $nomeArquivo . ' salvo com sucesso.');
                        } else {
                            $this->Flash->error('Falha ao salvar o arquivo ' . $nomeArquivo . '.');
                        }
                    } else {
                        $this->Flash->error('Nenhum arquivo selecionado no campo ' . $nomeArquivo . '.');
                    }
                }

                $this->Flash->success(__('O tema foi cadastrado com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ocorreu um erro ao cadastar o tema. Por favor, tente novamente mais tarde!'));
        }
        $this->set(compact('temasCartaze'));
    }


    public function edit($id = null)
    {
        $temasCartaze = $this->TemasCartazes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $temasCartaze = $this->TemasCartazes->patchEntity($temasCartaze, $this->request->getData());

            foreach ($this->request->getUploadedFiles() as $key => $fileObject) {
                if ($fileObject->getError() === UPLOAD_ERR_OK) {
                    $nomeArquivo = $this->determinarNomeArquivo($key, $fileObject);
        
                    $destination = WWW_ROOT . 'img' . DS . $temasCartaze->diretorio . DS . $nomeArquivo;
    
                    if ($fileObject->moveTo($destination) === null) {
                        $this->Flash->success('Arquivo ' . $nomeArquivo . ' salvo com sucesso.');
                    } else {
                        $this->Flash->error('Falha ao salvar o arquivo ' . $nomeArquivo . '.');
                    }
                }
            }

  
            if ($this->TemasCartazes->save($temasCartaze)) {
                $this->Flash->success(__('O tema foi alterado com scesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ocorreu um erro ao alterar o tema. Por favor, tente mais tarde.'));
        }
        $this->set(compact('temasCartaze'));
    }


    public function delete($id = null)
    {
        /*$this->request->allowMethod(['post', 'delete']);
        $temasCartaze = $this->TemasCartazes->get($id);
        if ($this->TemasCartazes->delete($temasCartaze)) {
            $this->Flash->success(__('O tema foi excluído com sucesso.'));
        } else {
            $this->Flash->error(__('Ocorreu um erro ao excluir o tema. Por favor, tente novamente mais tarde.'));
        }*/

        return $this->redirect(['action' => 'index']);
    }

    private function determinarNomeArquivo($key, $fileObject) {
        // Extrai o tamanho e a loja do nome do input
        list($_, $tamanho, $loja) = explode('_', $key);
    
        // Obtém a extensão do arquivo original
        $extensao = pathinfo($fileObject->getClientFilename(), PATHINFO_EXTENSION);
    
        // Constrói o nome do arquivo com a extensão correta
        return $tamanho . DS . $loja . '.' . $extensao;
    }
}
