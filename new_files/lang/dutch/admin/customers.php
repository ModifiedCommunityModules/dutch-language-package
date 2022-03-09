<?php
/* --------------------------------------------------------------
   $Id: customers.php 11612 2019-03-22 10:56:28Z GTB $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(customers.php,v 1.13 2002/06/15); www.oscommerce.com 
   (c) 2003 nextcommerce (customers.php,v 1.8 2003/08/15); www.nextcommerce.org

   Released under the GNU General Public License 
   --------------------------------------------------------------*/

define('HEADING_TITLE', 'Klanten');
define('HEADING_TITLE_SEARCH', 'Zoeken:');

define('TABLE_HEADING_CUSTOMERSCID','Klantnummer');
define('TABLE_HEADING_FIRSTNAME', 'Voornaam');
define('TABLE_HEADING_LASTNAME', 'Achternaam');
define('TABLE_HEADING_ACCOUNT_CREATED', 'Account aangemaakt op');
define('TABLE_HEADING_ACTION', 'Actie');
define('TABLE_HEADING_EDIT', 'Bewerken');

define('TEXT_DATE_ACCOUNT_CREATED', 'Account aangemaakt op:');
define('TEXT_DATE_ACCOUNT_LAST_MODIFIED', 'Laatst Gewijzigd:');
define('TEXT_INFO_DATE_LAST_LOGON', 'Laatste keer aangemeld:');
define('TEXT_INFO_NUMBER_OF_LOGONS', 'Aantal keren aangemeld:');
define('TEXT_INFO_COUNTRY', 'Land:');
define('TEXT_INFO_NUMBER_OF_REVIEWS', 'Aantal Reviews:');
define('TEXT_DELETE_INTRO', 'Weet u zeker dat u deze klant wilt verwijderen?');
define('TEXT_DELETE_REVIEWS', 'Verwijder %s review(s)');
define('TEXT_INFO_HEADING_DELETE_CUSTOMER', 'Klant verwijderen');
define('TYPE_BELOW', 'Typ hier beneden');
define('PLEASE_SELECT', 'Selecteren');
define('HEADING_TITLE_STATUS','Klantengroep');
define('TEXT_ALL_CUSTOMERS','Alle Groepen');
define('TEXT_INFO_HEADING_STATUS_CUSTOMER','Klantengroep');
define('TABLE_HEADING_NEW_VALUE','Nieuwe Status');
define('TABLE_HEADING_DATE_ADDED','Datum');
define('TEXT_NO_CUSTOMER_HISTORY','--geen aanpasingen tot nu toe--');
define('TABLE_HEADING_GROUPIMAGE','Icon');
define('ENTRY_MEMO','Memo');
define('TEXT_DATE','Datum');
define('TEXT_TITLE','Titel');
define('TEXT_POSTER','Auteur');
define('ENTRY_PASSWORD_CUSTOMER','Wachtwoord:');
define('TEXT_SELECT','--Kies--');
define('TABLE_HEADING_ACCOUNT_TYPE','Account');
define('TEXT_ACCOUNT','Ja');
define('TEXT_GUEST','Nee');
define('NEW_ORDER','Nieuwe Bestelling ?');
define('ENTRY_PAYMENT_UNALLOWED','Niet toegestane betaalmodule:');
define('ENTRY_SHIPPING_UNALLOWED','Niet toegestane verzendmodule:');
define('ENTRY_NEW_PASSWORD','Nieuw wachtwoord:');

// NEU HINZUGEFUEGT 04.12.2008 - UMSATZANZEIGE BEI KUNDEN 03.12.2008
define('TABLE_HEADING_UMSATZ','Omzet');

// BOF - web28 - 2010-05-28 - added  customers_email_address
define('TABLE_HEADING_EMAIL','Email');
// EOF - web28 - 2010-05-28 - added  customers_email_address

define('TEXT_INFO_HEADING_ADRESS_BOOK', 'Adresboek');
define('TEXT_INFO_DELETE', '<b>Dit adresboekje verwijderen?</b>');
define('TEXT_INFO_DELETE_DEFAULT', '<b>De adresboekvermelding kan niet worden verwijderd!</b>'); 

define('TABLE_HEADING_AMOUNT','Krediet');
define('WARNING_CUSTOMER_ALREADY_EXISTS', 'Klantengroep kan niet worden gewijzigd. Dit e-mailadres is al in gebruik voor een klantaccount.');

define('TEXT_INFO_HEADING_STATUS_NEW_ORDER','Nieuwe bestelling');
define('TEXT_INFO_PAYMENT','Betaling:');
define('TEXT_INFO_SHIPPING','Verzending:');
define('TEXT_INFO_NEWSLETTER_AT_REGISTRATION', 'Nieuwsbrief bij inschrijving:');
define('TEXT_INFO_NEWSLETTER_STATUS', 'Nieuwsbrief ingeschreven:');

define('TEXT_ACTIVE_ELEMENT', 'Actief element');
define('TEXT_MARKED_ELEMENTS', 'Gemarkeerde elementen');
define('TEXT_INFO_HEADING_DELETE_ELEMENTS', 'Maak elementen los');
define('TEXT_INFO_HEADING_STATUS_ELEMENTS', 'Elementen klantengroep');
define('TEXT_DELETE_REVIEWS_ELEMENTS', 'Maak beoordelingen los');
?>