<?php
require_once('billpay.php');

/* Default Messages */
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_TITLE', 'BillPay - Zuweisung');
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_DESCRIPTION', 'BillPay - Zuweisung');
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_ERROR_MESSAGE', 'BillPay-foutmelding');
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_INFO', '');

define('MODULE_PAYMENT_BILLPAYDEBIT_ALLOWED_TITLE' , 'Toegestane zones');
define('MODULE_PAYMENT_BILLPAYDEBIT_ALLOWED_DESC' , 'Geef de zones aan die voor deze module moeten worden toegestaan. (bijv. AT,DE (indien leeg, zijn alle zones toegestaan))');

define('MODULE_PAYMENT_BILLPAYDEBIT_LOGGING_TITLE' , 'Absoluut pad naar het logbestand');
define('MODULE_PAYMENT_BILLPAYDEBIT_LOGGING_DESC' , 'Als er geen waarde is ingesteld, wordt de standaard directory /includes/external/billpay/log geschreven (schrijfrechten moeten beschikbaar zijn).\'');

define('MODULE_PAYMENT_BILLPAYDEBIT_MERCHANT_ID_TITLE' , 'Verkopers-ID');
define('MODULE_PAYMENT_BILLPAYDEBIT_MERCHANT_ID_DESC' , 'U ontvangt deze gegevens van BillPay');

define('MODULE_PAYMENT_BILLPAYDEBIT_ORDER_STATUS_TITLE' , 'Stel de status van de bestelling in');
define('MODULE_PAYMENT_BILLPAYDEBIT_ORDER_STATUS_DESC' , 'Stel de orders, die met deze module worden gemaakt, in op deze status');

define('MODULE_PAYMENT_BILLPAYDEBIT_PORTAL_ID_TITLE' , 'Portaal ID');
define('MODULE_PAYMENT_BILLPAYDEBIT_PORTAL_ID_DESC' , 'U ontvangt deze gegevens van BillPay');

define('MODULE_PAYMENT_BILLPAYDEBIT_SECURE_TITLE' , 'Veiligheidssleutel');
define('MODULE_PAYMENT_BILLPAYDEBIT_SECURE_DESC' , 'U ontvangt deze gegevens van BillPay');

define('MODULE_PAYMENT_BILLPAYDEBIT_SORT_ORDER_TITLE' , 'Weergavevolgorde');
define('MODULE_PAYMENT_BILLPAYDEBIT_SORT_ORDER_DESC' , 'Weergavevolgorde. Het kleinste cijfer wordt als eerste weergegeven.');

define('MODULE_PAYMENT_BILLPAYDEBIT_STATUS_TITLE' , 'Geactiveerd');
define('MODULE_PAYMENT_BILLPAYDEBIT_STATUS_DESC' , 'Wilt u aankopen met BillPay op factuur toestaan?');

define('MODULE_PAYMENT_BILLPAYDEBIT_TESTMODE_TITLE' , 'Transactiemodus');
define('MODULE_PAYMENT_BILLPAYDEBIT_TESTMODE_DESC' , 'In de testmodus worden gedetailleerde foutmeldingen weergegeven. De Live-modus moet worden geactiveerd voor een productieve werking.');

define('MODULE_PAYMENT_BILLPAYDEBIT_ZONE_TITLE' , 'Belastingzone');
define('MODULE_PAYMENT_BILLPAYDEBIT_ZONE_DESC' , '');

define('MODULE_PAYMENT_BILLPAYDEBIT_API_URL_BASE_TITLE' , 'API-URL-basis');
define('MODULE_PAYMENT_BILLPAYDEBIT_API_URL_BASE_DESC' , 'U ontvangt deze gegevens van BillPay (Let op! De URL\'s voor het test- en het live-systeem zijn verschillend!).');

define('MODULE_PAYMENT_BILLPAYDEBIT_TESTAPI_URL_BASE_TITLE' , 'Test API url basis');
define('MODULE_PAYMENT_BILLPAYDEBIT_TESTAPI_URL_BASE_DESC' , 'U ontvangt deze gegevens van BillPay (Let op! De URL\'s voor het test- en het live-systeem zijn verschillend!).');

define('MODULE_PAYMENT_BILLPAYDEBIT_LOGGING_ENABLE_TITLE' , 'Logging geactiveerd');
define('MODULE_PAYMENT_BILLPAYDEBIT_LOGGING_ENABLE_DESC' , 'Moeten verzoeken aan de BillPay betalingsinterface naar het logbestand worden geschreven?');

define('MODULE_PAYMENT_BILLPAYDEBIT_MIN_AMOUNT_TITLE', 'Minimum bestelwaarde');
define('MODULE_PAYMENT_BILLPAYDEBIT_MIN_AMOUNT_DESC', 'Vanaf deze orderwaarde wordt de betaalwijze weergegeven.');

define('MODULE_PAYMENT_BILLPAYDEBIT_LOGPATH_TITLE', 'Logboekroute');
define('MODULE_PAYMENT_BILLPAYDEBIT_LOGPATH_DESC', '');

define('MODULE_PAYMENT_BILLPAY_HTTP_X_TITLE', 'X_FORWARDED_FOR toestaan');
define('MODULE_PAYMENT_BILLPAY_HTTP_X_DESC', 'Activeer deze functie als uw winkel in een cloud systeem draait.');

// Payment selection texts
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_BIRTHDATE', 'Geboortedatum');

define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_ENTER_BIRTHDATE', 'Vul uw geboortedatum in');
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_ENTER_GENDER', 'Voer uw geslacht in');
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_ENTER_BIRTHDATE_AND_GENDER', 'Vul uw geboortedatum en uw geslacht in');
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_NOTE', '');
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_REQ', '');
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_GENDER', 'Geslacht');
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_MALE', 'mannetje');
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_FEMALE', 'vrouwelijk');

define('JS_BILLPAYDEBIT_EULA', '* Bevestig de BillPay AGB!\n\n');
define('JS_BILLPAYDEBIT_DOBDAY', '* Voer uw verjaardag in.\n\n');
define('JS_BILLPAYDEBIT_DOBMONTH', '* Voer uw maand van geboorte in.\n\n');
define('JS_BILLPAYDEBIT_DOBYEAR', '* Voer uw geboortejaar in.\n\n');
define('JS_BILLPAYDEBIT_GENDER', '* Voer uw geslacht in.\n\n');
define('JS_BILLPAYDEBIT_CODE', '* Voer de BIC in.\n\n');
define('JS_BILLPAYDEBIT_NUMBER', '* Voer het IBAN in.\n\n');
define('JS_BILLPAYDEBIT_NAME', '* Voer de naam van de rekeninghouder in.\n\n');

define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_ERROR_EULA', '* Bevestig de BillPay AGB!');
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_ERROR_DEFAULT', 'Er is een interne fout opgetreden. Kies een andere betalingsmethode');
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_ERROR_DOB' ,'Je hebt een verkeerde geboortedatum ingevuld!');
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_ERROR_SHORT', 'Er is een interne fout opgetreden!');
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_INVOICE_CREATED_COMMENT', 'De betalingstermijn van de bestelling werd met succes gestart bij BillPay.');
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_CANCEL_COMMENT', 'De bestelling werd met succes geannuleerd bij BillPay');
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_ERROR_DUEDATE', 'Het betalingsdoel kon niet worden gestart omdat de vervaldatum leeg is!');

define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_ERROR_NUMBER', '* Voer het IBAN in.');
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_ERROR_CODE', '* Voer de BIC in.');
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_ERROR_NAME', '* Voer de naam van de rekeninghouder in.');

define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_CREATE_INVOICE', 'BillPay-betalingstermijn nu activeren?');
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_CANCEL_ORDER', 'BillPay bestelling nu annuleren?');

define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_ACCOUNT_HOLDER', 'Rekeninghouder');
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_IBAN', 'IBAN');
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_BANK_NAME', 'Bank');
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_BIC', 'BIC');
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_INVOICE_REFERENCE', 'factuurnummer');

define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_BANKDATA', 'Voer uw bankgegevens in.');
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_INVOICE_INFO1', 'Bedankt voor uw keuze om met BillPay te betalen via automatische incasso.');
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_INVOICE_INFO2', 'Wij zullen het verschuldigde bedrag binnen de komende dagen debiteren van de in de bestelling opgegeven rekening.');
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_INVOICE_INFO3', '');

define('MODULE_PAYMENT_BILLPAYDEBIT_DUEDATE_TITLE', 'Datum van de vervaldag');

define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_PURPOSE', 'Beoogd gebruik');

define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_ADD', 'plus');
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_FEE', 'Kosten');
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_FEE_INFO1', 'Voor deze bestelling via automatische incasso worden kosten in rekening gebracht van ');
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_FEE_INFO2', ' verzameld');

define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_SANDBOX', 'U bevindt zich in de zandbakmodus:');
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_CHECK', 'U bevindt zich in de acceptatiemodus:');
define('MODULE_PAYMENT_BILLPAYDEBIT_UNLOCK_INFO', 'Informatie over de live-uitzending');

define('MODULE_PAYMENT_BILLPAYDEBIT_UTF8_ENCODE_TITLE', 'UTF8-codering inschakelen');
define('MODULE_PAYMENT_BILLPAYDEBIT_UTF8_ENCODE_DESC', 'Schakel deze optie uit als u gebruik maakt van UTF-8-codering in uw online shop.');

define('MODULE_PAYMENT_BILLPAYDEBIT_ACTIVATE_ORDER', 'De bestelling is nog niet geactiveerd op BillPay. Activeer de bestelling onmiddellijk voor de verzending door de juiste status in te stellen.');
define('MODULE_PAYMENT_BILLPAYDEBIT_ACTIVATE_ORDER_WARNING', "<strong style='color:red'>Let op: De betalingstermijn is nog niet begonnen bij BillPay.!</strong><br/>");

define('MODULE_PAYMENT_BILLPAYDEBIT_SALUTATION_MALE', 'De heer');
define('MODULE_PAYMENT_BILLPAYDEBIT_SALUTATION_FEMALE', 'Mevrouw');

define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_EULA_CHECK_SEPA',    "Met de overdracht van de gegevens die nodig zijn voor de verwerking van de betaling en een identiteits- en kredietcontrole aan de <a href='https://www.billpay.de/endkunden/' target='_blank'>BillPay GmbH</a> Daar ben ik het mee eens. De <a href='%s' target='_blank'>Privacybeleid</a> van BillPay.<br/><br/>Ik geef BillPay een SEPA-domicili&euml;ringsmandaat (<a href='#' class='bpy-btn-details'>Einzelheiten</a>) voor de inning van verschuldigde betalingen en geef mijn financiële instelling de opdracht om de domiciliëringen te innen.");
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_EULA_CHECK_SEPA_AT', "Met de overdracht van de gegevens die nodig zijn voor de verwerking van de betaling en een identiteits- en kredietwaardigheidscontrole aan <a href='https://www.billpay.de/endkunden/' target='_blank'>BillPay GmbH</a> Daar ben ik het mee eens. De <a href='%s' target='_blank'>Privacybeleid</a> van BillPay.<br/><br/>Ik geef BillPay en de <a href='https://www.privatbank1891.com/' target='_blank'>net-m privatbank 1891 AG</a> een SEPA-incassomandaat (<a href='#' class='bpy-btn-details'>Details</a>) voor de inning van verschuldigde betalingen en geef mijn financi&euml;le instelling de opdracht om de domicili&euml;ringen te innen.");

define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_SEPA_INFORMATION',    'Het crediteurenidentificatienummer van BillPay is DE19ZZZ00000237180. Het referentienummer van het mandaat zal mij op een later tijdstip per e-mail worden meegedeeld. Let op: ik kan binnen acht weken na de datum van debitering de terugbetaling van het gedebiteerde bedrag aanvragen. De voorwaarden die met mijn financiële instelling zijn overeengekomen, zijn van toepassing. Houd er rekening mee dat de verschuldigde vordering ook in het geval van een retourbon geldig blijft. Meer informatie vindt u op <a href="https://www.billpay.de/sepa" target="_blank">https://www.billpay.de/sepa</a>.');
define('MODULE_PAYMENT_BILLPAYDEBIT_TEXT_SEPA_INFORMATION_AT', "Het crediteurenidentificatienummer van BillPay is DE19ZZ00000237180, het crediteurenidentificatienummer van net-m privatbank AG is DE62ZZZ00000009232. Het referentienummer van het mandaat zal mij op een later tijdstip per e-mail worden meegedeeld, samen met een sjabloon voor een schriftelijk mandaat. Ik zal dit schriftelijke mandaat ook ondertekenen en opsturen naar BillPay. Let op: ik kan binnen acht weken na de datum van debitering een verzoek tot terugbetaling van het afgeschreven bedrag indienen. De voorwaarden die met mijn financiële instelling zijn overeengekomen, zijn van toepassing. Houd er rekening mee dat de verschuldigde vordering ook in het geval van een retourbon geldig blijft. Meer informatie vindt u op <a href='https://www.billpay.de/sepa' target='_blank'>https://www.billpay.de/sepa</a>.");

// Plugin 1.7
define('MODULE_PAYMENT_BILLPAYDEBIT_THANK_YOU_TEXT', 'Bedankt voor het kiezen van de BillPay-incasso-optie bij de aankoop van de goederen.');
define('MODULE_PAYMENT_BILLPAYDEBIT_PAY_UNTIL_TEXT', 'We boeken het bedrag van %1$s %2$s in de komende dagen op de bij de bestelling aangegeven rekening.');
define('MODULE_PAYMENT_BILLPAYDEBIT_EMAIL_TEXT', 'BillPay informeert u vooraf per e-mail over de datum van afhaling.');
