<?php
/* --------------------------------------------------------------
   $Id: csv_backend.php 11790 2019-04-18 08:06:08Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   --------------------------------------------------------------
   based on:
   (c) 2006 xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License
   --------------------------------------------------------------*/


   define('IMPORT','Import');
   define('EXPORT','Export');
   define('UPLOAD','Bestand uploaden');
   define('SELECT','Selecteer Import bestand (/import Map)');
   define('SAVE','Bewaar bestand in (/export Map)');
   define('LOAD','Verstuur bestand naar Browser');
   define('CSV_TEXTSIGN_TITLE','Tekst teken');
   define('CSV_TEXTSIGN_DESC','bv. "');
   define('CSV_SEPERATOR_TITLE','scheidingsteken');
   define('CSV_SEPERATOR_DESC','bv. ;');
   define('COMPRESS_EXPORT_TITLE','Compressie');
   define('COMPRESS_EXPORT_DESC','Compressie van export bestand');
   define('CSV_SETUP','Instellingen');
   define('TEXT_IMPORT','');
   define('TEXT_PRODUCTS','Produkten');
   define('TEXT_EXPORT','Maak exportbestand en sla dit op in /export Map');
define('CSV_CATEGORY_DEFAULT_TITLE','Categorie voor invoer');
define('CSV_CATEGORY_DEFAULT_DESC','Alle producten in het csv-importbestand die wel <b>niet</b> een categorie hebben gedefinieerd, worden in deze categorie ge&iuml;mporteerd.<br/><b>Let op:</b>Als u geen producten wilt importeren die geen categorie hebben gedefinieerd, selecteer dan categorie "Top", omdat het niet mogelijk is om in deze categorie te importeren.');
define('CSV_CAT_DEPTH_TITLE','Categorie diepte');
define('CSV_CAT_DEPTH_DESC','Hoe diep zal de categorieboom gaan? (bijv. met standaard 4: hoofdcategorie plus 3 subcategorie&euml;n)<br />Deze indicatie is belangrijk om de in de CSV geïntegreerde categorieën goed te kunnen importeren. Hetzelfde geldt voor de exportfunctie.<br /><span style="color:#c00;">Meer dan 4 kan resulteren in prestatieverlies en is waarschijnlijk niet gebruiksvriendelijk!');
?>