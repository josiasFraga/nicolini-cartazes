<div class="item_container">

    <div class="space_top"></div>

    <div class="item_header">
        <?= $this->Html->image('paguexlevey/' . $dados_loja['logo'], ['fullBase' => true]); ?>
    </div>
    
    <div class="item_name_price">
        <div class="item_name text-center font_lilita_one">
            <?= $promocao->descricao_impressao ?>
        </div>
        <div class="item_price_from">
            <div class="item_price_from_price">
                <?= number_format($promocao->VlrVendaNormal, 2, ',', '.') ?>
            </div>
        </div>
    </div>

    <div class="item_price">
        <div class="item_price_to">
        <div class="promo_desc">Leve  <?= $promocao->qtdgatilho + 1; ?> Pague <?= $promocao->qtdgatilho ?></div>
        <div class="promo_desc_smal">Nesta promoção un fica</div>
            <div class="item_price_to_price">
                <?= number_format($promocao->VlrVenda, 2, ',', '.') ?>
            </div>
        </div>
    </div>
</div>