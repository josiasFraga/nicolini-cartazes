<div class="item_container">

    <div class="space_top"></div>

    <div class="item_container_whithout_space_top">

        <div class="item_header">
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
                        <span class="price_to_unit_desc"><?= $promocao['un_medida'] ?></span>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</div>