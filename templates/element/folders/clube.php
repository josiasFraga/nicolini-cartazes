<div class="item_container">
    <div class="item_header">
        <?= $this->Html->image('clube/' . $dados_loja['logo'], ['fullBase' => true]); ?>
    </div>

    <div class="item_name_price">
        <div class="item_name text-center font_lilita_one">
            <?= $promocao->descricao_impressao ?>
        </div>
        <div class="item_price_from_price">
            <?= number_format($promocao->VlrVendaNormal, 2, ',', '.') ?>
        </div>
    </div>
    <div class="item_price">
        <div class="item_price_inner">
            <div class="desconto_desc">
            <?= $dados_loja['nome'] == 'Nicolini' ? $this->Html->image('clube/ri_3_nicolini.png', ['fullBase' => true]) : $this->Html->image('clube/ri_3.png', ['fullBase' => true]); ?>
            DESCONTO POR<br> CLIENTE EM AT&Eacute;<br>
            <?= $promocao->limite ?>
            </div>
            <div class="item_price_to">
                <div class="item_price_to_price">
                    <?= number_format($promocao->precoclube, 2, ',', '.') ?>
                </div>
            </div>
        </div>
    </div>
</div>