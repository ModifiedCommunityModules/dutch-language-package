<?php
/* -----------------------------------------------------------------------------------------
   $Id: exclude_payment.php 12545 2020-01-24 08:01:50Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

define('MODULE_EXCLUDE_PAYMENT_TEXT_TITLE', 'Betaalmethoden afhankelijk van de verzendmethode');
define('MODULE_EXCLUDE_PAYMENT_TEXT_DESCRIPTION', '');
define('MODULE_EXCLUDE_PAYMENT_STATUS_TITLE' , 'Status');
define('MODULE_EXCLUDE_PAYMENT_STATUS_DESC' , 'Activeer de module?');
define('MODULE_EXCLUDE_PAYMENT_NUMBER_TITLE' , 'Aantal verzendmethoden');
define('MODULE_EXCLUDE_PAYMENT_NUMBER_DESC' , 'Aantal te configureren verzendmethoden.');

if (defined('MODULE_EXCLUDE_PAYMENT_NUMBER')) {
  for ($module_exclude_payment_i = 1; $module_exclude_payment_i <= (int)MODULE_EXCLUDE_PAYMENT_NUMBER; $module_exclude_payment_i ++) {
    define('MODULE_EXCLUDE_PAYMENT_SHIPPING_'.$module_exclude_payment_i.'_TITLE' , '<hr noshade>'.$module_exclude_payment_i.'. Verzendmethode');
    define('MODULE_EXCLUDE_PAYMENT_SHIPPING_'.$module_exclude_payment_i.'_DESC' , 'Selecteer de verzendmethode waarvoor u een betaalmethode wilt uitsluiten.');
    define('MODULE_EXCLUDE_PAYMENT_PAYMENT_'.$module_exclude_payment_i.'_TITLE' , $module_exclude_payment_i.'. uitgesloten betalingsmethode');
    define('MODULE_EXCLUDE_PAYMENT_PAYMENT_'.$module_exclude_payment_i.'_DESC' , 'Selecteer de betalingsmethode die u wilt uitsluiten.');
  }
}
?>