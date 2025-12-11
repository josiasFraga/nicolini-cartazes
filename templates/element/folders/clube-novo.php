<?php
$valor_venda = number_format($promocao->VlrVenda, 2, ',', '.');
$list_valor = explode(",", $valor_venda);
$VlrVenda = "<div class='definitive-price-container'><div class='definitive-price'>" . $list_valor[0] . "</div><div class='cents'>," . $list_valor[1] . "</div></div>";

$preco_final = number_format($promocao->precoclube, 2, ',', '.');
$list_valor = explode(",", $preco_final);
$precoclube = "<div class='definitive-price-container'><div class='definitive-price'>" . $list_valor[0] . "</div><div class='cents'>," . $list_valor[1] . "</div></div>";
?>

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
                            <p>Ative o desconto no App do Clube Nicolini</p>
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