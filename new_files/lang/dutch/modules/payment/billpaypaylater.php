<?php
require_once('billpay.php');

/* Default Messages */
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_ERROR_MESSAGE', 'BillPay-foutmelding');
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_INFO', '');

define('MODULE_PAYMENT_BILLPAYPAYLATER_ALLOWED_TITLE' , 'Toegestane zones');
define('MODULE_PAYMENT_BILLPAYPAYLATER_ALLOWED_DESC' , 'Geef de zones aan die voor deze module moeten worden toegestaan. (bijv. AT,DE (indien leeg, zijn alle zones toegestaan))');

define('MODULE_PAYMENT_BILLPAYPAYLATER_LOGGING_TITLE' , 'Absoluut pad naar het logbestand');
define('MODULE_PAYMENT_BILLPAYPAYLATER_LOGGING_DESC' , 'Als er geen waarde is ingesteld, is de standaardinstelling om te schrijven naar de directory includes/external/billpay/log (schrijfrechten moeten beschikbaar zijn).\'');

define('MODULE_PAYMENT_BILLPAYPAYLATER_MERCHANT_ID_TITLE' , 'Verkopers-ID\'');
define('MODULE_PAYMENT_BILLPAYPAYLATER_MERCHANT_ID_DESC' , 'U ontvangt deze gegevens van BillPay');

define('MODULE_PAYMENT_BILLPAYPAYLATER_ORDER_STATUS_TITLE' , 'Stel de status van de bestelling in');
define('MODULE_PAYMENT_BILLPAYPAYLATER_ORDER_STATUS_DESC' , 'Stel de orders, die met deze module worden gemaakt, in op deze status');

define('MODULE_PAYMENT_BILLPAYPAYLATER_PORTAL_ID_TITLE' , 'Portaal ID');
define('MODULE_PAYMENT_BILLPAYPAYLATER_PORTAL_ID_DESC' , 'U ontvangt deze gegevens van BillPay');

define('MODULE_PAYMENT_BILLPAYPAYLATER_SECURE_TITLE' , 'Veiligheidssleutel');
define('MODULE_PAYMENT_BILLPAYPAYLATER_SECURE_DESC' , 'U ontvangt deze gegevens van BillPay');

define('MODULE_PAYMENT_BILLPAYPAYLATER_SORT_ORDER_TITLE' , 'Weergavevolgorde');
define('MODULE_PAYMENT_BILLPAYPAYLATER_SORT_ORDER_DESC' , 'Weergavevolgorde. Het kleinste cijfer wordt als eerste weergegeven.');

define('MODULE_PAYMENT_BILLPAYPAYLATER_STATUS_TITLE' , 'Geactiveerd');
define('MODULE_PAYMENT_BILLPAYPAYLATER_STATUS_DESC' , 'Wilt u aankopen met BillPay op factuur toestaan?');

define('MODULE_PAYMENT_BILLPAYPAYLATER_TESTMODE_TITLE' , 'Transactiemodus');
define('MODULE_PAYMENT_BILLPAYPAYLATER_TESTMODE_DESC' , 'In de testmodus worden gedetailleerde foutmeldingen weergegeven. De Live-modus moet worden geactiveerd voor een productieve werking.');

define('MODULE_PAYMENT_BILLPAYPAYLATER_ZONE_TITLE' , 'Belastingzone');
define('MODULE_PAYMENT_BILLPAYPAYLATER_ZONE_DESC' , '');

define('MODULE_PAYMENT_BILLPAYPAYLATER_API_URL_BASE_TITLE' , 'API-URL-basis');
define('MODULE_PAYMENT_BILLPAYPAYLATER_API_URL_BASE_DESC' , 'U ontvangt deze gegevens van BillPay (Let op! De URL\'s voor het test- en het live-systeem zijn verschillend!).');

define('MODULE_PAYMENT_BILLPAYPAYLATER_TESTAPI_URL_BASE_TITLE' , 'Test API url basis');
define('MODULE_PAYMENT_BILLPAYPAYLATER_TESTAPI_URL_BASE_DESC' , 'U ontvangt deze gegevens van BillPay (Let op! De URL\'s voor het test- en het live-systeem zijn verschillend!).');

define('MODULE_PAYMENT_BILLPAYPAYLATER_LOGGING_ENABLE_TITLE' , 'Logging geactiveerd');
define('MODULE_PAYMENT_BILLPAYPAYLATER_LOGGING_ENABLE_DESC' , 'Moeten verzoeken aan de BillPay betalingsinterface naar het logbestand worden geschreven?');

define('MODULE_PAYMENT_BILLPAYPAYLATER_MIN_AMOUNT_TITLE', 'Minimum bestelwaarde');
define('MODULE_PAYMENT_BILLPAYPAYLATER_MIN_AMOUNT_DESC', 'Vanaf deze orderwaarde wordt de betaalwijze weergegeven.');

define('MODULE_PAYMENT_BILLPAYPAYLATER_LOGPATH_TITLE', 'Logboekroute');
define('MODULE_PAYMENT_BILLPAYPAYLATER_LOGPATH_DESC', '');

define('MODULE_PAYMENT_BILLPAY_HTTP_X_TITLE', 'X_FORWARDED_FOR toestaan');
define('MODULE_PAYMENT_BILLPAY_HTTP_X_DESC', 'Activeer deze functie als uw winkel in een cloud systeem draait.');

define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_BIRTHDATE', 'Geboortedatum');

define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_EULA_CHECK', '');
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_EULA_CHECK_DE', '');


define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_EULA_CHECK_SEPA',    '');
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_EULA_CHECK_SEPA_AT', '');

define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_SEPA_INFORMATION',    '');
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_SEPA_INFORMATION_AT', '');

define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_ENTER_BIRTHDATE', 'Vul uw geboortedatum in');
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_ENTER_GENDER', 'Voer uw geslacht in');
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_ENTER_BIRTHDATE_AND_GENDER', 'Vul uw geboortedatum en uw geslacht in');
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_NOTE', '');
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_REQ', '');
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_GENDER', 'Geslacht');
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_MALE', 'mannetje');
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_FEMALE', 'vrouwelijk');
define('MODULE_PAYMENT_BILLPAYPAYLATER_SALUTATION_MALE', '');
define('MODULE_PAYMENT_BILLPAYPAYLATER_SALUTATION_FEMALE', '');


define('JS_BILLPAYPAYLATER_EULA', '* Bevestig de BillPay AGB!\n\n');
define('JS_BILLPAYPAYLATER_DOBDAY', '* Voer uw verjaardag in.\n\n');
define('JS_BILLPAYPAYLATER_DOBMONTH', '* Voer uw maand van geboorte in.\n\n');
define('JS_BILLPAYPAYLATER_DOBYEAR', '* Voer uw geboortejaar in.\n\n');
define('JS_BILLPAYPAYLATER_GENDER', '* Voer uw geslacht in.\n\n');

define('JS_BILLPAYPAYLATER_CODE', '* Voer de BIC in.\n\n');
define('JS_BILLPAYPAYLATER_NUMBER', '* Voer het IBAN in.\n\n');
define('JS_BILLPAYPAYLATER_NAME', '* Voer de naam van de rekeninghouder in.\n\n');

define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_ERROR_EULA', '* Bevestig de BillPay AGB!');
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_ERROR_DOB' , 'U heeft een verkeerde geboortedatum ingevuld');
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_ERROR_DEFAULT', 'Er is een interne fout opgetreden. Kies een andere betalingsmethode');
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_ERROR_SHORT', 'Er is een interne fout opgetreden!');
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_INVOICE_CREATED_COMMENT', 'De betalingstermijn van de bestelling werd met succes gestart bij BillPay.');
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_CANCEL_COMMENT', 'De bestelling werd met succes geannuleerd bij BillPay');
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_ERROR_DUEDATE', 'Het betalingsdoel kon niet worden gestart omdat de vervaldatum leeg is!');
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_ERROR_NO_RATEPLAN', '');

define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_ERROR_CODE', '* Voer de BIC in.');
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_ERROR_NUMBER', '* Voer het IBAN in.');
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_ERROR_NAME', '* Voer de naam van de rekeninghouder in.');

define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_CREATE_INVOICE', 'BillPay-betalingstermijn nu activeren?');
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_CANCEL_ORDER', 'BillPay bestelling nu annuleren?');

define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_ACCOUNT_HOLDER', 'Rekeninghouder');
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_IBAN', 'IBAN');
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_BANK_NAME', 'Bank');
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_BIC', 'BIC');
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_INVOICE_REFERENCE', 'factuurnummer');

define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_BANKDATA', 'Voer uw bankgegevens in.');

define('MODULE_PAYMENT_BILLPAYPAYLATER_DUEDATE_TITLE', 'Vervaldatum');

define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_PURPOSE', 'Beoogd gebruik');

define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_ADD', 'plus');
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_FEE', 'Kosten');

define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_SANDBOX', 'Je staat in zandbakmodus:');
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_CHECK', 'U bevindt zich in de acceptatiemodus:');
define('MODULE_PAYMENT_BILLPAYPAYLATER_UNLOCK_INFO', 'Informatie over de live-uitzending');

define('MODULE_PAYMENT_BILLPAYPAYLATER_UTF8_ENCODE_TITLE', 'UTF8-codering inschakelen');
define('MODULE_PAYMENT_BILLPAYPAYLATER_UTF8_ENCODE_DESC', 'Schakel deze optie uit als u gebruik maakt van UTF-8-codering in uw online shop.');

define('MODULE_PAYMENT_BILLPAYPAYLATER_ACTIVATE_ORDER', 'De bestelling is nog niet geactiveerd op BillPay. Activeer de bestelling onmiddellijk voor de verzending door de juiste status in te stellen.');
define('MODULE_PAYMENT_BILLPAYPAYLATER_ACTIVATE_ORDER_WARNING', "<strong style='color:red'>Let op: De betalingstermijn is nog niet begonnen bij BillPay!</strong><br/>");

# only this payment

define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_INVOICE_INFO1', 'Dank u voor uw keuze om te betalen met PayLater. De verschuldigde bedragen worden gedebiteerd van de rekening die u bij het plaatsen van uw bestelling hebt opgegeven. Naast deze factuur stuurt BillPay u binnenkort een betalingsplan met gedetailleerde informatie over uw betaling in termijnen.');
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_INVOICE_INFO2', 'Het bevel werd gegeven door ');
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_INVOICE_INFO3', '');

define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_FEE_INFO1', 'PayLater vergoeding voor deze bestelling is ');
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_FEE_INFO2', '');
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_PROMO', 'Klik op het keuzerondje om meer te laten zien.');

// OT
define('MODULE_PAYMENT_BILLPAY_OT_PAYLATER_FEE', 'Servicevergoeding');
define('MODULE_PAYMENT_BILLPAY_OT_PAYLATER_TOTAL', 'Totaal bedrag PayLater');

define('MODULE_PAYMENT_BILLPAY_GIROPAY_CANCELED', 'Giropay geannuleerd');

define('MODULE_PAYMENT_BILLPAYPAYLATER_VISUAL_MODE_TITLE' , 'Visuele modus');
define('MODULE_PAYMENT_BILLPAYPAYLATER_VISUAL_MODE_DESC' , '');

// Plugin 1.7
define('MODULE_PAYMENT_BILLPAYPAYLATER_THANK_YOU_TEXT', 'Bedankt voor het kiezen van de BillPay PayLater deelbetalingsoptie bij aankoop van de goederen.');
define('MODULE_PAYMENT_BILLPAYPAYLATER_PAY_UNTIL_TEXT', 'De verschuldigde bedragen worden maandelijks van de bij de bestelling opgegeven rekening afgeschreven.');
define('MODULE_PAYMENT_BILLPAYPAYLATER_EMAIL_TEXT', 'Naast de factuur ontvangt u binnenkort een betalingsplan met gedetailleerde informatie over uw termijnen.');
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_TITLE', 'PayLater | Aankoop van de betaling');
define('MODULE_PAYMENT_BILLPAYPAYLATER_TEXT_DESCRIPTION', 'PayLater | Aankoop van de betaling');
