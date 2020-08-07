<?php
/* -----------------------------------------------------------------------------------------
   $Id: freeamount.php 12469 2019-12-09 13:17:15Z GTB $   

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce( freeamount.php,v 1.01 2002/01/24 03:25:00); www.oscommerce.com 
   (c) 2003	 nextcommerce (freeamount.php,v 1.4 2003/08/13); www.nextcommerce.org
   (c) 2006 xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License 
   -----------------------------------------------------------------------------------------
   Third Party contributions:
   freeamountv2-p1         	Autor:	dwk

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

define('MODULE_SHIPPING_FREEAMOUNT_TEXT_TITLE', 'Gratis verzending');
define('MODULE_SHIPPING_FREEAMOUNT_TEXT_DESCRIPTION', 'Gratis verzending met minimale bestehoeveelheid');
define('MODULE_SHIPPING_FREEAMOUNT_TEXT_WAY', 'vanaf %s  verzenden wij uw bestelling gratis');
define('MODULE_SHIPPING_FREEAMOUNT_SORT_ORDER', 'Sorteervolgorde');

define('MODULE_SHIPPING_FREEAMOUNT_ALLOWED_TITLE' , 'Toegestane verzendzones');
define('MODULE_SHIPPING_FREEAMOUNT_ALLOWED_DESC' , 'Geef <b>afzonderlijk</b> die Zones op, waarin verzending met deze module mogelijk is. (Bijv. AT,DE (laat leeg voor toestaan van alle zones))');
define('MODULE_SHIPPING_FREEAMOUNT_STATUS_TITLE' , 'Levering met gratis verzending activeren');
define('MODULE_SHIPPING_FREEAMOUNT_STATUS_DESC' , 'Wilt u levering met gratis verzending aanbieden?');
define('MODULE_SHIPPING_FREEAMOUNT_ZONE_TITLE' , 'Verzendingszone');
define('MODULE_SHIPPING_FREEAMOUNT_ZONE_DESC' , 'Als u een zone selecteert, wordt deze verzendmethode alleen in deze zone aangeboden.');
define('MODULE_SHIPPING_FREEAMOUNT_SORT_ORDER_TITLE' , 'Sorteervolgorde');
define('MODULE_SHIPPING_FREEAMOUNT_SORT_ORDER_DESC' , 'Weergavevolgorde');
define('MODULE_SHIPPING_FREEAMOUNT_NUMBER_ZONES_TITLE' , 'Aantal zones');
define('MODULE_SHIPPING_FREEAMOUNT_NUMBER_ZONES_DESC' , 'Aantal verstrekte zones');
define('MODULE_SHIPPING_FREEAMOUNT_DISPLAY_TITLE' , 'Display activeren');
define('MODULE_SHIPPING_FREEAMOUNT_DISPLAY_DESC' , 'Wilt u aangeven of er geen verzending naar het land mogelijk is of dat er geen verzendkosten kunnen worden berekend?');

if (defined('MODULE_SHIPPING_FREEAMOUNT_NUMBER_ZONES')) {
  for ($module_shipping_freeamount_i = 1; $module_shipping_freeamount_i <= MODULE_SHIPPING_FREEAMOUNT_NUMBER_ZONES; $module_shipping_freeamount_i ++) {
    define('MODULE_SHIPPING_FREEAMOUNT_COUNTRIES_'.$module_shipping_freeamount_i.'_TITLE' , '<hr/>Zone '.$module_shipping_freeamount_i.' Landen');
    define('MODULE_SHIPPING_FREEAMOUNT_COUNTRIES_'.$module_shipping_freeamount_i.'_DESC' , 'Kommagescheiden lijst van ISO-landencodes (2 karakters), die deel uitmaken van zone '.$module_shipping_freeamount_i.' (voer WORLD in voor de rest van de wereld).');
    define('MODULE_SHIPPING_FREEAMOUNT_AMOUNT_'.$module_shipping_freeamount_i.'_TITLE' , 'Zone '.$module_shipping_freeamount_i.' Minimumbedrag');
    define('MODULE_SHIPPING_FREEAMOUNT_AMOUNT_'.$module_shipping_freeamount_i.'_DESC' , 'Minimum bestelwaarde voor zone '.$module_shipping_freeamount_i.' zodat de verzending gratis is.');
  }
}
?>