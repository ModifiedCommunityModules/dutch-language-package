<?php
/* -----------------------------------------------------------------------------------------
   $Id: paypal_config.php 12529 2020-01-17 14:08:03Z Tomcraft $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


$lang_array = array(
  'TEXT_PAYPAL_CONFIG_HEADING_TITLE' => 'PayPal-configuratie',

  'TEXT_PAYPAL_CONFIG_SECRET_LIVE' => 'Secret Live:',
  'TEXT_PAYPAL_CONFIG_CLIENT_LIVE' => 'Client ID Live:',
  'TEXT_PAYPAL_CONFIG_CLIENT_LIVE_INFO' => 'Voer uw PayPal APP gegevens in of vraag een nieuwe aan.',

  'TEXT_PAYPAL_CONFIG_SECRET_SANDBOX' => 'Secret Sandbox:',
  'TEXT_PAYPAL_CONFIG_CLIENT_SANDBOX' => 'Client ID Sandbox:',
  'TEXT_PAYPAL_CONFIG_CLIENT_SANDBOX_INFO' => 'Voer uw PayPal APP gegevens in of vraag een nieuwe aan.',

  'TEXT_PAYPAL_APPINATOR_LIVE' => 'Vraag live gegevens aan',
  'TEXT_PAYPAL_APPINATOR_SANDBOX' => 'Sandbox Daten verzoek',

  'TEXT_PAYPAL_CONFIG_MODE' => 'Modus:',
  'TEXT_PAYPAL_CONFIG_MODE_INFO' => '',

  'TEXT_PAYPAL_CONFIG_INVOICE_PREFIX' => 'Bestelnummer prefix:',
  'TEXT_PAYPAL_CONFIG_INVOICE_PREFIX_INFO' => 'Vrij te kiezen tekenreeks (prefix), die voorafgaat aan het bestelnummer en wordt gebruikt om het PayPal-factuurnummer te genereren.<br />Zo kunnen meerdere winkels met slechts &eacute;&eacute;n PayPal-app werken. Conflicten met dezelfde bestelnummers worden vermeden. Elke bestelling krijgt een eigen factuurnummer op de PayPal-rekening.',

  'TEXT_PAYPAL_CONFIG_TRANSACTION' => 'Transactie:',
  'TEXT_PAYPAL_CONFIG_TRANSACTION_INFO' => 'Selecteer het type transactie.<br/><br/><b>Note:</b> Met PayPal Plus en Installatie betaling Aangedreven door PayPal, wordt er altijd een verkoop gedaan.',

  'TEXT_PAYPAL_CONFIG_CAPTURE' => 'Neem het handmatig op:',
  'TEXT_PAYPAL_CONFIG_CAPTURE_INFO' => 'Wilt u betalingen bij PayPal handmatig vastleggen (Capture)? <br/><br/><b>Note:</b> Hiervoor is het noodzakelijk dat de transactie is ingesteld op Authoriseren.',

  'TEXT_PAYPAL_CONFIG_CART' => 'Winkelkarretje:',
  'TEXT_PAYPAL_CONFIG_CART_INFO' => 'Moet het winkelwagentje worden overgemaakt naar PayPal? <br/><br/><b>Aanwijzing:</b> Deze instelling kan problemen veroorzaken bij het gebruik van ot modules onder "Modules" -> "Samenvatting", die een korting of toeslag toekennen ("Korting [ot_discount]", "Kortingscoupon [ot_coupon]", "Vouchers [ot_gv]", "Korting & toeslag op betaalmethoden [ot_payment]", etc.). ).<br/>Aanbevolen instelling: "Nee"',

  'TEXT_PAYPAL_INSTALLMENT_BANNER_DISPLAY' => 'Installeerbanner:',
  'TEXT_PAYPAL_INSTALLMENT_BANNER_DISPLAY_INFO' => 'Moet de banner voor termijnbetaling worden weergegeven? <br/><br/><b>Aanwijzing: </b> PayPal termijnbetaling is alleen beschikbaar als uw PayPal-rekening daarvoor is geactiveerd.',

  'TEXT_PAYPAL_INSTALLMENT_BANNER_COLOR' => 'Banner kleur:',
  'TEXT_PAYPAL_INSTALLMENT_BANNER_COLOR_INFO' => 'Selecteer de kleur voor de banner.',

  'TEXT_PAYPAL_CONFIG_STATE_SUCCESS' => 'Status succes:',
  'TEXT_PAYPAL_CONFIG_STATE_SUCCESS_INFO' => 'Status met succesvolle bestelling',

  'TEXT_PAYPAL_CONFIG_STATE_REJECTED' => 'Status Afgewezen:',
  'TEXT_PAYPAL_CONFIG_STATE_REJECTED_INFO' => 'Geweigerde orderstatus',

  'TEXT_PAYPAL_CONFIG_STATE_PENDING' => 'Status Wachtend:',
  'TEXT_PAYPAL_CONFIG_STATE_PENDING_INFO' => 'Status van een succesvolle bestelling, die nog niet is bevestigd door PayPal',

  'TEXT_PAYPAL_CONFIG_STATE_CAPTURED' => 'Status geregistreerd:',
  'TEXT_PAYPAL_CONFIG_STATE_CAPTURED_INFO' => 'Status veroorzaakt door een gevangenneming',
  
  'TEXT_PAYPAL_CONFIG_STATE_REFUNDED' => 'Terugbetalingsstatus:',
  'TEXT_PAYPAL_CONFIG_STATE_REFUNDED_INFO' => 'Status afgegeven door een restitutie',
  
  'TEXT_PAYPAL_CONFIG_STATE_TEMP' => 'Status Temp:',
  'TEXT_PAYPAL_CONFIG_STATE_TEMP_INFO' => 'Status voor een onbevestigde bestelling',

  'TEXT_PAYPAL_CONFIG_LOG' => 'Log:',
  'TEXT_PAYPAL_CONFIG_LOG_INFO' => 'Moet er een logboek worden geschreven?',

  'TEXT_PAYPAL_CONFIG_LOG_LEVEL' => 'Logboekniveau:',
  'TEXT_PAYPAL_CONFIG_LOG_LEVEL_INFO' => '<b>Aanwijzing:</b> In de live-modus wordt alleen tot niveau INFO gelogd.',
  
  'BUTTON_PAYPAL_STATUS_INSTALL' => 'Status van de installatie',
);


foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}


// orders status
$PAYPAL_INST_ORDER_STATUS_TMP_NAME = 'PayPal afgebroken';
$PAYPAL_INST_ORDER_STATUS_SUCCESS_NAME = 'PayPal betaald';
$PAYPAL_INST_ORDER_STATUS_PENDING_NAME = 'PayPal wachten';
$PAYPAL_INST_ORDER_STATUS_CAPTURED_NAME = 'PayPal opgenomen';
$PAYPAL_INST_ORDER_STATUS_REFUNDED_NAME = 'PayPal vergoed';
$PAYPAL_INST_ORDER_STATUS_REJECTED_NAME = 'PayPal afgekeurd';
$PAYPAL_INST_ORDER_STATUS_ACCEPTED_NAME = 'PayPal geaccepteerd';
?>