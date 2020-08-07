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


### Plugin ###
define('SHOPGATE_CONFIG_EXTENDED_ENCODING', 'Codering van het winkelsysteem');
define('SHOPGATE_CONFIG_EXTENDED_ENCODING_DESCRIPTION', 'Kies de codering van uw winkelsysteem. Meestal moet voor versies vóór 1.06 "ISO-8859-15" worden geselecteerd.');

### Menu ###
define('BOX_SHOPGATE', 'Shopgate');
define('BOX_SHOPGATE_INFO', 'Wat is Shopgate');
define('BOX_SHOPGATE_HELP', 'Installatiehulp');
define('BOX_SHOPGATE_CONFIG', 'Instellingen');

### Links ###
define('SHOPGATE_LINK_HOME', 'https://www.shopgate.com/de/?partner=30051');
define('SHOPGATE_LINK_WIKI', 'https://support.shopgate.com/hc/de/articles/202911763');

### Konfiguration ###
define('SHOPGATE_CONFIG_TITLE', 'SHOPGATE');
define('SHOPGATE_CONFIG_ERROR', 'FOUT:');
define('SHOPGATE_CONFIG_ERROR_SAVING', 'Fout bij het opslaan van de configuratie. ');
define('SHOPGATE_CONFIG_ERROR_LOADING', 'Fout bij het laden van de configuratie. ');
define('SHOPGATE_CONFIG_ERROR_READ_WRITE', 'Controleer de schrijfrechten (777) voor de map "/shopgate_library/config/" van de Shopgate-plugin.');
define('SHOPGATE_CONFIG_ERROR_INVALID_VALUE', 'Controleer uw gegevens in de volgende velden: ');
define('SHOPGATE_CONFIG_ERROR_DUPLICATE_SHOP_NUMBERS', 'Er zijn verschillende configuraties met hetzelfde winkelnummer. Dit kan tot aanzienlijke problemen leiden!');
define('SHOPGATE_CONFIG_INFO_MULTIPLE_CONFIGURATIONS', 'Er zijn configuraties voor verschillende marktplaatsen.');
define('SHOPGATE_CONFIG_SAVE', 'Bespaar');
define('SHOPGATE_CONFIG_GLOBAL_CONFIGURATION', 'Globale configuratie');
define('SHOPGATE_CONFIG_USE_GLOBAL_CONFIG', 'Gebruik de globale configuratie voor deze taal.');
define('SHOPGATE_CONFIG_MULTIPLE_SHOPS_BUTTON', 'Het opzetten van verschillende Shopgate-marktplaatsen');
define(
'SHOPGATE_CONFIG_LANGUAGE_SELECTION',
    'Met Shopgate heeft u &eacute;&eacute;n winkel per marktplaats nodig, die beperkt is tot &eacute;&eacute;n taal en &eacute;&eacute;n valuta. Hier heeft u de mogelijkheid om uw geconfigureerde '
    .
    'Verbind talen met uw Shopgate-winkels op verschillende marktplaatsen. Selecteer een taal en voer de toegangsgegevens voor uw Shopgate Shop in '
    .
    'de bijbehorende marktplaats. Als u geen shop heeft op Shopgate voor een taal, wordt hiervoor de "Globale configuratie" gebruikt.'
);

### Verbindungseinstellungen ###
define('SHOPGATE_CONFIG_CONNECTION_SETTINGS', 'Verbindingsinstellingen');

define('SHOPGATE_CONFIG_CUSTOMER_NUMBER', 'Klantennummer');
define('SHOPGATE_CONFIG_CUSTOMER_NUMBER_DESCRIPTION', 'Vul hier uw klantnummer in. U vindt het in het tabblad &quot;Integratie&quot; van uw winkel.');

define('SHOPGATE_CONFIG_SHOP_NUMBER', 'Winkelnummer');
define('SHOPGATE_CONFIG_SHOP_NUMBER_DESCRIPTION', 'Vul hier het winkelnummer van uw winkel in. U vindt het in het tabblad &quot;Integratie&quot; van uw winkel.');

define('SHOPGATE_CONFIG_APIKEY', 'API-Key');
define('SHOPGATE_CONFIG_APIKEY_DESCRIPTION', 'Voer hier de API-Key van uw winkel in. U vindt dit in het tabblad &quot;Integratie&quot; van uw winkel.');

### Mobile Weiterleitung ###
define('SHOPGATE_CONFIG_MOBILE_REDIRECT_SETTINGS', 'Mobiele doorstroming');

define('SHOPGATE_CONFIG_ALIAS', 'Shop-Alias');
define('SHOPGATE_CONFIG_ALIAS_DESCRIPTION', 'Vul hier de alias van uw winkel in. U vindt dit in het tabblad &quot;Integratie&quot; van uw winkel.');

define('SHOPGATE_CONFIG_CNAME', 'Eigen URL naar de mobiele website (met http://)');
define(
'SHOPGATE_CONFIG_CNAME_DESCRIPTION',
    'Voer hier uw eigen URL in (gedefinieerd door CNAME) naar de mobiele website van uw winkel. U kunt de URL vinden in het tabblad &quot;Integratie&quot; van uw winkel, '
    .
    'nadat u deze optie hebt geactiveerd onder &quot; Settings&quot; &equals; &gt; &quot; Mobile Website / Webapp&quot;.'
);

define('SHOPGATE_CONFIG_REDIRECT_LANGUAGES', 'Doorgestuurde talen');
define(
'SHOPGATE_CONFIG_REDIRECT_LANGUAGES_DESCRIPTION',
    'Selecteer de talen die u wilt doorverwijzen naar deze Shopgate-shop. Het moet minstens ' .
    'een taal kan worden geselecteerd. Houd CTRL ingedrukt om meerdere items te selecteren.'
);

### Export ###
define('SHOPGATE_CONFIG_EXPORT_SETTINGS', 'Categorie en productuitvoer');

define('SHOPGATE_CONFIG_LANGUAGE', 'Taal');
define('SHOPGATE_CONFIG_LANGUAGE_DESCRIPTION', 'Selecteer de taal waarin u categorie&euml;n en producten wilt exporteren.');

define('SHOPGATE_CONFIG_EXTENDED_CURRENCY', 'Duur');
define('SHOPGATE_CONFIG_EXTENDED_CURRENCY_DESCRIPTION', 'Selecteer de valuta voor de export van het product.');

define('SHOPGATE_CONFIG_EXTENDED_COUNTRY', 'Land');
define('SHOPGATE_CONFIG_EXTENDED_COUNTRY_DESCRIPTION', 'Selecteer het land waarvoor uw producten en categorie&euml;n worden ge&euml;xporteerd.');

define('SHOPGATE_CONFIG_EXTENDED_TAX_ZONE', 'Controlezone voor Shopgate');
define('SHOPGATE_CONFIG_EXTENDED_TAX_ZONE_DESCRIPTION', 'Geef de fiscale zone aan die van toepassing moet zijn op Shopgate.');

define('SHOPGATE_CONFIG_EXTENDED_REVERSE_CATEGORIES_SORT_ORDER', 'Volgorde omgekeerde categorie');
define('SHOPGATE_CONFIG_EXTENDED_REVERSE_CATEGORIES_SORT_ORDER_ON', 'Ja');
define('SHOPGATE_CONFIG_EXTENDED_REVERSE_CATEGORIES_SORT_ORDER_OFF', 'Geen');
define(
'SHOPGATE_CONFIG_EXTENDED_REVERSE_CATEGORIES_SORT_ORDER_DESCRIPTION',
'Selecteer hier "Ja" als de sortering van uw categorie&euml;n in uw mobiele winkel precies verkeerd is.'
);

define('SHOPGATE_CONFIG_EXTENDED_REVERSE_ITEMS_SORT_ORDER', 'Omgekeerde productbestelling');
define('SHOPGATE_CONFIG_EXTENDED_REVERSE_ITEMS_SORT_ORDER_ON', 'Ja');
define('SHOPGATE_CONFIG_EXTENDED_REVERSE_ITEMS_SORT_ORDER_OFF', 'Geen');
define(
'SHOPGATE_CONFIG_EXTENDED_REVERSE_ITEMS_SORT_ORDER_DESCRIPTION',
'Selecteer hier "Ja" als de sortering van uw producten in uw mobiele winkel precies verkeerd is.'
);

define('SHOPGATE_CONFIG_EXTENDED_PRODUCTSDESCRIPTION', 'Productbeschrijving');
define('SHOPGATE_CONFIG_EXTENDED_PRODUCTSDESCRIPTION_DESC_ONLY', 'Alleen beschrijving');
define('SHOPGATE_CONFIG_EXTENDED_PRODUCTSDESCRIPTION_SHORTDESC_ONLY', 'Korte beschrijving');
define('SHOPGATE_CONFIG_EXTENDED_PRODUCTSDESCRIPTION_DESC_SHORTDESC', 'Beschrijving + Korte beschrijving');
define('SHOPGATE_CONFIG_EXTENDED_PRODUCTSDESCRIPTION_SHORTDESC_DESC', 'Korte beschrijving + beschrijving');
define('SHOPGATE_CONFIG_EXTENDED_PRODUCTSDESCRIPTION_DESCRIPTION', 'Selecteer hier hoe de productbeschrijving in de mobiele winkel moet worden samengesteld.');

define('SHOPGATE_CONFIG_EXTENDED_CUSTOMER_PRICE_GROUP', 'Prijsgroep voor Shopgate');
define('SHOPGATE_CONFIG_EXTENDED_CUSTOMER_PRICE_GROUP_DESCRIPTION', 'Selecteer de prijsgroep die van toepassing is op Shopgate (of de klantengroep van waaruit de prijsinformatie wordt gebruikt bij het exporteren van producten).');
define('SHOPGATE_CONFIG_EXTENDED_CUSTOMER_PRICE_GROUP_OFF', '-- Uitgeschakeld --');

define('SHOPGATE_CONFIG_EXPORT_NEW_PRODUCTS_CATEGORY', 'Export van de categorie "Nieuw"');
define('SHOPGATE_CONFIG_EXPORT_NEW_PRODUCTS_CATEGORY_DESCRIPTION', 'Dit winkelsysteem biedt de mogelijkheid om een virtuele categorie te cre&euml;ren voor nieuwe producten. Deze kan via deze optie als categorie worden ge&euml;xporteerd. Het is ook mogelijk om een uniek ID voor deze categorie te definiëren in het invoerveld.');
define('SHOPGATE_CONFIG_EXPORT_NEW_PRODUCTS_CATEGORY_ON', 'Ja');
define('SHOPGATE_CONFIG_EXPORT_NEW_PRODUCTS_CATEGORY_OFF', 'Geen');
define('SHOPGATE_CONFIG_EXPORT_NEW_PRODUCTS_CATEGORY_MAX_ID', 'Huidige hoogste categorie-ID van uw winkelsysteem');

define('SHOPGATE_CONFIG_EXPORT_SPECIAL_PRODUCTS_CATEGORY', 'Export van de categorie "Speciaal"');
define('SHOPGATE_CONFIG_EXPORT_SPECIAL_PRODUCTS_CATEGORY_DESCRIPTION', 'Dit winkelsysteem biedt de mogelijkheid om een virtuele categorie te cre&euml;ren voor speciale producten. Deze kan via deze optie als categorie worden ge&euml;xporteerd. Het is ook mogelijk om een uniek ID voor deze categorie te definiëren in het invoerveld.');
define('SHOPGATE_CONFIG_EXPORT_SPECIAL_PRODUCTS_CATEGORY_ON', 'Ja');
define('SHOPGATE_CONFIG_EXPORT_SPECIAL_PRODUCTS_CATEGORY_OFF', 'Geen');
define('SHOPGATE_CONFIG_EXPORT_SPECIAL_PRODUCTS_CATEGORY_MAX_ID', 'Huidige hoogste categorie-ID van uw winkelsysteem');

define('SHOPGATE_CONFIG_EXPORT_OPTIONS_AS_INPUT_FIELD', 'Exporteren van productopties als invoervelden');
define('SHOPGATE_CONFIG_EXPORT_OPTIONS_AS_INPUT_FIELD_DESCRIPTION', 'De ID\'s van de productopties (zie "Artikelkenmerken"), die als invoervelden moeten worden ge&euml;xporteerd. Voorbeeld: 1,2,3');

define('SHOPGATE_PLUGIN_FIELD_AVAILABLE_TEXT_AVAILABLE_ON_DATE', 'Verkrijgbaar bij #DATE#');

### Bestellungsimport ###
define('SHOPGATE_CONFIG_ORDER_IMPORT_SETTINGS', 'Bestel import');
defined('SHOPGATE_ORDER_CUSTOM_FIELD') OR define('SHOPGATE_ORDER_CUSTOM_FIELD', 'Door de gebruiker gedefinieerde invoervelden voor een Shopgate-order:');

define('SHOPGATE_CONFIG_EXTENDED_CUSTOMER_GROUP', 'Klantengroep');
define('SHOPGATE_CONFIG_EXTENDED_CUSTOMER_GROUP_DESCRIPTION', 'Selecteer de groep voor Shopgate-klanten (de klantgroep waaronder alle Shopgate-gastklanten worden ingesteld tijdens de orderimport).');

define('SHOPGATE_CONFIG_EXTENDED_SHIPPING', 'Verzendmethode');
define('SHOPGATE_CONFIG_EXTENDED_SHIPPING_DESCRIPTION', 'Selecteer de verzendmethode voor de import van de bestelling. Dit wordt gebruikt om de belastingen van de verzendkosten weer te geven, als er een belastingklasse voor de verzendmethode is geselecteerd.');
define('SHOPGATE_CONFIG_EXTENDED_SHIPPING_NO_SELECTION', '-- geen selectie --');

define('SHOPGATE_CONFIG_EXTENDED_STATUS_ORDER_SHIPPING_APPROVED', 'Verzending niet geblokkeerd');
define(
'SHOPGATE_CONFIG_EXTENDED_STATUS_ORDER_SHIPPING_APPROVED_DESCRIPTION',
'Selecteer de status voor bestellingen die niet geblokkeerd zijn voor verzending door Shopgate.'
);

define('SHOPGATE_CONFIG_EXTENDED_STATUS_ORDER_SHIPPING_BLOCKED', 'Verzending geblokkeerd');
define(
'SHOPGATE_CONFIG_EXTENDED_STATUS_ORDER_SHIPPING_BLOCKED_DESCRIPTION',
'Selecteer de status voor bestellingen die geblokkeerd zijn voor verzending op Shopgate.'
);

define('SHOPGATE_CONFIG_EXTENDED_STATUS_ORDER_SENT', 'Verzonden');
define('SHOPGATE_CONFIG_EXTENDED_STATUS_ORDER_SENT_DESCRIPTION', 'Selecteer de status waarmee u bestellingen als &quotverzonden&quot markeert.');

define('SHOPGATE_CONFIG_EXTENDED_STATUS_ORDER_CANCELED', 'Geannuleerd');
define('SHOPGATE_CONFIG_EXTENDED_STATUS_ORDER_CANCELED_NOT_SET', '- Status niet geselecteerd -');
define('SHOPGATE_CONFIG_EXTENDED_STATUS_ORDER_CANCELED_DESCRIPTION', 'Selecteer de status voor geannuleerde orders.');

define('SHOPGATE_CONFIG_SEND_ORDER_EMAIL', 'Bevestiging van de bestelling per e-mail');
define('SHOPGATE_CONFIG_SEND_ORDER_EMAIL_ON', 'Ja');
define('SHOPGATE_CONFIG_SEND_ORDER_EMAIL_OFF', 'Geen');
define('SHOPGATE_CONFIG_SEND_ORDER_EMAIL_DESCRIPTION', 'Nadat een bestelling via Shopgate is geplaatst, ontvangt de klant een orderbevestiging per e-mail. Als de winkel producten te koop aanbiedt die kunnen worden gedownload, zal deze e-mail de downloadlink bevatten.');

define('SHOPGATE_CONFIG_PAYMENT_NAME_MAPPING', 'Toon namen voor betaalmethoden');
define('SHOPGATE_CONFIG_PAYMENT_NAME_MAPPING_DESCRIPTION', "Individuele namen voor de betaalmethoden die worden gebruikt voor de invoer van bestellingen. Gedefinieerd met '=' en gescheiden door ';'.<br/>(Voorbeeld: PREPAY=Vooruitbetaling;SHOPGATE=Verwerking door Shopgate)<br/>");
define('SHOPGATE_CONFIG_PAYMENT_NAME_MAPPING_LINK', 'https://support.shopgate.com/hc/de/articles/202911763-Anbindung-an-modified-eCommerce#4.4');
define('SHOPGATE_CONFIG_PAYMENT_NAME_MAPPING_LINK_DESCRIPTION', "Link naar de handleiding");

### Systemeinstellungen ###
define('SHOPGATE_CONFIG_SYSTEM_SETTINGS', 'Systeeminstellingen');

define('SHOPGATE_CONFIG_SERVER_TYPE', 'Shopgateserver');
define('SHOPGATE_CONFIG_SERVER_TYPE_LIVE', 'Live');
define('SHOPGATE_CONFIG_SERVER_TYPE_PG', 'Playground');
define('SHOPGATE_CONFIG_SERVER_TYPE_CUSTOM', 'Custom');
define('SHOPGATE_CONFIG_SERVER_TYPE_CUSTOM_URL', 'Door de gebruiker gedefinieerde URL naar de Shopgate-server');
define('SHOPGATE_CONFIG_SERVER_TYPE_DESCRIPTION', 'Selecteer hier de serververbinding met Shopgate.');
