<div class="item_container">

    <div class="space_top"></div>

    <div class="item_header">
        <?= $this->Html->image('cashback/' . $dados_loja['logo'], ['fullBase' => true]); ?>
    </div>

    <div class="item_name_price">
        <div class="item_name text-center font_lilita_one">
            <?= $promocao->descricao_impressao ?>
        </div>
        <div class="item_price_from_price">
            <?= number_format($promocao->VlrVenda, 2, ',', '.') ?>
        </div>
    </div>

    <div class="item_price">
        <div class="item_price_inner">
            <div class="desconto_desc">
                <?= $this->Html->image('cashback/ri_2.png', ['fullBase' => true]); ?>
            </div>
            <div class="item_price_to">
                <div class="item_price_to_price">
                    <?= number_format(($promocao->VlrVenda * 0.1) - 0.009, 2, ',', '.') ?>
                </div>
            </div>
            <div class="desconto_desc">
                De retorno<br> no App    
            </div>
        </div>
    </div>
</div>