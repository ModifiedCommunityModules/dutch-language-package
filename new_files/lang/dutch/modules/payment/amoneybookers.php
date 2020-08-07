<?php

/* -----------------------------------------------------------------------------------------
   $Id: amoneybookers.php 85 2007-01-14 15:19:44Z mzanier $

   xt:Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2006 xt:Commerce
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(moneybookers.php,v 1.01 2003/01/20); www.oscommerce.com

   Released under the GNU General Public License
   -----------------------------------------------------------------------------------------
   Third Party contributions:
   Moneybookers v1.0                       Autor:    Gabor Mate  <gabor(at)jamaga.hu>

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_TITLE', 'Beveiligde betaling via Skrill');
//define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_DESCRIPTION', 'Skrill<br /><br /><img src="images/icon_arrow_right.gif"> <b><a href="http://www.xt-commerce.com/index.php?option=com_content&task=view&id=76&lang=de" target="_blank">Hilfe zu Einstellungen</a></b>');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_DESCRIPTION', 'Skrill');
define('MODULE_PAYMENT_AMONEYBOOKERS_NOCURRENCY_ERROR', 'Er is geen geaccepteerde Skrill taal ge&iuml;nstalleerd!');
define('MODULE_PAYMENT_AMONEYBOOKERS_ERRORTEXT1', 'payment_error=');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_INFO', '');
define('MODULE_PAYMENT_AMONEYBOOKERS_ERRORTEXT2', '&error=Fout tijdens uw betaling bij Skrill!');
define('MODULE_PAYMENT_AMONEYBOOKERS_ORDER_TEXT', 'Besteldatum: ');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_ERROR', 'Fout in de betaling!');
define('MODULE_PAYMENT_AMONEYBOOKERS_CONFIRMATION_TEXT', 'Bedankt voor uw bestelling!');
define('MODULE_PAYMENT_AMONEYBOOKERS_TRANSACTION_FAILED_TEXT', 'Uw betalingstransactie op skrill.com is mislukt. Probeer het nog eens, of kies een andere betalingsoptie!');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_INFO_2', '<b>100% veiligheid </b> - Uw gegevens zijn gecodeerd volgens de hoogste veiligheidsstandaarden.');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_INFO_3', '<b>100% gegevensbescherming</b> - Uw persoonlijke gegevens blijven bij Skrill als gelicentieerde financi&euml;le instelling en worden niet aan de winkel doorgegeven.');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_INFO_4', '<b>maximaal gemak</b> - Nadat u zich eenmaal bij Skrill heeft geregistreerd, zijn uw e-mailadres en wachtwoord voldoende voor alle toekomstige betalingen.');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_INFO_5', '<b>hoge acceptatie</b> - Met Skrill kunt u in enkele duizenden winkels winkelen.');
define('MODULE_PAYMENT_AMONEYBOOKERS_TEXT_INFO_1', '<br /><br />Directe en gemakkelijke betaling met...');

define('MB_TEXT_MBDATE', 'Laatst bijgewerkt:');
define('MB_TEXT_MBTID', 'TR ID:');
define('MB_TEXT_MBERRTXT', 'Status:');

define('MODULE_PAYMENT_AMONEYBOOKERS_PROCESSED_STATUS_ID_TITLE', 'Bestelstatus - Verwerkt');
define('MODULE_PAYMENT_AMONEYBOOKERS_PROCESSED_STATUS_ID_DESC', '');

define('MODULE_PAYMENT_AMONEYBOOKERS_PENDING_STATUS_ID_TITLE', 'Bestelstatus - Gepland');
define('MODULE_PAYMENT_AMONEYBOOKERS_PENDING_STATUS_ID_DESC', '');

define('MODULE_PAYMENT_AMONEYBOOKERS_CANCELED_STATUS_ID_TITLE', 'Bestelstatus - Geannuleerd');
define('MODULE_PAYMENT_AMONEYBOOKERS_CANCELED_STATUS_ID_DESC', '');

define('MODULE_PAYMENT_AMONEYBOOKERS_TMP_STATUS_ID_TITLE', 'Bestelstatus - Temp');
define('MODULE_PAYMENT_AMONEYBOOKERS_TMP_STATUS_ID_DESC', '');

define('MODULE_PAYMENT_AMONEYBOOKERS_ICONS_TITLE', 'Pictogrammen');
define('MODULE_PAYMENT_AMONEYBOOKERS_ICONS_DESC', '');

define('MODULE_PAYMENT_AMONEYBOOKERS_STATUS_TITLE', 'Activeer Skrill');
//define('MODULE_PAYMENT_AMONEYBOOKERS_STATUS_DESC', 'M&ouml;chten Sie Zahlungen per Skrill akzeptieren?<br /><br /><img src="images/icon_arrow_right.gif"> <b><a href="http://www.xt-commerce.com/index.php?option=com_content&task=view&id=76&lang=de" target="_blank">Hilfe zu Einstellungen</a></b>');
define('MODULE_PAYMENT_AMONEYBOOKERS_STATUS_DESC', 'Wilt u betalingen per skrill accepteren?');
define('MODULE_PAYMENT_AMONEYBOOKERS_EMAILID_TITLE', 'Skrill e-mail adres');
define('MODULE_PAYMENT_AMONEYBOOKERS_EMAILID_DESC', 'E-mail adres geregistreerd bij Skrill. <br /><font color="#ff0000">* Verplicht</font>');
define('MODULE_PAYMENT_AMONEYBOOKERS_PWD_TITLE', 'Skrill geheim woord');
define('MODULE_PAYMENT_AMONEYBOOKERS_PWD_DESC', 'Voer uw Skrill geheime woord in (dit is niet uw wachtwoord!)');
define('MODULE_PAYMENT_AMONEYBOOKERS_MERCHANTID_TITLE', 'Handelaars-ID ');
define('MODULE_PAYMENT_AMONEYBOOKERS_MERCHANTID_DESC', 'Uw persoonlijke dealer ID bij Skrill <br /><font color="#ff0000">* Verplicht</font>');
define('MODULE_PAYMENT_AMONEYBOOKERS_SORT_ORDER_TITLE', 'Weergavevolgorde');
define('MODULE_PAYMENT_AMONEYBOOKERS_SORT_ORDER_DESC', 'Weergavevolgorde. Het kleinste cijfer wordt als eerste weergegeven.');
define('MODULE_PAYMENT_AMONEYBOOKERS_CURRENCY_TITLE', 'Transactievaluta');
define('MODULE_PAYMENT_AMONEYBOOKERS_CURRENCY_DESC', 'De valuta waarin de betalingstransactie wordt verwerkt. Als de door u gekozen valuta niet beschikbaar is bij Skrill, zal die valuta worden geselecteerd.');
define('MODULE_PAYMENT_AMONEYBOOKERS_LANGUAGE_TITLE', 'Transactietaal');
define('MODULE_PAYMENT_AMONEYBOOKERS_LANGUAGE_DESC', 'De taal waarin de betalingstransactie wordt verwerkt. Als de door u gekozen winkeltaal niet beschikbaar is bij Skrill, zal deze taal worden geselecteerd.');
define('MODULE_PAYMENT_AMONEYBOOKERS_ZONE_TITLE', 'Betalingszone');
define('MODULE_PAYMENT_AMONEYBOOKERS_ZONE_DESC', 'Als een zone is geselecteerd, is de betalingsmethode alleen geldig voor deze zone.');
define('MODULE_PAYMENT_AMONEYBOOKERS_ALLOWED_TITLE', 'Toegestane zones');
define('MODULE_PAYMENT_AMONEYBOOKERS_ALLOWED_DESC', 'Voer <b>individueel</b> de zones in die voor deze module moeten worden toegestaan. (bijv. AT,DE (indien leeg, zijn alle zones toegestaan))');
?>