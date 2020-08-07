<?php

/* -----------------------------------------------------------------------------------------
   $Id: cash.php 11578 2019-03-21 09:41:25Z GTB $

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(cod.php,v 1.28 2003/02/14); www.oscommerce.com
   (c) 2003	 nextcommerce (invoice.php,v 1.4 2003/08/13); www.nextcommerce.org

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

define('MODULE_PAYMENT_CASH_TEXT_DESCRIPTION', 'Contante betaling');
define('MODULE_PAYMENT_CASH_TEXT_TITLE', 'Contante betaling');
define('MODULE_PAYMENT_CASH_TEXT_INFO', '');
define('MODULE_PAYMENT_CASH_STATUS_TITLE', 'Activeer de module voor contante betaling');
define('MODULE_PAYMENT_CASH_STATUS_DESC', 'Wilt u contante betalingen accepteren?');
define('MODULE_PAYMENT_CASH_ORDER_STATUS_ID_TITLE', 'Stel de status van de bestelling in');
define('MODULE_PAYMENT_CASH_ORDER_STATUS_ID_DESC', 'Stel de orders, die met deze module worden gemaakt, in op deze status');
define('MODULE_PAYMENT_CASH_SORT_ORDER_TITLE', 'Weergavevolgorde');
define('MODULE_PAYMENT_CASH_SORT_ORDER_DESC', 'Weergavevolgorde. Het kleinste cijfer wordt als eerste weergegeven.');
define('MODULE_PAYMENT_CASH_ZONE_TITLE', 'Betalingszone');
define('MODULE_PAYMENT_CASH_ZONE_DESC', 'Als een zone is geselecteerd, is de betalingsmethode alleen geldig voor deze zone.');
define('MODULE_PAYMENT_CASH_ALLOWED_TITLE', 'Toegestane zones');
define('MODULE_PAYMENT_CASH_ALLOWED_DESC', 'Geef <b>individueel</b> aan welke zones voor deze module moeten worden toegestaan. (bijv. AT,DE (indien leeg, zijn alle zones toegestaan))');

define('MODULE_PAYMENT_CASH_TEXT_EMAIL_FOOTER', 'Je betaalt de bestelling als je hem afhaalt.');
?>