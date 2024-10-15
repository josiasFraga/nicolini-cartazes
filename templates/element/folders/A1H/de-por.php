<?php
$valor_venda = number_format($promocao->VlrVendaNormal, 2, ',', '.');
$list_valor = explode(",", $valor_venda);
$VlrVendaNormal = "<div class='definitive-price-container'><div class='definitive-price'>" . $list_valor[0] . "</div><div class='cents'>," . $list_valor[1] . "</div></div>";

$preco_final = number_format($promocao->VlrVenda, 2, ',', '.');
$list_valor = explode(",", $preco_final);
$VlrVenda = "<div class='definitive-price-container'><div class='definitive-price'>" . $list_valor[0] . "</div><div class='cents'>," . $list_valor[1] . "</div></div>";
?>

    <div class="item_container">

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

    </div>
</div>
<div class="row">
    <div class="item_container">

        <div class="item_price">
            <div class="by-label">Por</div>
            
            <div class="item_price_to_price impact">
                <?= $VlrVenda ?>
                <span class="price_to_unit_desc"><?= $promocao['un_medida'] ?></span>
            </div>
        </div>

    </div>
</div>
