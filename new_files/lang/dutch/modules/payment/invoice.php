<?php
/* -----------------------------------------------------------------------------------------
   $Id: invoice.php 998 2005-07-07 14:18:20Z mz $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(cod.php,v 1.28 2003/02/14); www.oscommerce.com
   (c) 2003	 nextcommerce (invoice.php,v 1.4 2003/08/13); www.nextcommerce.org

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

define('MODULE_PAYMENT_INVOICE_TEXT_DESCRIPTION', 'Factuur');
define('MODULE_PAYMENT_INVOICE_TEXT_TITLE', 'Factuur');
define('MODULE_PAYMENT_INVOICE_TEXT_INFO','');
define('MODULE_PAYMENT_INVOICE_STATUS_TITLE' , 'Factuurmodule activeren');
define('MODULE_PAYMENT_INVOICE_STATUS_DESC' , 'Wilt u betalinger per Factuur accepteren?');
define('MODULE_PAYMENT_INVOICE_ORDER_STATUS_ID_TITLE' , 'Bestelstatus instellen');
define('MODULE_PAYMENT_INVOICE_ORDER_STATUS_ID_DESC' , 'Stel de status van orders gemaakt met deze betaalmodule in op deze waarde');
define('MODULE_PAYMENT_INVOICE_SORT_ORDER_TITLE' , 'Sorteervolgorde');
define('MODULE_PAYMENT_INVOICE_SORT_ORDER_DESC' , 'Sorteervolgorde weergave. Laagste prijs wordt als eerste getoond.');
define('MODULE_PAYMENT_INVOICE_ZONE_TITLE' , 'Betaalzone');
define('MODULE_PAYMENT_INVOICE_ZONE_DESC' , 'Indien een zone is uitgekozen, geldt de betaalmethode alleen voor die ene zone.');
define('MODULE_PAYMENT_INVOICE_ALLOWED_TITLE' , 'Toegestane Zones');
define('MODULE_PAYMENT_INVOICE_ALLOWED_DESC' , 'Geeft u <b>separaat</b> die Zones aan, welke voor deze module toegestaan zijn. (bijv. AT,DE (laat leeg als u alle zones wilt toestaan))');
define('MODULE_PAYMENT_INVOICE_MIN_ORDER_TITLE' , 'Minimaal aantal Bestellingen');
define('MODULE_PAYMENT_INVOICE_MIN_ORDER_DESC' , 'Minimaal aantal bestellingen die een klant moet hebben om over deze Optie te kunnen beschikken.');
define('MODULE_PAYMENT_INVOICE_MIN_ORDER_STATUS_ID_TITLE' , 'Bestelstatus van noodzakelijke bestellingen');
define('MODULE_PAYMENT_INVOICE_MIN_ORDER_STATUS_ID_DESC' , 'Selecteer de status van de orders die in aanmerking moeten worden genomen voor het nummer dat onder "Vereiste orders" is ingevoerd.');
define('MODULE_PAYMENT_INVOICE_MAX_AMOUNT_TITLE' , 'Maximumbedrag');
define('MODULE_PAYMENT_INVOICE_MAX_AMOUNT_DESC' , 'Vul hier het maximale bedrag voor de betaling op rekening in.');
?>