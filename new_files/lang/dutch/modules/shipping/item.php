<?php
/* -----------------------------------------------------------------------------------------
   $Id: item.php 11585 2019-03-21 11:50:23Z GTB $   

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(item.php,v 1.6 2003/02/16); www.oscommerce.com 
   (c) 2003	 nextcommerce (item.php,v 1.4 2003/08/13); www.nextcommerce.org
   (c) 2006 xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

define('MODULE_SHIPPING_ITEM_TEXT_TITLE', 'Verzendkosten per stuk');
define('MODULE_SHIPPING_ITEM_TEXT_DESCRIPTION', 'Verzendkosten per stuk');
define('MODULE_SHIPPING_ITEM_TEXT_WAY', 'Beste manier');
define('MODULE_SHIPPING_ITEM_INVALID_ZONE', 'Sorry, verzending naar dit land is niet mogelijk.');

define('MODULE_SHIPPING_ITEM_STATUS_TITLE' , 'Activeer verzendkosten per stuk');
define('MODULE_SHIPPING_ITEM_STATUS_DESC' , 'Wilt u verzendkosten per stuk aanbieden?');
define('MODULE_SHIPPING_ITEM_ALLOWED_TITLE' , 'Toegestane verzendzones');
define('MODULE_SHIPPING_ITEM_ALLOWED_DESC' , 'Voer <b>individueel</b> de zones in waarheen verzending mogelijk moet zijn. (bijv. AT,DE (laat dit veld leeg als u alle zones wilt toestaan))');
define('MODULE_SHIPPING_ITEM_TAX_CLASS_TITLE' , 'Belastingklasse');
define('MODULE_SHIPPING_ITEM_TAX_CLASS_DESC' , 'Pas de volgende belastingklasse toe op de verzendkosten');
define('MODULE_SHIPPING_ITEM_ZONE_TITLE' , 'Verzendingszone');
define('MODULE_SHIPPING_ITEM_ZONE_DESC' , 'Wanneer een zone wordt geselecteerd, wordt deze verzendmethode alleen op die zone toegepast.');
define('MODULE_SHIPPING_ITEM_SORT_ORDER_TITLE' , 'Sorteervolgorde');
define('MODULE_SHIPPING_ITEM_SORT_ORDER_DESC' , 'Weergavevolgorde');
define('MODULE_SHIPPING_ITEM_NUMBER_ZONES_TITLE' , 'Aantal zones');
define('MODULE_SHIPPING_ITEM_NUMBER_ZONES_DESC' , 'Aantal verstrekte zones');
define('MODULE_SHIPPING_ITEM_DISPLAY_TITLE' , 'Display activeren');
define('MODULE_SHIPPING_ITEM_DISPLAY_DESC' , 'Wilt u aangeven of er geen verzending naar het land mogelijk is of dat er geen verzendkosten kunnen worden berekend?');

if (defined('MODULE_SHIPPING_ITEM_NUMBER_ZONES')) {
  for ($module_shipping_item_i = 1; $module_shipping_item_i <= MODULE_SHIPPING_ITEM_NUMBER_ZONES; $module_shipping_item_i ++) {
    define('MODULE_SHIPPING_ITEM_COUNTRIES_'.$module_shipping_item_i.'_TITLE' , '<hr/>Zone '.$module_shipping_item_i.' Landen');
    define('MODULE_SHIPPING_ITEM_COUNTRIES_'.$module_shipping_item_i.'_DESC' , 'Kompasgewijze lijst van ISO-landencodes (2 karakters), die deel uitmaken van zone '.$module_shipping_item_i.' (voer WORLD in voor de rest van de wereld).');
    define('MODULE_SHIPPING_ITEM_COST_'.$module_shipping_item_i.'_TITLE' , 'Zone '.$module_shipping_item_i.' Verzendkosten');
    define('MODULE_SHIPPING_ITEM_COST_'.$module_shipping_item_i.'_DESC' , 'Verzendkosten per zone '.$module_shipping_item_i.' worden vermenigvuldigd met het aantal artikelen in een bestelling als deze verzendmethode is opgegeven.');
    define('MODULE_SHIPPING_ITEM_HANDLING_'.$module_shipping_item_i.'_TITLE' , 'Zone '.$module_shipping_item_i.' administratiekosten');
    define('MODULE_SHIPPING_ITEM_HANDLING_'.$module_shipping_item_i.'_DESC' , 'Afhandelingskosten voor deze verzendzone');
  }
}
?>