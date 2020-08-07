<?php
/**
 *
 * @package    micropayment
 * @copyright  Copyright (c) 2015 Micropayment GmbH (http://www.micropayment.de)
 * @author     micropayment GmbH <shop-plugins@micropayment.de>
 */
require_once('mcp_service.php');
define('MODULE_PAYMENT_MCP_PREPAY_TEXT_DESCRIPTION', 'Micropayment Prepayment Module
<br /><br />
Links<br />
<b>Gereedschap</b><br />
<a target="_new" href="../callback/micropayment/cleanup.php">
    <input type="button" value="Te plaatsen bestellingen">
</a><br />
<br />
<b>Extern</b><br />
<a href="http://ecommerce.micropayment.de/download/modified/micropayment_modified-shop_2.x.pdf?version=2.1.0">
    <input type="button" value="Handleiding">
</a>&nbsp;
<a target="_new" href="https://r120.micropayment.de">
    <input type="button" value="Registratie van microbetalingen">
    </a>
');
define('MODULE_PAYMENT_MCP_PREPAY_TEXT_TITLE', 'micropayment&trade; vooruitbetaling');
define('MODULE_PAYMENT_MCP_PREPAY_TEXT_TITLE_EXTERN', 'Vooruitbetaling');
define('MODULE_PAYMENT_MCP_PREPAY_TEXT_INFO', '
<div style="margin:10px;">
<div style="float:right;"><img src="./images/micropayment/logo_small.png" width="150"/></div>
<div style="float:left;font-family: Arial, Helvetica, sans-serif;">
    <b>Het vooraf ingevulde betalingsformulier wordt u per e-mail toegestuurd.</b><br />
    Om uw bestelling af te ronden, zullen we u nu doorverwijzen naar de website<br /> van onze betaaldienstverlener micropayment&trade;.<br /><br />
    &#10004; beveiligde &nbsp; &#10004; eenvoudigweg &nbsp; &#10004; inschrijvingsvrij

</div>
');


define('MODULE_PAYMENT_MCP_PREPAY_STATUS_TITLE','Vooruitbetaling');
define('MODULE_PAYMENT_MCP_PREPAY_STATUS_DESC','Vooruitbetaalmodule van Micropayment');
define('MODULE_PAYMENT_MCP_PREPAY_MINIMUM_AMOUNT_TITLE','Minimumwaarde van het winkelwagentje');
define('MODULE_PAYMENT_MCP_PREPAY_MINIMUM_AMOUNT_DESC','Minimumwaarde van het winkelmandje voor deze betaalmethode');
define('MODULE_PAYMENT_MCP_PREPAY_MAXIMUM_AMOUNT_TITLE','Maximale waarde van het winkelwagentje');
define('MODULE_PAYMENT_MCP_PREPAY_MAXIMUM_AMOUNT_DESC','Maximale waarde van het winkelwagentje voor deze betaalmethode');
define('MODULE_PAYMENT_MCP_PREPAY_SORT_ORDER_TITLE','Positionering');
define('MODULE_PAYMENT_MCP_PREPAY_SORT_ORDER_DESC','Positionering in de keuze van de betalingsmethode');
define('MODULE_PAYMENT_MCP_PREPAY_ALLOWED_TITLE','Landselectie');
define('MODULE_PAYMENT_MCP_PREPAY_ALLOWED_DESC','Laat alleen orders uit de landen toe (met komma\'s gescheiden lijst, bijv. DE,EN).');

define('MODULE_PAYMENT_MCP_PREPAY_COMMENT_INIT','init: Wacht op het betalingsbewijs. Automatische annulering op %s');
define('MODULE_PAYMENT_MCP_PREPAY_COMMENT_PAYIN','Er werd een voorschot van %s %s betaald.');
define('MODULE_PAYMENT_MCP_PREPAY_COMMENT_EXPIRED','Geen ontvangst van betaling, automatische annulering');

define('MODULE_PAYMENT_MCP_SERVICE_TRANSACTION_CANCELLED','Annulering: De bestelling is geannuleerd.');