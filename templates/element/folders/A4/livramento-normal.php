<?php
$cabecalho_ofertas = $promocao['tipo_cartaz_slug'] . "/";
/*if ($promocao->horti == "-1") {
    $cabecalho_ofertas .= "horti/";
}*/
$cabecalho_ofertas .= $dados_loja['class'];

$valor_venda = number_format($promocao->PrFinalDesconto, 2, ',', '.');
$list_valor = explode(",", $valor_venda);
$VlrFinalDesconto = "<div class='definitive-price-container'><div class='definitive-price'>" . $list_valor[0] . "</div><div class='cents'>," . $list_valor[1] . "</div></div>";

$valor_venda_db = $promocao->VlrVenda;
$preco_final = number_format($valor_venda_db, 2, ',', '.');
$list_valor = explode(",", $preco_final);
$VlrVenda = "<div class='definitive-price-container'><div class='definitive-price'>" . $list_valor[0] . "</div><div class='cents'>," . $list_valor[1] . "</div></div>";

$valor_pack = $promocao->PrFinalDesconto * $promocao->qtdgatilho;
$preco_final_pack = number_format($valor_pack, 2, ',', '.');
$list_valor_pack = explode(",", $preco_final_pack);
$VlrFinalDescontoPack = "<div class='definitive-price-container'><div class='definitive-price'>" . $list_valor_pack[0] . "</div><div class='cents'>," . $list_valor_pack[1] . "</div></div>";
?>

<div class="item_container">

    <div class="space_top"></div>

    <div class="item_header <?= $dados_loja['class'] ?>">
        <?php if (empty($tema)) : ?>
        <?= $this->Html->image('livramentonormal/' . $dados_loja['logo'], ['fullBase' => true]); ?>
        <?php endif; ?>
        <?php if (!empty($tema)) : ?>
        <?= $this->Html->image($tema . '/' . $tamanhoCartaz . '/' . $dados_loja['logo'], ['fullBase' => true, "class" => "tema"]); ?>
        <?php endif; ?>
    </div>
    
    <div class="item_name text-center font_lilita_one">
        <?= $promocao->descricao_impressao ?>
    </div>

    <div class="item_price_from">
            <div class="bs_row font_lilita_one" style="flex: 0">
                <div class="item_price_to_price_currency">R$</div>
                <?= $VlrVenda ?>
                <span style="font-size: 0.2em; margin-top: 3.5em">unidade</span>
            </div>
    </div>

    <div class="item_price_from_pack">
        <div class="item_price_from_pack_desc font_lilita_one">
            Acima de
            <?= $promocao->qtdgatilho ?>
            unidades
        </div>
        <div class="item_price_from_pack_price font_lilita_one bs_row" style="flex: 0">
            <div class="item_price_to_price_currency">R$</div>
            <?= $VlrFinalDesconto ?>
        </div>
    </div>
</div>