<?php
/* --------------------------------------------------------------
	payone.php 2013-08-02 mabr
	Gambio GmbH
	http://www.gambio.de
	Copyright (c) 2013 Gambio GmbH
	Released under the GNU General Public License (Version 2)
	[http://www.gnu.org/licenses/gpl-2.0.html]
	--------------------------------------------------------------


	based on:
	(c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
	(c) 2002-2003 osCommerce(ot_cod_fee.php,v 1.02 2003/02/24); www.oscommerce.com
	(C) 2001 - 2003 TheMedia, Dipl.-Ing Thomas Plänkers ; http://www.themedia.at & http://www.oscommerce.at
	(c) 2003 XT-Commerce - community made shopping http://www.xt-commerce.com ($Id: ot_cod_fee.php 1003 2005-07-10 18:58:52Z mz $)

	Released under the GNU General Public License
	---------------------------------------------------------------------------------------*/

//define('MODULE_PAYMENT_PAYONE_TEXT_TITLE', 'PayOne');
//define('MODULE_PAYMENT_PAYONE_TEXT_DESCRIPTION', 'PayOne lorem ipsum');
//define('MODULE_PAYMENT_PAYONE_TEXT_INFO', 'PayOne ...');
define('MODULE_PAYMENT_PAYONE_STATUS_TITLE', 'Activeer de module');
define('MODULE_PAYMENT_PAYONE_STATUS_DESC', 'Wilt u betalingen via deze module accepteren?');
define('MODULE_PAYMENT_PAYONE_ALLOWED_TITLE', 'Toegestane zones');
define('MODULE_PAYMENT_PAYONE_ALLOWED_DESC', 'Voer <b>individueel</b> de zones in die voor deze module moeten worden toegestaan. (bijv. AT,DE (indien leeg, zijn alle zones toegestaan))');
define('MODULE_PAYMENT_PAYONE_ZONE_TITLE', 'Betalingszone');
define('MODULE_PAYMENT_PAYONE_ZONE_DESC', 'Als een zone is geselecteerd, is de betalingsmethode alleen geldig voor deze zone.');
define('MODULE_PAYMENT_PAYONE_TMPORDER_STATUS_ID_TITLE', 'Tijdelijke orderstatus instellen');
define('MODULE_PAYMENT_PAYONE_TMPORDER_STATUS_ID_DESC', 'Zet orders die met deze module zijn gemaakt in deze status (tijdens het lopende betalingsproces)');
define('MODULE_PAYMENT_PAYONE_ORDER_STATUS_ID_TITLE', 'Stel de status van de bestelling in');
define('MODULE_PAYMENT_PAYONE_ORDER_STATUS_ID_DESC', 'Stel de orders, die met deze module worden gemaakt, in op deze status');
define('MODULE_PAYMENT_PAYONE_SORT_ORDER_TITLE', 'Weergavevolgorde');
define('MODULE_PAYMENT_PAYONE_SORT_ORDER_DESC', 'Weergavevolgorde. Het kleinste cijfer wordt als eerste weergegeven.');
define('MODULE_PAYMENT_PAYONE_LP', '<br/><br/><a target="_blank" href="https://www.payone.com/de/plattform-integration/extensions/modified-shop/"><strong>Maak hier nu een PAYONE-account aan.</strong></a>');
