<?php
$valor_venda = number_format($promocao->VlrVenda, 2, ',', '.');
$list_valor = explode(",", $valor_venda);
$VlrVenda = "<div class='definitive-price-container'><div class='definitive-price'>" . $list_valor[0] . "</div><div class='cents'>," . $list_valor[1] . "</div></div>";

$preco_final = number_format($promocao->precoclube, 2, ',', '.');
$list_valor = explode(",", $preco_final);
$precoclube = "<div class='definitive-price-container'><div class='definitive-price'>" . $list_valor[0] . "</div><div class='cents'>," . $list_valor[1] . "</div></div>";
?>

<?php if ( $dados_loja['class'] === "nicolini" ) : ?>
<div class="item_container horizontal bs_line_height_1">

    <div class="space_top"></div>

    <div class="item_container_whithout_space_top font_lilita_one">

        <div class="bs_row h-100">
            <div class="col bs_column">
                <div class="bs_flex bs_justify_between bs_column" style="flex: 1">
                    <?= $this->Html->image('clube/tag.webp', ['fullBase' => true, 'class' => 'clube-tag']); ?>
                    <div class="product_name bs_pl"><?= $promocao->descricao_impressao ?></div>
                </div>
                <div class="bs_flex bs_align_items_center bs_pl" style="flex: 1">
                    <div class="price_from">
                        <span class="money_label">R$</span>
                        <div class="bs_row">
                            <?= $VlrVenda ?>
                            <span class="unit"><?= $promocao['un_medida'] ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col bs_column" style="flex: 2 !important;">
                <div class="folder_title font_lilita_one bs_red">OFERTA CLUBE</div>
                <div class="club_section bs_pl bs_pr" style="flex: 1;">

                    <div class="club_section_container bs_column bs_flex">

                        <div class="club_section_title font_lilita_one bs_yellow bs_bg_red">
                            <h1>PREÇO NO CLUBE</h1>
                        </div>

                        <div class="club_price bs_row bs_pl bs_pr">
                            
                            <span class="money_label">R$</span>
                            <?= $precoclube ?>

                            <div class="unit_limit">
                                <span class="unit"><?= $promocao['un_medida'] ?></span>
                                <p>Limite <?= $promocao->limite ?> <?= !empty($promocao['un_medida']) ? $promocao->unidade : "" ?></p>
                            </div>
                        </div>

                    </div>

                    <div class="club_qrcode bs_text_center">
                        <?= $this->Html->image('clube/qr_code.png', ['fullBase' => true]); ?>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</div>
<?php elseif($dados_loja['class'] === "atacadao") : ?>
<div class="item_container horizontal <?= $dados_loja['class'] ?>">

    <div class="space_top"></div>
    

    <div class="item_header <?= $dados_loja['class'] ?>">
        <?php if (empty($tema)) : ?>
        <?= $this->Html->image('clube/' . $dados_loja['logo'], ['fullBase' => true]); ?>
        <?php endif; ?>
        <?php if (!empty($tema)) : ?>
        <?= $this->Html->image($tema . '/' . $tamanhoCartaz . '/' . $dados_loja['logo'], ['fullBase' => true, "class" => "tema"]); ?>
        <?php endif; ?>
    </div>

    <div class="bs_flex bs_row" style="flex: 1">

        <div class="product_name bs_text_center font_lilita_one">
            <?= $promocao->descricao_impressao ?>
        </div>

        <div class="price_from bs_text_center font_lilita_one">
            <div class="bs_flex bs_row">
                <span class="money_label">R$</span>
                <div class="bs_row bs_justify_center">
                    <?= $VlrVenda ?>
                </div>
            </div>
        </div>

    </div>

    <div class="bs_bg_red clube-title font_lilita_one bs_yellow text-center club_desc">No Clube</div>

    <div class="bs_flex bs_row" style="flex: 1">
        <div class="bs_flex" style="flex: 1">
            <div class="desconto_desc bs_text_center font_lilita_one">
                Desconto por<br>cliente em at&eacute;<br>
                <?= $promocao->limite ?><?= !empty($promocao['un_medida']) ? $promocao->unidade : "" ?>
            </div>
        </div>
        <div class="bs_flex" style="flex: 1">

            <div class="club_price bs_row bs_pl bs_red bs_pr font_lilita_one">
                
                <span class="money_label">R$</span>
                <?= $precoclube ?>
            </div>
        </div>
    </div>

</div>
<?php else: ?>
<div class="item_container horizontal <?= $dados_loja['class'] ?>" style="position: relative;">

    <div class="space_top"></div>

    <div class="item_header <?= $dados_loja['class'] ?>">
        <?php if (empty($tema)) : ?>
        <?= $this->Html->image('clube/' . $dados_loja['logo'], ['fullBase' => true]); ?>
        <?php endif; ?>
        <?php if (!empty($tema)) : ?>
        <?= $this->Html->image($tema . '/' . $tamanhoCartaz . '/' . $dados_loja['logo'], ['fullBase' => true, "class" => "tema"]); ?>
        <?php endif; ?>
    </div>
    <div class="product_name text-center font_lilita_one">
        <?= $promocao->descricao_impressao ?>
    </div>
    <div class="bs_row">
        <div class="item_price_from">
            <div class="item_price_from_price font_lilita_one">
                <div class="text-center from_label">De</div>
                <div class="bs_row">
                    <div class="item_price_from_price_currency">R$</div>
                    <?= $VlrVenda ?>
                    <span class="price_to_unit_desc"><?= $promocao['un_medida'] ?></span>
                </div>
            </div>
        </div>
        <div class="item_price_to">
            <div class="item_price_to_price font_lilita_one">
                <div class="text-center to_label">Por</div>
                <div class="bs_row">
                    <div class="item_price_to_price_currency">R$</div>
                    
                    <?= $precoclube ?>
                    <span class="price_to_unit_desc"><?= $promocao['un_medida'] ?></span>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>