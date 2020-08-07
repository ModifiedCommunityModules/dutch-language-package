<?php
/**
 *
 * @package    micropayment
 * @copyright  Copyright (c) 2015 Micropayment GmbH (http://www.micropayment.de)
 * @author     micropayment GmbH <shop-plugins@micropayment.de>
 */
define('MODULE_PAYMENT_MCP_SERVICE_TEXT_TITLE','micropayment - Gateway');
define('MODULE_PAYMENT_MCP_SERVICE_TEXT_DESCRIPTION','');
define('MODULE_PAYMENT_MCP_SERVICE_TEXT_INFO','INFOTEXT van MCP_SERVICE');
define('MODULE_PAYMENT_MCP_SERVICE_STATUS_TITLE',' Status');
define('MODULE_PAYMENT_MCP_SERVICE_STATUS_DESC','Inschakelen van de micropayment&trade; modules');
define('MODULE_PAYMENT_MCP_SERVICE_SORT_ORDER_TITLE',' Positionering');
define('MODULE_PAYMENT_MCP_SERVICE_SORT_ORDER_DESC','Positie in de lijst');
define('MODULE_PAYMENT_MCP_SERVICE_ACCOUNT_ID_TITLE','<div style="color:#850000;font-style: italic;">De volgende instellingen zijn geldig voor alle betalingsmodules van micropayment&trade; en hoeven slechts &eacute;&eacute;n keer te worden ingevoerd.</div><br /> Account ID');
define('MODULE_PAYMENT_MCP_SERVICE_ACCOUNT_ID_DESC','Account-ID van micropayment&trade;');
define('MODULE_PAYMENT_MCP_SERVICE_ACCESS_KEY_TITLE',' Access-Key');
define('MODULE_PAYMENT_MCP_SERVICE_ACCESS_KEY_DESC','Access-Key von micropayment&trade;');
define('MODULE_PAYMENT_MCP_SERVICE_PROJECT_CODE_TITLE',' Projektcode');
define('MODULE_PAYMENT_MCP_SERVICE_PROJECT_CODE_DESC','Projektcode van micropayment&trade;');
define('MODULE_PAYMENT_MCP_SERVICE_PAYTEXT_TITLE',' Betalingstekst');
define('MODULE_PAYMENT_MCP_SERVICE_PAYTEXT_DESC','Dit wordt getoond op de factuur of als titel in het betalingsvenster. Met de plaatshouder #ORDER# kunt u de OrderID van de bestelling invoegen, bijvoorbeeld "Bestel #ORDER#" zou "Bestel 0000023" aangeven.');
define('MODULE_PAYMENT_MCP_SERVICE_THEME_TITLE',' Thema');
define('MODULE_PAYMENT_MCP_SERVICE_THEME_DESC','Thema voor het betalingsvenster, standaard is x1');

define('MODULE_PAYMENT_MCP_SERVICE_GFX_TITLE',' Logo-Code');
define('MODULE_PAYMENT_MCP_SERVICE_GFX_DESC','Voer hier uw logocode in.');

define('MODULE_PAYMENT_MCP_SERVICE_BGGFX_TITLE',' Achtergrond grafische code');
define('MODULE_PAYMENT_MCP_SERVICE_BGGFX_DESC','Voer hier de grafische achtergrondcode in.');

define('MODULE_PAYMENT_MCP_SERVICE_BGCOLOR_TITLE',' Achtergrondkleur');
define('MODULE_PAYMENT_MCP_SERVICE_BGCOLOR_DESC','Vul hier de achtergrondkleur in.');

define('MODULE_PAYMENT_MCP_SERVICE_SECRET_FIELD_TITLE',' Veiligheidsveld Naam');
define('MODULE_PAYMENT_MCP_SERVICE_SECRET_FIELD_DESC','Voor meer veiligheid in server-to-server communicatie voert u hier een naam in die alleen u kent.');

define('MODULE_PAYMENT_MCP_SERVICE_SECRET_FIELD_VALUE_TITLE',' Veiligheidsveld Waarde');
define('MODULE_PAYMENT_MCP_SERVICE_SECRET_FIELD_VALUE_DESC','Voer hier een waarde in die de micropayment&trade; server aan uw winkel moet geven om de veiligheid te verbeteren.');


define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PENDING_PAYMENT_ID_TITLE',' Bestelstatus: in betaling');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PENDING_PAYMENT_ID_DESC','De klant betaalt de bestelling');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PROCESSING_ID_TITLE',' Bestelstatus: betaald');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PROCESSING_ID_DESC','De klant heeft met succes betaald.');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CANCELLED_ID_TITLE',' Bestelstatus: Geannuleerd');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CANCELLED_ID_DESC','Wanneer een aankooporder wordt geannuleerd, wordt deze status ingesteld');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_REFUNDED_ID_TITLE',' Bestelstatus: Terugbetaald');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_REFUNDED_ID_DESC','Wanneer een terugbetaling in gang wordt gezet, wordt deze status ingesteld');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PAYMENT_REVIEW_ID_TITLE',' Bestelstatus: Betaling controleren');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PAYMENT_REVIEW_ID_DESC','Als er zich problemen voordoen, wordt deze status ingesteld zodat u dit kunt controleren.');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CONFLICT_ID_TITLE',' Ordestatus: Conflict');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CONFLICT_ID_DESC','Als er sprake is van een andere gebeurtenisworkflow, wordt deze status ingesteld.');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PARTPAY_ID_TITLE',' Bestelstatus: Vooruitbetaling - Deelbetaling');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PARTPAY_ID_DESC','Als een betalingsbewijs wordt gemeld voor vooruitbetaling, maar de bestelling niet volledig is betaald, wordt deze status ingesteld.');

define('MODULE_PAYMENT_MCP_SERVICE_REFUND_COMMENT','Er werd een terugbetaling gedaan.');
define('MODULE_PAYMENT_MCP_SERVICE_SUCCESS_TRANSACTION','De bestelling is betaald. De Auth code is: %s');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_TERMINATED','Het verzoek is ongeldig.');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_UNKNOWN_ORDER_ID','De bestelling bestaat niet');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_SECRET_FIELD_MISSMATCH','Beveiligingsveld klopt niet!');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_AMOUNT_MISSMATCH','Het bedrag komt niet overeen met de betaalde waarde! Is: %s Doel: %s');
define('MODULE_PAYMENT_MCP_SERVICE_UNKNOWN_FUNCTION','Functie is niet bekend.');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_INVALID_AUTH_CODE','Auth code is onjuist');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_INVALID_AMOUNT_VALUE','De houder is defect');

define('MODULE_PAYMENT_MCP_SERVICE_EXPIRE_DAYS_TITLE','Het verwijderen van onbetaalde bestellingen');
define('MODULE_PAYMENT_MCP_SERVICE_EXPIRE_DAYS_DESC','Hoe lang kan een bestelling in de status "Betaling in behandeling" blijven voordat deze uit de knop "Bestelling plaatsen" wordt verwijderd. Geef het aantal dagen aan. BELANGRIJK: Er wordt geen vooruitbetalingsopdracht verwijderd.');

define('MODULE_PAYMENT_MCP_SERVICE_NEW_VERSION','%s<div class="mcp_notice_register">Een nieuwe micropayment&trade; moduleversie met nieuwe functies en mogelijkheden is beschikbaar voor uw winkelsysteem. <a href="http://ecommerce.micropayment.de/modifiedshop/" target="_new">Naar de nieuwe moduleversie.</a></div>');

define('MODULE_PAYMENT_MCP_SERVICE_NO_ACCOUNT','%s<div class="mcp_notice_register">Om de betalingsmodules van Micropayment&trade; te laten functioneren, moet u een rekening aanmaken bij Micropayment&trade; en een project aanmaken. <a href="https://%s.micropayment.de" target="blank">Klik hier om u te registreren.</a></div>');
define('MODULE_PAYMENT_MCP_SERVICE_CSS','
<style type="text/css">
.mcp_notice_register {
    margin-bottom: 5px;
    background-image: url("../images/micropayment/logo_small.png");
	background-position: 10px 10px;
	background-color: #ffdede;
    background-repeat: no-repeat;
    background-size: 100px;
    height: 40px;
	padding-left:130px;
	padding-top: 24px;
	border: 1px #cdcdcd solid;
	font-family: verdana, tahoma, sans-serif;
	font-size: 12px;
}
.mcp_notice_register a {
 font-family: verdana, tahoma, sans-serif;
 font-size: 12px;
 font-weight: bold;
 color: #8d005d;
}
</style>
');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PENDING_PAYMENT_GERMAN_TITLE','Bezahlung steht aus');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PARTPAY_GERMAN_TITLE','Vorkasse, Teilzahlung');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PROCESSING_GERMAN_TITLE','in bearbeitung');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CANCELLED_GERMAN_TITLE','Storniert');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PAYMENT_REVIEW_GERMAN_TITLE','Bestellung pr&uuml;fen');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CONFLICT_GERMAN_TITLE','Event-Problem!');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PENDING_PAYMENT_ENGLISH_TITLE','in afwachting van de betaling');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PARTPAY_ENGLISH_TITLE','prepay, partpay');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PROCESSING_ENGLISH_TITLE','processing');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CANCELLED_ENGLISH_TITLE','cancelled');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PAYMENT_REVIEW_ENGLISH_TITLE','payment review');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CONFLICT_ENGLISH_TITLE','event-conflict!');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PENDING_PAYMENT_DUTCH_TITLE','in afwachting van de betaling');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PARTPAY_DUTCH_TITLE','vooruitbetaling, deelbetaling');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PROCESSING_DUTCH_TITLE','verwerking');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CANCELLED_DUTCH_TITLE','geannuleerd');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PAYMENT_REVIEW_DUTCH_TITLE','betalingsoverzicht');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CONFLICT_DUTCH_TITLE','event-conflict!');