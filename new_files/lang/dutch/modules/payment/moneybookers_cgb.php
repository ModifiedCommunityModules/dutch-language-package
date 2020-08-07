<?php
/* -----------------------------------------------------------------------------------------
   $Id: moneybookers_cgb.php 3598 2012-09-06 06:22:36Z dokuman $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2006 xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

define('MODULE_PAYMENT_MONEYBOOKERS_CGB_TEXT_TITLE', '');
$_var = 'carte bleue via Skrill';
if (_PAYMENT_MONEYBOOKERS_EMAILID=='') {
  $_var.='<br /><br /><b><font color="red">Gelieve eerst de instellingen onder<br /> Ext. configuratie -> Partner -> Skrill.com vor!</font></b>';
}
define('MODULE_PAYMENT_MONEYBOOKERS_CGB_TEXT_DESCRIPTION', $_var);
define('MODULE_PAYMENT_MONEYBOOKERS_CGB_NOCURRENCY_ERROR', 'Er is geen geaccepteerde Skrill taal ge&iuml;nstalleerd!');
define('MODULE_PAYMENT_MONEYBOOKERS_CGB_ERRORTEXT1', 'payment_error=');
define('MODULE_PAYMENT_MONEYBOOKERS_CGB_TEXT_INFO', '');
define('MODULE_PAYMENT_MONEYBOOKERS_CGB_ERRORTEXT2', '&error=Fout tijdens uw betaling bij Skrill!');
define('MODULE_PAYMENT_MONEYBOOKERS_CGB_ORDER_TEXT', 'Besteldatum: ');
define('MODULE_PAYMENT_MONEYBOOKERS_CGB_TEXT_ERROR', 'Fout in de betaling!');
define('MODULE_PAYMENT_MONEYBOOKERS_CGB_CONFIRMATION_TEXT', 'Bedankt voor uw bestelling!');
define('MODULE_PAYMENT_MONEYBOOKERS_CGB_TRANSACTION_FAILED_TEXT', 'Uw betalingstransactie op skrill.com is mislukt. Probeer het nog eens, of kies een andere betaalmethode!');


define('MODULE_PAYMENT_MONEYBOOKERS_CGB_STATUS_TITLE', 'Activeer Skrill');
define('MODULE_PAYMENT_MONEYBOOKERS_CGB_STATUS_DESC', 'Wilt u betalingen per skrill accepteren?');
define('MODULE_PAYMENT_MONEYBOOKERS_CGB_SORT_ORDER_TITLE', 'Weergavevolgorde');
define('MODULE_PAYMENT_MONEYBOOKERS_CGB_SORT_ORDER_DESC', 'Weergavevolgorde. Het kleinste cijfer wordt als eerste weergegeven.');
define('MODULE_PAYMENT_MONEYBOOKERS_CGB_ZONE_TITLE', 'Betalingszone');
define('MODULE_PAYMENT_MONEYBOOKERS_CGB_ZONE_DESC', 'Als een zone is geselecteerd, is de betalingsmethode alleen geldig voor deze zone.');
define('MODULE_PAYMENT_MONEYBOOKERS_CGB_ALLOWED_TITLE', 'Toegestane zones');
define('MODULE_PAYMENT_MONEYBOOKERS_CGB_ALLOWED_DESC', 'Geef <b>individueel</b> aan welke zones voor deze module moeten worden toegestaan. (bijv. AT,DE (indien leeg, zijn alle zones toegestaan))');
?>