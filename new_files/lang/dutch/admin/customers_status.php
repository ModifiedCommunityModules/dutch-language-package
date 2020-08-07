<?php
/* --------------------------------------------------------------
   $Id: customers_status.php 1062 2005-07-21 19:57:29Z gwinger $

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(customers.php,v 1.76 2003/05/04); www.oscommerce.com
   (c) 2003	 nextcommerce (customers_status.php,v 1.12 2003/08/14); www.nextcommerce.org

   Released under the GNU General Public License
   --------------------------------------------------------------*/

define('HEADING_TITLE', 'Klantengroepen');

define('ENTRY_CUSTOMERS_FSK18','Verkoop van FSK18 Artikelen afgrendelen?');
define('ENTRY_CUSTOMERS_FSK18_DISPLAY','Tonen van FSK18 Artikelen?');
define('ENTRY_CUSTOMERS_STATUS_ADD_TAX','BTW in rekening tonen');
define('ENTRY_CUSTOMERS_STATUS_MIN_ORDER','Minimale bestelwaarde:');
define('ENTRY_CUSTOMERS_STATUS_MAX_ORDER','Maximale bestelwaarde:');
define('ENTRY_CUSTOMERS_STATUS_BT_PERMISSION','Per Bankbetaling');
define('ENTRY_CUSTOMERS_STATUS_CC_PERMISSION','Per Creditcard');
define('ENTRY_CUSTOMERS_STATUS_COD_PERMISSION','Betaling bij ontvangst.');
define('ENTRY_CUSTOMERS_STATUS_DISCOUNT_ATTRIBUTES','Korting');
define('ENTRY_CUSTOMERS_STATUS_PAYMENT_UNALLOWED','Geef niet toegestane betaalwijzes op');
define('ENTRY_CUSTOMERS_STATUS_PUBLIC','Openbaar');
define('ENTRY_CUSTOMERS_STATUS_SHIPPING_UNALLOWED','Geef niet toegestane verzendmodules op');
define('ENTRY_CUSTOMERS_STATUS_SHOW_PRICE','Prijs');
define('ENTRY_CUSTOMERS_STATUS_SHOW_PRICE_TAX','Prijs incl. BTW.');
define('ENTRY_CUSTOMERS_STATUS_WRITE_REVIEWS','Klantengroep mag Artikelen reviewen?');
define('ENTRY_CUSTOMERS_STATUS_READ_REVIEWS','Klantengroep mag artikel reviews lezen?');
define('ENTRY_CUSTOMERS_STATUS_REVIEWS_STATUS','Automatisch reviews activeren?');
define('ENTRY_GRADUATED_PRICES','Kortingsprijzen');
define('ENTRY_NO','Nee');
define('ENTRY_OT_XMEMBER', 'Klantenkorting op totale bestelling? :');
define('ENTRY_YES','Ja');

define('ERROR_REMOVE_DEFAULT_CUSTOMER_STATUS', 'Fout: Een standaard klantengroep kan niet verwijderd worden. Maak eerst een andere standaard klantengroep aan en probeer het opnieuw.');
define('ERROR_REMOVE_DEFAULT_CUSTOMERS_STATUS','FOUT! Een standaard klantengroep kan niet verwijderd worden');
define('ERROR_STATUS_USED_IN_CUSTOMERS', 'Error: Deze Klantengroep is momenteel in gebruik.');
define('ERROR_STATUS_USED_IN_HISTORY', 'Error: Deze klantengroep wordt momenteel in het besteloverzicht gebruikt.');

define('TABLE_HEADING_ACTION','Action');
define('TABLE_HEADING_CUSTOMERS_GRADUATED','Kortingsprijzen');
define('TABLE_HEADING_CUSTOMERS_STATUS','Klantengroep');
define('TABLE_HEADING_CUSTOMERS_UNALLOW','niet toegestane Betaalwijzen');
define('TABLE_HEADING_CUSTOMERS_UNALLOW_SHIPPING','niet toegestane Verzendwijzen');
define('TABLE_HEADING_DISCOUNT','Korting');
define('TABLE_HEADING_TAX_PRICE','Prijs / BTW.');

define('TAX_NO','excl.');
define('TAX_YES','incl.');

define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS_STATUS', 'Bestaande Klantengroepen:');

define('TEXT_INFO_CUSTOMERS_FSK18_DISPLAY_INTRO','<strong>FSK18 Artikelen</strong>');
define('TEXT_INFO_CUSTOMERS_FSK18_INTRO','<strong>FSK18 Vergrendeld</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_ADD_TAX_INTRO','<strong>Indien prijzen incl.belasting = op "Nee" instellen</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_MIN_ORDER_INTRO','<strong>Geef een minimum bestelwaarde op of laat dit veld leeg.</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_MAX_ORDER_INTRO','<strong>Geef een maximale bestelwaarde op of laat dit veld leeg.</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_BT_PERMISSION_INTRO', '<strong>Toestaan dat deze klantengroep per Bankbetaling mag afrekenen?</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_CC_PERMISSION_INTRO', '<strong>Toestaan dat deze klantengroep per Creditcard mag afrekenen?</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_COD_PERMISSION_INTRO', '<strong>Toestaan dat deze klantengroep per COD (betaling bij ontvangst) mag afrekenen?</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_DISCOUNT_ATTRIBUTES_INTRO','<strong>Korting op artikel opties</strong><br />(Max. % Korting op ייn enkel Artikel)');
define('TEXT_INFO_CUSTOMERS_STATUS_DISCOUNT_OT_XMEMBER_INTRO','<strong>Korting op de totale bestelling</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_DISCOUNT_PRICE', 'Korting (0 tot 100%):');
define('TEXT_INFO_CUSTOMERS_STATUS_DISCOUNT_PRICE_INTRO', '<strong>Maximale korting tussen 0 en 100% welke wordt gebruikt op elk getoond artikel.</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_GRADUATED_PRICES_INTRO','<strong>Kortingprijzen</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_IMAGE', '<strong>Klantengroepen Afbeelding:</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_NAME','<strong>Groepsnaam</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_PAYMENT_UNALLOWED_INTRO','<strong>Niet toegestane Betaalwijzen</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_PUBLIC_INTRO','<strong>Toon openlijk ?</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_SHIPPING_UNALLOWED_INTRO','<strong>Niet toegestane Verzendwijzes</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_SHOW_PRICE_INTRO','<strong>Prijsaanduiding in de Shop</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_SHOW_PRICE_TAX_INTRO', '<strong>Wilt u de prijzen incl. of excl.belasting tonen?</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_WRITE_REVIEWS_INTRO','<strong>Artikelreviews schrijven</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_READ_REVIEWS_INTRO', '<strong>Artikelreviews lezen</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_REVIEWS_STATUS_INTRO', '<strong>Status van de beoordeling van de producten</strong>');

define('TEXT_INFO_DELETE_INTRO', 'Weet u zeker dat u deze klantengroep wilt verwijderen?');
define('TEXT_INFO_EDIT_INTRO', 'Breng de benodigde wizigingen aan');
define('TEXT_INFO_INSERT_INTRO', 'Maak een nieuwe klantengroep aan met de gewenste instellingen');

define('TEXT_INFO_HEADING_DELETE_CUSTOMERS_STATUS', 'Klantengroep verwijderen');
define('TEXT_INFO_HEADING_EDIT_CUSTOMERS_STATUS','Groep gegevens bewerken');
define('TEXT_INFO_HEADING_NEW_CUSTOMERS_STATUS', 'Nieuwe Klantengroep');

define('TEXT_INFO_CUSTOMERS_STATUS_BASE', '<strong>Basis Klantengroep voor Artikelprijzen</strong>');
define('ENTRY_CUSTOMERS_STATUS_BASE', 'word als basis voor de prijzen van de nieuwe Klantengroep gekozen. Als keuze = Admin worden geen prijzen voor de nieuwe klantengroep aangemaakt.');
define('ENTRY_CUSTOMERS_STATUS_BASE_EDIT', 'Pas de prijzen van de volgende klantengroep toe. Indien selectie = Admin, worden er geen prijzen toegepast op de klantgroep.<br /><span class="col-red"><strong>LET OP:</strong></span> Hierbij overschrijft u alle bestaande klantgroepsprijzen voor de klantgroep!');

define('TEXT_INFO_CUSTOMERS_GROUP_ADOPT_PERMISSION', '<strong>Adopteer de machtigingen van de klantengroep</strong>');
define('ENTRY_CUSTOMERS_GROUP_ADOPT_PERMISSION', 'Adopteer visibiliteitsrechten voor categorie&euml;n, producten en inhoudspagina\'s van de volgende klantengroep:');
define('CUSTOMERS_GROUP_ADOPT_PERMISSIONS', 'Neem geen rechten aan.');

define('TEXT_INFO_CUSTOMERS_STATUS_SHOW_PRICE_TAX_TOTAL', '<b>Toon BTW bij Totaal</b>');
define('ENTRY_CUSTOMERS_STATUS_SHOW_PRICE_TAX_TOTAL', 'Minimum Totaal');

define('TABLE_HEADING_CUSTOMERS_SPECIALS', 'Speciale prijzen');
define('TEXT_INFO_CUSTOMERS_STATUS_SPECIALS_INTRO', '<strong>Speciale prijzen</strong>');
define('ENTRY_CUSTOMERS_STATUS_SPECIALS', 'Groepen toegestaan om speciale prijzen te zien?');

define('CUSTOMERS_GROUP_PUBLIC','publiek');
?>