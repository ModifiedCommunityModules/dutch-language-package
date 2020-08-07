<?php
/* -----------------------------------------------------------------------------------------
   $Id: janolaw.php 2011-11-24 modified-shop $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(cod.php,v 1.28 2003/02/14); www.oscommerce.com
   (c) 2003   nextcommerce (invoice.php,v 1.6 2003/08/24); www.nextcommerce.org
   (c) 2005 XT-Commerce - community made shopping http://www.xt-commerce.com ($Id: billiger.php 950 2005-05-14 16:45:21Z mz $)
   (c) 2008 Gambio OHG (billiger.php 2008-11-11 gambio)

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

define('MODULE_JANOLAW_TEXT_TITLE', 'janolaw AGB Hosting-Service');
define('MODULE_JANOLAW_TEXT_DESCRIPTION', '<a href="https://www.janolaw.de/internetrecht/agb/agb-hosting-service/modified/index.html?partnerid=8764#menu" target="_blank"><img src="images/janolaw/janolaw_185x35.png" border=0></a><br /><br />Het grote Duitse juridische portaal janolaw biedt oplossingen op maat voor uw juridische vragen - van de advocaat-hotline tot individuele contracten met een advocaatgarantie. Met de GTC-hostingservice voor internetwinkels kunt u de juridische kerndocumenten GTC, het intrekkingsbeleid, het impressum en het privacybeleid individueel aan uw winkel aanpassen en door het janolaw-team voortdurend laten actualiseren. Meer bescherming is niet mogelijk.<br /><br /><a href="https://www.janolaw.de/internetrecht/agb/agb-hosting-service/modified/index.html?partnerid=8764#menu" target="_blank"><strong><u>Klik hier voor het aanbod<u></strong></a>');
define('MODULE_JANOLAW_USER_ID_TITLE', '<hr noshade>User-ID');
define('MODULE_JANOLAW_USER_ID_DESC', 'Uw User-ID');
define('MODULE_JANOLAW_SHOP_ID_TITLE', 'Shop-ID');
define('MODULE_JANOLAW_SHOP_ID_DESC', 'De Shop-ID van uw online shop');
define('MODULE_JANOLAW_STATUS_DESC', 'Activeer de module?');
define('MODULE_JANOLAW_STATUS_TITLE', 'Status');
define('MODULE_JANOLAW_TYPE_TITLE', '<hr noshade>Behalve als');
define('MODULE_JANOLAW_TYPE_DESC', 'Moeten de gegevens worden opgeslagen in een bestand of in de database?');
define('MODULE_JANOLAW_FORMAT_TITLE', 'Formaattype');
define('MODULE_JANOLAW_FORMAT_DESC', 'Moeten de gegevens worden opgeslagen als tekst of HTML?');
define('MODULE_JANOLAW_UPDATE_INTERVAL_TITLE', '<hr noshade>Update Interval');
define('MODULE_JANOLAW_UPDATE_INTERVAL_DESC', 'Met welke intervallen moeten de gegevens worden bijgewerkt?');
define('MODULE_JANOLAW_ERROR', 'Controleer de toewijzing van de documenten.');

define('MODULE_JANOLAW_TYPE_DATASECURITY_TITLE', '<hr noshade>Wettelijke tekst gegevensbescherming');
define('MODULE_JANOLAW_TYPE_DATASECURITY_DESC', 'Geef aan op welke pagina deze wettekst automatisch moet worden ingevoegd.');
define('MODULE_JANOLAW_PDF_DATASECURITY_TITLE', 'PDF om te downloaden');
define('MODULE_JANOLAW_PDF_DATASECURITY_DESC', 'Moeten de gegevens ook als PDF worden opgeslagen en moet er een link worden ingevoegd? <br/><b>Inspannend:</b> Dit werkt alleen in de HTML-versie!');
define('MODULE_JANOLAW_MAIL_DATASECURITY_TITLE', 'PDF als e-mailbijlage');
define('MODULE_JANOLAW_MAIL_DATASECURITY_DESC', 'Moet de PDF als bijlage bij de orderbevestiging worden meegestuurd?');

define('MODULE_JANOLAW_TYPE_TERMS_TITLE', '<hr noshade>Wettelijke tekst AGB');
define('MODULE_JANOLAW_TYPE_TERMS_DESC', 'Geef aan op welke pagina deze wettekst automatisch moet worden ingevoegd.');
define('MODULE_JANOLAW_PDF_TERMS_TITLE', 'PDF om te downloaden');
define('MODULE_JANOLAW_PDF_TERMS_DESC', 'Moeten de gegevens ook als PDF worden opgeslagen en moet er een link worden ingevoegd? <br/><b>Inspannend:</b> Dit werkt alleen in de HTML-versie!');
define('MODULE_JANOLAW_MAIL_TERMS_TITLE', 'PDF als e-mailbijlage');
define('MODULE_JANOLAW_MAIL_TERMS_DESC', 'Moet de PDF als bijlage bij de orderbevestiging worden meegestuurd?');

define('MODULE_JANOLAW_TYPE_LEGALDETAILS_TITLE', '<hr noshade>Juridische tekst Afdruk');
define('MODULE_JANOLAW_TYPE_LEGALDETAILS_DESC', 'Geef aan op welke pagina deze wettekst automatisch moet worden ingevoegd.');
define('MODULE_JANOLAW_PDF_LEGALDETAILS_TITLE', 'PDF om te downloaden');
define('MODULE_JANOLAW_PDF_LEGALDETAILS_DESC', 'Moeten de gegevens ook als PDF worden opgeslagen en moet er een link worden ingevoegd? <br/><b>Inspannend:</b> Dit werkt alleen in de HTML-versie!');
define('MODULE_JANOLAW_MAIL_LEGALDETAILS_TITLE', 'PDF als e-mailbijlage');
define('MODULE_JANOLAW_MAIL_LEGALDETAILS_DESC', 'Moet de PDF als bijlage bij de orderbevestiging worden meegestuurd?');

define('MODULE_JANOLAW_TYPE_REVOCATION_TITLE', '<hr noshade>Wettelijke tekst Intrekking');
define('MODULE_JANOLAW_TYPE_REVOCATION_DESC', 'Geef aan op welke pagina deze wettekst automatisch moet worden ingevoegd.');
define('MODULE_JANOLAW_PDF_REVOCATION_TITLE', 'PDF om te downloaden');
define('MODULE_JANOLAW_PDF_REVOCATION_DESC', 'Moeten de gegevens ook als PDF worden opgeslagen en moet er een link worden ingevoegd? <br/><b>Inspannend:</b> Dit werkt alleen in de HTML-versie!');
define('MODULE_JANOLAW_MAIL_REVOCATION_TITLE', 'PDF als e-mailbijlage');
define('MODULE_JANOLAW_MAIL_REVOCATION_DESC', 'Soll das PDF als Anhang zur Auftragsbestätigung mitgeschickt werden?');

define('MODULE_JANOLAW_TYPE_WITHDRAWAL_TITLE', '<hr noshade>Juridische tekst van het herroepingsformulier');
define('MODULE_JANOLAW_TYPE_WITHDRAWAL_DESC', 'Geef aan op welke pagina deze wettekst automatisch moet worden ingevoegd.<br/><br/><b>Inspannend:</b> dit werkt alleen vanaf versie 3. De omschakeling kan met Janolaw worden geregeld.');
define('MODULE_JANOLAW_PDF_WITHDRAWAL_TITLE', 'PDF om te downloaden');
define('MODULE_JANOLAW_PDF_WITHDRAWAL_DESC', 'Moeten de gegevens ook als PDF worden opgeslagen en moet er een link worden ingevoegd? <br/><b>Inspannend:</b> Dit werkt alleen in de HTML-versie!');
define('MODULE_JANOLAW_MAIL_WITHDRAWAL_TITLE', 'PDF als e-mailbijlage');
define('MODULE_JANOLAW_MAIL_WITHDRAWAL_DESC', 'Moet de PDF als bijlage bij de orderbevestiging worden meegestuurd?');
define('MODULE_JANOLAW_WITHDRAWAL_COMBINE_TITLE', 'Gecombineerd annuleringsbeleid/annuleringsformulier');
define('MODULE_JANOLAW_WITHDRAWAL_COMBINE_DESC', 'Moet er een gecombineerde herroepingsinstructie en herroepingsformulier worden gemaakt?');

?>