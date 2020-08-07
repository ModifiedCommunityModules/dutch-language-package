<?php
/* -----------------------------------------------------------------------------------------
   $Id: sofort_payment.php 11651 2019-03-28 17:10:07Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
 	 based on:
	  (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
	  (c) 2002-2003 osCommerce - www.oscommerce.com
	  (c) 2001-2003 TheMedia, Dipl.-Ing Thomas Plänkers - http://www.themedia.at & http://www.oscommerce.at
	  (c) 2003 XT-Commerce - community made shopping http://www.xt-commerce.com
    (c) 2010 Payment Network AG - http://www.payment-network.com

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

defined('MODULE_PAYMENT_'.$sofort_code.'_TEXT_TITLE') OR define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_TITLE', 'Online bankoverschrijving');
defined('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION') OR define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION', 'Online bankoverschrijving is de gratis, T&Uuml;V-gecertificeerde betaaldienst van SOFORT GmbH.');
defined('MODULE_PAYMENT_'.$sofort_code.'_TEXT_INFO') OR define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_INFO', 'Betaal comfortabel met het gecertificeerde en geteste online bankiersysteem Sofort. van SOFORT GmbH.');

// checkout
defined('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGE') OR define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGE', '
  <table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td valign="bottom">
	      <a onclick="javascript:window.open(\'https://images.sofort.com/de/su/landing.php\',\'Klanteninformatie\',\'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1020, height=900\');" style="float:left; width:auto;">{{image}}</a>
	    </td>
	  </tr>
	  <tr>
	    <td class="main">{{text}}</td>
	  </tr>
	</table>');
defined('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGEALT') OR define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGEALT', 'Sofort.');
defined('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_TEXT') OR define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_TEXT', '
  <ul>
    <li>Eenvoudige en directe betaling via internetbankieren.</li>
  </ul>');

// admin
defined('MODULE_PAYMENT_'.$sofort_code.'_STATUS_TITLE') OR define('MODULE_PAYMENT_'.$sofort_code.'_STATUS_TITLE', 'Sofort. Activeer');
defined('MODULE_PAYMENT_'.$sofort_code.'_STATUS_DESC') OR define('MODULE_PAYMENT_'.$sofort_code.'_STATUS_DESC', 'Wilt u betalingen door Sofort accepteren?');
define('MODULE_PAYMENT_'.$sofort_code.'_ALLOWED_TITLE', 'Toegestane zones');
define('MODULE_PAYMENT_'.$sofort_code.'_ALLOWED_DESC', 'Voer <b>individueel</b> de zones in die voor deze module moeten worden toegestaan. (bijv. AT,DE (indien leeg, zijn alle zones toegestaan))');
define('MODULE_PAYMENT_'.$sofort_code.'_TMP_ORDER_TITLE', 'Tijdelijke bestelling');
define('MODULE_PAYMENT_'.$sofort_code.'_TMP_ORDER_DESC', 'Wilt u een tijdelijke order aanmaken?');
define('MODULE_PAYMENT_'.$sofort_code.'_LOGGING_TITLE', 'Logboekregistratie mogelijk maken');
define('MODULE_PAYMENT_'.$sofort_code.'_LOGGING_DESC', 'Wilt u de logging activeren? <br/>De logbestanden worden opgeslagen in de map /log.');
define('MODULE_PAYMENT_'.$sofort_code.'_KEY_TITLE', 'Configuratietoets');
define('MODULE_PAYMENT_'.$sofort_code.'_KEY_DESC', 'U kunt de configuratietoets vinden in de instellingen van Onmiddellijk.');
define('MODULE_PAYMENT_'.$sofort_code.'_SORT_ORDER_TITLE', 'Weergavevolgorde');
define('MODULE_PAYMENT_'.$sofort_code.'_SORT_ORDER_DESC', 'Weergavevolgorde. Kleinste cijfer wordt als eerste weergegeven');
define('MODULE_PAYMENT_'.$sofort_code.'_ZONE_TITLE', 'Betalingszone');
define('MODULE_PAYMENT_'.$sofort_code.'_ZONE_DESC', 'Als een zone is geselecteerd, is de betalingsmethode alleen geldig voor deze zone.');
define('MODULE_PAYMENT_'.$sofort_code.'_CURRENCY_TITLE', 'Transactievaluta');
define('MODULE_PAYMENT_'.$sofort_code.'_CURRENCY_DESC', 'Het ontvangen van valuta volgens Onmiddellijk. Projectinstelling');
define('MODULE_PAYMENT_'.$sofort_code.'_ORDER_STATUS_ID_TITLE', 'bevestigde opdrachtstatus');
define('MODULE_PAYMENT_'.$sofort_code.'_ORDER_STATUS_ID_DESC', 'Bestelstatus na ontvangst van een bestelling waarbij een succesvolle betalingsbevestiging is verzonden');
define('MODULE_PAYMENT_'.$sofort_code.'_TMP_STATUS_ID_TITLE', 'Tijdelijke orderstatus');
define('MODULE_PAYMENT_'.$sofort_code.'_TMP_STATUS_ID_DESC', 'Bestelstatus voor nog niet afgehandelde transacties');
define('MODULE_PAYMENT_'.$sofort_code.'_UNC_STATUS_ID_TITLE', 'Bestelstatus te controleren');
define('MODULE_PAYMENT_'.$sofort_code.'_UNC_STATUS_ID_DESC', 'Bestelstatus na ontvangst van een bestelling met een onjuiste betalingsbevestiging');
define('MODULE_PAYMENT_'.$sofort_code.'_REC_STATUS_ID_TITLE', 'Bestelstatus na ontvangst van het geld');
define('MODULE_PAYMENT_'.$sofort_code.'_REC_STATUS_ID_DESC', 'Status van de bestelling nadat het geld op uw rekening is bijgeschreven. (Voorwaarde: Account bij de <u><a href="https://www.handelsbank.com/" target="_blank">Duitse Handelsbank</a></u>)');
define('MODULE_PAYMENT_'.$sofort_code.'_REF_STATUS_ID_TITLE', 'Bestelstatus na terugboeking');
define('MODULE_PAYMENT_'.$sofort_code.'_REF_STATUS_ID_DESC', 'Status van de bestelling na een terugboeking.');
define('MODULE_PAYMENT_'.$sofort_code.'_LOSS_STATUS_ID_TITLE', 'Bestelstatus als er geen geld is aangekomen');
define('MODULE_PAYMENT_'.$sofort_code.'_LOSS_STATUS_ID_DESC', 'Status van de bestelling als er geen geld op uw rekening staat. (Voorwaarde: rekening houden met de <u><a href="https://www.handelsbank.com/" target="_blank">Duitse Handelsbank</a></u>)');
define('MODULE_PAYMENT_'.$sofort_code.'_REASON_1_TITLE', 'Doel Lijn 1');
define('MODULE_PAYMENT_'.$sofort_code.'_REASON_1_DESC', 'Als er geen tijdelijke inkooporder wordt aangemaakt, is het inkoopordernummer niet beschikbaar. Om deze reden moet u het dan instellen op -TRANSACTIE-.');
define('MODULE_PAYMENT_'.$sofort_code.'_REASON_2_TITLE', 'Doel Lijn 2');
define('MODULE_PAYMENT_'.$sofort_code.'_REASON_2_DESC', 'De volgende plaatshouders worden vervangen in het beoogde doel (maximaal 27 tekens):<br /> {{order_id}}<br />{{order_date}}<br />{{customer_id}}<br />{{customer_name}}<br />{{customer_company}}<br />{{customer_email}}');
define('MODULE_PAYMENT_'.$sofort_code.'_IMAGE_TITLE', 'Betaling selectie grafisch / tekst');
define('MODULE_PAYMENT_'.$sofort_code.'_IMAGE_DESC', 'Weergegeven grafische / tekst bij het selecteren van betalingsopties');
define('MODULE_PAYMENT_'.$sofort_code.'_USER_ID_TITLE', 'Klantennummer');
define('MODULE_PAYMENT_'.$sofort_code.'_USER_ID_DESC', 'Uw klantnummer bij Sofort.');
define('MODULE_PAYMENT_'.$sofort_code.'_PROJECT_ID_TITLE', 'Projectnummer');
define('MODULE_PAYMENT_'.$sofort_code.'_PROJECT_ID_DESC', 'Het verantwoordelijke projectnummer bij Sofort. waartoe de betaling behoort.');
define('MODULE_PAYMENT_'.$sofort_code.'_PROJECT_PASS_TITLE', 'Wachtwoord voor het project');
define('MODULE_PAYMENT_'.$sofort_code.'_PROJECT_PASS_DESC', 'Het projectwachtwoord (onder Geavanceerde instellingen / Wachtwoorden en Hash-functies)');
define('MODULE_PAYMENT_'.$sofort_code.'_NOTIFY_PASS_TITLE', 'Wachtwoord voor kennisgeving');
define('MODULE_PAYMENT_'.$sofort_code.'_NOTIFY_PASS_DESC', 'Het meldingswachtwoord (onder Geavanceerde instellingen / Wachtwoorden en Hash-functies)');
define('MODULE_PAYMENT_'.$sofort_code.'_HASH_ALGORITHM_TITLE', 'Hash algoritme:');
define('MODULE_PAYMENT_'.$sofort_code.'_HASH_ALGORITHM_DESC', 'Het Hash-Algoritme (onder Geavanceerde instellingen / Wachtwoorden en Hash-Functies)');
define('MODULE_PAYMENT_'.$sofort_code.'_DESCRIPTION_INSTALL', '<br/><br/>Wilt u de juiste bestelstatussen installeren? <br/>De huidige ingestelde statussen worden overschreven.');

// status
defined('TEXT_NO_STATUSUPDATE') OR define('TEXT_NO_STATUSUPDATE', 'geen statusupdate');

// error
define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_ERROR_HEADING', 'De volgende fout werd gerapporteerd door Onmiddellijk. tijdens het proces:');
define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_ERROR_MESSAGE', 'Betaling via Sofort. is helaas niet mogelijk of werd op verzoek van de klant geannuleerd. Kies een andere betalingsmethode.');

// callback
defined('TEXT_SOFORT_NOT_CREDITED_YET') OR define('TEXT_SOFORT_NOT_CREDITED_YET', 'Onmiddellijk. Succesvol afgerond');
defined('TEXT_SOFORT_NOT_CREDITED') OR define('TEXT_SOFORT_NOT_CREDITED', 'Geld dat niet op de rekening is bijgeschreven');
defined('TEXT_SOFORT_LOSS') OR define('TEXT_SOFORT_LOSS', 'Bestelling controleren');
defined('TEXT_SOFORT_RECEIVED') OR define('TEXT_SOFORT_RECEIVED', 'Geld op rekening');
defined('TEXT_SOFORT_CREDITED') OR define('TEXT_SOFORT_CREDITED', TEXT_SOFORT_RECEIVED);
defined('TEXT_SOFORT_REFUNDED') OR define('TEXT_SOFORT_REFUNDED', 'Het geld werd volledig terugbetaald');
defined('TEXT_SOFORT_CANCELED') OR define('TEXT_SOFORT_CANCELED', 'Onmiddellijk. Afgebroken');
defined('TEXT_SOFORT_WAIT_FOR_MONEY') OR define('TEXT_SOFORT_WAIT_FOR_MONEY', 'Wachten op betalingsontvangst');
defined('TEXT_SOFORT_CONFIRMATION_PERIOD_EXPIRED') OR define('TEXT_SOFORT_CONFIRMATION_PERIOD_EXPIRED', 'Sofort. timeout');
defined('TEXT_SOFORT_REJECTED') OR define('TEXT_SOFORT_REJECTED', 'Onmiddellijk. Afgewezen.');
defined('TEXT_SOFORT_SOFORT_BANK_ACCOUNT_NEEDED') OR define('TEXT_SOFORT_SOFORT_BANK_ACCOUNT_NEEDED', TEXT_SOFORT_NOT_CREDITED_YET);

define('MODULE_PAYMENT_'.$sofort_code.'_ERROR_TRANSACTION', "Fout met \Fout (SU204): Onverwachte status van de transactie-ID: %s-ID: %s");
define('MODULE_PAYMENT_'.$sofort_code.'_ERROR_PAYMENT', "Betaling nog niet ontvangen \n Transactie-ID: %s");
define('MODULE_PAYMENT_'.$sofort_code.'_ERROR_UNEXPECTED_STATUS', "Fout (SU204): Onverwachte status van de \n transactie-ID: %s");
define('MODULE_PAYMENT_'.$sofort_code.'_SUCCESS_TRANSACTION', "Betaling succesvol verlopen. \n transactie-ID: %s");
define('MODULE_PAYMENT_'.$sofort_code.'_SUCCESS_PAYMENT', "Ontvangen betaling \n Transactie-ID: %s");
define('MODULE_PAYMENT_'.$sofort_code.'_SUCCESS_REFUNDED', "Betaling terugbetaald \n Transactie-ID: %s");

// order status
$SOFORT_INST_ORDER_STATUS_TMP_NAME = 'Temp';
$SOFORT_INST_ORDER_STATUS_UNC_NAME = 'Wacht';
$SOFORT_INST_ORDER_STATUS_LOSS_NAME = 'Wacht';
$SOFORT_INST_ORDER_STATUS_REC_NAME = 'Ontvangst van de betaling';
$SOFORT_INST_ORDER_STATUS_REF_NAME = 'vergoeding';
$SOFORT_INST_ORDER_STATUS_ORDER_NAME = 'Betaald';
?>