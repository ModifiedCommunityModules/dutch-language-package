<?php
/* -----------------------------------------------------------------------------------------
   $Id: english.php 11739 2019-04-11 11:32:27Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
 	 based on:
	  (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
	  (c) 2002-2003 osCommerce - www.oscommerce.com
	  (c) 2001-2003 TheMedia, Dipl.-Ing Thomas Plänkers - http://www.themedia.at & http://www.oscommerce.at
	  (c) 2003 XT-Commerce - community made shopping http://www.xt-commerce.com
    (c) 2013 Gambio GmbH - http://www.gambio.de
  
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

// error messages
define('NOTE_ADDRESS_CHANGED', 'Het adres is veranderd.');
define('ADDRESSES_MUST_BE_EQUAL','Met de gekozen betaalmethode moet het gekozen facturerings- en afleveradres overeenkomen!');
define('INSTALLMENT_TYPE_NOT_SELECTED', 'Geen enkel type geselecteerd.');
define('PAYDATA_INCOMPLETE', 'De indicaties voor de betalingswijze zijn onvolledig.');
define('PAYMENT_ERROR', 'Er is een fout opgetreden tijdens de verwerking.');
define('ERROR_MUST_CONFIRM_MANDATE', 'Gelieve te bevestigen dat u de SEPA-domicili&euml;ringsopdracht wenst te verlenen.');
 
// credit risk check
define('CREDIT_RISK_HEADING', 'Kredietcontrole');
defined('BUTTON_CONFIRM') OR define('BUTTON_CONFIRM', 'Ja, voer een kredietcontrole uit');
define('BUTTON_NOCONFIRM', 'Nee, voer geen verificatie uit.');
define('TEXT_CREDIT_RISK_INFO', 'Er wordt een kredietbeoordeling uitgevoerd.');
define('TEXT_CREDIT_RISK_COMFIRM', 'Wilt u het hiermee eens zijn?');
define('CREDIT_RISK_FAILED', 'Kies een andere betalingsmethode.');
define('CREDIT_RISK_CONFIGURATION', 'Kredietcontrole');
define('CR_ACTIVE', 'actieve');
define('CR_OPERATING_MODE', 'Bedrijfsmodus');
define('CR_TIMEOFCHECK', 'Tijdstip van de evaluatie');
define('CR_TIMEOFCHECK_BEFORE', 'v&oacute;&oacute;r de keuze van de betalingsmethode');
define('CR_TIMEOFCHECK_AFTER', 'na de keuze van de betalingsmethode');
define('CR_TYPEOFCHECK', 'Methode van evaluatie');
define('CR_TYPEOFCHECK_ISCOREHARD', 'Infoscore (harde criteria)');
define('CR_TYPEOFCHECK_ISCOREALL', 'Infoscore (alle criteria)');
define('CR_TYPEOFCHECK_ISCOREBSCORE', 'Infoscore (alle criteria + score van boni');
define('CR_NEWCLIENTDEFAULT', 'Standaardwaarde voor nieuwe klanten');
define('CR_VALIDITY', 'Geldigheid');
define('CR_MIN_CART_VALUE', 'Minimumwaarde van de goederen');
define('CR_MAX_CART_VALUE', 'Maximale waarde van de goederen');
define('CR_CHECKFORGENRE', 'Evaluatie met');
define('CR_ERROR_MODE', 'Foutief gedrag');
define('CR_ERROR_MODE_ABORT', 'Annuleringsproces');
define('CR_ERROR_MODE_CONTINUE', 'doorgaan met');
define('CR_NOTICE', 'Let op:');
define('CR_CONFIRMATION', 'Verzoek om goedkeuring');
define('CR_ABTEST', 'A/B-test');
 
// address check
define('TEXT_ADDRESS_CHECK_HEADING', 'Correct adres');
define('TEXT_ADDRESS_CHECK_CHANGED', 'gecorrigeerd');
define('AC_ACTIVE', 'actieve');
define('AC_OPERATING_MODE', 'Bedrijfsmodus');
define('AC_BILLING_ADDRESS', 'Factuuradres');
define('AC_DELIVERY_ADDRESS', 'Verzendadres');
define('AC_AUTOMATIC_CORRECTION', 'Automatische correctie');
define('AC_ERROR_MODE', 'Foutief gedrag');

define('AC_MIN_CART_VALUE', 'Minimumwaarde van de goederen');
define('AC_MAX_CART_VALUE', 'Maximale waarde van de goederen');
define('AC_VALIDITY', 'Geldigheid');
define('AC_ERROR_MESSAGE', 'Foutmelding');
define('AC_PSTATUS_MAPPING', 'Personenstatuskaart');
define('AC_BACHECK_NONE', 'niet controleren');
define('AC_BACHECK_BASIC', 'Basis');
define('AC_BACHECK_PERSON', 'Persoon (alleen DE!)');
define('AC_AUTOMATIC_CORRECTION_NO', 'geen');
define('AC_AUTOMATIC_CORRECTION_YES', 'ja');
define('AC_AUTOMATIC_CORRECTION_USER', 'Beslissing van de gebruikers');
define('AC_ERROR_MODE_ABORT', 'Annuleringsproces');
define('AC_ERROR_MODE_REENTER', 'Herhaal');
define('AC_ERROR_MODE_CHECK', 'Voer de volgende kredietcontrole uit');
define('AC_ERROR_MODE_CONTINUE', 'doorgaan met');
define('DAYS', 'Dagen');
define('ERROR_MESSAGE_INFO', 'Gebruik {payone_error} als plaatshouder voor het antwoord van het PAYONE-platform');
define('AC_PSTATUS_NOPCHECK', 'Geen persoonscontrole uitgevoerd');
define('AC_PSTATUS_FULLNAMEKNOWN', 'Voornaam en achternaam zijn bekend');
define('AC_PSTATUS_LASTNAMEKNOWN', 'Achternaam is bekend');
define('AC_PSTATUS_NAMEUNKNOWN', 'Voornaam en achternaam onbekend');
define('AC_PSTATUS_NAMEADDRAMBIGUITY', 'Dubbelzinnigheid in naam tot adres');
define('AC_PSTATUS_UNDELIVERABLE', 'niet (meer) leverbaar');
define('AC_PSTATUS_DEAD', 'Overledene');
define('AC_PSTATUS_POSTALERROR', 'Verkeerd postadres');
 
// api
define('STATUS_UPDATED_BY_PAYONE', 'Status bijgewerkt door PAYONE');
define('COMMENT_ERROR', 'comment_error');
define('COMMENT_REDIRECTION_INITIATED', 'comment_redirection_initiated');
define('COMMENT_AUTH_APPROVED', 'Betaling goedgekeurd');
define('COMMENT_PREAUTH_APPROVED', 'Betaling goedgekeurd');
define('VOUCHER_OR_DISCOUNT', 'voucher_or_discount');
define('MISC_HANDLING', 'misc_handling');
define('SHIPPING_COST', 'shipping_cost');
 
// payment
define('paymenttype_visa', 'Visa');
define('paymenttype_mastercard', 'Mastercard');
define('paymenttype_amex', 'American Express');
define('paymenttype_cartebleue', 'Carte Bleue');
define('paymenttype_dinersclub', 'Diners Club');
define('paymenttype_discover', 'Discover');
define('paymenttype_jcb', 'JCB');
define('paymenttype_maestro', 'Maestro');
define('paymenttype_billsafe', 'BillSAFE');
define('paymenttype_klarna', 'Klarna');
define('paymenttype_commerzfinanz', 'CommerzFinanz');
define('paymenttype_lastschrift', 'Automatische incasso');
define('paymenttype_invoice', 'Verkoop op rekening');
define('paymenttype_prepay', 'Contant geld vooraf');
define('paymenttype_cod', 'Onder rembours');
define('paymenttype_paypal', 'PayPal');
define('paymenttype_paydirekt', 'PayDirekt');
define('paymenttype_sofortueberweisung', 'Online overschrijving');
define('paymenttype_giropay', 'GiroPay');
define('paymenttype_eps', 'EPS');
define('paymenttype_pfefinance', 'Post-Finance EFinance');
define('paymenttype_pfcard', 'Post-Finance Card');
define('paymenttype_ideal', 'iDEAL');
 
// payment form
define('selection_type', 'Betalingswijze:');
define('customers_dob', 'Geboortedatum (DD.MM.YYYY):');
define('customers_telephone', 'Telefoon:');
define('personalid', 'Persoonlijk ID:');
define('addressaddition', 'Aanvullend adres:');
 
// installment
define('TEXT_KLARNA_CONFIRM', ' Ik ga akkoord met de gegevensverwerking die nodig is voor de uitvoering van de verkoop op rekening en een identiteits- en kredietcontrole door Klarna. Ik kan mijn %s op elk moment herroepen met effect voor de toekomst. De algemene voorwaarden van de dealer zijn van toepassing.');
define('TEXT_KLARNA_ERROR_CONDITIONS', 'Als u de factuurvoorwaarden van Klarna niet accepteert, kunnen wij uw bestelling helaas niet accepteren!');
define('TEXT_KLARNA_INVOICE', 'Voor meer informatie over de verkoop op rekening, zie de');
define('KLARNA_STOREID', 'Klarna SoreID');
define('KLARNA_COUNTRIES', 'Klarna Countries');
 
// otrans
define('onlinetransfer_type', 'Type:');
define('bankaccountholder', 'Rekeninghouder:');
define('iban', 'IBAN:');
define('bic', 'BIC:');
define('ideal', 'Bankgroep:');
define('eps', 'Bankgroep:');
define('bankaccount', 'Rekeningnummer:');
define('bankcode', 'Bankcode:');
 
// ELV
define('SEPA_MANDATE_HEADING', 'SEPA-domicili&euml;ring');
define('SEPA_MANDATE_INFO', 'Voor het aflossen van het bedrag via domicili&euml;ring van uw bankrekening hebben we een SEPA-domicili&euml;ringsmandaat nodig.');
define('SEPA_MANDATE_CONFIRM_LABEL', 'Ik wil graag een mandaat verlenen (elektronische verzending)');
define('NOTE_GERMAN_ACCOUNT', 'of betaal zoals gebruikelijk met uw bekende bankgegevens (alleen voor Duitse bankrekeningen)');
define('ELV_IBAN', 'IBAN:');
define('ELV_BIC', 'BIC:');
define('ELV_ACCOUNT_HOLDER', 'Rekeninghouder:');
define('ELV_BANKCODE', 'Bankcode:');
define('ELV_ACCOUNT_NUMBER', 'Rekeningnummer:');
define('ELV_COUNTRY', 'Land:');
define('ELV_COUNTRY_DE', 'Duitsland');
define('ELV_COUNTRY_AT', 'Oostenrijk');
define('ELV_COUNTRY_NL', 'Nederland');
define('SEPA_COUNTRIES', 'Lijst van ondersteunde SEPA-domicili&euml;ringslanden');
define('SEPA_DISPLAY_KTOBLZ', 'Extra velden bankrekening/bankcode');
define('SEPA_DISPLAY_KTOBLZ_NOTE', 'Toon extra velden voor rekeningnummer/bankcode (alleen Duitse bankrekeningen)');
define('SEPA_USE_MANAGEMANDATE', 'Verlening van het mandaat mogelijk maken');
define('SEPA_USE_MANAGEMANDATE_NOTE', 'De toekenning van het mandaat vindt plaats met het in rekening gebrachte verzoek "managementmandaat". De aanvraag omvat een controle van de bankrekening. Hiermee is echter geen aanvraag voor de POS-bloklijst mogelijk.');
define('SEPA_DOWNLOAD_PDF', 'Download het mandaat als PDF');
define('SEPA_DOWNLOAD_PDF_NOTE', 'Aanbieding om het SEPA-domiciliëringsmandaat als PDF-bestand te downloaden (alleen beschikbaar als u het product "SEPA-mandaten als PDF" oplaadt bij PAYONE)');
define('DOWNLOAD_MANDATE_HERE', 'U kunt nu het mandaat als onderdeel van de SEPA-incassobetaling hier downloaden: ');
define('MANDATE_PDF', 'PDF-bestand');
define('CHECK_BANKDATA', 'Accountgegevens controleren');
define('DONT_CHECK', 'controleer de accountgegevens niet.');
define('CHECK_BASIC', 'Basis');
define('CHECK_POS', 'met POS-bloklijst');
 
// cc
define('TEXT_CARDOWNER', 'Kaarthouder:');
define('TEXT_CARDTYPE', 'Soort kaart:');
define('TEXT_CARDNO', 'Kaartnummer:');
define('TEXT_CARDEXPIRES', 'Geldig tot (Maand / Jaar):');
define('TEXT_CARDCHECKNUM', 'Controlecijfer:');
define('TEXT_CHECK_DATA', 'Controleer uw gegevens.');
 
// orders status
define('ORDERS_STATUS_CONFIGURATION', 'Bestelstatusconfiguratie');
define('ORDERS_STATUS_TMP', 'tijdelijke status');
define('ORDERS_STATUS_PENDING', 'Betalingsontvangst onzeker/verwacht');
define('ORDERS_STATUS_PAID', 'Betaling succesvol');
define('ORDERS_STATUS_DENIED', 'Betaling mislukt/geweigerd');
define('ORDERS_STATUS_APPROVED', 'Betaling goedgekeurd');
define('ORDERS_STATUS_APPOINTED', 'Betaling benoemd');
define('ORDERS_STATUS_CAPTURE', 'Betalingsvastlegging');
define('ORDERS_STATUS_UNDERPAID', 'Betaling onvoldoende');
define('ORDERS_STATUS_CANCELATION', 'Betaling geannuleerd');
define('ORDERS_STATUS_REFUND', 'Terugbetaling van de betaling');
define('ORDERS_STATUS_DEBIT', 'Betaling');
define('ORDERS_STATUS_TRANSFER', 'Betalingstransactie');
define('ORDERS_STATUS_REMINDER', 'Betalingsherinnering');
define('ORDERS_STATUS_VAUTHORIZATION', 'Betaling vAuth');
define('ORDERS_STATUS_VSETTLEMENT', 'Betaling vSchikking');
define('ORDERS_STATUS_INVOICE', 'Betaling op rekening');
define('ORDERS_STATUS_NONE', 'geen wijziging');
define('TEXT_EXTERN_CALLBACK_URL', 'URL-status doorsturen');
define('TEXT_EXTERN_CALLBACK_TIMEOUT', 'Time-out');
 
// global
defined('TEXT_YES') OR define('TEXT_YES', 'Ja');
defined('TEXT_NO') OR define('TEXT_NO', 'Geen');
define('ERROR_OCCURED', 'Fout opgetreden');
define('BOX_PAYONE_CONFIG', 'PAYONE-configuratie');
define('BOX_PAYONE_LOGS', 'PAYONE API-logboek');
define('PAYONE_CONFIG_TITLE', 'PAYONE-configuratie');
define('PAYMENT_CONFIGURATION', 'Betalingsconfiguratie');
define('GLOBAL_CONFIGURATION', 'Wereldwijde parameters');
define('MERCHANT_ID', 'Merchant-ID');
define('PORTAL_ID', 'Portal-ID');
define('SUBACCOUNT_ID', 'Subaccount-ID');
define('KEY', 'Sleutel');
define('OPERATING_MODE', 'Bedrijfsmodus');
define('OPMODE_TEST', 'Testmodus');
define('OPMODE_LIVE', 'Live mode');
define('AUTHORIZATION_METHOD', 'Autorisatiemethode');
define('AUTHMETHOD_AUTH', 'Onmiddellijke toestemming');
define('AUTHMETHOD_PREAUTH', 'Pre-autorisatie');
define('SEND_CART', 'Overdrachtswagen');
 
// payment genre
define('PAYMENT_GENRE', 'Betalingswijze');
define('PAYMENTGENRE_CONFIGURATION', 'Configuratie van de betalingsmethoden');
define('PG_ACTIVE', 'actieve');
define('PG_ORDER', 'Sorteervolgorde');
define('PG_NAME', 'Interne naam');
define('PG_MIN_CART_VALUE', 'Minimumwaarde van de goederen');
define('PG_MAX_CART_VALUE', 'Maximale waarde van de goederen');
define('PG_OPERATING_MODE', 'Bedrijfsmodus');
define('PG_GLOBAL_OVERRIDE', 'de globale parameters opheffen');
define('PG_COUNTRIES', 'actieve landen');
define('PG_SCORING_ALLOWED', 'toegestane scoringswaarden');
define('PG_RED', 'rood');
define('PG_YELLOW', 'geel');
define('PG_GREEN', 'groene');
define('PG_PAYMENT_TYPES', 'Betalingswijzen');
define('PG_PAYMENTTYPE_VISA', 'Visa');
define('PG_PAYMENTTYPE_MASTERCARD', 'Mastercard');
define('PG_PAYMENTTYPE_AMEX', 'American Express');
define('PG_PAYMENTTYPE_CARTEBLEUE', 'Carte Bleue');
define('PG_PAYMENTTYPE_DINERSCLUB', 'Diners Club');
define('PG_PAYMENTTYPE_DISCOVER', 'Discover');
define('PG_PAYMENTTYPE_JCB', 'JCB');
define('PG_PAYMENTTYPE_MAESTRO', 'Maestro');
define('PG_PAYMENTTYPE_LASTSCHRIFT', 'Automatische incasso');
define('PG_PAYMENTTYPE_INVOICE', 'Verkoop op rekening');
define('PG_PAYMENTTYPE_PREPAY', 'Contant geld vooraf');
define('PG_PAYMENTTYPE_COD', 'Onder rembours');
define('PG_PAYMENTTYPE_PAYPAL', 'PayPal');
define('PG_PAYMENTTYPE_BILLSAFE', 'BillSAFE');
define('PG_PAYMENTTYPE_COMMERZFINANZ', 'CommerzFinanz');
define('PG_TYPE_ACTIVE', 'actieve');
define('PG_CHECK_CAV', 'Aanvraag voor controlecijfers');
define('PG_PAYMENTTYPE_SOFORTUEBERWEISUNG', 'Online overschrijving (&Uuml;berweisung by Sofort.)');
define('PG_PAYMENTTYPE_GIROPAY', 'GiroPay');
define('PG_PAYMENTTYPE_EPS', 'EPS');
define('PG_PAYMENTTYPE_PFEFINANCE', 'Post-Finance EFinance');
define('PG_PAYMENTTYPE_PFCARD', 'Post-Finance Card');
define('PG_PAYMENTTYPE_IDEAL', 'iDEAL');
define('OVERRIDE_DATA', 'Lokale parameters');
define('ADD_PAYMENT_GENRE', 'Betaalmethode toevoegen');
define('PAYGENRE_CREDITCARD', 'Creditcards');
define('PAYGENRE_ONLINETRANSFER', 'Online transactie');
define('PAYGENRE_EWALLET', 'e-Wallet');
define('PAYGENRE_ACCOUNTBASED', 'Betaalmethoden op basis van een bankrekening');
define('PAYGENRE_INSTALLMENT', 'Huurkoop/acteuren');
 
// config
define('ACTIVE', 'actieve');
define('CONFIG_SAVE', 'Configuratie opslaan');
define('NO_PAYMENTGENRE_CONFIGURED', 'Er is nog geen betaalmethode geconfigureerd.');
define('ADDRESS_CHECK_CONFIGURATION', 'Adresverificatie');
define('SELECT_ALL_COUNTRIES', 'alle landen activeren');
define('SELECT_NO_COUNTRY', 'alle landen deactiveren');
define('REMOVE_PAYMENT_GENRE', 'Verwijder de betalingsmethode');
define('REMOVE_THIS_GENRE', 'Verwijder deze betaalmethode bij het opslaan');
define('CONFIGURATION_SAVED', 'Configuratie opgeslagen');
define('PAYMENTGENRE_ADDED', 'Betalingsmethode toegevoegd');
define('PAYONE_ORDERS_HEADING', 'PAYONE-betaling');
define('TRANSACTIONS', 'Transacties');
define('TXID', 'Transactie-ID');
define('USERID', 'Gebruikers-ID');
define('CREATED', 'aangemaakt');
define('LAST_MODIFIED', 'laatste aanpassing');
define('STATUS', 'Status');
define('TRANSACTION_STATUS', 'Transactiestatus');
define('NO_TRANSACTION_STATUS_RECEIVED', 'nog geen transactiestatus ontvangen');
define('ERROR_OCCURRED', 'Fout opgetreden');
define('ERROR_ADDRESSES_MUST_BE_EQUAL', 'Met de gekozen betaalmethode moet het gekozen facturerings- en afleveradres overeenkomen!');
define('TABLE_HEADING_CHECK', 'Kies');
define('DUMP_CONFIG', 'Configuratie exporteren');
define('CONFIGURATION_DUMPED_TO', 'Configuratie opgeslagen in bestand');
define('ERROR_DUMPING_CONFIGURATION', 'Er is een fout opgetreden bij het exporteren van de configuratie.');
define('INSTALL_CONFIG', 'Installeer PAYONE');
 
// Capture
define('CAPTURE_TRANSACTION', 'Weddenschap vastleggen');
define('CAPTURE_AMOUNT', 'Bedrag');
define('CAPTURE_SUBMIT', 'Nu vangen');
define('AMOUNT_CAPTURED', 'Bedrag gevangen genomen');
 
// Clearing
define('CLEARING_INTRO', 'Maak het factuurbedrag over naar de volgende bankrekening:');
define('CLEARING_OUTRO', 'Uw bestelling wordt pas verzonden als wij uw betaling op onze bankrekening hebben ontvangen.');
define('CLEARING_ACCOUNTHOLDER', 'Rekeninghouder: ');
define('CLEARING_ACCOUNT', 'Rekeningnummer: ');
define('CLEARING_BANKCODE', 'Bankcode: ');
define('CLEARING_IBAN', 'IBAN: ');
define('CLEARING_BIC', 'BIC: ');
define('CLEARING_BANK', 'Bank: ');
define('CLEARING_AMOUNT', 'Bedrag');
define('CLEARING_TEXT', 'Referentie: ');
 
// Refund
define('REFUND_TRANSACTION', 'Kredietadvies');
define('REFUND_SUBMIT', 'Verwerk kredietadvies');
define('REFUND_AMOUNT', 'Bedrag');
define('REFUND_BANKCOUNTRY', 'Land');
define('REFUND_COUNTRY_DE', 'Duitsland');
define('REFUND_COUNTRY_FR', 'Frankrijk');
define('REFUND_COUNTRY_NL', 'Nederland');
define('REFUND_COUNTRY_AT', 'Oostenrijk');
define('REFUND_COUNTRY_CH', 'Zwitserland');
define('REFUND_BANKACCOUNT', 'Rekeningnummer');
define('REFUND_BANKCODE', 'Bankcode');
define('REFUND_BANKBRANCHCODE', 'Tak');
define('REFUND_BANKCHECKDIGIT', 'Controlecijfer');
define('REFUND_IBAN', 'IBAN');
define('REFUND_BIC', 'BIC');
define('AMOUNT_REFUNDED', 'Controlecijfer');
 
// Log
define('PAYONE_LOGS_TITLE', 'PAYONE API Log');
define('EVENT_ID', 'Event-ID');
define('DATETIME', 'Tijdstip');
define('CUSTOMER', 'Klant (zolang bekend)');
define('START_DATE', 'Begin met');
define('END_DATE', 'Einde');
define('PAGE', 'Pagina');
define('SEARCH', 'Zoeken op');
define('SHOW', 'tonen');
define('EVENT_LOG_COUNT', 'Subevent-Nee.');
define('NO_LOGS', 'Er zijn geen inzendingen voor de gekozen periode.');
define('API', 'API');

// Payolution
define('PAYOLUTION_CHANNELID', 'Payolution Kanaal-ID');
define('PAYOLUTION_CHANNELPWD', 'Payolution Kanaalwachtwoord');

define('paymenttype_payolution_debit', 'Payolution DirectDebit');
define('paymenttype_payolution_invoice', 'Betalingsoplossing Factuur');
define('paymenttype_payolution_monthly', 'Betalingsoplossing Maandelijkse factuur');
define('paymenttype_payolution_financing', 'Payolution Financiering');

define('company_uid', 'BTW (facultatief):');
define('company_trade_registry_number', 'Handelsregister (facultatief):');
define('company_register_key', 'Registratie-ID (optioneel):');

define('TEXT_PAYOLUTION_ERROR_CONDITIONS', 'Als u niet akkoord gaat met de overdracht van uw gegevens voor de afwikkeling van de aankoop, kunnen wij uw bestelling helaas niet accepteren!');
define('TEXT_PAYOLUTION_CONFIRM_SEPA', 'Ik geef toestemming voor de <a target="_blank" href="%s">SEPA-domicili&euml;ringsmandaat</a>');
define('TEXT_PAYOLUTION_CONFIRM', 'Ik ga akkoord met de verificatie van de gegevens die nodig zijn voor de voltooiing van de aankoop op de factuur en een identiteits- en kredietcontrole. <a class="'.((defined('TPL_POPUP_SHIPPING_LINK_CLASS')) ? TPL_POPUP_SHIPPING_LINK_CLASS : POPUP_PRODUCT_LINK_CLASS).'" href="https://payment.payolution.com/payolution-payment/infoport/dataprivacydeclaration?lang=en&mId='.base64_encode(STORE_OWNER).((defined('TPL_POPUP_CONTENT_LINK_PARAMETERS')) ? TPL_POPUP_CONTENT_LINK_PARAMETERS : POPUP_PRODUCT_LINK_PARAMETERS).'">mijn toestemming</a> met werking voor de toekomst op elk moment.');

define('TEXT_EACH_MONTH', 'per maand');
define('TEXT_RATES', 'tarieven');
define('TEXT_DURATION', 'Duur');
define('TEXT_DURATION_MONTHS', 'maanden');
define('TEXT_FINANCING_AMOUNT', 'Financieringsbedrag');
define('TEXT_TOTAL_AMOUNT', 'Totaal bedrag');
define('TEXT_INTERESTRATE', 'Interessant');
define('TEXT_EFFECTIVE_INTERESTRATE', 'Effectieve rente');
define('TEXT_MONTHLY_RATES', 'Maandelijks tarief');
define('TEXT_RATES_PLAN', 'Tariefplan');
define('TEXT_RATES_DUE', 'verschuldigd percentage');
define('TEXT_CONTRACT', 'Contract');
define('TEXT_DOWNLOAD_CONTRACT', 'download');
?>