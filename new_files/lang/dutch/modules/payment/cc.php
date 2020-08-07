<?php
/*------------------------------------------------------------------------------
  $Id: cc.php 1136 2005-08-07 13:19:54Z mz $

  XTC-CC - Contribution for XT-Commerce http://www.xt-commerce.com
  modified by http://www.netz-designer.de

  Copyright (c) 2003 netz-designer
  -----------------------------------------------------------------------------
  based on:
  $Id: cc.php 1136 2005-08-07 13:19:54Z mz $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
------------------------------------------------------------------------------*/

define('MODULE_PAYMENT_CC_TEXT_TITLE', 'Creditcard');
define('MODULE_PAYMENT_CC_TEXT_DESCRIPTION', 'Creditcard Testinfo:<br /><br />CC#: 4111111111111111<br />Geldig tot: Elke');
define('MODULE_PAYMENT_CC_TEXT_INFO', 'Betaal zeker en eenvoudig per credicard.');
define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_TYPE', 'Creditcard-Type:');
define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_OWNER', 'Creditcard- Houder:');
define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_NUMBER', 'Creditcard-Nummer:');
define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_START', 'Creditcard-Startdatum:');
define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_EXPIRES', 'Creditcard-Verloopdatum:');
define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_ISSUE', 'Creditcard-Uitgiftenummer:');
define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_CVV', '3- of 4-cijferige pincode:');
define('MODULE_PAYMENT_CC_TEXT_JS_CC_OWNER', '* De naam van de cardhouder moet uit minstens'.CC_OWNER_MIN_LENGTH.' karakters bestaan.\n\n');
define('MODULE_PAYMENT_CC_TEXT_JS_CC_NUMBER', '* Het Creditcardnummer moet uit minstens '.CC_NUMBER_MIN_LENGTH.' karakters bestaan.\n\n');
define('MODULE_PAYMENT_CC_TEXT_ERROR', 'Creditcard fout!');
define('TEXT_CARD_NOT_ACZEPTED', 'Excuses, we accepteren <b>%s</b> kaarten, gebruik a.u.b. een ander kaart type!<br />De volgende kaarten worden door ons geaccepteerd: ');
define('MODULE_PAYMENT_CC_TEXT_JS_CC_CVV', '* De CVV code is een verplicht veld en moet ingevuld worden.\n Bestellingen kunnen niet zonder deze code uitgevoerd worden.\n De CVV Code bestaat uit 3 of 4 (American Express) cijfers en is geprint op de handtekeningstrip op de achterkant van uw kaart.');
define('MODULE_PAYMENT_CC_TEXT_CVV_LINK', '<u>[Help?]</u>');
define('HEADING_CVV', 'Veiligheidscode Hulpscherm');
define('TEXT_CVV', '<table align="center" cellspacing="2" cellpadding="5" width="400"><tr><td><span class="tableHeading"><b>Visa, Mastercard, Discover 3-cijferige CVV-Code</b></span></td></tr><tr><td><span class="boxText">Voor uw veiligheid is het opgeven van deze veiligheidscode verplicht. De veiligheidscode is een 3 cijferig getal, die naast de handtekeningenstrip op de achterkant van de Creditcard gedrukt is (rechts naast de laatste 4 cijfers).</span></td></tr><tr><td align="center"><IMG src="images/cv_card.gif"></td></tr></table><hr /><table align="center" cellspacing="2" cellpadding="5" width="400"><tr><td><span class="main"><b>American Express 4-cijferige CVV-Code</b> </span></td></tr><tr><td><span class="boxText">Voor uw veiligheid is het copgeven van deze veiligheidscode verplicht. De American Express veiligheidscode is een 4-cijferig getal op de voorkant van de kaart. Deze staat na de laatste 4 getallen van uw kaartnummer aan de rechterkant.</span></td></tr><tr><td align="center"><IMG src="images/cv_amex_card.gif"></td></tr></table>');
define('TEXT_CLOSE_WINDOW', '<u>Venster sluiten</u> [x]');
define('MODULE_PAYMENT_CC_ACCEPTED_CARDS', 'Wij accepteren de volgende kaarten:');
define('MODULE_PAYMENT_CC_STATUS_TITLE', 'Creditcardmodule activeren');
define('MODULE_PAYMENT_CC_STATUS_DESC', 'Wilt u betalingen per creditcard accepteren?');
define('MODULE_PAYMENT_CC_ALLOWED_TITLE', 'Toegestane zones');
define('MODULE_PAYMENT_CC_ALLOWED_DESC', 'Geef <b>separaat</b> die zones aan, welke voor deze module toegestaan zijn. (bijv. AT,DE (leeg laten voor toestaan van alle zones))');
define('CC_VAL_TITLE', 'CreditCard validatie activeren');
define('CC_VAL_DESC', 'Wilt u CreditCard validatie inschakelen en kaarten identificeren?');
define('CC_BLACK_TITLE', 'CC-Blacklist activeren');
define('CC_BLACK_DESC', 'Wilt u de CC-Blacklist activeren, om de daar geregistreerde kaarten te weigeren?');
define('CC_ENC_TITLE', 'Creditcardinfo versleutelen');
define('CC_ENC_DESC', 'Wilt u Creditcardinfo versleutelen?');
define('MODULE_PAYMENT_CC_SORT_ORDER_TITLE', 'Sorteervolgorde van weergave');
define('MODULE_PAYMENT_CC_SORT_ORDER_DESC', 'Sorteervolgorde van weergave. Kleinste getal wordt het eerst getoond.');
define('MODULE_PAYMENT_CC_ZONE_TITLE', 'Betaalzone');
define('MODULE_PAYMENT_CC_ZONE_DESC', 'Indien een zone is geselecteerd, geldt alleen deze betalingsmethode voor die zone.');
define('MODULE_PAYMENT_CC_ORDER_STATUS_ID_TITLE', 'Bestelstatus instellen');
define('MODULE_PAYMENT_CC_ORDER_STATUS_ID_DESC', 'Bestellingen, welke met deze module worden gedaan, op deze status zetten');
define('USE_CC_CVV_TITLE', 'CVV Nummer ophalen');
define('USE_CC_CVV_DESC', 'Wilt u het CVV Nummer ophalen?');
define('USE_CC_ISS_TITLE', 'Uitgiftenummer ophalen');
define('USE_CC_ISS_DESC', 'Wilt u het Uitgiftenummer ophalen?');
define('USE_CC_START_TITLE', 'Startdatum ophalen');
define('USE_CC_START_DESC', 'Wilt u de start-datum ophalen?');
define('CC_CVV_MIN_LENGTH_TITLE', 'CVV Nummer lengte');
define('CC_CVV_MIN_LENGTH_DESC', 'Lengte van het CVV aangeven. De standaard is 3 en dient niet gewijzigd te worden, tenzij er een nieuwe Industrie-Standard wordt uitgegeven.');
define('MODULE_PAYMENT_CC_EMAIL_TITLE', 'Splits Card E-Mail Adres');
define('MODULE_PAYMENT_CC_EMAIL_DESC', 'Indien een E-Mailadres wordt opgegeven, zullen de middelste cijfers van het Creditcard Nummer naar dit E-mail adres verstuurd worden. (De buitenste nummers worden opgeslagen in de database met de middelste nummers gecensureerd.');
define('TEXT_CCVAL_ERROR_INVALID_DATE', 'De "geldig tot" datum is onjuist. Corrigeer uw gegevens.');
define('TEXT_CCVAL_ERROR_INVALID_NUMBER', 'Het "Creditcard-Nummer", welke u heeft opgegeven is ongeldig. Corrigeer uw gegevens.');
define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', 'De eerste 4 nummers van uw Credit-Card zijn: %s <br />Als deze info juist is, dan wordt dit type kaart helaas niet geaccepteerd.<br />Corrigeer uw gegevens.');

define('MODULE_PAYMENT_CC_ACCEPT_DINERSCLUB_TITLE', 'DINERS CLUB accepteren');
define('MODULE_PAYMENT_CC_ACCEPT_DINERSCLUB_DESC', 'DINERS CLUB accepteren');
define('MODULE_PAYMENT_CC_ACCEPT_AMERICANEXPRESS_TITLE', 'AMERICAN EXPRESS accepteren');
define('MODULE_PAYMENT_CC_ACCEPT_AMERICANEXPRESS_DESC', 'AMERICAN EXPRESS accepteren');
define('MODULE_PAYMENT_CC_ACCEPT_CARTEBLANCHE_TITLE', 'CARTE BLANCHE accepteren');
define('MODULE_PAYMENT_CC_ACCEPT_CARTEBLANCHE_DESC', 'CARTE BLANCHE accepteren');
define('MODULE_PAYMENT_CC_ACCEPT_OZBANKCARD_TITLE', 'AUSTRALIAN BANKCARD accepteren');
define('MODULE_PAYMENT_CC_ACCEPT_OZBANKCARD_DESC', 'AUSTRALIAN BANKCARD accepteren');
define('MODULE_PAYMENT_CC_ACCEPT_DISCOVERNOVUS_TITLE', 'DISCOVER/NOVUS accepteren');
define('MODULE_PAYMENT_CC_ACCEPT_DISCOVERNOVUS_DESC', 'DISCOVER/NOVUS accepteren');
define('MODULE_PAYMENT_CC_ACCEPT_DELTA_TITLE', 'DELTA accepteren');
define('MODULE_PAYMENT_CC_ACCEPT_DELTA_DESC', 'DELTA accepteren');
define('MODULE_PAYMENT_CC_ACCEPT_ELECTRON_TITLE', 'ELECTRON accepteren');
define('MODULE_PAYMENT_CC_ACCEPT_ELECTRON_DESC', 'ELECTRON accepteren');
define('MODULE_PAYMENT_CC_ACCEPT_MASTERCARD_TITLE', 'MASTERCARD accepteren');
define('MODULE_PAYMENT_CC_ACCEPT_MASTERCARD_DESC', 'MASTERCARD accepteren');
define('MODULE_PAYMENT_CC_ACCEPT_SWITCH_TITLE', 'SWITCH accepteren');
define('MODULE_PAYMENT_CC_ACCEPT_SWITCH_DESC', 'SWITCH accepteren');
define('MODULE_PAYMENT_CC_ACCEPT_SOLO_TITLE', 'SOLO accepteren');
define('MODULE_PAYMENT_CC_ACCEPT_SOLO_DESC', 'SOLO accepteren');
define('MODULE_PAYMENT_CC_ACCEPT_JCB_TITLE', 'JCB accepteren');
define('MODULE_PAYMENT_CC_ACCEPT_JCB_DESC', 'JCB accepteren');
define('MODULE_PAYMENT_CC_ACCEPT_MAESTRO_TITLE', 'MAESTRO accepteren');
define('MODULE_PAYMENT_CC_ACCEPT_MAESTRO_DESC', 'MAESTRO accepteren');
define('MODULE_PAYMENT_CC_ACCEPT_VISA_TITLE', 'VISA accepteren');
define('MODULE_PAYMENT_CC_ACCEPT_VISA_DESC', 'VISA accepteren');
?>
