<?php
$valor_venda = number_format($promocao->VlrVenda, 2, ',', '.');
$list_valor = explode(",", $valor_venda);
$VlrVenda = "<div class='definitive-price-container'><div class='definitive-price'>" . $list_valor[0] . "</div><div class='cents'>," . $list_valor[1] . "</div></div>";

$preco_final = number_format($promocao->precoclube, 2, ',', '.');
$list_valor = explode(",", $preco_final);
$precoclube = "<div class='definitive-price-container'><div class='definitive-price'>" . $list_valor[0] . "</div><div class='cents'>," . $list_valor[1] . "</div></div>";
?>

<div class="item_container">

    <div class="space_top"></div>

    <div class="item_container_whithout_space_top">

        <div class="item_header <?= $dados_loja['class'] ?>">
            <?= $this->Html->image('clube/' . $dados_loja['logo'], ['fullBase' => true]); ?>
        </div>

        <div class="item_name_price">
            <div class="item_name text-center font_lilita_one">
                <?= $promocao->descricao_impressao ?>
            </div>
            <div class="item_price_from_price">
                <?= $VlrVenda ?>
                <span class="price_from_unit_desc"><?= $promocao['un_medida'] ?></span>
            </div>
        </div>

        <div class="item_price">
            <div class="clube-title font_lilita_one">No Clube</div>
            <div class="item_price_inner">
                <div class="desconto_desc">
                <?= $dados_loja['nome'] == 'Nicolini' ? $this->Html->image('clube/ri_3_nicolini.png', ['fullBase' => true]) : $this->Html->image('clube/ri_3.png', ['fullBase' => true]); ?>
                Desconto por<br>cliente em at&eacute;<br>
                <?= $promocao->limite ?><?= empty($promocao['un_medida']) ? $promocao->unidade : "" ?>
                </div>
                <div class="item_price_to">
                    <div class="item_price_to_price impact">
                        <?= $precoclube ?>
                        <span class="price_to_unit_desc"><?= $promocao['un_medida'] ?></span>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</div>