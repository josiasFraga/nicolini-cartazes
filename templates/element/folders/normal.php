<div class="item_container">
    <div class="item_header">
        <?= $this->Html->image('normal/' . $dados_loja['logo'], ['fullBase' => true]); ?>
    </div>
    <div class="item_name text-center font_lilita_one">
        <?= $promocao->descricao_impressao ?>
    </div>
    <div class="item_price">
        <div class="item_price_to">
            <div class="item_price_to_price">
                <?= number_format($promocao->VlrVenda, 2, ',', '.') ?>
            </div>
        </div>
    </div>
</div>