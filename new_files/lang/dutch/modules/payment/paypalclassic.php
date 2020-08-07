<?php
/* -----------------------------------------------------------------------------------------
   $Id: paypalclassic.php 11170 2018-05-30 14:28:24Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


$lang_array = array(
  'MODULE_PAYMENT_PAYPALCLASSIC_TEXT_TITLE' => 'PayPal',
  'MODULE_PAYMENT_PAYPALCLASSIC_TEXT_ADMIN_TITLE' => 'PayPal mit PayPal Express',
  'MODULE_PAYMENT_PAYPALCLASSIC_TEXT_INFO' => '<img src="https://www.paypal.com/de_DE/DE/i/logo/lockbox_150x47.gif" />',
  'MODULE_PAYMENT_PAYPALCLASSIC_TEXT_DESCRIPTION' => 'Na "bevestiging" wordt u doorgestuurd naar PayPal om uw bestelling hier te betalen.<br />Dan wordt u teruggestuurd naar de winkel en ontvangt u uw orderbevestiging.<br />Nu kunt u sneller betalen met onbeperkte PayPal-kopersbescherming - natuurlijk gratis.',
  'MODULE_PAYMENT_PAYPALCLASSIC_ALLOWED_TITLE' => 'Toegestane zones',
  'MODULE_PAYMENT_PAYPALCLASSIC_ALLOWED_DESC' => 'Voer <b>individueel</b> de zones in die voor deze module moeten worden toegestaan. (bijv. AT,DE (indien leeg, zijn alle zones toegestaan))',
  'MODULE_PAYMENT_PAYPALCLASSIC_STATUS_TITLE' => 'Activeer PayPal',
  'MODULE_PAYMENT_PAYPALCLASSIC_STATUS_DESC' => 'Wilt u betalingen via PayPal accepteren?',
  'MODULE_PAYMENT_PAYPALCLASSIC_SORT_ORDER_TITLE' => 'Weergavevolgorde',
  'MODULE_PAYMENT_PAYPALCLASSIC_SORT_ORDER_DESC' => 'Weergavevolgorde. Kleinste cijfer wordt als eerste weergegeven',
  'MODULE_PAYMENT_PAYPALCLASSIC_ZONE_TITLE' => 'Betalingszone',
  'MODULE_PAYMENT_PAYPALCLASSIC_ZONE_DESC' => 'Als een zone is geselecteerd, is de betalingsmethode alleen geldig voor deze zone.',
  'MODULE_PAYMENT_PAYPALCLASSIC_LP' => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Maak hier nu een PayPal-rekening aan.</strong></a>',

  'MODULE_PAYMENT_PAYPALCLASSIC_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">LET OP:</font></strong> Gelieve de instellingen te maken onder "Partner Module" -> "PayPal" -> <a href="'.xtc_href_link('paypal_config.php').'"><strong>"PayPal Configuratie"</strong></a> vor!',

  'MODULE_PAYMENT_PAYPALCLASSIC_TEXT_ERROR_HEADING' => 'Noot:',
  'MODULE_PAYMENT_PAYPALCLASSIC_TEXT_ERROR_MESSAGE' => 'PayPal-betaling werd geannuleerd',
);


foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>