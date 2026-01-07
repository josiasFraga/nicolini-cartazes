<?php
$valor_venda = number_format($promocao->VlrVenda, 2, ',', '.');
$list_valor = explode(",", $valor_venda);
$VlrVenda = "<div class='definitive-price-container impact'><div class='definitive-price'>" . $list_valor[0] . "</div><div class='cents'>," . $list_valor[1] . "</div></div>";

$preco_final = number_format($promocao->PrFinalDesconto, 2, ',', '.');
$list_valor = explode(",", $preco_final);
$PrFinalDesconto = "<div class='definitive-price-container'><div class='definitive-price'>" . $list_valor[0] . "</div><div class='cents'>," . $list_valor[1] . "</div></div>";
?>

    <div class="item_container">
        <div class="codigo_int"><?= $promocao->CODIGOINT ?></div>

        <div class="item_name_price">
            <div class="item_name text-center font_lilita_one">
                    <?= $promocao->descricao_impressao ?>
            </div>
            <div class="item_price_from_price font_lilita_one">
                <?= $VlrVenda ?>
            </div>
        </div>

    </div>
</div>
<div class="row">
    <div class="item_container">
        <div class="codigo_int"><?= $promocao->CODIGOINT ?></div>

        <div class="item_price">
            <div class="item_price_to">
                <div class="item_price_to_price impact">
                    <div class="item_price_to_price_desc font_lilita_one text-center">A partir de <?= $promocao->qtdgatilho + 1 ?><?= $promocao['un_medida'] ?></div>
                    <?= $PrFinalDesconto ?>
                </div>
            </div>           
        </div>

    </div>
</div>