<?php

/* Default Messages */
define('MODULE_PAYMENT_BILLPAY_TEXT_TITLE', 'BillPay - Factuur');
define('MODULE_PAYMENT_BILLPAY_TEXT_DESCRIPTION', 'BillPay - Factuur');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_MESSAGE', 'BillPay Foutmelding');
define('MODULE_PAYMENT_BILLPAY_TEXT_INFO', '<div style="margin-top:6px"><img src="https://www.billpay.de/wp-content/uploads/2011/04/LogoSmall_0.png" alt="BillPay Logo" title="BillPay Logo" /></div>');

define('MODULE_PAYMENT_BILLPAY_ALLOWED_TITLE' , 'Toegestane zones');
define('MODULE_PAYMENT_BILLPAY_ALLOWED_DESC' , 'Geef de zones aan die voor deze module moeten worden toegestaan. (bijv. AT,DE (indien leeg, zijn alle zones toegestaan))');

define('MODULE_PAYMENT_BILLPAY_LOGGING_TITLE' , 'Absoluut pad naar het logboekbestand');
define('MODULE_PAYMENT_BILLPAY_LOGGING_DESC' , 'Als er geen waarde is ingesteld, wordt de standaardwaarde naar de map geschreven. /includes/external/billpay/log (schrijfrechten moeten beschikbaar zijn).');

define('MODULE_PAYMENT_BILLPAY_GS_MERCHANT_ID_TITLE' , 'Verkopers-ID');
define('MODULE_PAYMENT_BILLPAY_GS_MERCHANT_ID_DESC' , 'U ontvangt deze gegevens van BillPay');

define('MODULE_PAYMENT_BILLPAY_ORDER_STATUS_TITLE' , 'Stel de status van de bestelling in');
define('MODULE_PAYMENT_BILLPAY_ORDER_STATUS_DESC' , 'Stel de orders, die met deze module worden gemaakt, in op deze status');

define('MODULE_PAYMENT_BILLPAY_GS_PORTAL_ID_TITLE' , 'Portaal ID');
define('MODULE_PAYMENT_BILLPAY_GS_PORTAL_ID_DESC' , 'U ontvangt deze gegevens van BillPay');

define('MODULE_PAYMENT_BILLPAY_GS_SECURE_TITLE' , 'Veiligheidssleutel');
define('MODULE_PAYMENT_BILLPAY_GS_SECURE_DESC' , 'U ontvangt deze gegevens van BillPay');

define('MODULE_PAYMENT_BILLPAY_GS_PUBLIC_API_KEY_TITLE', 'Openbare API-sleutel');
define('MODULE_PAYMENT_BILLPAY_GS_PUBLIC_API_KEY_DESC', 'U ontvangt deze gegevens van BillPay');

define('MODULE_PAYMENT_BILLPAY_SORT_ORDER_TITLE' , 'Weergavevolgorde');
define('MODULE_PAYMENT_BILLPAY_SORT_ORDER_DESC' , 'Weergavevolgorde. Het kleinste cijfer wordt als eerste weergegeven.');

define('MODULE_PAYMENT_BILLPAY_STATUS_TITLE' , 'Geactiveerd');
define('MODULE_PAYMENT_BILLPAY_STATUS_DESC' , 'Wilt u aankopen met BillPay op factuur toestaan?');

define('MODULE_PAYMENT_BILLPAY_GS_TESTMODE_TITLE' , 'Transactiemodus');
define('MODULE_PAYMENT_BILLPAY_GS_TESTMODE_DESC' , 'In de testmodus worden gedetailleerde foutmeldingen weergegeven. De Live-modus moet worden geactiveerd voor een productieve werking.');

define('MODULE_PAYMENT_BILLPAY_ZONE_TITLE' , 'Belastingzone');
define('MODULE_PAYMENT_BILLPAY_ZONE_DESC' , '');

define('MODULE_PAYMENT_BILLPAY_GS_API_URL_BASE_TITLE' , 'API-URL-basis');
define('MODULE_PAYMENT_BILLPAY_GS_API_URL_BASE_DESC' , 'U ontvangt deze gegevens van BillPay (Let op! De URL\'s voor het test- en live-systeem zijn verschillend).');

define('MODULE_PAYMENT_BILLPAY_GS_TESTAPI_URL_BASE_TITLE' , 'Test-API url basis');
define('MODULE_PAYMENT_BILLPAY_GS_TESTAPI_URL_BASE_DESC' , 'U ontvangt deze gegevens van BillPay (Let op! De URL\'s voor het test- en live-systeem zijn verschillend).');

define('MODULE_PAYMENT_BILLPAY_LOGGING_ENABLE_TITLE' , 'Logging geactiveerd');
define('MODULE_PAYMENT_BILLPAY_LOGGING_ENABLE_DESC' , 'Moeten verzoeken aan de BillPay betalingsinterface naar het logbestand worden geschreven?');

define('MODULE_PAYMENT_BILLPAY_MIN_AMOUNT_TITLE', 'Minimum bestelwaarde');
define('MODULE_PAYMENT_BILLPAY_MIN_AMOUNT_DESC', 'Vanaf deze orderwaarde wordt de betaalwijze weergegeven.');

define('MODULE_PAYMENT_BILLPAY_LOGPATH_TITLE', 'Logboekroute');
define('MODULE_PAYMENT_BILLPAY_LOGPATH_DESC', '');

define('MODULE_PAYMENT_BILLPAY_GS_HTTP_X_TITLE', 'X_FORWARDED_FOR toestaan');
define('MODULE_PAYMENT_BILLPAY_GS_HTTP_X_DESC', 'Activeer deze functie als uw winkel in een cloud systeem draait.');

// Payment selection texts
define('MODULE_PAYMENT_BILLPAY_TEXT_BIRTHDATE', 'Geboortedatum');
define('MODULE_PAYMENT_BILLPAY_TEXT_PHONE', 'Telefoonnummer');
define('MODULE_PAYMENT_BILLPAY_TEXT_EULA_CHECK',    'Met de overdracht van de gegevens die nodig zijn voor de verwerking van de aankoop op rekening en een identiteits- en kredietcontrole aan de <a href="https://www.billpay.de/endkunden/" target="blank">BillPay GmbH</a> Daar ben ik het mee eens. De <a href="%s" target="_blank">Privacybeleid</a> van BillPay.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ENTER_BIRTHDATE', 'Vul uw geboortedatum in');
define('MODULE_PAYMENT_BILLPAY_TEXT_ENTER_GENDER', 'Voer uw geslacht in');
define('MODULE_PAYMENT_BILLPAY_TEXT_ENTER_TITLE', 'Voer uw aanhef in');
define('MODULE_PAYMENT_BILLPAY_TEXT_ENTER_BIRTHDATE_AND_GENDER', 'Vul uw geboortedatum en uw geslacht in');
define('MODULE_PAYMENT_BILLPAY_TEXT_ENTER_PHONE', 'Voer uw telefoonnummer in');
define('MODULE_PAYMENT_BILLPAY_TEXT_NOTE', '');
define('MODULE_PAYMENT_BILLPAY_TEXT_REQ', '');
define('MODULE_PAYMENT_BILLPAY_TEXT_GENDER', 'Geslacht');
define('MODULE_PAYMENT_BILLPAY_TEXT_SALUTATION', 'Aanhef');
define('MODULE_PAYMENT_BILLPAY_TEXT_MALE', 'mannetje');
define('MODULE_PAYMENT_BILLPAY_TEXT_FEMALE', 'vrouwelijk');
define('MODULE_PAYMENT_BILLPAY_TEXT_MR', 'De heer');
define('MODULE_PAYMENT_BILLPAY_TEXT_MRS', 'Mevrouw');

define('JS_BILLPAY_EULA', '* Bevestig de BillPay AGB!\n\n');
define('JS_BILLPAY_DOBDAY', '* Voer uw verjaardag in.\n\n');
define('JS_BILLPAY_DOBMONTH', '* Voer uw maand van geboorte in.\n\n');
define('JS_BILLPAY_DOBYEAR', '* Voer uw geboortejaar in.\n\n');
define('JS_BILLPAY_GENDER', '* Voer uw geslacht in.\n\n');

define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_NUMBER', '* Voer het IBAN in.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_CODE', '* Voer de BIC in.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_NAME', '* Voer de naam van de rekeninghouder in.');

define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_EULA', '* Accepteer de BillPay AGB!');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_DOB', '* Vul uw geboortedatum in.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_DOB_UNDER', 'Je moet ouder zijn dan 18 jaar om BillPay te gebruiken.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_DEFAULT', 'Er is een interne fout opgetreden. Kies een andere betalingsmethode');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_SHORT', 'Er is een interne fout opgetreden!');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_CREATED_COMMENT', 'De betalingstermijn van de bestelling is bij BillPay succesvol gestart.');
define('MODULE_PAYMENT_BILLPAY_TEXT_CANCEL_COMMENT', 'De bestelling werd met succes geannuleerd bij BillPay');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_DUEDATE', 'Het betalingsdoel kon niet worden gestart omdat de vervaldatum leeg is!');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_NO_RATEPLAN', 'Vraag een afbetalingsplan aan voor het geselecteerde aantal afbetalingen.');

define('MODULE_PAYMENT_BILLPAY_TEXT_CREATE_INVOICE', 'BillPay-betalingstermijn nu activeren?');
define('MODULE_PAYMENT_BILLPAY_TEXT_CANCEL_ORDER', 'BillPay bestelling nu annuleren?');

define('MODULE_PAYMENT_BILLPAY_TEXT_ACCOUNT_HOLDER', 'Rekeninghouder');
define('MODULE_PAYMENT_BILLPAY_TEXT_IBAN', 'IBAN');
define('MODULE_PAYMENT_BILLPAY_TEXT_BANK_NAME', 'Bank');
define('MODULE_PAYMENT_BILLPAY_TEXT_BIC', 'BIC');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_REFERENCE', 'factuurnummer');

define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_INFO',              'Maak het totale bedrag, met vermelding van het BillPay-transactienummer in de reden van de betaling (%1$s), binnen de betalingsperiode tot %2$02s.%3$02s.%4$04s over naar de volgende rekening:');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_INFO_NO_DUEDATE',   'Gelieve het totale bedrag, met vermelding van het BillPay-transactienummer in de reden van de betaling (%1$s), binnen de betalingsperiode tot de vervaldatum, die u samen met de factuur ontvangt, over te maken naar de volgende rekening');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_INFO1', 'U heeft ervoor gekozen om op rekening te kopen bij BillPay. Gelieve het totale bedrag over te maken tot ');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_INFO2', ' naar de volgende rekening: ');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_INFO3', 'Datum van betaling die u ontvangt met de factuur');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_INFO_MAIL', '<br/>Gelieve het totale bedrag, onder vermelding van het BillPay-transactienummer in de reden van de betaling (%s), op de vervaldag die u bij de factuur ontvangt, over te maken naar de volgende rekening:');

define('MODULE_PAYMENT_BILLPAY_TEXT_BANKDATA', 'Voer uw bankgegevens in.');

define('MODULE_PAYMENT_BILLPAY_DUEDATE_TITLE', 'Betalingsdoelstelling');

define('MODULE_PAYMENT_BILLPAY_TEXT_PURPOSE', 'Beoogd gebruik');

define('MODULE_PAYMENT_BILLPAY_TEXT_ADD', 'plus');
define('MODULE_PAYMENT_BILLPAY_TEXT_FEE', 'Kosten');
define('MODULE_PAYMENT_BILLPAY_TEXT_FEE_INFO1', 'Voor deze bestelling per factuur wordt een vergoeding in rekening gebracht van ');
define('MODULE_PAYMENT_BILLPAY_TEXT_FEE_INFO2', ' verzameld');

define('MODULE_PAYMENT_BILLPAY_TEXT_SANDBOX', 'Je staat in zandbakmodus:');
define('MODULE_PAYMENT_BILLPAY_TEXT_CHECK', 'U bevindt zich in de acceptatiemodus:');
define('MODULE_PAYMENT_BILLPAY_UNLOCK_INFO', 'Informatie over de live-uitzending');

define('MODULE_PAYMENT_BILLPAY_B2BCONFIG_TITLE', 'Toegestane klantentypes');
define('MODULE_PAYMENT_BILLPAY_B2BCONFIG_DESC', 'Wilt u de betaalmethode activeren voor particuliere klanten (B2C), zakelijke klanten (B2B) of voor beide (BOTH)?');
define('MODULE_PAYMENT_BILLPAY_B2B_COMPANY_NAME_TEXT', 'Bedrijfsnaam');
define('MODULE_PAYMENT_BILLPAY_B2B_COMPANY_LEGAL_FORM_TEXT', 'Juridische vorm');
define('MODULE_PAYMENT_BILLPAY_B2B_COMPANY_LEGAL_FORM_SELECT_HTML', "");
define('MODULE_PAYMENT_BILLPAY_B2B_LEGALFORM_VALUES', 'ag:AG (Aktiengesellschaft)|eg:eG (eingetragene Genossenschaft)|ek:EK (eingetragener Kaufmann)|ev:e.V. (eingetragener Verein)|freelancer:Freiberufler/Kleingewerbetreibender/Handelsvertreter|gbr:GbR/BGB (Gesellschaft b&uuml;rgerlichen Rechts)|gmbh:GmbH (Gesellschaft mit beschr&auml;nkter Haftung)|gmbh_ig:GmbH in Gr&uuml;ndung|gmbh_co_kg:GmbH &amp; Co. KG|kg:KG (Kommanditgesellschaft)|ltd:Limited|ltd_co_kg:Limited &amp; Co. KG|ohg:OHG (offene Handelsgesellschaft)|public_inst:&Ouml;ffentliche Einrichtung|misc_capital:Sonstige Kapitalgesellschaft|misc:Sonstige Personengesellschaft|foundation:Stiftung|ug:UG (Unternehmensgesellschaft haftungsbeschr&auml;nkt)');
define('MODULE_PAYMENT_BILLPAY_B2B_REGISTER_NUMBER_TEXT', 'Handelsregisternummer');
define('MODULE_PAYMENT_BILLPAY_B2B_TAX_NUMBER_TEXT', 'BTW-identificatie');
define('MODULE_PAYMENT_BILLPAY_B2B_HOLDER_NAME_TEXT', 'Naam van de houder');
define('MODULE_PAYMENT_BILLPAY_B2B_CONTACT_PERSON_TEXT', 'Contactpersoon');

define('MODULE_PAYMENT_BILLPAY_B2B_CHOOSE_CLIENT_TEXT', 'Type klant');
define('MODULE_PAYMENT_BILLPAY_B2B_PRIVATE_CLIENT_TEXT', 'Particuliere klant');
define('MODULE_PAYMENT_BILLPAY_B2B_BUSINESS_CLIENT_TEXT', 'Zakelijke kennis');

define('MODULE_PAYMENT_BILLPAY_B2B_COMPANY_FIELD_EMPTY', 'Voer de bedrijfsnaam in');
define('MODULE_PAYMENT_BILLPAY_B2B_LEGAL_FORM_FIELD_EMPTY', 'Vul de rechtsvorm van het bedrijf in');
define('MODULE_PAYMENT_BILLPAY_B2B_HOLDER_NAME_EMPTY', 'Voer de naam van de houder in');
define('MODULE_PAYMENT_BILLPAY_B2B_REGISTER_NUMBER_EMPTY', 'Gelieve het handelsregisternummer in te voeren');
define('MODULE_PAYMENT_BILLPAY_B2B_TAX_NUMBER_EMPTY', 'Voer de omzetbelasting ID in');


define('MODULE_ORDER_TOTAL_BILLPAY_FEE_FROM_TOTAL', 'van het factuurbedrag');

define('MODULE_PAYMENT_BILLPAY_GS_UTF8_ENCODE_TITLE', 'Lokale codering');
define('MODULE_PAYMENT_BILLPAY_GS_UTF8_ENCODE_DESC', 'Maakt uw site gebruik van lokale codering (anders dan UTF-8)?');


define('MODULE_PAYMENT_BILLPAY_ACTIVATE_ORDER', 'De bestelling is nog niet geactiveerd op BillPay. Activeer de bestelling onmiddellijk voor de verzending door de juiste status in te stellen.');
define('MODULE_PAYMENT_BILLPAY_ACTIVATE_ORDER_WARNING', "Let op: De betalingstermijn is nog niet begonnen bij BillPay!");

define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_ADDRESS', 'Het aanpassen van het adres is niet toegestaan voor bestellingen met BillPay.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_PRODUCT', 'Herhalingsbestellingen van artikelen zijn niet toegestaan voor bestellingen met BillPay.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_PAYMENT', 'Aanpassen van de betalingsmethode is niet toegestaan voor bestellingen met BillPay');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_CURRENCY', 'Valuta-aanpassing is niet toegestaan voor bestellingen met BillPay');

define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_HIGHER_QUANTITY', 'U kunt niet meer producten bestellen dan in originele volgorde bij BillPay.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_NEGATIVE_QUANTITY', 'Bij het bestellen met BillPay mag de artikelhoeveelheid niet negatief zijn.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_TAX', 'Aanpassing van het belastingtarief voor bestellingen met BillPay is niet toegestaan.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_PRICE', 'Het aanpassen van de productprijs bij bestelling met BillPay is niet toegestaan.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_ID', 'Het aanpassen van de product-ID voor bestellingen met BillPay is niet toegestaan.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_ZERO_REDUCTION', 'Gelieve een te annuleren hoeveelheid in te voeren');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_NEGATIVE_REDUCTION', 'Herhalingsbestellingen van artikelen zijn niet toegestaan voor bestellingen met BillPay.');

define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_NEGATIVE_SHIPPING', 'Negatieve leveringskosten niet toegestaan voor bestellingen met BillPay');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_INCREASED_SHIPPING', 'Verhoging van de leveringskosten niet toegestaan voor bestellingen met BillPay');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_ADDED_SHIPPING', 'Toevoegen van leveringskosten die niet zijn toegestaan voor bestellingen met BillPay');

define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_FORBIDDEN', 'Actie niet toegestaan voor bestellingen met BillPay');
define('MODULE_PAYMENT_BILLPAY_PARTIAL_CANCEL_NOT_PROCESSED', 'Kijk uit! Aanpassingen van bestellingen zonder artikelbelasting worden niet automatisch naar BillPay gestuurd als gevolg van een fout in de winkelsoftware. Maak het bedrag handmatig aan in de BillPay-back-office (https://admin.billpay.de)!');
define('MODULE_PAYMENT_BILLPAY_PARTIAL_CANCEL_ERROR_CUSTOMER_CARE', 'De aanpassing van de bestelling bij BillPay is mislukt. Neem direct contact op met onze klantenservice (haendler@billpay.de)!');

define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_ADJUST_CHARGEABLE', 'Aanpassing van een betaald product optie niet toegestaan voor bestellingen met BillPay');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_ADD_CHARGEABLE', 'Aanpassing van een betaald product optie niet toegestaan voor bestellingen met BillPay');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_REMOVE_CHARGEABLE', 'Verwijdering van een betaalde productoptie niet toegestaan voor bestellingen met BillPay');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_GENERAL', 'U kunt dit niet doen voor BillPay betalingsmethode.');

define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_CONTACT_BILLPAY', 'Er is een fout opgetreden! Neem contact op met BillPay.');

define('MODULE_PAYMENT_BILLPAY_HISTORY_INFO_PARTIAL_CANCEL', 'Gedeeltelijke annulering met succes verzonden naar BillPay');
define('MODULE_PAYMENT_BILLPAY_HISTORY_INFO_EDIT_CART_CONTENT', 'Wijziging van de bestelling is met succes naar BillPay gestuurd.');

define('MODULE_PAYMENT_BILLPAY_TRANSACTION_MODE_TEST' , 'Testmodus');
define('MODULE_PAYMENT_BILLPAY_TRANSACTION_MODE_LIVE' , 'Live mode');

// -- Order States
// waiting for prepayment or decision
define('MODULE_PAYMENT_BILLPAY_STATUS_PENDING_TITLE_EN' , 'BillPay pending');
define('MODULE_PAYMENT_BILLPAY_STATUS_PENDING_TITLE_DE' , 'BillPay nicht abgeschlossen');
define('MODULE_PAYMENT_BILLPAY_STATUS_PENDING_TITLE_NL' , 'BillPay niet voltooid');
// ready to activate
define('MODULE_PAYMENT_BILLPAY_STATUS_APPROVED_TITLE_EN' , 'BillPay approved');
define('MODULE_PAYMENT_BILLPAY_STATUS_APPROVED_TITLE_DE' , 'BillPay genehmigt');
define('MODULE_PAYMENT_BILLPAY_STATUS_APPROVED_TITLE_NL' , 'BillPay goedgekeurd');

// invoice created
define('MODULE_PAYMENT_BILLPAY_STATUS_ACTIVATED_TITLE_EN' , 'BillPay activated');
define('MODULE_PAYMENT_BILLPAY_STATUS_ACTIVATED_TITLE_DE' , 'BillPay aktiviert');
define('MODULE_PAYMENT_BILLPAY_STATUS_ACTIVATED_TITLE_NL' , 'BillPay geactiveerd');


// order cancelled or timed out from pending
define('MODULE_PAYMENT_BILLPAY_STATUS_CANCELLED_TITLE_EN' , 'BillPay cancelled');
define('MODULE_PAYMENT_BILLPAY_STATUS_CANCELLED_TITLE_DE' , 'BillPay storniert');
define('MODULE_PAYMENT_BILLPAY_STATUS_CANCELLED_TITLE_NL' , 'BillPay geannuleerd');


// error in order
define('MODULE_PAYMENT_BILLPAY_STATUS_ERROR_TITLE_EN' , 'BillPay error!');
define('MODULE_PAYMENT_BILLPAY_STATUS_ERROR_TITLE_DE' , 'BillPay Fehler!');
define('MODULE_PAYMENT_BILLPAY_STATUS_ERROR_TITLE_NL' , 'BillPay fout!');

// -- end of Order States


define('MODULE_PAYMENT_BILLPAY_STATUS_PENDING_DESC', 'BillPay - Wachten op bevestiging'); // "BillPay - waiting for approvement"
define('MODULE_PAYMENT_BILLPAY_STATUS_APPROVED_DESC', 'BillPay - Bevestigd'); // "BillPay - approved"
define('MODULE_PAYMENT_BILLPAY_STATUS_ACTIVATED_DESC', 'BillPay - Geactiveerd'); // "BillPay - activated"
define('MODULE_PAYMENT_BILLPAY_STATUS_CANCELLED_DESC', 'BillPay - Geannuleerd'); // "BillPay - cancelled"
define('MODULE_PAYMENT_BILLPAY_STATUS_ERROR_DESC', 'BillPay - Als gevolg van een fout moet deze bestelling handmatig worden gecorrigeerd. Neem contact op met de BillPay Support.'); // "BillPay - Due to an error, this order requires a manual correction. Please contact BillPay's support"


define('MODULE_PAYMENT_BILLPAY_SALUTATION_MALE', 'De heer');
define('MODULE_PAYMENT_BILLPAY_SALUTATION_FEMALE', 'Mevrouw');

define('MODULE_PAYMENT_BILLPAY_TEXT_SEPA_INFORMATION',    "Het crediteurenidentificatienummer van BillPay is DE19ZZZ00000237180. Het referentienummer van het mandaat zal mij op een later tijdstip per e-mail worden meegedeeld, samen met een sjabloon voor een schriftelijk mandaat. Ik zal dit schriftelijke mandaat ook ondertekenen en opsturen naar BillPay. Let op: ik kan binnen acht weken na de datum van de debitering een verzoek tot terugbetaling van het in rekening gebrachte bedrag indienen. De voorwaarden die met mijn financiële instelling zijn overeengekomen, zijn van toepassing. Houd er rekening mee dat de verschuldigde vordering ook in het geval van een retourbon geldig blijft. Voor meer informatie kunt u terecht bij <a href='https://www.billpay.de/sepa' target='_blank'>https://www.billpay.de/sepa</a>.");
define('MODULE_PAYMENT_BILLPAY_TEXT_SEPA_INFORMATION_AT', "Het crediteurenidentificatienummer van BillPay is DE19ZZ00000237180, het crediteurenidentificatienummer van net-m privatbank AG is DE62ZZZ00000009232. Het referentienummer van het mandaat zal mij op een later tijdstip per e-mail worden meegedeeld, samen met een sjabloon voor een schriftelijk mandaat. Ik zal dit schriftelijke mandaat ook ondertekenen en opsturen naar BillPay. Let op: ik kan binnen acht weken na de datum van debitering een verzoek tot terugbetaling van het afgeschreven bedrag indienen. De voorwaarden die met mijn financi&euml;le instelling zijn overeengekomen, zijn van toepassing. Houd er rekening mee dat de verschuldigde vordering ook in het geval van een retourbon geldig blijft. Voor meer informatie kunt u terecht bij <a href='https://www.billpay.de/sepa' target='_blank'>https://www.billpay.de/sepa</a>.");

// Plugin 1.7
define('MODULE_PAYMENT_BILLPAY_THANK_YOU_TEXT', 'Bedankt voor het kiezen van de BillPay-factuur bij aankoop van de goederen.');
define('MODULE_PAYMENT_BILLPAY_PAY_UNTIL_TEXT', 'Maak het bedrag van %1$s %2$s tot %3$s over naar de volgende rekening, onder vermelding van de reden van betaling:');
define('MODULE_PAYMENT_BILLPAY_PAY_UNTIL_TEXT_NO_DUE_DATE', 'Gelieve het bedrag van %1$s %2$s binnen de betalingsperiode over te maken naar de volgende rekening, met vermelding van het doel van de betaling.');
define('MODULE_PAYMENT_BILLPAY_PAY_UNTIL_TEXT_ADD_CH', 'Voor stortingen aan het loket van het postkantoor worden extra kosten in rekening gebracht. Gelieve een extra %1$s %2$s over te maken bij het storten door middel van een stortingsbewijs.');
define('MODULE_PAYMENT_BILLPAY_TEXT_PAYEE', 'Ontvanger van de betaling');
define('MODULE_PAYMENT_BILLPAY_TEXT_PAYEE_CH', 'Vestiging Zwitserland (Regensdorf)');
define('MODULE_PAYMENT_BILLPAY_TEXT_IBAN_CH', 'Rekeningnummer');
define('MODULE_PAYMENT_BILLPAY_TEXT_BIC_CH', 'BC-nummer');
define('MODULE_PAYMENT_BILLPAY_TEXT_BANK', 'Kredietinstelling');
define('MODULE_PAYMENT_BILLPAY_TEXT_TOTAL_AMOUNT', 'Bedrag');
define('MODULE_PAYMENT_BILLPAY_UPDATE_AVAILABLE', 'Versie %2s$ van de BillPay-betaalmethode plugin is beschikbaar (momenteel ge&iuml;nstalleerd: %1s$). Klik <a href="%3s$">hier</a> om te downloaden.');
