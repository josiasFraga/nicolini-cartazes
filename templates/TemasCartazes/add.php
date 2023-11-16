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
                <legend><?= __('Cadastrando Tema') ?></legend>
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
                        <?= $this->Html->image("sem-imagem.gif", ['fullBase' => true, "class" => "tema", "width" => "50%", "id" => "preview_A3_nicolini"]); ?>

          
                        <div class="description">
                            <ul>
                                <li class="li_largura_A3_nicolini">Largura: <?= 0 ?>px</li>
                                <li class="li_altura_A3_nicolini">Altura: <?= 0 ?>px</li>
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
                        <?= $this->Html->image("sem-imagem.gif", ['fullBase' => true, "class" => "tema", "width" => "50%", "id" => "preview_A4_nicolini"]); ?>

                        <div class="description">
                            <ul>
                                <li class="li_largura_A4_nicolini">Largura: <?= 0 ?>px</li>
                                <li class="li_altura_A4_nicolini">Altura: <?= 0 ?>px</li>
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
                        <?= $this->Html->image("sem-imagem.gif", ['fullBase' => true, "class" => "tema", "width" => "50%", "id" => "preview_A5_nicolini"]); ?>
           
                        <div class="description">
                            <ul>
                                <li class="li_largura_A5_nicolini">Largura: <?= 0 ?>px</li>
                                <li class="li_altura_A5_nicolini">Altura: <?= 0 ?>px</li>
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
                        <?= $this->Html->image("sem-imagem.gif", ['fullBase' => true, "class" => "tema", "width" => "50%", "id" => "preview_A6_nicolini"]); ?>
   
                        <div class="description">
                            <ul>
                                <li class="li_largura_A6_nicolini">Largura: <?= 0 ?>px</li>
                                <li class="li_altura_A6_nicolini">Altura: <?= 0 ?>px</li>
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
                        <?= $this->Html->image("sem-imagem.gif", ['fullBase' => true, "class" => "tema", "width" => "50%", "id" => "preview_A3_atacadao"]); ?>

                        <div class="description">
                            <ul>
                                <li class="li_largura_A3_atacadao">Largura: <?= 0 ?>px</li>
                                <li class="li_altura_A3_atacadao">Altura: <?= 0 ?>px</li>
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
                        <?= $this->Html->image("sem-imagem.gif", ['fullBase' => true, "class" => "tema", "width" => "50%", "id" => "preview_A4_atacadao"]); ?>

                        <div class="description">
                            <ul>
                                <li class="li_largura_A4_atacadao">Largura: <?= 0 ?>px</li>
                                <li class="li_altura_A4_atacadao">Altura: <?= 0 ?>px</li>
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
                        <?= $this->Html->image("sem-imagem.gif", ['fullBase' => true, "class" => "tema", "width" => "50%", "id" => "preview_A5_atacadao"]); ?>
        
                        <div class="description">
                            <ul>
                                <li class="li_largura_A5_atacadao">Largura: <?= 0 ?>px</li>
                                <li class="li_altura_A5_atacadao">Altura: <?= 0 ?>px</li>
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
                        <?= $this->Html->image("sem-imagem.gif", ['fullBase' => true, "class" => "tema", "width" => "50%", "id" => "preview_A6_atacadao"]); ?>
    
                        <div class="description">
                            <ul>
                                <li class="li_largura_A6_atacadao">Largura: <?= 0 ?>px</li>
                                <li class="li_altura_A6_atacadao">Altura: <?= 0 ?>px</li>
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
                        <?= $this->Html->image("sem-imagem.gif", ['fullBase' => true, "class" => "tema", "width" => "50%", "id" => "preview_A3_engenho"]); ?>

                        <div class="description">
                            <ul>
                                <li class="li_largura_A3_engenho">Largura: <?= 0 ?>px</li>
                                <li class="li_altura_A3_engenho">Altura: <?= 0 ?>px</li>
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
                        <?= $this->Html->image("sem-imagem.gif", ['fullBase' => true, "class" => "tema", "width" => "50%", "id" => "preview_A4_engenho"]); ?>

                        <div class="description">
                            <ul>
                                <li class="li_largura_A4_engenho">Largura: <?= 0 ?>px</li>
                                <li class="li_altura_A4_engenho">Altura: <?= 0 ?>px</li>
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
                        <?= $this->Html->image("sem-imagem.gif", ['fullBase' => true, "class" => "tema", "width" => "50%", "id" => "preview_A5_engenho"]); ?>
    
                        <div class="description">
                            <ul>
                                <li class="li_largura_A5_engenho">Largura: <?= 0 ?>px</li>
                                <li class="li_altura_A5_engenho">Altura: <?= 0 ?>px</li>
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
                        <?= $this->Html->image("sem-imagem.gif", ['fullBase' => true, "class" => "tema", "width" => "50%", "id" => "preview_A6_engenho"]); ?>
     
                        <div class="description">
                            <ul>
                                <li class="li_largura_A6_engenho">Largura: <?= 0 ?>px</li>
                                <li class="li_altura_A6_engenho">Altura: <?= 0 ?>px</li>
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
                <?= $this->Form->button(__('Salvar')) ?>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

<?= $this->Html->script('pages/temas_cartazes', ['block' => 'script']) ?>
