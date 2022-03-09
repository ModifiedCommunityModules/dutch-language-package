<?php
/* -----------------------------------------------------------------------------------------
   $Id: configuration.php 12695 2020-04-13 10:31:10Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(configuration.php,v 1.8 2002/01/04); www.oscommerce.com
   (c) 2003 nextcommerce (configuration.php,v 1.16 2003/08/25); www.nextcommerce.org
   (c) 2006 XT-Commerce

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


define('TABLE_HEADING_CONFIGURATION_TITLE', 'Naam');
define('TABLE_HEADING_CONFIGURATION_VALUE', 'Waarde');
define('TABLE_HEADING_ACTION', 'Actie');

define('TEXT_INFO_EDIT_INTRO', 'Voer alle noodzakelijke wijzigingen door');
define('TEXT_INFO_DATE_ADDED', 'Toegevoegd op:');
define('TEXT_INFO_LAST_MODIFIED', 'Laatst gewijzigd:');

// language definitions for config
define('STORE_NAME_TITLE' , 'Naam van de Shop');
define('STORE_NAME_DESC' , 'De Naam van deze Online Shop');
define('STORE_OWNER_TITLE' , 'Eigenaar');
define('STORE_OWNER_DESC' , 'De naam van de shop-eigenaar');
define('STORE_OWNER_EMAIL_ADDRESS_TITLE' , 'E-Mail Adres');
define('STORE_OWNER_EMAIL_ADDRESS_DESC' , 'Het E-Mail Adres van de Shop-Eigenaar');

define('EMAIL_FROM_TITLE' , 'E-Mail van');
define('EMAIL_FROM_DESC' , 'E-Mail Adres, welke bij verzenden (send mail) gebruikt dient te worden.');

define('STORE_COUNTRY_TITLE' , 'Land');
define('STORE_COUNTRY_DESC' , 'Het land waar de shop gevestigd is <br /><br /><b>Opmerking: Regio niet vergeten in te vullen.</b>');
define('STORE_ZONE_TITLE' , 'Regio');
define('STORE_ZONE_DESC' , 'Regio waar shop gevestigd is.');

define('EXPECTED_PRODUCTS_SORT_TITLE' , 'Volgorde van aangekondigde artikelen');
define('EXPECTED_PRODUCTS_SORT_DESC' , 'Dit is de volgorde hoe aangekondigde artikelen getoond worden.');
define('EXPECTED_PRODUCTS_FIELD_TITLE' , 'Sorteerveld verwachte artikelen');
define('EXPECTED_PRODUCTS_FIELD_DESC' , 'Deze kolom wordt gebruikt om aangekondigde artikelen te sorteren.');

define('USE_DEFAULT_LANGUAGE_CURRENCY_TITLE' , 'Schakel om naar Taalspecifieke valuta');
define('USE_DEFAULT_LANGUAGE_CURRENCY_DESC' , 'Automatisch omschakelen naar taalspecifieke valuta als er van taal veranderd wordt.');

define('SEND_EXTRA_ORDER_EMAILS_TO_TITLE' , 'Verstuur extra Bestelling-E-Mails aan:');
define('SEND_EXTRA_ORDER_EMAILS_TO_DESC' , 'Verstuur extra bestelling-E-Mails naar de volgende mail adressen, zoals: Naam1 &lt;E-Mail@adres1&gt;, Naam2 &lt;E-Mail@adres2&gt;');

define('SEARCH_ENGINE_FRIENDLY_URLS_TITLE' , 'Zoekmachine vriendelijke URLs gebruiken?');
// BOF - Dokuman - 2009-11-12 - enhance explanation of SEO-URL procedure
define('SEARCH_ENGINE_FRIENDLY_URLS_DESC' , 'Gebruik zoek-machine vriendelijke URLs voor alle site links.<br /><br /><strong>Om zoek-machine optimized URLs in te schakelen, dient het _.htaccess bestand in de root directory geactiveerd te worden, naam wijzigen in .htaccess! Bovendien moet uw webserver <a href="http://www.modrewrite.com/" target="_blank">mod_rewrite</a> module</strong> ondersteunen! (Vraag uw webhoster als u niet weet hoe u dit kunt checken.)');
// EOF - Dokuman - 2009-11-12 - enhance explanation of SEO-URL procedure

define('DISPLAY_CART_TITLE' , 'Winkelwagen tonen na toevoegen van een artikel?');
define('DISPLAY_CART_DESC' , 'Winkelwagen tonen na toevoegen van een artikel of terug naar het artikel?');

define('ALLOW_GUEST_TO_TELL_A_FRIEND_TITLE' , 'Gasten toestaan To Tell a Friend?');
define('ALLOW_GUEST_TO_TELL_A_FRIEND_DESC' , 'Gasten toestaan to tell a friend over een artikel?');

define('ADVANCED_SEARCH_DEFAULT_OPERATOR_TITLE' , 'Standaard zoek operator');
define('ADVANCED_SEARCH_DEFAULT_OPERATOR_DESC' , 'Standaard zoek operatoren.');

define('STORE_NAME_ADDRESS_TITLE' , 'Winkeladres en Telefoonnummer');
define('STORE_NAME_ADDRESS_DESC' , 'Winkelgegevens welke gebruikt worden om weer te geven en te printen');

define('SHOW_COUNTS_TITLE' , 'Artikelaantal tonen achter de Categorienaam.');
define('SHOW_COUNTS_DESC' , 'Telt recursief het aantal verschillende artikelen ,en geeft deze achter elke categorie weer');

define('DISPLAY_PRICE_WITH_TAX_TITLE' , 'Prijs incl.BTW weergeven');
define('DISPLAY_PRICE_WITH_TAX_DESC' , 'Prijs incl.belasting weergeven (true) of aan het einde toevoegen (false)');

define('DEFAULT_CUSTOMERS_STATUS_ID_ADMIN_TITLE' , 'Klantenstatus van Administratoren');
define('DEFAULT_CUSTOMERS_STATUS_ID_ADMIN_DESC' , 'Kies de standaard klantstatus voor administratoren');
define('DEFAULT_CUSTOMERS_STATUS_ID_GUEST_TITLE' , 'Klantenstatus van gasten');
define('DEFAULT_CUSTOMERS_STATUS_ID_GUEST_DESC' , 'Kies de standaard klantenstatus voor gast accounts');
define('DEFAULT_CUSTOMERS_STATUS_ID_TITLE' , 'Klantenstatus voor nieuwe Klanten');
define('DEFAULT_CUSTOMERS_STATUS_ID_DESC' , 'Kies de standaard klantenstatus voor een nieuwe klant');

define('ALLOW_ADD_TO_CART_TITLE' , 'Toestaan artikelen in winkelwagen te leggen');
define('ALLOW_ADD_TO_CART_DESC' , 'Toestaan klanten om artikelen in het winkelmandje te leggen zelfs als "prijs tonen" uit staat in de groepssetting');
define('ALLOW_DISCOUNT_ON_PRODUCTS_ATTRIBUTES_TITLE' , 'Korting toestaan op artikel opties?');
define('ALLOW_DISCOUNT_ON_PRODUCTS_ATTRIBUTES_DESC' , 'Sta klanten toe om ook korting te krijgen op artikelopties (alleen als hoofdproduct geen "Speciale Aanbieding"is)');
define('CURRENT_TEMPLATE_TITLE' , 'Templateset (Theme)');
define('CURRENT_TEMPLATE_DESC' , 'Kies een Templateset (Theme). Het theme dient zich in de map www.Your-Domain.com/templates/ te bevinden.');

define('ENTRY_FIRST_NAME_MIN_LENGTH_TITLE' , 'Voornaam');
define('ENTRY_FIRST_NAME_MIN_LENGTH_DESC' , 'Minimum lengte van de voornaam');
define('ENTRY_LAST_NAME_MIN_LENGTH_TITLE' , 'Achternaam');
define('ENTRY_LAST_NAME_MIN_LENGTH_DESC' , 'Minimum lengte van de achternaam');
define('ENTRY_DOB_MIN_LENGTH_TITLE' , 'Geboortedatum');
define('ENTRY_DOB_MIN_LENGTH_DESC' , 'Minimum lengte van de geboortedatum');
define('ENTRY_EMAIL_ADDRESS_MIN_LENGTH_TITLE' , 'E-Mail Adres');
define('ENTRY_EMAIL_ADDRESS_MIN_LENGTH_DESC' , 'Minimum lengte van het E-Mailadres');
define('ENTRY_STREET_ADDRESS_MIN_LENGTH_TITLE' , 'Straat');
define('ENTRY_STREET_ADDRESS_MIN_LENGTH_DESC' , 'Minimum lengte van straat adres');
define('ENTRY_COMPANY_MIN_LENGTH_TITLE' , 'Firma');
define('ENTRY_COMPANY_MIN_LENGTH_DESC' , 'Minimum lengte van de Firmanaam');
define('ENTRY_POSTCODE_MIN_LENGTH_TITLE' , 'Postcode');
define('ENTRY_POSTCODE_MIN_LENGTH_DESC' , 'Minimum lengte van de postcode');
define('ENTRY_CITY_MIN_LENGTH_TITLE' , 'Woonplaats');
define('ENTRY_CITY_MIN_LENGTH_DESC' , 'Minimum lengte van de woonplaats');
define('ENTRY_STATE_MIN_LENGTH_TITLE' , 'Regio');
define('ENTRY_STATE_MIN_LENGTH_DESC' , 'Minimum Lengte van de regio');
define('ENTRY_TELEPHONE_MIN_LENGTH_TITLE' , 'Telefoon Nummer');
define('ENTRY_TELEPHONE_MIN_LENGTH_DESC' , 'Minimum Lengte van Telefoonnummer');
define('ENTRY_PASSWORD_MIN_LENGTH_TITLE' , 'Wachtwoord');
define('ENTRY_PASSWORD_MIN_LENGTH_DESC' , 'Minimum Lengte van wachtwoord');

define('REVIEW_TEXT_MIN_LENGTH_TITLE' , 'Reviews');
define('REVIEW_TEXT_MIN_LENGTH_DESC' , 'Minimum Lengte van tekstingave bij revieuws');

define('MIN_DISPLAY_BESTSELLERS_TITLE' , 'Bestsellers');
define('MIN_DISPLAY_BESTSELLERS_DESC' , 'Minimum aantal bestseller, welke getoond zullen worden');
define('MIN_DISPLAY_ALSO_PURCHASED_TITLE' , 'Ook Gekocht');
define('MIN_DISPLAY_ALSO_PURCHASED_DESC' , 'Minimum aantal artikelen welke getoond worden in "Deze klanten bestelden ook" box');

define('MAX_ADDRESS_BOOK_ENTRIES_TITLE' , 'Adresboek Vermeldingen');
define('MAX_ADDRESS_BOOK_ENTRIES_DESC' , 'Maximaal aantal adresboekvermeldingen die een klant mag hebben');
define('MAX_DISPLAY_SEARCH_RESULTS_TITLE' , 'Zoekresultaten');
define('MAX_DISPLAY_SEARCH_RESULTS_DESC' , 'Aantal artikelen die als zoekresultaat getoond zullen worden');
define('MAX_DISPLAY_PAGE_LINKS_TITLE' , 'Pagina Links');
define('MAX_DISPLAY_PAGE_LINKS_DESC' , 'Aantal links welke gebruikt worden voor Sitenavigatie;');
define('MAX_DISPLAY_SPECIAL_PRODUCTS_TITLE' , 'Speciale Aanbiedingen');
define('MAX_DISPLAY_SPECIAL_PRODUCTS_DESC' , 'Maximaal aantal speciale aanbiedingen, die getoond zullen worden');
define('MAX_DISPLAY_NEW_PRODUCTS_TITLE' , 'Nieuwe Artikelen Module');
define('MAX_DISPLAY_NEW_PRODUCTS_DESC' , 'Maximaal aantal nieuwe artikelen welke getoond zullen worden in een categorie');
define('MAX_DISPLAY_UPCOMING_PRODUCTS_TITLE' , 'Verwachte Nieuwe Artikelen');
define('MAX_DISPLAY_UPCOMING_PRODUCTS_DESC' , 'Maximaal aantal verwachte nieuwe artikelen die getoond zullen worden');
define('MAX_DISPLAY_MANUFACTURERS_IN_A_LIST_TITLE' , 'Fabrikanten Lijst');
define('MAX_DISPLAY_MANUFACTURERS_IN_A_LIST_DESC' , 'In de fabrikanten box; als het aantal fabrikanten dit getal overschrijdt wordt er een drop-down lijst getoond ipv de standaard lijst');
define('MAX_MANUFACTURERS_LIST_TITLE' , 'Lijst fabrikanten');
define('MAX_MANUFACTURERS_LIST_DESC' , 'Gebruikt in de fabrikanten box; Indien de waarde op "1" is ingesteld zal de Fabrikantenbox als drop-down lijst worden getoond.In andere gevallen als een lijst.');
define('MAX_DISPLAY_MANUFACTURER_NAME_LEN_TITLE' , 'Lengte van de Fabrikantennaam');
define('MAX_DISPLAY_MANUFACTURER_NAME_LEN_DESC' , 'In de Fabrikantenbox; Maximale lengte van de Fabrikantennaam');
define('MAX_DISPLAY_NEW_REVIEWS_TITLE' , 'Nieuwe reviews');
define('MAX_DISPLAY_NEW_REVIEWS_DESC' , 'Maximaal aantal nieuwe recensies die getoond zullen worden');
define('MAX_RANDOM_SELECT_REVIEWS_TITLE' , 'Selectie van de willekeurige recensies');
define('MAX_RANDOM_SELECT_REVIEWS_DESC' , 'Uit hoeveel recensies dient een willekeurig getoonde recensie te worden gekozen?');
define('MAX_RANDOM_SELECT_NEW_TITLE' , 'Selectie van willekeurige nieuwe artikelen');
define('MAX_RANDOM_SELECT_NEW_DESC' , 'Uit hoeveel nieuwe artikelen dienen willekeurig getoonde nieuwe artikelen in de Box te worden gekozen?');
define('MAX_RANDOM_SELECT_SPECIALS_TITLE' , 'Selectie van Speciale Aanbiedingen');
define('MAX_RANDOM_SELECT_SPECIALS_DESC' , 'Uit hoeveel speciale aanbiedingen in de willekeurig getoonde aanbiedingen moet er gekozen worden?');
define('MAX_DISPLAY_CATEGORIES_PER_ROW_TITLE' , 'Categorie&euml;n te tonen per rij');
define('MAX_DISPLAY_CATEGORIES_PER_ROW_DESC' , 'Hoeveel categorie&euml;n te tonen per rij.');
define('MAX_DISPLAY_PRODUCTS_NEW_TITLE' , 'Lijst Nieuwe Artikelen');
define('MAX_DISPLAY_PRODUCTS_NEW_DESC' , 'Maximaal aantal producten welke getoond worden in de "nieuwe artikelen" pagina.');
define('MAX_DISPLAY_BESTSELLERS_TITLE' , 'Bestsellers');
define('MAX_DISPLAY_BESTSELLERS_DESC' , 'Maximale aantal bestsellers die getoond moeten worden');
define('MAX_DISPLAY_BESTSELLERS_DAYS_TITLE' , 'Maximale leeftijd (dagen) voor Best Sellers');
define('MAX_DISPLAY_BESTSELLERS_DAYS_DESC' , 'Maximale leeftijd (in dagen) voor producten die worden weergegeven als "Best Sellers".');
define('MAX_DISPLAY_ALSO_PURCHASED_TITLE' , 'Ook dit gekocht');
define('MAX_DISPLAY_ALSO_PURCHASED_DESC' , 'Maximaal aantal artikelen welke te tonen in de "Deze klant kocht ook" box');
define('MAX_DISPLAY_ALSO_PURCHASED_ORDERS_TITLE' , 'Aantal bestellingen Ook gekocht');
define('MAX_DISPLAY_ALSO_PURCHASED_ORDERS_DESC' , 'Maximum aantal gezochte bestellingen om te bepalen welke artikelen ook gekocht zijn.');

define('MAX_DISPLAY_PRODUCTS_IN_ORDER_HISTORY_BOX_TITLE' , 'Besteloverzicht Klant Box');
define('MAX_DISPLAY_PRODUCTS_IN_ORDER_HISTORY_BOX_DESC' , 'Maximaal aantal artikelen te tonen in de klanten bestelhistorie box.');
define('MAX_DISPLAY_ORDER_HISTORY_TITLE' , 'Besteloverzicht');
define('MAX_DISPLAY_ORDER_HISTORY_DESC' , 'Maximaal aantal bestellingen te tonen in de bestelhistorie pagina.');
define('MAX_PRODUCTS_QTY_TITLE', 'Maximaal aantal Artikelen');
define('MAX_PRODUCTS_QTY_DESC', 'Maximaal aantal artikelen die men kan ingeven');
define('MAX_DISPLAY_NEW_PRODUCTS_DAYS_TITLE' , 'Aantal dagen voor nieuwe artikelen');
define('MAX_DISPLAY_NEW_PRODUCTS_DAYS_DESC' , 'Maximaal aantal dagen dat nieuwe producten getoond dienen te worden');

define('PRODUCT_IMAGE_MINI_WIDTH_TITLE' , 'Artikel mini afbeelding breedte');
define('PRODUCT_IMAGE_MINI_WIDTH_DESC' , 'Maximale breedte van het item mini in pixels. (Standaard: 80). Voor grotere waarden kan het nodig zijn "productPreviewImage" in het stylesheet.css bestand van de template aan te passen.');
define('PRODUCT_IMAGE_MINI_HEIGHT_TITLE' , 'H&ouml;he van het artikel minifoto\'s');
define('PRODUCT_IMAGE_MINI_HEIGHT_DESC' , 'Maximale hoogte van het item mini in pixels. (Standaard: 80)');

define('PRODUCT_IMAGE_THUMBNAIL_WIDTH_TITLE' , 'Breedte van Artikel Thumbnails');
define('PRODUCT_IMAGE_THUMBNAIL_WIDTH_DESC' , 'Maximale breedte van artikel thumbnails (in pixels)');
define('PRODUCT_IMAGE_THUMBNAIL_HEIGHT_TITLE' , 'Hoogte van Artikel Thumbnails');
define('PRODUCT_IMAGE_THUMBNAIL_HEIGHT_DESC' , 'Maximale hoogte van de artikel thumbnails (in pixels)');

define('PRODUCT_IMAGE_MIDI_WIDTH_TITLE' , 'Breedte van het artikel midi beelden');
define('PRODUCT_IMAGE_MIDI_WIDTH_DESC' , 'Maximale breedte van het artikel midi in pixels. (Standaard: 160). Voor grotere waarden kan het nodig zijn "productPreviewImage" in het stylesheet.css bestand van de template aan te passen.');
define('PRODUCT_IMAGE_MIDI_HEIGHT_TITLE' , 'H&ouml;he van het artikel midi foto\'s');
define('PRODUCT_IMAGE_MIDI_HEIGHT_DESC' , 'Maximale hoogte van het artikel midi in pixels. (Standaard: 160)');

define('PRODUCT_IMAGE_INFO_WIDTH_TITLE' , 'Breedte van Artikel Info Afbeeldingen');
define('PRODUCT_IMAGE_INFO_WIDTH_DESC' , 'Maximale breedte van artikel info afbeeldingen (in pixels)');
define('PRODUCT_IMAGE_INFO_HEIGHT_TITLE' , 'Hoogte van Artikel Info Afbeeldingen');
define('PRODUCT_IMAGE_INFO_HEIGHT_DESC' , 'Maximale hoogte van artikel info afbeeldingen (in pixels)');

define('PRODUCT_IMAGE_POPUP_WIDTH_TITLE' , 'Breedte van Popup Afbeeldingen');
define('PRODUCT_IMAGE_POPUP_WIDTH_DESC' , 'Maximale breedte van popup afbeeldingen (in pixels)');
define('PRODUCT_IMAGE_POPUP_HEIGHT_TITLE' , 'Hoogte van Popup Afbeeldingen');
define('PRODUCT_IMAGE_POPUP_HEIGHT_DESC' , 'Maximale hoogte van popup afbeeldingen (in pixels');

define('CATEGORIES_IMAGE_WIDTH_TITLE' , 'Breedte van de categorie Afbeeldingen');
define('CATEGORIES_IMAGE_WIDTH_DESC' , 'Maximale breedte van de categorie Afbeeldingen in pixels. (Standaard: 985).');
define('CATEGORIES_IMAGE_HEIGHT_TITLE' , 'Thuis van de categorie Foto\'s');
define('CATEGORIES_IMAGE_HEIGHT_DESC' , 'Maximale hoogte van de categorie afbeeldingen in pixels. (Standaard: 370)');

define('CATEGORIES_IMAGE_MOBILE_WIDTH_TITLE' , 'Breedte van de categorie Afbeeldingen Mobiel');
define('CATEGORIES_IMAGE_MOBILE_WIDTH_DESC' , 'Maximale breedte van de categorie Afbeeldingen Mobiel in pixels. (Standaard: 600).');
define('CATEGORIES_IMAGE_MOBILE_HEIGHT_TITLE' , 'Home van de categorie Mobiele beelden');
define('CATEGORIES_IMAGE_MOBILE_HEIGHT_DESC' , 'Maximale hoogte van de categorie Afbeeldingen Mobiel in pixels. (Standaard: 400)');

define('CATEGORIES_IMAGE_LIST_WIDTH_TITLE' , 'Breedte van de categorie Afbeeldingen Lijst');
define('CATEGORIES_IMAGE_LIST_WIDTH_DESC' , 'Maximale breedte van de categorie Afbeeldingen Lijst in pixels. (Standaard: 225).');
define('CATEGORIES_IMAGE_LIST_HEIGHT_TITLE' , 'High van de categorie Afbeeldingen Lijst');
define('CATEGORIES_IMAGE_LIST_HEIGHT_DESC' , 'Maximale hoogte van de categorieplaatjes in pixels. (Standaard: 170)');

define('MANUFACTURER_IMAGE_WIDTH_TITLE' , 'Breedte van de afbeeldingen van de fabrikant');
define('MANUFACTURER_IMAGE_WIDTH_DESC' , 'Maximale breedte van de afbeeldingen van de fabrikant in pixels. (Standaard: 100).');
define('MANUFACTURER_IMAGE_HEIGHT_TITLE' , 'High van de fabrikant beelden');
define('MANUFACTURER_IMAGE_HEIGHT_DESC' , 'Maximale hoogte van de afbeeldingen van de fabrikant in pixels. (Standaard: 60)');

define('BANNERS_IMAGE_WIDTH_TITLE' , 'Breite des Bannerbildes');
define('BANNERS_IMAGE_WIDTH_DESC' , 'Maximale Breite der Bannerbilder in Pixeln. (Standard: 985).');
define('BANNERS_IMAGE_HEIGHT_TITLE' , 'High der Bannerbilder');
define('BANNERS_IMAGE_HEIGHT_DESC' , 'Maximale High der Bannerbilder in Pixeln. (Standard: 400)');

define('BANNERS_IMAGE_MOBILE_WIDTH_TITLE' , 'Breedte van bannerafbeeldingen Mobiel');
define('BANNERS_IMAGE_MOBILE_WIDTH_DESC' , 'Maximale breedte van bannerafbeeldingen Mobiel in pixels. (Standaard: 600).');
define('BANNERS_IMAGE_MOBILE_HEIGHT_TITLE' , 'Hoog van de bannerafbeeldingen Mobiel');
define('BANNERS_IMAGE_MOBILE_HEIGHT_DESC' , 'Maximale hoogte van de bannerafbeeldingen Mobile in pixels. (Standaard: 400)');

define('SMALL_IMAGE_WIDTH_TITLE' , 'Breedte Kleine Afbeelding');
define('SMALL_IMAGE_WIDTH_DESC' , 'Breedte kleine afbeeldingen (in pixels)');
define('SMALL_IMAGE_HEIGHT_TITLE' , 'Hoogte Kleine Afbeelding');
define('SMALL_IMAGE_HEIGHT_DESC' , 'Hoogte van kleine afbeeldingen (in pixels)');

define('SUBCATEGORY_IMAGE_WIDTH_TITLE' , 'Breedte Subcategorie Afbeelding');
define('SUBCATEGORY_IMAGE_WIDTH_DESC' , 'Breedte van subcategorie afbeeldingen (in pixels)');
define('SUBCATEGORY_IMAGE_HEIGHT_TITLE' , 'Hoogte Subcategorie Afbeelding');
define('SUBCATEGORY_IMAGE_HEIGHT_DESC' , 'Hoogte van subcategorie afbeeldingen (in pixels)');

define('MO_PICS_TITLE','Aantal artikel afbeeldingen');
define('MO_PICS_DESC','als dit op > 0 is gezet, dan kunt u meerdere afbeeldingen per artikel uploaden/weergeven');

define('PRODUCT_IMAGE_MINI_MERGE_TITLE' , 'Artikel Mini Afbeeldingen: Samenvoegen<br /><img src="images/config_merge.gif">');
define('PRODUCT_IMAGE_MINI_MERGE_DESC' , 'Artikel Mini Afbeeldingen: Samenvoegen<br /><br />Standaardwaarde: (overlay.gif,10,-50,60,FF0000)<br /><br />overlay samengevoegd beeld<br />Gebruik:<br />(merge image,x start [neg = from right],y start [neg = from base], opaciteit, transparante kleur op samengevoegd beeld)');

//This is for the Images showing your products for preview. All the small stuff.

define('PRODUCT_IMAGE_THUMBNAIL_MERGE_TITLE' , 'Artikel-Thumbnails:Merge<br /><img src="images/config_merge.gif">');
define('PRODUCT_IMAGE_THUMBNAIL_MERGE_DESC' , 'Artikel-Thumbnails:Merge<br /><br />Standaard-waarden: (overlay.gif,10,-50,60,FF0000)<br /><br />overlay merge image<br />Gebruik:<br />(merge image,x start [neg = from right],y start [neg = from base],opacity, transparent colour on merge image)');

//And this is for the Images showing your products in single-view

define('PRODUCT_IMAGE_MIDI_MERGE_TITLE' , 'Artikel Midi Afbeeldingen: Samenvoegen');
define('PRODUCT_IMAGE_MIDI_MERGE_DESC' , 'Artikel Midi Afbeeldingen: Samenvoegen<br /><br />Standaardwaarde: (overlay.gif,10,-50,60,FF0000)<br /><br />overlay samengevoegd beeld<br />Gebruik:<br />(merge image,x start [neg = from right],y start [neg = from base],opaciteit, transparante kleur op samengevoegd beeld)');

define('PRODUCT_IMAGE_INFO_MERGE_TITLE' , 'Product Afbeeldingen: Samenvoegen');
define('PRODUCT_IMAGE_INFO_MERGE_DESC' , 'Artikel-Info Afbeeldingen:Merge<br /><br />Standaard waarden: (overlay.gif,10,-50,60,FF0000)<br /><br />overlay merge image<br />Gebruik:<br />(merge image,x start [neg = from right],y start [neg = from base],opacity,transparent colour on merge image)');

define('PRODUCT_IMAGE_POPUP_MERGE_TITLE' , 'Product Popup Beelden: Samenvoegen');
define('PRODUCT_IMAGE_POPUP_MERGE_DESC' , 'Artikel-Popup Afbeeldingen:Merge<br /><br />Standaard waarden: (overlay.gif,10,-50,60,FF0000)<br /><br />overlay merge image<br />Gebruik:<br />(merge image,x start [neg = from right],y start [neg = from base],opacity,transparent colour on merge image)');

define('IMAGE_MANIPULATOR_TITLE','GDlib-verwerking');
define('IMAGE_MANIPULATOR_DESC','Beeldmanipulator voor GD2 of GD1<br /><br /><b>OPMERKING:</b> image_manipulator_GD2_advanced.php ondersteunt transparante PNG\'s');


define('ACCOUNT_GENDER_TITLE' , 'Aanhef');
define('ACCOUNT_GENDER_DESC' , 'Weergave van aanhef in klanten account');
define('ACCOUNT_DOB_TITLE' , 'Geboortedatum');
define('ACCOUNT_DOB_DESC' , 'Weergave van geboortedatum in klantenaccount');
define('ACCOUNT_COMPANY_TITLE' , 'Firma');
define('ACCOUNT_COMPANY_DESC' , 'Weergave van firma in klantenaccount');
define('ACCOUNT_SUBURB_TITLE' , 'Wijk');
define('ACCOUNT_SUBURB_DESC' , 'Weergave van wijk in klantenaccount');
define('ACCOUNT_STATE_TITLE' , 'Regio');
define('ACCOUNT_STATE_DESC' , 'Weergave van regio in klantenaccount');

define('DEFAULT_CURRENCY_TITLE' , 'Standaard Valuta');
define('DEFAULT_CURRENCY_DESC' , 'Valuta die standaard gebruikt wordt');
define('DEFAULT_LANGUAGE_TITLE' , 'Standaard Taal');
define('DEFAULT_LANGUAGE_DESC' , 'Taal die standaard gebruikt wordt');
define('DEFAULT_ORDERS_STATUS_ID_TITLE' , 'Standaard Bestel Status');
define('DEFAULT_ORDERS_STATUS_ID_DESC' , 'Standaard bestelstatus bij nieuwe bestellingen.');

define('SHIPPING_MAX_WEIGHT_TITLE' , 'Voer het maximale pakketgewicht in dat u gaat verzenden');
define('SHIPPING_MAX_WEIGHT_DESC' , 'Dragers hebben een maximale gewichtslimiet voor een enkel pakket. Dit is een gemeenschappelijke limiet voor iedereen.');
define('SHIPPING_BOX_WEIGHT_TITLE' , 'Pakket Tarragewicht');
define('SHIPPING_BOX_WEIGHT_DESC' , 'Wat is het gewicht van typische verpakkingen van kleine tot middelgrote verpakkingen?');
define('SHIPPING_BOX_PADDING_TITLE' , 'Grotere pakketten - procentuele toename');
define('SHIPPING_BOX_PADDING_DESC' , 'Voor 10% invoeren 10');
define('SHOW_SHIPPING_TITLE' , 'Verzendkosten weergeven');
define('SHOW_SHIPPING_DESC' , 'Toon link naar verzendkosten');
define('SHIPPING_INFOS_TITLE' , 'Verzendkosten');
define('SHIPPING_INFOS_DESC' , 'Selecteer de inhoud om de verzendkosten weer te geven');
define('SHIPPING_DEFAULT_TAX_CLASS_METHOD_TITLE' , 'Berekeningsmethode van de standaard belastingklasse');
define('SHIPPING_DEFAULT_TAX_CLASS_METHOD_DESC' , 'geen: toon geen verzendingsbelasting<br />auto proportioneel: toon verzendingsbelasting proportioneel aan bestelling<br />auto max: toon verzendingsbelasting, gebruik belastingtarief van grootste omzetgroep');

define('SHOW_SHIPPING_MODULE_TITLE_TITLE' , 'Benaming Verzendingskosten');
define('SHOW_SHIPPING_MODULE_TITLE_DESC' , 'Kies de naam van de verzendkosten in het overzicht');
define('CUSTOM_SHIPPING_TITLE_TITLE' , 'Individuele benaming Verzendingskosten');
define('CUSTOM_SHIPPING_TITLE_DESC' , 'Voer een aanwijzing in. Deze instelling is alleen van kracht als de verzendingskostenaanduiding is ingesteld op "Door gebruiker gedefinieerd".');
define('CFG_TXT_SHIPPING_DEFAULT', 'Standaard');
define('CFG_TXT_SHIPPING_TITLE', 'Titel');
define('CFG_TXT_SHIPPING_CUSTOM', 'Custom');

define('CAPITALIZE_ADDRESS_FORMAT_TITLE' , 'Adres in hoofdletters');
define('CAPITALIZE_ADDRESS_FORMAT_DESC' , 'Uitvoer land- en plaatsnamen in hoofdletters');

define('PRODUCT_LIST_FILTER_TITLE' , 'Weergave Categorie/Fabrikant Filter (0=uit; 1=aan)');
define('PRODUCT_LIST_FILTER_DESC' , 'Wilt u het Categorie/Fabrikant Filter weergeven?');

define('STOCK_CHECK_TITLE' , 'Controleer Voorraad Niveau');
define('STOCK_CHECK_DESC' , 'Controleren om te zien of er voldoende voorraad beschikbaar is.');

define('ATTRIBUTE_STOCK_CHECK_TITLE' , 'Controleer Kenmerk Voorraad Niveau');
define('ATTRIBUTE_STOCK_CHECK_DESC' , 'Controleer of er voldoende voorraad van artikelen met bepaalde kenmerken aanwezig is');
define('STOCK_LIMITED_TITLE' , 'Van de voorraad aftrekken');
define('STOCK_LIMITED_DESC' , 'Artikel (aantal) aftrekken van voorraad bij bestelling ');
define('STOCK_LIMITED_DOWNLOADS_TITLE' , 'Aftrek downloads van hoeveelheid goederen');
define('STOCK_LIMITED_DOWNLOADS_DESC' , 'Moet de hoeveelheid goederen ook worden afgetrokken voor downloadartikelen?');
define('STOCK_ALLOW_CHECKOUT_TITLE' , 'Bestellen van artikelen die niet voorradig zijn toestaan');
define('STOCK_ALLOW_CHECKOUT_DESC' , 'Toestaan om te bestellen ook als er onvoldoende voorraad is');
define('STOCK_MARK_PRODUCT_OUT_OF_STOCK_TITLE' , 'Markeer artikelen welke niet voorradig zijn');
define('STOCK_MARK_PRODUCT_OUT_OF_STOCK_DESC' , 'Weergeven van bericht zodat klanten kunnen zien welk artikel niet op voorraad is');
define('STOCK_REORDER_LEVEL_TITLE' , 'Melden dat een artikel nabesteld moet worden');
define('STOCK_REORDER_LEVEL_DESC' , 'Vanaf welk aantal moet deze melding verschijnen?');
define('STORE_PAGE_PARSE_TIME_TITLE' , 'Opslaan Parsetijd Pagina');
define('STORE_PAGE_PARSE_TIME_DESC' , 'Sla tijd op welke benodigd is om een pagina te parsen');
define('STORE_PARSE_DATE_TIME_FORMAT_TITLE' , 'Logboekbestand datum formaat');
define('STORE_PARSE_DATE_TIME_FORMAT_DESC' , 'Het datumformaat (Standaard: %d/%m/%Y %H:%M:%S)');
define('STORE_DB_SLOW_QUERY_TITLE' , 'Traagraagraaglogboek');
define('STORE_DB_SLOW_QUERY_DESC' , 'Moeten alleen langzame SQL Queries worden opgeslagen? Br/><strong>Caution: Sla Database Queries op moet worden ingeschakeld! </strong>.<br/><strong>Caution: Bestand kan erg groot worden in lange logsessies! </strong>.<br/><br/>Het logbestand wordt opgeslagen in /log in de winkelwortel');
define('STORE_DB_SLOW_QUERY_TIME_TITLE' , 'Traagraagraaglogboek - Tijd');
define('STORE_DB_SLOW_QUERY_TIME_DESC' , 'Tijd voor de langzame querys die gelogd moeten worden.');

define('DISPLAY_PAGE_PARSE_TIME_TITLE' , 'De paginaparsiertijd weergeven');
define('DISPLAY_PAGE_PARSE_TIME_DESC' , 'De paginaparseertijd weergeven<br /><strong>niet</strong>: gedeactiveerd<br /><strong>admin</strong>: Alleen de beheerder ziet de paginaparseertijd<br /><strong>allemaal</strong>: iedereen ziet de paginaparseertijd');
define('STORE_DB_TRANSACTIONS_TITLE' , 'Databank vragen opslaan');
define('STORE_DB_TRANSACTIONS_DESC' , 'Sla de databasevragen op in het parse-tijdlogbestand van de pagina<br/><strong>Caution: Het bestand kan erg groot worden in lange logsessies! </strong>.<br/><br/>Het logbestand wordt opgeslagen in /log in de winkeleigenaarswortel');

define('USE_CACHE_TITLE' , 'Cache gebruiken');
define('USE_CACHE_DESC' , 'Gebruik caching functies');

define('DB_CACHE_TITLE','Database Caching');
define('DB_CACHE_DESC','SELECT-query resultaten in de cache-bestanden om meer snelheidswinst te behalen voor trage databases.');

define('DB_CACHE_EXPIRE_TITLE','DB Cache Levensduur ');
define('DB_CACHE_EXPIRE_DESC','Tijd in seconden benodigd om Cache gegevens opnieuw op te bouwen.');

define('DIR_FS_CACHE_TITLE' , 'Cache Directory');
define('DIR_FS_CACHE_DESC' , 'Directory waar cached bestanden worden opgeslagen');

define('ACCOUNT_OPTIONS_TITLE','Account Opties');
define('ACCOUNT_OPTIONS_DESC','Hoe wilt u de login-procedure voor uw Shop configureren?<br />U heeft de keuze uit een gewoon klantenaccount en een "Eenmalig Bestellen" account (niet permanent).');

define('EMAIL_TRANSPORT_TITLE' , 'E-Mail Transport Methode');
define('EMAIL_TRANSPORT_DESC' , 'Definieert of de server een lokale verbinding naar Sendmail gebruikt of een SMTP Verbinding via TCP/IP . Servers welke op Windows of MacOS draaien dienen SMTP te gebruiken.');

define('EMAIL_LINEFEED_TITLE' , 'E-Mail Linefeeds');
define('EMAIL_LINEFEED_DESC' , 'Definieert de karakters welke welke gebruikt worden om de Mail Header te scheiden.');
define('EMAIL_USE_HTML_TITLE' , 'Gebruik van MIME HTML bij versturen van E-Mails');
define('EMAIL_USE_HTML_DESC' , 'Verstuur E-Mails in HTML Formaat');
define('ENTRY_EMAIL_ADDRESS_CHECK_TITLE' , 'Controleer E-Mail Adres door DNS');
define('ENTRY_EMAIL_ADDRESS_CHECK_DESC' , 'Controleer E-Mail Adres via een DNS-server');
define('SEND_EMAILS_TITLE' , 'Versturen van E-Mails');
define('SEND_EMAILS_DESC' , 'E-Mails naar klanten versturen');
define('SENDMAIL_PATH_TITLE' , 'Het pad naar Sendmail');
define('SENDMAIL_PATH_DESC' , 'Indien u sendmail gebruikt geef dan het juiste pad op(normalerwijze: /usr/bin/sendmail):');
define('USE_SENDMAIL_OPTIONS_TITLE', 'Sendmail opties');
define('USE_SENDMAIL_OPTIONS_DESC', 'Geeft aan of mail() een volledig sendmail-compatibele MTA gebruikt.');
define('SMTP_MAIN_SERVER_TITLE' , 'Adres van SMTP Server');
define('SMTP_MAIN_SERVER_DESC' , 'Geef het adres van de algemene SMTP Server op.');
define('SMTP_BACKUP_SERVER_TITLE' , 'Adres van de SMTP Backup Server');
define('SMTP_BACKUP_SERVER_DESC' , 'Geef het Adres van uw Backup SMTP Server op.');
define('SMTP_USERNAME_TITLE' , 'SMTP Username');
define('SMTP_USERNAME_DESC' , 'Geef de Username van uw SMTP Accounts op.');
define('SMTP_PASSWORD_TITLE' , 'SMTP Wachtwoord');
define('SMTP_PASSWORD_DESC' , 'Geef hier het wachtwoord van uw SMTP Account op.');
define('SMTP_AUTH_TITLE' , 'SMTP AUTH');
define('SMTP_AUTH_DESC' , 'Inschakelen veilige authenticatie voor uw SMTP-server');
define('SMTP_PORT_TITLE' , 'SMTP Port');
define('SMTP_PORT_DESC' , 'Geef de SMTP Poort van uw SMTP Server op (Standaard: 25)?');
define('SMTP_AUTO_TLS_TITLE' , 'SMTP-Automatische TLS-aansluiting');
define('SMTP_AUTO_TLS_DESC' , 'Verbinding automatisch met STARTTLS als SMTP-SECURE is gedeactiveerd? <br> Bij transmissieproblemen de automatische TLS-verbinding deactiveren!');
define('SMTP_DEBUG_TITLE' , 'SMTP-Debug Log-Level');
define('SMTP_DEBUG_DESC' , '<b>0</b>: geen uitgang; <b>1</b>: commando\'s; <b>2</b>: gegevens en commando\'s; <b>3</b>: als 2 plus verbindingsstatus; <b>4</b>: als 3 plus low-level data-uitvoer<br>In geval van verzendproblemen ingesteld op 2, wordt een logboek aangemaakt in de logboekdirectory.');

//DokuMan - 2011-09-20 - E-Mail SQL errors
define('EMAIL_SQL_ERRORS_TITLE','Stuur SQL-foutberichten naar de winkeleigenaar via e-mail');
define('EMAIL_SQL_ERRORS_DESC','Als het "waar" is, wordt er een e-mail gestuurd naar het e-mailadres van de winkeleigenaar met de juiste SQL-foutmelding. De SQL foutmelding zelf zal verborgen worden voor de klant.<br />Als de SQL foutmelding "false" is, zal deze direct zichtbaar zijn voor iedereen (standaard).');

//Constants for contact_us
define('CONTACT_US_EMAIL_ADDRESS_TITLE' , 'Neem Contact Op - E-Mail Adres');
define('CONTACT_US_EMAIL_ADDRESS_DESC' , 'Geef een e-mail adres op welke gebruikt wordt voor "Neem contact op" berichten.');
define('CONTACT_US_NAME_TITLE' , 'Neem Contact op - E-Mail Adres, Naam');
define('CONTACT_US_NAME_DESC' , 'Geef een naam op voor "Neem Contact op" berichten.');
define('CONTACT_US_FORWARDING_STRING_TITLE' , 'Neem Contact op - Doorsturen naar');
define('CONTACT_US_FORWARDING_STRING_DESC' , 'Geef meerdere Mailadressen (gescheiden door ",") op naar welke "Neem contact op" berichten dienen te worden doorgestuurd');
define('CONTACT_US_REPLY_ADDRESS_TITLE' , 'Neem Contact op - Reply adres');
define('CONTACT_US_REPLY_ADDRESS_DESC' , 'Geef een e-mail adres op waar klanten kunnen reageren.');
define('CONTACT_US_REPLY_ADDRESS_NAME_TITLE' , 'Neem Contact op - Antwoordadres, Naam');
define('CONTACT_US_REPLY_ADDRESS_NAME_DESC' , 'Geef een naam op om te gebruiken in reply-veld van "Neem Contact op" berichten.');
define('CONTACT_US_EMAIL_SUBJECT_TITLE' , 'Contact - E-Mail Onderwerp');
define('CONTACT_US_EMAIL_SUBJECT_DESC' , 'Geef een e mail onderwerp op voor "Neem Contact op" berichten.');

//Constants for support system
define('EMAIL_SUPPORT_ADDRESS_TITLE' , 'Technische Support - E-Mail Adres');
define('EMAIL_SUPPORT_ADDRESS_DESC' , 'Geef een e-mail adres op voor het versturen van mails betreffende het <b>Support System</b> (accountaanmaak, wachtwoord vergeten).');
define('EMAIL_SUPPORT_NAME_TITLE' , 'Technische Support - E-Mail Naam');
define('EMAIL_SUPPORT_NAME_DESC' , 'Geef een naam op voor het versturen van mails betreffende het <b>Support System</b> (accountaanmaak, wachtwoord vergeten).');
define('EMAIL_SUPPORT_FORWARDING_STRING_TITLE' , 'Technische Support - Doorsturen naar');
define('EMAIL_SUPPORT_FORWARDING_STRING_DESC' , 'Geef mail adressen op die berichten van <b>Support Systems</b> doorsturen (gescheiden door ,)');
define('EMAIL_SUPPORT_REPLY_ADDRESS_TITLE' , 'Technische Support - Antwoordadres');
define('EMAIL_SUPPORT_REPLY_ADDRESS_DESC' , 'Geef mail adres op waar klanten kunnen antwoorden.');
define('EMAIL_SUPPORT_REPLY_ADDRESS_NAME_TITLE' , 'Technische Support - Antwoordadres, Naam');
define('EMAIL_SUPPORT_REPLY_ADDRESS_NAME_DESC' , 'Naam Afzender in reply-to veld van support e-mails.');
define('EMAIL_SUPPORT_SUBJECT_TITLE' , 'Technische Support - E-Mail Onderwerp');
define('EMAIL_SUPPORT_SUBJECT_DESC' , 'Geef een e-Mail onderwerp voor <b>Support Systems</b> berichten.');

//Constants for Billing system
define('EMAIL_BILLING_ADDRESS_TITLE' , 'Facturering - E-Mail adres');
define('EMAIL_BILLING_ADDRESS_DESC' , 'Geef een E-mailadres op voor het versturen van mails over <b>Facturering</b>. (order bevstiging, status wijzigingen, ...).');
define('EMAIL_BILLING_NAME_TITLE' , 'Facturering - E-Mail Naam');
define('EMAIL_BILLING_NAME_DESC' , 'Geef een naam voor het versturen van e-mails over <b>Facturering</b> (order bevestiging, status wijzigingen, ...).');
define('EMAIL_BILLING_FORWARDING_STRING_TITLE' , 'Facturering - Doorsturen naar');
define('EMAIL_BILLING_FORWARDING_STRING_DESC' , 'Geef doorstuur adressen op voor mails over <b>Facturering</b> (gescheiden door , )');
define('EMAIL_BILLING_REPLY_ADDRESS_TITLE' , 'Facturering - Reply-To');
define('EMAIL_BILLING_REPLY_ADDRESS_DESC' , 'Geef een e-mail adres waar klanten kunnen antwoorden.');
define('EMAIL_BILLING_REPLY_ADDRESS_NAME_TITLE' , 'Facturering - Reply-To Naam');
define('EMAIL_BILLING_REPLY_ADDRESS_NAME_DESC' , 'Geef een naam op voor gebruik in het reply-to veld van facturering e-mails.');
define('EMAIL_BILLING_SUBJECT_TITLE' , 'Facturering - E-Mail Onderwerp');
define('EMAIL_BILLING_SUBJECT_DESC' , 'Voer een e-mail onderwerp in voor <b>Billing</b> berichten. (Bijvoorbeeld <b>Uw bestelling {$nr} van {$date}</b>)<br />Je kunt het gebruiken: {$nr},{$date},{$firstname},{$lastname}');
define('EMAIL_BILLING_SUBJECT_ORDER_TITLE','Facturering - Orderverzending Onderwerp');
define('EMAIL_BILLING_SUBJECT_ORDER_DESC','Voer een onderwerp in voor bestelmails. (Bijvoorbeeld <b>Uw bestelling {$nr} van {$date}</b>)<br />Je kunt het gebruiken: {$nr},{$date},{$firstname},{$lastname}');
define('MODULE_ORDER_MAIL_STEP_SUBJECT_TITLE','Facturering - Orderbevestiging Mail Onderwerp');
define('MODULE_ORDER_MAIL_STEP_SUBJECT_DESC','Voer een onderwerp in voor de orderbevestigingsmails. (Bijvoorbeeld <b>Uw bestelling {$nr} van {$date}</b>)<br />Je kunt het gebruiken: {$nr},{$date},{$firstname},{$lastname}');

define('DOWNLOAD_ENABLED_TITLE' , 'Download Toestaan');
define('DOWNLOAD_ENABLED_DESC' , 'Artikelen download functie inschakelen.');
define('DOWNLOAD_BY_REDIRECT_TITLE' , 'Download via Omleiding');
define('DOWNLOAD_BY_REDIRECT_DESC' , 'Gebruik browser omleiding voor download. Op non-Unix systemen uitschakelen.');
define('DOWNLOAD_MAX_DAYS_TITLE' , 'Vervaldatum Download Links(Dagen)');
define('DOWNLOAD_MAX_DAYS_DESC' , 'Aantal dagen voordat een Download Link verstrijkt. 0 is geen limiet.');
define('DOWNLOAD_MAX_COUNT_TITLE' , 'Maximaal Aantal Downloads');
define('DOWNLOAD_MAX_COUNT_DESC' , 'Stel het maximale aantal downloads in. 0 betekent geen download mogelijk.');
define('DOWNLOAD_MULTIPLE_ATTRIBUTES_ALLOWED_TITLE' , 'Meervoudig Attribuut voor Downloads');
define('DOWNLOAD_MULTIPLE_ATTRIBUTES_ALLOWED_DESC' , 'Laat Multiple Attribute de verzending overslaan.');

define('GZIP_COMPRESSION_TITLE' , 'GZip Compressie inschakelen');
define('GZIP_COMPRESSION_DESC' , 'Schakel HTTP GZip Kompression in.');
define('GZIP_LEVEL_TITLE' , 'Compressie Niveau');
define('GZIP_LEVEL_DESC' , 'Kies een compressie niveau 0-9 (0 = Minimum, 9 = Maximum).');

define('SESSION_WARNING', '<br /><br /><span class="col-red"><strong>LET OP:</strong></span> Deze functie kan de werking van het winkelsysteem verminderen. Wijzig het alleen als u zich bewust bent van de volgende gevolgen en uw webserver de bijbehorende functie ondersteunt.');

define('SESSION_WRITE_DIRECTORY_TITLE' , 'Sessie Directory');
define('SESSION_WRITE_DIRECTORY_DESC' , 'Indien sessies als bestanden worden opgeslagen gebruik dan de volgende map.');
define('SESSION_FORCE_COOKIE_USE_TITLE' , 'Forceer Cookie Gebruik');
define('SESSION_FORCE_COOKIE_USE_DESC' , 'Sessie starten als cookies door de Browser worden toegestaan.');
define('SESSION_CHECK_SSL_SESSION_ID_TITLE' , 'Controleer  de SSL Session ID');
define('SESSION_CHECK_SSL_SESSION_ID_DESC' , 'Valideer SSL_SESSION_ID bij elke HTTPS Pagina oproep.');
define('SESSION_CHECK_USER_AGENT_TITLE' , 'Controleer User Agent');
define('SESSION_CHECK_USER_AGENT_DESC' , 'Controle van Browsers welke gebruikt wordt bij oproepen Site.');
define('SESSION_CHECK_IP_ADDRESS_TITLE' , 'Controle van IP Adres');
define('SESSION_CHECK_IP_ADDRESS_DESC' , 'Controleren van IP Adres gebruiker bij elke oproepen Site.');
define('SESSION_RECREATE_TITLE' , 'Sessie vernieuwen');
define('SESSION_RECREATE_DESC' , 'Vernieuwen van sessie en toewijzen van een nieuwe Sessie ID zodra een gebruiker inlogt of zich registreerd (PHP >=4.1 benodigd).');

define('DISPLAY_CONDITIONS_ON_CHECKOUT_TITLE' , 'Voorwaarden tonen bij afrekenen');
define('DISPLAY_CONDITIONS_ON_CHECKOUT_DESC' , 'Toon algemene voorwaarden en vraag akkoord bij afrekenen');
define('SIGN_CONDITIONS_ON_CHECKOUT_TITLE' , 'Tekenen van de voorwaarden bij het afrekenen');
define('SIGN_CONDITIONS_ON_CHECKOUT_DESC' , 'Vraag goedkeuring van de algemene voorwaarden en bij het afrekenen.<br/><b>Aandacht: </b> "Weergavevoorwaarden bij het afrekenen" moet zijn ingeschakeld.');

define('META_MIN_KEYWORD_LENGTH_TITLE' , 'Minimum Lengte Meta-Keywords');
define('META_MIN_KEYWORD_LENGTH_DESC' , 'Minimum Lengte van een enkel keyword (afgeleid van produktomschrijving)');
define('META_KEYWORDS_NUMBER_TITLE' , 'Aantal Meta-Keywords');
define('META_KEYWORDS_NUMBER_DESC' , 'Aantal Keywords');
define('META_AUTHOR_TITLE' , 'author');
define('META_AUTHOR_DESC' , '<meta name="author">');
define('META_PUBLISHER_TITLE' , 'publisher');
define('META_PUBLISHER_DESC' , '<meta name="publisher">');
define('META_COMPANY_TITLE' , 'company');
define('META_COMPANY_DESC' , '<meta name="company">');
define('META_TOPIC_TITLE' , 'page-topic');
define('META_TOPIC_DESC' , '<meta name="page-topic">');
define('META_REPLY_TO_TITLE' , 'reply-to');
define('META_REPLY_TO_DESC' , '<meta name="reply-to">');
define('META_REVISIT_AFTER_TITLE' , 'revisit-after');
define('META_REVISIT_AFTER_DESC' , '<meta name="revisit-after">');
define('META_ROBOTS_TITLE' , 'robots');
define('META_ROBOTS_DESC' , '<meta name="robots">');
define('META_DESCRIPTION_TITLE' , 'Description');
define('META_DESCRIPTION_DESC' , '<meta name="description">');
define('META_KEYWORDS_TITLE' , 'Keywords');
define('META_KEYWORDS_DESC' , '<meta name="keywords">');

define('MODULE_PAYMENT_INSTALLED_TITLE' , 'Geinstalleerde Betalingsmodule');


define('MODULE_PAYMENT_INSTALLED_DESC' , 'Lijst van Betaalmodule bestandsnamen gescheiden door een semi-colon (;). Deze wordt automatisch geupdate.Niet nodig om te bewerken.(Voorbeeld: cc.php;cod.php;paypal.php)');
define('MODULE_ORDER_TOTAL_INSTALLED_TITLE' , 'Geinstalleerde Order Total-Module');
define('MODULE_ORDER_TOTAL_INSTALLED_DESC' , 'Lijst van Order-Total-Module-Bestandsnamen gescheiden door een semi-colon (;). Deze wordt automatisch geupdate.Niet nodig om te bewerken.(Voorbeeld: ot_subtotal.php;ot_tax.php;ot_shipping.php;ot_total.php)');
define('MODULE_SHIPPING_INSTALLED_TITLE' , 'Geinstallierte Verzend Module');
define('MODULE_SHIPPING_INSTALLED_DESC' , 'Lijst van verzendmodue-Bestandsnamen gescheiden door een semi-colon (;). Deze wordt automatisch geupdate.Niet nodig om te bewerken.(Voorbeeld: ups.php;flat.php;item.php)');

define('CACHE_LIFETIME_TITLE','Cache Lifetime');
define('CACHE_LIFETIME_DESC','Tijd in seconden voordat Cache bestanden automatisch overschreven worden.');
define('CACHE_CHECK_TITLE','Controleer of Cache is aangepast');
define('CACHE_CHECK_DESC','Als "true", dan worden If-Modified-Since headers verwerkt, en de juiste HTTP headers verzonden. Op deze wijze herhaalde hits naar een gecachte pagina sturen geen hele pagina naar een client.');

define('PRODUCT_REVIEWS_VIEW_TITLE','Reviews in Artikeldetails');
define('PRODUCT_REVIEWS_VIEW_DESC','Aantal reviews getoond in Artikeldetail pagina');

define('DELETE_GUEST_ACCOUNT_TITLE','Verwijderen Gast-Account');
define('DELETE_GUEST_ACCOUNT_DESC','Moeten Gast Accounts na een bestelling verwijderd worden? (Bestelgegevens blijven opgeslagen)');

define('USE_WYSIWYG_TITLE','WYSIWYG-Editor activeren');
define('USE_WYSIWYG_DESC','WYSIWYG-Editor voor CMS en Artikelen activeren ?');

define('PRICE_IS_BRUTTO_TITLE','Bruto Admin');
define('PRICE_IS_BRUTTO_DESC','Ingave van Brutoprijs in Admin');

define('PRICE_PRECISION_TITLE','Bruto/Netto Decimalen');
define('PRICE_PRECISION_DESC','Afronding (Heeft geen invloed op display in de Shop, hier worden altijd 2 decimalen getoond.)');

define('CHECK_CLIENT_AGENT_TITLE','Spider Sessions voorkomen?');
define('CHECK_CLIENT_AGENT_DESC','Voorkom dat spiders van bekende zoekmachines een sessie starten.');
define('SHOW_IP_LOG_TITLE','IP-Log in Checkout?');
define('SHOW_IP_LOG_DESC','Text "Toon Tekst "Uw IP adres wordt opgeslagen", bij het afrekenen?');

define('ACTIVATE_GIFT_SYSTEM_TITLE','Activeer Geschenkbonnensysteem?');
define('ACTIVATE_GIFT_SYSTEM_DESC','Activeer het cadeaubonnensysteem<br/><b>Let op:</b> U moet de Modules ot_coupon installeren <a href="'.xtc_href_link(FILENAME_MODULES, 'set=ordertotal&module=ot_coupon').'"><b>hier</b></a> en ot_gv <a href="'.xtc_href_link(FILENAME_MODULES, 'set=ordertotal&module=ot_gv').'"><b>hier</b></a>.');

define('SECURITY_CODE_LENGTH_TITLE', 'Lengte van de cadeauboncode');
define('SECURITY_CODE_LENGTH_DESC', 'Vul hier de lengte van de cadeauboncode in (max. 16 tekens)');

define('NEW_SIGNUP_GIFT_VOUCHER_AMOUNT_TITLE', 'Welkomst-cadeaubonbedrag');
define('NEW_SIGNUP_GIFT_VOUCHER_AMOUNT_DESC', 'Welkom Cadeaubonbedrag: Als u geen Cadeaubon wenst te versturen in uw aangemaakte account E-Mail, zet dan 0 voor geen bedrag, anders zet u het bedrag hier, d.w.z. 10.00 of 50.00, geen valutaborden');
define('NEW_SIGNUP_DISCOUNT_COUPON_TITLE', 'Welkom Kortingscouponcode');
define('NEW_SIGNUP_DISCOUNT_COUPON_DESC', 'Welkom Kortingscouponcode: als u geen Kortingscoupon wilt sturen in uw account E-Mail, laat dit veld dan leeg, anders plaatst u hier de couponcode die u wilt gebruiken.<br /><b>Let op:</b>De couponcode moet worden aangemaakt in de <a href="'.xtc_href_link(FILENAME_COUPON_ADMIN).'"><b>Couponbeheerder</b></a> voor.');

define('ACTIVATE_SHIPPING_STATUS_TITLE','Toon Verzendstatus');
define('ACTIVATE_SHIPPING_STATUS_DESC','Toon de verzendstatus? (Er kunnen verschillende verzendtijden worden opgegeven voor afzonderlijke producten. Indien ingeschakeld, wordt een nieuw item <b>Leveringsstatus</b> weergegeven bij productinvoer)');

define('IMAGE_QUALITY_TITLE','Beeld Kwaliteit');
define('IMAGE_QUALITY_DESC','Beeldkwaliteit (0= hoogste compressie, 100=beste kwaliteit)');

define('GROUP_CHECK_TITLE','Klantstatuscontrole');
define('GROUP_CHECK_DESC','Klantstatus checklist: Beperk de toegang tot individuele categorie&euml;n, producten en content items tot bepaalde klantgroepen (na activering verschijnen er invoervelden in categorie&euml;n, producten en in de content manager).');

define('ACTIVATE_REVERSE_CROSS_SELLING_TITLE', 'Omgekeerde kruisverkoop');
define('ACTIVATE_REVERSE_CROSS_SELLING_DESC', 'Omgekeerde kruisverkoop activeren?');
define('ACTIVATE_CROSS_SELLING_TITLE', 'Cross-Selling');
define('ACTIVATE_CROSS_SELLING_DESC', 'Kruisverkoop activeren?');

define('ACTIVATE_NAVIGATOR_TITLE','Product Navigator activeren?');
define('ACTIVATE_NAVIGATOR_DESC','productnavigator in product_info activeren/deactiveren, (deactiveren voor betere prestaties als er veel artikelen in het systeem aanwezig zijn)');

define('QUICKLINK_ACTIVATED_TITLE','Activeer Multilink / Kopieerfunctie');
define('QUICKLINK_ACTIVATED_DESC','Maakt het mogelijk om meerdere categorie&euml;n te selecteren bij het uitvoeren van "kopieer product naar".');

define('ACTIVATE_REVERSE_CROSS_SELLING_TITLE','Omgekeerde Cross-Marketing');
define('ACTIVATE_REVERSE_CROSS_SELLING_DESC','omgekeerde cross-marketing functie activeren?');
define('ACTIVATE_CROSS_SELLING_TITLE','Cross-Marketing');
define('ACTIVATE_CROSS_SELLING_DESC','Activeer cross-marketing functie?');

define('DOWNLOAD_UNALLOWED_PAYMENT_TITLE', 'Niet toegestane Download-Betalingsmodule');
define('DOWNLOAD_UNALLOWED_PAYMENT_DESC', '<strong>NIET</strong> Toegestane betaalmodules voor downloads.Komma gescheiden lijst b.v. {banktransfer,cod,invoice,moneyorder}');
define('DOWNLOAD_MIN_ORDERS_STATUS_TITLE', 'Min. Bestelstatus');
define('DOWNLOAD_MIN_ORDERS_STATUS_DESC', 'Min. Bestelstatus, om downloads toe te staan.');

// Vat ID
define('STORE_OWNER_VAT_ID_TITLE' , 'BTW ID van Shopeigenaar');
define('STORE_OWNER_VAT_ID_DESC' , 'Het BTW reg.nr van uw onderneming');
define('DEFAULT_CUSTOMERS_VAT_STATUS_ID_TITLE' , 'Klanten Groep Goedgekeurde BTW Reg Nr (buitenland)');
define('DEFAULT_CUSTOMERS_VAT_STATUS_ID_DESC' , 'Klanten groep voor klanten waarvan het BTW-Reg Nr is gecontroleerd en goedgekeurd, shop land <> klanten land');
define('ACCOUNT_COMPANY_VAT_CHECK_TITLE' , 'BTW nr controleren');
define('ACCOUNT_COMPANY_VAT_CHECK_DESC' , 'Valideer BTW reg.ID (controleer de correcte syntax)');
define('ACCOUNT_COMPANY_VAT_LIVE_CHECK_TITLE' , 'BTW ID Live controleren');
define('ACCOUNT_COMPANY_VAT_LIVE_CHECK_DESC' , 'BTW reg.ID live controleren (indien geen syntax check land voorhanden), live check zal gebruik maken van validatie gateway van German "Bundesamt f&uuml;r Finanzen"');
define('ACCOUNT_COMPANY_VAT_GROUP_TITLE' , 'Automatisch aanpassen?');
define('ACCOUNT_COMPANY_VAT_GROUP_DESC' , 'Door deze optie op true te zetten wordt de de klantengroep automatisch gewijzigd indien een geldig BTW ID is gebruikt');
define('ACCOUNT_VAT_BLOCK_ERROR_TITLE' , 'Toestaan van onjuiste BTW ID Reg.Nr.?');
define('ACCOUNT_VAT_BLOCK_ERROR_DESC' , 'Door deze optie op true te zetten worden enkel een geldig BTW Reg. Nr.geaccepteerd');
define('DEFAULT_CUSTOMERS_VAT_STATUS_ID_LOCAL_TITLE','Klanten Groepen - Goedgekeurde BTW Reg. Nr.(binnenland)');
define('DEFAULT_CUSTOMERS_VAT_STATUS_ID_LOCAL_DESC','Klanten groep voor klanten waarvan het BTW-Reg Nr is gecontroleerd en goedgekeurd, shop land = klanten land');

// Google Conversion
define('GOOGLE_CONVERSION_TITLE','Google Conversion-Tracking');
define('GOOGLE_CONVERSION_DESC','Track Conversions-Keywords bij Bestellingen');
define('GOOGLE_CONVERSION_ID_TITLE','Conversion ID');
define('GOOGLE_CONVERSION_ID_DESC','Uw Google Conversion ID');
define('GOOGLE_LANG_TITLE','Google Taal');
define('GOOGLE_LANG_DESC','ISO Code van de gebruikte taal');
define('GOOGLE_CONVERSION_LABEL_TITLE','Google-omzettingslabel');
define('GOOGLE_CONVERSION_LABEL_DESC','Uw Google-omzettingslabel');

// Afterbuy
define('AFTERBUY_ACTIVATED_TITLE','Aktief');
define('AFTERBUY_ACTIVATED_DESC','Activeer Afterbuy module');
define('AFTERBUY_PARTNERID_TITLE','Partner ID');
define('AFTERBUY_PARTNERID_DESC','Uw Afterbuy Partner ID');
define('AFTERBUY_PARTNERPASS_TITLE','Partner Wachtwoord');
define('AFTERBUY_PARTNERPASS_DESC','Uw Partner Wachtwoord voor Afterbuy XML module');
define('AFTERBUY_USERID_TITLE','User ID');
define('AFTERBUY_USERID_DESC','Uw Afterbuy user ID');
define('AFTERBUY_ORDERSTATUS_TITLE','Bestelstatus');
define('AFTERBUY_ORDERSTATUS_DESC','Bestelstatus na gelukte bestelling');
define('AFTERBUY_URL','Gedetailleerde info over Afterbuy is hier te vinden: <a href="http://www.xt-commerce.com/modules/wfsection/dossier-65.html" target="new">http://www.xt-commerce.com/modules/wfsection/dossier-65.html</a>');
define('AFTERBUY_DEALERS_TITLE', 'markeren als dealer');
define('AFTERBUY_DEALERS_DESC', 'Voorbeeld: <em>6,5,8</em>');
define('AFTERBUY_IGNORE_GROUPE_TITLE', 'Klantengroep onwetendheid');
define('AFTERBUY_IGNORE_GROUPE_DESC', 'Voorbeeld: <em>6,5,8</em>.');

// Search-Options
define('SEARCH_MIN_LENGTH_TITLE', 'Zoek aantal karakters');
define('SEARCH_MIN_LENGTH_DESC', 'Minimum aantal tekens voor het zoeken');
define('SEARCH_IN_DESC_TITLE','Zoeken in Artikelomschrijvingen');
define('SEARCH_IN_DESC_DESC','Activeren om zoeken in artikelbeschrijvingen mogelijk te maken');
define('SEARCH_IN_ATTR_TITLE','Zoeken in Artikel- Opties');
define('SEARCH_IN_ATTR_DESC','Activeren om zoeken in Artikelopties (b.v. Kleur, Lengte) mogelijk te maken');
define('SEARCH_IN_MANU_TITLE','Zoeken in productfabrikanten');
define('SEARCH_IN_MANU_DESC','Neem de fabrikanten van de producten op bij het zoeken');

define('ADMIN_SEARCH_IN_DESC_TITLE','Zoek in productbeschrijvingen');
define('ADMIN_SEARCH_IN_DESC_DESC','Neem productbeschrijvingen op bij het zoeken');
define('ADMIN_SEARCH_IN_ATTR_TITLE','Zoeken in productkenmerken');
define('ADMIN_SEARCH_IN_ATTR_DESC','Neem de productattributen op bij het zoeken');

// changes for 3.0.4 SP2
define('REVOCATION_ID_TITLE','Herroepingsrecht ID');
define('REVOCATION_ID_DESC','Content ID van herroepingsrecht');
define('DISPLAY_REVOCATION_ON_CHECKOUT_TITLE','Weergave Herroepingsrecht?');
define('DISPLAY_REVOCATION_ON_CHECKOUT_DESC','Herroepingsrecht weergeven op checkout_bevestiging?');

// BOF - web28 - 2010-05-07 - PayPal API Modul
define('PAYPAL_MODE_TITLE','PayPal-Modus:');
define('PAYPAL_MODE_DESC','Live (Normaal) of Test (Sandbox)');
define('PAYPAL_API_USER_TITLE','PayPal-API-User (Live)');
define('PAYPAL_API_USER_DESC','Geef hier gebruikersnaam in.');
define('PAYPAL_API_PWD_TITLE','PayPal-API-Wachtwoord (Live)');
define('PAYPAL_API_PWD_DESC','Geef hier wachtwoord in.');
define('PAYPAL_API_SIGNATURE_TITLE','PayPal-API-Signatuur (Live)');
define('PAYPAL_API_SIGNATURE_DESC','Geef hier API Signatuur in (live)');
define('PAYPAL_API_SANDBOX_USER_TITLE','PayPal-API-Gebruiker (Sandbox)');
define('PAYPAL_API_SANDBOX_USER_DESC','Geef hier gebruikersnaam in (sandbox).');
define('PAYPAL_API_SANDBOX_PWD_TITLE','PayPal-API-Wachwoord (Sandbox)');
define('PAYPAL_API_SANDBOX_PWD_DESC','Geef hier wachtwoord in (sandbox)');
define('PAYPAL_API_SANDBOX_SIGNATURE_TITLE','PayPal-API-Signatuur (Sandbox)');
define('PAYPAL_API_SANDBOX_SIGNATURE_DESC','Geef hier API Signatuur in (sandbox)');
define('PAYPAL_API_VERSION_TITLE','PayPal-API-Version');
define('PAYPAL_API_VERSION_DESC','Geef hier PayPal API Version in - b.v.: 62.0');
define('PAYPAL_API_IMAGE_TITLE','PayPal Shop-Logo');
define('PAYPAL_API_IMAGE_DESC','Vul de naam van het logo-bestand in welke weergegeven dient te worden met PayPal <br />Attentie: Alleen weergeven als de shop gebruik maakt van SSL.<br />Afbeelding mag max. 750px breed en 90px hoog zijn.<br />Het logo bestand wordt aangeroepen vanuit: '.DIR_WS_CATALOG.'templates/'.CURRENT_TEMPLATE.'/img/');
define('PAYPAL_API_CO_BACK_TITLE','PayPal Achtergrond Kleur');
define('PAYPAL_API_CO_BACK_DESC','Geef hier de achtergrondkleur op welke bij PayPal weergegeven dient te worden. b.v. FEE8B9');
define('PAYPAL_API_CO_BORD_TITLE','PayPal Rand Kleur');
define('PAYPAL_API_CO_BORD_DESC','Geef hier de randkleur op welke bij PayPal weergegeven dient te worden. b.v. E4C558');
define('PAYPAL_ERROR_DEBUG_TITLE','PayPal Fout Melding');
define('PAYPAL_ERROR_DEBUG_DESC','PayPal foutmelding weergeven? default=false');
define('PAYPAL_ORDER_STATUS_TMP_ID_TITLE','Bestelstatus "annuleren"');
define('PAYPAL_ORDER_STATUS_TMP_ID_DESC','Kies de bestel status voor een afgebroken transactie (b.v. PayPal afbreken)');
define('PAYPAL_ORDER_STATUS_SUCCESS_ID_TITLE','Bestelstatus OK');
define('PAYPAL_ORDER_STATUS_SUCCESS_ID_DESC','Kies de bestel status voor een succesvolle transactie (b.v. Open PP betaald)');
define('PAYPAL_ORDER_STATUS_PENDING_ID_TITLE','Bestelstatus "in afwachting van"');
define('PAYPAL_ORDER_STATUS_PENDING_ID_DESC','Kies de bestelstatus voor een transactie welke nog niet volledig is verwerkt door PayPal (b.v. Open PP wachten)');
define('PAYPAL_ORDER_STATUS_REJECTED_ID_TITLE','Bestelstatus "geweigerd"');
define('PAYPAL_ORDER_STATUS_REJECTED_ID_DESC','Kies de bestelstatus voor een geweigerde transactie (b.v. PayPal geweigerd)');
define('PAYPAL_COUNTRY_MODE_TITLE','PayPal-Landmodus');
define('PAYPAL_COUNTRY_MODE_DESC','Kies een landmodus.Sommige PayPal functies zijn alleen beschikbaar in de U.K. (b.v. DirectPayment )');
define('PAYPAL_EXPRESS_ADDRESS_CHANGE_TITLE','PayPal-Express-Adresdata');
define('PAYPAL_EXPRESS_ADDRESS_CHANGE_DESC','Staat veranderen van adresgegevens toe overgedragen door PayPal');
define('PAYPAL_EXPRESS_ADDRESS_OVERRIDE_TITLE','Overschrijven van afleveradres');
define('PAYPAL_EXPRESS_ADDRESS_OVERRIDE_DESC','Staat veranderen van adresgegevens toe overgedragen door PayPal (bestaand account)');
define('PAYPAL_INVOICE_TITLE','Winkelvoorvoegsel voor PayPal-factuurnummer.');
define('PAYPAL_INVOICE_DESC','Willekeurige reeks letters (prefix), die voor elk ordernummer wordt geplaatst en wordt gebruikt voor het genereren van het PayPal-factuurnummer.<br />Hiermee kunnen meerdere winkels worden bediend met slechts één PayPal-rekening. Conflicten met betrekking tot de bestelnummers worden vermeden. Elke bestelling heeft zijn eigen factuurnummers binnen de PayPal-rekening.');
define('PAYPAL_BRANDNAME_TITLE','PayPal-winkelnaam');
define('PAYPAL_BRANDNAME_DESC','Voer de naam in die bij PayPal moet worden weergegeven.');
// EOF - Tomcraft - 2009-10-03 - Paypal Express Modul

// BOF - Tomcraft - 2009-11-02 - New admin top menu
define('USE_ADMIN_TOP_MENU_TITLE' , 'Admin Top Navigatie');
define('USE_ADMIN_TOP_MENU_DESC' , 'Admin Top Navigatie activeren?');
// EOF - Tomcraft - 2009-11-02 - New admin top menu

// BOF - Tomcraft - 2009-11-02 - Admin language tabs
define('USE_ADMIN_LANG_TABS_TITLE' , 'Taaltabs bij Categorie&euml;n/Artikelen');
define('USE_ADMIN_LANG_TABS_DESC' , 'Gebruik taaltabs bij categorie&euml;n / artikelen?');
// EOF - Tomcraft - 2009-11-02 - Admin language tabs

// BOF - Hendrik - 2010-08-11 - Thumbnails in admin products list
define('USE_ADMIN_THUMBS_IN_LIST_TITLE' , 'Beeld van de productlijst van de beheerder');
define('USE_ADMIN_THUMBS_IN_LIST_DESC' , 'Een extra kolom tonen in de lijst met producten van de Admin met afbeeldingen van de categorie&euml;n / producten?');
define('USE_ADMIN_THUMBS_IN_LIST_STYLE_TITLE', 'Admin productenlijst afbeeldingen CSS-stijl');
define('USE_ADMIN_THUMBS_IN_LIST_STYLE_DESC', 'Hier moet eenvoudig CSS-stijlinformatie worden ingevoerd - bijvoorbeeld de maximale breedte: max. breedte: 90px;');// EOF - Hendrik - 2010-08-11 - Thumbnails in admin products list
// EOF - Hendrik - 2010-08-11 - Thumbnails in admin products list

// BOF - Tomcraft - 2009-11-05 - Advanced contact form
define('USE_CONTACT_EMAIL_ADDRESS_TITLE' , 'Contactformulier - Verzendoptie');
define('USE_CONTACT_EMAIL_ADDRESS_DESC' , '"Gebruik "Neem Contact met ons op" e-mail adres om contact formulier te verzenden (belangrijk voor Hosters zoals b.v. Hosteurope)');
// EOF - Tomcraft - 2009-11-05 - Advanced contact form

// BOF - Dokuman - 2010-02-04 - delete cache files in admin section
define('DELETE_CACHE_SUCCESSFUL', 'Cache met succes verwijderd.');
define('DELETE_TEMP_CACHE_SUCCESSFUL', 'Templatecache met succes verwijderd.');
// EOF - Dokuman - 2010-02-04 - delete cache files in admin section

// BOF - web28 - 2010-08-17 -  Beeldgrooteberekning van kleine afbeeldingen
define('PRODUCT_IMAGE_NO_ENLARGE_UNDER_DEFAULT_TITLE','Schalen van afbeeldingen met lage resolutie');
define('PRODUCT_IMAGE_NO_ENLARGE_UNDER_DEFAULT_DESC','Activeer de instelling <strong>false</strong> om te voorkomen dat productafbeeldingen met lage resolutie naar de ingestelde standaard hoogte en breedte geschaald worden. Activeert u de instelling <strong>true</strong> worden ook afbeeldingen met lage resolutie naar de ingestelde standaard hoogte en breedte geschaald. In dit geval kunnen deze afbeeldingen echter zeer onscherp en gepixeld getoond worden.');
// EOF - web28 - 2010-08-17 -  Beeldgrooteberekning van kleine afbeeldingen

//BOF - hendrik - 2011-05-14 - independent invoice number and date
//define('IBN_BILLNR_TITLE', 'Next invoice number');
//define('IBN_BILLNR_DESC', 'When assigning an invoice number, this number is given next.');
//define('IBN_BILLNR_FORMAT_TITLE', 'Invoice number format');
//define('IBN_BILLNR_FORMAT_DESC', 'Format invoice number.: {n}=number, {d}=day, {m}=month, {y}=year, <br>example. "100{n}-{d}-{m}-{y}" => "10099-28-02-2007"');
//EOF - hendrik - 2011-05-14 - independent invoice number and date

//BOC - h-h-h - 2011-12-23 - Button "Buy Now" optional - default off
define('SHOW_BUTTON_BUY_NOW_TITLE', 'Toon "Nu kopen" in de produktlijsten');
define('SHOW_BUTTON_BUY_NOW_DESC', '<b>Attentie:</b><br /> Dit kan tot juridische problemen leiden als de klant niet alle belangrijke informatie al in de productlijst getoond wordt.!');
//EOC - h-h-h - 2011-12-23 - Button "Buy Now" optional - default off

//split page results
define('MAX_DISPLAY_ORDER_RESULTS_TITLE', 'Aantal bestellingen per pagina');
define('MAX_DISPLAY_ORDER_RESULTS_DESC', 'Maximaal aantal orders dat per pagina in het raster moet worden weergegeven.');
define('MAX_DISPLAY_LIST_PRODUCTS_TITLE', 'Aantal producten per pagina');
define('MAX_DISPLAY_LIST_PRODUCTS_DESC', 'Maximaal aantal producten dat per pagina in het raster moet worden weergegeven.');
define('MAX_DISPLAY_LIST_CUSTOMERS_TITLE', 'Aantal klanten per pagina');
define('MAX_DISPLAY_LIST_CUSTOMERS_DESC', 'Maximaal aantal klanten dat per pagina in het raster wordt weergegeven.');
define ('MAX_ROW_LISTS_ATTR_OPTIONS_TITLE', 'Productopties: Aantal Productopties per pagina');
define ('MAX_ROW_LISTS_ATTR_OPTIONS_DESC', 'Maximaal aantal weer te geven productopties per pagina.');
define ('MAX_ROW_LISTS_ATTR_VALUES_TITLE', 'Productopties: Aantal Optiewaarden per pagina');
define ('MAX_ROW_LISTS_ATTR_VALUES_DESC', 'Maximaal aantal weer te geven optiewaarden per pagina.');
define('MAX_DISPLAY_STATS_RESULTS_TITLE', 'Aantal statistische resultaten per pagina');
define('MAX_DISPLAY_STATS_RESULTS_DESC', 'Maximaal aantal weer te geven statistische resultaten per pagina.');
define('MAX_DISPLAY_COUPON_RESULTS_TITLE', 'Aantal coupons per pagina');
define('MAX_DISPLAY_COUPON_RESULTS_DESC', 'Maximaal aantal weer te geven coupons per pagina.');

// Whos online
define ('WHOS_ONLINE_TIME_LAST_CLICK_TITLE', 'Wie is er online? - Weergaveperiode in seconden.');
define ('WHOS_ONLINE_TIME_LAST_CLICK_DESC', 'Timing van online gebruikers in de "Who\'s Online" tabel, waarna de gegevens worden verwijderd (min. waarde: 900).');

//Sessions
define('SESSION_LIFE_ADMIN_TITLE', 'Levensduur admin-sessie: ');
define('SESSION_LIFE_ADMIN_DESC', 'Tijd in seconden wanneer een admin-sessie door uitloggen beeindigt wordt - standaard 7200 ');
define('SESSION_LIFE_CUSTOMERS_TITLE', 'Levensduur klant-sessie:');
define ('SESSION_LIFE_CUSTOMERS_DESC', 'Tijd in seconden voor het verstrijken van de sessietijd voor klanten (uitloggen) - Standaard 1440<br />De ingevoerde waarde wordt alleen toegepast als de sessieverwerking op db gebaseerd is (configure.php => define(\'STORE_SESSIONS\', \'mysql\');)<br />Maximale waarde: 14400');

//checkout confirmation options
define('CHECKOUT_USE_PRODUCTS_SHORT_DESCRIPTION_TITLE','Orderbevestigingspagina: korte beschrijving');
define('CHECKOUT_USE_PRODUCTS_SHORT_DESCRIPTION_DESC','Moet op de orderbevestigingspagina de korte beschrijving van het product getoond worden? Hint: de korte beschrijving wordt getoond als er GEEN artikelbeschrijving is. Met false wordt de korte omschrijving definitief niet getoond!');
define('CHECKOUT_USE_PRODUCTS_DESCRIPTION_FALLBACK_LENGTH_TITLE','Lengte van de beschrijving wanneer de korte beschrijving leeg is');
define('CHECKOUT_USE_PRODUCTS_DESCRIPTION_FALLBACK_LENGTH_DESC','Van welke lengte moet de beschrijving worden afgeknipt als er geen korte beschrijving is?');
define('CHECKOUT_SHOW_PRODUCTS_IMAGES_TITLE','Orderbevestigingspagina: productafbeeldingen');
define('CHECKOUT_SHOW_PRODUCTS_IMAGES_DESC','Moeten op de orderbevestigingspagina de afbeeldingen van de producten getoond worden?');
define('CHECKOUT_SHOW_PRODUCTS_MODEL_TITLE','Orderbevestigingspagina: artikelnr.');
define('CHECKOUT_SHOW_PRODUCTS_MODEL_DESC','Moet op de orderbevestigingspagina het artikelnummer van het product getoond worden?');

// email billing attachments
define('EMAIL_BILLING_ATTACHMENTS_TITLE', 'Facturering - E-Mail attachements voor bestellingen');
define('EMAIL_BILLING_ATTACHMENTS_DESC', 'Voorbeeld voor attachements - de bestanden zijn in het shop-directory <b>pdf</b>. Meerdere attachements met komma of spatue scheiden:<br /> pdf/agb.pdf,pdf/widerruf.pdf');

// email images
define('SHOW_IMAGES_IN_EMAIL_TITLE', 'Produktafbeeldingen in bestel - e-mail invoegen');
define('SHOW_IMAGES_IN_EMAIL_DESC', 'Produktafbeeldingen in de HTML-orderbestiging invoegen (verhoogt de kans dat de e-mail als SPAM beschouwd wordt)');
define('SHOW_IMAGES_IN_EMAIL_DIR_TITLE', 'Map vooor e-mail afbeeldingen ');
define('SHOW_IMAGES_IN_EMAIL_DIR_DESC', 'Keuze van de map met de afbeeldingen voor e-mails');
define('SHOW_IMAGES_IN_EMAIL_STYLE_TITLE', 'E-mail afbeeldingen CSS-Style');
define('SHOW_IMAGES_IN_EMAIL_STYLE_DESC', 'Hier kunnen eenvoudige CSS Style tags ingevoerd worden, bijv. voor de maximale breedte: max-width:90px;');

//popup windows configuration
define('POPUP_SHIPPING_LINK_PARAMETERS_TITLE', 'Vrachtkosten popup venster url-parameter');
define('POPUP_SHIPPING_LINK_PARAMETERS_DESC', 'Hier kunnen de url-parameters ingevoerd worden - standaard: &KeepThis=true&TB_iframe=true&height=400&width=600');
define('POPUP_SHIPPING_LINK_CLASS_TITLE', 'Vrachtkosten popup venster css-class');
define('POPUP_SHIPPING_LINK_CLASS_DESC', 'Hier kande css-class ingevoerd worden - standaard: thickbox');
define('POPUP_CONTENT_LINK_PARAMETERS_TITLE', 'Content-paginas popup venster url-parameter');
define('POPUP_CONTENT_LINK_PARAMETERS_DESC', 'Hier kunnen de url-parameters ingevoerd worden - standaard: &KeepThis=true&TB_iframe=true&height=400&width=600');
define('POPUP_CONTENT_LINK_CLASS_TITLE', 'Content-paginas popup venster css-class');
define('POPUP_CONTENT_LINK_CLASS_DESC', 'Hier kande css-class ingevoerd worden - standaard: thickbox');
define('POPUP_PRODUCT_LINK_PARAMETERS_TITLE', 'Product-paginas popup venster url-parameter');
define('POPUP_PRODUCT_LINK_PARAMETERS_DESC', 'Hier kunnen de url-parameters ingevoerd worden - standaard: &KeepThis=true&TB_iframe=true&height=450&width=750');
define('POPUP_PRODUCT_LINK_CLASS_TITLE', 'Product-paginas popup venster css-class');
define('POPUP_PRODUCT_LINK_CLASS_DESC', 'Hier kande css-class ingevoerd worden - standaard: thickbox');
define('POPUP_COUPON_HELP_LINK_PARAMETERS_TITLE', 'Coupon help popup venster url-parameter');
define('POPUP_COUPON_HELP_LINK_PARAMETERS_DESC', 'Hier kunnen de url-parameters ingevoerd worden - standaard: &KeepThis=true&TB_iframe=true&height=400&width=600');
define('POPUP_COUPON_HELP_LINK_CLASS_TITLE', 'Coupon help popup venster css-class');
define('POPUP_COUPON_HELP_LINK_CLASS_DESC', 'Hier kande css-class ingevoerd worden - standaard: thickbox');

define('POPUP_PRODUCT_PRINT_SIZE_TITLE', 'Product printweergave venstergrootte');
define('POPUP_PRODUCT_PRINT_SIZE_DESC', 'Hier kan de grootte van het popup venster ingevoerd worden - standaard: width=640, height=600');
define('POPUP_PRINT_ORDER_SIZE_TITLE', 'Bestelling printweergave venstergrootte');
define('POPUP_PRINT_ORDER_SIZE_DESC', 'Hier kan de grootte van het popup venster ingevoerd worden - standaard: width=640, height=600');

// BOF - Dokuman - 2012-08-27 - added entries for new google analytics & piwik tracking
define('TRACKING_COUNT_ADMIN_ACTIVE_TITLE' , 'Tel de bezoeken van de shop eigenaar mee');
define('TRACKING_COUNT_ADMIN_ACTIVE_DESC' , 'Als deze optie geactiveerd wordt worden ook de bezoeken van de shopeigenaar mee geteld die (vanwege de regelmatige eigen bezoeken op de shop) de statistiek kunnen verfalsen.');
define('TRACKING_GOOGLEANALYTICS_ACTIVE_TITLE' , 'Google Analytics Tracking activeren');
define('TRACKING_GOOGLEANALYTICS_ACTIVE_DESC' , 'Als deze optie aangezet wordt worde alle pagina requests aan Google Analytics doorgegeven en kunnen later verwerkt worden. Hiervoor is een account bij <a href="http://www.google.com/analytics/" target="_blank"><b>Google Analytics</b></a> vereist.');
define('TRACKING_GOOGLEANALYTICS_ID_TITLE' , 'Google Analytics account-nummer');
define('TRACKING_GOOGLEANALYTICS_ID_DESC' , 'Voer hier het Google Analytics accountnummer in het formaat "UA-XXXXXXXX-X" in. U krijt dit nummer als uw account succesvol is aangemaakt.');
define('TRACKING_PIWIK_ACTIVE_TITLE' , 'PIWIK Web-Analytics tracking activeren');
define('TRACKING_PIWIK_ACTIVE_DESC' , 'Om PIWIK te kunnen gebruiken moet u het eerst downloaden en op uw webspace installeren, zie ook <a href="http://http://de.piwik.org/" target="_blank"><b>PIWIK Web-Analytics</b></a>. In tegenstelling tot Google Analytics worden de gegevens locaal opgeslagen, dus u als shop eigenaar heeft de controle over de gegevens.');
define('TRACKING_PIWIK_LOCAL_PATH_TITLE' , 'PIWIK installatie-map (zonder "http://")');
define('TRACKING_PIWIK_LOCAL_PATH_DESC' , 'Voer hier de map in nadat PIWIK succesvol geinstalleerd is. Als pad moet hier de complete domeinnaam zonder "http://" ingevoerd worden, bijv. "www.domain.nl/piwik".');
define('TRACKING_PIWIK_ID_TITLE' , 'PIWIK pagina-ID');
define('TRACKING_PIWIK_ID_DESC' , 'In het PIWIK administratie-gedeelte wordt aan elke ingevoerde domein een ID toegekennt (meestal "1")');
define('TRACKING_PIWIK_GOAL_TITLE' , 'PIWIK Campagne-nummer (optioneel)');
define('TRACKING_PIWIK_GOAL_DESC' , 'Voer hier het campagne-nummer in als u vooraf gedefinieerde doelen wilt traceren. Voor details kijk op <a href="http://piwik.org/docs/tracking-goals-web-analytics/" target="_blank"><b>PIWIK: Tracking Goal Conversions</b></a>');
// EOF - Dokuman - 2012-08-27 - added entries for new google analytics & piwik tracking

define('CONFIRM_SAVE_ENTRY_TITLE', 'Bevestiging bij het opslaan van artikelen/categorieen');
define('CONFIRM_SAVE_ENTRY_DESC', 'Moet bij het opslaan van producten en categorieen om een bevestiging gevraagd worden? Standaard: true (ja)');

define('WHOS_ONLINE_IP_WHOIS_SERVICE_TITLE', 'Wie is online - Whois Lookup URL');
define('WHOS_ONLINE_IP_WHOIS_SERVICE_DESC', 'http://www.utrace.de/?query= of http://whois.domaintools.com/');

define('STOCK_CHECKOUT_UPDATE_PRODUCTS_STATUS_TITLE', 'Voltooiing van de bestelling - uitschakelen Uitverkocht?');
define('STOCK_CHECKOUT_UPDATE_PRODUCTS_STATUS_DESC', 'Als een uitverkocht artikel (voorraad 0) aan het einde van de bestelling automatisch wordt uitgeschakeld? Dan is het artikel niet meer zichtbaar in de winkel! <br /> Op Producten zijn binnenkort weer beschikbaar, de optie moet worden ingesteld op "false".');

define('SEND_EMAILS_DOUBLE_OPT_IN_TITLE','Double-Opt-In voor de registratie van de nieuwsbrief.');
define('SEND_EMAILS_DOUBLE_OPT_IN_DESC','Indien "true" zal een e-mail worden verstuurd waar de registratie moet worden bevestigd. Dit werkt alleen als send eMails is geactiveerd.');

define('USE_ADMIN_FIXED_TOP_TITLE', 'Fixeer admin pagina header?'); 
define('USE_ADMIN_FIXED_TOP_DESC', 'Zal de kop van de pagina altijd zichtbaar zijn bij het scrollen?');
define('USE_ADMIN_FIXED_SEARCH_TITLE', 'Altijd de admin-zoekbalk weergeven?'); 
define('USE_ADMIN_FIXED_SEARCH_DESC', 'Zal de admin-zoekbalk altijd zichtbaar zijn?');

define('SMTP_SECURE_TITLE' , 'SMTP SECURE');
define('SMTP_SECURE_DESC' , 'Heeft de SMTP-server een beveiligde verbinding nodig? Neem dan contact op met uw ISP voor de juiste instellingen.');

define('DISPLAY_ERROR_REPORTING_TITLE', 'Foutrapportage');
define('DISPLAY_ERROR_REPORTING_DESC', 'Weergave geformatteerde foutrapportage in de voettekst?');

define('DISPLAY_BREADCRUMB_OPTION_TITLE', 'Broodkruimelnavigatie');
define('DISPLAY_BREADCRUMB_OPTION_DESC', '<strong>Naam:</strong> In de kruimelnavigatie wordt de artikelnaam weergegeven.<br /><strong>model:</strong> In de kruimelnavigatie wordt het itemnummer weergegeven als het beschikbaar is. Anders wordt teruggevallen op de artikelnaam.');

define('EMAIL_WORD_WRAP_TITLE', 'WordWrap voor text-mails');
define('EMAIL_WORD_WRAP_DESC', 'Vermeld het aantal karakters voor &eacute;&eacute;n regel in tekstberichten voordat de tekst wordt gewikkeld (alleen hele getallen).<br /><strong>Aandacht: </strong> Een karaktertelling van meer dan 76 kan ertoe leiden dat de winkelmails door SpamAssassin als SPAM worden gecategoriseerd.<br />Meer informatie <a href="http://wiki.apache.org/spamassassin/Rules/MIME_QP_LONG_LINE" target="_blank">hier</a>.');

//define('USE_PAGINATION_LIST_TITLE', 'Pagination List'); // Tomcraft - 2017-07-12 - Not used anymore since r10840, see: http://trac.modified-shop.org/ticket/1238
//define('USE_PAGINATION_LIST_DESC', 'Use a HTML list (ul / li Tag) for Pagination.<br/><b>Attention:</b> This only works with a shop version 2.0.0.0 compatible template!'); // Tomcraft - 2017-07-12 - Not used anymore since r10840, see: http://trac.modified-shop.org/ticket/1238

define('ORDER_STATUSES_FOR_SALES_STATISTICS_TITLE', 'Filter van verkoopverslagen');
define('ORDER_STATUSES_FOR_SALES_STATISTICS_DESC', 'Kies de orderstatus die in aanmerking moet worden genomen op de startpagina van de admin en in het verkooprapport bij het kiezen van "Filter verkooprapport" in de status dropdown.<br />(Om alleen het echte verkoopvolume weer te geven, kiest u de orderstatus voor voltooide orders.)<br /><b>Aanwijzing:</b> Om het "Filter verkooprapport" weer te geven in de status dropdown, moet u ten minste twee statussen kiezen. Anders kunt u direct de gewenste status kiezen in de dropdown.');

define('SAVE_IP_LOG_TITLE', 'IP-Adres opslaan');
define('SAVE_IP_LOG_DESC', 'Sla het IP-adres op in de database? <br/>Met de optie xxx is het IP-adres anoniem.');

define('META_MAX_KEYWORD_LENGTH_TITLE', 'Maximale lengte Meta-Keywords');
define('META_MAX_KEYWORD_LENGTH_DESC', 'Maximale lengte automatisch gegenereerde Meta-Keywords');
define('META_DESCRIPTION_LENGTH_TITLE', 'Lengte Meta-Beschrijving');
define('META_DESCRIPTION_LENGTH_DESC', 'Maximale lengte van de beschrijving (letters)');
define('META_STOP_WORDS_TITLE', 'Stopwoorden');
define('META_STOP_WORDS_DESC', 'Gelieve kommagescheiden trefwoorden in te voeren die niet zijn toegestaan.');
define('META_GO_WORDS_TITLE', 'Ga Woorden');
define('META_GO_WORDS_DESC', 'Gelieve kommagescheiden trefwoorden in te voeren die toegestaan zijn.');

//BOC added text constants for group id 20, noRiddle
define('CSV_CATEGORY_DEFAULT_TITLE','Categorie voor invoer');
define('CSV_CATEGORY_DEFAULT_DESC','Alle producten in het csv-importbestand die wel <b>niet</b> een categorie hebben gedefinieerd, worden in deze categorie ge&iuml;mporteerd.<br/><b>Let op:</b>Als u geen producten wilt importeren die geen categorie hebben gedefinieerd, selecteer dan categorie "Top", omdat het niet mogelijk is om in deze categorie te importeren.');
define('CSV_TEXTSIGN_TITLE','Tekstbord');
define('CSV_TEXTSIGN_DESC','b.v. " &nbsp; | &nbsp; <span style="color:#c00;"> In puntkomma als begrenzing dient de tekstkwalificatie te worden ingesteld op" </ span>');
define('CSV_SEPERATOR_TITLE','Seperator');
define('CSV_SEPERATOR_DESC','b.v. ; &nbsp; | &nbsp;<span Style="color:#c00;"> het invoerveld is standaard leeg gelaten is de uitvoer/invoer \\t (= tab) gebruikt </ span> ');
define('COMPRESS_EXPORT_TITLE','Compressie');
define('COMPRESS_EXPORT_DESC','Exporteerbestand comprimeren');
//BOC added constants for category depth, noRiddle
define('CSV_CAT_DEPTH_TITLE','Categorie diepte');
define('CSV_CAT_DEPTH_DESC','Hoe diep zal de categorieboom gaan? (bv. met standaard 4: hoofdcategorie plus 3 subcategorie&euml;n)<br />Deze indicatie is belangrijk om de in de CSV ge&iuml;ntegreerde categorie&euml;n goed te kunnen importeren. Hetzelfde geldt voor de exportfunctie.<br /><span style="color:#c00;">Meer dan 4 kan leiden tot prestatieverlies en is waarschijnlijk niet gebruiksvriendelijk!');
//EOC added constants for category depth, noRiddle
//EOC added text constants for group id 20, noRiddle

define('MIN_GROUP_PRICE_STAFFEL_TITLE', 'Bijkomende afgestudeerde prijs');
define('MIN_GROUP_PRICE_STAFFEL_DESC', 'Extra Graduated Price om te laten zien.');

define('MODULE_CAPTCHA_ACTIVE_TITLE', 'Activeer Captcha');
define('MODULE_CAPTCHA_ACTIVE_DESC', 'Voor welke winkelsecties moet de Captcha worden geactiveerd?');
define('MODULE_CAPTCHA_LOGGED_IN_TITLE', 'Aangemelde klanten');
define('MODULE_CAPTCHA_LOGGED_IN_DESC', 'Toon Captcha voor ingelogde klanten');
define('MODULE_CAPTCHA_LOGIN_NUM_TITLE', 'Aanmeldingspogingen');
define('MODULE_CAPTCHA_LOGIN_NUM_DESC', 'Aantal mislukte aanmeldingspogingen voordat de captcha wordt weergegeven.');
define('CAPTCHA_MOD_CLASS_TITLE', 'Captcha Module');
define('CAPTCHA_MOD_CLASS_DESC', 'Kies de Captcha-module om te gebruiken. Zorg ervoor dat de module ook is geïnstalleerd.');
define('CFG_TXT_MODIFIED_CAPTCHA', 'Standaard');
define('CFG_TXT_PHP_CAPTCHA', 'PhpCaptcha');

define('SHIPPING_STATUS_INFOS_TITLE', 'Verzendingstermijn');
define('SHIPPING_STATUS_INFOS_DESC', 'Selecteer de inhoud om informatie voor de verzendtijd weer te geven');

define('USE_SHORT_DATE_FORMAT_TITLE', 'Toon datum in het kort');
define('USE_SHORT_DATE_FORMAT_DESC', 'Toon altijd de datum in het kort: <b> 01/03/2014 </ b> in plaats daarvan <b> Zaterdag 01 maart 2014 </ b> <br /> Aanbevolen voor weergavefouten met het lange-datumformaat als onjuiste taal of speciale tekens!');

define('MAX_DISPLAY_PRODUCTS_CATEGORY_TITLE', 'Maximaal aantal producten');
define('MAX_DISPLAY_PRODUCTS_CATEGORY_DESC', 'Maximaal aantal producten van dezelfde categorie');
define('MAX_DISPLAY_ADVANCED_SEARCH_RESULTS_TITLE', 'Zoekresultaten');
define('MAX_DISPLAY_ADVANCED_SEARCH_RESULTS_DESC', 'Aantal producten in het zoekresultaat');
define('MAX_DISPLAY_PRODUCTS_HISTORY_TITLE' , 'Maximale Geschiedenis');
define('MAX_DISPLAY_PRODUCTS_HISTORY_DESC' , 'Maximaal bezochte producten in de accountgeschiedenis');

define('PRODUCT_IMAGE_SHOW_NO_IMAGE_TITLE', 'Product noimage.gif');
define('PRODUCT_IMAGE_SHOW_NO_IMAGE_DESC', 'Toon noimage.gif als er geen productafbeelding is toegewezen');
define('CATEGORIES_IMAGE_SHOW_NO_IMAGE_TITLE', 'Categorie noimage.gif');
define('CATEGORIES_IMAGE_SHOW_NO_IMAGE_DESC', 'Toon noimage.gif als er geen categorie afbeelding is toegewezen');
define('MANUFACTURER_IMAGE_SHOW_NO_IMAGE_TITLE', 'Fabrikant noimage.gif');
define('MANUFACTURER_IMAGE_SHOW_NO_IMAGE_DESC', 'Toon noimage.gif als er geen afbeelding van de fabrikant is toegewezen');

define('MODULE_SMALL_BUSINESS_TITLE', 'Kleine bedrijven');
define('MODULE_SMALL_BUSINESS_DESC', 'Zal de winkel worden omgeschakeld naar kleine bedrijven volgens &sect; 19 UStG.<br/><b>Belangrijk:</b> Onder "Modules" -> "Order Total" de module "ot_tax" moet worden uitgeschakeld of verwijderd <a href="'.xtc_href_link(FILENAME_MODULES, 'set=ordertotal&module=ot_tax').'"><b>hier</b></a>. Daarnaast moet u "Prijzen incl. belasting" op "Nee" zetten in de specifieke <a href="'.xtc_href_link(FILENAME_CUSTOMERS_STATUS, '').'"><b>afnemersgroepen</b></a>.');

define('COMPRESS_HTML_OUTPUT_TITLE', 'HTML-compressie');
define('COMPRESS_HTML_OUTPUT_DESC', 'HTML-uitvoer uit het sjabloon comprimeren?');
define('COMPRESS_STYLESHEET_TITLE', 'CSS-compressie');
define('COMPRESS_STYLESHEET_DESC', 'Stylesheet comprimeren? <br/><b>Aandacht: </b> Dit werkt alleen met een sjabloon dat compatibel is met de shopversie 2.0.0.0!');
define('COMPRESS_JAVASCRIPT_TITLE', 'JavaScript-compressie');
define('COMPRESS_JAVASCRIPT_DESC', 'JavaScript comprimeren? <br/><b>Aandacht: </b> Dit werkt alleen met een sjabloon dat compatibel is met shopversie 2.0.1.0!');

define('USE_ATTRIBUTES_IFRAME_TITLE', 'Attributen en functies in iframe');
define('USE_ATTRIBUTES_IFRAME_DESC', 'Open Attribuut- en Eigenschappenmanager in de Categorie / Productweergave in een iframe');

define('ADMIN_HEADER_X_FRAME_OPTIONS_TITLE', 'Admin Clickjacking Bescherming');
define('ADMIN_HEADER_X_FRAME_OPTIONS_DESC', 'Bescherm Adminarea met Header "X-Frame-Options: SAMEORIGIN"<br>Supported Browsers: FF 3.6.9+ Chrome 4.1.249.1042+ IE 8+ Safari 4.0+ Opera 10.50+ ');

define('SEND_MAIL_ACCOUNT_CREATED_TITLE', 'E-mail bij het aanmaken van een account');
define('SEND_MAIL_ACCOUNT_CREATED_DESC', 'Een e-mail naar de klant sturen bij het aanmaken van een account?');

define('STATUS_EMAIL_SENT_COPY_TO_ADMIN_TITLE', 'E-mail bij statuswijziging');
define('STATUS_EMAIL_SENT_COPY_TO_ADMIN_DESC', 'Een e-mail sturen naar de admin bij een statuswijziging van de bestelling?');

define('ORDER_EMAIL_SEND_COPY_TO_ADMIN_TITLE', 'E-mail orderbevestiging naar Admin');
define('ORDER_EMAIL_SEND_COPY_TO_ADMIN_DESC', 'Moet een kopie van de orderbevestiging naar de admin worden gestuurd?');

define('STOCK_CHECK_SPECIALS_TITLE', 'Controleer Specials Voorraad');
define('STOCK_CHECK_SPECIALS_DESC', 'Controleer of er voldoende specials op voorraad zijn<br/><br/><b>ATTENTIE:</b> Als er onvoldoende specials op voorraad zijn, kan de bestelling alleen worden verwerkt na een vermindering van de hoeveelheid.');

define('DOWNLOAD_SHOW_LANG_DROPDOWN_TITLE', 'Landen dropdown in winkelwagen');
define('DOWNLOAD_SHOW_LANG_DROPDOWN_DESC', 'Toon landen dropdown in winkelwagen als alleen download producten worden gekocht?');

define('GUEST_ACCOUNT_EDIT_TITLE', 'Gastaccounts bewerken');
define('GUEST_ACCOUNT_EDIT_DESC', 'gastaccounts in staat stellen om avvountdetails te zien en te bewerken?');

define('EMAIL_SIGNATURE_ID_TITLE', 'E-Mail handtekening');
define('EMAIL_SIGNATURE_ID_DESC', 'Selecteer de inhoud die gebruikt moet worden voor de handtekening in shop E-Mails.');

define('TEXT_PAYPAL_NOT_INSTALLED', '<div class="important_info">PayPal niet ge&iuml;nstalleerd. Dit kan worden gedaan <a href="'.xtc_href_link(FILENAME_MODULES, 'set=payment&module=paypal').'">hier</a>.</div>');

define('POLICY_MIN_LOWER_CHARS_TITLE', 'Wachtwoord kleine letters');
define('POLICY_MIN_LOWER_CHARS_DESC', 'Hoeveel kleine letters moeten er op zijn minst op het wachtwoord staan?');
define('POLICY_MIN_UPPER_CHARS_TITLE', 'Wachtwoord hoofdletters');
define('POLICY_MIN_UPPER_CHARS_DESC', 'Hoeveel hoofdletters moeten er op zijn minst op het wachtwoord staan?');
define('POLICY_MIN_NUMERIC_CHARS_TITLE', 'Wachtwoordnummers');
define('POLICY_MIN_NUMERIC_CHARS_DESC', 'Hoeveel numerieke tekens moet het wachtwoord op zijn minst hebben?');
define('POLICY_MIN_SPECIAL_CHARS_TITLE', 'Wachtwoord speciale tekens');
define('POLICY_MIN_SPECIAL_CHARS_DESC', 'Hoeveel speciale karakters moeten er minstens op het wachtwoord staan?');

define('SHOW_SHIPPING_EXCL_TITLE', 'Verzendkosten excl.');
define('SHOW_SHIPPING_EXCL_DESC', 'Toon excl. of incl. verzendkosten');

define('ACCOUNT_TELEPHONE_OPTIONAL_TITLE', 'Telefoonnummer optioneel');
define('ACCOUNT_TELEPHONE_OPTIONAL_DESC', 'Telefoonnummer alleen optioneel bij registratie?');

define('TRACKING_GOOGLEANALYTICS_UNIVERSAL_TITLE' , 'Google Universal Analytics');
define('TRACKING_GOOGLEANALYTICS_UNIVERSAL_DESC' , 'Gebruik Google Universal Analytics Code?<br/><b>Aandacht:</b> Dit werkt alleen met een shop versie 2.0.0.0 compatibel sjabloon!');
define('TRACKING_GOOGLEANALYTICS_DOMAIN_TITLE' , 'Google Universal Analytics Cookie Domein');
define('TRACKING_GOOGLEANALYTICS_DOMAIN_DESC' , 'Voer het Cookie-domein in (<i>auto</i> of <i>voorbeeld.com</i> of <i>www.example.com</i>). Werkt alleen met Google Universal Analytics.');
define('TRACKING_GOOGLE_LINKID_TITLE' , 'Google Universal Analytics/Google Analytics GTAG LinkID');
define('TRACKING_GOOGLE_LINKID_DESC' , 'U kunt afzonderlijke informatie zien over meerdere links op een pagina die allemaal hetzelfde doel hebben. Als er bijvoorbeeld twee links aan dezelfde kant staan, die beide naar de contactpagina leiden, zie je voor elke link aparte klikinformatie. Werkt alleen met Google Universal Analytics &amp; Google Analytics GTAG.');
define('TRACKING_GOOGLE_DISPLAY_TITLE' , 'Google Universal Analytics/Google Analytics GTAG Displayfeature');
define('TRACKING_GOOGLE_DISPLAY_DESC' , 'De gebieden voor demografie en belangen omvatten een overzicht en nieuwe rapporten over de prestaties per leeftijd, geslacht en belangencategorie&euml;n. Werkt alleen met Google Universal Analytics &amp; Google Analytics GTAG.');
define('TRACKING_GOOGLE_ECOMMERCE_TITLE' , 'Google E-Commerce Tracking');
define('TRACKING_GOOGLE_ECOMMERCE_DESC' , 'Zet een E-Commerce-tracking op om te weten te komen wat bezoekers van uw website of app kopen. Daarnaast ontvangt u de volgende informatie:<br><br><strong>Producten:</strong> Gekochte producten en de hoeveelheden en de opbrengsten van deze producten<br><strong>Transacties:</strong> Informatie over verkoop, belasting, verzendkosten en hoeveelheden voor elke transactie<br><strong>tijd tot Aankoop:</strong> Aantal dagen en bezoeken, vanaf de huidige campagne tot aan de voltooiing van de transactie');
define('TRACKING_GOOGLEANALYTICS_GTAG_TITLE' , 'Google Analytics GTAG');
define('TRACKING_GOOGLEANALYTICS_GTAG_DESC' , 'Google global Site Tag gebruiken?');

define('NEW_ATTRIBUTES_STYLING_TITLE', 'Attribuutmanager Styling');
define('NEW_ATTRIBUTES_STYLING_DESC', 'Styling van de checkboxen/dropdowns in de attribuutmanager inschakelen? Zet het op "Nee" als u problemen ondervindt met een groot aantal attributen en prestatieproblemen.');

define('DB_CACHE_TYPE_TITLE', 'Cache-motor');
define('DB_CACHE_TYPE_DESC', 'Kies een beschikbare motor voor caching');

define('META_PRODUCTS_KEYWORDS_LENGTH_TITLE', 'Lengte van extra woorden voor Zoeken');
define('META_PRODUCTS_KEYWORDS_LENGTH_DESC', 'Maximale lengte van extra woorden voor het zoeken (letters)');
define('META_KEYWORDS_LENGTH_TITLE', 'Lengte Meta-Keywords');
define('META_KEYWORDS_LENGTH_DESC', 'Maximale lengte van trefwoorden (letters)');
define('META_TITLE_LENGTH_TITLE', 'Lengte Meta-Titel');
define('META_TITLE_LENGTH_DESC', 'Maximale lengte van de titel (letters)');
define('META_CAT_SHOP_TITLE_TITLE', 'Winkeltitel categorie&euml;n');
define('META_CAT_SHOP_TITLE_DESC', 'Winkeltitel toevoegen aan categorie&euml;n?');
define('META_PROD_SHOP_TITLE_TITLE', 'Winkeltitel Producten');
define('META_PROD_SHOP_TITLE_DESC', 'Winkeltitel toevoegen aan producten?');
define('META_CONTENT_SHOP_TITLE_TITLE', 'Winkeltitel Inhoud');
define('META_CONTENT_SHOP_TITLE_DESC', 'Winkeltitel aan de inhoud toevoegen?');
define('META_SPECIALS_SHOP_TITLE_TITLE', 'Winkeltitel Specials');
define('META_SPECIALS_SHOP_TITLE_DESC', 'Shop-Title toevoegen aan Specials?');
define('META_NEWS_SHOP_TITLE_TITLE', 'Winkeltitel Nieuwe producten');
define('META_NEWS_SHOP_TITLE_DESC', 'Winkeltitel toevoegen aan nieuwe producten?');
define('META_SEARCH_SHOP_TITLE_TITLE', 'Winkeltitel zoeken');
define('META_SEARCH_SHOP_TITLE_DESC', 'Shop-Title toevoegen aan de zoekresultaten?');
define('META_OTHER_SHOP_TITLE_TITLE', 'Winkeltitel andere pagina\'s');
define('META_OTHER_SHOP_TITLE_DESC', 'Shop-Title alle andere pagina\'s toevoegen?');
define('META_GOOGLE_VERIFICATION_KEY_TITLE', 'Google Verificatiesleutel');
define('META_GOOGLE_VERIFICATION_KEY_DESC', '<meta name="google-site-verification">');
define('META_BING_VERIFICATION_KEY_TITLE', 'Bing Verificatie Sleutel');
define('META_BING_VERIFICATION_KEY_DESC', '<meta name="msvalidate.01">');

define('GOOGLE_CONVERSION_TITLE','Google Conversion Tracking');
define('GOOGLE_CONVERSION_DESC','Traceer trefwoorden voor conversie op orders');
define('GOOGLE_CONVERSION_ID_TITLE','Conversie-ID');
define('GOOGLE_CONVERSION_ID_DESC','Uw Google-conversie-ID');

define('TRACKING_FACEBOOK_ACTIVE_TITLE', 'Activeer Facebook conversie-tracking');
define('TRACKING_FACEBOOK_ACTIVE_DESC', 'Door het activeren van deze optie zullen alle aankopen worden voorgelegd aan Facebook voor latere evaluatie. Voordat u deze optie gebruikt, dient u zich te registreren bij <a href="https://www.facebook.com" target="_blank"><b>Facebook</b></a> en maak een nieuw account aan.<br/><b>Let op:</b> Dit werkt alleen met een shop versie 2.0.0.0 compatibel sjabloon!');
define('TRACKING_FACEBOOK_ID_TITLE', 'Facebook conversie-ID');
define('TRACKING_FACEBOOK_ID_DESC', 'Uw Facebook-conversie-ID');

define('NEW_SELECT_CHECKBOX_TITLE', 'Admin Styling');
define('NEW_SELECT_CHECKBOX_DESC', 'Styling gebruiken voor Checkboxes/Dropdowns?');
define('CSRF_TOKEN_SYSTEM_TITLE', 'Admin-tokensysteem');
define('CSRF_TOKEN_SYSTEM_DESC', 'Gebruik Token System in het admin-gedeelte? <br/><b>Aandacht: </b> Het Token System wordt gebruikt om het admin-gedeelte te beveiligen.');

define('DISPLAY_FILTER_INDEX_TITLE', 'Filterweergave per pagina - Producten');
define('DISPLAY_FILTER_INDEX_DESC', 'Voer de door komma\'s gescheiden waarden in voor de selectie. Voor alle producten voert u all.<br/>Bijvoorbeeld in: 3,12,27,alle');
define('DISPLAY_FILTER_SPECIALS_TITLE', 'Filterweergave per pagina - Specials');
define('DISPLAY_FILTER_SPECIALS_DESC', 'Voer de door komma\'s gescheiden waarden in voor de selectie. Voor alle producten voert u all.<br/>Bijvoorbeeld in: 3,12,27,alle');
define('DISPLAY_FILTER_PRODUCTS_NEW_TITLE', 'Filterweergave per pagina - Nieuwe producten');
define('DISPLAY_FILTER_PRODUCTS_NEW_DESC', 'Voer de door komma\'s gescheiden waarden in voor de selectie. Voor alle producten voer alle.<br/>Bijvoorbeeld: 3,12,27,alle');
define('DISPLAY_FILTER_ADVANCED_SEARCH_RESULT_TITLE', 'Filterweergave per pagina - Zoekresultaten');
define('DISPLAY_FILTER_ADVANCED_SEARCH_RESULT_DESC', 'Voer de door komma\'s gescheiden waarden in voor de selectie. Voor alle producten voer alle.<br/>Bijvoorbeeld: 4,12,32,alle');

define('USE_BROWSER_LANGUAGE_TITLE' , 'Schakel over naar de taal van de browser');
define('USE_BROWSER_LANGUAGE_DESC' , 'Automatisch overschakelen naar de browsertaal van de klant.');

define('WYSIWYG_SKIN_TITLE' , 'WYSIWYG Editor Skin');
define('WYSIWYG_SKIN_DESC' , 'Kies de huid voor de WYSIWYG-editor.');

define('CHECK_CHEAPEST_SHIPPING_MODUL_TITLE', 'Selecteer de goedkoopste verzendmethode');
define('CHECK_CHEAPEST_SHIPPING_MODUL_DESC', 'Zal de goedkoopste verzendmethode worden voorgeselecteerd bij de kassa van de klant?');

define('DISPLAY_PRIVACY_CHECK_TITLE', 'Teken privacyverklaring');
define('DISPLAY_PRIVACY_CHECK_DESC', 'Goedkeuring vragen voor privacyverklaring tijdens het aanmaken van een account, contactpagina, inschrijven voor de nieuwsbrief en afrekenen?)');

define('SHOW_SELFPICKUP_FREE_TITLE', 'Verzendingsmodule "Zelf afhalen" op "gratis verzending".');
define('SHOW_SELFPICKUP_FREE_DESC', 'Zal de verzendmodule "Zelf afhalen (selfpickup)" worden weergegeven bij het bereiken van het bedrag voor "gratis verzending" in de module "Verzending (ot_shipping)"?');

define('CHECK_FIRST_PAYMENT_MODUL_TITLE', 'Voorselectie van de eerste betaalmethode');
define('CHECK_FIRST_PAYMENT_MODUL_DESC', 'Zal de eerste betaalmethode worden voorgeselecteerd bij de kassa van de klant?');

define('ATTRIBUTES_VALID_CHECK_TITLE', 'Attribuut validatie');
define('ATTRIBUTES_VALID_CHECK_DESC', 'Controleert producten in klantenwagentje op attributen, die niet meer geldig zijn.<br/>(Dit kan gebeuren, als een klant na een lange tijd de winkel opnieuw bezoekt en een product van een eerder bezoek koopt dat in het winkelmandje is gebleven.)<br/><b>Aanwijzing:</b> Voor uitbreidingen die de attributen uitbreiden, zoals het tekstveld, moet deze controle worden uitgeschakeld.');

define('ATTRIBUTE_MODEL_DELIMITER_TITLE', 'Product-/Artribuut-nr. begrenzer');
define('ATTRIBUTE_MODEL_DELIMITER_DESC', 'Afbakening tussen productnummer &amp; kenmerk productnummer');

define('STORE_PAGE_PARSE_TIME_THRESHOLD_TITLE' , 'Drempel voor het opslaan van de paginaparseertijd');
define('STORE_PAGE_PARSE_TIME_THRESHOLD_DESC' , 'Bepaalt de drempel in seconden voor het opslaan van de paginaparseertijd.');

define('SEARCH_IN_FILTER_TITLE', 'Zoeken in productkenmerken');
define('SEARCH_IN_FILTER_DESC', 'Neem de productkenmerken op bij het zoeken');
define('SEARCH_AC_STATUS_TITLE','Autocompleet zoeken');
define('SEARCH_AC_STATUS_DESC','Activeer voor autoaanvullen zoeken<br/><b>Let op:</b> Dit werkt alleen met een shop versie 2.0.0.0.0 compatibel sjabloon!');
define('SEARCH_AC_MIN_LENGTH_TITLE', 'Autocompleet aantal tekens');
define('SEARCH_AC_MIN_LENGTH_DESC', 'Aantal tekens om de eerste zoekresultaten weer te geven<br/><b>Aandacht:</b> Dit werkt alleen met een sjabloon dat compatibel is met shopversie 2.0.0.0!');
define('SEARCH_AC_CATEGORIES_TITLE', 'Categorie&euml;n dropdown in zoekvak');
define('SEARCH_AC_CATEGORIES_DESC', 'Activeer voor het weergeven van een categorie&euml;n dropdown voor het zoekveld in het zoekveld.');

define('DISPLAY_PRIVACY_ON_CHECKOUT_TITLE', 'Toon privacyverklaring bij het afrekenen');
define('DISPLAY_PRIVACY_ON_CHECKOUT_DESC', 'Geef een extra privacyverklaring weer bij het afrekenen? <br/><b>Aandacht: </b> Als er een extra selectievakje wordt weergegeven, moet u "Privacyverklaring ondertekenen" instellen op "Ja".');
define('DISPLAY_REVOCATION_VIRTUAL_ON_CHECKOUT_TITLE', 'Herroepingsrecht weergeven voor Downloads');
define('DISPLAY_REVOCATION_VIRTUAL_ON_CHECKOUT_DESC', 'Een selectievakje weergeven om de klant te informeren dat het herroepingsrecht voor downloads vervalt?');
define('ORDER_STATUSES_DISPLAY_DEFAULT_TITLE', 'Bestellingen weergeven');
define('ORDER_STATUSES_DISPLAY_DEFAULT_DESC', 'Bestellingen met welke status worden standaard getoond?');

define('INVOICE_INFOS_TITLE', 'Factuurgegevens');
define('INVOICE_INFOS_DESC', 'Kies een inhoudelijke site. De inhoud wordt op de facturen weergegeven.');

define('CATEGORIES_SHOW_PRODUCTS_SUBCATS_TITLE', 'Toon producten uit subcategorieën');
define('CATEGORIES_SHOW_PRODUCTS_SUBCATS_DESC', 'Alle producten uit de subcategorieën in de productlijst weergeven?');

define('SEO_URL_MOD_CLASS_TITLE', 'URL-module');
define('SEO_URL_MOD_CLASS_DESC', 'Selecteer een URL-module.');

define('MODULE_BANNER_MANAGER_STATUS_TITLE', 'Banierenmanager');
define('MODULE_BANNER_MANAGER_STATUS_DESC', 'Banner Manager activeren?');

define('MODULE_NEWSLETTER_STATUS_TITLE', 'Nieuwsbrief');
define('MODULE_NEWSLETTER_STATUS_DESC', 'Nieuwsbriefsysteem activeren?');

define('GOOGLE_CERTIFIED_SHOPS_MERCHANT_ACTIVE_TITLE', 'Activeer Google Certified Shops Merchant');
define('GOOGLE_CERTIFIED_SHOPS_MERCHANT_ACTIVE_DESC', 'Gebruik Google Certified Shops Merchant? <br/><br/><b>Aandacht: </b> Dit werkt alleen met een sjabloon dat compatibel is met shopversie 2.0.1.0!');
define('GOOGLE_SHOPPING_ID_TITLE', 'Google Shopping ID');
define('GOOGLE_SHOPPING_ID_DESC', 'Uw Google-winkel-ID');
define('GOOGLE_TRUSTED_ID_TITLE', 'Google Vertrouwde ID');
define('GOOGLE_TRUSTED_ID_DESC', 'Uw Google vertrouwde ID');

define('EMAIL_ARCHIVE_ADDRESS_TITLE', 'Archief - E-Mail-Adres');
define('EMAIL_ARCHIVE_ADDRESS_DESC', 'Voer een e-mailadres in voor het archiveren van alle uitgaande e-mails. Dit wordt gebruikt om de e-mails via BCC naar een archiefbus te sturen.');

define('DISPLAY_HEADQUARTER_ON_CHECKOUT_TITLE', 'Bedrijfshoofdkwartier bij de kassa');
define('DISPLAY_HEADQUARTER_ON_CHECKOUT_DESC', 'Het bedrijfshoofdkwartier laten zien tijdens het afrekenen?');

define('MODULE_NEWSLETTER_VOUCHER_AMOUNT_TITLE', 'Nieuwsbrief Bonnenbedrag');
define('MODULE_NEWSLETTER_VOUCHER_AMOUNT_DESC', 'Voor de nieuwsbrief registratie cadeaubon plaats het bedrag, zet 0 voor geen bedrag.');
define('MODULE_NEWSLETTER_DISCOUNT_COUPON_TITLE', 'Nieuwsbrief Coupon Code');
define('MODULE_NEWSLETTER_DISCOUNT_COUPON_DESC', 'Voor de registratiecoupon voor de nieuwsbrief plaatst u de couponcode die u wilt gebruiken of laat u dit veld leeg om het uit te schakelen.');

define('ADMIN_START_TAB_SELECTED_TITLE', 'Tabbladen startpagina');
define('ADMIN_START_TAB_SELECTED_DESC', 'Welk tabblad op de startpagina moet standaard worden geselecteerd?');

define('CACHE_LIFETIME_NOTE', '<b>Let op:</b> Als de cache wordt geactiveerd, worden de veranderingen pas zichtbaar in de winkel na afloop van de levensduur van de cache!');
?>