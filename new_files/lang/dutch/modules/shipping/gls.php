<?php
/* -----------------------------------------------------------------------------------------
   $Id: gls.php 5121 2013-07-18 11:38:19Z Tomcraft $   

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(dp.php,v 1.4 2003/02/18 04:28:00); www.oscommerce.com 
   (c) 2003	nextcommerce (dp.php,v 1.5 2003/08/13); www.nextcommerce.org
   (c) 2009	shd-media (gls.php 899 27.05.2009);

   Released under the GNU General Public License 
   -----------------------------------------------------------------------------------------
   Third Party contributions:
   GLS (German Logistic Service) based on DP (Deutsche Post)        
   (c) 2002 - 2003 TheMedia, Dipl.-Ing Thomas Pl&auml;nkers | http://www.themedia.at & http://www.oscommerce.at
    
   GLS contribution made by shd-media (c) 2009 shd-media - www.shd-media.de
   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

define('MODULE_SHIPPING_GLS_TEXT_TITLE', 'GLS');
define('MODULE_SHIPPING_GLS_TEXT_DESCRIPTION', 'GLS - Europese verzendmodule');
define('MODULE_SHIPPING_GLS_TEXT_WAY', 'Verzending naar');
define('MODULE_SHIPPING_GLS_POSTCODE_INFO_TEXT', 'incl. eilandtoeslag');
define('MODULE_SHIPPING_GLS_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_GLS_INVALID_ZONE', 'Sorry, verzending naar dit land is niet mogelijk.');
define('MODULE_SHIPPING_GLS_UNDEFINED_RATE', 'De verzendkosten kunnen op dit moment niet worden berekend');

define('MODULE_SHIPPING_GLS_STATUS_TITLE' , 'GLS');
define('MODULE_SHIPPING_GLS_STATUS_DESC' , 'Wilt u verzending via GLS aanbieden?');
define('MODULE_SHIPPING_GLS_HANDLING_TITLE' , 'Verwerkingskosten');
define('MODULE_SHIPPING_GLS_HANDLING_DESC' , 'Verwerkingskosten voor deze verzendmethode in euro\'s');
define('MODULE_SHIPPING_GLS_TAX_CLASS_TITLE' , 'Belastingtarief');
define('MODULE_SHIPPING_GLS_TAX_CLASS_DESC' , 'Selecteer het BTW-tarief voor deze verzendmethode.');
define('MODULE_SHIPPING_GLS_ZONE_TITLE' , 'Verzendingszone');
define('MODULE_SHIPPING_GLS_ZONE_DESC' , 'Als u een zone selecteert, wordt deze verzendmethode alleen in deze zone aangeboden.');
define('MODULE_SHIPPING_GLS_SORT_ORDER_TITLE' , 'Weergavevolgorde');
define('MODULE_SHIPPING_GLS_SORT_ORDER_DESC' , 'Het laagst wordt het eerst weergegeven.');
define('MODULE_SHIPPING_GLS_ALLOWED_TITLE' , 'Individuele verzendzones');
define('MODULE_SHIPPING_GLS_ALLOWED_DESC' , 'Voer <b>individueel</b> de zones in waarheen verzending mogelijk moet zijn, bijv: AT,DE');

define('MODULE_SHIPPING_GLS_COUNTRIES_1_TITLE' , 'GLS Landen van zone 1');
define('MODULE_SHIPPING_GLS_COUNTRIES_1_DESC' , 'Door middel van een kommagescheiden lijst van twee karakters ISO-landencodes die deel uitmaken van zone 1 (voer WORLD in voor de rest van de wereld).');
define('MODULE_SHIPPING_GLS_COST_1_TITLE' , 'GLS Verzendkosten tabel voor zone 1');
define('MODULE_SHIPPING_GLS_COST_1_DESC' , 'Verzendkosten voor landen in zone 1 op basis van een gewichtsindicatie (van-naar) van de bestelling. Voorbeeld: 0-3:8.50,3-7:10.50,etc. Gewichten groter dan 0 en kleiner dan of gelijk aan 3 zouden voor de landen van zone 1 8.50 zijn.');

define('MODULE_SHIPPING_GLS_COUNTRIES_2_TITLE' , 'GLS Zone 2 Landen');
define('MODULE_SHIPPING_GLS_COUNTRIES_2_DESC' , 'Door middel van een kommagescheiden lijst van twee karakters ISO-landencodes die deel uitmaken van zone 2 (voer WORLD in voor de rest van de wereld).');
define('MODULE_SHIPPING_GLS_COST_2_TITLE' , 'GLS Zone 2 verzendkosten tabel');
define('MODULE_SHIPPING_GLS_COST_2_DESC' , 'Verzendkosten voor landen in zone 1 op basis van een gewichtsindicatie (van-naar) van de bestelling. Voorbeeld: 0-3:8.50,3-7:10.50,etc. Gewichten groter dan 0 en kleiner dan of gelijk aan 3 zouden voor de landen van zone 1 8.50 zijn.');

define('MODULE_SHIPPING_GLS_COUNTRIES_3_TITLE' , 'GLS Zone 3 landen');
define('MODULE_SHIPPING_GLS_COUNTRIES_3_DESC' , 'Door middel van een kommagescheiden lijst van twee karakters ISO-landencodes die deel uitmaken van zone 3 (voer WORLD in voor de rest van de wereld).');
define('MODULE_SHIPPING_GLS_COST_3_TITLE' , 'GLS Zone 3 verzendkosten tabel');
define('MODULE_SHIPPING_GLS_COST_3_DESC' , 'Verzendkosten voor landen in zone 1 op basis van een gewichtsindicatie (van-naar) van de bestelling. Voorbeeld: 0-3:8.50,3-7:10.50,etc. Gewichten groter dan 0 en kleiner dan of gelijk aan 3 zouden voor de landen van zone 1 8.50 zijn.');

define('MODULE_SHIPPING_GLS_COUNTRIES_4_TITLE' , 'GLS Zone 4 Landen');
define('MODULE_SHIPPING_GLS_COUNTRIES_4_DESC' , 'Door middel van een kommagescheiden lijst van twee karakters ISO-landencodes die deel uitmaken van zone 4 (voer WORLD in voor de rest van de wereld).');
define('MODULE_SHIPPING_GLS_COST_4_TITLE' , 'GLS Zone 4 Verzendkosten tabel');
define('MODULE_SHIPPING_GLS_COST_4_DESC' , 'Verzendkosten voor landen in zone 1 op basis van een gewichtsindicatie (van-naar) van de bestelling. Voorbeeld: 0-3:8.50,3-7:10.50,etc. Gewichten groter dan 0 en kleiner dan of gelijk aan 3 zouden voor de landen van zone 1 8.50 zijn.');

define('MODULE_SHIPPING_GLS_COUNTRIES_5_TITLE' , 'GLS Zone 5 Landen');
define('MODULE_SHIPPING_GLS_COUNTRIES_5_DESC' , 'Door middel van een kommagescheiden lijst van twee karakters ISO-landencodes die deel uitmaken van zone 5 (voer WORLD in voor de rest van de wereld).');
define('MODULE_SHIPPING_GLS_COST_5_TITLE' , 'GLS Zone 5 Verzendkosten tabel');
define('MODULE_SHIPPING_GLS_COST_5_DESC' , 'Verzendkosten voor landen in zone 1 op basis van een gewichtsindicatie (van-naar) van de bestelling. Voorbeeld: 0-3:8.50,3-7:10.50,etc. Gewichten groter dan 0 en kleiner dan of gelijk aan 3 zouden voor de landen van zone 1 8.50 zijn.');

define('MODULE_SHIPPING_GLS_COUNTRIES_6_TITLE' , 'GLS Zone 6 Landen');
define('MODULE_SHIPPING_GLS_COUNTRIES_6_DESC' , 'Door middel van een kommagescheiden lijst van twee karakters ISO-landencodes die deel uitmaken van zone 6 (voer WORLD in voor de rest van de wereld).');
define('MODULE_SHIPPING_GLS_COST_6_TITLE' , 'GLS Zone 6 Verzendkosten tabel');
define('MODULE_SHIPPING_GLS_COST_6_DESC' , 'Verzendkosten voor landen in zone 1 op basis van een gewichtsindicatie (van-naar) van de bestelling. Voorbeeld: 0-3:8.50,3-7:10.50,etc. Gewichten groter dan 0 en kleiner dan of gelijk aan 3 zouden voor de landen van zone 1 8.50 zijn.');

define('MODULE_SHIPPING_GLS_POSTCODE_TITLE' , 'GLS Eiland Toeslag - Postcodes');
define('MODULE_SHIPPING_GLS_POSTCODE_DESC' , 'Postcodegebieden');
define('MODULE_SHIPPING_GLS_POSTCODE_EXTRA_COST_TITLE' , 'GLS-eilandtoeslag - kosten');
define('MODULE_SHIPPING_GLS_POSTCODE_EXTRA_COST_DESC' , 'Eilandtoeslag: Vul hier in hoeveel moet worden opgeteld bij de verzendkosten als het afleveradres op een Duits eiland ligt');
?>