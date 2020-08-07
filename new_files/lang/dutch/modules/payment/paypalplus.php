<?php
/* -----------------------------------------------------------------------------------------
   $Id: paypalplus.php 11836 2019-05-20 17:43:36Z Tomcraft $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


$lang_array = array(
  'MODULE_PAYMENT_PAYPALPLUS_TEXT_TITLE' => 'PayPal Plus',
  'MODULE_PAYMENT_PAYPALPLUS_TEXT_ADMIN_TITLE' => 'PayPal Plus met PayPal Express',
  'MODULE_PAYMENT_PAYPALPLUS_TEXT_INFO' => 'Selecteer een van de hier vermelde betaalmethoden door erop te klikken.',
  'MODULE_PAYMENT_PAYPALPLUS_TEXT_DESCRIPTION' => 'PayPal Plus - de vier meest populaire betaalmethoden van Duitse kopers: PayPal, automatische incasso, creditcard en factuur.<br/>Meer informatie over PayPal Plus is te vinden <a target="_blank" href="https://www.paypal.com/de/webapps/mpp/paypal-plus">hier</a>.',
  'MODULE_PAYMENT_PAYPALPLUS_ALLOWED_TITLE' => 'Toegestane zones',
  'MODULE_PAYMENT_PAYPALPLUS_ALLOWED_DESC' => 'Voer <b>individueel</b> de zones in die voor deze module moeten worden toegestaan. (bijv. AT,DE (indien leeg, zijn alle zones toegestaan))',
  'MODULE_PAYMENT_PAYPALPLUS_STATUS_TITLE' => 'Activeer PayPal Plus',
  'MODULE_PAYMENT_PAYPALPLUS_STATUS_DESC' => 'Wilt u betalingen via PayPal, creditcard, automatische incasso en aankoop op rekening accepteren?',
  'MODULE_PAYMENT_PAYPALPLUS_SORT_ORDER_TITLE' => 'Weergavevolgorde',
  'MODULE_PAYMENT_PAYPALPLUS_SORT_ORDER_DESC' => 'Weergavevolgorde. Kleinste cijfer wordt als eerste weergegeven',
  'MODULE_PAYMENT_PAYPALPLUS_ZONE_TITLE' => 'Betalingszone',
  'MODULE_PAYMENT_PAYPALPLUS_ZONE_DESC' => 'Als een zone is geselecteerd, is de betalingsmethode alleen geldig voor deze zone.',
  'MODULE_PAYMENT_PAYPALPLUS_LP' => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Maak hier nu een PayPal-rekening aan.</strong></a>',

  'MODULE_PAYMENT_PAYPALPLUS_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ACHTUNG:</font></strong> Gelieve de instellingen te maken onder "Partner Module" -> "PayPal" -> <a href="'.xtc_href_link('paypal_config.php').'"><strong>"PayPal Configuratie"</strong></a> vor!',

  'MODULE_PAYMENT_PAYPALPLUS_TEXT_ERROR_HEADING' => 'Noot:',
  'MODULE_PAYMENT_PAYPALPLUS_TEXT_ERROR_MESSAGE' => 'PayPal-betaling werd geannuleerd',

  'MODULE_PAYMENT_PAYPALPLUS_INVOICE' => 'aankoop op rekening',
);


foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>