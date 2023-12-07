<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TemasCartaze $temasCartaze
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Form->postLink(
                __('Excluir'),
                ['action' => 'delete', $temasCartaze->id],
                ['confirm' => __('Você tem certeza que deseja excluir o tema # {0}?', $temasCartaze->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Lista de Temas de Cartazes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="temasCartazes form content">
            <?= $this->Form->create($temasCartaze, ['type' => 'file']) ?>

            <fieldset>
                <legend><?= __('Alterando Tema') ?></legend>
                <?php
                    echo $this->Form->control('inicio');
                    echo $this->Form->control('fim');
                    echo $this->Form->control('nome');
                ?>
            </fieldset>

            <hr />

            <fieldset class="bg-silver">
                <legend class="text-center d-block w-100">Nicolini</legend>
                
                <div class="row justify-content-space-arround">

                    <div class="col text-center box-block-col">
                        <label for="nome">A3</label>
                        <?= $this->Html->image($temasCartaze->diretorio . 'A3/nicolini.png', ['fullBase' => true, "class" => "tema", "id" => "preview_A3_nicolini"]); ?>

                        <?php 
                            $imagePath = WWW_ROOT . DS . 'img' . DS . $temasCartaze->diretorio . DS . 'A3' . DS . 'nicolini.png';
                            $imageInfo = getimagesize($imagePath);
                            $imageWidth = $imageInfo[0];
                            $imageHeight = $imageInfo[1];
                        ?>

                        <div class="description">
                            <ul>
                                <li class="li_largura_A3_nicolini">Largura: <?= $imageWidth ?>px</li>
                                <li class="li_altura_A3_nicolini">Altura: <?= $imageHeight ?>px</li>
                                <li>Proporção Recomendada: 1118.52px por 221.7px</li>
                            </ul>
                        </div>

                        <!-- Botão para carregar imagem -->
                        <button type="button" class="btn-upload mb-2 w-100" data-size="A3" data-loja="nicolini">Mudar Imagem</button>

                        <!-- Input oculto para armazenar a imagem -->
                        <input type="file" id="input_A3_nicolini" name="input_A3_nicolini" class="d-none" accept="image/png, image/jpeg">
                    </div>

                    <div class="col text-center box-block-col">
                        <label for="nome">A4</label>
                        <?= $this->Html->image($temasCartaze->diretorio . 'A4/nicolini.png', ['fullBase' => true, "class" => "tema", "id" => "preview_A4_nicolini"]); ?>

                        <?php 
                            $imagePath = WWW_ROOT . DS . 'img' . DS . $temasCartaze->diretorio . DS . 'A4' . DS . 'nicolini.png';
                            $imageInfo = getimagesize($imagePath);
                            $imageWidth = $imageInfo[0];
                            $imageHeight = $imageInfo[1];
                        ?>

                        <div class="description">
                            <ul>
                                <li class="li_largura_A4_nicolini">Largura: <?= $imageWidth ?>px</li>
                                <li class="li_altura_A4_nicolini">Altura: <?= $imageHeight ?>px</li>
                                <li>Proporção Recomendada: 789.69px por 156.61px</li>
                            </ul>
                        </div>

                        <!-- Botão para carregar imagem -->
                        <button type="button" class="btn-upload mb-2 w-100" data-size="A4" data-loja="nicolini">Mudar Imagem</button>

                        <!-- Input oculto para armazenar a imagem -->
                        <input type="file" id="input_A4_nicolini" name="input_A4_nicolini" class="d-none" accept="image/png, image/jpeg">
                    </div>

                    <div class="col text-center box-block-col">
                        <label for="nome">A5</label>
                        <?= $this->Html->image($temasCartaze->diretorio . 'A5/nicolini.png', ['fullBase' => true, "class" => "tema", "id" => "preview_A5_nicolini"]); ?>
                        <?php 
                            $imagePath = WWW_ROOT . DS . 'img' . DS . $temasCartaze->diretorio . DS . 'A5' . DS . 'nicolini.png';
                            $imageInfo = getimagesize($imagePath);
                            $imageWidth = $imageInfo[0];
                            $imageHeight = $imageInfo[1];
                        ?>

                        <div class="description">
                            <ul>
                                <li class="li_largura_A5_nicolini">Largura: <?= $imageWidth ?>px</li>
                                <li class="li_altura_A5_nicolini">Altura: <?= $imageHeight ?>px</li>
                                <li>Proporção Recomendada: 789.69px por 90.3px</li>
                            </ul>
                        </div>

                        <!-- Botão para carregar imagem -->
                        <button type="button" class="btn-upload mb-2 w-100" data-size="A5" data-loja="nicolini">Mudar Imagem</button>

                        <!-- Input oculto para armazenar a imagem -->
                        <input type="file" id="input_A5_nicolini" name="input_A5_nicolini" class="d-none" accept="image/png, image/jpeg">

                    </div>

                    <div class="col text-center box-block-col">
                        <label for="nome">A6</label>
                        <?= $this->Html->image($temasCartaze->diretorio . 'A6/nicolini.png', ['fullBase' => true, "class" => "tema", "id" => "preview_A6_nicolini"]); ?>
                        <?php 
                            $imagePath = WWW_ROOT . DS . 'img' . DS . $temasCartaze->diretorio . DS . 'A6' . DS . 'nicolini.png';
                            $imageInfo = getimagesize($imagePath);
                            $imageWidth = $imageInfo[0];
                            $imageHeight = $imageInfo[1];
                        ?>

                        <div class="description">
                            <ul>
                                <li class="li_largura_A6_nicolini">Largura: <?= $imageWidth ?>px</li>
                                <li class="li_altura_A6_nicolini">Altura: <?= $imageHeight ?>px</li>
                                <li>Proporção Recomendada: 384.53px por 57.53px</li>
                            </ul>
                        </div>

                        <!-- Botão para carregar imagem -->
                        <button type="button" class="btn-upload mb-2 w-100" data-size="A6" data-loja="nicolini">Mudar Imagem</button>

                        <!-- Input oculto para armazenar a imagem -->
                        <input type="file" name="input_A6_nicolini" id="input_A6_nicolini" class="d-none" accept="image/png, image/jpeg">
                    </div>

                </div>
            </fieldset>

            <hr />

            <fieldset class="bg-silver">
                <legend class="text-center d-block w-100">Atacadaço</legend>
                
                <div class="row justify-content-space-arround">

                    <div class="col text-center box-block-col">
                        <label for="nome">A3</label>
                        <?= $this->Html->image($temasCartaze->diretorio . 'A3/atacadao.png', ['fullBase' => true, "class" => "tema", "id" => "preview_A3_atacadao"]); ?>

                        <?php 
                            $imagePath = WWW_ROOT . DS . 'img' . DS . $temasCartaze->diretorio . DS . 'A3' . DS . 'atacadao.png';
                            $imageInfo = getimagesize($imagePath);
                            $imageWidth = $imageInfo[0];
                            $imageHeight = $imageInfo[1];
                        ?>

                        <div class="description">
                            <ul>
                                <li class="li_largura_A3_atacadao">Largura: <?= $imageWidth ?>px</li>
                                <li class="li_altura_A3_atacadao">Altura: <?= $imageHeight ?>px</li>
                                <li>Proporção Recomendada: 1118.52px por 221.7px</li>
                            </ul>
                        </div>

                        <!-- Botão para carregar imagem -->
                        <button type="button" class="btn-upload mb-2 w-100" data-size="A3" data-loja="atacadao">Mudar Imagem</button>

                        <!-- Input oculto para armazenar a imagem -->
                        <input type="file" id="input_A3_atacadao" name="input_A3_atacadao" class="d-none" accept="image/png, image/jpeg">
                    </div>

                    <div class="col text-center box-block-col">
                        <label for="nome">A4</label>
                        <?= $this->Html->image($temasCartaze->diretorio . 'A4/atacadao.png', ['fullBase' => true, "class" => "tema", "id" => "preview_A4_atacadao"]); ?>

                        <?php 
                            $imagePath = WWW_ROOT . DS . 'img' . DS . $temasCartaze->diretorio . DS . 'A4' . DS . 'atacadao.png';
                            $imageInfo = getimagesize($imagePath);
                            $imageWidth = $imageInfo[0];
                            $imageHeight = $imageInfo[1];
                        ?>

                        <div class="description">
                            <ul>
                                <li class="li_largura_A4_atacadao">Largura: <?= $imageWidth ?>px</li>
                                <li class="li_altura_A4_atacadao">Altura: <?= $imageHeight ?>px</li>
                                <li>Proporção Recomendada: 789.69px por 156.61px</li>
                            </ul>
                        </div>

                        <!-- Botão para carregar imagem -->
                        <button type="button" class="btn-upload mb-2 w-100" data-size="A4" data-loja="atacadao">Mudar Imagem</button>

                        <!-- Input oculto para armazenar a imagem -->
                        <input type="file" id="input_A4_atacadao" name="input_A4_atacadao" class="d-none" accept="image/png, image/jpeg">
                    </div>

                    <div class="col text-center box-block-col">
                        <label for="nome">A5</label>
                        <?= $this->Html->image($temasCartaze->diretorio . 'A5/atacadao.png', ['fullBase' => true, "class" => "tema", "id" => "preview_A5_atacadao"]); ?>
                        <?php 
                            $imagePath = WWW_ROOT . DS . 'img' . DS . $temasCartaze->diretorio . DS . 'A5' . DS . 'atacadao.png';
                            $imageInfo = getimagesize($imagePath);
                            $imageWidth = $imageInfo[0];
                            $imageHeight = $imageInfo[1];
                        ?>

                        <div class="description">
                            <ul>
                                <li class="li_largura_A5_atacadao">Largura: <?= $imageWidth ?>px</li>
                                <li class="li_altura_A5_atacadao">Altura: <?= $imageHeight ?>px</li>
                                <li>Proporção Recomendada: 789.69px por 90.3px</li>
                            </ul>
                        </div>

                        <!-- Botão para carregar imagem -->
                        <button type="button" class="btn-upload mb-2 w-100" data-size="A5" data-loja="atacadao">Mudar Imagem</button>

                        <!-- Input oculto para armazenar a imagem -->
                        <input type="file" id="input_A5_atacadao" name="input_A5_atacadao" class="d-none" accept="image/png, image/jpeg">

                    </div>

                    <div class="col text-center box-block-col">
                        <label for="nome">A6</label>
                        <?= $this->Html->image($temasCartaze->diretorio . 'A6/atacadao.png', ['fullBase' => true, "class" => "tema", "id" => "preview_A6_atacadao"]); ?>
                        <?php 
                            $imagePath = WWW_ROOT . DS . 'img' . DS . $temasCartaze->diretorio . DS . 'A6' . DS . 'atacadao.png';
                            $imageInfo = getimagesize($imagePath);
                            $imageWidth = $imageInfo[0];
                            $imageHeight = $imageInfo[1];
                        ?>

                        <div class="description">
                            <ul>
                                <li class="li_largura_A6_atacadao">Largura: <?= $imageWidth ?>px</li>
                                <li class="li_altura_A6_atacadao">Altura: <?= $imageHeight ?>px</li>
                                <li>Proporção Recomendada: 384.53px por 57.53px</li>
                            </ul>
                        </div>

                        <!-- Botão para carregar imagem -->
                        <button type="button" class="btn-upload mb-2 w-100" data-size="A6" data-loja="atacadao">Mudar Imagem</button>

                        <!-- Input oculto para armazenar a imagem -->
                        <input type="file" id="input_A6_atacadao" name="input_A6_atacadao" class="d-none" accept="image/png, image/jpeg">
                    </div>

                </div>
            </fieldset>

            <hr />

            <fieldset class="bg-silver">
                <legend class="text-center d-block w-100">Engenho</legend>
                
                <div class="row justify-content-space-arround">

                    <div class="col text-center box-block-col">
                        <label for="nome">A3</label>
                        <?= $this->Html->image($temasCartaze->diretorio . 'A3/engenho.png', ['fullBase' => true, "class" => "tema", "id" => "preview_A3_engenho"]); ?>

                        <?php 
                            $imagePath = WWW_ROOT . DS . 'img' . DS . $temasCartaze->diretorio . DS . 'A3' . DS . 'engenho.png';
                            $imageInfo = getimagesize($imagePath);
                            $imageWidth = $imageInfo[0];
                            $imageHeight = $imageInfo[1];
                        ?>

                        <div class="description">
                            <ul>
                                <li class="li_largura_A3_engenho">Largura: <?= $imageWidth ?>px</li>
                                <li class="li_altura_A3_engenho">Altura: <?= $imageHeight ?>px</li>
                                <li>Proporção Recomendada: 1118.52px por 221.7px</li>
                            </ul>
                        </div>

                        <!-- Botão para carregar imagem -->
                        <button type="button" class="btn-upload mb-2 w-100" data-size="A3" data-loja="engenho">Mudar Imagem</button>

                        <!-- Input oculto para armazenar a imagem -->
                        <input type="file" id="input_A3_engenho" name="input_A3_engenho" class="d-none" accept="image/png, image/jpeg">
                    </div>

                    <div class="col text-center box-block-col">
                        <label for="nome">A4</label>
                        <?= $this->Html->image($temasCartaze->diretorio . 'A4/engenho.png', ['fullBase' => true, "class" => "tema", "id" => "preview_A4_engenho"]); ?>

                        <?php 
                            $imagePath = WWW_ROOT . DS . 'img' . DS . $temasCartaze->diretorio . DS . 'A4' . DS . 'engenho.png';
                            $imageInfo = getimagesize($imagePath);
                            $imageWidth = $imageInfo[0];
                            $imageHeight = $imageInfo[1];
                        ?>

                        <div class="description">
                            <ul>
                                <li class="li_largura_A4_engenho">Largura: <?= $imageWidth ?>px</li>
                                <li class="li_altura_A4_engenho">Altura: <?= $imageHeight ?>px</li>
                                <li>Proporção Recomendada: 789.69px por 156.61px</li>
                            </ul>
                        </div>

                        <!-- Botão para carregar imagem -->
                        <button type="button" class="btn-upload mb-2 w-100" data-size="A4" data-loja="engenho">Mudar Imagem</button>

                        <!-- Input oculto para armazenar a imagem -->
                        <input type="file" id="input_A4_engenho" name="input_A4_engenho" class="d-none" accept="image/png, image/jpeg">
                    </div>

                    <div class="col text-center box-block-col">
                        <label for="nome">A5</label>
                        <?= $this->Html->image($temasCartaze->diretorio . 'A5/engenho.png', ['fullBase' => true, "class" => "tema", "id" => "preview_A5_engenho"]); ?>
                        <?php 
                            $imagePath = WWW_ROOT . DS . 'img' . DS . $temasCartaze->diretorio . DS . 'A5' . DS . 'engenho.png';
                            $imageInfo = getimagesize($imagePath);
                            $imageWidth = $imageInfo[0];
                            $imageHeight = $imageInfo[1];
                        ?>

                        <div class="description">
                            <ul>
                                <li class="li_largura_A5_engenho">Largura: <?= $imageWidth ?>px</li>
                                <li class="li_altura_A5_engenho">Altura: <?= $imageHeight ?>px</li>
                                <li>Proporção Recomendada: 789.69px por 90.3px</li>
                            </ul>
                        </div>

                        <!-- Botão para carregar imagem -->
                        <button type="button" class="btn-upload mb-2 w-100" data-size="A5" data-loja="engenho">Mudar Imagem</button>

                        <!-- Input oculto para armazenar a imagem -->
                        <input type="file" id="input_A5_engenho" name="input_A5_engenho" class="d-none" accept="image/png, image/jpeg">

                    </div>

                    <div class="col text-center box-block-col">
                        <label for="nome">A6</label>
                        <?= $this->Html->image($temasCartaze->diretorio . 'A6/engenho.png', ['fullBase' => true, "class" => "tema", "id" => "preview_A6_engenho"]); ?>
                        <?php 
                            $imagePath = WWW_ROOT . DS . 'img' . DS . $temasCartaze->diretorio . DS . 'A6' . DS . 'engenho.png';
                            $imageInfo = getimagesize($imagePath);
                            $imageWidth = $imageInfo[0];
                            $imageHeight = $imageInfo[1];
                        ?>

                        <div class="description">
                            <ul>
                                <li class="li_largura_A6_engenho">Largura: <?= $imageWidth ?>px</li>
                                <li class="li_altura_A6_engenho">Altura: <?= $imageHeight ?>px</li>
                                <li>Proporção Recomendada: 384.53px por 57.53px</li>
                            </ul>
                        </div>

                        <!-- Botão para carregar imagem -->
                        <button type="button" class="btn-upload mb-2 w-100" data-size="A6" data-loja="engenho">Mudar Imagem</button>

                        <!-- Input oculto para armazenar a imagem -->
                        <input type="file" id="input_A6_engenho" name="input_A6_engenho" class="d-none" accept="image/png, image/jpeg">
                    </div>

                </div>
            </fieldset>

            <div class="text-right">
                <?= $this->Form->button(__('Salvar Alterações')) ?>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

<?= $this->Html->script('pages/temas_cartazes', ['block' => 'script']) ?>
