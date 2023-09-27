<div class="item_container">

    <div class="space_top"></div>

    <div class="item_header <?= $dados_loja['class'] ?>">
        <?= $this->Html->image('clube/' . $dados_loja['logo'], ['fullBase' => true]); ?>
    </div>

    <div class="item_name_price">
        <div class="item_name text-center font_lilita_one">
            <?= $promocao->descricao_impressao ?>
        </div>
        <div class="item_price_from_price">
            <?= number_format($promocao->VlrVenda, 2, ',', '.') ?>
            <span class="price_from_unit_desc"><?= $promocao['un_medida'] ?></span>
        </div>
        <div class="item_descont_desc">
            <span class="impact">No Clube</span>
        </div>
    </div>

    <div class="item_price">
        <div class="item_price_inner">
            <div class="item_price_to">
                <div class="item_price_to_price">
                    <?= number_format($promocao->precoclube, 2, ',', '.') ?>
                    <span class="price_to_unit_desc"><?= $promocao['un_medida'] ?></span>
                </div>
            </div>
            <div class="desconto_desc font_lilita_one">
                Desconto por cliente em at&eacute;
                <?= $promocao->limite ?><?= empty($promocao['un_medida']) ? $promocao->unidade : "" ?>
            </div>
        </div>
    </div>
</div>