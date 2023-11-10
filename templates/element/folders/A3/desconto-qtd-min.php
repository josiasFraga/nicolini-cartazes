<?php
$VlrVenda = number_format($promocao->VlrVenda, 2, ',', '.');
$list_valor = explode(",", $VlrVenda);
$VlrVenda = "<div class='definitive-price-container'><div class='definitive-price'>" . $list_valor[0] . "</div><div class='cents'>," . $list_valor[1] . "</div></div>";

$PrFinalDesconto = number_format($promocao->PrFinalDesconto, 2, ',', '.');
$list_valor = explode(",", $PrFinalDesconto);
$PrFinalDesconto = "<div class='definitive-price-container'><div class='definitive-price'>" . $list_valor[0] . "</div><div class='cents'>," . $list_valor[1] . "</div></div>";
?>

<div class="item_container <?= $dados_loja['class'] ?>">

    <div class="space_top"></div>

    <div class="item_header <?= $dados_loja['class'] ?>">
        <?php if (empty($tema)) : ?>
        <?= $this->Html->image('normal/' . $dados_loja['logo'], ['fullBase' => true]); ?>
        <?php endif; ?>
        <?php if (!empty($tema)) : ?>
        <?= $this->Html->image($tema . '/' . $tamanhoCartaz . '/' . $dados_loja['logo'], ['fullBase' => true, "class" => "tema"]); ?>
        <?php endif; ?>
    </div>

    <div class="item_name_price">
        <div class="item_name text-center font_lilita_one">
            <?= $promocao->descricao_impressao ?>
        </div>
        <div class="item_price_from_price">
            <?= $VlrVenda ?>
        </div>
        <div class="item_descont_desc">
            <span class="font_lilita_one">A partir de <?= $promocao->qtdgatilho + 1 ?></span>
        </div>
    </div>

    <div class="item_price">
        <div class="item_descont_desc">
            <span class="font_lilita_one">A partir de <?= $promocao->qtdgatilho + 1 ?> <br> o pre&ccedil;o unit&aacute;rio fica</span>
        </div>
        <div class="item_price_to">
            <div class="item_price_to_price">
                <?= $PrFinalDesconto ?>
            </div>
        </div>
    </div>
</div>