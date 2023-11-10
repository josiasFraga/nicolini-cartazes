<?php
$VlrVenda = number_format($promocao->VlrVenda, 2, ',', '.');
$list_valor = explode(",", $VlrVenda);
$VlrVenda = "<div class='definitive-price-container'><div class='definitive-price'>" . $list_valor[0] . "</div><div class='cents'>," . $list_valor[1] . "</div></div>";

$cashback = number_format(($promocao->VlrVenda * 0.1) - 0.009, 2, ',', '.');
//$list_valor = explode(",", $cashback);
//$cashback = "<div class='definitive-price-container'><div class='definitive-price'>" . $list_valor[0] . "</div><div class='cents'>," . $list_valor[1] . "</div></div>";
?>

<div class="item_container">

    <div class="space_top"></div>

    <div class="item_header <?= $dados_loja['class'] ?>">
        <?php if (empty($tema)) : ?>
        <?= $this->Html->image('cashback/' . $dados_loja['logo'], ['fullBase' => true]); ?>
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
    </div>

    <div class="item_price">
        <div class="item_price_inner">
            <div class="desconto_desc">
                <?= $this->Html->image('cashback/ri_2.png', ['fullBase' => true]); ?>
            </div>
            <div class="item_price_to">
                <div class="item_price_to_price impact">
                    <?= $cashback ?>
                </div>
            </div>
            <div class="desconto_desc font_lilita_one">
                Dinheiro de volta no App
            </div>
        </div>
    </div>
</div>