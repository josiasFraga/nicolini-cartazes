<div class="item_container">

    <div class="space_top"></div>

    <div class="item_header">
        <?= $this->Html->image('normal/' . $dados_loja['logo'], ['fullBase' => true]); ?>
    </div>

    <div class="item_name_price">
        <div class="item_name text-center font_lilita_one">
            <?= $promocao->descricao_impressao ?>
        </div>
        <div class="item_price_from_price">
            <?= number_format($promocao->VlrVenda, 2, ',', '.') ?>
        </div>
        <div class="item_descont_desc">
            <span class="font_lilita_one">A partir de <?= $promocao->qtdgatilho ?> <?= $promocao['un_medida'] ?></span>
        </div>
    </div>

    <div class="item_price">
        <div class="item_price_to">
            <div class="item_price_to_price">
                <?= number_format($promocao->PrFinalDesconto, 2, ',', '.') ?>
            </div>
        </div>
    </div>
</div>