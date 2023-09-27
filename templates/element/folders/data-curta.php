<div class="item_container">

    <div class="space_top"></div>

    <div class="item_header <?= $dados_loja['class'] ?>">
        <?= $this->Html->image('datacurta/' . $dados_loja['logo'], ['fullBase' => true]); ?>
    </div>

    <div class="item_name text-center font_lilita_one">
        <?= $promocao->descricao_impressao ?>
    </div>

    <div class="item_price">
        <div class="item_price_from">
            <span>De</span>
            <div class="item_price_from_price">
                <?= number_format($promocao->VlrVendaNormal, 2, ',', '.') ?>
                <span class="price_from_unit_desc"><?= $promocao['un_medida'] ?></span>
            </div>
        </div>
        <div class="item_price_to">
            <span>Por</span>
            <div class="item_price_to_price">
                <?= number_format($promocao->VlrVenda, 2, ',', '.') ?>
                <span class="price_to_unit_desc"><?= $promocao['un_medida'] ?></span>
            </div>
        </div>
    </div>
</div>