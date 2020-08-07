<?php
/* -----------------------------------------------------------------------------------------
   $Id: paypalcart.php 11030 2017-12-08 07:50:06Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


$lang_array = array(
  'MODULE_PAYMENT_PAYPALCART_TEXT_TITLE' => 'PayPal Express',
  'MODULE_PAYMENT_PAYPALCART_TEXT_INFO' => '<img src="https://www.paypal.com/de_DE/DE/i/logo/lockbox_150x47.gif" />',
  'MODULE_PAYMENT_PAYPALCART_TEXT_DESCRIPTION' => 'PayPal Express Checkout - de PayPal-button in het winkelwagentje en op de artikelpagina voor maximale conversie.<br/>Meer informatie over PayPal Express Shortcut is te vinden <a target="_blank" href="https://www.paypal.com/de/webapps/mpp/express-checkout">hier</a>.',
  'MODULE_PAYMENT_PAYPALCART_ALLOWED_TITLE' => 'Toegestane zones',
  'MODULE_PAYMENT_PAYPALCART_ALLOWED_DESC' => 'Geef <b>individueel</b> aan welke zones voor deze module moeten worden toegestaan. (bijv. AT,DE (indien leeg, zijn alle zones toegestaan))',
  'MODULE_PAYMENT_PAYPALCART_STATUS_TITLE' => 'Activeer PayPal Express',
  'MODULE_PAYMENT_PAYPALCART_STATUS_DESC' => 'Wilt u betalingen via PayPal Express accepteren?',
  'MODULE_PAYMENT_PAYPALCART_SORT_ORDER_TITLE' => 'Weergavevolgorde',
  'MODULE_PAYMENT_PAYPALCART_SORT_ORDER_DESC' => 'Weergavevolgorde. Kleinste cijfer wordt als eerste weergegeven',
  'MODULE_PAYMENT_PAYPALCART_ZONE_TITLE' => 'Betalingszone',
  'MODULE_PAYMENT_PAYPALCART_ZONE_DESC' => 'Als een zone is geselecteerd, is de betalingsmethode alleen geldig voor deze zone.',
  'MODULE_PAYMENT_PAYPALCART_LP' => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Maak hier nu een PayPal-rekening aan.</strong></a>',

  'MODULE_PAYMENT_PAYPALCART_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">LET OP:</font></strong> Gelieve de instellingen te maken onder "Partner Module" -> "PayPal" -> <a href="'.xtc_href_link('paypal_config.php').'"><strong>"PayPal Configuratie"</strong></a> vor!',

  'MODULE_PAYMENT_PAYPALCART_TEXT_ERROR_HEADING' => 'Noot:',
  'MODULE_PAYMENT_PAYPALCART_TEXT_ERROR_MESSAGE' => 'PayPal-betaling werd geannuleerd',
  
  'TEXT_PAYPAL_CART_ACCOUNT_CREATED' => 'Wij hebben voor u een klantaccount aangemaakt met uw PayPal e-mailadres. U kunt het wachtwoord voor uw nieuwe klantaccount later opvragen via de functie "Wachtwoord vergeten".',
);


foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>