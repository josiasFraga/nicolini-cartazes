<!DOCTYPE html>
<html>
<head>
<title><?= $dimensoes_cartaz['label'] ?></title>
<?= $this->Html->css('normalize.min.css', ['fullBase' => true]); ?>
<style>
<?php
$item_container_width = ($dimensoes_cartaz['w']/2) - 2.2;
$item_container_height = ($dimensoes_cartaz['h']/3) - 2;

$arr_page_config = [
    'A3' => [
        'font_size' => '60px',
        'itens_per_page' => 1,
        'itens_per_line' => 1,
        //'orientation' => 'landscape'
    ],
    'A4' => [
        'font_size' => '40px',
        'itens_per_page' => 1,
        'itens_per_line' => 1,
        //'orientation' => 'landscape'
    ],
    'A5' => [
        'font_size' => '22px',
        'itens_per_page' => 2,
        'itens_per_line' => 1,
    ],
    'A6' => [
        'font_size' => '14px',
        'itens_per_page' => 6,
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
    src: url('<?= $this->Url->webroot('font/LilitaOne-Regular.ttf') ?>') format('truetype');
}
@media print {
  .no_print {
    display: none;
  }
}

*{font-size: <?= $arr_page_config[$tamanhoCartaz]['font_size'] ?>; padding: 0 !important} 

img{max-width: 100% !important; }

body, html {
    /*height: <?= $dimensoes_cartaz['h'] ?>mm;*/
    /*width: <?= $dimensoes_cartaz['w'] ?>mm;*/
}
body {
    margin: 0;
    padding: 0;
}
.font_lilita_one {
    font-family: 'Lilita One', sans-serif !important;
}

.montserrat {
    font-family: "Montserrat", sans-serif !important;
}

.impact {
    font-family: "Impact" !important;
}

.text-center { 
    text-align: center;
}


/* --------------A3--------------------- */
.page.A3 {
    height: <?= $dimensoes_cartaz['w'] ?>mm;
    width: <?= $dimensoes_cartaz['h'] ?>mm;
    page-break-after: always;
}

.page.A3 .space_top{

}

.page.A3 .row { 
    height: <?= $dimensoes_cartaz['w'] ?>mm;
    width: <?= $dimensoes_cartaz['h'] ?>mm;
    position: relative;
    display: flex;
    flex-direction: row;
    /*background-color: yellow*/
}
.page.A3 .row .item_container { 
    border: 2px solid #000; 
    height: <?= $dimensoes_cartaz['w'] ?>mm; 
    width: <?= $dimensoes_cartaz['h'] ?>mm; 
    border-collapse: collapse;
    display: flex;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    flex-direction: column;

}
.page.A3 .row .item_container .item_header img { 
    width: auto;
    height: 80%;

}


/* --------------A4--------------------- */
.page.A4 {
    height: <?= $dimensoes_cartaz['h'] ?>mm;
    width: <?= $dimensoes_cartaz['w'] ?>mm;
    page-break-after: always;
}

.page.A4 .space_top{

}

.page.A4 .row { 
    height: <?= $dimensoes_cartaz['h'] ?>mm;
    width: <?= $dimensoes_cartaz['w'] ?>mm;
    position: relative;
    display: flex;
    flex-direction: row;
    /*background-color: yellow*/
}
.page.A4 .row .item_container { 
    border: 2px solid #000; 
    width: <?= $dimensoes_cartaz['w'] ?>mm; 
    height: <?= $dimensoes_cartaz['h'] ?>mm; 
    border-collapse: collapse;
    display: flex;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    flex-direction: column;

}
.page.A4 .row .item_container .item_header img { 
    width: auto;
    height: 80%;

}

/* --------------A5--------------------- */
.page.A5 {
    height: <?= $dimensoes_cartaz['h'] ?>mm;
    width: <?= $dimensoes_cartaz['w'] ?>mm;
    page-break-after: always;
}

.page.A5 .space_top{
    height: 20mm;
    border-bottom: 1px dashed #000;
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

.page.A6 .space_top{
    height: 20mm;
    border-bottom: 1px dashed #000;
}

.page.A6 .row { 
    height: 33%;
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

.item_price_from{ 
    display: flex;
    font-family: "Montserrat", sans-serif;
    flex-direction: row;
    align-content: center;
    align-items: center;
    flex: 2;
    justify-content: center;
    
}

.item_price_from span{ 
    font-size: 2em
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

.item_price_to span{ 
    font-size: 2em;
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

/* --------------DE POR --------------- */
.page.A3.de-por .item_header,
.page.A4.de-por .item_header{
    height: 14%;
}
.page.A3.de-por .item_price_from,
.page.A4.de-por .item_price_from {
    flex: inherit
}

.page.A3.de-por .item_price_from span,
.page.A4.de-por .item_price_from span {
 font-size: 1em;
 font-weight: 800;
 margin-right: 20px;
}

.page.A3.de-por .item_name_price,
.page.A4.de-por .item_name_price{
    height: 43%;
    flex-direction: column;
    justify-content: space-around;
}

.page.A3.de-por .item_name,
.page.A4.de-por .item_name{
    font-size: 1.6em
}

.page.A3.de-por .item_price_from_price,
.page.A4.de-por .item_price_from_price{
    background-image: none;
}

.page.A3.de-por .item_price,
.page.A4.de-por .item_price{
    height: 43%;
}

.page.A3.de-por .item_price_to,
.page.A4.de-por .item_price_to{
    background-image: url("<?= $this->Url->image('depor/ri_2.png') ?>");
    background-repeat: no-repeat;
    background-size: 95% 100%;
    background-position: center center;
}

.page.A3.de-por .item_price_to span,
.page.A4.de-por .item_price_to span{
    font-size: 1.2em;
    font-weight: 800;
    margin-left: 10px
}

.page.A3.de-por .item_price_to_price,
.page.A4.de-por .item_price_to_price{
    font-size: 5em;
    background-image: none;
    flex: 1
}

/* ----------DATA CURTA---------------- */
.page.data-curta .item_header img { max-width: 50% !important; margin: 0 auto !important}

.data-curta .item_price_from{
    flex-direction: column
}

.page.data-curta .item_price_from span{
    font-size: 1.5em;
}

.page.data-curta .item_price_to {
    flex-direction: column
}

.page.data-curta .item_price_to span{
    font-size: 1.5em;
}

.page.A3.data-curta .item_name,
.page.A4.data-curta .item_name{
    height: 50%;
}

.page.A3.data-curta .item_header,
.page.A4.data-curta .item_header{
    height: 10%;
}

.page.A3.data-curta .item_price,
.page.A4.data-curta .item_price{
    height: 40%;
}

.page.A3.data-curta .item_header img,
.page.A4.data-curta .item_header img{
    max-width: 100% !important;
    margin-top: 5mm !important;
}


.page.A5.data-curta .item_header img,
.page.A6.data-curta .item_header img { margin-top: 0.5cm !important}

/* ----------NORMAL---------------- */
.page.normal .item_name{
    height: 20%;
    font-size: 1.8em;
}

.page.normal .item_price{
    height: 60%
}

.page.normal .item_price_to_price{
    font-size: 9em
}

.page.A3.normal .item_name,
.page.A4.normal .item_name{
    height: 36%;

}

.page.A3.normal .item_header,
.page.A4.normal .item_header{
    height: 14%;
}

.page.A3.normal .item_price,
.page.A4.normal .item_price{
    height: 50%;
}

.page.A3.normal .item_price_to_price,
.page.A4.normal .item_price_to_price{
    font-size: 6.5em
}

/* ----------DESCONTO QTD MIN------- */
.page.desconto-qtd-min .item_name_price{
    height: 20%;
}

.page.desconto-qtd-min .item_name{
    font-size: 1.8em;
    height: auto;
    flex: 6;
}

.page.desconto-qtd-min .item_price{
    height: 60%
}

.page.desconto-qtd-min .item_price_to_price{
    font-size: 9em;
    margin-left: 0px;
    position: relative;
}

.page.desconto-qtd-min .item_price_from_price{
    background-image: none;
    justify-content: flex-end;
    margin-right: 10px;
    margin-left: 10px;
}

.page.desconto-qtd-min .item_price_to span{
    font-size: 0.15em;
}

.page.A3.desconto-qtd-min .item_header,
.page.A4.desconto-qtd-min .item_header{
    height: 14%;
}

.page.A3.desconto-qtd-min .item_name_price,
.page.A4.desconto-qtd-min .item_name_price{
    height: 43%;
    flex-direction: column;
    justify-content: space-around;
}

.page.A3.desconto-qtd-min .item_name,
.page.A4.desconto-qtd-min .item_name{
    flex: inherit;
}

.page.A3.desconto-qtd-min .item_price_from_price,
.page.A4.desconto-qtd-min .item_price_from_price{
    font-size: 2.7em;
    align-items: center;
}

.page.A3.desconto-qtd-min .item_price,
.page.A4.desconto-qtd-min .item_price{
    height: 43%;
}

.page.A3.desconto-qtd-min .item_descont_desc span,
.page.A4.desconto-qtd-min .item_descont_desc span{
    font-size: 1.7em;
}

.page.A3.desconto-qtd-min .item_price_to_price,
.page.A4.desconto-qtd-min .item_price_to_price{
    font-size: 6em;
}


/* ----------CLUBE------------------ */

.page.A5.clube {
    width: <?= $dimensoes_cartaz['w'] - 2 ?>mm !important;
}

.page.A5.clube .row { 
    width: <?= $dimensoes_cartaz['w'] - 2 ?>mm !important;
}
.page.A5.clube .row .item_container {     
    width: <?= $dimensoes_cartaz['w'] - 2 ?>mm !important;
}

.page.A6.clube {
    width: <?= $dimensoes_cartaz['w'] - 2 ?>mm !important;
}

.page.A6.clube .row { 
    width: <?= $dimensoes_cartaz['w'] - 2 ?>mm !important;
}
.page.A6.clube .row .item_container {     
    width: <?= $dimensoes_cartaz['w'] - 2 ?>mm !important;
}



.page.clube .item_price_to_price {
    width: 100%;
    justify-content: center;
}

.page.clube .item_name {
    font-size: 2em;
    display: flex;
    height: auto;
    flex: 6;
}
.page.clube .item_price_inner{
    border: 6px solid red;
    display: flex;
    flex-direction: row;
    width: 99%;
    height: 97%;
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

.page.clube .item_price_to {
    flex: 1
}

.page.A3.clube .item_header,
.page.A4.clube .item_header{
    height: 14%;
}

.page.A3.clube .item_name_price,
.page.A4.clube .item_name_price{
    height: 50%;
    flex-direction: column;
    justify-content: space-between;
}

.page.A3.clube .item_name,
.page.A4.clube .item_name{
    flex: inherit;
}

.page.A3.clube .item_price_from_price,
.page.A4.clube .item_price_from_price{
    font-size: 2.7em;
    align-items: center;
}

.page.A3.clube .item_price,
.page.A4.clube .item_price{
    height: 36%;
}

.page.A3.clube .item_descont_desc span,
.page.A4.clube .item_descont_desc span{
    font-size: 2.7em;
    font-weight: 800
}

.page.A3.clube .item_price_inner,
.page.A4.clube .item_price_inner{
    background-color: red;
    width: 95%;
    height: 90%;
    border-radius: 30px;
    border: 6px solid black;
    flex-direction: column;
}

.page.A3.clube .item_price_to_price,
.page.A4.clube .item_price_to_price{
    font-size: 6em;
    background-image: none;
    color: white;
}

.page.A3.clube .desconto_desc,
.page.A4.clube .desconto_desc{
    font-size: 0.8em;
    color: white;
}


/* ----------CASHBACK------------------ */
.page.cashback .item_price_from_price{
    background-image: none;
    margin-left: 15px;
    margin-right: 15px;
    font-size: 2.5em
}


.page.cashback .item_price_inner{
    flex-direction: row;
    display: flex;
    background-color: red;
    width: 98%;
    height: 95%;
}
.page.cashback .desconto_desc{
    display: flex;
    flex: 2;
    justify-content: center;
    color: white;
}
.page.cashback .desconto_desc img{
    width: 90%;
    align-self: center;
}

.page.cashback .item_price_to{
    flex: 3
}

.page.cashback .item_price_to_price{
    font-size: 5.5em;
    color: white;
    background-image: none;
}

.page.A3.cashback .item_name,
.page.A4.cashback .item_name{
    height: 50%;

}

.page.A3.cashback .item_header,
.page.A4.cashback .item_header{
    height: 14%;
}

.page.A3.cashback .item_price,
.page.A4.cashback .item_price{
    height: 36%;
}

.page.A3.cashback .item_name,
.page.A4.cashback .item_name{
    font-size: 2em
}

.page.A3.cashback .item_price_to_price,
.page.A4.cashback .item_price_to_price{
    font-size: 3em
}

/* --------------LEVE X PAGUE Y --------------- */
.page.leve-x-pague-y .promo_desc{
    color: red;
    font-size: 2em;
}

.page.leve-x-pague-y .item_price_to{
    background-image: url("<?= $this->Url->image('depor/ri_2.png') ?>");
    background-repeat: no-repeat;
    background-size: 95% 100%;
    background-position: center center;
    flex-direction: column;
}

.page.leve-x-pague-y .item_price_from_price{
    background-image: none;
    margin-right: 15px;
    margin-left: 15px;
}

.page.A3.leve-x-pague-y .item_header,
.page.A4.leve-x-pague-y .item_header{
    height: 14%;
}
.page.A3.leve-x-pague-y .item_price_from,
.page.A4.leve-x-pague-y .item_price_from {
    flex: inherit
}

.page.A3.leve-x-pague-y .item_price_from span,
.page.A4.leve-x-pague-y .item_price_from span {
 font-size: 1em;
 font-weight: 800;
 margin-right: 20px;
}

.page.A3.leve-x-pague-y .item_name_price,
.page.A4.leve-x-pague-y .item_name_price{
    height: 43%;
    flex-direction: column;
    justify-content: space-around;
}

.page.A3.leve-x-pague-y .item_name,
.page.A4.leve-x-pague-y .item_name{
    font-size: 1.6em
}

.page.A3.leve-x-pague-y .item_price,
.page.A4.leve-x-pague-y .item_price{
    height: 43%;
}

.page.A3.leve-x-pague-y .item_price_to span,
.page.A4.leve-x-pague-y .item_price_to span{
    font-size: 1.2em;
    font-weight: 800;
    margin-left: 10px
}

.page.A3.leve-x-pague-y .item_price_to_price,
.page.A4.leve-x-pague-y .item_price_to_price{
    font-size: 5em;
    background-image: none;
    flex: 1
}

/* --------------LEVE X PAGUE Y TIPO 2 --------------- */

.page.leve-x-pague-y-tipo-2 .promo_desc{
    color: white;
    font-size: 2em;
}

.page.leve-x-pague-y-tipo-2 .item_price_to{
    background-image: none;
    background-repeat: no-repeat;
    background-color: red;
    flex-direction: column;
    height: 100%;
}

.page.leve-x-pague-y-tipo-2 .item_price_from_price{
    background-image: none;
    margin-right: 15px;
    margin-left: 15px;
    font-size: 3em;
}

.page.leve-x-pague-y-tipo-2 .promo_desc_destaque{
    color: white;
    font-size: 1.5em;
    
}

.page.leve-x-pague-y-tipo-2 .promo_desc_destaque h1{
    text-transform: uppercase;
    margin-bottom: 5px;
    font-size: 1.6em;
    margin-top: 15px

}

.page.A6 

.page.A3.leve-x-pague-y-tipo-2 .item_header,
.page.A4.leve-x-pague-y-tipo-2 .item_header{
    height: 14%;
}
.page.A3.leve-x-pague-y-tipo-2 .item_price_from,
.page.A4.leve-x-pague-y-tipo-2 .item_price_from {
    flex: inherit
}

.page.A3.leve-x-pague-y-tipo-2 .item_price_from span,
.page.A4.leve-x-pague-y-tipo-2 .item_price_from span {
 font-size: 1em;
 font-weight: 800;
 margin-right: 20px;
}

.page.A3.leve-x-pague-y-tipo-2 .item_name_price,
.page.A4.leve-x-pague-y-tipo-2 .item_name_price{
    height: 43%;
    flex-direction: column;
    justify-content: space-around;
}

.page.A3.leve-x-pague-y-tipo-2 .item_name,
.page.A4.leve-x-pague-y-tipo-2 .item_name{
    font-size: 1.6em
}

.page.A3.leve-x-pague-y-tipo-2 .item_price,
.page.A4.leve-x-pague-y-tipo-2 .item_price{
    height: 43%;
}

.page.A3.leve-x-pague-y-tipo-2 .item_price_from_price,
.page.A4.leve-x-pague-y-tipo-2 .item_price_from_price{
    color: red;
    font-size: 3em;
}

.page.A3.leve-x-pague-y-tipo-2 .item_price_to span,
.page.A4.leve-x-pague-y-tipo-2 .item_price_to span{
    font-size: 1.2em;
    font-weight: 800;
    margin-left: 10px
}

.page.A3.leve-x-pague-y-tipo-2 .item_price_to_price,
.page.A4.leve-x-pague-y-tipo-2 .item_price_to_price{
    font-size: 5em;
    background-image: none;
    flex: 1
}
.page.A6.leve-x-pague-y-tipo-2 .item_name{
    font-size: 2em
}

</style>
</head>
<body>
<div class="no_print">
    <?= $dimensoes_cartaz['label'] ?>
</div>
<?php $last_folder_type = null; ?>
<?php $counter = 0; ?>
<?php foreach ($gruposTamanhoCartaz as $key => $promocao): ?>

    <?php $tipoCartazSlug = $promocao['tipo_cartaz_slug']; ?>
    <?php $caminho_arquivo = ($tamanhoCartaz == 'A3' || $tamanhoCartaz == 'A4' ) ? "folders/" . $tamanhoCartaz . "/" . $tipoCartazSlug : "folders/" . $tipoCartazSlug; ?>
    <?php  

    if ( $last_folder_type != "" && $last_folder_type != $tipoCartazSlug && $counter % $arr_page_config[$tamanhoCartaz]['itens_per_line'] != 0 ) { 
        echo "</div>";
    } 

    if ( $last_folder_type == "" || $last_folder_type != $tipoCartazSlug ) { 
        echo $counter > 0 ? "</div>" : "";//fecha div page
        $counter = 0; 
        $last_folder_type = $tipoCartazSlug;  
    }
    ?>

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

    <!-- ---------------- -->
    <?php
    echo $this->element($caminho_arquivo, [
        'promocao' => $promocao
    ])
    ?>
    <!-- ---------------- -->
    
    <?php $counter++; ?>
    
    <?php if ($counter % $arr_page_config[$tamanhoCartaz]['itens_per_line'] == 0): ?>
        </div>
    <?php endif; ?>
<?php endforeach; ?>

</div>
</body>
</html>
