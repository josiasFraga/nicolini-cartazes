<div class="item_container <?= $dados_loja['class'] ?> <?= $promocao->horti == "-1" ? "horti" : "" ?>">

    <div class="space_top"></div>

    <div class="item_header <?= $dados_loja['class'] ?>">
        <?= $this->Html->image('logos/logo_nicolini.png', ['fullBase' => true]) ?>
    </div>

    <div class="item_name text-center font_lilita_one">
        <?= $promocao->descricao_impressao ?>
    </div>

    <div class="item_price">
        <div class="item_price_to">
            <div class="item_price_to_price font_lilita_one">
                <div class="item_price_to_price_currency">R$</div>
                <?= number_format($promocao->VlrVenda, 2, ',', '.') ?>
                <span class="price_to_unit_desc"><?= $promocao['un_medida'] ?></span>
            </div>
        </div>
    </div>
</div>