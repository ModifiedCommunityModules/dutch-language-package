<?php
/* -----------------------------------------------------------------------------------------
   $Id: paypal.php 998 2005-07-07 14:18:20Z mz $
   XT-Commerce - community made shopping
   http://www.xt-commerce.com
   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(paypal.php,v 1.7 2002/04/17); www.oscommerce.com
   (c) 2003         nextcommerce (paypal.php,v 1.4 2003/08/13); www.nextcommerce.org
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/
define('MODULE_PAYMENT_PAYPAL_TEXT_TITLE', 'PayPal Afrekenen');
define('MODULE_PAYMENT_PAYPAL_TEXT_DESCRIPTION', 'PayPal');
define('MODULE_PAYMENT_PAYPAL_TEXT_INFO','<img src="https://www.paypal.com/de_DE/DE/i/logo/lockbox_150x47.gif" />');
define('MODULE_PAYMENT_PAYPAL_ALLOWED_TITLE' , 'Toegestane zones');
define('MODULE_PAYMENT_PAYPAL_ALLOWED_DESC' , 'Geef zones <b>individueel</b> aan welke voor deze module toegestaan zijn. (bijv. AT,DE (indien leeg zijn alle zones toegestaan))');
define('MODULE_PAYMENT_PAYPAL_STATUS_TITLE' , 'PayPal Module activeren');
define('MODULE_PAYMENT_PAYPAL_STATUS_DESC' , 'Wilt u betalingen met PayPal accepteren?');
define('MODULE_PAYMENT_PAYPAL_SORT_ORDER_TITLE' , 'Sorteervolgorde');
define('MODULE_PAYMENT_PAYPAL_SORT_ORDER_DESC' , 'Sorteervolgorde van weergave. Kleinste cijfer wordt het eerst getoond');
define('MODULE_PAYMENT_PAYPAL_ZONE_TITLE' , 'Betaalzone');
define('MODULE_PAYMENT_PAYPAL_ZONE_DESC' , 'Als een zone is gekozen, zal de betaalwijze alleen gelden voor deze zone.');
?>
