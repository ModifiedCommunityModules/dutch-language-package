<?php
/* --------------------------------------------------------------
   $Id: english.php 12540 2020-01-22 15:18:25Z Tomcraft $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   --------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(german.php,v 1.99 2003/05/28); www.oscommerce.com
   (c) 2003 nextcommerce (german.php,v 1.24 2003/08/24); www.nextcommerce.org
   (c) 2006 XT-Commerce (english.php)

   Released under the GNU General Public License
   --------------------------------------------------------------
   Third Party contributions:
   Customers Status v3.x (c) 2002-2003 Copyright Elari elari@free.fr | www.unlockgsm.com/dload-osc/ | CVS : http://cvs.sourceforge.net/cgi-bin/viewcvs.cgi/elari/?sortby=date#dirlist

   Released under the GNU General Public License 
   --------------------------------------------------------------*/

// look in your $PATH_LOCALE/locale directory for available locales..
// on RedHat6.0 I used 'en_GB'
// on FreeBSD 4.0 I use 'en_GB.ISO_8859-1'
// this may not work under win32 environments..


@setlocale(LC_TIME, 'nl_NL.UTF-8', 'nl_NL@euro','nl_NL','nl_NL.ISO_8859-1','nl_NL.ISO_8859-15', 'du_DU', 'nl_DU', 'du_NL','dutch_NETHERLANDS');

define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd/m/Y');  // this is used for strftime()
define('PHP_DATE_TIME_FORMAT', 'd/m/Y H:i:s'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');

// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function xtc_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
  }
}

require_once(DIR_FS_INC.'auto_include.inc.php');
foreach(auto_include(DIR_FS_LANGUAGES.'dutch/extra/admin/','php') as $file) require ($file);

// Global entries for the <html> tag
define('HTML_PARAMS','dir="ltr" lang="nl"');

// page title
define('TITLE', defined('PROJECT_VERSION') ? PROJECT_VERSION : 'ongedefinieerde');

// header text in includes/header.php
define('HEADER_TITLE_TOP', 'Administratie');
define('HEADER_TITLE_SUPPORT_SITE', 'Ondersteuningssite');
define('HEADER_TITLE_ONLINE_CATALOG', 'Online Catalogus');
define('HEADER_TITLE_ADMINISTRATION', 'Administratie');

// text for gender
define('MALE', 'Meneer');
define('FEMALE', 'Mevrouw');

// text for date of birth example
define('DOB_FORMAT_STRING', 'dd/mm/yyyy');

// configuration box text in includes/boxes/configuration.php

define('BOX_HEADING_CONFIGURATION','Configuratie');
define('BOX_HEADING_MODULES','Modules');
define('BOX_HEADING_PARTNER_MODULES','Partnermodules');
define('BOX_HEADING_ZONE','Zones/Tax');
define('BOX_HEADING_CUSTOMERS','Klanten');
define('BOX_HEADING_PRODUCTS','Catalogus');
define('BOX_HEADING_STATISTICS','Statistieken');
define('BOX_HEADING_TOOLS','Gereedschap');
define('BOX_HEADING_LOCALIZATION', 'Taal/valuta\'s');
define('BOX_HEADING_TEMPLATES','Sjablonen');
define('BOX_HEADING_LOCATION_AND_TAXES', 'Locatie/Belasting');
define('BOX_HEADING_CATALOG', 'Catalogus');

define('BOX_CONTENT','Content Manager');
define('TEXT_ALLOWED', 'Permissie');
define('TEXT_ACCESS', 'Toegang tot');
define('BOX_CONFIGURATION', 'Algemene instellingen');
define('BOX_CONFIGURATION_1', 'Mijn Winkel');
define('BOX_CONFIGURATION_2', 'Minimum Waarde');
define('BOX_CONFIGURATION_3', 'Maximum Waarde');
define('BOX_CONFIGURATION_4', 'Afbeelding opties');
define('BOX_CONFIGURATION_5', 'Klanten Details');
define('BOX_CONFIGURATION_6', 'Module Opties');
define('BOX_CONFIGURATION_7', 'Verzend Opties');
define('BOX_CONFIGURATION_8', 'Artikel Lijst Opties');
define('BOX_CONFIGURATION_9', 'Magazijn Opties');
define('BOX_CONFIGURATION_10', 'Logging Opties');
define('BOX_CONFIGURATION_11', 'Cache Opties');
define('BOX_CONFIGURATION_12', 'E-Mail Opties');
define('BOX_CONFIGURATION_13', 'Download Opties');
define('BOX_CONFIGURATION_14', 'Gzip Compressie');
define('BOX_CONFIGURATION_15', 'Sessies');
define('BOX_CONFIGURATION_16', 'Meta-Tags/Zoekmachines');
define('BOX_CONFIGURATION_17', 'Insteekmodules');
define('BOX_CONFIGURATION_18', 'BTW nr.');
define('BOX_CONFIGURATION_19', 'Partner');
define('BOX_CONFIGURATION_22', 'Zoek-opties');
define('BOX_CONFIGURATION_24', 'PIWIK &amp; Google Analytics');
define('BOX_CONFIGURATION_25', 'Captcha');
define('BOX_CONFIGURATION_31', 'Skrill');
define('BOX_CONFIGURATION_40', 'Popup Window Opties');
define('BOX_CONFIGURATION_1000', 'Admingedeelte Opties');

define('BOX_MODULES', 'Betaal-/Verzend-/Betalings-Module');
define('BOX_PAYMENT', 'Betaalopties');
define('BOX_SHIPPING', 'Verzendwijze');
define('BOX_ORDER_TOTAL', 'Bestellingstotaal');
define('BOX_CATEGORIES', 'Categorie&euml;n / Artikelen');
define('BOX_PRODUCTS_ATTRIBUTES', 'Artikelopties');
define('BOX_MANUFACTURERS', 'Fabrikant');
define('BOX_REVIEWS', 'Artikel');
define('BOX_CAMPAIGNS', 'Campagnes');
define('BOX_XSELL_PRODUCTS', 'Cross Marketing');
define('BOX_SPECIALS', 'Speciale aanbiedingen');
define('BOX_PRODUCTS_EXPECTED', 'Verwachte artikelen');
define('BOX_CUSTOMERS', 'Klanten');
define('BOX_ACCOUNTING', 'Admin Beheer');
define('BOX_CUSTOMERS_STATUS','Klantgroepen');
define('BOX_ORDERS', 'Bestellingen');
define('BOX_COUNTRIES', 'Land');
define('BOX_ZONES', 'Provincies');
define('BOX_GEO_ZONES', 'Belastingzones');
define('BOX_TAX_CLASSES', 'Belasting klassen');
define('BOX_TAX_RATES', 'Belastingtarieven');
define('BOX_HEADING_REPORTS', 'Rapporten');
define('BOX_PRODUCTS_VIEWED', 'Bekeken Artikelen');
define('BOX_STOCK_WARNING','Voorraad rapport');
define('BOX_PRODUCTS_PURCHASED', 'Verkochte Artikelen');
define('BOX_STATS_CUSTOMERS', 'Klanten-Bestelstatistieken');
define('BOX_BACKUP', 'Database Manager');
define('BOX_BANNER_MANAGER', 'Banner Manager');
define('BOX_CACHE', 'Cache Regeling');
define('BOX_DEFINE_LANGUAGE', 'Talen definieeren');
define('BOX_FILE_MANAGER', 'Bestands-Manager');
define('BOX_MAIL', 'E-Mail Center');
define('BOX_NEWSLETTERS', 'Aanmeld Manager');
define('BOX_SERVER_INFO', 'Server Info');


define('BOX_WHOS_ONLINE', 'Wie is Online');
define('BOX_TPL_BOXES','Box Volgorde');
define('BOX_CURRENCIES', 'Valuta');
define('BOX_LANGUAGES', 'Talen');
define('BOX_ORDERS_STATUS', 'Bestelstatus');
define('BOX_ATTRIBUTES_MANAGER','Optie Beheer');
define('BOX_PRODUCTS_ATTRIBUTES','Optie-Groepen');
define('BOX_ORDERS_STATUS','Bestelstatus');
define('BOX_SHIPPING_STATUS','Leverstatus');
define('BOX_SALES_REPORT','Omzet Rapport');
define('BOX_MODULE_EXPORT','Exporteer Modules');
define('BOX_MODULE_SYSTEM','Systeemmodules');
define('BOX_HEADING_GV_ADMIN', 'Vouchers/Coupons');
define('BOX_GV_ADMIN_QUEUE', 'Cadeaubon Queue');
define('BOX_GV_ADMIN_MAIL', 'Mail Cadeaubon');
define('BOX_GV_ADMIN_SENT', 'Cadeaubonnen verstuurd');
define('BOX_HEADING_COUPON_ADMIN','Kortingsbonnen');
define('BOX_COUPON_ADMIN','Bon Admin');
define('BOX_TOOLS_BLACKLIST','Creditcard-Blacklist');
define('BOX_IMPORT','Import/Export');
define('BOX_PRODUCTS_VPE','Verpakkingseenheid');
define('BOX_CAMPAIGNS_REPORT','Campagnerapport');
define('BOX_ORDERS_XSELL_GROUP','Cross-sell groepen');
define('BOX_REMOVEOLDPICS','Oude foto\'s verwijderen'); // Remove old pictures - franky_n - 20110105
define('BOX_JANOLAW','janolaw AGB Hosting'); // Tomcraft - 2011-06-17 - Added janolaw AGB hosting service
define('BOX_HAENDLERBUND','Handelaarsvereniging AGB Service'); // Tomcraft - 2012-12-08 - Added haendlerbund AGB interface
define('BOX_SHOP','Winkel');
define('BOX_LOGOUT','Uitloggen');
define('BOX_CREDITS','Kredieten');
define('BOX_UPDATE','Versie controleren');
define('BOX_GV_CUSTOMERS','Klanten Krediet');
define('BOX_IT_RECHT_KANZLEI', 'IT Recht Kanzlei');
define('BOX_PROTECTEDSHOPS', 'Beschermde winkels - AGB Service');
define('BOX_CLEVERREACH', 'CleverReach');
define('BOX_SUPERMAILER', 'SuperMailer');
define('BOX_OFFLINE', 'Offline winkelen');
define('BOX_LOGS', 'Logbestanden');
define('BOX_SHIPCLOUD', 'shipcloud');
define('BOX_SHIPCLOUD_PICKUP', 'shipcloud - pick-up');
define('BOX_PRODUCTS_TAGS', 'Producteigenschappen');
define('BOX_TRUSTEDSHOPS', 'Vertrouwde winkels');
define('BOX_NEWSLETTER_RECIPIENTS', 'Ontvangers van de nieuwsbrief');
define('BOX_DSGVO_EXPORT', 'BBPR Uitvoer');
define('BOX_SUPPORT', 'Ondersteuning');
define('BOX_CACHING', 'Caching');
define('BOX_MODULE_NEWSLETTER','Nieuwsbrief');

define('TXT_GROUPS','<b>Groepen</b>:');
define('TXT_SYSTEM','System');
define('TXT_CUSTOMERS','Klanten/Bestellingen');
define('TXT_PRODUCTS','Artikelen/Categorie&euml;n');
define('TXT_STATISTICS','Statistieken');
define('TXT_TOOLS','Tools');
define('TEXT_ACCOUNTING','Toegang tot de Admin voor:');

/******* SHOPGATE **********/
if (is_file(DIR_FS_CATALOG.'includes/external/shopgate/base/lang/dutch/admin/dutch.php')) {
  include_once (DIR_FS_CATALOG.'includes/external/shopgate/base/lang/dutch/admin/dutch.php');
}
/******* SHOPGATE **********/

// javascript messages
define('JS_ERROR', 'Tijdens het verwerken van uw formulier zijn er fouten opgetreden!\nMaak aub de volgende correcties:\n\n');

define('JS_OPTIONS_VALUE_PRICE', '* U dient deze waarde een prijs toe te kennen\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* Het nieuwe product attribuut benodigd een prijs prefix (+/-)\n');

define('JS_PRODUCTS_NAME', '* Het nieuwe artikel benodigd een Naam\n');
define('JS_PRODUCTS_DESCRIPTION', '* Het nieuwe artikel benodigd een Beschrijving\n');
define('JS_PRODUCTS_PRICE', '* Het nieuwe artikel benodigd een Prijs\n');
define('JS_PRODUCTS_WEIGHT', '* Het nieuwe artikel benodigd een Gewichtseenheid\n');
define('JS_PRODUCTS_QUANTITY', '* Het nieuwe artikel benodigd een Aantaleenheid\n');
define('JS_PRODUCTS_MODEL', '* Het nieuwe artikel benodigd een Artikelnummer\n');
define('JS_PRODUCTS_IMAGE', '* Het nieuwe artikel benodigd een Afbeelding\n');

define('JS_SPECIALS_PRODUCTS_PRICE', '* Een nieuwe prijs voor dit artikel dient vastgelegd te worden\n');

define('JS_GENDER', '* De \'Titel\' moet gekozen worden.\n');
define('JS_FIRST_NAME', '* De \'Voornaam\' dient minstens uit ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' tekens te bestaan.\n');
define('JS_LAST_NAME', '* De \'Achternaam\' dient minstens uit ' . ENTRY_LAST_NAME_MIN_LENGTH . ' tekens te bestaan.\n');
define('JS_DOB', '* De \'Geboortedatum\' dient het volgende formaat te hebben: xx.xx.xxxx (Dag/Maand/Jaar).\n');
define('JS_EMAIL_ADDRESS', '* Het \'E-Mail-Adres\' dient minstens uit ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' tekens te bestaan.\n');
define('JS_ADDRESS', '* De \'Straat\' dient minstens uit ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' tekens te bestaan.\n');
define('JS_POST_CODE', '* De \'Postcode\' dient minstens uit ' . ENTRY_POSTCODE_MIN_LENGTH . ' tekens te bestaan.\n');
define('JS_CITY', '* De \'Woonplaats\' dient minstens uit ' . ENTRY_CITY_MIN_LENGTH . ' tekens te bestaan.\n');
define('JS_STATE', '* De \'Provincie\' moet gekozen worden.\n');
define('JS_STATE_SELECT', '-- Kies hierboven --');
define('JS_ZONE', '* De \'Provincie\' kan uit het klapmenu gekozen worden.');
define('JS_COUNTRY', '* Het \'Land\' dient gekozen te worden.\n');
define('JS_TELEPHONE', '* Het \'Telefoonnummer\' dient minstens uit ' . ENTRY_TELEPHONE_MIN_LENGTH . ' tekens te bestaan.\n');
define('JS_PASSWORD', '* Het \'Wachtwoord\' alsmede \'wachtwoordbevestiging\' moeten met elkaar overeenkomen en uit minstens ' . ENTRY_PASSWORD_MIN_LENGTH . ' tekens bestaan.\n');

define('JS_ORDER_DOES_NOT_EXIST', 'Ordernummer %s bestaat niet!');

define('CATEGORY_PERSONAL', 'Persoonlijke data');
define('CATEGORY_ADDRESS', 'Adres');
define('CATEGORY_CONTACT', 'Contact');
define('CATEGORY_COMPANY', 'Firma');
define('CATEGORY_OPTIONS', 'Meer opties');

define('ENTRY_GENDER', 'Titel:');
define('ENTRY_GENDER_ERROR', '&nbsp;<span class="errorText">verplicht</span>');
define('ENTRY_FIRST_NAME', 'Voornaam:');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<span class="errorText">minstens ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' Tekens</span>');
define('ENTRY_LAST_NAME', 'Achternaam:');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<span class="errorText">minstens ' . ENTRY_LAST_NAME_MIN_LENGTH . ' Tekens</span>');
define('ENTRY_DATE_OF_BIRTH', 'Geboortedatum:');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<span class="errorText">(b.v. 21.05.1970)</span>');
define('ENTRY_EMAIL_ADDRESS', 'E-Mail Adres:');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<span class="errorText">minstens ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' Tekens</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<span class="errorText">ongeldig E-Mail Adres!</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<span class="errorText">Dit E-Mail Adres is al in gebruik!</span>');
define('ENTRY_COMPANY', 'Firmanaam:');
define('ENTRY_STREET_ADDRESS', 'Straat:');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<span class="errorText">minstens ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' Tekens</span>');
define('ENTRY_SUBURB', 'wijk:');
define('ENTRY_POST_CODE', 'Poscode:');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<span class="errorText">minstens ' . ENTRY_POSTCODE_MIN_LENGTH . ' Cijfers</span>');
define('ENTRY_CITY', 'Woonplaats:');
define('ENTRY_CITY_ERROR', '&nbsp;<span class="errorText">minstens ' . ENTRY_CITY_MIN_LENGTH . ' Tekens</span>');
define('ENTRY_STATE', 'Provincie:');
define('ENTRY_STATE_ERROR', '&nbsp;<span class="errorText">verplicht veld</font></small>');
define('ENTRY_COUNTRY', 'Land:');
define('ENTRY_TELEPHONE_NUMBER', 'Telefoonnummer:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<span class="errorText">minstens ' . ENTRY_TELEPHONE_MIN_LENGTH . ' Cijfers</span>');
define('ENTRY_FAX_NUMBER', 'Faxnummer:');
define('ENTRY_NEWSLETTER', 'Nieuwsbrief:');
define('ENTRY_CUSTOMERS_STATUS', 'Klanten status:');
define('ENTRY_NEWSLETTER_YES', 'geabonneerd');
define('ENTRY_NEWSLETTER_NO', 'niet geabonneerd');
define('ENTRY_MAIL_ERROR','&nbsp;<span class="errorText">Maak uw keuze</span>');
define('ENTRY_PASSWORD','Wachtwoord (autom. gegenereerd)');
define('ENTRY_PASSWORD_ERROR','&nbsp;<span class="errorText">Uw wachtwoord dient uit minstens ' . ENTRY_PASSWORD_MIN_LENGTH . ' Tekens te bestaan.</span>');
define('ENTRY_MAIL_COMMENTS','Aanvullende E-Mailtekst :');

define('ENTRY_MAIL','Stuur e-mail met wachtwoord naar klant?');
define('YES','ja');
define('NO','nee');
define('SAVE_ENTRY','Bewaar wijzigingen?');
define('TEXT_CHOOSE_INFO_TEMPLATE','Template voor artikel details');
define('TEXT_CHOOSE_OPTIONS_TEMPLATE','Template voor artikel opties');
define('TEXT_SELECT','-- Selecteer AUB --');

// BOF - Tomcraft - 2009-06-10 - added some missing alternative text on admin icons
// Icons
define('ICON_ARROW_RIGHT','gemarkeerd');
define('ICON_BIG_WARNING','Attentie!');
define('ICON_CROSS', 'Fout');
define('ICON_CURRENT_FOLDER', 'Aktuele map');
define('ICON_DELETE', 'Verwijderen');
define('ICON_EDIT','Bewerken');
define('ICON_ERROR', 'Fout');
define('ICON_FILE', 'Bestand');
define('ICON_FILE_DOWNLOAD', 'Download');
define('ICON_FOLDER', 'Map');
define('ICON_LOCKED', 'Vergrendeld');
define('ICON_POPUP','Banner Preview');
define('ICON_PREVIOUS_LEVEL', 'Voorgaand Level');
define('ICON_PREVIEW', 'Preview');
define('ICON_STATISTICS', 'Statistieken');
define('ICON_SUCCESS', 'Succes');
define('ICON_TICK', 'Waar');
define('ICON_UNLOCKED', 'Ontgrendeld');
define('ICON_WARNING', 'Waarschuwing');
// EOF - Tomcraft - 2009-06-10 - added some missing alternative text on admin icons

// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE', 'Pagina %s van %d');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'Getoond worden <b>%d</b> tot <b>%d</b> (van in totaal <b>%d</b> Banners)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Getoond worden <b>%d</b> tot <b>%d</b> (van in totaal <b>%d</b> Landen)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Getoond worden <b>%d</b> tot <b>%d</b> (van in totaal <b>%d</b> Klanten)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Getoond worden <b>%d</b> tot <b>%d</b> (van in totaal <b>%d</b> Valuta)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Getoond worden <b>%d</b> tot <b>%d</b> (van in totaal <b>%d</b> Talen)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Getoond worden <b>%d</b> tot <b>%d</b> (van in totaal <b>%d</b> Fabrikanten)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Getoond worden <b>%d</b> tot <b>%d</b> (van in totaal <b>%d</b> Nieuwsbrieven)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Getoond worden <b>%d</b> tot <b>%d</b> (van in totaal <b>%d</b> Bestellingen)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Getoond worden <b>%d</b> tot <b>%d</b> (van in totaal <b>%d</b> Bestelstatus)');
define('TEXT_DISPLAY_NUMBER_OF_XSELL_GROUP', 'Getoond worden <b>%d</b> tot <b>%d</b> (van in totaal <b>%d</b> Cross-Marketing Groepen)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_VPE', 'Getoond worden <b>%d</b> tot <b>%d</b> (van in totaal <b>%d</b> Verpakkingseenheden)');
define('TEXT_DISPLAY_NUMBER_OF_SHIPPING_STATUS', 'Getoond worden <b>%d</b> tot <b>%d</b> (van in totaal <b>%d</b> Leveringstatus)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Getoond worden <b>%d</b> tot <b>%d</b> (van in totaal <b>%d</b> Artikelen)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Getoond worden <b>%d</b> tot <b>%d</b> (van in totaal <b>%d</b> verwachte artikelen)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Getoond worden <b>%d</b> tot <b>%d</b> (van in totaal <b>%d</b> Reviews)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Getoond worden <b>%d</b> tot <b>%d</b> (van in totaal <b>%d</b> Speciale aanbiedingen)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Getoond worden <b>%d</b> tot <b>%d</b> (van in totaal <b>%d</b> Belastingklasses)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Getoond worden <b>%d</b> tot <b>%d</b> (van in totaal <b>%d</b> Belastingzones)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Getoond worden <b>%d</b> tot <b>%d</b> (van in totaal <b>%d</b> Belastingtarieven)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Getoond worden <b>%d</b> tot <b>%d</b> (van in totaal <b>%d</b> Zones)');
define('TEXT_DISPLAY_NUMBER_OF_WHOS_ONLINE', 'Weergave <b>%d</b> tot <b>%d</b> (van <b>%d</b> Klanten die online zijn)');

define('PREVNEXT_BUTTON_PREV', '&lt;&lt;');
define('PREVNEXT_BUTTON_NEXT', '&gt;&gt;');

define('TEXT_DEFAULT', 'Standaard');
define('TEXT_SET_DEFAULT', 'als Standaard definiëren');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* Verplicht</span>');

define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', 'Fout: Er is geen standaard valuta ingesteld. Stel dit in bij: Adminstratie -> Zone/Belasting -> Valuta');

define('TEXT_CACHE_CATEGORIES', 'Categorie&euml;n Box');
define('TEXT_CACHE_MANUFACTURERS', 'Fabrikanten Box');


define('TEXT_CACHE_ALSO_PURCHASED', 'Kochten ook dit Module');

define('TEXT_NONE', '--geen--');
define('TEXT_AUTO_PROPORTIONAL', '--automatisch evenredig--');
define('TEXT_AUTO_MAX', '--automaximum--');
define('TEXT_TOP', 'Top');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Fout: Doel bestaat niet.');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Fout: Doel is niet beschrijfbaar.');
define('ERROR_FILE_NOT_SAVED', 'Fout: Bestandsupload niet opgeslagen.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'Fout: Bestands upload type niet toegestaan.');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Succes: Bestandsupload succesvol opgeslagen.');
define('WARNING_NO_FILE_UPLOADED', 'Waarschuwing: Er werd geen bestand geupload.');
define('ERROR_FILE_NOT_REMOVEABLE', 'Fout: Bestand niet verwijderd.');

define('DELETE_ENTRY','Eintrag l&ouml;schen?');
define('TEXT_PAYMENT_ERROR','<b>WAARSCHUWING:</b><br />U dient een betalingsmodule te activeren!');
define('TEXT_SHIPPING_ERROR','<b>WAARSCHUWING:</b><br />U dient een verzendmodule te activeren!');
define('TEXT_PAYPAL_CONFIG','<b>WAARSCHUWING:</b> Configureer hier de PayPal-betalingsinstellingen voor "Live mode": <a href="%s"><strong>Partner -> PayPal</strong></a>.'); //DokuMan - 2012-05-31 - show warning if PayPal payment module activated, but not configured for live mode yet
define('TEXT_DUPLICATE_CONFIG_ERROR','<b>WAARSCHUWING:</b> Duplicaatconfiguratietoets: ');

define('TEXT_NETTO','Netto: ');

define('ENTRY_CID','Klantnummer:');
define('IP','Bestel IP:');
define('CUSTOMERS_MEMO','Memos:');
define('DISPLAY_MEMOS','Anzeigen/Schreiben');
define('TITLE_MEMO','Klanten MEMO');
define('ENTRY_LANGUAGE','Taal:');
define('CATEGORIE_NOT_FOUND','Categorie bestaat niet');

// BOF - Tomcraft - 2009-06-10 - added some missing alternative text on admin icons
// Image Icons
define('IMAGE_RELEASE', 'Geschenkbon inwisselen');
define('IMAGE_ICON_STATUS_GREEN_STOCK','in voorraad');
define('IMAGE_ICON_STATUS_GREEN','actief');
define('IMAGE_ICON_STATUS_GREEN_LIGHT','activeren');
define('IMAGE_ICON_STATUS_RED','inactief');
define('IMAGE_ICON_STATUS_RED_LIGHT','deactiveren');
define('IMAGE_ICON_INFO','selecteren');
// EOF - Tomcraft - 2009-06-10 - added some missing alternative text on admin icons

define('_JANUARY', 'Januari');
define('_FEBRUARY', 'Februari');
define('_MARCH', 'Maart');
define('_APRIL', 'April');
define('_MAY', 'Mei');
define('_JUNE', 'Juni');
define('_JULY', 'Juli');
define('_AUGUST', 'Augustus');
define('_SEPTEMBER', 'September');
define('_OCTOBER', 'Oktober');
define('_NOVEMBER', 'November');
define('_DECEMBER', 'December');

// Beschreibung f&uuml;r Abmeldelink im Newsletter
define('TEXT_NEWSLETTER_REMOVE', 'Om zich af te melden van onze nieuwsbrief klik hier:');

define('TEXT_DISPLAY_NUMBER_OF_GIFT_VOUCHERS', 'Getoond worden <b>%d</b> tot <b>%d</b> (van in totaal <b>%d</b> Geschenkbonnen)');
define('TEXT_DISPLAY_NUMBER_OF_COUPONS', 'Getoond worden <b>%d</b> tot <b>%d</b> ((van in totaal <b>%d</b> Coupons)');
define('TEXT_VALID_PRODUCTS_LIST', 'Artikellijst');
define('TEXT_VALID_PRODUCTS_ID', 'Artikelnummer');
define('TEXT_VALID_PRODUCTS_NAME', 'Artikelnaam');
define('TEXT_VALID_PRODUCTS_MODEL', 'Artikelmodel');

define('TEXT_VALID_CATEGORIES_LIST', 'Categorielijst');
define('TEXT_VALID_CATEGORIES_ID', 'Categorienummer');
define('TEXT_VALID_CATEGORIES_NAME', 'Categorienaam');

define('TXT_ALL','Alle');

// UST ID
define('HEADING_TITLE_VAT','BTW-IdNr.');

define('ENTRY_VAT_ID','BTW-IdNr.:');
define('ENTRY_CUSTOMERS_VAT_ID', 'BTW-IdNr.:');
define('TEXT_VAT_FALSE','<font color="#ff0000">Gecontroleerd/Onwaar!</font>');
define('TEXT_VAT_TRUE','<font color="#ff0000">Gecontroleerd/OK!</font>');
define('TEXT_VAT_UNKNOWN_COUNTRY','<font color="#ff0000">Niet Gecontroleerd/Onbekend Land!</font>');
define('TEXT_VAT_UNKNOWN_ALGORITHM','<font color="#ff0000">Niet Gecontroleerd/Geen controle mogelijk!</font>');
define('TEXT_VAT_SERVICE_UNAVAILABLE','<span class="messageStackError">Niet gecontroleerd/De SOAP service is niet beschikbaar, probeer het later nog eens!</span>');
define('TEXT_VAT_MS_UNAVAILABLE','<span class="messageStackError">Niet gecontroleerd/De dienst van de lidstaat is niet beschikbaar, probeer het later nog eens of met een andere lidstaat!</span>');
define('TEXT_VAT_TIMEOUT','<span class="messageStackError">Niet gecontroleerd/De dienst van de lidstaat kon niet op tijd worden bereikt, probeer het later nog eens of met een andere lidstaat!</span>');
define('TEXT_VAT_SERVER_BUSY','<span class="messageStackError">Niet gecontroleerd/De service kan uw aanvraag niet verwerken. Probeer het later nog eens!</span>');
define('TEXT_VAT_NO_PHP5_SOAP_SUPPORT','<span class="messageStackError">Niet gecontroleerd/Uw systeem mist PHP5 SOAP-ondersteuning!</span>');
define('TEXT_VAT_CONNECTION_NOT_POSSIBLE','<span class="messageStackError">ERROR: Verbinding met webservice niet mogelijk (SOAP-ERROR)!</span>');

define('ERROR_GIF_MERGE','Geen GDlib Gif Support, samenvoeging mislukt');
define('ERROR_GIF_UPLOAD','Geen GDlib Gif Support, geen upload van GIF afbeeldingen mogelijk');

define('TEXT_REFERER','Referer: ');

// BOF - Tomcraft - 2009-06-17 Google Sitemap
define('BOX_GOOGLE_SITEMAP', 'Google Sitemap');
// EOF - Tomcraft - 2009-06-17 Google Sitemap

// BOF - Tomcraft - 2009-10-03 - Paypal Express Modul
define('BOX_PAYPAL','PayPal');
// EOF - Tomcraft - 2009-10-03 - Paypal Express Modul

// BOF - Dokuman - 2009-10-02 - added moneybookers payment module version 2.4
define('_PAYMENT_MONEYBOOKERS_EMAILID_TITLE','Moneybookers E-Mail Adres');
define('_PAYMENT_MONEYBOOKERS_EMAILID_DESC','E-Mail Adres waarmee u bij Moneybookers.com geregistreert staat.<br />Indien u nog niet over een account beschikt, kunt u zich gratis <b>aanmelden bij</b> <a href="https://www.moneybookers.com/app/register.pl" target="_blank"><b>Moneybookers</b></a>');
define('_PAYMENT_MONEYBOOKERS_MERCHANTID_TITLE','Moneybookers H&auml;ndler ID');
define('_PAYMENT_MONEYBOOKERS_MERCHANTID_DESC','Ihre Moneybookers.com Merchant ID');
define('_PAYMENT_MONEYBOOKERS_PWD_TITLE','Moneybookers Geheimcode');
define('_PAYMENT_MONEYBOOKERS_PWD_DESC','De geheimcode staat in uw Moneybookers profiel (dit is niet uw wachtwoord). Dit dienen alleen kleine letters en nummers te zijn.<br />Om verwerking te activeren bij Moneybookers: Stuur een email met uw Moneybookers email adres en webshop domeinnaam<br /> Aan: <a href="mailto:ecommerce@moneybookers.com?subject=XTCOMMERCE: Activation of Moneybookers Quick Checkout">ecommerce@moneybookers.com</a>');
define('_PAYMENT_MONEYBOOKERS_TMP_STATUS_ID_TITLE','Bestelstatus - tijdelijke order');
define('_PAYMENT_MONEYBOOKERS_TMP_STATUS_ID_DESC',' Zodra de klant in de Shop op "bestelling bevestigen" wordt door xt:Modified een "tijdelijke bestelling" aangemaakt.Als er problemen optreden vindt u een bestelling met deze status aangemaakt terug.');
define('_PAYMENT_MONEYBOOKERS_PROCESSED_STATUS_ID_TITLE','Bestelstatus - Betaling OK');
define('_PAYMENT_MONEYBOOKERS_PROCESSED_STATUS_ID_DESC','Verschijnt als betaling van Moneybookers bevestigd word.');
define('_PAYMENT_MONEYBOOKERS_PENDING_STATUS_ID_TITLE','Bestelstatus - Betaling in wachtrij');
define('_PAYMENT_MONEYBOOKERS_PENDING_STATUS_ID_DESC','Als de klant onvoldoende saldo op zijn Moneybookers account heeft wordt de betaling uitgesteld in afwachting van een aanvulling van dit tekort.');
define('_PAYMENT_MONEYBOOKERS_CANCELED_STATUS_ID_TITLE','Bestelstatus - Betaling geweigerd');
define('_PAYMENT_MONEYBOOKERS_CANCELED_STATUS_ID_DESC','Verschijnt als b.v.een (credit card) wordt geweigerd');
define('MB_ERROR_NO_MERCHANT','Aan dit e-mailadres is geen Skrill-account gekoppeld.');
define('MB_MERCHANT_OK','Skrill account OK, merchant ID %s ontvangen en opgeslagen.');
define('MB_INFO','<img src="../images/icons/moneybookers/MBbanner.jpg"><br /><br />U kunt creditcards, debetnota\'s, online bankoverschrijvingen, Giropay en andere grote lokale betalingen accepteren na één enkele activering. U heeft niet het gedoe van contracten met elke betalingsverwerker nodig als u met Skrill gaat. Alles wordt gedaan met <a href="https://account.skrill.com/signup/page1" target="_blank"><b>gratis Skrill account</b></a>. Extra betalingsopties zijn gratis en er zijn <b>geen maandelijkse kosten of activeringskosten</b>.<br /><br /><b>- meer omzet door het accepteren van alle grote betalingen<br />- minder kosten en moeite - slechts één contract<br />- eenvoudige verwerking voor uw klant - directe betaling zonder dat u een extra account hoeft aan te maken<br />- een klik op activering en integratie<br />- goed <a href="https://www. skrill.com/en/fees/" target="_blank"><b>voorwaarden</b></a><br />- onmiddellijke melding van betaling en bewijs van klantgegevens<br />- geen extra kosten, zelfs niet in het buitenland<br />- 11 mio. klanten wereldwijd');
// EOF - Dokuman - 2009-10-02 - added moneybookers payment module version 2.4

// BOF - Tomcraft - 2009-11-02 - set global customers-group-permissions
define('BOX_CUSTOMERS_GROUP','CG-authorizations');
// EOF - Tomcraft - 2009-11-02 - set global customers-group-permissions

// BOF - Tomcraft - 2009-11-02 - New admin top menu
define('TEXT_ADMIN_START', 'Startpagina');
define('BOX_HEADING_CONFIGURATION2','Extra Configuratie');
// EOF - Tomcraft - 2009-11-02 - New admin top menu

//BOF - web28 - 2010-04-10 - ADMIN SEARCH BAR
define('ASB_QUICK_SEARCH_CUSTOMER','Klant: ');
define('ASB_QUICK_SEARCH_ORDER','Zoekopdrachten...');
define('ASB_QUICK_SEARCH_ORDER_ID','Bestelnummer: ');
define('ASB_QUICK_SEARCH_ARTICLE','Artikel: ');
define('ASB_QUICK_SEARCH_EMAIL', 'E-Mail Adres: ');
define('ASB_QUICK_SEARCH_ARTICLE_ID','Zoeken naar producten/categorie&euml;n ID...');
//EOF - web28 - 2010-04-10 - ADMIN SEARCH BAR

//BOF - web28 - 2010.05.30 - accounting - set all checkboxes , countries - set all flags
define('BUTTON_SET','Alles activeren');
define('BUTTON_UNSET','Alles deactiveren');
//EOF - web28 - 2010.05.30 - accounting - set all checkboxes 

//BOF - DokuMan - 2010-08-12 - added possibility to reset admin statistics
define('TEXT_ROWS','Rij');
define('TABLE_HEADING_RESET','Terugzetten van de statistieken');
//EOF - DokuMan - 2010-08-12 - added possibility to reset admin statistics

//BOF - web28 - 2010-11-13 - add BUTTON_CLOSE_WINDOW
define('BUTTON_CLOSE_WINDOW' , 'Venster sluiten');
//EOF - web28 - 2010-11-13 - add BUTTON_CLOSE_WINDOW

//BOF - hendrik - 2011-05-14 - independent invoice number and date
define('ENTRY_INVOICE_NUMBER',  'Factuurnummer:'); 
define('ENTRY_INVOICE_DATE',    'Factuurdatum:'); 
//EOF - hendrik - 2011-05-14 - independent invoice number and date 

//BOF - web28 - 2010-07-06 - added missing error text
define('ENTRY_VAT_ERROR', '&nbsp;<span class="errorText">BUITEN BEDRIJFSLANG Btw-reg.</span>');
//EOF - web28 - 2010-07-06 - added missing error text

define ('CONFIG_INT_VALUE_ERROR', '"% s" ERROR: Voer de getallen in, alleen de invoer werd genegeerd % s');
define ('CONFIG_MAX_VALUE_WARNING', '"% s" WAARSCHUWING:% s invoer werd genegeerd [maximum:% s].');
define ('CONFIG_MIN_VALUE_WARNING', '"% s" WAARSCHUWING:% s invoer werd genegeerd [Minimum:% s].');

define ('WHOS_ONLINE_TIME_LAST_CLICK_INFO', 'Weergaveperiode in seconden:% s Na deze tijd worden de gegevens gewist.');

define('TEXT_GLOBAL_PRODUCTS_MODEL', 'Producten Model');

define ('TEXT_INFO_MODULE_RESTORE', 'Wilt u de opgeslagen instellingen herstellen? <br /><br /><b>WARNING</b>: Hiermee worden alle huidige instellingen overschreven!');
define ('TEXT_INFO_MODULE_REMOVE', 'Wilt u de module verwijderen? <br /><br /><b>WARNING</b>: Alle module-instellingen worden ook verwijderd!');
define ('TEXT_INFO_MODULE_BACKUP', 'Wilt u een back-up maken van de module-instellingen?');
define ('MODULE_BACKUP_CONFIRM', 'De instellingen van de module werden met succes gebackupt!');
define ('MODULE_RESTORE_CONFIRM', 'De instellingen van de module werden met succes hersteld!');
define ('MODULE_UPDATE_CONFIRM', 'De module-instellingen werden met succes ge&uuml;pdatet!');

/* magnalister v1.0.0 */
define('BOX_HEADING_MAGNALISTER', 'magnalister');
define('BOX_MAGNALISTER', 'magnalister Admin');
/* END magnalister */

define('CHARS_LEFT', 'linkse karakters');
define('CHARS_MAX', 'van max.');

define('DISPLAY_PER_PAGE', 'Weergave per pagina: ');

define('SPECIALS_DATE_START_TT', 'Aanbiedingen beginnen bij 00:00:00');
define('SPECIALS_DATE_END_TT', 'Aanbiedingen eindigen om middernacht (23:59:59)');

define('BOX_PARCEL_CARRIERS', 'Pakketdragers');
define('TEXT_DISPLAY_NUMBER_OF_CARRIERS', 'Weergave van <b>%d</b> tot <b>%d</b> (van <b>%d</b> dragers)');

define('RSS_FEED_TITLE', 'Laatste informatie van gewijzigde eCommerce Shopsoftware Blog');
define('RSS_FEED_DESCRIPTION', 'Laatste informatie van het gewijzigde eCommerce Shopsoftware Support Forum');
define('RSS_FEED_LINK', 'http://www.modified-shop.org/blog');
define('RSS_FEED_ALTERNATIVE', 'Helaas kan het laatste nieuws niet worden weergegeven in de RSS-feed. Bezoek onze Blog op <a href="'.RSS_FEED_LINK.'">www.modified-shop.org/blog</a> om belangrijke informatie voor winkeliers te krijgen over de volgende onderwerpen: <ul><li>Belangrijke updates en oplossingen</li><li>Functie-uitbreidingen</li><li>rechtsgebieden</li><li>Nieuws</li><li>Geroddel</li></ul>');
define('RSS_FEED_NOT_REACHABLE', 'De nieuwsfeed kon lange tijd niet worden ge&uuml;pdatet.<br>Mis geen belangrijk nieuws, aanbiedingen en nog veel meer. Bezoek ons <a target="_blank" href="https://www.modified-shop.org/blog">www.modified-shop.org/blog</a><br>');
define('TEXT_DISPLAY_NUMBER_OF_NEWSFEED', 'Weergave van <b>%d</b> tot <b>%d</b> (van <b>%d</b> Nieuws)');

define('CFG_TXT_YES', 'Ja');
define('CFG_TXT_NO', 'Geen');
define('CFG_TXT_OR', 'of');
define('CFG_TXT_AND', 'en');
define('CFG_TXT_ASC', 'oplopend');
define('CFG_TXT_DESC', 'aflopend');
define('CFG_TXT_PRODUCTS_NAME', 'Productnaam');
define('CFG_TXT_PRODUCTS_MODEL', 'Productmodel');
define('CFG_TXT_DATE_EXPECTED', 'Verwachte datum');
define('CFG_TXT_ACCOUNT', 'Rekening');
define('CFG_TXT_GUEST', 'Gast');
define('CFG_TXT_BOTH', 'beide');
define('CFG_TXT_NONE', 'geen');
define('CFG_TXT_ADMIN', 'admin');
define('CFG_TXT_ALL', 'alle');
define('CFG_TXT_WEIGHT', 'Gewicht');
define('CFG_TXT_PRICE', 'Prijs');
define('CFG_TXT_ITEM', 'Item');
define('CFG_TXT_WHOS_ONLINE', 'Online');
define('CFG_TXT_ORDERS', 'Bestellingen');
define('CFG_TXT_CUSTOMERS', 'Klanten');
define('CFG_TXT_SALES_REPORT', 'Statistieken');
define('CFG_TXT_BLOG', 'Blog');

define('CSRF_TOKEN_MANIPULATION', 'CSRFToken manipulatie (Vanwege beveiligingsaspecten is het niet meer toegestaan om in het admin-gedeelte in verschillende browsertabbladen te werken).');
define('CSRF_TOKEN_NOT_DEFINED', 'CSRFToken niet gedefinieerd (Vanwege beveiligingsaspecten is het niet meer toegestaan om in het admin-gedeelte in verschillende browsertabbladen te werken).');

define('TEXT_ACCOUNTING_INFO','De hoofdadministratie [1] kan niet van de toegangsrechten worden beroofd.');

define('JAVASCRIPT_DISABLED_INFO', 'JavaScript lijkt te zijn uitgeschakeld in uw browser. Schakel JavaScript in om alle functies van deze site en alle inhoud van de site te kunnen gebruiken.');

define('BOX_MODULE_TYPE', 'Klasse-uitbreidingsmodules');

define('MULTIPLE_INSTALLATION', '<span style="color:red">[Meervoudige installatie: %s]</span>');

define('FILEUPLOAD_INPUT_TXT', 'Geen bestand');
define('FILEUPLOAD_BTN_TXT', 'Zoeken op');

define('CHECK_LABEL_PRICE', 'Prijs controleren');

define('TEXT_PAYPAL_TAB_CONFIG', 'Paypal Configuratie');
define('TEXT_PAYPAL_TAB_PROFILE', 'PayPal-profiel');
define('TEXT_PAYPAL_TAB_WEBHOOK', 'PayPal Webhook');
define('TEXT_PAYPAL_TAB_MODULE', 'PayPal Producten');
define('TEXT_PAYPAL_TAB_INFO', 'PayPal-informatie');

define('TEXT_DEFAULT_SORT_ORDER_TITLE', 'Sorteervolgorde');
define('TEXT_DEFAULT_SORT_ORDER_DESC', 'Volgorde van de verwerking. Kleinste nummer wordt als eerste uitgevoerd.');
define('TEXT_DEFAULT_STATUS_TITLE', 'Inschakelmodule?');
define('TEXT_DEFAULT_STATUS_DESC', 'Status van de modules');

define('TEXT_HOUR', 'uur');
define('TEXT_HOURS', 'uren');

define('DELETE_LOGS_SUCCESSFUL', 'Logbestanden succesvol verwijderd.');

define('BOX_BLACKLIST_LOGS', 'Zwarte lijst Logboeken');

define('CONTINUE_WITHOUT_SAVE', 'Onopgeslagen veranderingen zullen worden afgewezen.');

define('TEXT_SORT_ASC','oplopend');
define('TEXT_SORT_DESC','aflopend');

define('MSRP','MSRP');
define('YOUR_PRICE','uw prijs ');
define('UNIT_PRICE','eenheidsprijs ');
define('ONLY',' Nu alleen nog ');
define('FROM','van ');
define('YOU_SAVE','je bespaart ');
define('INSTEAD','Onze vorige prijs ');
?>