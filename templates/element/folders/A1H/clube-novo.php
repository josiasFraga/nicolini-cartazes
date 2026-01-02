<?php
$valor_venda = number_format($promocao->VlrVenda, 2, ',', '.');
$list_valor = explode(",", $valor_venda);
$VlrVenda = "<div class='definitive-price-container'><div class='definitive-price'>" . $list_valor[0] . "</div><div class='cents'>," . $list_valor[1] . "</div></div>";

$preco_final = number_format($promocao->precoclube, 2, ',', '.');
$list_valor = explode(",", $preco_final);
$precoclube = "<div class='definitive-price-container'><div class='definitive-price'>" . $list_valor[0] . "</div><div class='cents'>," . $list_valor[1] . "</div></div>";
?>
    <div class="item_container">
        <div class="codigo_int"><?= $promocao->CODIGOINT ?></div>

        <div class="item_name_price">
            <div class="item_name text-center font_lilita_one">
                <?= $promocao->descricao_impressao ?>
            </div>
            <div class="item_price_from_price">
                <?= $VlrVenda ?>
                <span class="price_from_unit_desc"><?= $promocao['un_medida'] ?></span>
            </div>
        </div>

    </div>
</div>
<div class="row">
    <div class="item_container">
        <div class="codigo_int"><?= $promocao->CODIGOINT ?></div>

        <div class="item_price">
            <div class="a1-clube-title font_lilita_one">No Clube</div>
            <div class="item_price_inner">
                <!--<div class="desconto_desc">
                Desconto por<br>cliente em at&eacute;<br>
                <?= $promocao->limite ?><?= !empty($promocao['un_medida']) ? $promocao->unidade : "" ?>
                </div>-->
                <div class="item_price_to">
                    <div class="item_price_to_price impact">
                        <?= $precoclube ?>
                        <span class="price_to_unit_desc"><?= $promocao['un_medida'] ?></span>
                    </div>
                </div>
            </div>
            <div class="desconto_desc font_lilita_one">
                Desconto por cliente em at&eacute;
                <?= $promocao->limite ?><?= !empty($promocao['un_medida']) ? $promocao->unidade : "" ?>
            </div>
        </div>

    </div>
</div>
