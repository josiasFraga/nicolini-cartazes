<div class="item_container">

    <div class="space_top"></div>

    <div class="item_container_whithout_space_top">

        <div class="item_header <?= $dados_loja['class'] ?>">
            <?= $this->Html->image('livramentonormal/' . $dados_loja['logo'], ['fullBase' => true]); ?>
        </div>
        
        <div class="item_name text-center font_lilita_one">
            <?= $promocao->descricao_impressao ?>
        </div>

        <div class="item_price_from_and_pack_container">
            <div class="item_price_from">
                <span class="font_lilita_one">Pre&ccedil;o <br> Unit&aacute;rio</span>
                <div class="item_price_from_price font_lilita_one">
                    <?= number_format($promocao->VlrVenda, 2, ',', '.') ?>
                </div>
            </div>

            <div class="item_price_from_pack">
                <div class="item_price_from_pack_desc impact">
                    <?= $promocao->qtdgatilho ?>
                    <br />ou
                    <br />+
                    <br /><span><?= $promocao['un_medida'] ?></span>
                </div>
                <div class="item_price_from_pack_price font_lilita_one">
                    <?= number_format($promocao->PrFinalDesconto, 2, ',', '.') ?>
                    <span><?= $promocao['un_medida'] ?></span>
                </div>
            </div> 
        </div>   

        <div class="item_price">
            <div class="item_price_to">
                <div class="item_price_to_price font_lilita_one">
                    <?= number_format($promocao->PrFinalDesconto * $promocao->qtdgatilho, 2, ',', '.') ?>
                    <span>Embalagem c/<?= $promocao->qtdgatilho ?> <?= $promocao['un_medida'] ?></span>
                </div>
            </div>
        </div>

    </div>
</div>