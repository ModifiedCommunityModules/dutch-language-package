<?php
/* -----------------------------------------------------------------------------------------
   $Id: eustandardtransfer.php 11934 2019-07-20 07:36:03Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(ptebanktransfer.php,v 1.4.1 2003/09/25 19:57:14); www.oscommerce.com
   (c) 2003 xtCommerce www.xt-commerce.com

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_TEXT_TITLE', 'EU-Standard Bank Transfer');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_TEXT_DESCRIPTION', 
          '<br />De goedkoopste en eenvoudigste betalingsmethode binnen de EU is de overschrijving met IBAN en BIC.' .
					'<br />Gebruik de volgende gegevens voor de overdracht van het totale bedrag:<br />' .
          (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKNAM') ? '<br />Naam van de bank: ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKNAM : '') .
          (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_BRANCH')  ? '<br />Ontvanger: ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_BRANCH : '') .
          (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNAM')  ? '<br />Bankcode: ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNAM : '') .
          (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNUM')  ? '<br />Rekeningnummer: ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNUM : '') .
          (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCIBAN') ? '<br />IBAN: ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCIBAN : '') .
          (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKBIC') ? '<br />BIC/SWIFT: ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKBIC : '') .
          '<br />Beoogd gebruik: %s'.
          '<br /><br />De goederen worden pas geleverd als het bedrag op onze rekening is bijgeschreven.<br />');

  if (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_SUCCESS') && MODULE_PAYMENT_EUSTANDARDTRANSFER_SUCCESS == 'True') {
    define('MODULE_PAYMENT_EUSTANDARDTRANSFER_TEXT_INFO', 'Gelieve het verschuldigde factuurbedrag over te maken op onze rekening. U ontvangt de accountgegevens in de laatste stap van de bestelling.');
  } else {
    define('MODULE_PAYMENT_EUSTANDARDTRANSFER_TEXT_INFO', 'Gelieve het verschuldigde factuurbedrag over te maken op onze rekening. U ontvangt de accountgegevens per e-mail na aanvaarding van de bestelling.');
  }
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_STATUS_TITLE', 'Activeer EU-Standaard Bankoverschrijvingsmodule');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_STATUS_DESC', 'Wilt u bankoverschrijvingen accepteren?');

  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BRANCH_TITLE', 'Ontvanger');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BRANCH_DESC', 'De ontvanger van de verwijzing.');

  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKNAM_TITLE', 'Naam van de bank');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKNAM_DESC', 'De volledige naam van de bank.');

  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNAM_TITLE', 'Bankcode');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNAM_DESC', 'De bankcode van de opgegeven rekening.');

  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNUM_TITLE', 'Rekeningnummer');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNUM_DESC', 'Uw rekeningnummer.');

  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCIBAN_TITLE', 'Bankrekening IBAN');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCIBAN_DESC', 'Internationale rekening-id.<br />(Vraag het aan uw bank als u het niet zeker weet).');

  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKBIC_TITLE', 'Bank Bic');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKBIC_DESC', 'Internationale bankid.<br />(Vraag uw bank als u niet zeker bent)');

  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_SORT_ORDER_TITLE', 'Weergavevolgorde');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_SORT_ORDER_DESC', 'Weergavevolgorde. Het kleinste cijfer wordt als eerste weergegeven.');

  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ALLOWED_TITLE', 'Toegestane zones');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ALLOWED_DESC', 'Geef <b>individueel</b> aan welke zones voor deze module moeten worden toegestaan. (bijv. AT,DE (indien leeg, zijn alle zones toegestaan))');

  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ZONE_TITLE', 'Betalingszone');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ZONE_DESC', 'Als een zone is geselecteerd, is de betalingsmethode alleen geldig voor deze zone.');
  
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ORDER_STATUS_ID_TITLE', 'Stel de status van de bestelling in');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ORDER_STATUS_ID_DESC', 'Bestellingen die met deze module worden gedaan, worden op deze status ingesteld.');

  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_SUCCESS_TITLE', 'Toon bankgegevens');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_SUCCESS_DESC', 'Moeten de bankgegevens op de succespagina worden weergegeven?');
?>