<?php
$valor_venda = number_format($promocao->VlrVenda, 2, ',', '.');
$list_valor = explode(",", $valor_venda);
$VlrVenda = "<div class='definitive-price-container'><div class='definitive-price'>" . $list_valor[0] . "</div><div class='cents'>," . $list_valor[1] . "</div></div>";

$preco_final = number_format($promocao->precoclube, 2, ',', '.');
$list_valor = explode(",", $preco_final);
$precoclube = "<div class='definitive-price-container'><div class='definitive-price'>" . $list_valor[0] . "</div><div class='cents'>," . $list_valor[1] . "</div></div>";
?>

<div class="item_container vertical bs_line_height_1">

    <div class="space_top"></div>

    <div class="item_container_whithout_space_top font_lilita_one">

        <div class="bs_row bs_justify_center">
            <?= $this->Html->image('clube/tag.webp', ['fullBase' => true, 'class' => 'clube-tag']); ?>
            <div class="folder_title font_lilita_one bs_aqlign_content_center bs_red">OFERTA<br>CLUBE</div>
        </div>

        <div class="bs_text_center">
            <div class="product_name"><?= $promocao->descricao_impressao ?></div>
            
            <div class="price_from bs_row bs_justify_center bs_align_flex_end">
                <span class="money_label">R$</span>
                <?= $VlrVenda ?>
                <span class="unit"><?= $promocao['un_medida'] ?></span>
            </div>
        </div>
        
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