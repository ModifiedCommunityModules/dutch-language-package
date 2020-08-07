<?php
/* -----------------------------------------------------------------------------------------
   $Id: table.php 11585 2019-03-21 11:50:23Z GTB $   

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project (earlier name of osCommerce)
   (c) 2002-2003 osCommerce (table.php,v 1.6 2003/02/16); www.oscommerce.com 
   (c) 2003 nextcommerce (table.php,v 1.4 2003/08/13); www.nextcommerce.org
   (c) 2006 XT-Commerce

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

define('MODULE_SHIPPING_TABLE_TEXT_TITLE', 'Verzending per koerier');
define('MODULE_SHIPPING_TABLE_TEXT_DESCRIPTION', 'Verzending per koerier');
define('MODULE_SHIPPING_TABLE_TEXT_WAY', 'Verzending naar Nederland of Duitsland');
define('MODULE_SHIPPING_TABLE_TEXT_WEIGHT', 'Gewicht');
define('MODULE_SHIPPING_TABLE_TEXT_AMOUNT', 'Aantal');
define('MODULE_SHIPPING_TABLE_UNDEFINED_RATE', 'De verzendkosten kunnen op dit moment niet worden berekend.');
define('MODULE_SHIPPING_TABLE_INVALID_ZONE', 'Er is geen verzending naar dit land mogelijk!');

define('MODULE_SHIPPING_TABLE_STATUS_TITLE' , 'Vrachtkosten per tabel activeren');
define('MODULE_SHIPPING_TABLE_STATUS_DESC' , 'Wilt u vrachtkosten per tabel aanbieden?');
define('MODULE_SHIPPING_TABLE_ALLOWED_TITLE' , 'Toegestane verzendzones');
define('MODULE_SHIPPING_TABLE_ALLOWED_DESC' , 'Geef <b>een voor een</b> de zones aan waarheen een verzending mogelijk moet zijn (bijv. NL,DE (laat dit veld leeg als u alle zones wilt toestaan))');
define('MODULE_SHIPPING_TABLE_MODE_TITLE' , 'Vrachtkosten methode');
define('MODULE_SHIPPING_TABLE_MODE_DESC' , 'De Vrachtkosten zijn gebaseerd op de totaalprijs of het totale gewicht van de bestelde goederen.');
define('MODULE_SHIPPING_TABLE_TAX_CLASS_TITLE' , 'Belastingklasse');
define('MODULE_SHIPPING_TABLE_TAX_CLASS_DESC' , 'Deze belastingklass voor de vrachtkosten gebruiken');
define('MODULE_SHIPPING_TABLE_ZONE_TITLE' , 'Verzendzone');
define('MODULE_SHIPPING_TABLE_ZONE_DESC' , 'Indien een verzendzone aangegeven is wordt deze verzendmethode uitsluitend voor deze zone aangeboden.');
define('MODULE_SHIPPING_TABLE_SORT_ORDER_TITLE' , 'Sorteervolgorde');
define('MODULE_SHIPPING_TABLE_SORT_ORDER_DESC' , 'Volgorde bij de afrekening');
define('MODULE_SHIPPING_TABLE_NUMBER_ZONES_TITLE' , 'Aantal zones');
define('MODULE_SHIPPING_TABLE_NUMBER_ZONES_DESC' , 'Aantal verstrekte zones');
define('MODULE_SHIPPING_TABLE_DISPLAY_TITLE' , 'Display activeren');
define('MODULE_SHIPPING_TABLE_DISPLAY_DESC' , 'Wilt u aangeven of er geen verzending naar het land mogelijk is of dat er geen verzendkosten kunnen worden berekend?');

if (defined('MODULE_SHIPPING_TABLE_NUMBER_ZONES')) {
  for ($module_shipping_table_i = 1; $module_shipping_table_i <= MODULE_SHIPPING_TABLE_NUMBER_ZONES; $module_shipping_table_i ++) {
    define('MODULE_SHIPPING_TABLE_COUNTRIES_'.$module_shipping_table_i.'_TITLE' , '<hr/>Zone '.$module_shipping_table_i.' Landen');
    define('MODULE_SHIPPING_TABLE_COUNTRIES_'.$module_shipping_table_i.'_DESC' , 'Door middel van een kommagescheiden lijst van ISO-landencodes (2 karakters) die deel uitmaken van de zone '.$module_shipping_table_i.' (voer WORLD in voor de rest van de wereld).');
    define('MODULE_SHIPPING_TABLE_COST_'.$module_shipping_table_i.'_TITLE' , 'Zone '.$module_shipping_table_i.' Verzendkosten');
    define('MODULE_SHIPPING_TABLE_COST_'.$module_shipping_table_i.'_DESC' , 'Verzendkosten naar zone '.$module_shipping_table_i.' Bestemmingen, gebaseerd op een groep van max. bestelgewichten of winkelwagenwaarde, afhankelijk van de module-instellingen. Voorbeeld: 3:8.50,7:10.50,... Gewicht/prijs van minder dan of gelijk aan 3 zou 8,50 zijn voor de zone '.$module_shipping_table_i.' Bestemmingslanden kosten.');
    define('MODULE_SHIPPING_TABLE_HANDLING_'.$module_shipping_table_i.'_TITLE' , 'Zone '.$module_shipping_table_i.' administratiekosten');
    define('MODULE_SHIPPING_TABLE_HANDLING_'.$module_shipping_table_i.'_DESC' , 'Afhandelingskosten voor deze verzendzone');
  }
}
?>