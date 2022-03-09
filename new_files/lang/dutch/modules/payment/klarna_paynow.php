<?php
/* -----------------------------------------------------------------------------------------
   $Id: klarna_paynow.php 13126 2021-01-07 11:55:04Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

$klarna_code = 'KLARNA_PAYNOW';
include(DIR_FS_CATALOG.'lang/german/modules/payment/klarna.php');

$lang_array['MODULE_PAYMENT_'.$klarna_code.'_TEXT_TITLE'] = 'Klarna Betaal nu';
$lang_array['MODULE_PAYMENT_'.$klarna_code.'_TEXT_ERROR_MESSAGE'] = 'De betaling via pay now werd geannuleerd.';

foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
