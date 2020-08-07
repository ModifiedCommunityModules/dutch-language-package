<?php
/* -----------------------------------------------------------------------------------------
   $Id: dp.php 11585 2019-03-21 11:50:23Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(dp.php,v 1.4 2003/02/18 04:28:00); www.oscommerce.com
   (c) 2003 nextcommerce (dp.php,v 1.5 2003/08/13); www.nextcommerce.org
   (c) 2006 xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License
   -----------------------------------------------------------------------------------------
   Third Party contributions:
   German Post (Deutsche Post WorldNet)         	Autor:	Copyright (C) 2002 - 2003 TheMedia, Dipl.-Ing Thomas Plänkers | http://www.themedia.at & http://www.oscommerce.at

   Released under the GNU General Public License
   -----------------------------------------------------------------------------------------
   enhanced on 2010-12-08 18:17:30Z franky_n
   ---------------------------------------------------------------------------------------*/

define('MODULE_SHIPPING_DP_TEXT_TITLE', 'Duitse Post');
define('MODULE_SHIPPING_DP_TEXT_DESCRIPTION', 'Duitse Post - Module voor wereldwijde verzending');
define('MODULE_SHIPPING_DP_TEXT_WAY', 'Verzending naar');
define('MODULE_SHIPPING_DP_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_DP_INVALID_ZONE', 'Sorry, verzending naar dit land is niet mogelijk.');
define('MODULE_SHIPPING_DP_UNDEFINED_RATE', 'De verzendkosten kunnen op dit moment niet worden berekend');

define('MODULE_SHIPPING_DP_STATUS_TITLE' , 'Duitse Post WorldNet');
define('MODULE_SHIPPING_DP_STATUS_DESC' , 'Wilt u verzending via de Duitse Post aanbieden?');
define('MODULE_SHIPPING_DP_HANDLING_TITLE' , 'administratiekosten');
define('MODULE_SHIPPING_DP_HANDLING_DESC' , 'Verwerkingskosten voor deze verzendmethode in euro\'s');
define('MODULE_SHIPPING_DP_TAX_CLASS_TITLE' , 'Belastingklasse');
define('MODULE_SHIPPING_DP_TAX_CLASS_DESC' , 'Belastingklasse Pas de volgende belastingklasse toe op de verzendkosten.');
define('MODULE_SHIPPING_DP_ZONE_TITLE' , 'Verzendingszone');
define('MODULE_SHIPPING_DP_ZONE_DESC' , 'Als u een zone selecteert, wordt deze verzendmethode alleen in deze zone aangeboden.');
define('MODULE_SHIPPING_DP_SORT_ORDER_TITLE' , 'Weergavevolgorde');
define('MODULE_SHIPPING_DP_SORT_ORDER_DESC' , 'Het laagst wordt het eerst weergegeven.');
define('MODULE_SHIPPING_DP_ALLOWED_TITLE' , 'Individuele verzendzones');
define('MODULE_SHIPPING_DP_ALLOWED_DESC' , 'Voer <b>individueel</b> de zones in waarnaar verzending mogelijk moet zijn. bijv. AT,DE');
define('MODULE_SHIPPING_DP_NUMBER_ZONES_TITLE' , 'Aantal zones');
define('MODULE_SHIPPING_DP_NUMBER_ZONES_DESC' , 'Aantal verstrekte zones');
define('MODULE_SHIPPING_DP_DISPLAY_TITLE' , 'Display activeren');
define('MODULE_SHIPPING_DP_DISPLAY_DESC' , 'Wilt u aangeven of er geen verzending naar het land mogelijk is of dat er geen verzendkosten kunnen worden berekend?');

if (defined('MODULE_SHIPPING_DP_NUMBER_ZONES')) {
  for ($module_shipping_dp_i = 1; $module_shipping_dp_i <= MODULE_SHIPPING_DP_NUMBER_ZONES; $module_shipping_dp_i ++) {
    define('MODULE_SHIPPING_DP_COUNTRIES_'.$module_shipping_dp_i.'_TITLE' , '<hr/>DP Zone '.$module_shipping_dp_i.' Landen');
    define('MODULE_SHIPPING_DP_COUNTRIES_'.$module_shipping_dp_i.'_DESC' , 'Kompasgewijze lijst van de 2-karakterige ISO-landencodes van de zone '.$module_shipping_dp_i.' (ga naar WORLD voor de rest van de wereld).');
    define('MODULE_SHIPPING_DP_COST_'.$module_shipping_dp_i.'_TITLE' , 'DP Zone '.$module_shipping_dp_i.' Verzendtabel');
    define('MODULE_SHIPPING_DP_COST_'.$module_shipping_dp_i.'_DESC' , 'Verzendkosten van de zone '.$module_shipping_dp_i.' op basis van het gewicht van de bestelling. Voorbeeld: 3:8.50,7:10.50,99999:12.00... Gewichten groter dan 0 en minder dan 3 kosten 8.50, minder dan 7 kosten 10.50 voor zone '.$module_shipping_dp_i.'.');
  }
}
?>