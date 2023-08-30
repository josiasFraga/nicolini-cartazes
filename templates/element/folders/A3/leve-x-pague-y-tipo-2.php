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
            <div class="promo_desc">Na compra de <?= $promocao->qtdgatilho; ?> <?= $promocao['un_medida'] ?> + R$ 0,01</div>
            <div class="promo_desc_destaque"><h1>Ganhe</h1><?= $promocao->proddesconto; ?></div>  
        </div>
    </div>
</div>