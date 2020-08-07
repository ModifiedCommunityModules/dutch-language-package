<?php
/* -----------------------------------------------------------------------------------------
   $Id: zones.php 11585 2019-03-21 11:50:23Z GTB $   

    modified eCommerce Shopsoftware
    http://www.modified-shop.org

    Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(zones.php,v 1.3 2002/04/17); www.oscommerce.com 
   (c) 2003	 nextcommerce (zones.php,v 1.4 2003/08/13); www.nextcommerce.org
   (c) 2003  xt-commerce.com (zones.php  2005-04-29); www.xt-commerce.com

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

define('MODULE_SHIPPING_ZONES_TEXT_TITLE', 'Verzendkosten naar zones');
define('MODULE_SHIPPING_ZONES_TEXT_DESCRIPTION', 'Verzendkosten Zone gebaseerd');
define('MODULE_SHIPPING_ZONES_TEXT_WAY', 'Verzending naar:');
define('MODULE_SHIPPING_ZONES_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_ZONES_INVALID_ZONE', 'Geen verzending ter beschikking naar het geselecteerde land!');
define('MODULE_SHIPPING_ZONES_UNDEFINED_RATE', 'De verzendkosten kunnen momenteel niet berekend worden.');

define('MODULE_SHIPPING_ZONES_STATUS_TITLE' , 'Verzendkosten volgens zone methode');
define('MODULE_SHIPPING_ZONES_STATUS_DESC' , 'Wilt u zone tarief verzendkosten aanbieden?');
define('MODULE_SHIPPING_ZONES_ALLOWED_TITLE' , 'Toegestane verzendzones');
define('MODULE_SHIPPING_ZONES_ALLOWED_DESC' , 'Geef <b>afzonderlijk</b> die Zones aan, naar welke verzending mogelijk is. (bijv. AT,DE (laat leeg voor toestaan van alle zones))');
define('MODULE_SHIPPING_ZONES_TAX_CLASS_TITLE' , 'Belastingklasse');
define('MODULE_SHIPPING_ZONES_TAX_CLASS_DESC' , 'Gebruik de volgende belastingsklasse voor de verzendkosten.');
define('MODULE_SHIPPING_ZONES_ZONE_TITLE' , 'Verzendingszone');
define('MODULE_SHIPPING_ZONES_ZONE_DESC' , 'Als u een zone selecteert, wordt deze verzendmethode alleen in deze zone aangeboden.');
define('MODULE_SHIPPING_ZONES_SORT_ORDER_TITLE' , 'Sorteervolgorde');
define('MODULE_SHIPPING_ZONES_SORT_ORDER_DESC' , 'Weer te geven volgorde');
define('MODULE_SHIPPING_ZONES_NUMBER_ZONES_TITLE' , 'Aantal zones');
define('MODULE_SHIPPING_ZONES_NUMBER_ZONES_DESC' , 'Aantal verstrekte zones');
define('MODULE_SHIPPING_ZONES_DISPLAY_TITLE' , 'Display activeren');
define('MODULE_SHIPPING_ZONES_DISPLAY_DESC' , 'Wilt u aangeven of er geen verzending naar het land mogelijk is of dat er geen verzendkosten kunnen worden berekend?');

if (defined('MODULE_SHIPPING_ZONES_NUMBER_ZONES')) {
  for ($module_shipping_zones_i = 1; $module_shipping_zones_i <= MODULE_SHIPPING_ZONES_NUMBER_ZONES; $module_shipping_zones_i ++) {
    define('MODULE_SHIPPING_ZONES_COUNTRIES_'.$module_shipping_zones_i.'_TITLE' , '<hr/>Zone '.$module_shipping_zones_i.' Landen');
    define('MODULE_SHIPPING_ZONES_COUNTRIES_'.$module_shipping_zones_i.'_DESC' , 'Door middel van een kommagescheiden lijst van ISO-landencodes (2 karakters) die deel uitmaken van de zone '.$module_shipping_zones_i.'  (voer WORLD in voor de rest van de wereld).');
    define('MODULE_SHIPPING_ZONES_COST_'.$module_shipping_zones_i.'_TITLE' , 'Zone '.$module_shipping_zones_i.' Verzendkosten');
    define('MODULE_SHIPPING_ZONES_COST_'.$module_shipping_zones_i.'_DESC' , 'Verzendkosten naar zone '.$module_shipping_zones_i.' Bestimmungsorte, basierend auf einer Gruppe von max. Bestellgewichten. Beispiel: 3:8.50,7:10.50,... Gewicht von kleiner oder gleich 3 würde 8.50 für die Zone '.$module_shipping_zones_i.' Bestemmingslanden kosten.');
    define('MODULE_SHIPPING_ZONES_HANDLING_'.$module_shipping_zones_i.'_TITLE' , 'Zone '.$module_shipping_zones_i.' administratiekosten');
    define('MODULE_SHIPPING_ZONES_HANDLING_'.$module_shipping_zones_i.'_DESC' , 'Afhandelingskosten voor deze verzendzone');
  }
}
?>