<?php
$cabecalho_ofertas = $promocao['tipo_cartaz_slug'] . "/";
if ($promocao->horti == "-1") {
    $cabecalho_ofertas .= "horti/";
}
$cabecalho_ofertas .= $dados_loja['class'];

$valor_venda = number_format($promocao->VlrVendaNormal, 2, ',', '.');
$list_valor = explode(",", $valor_venda);
$VlrVendaNormal = "<div class='definitive-price-container'><div class='definitive-price'>" . $list_valor[0] . "</div><div class='cents'>," . $list_valor[1] . "</div></div>";

$valor_venda_db = $promocao->VlrVenda;
$valor_venda_db = (($valor_venda_db * $promocao->qtdgatilho) + 0.01) / ($promocao->qtdgatilho + 1);
$preco_final = number_format($valor_venda_db, 2, ',', '.');
$list_valor = explode(",", $preco_final);
$VlrVenda = "<div class='definitive-price-container'><div class='definitive-price'>" . $list_valor[0] . "</div><div class='cents'>," . $list_valor[1] . "</div></div>";
?>
<div class="item_container <?= $dados_loja['class'] ?>">

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
        <?php if ( $dados_loja['class'] != "atacadao" ): ?>
        <div>LEVE <span class="bs_red"><?= $promocao->qtdgatilho + 1; ?></span> PAGUE <span class="bs_red"><?= $promocao->qtdgatilho ?></span></div>
        <?php endif; ?>
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

    <?php if ( $dados_loja['class'] == "atacadao" ): ?>
    <div class="bs_red text-center font_lilita_one pague_leve_desc">Leve <?= $promocao->qtdgatilho + 1; ?> Pague <?= $promocao->qtdgatilho ?></div>
    <?php endif; ?>

    <?php if ( $dados_loja['class'] != "atacadao" ): ?>
    <div class="item_to_price">
        <div class="item_to_price_container font_lilita_one bs_bg_red">
            <div class="promo_desc_smal bs_yellow">Nesta promo&ccedil;&atilde;o,<br> cada <?= $promocao['un_medida_pague_x_leve_y'] ?> fica</div>
            <div class="bs_row bs_yellow">
                <div class="item_price_to_price_currency">R$</div>
                <?= $VlrVenda ?>
                <div class="price_from_unit_desc"><?= $promocao['un_medida'] ?></div>
            </div>
        </div>
    <div>
    <?php endif; ?>

    <?php if ( $dados_loja['class'] == "atacadao" ): ?>
    <div class="item_to_price">
        <div class="item_to_price_container font_lilita_one">
            <div class="promo_desc_smal">Nesta promo&ccedil;&atilde;o, cada <?= $promocao['un_medida_pague_x_leve_y'] ?> fica</div>
            <div class="bs_row bs_red">
                <div class="item_price_to_price_currency">R$</div>
                <?= $VlrVenda ?>
                <div class="price_from_unit_desc"><?= $promocao['un_medida'] ?></div>
            </div>
        </div>
    </div>
    <?php endif; ?>

</div>