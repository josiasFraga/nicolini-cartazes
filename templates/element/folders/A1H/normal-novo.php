<?php
$valor_venda = number_format(floatval($promocao->VlrVenda), 2, ',', '.');
$list_valor = explode(",", $valor_venda);
$VlrVenda = "<div class='definitive-price-container'><div class='definitive-price'>" . $list_valor[0] . "</div><div class='cents'>," . $list_valor[1] . "</div></div>";
?>

<div class="item_container">
    <div class="codigo_int"><?= $promocao->CODIGOINT ?></div>
    <div class="item_name text-center font_lilita_one">
        <?= $promocao->descricao_impressao ?>
    </div>
</div>
</div>
<div class="row">
<div class="item_container">
    <div class="codigo_int"><?= $promocao->CODIGOINT ?></div>
    <div class="item_price">
        <div class="item_price_to">
            <div class="item_price_to_price impact">
                <?= $VlrVenda ?>
                <span class="price_to_unit_desc"><?= $promocao['un_medida'] ?></span>
            </div>
        </div>
    </div>
</div>
