<?php
/* --------------------------------------------------------------
   $Id: orders.php 12056 2019-07-31 09:33:06Z Tomcraft $   

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce; www.oscommerce.com 
   (c) 2003      nextcommerce; www.nextcommerce.org
   (c) 2006      xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License 
   --------------------------------------------------------------*/
define('TEXT_BANK', 'Bank Collection');
define('TEXT_BANK_OWNER', 'Rekeninghouder:');
define('TEXT_BANK_NUMBER', 'Rekeningnummer:');
define('TEXT_BANK_BLZ', 'Bank Code:');
define('TEXT_BANK_NAME', 'Bank:');
define('TEXT_BANK_BIC', 'BIC:');
define('TEXT_BANK_IBAN', 'IBAN:');
define('TEXT_BANK_FAX', 'Collectieve Authorisatie wordt goedgekeurd per Fax');
define('TEXT_BANK_STATUS', 'Verifeer Status:');
define('TEXT_BANK_PRZ', 'Verificatiemethode:');
define('TEXT_BANK_OWNER_EMAIL', 'E-Mail Adres Houder van de rekening:');

define('TEXT_BANK_ERROR_1', 'Rekeningnummer en Bankcode zijn niet compatibel!<br />Probeer het opnieuw!');
define('TEXT_BANK_ERROR_2', 'Sorry, het is niet mogelijk om dit rekeningnummer te controleren!');
define('TEXT_BANK_ERROR_3', 'Rekeningnummer niet te controleren! ;Wijze van controleren niet ge&iuml;mplementeerd');
define('TEXT_BANK_ERROR_4', 'Rekeningnummer technisch niet te controleren!<br />Probeer het nogmaals!');
define('TEXT_BANK_ERROR_5', 'Bankcode niet gevonden!<br />Probeer het nogmaals.!');
define('TEXT_BANK_ERROR_8', 'Geen passende bankcode of bankcode niet aangegeven!');
define('TEXT_BANK_ERROR_9', 'Geen rekeningnummer aangegeven!');
define('TEXT_BANK_ERRORCODE', 'Foutcode:');

define('HEADING_TITLE', 'Bestellingen');
define('HEADING_TITLE_SEARCH', 'Bestel-Nr.:');
define('HEADING_TITLE_STATUS', 'Status:');

define('TABLE_HEADING_COMMENTS', 'Opmerkingen');
define('TABLE_HEADING_CUSTOMERS', 'Klanten');
define('TABLE_HEADING_ORDER_TOTAL', 'Totaalbedrag');
define('TABLE_HEADING_DATE_PURCHASED', 'Besteldatum');
define('TABLE_HEADING_ACTION', 'Aktie');
define('TABLE_HEADING_QUANTITY', 'Aantal');
define('TABLE_HEADING_PRODUCTS_MODEL', 'Model');
define('TABLE_HEADING_PRODUCTS', 'Artikelen');
define('TABLE_HEADING_TAX', 'BTW.');
define('TABLE_HEADING_TOTAL', 'Totaalbedrag');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_PRICE_EXCLUDING_TAX', 'Prijs (excl.)');
define('TABLE_HEADING_PRICE_INCLUDING_TAX', 'Prijs (incl.)');
define('TABLE_HEADING_TOTAL_EXCLUDING_TAX', 'Totaal (excl.)');
define('TABLE_HEADING_TOTAL_INCLUDING_TAX', 'Totaal');
define('TABLE_HEADING_AFTERBUY','Afterbuy');
define('TABLE_HEADING_CUSTOMER_NOTIFIED', 'Klant gewaarschuwd');
define('TABLE_HEADING_DATE_ADDED', 'Datum toegevoegd');

define('ENTRY_CUSTOMER', 'Klant:');
define('ENTRY_SOLD_TO', 'VERKOCHT AAN:');
define('ENTRY_TELEPHONE', 'Telefoon:');
define('ENTRY_DELIVERY_TO', 'Aflever adres:');
define('ENTRY_SHIP_TO', 'VERZENDEN NAAR:');
define('ENTRY_SHIPPING_ADDRESS', 'Verzendadres:');
define('ENTRY_PICKUP_ADDRESS', 'Afhaaladres:');
define('ENTRY_BILLING_ADDRESS', 'Factuuradres:');
define('ENTRY_PAYMENT_METHOD', 'Betalingsmethode:');
define('ENTRY_SHIPPING_METHOD', 'Verzendmethode:');
define('ENTRY_SUB_TOTAL', 'Sub-totaal:');
define('ENTRY_TAX', 'BTW.:');
define('ENTRY_SHIPPING', 'Verzendkosten:');
define('ENTRY_TOTAL', 'Totaalprijs:');
define('ENTRY_DATE_PURCHASED', 'Besteldatum:');
define('ENTRY_STATUS', 'Status:');
define('ENTRY_DATE_LAST_UPDATED', 'Laatst keer gewijzigd:');
define('ENTRY_NOTIFY_CUSTOMER', 'Klant inlichten:');
define('ENTRY_NOTIFY_COMMENTS', 'Commentaar meesturen:');
define('ENTRY_PRINTABLE', 'Factuur printen');

define('TEXT_INFO_HEADING_DELETE_ORDER', 'Bestelling verwijderen');
define('TEXT_INFO_DELETE_INTRO', 'Weet u zeker dat u deze bestelling wilt verwijderen?');
define('TEXT_INFO_RESTOCK_PRODUCT_QUANTITY', 'Bijvullen hoeveelheid product');
define('TEXT_DATE_ORDER_CREATED', 'Aanmaakdatum:');
define('TEXT_DATE_ORDER_LAST_MODIFIED', 'Laatste aanpassing:');
define('TEXT_INFO_PAYMENT_METHOD', 'Betaalwijze:');
define('TEXT_INFO_SHIPPING_METHOD', 'Verzendmethode:');

define('TEXT_ALL_ORDERS', 'Alle Bestellingen');
define('TEXT_NO_ORDER_HISTORY', 'Geen bestelhistorie voorhanden');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Bestelling Update');
define('EMAIL_TEXT_ORDER_NUMBER', 'Bestel-Nr.:');
define('EMAIL_TEXT_INVOICE_URL', 'Gedetailleerde Factuur:');
define('EMAIL_TEXT_DATE_ORDERED', 'Besteldatum:');
define('EMAIL_TEXT_STATUS_UPDATE', 'De Status van uw Bestelling is bijgewerkt.' . "\n\n" . 'Nieuwe Status: %s' . "\n\n" . 'Bij vragen over uw bestelling kunt u antwoorden op deze E-Mail.' . "\n\n" . 'Met vriendelijke groet' . "\n");
define('EMAIL_TEXT_COMMENTS_UPDATE', 'Opmerkingen over uw bestelling' . "\n\n%s\n\n");

define('ERROR_ORDER_DOES_NOT_EXIST', 'Fout: Bestelling bestaat niet!.');
define('SUCCESS_ORDER_UPDATED', 'Succes: Bestelling werd succesvol bijgewerkt.');
define('WARNING_ORDER_NOT_UPDATED', 'Waarschuwing: Er is niets gewijzigd.Bestelling is niet bijgewerkt.');

define('TABLE_HEADING_DISCOUNT','Korting');
define('ENTRY_CUSTOMERS_GROUP','Klantengroep:');
define('TEXT_VALIDATING','Niet bevestigd');

// BOF - Tomcraft - 2010-04-22 - Added a missing language definition
define('TEXT_PRODUCTS', 'Artikelen');
// EOF - Tomcraft - 2010-04-22 - Added a missing language definition

//BOF - web28 - 2010-03-20 - Send Order by Admin
define('COMMENT_SEND_ORDER_BY_ADMIN' , 'De orderbevestiging wordt verzonden');
define('BUTTON_ORDER_CONFIRMATION', 'Stuur orderbevestiging');
define('SUCCESS_ORDER_SEND', 'Bestelbevestiging succesvol verzonden');
//EOF - web28 - 2010-03-20 - Send Order by Admin

// web28 2010-12-07 add new defines
define('ENTRY_CUSTOMERS_ADDRESS', 'Klanten Adres:');
define('TEXT_ORDER', 'Bestel:');
define('TEXT_ORDER_HISTORY', 'Bestelhistoriek:');
define('TEXT_ORDER_STATUS', 'Bestelstatus:');

define('TABLE_HEADING_ORDERS_ID', 'Bestel ID');
define('TEXT_SHIPPING_TO', 'Verzending naar');

define('TABLE_HEADING_COMMENTS_SENT', 'Commentaar wordt verstuurd');

define('TABLE_HEADING_TRACK_TRACE', 'Track &amp; trace');
define('TABLE_HEADING_CARRIER', 'Verzending');
define('TABLE_HEADING_PARCEL_LINK', 'Zendingsnummer / pakketetiketnummer / ordernummer / zendingsid / volgnummer');

define('TEXT_INFO_HEADING_REVERSE_ORDER', 'Omgekeerde volgorde');
define('TEXT_INFO_REVERSE_INTRO', 'Weet u zeker dat u deze volgorde wilt omkeren?');

define('TABLE_HEADING_SHIPCLOUD', 'Shipcloud:');
define('TABLE_HEADING_PARCEL_ID', 'Pakket ID');
define('TEXT_SHIPCLOUD_STANDARD', 'Standaard');
define('TEXT_SHIPCLOUD_ONE_DAY', 'Expresseer');
define('TEXT_SHIPCLOUD_ONE_DAY_EARLY', 'Express 10:00');
define('TEXT_SHIPCLOUD_RETURNS', 'Retourneer');
define('TEXT_SHIPCLOUD_LETTER', 'Post Brief');
define('TEXT_SHIPCLOUD_BOOKS', 'Postboek');
define('TEXT_SHIPCLOUD_PARCEL_LETTER', 'Postpakketbrief');
define('TEXT_WEIGHT_PLACEHOLDER', 'Gewicht / Kg');
define('TEXT_SHIPCLOUD_INSURANCE_NO', 'hogere verzekering nee');
define('TEXT_SHIPCLOUD_INSURANCE_YES', 'hogere verzekering ja');
define('TEXT_SHIPCLOUD_BULK', 'Bulk');
define('TEXT_SHIPCLOUD_PARCEL', 'Pakket');

define('DOWNLOAD_LABEL', 'Download Label');
define('CREATE_LABEL', 'Cre&euml;er Label');
define('TEXT_DELETE_SHIPMENT_SUCCESS', 'Shipcloud Label verwijderd.');
define('TEXT_LABEL_CREATED', 'Label gemaakt.');
define('TEXT_CARRIER_ERROR', 'Carrier niet geactiveerd in uw Shipcloud account of ongeldige API-sleutel.');
define('TEXT_CARRIER_PLACEHOLDER_1', 'Pakketbeschrijving');
define('TEXT_CARRIER_PLACEHOLDER_2', 'Beschrijving van de zending');

define('TEXT_DOWNLOADS', 'Downloads');
define('TABLE_HEADING_FILENAME', 'Bestandsnaam');
define('TABLE_HEADING_EXPIRES', 'Vervaldatum');
define('TABLE_HEADING_DOWNLOADS', 'Aantal Downloads');
define('TABLE_HEADING_DAYS', 'Aantal dagen');

define('ENTRY_SEND_TRACKING_INFO', 'Verzendingsinformatie:');

define('TEXT_ORDERS_STATUS_FILTER', 'Bestelstatusfilter');

define('TABLE_HEADING_DATE', 'Datum');

define('BUTTON_ORDER_MAIL_STEP', 'Stuur orderpost');
define('COMMENT_SEND_ORDER_MAIL_STEP' , 'Bestelpost wordt verstuurd');
define('SUCCESS_ORDER_MAIL_STEP_SEND', 'Bestelpost succesvol verzonden');

define('BILLPAY_ORDER_UPDATE_HIGH', 'Fout: De nieuwe totale waarde kan niet hoger zijn dan de oude totale waarde in de biljetten.');
?>