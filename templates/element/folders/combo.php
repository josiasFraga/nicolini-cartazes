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

<div class="item_container <?= $dados_loja['class'] ?>" style="position: relative;">

    <div class="space_top"></div>

    <div class="item_header <?= $dados_loja['class'] ?> <?= $promocao->horti == "-1" ? "horti" : "" ?>">
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
    <div class="item_price">
        <div class="item_price_to">
            <div class="item_price_to_price font_lilita_one">
                <div class="bs_row">
                <div class="item_price_to_price_currency">R$</div>
                <?= $VlrVenda ?>
                <span class="price_to_unit_desc"><?= $promocao['un_medida'] ?></span>
                </div>
            </div>
        </div>
    </div>

    <?php if ( $dados_loja['class'] == 'nicolini' ) : ?>
    <div class="combo_desc font_lilita_one">
        Compre a partir de <?= $promocao->qtdgatilho; ?> <?= $promocao['un_medida_pague_x_leve_y'] ?><br>
        e ganhe um(a) <?= $promocao->proddesconto; ?>
    </div>
    <?php endif; ?>

    <?php if ( $dados_loja['class'] != 'nicolini' ) : ?>
    <div class="combo_desc font_lilita_one bs_red">
        Compre a partir de <?= $promocao->qtdgatilho; ?> <?= $promocao['un_medida_pague_x_leve_y'] ?><br>
        e ganhe um(a) <?= $promocao->proddesconto; ?>
    </div>
    <?php endif; ?>

</div>