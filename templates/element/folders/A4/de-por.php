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
        <?= $this->Html->image('depor/' . $dados_loja['logo'], ['fullBase' => true]); ?>
        <?php endif; ?>
        <?php if (!empty($tema)) : ?>
        <?= $this->Html->image($tema . '/' . $tamanhoCartaz . '/' . $dados_loja['logo'], ['fullBase' => true, "class" => "tema"]); ?>
        <?php endif; ?>
    </div>
    
    <div class="item_name_price">
        <div class="item_name text-center font_lilita_one">
            <?= $promocao->descricao_impressao ?>
        </div>
        <div class="item_price_from">
            <span>De</span>
            <div class="item_price_from_price impact">
                <?= $VlrVendaNormal ?>
                <span class="price_from_unit_desc"><?= $promocao['un_medida'] ?></span>
            </div>
        </div>
    </div>

    <div class="item_price">
        <div class="item_price_to">
            <span>Por</span>
            <div class="item_price_to_price impact">
                <?= $VlrVenda ?>
                <span class="price_to_unit_desc"><?= $promocao['un_medida'] ?></span>
            </div>
        </div>
    </div>
</div>