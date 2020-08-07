<?php
/* -----------------------------------------------------------------------------------------
   $Id: banktransfer.php 12337 2019-10-30 06:50:10Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(banktransfer.php,v 1.9 2003/02/18 19:22:15); www.oscommerce.com
   (c) 2003	 nextcommerce (banktransfer.php,v 1.5 2003/08/13); www.nextcommerce.org
   (c) 2006 xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License 
   -----------------------------------------------------------------------------------------
   Third Party contributions:
   OSC German Banktransfer v0.85a       	Autor:	Dominik Guder <osc@guder.org>

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

define('MODULE_PAYMENT_BANKTRANSFER_TEXT_TITLE', 'Automatische incasso');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_DESCRIPTION', 'Automatische incasso');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_INFO', '');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK', 'Automatische incasso');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_EMAIL_FOOTER', ((defined('MODULE_PAYMENT_BANKTRANSFER_URL_NOTE')) ? 'Opmerking: U kunt ons faxformulier downloaden op ' . HTTP_SERVER . DIR_WS_CATALOG . MODULE_PAYMENT_BANKTRANSFER_URL_NOTE . ' en stuur het compleet terug naar ons.' : ''));
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_INFO', ((defined('MODULE_PAYMENT_BANKTRANSFER_IBAN_ONLY') && MODULE_PAYMENT_BANKTRANSFER_IBAN_ONLY != 'True') ? 'Houd er rekening mee dat de domiciliëringsprocedure alleen mogelijk is vanaf een Duitse zichtrekening zonder IBAN/BIC-gegevens. Door het opgeven van IBAN/BIC kunt u in de hele EU gebruik maken van de domicili&euml;ringsprocedure.' : '') . 'Velden gemarkeerd met (*) zijn verplicht. Met een Duits IBAN is de BIC optioneel.<br/><br/>');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_OWNER', 'Rekeninghouder:*');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_OWNER_EMAIL', 'E-Mail rekeninghouder:*');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_NUMBER', 'Rekeningnummer / IBAN:*');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_IBAN', 'IBAN:*');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_BLZ', 'BLZ / BIC:*');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_BIC', 'BIC:*');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_NAME', 'Bank:');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_FAX', 'De afhaalopdracht wordt per fax bevestigd');

// Note these MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_X texts appear also in the URL, so no html-entities are allowed here
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR', 'ERROR: ');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_1', 'Rekeningnummer en bankcode komen niet overeen, corrigeer uw invoer.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_2', 'Dit rekeningnummer is niet verifieerbaar, controleer uw inschrijving nogmaals om veiligheidsredenen.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_3', 'Dit rekeningnummer is niet verifieerbaar, controleer uw inschrijving nogmaals om veiligheidsredenen.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_4', 'DDit rekeningnummer is niet verifieerbaar, controleer uw inschrijving nogmaals om veiligheidsredenen.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_5', 'Deze bankcode bestaat niet, corrigeer uw invoer.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_8', 'U hebt geen correcte bankcode ingevoerd.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_9', 'U heeft geen juist rekeningnummer ingevoerd.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_10', 'U heeft geen rekeninghouder opgegeven.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_11', 'Je hebt geen correcte BIC ingevoerd.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_12', 'U heeft geen correct IBAN ingevuld.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_13', 'Ongeldig e-mailadres voor kennisgeving aan de rekeninghouder.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_14', 'Geen automatische incasso-goedkeuring voor dit SEPA-land.');

define('MODULE_PAYMENT_BANKTRANSFER_TEXT_NOTE', 'Noot:');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_NOTE2', 'Als u om veiligheidsredenen geen bankgegevens via het internet wilt overdragen, kunt u onze ');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_NOTE3', 'Faxformulier');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_NOTE4', ' en stuur ons het ingevulde formulier.');

define('JS_BANK_BLZ', '* Voer de BLZ / BIC van uw bank in!\n\n');
define('JS_BANK_NAME', '* Voer de naam van uw bank in!\n\n');
define('JS_BANK_NUMBER', '* Voer uw rekeningnummer / IBAN in!\n\n');
define('JS_BANK_OWNER', '* Voer de naam van de rekeninghouder in!\n\n');
define('JS_BANK_OWNER_EMAIL', '* Voer het e-mailadres van de rekeninghouder in!\n\n');

define('MODULE_PAYMENT_BANKTRANSFER_DATABASE_BLZ_TITLE', 'Gebruik maken van database zoeken voor de controle van de bank sorteercode?');
define('MODULE_PAYMENT_BANKTRANSFER_DATABASE_BLZ_DESC', 'Wilt u de database gebruiken voor de plausibiliteitscontrole van de banksorteercode ("true")? <br/> Zorg ervoor dat de banksorteercodes in de database up-to-date zijn! <br/><br/>Als "false" (standaard) het meegeleverde blz.csv-bestand wordt gebruikt, dat verouderde gegevens kan bevatten!');
define('MODULE_PAYMENT_BANKTRANSFER_URL_NOTE_TITLE', 'Fax-URL');
define('MODULE_PAYMENT_BANKTRANSFER_URL_NOTE_DESC', 'Het faxbevestigingsbestand. Dit bestand moet zich bevinden in de Catalogus-directory');
define('MODULE_PAYMENT_BANKTRANSFER_FAX_CONFIRMATION_TITLE', 'Faxbevestigingen toestaan');
define('MODULE_PAYMENT_BANKTRANSFER_FAX_CONFIRMATION_DESC', 'Wilt u een faxbevestiging toestaan?');
define('MODULE_PAYMENT_BANKTRANSFER_SORT_ORDER_TITLE', 'Weergavevolgorde');
define('MODULE_PAYMENT_BANKTRANSFER_SORT_ORDER_DESC', 'Weergavevolgorde. Het kleinste cijfer wordt als eerste weergegeven.');
define('MODULE_PAYMENT_BANKTRANSFER_ORDER_STATUS_ID_TITLE', 'Stel de status van de bestelling in');
define('MODULE_PAYMENT_BANKTRANSFER_ORDER_STATUS_ID_DESC', 'Stel de orders, die met deze module worden gemaakt, in op deze status');
define('MODULE_PAYMENT_BANKTRANSFER_ZONE_TITLE', 'Betalingszone');
define('MODULE_PAYMENT_BANKTRANSFER_ZONE_DESC', 'Als een zone is geselecteerd, is de betalingsmethode alleen geldig voor deze zone.');
define('MODULE_PAYMENT_BANKTRANSFER_ALLOWED_TITLE', 'Toegestane zones');
define('MODULE_PAYMENT_BANKTRANSFER_ALLOWED_DESC', 'Geef <b>individueel</b> aan welke zones voor deze module moeten worden toegestaan. (bijv. AT,DE (indien leeg, zijn alle zones toegestaan))');
define('MODULE_PAYMENT_BANKTRANSFER_STATUS_TITLE', 'Laat betalingen via een bankoverschrijving toe');
define('MODULE_PAYMENT_BANKTRANSFER_STATUS_DESC', 'Wilt u betalingen via een bankoverschrijving toestaan?');
define('MODULE_PAYMENT_BANKTRANSFER_MIN_ORDER_TITLE', 'Noodzakelijke bestellingen');
define('MODULE_PAYMENT_BANKTRANSFER_MIN_ORDER_DESC', 'Het minimum aantal orders dat een klant moet hebben om de optie beschikbaar te hebben.');
define('MODULE_PAYMENT_BANKTRANSFER_IBAN_ONLY_TITLE', 'IBAN Mode');
define('MODULE_PAYMENT_BANKTRANSFER_IBAN_ONLY_DESC', 'Wilt u alleen IBAN-betalingen toestaan?');

// SEPA
define('MODULE_PAYMENT_BANKTRANSFER_CI_TITLE', 'Crediteurenidentificatienummer (CI)');
define('MODULE_PAYMENT_BANKTRANSFER_CI_DESC', 'Voer hier uw SEPA-valuta ID in');
define('MODULE_PAYMENT_BANKTRANSFER_REFERENCE_PREFIX_TITLE', 'Voorvoegsel voor de referentie van het mandaat (facultatief)');
define('MODULE_PAYMENT_BANKTRANSFER_REFERENCE_PREFIX_DESC', 'Vul hier een voorvoegsel in voor de referentie van het mandaat');
define('MODULE_PAYMENT_BANKTRANSFER_DUE_DELAY_TITLE', 'Vervaldatum');
define('MODULE_PAYMENT_BANKTRANSFER_DUE_DELAY_DESC', 'Voer de periode (in dagen) in waarna u de automatische incasso uitvoert');

define('MODULE_PAYMENT_BANKTRANSFER_TEXT_EXTENDED_DESCRIPTION', '<strong><font color="red">LET OP:</font></strong> Update a.u.b. de bankcodes!');

define('MODULE_PAYMENT_BANKTRANSFER_TEXT_UPDATE_SUCCESS', 'Bijgewerkte banksorteercodes: ');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_UPDATE_ERROR', 'De sorteercodes van de banken konden niet worden ge&uuml;pdatet.');
?>