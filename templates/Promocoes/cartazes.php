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
    'A1' => [
        'font_size' => 'inherit',
        'itens_per_page' => 1,
        'itens_per_line' => 1,
        //'orientation' => 'landscape'
    ],
    'A1H' => [
        'font_size' => 'inherit',
        'itens_per_page' => 1,
        'itens_per_line' => 1,
        'orientation' => 'landscape'
    ],
    'A3' => [
        'font_size' => 'inherit',
        'itens_per_page' => 1,
        'itens_per_line' => 1,
        //'orientation' => 'landscape'
    ],
    'A3H' => [
        'font_size' => 'inherit',
        'itens_per_page' => 1,
        'itens_per_line' => 1,
        'orientation' => 'landscape'
    ],
    'A3HD' => [
        'font_size' => 'inherit',
        'itens_per_page' => 1,
        'itens_per_line' => 1,
        'orientation' => 'landscape'
    ],
    'A4' => [
        'font_size' => 'inherit',
        'itens_per_page' => 1,
        'itens_per_line' => 1,
        //'orientation' => 'landscape'
    ],
    'A4H' => [
        'font_size' => 'inherit',
        'itens_per_page' => 1,
        'itens_per_line' => 1,
        'orientation' => 'landscape'
    ],
    'A5' => [
        'font_size' => 'inherit',
        'itens_per_page' => 2,
        'itens_per_line' => 1,
    ],
    'A6' => [
        'font_size' => 'inherit',
        'itens_per_page' => 6,
        'itens_per_line' => 2,
    ]
];

?>

@page {
    margin: 0 !important;
    padding: 0 !important;
    <?php if ( isset($arr_page_config[$tamanhoCartaz]['orientation']) ): ?>
        size: <?= $arr_page_config[$tamanhoCartaz]['orientation'] ?>
    <?php endif; ?>
}

@font-face {
    font-family: 'Lilita One';
    src: url('<?= $this->Url->webroot('font/LilitaOne-Regular.ttf') ?>') format('truetype');
}
@font-face {
    font-family: 'Lilita One 2';
    src: url('<?= $this->Url->webroot('font/lilita-one.ttf') ?>') format('truetype');
}
@media print {
  .no_print {
    display: none;
  }
}

*{font-size: <?= $arr_page_config[$tamanhoCartaz]['font_size'] ?>; padding: 0 !important} 

img{max-width: 100% !important; }

body, html {
    
    margin: 0 !important;
    padding: 0 !important;
    /*height: <?= $dimensoes_cartaz['h'] ?>mm;*/
    /*width: <?= $dimensoes_cartaz['w'] ?>mm;*/
}

div.cents{ 
    font-size: 0.7em; 
    margin-top: 0.05em;
}

div.definitive-price-container{
    display: flex;
    flex-direction: row;
    justify-content: center;
}

.page-break { page-break-after: always; }

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

.text-left { 
    text-align: center !important;
}

.content-start {
    align-items: start;
}

.content-end {
    align-items: end;
}

.bs_row{ display: flex; flex-direction: row; width: 100%; }

.col{ display: flex !important; flex: 1 !important }

.w-100{ width: 100%;}

.page span.price_from_unit_desc {
    font-size: 0.3em;
    display: flex;
    justify-content: right;
    margin-right: 0;
}

.page span.price_to_unit_desc {
    font-size: 0.2em;
    position: relative;
    justify-content: right;
    margin-top: 10px;
    display: flex;
}

/* --------------A1--------------------- */
.page.A1 {
    height: <?= $dimensoes_cartaz['h'] ?>mm;
    width: <?= $dimensoes_cartaz['w'] ?>mm;
    page-break-after: always;
    /*background-color: yellow;*/
}


.page.A1 .row { 
    height: <?= $dimensoes_cartaz['h'] ?>mm;
    width: <?= $dimensoes_cartaz['w'] ?>mm;
    position: relative;
    display: flex;
    flex-direction: row;
    /*background-color: yellow;*/
}

.page.A1 .row .item_container { 
    height: <?= $dimensoes_cartaz['h'] ?>mm; 
    width: <?= $dimensoes_cartaz['w'] ?>mm;
    display: flex;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    flex-direction: column;
    /*background-color: yellow;*/
}

.page.A1H.a1_horizontal {
    height: auto;
    width: auto;
    page-break-after: unset;
    /*background-color: yellow;*/
}

.page.A1H.a1_horizontal .row { 
    height: <?= $dimensoes_cartaz['w'] ?>mm;
    width: <?= $dimensoes_cartaz['h'] ?>mm;
    position: relative;
    display: flex;
    flex-direction: row;
    /*background-color: yellow;*/
}

.page.A1H.a1_horizontal .row .item_container { 
    height: <?= $dimensoes_cartaz['w'] ?>mm; 
    width: <?= $dimensoes_cartaz['h'] ?>mm;
    display: flex;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    flex-direction: column;
    page-break-after: always;
    /*background-color: yellow;*/
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
    height: 100%;
    margin-top: 0;
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

.page.A5 .row .item_container .item_container_whithout_space_top {
    height: <?= ($dimensoes_cartaz['h']/2) - 1 - 20 ?>mm
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
    height: <?= ($dimensoes_cartaz['h']/3) - 1 ?>mm;
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

.page.A6 .row .item_container .item_container_whithout_space_top {
    height: <?= $item_container_height - 2 - 20 ?>mm
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
    font-weight: lighter;
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
.page.A3.de-por .engenho,
.page.A3.de-por .nicolini,
.page.A3.de-por .atacadao {
    font-size: 60px;
}

.page.A4.de-por .engenho,
.page.A4.de-por .nicolini,
.page.A4.de-por .atacadao {
    font-size: 40px;
}

.page.de-por .item_price_from_price {
    flex-direction: column;
}

.page.de-por.A3 span.price_from_unit_desc, .page.de-por.A4 span.price_from_unit_desc {
    font-size: 0.3em !important;
    display: flex;
    justify-content: right;
    margin-right: 0 !important;
    margin-top: 0 !important;
}

.page.A5.de-por .item_price_to_price span.price_to_unit_desc {
    font-size: 0.2em;
}

.page.A5.de-por .price_from_unit_desc {
    font-size: 0.2em !important;

}

.page.de-por .item_price_to_price {
    flex-direction: column;
}

.page.de-por.A3 span.price_to_unit_desc, .page.de-por.A4 span.price_to_unit_desc {
    font-size: 0.2em !important;
    position: relative;
    justify-content: right;
    margin-right: 0 !important;
    margin-top: 0 !important;
}

.page.A3.de-por .item_header,
.page.A4.de-por .item_header{
    height: 14%;
}
.page.A3.de-por .item_price_from,
.page.A4.de-por .item_price_from {
    flex: inherit;
    flex-direction: column;
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
    font-size: 2.3em
}

.page.A3.de-por .item_price_from,
.page.A4.de-por .item_price_from{
    font-size: 1.5em
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
    background-size: 100% 100%;
    background-position: center center;
    padding-right: 30px !important;
    padding-left: 30px !important;
    font-size: 1.2em;
    flex-direction: column;
}

.page.A3.de-por .item_price_to span,
.page.A4.de-por .item_price_to span{
    font-size: 1.8em;
    font-weight: 800;
    margin-left: 10px;
    color: red;
}

.page.A3.de-por .item_price_to_price,
.page.A4.de-por .item_price_to_price{
    font-size: 6em;
    background-image: none;
    flex: 1;
    align-items: end;
}

.page.A6.de-por .item_header.nicolini img{
    width: 100%;
    height: 75%;
    margin: 0 auto;
}

.page.A5.de-por .item_name,
.page.A6.de-por .item_name {
    font-weight: 500;
    font-size: 2.4em;
}

.page.A5.de-por .item_name{
    font-size: 3.4em;
    height: 35%;
}

.page.A5.de-por .item_price{
    height: 45%;
}

.page.A5.de-por .item_price_from,
.page.A6.de-por .item_price_from {
    flex-direction: column;
}

.page.A5.de-por .item_price_from span,
.page.A6.de-por .item_price_from span {
    font-weight: 800;
}

.page.A5.de-por .item_price_from span {
    font-size: 3em;
}

.page.A5.de-por .item_price_from_price,
.page.A6.de-por .item_price_from_price {
    padding: 0 15px !important;
    background-size: 100% 100%;
    font-size: 3em;
}

.page.A5.de-por .item_price_to,
.page.A6.de-por .item_price_to{
    flex-direction: column;
}

.page.A5.de-por .item_price_to span,
.page.A6.de-por .item_price_to span{
    font-weight: 800;
}

.page.A5.de-por .item_price_to span {
    font-size: 3.5em;
}

.page.A6.de-por .item_price_to_price{
    padding: 0 15px !important;
}

.page.A5.de-por .item_price_from_price {
    font-size: 7em;
}

.page.A5.de-por .item_price_to_price,
.page.A6.de-por .item_price_to_price{
    font-size: 5.5em;
}

.page.A5.de-por .item_price_to_price {    
    font-size: 9.5em;
}



.A1.de-por .item_name_price {
    height: 50%;
    flex-direction: column;
 }

 .A1.de-por .item_name {
    font-size: 15em;
    height: auto;
 }

 .A1.de-por .item_price_from {
    display: inherit;
    flex: none;
    margin-top: 10em;
 }

 .A1.de-por .item_price_from_price {
    background: none;
    font-size: 22em;
    color: red;
 }

 .A1.de-por .item_price_from span{
    font-size: 7em;
    font-weight: bolder;
 }

 .A1.de-por .item_price {
    height: 50%;
 }


 .A1.de-por .item_price_to span {
    font-size: 10em;
 }

 .A1.de-por .item_price_to_price {
    background: none;
    color: inherit;
    font-size: 65em;
    color: red;
 }

.A1H.de-por .item_name_price {
    height: auto;
    flex-direction: column;
}

.A1H.de-por .item_name {
    height: auto;
    font-size: 23em;
}

.A1H.de-por .item_name_big {
    height: auto;
    font-size: 28em;
}

.A1H.de-por .item_price_from{
    flex-direction: row;
    margin-top: 5em;
    justify-content: center;
    align-content: center;
    align-items: center;
    background: none;
}

.A1H.de-por .item_price_from_price {
    background-image: none;
    font-size: 30em;
    color: red;
}

.A1H.de-por .item_price_from span {
    font-size: 20em;
    font-weight: bolder;
}

.A1H.de-por .item_price {
    height: 100%;
}

.A1H.de-por .item_price .by-label {
    font-size: 20em;
    font-family: "Montserrat", sans-serif;
    font-weight: bold;
}

.A1H.de-por .item_price_to_price{
    background: none;
    font-size: 90em;
}

/* ----------DATA CURTA---------------- */
.page.A3.data-curta {
    font-size: 60px;
}

.page.A4.data-curta {
    font-size: 40px;
}

.page.data-curta .item_header img { max-width: 50% !important; margin: 0 auto !important}

.page.A5.data-curta .item_name {
    font-size: 4.5em;
}

.page.data-curta .item_price_from{
    flex-direction: column;
    font-size: 1.5em;
}

.page.A5.data-curta .item_price_from {
    font-size: 2.4em;
}

.page.data-curta .item_price_from span {
    font-size: 1.5em;
}

.page.data-curta .item_price_from_price{
    flex-direction: column;
    font-family: "Montserrat", sans-serif;
}

/*.page.data-curta .item_price_from span{
    font-size: 1.5em;
}*/

.page.data-curta .item_price_to {
    flex-direction: column;
    font-size: 1.5em;
}

.page.A5.data-curta .item_price_to {
    font-size: 1.9em;

}

.page.A6.data-curta .item_price_to {
    font-size: 1.4em;

}

.page.data-curta.A3 .price_to_unit_desc, .page.data-curta.A4 .price_to_unit_desc {
    margin-top: 0;
}

/*.page.data-curta .item_price_to span{
    font-size: 1.5em;
}*/

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

.page.A3.normal .engenho,
.page.A3.normal .nicolini,
.page.A3.normal .atacadao
{
    font-size: 60px;
}

.page.A4.normal .engenho,
.page.A4.normal .nicolini,
.page.A4.normal .atacadao
{
    font-size: 40px;
}

.page.normal span.price_to_unit_desc, .page.normal span.price_to_unit_desc {
    margin-top: 0 !important;
}

.page.normal .item_name{
    height: 20%;
    font-size: 1.8em;
    font-weight: lighter;
}

.page.A1.normal .item_name, .page.A1H.normal .item_name{
    height: 50%;
    font-size: 18em;
    font-weight: lighter;
}

.page.A1H.normal.a1_horizontal .item_name{
    height: 100%;
    font-size: 20em;
}

.page.normal .item_price{
    height: 60%;
}

.page.A1H.normal.a1_horizontal .item_price{
    height: 100%;
    page-break-after: always;
}

.page.normal .item_price_to_price{
    font-size: 9em
}

.page.A1.normal .item_price_to_price, .page.A1H.normal .item_price_to_price{
    font-size: 60em;
    background-image: none;
    transform: scaleY(1.27);
}

.page.A1H.normal.a1_horizontal .item_price_to_price{
    font-size: 80em;
    background-image: none;
}

.page.A3.normal .item_name,
.page.A4.normal .item_name{
    height: 36%;
    font-size: 2.8em;

}

.page.A3.normal .item_header,
.page.A4.normal .item_header{
    height: 14%;
}

.page.A3.normal .item_price,
.page.A4.normal .item_price{
    height: 50%;
}

.page.A3.normal .atacadao .item_price {
    font-size: 1.1em;
}

.page.A3.normal .item_price_to_price,
.page.A4.normal .item_price_to_price{
    font-size: 6.5em
}

.page.A6.normal .item_header.atacadao img{
    width: 80%;
    height: 90%;
    margin-top: 00;
}

.page.A5.normal .item_header.atacadao img {
    width: 55%;
    height: 90%;
    margin-top: 00;

}

.page.A5.normal .item_name {
    font-size: 3em;
}

.page.A5.normal .item_price_to_price {
    font-size: 15em;
}

/* ----------DESCONTO QTD MIN------- */
.page.desconto-qtd-min .item_name_price{
    height: 30%;
    flex-direction: column;
}

.page.desconto-qtd-min .item_name{
    font-size: 1.8em;
    height: auto;
    flex: 6;
}
.page.A5.desconto-qtd-min .item_name{
    padding-left: 4mm !important;
    padding-right: 4mm !important;
    font-size: 3em;
    font-weight: lighter;
}

.page.desconto-qtd-min .item_price{
    height: 50%
}

.page.desconto-qtd-min .item_price_to_price{
    font-size: 9em;
    margin-left: 0px;
    position: relative;
}

.page.A5.desconto-qtd-min .item_price_to_price{
    font-size: 7em;
}

.page.desconto-qtd-min .item_price_from_price{
    background-image: none;
    justify-content: flex-end;
    margin-right: 10px;
    margin-left: 10px;
}

.page.A5.desconto-qtd-min .item_price_from_price{
    font-size: 3em;
}

.page.desconto-qtd-min .item_price_to span{
    font-size: 0.15em;
}

.page.A5.desconto-qtd-min .item_price_to span{
    font-size: 0.2em;
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

.page.A3.desconto-qtd-min .nicolini .item_name_price,
.page.A4.desconto-qtd-min .nicolini .item_name_price{
    height: 30%;
}

.page.A3.desconto-qtd-min .item_name,
.page.A4.desconto-qtd-min .item_name{
    flex: inherit;
}

.page.A3.desconto-qtd-min .nicolini .item_name,
.page.A4.desconto-qtd-min .nicolini .item_name {
    font-size: 5em;

}

.page.A4.desconto-qtd-min .nicolini .item_name {
    font-size: 4em;

}

.page.A3.desconto-qtd-min .atacadao .item_name,
.page.A4.desconto-qtd-min .atacadao .item_name{
    font-size: 5em;
}


.page.A4.desconto-qtd-min .atacadao .item_name{
    font-size: 4em;
}

.page.A3.desconto-qtd-min .item_price_from_price,
.page.A4.desconto-qtd-min .item_price_from_price{
    font-size: 2.7em;
    align-items: center;
}

.page.A3.desconto-qtd-min .nicolini .item_price_from_price,
.page.A4.desconto-qtd-min .nicolini .item_price_from_price{
    font-size: 10.7em;
}

.page.A4.desconto-qtd-min .nicolini .item_price_from_price{
    font-size: 7.7em;
}

.page.A3.desconto-qtd-min .atacadao .item_name_price .item_descont_desc,
.page.A4.desconto-qtd-min .atacadao .item_name_price .item_descont_desc,
.page.A3.desconto-qtd-min .nicolini .item_name_price .item_descont_desc,
.page.A4.desconto-qtd-min .nicolini .item_name_price .item_descont_desc
{
    display: none;
}

.page.A3.desconto-qtd-min .atacadao .item_price_from_price,
.page.A4.desconto-qtd-min .atacadao .item_price_from_price{
    font-size: 15.7em;
    color: red;
}

.page.A4.desconto-qtd-min .atacadao .item_price_from_price{
    font-size: 11.7em;
}

.page.A3.desconto-qtd-min .item_price,
.page.A4.desconto-qtd-min .item_price{
    height: 43%;
}

.page.A3.desconto-qtd-min .nicolini .item_price,
.page.A4.desconto-qtd-min .nicolini .item_price{
    height: 60%;
    width: 98%;
    align-self: center;
    flex-direction: column;
    background-color: red;
    border: 3px solid #000;
    border-radius: 44px;
}

.page.A3.desconto-qtd-min .nicolini .item_descont_desc,
.page.A4.desconto-qtd-min .nicolini .item_descont_desc{
    color: white;
    padding-top: 30px !important;
    font-size: 3em;
}

.page.A4.desconto-qtd-min .nicolini .item_descont_desc{
    font-size: 2em;
}

.page.A3.desconto-qtd-min .atacadao .item_price,
.page.A4.desconto-qtd-min .atacadao .item_price{
    flex-direction: column;
    width: 95%;
    align-self: center;
    border: 12px solid yellow;
    background-color: red;
    border-radius: 220px;
}

.page.A4.desconto-qtd-min .atacadao .item_price {
    border-radius: 170px;
}

.page.A3.desconto-qtd-min .atacadao .item_descont_desc,
.page.A4.desconto-qtd-min .atacadao .item_descont_desc {
    color: white;
    font-size: 2.5em;
    margin-top: 35px;
}

.page.A4.desconto-qtd-min .atacadao .item_descont_desc {
    font-size: 2em;
}

.page.A3.desconto-qtd-min .item_descont_desc span,
.page.A4.desconto-qtd-min .item_descont_desc span{
    font-size: 1.7em;
}

.page.A3.desconto-qtd-min .engenho .item_price .item_descont_desc, 
.page.A4.desconto-qtd-min .engenho .item_price .item_descont_desc{
    display: none;
}

.page.A3.desconto-qtd-min .item_price_to_price,
.page.A4.desconto-qtd-min .item_price_to_price{
    font-size: 6em;
}

.page.A3.desconto-qtd-min .nicolini .item_price_to_price,
.page.A4.desconto-qtd-min .nicolini .item_price_to_price{
    font-size: 35em;
    background-image: none;
    color: #FFF;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
}

.page.A4.desconto-qtd-min .nicolini .item_price_to_price{
    font-size: 20em;
}

.page.A3.desconto-qtd-min .atacadao .item_price_to_price,
.page.A4.desconto-qtd-min .atacadao .item_price_to_price{
    background-image: none;
    color: white;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    font-size: 25em;
}

.page.A4.desconto-qtd-min .atacadao .item_price_to_price{
    font-size: 17em;
}

.page.A6.desconto-qtd-min .item_name {
    font-weight: 500
}

.page.A6.desconto-qtd-min .item_header.nicolini img,
.page.A5.desconto-qtd-min .item_header.nicolini img {
    width: 100%;
    height: 85%;
    margin: 0 auto;
}

.page.A6.desconto-qtd-min .atacadao img,
.page.A5.desconto-qtd-min .atacadao img {

    margin: 0 auto;
    height: auto;
    width: 50%;
}


.page.A6.desconto-qtd-min .item_name_price,
.page.A5.desconto-qtd-min .item_name_price {
    flex-direction: row;
}

.page.A6.desconto-qtd-min .item_price,
.page.A5.desconto-qtd-min .item_price {
    align-content: inherit;
    align-items: inherit;
}

.page.A6.desconto-qtd-min .item_price_from_price,
.page.A5.desconto-qtd-min .item_price_from_price {
    font-size: 3em;
    font-weight: normal;
    transform: scaleY(1.3);
}

.page.A5.desconto-qtd-min .item_price_from_price {
    font-size: 5em;
}

.page.A6.desconto-qtd-min .item_price_to,
.page.A5.desconto-qtd-min .item_price_to {
    display: flex;
    flex-direction: row;
    border: 2px solid red;
    border-radius: 20px;
    margin: 0 10px 10px 10px;
}

.page.A6.desconto-qtd-min .item_price_to_price,
.page.A5.desconto-qtd-min .item_price_to_price {
    display: flex;
    position: inherit;
    flex-direction: row;
    flex: 1;
    background-image: none;
    font-size: inherit;
    justify-content: space-between;
}

.page.A5.desconto-qtd-min .item_price_to_price {
    justify-content: space-around;
}

.page.A6.desconto-qtd-min .item_price_to_price_desc,
.page.A5.desconto-qtd-min .item_price_to_price_desc {
    font-size: 1.9em;
    padding-left: 20px !important;
    padding-right: 20px !important;
    color: #000;
    display: flex;
    align-items: center;

}

.page.A5.desconto-qtd-min .item_price_to_price_desc {
    font-size: 2.4em;

}

.page.A6.desconto-qtd-min .item_price_to_price .definitive-price-container,
.page.A5.desconto-qtd-min .item_price_to_price .definitive-price-container {
    font-size: 6em;
    transform: scaleY(1.3);
    font-weight: lighter;
}


.page.A5.desconto-qtd-min .item_price_to_price .definitive-price-container {
    font-size: 11em;
}

.A1.desconto-qtd-min .item_name_price{
    height: 50%;
}

.A1.desconto-qtd-min .item_name{
    flex: none;
    font-size: 18em;
}

.A1.desconto-qtd-min .item_price_from_price{
    font-size: 18em;
    margin-top: 0.3em;
    color:  red;
}

.A1.desconto-qtd-min .item_price{
    height: 50%;
}

.A1.desconto-qtd-min .item_price_to_price {
    background: none;
    height: 100%;
}

.A1.desconto-qtd-min .item_price_to_price_desc {
    color: black;
    font-size: 1em;
}

.A1.desconto-qtd-min .item_price_to .definitive-price-container {
    font-size: 7em;
}

.A1H.desconto-qtd-min .item_name_price {
    height: 100%;
}

.A1H.desconto-qtd-min .item_name {
    flex: none;
    font-size: 22em;
}

.A1H.desconto-qtd-min .item_price_from_price{
    font-size: 22em;
    color: red;
    margin-top: 0.5em;
}

.A1H.desconto-qtd-min .item_price {
    height: 100%;
}

.A1H.desconto-qtd-min .item_price_to {
    flex: auto;
}

.A1H.desconto-qtd-min .item_price_to_price {
    background: none;
}

.A1H.desconto-qtd-min .item_price_to_price_desc {
    color: black;
    font-size: 1.5em;
}

.A1H.desconto-qtd-min .item_price_to .definitive-price-container {
    font-size: 11em;
}

/*--------------------- A3H ------------------------*/
/*--------- Desconto QTD MIN -----------*/
.A3H.desconto-qtd-min {
    page-break-after: always;
}

.A3H.de-por {
    page-break-after: always;
}

.A3H.normal {
    page-break-after: always;
}

.A3H.clube {
    page-break-after: always;
}

.A3H.desconto-qtd-min .item_name_price {
    height: 38%;
}

.A3H.desconto-qtd-min .item_name {
    flex: none;
    font-size: 6em;
}

.A3H.desconto-qtd-min .item_price_from_price{
    font-size: 9em;
    color: red;
    margin-top: 0.1em;
}

.A3H.desconto-qtd-min .item_price {
    height: 38%;
}

.A3H.desconto-qtd-min .item_price_to {
    flex: auto;
}

.A3H.desconto-qtd-min .item_price_to_price {
    background: none;
}

.A3H.desconto-qtd-min .item_price_to_price_desc {
    color: black;
    font-size: 0.6em;
}

.A3H.desconto-qtd-min .item_price_to .definitive-price-container {
    font-size: 2.5em;
}

.A3H.de-por .item_name {
    font-size: 8.5em;
}

.A3H.de-por .item_price_from span {
    font-size: 7em;
}

.A3H.de-por .item_price_from_price {
    font-size: 11em;
}

.A3H.de-por .item_price_to span {
    font-size: 7em;
}

.A3H.de-por .item_price_to_price {
    font-size: 18em;
}

.A3H.de-por .item_price_from {
    margin-top: 3.5em;
}

.A3H.de-por .item_price_to {
    margin-top: 3.5em;
}

.A3H.normal .item_name {
    font-size: 8em;
    height: <?= ($dimensoes_cartaz['w']-50)/2 ?>mm;
}

.A3H.normal .item_price_to_price {
    font-size: 21em;
}

.A3H.normal .item_price {
    height: <?= ($dimensoes_cartaz['w']-50)/2 ?>mm;
    font-size: 1.3em;
}

.A3H.clube .item_name_price {
    flex-direction: column;
    font-size: 1.6em;
}

.A3H.clube .item_price_from_price {
    font-size: 0.5em !important;
}

.A3H.clube .item_name {
    font-size: 4em !important;
}

.A3H.clube .item_price_from_price {
    font-size: 6.5em !important;
}

.A3H.clube .item_price{
    flex-direction: column;
    height: 58%;
}

.A3H.clube .item_descont_desc {
    font-size: 6em;
}

.A3H.clube .item_price_inner {
    flex-direction: column !important;
}

.A3H.clube .desconto_desc {
    font-size: 2em;
}

.A3H.clube .item_price_to_price {
    font-size: 16em;
}

.A3H.clube span.price_from_unit_desc {
    margin-top: -30px !important;
}

.A3H.clube span.price_to_unit_desc {
    margin-top: -30px !important;

}



/*--------------------- A3HD ------------------------*/
/*--------- Desconto QTD MIN -----------*/

.A3HD.desconto-qtd-min {
    page-break-after: always;
}

.A3HD.de-por {
    page-break-after: always;
}

.A3HD.normal {
    page-break-after: always;
}

.A3HD.clube {
    page-break-after: always;
}

.A3HD.desconto-qtd-min .item_name_price {
    height: <?= $dimensoes_cartaz['w']-50 ?>mm;
    display: flex;
    align-items: center;
    justify-content: center;
    flex: 1;
    flex-direction: column;
}

.A3HD.desconto-qtd-min .item_name {
    flex: none;
    font-size: 10em;
}

.A3HD.desconto-qtd-min .item_price_from_price{
    font-size: 16em;
    color: red;
    margin-top: 0.1em;
}

.A3HD.desconto-qtd-min .item_price {
    height: <?= $dimensoes_cartaz['w'] ?>mm;
}

.A3HD.desconto-qtd-min .item_price_to {
    flex: auto;
}

.A3HD.desconto-qtd-min .item_price_to_price {
    background: none;
}

.A3HD.desconto-qtd-min .item_price_to_price_desc {
    color: black;
    font-size: 1.2em;
}

.A3HD.desconto-qtd-min .item_price_to .definitive-price-container {
    font-size: 4.5em;
}

.A3HD.de-por .item_name {
    font-size: 11.5em;
    height: <?= $dimensoes_cartaz['w']-50 ?>mm;
}

.A3HD.de-por .item_price {
    height: <?= $dimensoes_cartaz['w'] ?>mm;
}

.A3HD.de-por .item_price_from span {
    font-size: 7em;
}

.A3HD.de-por .item_price_from_price {
    font-size: 14em;
}

.A3HD.de-por .item_price_to span {
    font-size: 7em;
}

.A3HD.de-por .item_price_to_price {
    font-size: 24em;
}

.A3HD.de-por .item_price_from {
    /*margin-top: 3.5em;*/
}

.A3HD.de-por .item_price_to {
    /*margin-top: 3.5em;*/
}

.A3HD.normal .item_name {
    font-size: 11em;
    height: <?= $dimensoes_cartaz['w']-50 ?>mm;
}

.A3HD.normal .item_price_to_price {
    font-size: 21em;
}

.A3HD.normal .item_price {
    height: <?= $dimensoes_cartaz['w'] ?>mm;
    margin-top: 0;
    font-size: 1.8em;
}

.A3HD.clube .item_name_price {
    flex-direction: column;
    font-size: 2.6em;
    height: <?= $dimensoes_cartaz['w']-50 ?>mm;
}

.A3HD.clube .item_price_from_price {
    font-size: 0.5em !important;
}

.A3HD.clube .item_name {
    font-size: 4em !important;
}

.A3HD.clube .item_price_from_price {
    font-size: 6.5em !important;
}

.A3HD.clube .item_price{
    flex-direction: column;
    height: <?= $dimensoes_cartaz['w'] ?>mm;
}

.A3HD.clube .item_descont_desc {
    font-size: 9em;
}

.A3HD.clube .item_price_inner {
    flex-direction: column !important;
}

.A3HD.clube .desconto_desc {
    font-size: 5em;
}

.A3HD.clube .item_price_to_price {
    margin-top: 0.2em;
    font-size: 30em;
}

.A3HD.clube span.price_from_unit_desc {
    margin-top: -30px !important;
}

.A3HD.clube span.price_to_unit_desc {
    margin-top: -30px !important;

}

/*--------------------- A4H ------------------------*/
/*--------- Desconto QTD MIN -----------*/
.A4H.desconto-qtd-min {
    page-break-after: always;
}

.A4H.de-por {
    page-break-after: always;
}

.A4H.normal {
    page-break-after: always;
}

.A4H.clube {
    page-break-after: always;
}

.A4H.desconto-qtd-min .item_name_price {
    height: 38%;
}

.A4H.desconto-qtd-min .item_name {
    flex: none;
    font-size: 4em;
}

.A4H.desconto-qtd-min .item_price_from_price{
    font-size: 7em;
    color: red;
    margin-top: 0.1em;
}

.A4H.desconto-qtd-min .item_price {
    height: 38%;
}

.A4H.desconto-qtd-min .item_price_to {
    flex: auto;
}

.A4H.desconto-qtd-min .item_price_to_price {
    background: none;
}

.A4H.desconto-qtd-min .item_price_to_price_desc {
    color: black;
    font-size: 0.4em;
}

.A4H.desconto-qtd-min .item_price_to .definitive-price-container {
    font-size: 1.5em;
}

.A4H.de-por .item_name {
    font-size: 5.5em;
}

.A4H.de-por .item_price_from span {
    font-size: 5em;
}

.A4H.de-por .item_price_from_price {
    font-size: 7em;
}

.A4H.de-por .item_price_to span {
    font-size: 5em;
}

.A4H.de-por .item_price_to_price {
    font-size: 14em;
}

.A4H.de-por .item_price {
    height: 30%;
    margin-top: 2.5em;
}

.A4H.normal .item_name {
    font-size: 5.5em;
}

.A4H.normal .item_price_to_price {
    font-size: 13em;
}

.A4H.normal .item_price {
    height: 55%;
    margin-top: 3.5em;
}

.A4H.clube .item_name_price {
    flex-direction: column;
}

.A4H.clube .item_name {
    font-size: 4em !important;
}

.A4H.clube .item_price_from_price {
    font-size: 6.5em !important;
}

.A4H.clube .item_price{
    flex-direction: column;
}

.A4H.clube .item_descont_desc {
    font-size: 6em;
}

.A4H.clube .item_price_inner {
    flex-direction: column !important;
}

.A4H.clube .desconto_desc {
    font-size: 2em;
}

.A4H.clube .item_price_to_price {
    font-size: 12em;
}

/* ----------CLUBE------------------ */

.page.clube .item_price_from_price{
    display: flex;
    flex-direction: column;
}

.page.A1.clube .item_name_price, .page.A1H.clube .item_name_price{
    height: 50%;
    flex-direction: column;
}

.page.A1.clube .item_price, .page.A1H.clube .item_price{
    height: 50%;
    flex-direction: column;
}

.page.A1H.clube .item_price{
    height: auto;
}

.page.A1.clube .item_name, .page.A1H.clube .item_name {
    font-size: 15em;
}

.page.A1.clube .item_price_from_price, .page.A1H.clube .item_price_from_price{
    font-size: 23em
}

.page.A1.clube span.price_from_unit_desc, .page.A1H.clube span.price_from_unit_desc {
    /*margin-top: -1em;*/
}

.page.A1.clube .desconto_desc{
    font-size: 5em
}

.page.A1H.clube .desconto_desc{
    font-size: 7em
}

.a1-clube-title {
    font-size: 10em;
    margin-top: 1em;
}

.page.A1.clube .item_price_inner, .page.A1H.clube .item_price_inner{
    border: none;
    flex-direction: column
}

.page.A1.clube .item_price_to_price, .page.A1H.clube .item_price_to_price {
    font-size: 53em;
    background: none;
}

.page.A1.clube span.price_to_unit_desc, .page.A1H.clube span.price_to_unit_desc{
    /*margin-top: -1em;*/
}

.page.A1H.clube.a1_horizontal .item_name_price{
    height: 100%;
    page-break-after: always;
}

.page.A1H.clube.a1_horizontal .item_name {
    font-size: 24em;
}

.page.A1H.clube.a1_horizontal .item_price_from_price {
    font-size: 35em;
}

.page.A1H.clube.a1_horizontal .a1-clube-title {
    font-size: 17em;
    margin-top: 0;
}

.page.A1H.clube.a1_horizontal .item_price_to_price {
    font-size: 64em;
}

.page.clube.A3 span.price_from_unit_desc, .page.clube.A4 .price_from_unit_desc{
    font-size: 0.2em;
    margin-top: -0.8em;
}


.page.clube.A3 span.price_to_unit_desc, .page.clube.A4 .price_to_unit_desc{
    font-size: 0.12em;
    margin-top: -0.8em;
}

.page.A5.clube {
    width: <?= $dimensoes_cartaz['w'] - 2 ?>mm !important;
}

.page.A5.clube .row { 
    width: <?= $dimensoes_cartaz['w'] - 2 ?>mm !important;
    justify-content: center;
}
.page.A5.clube .row .item_container {     
    width: <?= $dimensoes_cartaz['w'] - 6 ?>mm !important;
}

.page.A6.clube {
    width: <?= $dimensoes_cartaz['w'] - 2 ?>mm !important;
}

.page.A6.clube .row { 
    width: <?= $dimensoes_cartaz['w'] - 2 ?>mm !important;
    justify-content: center;
}

.page.A6.clube .row .item_container { 
    width: <?= $item_container_width - 1 ?>mm;  
}

.page.clube .item_price_to_price {
    justify-content: center;
}

.page.clube .item_name {
    font-size: 2em;
    display: flex;
    height: auto;
    flex: 6;
    margin-left: 2mm;
}
.page.clube .item_price_inner{
    border: 30px solid red;
    display: flex;
    flex-direction: row;
    width: 95%;
    height: 97%;
}

.page.clube .item_price_from_price{
    background-image: none;
    background-repeat: no-repeat;
    background-size: cover;
    font-size:2.5em;
    font-family: "Impact";
    flex: 2;
    justify-content: end;
    margin-right: 2mm;
    text-align: right;

}

.page.clube .item_price_to {
    flex: 1
}

.page.A3.clube .atacadao .item_price_to,
.page.A4.clube .atacadao .item_price_to {
    background-color: red;
    border-top-left-radius: 25px;
    border-top-right-radius: 25px;
    font-size: 3em;
}

.page.A3.clube .atacadao .item_price_to {
    font-size: 4.5em;

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



.page.A3.clube .atacadao .item_name_price,
.page.A4.clube .atacadao .item_name_price
{
    height: 25%;
}

.page.A3.clube .item_name,
.page.A4.clube .item_name{
    flex: inherit;
    font-size: 3em;
}

.page.A3.clube .engenho .item_name,
.page.A4.clube .engenho .item_name,
.page.A3.clube .nicolini .item_name,
.page.A4.clube .nicolini .item_name{
    flex: inherit;
    font-size: 1.8em;
}

.page.A3.clube .atacadao .item_name,
.page.A4.clube .atacadao .item_name{
    font-size: 2.8em;
}

.page.A3.clube .atacadao .item_name
{
    font-size: 3.8em;
}

.page.A3.clube .atacadao .clube_image,
.page.A4.clube .atacadao .clube_image {
    display: none;
}

.page.A3.clube .item_price_from_price,
.page.A4.clube .item_price_from_price{
    font-size: 6.7em;
}

.page.A3.clube .engenho .item_price_from_price,
.page.A4.clube .engenho .item_price_from_price,
.page.A3.clube .nicolini .item_price_from_price,
.page.A4.clube .nicolini .item_price_from_price
{
    font-size: 2.7em;
    justify-content: center;
}

.page.A3.clube .atacadao .item_price_from_price,
.page.A4.clube .atacadao .item_price_from_price{
    font-size: 8.7em;
}

.page.A3.clube .atacadao .item_price_from_price {
    font-size: 12.7em;
}

.page.A3.clube .atacadao .item_descont_desc,
.page.A4.clube .atacadao .item_descont_desc{
    display: flex;
    width: 95%;
    justify-content: center;
    border: 6px solid red;
    border-bottom-width: 6px;
    border-bottom-style: solid;
    border-bottom-color: red;
    border-bottom: 0;
    border-top-left-radius: 25px;
    border-top-right-radius: 25px;
    color: red;
    margin-top: 20px;
    font-size: 1.5em;
    -webkit-text-stroke: 3px #000000; /* largura e cor da borda */
}

.page.A3.clube .atacadao .item_name_price .item_descont_desc,
.page.A4.clube .atacadao .item_name_price .item_descont_desc
{
    display: none
}

.page.A3.clube .engenho .item_descont_desc,
.page.A4.clube .engenho .item_descont_desc,
.page.A3.clube .nicolini .item_descont_desc,
.page.A4.clube .nicolini .item_descont_desc
{
    font-size: 0.5em;
}

.page.A4.clube .engenho .item_descont_desc,
.page.A4.clube .nicolini .item_descont_desc
{
    font-size: 1em;
}


.page.A3.clube .engenho,
.page.A3.clube .nicolini {
    font-size: 60px;
}

.page.A3.leve-x-pague-y .engenho {
    font-size: 60px;
}



.page.A3.desconto-qtd-min .engenho {
    font-size: 60px;
}

.page.A3.leve-x-pague-y .atacadao {
    font-size: 60px;
}

.page.A4.clube .engenho,
.page.A4.clube .nicolini {
    font-size: 40px;
}

.page.A4.desconto-qtd-min .engenho {
    font-size: 40px;
}

.page.A4.leve-x-pague-y .engenho {
    font-size: 40px;
}

.page.A4.leve-x-pague-y .atacadao {
    font-size: 40px;
}

.page.A3.clube .item_price,
.page.A4.clube .item_price{
    height: 36%;
}

.page.A3.clube .atacadao .item_price, 
.page.A4.clube .atacadao .item_price{
    flex-direction: column;
    height: 55%;
}

.page.A3.clube .item_descont_desc span,
.page.A4.clube .item_descont_desc span{
    font-size: 2.7em;
    font-weight: 800
}

.page.A3.clube .item_descont_desc span{
    font-size: 4.7em;
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

.page.A3.clube .atacadao .item_price_inner, 
.page.A4.clube .atacadao .item_price_inner
{
    border-top: none;    
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-color: red;
    background-color: white;
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

.page.A3.clube .atacadao .desconto_desc,
.page.A4.clube .atacadao .desconto_desc
{
    background-color: red;
    flex: inherit;
    font-size: 2.8em;
    border-bottom-right-radius: 25px;
    border-bottom-left-radius: 25px;
}

.page.A3.clube .atacadao .item_name_price .desconto_desc,
.page.A4.clube .atacadao .item_name_price .desconto_desc {
    display: none;
}

.page.A3.clube .atacadao .desconto_desc
{
    font-size: 3.8em;
}

.page.A3.clube .engenho .clube_image,
.page.A4.clube .engenho .clube_image,
.page.A3.clube .engenho .item_price .item_descont_desc,
.page.A4.clube .engenho .item_price .item_descont_desc,
.page.A3.clube .nicolini .clube_image,
.page.A4.clube .nicolini .clube_image,
.page.A3.clube .nicolini .item_price .item_descont_desc,
.page.A4.clube .nicolini .item_price .item_descont_desc
 {
    display: none;
}

.page.A6.clube .item_header.atacadao img,
.page.A5.clube .item_header.atacadao img {
    width: 75%;
    height: 85%;
    margin: 0 auto;
    margin-top: 0;
}

.page.A5.clube .item_header.nicolini img {
    width: 100%;
    height: 80%;
}

.page.A6.clube .item_name_price,
.page.A5.clube .item_name_price {
    height: 30%;
}

.page.A6.clube .item_name {
    font-weight: lighter;
    font-size: 1.5em;
}

.page.A5.clube .item_name {
    font-size: 2.2em;
    font-weight: lighter;
}

.page.A5.clube .item_price_from_price {
    align-items: end;
    font-size: 4em;
}

.page.A6.clube .item_price,
.page.A5.clube .item_price{
    height: 50%;
    flex-direction: column;
}

.page.A6.clube .item_price_inner,
.page.A5.clube .item_price_inner {
    border: none;
    background-image: url("<?= $this->Url->image('traco_grande.jpg') ?>");
    background-size: auto 100%;
    background-repeat: no-repeat;
}

.page.A6.clube .desconto_desc img,
.page.A5.clube .desconto_desc img {
    display: none;
}

.page.A6.clube .clube-title,
.page.A5.clube .clube-title {
    background-color: red;
    color: white;
    width: 100%;
    font-weight: lighter;
    padding-top: 2px !important;
    padding-bottom: 2px !important;
    font-size: 1.2em;
}

.page.A5.clube .clube-title {
    font-size: 2em;
}

.page.A6.clube .desconto_desc {
    font-size: 1.3em;
}

.page.A5.clube .desconto_desc {
    font-size: 2em;
}

.page.A6.clube .item_price_to,
.page.A5.clube .item_price_to {
    justify-content: end;
    padding-right: 5px;
}

.page.A6.clube .item_price_to_price,
.page.A5.clube .item_price_to_price {
    background-image: none;
    font-size: 5em;
    transform: scaleY(1.3);
}

.page.A5.clube .item_price_to_price {
    font-size: 10em;
    letter-spacing: 16px;
}

.page.A6.clube .price_to_unit_desc,
.page.A5.clube .price_to_unit_desc {
    display: none;
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

.page.A3.cashback .item_name_price,
.page.A4.cashback .item_name_price{
    flex-direction: column;

}

.page.A3.cashback .item_name_price,
.page.A4.cashback .item_name_price {
    height: 45%;
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

.page.A4.cashback .item_name{
    font-size: 3.8em
}

.page.A3.cashback .item_name {
    font-size: 6.8em
}

.page.A3.cashback .item_price_from_price,
.page.A4.cashback .item_price_from_price{
    background-image: url("<?= $this->Url->image('traco.png') ?>");
    background-size: 100% 100%;
    width: 50%;
    text-align: center;
    padding-top: 35px !important;
    padding-bottom: 35px !important;
    margin-top: 10px;
    font-size: 8em;
    justify-content: center;
}

.page.A3.cashback .item_price_from_price {
    font-size: 13em;
}

.page.A3.cashback .item_price_to_price,
.page.A4.cashback .item_price_to_price{
    font-size: 10em;
    color: red;
    font-weight: bolder;
}


.page.A3.cashback .item_price_to_price {
    font-size: 17em;
}

.page.A3.cashback .item_price_inner,
.page.A4.cashback .item_price_inner{
    background-color: inherit !important;
    border: 8px solid red;
    border-radius: 25px;
    width: 94%;
    flex-direction: column;
}

.page.A3.cashback .item_price_to,
.page.A4.cashback .item_price_to{
    flex: inherit !important;
}

.page.A3.cashback .desconto_desc,
.page.A4.cashback .desconto_desc{
    flex: inherit !important;
    color: red;
    font-size: 3em;
}

.page.A3.cashback .desconto_desc {
    font-size: 5em;
}

.page.A3.cashback .desconto_desc img,
.page.A4.cashback .desconto_desc img{
    width: 30%;
    margin-top: 10px;
}

.page.A3.cashback .item_header img,
.page.A4.cashback .item_header img {
    height: 60% !important;
}

.page.A6.cashback .item_header img,
.page.A5.cashback .item_header img {
    height: 80%;
}

.page.A6.cashback .item_name,
.page.A5.cashback .item_name {
    font-weight: 500;
    font-size: 2.1em;
}

.page.A6.cashback .item_price_from_price{
    font-size: 3.5em;
}

.page.A6.cashback .item_price_to_price {
    font-size: 2.6em;
}

.page.A5.cashback .item_price_from_price {
    font-size: 3.5em;
}

.page.A6.cashback .desconto_desc{
    flex: 4;
}

.page.A6.cashback .item_price {
    height: 25%;
}

.page.A5.cashback .desconto_desc {
    font-size: 2em;
}
/* --------------LEVE X PAGUE Y --------------- */
.page.leve-x-pague-y .promo_desc{
    color: red;
    font-size: 2em;
}

.page.A3.leve-x-pague-y .nicolini .promo_desc,
.page.A4.leve-x-pague-y .nicolini .promo_desc{
    color: #000;
    text-transform: uppercase;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    font-size: 5em;
}

.page.A3.leve-x-pague-y .nicolini .promo_desc span,
.page.A4.leve-x-pague-y .nicolini .promo_desc span{
    color: red;
}

.page.A4.leve-x-pague-y .nicolini .promo_desc{
    font-size: 4em;
}

.page.leve-x-pague-y .item_price_to{
    background-image: url("<?= $this->Url->image('depor/ri_2.png') ?>");
    background-repeat: no-repeat;
    background-size: 95% 100%;
    background-position: center center;
    flex-direction: column;
}

.page.A3.leve-x-pague-y .nicolini .item_price_to,
.page.A4.leve-x-pague-y .nicolini .item_price_to{
    background-image: none;
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

.page.A3.leve-x-pague-y .nicolini .item_price_from,
.page.A4.leve-x-pague-y .nicolini .item_price_from {
    font-size: 4em;
}

.page.A4.leve-x-pague-y .nicolini .item_price_from {
    font-size: 3em;
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

.page.A3.leve-x-pague-y .atacadao .item_name_price .promo_desc,
.page.A4.leve-x-pague-y .atacadao .item_name_price .promo_desc,
.page.A3.leve-x-pague-y .engenho .item_name_price .promo_desc,
.page.A4.leve-x-pague-y .engenho .item_name_price .promo_desc
{
    display: none;
}

.page.A3.leve-x-pague-y .nicolini .item_name_price,
.page.A4.leve-x-pague-y .nicolini .item_name_price{
    height: 35%;
}

.page.A3.leve-x-pague-y .item_name,
.page.A4.leve-x-pague-y .item_name{
    font-size: 1.6em
}

.page.A3.leve-x-pague-y .nicolini .item_name,
.page.A4.leve-x-pague-y .nicolini .item_name{
    font-size: 5.6em
}

.page.A4.leve-x-pague-y .nicolini .item_name{
    font-size: 4em
}

.page.A3.leve-x-pague-y .item_price,
.page.A4.leve-x-pague-y .item_price{
    height: 43%;
}

.page.A3.leve-x-pague-y .nicolini .item_price,
.page.A4.leve-x-pague-y .nicolini .item_price{
    height: 55%;
    width: 98%;
    background-color: red;
    align-self: center;
    border-radius: 40px;
}

.page.A3.leve-x-pague-y .nicolini .item_price .promo_desc,
.page.A4.leve-x-pague-y .nicolini .item_price .promo_desc{
    display: none;
}

.page.A3.leve-x-pague-y .nicolini .promo_desc_smal, 
.page.A4.leve-x-pague-y .nicolini .promo_desc_smal {
    font-size: 6em;
    color: white;
}

.page.A4.leve-x-pague-y .nicolini .promo_desc_smal {
    font-size: 4em;
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

.page.A3.leve-x-pague-y .nicolini .item_price_to_price,
.page.A4.leve-x-pague-y .nicolini .item_price_to_price{
    color: white;
    font-size: 30em;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
}

.page.A4.leve-x-pague-y .nicolini .item_price_to_price{
    font-size: 21em;
}

/* --------------LEVE X PAGUE Y TIPO 2 --------------- */
.page.A3.leve-x-pague-y-tipo-2 {
    font-size: 60px;
}

.page.A4.leve-x-pague-y-tipo-2 {
    font-size: 40px;
}

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

/*-------------LIVRAMENTO PROMOÇÃO --------------------------*/
.page.A3.livramento-promocao{
    font-size: 60px;
}

.page.A4.livramento-promocao{
    font-size: 40px;
}

.page.livramento-promocao .item_header{
    height: 10%;
}

.page.livramento-promocao .item_header img{
    margin-top: 0.1cm;
    height: 100%;
}

.page.livramento-promocao .item_name{
    height: 20%;
    font-size: 2em;
    line-height: 0.8em;
}

.page.livramento-promocao .item_price_from{
    height: 25%;
    flex: 1
}

.page.livramento-promocao .item_price{
    height: 45%;
}

.page.livramento-promocao .item_price_from span {
    text-align: center;
    font-size: 1.8em;
    line-height: 25px;
}

.page.livramento-promocao .item_price_from_price {
    background-image: none;
    flex-direction: column;
    font-size: 3.8em;
}

.page.livramento-promocao .item_price_from_price span {
    font-size: 0.3em;
    text-align: right;
    margin-top: -22px;
}

.page.livramento-promocao .item_price_to_price{
    font-size: 6em;
    font-weight: bolder;
    -webkit-text-stroke: 3px #000000; /* largura e cor da borda */
    padding-right: 5px;
    padding-left: 5px;
}

.page.livramento-promocao .item_price .item_price_to .item_price_to_price span{
    font-size: 0.2em;
    position: relative;
    color: white;
    -webkit-text-stroke: 1px #000000; /* largura e cor da borda */
    font-weight: bolder;
}

.page.A3.livramento-promocao .item_header,
.page.A4.livramento-promocao .item_header{
    height: 10%;
}

.page.A3.livramento-promocao .item_header img,
.page.A4.livramento-promocao .item_header img{
    margin-top: 0.7cm;
}

.page.A3.livramento-promocao .item_name,
.page.A4.livramento-promocao .item_name{
    height: 20%;
    font-size: 2em;
    line-height: 0.8em;
}

.page.A3.livramento-promocao .item_price_from,
.page.A4.livramento-promocao .item_price_from{
    height: 35%;
    flex-direction: column;
}

.page.A3.page.livramento-promocao .item_price_from span,
.page.A4.page.livramento-promocao .item_price_from span{
    line-height: 70px;
}

.page.A3.livramento-promocao .item_price,
.page.A4.livramento-promocao .item_price{
    height: 35%;
}

.page.A3.page.livramento-promocao .item_price_to_price,
.page.A4.page.livramento-promocao .item_price_to_price{
    font-size: 5.8em;
}

.page.A3.page.livramento-promocao .item_price .item_price_to .item_price_to_price span,
.page.A4.page.livramento-promocao .item_price .item_price_to .item_price_to_price span{
    padding-bottom: 30px !important;
}


/*-------------LIVRAMENTO NORMAL --------------------------*/
.page.A3.livramento-normal{
    font-size: 60px;
}

.page.A4.livramento-normal{
    font-size: 40px;
}

.page.livramento-normal .item_header{
    height: 10%;
}

.page.livramento-normal .item_header img{
    margin-top: 0.1cm;
    height: 100%;
}

.page.livramento-normal .item_name{
    height: 20%;
    font-size: 2em;
    line-height: 0.8em;
}

.page.livramento-normal .item_price_from_and_pack_container{
    height: 25%;
    flex-direction: row;
    display: flex;
}

.page.livramento-normal .item_price{
    height: 45%;
}

.page.livramento-normal .item_price_from_and_pack_container .item_price_from{
    flex: 1
}

.page.livramento-normal .item_price_from_and_pack_container .item_price_from_pack{
    flex: 1
}

.page.livramento-normal .item_price_from_and_pack_container .item_price_from span{
    line-height: 25px;
    font-size: 1.5em;
}

.page.livramento-normal .item_price_from_and_pack_container .item_price_from_price {
}

.page.livramento-normal .item_price_from_and_pack_container .item_price_from_pack_desc{
    font-size: 1.2em;
    line-height: 27px;
}

.page.livramento-normal .item_price_from_and_pack_container .item_price_from_pack_price {
    font-size: 5em;
}

.page.livramento-normal .item_price_from span {
    font-size: 1.2em;
    line-height: 50px;
}

.page.livramento-normal .item_price_from_price {
    background-image: none;
    flex-direction: column;
    font-size: 3em;
}

.page.livramento-normal .item_price_from_price span {
    font-size: 0.3em;
    text-align: right;
    margin-top: -22px;
}

.page.livramento-normal .item_price_from_pack{
    display: flex;
    flex-direction: row;
    justify-content: center
}

.page.livramento-normal .item_price_from_pack_desc{
    display: flex;
    align-items: center;
    flex-direction: column;
    justify-content: center;
    font-weight: bolder;
    text-align: center;
}

.page.livramento-normal .item_price_from_pack_desc span{
    font-weight: normal;
}

.page.livramento-normal .item_price_from_pack_price{
    font-size: 4.6em;
    font-weight: bolder;
    flex-direction: column;
    display: flex;
    color: red;
    -webkit-text-stroke: 2px #000000; /* largura e cor da borda */
}

.page.livramento-normal .item_price_from_pack_price span{
    -webkit-text-stroke: 0px; /* largura e cor da borda */
    color: #000;
    text-align: right;
    margin-top: -40px;
}

.page.livramento-normal .item_price_to_price{
    font-size: 6.5em;
    font-weight: bolder;
    -webkit-text-stroke: 3px #000000; /* largura e cor da borda */
    padding-right: 5px;
    padding-left: 5px;
}

.page.livramento-normal .item_price .item_price_to .item_price_to_price span{
    font-size: 0.2em;
    position: relative;
    color: white;
    -webkit-text-stroke: 1px #000000; /* largura e cor da borda */
    font-weight: bolder;
}

.page.A3.livramento-normal .item_header,
.page.A4.livramento-normal .item_header{
    height: 10%;
}

.page.A3.livramento-normal .item_header img,
.page.A4.livramento-normal .item_header img{
    margin-top: 0.7cm;
}

.page.A3.livramento-normal .item_name,
.page.A4.livramento-normal .item_name{
    height: 20%;
    font-size: 2em;
    line-height: 0.8em;
}

.page.A3.livramento-normal .item_price_from,
.page.A4.livramento-normal .item_price_from{
    height: 20%;
}

.page.A3.livramento-normal .item_price_from_pack,
.page.A4.livramento-normal .item_price_from_pack{
    height: 20%;
}


.page.A3.livramento-normal .item_price_from_pack_desc{
    line-height: 50px;
}

.page.A4.livramento-normal .item_price_from_pack_desc{
    line-height: 30px;
}

.page.A6.livramento-normal .item_price_from_pack_desc{
    line-height: 15px;
}


.page.A3.livramento-normal .item_price,
.page.A4.livramento-normal .item_price{
    height: 30%;
}

.page.A3.livramento-normal .item_price_to_price,
.page.A4.livramento-normal .item_price_to_price{
    font-size: 5.5em;
}

.page.A3.page.livramento-normal .item_price .item_price_to .item_price_to_price span,
.page.A4.page.livramento-normal .item_price .item_price_to .item_price_to_price span{
    padding-bottom: 30px !important;
}

.page.A6.livramento-normal .item_price_from_and_pack_container .item_price_from_pack_price{
    font-size: 3.5em
}

.page.A6.livramento-normal .item_price_from_and_pack_container .item_price_from span{
    line-height: 15px
}

.page.A6.livramento-normal .item_price_from_and_pack_container .item_price_from_price{
    font-size: 2.7em
}


/* --------------LIVRAMENTO CLUBE --------------- */
.page.livramento-clube .item_header{
    height: 10%;
}
.page.livramento-clube .item_header img{
    margin-top: 0 !important;
    height: auto;
}

.page.livramento-clube .item_name_price{
    flex-direction: column;
    height: 35%;
}

.page.livramento-clube .item_name{
    font-size: 2em;
    height: auto;
}

.page.livramento-clube .item_price_from{
}

.page.livramento-clube .item_price_from_price{
    background: none;
    font-size: 3em;
}

.page.livramento-clube .item_price_from span{
    font-size: 1em;
}

.page.livramento-clube .item_price {
    height: 55%;
    flex-direction: column;
}

.page.livramento-clube .item_price img{
    width: 40%;
    align-self: center;
}

.page.livramento-clube .item_price_to_bg {
    background-image: url("<?= $this->Url->image('depor/ri_2.png') ?>");
    background-repeat: no-repeat;
    background-size: 98% 110%;
    background-position: center center;
    flex-direction: row;
    width: 100%;
    display: flex;
}

.page.livramento-clube .item_price_to {

}

.page.livramento-clube .item_price_to_price {
    background: none;
    -webkit-text-stroke: 3px #000000; /* largura e cor da borda */
    font-size: 5em;
}

.page.livramento-clube .item_price_to_price .price_desc {
    -webkit-text-stroke: 1px #000000; /* largura e cor da borda */
    margin-top: -20px;
    align-self: end;
}

.page.livramento-clube .limite_desc {
}


.page.A6.livramento-clube .item_price_to_price {
    font-size: 4em;
}

.page.A6.livramento-clube .item_price_to_price .price_desc{
   margin-top: 0px;
}

.page.A3.livramento-clube .item_header,
.page.A4.livramento-clube .item_header{
    height: 14%;
}
.page.A3.livramento-clube .item_price_from,
.page.A4.livramento-clube .item_price_from {
    flex: 1;
    position: relative;
}

.page.A3.livramento-clube .item_price_from span,
.page.A4.livramento-clube .item_price_from span {
 font-size: 0.5em;
 margin-right: 20px;
 position: absolute;
 bottom: -10px;
}

.page.A3.livramento-clube .item_name_price,
.page.A4.livramento-clube .item_name_price{
    height: 26%;
    flex-direction: column;
    justify-content: space-around;
}

.page.A3.livramento-clube .item_name,
.page.A4.livramento-clube .item_name{
    font-size: 1.8em
}

.page.A3.livramento-clube .item_price_from_price,
.page.A4.livramento-clube .item_price_from_price{
    background-image: none;
    font-size: 2.5em;
}

.page.A3.livramento-clube .item_price,
.page.A4.livramento-clube .item_price{
    height: 60%;
    flex-direction: column;
}

.page.A3.livramento-clube .item_price img,
.page.A4.livramento-clube .item_price img{
    max-width: 50% !important;
    align-self: center;
}

.page.A3.livramento-clube .item_price_to_bg,
.page.A4.livramento-clube .item_price_to_bg{
    background-image: url("<?= $this->Url->image('depor/ri_2.png') ?>");
    background-repeat: no-repeat;
    background-size: 98% 110%;
    background-position: center center;
    width: 90%;
    flex-direction: column;
}

.page.A3.livramento-clube .item_price_to,
.page.A4.livramento-clube .item_price_to{
    -webkit-text-stroke: 3px #000000; /* largura e cor da borda */
    flex-direction: column;
}

.page.A3.livramento-clube .item_price_to_price  .price_desc,
.page.A4.livramento-clube .item_price_to_price  .price_desc{
    font-size: 0.2em;
    font-weight: 800;
    margin-left: 10px;
    -webkit-text-stroke: 1px #000000; /* largura e cor da borda */
    color: red;
    margin-top: -20px
}

.page.A3.livramento-clube .item_price_to  .price_desc,
.page.A4.livramento-clube .item_price_to  .price_desc{
    font-weight: 800;
    margin-left: 10px;
    -webkit-text-stroke: 1px #000000; /* largura e cor da borda */
    color: red;
    margin-top: -40px
}

.page.A3.livramento-clube .item_price_to_price,
.page.A4.livramento-clube .item_price_to_price{
    font-size: 5em;
    background-image: none;

}

.page.A3.livramento-clube  .limite_desc,
.page.A4.livramento-clube  .limite_desc{
    font-size: 0.8em;
    padding-top: 10px;
}

.item_header img.tema { 
    width: 100% !important;
    height: 100% !important;
    margin-top: 0;
}

.codigo_int{
    text-align: right;
}

/* --------------------------SEM PROMOÇÃO---------------------- */
/* A3 */
.A3.sem-promocao .item_header{
    height: 10%;
}

.A3.sem-promocao .item_name {
    font-size: 10em;
}

.A3.sem-promocao .item_price_to_price  {
    font-size: 20em;
    background-image: none;
    letter-spacing: -9px;
}

.A3.sem-promocao .item_name {
    height: 45%;
}

.A3.sem-promocao .item_price {
    height: 45%;
}

.A3.sem-promocao .item_price .item_price_to_price .item_price_to_price_currency {
    font-size: 0.4em;
    text-align: left;
    height: 0.6em;
}

/* A4 */
.sem-promocao .item_header img {
    height: 70% !important;
    margin-top: 1em !important !important;
}

.sem-promocao .item_header.nicolini {
    background-color: #f80000;
}

.sem-promocao .item_header.atacadao {
    background-color: #000;
}

.sem-promocao .item_header.engenho {
    background-color: #000;
}

.sem-promocao .horti .item_header {
    background-color: green !important;
}

.A4.sem-promocao .item_header{
    height: 10%;
}

.A4.sem-promocao .item_name {
    font-size: 7em;
}

.A4.sem-promocao .item_price_to_price  {
    font-size: 14em;
    background-image: none;
    letter-spacing: -7px;
}

.A4.sem-promocao .item_price .item_price_to_price .item_price_to_price_currency {
    font-size: 0.4em;
    text-align: left;
    height: 0.6em;
}

.A4.sem-promocao .item_name {
    height: 45%;
}

.A4.sem-promocao .item_price {
    height: 45%;
}

/* A5 */
.A5.sem-promocao .item_header.nicolini {
    background-color: #f80000;
    height: 18% !important;
}

.A5.sem-promocao .item_header.atacadao {
    background-color: #000;
    height: 18% !important;
}

.A5.sem-promocao .item_header.engenho {
    background-color: #000;
    height: 18% !important;
}

.A5.sem-promocao .item_header {
    padding-top: 10px !important;
    padding-bottom: 10px !important;
}

.A5.sem-promocao .item_header.horti {
    background-color: green;
}

.A5.sem-promocao .item_header img {
    width: auto;
    height: 5em !important;
    margin: 0 auto !important;
    padding: 0;
}

.A5.sem-promocao .item_name{
    font-size: 4em;
}

.A5.sem-promocao .item_price .item_price_to_price {
    font-size: 10em;
    background-image: none;
    letter-spacing: -5px;
    margin: 0;
}

.A5.sem-promocao .item_price .item_price_to_price .item_price_to_price_currency {
    font-size: 0.4em;
    padding-right: 0.5em !important;
    align-self: flex-end;
    margin-bottom: 0.4em;
}

.A5.sem-promocao .item_price span.price_to_unit_desc {
    align-self: flex-end;
    letter-spacing: 2px;
    padding-left: 0.5em;
    margin-bottom: 0.4em;
}




/* A6 */
.A6.sem-promocao .item_header.nicolini {
    background-color: #f80000;
    height: 20% !important;
}

.A6.sem-promocao .item_header.atacadao {
    background-color: #000;
    height: 20% !important;
}

.A6.sem-promocao .item_header.engenho {
    background-color: #000;
    height: 20% !important;
}

.A6.sem-promocao .item_header {
    padding-top: 3px !important;
    padding-bottom: 3px !important;
}

.A6.sem-promocao .item_header img {
    width: auto;
    height: 3em !important;
    margin: 0 auto !important;
    padding: 0;
}

.A6.sem-promocao .item_name{
    font-size: 2.5em;
}

.A6.sem-promocao .item_price .item_price_to_price {
    font-size: 6em;
    background-image: none;
    letter-spacing: -5px;
    margin: 0;
}

.A6.sem-promocao .item_price .item_price_to_price .item_price_to_price_currency {
    font-size: 0.4em;
    padding-right: 0.5em !important;
    align-self: flex-end;
    margin-bottom: 0.4em;
}

.A6.sem-promocao .item_price span.price_to_unit_desc {
    align-self: flex-end;
    letter-spacing: 2px;
    padding-left: 0.5em;
    margin-bottom: 0.4em;
}

.A6.sem-promocao img.body_logo {
    width: 60px !important;
}

/* --------------------------NORMAL NOVO---------------------- */
/* A3 */
.A3.normal-novo .item_header {
    background-color: #f80000;
    height: 10% !important;
}

.A3.normal-novo .horti .item_header {
    background-color: green;
}

.A3.normal-novo .item_header img{
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
}

.A3.normal-novo .item_name,
.A3.normal-novo .item_price {
    height: 45% !important;
}

.A3.normal-novo .item_name{
    font-size: 10em;
}

.A3.normal-novo .item_price .item_price_to_price {
    font-size: 20em;
    background-image: none;
    letter-spacing: -9px;
    
}

.A3.normal-novo .item_price .item_price_to_price .item_price_to_price_currency {
    font-size: 0.4em;
    text-align: left;
    height: 0.6em;
}

.A3.normal-novo div.oferta_titulo {
    font-size: 7em;
    line-height: 1.4em;
}

/* A4 */
.A4.normal-novo .item_header.nicolini {
    background-color: #f80000;
    height: 10% !important;
}

.A4.normal-novo .item_header.atacadao {
    background-color: #000;
    height: 10% !important;
}

.A4.normal-novo .item_header.engenho {
    background-color: #000;
    height: 10% !important;
}

.A4.normal-novo .horti .item_header {
    background-color: green;
}

.A4.normal-novo .item_name,
.A4.normal-novo .item_price {
    height: 45% !important;
}

.A4.normal-novo .item_name{
    font-size: 7em;
}

.A4.normal-novo .item_price .item_price_to_price {
    font-size: 14em;
    background-image: none;
    letter-spacing: -7px;
    
}

.A4.normal-novo .item_price .item_price_to_price .item_price_to_price_currency {
    font-size: 0.4em;
    text-align: left;
    height: 0.6em;
}

.A4.normal-novo div.oferta_titulo {
    font-size: 5em;
    line-height: 1.4em;
}

.A5.normal-novo .item_header.nicolini {
    background-color: #f80000;
    height: 18% !important;
}

.A5.normal-novo .item_header.atacadao {
    background-color: #000;
    height: 18% !important;
}

.A5.normal-novo .item_header.engenho {
    background-color: #000;
    height: 18% !important;
}

.A5.normal-novo .item_header img {
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
}

.A5.normal-novo .item_name{
    font-size: 4em;
}

.A5.normal-novo .item_price .item_price_to_price {
    font-size: 10em;
    background-image: none;
    letter-spacing: -5px;
    margin: 0;
}

.A5.normal-novo .item_price .item_price_to_price .item_price_to_price_currency {
    font-size: 0.4em;
    padding-right: 0.5em !important;
    align-self: flex-end;
    margin-bottom: 0.4em;
}

.A5.normal-novo .item_price span.price_to_unit_desc {
    align-self: flex-end;
    letter-spacing: 2px;
    padding-left: 0.5em;
    margin-bottom: 0.4em;
}


/* A6 */
.A6.normal-novo .item_header.nicolini {
    background-color: #f80000;
    height: 18% !important;
}

.A6.normal-novo .item_header.atacadao {
    background-color: #000;
    height: 18% !important;
}

.A6.normal-novo .item_header.engenho {
    background-color: #000;
    height: 18% !important;
}

.A6.normal-novo .item_header img {
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
}

.A6.normal-novo .item_name{
    font-size: 2.5em;
}

.A6.normal-novo .item_price .item_price_to_price {
    font-size: 6em;
    background-image: none;
    letter-spacing: -5px;
    margin: 0;
}

.A6.normal-novo .item_price .item_price_to_price .item_price_to_price_currency {
    font-size: 0.4em;
    padding-right: 0.5em !important;
    align-self: flex-end;
    margin-bottom: 0.4em;
}

.A6.normal-novo .item_price span.price_to_unit_desc {
    align-self: flex-end;
    letter-spacing: 2px;
    padding-left: 0.5em;
    margin-bottom: 0.4em;
}

.A6.normal-novo img.body_logo {
    width: 60px !important;
}

div.oferta_titulo{ 
    color: yellow;
    text-align: center;
    width: 100%;
    font-weight: bolder;
    letter-spacing: 10px;
}

img.body_logo {
    position: absolute;
    bottom: 0;
    right: 0;
    width: 120px;
    height: auto !important;
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
    <?php $caminho_arquivo = ($tamanhoCartaz == 'A1' || $tamanhoCartaz == 'A1H' || $tamanhoCartaz == 'A3H' || $tamanhoCartaz == 'A3HD' || $tamanhoCartaz == 'A4H' || $tamanhoCartaz == 'A3' || $tamanhoCartaz == 'A4' ) ? "folders/" . $tamanhoCartaz . "/" . $tipoCartazSlug : "folders/" . $tipoCartazSlug; ?>
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
        <div class="page <?= $tamanhoCartaz.' '.$tipoCartazSlug ?><?= isset($dimensoes_cartaz['class']) ? ' '.$dimensoes_cartaz['class'] : '' ?>">
    <?php endif; ?>

    <?php if ($counter % $arr_page_config[$tamanhoCartaz]['itens_per_page'] == 0 && $counter != 0): ?>
        </div>
        <div class="page <?= $tamanhoCartaz.' '.$tipoCartazSlug ?><?= isset($dimensoes_cartaz['class']) ? ' '.$dimensoes_cartaz['class'] : '' ?>">
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
