<?php
/* --------------------------------------------------------------
   $Id: start.php 12647 2020-03-17 19:01:39Z Tomcraft $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   --------------------------------------------------------------
   based on:
   (c) 2003 nextcommerce (start.php,v 1.1 2003/08/19); www.nextcommerce.org
   (c) 2006 xt:Commerce (start.php 890 2005-04-27); www.xt-commerce.com

   Released under the GNU General Public License
   --------------------------------------------------------------*/

  define('ATTENTION_TITLE','! WAARSCHUWING !');

// text for Warnings:
if (!defined('APS_INSTALL')) { //DokuMan - use alternative text for TEXT_FILE_WARNING when using APS package installation
  define('TEXT_FILE_WARNING_WRITABLE','<b>WAARSCHUWING:</b><br />De volgende bestanden zijn beschrijfbaar door de server. Wijzig de rechten van dit bestand om veiligheidsredenen. <b>(444)</b> in unix, <b>(read-only)</b> in Win32.');
} else {
  define('TEXT_FILE_WARNING_WRITABLE','<b>WAARSCHUWING:</b><br />De volgende bestanden zijn beschrijfbaar door de server. Wijzig de rechten van dit bestand om veiligheidsredenen.<b>(444)</b> in unix, <b>(read-only)</b> in Win32.<br />Als de installatie is uitgevoerd door een softwarepakket van een provider, moeten de toegangsrechten mogelijk anders worden aangepast (HostEurope: <b>CHMOD 400</b> of <b>CHMOD 440</b>).');
}
define('TEXT_FILE_WARNING','<b>WAARSCHUWING:</b><br />De volgende bestanden moeten door de server schrijfbaar zijn. Wijzig de rechten van deze bestanden. <b>(777)</b> in unix, <b>(read-only)</b> in Win32.');
  define('TEXT_FOLDER_WARNING','<b>WAARSCHUWING:</b><br />Folgende Verzeichnisse m&uuml;ssen vom Server beschreibbar sein. Bitte &auml;ndern Sie die Zugriffsrechte (Permissions) dieser Verzeichnisse. <b>(777)</b> in unix, <b>(read-write)</b> in Win32.');
  define('REPORT_GENERATED_FOR','Rapport voor:');
  define('REPORT_GENERATED_ON','Samengesteld op:');
  define('FIRST_VISIT_ON','Eerste Bezoek:');
  define('HEADING_QUICK_STATS','Korte Statistieken');
  define('VISITS_TODAY','Bezoeken Vandaag:');
  define('UNIQUE_TODAY','Unieke Bezoekers:');
  define('DAILY_AVERAGE','Dagelijks Gemiddelde:');
  define('TOTAL_VISITS','Totaal aantal Bezoekers:');
  define('TOTAL_UNIQUE','Totaal aantal Unieke Bezoekers:');
  define('TOP_REFFERER','Top Refferer:');
  define('TOP_ENGINE','Top Zoekmachine:');
  define('DAY_SUMMARY','30 Overzicht per Dag:');
  define('VERY_LAST_VISITORS','Laatste 10 Bezoekers:');
  define('TODAY_VISITORS','Bezoekers vandaag:');
  define('LAST_VISITORS','Laatste 100 Bezoekers:');
  define('ALL_LAST_VISITORS','Alle Bezoekers:');
  define('DATE_TIME','Datum / Tijd:');
  define('IP_ADRESS','IP Adres:');
  define('OPERATING_SYSTEM','Besturingssysteem:');
  define('REFFERING_HOST','Referring Host:');
  define('ENTRY_PAGE','Startpagina:');
  define('HOURLY_TRAFFIC_SUMMARY','Samenvatting Uurlijkse Bezoeken');
  define('WEB_BROWSER_SUMMARY','Web Browser Overzicht');
  define('OPERATING_SYSTEM_SUMMARY','Besturingssysteem Overzicht');
  define('TOP_REFERRERS','Top 10 Referrers');
  define('TOP_HOSTS','Top Ten Hosts');
  define('LIST_ALL','Alles tonen');    
  define('SEARCH_ENGINE_SUMMARY','Overzicht Zoekmachines');
  define('SEARCH_ENGINE_SUMMARY_TEXT',' ( percentage is gebaseerd op het totaal aantal bezoekers via Zoekmachines. )');
  define('SEARCH_QUERY_SUMMARY','Overzicht Zoekopdracht');
  define('SEARCH_QUERY_SUMMARY_TEXT',' ) ( percentageage is gebaseerd op het totaal aantal zoekstrings die gelogd zijn. )');
  define('REFERRING_URL','Refferrer Url');
  define('HITS','Hits');
  define('PERCENTAGE','Percentage');
  define('HOST','Host');

// NEU HINZUGEFUEGT 04.12.2008 - Neue Startseite im Admin BOF

// BOF - vr 2010-04-01 -  Added missing definitions, see below
// define('HEADING_TITLE', 'Bestellingen');
// EOF - vr 2010-04-01 -  Added missing definitions
	define('HEADING_TITLE_SEARCH', 'Bestel-Nr.:');
	define('HEADING_TITLE_STATUS', 'Status:');
	define('TABLE_HEADING_AFTERBUY', 'Afterbuy'); //Dokuman - 2009-05-27 - added missing definition
	define('TABLE_HEADING_CUSTOMERS', 'Klanten');
	define('TABLE_HEADING_ORDER_TOTAL', 'Totaal');
	define('TABLE_HEADING_DATE_PURCHASED', 'Besteldatum');
	define('TABLE_HEADING_STATUS', 'Status');
	define('TABLE_HEADING_ACTION', 'Actie');
	define('TABLE_HEADING_QUANTITY', 'Aantal');
	define('TABLE_HEADING_PRODUCTS_MODEL', 'Artikel-Nr.');
	define('TABLE_HEADING_PRODUCTS', 'Artikel');
	define('TABLE_HEADING_TAX', 'BTW');
	define('TABLE_HEADING_TOTAL', 'Totaalbedrag');
	define('TABLE_HEADING_STATUS', 'Status');
	define('TABLE_HEADING_DATE_ADDED', 'toegevoegd op:');
	define('ENTRY_CUSTOMER', 'Klant:');
	define('TEXT_DATE_ORDER_CREATED', 'Besteldatum:');
	define('TEXT_INFO_PAYMENT_METHOD', 'Betaalwijze:');
	define('TEXT_VALIDATING','Niet gevalideerd');
	define('TEXT_ALL_ORDERS', 'Alle Bestellingen');
	define('TEXT_NO_ORDER_HISTORY', 'Geen bestel historie beschikbaar');
	define('TEXT_DATE_ORDER_LAST_MODIFIED','Laatste wijziging');

define('TEXT_DATE_ORDER_LAST_MODIFIED','Laatste wijziging: ');

// BOF - Tomcraft - 2009-11-25 - Added missing definitions for /admin/start.php/
define('TOTAL_CUSTOMERS','Klanten totaal');
define('TOTAL_SUBSCRIBERS','Nieuwsbrief Inschrijvingen');
define('TOTAL_PRODUCTS_ACTIVE','Actieve Artikelen');
define('TOTAL_PRODUCTS_INACTIVE','Inactieve Artikelen');
define('TOTAL_PRODUCTS','Artikelen totaal');
define('TOTAL_SPECIALS','Speciale aanbiedingen');
// EOF - Tomcraft - 2009-11-25 - Added missing definitions for /admin/start.php/
// BOF - Tomcraft - 2009-11-30 - Added missing definitions for /admin/start.php/
define('UNASSIGNED', 'Niet toegewezen');
define('TURNOVER_TODAY', 'Omzet vandaag');
define('TURNOVER_YESTERDAY', 'Omzet gisteren');
define('TURNOVER_THIS_MONTH', 'Huidige maand');
define('TURNOVER_LAST_MONTH', 'Afgelopen Maand (alle)');
define('TURNOVER_LAST_MONTH_PAID', 'Afgelopen Maand (betaald)');
define('TOTAL_TURNOVER', 'Omzet Totaal');
// EOF - Tomcraft - 2009-11-30 - Added missing definitions for /admin/start.php/

// BOF - vr 2010-04-01 -  Added missing definitions
// main heading
define('HEADING_TITLE', 'Welkom bij de Admin');
// users online
define('TABLE_CAPTION_USERS_ONLINE', 'Users Online');
define('TABLE_CAPTION_USERS_ONLINE_HINT', '***Klik op gebruikersernaam voor meer info***');
define('TABLE_HEADING_USERS_ONLINE_SINCE', 'Online sinds');
define('TABLE_HEADING_USERS_ONLINE_NAME', 'Naam');
define('TABLE_HEADING_USERS_ONLINE_LAST_CLICK', 'Laatste klik');
define('TABLE_HEADING_USERS_ONLINE_INFO', 'Info');
define('TABLE_CELL_USERS_ONLINE_INFO', 'meer...');
// new customers
define('TABLE_CAPTION_NEW_CUSTOMERS', 'Nieuwe klanten');
define('TABLE_CAPTION_NEW_CUSTOMERS_COMMENT', '(laatste 15)');
define('TABLE_HEADING_NEW_CUSTOMERS_LASTNAME', 'Achternaam');
define('TABLE_HEADING_NEW_CUSTOMERS_FIRSTNAME', 'Voornaam');
define('TABLE_HEADING_NEW_CUSTOMERS_REGISTERED', 'geregistreerd op');
define('TABLE_HEADING_NEW_CUSTOMERS_EDIT', 'bewerken');
define('TABLE_HEADING_NEW_CUSTOMERS_ORDERS', 'Bestellingen');
define('TABLE_CELL_NEW_CUSTOMERS_EDIT', 'bewerken...');
define('TABLE_CELL_NEW_CUSTOMERS_DELETE', 'verwijder...');
define('TABLE_CELL_NEW_CUSTOMERS_ORDERS', 'tonen...');
// new orders
define('TABLE_CAPTION_NEW_ORDERS', 'Nieuwe Bestellingen');
define('TABLE_CAPTION_NEW_ORDERS_COMMENT', '(laatste 20)');
define('TABLE_HEADING_NEW_ORDERS_ORDER_NUMBER', 'Bestelnummer');
define('TABLE_HEADING_NEW_ORDERS_ORDER_DATE', 'Besteldatum');
define('TABLE_HEADING_NEW_ORDERS_CUSTOMERS_NAME', 'Klantnaam');
define('TABLE_HEADING_NEW_ORDERS_EDIT', 'bewerken');
define('TABLE_HEADING_NEW_ORDERS_DELETE', 'verwijderen');
define('TABLE_CELL_NEW_CUSTOMERS_EDIT', 'bewerken...');
define('TABLE_CELL_NEW_CUSTOMERS_DELETE', 'verwijderen...');
// newsfeed
define('TABLE_CAPTION_NEWSFEED', 'Bezoek de');
// birthdays
define('TABLE_CAPTION_BIRTHDAYS', 'Verjaardagskalender');
define('TABLE_CELL_BIRTHDAYS_TODAY', 'Klanten die vandaag jarig zijn');
define('TABLE_CELL_BIRTHDAYS_THIS_MONTH', 'Klanten die deze maand nog jarig zijn');
// EOF - vr 2010-04-01 -  Added missing definitions
define('HEADING_CAPTION_STATISTIC', 'Statistieken');
// security check

// DB version check:</strong> Ihre DB muss aktualisiert werden, bitte den <a href="'.DIR_WS_CATALOG.'_installer/">Installer</a> ausf&uuml;hren:');
define('ERROR_DB_VERSION_UPDATE_INFO', 'DB moet worden bijgewerkt van Release %s tot %s.');

// EMail check
define('ERROR_EMAIL_CHECK', '<strong>WAARSCHUWING:</strong> De volgende e-mailadressen zijn blijkbaar onjuist:');
define('ERROR_EMAIL_CHECK_INFO', '%s: &lt;%s&gt;');

// security check DB FILE permission
define('WARNING_DB_FILE_PRIVILEGES', '<strong>WAARSCHUWING:</strong> Bestandsrechten worden opgeslagen in de database &rsquo;'.DB_DATABASE.'&lsquo; voor de winkelgebruiker &rsquo;'.DB_SERVER_USERNAME.'&lsquo; geactiveerd!');

// register_globals check
define('WARNING_REGISTER_GLOBALS', '<strong>WAARSCHUWING:</strong> Deze functie is <strong>DEPRECATED</strong> (afgeschreven) sinds PHP 5.3.0 en <strong> VERWIJDERD</strong> sinds PHP 5.4.0. Neem contact op met uw hoster om uit te schakelen &quot; registrer_globals&quot;.');

// domain check
define('WARNING_DOMAIN_INVALID', '<strong>WAARSCHUWING:</strong> Uw winkeldomein kon niet worden gevalideerd (mogelijke oorzaken: Fout in het domeinformaat of de geïnternationaliseerde domeinnaam (IDN) - umlaut-domein)');
?>