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

    <div class="bs_row" style="flex: 6;">
        <div class="bs_flex bs_column" style="flex: 3;">
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
        </div>
        <div class="cashback_tag">
            <?= $this->Html->image('cashback-novo/tag.webp', ['fullBase' => true, 'class' => 'cashback-tag']); ?>
        </div>

    </div>

    <div class="item_to_price">
        <div class="cashback-desc font_lilita_one">
            <div class="promo_desc_big bs_yellow">10%</div>
            <div class="promo_desc_small bs_yellow">Dinheiro de volta</div>
        </div>
        <div style="position: relative;">
            <div class="cashback-return-desc">
                <div class="return-desc bs_red font_lilita_one">R$ <?= number_format(($promocao->VlrVenda * 0.1) - 0.009, 2, ',', '.') ?> NO SEU APP</div>
                <?= $this->Html->image('cashback-novo/qr-code.png', ['fullBase' => true, 'class' => 'qr-code']); ?>
            </div>
        </div>
    </div>

</div>