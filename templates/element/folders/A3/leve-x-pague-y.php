<?php
$VlrVendaNormal = number_format($promocao->VlrVendaNormal, 2, ',', '.');
$list_valor = explode(",", $VlrVendaNormal);
$VlrVendaNormal = "<div class='definitive-price-container'><div class='definitive-price'>" . $list_valor[0] . "</div><div class='cents'>," . $list_valor[1] . "</div></div>";

$VlrVenda = number_format($promocao->VlrVenda, 2, ',', '.');
$list_valor = explode(",", $VlrVenda);
$VlrVenda = "<div class='definitive-price-container'><div class='definitive-price'>" . $list_valor[0] . "</div><div class='cents'>," . $list_valor[1] . "</div></div>";
?>
<div class="item_container <?= $dados_loja['class'] ?>">

    <div class="space_top"></div>

    <div class="item_header <?= $dados_loja['class'] ?>">
        <?php if (empty($tema)) : ?>
        <?= $this->Html->image('paguexlevey/' . $dados_loja['logo'], ['fullBase' => true]); ?>
        <?php endif; ?>
        <?php if (!empty($tema)) : ?>
        <?= $this->Html->image($tema . '/' . $tamanhoCartaz . '/' . $dados_loja['logo'], ['fullBase' => true, "class" => "tema"]); ?>
        <?php endif; ?>
    </div>
    
    <div class="item_name_price">

        <div class="promo_desc">Leve  <span><?= $promocao->qtdgatilho + 1; ?></span> Pague <span><?= $promocao->qtdgatilho ?></span></div>
    
        <div class="item_name text-center font_lilita_one">
            <?= $promocao->descricao_impressao ?>
        </div>
        <div class="item_price_from">
            <div class="item_price_from_price">
                <?= $VlrVendaNormal ?>
            </div>
        </div>
    </div>

    <div class="item_price">
        <div class="item_price_to">
        <div class="promo_desc">Leve  <?= $promocao->qtdgatilho + 1; ?> Pague <?= $promocao->qtdgatilho ?></div>
        <div class="promo_desc_smal">Nesta promo&ccedil;&atilde;o <?= $promocao['un_medida'] ?> fica</div>
            <div class="item_price_to_price">
                <?= $VlrVenda ?>
            </div>
        </div>
    </div>
</div>