<?php
/* -----------------------------------------------------------------------------------------
   $Id: worldpay_junior.php 4762 2013-05-10 16:12:34Z Tomcraft $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2008 osCommerce(worldpay_junior.php 1807 2008-01-13 ); www.oscommerce.com

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TEXT_DESCRIPTION', '<img src="images/icon_popup.gif" border="0">&nbsp;<a href="http://www.worldpay.com" target="_blank" style="text-decoration: underline; font-weight: bold;">Bezoek de WorldPay website</a>');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TEXT_WARNING_DEMO_MODE', 'Ter controle: Transactie uitgevoerd in demomodus.');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TEXT_SUCCESSFUL_TRANSACTION', 'De betalingstransactie is succesvol afgerond!');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TEXT_UNSUCCESSFUL_TRANSACTION', 'Uw betaling is niet gelukt!');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TEXT_CONTINUE_BUTTON', 'Klik hier om door te gaan naar %s');

  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TEXT_TITLE', 'WorldPay Junior');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TEXT_DESC', 'Worldpay betaalmodule');

  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_STATUS_TITLE', 'Activeer WorldPay-module');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_STATUS_DESC', 'Wilt u betalingen via WorldPay accepteren?');
  
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_ALLOWED_TITLE' , 'Toegestane zones');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_ALLOWED_DESC' , 'Voer <b>individueel</b> de zones in die voor deze module moeten worden toegestaan. (bijv. AT,DE (indien leeg, zijn alle zones toegestaan))');

  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_INSTALLATION_ID_TITLE', 'Worldpay Installaties ID');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_INSTALLATION_ID_DESC', 'Uw WorldPay Installaties ID');

  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_CALLBACK_PASSWORD_TITLE', 'Betaling Antwoord Wachtwoord');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_CALLBACK_PASSWORD_DESC', 'Een wachtwoord dat wordt teruggestuurd in het terugbelantwoord (gespecificeerd in het WorldPay-klantenbeheersysteem)');

  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_MD5_PASSWORD_TITLE', 'MD5 geheim voor transactie wachtwoord');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_MD5_PASSWORD_DESC', 'Het geheime MD5-coderingswachtwoord voor het valideren van de transactiereacties (in het WorldPay-klantenbeheersysteem)');

  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TRANSACTION_METHOD_TITLE', 'transactionele methode');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TRANSACTION_METHOD_DESC', 'De verwerkingsmethode die voor elke transactie moet worden gebruikt.');

  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TESTMODE_TITLE', 'Testmodus');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TESTMODE_DESC', 'Transacties uitvoeren in de testmodus?');

  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_SORT_ORDER_TITLE', 'Weergavevolgorde');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_SORT_ORDER_DESC', 'Weergavevolgorde. Het kleinste cijfer wordt als eerste weergegeven.');

  //define('MODULE_PAYMENT_WORLDPAY_JUNIOR_PREAUTH_TITLE', 'Pre-Auth'); // Wird nicht benutzt
  //define('MODULE_PAYMENT_WORLDPAY_JUNIOR_PREAUTH_DESC', 'Der Modus, in dem gearbeitet wird (A = Pay Now, E = Pre Auth). Wird ignoriert, falls PreAuth auf False.'); // Wird nicht benutzt

  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_ZONE_TITLE', 'Betalingszone');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_ZONE_DESC', 'Als een zone is geselecteerd, is de betalingsmethode alleen geldig voor deze zone.');

  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_PREPARE_ORDER_STATUS_ID_TITLE', 'Tijdelijke orderstatus');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_PREPARE_ORDER_STATUS_ID_DESC', 'Bestelstatus voor nog niet afgehandelde transacties');

  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_ORDER_STATUS_ID_TITLE', 'Stel de status van de bestelling in');
  define('MODULE_PAYMENT_WORLDPAY_JUNIOR_ORDER_STATUS_ID_DESC', 'Bestellingen die met deze module worden gedaan, worden op deze status ingesteld.');
?>