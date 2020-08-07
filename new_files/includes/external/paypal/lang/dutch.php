<?php
/* -----------------------------------------------------------------------------------------
   $Id: english.php 12534 2020-01-22 09:08:03Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


$lang_array = array(
  'TEXT_PAYPAL_ORDERS_HEADING' => 'Paypal-gegevens',
  'TEXT_PAYPAL_NO_INFORMATION' => 'geen betalingsgegevens beschikbaar',
  
  // transaction
  'TEXT_PAYPAL_TRANSACTION' => 'Betalingsgegevens',
  'TEXT_PAYPAL_TRANSACTION_ACCOUNT_OWNER' => 'Rekeninghouder:',
  'TEXT_PAYPAL_TRANSACTION_ADDRESS' => 'Verzendadres:',
  'TEXT_PAYPAL_TRANSACTION_METHOD' => 'Betaling:',
  'TEXT_PAYPAL_TRANSACTION_EMAIL' => 'E-mailadres:',
  'TEXT_PAYPAL_TRANSACTION_ACCOUNT_STATE' => 'Account status:',
  'TEXT_PAYPAL_TRANSACTION_INTENT' => 'Doel::',
  'TEXT_PAYPAL_TRANSACTION_STATE' => 'Status:',
  
  
  // transactions
  'TEXT_PAYPAL_TRANSACTIONS_STATUS' => 'Transaktions',
  'TEXT_PAYPAL_TRANSACTIONS_PAYMENT' => 'Betaling:',
  'TEXT_PAYPAL_TRANSACTIONS_REASON' => 'Reden::',
  'TEXT_PAYPAL_TRANSACTIONS_STATE' => 'Status:',
  'TEXT_PAYPAL_TRANSACTIONS_TOTAL' => 'Bedrag:',
  'TEXT_PAYPAL_TRANSACTIONS_VALID' => 'geldig voor:',
  'TEXT_PAYPAL_TRANSACTIONS_ID' => 'ID:',
  
  
  // instruction
  'TEXT_PAYPAL_INSTRUCTIONS' => 'Spaargeld',
  'TEXT_PAYPAL_INSTRUCTIONS_CHECKOUT' => 'Maak het bedrag van %s ten minste tot %s over naar de volgende rekening:',
  'TEXT_PAYPAL_INSTRUCTIONS_CHECKOUT_SHORT' => 'Gelieve het bedrag van % over te maken op de volgende rekening:',
  'TEXT_PAYPAL_INSTRUCTIONS_AMOUNT' => 'Bedrag:',
  'TEXT_PAYPAL_INSTRUCTIONS_REFERENCE' => 'Gebruik:',
  'TEXT_PAYPAL_INSTRUCTIONS_PAYDATE' => 'Te betalen aan:',
  'TEXT_PAYPAL_INSTRUCTIONS_ACCOUNT' => 'Rekening:',
  'TEXT_PAYPAL_INSTRUCTIONS_HOLDER' => 'Houder:',
  'TEXT_PAYPAL_INSTRUCTIONS_IBAN' => 'IBAN:',
  'TEXT_PAYPAL_INSTRUCTIONS_BIC' => 'BIC:',
  
  
  // refund
  'TEXT_PAYPAL_REFUND' => 'Terugbetaling',
  'TEXT_PAYPAL_REFUND_LEFT' => 'Bedrag mogelijke terugbetalingen: ',
  'TEXT_PAYPAL_REFUND_COMMENT' => 'Commentaar:<br />(max 127 tekens)',
  'TEXT_PAYPAL_REFUND_AMOUNT' => 'Bedrag:',
  'TEXT_PAYPAL_REFUND_SUBMIT' => 'Terugbetaling',
  
  
  // capture
  'TEXT_PAYPAL_CAPTURE' => 'Neem  op.',
  'TEXT_PAYPAL_CAPTURE_LEFT' => 'Aantal mogelijke vangsten: ',
  'TEXT_PAYPAL_CAPTURE_IS_FINAL' => 'Definitieve vangst:',
  'TEXT_PAYPAL_CAPTURE_AMOUNT' => 'Bedrag:',
  'TEXT_PAYPAL_CAPTURE_SUBMIT' => 'Neem  op.',
  'TEXT_PAYPAL_CAPTURED' => 'Betaling vastgelegd',
  
  
  // error
  'TEXT_PAYPAL_ERROR_AMOUNT' => 'Voer een geldig bedrag in',
  'TEXT_PAYPAL_ERROR_ALREADY_PAID' => 'We hebben uw betaling al ontvangen. Bedankt!',
  
  
  // diverse
  'MODULE_PAYMENT_PAYPAL_TEXT_ORDER' => 'Uw bestelling bij '.STORE_NAME,


  // status
  'TEXT_PAYPAL_NO_STATUS_CHANGE' => 'geen statuswijziging',
  
  // template
  'TEXT_PAYPALINSTALLMENT_HEADING' => 'Betaal eenvoudig in maandelijkse termijnen',
  'TEXT_PAYPALINSTALLMENT_DESCRIPTION' => 'U kunt uw termijnbetaling en het juiste financieringsplan kiezen als onderdeel van het bestelproces. Uw aanvraag is volledig online en wordt in een paar stappen hier in de winkel ingevuld.',

  'TEXT_PAYPALINSTALLMENT_RATING_PLAN' => 'Financiering uit %s met %s Installeerwerk Aangedreven door PayPal',
  'TEXT_PAYPALINSTALLMENT_RATING_PLAN_SHORT' => 'Financiering uit %s in de maand met',

  'TEXT_PAYPALINSTALLMENT_LEGAL' => 'Representatief voorbeeld volgens &sect; 6a PAngV',
  'TEXT_PAYPALINSTALLMENT_NOMINAL_RATE' => 'Nominaal tarief',
  'TEXT_PAYPALINSTALLMENT_APR' => 'Effectief rentepercentage',
  'TEXT_PAYPALINSTALLMENT_TOTAL_COST' => 'Totaal bedrag',
  'TEXT_PAYPALINSTALLMENT_TOTAL_NETTO' => 'Netto leenbedrag',
  'TEXT_PAYPALINSTALLMENT_TOTAL_INTEREST' => 'Belangstelling',
  'TEXT_PAYPALINSTALLMENT_MONTHLY_PAYMENT' => 'Maandelijkse termijnen van elk',

  'TEXT_PAYPALINSTALLMENT_NOTICE' => 'Financiering beschikbaar van %s tot %s korfwaarde met',
  'TEXT_PAYPALINSTALLMENT_NOTICE_PRODUCT' => 'U kunt dit product ook financieren!',
  'TEXT_PAYPALINSTALLMENT_NOTICE_CART' => 'U kunt dit mandje ook financieren!',
  'TEXT_PAYPALINSTALLMENT_NOTICE_PAYMENT' => 'U kunt deze bestelling ook financieren!',
  
  'TEXT_PAYPALINSTALLMENT_CREDITOR' => 'Lener',
  'TEXT_PAYPALINSTALLMENT_INFO_LINK' => 'Informatie over mogelijke tarieven',

);


// define 
foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>