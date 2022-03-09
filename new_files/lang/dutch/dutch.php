<?php
/* -----------------------------------------------------------------------------------------
   $Id: german.php 302 2007-03-30 08:25:49Z mzanier $

   xt:Commerce - community made shopping
   http://www.xt-Commerce.com

   Copyright (c) 2003 xt:Commerce
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(german.php,v 1.119 2003/05/19); www.oscommerce.com 
   (c) 2003  nextcommerce (german.php,v 1.25 2003/08/25); www.nextcommerce.org

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

/*
 * 
 *  DATE / TIME
 * 
 */
 
define('TITLE', STORE_NAME);
define('HEADER_TITLE_TOP', 'Startpagina');    
define('HEADER_TITLE_CATALOG', 'Catalogus');

define('HTML_PARAMS','dir="ltr" xml:lang="nl"');

@setlocale(LC_TIME, 'nl_NL.UTF-8', 'nl_NL@euro','nl_NL','nl_NL.ISO_8859-1','nl_NL.ISO_8859-15', 'du_DU', 'nl_DU', 'du_NL','dutch_NETHERLANDS');

define('DATE_FORMAT_SHORT', '%d.%m.%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A, %d. %B %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd.m.Y');  // this is used for strftime()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
define('DOB_FORMAT_STRING', 'dd.mm.jjjj');
 
function xtc_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
  }
}

require_once(DIR_FS_INC.'auto_include.inc.php');
foreach(auto_include(DIR_WS_LANGUAGES.'dutch/extra/','php') as $file) require ($file);

define('TITLE', STORE_NAME);
define('HEADER_TITLE_TOP', 'Homepage');    
define('HEADER_TITLE_CATALOG', 'Catalogus');

// BOF - vr - 2009-12-11 - Added language dependent currency code
// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency when changing language, 
// instead of staying with the applications default currency
define('LANGUAGE_CURRENCY', 'EUR');
// EOF - vr - 2009-12-11 - Added language dependent currency code

define('MALE', 'Dhr ');
define('FEMALE', 'Mevr ');
define('DIVERSE', 'Duikers');
/*
 * 
 *  BOXES
 * 
 */

// text for gift voucher redeeming
define('IMAGE_REDEEM_GIFT','Tegoedbon inwisselen!');

define('BOX_TITLE_STATISTICS','Statistiek:');
define('BOX_ENTRY_CUSTOMERS','Klanten');
define('BOX_ENTRY_PRODUCTS','Artikel');
define('BOX_ENTRY_REVIEWS','Beoordelingen');
define('TEXT_VALIDATING','Niet bevestigd');

// manufacturer box text
define('BOX_MANUFACTURER_INFO_HOMEPAGE', '%s Homepage');
define('BOX_MANUFACTURER_INFO_OTHER_PRODUCTS', 'Meer artikelen');

define('BOX_HEADING_ADD_PRODUCT_ID','In het winkelmandje'); //changed by pchammer
  
define('BOX_LOGINBOX_STATUS','Klantengroep:');
define('BOX_LOGINBOX_DISCOUNT','Artikelkorting');
define('BOX_LOGINBOX_DISCOUNT_TEXT','Korting');
define('BOX_LOGINBOX_DISCOUNT_OT','');

// reviews box text in includes/boxes/reviews.php
define('BOX_REVIEWS_WRITE_REVIEW', 'Beoordeelt u dit artikel!');
define('BOX_REVIEWS_NO_WRITE_REVIEW', 'Geen herziening mogelijk.');
define('BOX_REVIEWS_TEXT_OF_5_STARS', '%s van 5 sterren!');

// pull down default text
define('PULL_DOWN_DEFAULT', 'Kiezen a.u.b.');

// javascript messages
define('JS_ERROR', 'Noodzakelijke gegevens ontbreken! A.u.b. juist invullen.\n\n');

define('JS_REVIEW_TEXT', '* De tekst dient minstens uit ' . REVIEW_TEXT_MIN_LENGTH . ' letters bestaan.\n\n');
define('JS_REVIEW_RATING', '* Vult u uw beoordeling in.\n\n');
define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* Kiest u een manier van betaling voor uw bestelling a.u.b..\n');
define('JS_ERROR_SUBMITTED', 'Deze site is reeds bevestigd. Klik op Ok en wacht tot het proces beeindigd is.');
define('ERROR_NO_PAYMENT_MODULE_SELECTED', '* Kiest u een manier van betaling voor uw bestelling a.u.b.');

define('JS_ERROR_NO_SHIPPING_MODULE_SELECTED', '* Kies een verzendmethode voor uw bestelling.\n');
define('JS_ERROR_CONDITIONS_NOT_ACCEPTED', '* Als u geen kennis neemt van onze algemene voorwaarden,\n kunnen we uw bestelling helaas niet accepteren!\n\n');

define('JS_ERROR_REVOCATION_NOT_ACCEPTED', '* Als u niet akkoord gaat met het vervallen van het herroepingsrecht voor virtuele artikelen, \nkunnen we helaas niet akkoord gaan met uw bestelling!\n\n');
define('JS_ERROR_PRIVACY_NOTICE_NOT_ACCEPTED', '* Als u geen rekening houdt met ons reglement inzake gegevensbescherming, \nkunnen wij uw bestelling helaas niet aanvaarden!\n\n');
define('JS_REVIEW_AUTHOR', '* Voer uw naam in, alstublieft.\n\n');

/*
 * 
 * ACCOUNT FORMS
 * 
 */

define('ENTRY_COMPANY_ERROR', '');
define('ENTRY_COMPANY_TEXT', '');
define('ENTRY_GENDER_ERROR', 'Kies een aanspreektitel uit a.u.b.');
define('ENTRY_GENDER_TEXT', '*');
define('ENTRY_FIRST_NAME_ERROR', 'Uw voornaam dient minstens uit ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' tekens bestaan.');
define('ENTRY_FIRST_NAME_TEXT', '*');
define('ENTRY_LAST_NAME_ERROR', 'Uw achternaam dient minstens uit ' . ENTRY_LAST_NAME_MIN_LENGTH . ' tekens bestaan.');
define('ENTRY_LAST_NAME_TEXT', '*');
define('ENTRY_DATE_OF_BIRTH_ERROR', 'Uw geboortedatum dient in het formaat DD.MM.JJJJ (B.v. 21.05.1970) ingevuld worden');
define('ENTRY_DATE_OF_BIRTH_TEXT', '* (B.v. 21.05.1970)');
define('ENTRY_EMAIL_ADDRESS_ERROR', 'Uw emailadres dient minstens uit ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' tekens bestaan.');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'Uw ingevulde email adres is foutief - controleert u deze a.u.b.');
define('ENTRY_EMAIL_ERROR_NOT_MATCHING', 'Uw e-mailadressen komen niet overeen.');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'Uw ingevulde email adres bestaat reeds - controleert u deze a.u.b..');
define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
define('ENTRY_STREET_ADDRESS_ERROR', 'Straat/Nr dient uit minstens ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' tekens bestaan.');
define('ENTRY_STREET_ADDRESS_TEXT', '*');
define('ENTRY_SUBURB_TEXT', '');
define('ENTRY_POST_CODE_ERROR', 'Uw postcode dient minstens uit ' . ENTRY_POSTCODE_MIN_LENGTH . ' tekens bestaan.');
define('ENTRY_POST_CODE_TEXT', '*');
define('ENTRY_CITY_ERROR', 'woonplaats dient minstens uit ' . ENTRY_CITY_MIN_LENGTH . ' tekens bestaan.');
define('ENTRY_CITY_TEXT', '*');
define('ENTRY_STATE_ERROR', 'Uw provincie dient minstens uit ' . ENTRY_STATE_MIN_LENGTH . ' tekens bestaan.');
define('ENTRY_STATE_ERROR_SELECT', 'Kiest u een provincie uit de lijst a.u.b.');
define('ENTRY_STATE_TEXT', '*');
define('ENTRY_COUNTRY_ERROR', 'Kiest u een land uit de lijst a.u.b.');
define('ENTRY_COUNTRY_TEXT', '*');
define('ENTRY_TELEPHONE_NUMBER_ERROR', 'Uw telefoonnummer dient minstens uit ' . ENTRY_TELEPHONE_MIN_LENGTH . ' tekens bestaan.');
define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
define('ENTRY_FAX_NUMBER_TEXT', '');
define('ENTRY_NEWSLETTER_TEXT', '');
define('ENTRY_PASSWORD_ERROR', 'Uw wachtwoord dient minstens uit ' . ENTRY_PASSWORD_MIN_LENGTH . ' tekens bestaan.');

define('ENTRY_PASSWORD_ERROR_MIN_LOWER', 'Uw wachtwoord moet minstens %s kleine letters bevatten.');
define('ENTRY_PASSWORD_ERROR_MIN_UPPER', 'Uw wachtwoord moet ten minste %s van de hoofdletters bevatten.');
define('ENTRY_PASSWORD_ERROR_MIN_NUM', 'Uw wachtwoord moet ten minste %s van het aantal personen bevatten.');
define('ENTRY_PASSWORD_ERROR_MIN_CHAR', 'Uw wachtwoord moet ten minste %s speciale tekens bevatten.');


define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'Uw wachtwoorden komen niet overeen.');
define('ENTRY_PASSWORD_TEXT', '*');
define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT_ERROR', 'Uw wachtwoord dient minstens uit ' . ENTRY_PASSWORD_MIN_LENGTH . ' tekens bestaan.');
define('ENTRY_PASSWORD_NEW_TEXT', '*');
define('ENTRY_PASSWORD_NEW_ERROR', 'Uw nieuwe wachtwoord dient minstens uit ' . ENTRY_PASSWORD_MIN_LENGTH . ' tekens bestaan.');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'Uw wachtwoorden komen niet overeen.');

/*
 * 
 *  RESULT PAGES
 * 
 */
 
define('TEXT_RESULT_PAGE', 'Bladzijden:');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Toon <b>%d</b> tot <b>%d</b> (van in het totaal <b>%d</b> artikelen)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Toon <b>%d</b> tot <b>%d</b> (van in het totaal <b>%d</b> bestellingen)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Toon <b>%d</b> tot <b>%d</b> (van in het totaal <b>%d</b> beoordelingen)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', 'Toon <b>%d</b> tot <b>%d</b> (van in het totaal <b>%d</b> nieuwe artikelen)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Toon <b>%d</b> tot <b>%d</b> (van in het totaal <b>%d</b> aanbiedingen)');

/*
 * 
 * SITE NAVIGATION
 * 
 */

define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'vorige bladzijde');
define('PREVNEXT_TITLE_NEXT_PAGE', 'volgende bladzijde');
define('PREVNEXT_TITLE_PAGE_NO', 'bladzijde %d');
define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'voorgaande %d bladzijden');
define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'volgende %d bladzijden');

/*
 * 
 * PRODUCT NAVIGATION
 * 
 */

define('PREVNEXT_BUTTON_PREV', '[&lt;&lt;&nbsp;vorige]');
define('PREVNEXT_BUTTON_NEXT', '[volgende&nbsp;&gt;&gt;]');

/*
 * 
 * IMAGE BUTTONS
 * 
 */

define('IMAGE_BUTTON_ADD_ADDRESS', 'Nieuw adres');
define('IMAGE_BUTTON_BACK', 'Terug');
define('IMAGE_BUTTON_CHANGE_ADDRESS', 'Adres veranderen');
define('IMAGE_BUTTON_CHECKOUT', 'Kassa');
define('IMAGE_BUTTON_CONFIRM_ORDER', 'Koop');
define('IMAGE_BUTTON_CONTINUE', 'Verder');
define('IMAGE_BUTTON_DELETE', 'Verwijderen');
define('IMAGE_BUTTON_LOGIN', 'Aanmelden');
define('IMAGE_BUTTON_IN_CART', 'In het winkelmandje');
define('IMAGE_BUTTON_SEARCH', 'Zoeken');
define('IMAGE_BUTTON_UPDATE', 'Actualiseren');
define('IMAGE_BUTTON_UPDATE_CART', 'Winkelwagen updaten');
define('IMAGE_BUTTON_WRITE_REVIEW', 'Beoordeling schrijven');
define('IMAGE_BUTTON_ADMIN', 'Admin'); 
define('IMAGE_BUTTON_PRODUCT_EDIT', 'Produkt bewerken');
define('IMAGE_BUTTON_SEND', 'Indienen');
// BOF - vr - 2010-02-20 removed double definition 
define('IMAGE_BUTTON_LOGIN', 'Aanmelden');
// EOF - vr - 2010-02-20 removed double definition 
define('IMAGE_BUTTON_SEND', 'Versturen'); //DokuMan - 2010-03-15 - Added button description for contact form

define('IMAGE_BUTTON_CONTINUE_SHOPPING', 'Ga verder met winkelen');
define('IMAGE_BUTTON_CHECKOUT_STEP2', 'Ga naar stap 2');
define('IMAGE_BUTTON_CHECKOUT_STEP3', 'Ga naar stap 3');

define('SMALL_IMAGE_BUTTON_DELETE', 'Verwijderen');
define('SMALL_IMAGE_BUTTON_EDIT', 'Veranderen');
define('SMALL_IMAGE_BUTTON_VIEW', 'Tonen');

define('ICON_ARROW_RIGHT', 'Toon meer');
define('ICON_CART', 'In het winkelmandje');
define('ICON_SUCCESS', 'Succes');
define('ICON_WARNING', 'Waarschuwing');
define('ICON_ERROR', 'Fout');

define('TEXT_PRINT', 'afdrukken'); //DokuMan - 2009-05-26 - Added description for 'account_history_info.php'
define('BUTTON_RESET', 'Reset');
define('BUTTON_UPDATE', 'Update');

/*
 * 
 *  GREETINGS
 * 
 */

define('TEXT_GREETING_PERSONAL', 'Fijn dat u er weer bent, <span class="greetUser">%s!</span> Wilt u onze <a style="text-decoration:underline;" href="%s">nieuwe artikelen </a> bekijken?');
define('TEXT_GREETING_PERSONAL_RELOGON', '<small>Indien u niet %s bent, meldt u zich a.u.b. <a style="text-decoration:underline;" href="%s">hier</a> met uw aanmeldingsgegevens aan.</small>');
define('TEXT_GREETING_GUEST', 'hartelijk welkom <span class="greetUser">Gast!</span> wilt u zich <a style="text-decoration:underline;" href="%s">aanmelden</a>? Of wilt u een <a style="text-decoration:underline;" href="%s">Account</a> openen?');

define('TEXT_SORT_PRODUCTS', 'Sortering van het artikel is ');
define('TEXT_DESCENDINGLY', 'dalend');
define('TEXT_ASCENDINGLY', 'stijgend');
define('TEXT_BY', ' naar ');

define('TEXT_OF_5_STARS', '%s van 5 Sternen!');
define('TEXT_REVIEW_BY', 'van %s');
define('TEXT_REVIEW_WORD_COUNT', '%s Woorden');
define('TEXT_REVIEW_RATING', 'Beoordeling: %s [%s]');
define('TEXT_REVIEW_DATE_ADDED', 'Toegevoegd op: %s');
define('TEXT_NO_REVIEWS', 'Er zijn nog geen beoordelingen.');
define('TEXT_NO_NEW_PRODUCTS', 'Op dit ogenblik zijn er geen nieuwe artikelen.');
define('TEXT_UNKNOWN_TAX_RATE', 'Onbekende belastingklasse');

/*
 * 
 * WARNINGS
 * 
 */

define('WARNING_INSTALL_DIRECTORY_EXISTS', 'Waarschuwing: De installatiedirectory is nog aanwezig op: %s Verwijdert u deze directory om veiligheidsredenen a.u.b.!');
define('WARNING_CONFIG_FILE_WRITEABLE', 'Waarschuwing: The modified eCommerce Shopsoftware kan in het configuratiefile schrijven: %s. Dit kan een veiligheidsrisico zijn - corrigeer de toegangsrechten tot dit bestand a.u.b.!');
define('WARNING_SESSION_DIRECTORY_NON_EXISTENT', 'Waarschuwing: De directory voor de sessions bestaat niet: ' . xtc_session_save_path() . '. De sessions zullen niet functioneren totdat het file is aangemaakt!');
define('WARNING_SESSION_DIRECTORY_NOT_WRITEABLE', 'Waarschuwing: The modified eCommerce Shopsoftware kan niet in de Sessions directory schrijven: ' . xtc_session_save_path() . '. De Sessions zullen niet functioneren totdat de toegangsrechten juist ingesteld zijn!');
define('WARNING_SESSION_AUTO_START', 'Waarschuwing: session.auto_start is geactiveerd (enabled) - Deactiveert u (disabled) deze PHP Feature in de php.ini en start u de WEB-Server opnieuw!');
define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', 'Waarschuwing: Directory voor de artikeldownload bestaat niet: ' . DIR_FS_DOWNLOAD . '. Deze functie zal niet werken totdat de directory gemaakt is!');

define('SUCCESS_ACCOUNT_UPDATED', 'Uw account is geactualiseerd.');
define('SUCCESS_PASSWORD_UPDATED', 'Uw password is veranderd!');
define('ERROR_CURRENT_PASSWORD_NOT_MATCHING', 'Het ingevulde password stemt niet overeen met het opgeslagen password. Probeert u het nog eens.');
define('TEXT_MAXIMUM_ENTRIES', 'Notificatie: U hebt %s adresboek opnamen ter beschikking!');
define('SUCCESS_ADDRESS_BOOK_ENTRY_DELETED', 'Het uitgezochte adresboekgegeven is met succes verwijderd.');
define('SUCCESS_ADDRESS_BOOK_ENTRY_UPDATED', 'Uw adresboek is geactualiseerd!');
define('WARNING_PRIMARY_ADDRESS_DELETION', 'Het standaardadres kan niet worden verwijderd. Eerst een ander standaard adres kiezen a.u.b. Daarna kan het adresgegeven verwijderd worden.');
define('ERROR_NONEXISTING_ADDRESS_BOOK_ENTRY', 'Dit adresgegeven bestaat niet.');
define('ERROR_ADDRESS_BOOK_FULL', 'Uw adresboek kan geen verdere adressen meer opnemen. Verwijdert u een adres wat niet meer benodigd wordt. Daarna kunt u een nieuw gegeven opslaan.');
define('ERROR_CHECKOUT_SHIPPING_NO_METHOD', 'Er is niet gekozen voor een verzendmethode.');
define('ERROR_CHECKOUT_SHIPPING_NO_MODULE', 'Er is geen verzendmethode beschikbaar.');

//  conditions check

define('ERROR_CONDITIONS_NOT_ACCEPTED', 'Om uw bestelling af te ronden dient u akkoord te gaan met onze voorwaarden.');
define('ERROR_REVOCATION_NOT_ACCEPTED', '* Als u niet akkoord gaat met het vervallen van het herroepingsrecht voor virtuele artikelen, kunnen wij uw bestelling helaas niet accepteren!');
define('ERROR_PRIVACY_NOTICE_NOT_ACCEPTED', '* Als u geen rekening houdt met ons reglement inzake gegevensbescherming, kunnen wij uw bestelling helaas niet aanvaarden!');


define('SUB_TITLE_OT_DISCOUNT','Korting:');

define('TAX_ADD_TAX','incl. ');
define('TAX_NO_TAX','plus ');

define('NOT_ALLOWED_TO_SEE_PRICES','U kunt als gast geen prijzen bekijken');
define('NOT_ALLOWED_TO_SEE_PRICES_TEXT','U heeft geen toestemming om prijzen te bekijken, open a.u.b. een account');

define('TEXT_DOWNLOAD','Download');
define('TEXT_VIEW','Bekijken');

define('TEXT_BUY', '1 x \'');
define('TEXT_NOW', '\' bestellen');
define('TEXT_GUEST',' Gast');
define('TEXT_SEARCH_ENGINE_AGENT','zoekmachine');

/*
 * 
 * ADVANCED SEARCH
 * 
 */

define('TEXT_AC_ALL_CATEGORIES', 'Alle');
define('TEXT_ALL_CATEGORIES', 'Alle categorien');
define('TEXT_ALL_MANUFACTURERS', 'Alle producenten');
define('JS_AT_LEAST_ONE_INPUT', '* Een van de volgende velden moet ingevuld worden:\n    Sleutelwoord\n    Prijs vanaf\n    Prijs tot\n');
define('AT_LEAST_ONE_INPUT', 'Een van de volgende velden moet ingevuld worden:<br />Sleutelwoorden met minstens drie tekens <br />Prijs vanaf<br />Prijs tot<br />');
define('TEXT_SEARCH_TERM','Uw zoektocht naar: ');
define('JS_INVALID_FROM_DATE', '* ongeldige datum (van)\n');
define('JS_INVALID_TO_DATE', '* ongeldige datum (tot)\n');
define('JS_TO_DATE_LESS_THAN_FROM_DATE', '* De datum (van) moet groter of gelijk zijn als de datum (tot)\n');
define('JS_PRICE_FROM_MUST_BE_NUM', '* \"Prijs vanaf\" moet een getal zijn\n\n');
define('JS_PRICE_TO_MUST_BE_NUM', '* \"Prijs tot\" moet een getal zijn\n\n');
define('JS_PRICE_TO_LESS_THAN_PRICE_FROM', '* Prijs vanaf moet groter of gelijk prijs vanaf zijn.\n');
define('JS_INVALID_KEYWORDS', '* Zoekbegrip niet toegelaten\n');
define('TEXT_LOGIN_ERROR', '<font color="#ff0000"><b>FOUT:</b></font> Geen overeenstemming van het ingevulde \'eMail-Adres\' en/of \'Password\'.');
define('TEXT_RELOGIN_NEEDED', 'Gelieve opnieuw in te loggen.');
define('TEXT_NO_EMAIL_ADDRESS_FOUND', '<font color="#ff0000"><b>ATTENTIE:</b></font> Het ingevulde emailadres is niet geregisteerd. Probeert u het nog eens a.u.b.');
define('TEXT_PASSWORD_SENT', 'Een nieuw wachtwoord is per email verstuurd.');
define('TEXT_PRODUCT_NOT_FOUND', 'Artikel is niet gevonden!');
define('TEXT_MORE_INFORMATION', 'Voor verdere informatie, bezoek a.u.b. de <a style="text-decoration:underline;" href="%s" onclick="window.open(this.href); return false;">Homepage</a> voor dit artikel.');
define('TEXT_DATE_ADDED', 'Dit artikel hebben wij op %s in onze catalogus opgenomen.');
define('TEXT_DATE_AVAILABLE', '<font color="#ff0000">Dit artikel zal waarschijnlijk vanaf de %s weer op voorraad zijn.</font>');
define('SUB_TITLE_SUB_TOTAL', 'Subtotaal:');

define('OUT_OF_STOCK_CANT_CHECKOUT', 'De met ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' gemarkeerde artikelen zijn helaas niet meer in het door u gewenste aantal voorradig.<br />Reduceert u uw bestelaantal a.u.b voor de gekenmerkte artikelen. Dank u wel');
define('OUT_OF_STOCK_CAN_CHECKOUT', 'De met ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' gemarkeerde artikelen zijn helaas niet meer in het door u gewenste aantal voorradig.<br />Het bestelde aantal wordt binnenkort door ons geleverd, indien u dat wenst leveren wij ook een gedeeltelijke bestelling.');

define('MINIMUM_ORDER_VALUE_NOT_REACHED_1', 'U heeft de minimum bestelwaarde van: ');
define('MINIMUM_ORDER_VALUE_NOT_REACHED_2', ' helaas nog niet bereikt.<br />Bestelt u a.u.b. minimaal voor verdere: ');
define('MAXIMUM_ORDER_VALUE_REACHED_1', 'U heeft de maximale bestelsom van: ');
define('MAXIMUM_ORDER_VALUE_REACHED_2', 'overschreden.<br /> Reduceert u uw bestelling a.u.b voor: ');

define('ERROR_INVALID_PRODUCT', 'Het gekozen artikel is niet gevonden!');
define('JS_KEYWORDS_MIN_LENGTH', 'De zoekterm moet minstens ' . (int)SEARCH_MIN_LENGTH . ' karakters lang zijn.\n');
/*
 * 
 * NAVBAR TITLE
 * 
 */

define('NAVBAR_TITLE_ACCOUNT', 'Uw account');
define('NAVBAR_TITLE_1_ACCOUNT_EDIT', 'Uw account');
define('NAVBAR_TITLE_2_ACCOUNT_EDIT', 'Uw persoonlijke gegevens veranderen');
define('NAVBAR_TITLE_1_ACCOUNT_HISTORY', 'Uw account');
define('NAVBAR_TITLE_2_ACCOUNT_HISTORY', 'Uw afgewerkte bestellingen');
define('NAVBAR_TITLE_1_ACCOUNT_HISTORY_INFO', 'Uw account');
define('NAVBAR_TITLE_2_ACCOUNT_HISTORY_INFO', 'Afgewerkte bestelling');
define('NAVBAR_TITLE_3_ACCOUNT_HISTORY_INFO', 'Bestelnummer %s');
define('NAVBAR_TITLE_1_ACCOUNT_PASSWORD', 'Uw account');
define('NAVBAR_TITLE_2_ACCOUNT_PASSWORD', 'Wachtwoord wijzigen');
define('NAVBAR_TITLE_1_ADDRESS_BOOK', 'Uw account');
define('NAVBAR_TITLE_2_ADDRESS_BOOK', 'Adresboek');
define('NAVBAR_TITLE_1_ADDRESS_BOOK_PROCESS', 'Uw account');
define('NAVBAR_TITLE_2_ADDRESS_BOOK_PROCESS', 'Adresboek');
define('NAVBAR_TITLE_ADD_ENTRY_ADDRESS_BOOK_PROCESS', 'Nieuwe opname');
define('NAVBAR_TITLE_MODIFY_ENTRY_ADDRESS_BOOK_PROCESS', 'Opname veranderen');
define('NAVBAR_TITLE_DELETE_ENTRY_ADDRESS_BOOK_PROCESS', 'Opname verwijderen');
define('NAVBAR_TITLE_ADVANCED_SEARCH', 'Uitgebreid zoeken');
define('NAVBAR_TITLE1_ADVANCED_SEARCH', 'Uitgebreid zoeken');
define('NAVBAR_TITLE2_ADVANCED_SEARCH', 'Zoekresultaten');
define('NAVBAR_TITLE_1_CHECKOUT_CONFIRMATION', 'Kassa');
define('NAVBAR_TITLE_2_CHECKOUT_CONFIRMATION', 'Bevestiging');
define('NAVBAR_TITLE_1_CHECKOUT_PAYMENT', 'Kassa');
define('NAVBAR_TITLE_2_CHECKOUT_PAYMENT', 'Manier van betaling');
define('NAVBAR_TITLE_1_PAYMENT_ADDRESS', 'Kassa');
define('NAVBAR_TITLE_2_PAYMENT_ADDRESS', 'Factuuradre veranderen');
define('NAVBAR_TITLE_1_CHECKOUT_SHIPPING', 'Kassa');
define('NAVBAR_TITLE_2_CHECKOUT_SHIPPING', 'Verzendinformatie');
define('NAVBAR_TITLE_1_CHECKOUT_SHIPPING_ADDRESS', 'Kassa');
define('NAVBAR_TITLE_2_CHECKOUT_SHIPPING_ADDRESS', 'Verzendadres veranderen');
define('NAVBAR_TITLE_1_CHECKOUT_SUCCESS', 'Kassa');
define('NAVBAR_TITLE_2_CHECKOUT_SUCCESS', 'Succes');
define('NAVBAR_TITLE_CREATE_ACCOUNT', 'Rekening openen');
if (isset($navigation) && $navigation->snapshot['page'] == FILENAME_CHECKOUT_SHIPPING) {
  define('NAVBAR_TITLE_LOGIN', 'Bestellen');
} else {
  define('NAVBAR_TITLE_LOGIN', 'Aanmelden');
}
define('NAVBAR_TITLE_LOGOFF','Tot ziens');
define('NAVBAR_TITLE_PRODUCTS_NEW', 'Nieuwe artikelen');
define('NAVBAR_TITLE_SHOPPING_CART', 'Winkelwagen');
define('NAVBAR_TITLE_SPECIALS', 'Aanbiedingen');
define('NAVBAR_TITLE_COOKIE_USAGE', 'Cookie-gebruik');
define('NAVBAR_TITLE_PRODUCT_REVIEWS', 'Beoordelingen');
define('NAVBAR_TITLE_REVIEWS_WRITE', 'Beoordelingen');
define('NAVBAR_TITLE_REVIEWS','Beoordelingen');
define('NAVBAR_TITLE_SSL_CHECK', 'Veiligheidswaarschuwing');
define('NAVBAR_TITLE_CREATE_GUEST_ACCOUNT','Rekening openen');
define('NAVBAR_TITLE_PASSWORD_DOUBLE_OPT','wachtwoord vergeten?');
define('NAVBAR_TITLE_NEWSLETTER','Nieuwsbrief');
define('NAVBAR_GV_REDEEM', 'Tegoedbon inwisselen');
define('NAVBAR_GV_SEND', 'Tegoedbon versturen');
define('NAVBAR_TITLE_DOWNLOAD', 'Downloads');

/*
 * 
 *  MISC
 * 
 */

define('TEXT_NEWSLETTER','U wilt op de hoogte blijven?<br />Geen probleem, meldt u aan voor onze nieuwsbrief en we houden u op de hoogte.');
define('TEXT_EMAIL_INPUT','Uw emailadres is in ons systeem opgeslagen.<br />Er is door het systeem gelijktijdig een email aan u verstuurd met een activeringslink. Klikt u na ontvangt van de email op de link om uw gegevens te bevestigen. Anders krijgt u van ons geen newsletter toegezonden!');

define('TEXT_WRONG_CODE','<font color="FF0000">Uw ingvulde veiligheidscode stemt niet overeen met de opgegeven code. Probeert u het nog eens.</font>');
define('TEXT_EMAIL_EXIST_NO_NEWSLETTER','<font color="FF0000">Dit email adres bestaat reeds in onze database maar is nog niet vrij gegeven voor de ontvangst van de newsletter!</font>');
define('TEXT_EMAIL_EXIST_NEWSLETTER','<font color="FF0000">Dit email adres bestaat reeds in onze database en reeds vrijgegeven voor de ontvangst van de newsletter!</font>');
define('TEXT_EMAIL_NOT_EXIST','<font color="FF0000">Dit emailadres bestaat niet in onze database!</font>');
define('TEXT_EMAIL_DEL','Uw emailadres is uit onze newsletter database verwijderd.');
define('TEXT_EMAIL_DEL_ERROR','<font color="FF0000">Er is een fout opgetreden, uw emailadres is niet verwijderd!</font>');
define('TEXT_EMAIL_ACTIVE','<font color="FF0000">Uw emailadres is vrij gegeven voor de ontvangst van de newsletter!</font>');
define('TEXT_EMAIL_ACTIVE_ERROR','<font color="FF0000">Er is een fout opgetreden, uw emailadres is niet vrijgegeven!</font>');
define('TEXT_EMAIL_SUBJECT','Uw nieuwsbrief aanmelding');

define('TEXT_CUSTOMER_GUEST',' Gast');

define('TEXT_LINK_MAIL_SENDED','Uw aanvraag voor een nieuw wachtwoord moet eerst door u bevestigd worden.<br />Daarom wordt er een email met bevestigingslink toegestuurd. Klikt u na ontvangst van deze mail op deze link, anders wordt het nieuwe wachtwoord niet aan u toegezonden of voor u ingericht!');
define('TEXT_PASSWORD_MAIL_SENDED','Een email met een nieuw aanmeldingswachtwoord is u zoeven toegestuurd.<br />Veranderd u na uw volgende aanmelding uw wachtwoord zoals u dat wenst.');
define('TEXT_CODE_ERROR','Vul uw emailadres en veiligheidscode opnieuw in. <br />Let op schrijffouten a.u.b.!');
define('TEXT_EMAIL_ERROR','Vul uw emailadres en veiligheidscode opnieuw in. <br />Let op schrijffouten a.u.b.!');
define('TEXT_NO_ACCOUNT','Helaas moeten wij u meedelen, dat uw aanvraag voor een nieuw wachtwoord ongeldig of afgelopen is.<br />Probeert u het opnieuw a.u.b.');
define('HEADING_PASSWORD_FORGOTTEN','Wachtwoord vernieuwen?');
define('TEXT_PASSWORD_FORGOTTEN','Wijzig uw wachtwoord in drie gemakkelijke stappen.');
define('TEXT_EMAIL_PASSWORD_FORGOTTEN','Bevestiginsemail voor wachtwoordwijziging');
define('TEXT_EMAIL_PASSWORD_NEW_PASSWORD','Uw nieuwe wachtwoord');
define('ERROR_MAIL','Contolleerd u uw ingevulde gegevens in het formulier a.u.b.');

define('CATEGORIE_NOT_FOUND','Categorie niet gevonden');

define('GV_FAQ', 'Tegoedbon FAQ');
define('ERROR_NO_REDEEM_CODE', 'U heeft helaas geen code ingevuld.');
define('ERROR_NO_INVALID_REDEEM_GV', 'Ongeldige tegoedboncode');
define('TABLE_HEADING_CREDIT', 'Tegoed');
define('EMAIL_GV_TEXT_SUBJECT', 'Een cadeau van %s');
define('MAIN_MESSAGE', 'U heeft besloten om een tegoedbon ter waarde van %s aan %s te versturen, wiens emailadres %s is.<br /><br />De volgende tekst verschijnt in uw email:<br /><br />Hallo %s<br /><br />Een tegoedbon ter waarde van %s werd u door %s gestuurd.');
define('REDEEMED_AMOUNT','Uw tegoedbon is op uw account bijgeboekt. Tegoedbon waarde:');
define('REDEEMED_COUPON','Uw coupon is bijgeboekt en wordt bij uw volgende bestelling automatisch ingewisseld.');

define('ERROR_INVALID_USES_USER_COUPON','U kunt de coupon alleen ');
define('ERROR_INVALID_USES_COUPON','Deze coupon kunnen klanten alleen ');
define('TIMES',' keer inwisselen.');
define('ERROR_INVALID_STARTDATE_COUPON','Uw coupon is nog niet beschikbaar.');
define('ERROR_INVALID_FINISDATE_COUPON','Uw coupon is reeds afgelopen.');
define('ERROR_INVALID_MINIMUM_ORDER_COUPON', 'Deze coupon kan alleen worden ingewisseld vanaf een minimale bestelwaarde van %s!');
define('ERROR_INVALID_MINIMUM_ORDER_COUPON_ADD','<br/>U moet de couponcode opnieuw invoeren wanneer de minimale bestelwaarde is bereikt!');
define('ERROR_COUPON_REQUIRES_ACCOUNT', 'Om de coupon in te wisselen heeft u een klantenaccount nodig.');
define('PERSONAL_MESSAGE', '%s schrijft:');

define('TEXT_LINK_TITLE_INFORMATION', 'Informatie');


//Popup Window
// BOF - DokuMan - 2010-02-25 removed double definition 
//define('TEXT_CLOSE_WINDOW', 'Close window.'); //changed by electronica 2009-09-06
// EOF - DokuMan - 2010-02-25 removed double definition 

/*
 * 
 *  COUPON POPUP
 * 
 */
 
define('TEXT_CLOSE_WINDOW', 'Venster sluiten [x]');
define('TEXT_COUPON_HELP_HEADER', 'Uw tegoedbon is ingewisseld.');
define('TEXT_COUPON_HELP_NAME', '<br /><br />Naam tegoedbon: %s');
define('TEXT_COUPON_HELP_SPECIALS', '<br /><br />Uw coupon kan niet worden toegepast op speciale aanbiedingen.');
define('TEXT_COUPON_HELP_FIXED', '<br /><br />De waarde van de tegoedbon bedraagt %s ');
define('TEXT_COUPON_HELP_MINORDER', '<br /><br />De minimum bestelwaarde bedraagt ');
define('TEXT_COUPON_HELP_FREESHIP', '<br /><br />Tegoedbon voor kostenloze verzending');
define('TEXT_COUPON_HELP_DESC', '<br /><br />Couponbeschrijving: %s');
define('TEXT_COUPON_HELP_DATE', '<br /><br />Deze coupon is geldig vanaf %s tot %s');
define('TEXT_COUPON_HELP_RESTRICT', '<br /><br />Artikelen / Categorie beperkingen');
define('TEXT_COUPON_HELP_CATEGORIES', 'Categorie');
define('TEXT_COUPON_HELP_PRODUCTS', 'Artikelen');

define('ERROR_ENTRY_AMOUNT_CHECK', 'Ongeldig voucherbedrag');
define('ERROR_ENTRY_EMAIL_ADDRESS_CHECK', 'Ongeldig e-mail adres');
define('TEXT_COUPON_PRODUCTS_RESTRICT', 'De coupon is beperkt tot een selectie van artikelen.');
define('TEXT_COUPON_CATEGORIES_RESTRICT', 'De coupon is beperkt tot een selectie van categorie&eumln.');
// VAT Reg No
define('ENTRY_VAT_TEXT',' alleen voor EU-Landen'); //changed by electronica 2009-09-06 anmerkung: besser wenn laden im EU ausland ist
define('ENTRY_VAT_ERROR', 'Het gekozen BTW nummer is ongeldig of kan niet worden geverifieerd momenteel! Geef een geldig BTW nr. op of laat dit veld leeg.'); //changed by electronica 2009-09-06
define('MSRP','MSRP');
define('YOUR_PRICE','your price ');
// BOF - Tomcraft - 2009-10-09 - Added text-constant for unit price
define('UNIT_PRICE','unit price ');
// EOF - Tomcraft - 2009-10-09 - Added text-constant for unit price
define('ONLY',' nu nog maar ');
define('FROM','van ');
define('YOU_SAVE','U bespaart ');
define('INSTEAD','Reguliere prijs ');
define('TXT_PER',' per ');
define('TAX_INFO_INCL','incl. %s omzetbelasting');
define('TAX_INFO_EXCL','excl. %s omzetbelasting');
define('TAX_INFO_ADD','plus. %s omzetbelasting');
define('SHIPPING_EXCL','excl.');
define('SHIPPING_INCL','incl.');
define('SHIPPING_COSTS','verzendkosten'); 

// changes 3.0.4 SP2
define('SHIPPING_TIME','Levertijd: ');
define('MORE_INFO','[Meer]');

// changes 3.0.4 SP2.2
define('ENTRY_PRIVACY_ERROR','U dient akkoord te gaan met onze voorwaarden!');
define('TEXT_PAYMENT_FEE','Betalings toeslag');

define('_MODULE_INVALID_SHIPPING_ZONE', 'Helaas leveren we niet naar de gekozen bestemming.'); //changed by electronica 2009-09-06
define('_MODULE_UNDEFINED_SHIPPING_RATE', 'Verzendkosten kunnen niet worden berekend momenteel, neem aub contact met ons op.'); //changed by electronica 2009-09-06

//Dokuman - 2009-08-21 - Added 'delete account' functionality for customers
define('NAVBAR_TITLE_1_ACCOUNT_DELETE', 'Uw account');
define('NAVBAR_TITLE_2_ACCOUNT_DELETE', 'Verwijder account');	

//contact-form error messages
define('ERROR_EMAIL','<p><b>Uw e-mail adres:</b> Geen of ongeldige invoer!</p>');
define('ERROR_VVCODE','<p><b>Veiligheids code:</b> Geen overeenkomst, aub geef uw veiligheidscode opnieuw in!</p>');
define('ERROR_MSG_BODY','<p><b>Uw bericht:</b> Geen invoer!</p>');

//Table Header checkout_confirmation.php
define('HEADER_QTY', 'Hoeveelheid');
define('HEADER_ARTICLE', 'Artikel');    
define('HEADER_SINGLE', 'Eenheidsprijs');
define('HEADER_TOTAL','Totaal');
define('HEADER_MODEL', 'Artikel Nr.');

// BOF - web28 - 2010-05-07 - PayPal API Modul
define('NAVBAR_TITLE_PAYPAL_CHECKOUT','PayPal-Checkout');
define('PAYPAL_ERROR','PayPal afbreken');
define('PAYPAL_NOT_AVIABLE','PayPal Express is niet beschikbaar.<br />Selecteer aub een andere methode van betalen<br />of probeer het later nog eens.<br />');
define('ERROR_ADDRESS_NOT_ACCEPTED', 'We zijn niet in staat om uw bestelling uit voeren als u uw adres niet bevestigd!');
define('PAYPAL_FEHLER','PayPal geeft een foutmelding om de bestelling af te ronden..<br />Uw bestelling is wel opgeslagen, maar wordt niet uitgevoerd.<br />Maak een nieuwe bestelling aan a.u.b.<br />Bedankt voor uw begrip.<br />');
define('PAYPAL_WARTEN','PayPal geeft een foutmelding om de bestelling af te ronden.<br />U dient Paypal te betalen om de bestelling af te ronden.<br />Hieronder ziet u de opgeslagen bestelling.<br /> Bedankt voor uw begrip.<br />');
define('PAYPAL_NEUBUTTON','Klik nogmaals om de bestelling af te ronden na betaling.<br />Elke andere toets zal leiden tot het afbreken van de bestelling.');
define('ERROR_ADDRESS_NOT_ACCEPTED', '* Zolang u uw factuur- en verzendadres niet accepteert,\n kunnen we uw bestelling helaas niet accepteren!\n\n');
define('PAYPAL_GS','Coupon');
define('PAYPAL_TAX','Belasting');
define('PAYPAL_EXP_WARN','Opmerking! Eventueel hieruit voortvloeiende verzendkosten worden uiteindelijk berekend in de winkel.');
define('PAYPAL_EXP_VORL','Voorlopige verzendkosten');
define('PAYPAL_EXP_VERS','12.90');
// EOF - web28 - 2010-05-07 - PayPal API Modul
define('PAYPAL_ADRESSE','Het land in uw PayPal verzendadres staat niet vermeld in onze shop.<br />Neemt u alstublieft contact met ons op.<br />Bedankt voor uw begrip.<br />Land ontvangen door PayPal:');
define('PAYPAL_AMMOUNT_NULL','Het verwachte orderbedrag (zonder verzendkosten) is gelijk aan 0.<br />Dus PayPal Express is niet beschikbaar.<br />Kies een andere betaalmethode.<br />Dank u voor uw begrip.<br />');


define('BASICPRICE_VPE_TEXT','alleen in deze hoeveelheid '); // Hetfield - 2009-11-26 - Added language definition for vpe at graduated prices
//web - 2010-07-11 - Preisanzeige bei Staffelpreisen (größte Staffel)
define('GRADUATED_PRICE_MAX_VALUE', 'van');


define('_SHIPPING_TO', 'Verzending naar ');

define('ERROR_SQL_DB_QUERY','Het spijt ons, maar er is een databasefout gemaakt.');
define('ERROR_SQL_DB_QUERY_REDIRECT','U wordt doorgestuurd naar onze homepage in %s seconden!');

define('TEXT_AGB_CHECKOUT','Gelieve kennis te nemen van onze algemene voorwaarden en klanteninformatie %s alsook van ons privacybeleid %s.');
define('TEXT_REVOCATION_CHECKOUT', ', onze herroepingsinstructie %s');
define('DOWNLOAD_NOT_ALLOWED', '<h1>Voorgeprogrammeerd</h1>Deze server kon niet controleren of u bevoegd bent om toegang te krijgen tot het gevraagde document. Ofwel hebt u de verkeerde gegevens verstrekt (bijvoorbeeld een slecht wachtwoord), ofwel begrijpt uw browser niet hoe u de vereiste gegevens moet verstrekken.');

define('TEXT_INFO_DETAILS', ' Details');
define('TEXT_SAVED_BASKET', 'Controleer uw winkelwagen. Het bevat nog steeds artikelen van een eerder bezoek.');
//define('TEXT_PRODUCTS_QTY_REDUCED', 'Die maximal erlaubte St&uuml;ckzahl f&uuml;r den zuletzt hinzugef&uuml;gten bzw. ge&auml;nderten Artikel wurde &uuml;berschritten. Die St&uuml;ckzahl wurde automatisch auf die maximal erlaubte St&uuml;ckzahl reduziert.'); // Now we use MAX_PROD_QTY_EXCEEDED

define('ERROR_REVIEW_TEXT', 'De evaluatietekst moet uit ten minste ' . REVIEW_TEXT_MIN_LENGTH . ' karakters bestaan.');
define('ERROR_REVIEW_RATING', 'Voer uw beoordeling in.');
define('ERROR_REVIEW_AUTHOR', 'Voer uw naam in, alstublieft.');

define('GV_NO_PAYMENT_INFO', '<div class="infomessage">U kunt uw kredietsaldo gebruiken om de bestelling volledig te betalen. Als u uw tegoed niet wilt gebruiken, deactiveer dan de kredietselectie en kies een betaalmethode!</div>');
define('GV_ADD_PAYMENT_INFO', '<div class="errormessage">Uw creditsaldo is niet voldoende of kan niet op alle posten worden toegepast om de bestelling volledig te betalen. Kies a.u.b. een extra betaalmethode!</div>');

define('_SHIPPING_FREE','Gratis verzending');
define('TEXT_INFO_FREE_SHIPPING_COUPON', 'De verzendingskosten worden gedekt door uw coupon.');

define('TEXT_CONTENT_NOT_FOUND', 'Deze pagina is niet gevonden!');
define('TEXT_SITE_NOT_FOUND', 'Deze pagina is niet gevonden!');

// error message for exceeded product quantity, noRiddle
define('MAX_PROD_QTY_EXCEEDED', '
Het maximaal toegestane aantal stukken van ' .MAX_PRODUCTS_QTY. ' voor <span style="font-style:italic;">"%s"</span> werd overschreden.<br />Het aantal stukken werd automatisch teruggebracht tot het toegestane aantal.');

define('IMAGE_BUTTON_CONTENT_EDIT', 'Inhoud bewerken');
define('PRINTVIEW_INFO', 'Artikelgegevensblad afdrukken');
define('PRODUCTS_REVIEW_LINK', 'Schrijf een recensie');

define('TAX_INFO_SMALL_BUSINESS', 'Definitieve prijs volgens &sect; 19 UStG.');
define('TAX_INFO_SMALL_BUSINESS_FOOTER', 'Op grond van de status van kleine onderneming volgens &sect; 19 UStG, rekenen wij geen omzetbelasting aan en tonen deze dus ook niet.');

define('NEED_CHANGE_PWD', 'Wijzig uw wachtwoord.');
define('TEXT_REQUEST_NOT_VALID', 'De link is verlopen. Vraag een nieuw wachtwoord aan.');

define('NAVBAR_TITLE_WISHLIST', 'Pamflet');
define('TEXT_TO_WISHLIST', 'Op het schrijfblok');
define('IMAGE_BUTTON_TO_WISHLIST', 'Op het schrijfblok');

define('GUEST_REDEEM_NOT_ALLOWED', 'Gasten kunnen geen vouchers inwisselen.');
define('GUEST_VOUCHER_NOT_ALLOWED', 'Vouchers kunnen niet als gast worden gekocht.');

define('TEXT_FILTER_SETTING_DEFAULT', 'Artikelen per pagina');
define('TEXT_FILTER_SETTING', '%s Artikelen per pagina');
define('TEXT_FILTER_SETTING_ALL', 'Toon alle artikelen');
define('TEXT_SHOW_ALL', ' (alles laten zien)');
define('TEXT_FILTER_SORTING_DEFAULT', 'Sorteer op ...');
define('TEXT_FILTER_SORTING_ABC_ASC', 'A tot Z');
define('TEXT_FILTER_SORTING_ABC_DESC', 'Z tot A');
define('TEXT_FILTER_SORTING_PRICE_ASC', 'Prijs oplopend');
define('TEXT_FILTER_SORTING_PRICE_DESC', 'Prijs dalend');
define('TEXT_FILTER_SORTING_DATE_DESC', 'Nieuwste producten op de eerste plaats');
define('TEXT_FILTER_SORTING_DATE_ASC', 'Oudste producten eerst');
define('TEXT_FILTER_SORTING_ORDER_DESC', 'Meest verkocht');

define('NAVBAR_TITLE_ACCOUNT_CHECKOUT_EXPRESS_EDIT', 'Mijn Quick Buy-instellingen');
define('SUCCESS_CHECKOUT_EXPRESS_UPDATED', 'De instellingen van My Quick Buy zijn opgeslagen.');
define('TEXT_ERROR_CHECKOUT_EXPRESS_SHIPPING_ADDRESS', 'Selecteer een verzendadres');
define('TEXT_ERROR_CHECKOUT_EXPRESS_SHIPPING_MODULE', 'Selecteer een verzendmethode');
define('TEXT_ERROR_CHECKOUT_EXPRESS_PAYMENT_ADDRESS', 'Selecteer een factuuradres');
define('TEXT_ERROR_CHECKOUT_EXPRESS_PAYMENT_MODULE', 'Selecteer een betalingsmethode');
define('TEXT_CHECKOUT_EXPRESS_INFO_LINK', 'Mijn Quick Buy');
define('TEXT_CHECKOUT_EXPRESS_INFO_LINK_MORE', 'Meer informatie over My Quick Buy &raquo;');
define('TEXT_CHECKOUT_EXPRESS_CHECK_CHEAPEST', 'Kies altijd de goedkoopste verzendmethode');

define('AC_SHOW_PAGE', 'Pagina ');
define('AC_SHOW_PAGE_OF', ' van ');

define('FREE_SHIPPING_INFO', 'vanaf %s bestelwaarde versturen wij uw bestelling zonder verzendkosten');

define('MANUFACTURER_NOT_FOUND', 'Fabrikant niet gevonden');
define('ENTRY_TOKEN_ERROR', 'Controleer uw inzendingen.');

define('IMAGE_BUTTON_CONFIRM', 'Bevestig'); // Needed for PayPal

// ***************************************************
//  Kontodaten-PrŸfung
// ***************************************************
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_0', 'Bankrekening ok&eacute;.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1', 'Rekeningnummer en/of bankcode zijn ongeldig of komen niet overeen!');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2', 'Het rekeningnummer kan niet automatisch worden gecontroleerd.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_3', 'Het rekeningnummer kan niet worden gecontroleerd.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_4', 'Rekeningnummer kan niet worden gecontroleerd! Controleer uw gegevens nog eens.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_5', 'Deze bankcode bestaat niet, corrigeer uw invoer.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_8', 'Fout in de bankcode of geen bankcode gespecificeerd!');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_9', 'Geen rekeningnummer gegeven!');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_10', 'U heeft geen rekeninghouder opgegeven.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_128', 'Interne fout bij de controle van de bankgegevens.');

// Fehlermeldungen alle IBAN-Nummern 
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1000', 'Landcode in IBAN (1ste en 2de cijfer) onbekend.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1010', 'IBAN-lengte onjuist: Te veel cijfers ingevoerd.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1020', 'IBAN-lengte verkeerd: Te weinig cijfers ingevoerd.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1030', 'Het IBAN komt niet overeen met het voor het land gedefinieerde formaat.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1040', 'Controleer de cijfers van het IBAN (cijfers 3 en 4) niet correct -> typfout in het IBAN.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1050', 'BIC hat ungültiges Format.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1060', 'BIC-lengte onjuist: Te veel tekens ingevoerd. 8 of 11 tekens zijn vereist.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1070', 'BIC-Länge falsch: Zu wenige Zeichen angeben. 8 oder 11 Zeichen sind erforderlich.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1080', 'BIC-lengte niet goed: 8 of 11 tekens vereist');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1200', 'Helaas kunnen we geen IBAN\'s van het opgegeven land accepteren (1ste en 2de cijfer van het IBAN).');

// Fehlermeldungen fŸr deutsche Kontonummern 
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2001', 'Rekeningnummer (cijfers 13 tot 22) en/of bankcode (cijfers 5 tot 12) in IBAN ongeldig of niet overeenkomend.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2002', 'Het rekeningnummer in het IBAN (cijfers 13 tot 22) kan niet automatisch worden gecontroleerd.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2003', 'Voor rekeningnummers die in het IBAN zijn opgenomen (cijfers 13 tot en met 22) is geen controlecijferprocedure gedefinieerd.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2004', 'Rekeningnummer in IBAN (cijfers 13 tot 22) kan niet worden gecontroleerd!');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2005', 'Bankcode (cijfers 5 tot 12 van het IBAN) bestaat niet!');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2008', 'Fout met bankcode (cijfers 5 tot 12 van het IBAN) of geen bankcode opgegeven!');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2009', 'Geen rekeningnummer (cijfers 13 tot 22 van het IBAN) gegeven!');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2010', 'Geen rekeninghouder gespecificeerd.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2020', 'BIC ongeldig: Er bestaat geen bank met deze BIC.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2128', 'Interne fout bij de controle van de bankgegevens.');

define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_UNKNOWN', 'Onbekende fout bij het controleren van de bankgegevens.');

define('PRODUCT_REVIEWS_SUCCESS', 'Dank u wel voor uw beoordeling.');
define('PRODUCT_REVIEWS_SUCCESS_WAITING', 'Dank u wel voor uw beoordeling. Dit wordt nu gecontroleerd voordat het wordt geactiveerd.');

define('TITLE_PRODUCTS_NEW', 'Nieuwe artikelen');
define('TITLE_SPECIALS', 'Aanbiedingen');

define('SITEMAP_ERROR_400', 'Fout 400: Het verzoek was syntactisch onjuist.');
define('SITEMAP_ERROR_401', 'Fout 401: Authenticatiefout.');
define('SITEMAP_ERROR_403', 'Fout 403: De server weigert uit te voeren.');
define('SITEMAP_ERROR_404', 'Fout 404: De pagina die u zocht werd niet gevonden!');
define('SITEMAP_ERROR_500', 'Fout 500: Er was een interne fout op de server.');
?>
