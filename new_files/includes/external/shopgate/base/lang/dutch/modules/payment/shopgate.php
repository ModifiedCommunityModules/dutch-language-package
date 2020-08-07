<?php
/**
 * Shopgate GmbH
 *
 * URHEBERRECHTSHINWEIS
 *
 * Dieses Plugin ist urheberrechtlich geschützt. Es darf ausschließlich von Kunden der Shopgate GmbH
 * zum Zwecke der eigenen Kommunikation zwischen dem IT-System des Kunden mit dem IT-System der
 * Shopgate GmbH über www.shopgate.com verwendet werden. Eine darüber hinausgehende Vervielfältigung, Verbreitung,
 * öffentliche Zugänglichmachung, Bearbeitung oder Weitergabe an Dritte ist nur mit unserer vorherigen
 * schriftlichen Zustimmung zulässig. Die Regelungen der §§ 69 d Abs. 2, 3 und 69 e UrhG bleiben hiervon unberührt.
 *
 * COPYRIGHT NOTICE
 *
 * This plugin is the subject of copyright protection. It is only for the use of Shopgate GmbH customers,
 * for the purpose of facilitating communication between the IT system of the customer and the IT system
 * of Shopgate GmbH via www.shopgate.com. Any reproduction, dissemination, public propagation, processing or
 * transfer to third parties is only permitted where we previously consented thereto in writing. The provisions
 * of paragraph 69 d, sub-paragraphs 2, 3 and paragraph 69, sub-paragraph e of the German Copyright Act shall remain unaffected.
 *
 * @author Shopgate GmbH <interfaces@shopgate.com>
 */

define('MODULE_PAYMENT_SHOPGATE_TEXT_TITLE', 'Shopgate');
define('MODULE_PAYMENT_SHOPGATE_TEXT_DESCRIPTION', 'Shopgate - Mobile Shopping.');
define('MODULE_PAYMENT_SHOPGATE_TEXT_INFO', 'Bestellingen zijn al betaald bij Shopgate.');

define('MODULE_PAYMENT_SHOPGATE_ORDER_LINE_TEXT_SHIPPING', 'Verzending');
define('MODULE_PAYMENT_SHOPGATE_ORDER_LINE_TEXT_SUBTOTAL', 'Subtotaal');
define('MODULE_PAYMENT_SHOPGATE_ORDER_LINE_TEXT_PAYMENTFEE', 'Betalingswijze kosten');
define('MODULE_PAYMENT_SHOPGATE_ORDER_LINE_TEXT_TOTAL', 'Totaal');

define('MODULE_PAYMENT_SHOPGATE_TEXT_EMAIL_FOOTER', '');
define('MODULE_PAYMENT_SHOPGATE_STATUS_TITLE', 'Shopgate-betaalmodule geactiveerd:');

define('MODULE_PAYMENT_SHOPGATE_STATUS_DESC', '');
define('MODULE_PAYMENT_SHOPGATE_ALLOWED_TITLE', '');
define('MODULE_PAYMENT_SHOPGATE_ALLOWED_DESC', '');
define('MODULE_PAYMENT_SHOPGATE_PAYTO_TITLE', '');
define('MODULE_PAYMENT_SHOPGATE_PAYTO_DESC', '');
define('MODULE_PAYMENT_SHOPGATE_SORT_ORDER_TITLE', 'Weergavevolgorde');
define('MODULE_PAYMENT_SHOPGATE_SORT_ORDER_DESC', 'Weergavevolgorde. Het kleinste cijfer wordt als eerste weergegeven.');
define('MODULE_PAYMENT_SHOPGATE_ZONE_TITLE', '');
define('MODULE_PAYMENT_SHOPGATE_ZONE_DESC', '');
define('MODULE_PAYMENT_SHOPGATE_ORDER_STATUS_ID_TITLE', 'Status');
define('MODULE_PAYMENT_SHOPGATE_ORDER_STATUS_ID_DESC', 'Stel de met deze module geïmporteerde orders in op deze status:');
define('MODULE_PAYMENT_SHOPGATE_ERROR_READING_LANGUAGES', 'Fout bij het configureren van de taalinstellingen.');
define('MODULE_PAYMENT_SHOPGATE_ERROR_LOADING_CONFIG', 'Fout bij het laden van de configuratie.');
define(
'MODULE_PAYMENT_SHOPGATE_ERROR_SAVING_CONFIG',
    'Fout bij het opslaan van de configuratie. ' .
    'Controleer de schrijfrechten (777) voor ' .
    'de map &quot;/shopgate_library/config/&quot; van de Shopgate plugin.'
);

define("MODULE_PAYMENT_SHOPGATE_LABEL_NEW_PRODUCTS", "Nieuwe producten");
define("MODULE_PAYMENT_SHOPGATE_LABEL_SPECIAL_PRODUCTS", "Speciale producten");
defined('SHOPGATE_ORDER_CUSTOM_FIELD') OR define('SHOPGATE_ORDER_CUSTOM_FIELD', 'Door de gebruiker gedefinieerde invoervelden voor een Shopgate-order:');

define("SHOPGATE_COUPON_ERROR_NEED_ACCOUNT", "Om deze voucher te kunnen gebruiken, moet u ingelogd zijn.");
define("SHOPGATE_COUPON_ERROR_RESTRICTED_PRODUCTS", "Deze waardebon is beperkt tot bepaalde producten");
define("SHOPGATE_COUPON_ERROR_RESTRICTED_CATEGORIES", "Deze voucher is beperkt tot bepaalde categorie&euml;n");
define("SHOPGATE_COUPON_ERROR_MINIMUM_ORDER_AMOUNT_NOT_REACHED", "De minimale bestelwaarde voor het gebruik van deze voucher is niet bereikt.");
