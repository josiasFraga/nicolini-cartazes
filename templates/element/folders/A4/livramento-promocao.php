<div class="item_container">

    <div class="space_top"></div>

    <div class="item_header <?= $dados_loja['class'] ?>">
        <?= $this->Html->image('livramentopromocao/' . $dados_loja['logo'], ['fullBase' => true]); ?>
    </div>
    
    <div class="item_name text-center font_lilita_one">
        <?= $promocao->descricao_impressao ?>
    </div>

    <div class="item_price_from">
        <span class="font_lilita_one">Pre&ccedil;o <br> Unit&aacute;rio</span>
        <div class="item_price_from_price font_lilita_one">
            <?= number_format($promocao->VlrVenda, 2, ',', '.') ?>
            <span><?= $promocao['un_medida'] ?></span>
        </div>
    </div>

    <div class="item_price">
        <div class="item_price_to">
            <div class="item_price_to_price font_lilita_one">
                <?= number_format($promocao->VlrVenda * $promocao->qtdgatilho, 2, ',', '.') ?>
                <span>Embalagem c/<?= $promocao->qtdgatilho ?> <?= $promocao['un_medida'] ?></span>
            </div>
        </div>
    </div>
</div>