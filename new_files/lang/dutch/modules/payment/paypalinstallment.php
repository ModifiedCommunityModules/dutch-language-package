<?php
/* -----------------------------------------------------------------------------------------
   $Id: paypalinstallment.php 11166 2018-05-30 12:57:09Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


$lang_array = array(
  'MODULE_PAYMENT_PAYPALINSTALLMENT_TEXT_TITLE' => 'Betaling in termijnen Powered by PayPal',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_TEXT_INFO' => '<img src="https://www.paypal.com/de_DE/DE/i/logo/lockbox_150x47.gif" />',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_TEXT_DESCRIPTION' => 'Betaling in termijnen Powered by PayPal<br/>Meer informatie over betaling in termijnen powered by PayPal vindt u <a target="_blank" href="https://www.paypal.com/de/webapps/mpp/installments">hier</a>.',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_ALLOWED_TITLE' => 'Toegestane zones',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_ALLOWED_DESC' => 'Voer <b>individueel</b> de zones in die voor deze module moeten worden toegestaan. (bijv. AT,DE (indien leeg, zijn alle zones toegestaan))',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_STATUS_TITLE' => 'Betaling in termijnen Powered by PayPal Activeer',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_STATUS_DESC' => 'Wilt u in termijnen betalen Powered by PayPal accepteer?',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_SORT_ORDER_TITLE' => 'Weergavevolgorde',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_SORT_ORDER_DESC' => 'Weergavevolgorde. Kleinste cijfer wordt als eerste weergegeven',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_ZONE_TITLE' => 'Betalingszone',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_ZONE_DESC' => 'Als een zone is geselecteerd, is de betalingsmethode alleen geldig voor deze zone.',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_LP' => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Maak hier nu een PayPal-rekening aan.</strong></a>',

  'MODULE_PAYMENT_PAYPALINSTALLMENT_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ACHTUNG:</font></strong> Gelieve de instellingen te maken onder "Partner Module" -> "PayPal" -> <a href="'.xtc_href_link('paypal_config.php').'"><strong>"PayPal Configuratie"</strong></a> vor!',

  'MODULE_PAYMENT_PAYPALINSTALLMENT_TEXT_ERROR_HEADING' => 'Noot:',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_TEXT_ERROR_MESSAGE' => 'PayPal-betaling werd geannuleerd',

  'MODULE_PAYMENT_PAYPALINSTALLMENT_TEXT_CHECKBOX' => 'Ik accepteer dat mijn gegevens worden doorgegeven aan PayPal.',
  'MODULE_PAYMENT_PAYPALINSTALLMENT_TEXT_ERROR_CHECKBOX' => 'Accepteert u alstublieft dat uw gegevens worden doorgestuurd naar PayPal.',
);


foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>