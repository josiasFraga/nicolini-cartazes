<?php
$valor_venda = number_format(floatval($promocao->VlrVenda), 2, ',', '.');
$list_valor = explode(",", $valor_venda);
$VlrVenda = "<div class='definitive-price-container'><div class='definitive-price'>" . $list_valor[0] . "</div><div class='cents'>," . $list_valor[1] . "</div></div>";
?>

<div class="item_container">

    <div class="space_top"></div>

    <div class="item_header <?= $dados_loja['class'] ?>">
        <?php if (empty($tema)) : ?>
        <?= $this->Html->image('normal/' . $dados_loja['logo'], ['fullBase' => true]); ?>
        <?php endif; ?>
        <?php if (!empty($tema)) : ?>
        <?= $this->Html->image($tema . '/' . $tamanhoCartaz . '/' . $dados_loja['logo'], ['fullBase' => true, "class" => "tema"]); ?>
        <?php endif; ?>
    </div>
    <div class="item_name text-center font_lilita_one">
        <?= $promocao->descricao_impressao ?>
    </div>

    <div class="page-break"></div>

    <div class="item_price">
        <div class="item_price_to">
            <div class="item_price_to_price impact">
                <?= $VlrVenda ?>
                <span class="price_to_unit_desc"><?= $promocao['un_medida'] ?></span>
            </div>
        </div>
    </div>
</div>