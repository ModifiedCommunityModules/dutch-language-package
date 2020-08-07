<?php
/* -----------------------------------------------------------------------------------------
   $Id: paypallink.php 12400 2019-11-08 13:28:49Z Tomcraft $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


$lang_array = array(
  'MODULE_PAYMENT_PAYPALLINK_TEXT_TITLE' => 'PayPal Link',
  'MODULE_PAYMENT_PAYPALLINK_TEXT_INFO' => '<img src="https://www.paypal.com/de_DE/DE/i/logo/lockbox_150x47.gif" />',
  'MODULE_PAYMENT_PAYPALLINK_TEXT_DESCRIPTION' => 'PayPal als betalingslink die alleen beschikbaar is voor klanten nadat de bestelling is voltooid. Bepaal zelf waar de klant het verzoek tot betaling ontvangt.',
  'MODULE_PAYMENT_PAYPALLINK_ALLOWED_TITLE' => 'Toegestane zones',
  'MODULE_PAYMENT_PAYPALLINK_ALLOWED_DESC' => 'Voer <b>individueel</b> de zones in die voor deze module moeten worden toegestaan. (bijv. AT,DE (indien leeg, zijn alle zones toegestaan))',
  'MODULE_PAYMENT_PAYPALLINK_STATUS_TITLE' => 'Activeer PayPal-link',
  'MODULE_PAYMENT_PAYPALLINK_STATUS_DESC' => 'Wilt u betalingen accepteren via PayPal-link?',
  'MODULE_PAYMENT_PAYPALLINK_SORT_ORDER_TITLE' => 'Weergavevolgorde',
  'MODULE_PAYMENT_PAYPALLINK_SORT_ORDER_DESC' => 'Weergavevolgorde. Kleinste cijfer wordt als eerste weergegeven',
  'MODULE_PAYMENT_PAYPALLINK_ZONE_TITLE' => 'Betalingszone',
  'MODULE_PAYMENT_PAYPALLINK_ZONE_DESC' => 'Als een zone is geselecteerd, is de betalingsmethode alleen geldig voor deze zone.',
  'MODULE_PAYMENT_PAYPALLINK_LP' => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Maak hier nu een PayPal-rekening aan.</strong></a>',

  'MODULE_PAYMENT_PAYPALLINK_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ACHTUNG:</font></strong> Gelieve de instellingen te maken onder "Partner Module" -> "PayPal" -> <a href="'.xtc_href_link('paypal_config.php').'"><strong>"PayPal Configuratie"</strong></a> vor!',

  'MODULE_PAYMENT_PAYPALLINK_TEXT_ERROR_HEADING' => 'Noot:',
  'MODULE_PAYMENT_PAYPALLINK_TEXT_ERROR_MESSAGE' => 'PayPal-betaling werd geannuleerd',
  
  'MODULE_PAYMENT_PAYPALLINK_TEXT_SUCCESS' => 'Betaal nu met PayPal. Klik op de volgende link:<br/> %s',
  'MODULE_PAYMENT_PAYPALLINK_TEXT_COMPLETED' => 'Bedankt voor het betalen met PayPal.',
);


foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>