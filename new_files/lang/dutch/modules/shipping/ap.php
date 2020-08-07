<?php
/* -----------------------------------------------------------------------------------------
   $Id: ap.php 11586 2019-03-21 11:52:36Z GTB $   

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(ap.php,v 1.02 2003/02/18); www.oscommerce.com 
   (c) 2003	 nextcommerce (ap.php,v 1.4 2003/08/13); www.nextcommerce.org
   (c) 2006 xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License 
   -----------------------------------------------------------------------------------------
   Third Party contributions:
   austrian_post_1.05       	Autor:	Copyright (C) 2002 - 2003 TheMedia, Dipl.-Ing Thomas Plänkers | http://www.themedia.at & http://www.oscommerce.at

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/
   

define('MODULE_SHIPPING_AP_TEXT_TITLE', 'Oostenrijkse Post AG');
define('MODULE_SHIPPING_AP_TEXT_DESCRIPTION', 'Österreichische Post AG - Wereldwijde verzendmodule');
define('MODULE_SHIPPING_AP_TEXT_WAY', 'Verzending naar');
define('MODULE_SHIPPING_AP_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_AP_INVALID_ZONE', 'Sorry, verzending naar dit land is niet mogelijk.');
define('MODULE_SHIPPING_AP_UNDEFINED_RATE', 'De verzendkosten kunnen op dit moment niet worden berekend');

define('MODULE_SHIPPING_AP_STATUS_TITLE' , 'Oostenrijkse Post AG');
define('MODULE_SHIPPING_AP_STATUS_DESC' , 'Wilt u verzending via Oostenrijkse Post AG aanbieden?');
define('MODULE_SHIPPING_AP_TAX_CLASS_TITLE' , 'Belastingtarief');
define('MODULE_SHIPPING_AP_TAX_CLASS_DESC' , 'Selecteer het BTW-tarief voor deze verzendmethode.');
define('MODULE_SHIPPING_AP_ZONE_TITLE' , 'Verzendingszone');
define('MODULE_SHIPPING_AP_ZONE_DESC' , 'Als u een zone selecteert, wordt deze verzendmethode alleen in deze zone aangeboden.');
define('MODULE_SHIPPING_AP_SORT_ORDER_TITLE' , 'Weergavevolgorde');
define('MODULE_SHIPPING_AP_SORT_ORDER_DESC' , 'Het laagst wordt het eerst weergegeven.');
define('MODULE_SHIPPING_AP_ALLOWED_TITLE' , 'Individuele verzendzones');
define('MODULE_SHIPPING_AP_ALLOWED_DESC' , 'Voer <b>individueel</b> de zones in waarnaar verzending mogelijk moet zijn. bijv. AT,DE');
define('MODULE_SHIPPING_AP_NUMBER_ZONES_TITLE' , 'Aantal zones');
define('MODULE_SHIPPING_AP_NUMBER_ZONES_DESC' , 'Aantal verstrekte zones');
define('MODULE_SHIPPING_AP_DISPLAY_TITLE' , 'Display activeren');
define('MODULE_SHIPPING_AP_DISPLAY_DESC' , 'Wilt u aangeven of er geen verzending naar het land mogelijk is of dat er geen verzendkosten kunnen worden berekend?');

if (defined('MODULE_SHIPPING_AP_NUMBER_ZONES')) {
  for ($module_shipping_ap_i = 1; $module_shipping_ap_i <= MODULE_SHIPPING_AP_NUMBER_ZONES; $module_shipping_ap_i ++) {
    define('MODULE_SHIPPING_AP_COUNTRIES_'.$module_shipping_ap_i.'_TITLE' , '<hr/>Zone '.$module_shipping_ap_i.' Landen');
    define('MODULE_SHIPPING_AP_COUNTRIES_'.$module_shipping_ap_i.'_DESC' , 'Kompasgewijze lijst van ISO-landencodes (2 karakters), die deel uitmaken van zone '.$module_shipping_ap_i.' (voer WORLD in voor de rest van de wereld).');
    define('MODULE_SHIPPING_AP_COST_'.$module_shipping_ap_i.'_TITLE' , 'Zone '.$module_shipping_ap_i.' Tarieftabel tot 20 kg');
    define('MODULE_SHIPPING_AP_COST_'.$module_shipping_ap_i.'_DESC' , 'Verzendkosten naar zone '.$module_shipping_ap_i.' Bestemmingen, gebaseerd op een groep van max. bestelgewichten. Voorbeeld: 3:8.50,7:10.50,... Gewicht minder dan of gelijk aan 3 zou 8.50 zijn voor zone '.$module_shipping_ap_i.' Bestemmingslanden kosten.');
    define('MODULE_SHIPPING_AP_HANDLING_'.$module_shipping_ap_i.'_TITLE' , 'Zone '.$module_shipping_ap_i.' administratiekosten');
    define('MODULE_SHIPPING_AP_HANDLING_'.$module_shipping_ap_i.'_DESC' , 'Afhandelingskosten voor deze verzendzone');
  }
}
?>