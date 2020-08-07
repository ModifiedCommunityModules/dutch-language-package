<?php
require_once('billpay.php');

/* Default Messages */
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_TITLE', 'BillPay - Aankoop van een factuur');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_DESCRIPTION', 'BillPay - Aankoop van een factuur');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_ERROR_MESSAGE', 'BillPay Foutmelding');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_INFO', '');

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_ALLOWED_TITLE' , 'Toegestane zones');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_ALLOWED_DESC' , 'Geef de zones aan die voor deze module moeten worden toegestaan. (bijv. AT,DE (indien leeg, zijn alle zones toegestaan))');

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_LOGGING_TITLE' , 'Absoluut pad naar het logbestand');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_LOGGING_DESC' , 'Als er geen waarde is ingesteld, is de standaardinstelling om naar de map /includes/external/billpay/log te schrijven (schrijfrechten moeten beschikbaar zijn).');

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_MERCHANT_ID_TITLE' , 'Verkopers-ID');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_MERCHANT_ID_DESC' , 'U ontvangt deze gegevens van BillPay');

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_ORDER_STATUS_TITLE' , 'Stel de status van de bestelling in');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_ORDER_STATUS_DESC' , 'Stel de orders, die met deze module worden gemaakt, in op deze status');

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_PORTAL_ID_TITLE' , 'Portaal ID');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_PORTAL_ID_DESC' , 'U ontvangt deze gegevens van BillPay');

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_SECURE_TITLE' , 'Veiligheidssleutel');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_SECURE_DESC' , 'U ontvangt deze gegevens van BillPay');

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_SORT_ORDER_TITLE' , 'Weergavevolgorde');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_SORT_ORDER_DESC' , 'Weergavevolgorde. Het kleinste cijfer wordt als eerste weergegeven.');

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_STATUS_TITLE' , 'Geactiveerd');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_STATUS_DESC' , 'Wilt u het kopen op afbetaling met BillPay toestaan?');

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TESTMODE_TITLE' , 'Transactiemodus');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TESTMODE_DESC' , 'In de testmodus worden gedetailleerde foutmeldingen weergegeven. De Live-modus moet worden geactiveerd voor een productieve werking.');

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_ZONE_TITLE' , 'Belastingzone');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_ZONE_DESC' , '');

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_API_URL_BASE_TITLE' , 'API-URL-basis');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_API_URL_BASE_DESC' , 'U ontvangt deze gegevens van BillPay (Let op! De URL\'s voor het test- en het live-systeem zijn verschillend!).');

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TESTAPI_URL_BASE_TITLE' , 'Test API url basis');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TESTAPI_URL_BASE_DESC' , 'U ontvangt deze gegevens van BillPay (Let op! De URL\'s voor het test- en het live-systeem zijn verschillend!).');

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_LOGGING_ENABLE_TITLE' , 'Logging geactiveerd');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_LOGGING_ENABLE_DESC' , 'Moeten verzoeken aan de BillPay betalingsinterface naar het logbestand worden geschreven?');

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_MIN_AMOUNT_TITLE', 'Minimum bestelwaarde');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_MIN_AMOUNT_DESC', 'Vanaf deze orderwaarde wordt de betaalwijze weergegeven.');

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_LOGPATH_TITLE', 'Logboekroute');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_LOGPATH_DESC', '');

define('MODULE_PAYMENT_BILLPAY_HTTP_X_TITLE', 'X_FORWARDED_FOR toestaan');
define('MODULE_PAYMENT_BILLPAY_HTTP_X_DESC', 'Activeer deze functie als uw winkel in een cloud systeem draait.');

// Payment selection texts
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_BIRTHDATE', 'Vul uw geboortedatum in');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_ENTER_BIRTHDATE', 'Vul uw geboortedatum in');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_ENTER_GENDER', 'Voer uw geslacht in');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_ENTER_BIRTHDATE_AND_GENDER', 'Vul uw geboortedatum en uw geslacht in');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_NOTE', '');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_REQ', '');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_GENDER', 'Geslacht');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_MALE', 'mannetje');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_FEMALE', 'vrouwelijk');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_ENTER_PHONE', 'Voer uw telefoonnummer in');

define('JS_BILLPAYTRANSACTIONCREDIT_EULA', '* Bevestig de BillPay AGB!\n\n');
define('JS_BILLPAYTRANSACTIONCREDIT_DOBDAY', '* Voer uw verjaardag in.\n\n');
define('JS_BILLPAYTRANSACTIONCREDIT_DOBMONTH', '* Voer uw maand van geboorte in.\n\n');
define('JS_BILLPAYTRANSACTIONCREDIT_DOBYEAR', '* Voer uw geboortejaar in.\n\n');
define('JS_BILLPAYTRANSACTIONCREDIT_GENDER', '* Voer uw geslacht in.\n\n');
define('JS_BILLPAYTRANSACTIONCREDIT_CODE', '* Voer de BIC in.\n\n');
define('JS_BILLPAYTRANSACTIONCREDIT_NUMBER', '* Voer het IBAN in.\n\n');
define('JS_BILLPAYTRANSACTIONCREDIT_NAME', '* Voer de naam van de rekeninghouder in.\n\n');
define('JS_BILLPAYTRANSACTIONCREDIT_PHONE', '* Voer uw telefoonnummer in.\n\n');

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_ERROR_EULA', '* Bevestig de BillPay AGB!');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_ERROR_DEFAULT', 'Er is een interne fout opgetreden. Kies een andere betalingsmethode');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_ERROR_BOD' ,'Je hebt een verkeerde geboortedatum ingevuld!');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_ERROR_SHORT', 'Er is een interne fout opgetreden!');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_INVOICE_CREATED_COMMENT', 'De betalingstermijn van de bestelling werd met succes gestart bij BillPay.');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_CANCEL_COMMENT', 'De bestelling werd met succes geannuleerd bij BillPay');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_ERROR_DUEDATE', 'Het betalingsdoel kon niet worden gestart omdat de vervaldatum leeg is!');

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_ERROR_NUMBER', '* Voer het IBAN in.');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_ERROR_CODE', '* Voer de BIC in.');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_ERROR_NAME', '* Voer de naam van de rekeninghouder in.');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_ERROR_NO_RATEPLAN', '* Vraag een afbetalingsplan aan voor het geselecteerde aantal afbetalingen.');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_ERROR_PHONE', '* Voer uw telefoonnummer in.');

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_CREATE_INVOICE', 'BillPay-betalingstermijn nu activeren?');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_CANCEL_ORDER', 'BillPay bestelling nu annuleren?');

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_ACCOUNT_HOLDER', 'Rekeninghouder');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_IBAN', 'IBAN');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_BANK_NAME', 'Bank');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_BIC', 'BIC');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_INVOICE_REFERENCE', 'factuurnummer');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_PHONE', 'Telefoonnummer');

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_BANKDATA', 'Voer uw bankgegevens in.');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_INVOICE_INFO2', 'De bestelling werd geplaatst door ');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_INVOICE_INFO3', '');

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_DUEDATE_TITLE', 'Datum van de vervaldag');

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_PURPOSE', 'Beoogd gebruik');


define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_SANDBOX', 'Je staat in zandbakmodus:');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_CHECK', 'U bevindt zich in de acceptatiemodus:');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_UNLOCK_INFO', 'Informatie over de live-uitzending');

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_UTF8_ENCODE_TITLE', 'UTF8-codering inschakelen');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_UTF8_ENCODE_DESC', 'Schakel deze optie uit als u gebruik maakt van UTF-8-codering in uw online shop.');

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_ACTIVATE_ORDER', 'De bestelling is nog niet geactiveerd op BillPay. Activeer de bestelling onmiddellijk voor de verzending door de juiste status in te stellen.');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_ACTIVATE_ORDER_WARNING', "<strong style='color:red'>Let op: De betalingstermijn is nog niet begonnen bij BillPay!</strong><br/>");

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_SALUTATION_MALE', 'De heer');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_SALUTATION_FEMALE', 'Mevrouw');

// Text fragments needed for payment details of transaction credit orders
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_INVOICE_INFO1',       'Bedankt voor het kiezen van de BillPay Installment Purchase. De verschuldigde bedragen worden maandelijks van de bij de bestelling opgegeven rekening afgeschreven.');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_INVOICE_INFO_MANUAL', 'Bedankt voor het kiezen van de BillPay Installment Purchase. We sturen u binnenkort een afbetalingsplan. Gelieve de verschuldigde bedragen op de overeengekomen vervaldag over te maken op de volgende rekening.');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_INVOICEPDF_INFO', 'U heeft besloten om op afbetaling te betalen. Houd er rekening mee dat er naast het op deze factuur vermelde factuurbedrag nog andere kosten ontstaan in verband met de termijnaankooptransactie. Deze kosten werden u getoond voordat u uw bestelling plaatste. U heeft de volledige berekening van de te betalen bedragen in verband met de termijnaankoop en alle bijbehorende informatie al ontvangen per e-mail naar het bij de bestelling opgegeven e-mailadres.');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_RATE', 'Beoordeel');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_RATEDUE_TEXT', 'gerimpeld');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TOTAL_PRICE_CALC_TEXT', 'Berekening van de totale prijs');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_CART_AMOUNT_TEXT', 'Winkelwagenwaarde');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_CART_AMOUNT_AFTER_PREPAYMENT_TEXT', 'Winkelwagenwaarde na aanbetaling');
define('MODULE_PAYMENT_BILLPAYTC_SURCHARGE_TEXT', 'Rentepremie');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TRANSACTION_FEE_TEXT', 'Verwerkingskosten');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_OTHER_COSTS_TEXT', 'verdere kosten (bijv. verzendkosten)');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TOTAL_AMOUNT_TEXT', 'Totaal bedrag termijnaankoop');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_ANUAL_RATE_TEXT', 'Jaarlijks kostenpercentage');

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_DIVIDED_BY_RATES', 'Gedeeld door het aantal tranches');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_FIRST_RATE', 'De eerste termijn inclusief vergoedingen bedraagt');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_FOLLOWING_RATES', 'Elke volgende tranche is');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_UNIQUE_RATE', 'Elke tranche is');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_CAPTION_TEXT1', 'Uw gedeeltelijke betaling in');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_CAPTION_TEXT2', 'Maandelijkse tarieven');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_ENTER_NUMBER_RATES', 'Selecteer de gewenste looptijd in maanden');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_RATES', 'Inrichtingen');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_CALCULATE_RATES', 'Bereken termijnplan');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_FINANCE_DETAILS_LINK_TEXT', 'Financieringsdetails');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_PREPAYMENT_TEXT', 'Aanbetaling');

define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_TRANSACTION_FEE', 'Verwerkingskosten');
define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_TRANSACTION_FEE_TAX1', 'incl.');
define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_TRANSACTION_FEE_TAX2', 'BTW.');
define('MODULE_ORDER_TOTAL_BILLPAYTC_SURCHARGE', 'Rentepremie');
define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_TOTAL', 'Totaal bedrag termijnaankoop');

define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_FORM_FIRST_RATE',    'De eerste termijn, inclusief handling- en verzendkosten, bedraagt <span>%s</span>.');
define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_FORM_NEXT_RATE',     'Elke volgende tranche is <span>%s</span>.');
define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_FORM_TOTAL',         'In totaal betaal je <span>%s</span>.');
define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_FORM_BASE',          'Dit omvat de orderwaarde van <span>%s</span>,');
define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_FORM_RATES',         'Belangstelling van <span>%s</span>,');
define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_FORM_PROCESSING',    'een verwerkingsvergoeding van <span>%s</span>');
define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_FORM_SHIPPING',      'en verzendkosten van <span>%s</span> inbegrepen.');
define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_FORM_DETAILS',       'Betalingsgegevens');

//define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_', '');
define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_THANK_YOU', 'Bedankt voor het kiezen van de BillPay Installment Purchase.');
define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_RATE_PLAN_EMAIL', 'U ontvangt binnenkort een afbetalingsplan van ons.');
define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_MANUAL_TRANSFER', 'Gelieve de verschuldigde bedragen op de overeengekomen vervaldag over te maken op de volgende rekening.');
define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_MANUAL_RATE_PLAN', 'Gelieve de verschuldigde termijnen op de volgende data aan ons over te maken:');
define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_PAYEE', 'Begunstigde:');
define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_AMOUNT', 'Bedrag');
define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_DATES', 'Datum');

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_EULA_CHECK', 'Ik ga akkoord met de overdracht van de gegevens die nodig zijn voor de verwerking van de termijnaankoop en een identiteits- en kredietcontrole aan BillPay. Het is geldig de <a href="%s" target="_blank">AGB</a>, <a href="%s" target="_blank">Betalingsvoorwaarden</a> en <a href="%s" target="_blank">Privacybeleid</a>');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_EULA_CHECK_DE', '<label for="billpay_eula">Ik bevestig hierbij de <a href="https://www.billpay.de/kunden/agb-ch" target="_blank">AGB</a> en de <a href="https://www.billpay.de/kunden/agb-ch#datenschutz" target="_blank">Privacybeleid</a> de BillPay GmbH </label> <br />');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_LINK1', 'AGB huurkoop');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_LINK2', 'Datenschutz-<br/>bestimmungen');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_LINK3', 'Betalings-<br>voorwaarden');

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_EULA_CHECK_SEPA',    "Met de overdracht van de gegevens die nodig zijn voor de verwerking van de betaling en een identiteits- en kredietcontrole aan de <a href='https://www.billpay.de/endkunden/' target='_blank'>BillPay GmbH</a> Daar ben ik het mee eens. De <a href='%s' target='_blank'>AGB</a>, <a href='%s' target='_blank'>Betalingsvoorwaarden</a> en <a href='%s' target='_blank'>Privacybeleid</a> van BillPay.<br/><br/>Ik geef BillPay en de <a href='https://www.privatbank1891.com' target='_blank'>net-m privatbank 1891 AG</a> een SEPA-domicili&euml;ringsmandaat  (<a href='#' class='bpy-btn-details'>details</a>) om betalingen te innen en geef mijn financi&euml;le instelling opdracht om de domicili&euml;ringen te innen.");
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_EULA_CHECK_SEPA_AT', "Met de overdracht van de gegevens die nodig zijn voor de verwerking van de betaling en een identiteits- en kredietcontrole aan de <a href='https://www.billpay.de/endkunden/' target='_blank'>BillPay GmbH</a> Daar ben ik het mee eens. De <a href='%s' target='_blank'>AGB</a>, <a href='%s' target='_blank'>Betalingsvoorwaarden</a> en <a href='%s' target='_blank'>Privacybeleid</a> van BillPay.<br/><br/>Ik geef BillPay en de <a href='https://www.privatbank1891.com' target='_blank'>net-m privatbank 1891 AG</a> een SEPA-incassomandaat (<a href='#' class='bpy-btn-details'>Details</a>) voor de inning van verschuldigde betalingen en geef mijn financiële instelling de opdracht om de domiciliëringen te innen.");
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_EULA_CHECK_SEPA_CH', "Met de overdracht van de gegevens die nodig zijn voor de verwerking van de huurkoop en een identiteits- en kredietcontrole aan de <a href='https://www.billpay.de/endkunden/' target='_blank'>BillPay GmbH</a> Daar ben ik het mee eens. De <a href='%s' target='_blank'>AGB</a>, <a href='%s' target='_blank'>Betalingsvoorwaarden</a> en <a href='%s' target='_blank'>Privacybeleid</a>.");

define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_SEPA_INFORMATION',    "Het crediteurenidentificatienummer van BillPay is DE19ZZ00000237180, het crediteurenidentificatienummer van net-m privatbank AG is DE62ZZZ00000009232. Het referentienummer van het mandaat zal mij op een later tijdstip per e-mail worden meegedeeld, samen met een sjabloon voor een schriftelijk mandaat. Ik zal dit schriftelijke mandaat ook ondertekenen en opsturen naar BillPay. Let op: ik kan binnen acht weken na de datum van debitering een verzoek tot terugbetaling van het afgeschreven bedrag indienen. De voorwaarden die met mijn financi&euml;le instelling zijn overeengekomen, zijn van toepassing. Houd er rekening mee dat de verschuldigde vordering ook in het geval van een retourbon geldig blijft. Meer informatie vindt u op <a href='https://www.billpay.de/sepa' target='_blank'>https://www.billpay.de/sepa</a>.");
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_SEPA_INFORMATION_AT', "Het crediteurenidentificatienummer van BillPay is DE19ZZ00000237180, het crediteurenidentificatienummer van net-m privatbank AG is DE62ZZZ00000009232. Het referentienummer van het mandaat zal mij op een later tijdstip per e-mail worden meegedeeld, samen met een sjabloon voor een schriftelijk mandaat. Ik zal dit schriftelijke mandaat ook ondertekenen en opsturen naar BillPay. Let op: ik kan binnen acht weken na de datum van debitering een verzoek tot terugbetaling van het afgeschreven bedrag indienen. De voorwaarden die met mijn financi&euml;le instelling zijn overeengekomen, zijn van toepassing. Houd er rekening mee dat de verschuldigde vordering ook in het geval van een retourbon geldig blijft. Meer informatie vindt u op <a href='https://www.billpay.de/sepa' target='_blank'>https://www.billpay.de/sepa</a>.");
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_ADD', 'plus');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_FEE', 'Kosten');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_FEE_INFO1', 'Voor deze bestelling door huurkoop een vergoeding van ');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_TEXT_FEE_INFO2', ' verzameld');

// Plugin 1.7
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_THANK_YOU_TEXT', 'Bedankt voor het kiezen van de BillPay Installment Purchase optie bij aankoop van het product.');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_PAY_UNTIL_TEXT', 'De verschuldigde bedragen worden maandelijks van de bij de bestelling opgegeven rekening afgeschreven.');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_PAY_UNTIL_TEXT_CH', 'Gelieve de verschuldigde bedragen op de overeengekomen vervaldag over te maken op de volgende rekening.');
define('MODULE_PAYMENT_BILLPAYTRANSACTIONCREDIT_EMAIL_TEXT', 'Naast de factuur ontvangt u binnenkort een afleveringsplan met gedetailleerde informatie over uw afbouwaankoop.');