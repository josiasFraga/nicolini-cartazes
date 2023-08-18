<div class="item_container">

    <div class="space_top"></div>

    <div class="item_header">
        <?= $this->Html->image('depor/' . $dados_loja['logo'], ['fullBase' => true]); ?>
    </div>
    
    <div class="item_name_price">
        <div class="item_name text-center font_lilita_one">
            <?= $promocao->descricao_impressao ?>
        </div>
        <div class="bs_row">
            <div class="item_price_from col text-center">
                <div class="item_price_from_price font_lilita_one">
                    <?= number_format($promocao->VlrVenda, 2, ',', '.') ?>
                </div>
                <span class="font_lilita_one">un</span>
            </div>
            <div class="item_price_from col text-center">
                <div class="item_price_from_price font_lilita_one">
                    <?= number_format($promocao->VlrVenda * $promocao->qtdgatilho, 2, ',', '.') ?>
                </div>
                <span class="font_lilita_one">caixa c/ <?= $promocao->qtdgatilho ?>un</span>
            </div>
        </div>
    </div>

    <div class="item_price">
        <?= $this->Html->image('clube/ri_3.png', ['fullBase' => true]); ?>

        <div class="item_price_to_bg">
            <div class="item_price_to">
                <div class="item_price_to_price font_lilita_one content-start">
                    <?= number_format($promocao->precoclube, 2, ',', '.') ?>
                </div>
                    <div class="font_lilita_one price_desc">un</div>
            </div>
            <div class="item_price_to">
                <div class="item_price_to_price font_lilita_one content-end">
                    <?= number_format($promocao->precoclube * $promocao->qtdgatilho, 2, ',', '.') ?>
                <div class="font_lilita_one price_desc">caixa c/ <?= $promocao->qtdgatilho ?>un</div>
                </div>
            </div>
        </div>
        <div class="font_lilita_one text-center limite_desc">Desconto por cliente de até <?= $promocao->limite ?>un (<?= $promocao->limite/$promocao->qtdgatilho ?> caixas)</div>
    </div>
</div>