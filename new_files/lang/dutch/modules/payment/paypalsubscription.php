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
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_TEXT_TITLE' => 'PayPal-abonnement',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_TEXT_INFO' => '<img src="https://www.paypal.com/de_DE/DE/i/logo/lockbox_150x47.gif" />',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_TEXT_DESCRIPTION' => 'PayPal als een betaallink die pas beschikbaar is voor de klant nadat de bestelling is voltooid. Bepaal zelf waar de klant het verzoek om betaling ontvangt.',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_ALLOWED_TITLE' => 'Toegestane zones',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_ALLOWED_DESC' => 'Specificeer <b>individueel</b> de zones die voor deze module moeten worden toegestaan. (b.v. AT,DE (indien leeg, zijn alle zones toegestaan)).',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_STATUS_TITLE' => 'PayPal abonnement activeren',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_STATUS_DESC' => 'Wilt u abonnementsbetalingen via PayPal accepteren?',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_SORT_ORDER_TITLE' => 'Volgorde weergeven',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_SORT_ORDER_DESC' => 'Toon volgorde. Kleinste cijfer wordt eerst weergegeven',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_ZONE_TITLE' => 'Betalingszone',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_ZONE_DESC' => 'Wanneer een zone is geselecteerd, geldt de betalingsmethode alleen voor die zone.',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_LP' => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Maak hier een PayPal-rekening aan.</strong></a>',

  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATTENTIE:</font></strong> Voer de instellingen uit onder "Partner Module" -> "PayPal" ->  <a href="'.xtc_href_link('paypal_config.php').'"><strong>"PayPal Configuratie"</strong></a>!',

  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_TEXT_ERROR_HEADING' => 'Noot',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_TEXT_ERROR_MESSAGE' => 'PayPal betaling werd geannuleerd',  
);


foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>