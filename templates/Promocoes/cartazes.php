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

.bs_row{ display: flex; flex-direction: row; flex: 1 }

.bs_flex{ display: flex !important; }

.bs_column{ flex-direction: column !important; }

.bs_justify_center{ justify-content: center !important; }

.bs_justify_between{ justify-content: space-between !important; }

.bs_justify_end{ justify-content: flex-end !important; }

.bs_align_items_center{ align-items: center !important; }

.bs_aqlign_content_center{ align-content: center !important; }

.bs_pl{ padding-left: 10px !important; }

.bs_pr{ padding-right: 10px !important; }

.bs_pt{ padding-top: 10px !important; }

.bs_pb{ padding-bottom: 10px !important; }

.bs_line_height_1{ line-height: 1 !important; }

.bs_red{ color: #e12c2a !important; }

.bs_white{ color: white !important; }

.bs_yellow{ color: yellow !important; }

.bs_bg_red{ background-color: #e12c2a !important; }

.bs_text_center{ text-align: center !important; }

.bs_align_first_baseline{ align-items: first baseline !important; }

.bs_align_flex_end{ align-items: flex-end !important; }

.bs_self_center{ align-self: center !important; }

.h-100{ height: 100% !important; }

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
    letter-spacing: 0px;
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
    margin-left: auto;
    margin-right: auto;
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
    margin-left: auto;
    margin-right: auto;
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
    color: #e12c2a;    
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
    color: #e12c2a;
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



.A1.de-por-novo .item_name_price {
    height: 50%;
    flex-direction: column;
 }

 .A1.de-por-novo .item_name {
    font-size: 15em;
    height: auto;
 }

 .A1.de-por-novo .item_price_from {
    display: inherit;
    flex: none;
    margin-top: 10em;
 }

 .A1.de-por-novo .item_price_from_price {
    background: none;
    font-size: 22em;
    color: #e12c2a;
 }

 .A1.de-por-novo .item_price_from span{
    font-size: 7em;
    font-weight: bolder;
 }

 .A1.de-por-novo .item_price {
    height: 50%;
 }


 .A1.de-por-novo .item_price_to span {
    font-size: 10em;
 }

 .A1.de-por-novo .item_price_to_price {
    background: none;
    color: inherit;
    font-size: 65em;
    color: #e12c2a;
 }

.A1H.de-por-novo .item_name_price {
    height: auto;
    flex-direction: column;
}

.A1H.de-por-novo .item_name {
    height: auto;
    font-size: 23em;
}

.A1H.de-por-novo .item_name_big {
    height: auto;
    font-size: 28em;
}

.A1H.de-por-novo .item_price_from{
    flex-direction: row;
    margin-top: 5em;
    justify-content: center;
    align-content: center;
    align-items: center;
    background: none;
}

.A1H.de-por-novo .item_price_from_price {
    background-image: none;
    font-size: 30em;
    color: #e12c2a;
}

.A1H.de-por-novo .item_price_from span {
    font-size: 15em;
    font-weight: bolder;
}

.A1H.de-por-novo .item_price {
    height: 100%;
}

.A1H.de-por-novo .item_price .by-label {
    font-size: 20em;
    font-family: "Montserrat", sans-serif;
    font-weight: bold;
}

.A1H.de-por-novo .item_price_to_price{
    background: none;
    font-size: 90em;
}

.A1H.de-por-novo .item_price_to span {
    font-size: 15em;
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

.page.A6.data-curta .price_from_unit_desc {
    font-size: 0.2em;
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

.page.A1.normal-novo .item_name, .page.A1H.normal-novo .item_name{
    height: 50%;
    font-size: 18em;
    font-weight: lighter;
}

.page.A1H.normal-novo.a1_horizontal .item_name{
    height: 100%;
    font-size: 20em;
}

.page.normal .item_price{
    height: 60%;
}

.page.A1H.normal-novo.a1_horizontal .item_price{
    height: 100%;
    page-break-after: always;
}

.page.normal .item_price_to_price{
    font-size: 9em
}

.page.A1.normal-novo .item_price_to_price, .page.A1H.normal-novo .item_price_to_price{
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
    color: #e12c2a;
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
    background-color: #e12c2a;
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
    background-color: #e12c2a;
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
    border: 2px solid #e12c2a;
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

.A1.desconto-qtd-min-novo .item_name_price{
    height: 60%;
    flex-direction: column;
}

.A1.desconto-qtd-min-novo .item_name{
    flex: none;
    font-size: 18em;
}

.A1.desconto-qtd-min-novo .item_price_from_price{
    font-size: 25em;
    margin-top: 0.5em;
    color:  #e12c2a;
    background: none;
    margin-left: 0;
}

.A1.desconto-qtd-min-novo .item_price{
    height: 40%;
}

.A1.desconto-qtd-min-novo .item_price_to_price {
    background: none;
    height: 100%;
}

.A1.desconto-qtd-min-novo .item_price_to_price_desc {
    color: black;
    font-size: 3em;
}

.A1.desconto-qtd-min-novo .item_price_to .definitive-price-container {
    font-size: 13em;
}

.A1H.desconto-qtd-min-novo .item_name_price {
    height: 100%;
    flex-direction: column;
}

.A1H.desconto-qtd-min-novo .item_name {
    flex: none;
    font-size: 22em;
}

.A1H.desconto-qtd-min-novo .item_price_from_price{
    font-size: 38em;
    color: #e12c2a;
    margin-top: 0.2em;
    background: none;
}

.A1H.desconto-qtd-min-novo .item_price {
    height: 100%;
}

.A1H.desconto-qtd-min-novo .item_price_to {
    flex: auto;
}

.A1H.desconto-qtd-min-novo .item_price_to_price {
    background: none;
}

.A1H.desconto-qtd-min-novo .item_price_to_price_desc {
    color: black;
    font-size: 3em;
    font-weight: lighter;
}

.A1H.desconto-qtd-min-novo .item_price_to .definitive-price-container {
    font-size: 21em;
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
    color: #e12c2a;
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
    color: #e12c2a;
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
    color: #e12c2a;
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

.page.clube-novo .item_price_from_price{
    display: flex;
    flex-direction: column;
}

.page.A1.clube-novo .item_name_price, .page.A1H.clube-novo .item_name_price{
    height: 50%;
    flex-direction: column;
}

.page.A1.clube-novo .item_price, .page.A1H.clube-novo .item_price{
    height: 50%;
    flex-direction: column;
}

.page.A1H.clube-novo .item_price{
    height: auto;
}

.page.A1.clube-novo .item_name, .page.A1H.clube-novo .item_name {
    font-size: 15em;
}

.page.A1.clube-novo .item_price_from_price, .page.A1H.clube-novo .item_price_from_price{
    font-size: 23em;
}

.page.A1.clube-novo span.price_from_unit_desc, .page.A1H.clube-novo span.price_from_unit_desc {
    /*margin-top: -1em;*/
}

.page.A1.clube-novo .desconto_desc{
    font-size: 5em
}

.page.A1H.clube-novo .desconto_desc{
    font-size: 7em
}

.a1-clube-title {
    font-size: 10em;
    margin-top: 1em;
}

.page.A1.clube-novo .item_price_inner, .page.A1H.clube-novo .item_price_inner{
    border: none;
    flex-direction: column
}

.page.A1.clube-novo .item_price_to_price, .page.A1H.clube-novo .item_price_to_price {
    font-size: 53em;
    background: none;
}

.page.A1.clube-novo span.price_to_unit_desc, .page.A1H.clube-novo span.price_to_unit_desc{
    /*margin-top: -1em;*/
}

.page.A1H.clube-novo.a1_horizontal .item_name_price{
    height: 100%;
    page-break-after: always;
}

.page.A1H.clube-novo.a1_horizontal .item_name {
    font-size: 24em;
}

.page.A1H.clube-novo.a1_horizontal .item_price_from_price {
    font-size: 35em;
}

.page.A1H.clube-novo.a1_horizontal .a1-clube-title {
    font-size: 17em;
    margin-top: 0;
}

.page.A1H.clube-novo.a1_horizontal .item_price_to_price {
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

.page.clube-novo .item_price_to_price {
    justify-content: center;
}

.page.clube-novo .item_name {
    font-size: 2em;
    display: flex;
    height: auto;
    flex: 6;
    margin-left: 2mm;
}
.page.clube-novo .item_price_inner{
    border: 30px solid #e12c2a;
    display: flex;
    flex-direction: row;
    width: 95%;
    height: 97%;
}

.page.clube-novo .item_price_from_price{
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

.page.clube-novo .item_price_to {
    flex: 1;
    line-height: 0.8;
}

.page.A3.clube .atacadao .item_price_to,
.page.A4.clube .atacadao .item_price_to {
    background-color: #e12c2a;
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
    border: 6px solid #e12c2a;
    border-bottom-width: 6px;
    border-bottom-style: solid;
    border-bottom-color: #e12c2a;
    border-bottom: 0;
    border-top-left-radius: 25px;
    border-top-right-radius: 25px;
    color: #e12c2a;
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
    background-color: #e12c2a;
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
    border-color: #e12c2a;
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
    background-color: #e12c2a;
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
    background-color: #e12c2a;
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
    background-color: #e12c2a;
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
    color: #e12c2a;
    font-weight: bolder;
}


.page.A3.cashback .item_price_to_price {
    font-size: 17em;
}

.page.A3.cashback .item_price_inner,
.page.A4.cashback .item_price_inner{
    background-color: inherit !important;
    border: 8px solid #e12c2a;
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
    color: #e12c2a;
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
    color: #e12c2a;
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
    color: #e12c2a;
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
    background-color: #e12c2a;
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
    background-color: #e12c2a;
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
    color: #e12c2a;
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
    color: #e12c2a;
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
    color: #e12c2a;
    margin-top: -20px
}

.page.A3.livramento-clube .item_price_to  .price_desc,
.page.A4.livramento-clube .item_price_to  .price_desc{
    font-weight: 800;
    margin-left: 10px;
    -webkit-text-stroke: 1px #000000; /* largura e cor da borda */
    color: #e12c2a;
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
    font-size: 9.5em;
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
    margin-top: 1em !important;
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
    font-size: 6.7em;
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
    width: 80px !important;
}

/* --------------------------NORMAL NOVO---------------------- */
/* A3 */
.A3.normal-novo .item_header {
    background-color: #f80000;
    height: 10% !important;
}

.A3.normal-novo .horti .item_header {
    background-color: green !important;
}

.A3.normal-novo .item_header img{
    width: 100% !important;
    height: 100%;
    margin: 0;
    padding: 0;
}

.A3.normal-novo .item_header.atacadao {
    background-color: #000;
}

.A3.normal-novo .item_header.atacadao img {
    margin: 0 auto;
}

.A3.normal-novo .item_name,
.A3.normal-novo .item_price {
    height: 45% !important;
}

.A3.normal-novo .item_name{
    font-size: 9.5em;
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

.A3.normal-novo img.body_logo {
    width: 160px !important;
    left: 50%;
    transform: translateX(-50%);
    bottom: 0.2em;
}

.A3.normal-novo .engenho img.body_logo {
    width: 250px !important;
}

.A3.normal-novo .atacadao img.body_logo {
    width: 320px !important;
}

/* A4 */
.A4.normal-novo .item_header.nicolini {
    background-color: #f80000;
    height: 10% !important;
}

.A4.normal-novo .item_header.atacadao {
    background-color: #222;
    height: 10% !important;
}

.A4.normal-novo .item_header.engenho {
    background-color: #222;
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
    font-size: 6.5em;
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

.A4.normal-novo img.body_logo {
    width: 140px !important;
    left: 50%;
    transform: translateX(-50%);
    bottom: 0.2em;
}

.A4.normal-novo .engenho img.body_logo {
    width: 180px !important;
}

.A4.normal-novo .atacadao img.body_logo {
    width: 260px !important;
}

/* A5 */
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

.A5.normal-novo .engenho img.body_logo,
.A5.normal-novo .atacadao img.body_logo {
    width: 150px !important;
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

.A6.normal-novo .engenho img.body_logo, .A6.normal-novo .atacadao img.body_logo {
    width: 100px !important;
}


/*------------------CLUBE NOVO---------------------- */
/* A3 */
.A3.clube-novo .vertical img.clube-tag {
    width: 13em;
}

.A3.clube-novo .vertical .item_header.engenho {
    flex: none;
    height: auto;
    width: 100%;
}

.A3.clube-novo .vertical .item_header.engenho img {
    width: 100%;
    height: 19em !important;
    margin: 0 auto !important;
    padding: 0;
}

.A3.clube-novo .vertical .folder_title {
    padding-left: 150px !important;
    font-size: 7em;
    text-align: center;
}

.A3.clube-novo .vertical .product_name {
    font-size: 6em;
}

.A3.clube-novo .vertical .money_label {
    font-size: 2.5em;
    margin-right: 0.2em;
    margin-bottom: 0.5em;
}

.A3.clube-novo .vertical .definitive-price-container {
    font-size: 12em !important;
}

.A3.clube-novo .vertical .unit {
    margin-bottom: 2em;
    font-size: 2em;
}

.A3.clube-novo .vertical .club_section {
    width: 80%;
    margin: 1em auto;
}

.A3.clube-novo .vertical .club_section_container {
    border: 2px solid #e12c2a;
    border-radius: 1em;
}

.A3.clube-novo .vertical .club_section_title {
    border-radius: 1em;
}

.A3.clube-novo .vertical .club_section_title h1 {
    font-size: 3em;
    text-align: center;
    padding: 0;
    margin: 0;
    padding-top: 0.5em !important;
    padding-bottom: 0.5em !important;
    font-weight: 100;
}

.A3.clube-novo .vertical .club_section_title p {
    font-size: 1.5em;
    text-align: center;
    padding: 0;
    margin: 0;
    margin-top: 0.2em;
    margin-bottom: 0.2em;
}

.A3.clube-novo .vertical .club_price {
    justify-content: center;
    align-items: center;
}

.A3.clube-novo .vertical .club_price .definitive-price-container {
    font-size: 19em !important;
}

.A3.clube-novo .vertical .club_price .money_label {
    margin-bottom: 0;
    margin-top: 4.6em;
}

.A3.clube-novo .vertical .unit_limit {
    position: relative;
    margin-top: 3.5em;
}

.A3.clube-novo .vertical .unit_limit p {
    position: absolute;
    width: 200px;
    left: -7em;
    font-size: 2em;
    top: 0.5em;
}

.A3.clube-novo .vertical .club_qrcode  {
    padding-top: 4em !important;
}

.A3.clube-novo .vertical .club_qrcode img {
    width: 80%;
}

.A3.clube-novo .vertical.atacadao .item_header {
    height: auto;
    flex: none;
}

.A3.clube-novo .vertical.atacadao .item_header img{
    width: 100% !important;
    padding: 0 !important;
    margin: 0 !important;
    height: 18em !important;
}

.A3.clube-novo .vertical.atacadao .product_name {
    font-size: 7em;
    flex: 1;
    align-content: center;
}

.A3.clube-novo .vertical.atacadao .club_desc {
    font-size: 4em;
}

.A3.clube-novo .vertical.atacadao .desconto_desc {
    font-size: 3.5em;
}

.A3.clube-novo .vertical.atacadao .club_price .definitive-price-container {
    font-size: 25em !important;
}

.A3.clube-novo .vertical.atacadao .club_price .money_label {
    margin-top: 4.5em;
    font-size: 3.5em;
}



.A3.clube-novo .engenho.vertical .product_name {
    font-size: 7.5em;
    display: flex;
    flex: 0.5;
    justify-content: center;
    align-content: center;
    align-items: center;
}

.A3.clube-novo .engenho.vertical .item_price_from_price, .A3.clube-novo .engenho.vertical .item_price_to_price {
    position: relative;
    text-align: center;
    justify-content: center;
    align-content: center;
    align-items: center;
    flex: none;
}

.A3.clube-novo .engenho.vertical .item_price_from_price_currency {
    font-size: 2em !important;
    margin-top: 0.6em;
}

.A3.clube-novo .engenho.vertical .item_price_from span.price_to_unit_desc {
    font-size: 1.2em;
    margin-top: 2em;
}

.A3.clube-novo .engenho.vertical .item_price_from .definitive-price-container {
    font-size: 5.5em !important;
}

.A3.clube-novo .engenho.vertical .from_label, .A3.clube-novo .engenho.vertical .to_label {
    font-weight: lighter;
}

.A3.clube-novo .engenho.vertical .from_label {
    font-size: 2em;
    line-height: 0.3;
    margin-top: 0.7em;
}

.A3.clube-novo .engenho.vertical .to_label {
    font-size: 1.6em;
    margin-top: 0.2em;
}

.A3.clube-novo .engenho.vertical .item_price_to {
    flex: 2;
}

.A3.clube-novo .engenho.vertical .item_price_to_price {
    background: none;
}

.A3.clube-novo .engenho.vertical .item_price_to .item_price_to_price_currency {
    font-size: 1.5em !important;
    margin-top: 0.5em;
    margin-right: 0em;
    text-align: right;
}

.A3.clube-novo .engenho.vertical .item_price_to .definitive-price-container {
    font-size: 4.8em !important;
}

.A3.clube-novo .engenho.vertical .item_price_to span.price_to_unit_desc {
    font-size: 1em;
    margin-top: 2.2em;
    top: inherit;
}

.A3.clube-novo .engenho.vertical .tag {
    width: 42em;
}

/* A4 */
.A4.clube-novo .vertical img.clube-tag {
    width: 9em;
}

.A4.clube-novo .vertical .item_header.engenho {
    flex: none;
    height: auto;
    width: 100%;
}

.A4.clube-novo .vertical .item_header.engenho img {
    width: 100%;
    height: 17em !important;
    margin: 0 auto !important;
    padding: 0;
}

.A4.clube-novo .vertical .folder_title {
    padding-left: 120px !important;
    font-size: 5em;
    text-align: center;
}

.A4.clube-novo .vertical .product_name {
    font-size: 4em;
}

.A4.clube-novo .vertical .money_label {
    font-size: 2em;
    margin-right: 0.2em;
    margin-bottom: 0.5em;
}

.A4.clube-novo .vertical .definitive-price-container {
    font-size: 9em !important;
}

.A4.clube-novo .vertical .unit {
    margin-bottom: 1.5em;
    font-size: 2em;
}

.A4.clube-novo .vertical .club_section {
    width: 85%;
    margin: 1em auto;
}

.A4.clube-novo .vertical .club_section_container {
    border: 2px solid #e12c2a;
    border-radius: 1em;
}

.A4.clube-novo .vertical .club_section_title {
    border-radius: 1em;
}

.A4.clube-novo .vertical .club_section_title h1 {
    font-size: 2.5em;
    text-align: center;
    padding: 0;
    margin: 0;
    padding-top: 0.5em !important;
    padding-bottom: 0.5em !important;
    font-weight: 100;
}

.A4.clube-novo .vertical .club_section_title p {
    font-size: 1.2em;
    text-align: center;
    padding: 0;
    margin: 0;
    margin-top: 0.2em;
    margin-bottom: 0.2em;
}

.A4.clube-novo .vertical .club_price {
    justify-content: center;
    align-items: center;
}

.A4.clube-novo .vertical .club_price .definitive-price-container {
    font-size: 15em !important;
}

.A4.clube-novo .vertical .club_price .money_label {
    margin-bottom: 0;
    margin-top: 4.6em;
}

.A4.clube-novo .vertical .unit_limit {
    position: relative;
    margin-top: 3.5em;
}

.A4.clube-novo .vertical .unit_limit p {
    position: absolute;
    width: 200px;
    left: -7em;
    font-size: 1.7em;
    top: 0.5em;
}

.A4.clube-novo .vertical .club_qrcode  {
    padding-top: 4em !important;
}

.A4.clube-novo .vertical .club_qrcode img {
    width: 80%;
}

.A4.clube-novo .vertical.atacadao .item_header {
    height: auto;
    flex: none;
}

.A4.clube-novo .vertical.atacadao .item_header img{
    width: 100% !important;
    padding: 0 !important;
    margin: 0 !important;
    height: 13em !important;
}

.A4.clube-novo .vertical.atacadao .product_name {
    font-size: 5em;
}

.A4.clube-novo .vertical.atacadao .club_desc {
    font-size: 3em;
}

.A4.clube-novo .vertical.atacadao .desconto_desc {
    font-size: 2.5em;
}

.A4.clube-novo .vertical.atacadao .club_price .definitive-price-container {
    font-size: 17em !important;
}

.A4.clube-novo .vertical.atacadao .club_price .money_label {
    margin-top: 3.5em;
    font-size: 3em;
}

.A4.clube-novo .engenho.vertical .product_name {
    font-size: 5.2em;
    display: flex;
    flex: 0.5;
    justify-content: center;
    align-content: center;
    align-items: center;
}

.A4.clube-novo .engenho.vertical .item_price_from_price, .A4.clube-novo .engenho.vertical .item_price_to_price {
    position: relative;
    text-align: center;
    justify-content: center;
    align-content: center;
    align-items: center;
    flex: none;
}

.A4.clube-novo .engenho.vertical .item_price_from_price_currency {
    font-size: 1em !important;
    margin-top: 1em;
}

.A4.clube-novo .engenho.vertical .item_price_from span.price_to_unit_desc {
    font-size: 0.8em;
    margin-top: 2em;
}

.A4.clube-novo .engenho.vertical .item_price_from .definitive-price-container {
    font-size: 3.5em !important;
}

.A4.clube-novo .engenho.vertical .from_label, .A4.clube-novo .engenho.vertical .to_label {
    font-weight: lighter;
}

.A4.clube-novo .engenho.vertical .from_label {
    font-size: 1.3em;
    line-height: 0.3;
    margin-top: 0.7em;
}

.A4.clube-novo .engenho.vertical .to_label {
    font-size: 1em;
    margin-top: 0.2em;
}

.A4.clube-novo .engenho.vertical .item_price_to {
    flex: 2;
}

.A4.clube-novo .engenho.vertical .item_price_to_price {
    background: none;
}

.A4.clube-novo .engenho.vertical .item_price_to .item_price_to_price_currency {
    font-size: 1em !important;
    margin-top: 0.5em;
    margin-right: 0em;
    text-align: right;
}

.A4.clube-novo .engenho.vertical .item_price_to .definitive-price-container {
    font-size: 3.5em !important;
}

.A4.clube-novo .engenho.vertical .item_price_to span.price_to_unit_desc {
    position: absolute;
    right: 2.5em !important;
    bottom: 0em;
    font-size: 0.4em;
    margin-top: 0;
    display: unset;
    width: auto;
    top: inherit;
    height: auto;
}

.A4.clube-novo .engenho.vertical .tag {
    width: 33em;
}

/* A5 */
.A5.clube-novo .horizontal img.clube-tag {
    width: 7em;
    align-self: center;
}

.A5.clube-novo .horizontal .item_header.engenho {
    flex: none;
    height: auto;
    width: 100%;

}

.A5.clube-novo .horizontal .item_header.engenho img {
    width: 100%;
    height: 14em !important;
    margin: 0 auto !important;
    padding: 0;
}

.A5.clube-novo .horizontal .product_name  {
    font-size: 2em;
}

.A5.clube-novo .horizontal .price_from {
}

.A5.clube-novo .horizontal .price_from span.money_label {
    font-weight: bold;
    font-size: 1.5em;
}

.A5.clube-novo .horizontal .definitive-price-container {
    font-size: 6em !important;
}

.A5.clube-novo .horizontal .unit {
    padding-top: 2.8em !important;
    padding-left: 0.5em !important;
}

.A5.clube-novo .horizontal .club_section_container {
    border: 2px solid #e12c2a;
    border-radius: 1em;
}

.A5.clube-novo .horizontal .folder_title {
    font-size: 2.9em;
    font-weight: bolder;
    text-align: left;
    margin-bottom: 0.5em;
    margin-top: 0.7em;
}

.A5.clube-novo .horizontal div.club_section {
    background-image: url("<?= $this->Url->image('clube/divisor.png') ?>");
    background-repeat: no-repeat;
    background-size: auto 100%;    
    padding-left: 1.5em !important;
    padding-right: 1.5em !important;
}

.A5.clube-novo .horizontal .club_section_title {
    border-radius: 1em;
}

.A5.clube-novo .horizontal .club_section_title h1 {
    font-size: 2.1em;
    text-align: center;
    padding-left: 0;
    padding-right: 0;
    margin: 0;
    margin-top: 0.2em;
    font-weight: 100;
    padding-bottom: 0.5em !important;
    padding-top: 0.5em !important;
}

.A5.clube-novo .horizontal .club_section_title p {
    font-size: 1em;
    text-align: center;
    padding: 0;
    margin: 0;
    margin-top: 0.2em;
    margin-bottom: 0.2em;
}

.A5.clube-novo .horizontal .club_price .definitive-price-container {
    font-size: 10em !important;
}

.A5.clube-novo .horizontal .club_price {
    align-items: center;
    justify-content: center;
}

.A5.clube-novo .horizontal .unit_limit {
    position: relative;
    margin-top: 2em;
}

.A5.clube-novo .horizontal .unit_limit span {
    padding-top: 0 !important;
    padding-left: 0 !important;
    
}

.A5.clube-novo .horizontal .unit_limit p {
    margin: 0;
    padding: 0;
    position: absolute;
    left: -6em;
    width: 150px;
    top: 1.2em;
    font-size: 1.2em;
}

.A5.clube-novo .horizontal .club_price span.money_label {
    margin-top: 2.8em;
    font-size: 1.5em;
}

.A5.clube-novo .horizontal .club_qrcode {
    padding-top: 1em !important;
    padding-bottom: 1em !important;
}

.A5.clube-novo .horizontal .club_qrcode img {
    width: 75%;
}

.A5.clube-novo .item_header.atacadao {
    height: auto;
    flex: none;
}

.A5.clube-novo .item_header.atacadao img {
    margin: 0 !important;
    padding: 0 !important;
    width: 100% !important;
    height: 9em !important;
}

.A5.clube-novo .atacadao.horizontal .price_from span.money_label {
    margin-top: 2.1em;
    margin-right: 0.2em;
    font-size: 2em;
}

.A5.clube-novo .atacadao.horizontal .price_from .definitive-price-container {
    font-size: 6.5em !important;
}

.A5.clube-novo .atacadao.horizontal .product_name {
    font-size: 3em;
}

.A5.clube-novo .atacadao.horizontal .club_desc {
    font-size: 1.4em !important;
    padding-top: 0.2em !important;
    padding-bottom: 0.2em !important;
}

.A5.clube-novo .atacadao.horizontal .desconto_desc {
    font-size: 1.6em !important;
}

.A5.clube-novo .atacadao.horizontal .club_price span.money_label {
    font-size: 2.5em;
    margin-right: 0.2em;
    margin-top: 2em;
}

.A5.clube-novo .engenho.horizontal .product_name {
    font-size: 2.8em;
    display: flex;
    flex: 0.5;
    justify-content: center;
    align-content: center;
    align-items: center;
}

.A5.clube-novo .engenho.horizontal .item_price_from_price, .A5.clube-novo .engenho.horizontal .item_price_to_price {
    position: relative;
    text-align: center;
    justify-content: center;
    align-content: center;
    align-items: center;
    flex: none;
}

.A5.clube-novo .engenho.horizontal .item_price_from_price_currency {
    font-size: 0.6em !important;
    margin-top: 2.5em;
    margin-right: 0.3em;
}

.A5.clube-novo .engenho.horizontal .item_price_from span.price_to_unit_desc {
    position: absolute;
    right: 1.9em;
    bottom: 0.9em;
    font-size: 0.5em;
    margin-top: 0;
    justify-content: normal;
}

.A5.clube-novo .engenho.horizontal .item_price_from .definitive-price-container {
    font-size: 2.2em !important;
}

.A5.clube-novo .engenho.horizontal .from_label, .A5.clube-novo .engenho.horizontal .to_label {
    font-weight: lighter;
}

.A5.clube-novo .engenho.horizontal .from_label {
    font-size: 1em;
    line-height: 0.3;
}

.A5.clube-novo .engenho.horizontal .to_label {
    font-size: 0.7em;
}

.A5.clube-novo .engenho.horizontal .item_price_to {
    flex: 2;
}

.A5.clube-novo .engenho.horizontal .item_price_to_price {
    background: none;
}

.A5.clube-novo .engenho.horizontal .item_price_to .item_price_to_price_currency {
    font-size: 0.6em !important;
    margin-top: 1.7em;
    margin-right: 0.2em;
}

.A5.clube-novo .engenho.horizontal .item_price_to .definitive-price-container {
    font-size: 2em !important;
}

.A5.clube-novo .engenho.horizontal .item_price_to span.price_to_unit_desc {
    position: absolute;
    right: 2.5em !important;
    bottom: 0em;
    font-size: 0.4em;
    margin-top: 0;
    display: unset;
    width: auto;
    top: inherit;
    height: auto;
}


/* A6 */
.A6.clube-novo .horizontal img.clube-tag {
    width: 4em;
    align-self: center;
}

.A6.clube-novo .horizontal .item_header.engenho {
    flex: none;
    height: auto;
    width: 100%;

}

.A6.clube-novo .horizontal .item_header.engenho  img {
    width: 100%;
    height: 8em !important;
    margin: 0 auto !important;
    padding: 0;
}

.A6.clube-novo .horizontal .product_name  {
    font-size: 1.2em;
}

.A6.clube-novo .horizontal .price_from {
}

.A6.clube-novo .horizontal .price_from span.money_label {
    font-weight: bold;
    font-size: 1em;
}

.A6.clube-novo .horizontal .definitive-price-container {
    font-size: 4em !important;
}

.A6.clube-novo .horizontal .unit {
    padding-top: 1.6em !important;
    padding-left: 0.5em !important;
}

.A6.clube-novo .horizontal .club_section_container {
    border: 2px solid #e12c2a;
    border-radius: 1em;
    margin-top: 0.7em;
}

.A6.clube-novo .horizontal .folder_title {
    font-size: 1.9em;
    font-weight: bolder;
    text-align: left;
    margin-bottom: 0.5em;
    margin-top: 0.7em;
}

.A6.clube-novo .horizontal div.club_section {
    background-image: url("<?= $this->Url->image('clube/divisor.png') ?>");
    background-repeat: no-repeat;
    background-size: auto 100%;
}

.A6.clube-novo .horizontal .club_section_title {
    border-radius: 1em;
}

.A6.clube-novo .horizontal .club_section_title h1 {
    font-size: 1.1em;
    text-align: center;
    padding: 0;
    margin: 0;
    margin-top: 0.2em;
    font-weight: 100;
    padding-top: 0.5em !important;
    padding-bottom: 0.5em !important;
}

.A6.clube-novo .horizontal .club_section_title p {
    font-size: 0.7em;
    text-align: center;
    padding: 0;
    margin: 0;
    margin-top: 0.2em;
    margin-bottom: 0.2em;
}

.A6.clube-novo .horizontal .club_price .definitive-price-container {
    font-size: 4.3em !important;
}

.A6.clube-novo .horizontal .club_price {
    align-items: center;
}

.A6.clube-novo .horizontal .unit_limit {
    position: relative;
    
}

.A6.clube-novo .horizontal .unit_limit span {
    padding-top: 0 !important;
    padding-left: 0 !important;
    
}

.A6.clube-novo .horizontal .unit_limit p {
    margin: 0;
    padding: 0;
    position: absolute;
    left: -3.5em;
    width: 100px;
    top: 1.5em;
}

.A6.clube-novo .horizontal .club_price span.money_label {
    margin-top: 2.8em;
}

.A6.clube-novo .horizontal .club_qrcode {
    padding-top: 1em !important;
    padding-bottom: 1em !important;
}

.A6.clube-novo .horizontal .club_qrcode img {
    width: 95%;
}

.A6.clube-novo .item_header.atacadao {
    height: auto;
    flex: none;
}

.A6.clube-novo .item_header.atacadao img {
    margin: 0 !important;
    padding: 0 !important;
    width: 100% !important;
    height: 5em !important;
}

.A6.clube-novo .atacadao.horizontal .product_name {
    font-size: 1.5em;
}

.A6.clube-novo .atacadao.horizontal .price_from .definitive-price-container {
    font-size: 3.5em !important;
}

.A6.clube-novo .atacadao.horizontal .price_from span.money_label {
    margin-top: 1.7em;
    margin-right: 0.2em;
    font-size: 1.2em;
}

.A6.clube-novo .atacadao.horizontal .club_price .definitive-price-container {
    font-size: 4.7em !important;
}

.A6.clube-novo .atacadao.horizontal .club_price span.money_label {
    font-size: 1.8em;
    margin-right: 0.2em;
    margin-top: 1em;
}

.A6.clube-novo .atacadao.horizontal .club_desc {
    font-size: 1.4em !important;
    padding-top: 0.2em !important;
    padding-bottom: 0.2em !important;
}

.A6.clube-novo .engenho.horizontal .product_name {
    font-size: 1.6em;
    display: flex;
    flex: 0.5;
    justify-content: center;
    align-content: center;
    align-items: center;
}

.A6.clube-novo .engenho.horizontal .item_price_from_price, .A6.clube-novo .engenho.horizontal .item_price_to_price {
    position: relative;
    text-align: center;
    justify-content: center;
    align-content: center;
    align-items: center;
}

.A6.clube-novo .engenho.horizontal .item_price_from_price_currency {
    font-size: 0.5em !important;
    margin-top: 1em;
}

.A6.clube-novo .engenho.horizontal .item_price_from span.price_to_unit_desc {
    position: absolute;
    right: 2em;
    bottom: 0em;
    font-size: 0.4em;
    margin-top: 0;
    justify-content: normal;
}

.A6.clube-novo .engenho.horizontal .item_price_from .definitive-price-container {
    font-size: 1.1em !important;
}

.A6.clube-novo .engenho.horizontal .from_label, .A6.clube-novo .engenho.horizontal .to_label {
    font-weight: lighter;
}

.A6.clube-novo .engenho.horizontal .from_label {
    font-size: 0.7em;
}

.A6.clube-novo .engenho.horizontal .to_label {
    font-size: 0.7em;
}

.A6.clube-novo .engenho.horizontal .item_price_to {
    flex: 2;
}

.A6.clube-novo .engenho.horizontal .item_price_to_price {
    background: none;
}

.A6.clube-novo .engenho.horizontal .item_price_to .item_price_to_price_currency {
    font-size: 0.5em !important;
    margin-top: 0.65em;
}

.A6.clube-novo .engenho.horizontal .item_price_to .definitive-price-container {
    font-size: 1em !important;
}

.A6.clube-novo .engenho.horizontal .item_price_to span.price_to_unit_desc {
    position: absolute;
    right: 0em !important;
    bottom: -0.2em;
    font-size: 0.3em;
    margin-top: 0;
    display: unset;
    width: auto;
    top: inherit;
    height: auto;
}

/* ------------------DE POR NOVO ---------------------- */

/* A3 */
.A3.de-por-novo .item_header {
    flex: none;
    height: auto;
}

.A3.de-por-novo .item_header img{
    width: 100%;
    height: auto;
    margin: 0;
    padding: 0;
}

.A3.de-por-novo .item_name{
    font-size: 8em;
    flex: 1;
    height: auto;
}

.A3.de-por-novo .item_price_from {
    display: flex;
    flex: 5;
    align-items: flex-start;
}

.A3.de-por-novo .item_price_from_price {
    background: none;
    font-size: 6em;
    display: flex;
    flex-direction: column;
}

.A3.de-por-novo .from_label {
    font-size: 1em;
    font-weight: lighter;
    margin-bottom: 0.5em;
}

.A3.de-por-novo .item_price_from_price_currency {
    font-size: 0.5em;
    line-height: 0.5em;
}

.A3.de-por-novo .item_price_from .definitive-price-container {
    font-size: 1.6em !important;
}

.A3.de-por-novo .item_price_to{
    display: flex;
    flex: 7;
    align-items: flex-start;
}

.A3.de-por-novo .item_price_to_price {
    background: none;
}

.A3.de-por-novo .to_label {
    font-size: 1.6em;
    margin-bottom: 0.5em;
    font-weight: lighter;
}

.A3.de-por-novo .item_price_to_price_currency {
    font-size: 1.3em;
    line-height: 0.5em;
}

.A3.de-por-novo div.definitive-price-container {
    font-size: 4em !important;
    line-height: 0.9;
}

/* A4 */
.A4.de-por-novo .item_header {
    flex: none;
    height: auto;
}

.A4.de-por-novo .item_name{
    font-size: 6em;
    height: auto;
    flex: 1;
}

.A4.de-por-novo .item_price_from {
    display: flex;
    flex: 5;
    align-items: flex-start;
}

.A4.de-por-novo .item_price_from_price {
    background: none;
    font-size: 6em;
    display: flex;
    flex-direction: column;
}

.A4.de-por-novo .from_label {
    font-size: 1em;
    font-weight: lighter;
    margin-bottom: 0.5em;
}

.A4.de-por-novo .item_price_from_price_currency {
    font-size: 0.5em;
    line-height: 0.5em;
}

.A4.de-por-novo .item_price_from .definitive-price-container {
    font-size: 1em !important;
}

.A4.de-por-novo .item_price_to{
    display: flex;
    flex: 7;
    align-items: flex-start;
}

.A4.de-por-novo .item_price_to_price {
    background: none;
}

.A4.de-por-novo .to_label {
    font-size: 1.6em;
    margin-bottom: 0.5em;
    font-weight: lighter;
}

.A4.de-por-novo .item_price_to_price_currency {
    font-size: 0.8em;
    line-height: 0em;
}

.A4.de-por-novo div.definitive-price-container {
    font-size: 2.7em !important;
    line-height: 1;
}

/* A5 */
.A5.de-por-novo .item_header.nicolini {
    background-color: #f80000;
    height: 18% !important;
}

.A5.de-por-novo .item_header.atacadao {
    background-color: #000;
    height: 18% !important;
}

.A5.de-por-novo .item_header.engenho {
    background-color: #000;
    height: 18% !important;
}

.A5.de-por-novo .item_header img {
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
}

.A5.de-por-novo .item_name{
    font-size: 3em;
    height: 50%;
}

.A5.de-por-novo .item_price_to_price {
    font-size: 8em;
    background-image: none;
    letter-spacing: -5px;
    margin: 0;
}

.A5.de-por-novo .to_label {
    font-size: 0.4em;
    letter-spacing: 0px;
    line-height: 0;
    font-weight: lighter;
}

.A5.de-por-novo .item_price_to_price_currency {
    font-size: 0.4em;
    padding-right: 0.5em !important;
    align-self: flex-end;
    margin-bottom: 0.4em;
}

.A5.de-por-novo .item_price span.price_to_unit_desc {
    align-self: flex-end;
    letter-spacing: 2px;
    padding-left: 0.5em;
    margin-bottom: 0.4em;
}

.A5.de-por-novo .item_price_from_price {
    display: flex;
    flex-direction: column;
    background-image: none;
    font-size: 3.4em;
}

.A5.de-por-novo .item_price_from_price .definitive-price-container {
    letter-spacing: -3px;
}

.A5.de-por-novo .from_label {
    font-size: 0.8em;
    line-height: 0.5em;
}

.A5.de-por-novo .item_price_from_price_currency {
    font-size: 0.8em;
    padding-right: 0.5em !important;
    align-self: flex-end;
    margin-bottom: 0.25em;
    letter-spacing: -3px;
}

.A5.de-por-novo .item_price_from  div.definitive-price-container {
    font-size: 1.5em !important;
}

/* A6 */
.A6.de-por-novo .item_header.nicolini {
    background-color: #f80000;
    height: 18% !important;
}

.A6.de-por-novo .item_header.atacadao {
    background-color: #000;
    height: 18% !important;
}

.A6.de-por-novo .item_header.engenho {
    background-color: #000;
    height: 18% !important;
}

.A6.de-por-novo .item_header img {
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
}

.A6.de-por-novo .item_name{
    font-size: 2.5em;
}

.A6.de-por-novo .item_price_to_price {
    font-size: 6em;
    background-image: none;
    letter-spacing: -5px;
    margin: 0;
}

.A6.de-por-novo .to_label {
    font-size: 0.4em;
    letter-spacing: 0px;
    line-height: 0;
    font-weight: lighter;
}

.A6.de-por-novo .item_price_to_price_currency {
    font-size: 0.3em;
    padding-right: 0.5em !important;
    align-self: flex-end;
    margin-bottom: 0.4em;
}

.A6.de-por-novo .item_price span.price_to_unit_desc {
    align-self: flex-end;
    letter-spacing: 2px;
    padding-left: 0.5em;
    margin-bottom: 0.4em;
}

.A6.de-por-novo .item_price_from_price {
    display: flex;
    flex-direction: column;
    background-image: none;
}

.A6.de-por-novo .item_price_from_price .definitive-price-container {
    letter-spacing: -3px;
}

.A6.de-por-novo .from_label {
    font-size: 1em;
    line-height: 0.5em;
}

.A6.de-por-novo .item_price_from_price_currency {
    font-size: 0.7em;
    padding-right: 0.3em !important;
    align-self: flex-end;
    margin-bottom: 0.2em;
    letter-spacing: -3px;
}

.A6.de-por-novo .item_price_from  div.definitive-price-container {
    font-size: 1.2em !important;
}

.A6.de-por-novo .item_price_to  div.definitive-price-container {
    font-size: 0.7em !important;
}


/*------------------PAGUE X LEVE Y NOVO---------------------- */

/* A3 */
.A3.leve-x-pague-y-novo .item_header{
    width: 100%;
    height: auto;
    flex: none;
}

.A3.leve-x-pague-y-novo .item_header img{
    width: 100% !important;
    height: 10em !important;
    margin: 0;
    padding: 0;
}

.A3.leve-x-pague-y-novo .item_name{
    font-size: 6.5em;
    flex: 0.98;
    height: auto;
    flex-direction: column
}

.A3.leve-x-pague-y-novo .item_from_price {
    height: auto;
    justify-content: center;
    display: flex;
    align-content: center;
    align-items: center;
}

.A3.leve-x-pague-y-novo .item_from_price .item_price_from_price_currency {
    font-size: 2.6em;
    padding-right: 0.5em !important;
    margin-top: 2.8em;
}

.A3.leve-x-pague-y-novo .item_from_price .definitive-price-container {
    font-size: 10.5em;
}

.A3.leve-x-pague-y-novo .item_to_price {
    height: auto;
    display: flex;
    flex: 1;
}

.A3.leve-x-pague-y-novo .item_to_price_container {
    border-radius: 10px;
    padding: 5px 10px !important;
    margin: 0 auto;
    width: 94%;
    justify-content: center;
    align-items: center;
    display: flex;
    flex-direction: column;
}

.A3.leve-x-pague-y-novo .promo_desc_smal{
    font-size: 3.5em;
    text-align: center;
    font-weight: lighter;
}

.A3.leve-x-pague-y-novo .item_to_price .definitive-price-container {
    font-size: 24em;
    line-height: 1;
}

.A3.leve-x-pague-y-novo .item_price_to_price_currency {
    font-size: 5em;
    padding-right: 0.5em !important;
    margin-top: 3em;
}

.A3.leve-x-pague-y-novo .atacadao .pague_leve_desc {
    font-size: 5.5em;
}

.A3.leve-x-pague-y-novo .atacadao .item_from_price {
    flex: 0.5;
}

/* A4 */
.A4.leve-x-pague-y-novo .item_header{
    width: 100%;
    height: auto;
    flex: none;
}

.A4.leve-x-pague-y-novo .item_header img{
    width: 100% !important;
    height: 9em !important;
    margin: 0;
    padding: 0;
}

.A4.leve-x-pague-y-novo .item_name{
    font-size: 4.5em;
    flex: 1;
    height: auto;
    flex-direction: column
}

.A4.leve-x-pague-y-novo .item_from_price {
    height: auto;
    justify-content: center;
    display: flex;
    align-content: center;
    align-items: center;
}

.A4.leve-x-pague-y-novo .item_from_price .item_price_from_price_currency {
    font-size: 2.3em;
    padding-right: 0.5em !important;
    margin-top: 2.2em;
}

.A4.leve-x-pague-y-novo .item_from_price .definitive-price-container {
    font-size: 7.5em;
}

.A4.leve-x-pague-y-novo .item_to_price {
    height: auto;
    display: flex;
    flex: 1;
}

.A4.leve-x-pague-y-novo .item_to_price_container {
    border-radius: 10px;
    padding: 5px 10px !important;
    margin: 0 auto;
    width: 94%;
    justify-content: center;
    align-items: center;
    display: flex;
    flex-direction: column;
}

.A4.leve-x-pague-y-novo .promo_desc_smal{
    font-size: 2.5em;
    text-align: center;
    font-weight: lighter;
}

.A4.leve-x-pague-y-novo .item_to_price .definitive-price-container {
    font-size: 16em;
    line-height: 1;
}

.A4.leve-x-pague-y-novo .item_price_to_price_currency {
    font-size: 3.2em;
    padding-right: 0.5em !important;
    margin-top: 3.3em;
}

.A4.leve-x-pague-y-novo .atacadao .pague_leve_desc {
    font-size: 3.5em;
}

.A4.leve-x-pague-y-novo .atacadao .item_from_price {
    flex: 0.5;
}

/* A5 */
.A5.leve-x-pague-y-novo .item_header{
    width: 100%;
    height: auto;
    flex: none;
}

.A5.leve-x-pague-y-novo .item_header img{
    width: 100%;
    height: 6em;
    margin: 0;
    padding: 0;
}

.A5.leve-x-pague-y-novo .item_name{
    font-size: 2.5em;
    flex: 1;
    height: auto;
    flex-direction: column
}

.A5.leve-x-pague-y-novo .item_from_price {
    height: auto;
    justify-content: center;
    display: flex;
    align-content: center;
    align-items: center;
}

.A5.leve-x-pague-y-novo .item_from_price .item_price_from_price_currency {
    font-size: 2em;
    padding-right: 0.5em !important;
    margin-top: 1.1em;
}

.A5.leve-x-pague-y-novo .item_from_price .definitive-price-container {
    font-size: 4.5em;
}

.A5.leve-x-pague-y-novo .item_to_price {
    height: auto;
    display: flex;
}

.A5.leve-x-pague-y-novo .item_to_price_container {
    border-radius: 10px;
    padding: 5px 10px !important;
    margin: 0 auto;
    width: 94%;
    justify-content: center;
    align-items: center;
    display: flex;
    flex-direction: column;
}

.A5.leve-x-pague-y-novo .promo_desc_smal{
    font-size: 1.5em;
    text-align: center;
    font-weight: lighter;
}

.A5.leve-x-pague-y-novo .item_to_price .definitive-price-container {
    font-size: 6.5em;
    line-height: 1;
}

.A5.leve-x-pague-y-novo .item_price_to_price_currency {
    font-size: 2.2em;
    padding-right: 0.5em !important;
    margin-top: 1.5em;
}

.A5.leve-x-pague-y-novo .atacadao .pague_leve_desc {
    font-size: 2.5em;
}

/* A6 */
.A6.leve-x-pague-y-novo .item_header{
    width: 100%;
    height: auto;
    flex: none;
}

.A6.leve-x-pague-y-novo .item_header img{
    width: 100%;
    height: 5em;
    margin: 0;
    padding: 0;
}

.A6.leve-x-pague-y-novo .item_name{
    font-size: 1.5em;
    flex: 1;
    height: auto;
    flex-direction: column
}

.A6.leve-x-pague-y-novo .item_from_price {
    height: auto;
    justify-content: center;
    display: flex;
    align-content: center;
    align-items: center;
}

.A6.leve-x-pague-y-novo .item_from_price .item_price_from_price_currency {
    font-size: 1em;
    padding-right: 0.5em !important;
    margin-top: 1.5em;
}

.A6.leve-x-pague-y-novo .item_from_price .definitive-price-container {
    font-size: 2.5em;
}

.A6.leve-x-pague-y-novo .item_to_price {
    height: auto;
    display: flex;
}

.A6.leve-x-pague-y-novo .item_to_price_container {
    border-radius: 10px;
    padding: 5px 10px !important;
    margin: 0 auto;
    width: 90%;
    justify-content: center;
    align-items: center;
    display: flex;
    flex-direction: column;
}

.A6.leve-x-pague-y-novo .promo_desc_smal{
    font-size: 1em;
    text-align: center;
    font-weight: lighter;
}

.A6.leve-x-pague-y-novo .item_to_price .definitive-price-container {
    font-size: 3.5em;
    line-height: 1;
}

.A6.leve-x-pague-y-novo .item_price_to_price_currency {
    font-size: 1.2em;
    padding-right: 0.5em !important;
    margin-top: 1.5em;
}

.A6.leve-x-pague-y-novo .atacadao .pague_leve_desc {
    font-size: 1.5em;
}

/*------------------DESCONT QTD MIN NOVOO---------------------- */

/* A3*/
.A3.desconto-qtd-min-novo .item_header {
    height: auto;
    flex: none;
}

.A3.desconto-qtd-min-novo .item_header img {
    width: 100% !important;
    height: 12em !important;
    margin: 0 !important;
    padding: 0 !important;
}

.A3.desconto-qtd-min-novo .item_name{
    font-size: 8em;
    height: auto;
    flex: 1;
}

.A3.desconto-qtd-min-novo .item_from_price {
    display: flex;
    justify-content: center;
    align-items: center;
}

.A3.desconto-qtd-min-novo .item_from_price_container {

}

.A3.desconto-qtd-min-novo .item_from_price .item_price_from_price_currency {
    font-size: 3em;
    padding-right: 0.5em !important;
    margin-top: 2.9em;
}

.A3.desconto-qtd-min-novo .item_from_price .definitive-price-container {
    font-size: 12.5em;
}

.A3.desconto-qtd-min-novo .item_to_price {
    display: flex;
    flex: 1;
}

.A3.desconto-qtd-min-novo .item_to_price_container {
    margin: 0 auto;
    width: 95%;
    border-radius: 10px;
    padding: 5px 10px !important;
    justify-content: center;
    align-items: center;
    display: flex;
    flex-direction: column;
}

.A3.desconto-qtd-min-novo .promo_desc_smal {
    text-align: center;
    font-weight: lighter;
    font-size: 3.5em;
}

.A3.desconto-qtd-min-novo .item_price_to_price_currency{
    margin-top: 2.9em;
    font-size: 5.5em;
    padding-right: 0.5em !important;
}

.A3.desconto-qtd-min-novo .item_to_price .definitive-price-container {
    font-size: 24em;
    line-height: 1;
}


/* A4*/
.A4.desconto-qtd-min-novo .item_header {
    height: auto;
    flex: none;
}

.A4.desconto-qtd-min-novo .item_header img {
    width: 100% !important;
    height: 9em !important;
    margin: 0 !important;
    padding: 0 !important;
}

.A4.desconto-qtd-min-novo .item_name{
    font-size: 6em;
    height: auto;
    flex: 1;
}

.A4.desconto-qtd-min-novo .item_from_price {
    display: flex;
    justify-content: center;
    align-items: center;
}

.A4.desconto-qtd-min-novo .item_from_price_container {

}

.A4.desconto-qtd-min-novo .item_from_price .item_price_from_price_currency {
    font-size: 2em;
    padding-right: 0.5em !important;
    margin-top: 2.5em;
}

.A4.desconto-qtd-min-novo .item_from_price .definitive-price-container {
    font-size: 7.5em;
}

.A4.desconto-qtd-min-novo .item_to_price {
    display: flex;
    flex: 1;
}

.A4.desconto-qtd-min-novo .item_to_price_container {
    margin: 0 auto;
    width: 95%;
    border-radius: 10px;
    padding: 5px 10px !important;
    justify-content: center;
    align-items: center;
    display: flex;
    flex-direction: column;
}

.A4.desconto-qtd-min-novo .promo_desc_smal {
    text-align: center;
    font-weight: lighter;
    font-size: 2.5em;
}

.A4.desconto-qtd-min-novo .item_price_to_price_currency{
    margin-top: 2.3em;
    font-size: 4.2em;
    padding-right: 0.5em !important;
}

.A4.desconto-qtd-min-novo .item_to_price .definitive-price-container {
    font-size: 16em;
    line-height: 1;
}

/* A5*/
.A5.desconto-qtd-min-novo .item_header {
    height: auto;
    flex: none;
}

.A5.desconto-qtd-min-novo .item_header img {
    width: 100%;
    height: 7em;
    margin: 0;
    padding: 0;
}

.A5.desconto-qtd-min-novo .item_name{
    font-size: 3.5em;
    height: auto;
    flex: 1;
}

.A5.desconto-qtd-min-novo .item_from_price {
    display: flex;
    justify-content: center;
    align-items: center;
}

.A5.desconto-qtd-min-novo .item_from_price_container {

}

.A5.desconto-qtd-min-novo .item_from_price .item_price_from_price_currency {
    font-size: 1.6em;
    padding-right: 0.5em !important;
    margin-top: 1.7em;
}

.A5.desconto-qtd-min-novo .item_from_price .definitive-price-container {
    font-size: 4.5em;
}

.A5.desconto-qtd-min-novo .item_to_price_container {
    margin: 0 auto;
    width: 95%;
    border-radius: 10px;
    padding: 5px 10px !important;
    justify-content: center;
    align-items: center;
    display: flex;
    flex-direction: column;
}

.A5.desconto-qtd-min-novo .promo_desc_smal {
    text-align: center;
    font-weight: lighter;
    font-size: 2em;
}

.A5.desconto-qtd-min-novo .item_price_to_price_currency{
    margin-top: 2.1em;
    font-size: 2.2em;
    padding-right: 0.5em !important;
}

.A5.desconto-qtd-min-novo .item_to_price .definitive-price-container {
    font-size: 8em;
    line-height: 1;
}

/* A6*/
.A6.desconto-qtd-min-novo .item_header {
    height: auto;
    flex: none;
}

.A6.desconto-qtd-min-novo .item_header img {
    width: 100%;
    height: 5em;
    margin: 0;
    padding: 0;
}

.A6.desconto-qtd-min-novo .item_name{
    font-size: 1.5em;
    height: auto;
    flex: 1;
}

.A6.desconto-qtd-min-novo .item_from_price {
    display: flex;
    justify-content: center;
    align-items: center;
}

.A6.desconto-qtd-min-novo .item_from_price_container {

}

.A6.desconto-qtd-min-novo .item_from_price .item_price_from_price_currency {
    font-size: 1.2em;
    padding-right: 0.5em !important;
    margin-top: 1em;
}

.A6.desconto-qtd-min-novo .item_from_price .definitive-price-container {
    font-size: 2.5em;
}

.A6.desconto-qtd-min-novo .item_to_price_container {
    margin: 0 auto;
    width: 90%;
    border-radius: 10px;
    padding: 5px 10px !important;
    justify-content: center;
    align-items: center;
    display: flex;
    flex-direction: column;
}

.A6.desconto-qtd-min-novo .promo_desc_smal {
    text-align: center;
    font-weight: lighter;
    font-size: 1em;
}

.A6.desconto-qtd-min-novo .item_price_to_price_currency{
    margin-top: 1.9em;
    font-size: 1.2em;
    padding-right: 0.5em !important;
}

.A6.desconto-qtd-min-novo .item_to_price .definitive-price-container {
    font-size: 4em;
    line-height: 1;
}

/*------------------ CASHBACK NOVO ---------------------- */


/* A3 */
.A3.cashback-novo .item_header {
    height: auto;
    flex: none;
}
.A3.cashback-novo .item_header img {
    width: 100% !important;
    height: 10.7em !important;
    margin: 0 !important;
    padding: 0 !important;
}

.A3.cashback-novo .item_name{
    font-size: 8.5em;
    height: auto;
    flex: 1;
}

.A3.cashback-novo .item_from_price {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    flex: 3;
}

.A3.cashback-novo .item_from_price .item_price_from_price_currency {
    font-size: 4em;
    padding-right: 0.5em !important;
    margin-top: 2em;
}

.A3.cashback-novo .item_from_price div.definitive-price-container {
    font-size: 13em;
}

.A3.cashback-novo div.cashback_tag{
    flex: 1;
    display: flex;
    justify-content: center;
    align-content: center;
    align-items: center;
}

.A3.cashback-novo img.cashback-tag{
    width: 13em;
    align-self: center;
}

.A3.cashback-novo .item_to_price {
    display: flex;
    flex: 5;
    flex-direction: column;
    background-color: #e12c2a;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

.A3.cashback-novo .cashback-desc {
    justify-content: center;
    align-items: center;
    display: flex;
    flex-direction: column;
}

.A3.cashback-novo .promo_desc_big {
    font-size: 13em;
}

.A3.cashback-novo .promo_desc_small {
    font-size: 3em;
    font-weight: lighter;
}

.A3.cashback-novo .cashback-return-desc {
    background-color: #f8d317;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    display: flex;
    flex: 1;
    margin-top: 1em;
    flex-direction: column;
    padding: 0.4em !important;
    justify-content: center;
    align-content: center;
    align-items: center;
    width: 36em;
    margin: 0 auto;
}

.A3.cashback-novo .return-desc {
    font-size: 3.7em;
}

.A3.cashback-novo .qr-code {
    width: 34em;
}

/* A4 */
.A4.cashback-novo .item_header {
    height: auto;
    flex: none;
}
.A4.cashback-novo .item_header img {
    width: 100% !important;
    height: 8.7em !important;
    margin: 0 !important;
    padding: 0 !important;
}

.A4.cashback-novo .item_name{
    font-size: 5.5em;
    height: auto;
    flex: 1;
}

.A4.cashback-novo .item_from_price {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    flex: 3;
}

.A4.cashback-novo .item_from_price .item_price_from_price_currency {
    font-size: 3.4em;
    padding-right: 0.5em !important;
    margin-top: 1.5em;
}

.A4.cashback-novo .item_from_price div.definitive-price-container {
    font-size: 9.2em;
}

.A4.cashback-novo div.cashback_tag{
    flex: 1;
    display: flex;
    justify-content: center;
    align-content: center;
    align-items: center;
}

.A4.cashback-novo img.cashback-tag{
    width: 9em;
    align-self: center;
}

.A4.cashback-novo .item_to_price {
    display: flex;
    flex: 5;
    flex-direction: column;
    background-color: #e12c2a;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

.A4.cashback-novo .cashback-desc {
    justify-content: center;
    align-items: center;
    display: flex;
    flex-direction: column;
}

.A4.cashback-novo .promo_desc_big {
    font-size: 10em;
}

.A4.cashback-novo .promo_desc_small {
    font-size: 2.5em;
    font-weight: lighter;
}

.A4.cashback-novo .cashback-return-desc {
    background-color: #f8d317;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    display: flex;
    flex: 1;
    margin-top: 1em;
    flex-direction: column;
    padding: 0.4em !important;
    justify-content: center;
    align-content: center;
    align-items: center;
    width: 30em;
    margin: 0 auto;
}

.A4.cashback-novo .return-desc {
    font-size: 2.7em;
}

.A4.cashback-novo .qr-code {
    width: 25em;
}

/* A5 */
.A5.cashback-novo .item_header {
    height: auto;
    flex: none;
}
.A5.cashback-novo .item_header img {
    width: 100%;
    height: 6.7em;
    margin: 0;
    padding: 0;
}

.A5.cashback-novo .item_name{
    font-size: 3.6em;
    height: auto;
    flex: 1;
}

.A5.cashback-novo .item_from_price {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.A5.cashback-novo .item_from_price .item_price_from_price_currency {
    font-size: 2.4em;
    padding-right: 0.5em !important;
    margin-top: 1em;
}

.A5.cashback-novo .item_from_price div.definitive-price-container {
    font-size: 5.2em;
}

.A5.cashback-novo div.cashback_tag{
    flex: 1;
    display: flex;
    justify-content: center;
    align-content: center;
    align-items: center;
}

.A5.cashback-novo img.cashback-tag{
    width: 7em;
    align-self: center;
}

.A5.cashback-novo .item_to_price {
    display: flex;
    flex: 4;
}

.A5.cashback-novo .cashback-desc {
    background-color: #e12c2a;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    width: 55%;
    padding-right: 6em !important;
    justify-content: center;
    align-items: center;
    display: flex;
    flex-direction: column;
}

.A5.cashback-novo .promo_desc_big {
    font-size: 6.5em;
}

.A5.cashback-novo .promo_desc_small {
    font-size: 1.5em;
    font-weight: lighter;
}

.A5.cashback-novo .cashback-return-desc {
    position: absolute;
    left: -8em;
    background-color: #f8d317;
    border-radius: 10px;
    width: 23em;
    height: 7em;
    top: 0.8em;
    display: flex;
    flex-direction: column;
    padding: 0.4em !important;
    justify-content: center;
    align-content: center;
    align-items: center;
}

.A5.cashback-novo .return-desc {
    font-size: 1.7em;
}

.A5.cashback-novo .qr-code {
    width: 15em;
}

/* A6 */
.A6.cashback-novo .item_header {
    height: auto;
    flex: none;
}
.A6.cashback-novo .item_header img {
    width: 100%;
    height: 3.7em;
    margin: 0;
    padding: 0;
}

.A6.cashback-novo .item_name{
    font-size: 1.6em;
    height: auto;
    flex: 1;
}

.A6.cashback-novo .item_from_price {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.A6.cashback-novo .item_from_price .item_price_from_price_currency {
    font-size: 1.6em;
    padding-right: 0.5em !important;
    margin-top: 1em;
}

.A6.cashback-novo .item_from_price div.definitive-price-container {
    font-size: 3.2em;
}

.A6.cashback-novo div.cashback_tag{
    flex: 1;
    display: flex;
    justify-content: center;
    align-content: center;
    align-items: center;
}

.A6.cashback-novo img.cashback-tag{
    width: 4em;
    align-self: center;
}

.A6.cashback-novo .item_to_price {
    display: flex;
    flex: 4;
}

.A6.cashback-novo .cashback-desc {
    background-color: #e12c2a;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    width: 50%;
    padding-right: 4em !important;
    justify-content: center;
    align-items: center;
    display: flex;
    flex-direction: column;
}

.A6.cashback-novo .promo_desc_big {
    font-size: 3.5em;
}

.A6.cashback-novo .promo_desc_small {
    font-size: 1em;
    font-weight: lighter;
}

.A6.cashback-novo .cashback-return-desc {
    position: absolute;
    left: -4em;
    background-color: #f8d317;
    border-radius: 10px;
    width: 11em;
    top: 0.8em;
    display: flex;
    flex-direction: column;
    padding: 0.2em !important;
    justify-content: center;
    align-content: center;
    align-items: center;
}

.A6.cashback-novo .return-desc {
    font-size: 1em;
}

.A6.cashback-novo .qr-code {
    width: 8em;
}




/* ------------------DATA CURTA NOVO ---------------------- */

/* A3 */
.A3.data-curta-novo .item_header {
    flex: none;
    height: auto;
}

.A3.data-curta-novo .item_header img{
    width: 100%;
    height: auto;
    margin: 0;
    padding: 0;
}

.A3.data-curta-novo .item_name{
    font-size: 8em;
    flex: 1;
    height: auto;
}

.A3.data-curta-novo .item_price_from {
    display: flex;
    flex: 5;
    align-items: flex-start;
}

.A3.data-curta-novo .item_price_from_price {
    background: none;
    font-size: 6em;
    display: flex;
    flex-direction: column;
}

.A3.data-curta-novo .from_label {
    font-size: 1em;
    font-weight: lighter;
    margin-bottom: 0.5em;
}

.A3.data-curta-novo .item_price_from_price_currency {
    font-size: 0.5em;
    line-height: 0.5em;
}

.A3.data-curta-novo .item_price_from .definitive-price-container {
    font-size: 1.5em !important;
}

.A3.data-curta-novo .item_price_to{
    display: flex;
    flex: 7;
    align-items: flex-start;
}

.A3.data-curta-novo .item_price_to_price {
    background: none;
}

.A3.data-curta-novo .to_label {
    font-size: 1.6em;
    margin-bottom: 0.5em;
    font-weight: lighter;
}

.A3.data-curta-novo .item_price_to_price_currency {
    font-size: 1.3em;
    line-height: 0.2em;
}

.A3.data-curta-novo div.definitive-price-container {
    font-size: 4em !important;
    line-height: 1;
}

.A3.data-curta-novo .float_logo {
    position: absolute;
    width: 100%;
    text-align: center;
    bottom: 0;
}

/* A4 */
.A4.data-curta-novo .item_header {
    flex: none;
    height: auto;
}

.A4.data-curta-novo .item_name{
    font-size: 6em;
    height: auto;
    flex: 1;
}

.A4.data-curta-novo .item_price_from {
    display: flex;
    flex: 5;
    align-items: flex-start;
}

.A4.data-curta-novo .item_price_from_price {
    background: none;
    font-size: 6em;
    display: flex;
    flex-direction: column;
}

.A4.data-curta-novo .from_label {
    font-size: 1em;
    font-weight: lighter;
    margin-bottom: 0.5em;
}

.A4.data-curta-novo .item_price_from_price_currency {
    font-size: 0.5em;
    line-height: 0.5em;
}

.A4.data-curta-novo .item_price_from .definitive-price-container {
    font-size: 1em !important;
}

.A4.data-curta-novo .item_price_to{
    display: flex;
    flex: 7;
    align-items: flex-start;
}

.A4.data-curta-novo .item_price_to_price {
    background: none;
}

.A4.data-curta-novo .to_label {
    font-size: 1.6em;
    margin-bottom: 0.5em;
    font-weight: lighter;
}

.A4.data-curta-novo .item_price_to_price_currency {
    font-size: 0.8em;
    line-height: 0em;
}

.A4.data-curta-novo div.definitive-price-container {
    font-size: 3em !important;
    line-height: 1;
}

.A4.data-curta-novo .float_logo {
    position: absolute;
    width: 100%;
    text-align: center;
    bottom: 0;
}

/* A5 */
.A5.data-curta-novo .item_header.nicolini {
    background-color: #f80000;
    height: 18% !important;
}

.A5.data-curta-novo .item_header.atacadao {
    background-color: #000;
    height: 18% !important;
}

.A5.data-curta-novo .item_header.engenho {
    background-color: #000;
    height: 18% !important;
}

.A5.data-curta-novo .item_header img {
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
}

.A5.data-curta-novo .item_name{
    font-size: 3em;
    height: 50%;
}

.A5.data-curta-novo .item_price_to_price {
    font-size: 8em;
    background-image: none;
    letter-spacing: -5px;
    margin: 0;
}

.A5.data-curta-novo .to_label {
    font-size: 0.4em;
    letter-spacing: 0px;
    line-height: 0;
    font-weight: lighter;
}

.A5.data-curta-novo .item_price_to_price_currency {
    font-size: 0.4em;
    padding-right: 0.5em !important;
    align-self: flex-end;
    margin-bottom: 0.4em;
}

.A5.data-curta-novo .item_price span.price_to_unit_desc {
    align-self: flex-end;
    letter-spacing: 2px;
    padding-left: 0.5em;
    margin-bottom: 0.4em;
}

.A5.data-curta-novo .item_price_from_price {
    display: flex;
    flex-direction: column;
    background-image: none;
    font-size: 3.4em;
}

.A5.data-curta-novo .item_price_from_price .definitive-price-container {
    letter-spacing: -3px;
}

.A5.data-curta-novo .from_label {
    font-size: 0.8em;
    line-height: 0.5em;
}

.A5.data-curta-novo .item_price_from_price_currency {
    font-size: 0.8em;
    padding-right: 0.5em !important;
    align-self: flex-end;
    margin-bottom: 0.25em;
    letter-spacing: -3px;
}

.A5.data-curta-novo .item_price_from  div.definitive-price-container {
    font-size: 1.5em !important;
}

.A5.data-curta-novo .float_logo {
    position: absolute;
    width: 100px;
    right: 0;
    bottom: 0;
}

/* A6 */
.A6.data-curta-novo .item_header.nicolini {
    background-color: #f80000;
    height: 18% !important;
}

.A6.data-curta-novo .item_header.atacadao {
    background-color: #000;
    height: 18% !important;
}

.A6.data-curta-novo .item_header.engenho {
    background-color: #000;
    height: auto !important;
}

.A6.data-curta-novo .item_header img {
    width: 100%;
    height: 4.5em;
    margin: 0;
    padding: 0;
}

.A6.data-curta-novo .item_name{
    font-size: 2.2em;
}

.A6.data-curta-novo div.definitive-price-container{
    font-size: 0.7em;
}

.A6.data-curta-novo .item_price_to_price {
    font-size: 6em;
    background-image: none;
    letter-spacing: -5px;
    margin: 0;
}

.A6.data-curta-novo .to_label {
    font-size: 0.3em;
    letter-spacing: 0px;
    line-height: 0;
    font-weight: lighter;
}

.A6.data-curta-novo .item_price_to_price_currency {
    font-size: 0.3em;
    padding-right: 0.5em !important;
    align-self: flex-end;
    margin-bottom: 0.4em;
}

.A6.data-curta-novo .item_price span.price_to_unit_desc {
    align-self: flex-end;
    letter-spacing: 2px;
    padding-left: 0.5em;
    margin-bottom: 0.4em;
}

.A6.data-curta-novo .item_price_from_price {
    display: flex;
    flex-direction: column;
    background-image: none;
}

.A6.data-curta-novo .item_price_from_price .definitive-price-container {
    letter-spacing: -3px;
}

.A6.data-curta-novo .from_label {
    font-size: 0.8em;
    line-height: 0.5em;
}

.A6.data-curta-novo .item_price_from_price_currency {
    font-size: 0.8em;
    padding-right: 0.5em !important;
    align-self: flex-end;
    margin-bottom: 0.25em;
    letter-spacing: -3px;
}

.A6.data-curta-novo .item_price_from  div.definitive-price-container {
    font-size: 1.3em !important;
}

.A6.data-curta-novo .float_logo {
    position: absolute;
    width: 36px;
    right: 0;
    bottom: 0;
}

/* ------------------ COMBO ---------------------- */

/* A3 */
.A3.combo .item_header {
    height: auto;
    flex: none;
}

.A3.combo .item_header img {
    width: 100% !important;
    height: 13em !important;
    margin: 0 !important;
    padding: 0 !important;
}

.A3.combo .item_name{
    font-size: 7.5em;
    height: auto;
    flex: 1;
}

.A3.combo .item_price {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    height: auto;
}

.A3.combo .item_price_to_price {
    background: none;
    color: black;
}

.A3.combo .item_price_to_price_currency {
    font-size: 1.4em;
    padding-right: 0.5em !important;
    margin-top: 2.8em;
}

.A3.combo div.definitive-price-container {
    font-size: 5.8em !important;
    line-height: 1;
}

.A3.combo .combo_desc {
    font-size: 4em;
    text-align: center;
    font-weight: lighter;
    background-color: #e12c2a;
    display: flex;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    color: yellow;
    flex: 1;
    justify-content: center;
    align-content: center;
    align-items: center;
}

.A3.combo .atacadao .combo_desc,
.A3.combo .engenho .combo_desc {
    background-color: transparent;
    font-size: 5em;
}

/* A4 */
.A4.combo .item_header {
    height: auto;
    flex: none;
}

.A4.combo .item_header img {
    width: 100%;
    height: 7em;
    margin: 0;
    padding: 0;
}

.A4.combo .item_name{
    font-size: 4.5em;
    height: auto;
    flex: 1;
}

.A4.combo .item_price {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    height: auto;
}

.A4.combo .item_price_to_price {
    background: none;
    color: black;
}

.A4.combo .item_price_to_price_currency {
    font-size: 1em;
    padding-right: 0.5em !important;
    margin-top: 2.6em;
}

.A4.combo div.definitive-price-container {
    font-size: 4.1em !important;
    line-height: 1;
}

.A4.combo .combo_desc {
    font-size: 2.6em;
    text-align: center;
    font-weight: lighter;
    background-color: #e12c2a;
    display: flex;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    color: yellow;
    flex: 1;
    justify-content: center;
    align-content: center;
    align-items: center;
}

.A4.combo .atacadao .combo_desc,
.A4.combo .engenho .combo_desc {
    background-color: transparent;
    font-size: 3.5em;
}

/* A5 */
.A5.combo .item_header {
    height: auto;
    flex: none;
}

.A5.combo .item_header img {
    width: 100%;
    height: 7em;
    margin: 0;
    padding: 0;
}

.A5.combo .item_name{
    font-size: 2.6em;
    height: auto;
    flex: 1;
}

.A5.combo .item_price {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    height: auto;
}

.A5.combo .item_price_to_price {
    background: none;
    color: black;
}

.A5.combo .item_price_to_price_currency {
    font-size: 0.7em;
    padding-right: 0.5em !important;
    margin-top: 1.8em;
}

.A5.combo div.definitive-price-container {
    font-size: 2.3em !important;
    line-height: 1;
}

.A5.combo .combo_desc {
    font-size: 1.6em;
    text-align: center;
    font-weight: lighter;
    background-color: #e12c2a;
    display: flex;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    color: yellow;
    flex: 1;
    justify-content: center;
    align-content: center;
    align-items: center;
}

.A5.combo .atacadao .combo_desc,
.A5.combo .engenho .combo_desc {
    background-color: transparent;
    font-size: 2em;
}

/* A6 */
.A6.combo .item_header {
    height: auto;
    flex: none;
}

.A6.combo .item_header img {
    width: 100%;
    height: 4em;
    margin: 0;
    padding: 0;
}

.A6.combo .item_name{
    font-size: 1.6em;
    height: auto;
    flex: 1;
}

.A6.combo .item_price {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    height: auto;
}

.A6.combo .item_price_to_price {
    background: none;
    color: black;
}

.A6.combo .item_price_to_price_currency {
    font-size: 0.5em;
    padding-right: 0.5em !important;
    margin-top: 1.4em;
}

.A6.combo div.definitive-price-container {
    font-size: 1.4em !important;
    line-height: 1;
}

.A6.combo .combo_desc {
    font-size: 1em;
    text-align: center;
    font-weight: lighter;
    padding-top: 0.5em !important;
    background-color: #e12c2a;
    display: flex;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    color: yellow;
    flex: 1;
    flex-direction: column;
}

.A6.combo .atacadao .combo_desc,
.A6.combo .engenho .combo_desc {
    background-color: transparent;
    font-size: 1.2em;
}


/*------------------ Liquidação ---------------------- */


/* A3 */
.A3.liquidacao .item_header {
    height: auto;
    flex: none;
}

.A3.liquidacao .item_header img {
    width: 100% !important;
    height: 11em !important;
    margin: 0 !important;
    padding: 0 !important;
}

.A3.liquidacao .item_name{
    font-size: 9em;
    height: auto !important;
    flex: 1;
}

.A3.liquidacao .item_price {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    height: auto;
    flex: 1;
}

.A3.liquidacao .item_price_to_price {
    background: none;
    margin-left: 0 !important;
}

.A3.liquidacao div.definitive-price-container {
    font-size: 7em !important;
    line-height: 1;
}

.A3.liquidacao .item_price_to_price_currency {
    font-size: 1.8em;
    text-align: left;
    line-height: 1;
}

/* A4 */
.A4.liquidacao .item_header {
    height: auto;
    flex: none;
}

.A4.liquidacao .item_header img {
    width: 100% !important;
    height: 9em !important;
    margin: 0 !important;
    padding: 0 !important;
}

.A4.liquidacao .item_name{
    font-size: 6.5em;
    height: auto !important;
    flex: 1;
}

.A4.liquidacao .item_price {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    height: auto;
    flex: 1;
}

.A4.liquidacao .item_price_to_price {
    background: none;
    margin-left: 0 !important;
}

.A4.liquidacao div.definitive-price-container {
    font-size: 5em !important;
    line-height: 1;
}

.A4.liquidacao .item_price_to_price_currency {
    font-size: 1.2em;
    text-align: left;
    line-height: 1;
}

/* A5 */
.A5.liquidacao .item_header {
    height: auto;
    flex: none;
}

.A5.liquidacao .item_header img {
    width: 100% !important;
    height: 6.5em !important;
    margin: 0 !important;
    padding: 0 !important;
}

.A5.liquidacao .item_name{
    font-size: 4em;
    height: auto !important;
    flex: 1;
}

.A5.liquidacao .item_price {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    height: auto;
    flex: 1;
}

.A5.liquidacao .item_price_to_price {
    background: none;
    margin-left: 0 !important;
}

.A5.liquidacao div.definitive-price-container {
    font-size: 2.7em !important;
    line-height: 1;
}

.A5.liquidacao .item_price_to_price_currency {
    font-size: 0.9em;
    padding-right: 0.5em !important;
    margin-top: 1.5em;
}

/* A6 */
.A6.liquidacao .item_header {
    height: auto;
    flex: none;
}

.A6.liquidacao .item_header img {
    width: 100% !important;
    height: 4em !important;
    margin: 0 !important;
    padding: 0 !important;
}

.A6.liquidacao .item_name{
    font-size: 2em;
    height: auto !important;
    flex: 1;
}

.A6.liquidacao .item_price {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    height: auto;
    flex: 1;
}

.A6.liquidacao .item_price_to_price {
    background: none;
    margin-left: 0 !important;
}

.A6.liquidacao div.definitive-price-container {
    font-size: 1.5em !important;
    line-height: 1;
}

.A6.liquidacao .item_price_to_price_currency {
    font-size: 0.6em;
    padding-right: 0.5em !important;
    margin-top: 1.2em;
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
    // Tenta renderizar o elemento do cartaz; se não existir, mostra aviso na tela
    $elementHtml = $this->element(
        $caminho_arquivo,
        ['promocao' => $promocao],
        ['ignoreMissing' => true]
    );

    if (!empty($elementHtml)) {
        echo $elementHtml;
    } else {
        // Fallback simples mantendo a grade visual
        ?>
        <div class="item_container" style="display:flex;align-items:center;justify-content:center;border:2px dashed #c00;background:#fff8f8;color:#c00;padding:10px;text-align:center;">
            <div>
                <div style="font-weight:bold;">Modelo não encontrado</div>
                <div style="font-size:0.9em;margin-top:4px;">
                    Tipo: <?= h($tipoCartazSlug) ?> | Tamanho: <?= h($tamanhoCartaz) ?>
                </div>
                <div style="font-size:0.8em;margin-top:6px;">Esse modelo não foi desenvolvido</div>
            </div>
        </div>
        <?php
    }
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
