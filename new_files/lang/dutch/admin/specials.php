<?php
/* --------------------------------------------------------------
   $Id: specials.php 4200 2013-01-10 19:47:11Z Tomcraft1980 $   

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(specials.php,v 1.10 2002/01/31); www.oscommerce.com 
   (c) 2003	 nextcommerce (specials.php,v 1.4 2003/08/14); www.nextcommerce.org
   (c) 2006 xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License 
   --------------------------------------------------------------*/

define('HEADING_TITLE', 'Speciale aanbiedingen');

define('TABLE_HEADING_PRODUCTS', 'Artikel');
define('TABLE_HEADING_PRODUCTS_QUANTITY', 'Aantal artikelen (voorraad)');
define('TABLE_HEADING_SPECIALS_QUANTITY', 'Aantal speciale aanbiedingen');
define('TABLE_HEADING_START_DATE', 'Geldig vanaf');
define('TABLE_HEADING_EXPIRES_DATE', 'Geldig tot');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Artikelprijs');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Actie');

define('TEXT_SPECIALS_PRODUCT', 'Artikel:');
define('TEXT_SPECIALS_SPECIAL_PRICE', 'Aanbieding:');
define('TEXT_SPECIALS_SPECIAL_QUANTITY', 'Aantal:');
define('TEXT_SPECIALS_START_DATE', 'Geldig van: <small>(JJJJ-MM-TT)</small>');
define('TEXT_SPECIALS_EXPIRES_DATE', 'Geldig tot: <small>(YYYY-MM-DD)</small>');

define('TEXT_INFO_DATE_ADDED', 'toegevoegd op:');
define('TEXT_INFO_LAST_MODIFIED', 'laatste wijziging:');
define('TEXT_INFO_NEW_PRICE', 'nieuwe prijs:');
define('TEXT_INFO_ORIGINAL_PRICE', 'oude prijs:');
define('TEXT_INFO_PERCENTAGE', 'Percentage:');
define('TEXT_INFO_START_DATE', 'Geldig van:');
define('TEXT_INFO_EXPIRES_DATE', 'Geldig tot:');
define('TEXT_INFO_STATUS_CHANGE', 'Status gewijzigd:');

define('TEXT_INFO_HEADING_DELETE_SPECIALS', 'Aanbieding verwijderen');
define('TEXT_INFO_DELETE_INTRO', 'Weet u zeker dat u de aanbieding wilt verwijderen?');

define('TEXT_IMAGE_NONEXISTENT','Geen afbeelding beschikbaar!');

define('TEXT_SPECIALS_PRICE_TIP', 'U kunt ook procentuele waarden invoeren in het veld Aanbiedingsprijs, bijvoorbeeld <strong>20%</strong><br>Wanneer u een nieuwe prijs invoert, moeten de cijfers achter de komma worden gescheiden door een \'.\' kan bijvoorbeeld worden gescheiden: <strong>49.99</strong>');
define('TEXT_SPECIALS_QUANTITY_TIP', 'In het veld <strong>nummer</strong> kunt u het aantal stuks invullen waarvoor de aanbieding geldig moet zijn.<br>onder "Configuratie" -> "Opties voor aandelenbeheer" -> "Bekijk de speciale aanbiedingen" kunt u beslissen of de voorraad van speciale aanbiedingen moet worden gecontroleerd.');
define('TEXT_SPECIALS_START_DATE_TIP', 'Geef de datum aan vanaf welke de aanbiedingsprijs van toepassing is.<br>');
define('TEXT_SPECIALS_EXPIRES_DATE_TIP', 'Laat het veld <strong>Geldig tot</strong> leeg als u wilt dat de aanbiedingsprijs voor onbepaalde tijd geldig is.<br>');
?>