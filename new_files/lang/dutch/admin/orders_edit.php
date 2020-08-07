<?php
/* --------------------------------------------------------------
   $Id: orders_edit.php,v 1.0 

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(orders.php,v 1.27 2003/02/16); www.oscommerce.com 
   (c) 2003	 nextcommerce (orders.php,v 1.7 2003/08/14); www.nextcommerce.org
   (c) 2006 XT-Commerce (orders_edit.php)

   Released under the GNU General Public License 
   --------------------------------------------------------------*/

// Allgemeine Texte
define('TABLE_HEADING', 'Bestelling Bewerken');
define('TABLE_HEADING_ORDER', 'Bestelling Nr:&nbsp;');
define('TEXT_SAVE_ORDER', 'Bestelling bewerken beeindigen en opnieuw berekenen.');

define('TEXT_EDIT_ADDRESS', 'Adres bewerken.');
define('TEXT_EDIT_PRODUCTS', 'Artikelen bewerken.');
define('TEXT_EDIT_OTHER', 'Verzendinformatie bewerken.');
define('TEXT_EDIT_GIFT', 'Toevoegen of bewerken van Tegoedbonnen of Korting');
define('TEXT_EDIT_ADDRESS_SUCCESS', 'Adres opgeslagen.');

define('IMAGE_EDIT_ADDRESS', 'Adressen bewerken');
define('IMAGE_EDIT_PRODUCTS', 'Artikelen bewerken');
define('IMAGE_EDIT_OTHER', 'Verzendkosten, Betaling, Betaalvoorwaarden enz... bewerken');

// Adressaenderung
define('TEXT_INVOICE_ADDRESS', 'Klanten adres');
define('TEXT_SHIPPING_ADDRESS', 'Verzendadres');
define('TEXT_BILLING_ADDRESS', 'Factuuradres');

define('TEXT_COMPANY', 'Firma:');
define('TEXT_NAME', 'Naam:');
define('TEXT_STREET', 'Straat');
define('TEXT_ZIP', 'Postcode:');
define('TEXT_CITY', 'Woonplaats:');
define('TEXT_COUNTRY', 'Land:');
define('TEXT_CUSTOMER_GROUP', 'Klantengroep van de bestellling');
define('TEXT_CUSTOMER_EMAIL', 'E-Mail:');
define('TEXT_CUSTOMER_TELEPHONE', 'Telefoon:');
define('TEXT_CUSTOMER_UST', 'BTW Reg No.:');
define('TEXT_CUSTOMER_CID', 'Klantnummer:');
define('TEXT_ORDERS_ADDRESS_EDIT_INFO', 'Houd er rekening mee dat de hier ingevoerde gegevens alleen in de bestelling worden gewijzigd en niet in het klantenaccount!');

// Artikelbearbeitung

define('TEXT_SMALL_NETTO', '(Netto)');
define('TEXT_PRODUCT_ID', 'pID:');
define('TEXT_PRODUCTS_MODEL', 'Art.Nr:');
define('TEXT_QUANTITY', 'Aantal:');
define('TEXT_PRODUCT', 'Artikel:');
define('TEXT_TAX', 'BTW.:');
define('TEXT_PRICE', 'Prijs:');
define('TEXT_FINAL', 'Totaal:');
define('TEXT_PRODUCT_SEARCH', 'Zoek Artikelen:');

define('TEXT_PRODUCT_OPTION', 'Artikelopties:');
define('TEXT_PRODUCT_OPTION_VALUE', 'Optie waarde:');
define('TEXT_PRICE_PREFIX', 'Price Prefix:');
define('TEXT_INS', 'Toevoegen:');
define('TEXT_COD_COSTS', 'Bezorgkosten');
define('TEXT_VALUE', 'Prijs');
define('TEXT_DESC', 'invoegen');

// Sonstiges

define('TEXT_PAYMENT', 'Betaling:');
define('TEXT_SHIPPING', 'Verzending:');
define('TEXT_LANGUAGE', 'Taal:');
define('TEXT_CURRENCIES', 'Valuta:');
define('TEXT_ORDER_TOTAL', 'Totaal:');
define('TEXT_SAVE', 'Opslaan');
define('TEXT_ACTUAL', 'daadwerkelijk: ');
define('TEXT_NEW', 'nieuw: ');

define('TEXT_ORDERS_EDIT_INFO', '<b>Ingrijpende opmerkingen:</b><br />
Selecteer de juiste klantengroep in de adres-/klantgegevens.<br />
Als de klantgroep verandert, moeten alle regelnummers van de factuur opnieuw worden opgeslagen! <br />
Verzendkosten moeten handmatig worden gewijzigd! <br />
Afhankelijk van de klantengroep zijn de verzendkosten bruto of netto in te voeren! <br />
');

define('TEXT_CUSTOMER_GROUP_INFO', ' Als de klantengroep verandert, moeten alle regelnummers van de factuur opnieuw worden opgeslagen!');

define('TEXT_ORDER_TITLE', 'Titel:');
define('TEXT_ORDER_VALUE', 'Waarde:');
define('ERROR_INPUT_TITLE', 'Geen vermelding voor titel');
define('ERROR_INPUT_EMPTY', 'Geen vermelding voor titel en waarde');
define('ERROR_INPUT_SHIPPING_TITLE', 'Er is nog geen verzendmodule geselecteerd!');

// note for graduated prices
define('TEXT_ORDERS_PRODUCT_EDIT_INFO', '<b>Aanwijzing:</b> Bij staffelprijzen moet de eenheidsprijs handmatig worden aangepast!');

define('TEXT_FIRSTNAME', 'Voornaam:');
define('TEXT_LASTNAME', 'Achternaam:');

define('TEXT_GENDER', 'Aanhef:'); 
define('TEXT_MR', 'De heer'); 
define('TEXT_MRS', 'Mevrouw'); 

define('TEXT_SAVE_CUSTOMERS_DATA', 'Bewaar klantgegevens');

define('TEXT_PRODUCTS_SEARCH_INFO', ' Artikelnaam of artikelnummer of GTIN/EAN');
define('TEXT_PRODUCTS_STATUS', 'Status:');
define('TEXT_PRODUCTS_IMAGE', 'Artikelbeeld:');
define('TEXT_PRODUCTS_QTY', 'Inventarisatie:');
define('TEXT_PRODUCTS_EAN', 'GTIN/EAN:');
define('TEXT_PRODUCTS_TAX_RATE', 'Belastingtarief:');
define('TEXT_PRODUCTS_DATE_AVAILABLE', 'Datum van publicatie:');
define('TEXT_IMAGE_NONEXISTENT', '---');
?>