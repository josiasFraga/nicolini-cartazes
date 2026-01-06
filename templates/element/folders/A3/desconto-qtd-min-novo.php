<?php
$cabecalho_ofertas = $promocao['tipo_cartaz_slug'] . "/";
if ($promocao->horti == "-1") {
    $cabecalho_ofertas .= "horti/";
}
$cabecalho_ofertas .= $dados_loja['class'];

$valor_venda = number_format($promocao->VlrVendaNormal, 2, ',', '.');
$list_valor = explode(",", $valor_venda);
$VlrVendaNormal = "<div class='definitive-price-container'><div class='definitive-price'>" . $list_valor[0] . "</div><div class='cents'>," . $list_valor[1] . "</div></div>";

$preco_final = number_format($promocao->VlrVenda, 2, ',', '.');
$list_valor = explode(",", $preco_final);
$VlrVenda = "<div class='definitive-price-container'><div class='definitive-price'>" . $list_valor[0] . "</div><div class='cents'>," . $list_valor[1] . "</div></div>";
?>
<div class="item_container">

    <div class="space_top"></div>

    <div class="item_header">
        <?php if (empty($tema)) : ?>
        <?= $this->Html->image($cabecalho_ofertas.'.png', ['fullBase' => true]); ?>
        <?php endif; ?>
        <?php if (!empty($tema)) : ?>
        <?= $this->Html->image($tema . '/' . $tamanhoCartaz . '/' . $dados_loja['logo'], ['fullBase' => true, "class" => "tema"]); ?>
        <?php endif; ?>
    </div>

    <div class="item_name text-center font_lilita_one">
        <?= $promocao->descricao_impressao ?>
    </div>

    <div class="item_from_price">
        <div class="item_from_price_container font_lilita_one">
            <div class="bs_row">
                <div class="item_price_from_price_currency">R$</div>
                <?= $VlrVendaNormal ?>
                <div class="price_from_unit_desc"><?= $promocao['un_medida'] ?></div>
            </div>
        </div>
    </div>
    
    <?php if ( $dados_loja['class'] != "atacadao" ): ?>
    <div class="item_to_price">
        <div class="item_to_price_container font_lilita_one bs_bg_red">
            <div class="promo_desc_smal bs_yellow">A partir de <?= $promocao->qtdgatilho + 1 ?><?= $promocao['un_medida_pague_x_leve_y'] ?></div>

            <div class="bs_self_center bs_flex">
                <div class="bs_row bs_yellow">
                    <div class="item_price_to_price_currency">R$</div>
                    <?= $VlrVenda ?>
                    <div class="price_from_unit_desc"><?= $promocao['un_medida'] ?></div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <?php if ( $dados_loja['class'] == "atacadao" ): ?>
    <div class="item_to_price">
        <div class="item_to_price_container font_lilita_one">
            <div class="promo_desc_smal">A partir de <?= $promocao->qtdgatilho + 1 ?><?= $promocao['un_medida_pague_x_leve_y'] ?></div>

            <div class="bs_self_center bs_flex">
                <div class="bs_row bs_red">
                    <div class="item_price_to_price_currency">R$</div>
                    <?= $VlrVenda ?>
                    <div class="price_from_unit_desc"><?= $promocao['un_medida'] ?></div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

</div>