<?php
/* --------------------------------------------------------------
   $Id
   XT-Commerce - community made shopping
   http://www.xt-commerce.com
   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   Released under the GNU General Public License
--------------------------------------------------------------*/
/* ACHTUNG ! Texte nicht ändern da Status abfrage im Programm */
define('HEADING_TITLE','PayPal Transacties');
define('TABLE_HEADING_PAYPAL_ID','Transactie-Id');
define('TABLE_HEADING_NAME','Naam');
define('TABLE_HEADING_TXN_TYPE','Transactie.-Type');
define('TABLE_HEADING_PAYMENT_TYPE','Betaalwijze');
define('TABLE_HEADING_PAYMENT_STATUS','Betaalstatus');
define('TABLE_HEADING_PAYMENT_AMOUNT','Totaalsom');
define('TABLE_HEADING_ORDERS_ID','Bestelnr.');
define('TABLE_HEADING_ORDERS_STATUS','Bestelstatus');
define('TABLE_HEADING_ACTION','Actie');
define('TEXT_PAYPAL_TRANSACTION_HISTORY','Transactieverloop');
define('TEXT_PAYPAL_PENDING_REASON','Wijze');
define('TEXT_PAYPAL_CAPTURE_TRANSACTION','Make Capture');
define('TEXT_PAYPAL_TRANSACTION_DETAIL','Transactiedetails');
define('TEXT_PAYPAL_TXN_ID','Betaalwijze/Code');
define('TEXT_PAYPAL_COMPANY','Firma');
define('TEXT_PAYPAL_PAYER_EMAIL','E-Mail');
define('TEXT_PAYPAL_RECEIVER_EMAIL','Ontvanger betaling');
define('TEXT_PAYPAL_CARTITEM','Artikel aantal');
define('TEXT_PAYPAL_VERSAND','Bezorging');
define('TEXT_PAYPAL_TOTAL','Bruto');
define('TEXT_PAYPAL_FEE','Vergoeding');
define('TEXT_PAYPAL_ORDER_ID','Bestelnummer');
define('TEXT_PAYPAL_PAYMENT_STATUS','Status');
define('TEXT_PAYPAL_PAYMENT_DATE','Datum');
define('TEXT_PAYPAL_PAYMENT_TIME','Tijd');
define('TEXT_PAYPAL_KUNDE','Klant');
define('TEXT_PAYPAL_ADRESS','Adres');
define('TEXT_PAYPAL_PAYMENT_TYPE','Betaalwijze');
define('TEXT_PAYPAL_ADRESS_STATUS','Status van adres');
define('TEXT_PAYPAL_PAYER_EMAIL_STATUS','Status van afzender');
define('TEXT_PAYPAL_NETTO','Netto');
define('TEXT_PAYPAL_DETAIL','Details');
define('TEXT_PAYPAL_TYPE','Wijze');
define('TEXT_PAYPAL_PAYMENT_REASON','Reden');
define('TEXT_PAYPAL_TRANSACTION_TOTAL','Originele betaling:');
define('TEXT_PAYPAL_TRANSACTION_LEFT','Restbedrag:');
define('TEXT_PAYPAL_AMOUNT','Terugbetaalbedrag:');
define('TEXT_PAYPAL_REFUND_TRANSACTION','Terugbetaling regelen');
define('TEXT_PAYPAL_REFUND_NOTE','Mededeling voor de koper <br />(optional):');
define('TEXT_PAYPAL_OPTIONS','Betaalopties');
define('TEXT_PAYPAL_TRANSACTION_AUTH_TOTAL','Gereserveerde som:');
define('TEXT_PAYPAL_TRANSACTION_AMOUNT','Capture Amount:');
define('TEXT_PAYPAL_TRANSACTION_AUTH_CAPTURED','Total Capture:');
define('TEXT_PAYPAL_TRANSACTION_AUTH_OPEN','Open Capture:');
define('TEXT_PAYPAL_ACTION_REFUND','Betalings teruggave (tot 60 dagen na Transactie)');
define('TEXT_PAYPAL_ACTION_CAPTURE','Capture Amount');
define('REFUND','Terugbetalen');
define('TEXT_PAYPAL_PAYMENT','PayPal-Betaalstatus');
define('TEXT_PAYPAL_TRANSACTION_CONNECTED','Verbonden Transacties');
define('TEXT_PAYPAL_TRANSACTION_ORIGINAL','Oorspronkelijke Transactie');
define('TEXT_PAYPAL_SEARCH_TRANSACTION','Zoek Transacties');
define('TEXT_PAYPAL_FOUND_TRANSACTION','Gevonden Tranacties');
define('STATUS_COMPLETED','Afgesloten');
define('STATUS_VERIFIED','geverifi&euml;erd');
define('STATUS_UNVERIFIED','Niet geverifi&euml;erd');
define('STATUS_PENDING','Wachtend');
define('STATUS_REFUNDED','Terugbetaald');
define('STATUS_REVERSED','Omgekeerd');
define('STATUS_DENIED','Geannuleerd');
define('STATUS_CASE','Koper conflict');
define('STATUS_CANCELED_REVERSAL','Terugboeking');
define('STATUS_CANCELLED_REVERSA','Terugboeking');
define('STATUS_EXPIRED','Verstreken');
define('STATUS_FAILED','Mislukt');
define('STATUS_IN-PROGRESS','In Uitvoering');
define('STATUS_PARTIALLY_REFUNDE','Gedeeltelijk terugbetaald');
define('STATUS_PROCESSED','Afgesloten');
define('STATUS_VOIDED','Vervallen');
define('STATUS_OPENCAPTURE','Gereserveerd');
define('STATUS_CREATED', 'Aangemaakt');
define('TYPE_INSTANT','Meteen');
define('TYPE_ECHECK','Overschrijving');
define('REASON_NOT_AS_DESCRIBE','Artikel niet als omschreven!');
define('REASON_NON_RECEIPT','Artikel niet ontvangen!');
define('TYPE_REFUNDED','Terugbetaling');
define('TYPE_REVERSED','-Betaling verstuurd');
define('TYPE_REFUNDED','Terugbetaling');
define('TEXT_DISPLAY_NUMBER_OF_PAYPAL_TRANSACTIONS','Getoond worden <b>%d</b> tot <b>%d</b> (van in totaal <b>%d</b> Transacties)');
// define NOTES
define('TEXT_PAYPAL_NOTE_REFUND_INFO','Tot 60 dagen na het versturen van de oorspronkelijke betaling kunt u een volledige of gedeeltlijke restitutie bewerkstelligen. Als u een terugbetaling verlangt, krijgt u van PayPal een terugbetaling van kosten, met inbegrip van de gedeeltelijke vergoedingen voor restituties.
<br /><br />Om een terugbetaling te vorderen, geeft u het bedrag in het veld terugbetaling in, en klikt dan op verder. ');
define('TEXT_PAYPAL_NOTE_CAPTURE_INFO','');
// errors
define('REFUND_SUCCESS','Teruggave gelukt');
define('CAPTURE_SUCCESS','Capture gelukt');
define('ERROR_10009','De gedeeltelijke teruggavehoeveelheid moet kleiner of gelijk zijn aan het resterende bedrag');
// capture
define('ERROR_10610','Opgegeven bedrag overschrijdt de toegestane limiet');
define('ERROR_10602','Authorisatie is inmiddels afgerond');
define('ERROR_81251','Internal Service Error');
// Bestell-Status nur zur Installation
$PAYPAL_INST_ORDER_STATUS_TMP_NAME='PayPal geannuleerd';
$PAYPAL_INST_ORDER_STATUS_SUCCESS_NAME='Open PP betaald';
$PAYPAL_INST_ORDER_STATUS_PENDING_NAME='Open PP wachtend';
$PAYPAL_INST_ORDER_STATUS_REJECTED_NAME='PayPal geweigerd';
?>
