<!DOCTYPE html>
<html>
<head>
<title><?= $dimensoes_cartaz['label'] ?></title>
<?= $this->Html->css('normalize.min.css', ['fullBase' => true]); ?>
<style>
<?php
$item_container_width = ($dimensoes_cartaz['w']/2) - 2.2;
$item_container_height = ($dimensoes_cartaz['h']/4) - 2;

$arr_page_config = [
    'A3' => [
        'font_size' => '60px',
        'itens_per_page' => 1,
        'itens_per_line' => 1,
        'orientation' => 'landscape'
    ],
    'A4' => [
        'font_size' => '40px',
        'itens_per_page' => 1,
        'itens_per_line' => 1,
        'orientation' => 'landscape'
    ],
    'A5' => [
        'font_size' => '22px',
        'itens_per_page' => 2,
        'itens_per_line' => 1,
    ],
    'A6' => [
        'font_size' => '14px',
        'itens_per_page' => 8,
        'itens_per_line' => 2,
    ]
];

?>

@page {
    margin: 0px 0px 0px 0px !important;
    padding: 0px 0px 0px 0px !important;
    <?php if ( isset($arr_page_config[$tamanhoCartaz]['orientation']) ): ?>
        size: <?= $arr_page_config[$tamanhoCartaz]['orientation'] ?>
    <?php endif; ?>
}

@font-face {
    font-family: 'Lilita One';
    src: url('<?= $this->Url->webroot('fonts/LilitaOne-Regular.ttf') ?>') format('truetype');
}
@media print {
  .no_print {
    display: none;
  }
}
*{font-size: <?= $arr_page_config[$tamanhoCartaz]['font_size'] ?>; padding: 0 !important} 
body, html {
    height: <?= $dimensoes_cartaz['h'] ?>mm;
    width: <?= $dimensoes_cartaz['w'] ?>mm;
}
body {
    margin: 0;
    padding: 0;
}
.font_lilita_one {
    font-family: 'Lilita One', sans-serif;
}

.text-center { 
    text-align: center;
}


/* --------------A3--------------------- */
.page.A3 {
    height: <?= $dimensoes_cartaz['h'] ?>mm;
    width: <?= $dimensoes_cartaz['w'] ?>mm;
    page-break-after: always;
}
.page.A3 .row { 
    height: <?= $dimensoes_cartaz['h'] ?>mm;
    width: <?= $dimensoes_cartaz['w'] ?>mm;
    position: relative;
    display: flex;
    flex-direction: row;
    /*background-color: yellow*/
}
.page.A3 .row .item_container { 
    border: 2px solid #000; 
    width: <?= $dimensoes_cartaz['w'] ?>mm; 
    height: <?= $dimensoes_cartaz['h'] ?>mm; 
    border-collapse: collapse;
    display: flex;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    flex-direction: column;

}


/* --------------A4--------------------- */
.page.A4 {
    height: <?= $dimensoes_cartaz['w'] ?>mm;
    width: <?= $dimensoes_cartaz['h'] ?>mm;
    page-break-after: always;
}
.page.A4 .row { 
    height: <?= $dimensoes_cartaz['w'] ?>mm;
    width: <?= $dimensoes_cartaz['h'] ?>mm;
    position: relative;
    display: flex;
    flex-direction: row;
    /*background-color: yellow*/
}
.page.A4 .row .item_container { 
    border: 2px solid #000; 
    width: <?= $dimensoes_cartaz['h'] ?>mm; 
    height: <?= $dimensoes_cartaz['w'] ?>mm; 
    border-collapse: collapse;
    display: flex;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    flex-direction: column;

}


/* --------------A5--------------------- */
.page.A5 {
    height: <?= $dimensoes_cartaz['h'] ?>mm;
    width: <?= $dimensoes_cartaz['w'] ?>mm;
    page-break-after: always;
}
.page.A5 .row { 
    height: <?= ($dimensoes_cartaz['h']/2) - 1 ?>mm;
    width: <?= $dimensoes_cartaz['w'] ?>mm;
    position: relative;
    display: flex;
    flex-direction: row;
    margin-bottom: 1mm
    /*background-color: yellow*/
}
.page.A5 .row .item_container { 
    border: 2px solid #000; 
    width: <?= $dimensoes_cartaz['w'] ?>mm; 
    height: 100%; 
    border-collapse: collapse;
    display: flex;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    flex-direction: column;

}

/* --------------A6--------------------- */
.page.A6 {
    height: <?= $dimensoes_cartaz['h'] ?>mm;
    width: 100%;
    page-break-after: always;
}
.page.A6 .row { 
    height: 25%;
    width: <?= $dimensoes_cartaz['w'] ?>mm;
    position: relative;
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    /*background-color: yellow*/
}
.page.A6 .row .item_container { 
    border: 2px solid #000; 
    width: <?= $item_container_width ?>mm; 
    height: <?= $item_container_height ?>mm; 
    border-collapse: collapse;
    display: flex;
    margin-right: 0.5mm;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    margin-bottom: 1mm;
    flex-direction: column;

}
.item_header { height: 20%; width: 100%; display: flex; flex: 1; }
.item_header img { <?= $dados_loja['logo_style'] ?> }
.page.data-curta .item_header img { max-width: 40% !important; margin: 0 auto !important}

.item_name_price{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-content: center;
    align-items: center;
    height: 40%;
}

.item_name {
    text-align: center; 
    font-weight: 800; 
    font-size: 2.5em;
    height: 40%;
    display: flex;
    justify-content: center;
    align-content: center;
    align-items: center;
}

.page.clube .item_name {
    font-size: 2em;
    display: flex;
    height: auto;
    flex: 6;
}
.page.normal .item_name{
    height: 20%;
    font-size: 1.8em;
}
.page.desconto-qtd-min .item_name{
    height: 20%;
    font-size: 1.8em;

}

.item_price { 
    text-align: center; 
    font-weight: bold;
    width: 100%;
    height: 40%;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;

}

.page.normal .item_price{
    height: 60%
}

.page.desconto-qtd-min .item_price{
    height: 60%
}
.page.clube .item_price_inner{
    border: 6px solid red;
    display: flex;
    flex-direction: row;
    width: 99%;
    height: 97%;
}
.item_price_from{ 
    display: flex;
    font-family: "Montserrat", sans-serif;
    flex-direction: row;
    align-content: center;
    align-items: center;
    flex: 2;
    justify-content: center;
    
}

.data-curta .item_price_from{
    flex-direction: column
}

.item_price_from span{ 
    font-size: 2em
}

.page.data-curta .item_price_from span{
    font-size: 1.5em;
}

.item_price_from_price{
    margin-left: 5px;
    padding-left: 7px;
    padding-right: 7px; 
    display: flex;
    background-image: url("<?= $this->Url->image('depor/ri_2.png') ?>");
    background-repeat: no-repeat;
    background-size: cover;
    font-size:2em;
    font-family: "Impact";
}

.page.clube .item_price_from_price{
    background-image: none;
    background-repeat: no-repeat;
    background-size: cover;
    font-size:2em;
    font-family: "Impact";
    flex: 2;
    justify-content: end;

}

.item_price_to{ 
    display: flex;
    /*width: 60%;*/
    font-family: "Montserrat", sans-serif;
    flex-direction: row;
    align-content: center;
    align-items: center;
    flex: 3;
    justify-content: center;
    
}

.page.clube .item_price_to {
    flex: 1
}

.page.data-curta .item_price_to {
    flex-direction: column
}

.item_price_to span{ 
    font-size: 2em;
}

.page.data-curta .item_price_to span{
    font-size: 1.5em;
}

.item_price_to_price{
    margin-left: 5px;
    padding-left: 7px;
    padding-right: 7px;
    font-size: 4em;
    color: red;    
    display: flex;
    background-image: url("<?= $this->Url->image('depor/ri_2.png') ?>");
    background-repeat: no-repeat;
    background-size: 100% 100%;
    font-weight: 700;
    background-position: center center;
    flex-direction: column
}

.page.clube .item_price_to_price {
    width: 100%;
    justify-content: center;
}

.page.normal .item_price_to_price{
    font-size: 9em
}

.page.desconto-qtd-min .item_price_to_price{
    font-size: 9em;
    margin-left: 0px;
    position: relative;
}

.item_price_to_price span{
    font-size: 0.15em;
    width: 100%;
    text-align: center;
    padding: 0 !important;
    margin-bottom: 0 !important;
    margin-top: 10px;
    font-weight: 800;
    position: absolute;
    display: flex;
    justify-content: center;
    top: -15px
}

.desconto_desc{
    display: flex;
    flex: 1;
    flex-direction: column;
    font-family: "Montserrat", sans-serif;
    justify-content: center;
}

.item_price img{
    display: flex;
    align-self: flex-start;
    width: 100%;
}

.no_print{
    width: <?= $dimensoes_cartaz['w'] ?>mm;
    padding-top: 20px;
    padding-bottom: 20px;
    font-weight: bold;
    font-size: 2em;
    text-align: center;
    text-transform: uppercase;
    font-size: 35px
}
</style>
</head>
<body>
<div class="no_print">
    <?= $dimensoes_cartaz['label'] ?>
</div>
<?php $counter = 0; ?>
<?php foreach ($promocoesGrupo as $key => $promocao): ?>
    <?php if ($counter == 0): ?>
        <div class="page <?= $tamanhoCartaz.' '.$tipoCartazSlug ?>">
    <?php endif; ?>

    <?php if ($counter % $arr_page_config[$tamanhoCartaz]['itens_per_page'] == 0 && $counter != 0): ?>
        </div>
        <div class="page <?= $tamanhoCartaz.' '.$tipoCartazSlug ?>">
    <?php endif; ?>

    <?php if ($counter % $arr_page_config[$tamanhoCartaz]['itens_per_line'] == 0): ?>
        <div class="row">
    <?php endif; ?>

    
    <?php $counter++; ?>
    
    <?php if ($counter % $arr_page_config[$tamanhoCartaz]['itens_per_line'] == 0): ?>
        </div>
    <?php endif; ?>
<?php endforeach; ?>

</div>
</body>
</html>
