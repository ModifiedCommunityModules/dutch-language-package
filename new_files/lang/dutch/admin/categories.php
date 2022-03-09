<?php
/* --------------------------------------------------------------
   $Id: categories.php 12455 2019-12-03 16:04:19Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   --------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(categories.php,v 1.22 2002/08/17); www.oscommerce.com
   (c) 2003	 nextcommerce (categories.php,v 1.10 2003/08/14); www.nextcommerce.org
   (c) 2006 xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License
   --------------------------------------------------------------*/
 
// BOF - Tomcraft - 2009-11-02 - Admin language tabs
//define('TEXT_EDIT_STATUS', 'Status');
define('TEXT_EDIT_STATUS', 'Status aktief');
// BOF - Tomcraft - 2009-11-02 - Admin language tabs
define('HEADING_TITLE', 'Categorie&euml;n / Artikelen');
define('HEADING_TITLE_SEARCH', 'Zoeken: ');
define('HEADING_TITLE_GOTO', 'Ga naar:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_CATEGORIES_PRODUCTS', 'Categorie&euml;n / Artikelen');
define('TABLE_HEADING_ACTION', 'Actie');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_STARTPAGE', 'TOP');
define('TABLE_HEADING_STOCK','Voorraad Waarschuwing');
define('TABLE_HEADING_SORT','Sorteren.');
define('TABLE_HEADING_EDIT','Bewerk');
// BOF - Tomcraft - 2010-04-07 - Added definition for products model
define('TABLE_HEADING_PRODUCTS_MODEL','Artikelnummer');
// EOF - Tomcraft - 2010-04-07 - Added definition for products model

// BOF - Hendrik - 2010-08-11 - Thumbnails in admin products list
define('TABLE_HEADING_IMAGE','Afbeelding');
// EOF - Hendrik - 2010-08-11 - Thumbnails in admin products list

define('TEXT_ACTIVE_ELEMENT','Actief Element');
define('TEXT_MARKED_ELEMENTS','Gemarkeerde Elementen');
define('TEXT_INFORMATIONS','Informatie');
define('TEXT_INSERT_ELEMENT','Nieuw Element');

define('TEXT_WARN','Voorraadwaarschuwing:');
define('TEXT_WARN_MAIN','Hoofd');
define('TEXT_NEW_PRODUCT', 'Nieuw Artikel in &quot;%s&quot;');
define('TEXT_EDIT_PRODUCT', 'Product bewerken in &quot;%s&quot;');
define('TEXT_CATEGORIES', 'Categorie&euml;n:');
define('TEXT_PRODUCTS', 'Artikelen:');
define('TEXT_PRODUCTS_PRICE_INFO', 'Prijs:');
define('TEXT_PRODUCTS_TAX_CLASS', 'BTW Klasse:');
define('TEXT_PRODUCTS_AVERAGE_RATING', 'Gemiddelde waardering:');
define('TEXT_PRODUCTS_QUANTITY_INFO', 'Aantal:');
define('TEXT_PRODUCTS_DISCOUNT_ALLOWED_INFO', 'Max.Toegestane Korting:');
define('TEXT_DATE_ADDED', 'Toegevoegd op:');
define('TEXT_DATE_AVAILABLE', 'Datum beschikbaar:');
define('TEXT_LAST_MODIFIED', 'Laatste Wijziging:');
define('TEXT_IMAGE_NONEXISTENT', 'Afbeelding Bestaat Niet');
define('TEXT_NO_CHILD_CATEGORIES_OR_PRODUCTS', 'Voeg een nieuwe categorie of prduct in <br />&nbsp;<br /><b>%s</b>.');
define('TEXT_PRODUCT_MORE_INFORMATION', 'Voor informatie, bezoek de <a href="http://%s" target="_blank"><u>Homepage</u></a>.');
define('TEXT_PRODUCT_DATE_ADDED', 'Dit artikel hebben we op %s in onze catalogus opgenomen.');
define('TEXT_PRODUCT_DATE_AVAILABLE', 'Dit artikel is beschikbaar vanaf %s.');

define('TEXT_EDIT_INTRO', 'Breng de nodige wijzigingen aan.');
define('TEXT_EDIT_CATEGORIES_ID', 'Categorie ID:');
define('TEXT_EDIT_CATEGORIES_NAME', 'Categorie Naam:');
define('TEXT_EDIT_CATEGORIES_HEADING_TITLE', 'Categorie Titel:');
define('TEXT_EDIT_CATEGORIES_DESCRIPTION', 'Categorie Beschrijving:');
define('TEXT_EDIT_CATEGORIES_IMAGE', 'Categorie Afbeelding:');
define('TEXT_EDIT_CATEGORIES_IMAGE_LIST', 'Categorie Beeld Lijst:');
define('TEXT_EDIT_CATEGORIES_IMAGE_MOBILE', 'Categorie Beeld Mobiel:');

define('TEXT_EDIT_SORT_ORDER', 'Sorteervolgorde:');

define('TEXT_INFO_COPY_TO_INTRO', 'Kies een nieuwe categorie uit waarnaar u dit artikel wilt kopi&euml;ren:');
define('TEXT_INFO_CURRENT_CATEGORIES', 'Aktuele Categorie&euml;n:');

define('TEXT_INFO_HEADING_NEW_CATEGORY', 'Nieuwe Categorie');
define('TEXT_INFO_HEADING_EDIT_CATEGORY', 'Categorie Bewerken');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', 'Categorie Verwijderen');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', 'Categorie Verplaatsen');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', 'Artikel Verwijderen');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', 'Artikel Verplaatsen');
define('TEXT_INFO_HEADING_COPY_TO', 'Kopi&euml;ren naar');
define('TEXT_INFO_HEADING_MOVE_ELEMENTS', 'Elementen verplaatsen');
define('TEXT_INFO_HEADING_DELETE_ELEMENTS', 'Elementen verwijderen');

define('TEXT_DELETE_CATEGORY_INTRO', 'Weet u zeker dat u deze categorie wilt verwijderen?');
define('TEXT_DELETE_PRODUCT_INTRO', 'Weet u zeker dat u dit artikel definitief wilt verwijderen?');

define('TEXT_DELETE_WARNING_CHILDS', '<b>WAARSCHUWING:</b> Er zijn nog %s (Onder-)Categorie&euml;n, met deze Categorie gelinkd!');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>WAARSCHUWING:</b> Er zijn nog %s Artikelen, met deze Categorie gelinkd!');


define('TEXT_MOVE_WARNING_CHILDS', '<b>Info:</b> Er zijn nog %s (Onder-)Categorie&euml;n, met deze Categorie gelinkd!');
define('TEXT_MOVE_WARNING_PRODUCTS', '<b>Info:</b> Er zijn nog %s Artikelen, met deze Categorie gelinkd!');

define('TEXT_MOVE_PRODUCTS_INTRO', 'Selecteer naar welke categorie u wenst , <b>%s</b> te verplaatsen');
define('TEXT_MOVE_CATEGORIES_INTRO', 'Selecteer naar welke categorie u wenst , <b>%s</b> te verplaatsen');
define('TEXT_MOVE', 'Verplaats <b>%s</b> naar:');
define('TEXT_MOVE_ALL', 'Verplaats alles naar:');

define('TEXT_NEW_CATEGORY_INTRO', 'Geef een nieuwe categorie op met volgende relevante gegevens.');
define('TEXT_CATEGORIES_NAME', 'Categorie Naam:');
define('TEXT_CATEGORIES_IMAGE', 'Categorie Afbeelding:');

define('TEXT_META_TITLE', 'Meta Title:');
define('TEXT_META_DESCRIPTION', 'Meta Description:');
define('TEXT_META_KEYWORDS', 'Meta Keywords:');

define('TEXT_SORT_ORDER', 'Sorteervolgorde:');

define('TEXT_PRODUCTS_STATUS', 'Artikelstatus:');
define('TEXT_PRODUCTS_STARTPAGE', 'Toon op startpagina:');
define('TEXT_PRODUCTS_STARTPAGE_YES', 'Ja');
define('TEXT_PRODUCTS_STARTPAGE_NO', 'Nee');
define('TEXT_PRODUCTS_STARTPAGE_SORT', 'Sorteervolgorde (Startpagina):');
define('TEXT_PRODUCTS_DATE_AVAILABLE', 'Datum beschikbaar:');
// BOF - Hetfield - 2010-01-28 - Changing product available in correctly names for status
define('TEXT_PRODUCT_AVAILABLE', 'Geactiveerd');
define('TEXT_PRODUCT_NOT_AVAILABLE', 'Gedeactiveerd');
// EOF - Hetfield - 2010-01-28 - Changing product available in correctly names for status
define('TEXT_PRODUCTS_MANUFACTURER', 'Artikelfabrikant:');
define('TEXT_PRODUCTS_MANUFACTURER_MODEL', 'Fabrikant model nr. (FPN):');
define('TEXT_PRODUCTS_NAME', 'Artikelnaam:');
define('TEXT_PRODUCTS_HEADING_TITLE', 'Producten Rubriek:');
define('TEXT_PRODUCTS_DESCRIPTION', 'Artikelbeschrijving:');
define('TEXT_PRODUCTS_QUANTITY', 'Artikelaantal:');
define('TEXT_PRODUCTS_MODEL', 'Artikel-Nr.:');
define('TEXT_PRODUCTS_IMAGE', 'Artikelafbeelding:');
define('TEXT_PRODUCTS_URL', 'Artikel URL:');
define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(zonder  http://)</small>');
define('TEXT_PRODUCTS_PRICE', 'Artikelprijs:');
define('TEXT_PRODUCTS_WEIGHT', 'Artikelgewicht:');
define('TEXT_PRODUCTS_EAN','Barcode/EAN');
define('TEXT_PRODUCT_LINKED_TO','Gelinkt aan:');
define('TEXT_DELETE', 'Verwijderen');
define('EMPTY_CATEGORY', 'Lege Categorie');

define('TEXT_HOW_TO_COPY', 'Kopie&euml;rmethode:');
define('TEXT_COPY_AS_LINK', 'Artikel linken');
define('TEXT_COPY_AS_DUPLICATE', 'Artikel Dupliceren');

define('ERROR_CANNOT_LINK_TO_SAME_CATEGORY', 'Fout: Artikelen kunnen niet gelinkt worden in dezelfde Categorie .');
define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Fout: Catalogus afbeeldingen directory is niet beschrijfbaar: ' . DIR_FS_CATALOG_IMAGES);
define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Fout: Catalogus afbeeldingen directory bestaat niet: ' . DIR_FS_CATALOG_IMAGES);

define('TEXT_PRODUCTS_DISCOUNT_ALLOWED','Korting toegestaan:');
define('HEADING_PRICES_OPTIONS','<b>Prijs-Opties</b>');
define('HEADING_PRODUCT_IMAGES','<b>Artikel-Afbeeldingen</b>');
define('TEXT_PRODUCTS_WEIGHT_INFO','<small>(kg)</small>');
define('TEXT_PRODUCTS_SHORT_DESCRIPTION','Korte beschrijving:');
define('TEXT_PRODUCTS_KEYWORDS', 'Extra zoekbegrippen:');
define('TXT_STK','Stk: ');
define('TXT_PRICE','a :');
define('TXT_NETTO','Nettoprijs: ');
define('TXT_STAFFELPREIS','Aanbieding prijs');

define('HEADING_PRODUCTS_MEDIA','<b>Artikelmedium</b>');
define('TABLE_HEADING_PRICE','Prijs');

define('TEXT_FSK18','FSK 18:');
define('TEXT_CHOOSE_INFO_TEMPLATE_CATEGORIE','Sjabloon voor Categorie&euml;nlijst');
define('TEXT_CHOOSE_INFO_TEMPLATE_LISTING','Sjabloon voor Product Listing');
// BOF - Tomcraft - 2009-11-02 - Admin language tabs
//define('TEXT_PRODUCTS_SORT','Sorting:');
define('TEXT_PRODUCTS_SORT','Sorteervolgorde:');
// EOF - Tomcraft - 2009-11-02 - Admin language tabs
define('TEXT_EDIT_PRODUCT_SORT_ORDER','Sorteren van producten');
define('TXT_PRICES','Prijs');
define('TXT_NAME','Productnaam');
define('TXT_ORDERED','Bestelde producten');
// BOF - Tomcraft - 2009-11-02 - Admin language tabs
define('TXT_SORT','Sorteervolgorde');
// EOF - Tomcraft - 2009-11-02 - Admin language tabs
define('TXT_WEIGHT','Gewicht');
define('TXT_QTY','Op Voorraad');
// BOF - Tomcraft - 2009-09-12 - add option to sort by date and products model
define('TXT_DATE','Verschijningsdatum');
define('TXT_MODEL','Producten Model');
// EOF - Tomcraft - 2009-09-12 - add option to sort by date and products model

define('TEXT_MULTICOPY','Meerdere');
define('TEXT_MULTICOPY_DESC','Kopieer elementen in de volgende categorie&euml;n (Als er één vakje is geselecteerd, worden de afzonderlijke instellingen genegeerd).');
define('TEXT_SINGLECOPY','Enkelvoudig');
define('TEXT_SINGLECOPY_DESC','Kopieer elementen in de volgende categorie');
define('TEXT_SINGLECOPY_CATEGORY','Categorie:');

define('TEXT_PRODUCTS_VPE','Eenheid');
define('TEXT_PRODUCTS_VPE_VISIBLE','Toon eenheidsprijs:');
define('TEXT_PRODUCTS_VPE_VALUE',' Waarde:');

define('CROSS_SELLING_1','Kruisverkoop');
define('CROSS_SELLING_2','voor wat betreft het product');
define('CROSS_SELLING_SEARCH','Zoek product:');
define('BUTTON_EDIT_CROSS_SELLING','Kruisverkoop');
define('HEADING_DEL','Verwijder');
define('HEADING_ADD','Voeg toe?');
define('HEADING_GROUP','Groep');
define('HEADING_SORTING','Sorteren');
define('HEADING_MODEL','Model');
define('HEADING_NAME','Artikel');
define('HEADING_CATEGORY','Categorie');
define('HEADING_IMAGE','Afbeelding');

// BOF - Tomcraft - 2009-11-06 - Use variable TEXT_PRODUCTS_DATE_FORMAT
define('TEXT_PRODUCTS_DATE_FORMAT', 'JJJJ-MM-TT');
// EOF - Tomcraft - 2009-11-06 - Use variable TEXT_PRODUCTS_DATE_FORMAT

// BOF - web28 - 2010-08-03 - add metatags max charakters info
define('TEXT_CHARACTERS','tekens');
// EOF - web28 - 2010-08-03 - add metatags max charakters info

define('TEXT_ATTRIBUTE_COPY', 'Artikelopties ook kopieeren');
define('TEXT_ATTRIBUTE_COPY_INFO', 'Artikelopties ook kopieeren<br/ >Alleen bij enkelvoudige kopie (1 artikel) aan te raden');

define('TEXT_PRODUCTS_ORDER_DESCRIPTION','Orderomschrijving - Zichtbaar aan het einde van de order, in de order-mail, orderprint');

define('TEXT_HOW_TO_LINK', '<b>Pagina na het kopieren/linken</b>');
define('TEXT_HOW_TO_LINK_INFO', 'Artikel bewerken<br/ >(Bij meerdere artikelen de laatste in de lijst)');

define('TEXT_SET_GROUP_PERMISSIONS', 'Klantengroepmachtigingen erven voor alle submappen en producten?');

define('HEADING_TITLE_ONLY_INACTIVE_PRODUCTS', 'Toon alleen inactieve producten');

// BOF - Timo Paul (mail[at]timopaul[dot]biz) - 2014-01-17 - duplicate products content and links
define('TEXT_CONTENT_COPY', 'Kopieer ook de inhoud van het product');
define('TEXT_CONTENT_COPY_INFO', 'Kopieer ook de inhoud van het product<br />Alleen aanbevolen voor een enkel exemplaar (1 item)');
define('TEXT_LINKS_COPY', 'Kopieer ook productlinks');
define('TEXT_LINKS_COPY_INFO', 'Kopieer ook productlinks<br />Alleen aanbevolen voor enkelvoudig exemplaar (1 item)');
// EOF - Timo Paul (mail[at]timopaul[dot]biz) - 2014-01-17 - duplicate products content and links

define('TEXT_GRADUATED_PRICES_INFO', 'Het aantal invoervelden voor de Graduated Prices kan "<b>Configuratie - Admin Options area - Number Graduated Price</b>" zijn dat moet worden aangepast.');
define('TEXT_CATEGORY_SETTINGS', 'Categorie-instellingen:');

define('ERROR_QTY_SAVE_CHANGED', 'Tijdens het bewerken van het product is de inventaris gewijzigd en niet opgeslagen.');

define('TEXT_NO_MOVE_POSSIBLE', 'Niet mogelijk om het product te verplaatsen.');

define('TEXT_IN', 'in:');

define('TEXT_PRODUCTS_ATTRIBUTES_RECALCULATE', 'Herberekenen van het attribuut bij wijziging van het belastingtarief');

define('HEADING_TITLE_CAT_BREADCRUMB', ' in &quot;%s&quot;');

define('TEXT_PRODUCTS_TAGS', 'Producteigenschappen');

define('TEXT_GRADUATED_PRICES_GROUP_INFO', 'De klantengroep heeft momenteel geen toestemming om staffelprijzen te bekijken. Dit kan te allen tijde worden gewijzigd in de instellingen van de klantgroep.');

define('TEXT_NO_FILE', 'Er bestaat geen sjabloonbestand!');

define('ERROR_COPY_METHOD_NOT_SPECIFIED', 'Kopieer Methode niet gespecificeerd.');
define('ERROR_COPY_METHOD_NOT_ALLOWED', 'Kopieer Methode "Link" niet toegestaan op categorie&euml;n.');

define('TEXT_TAGS_COPY', 'Ook kopi&euml;ren van productkenmerken');
define('TEXT_TAGS_COPY_INFO', 'Ook kopieer producteigenschappen<br />Alleen aanbevolen voor een enkel exemplaar (1 item)');

define('TEXT_PRODUCTS_LAST_MODIFIED', 'Laatst gewijzigd:');
define('TEXT_STOCK_UPDATE_SUCCESS', 'Voorraad bijgewerkt');
define('TEXT_STOCK_UPDATE_ERROR', 'Voorraad niet bijgewerkt');
?>