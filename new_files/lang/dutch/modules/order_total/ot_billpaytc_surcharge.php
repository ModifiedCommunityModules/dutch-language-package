<?php
/** no longer used */
  define('MODULE_ORDER_TOTAL_BILLPAYTC_SURCHARGE_TITLE', 'Berekening van de vergoedingen voor aankopen op afbetaling (BillPay)');
  define('MODULE_ORDER_TOTAL_BILLPAYTC_SURCHARGE_FEE_STATUS_TITLE', '');
  define('MODULE_ORDER_TOTAL_BILLPAYTC_SURCHARGE_DESCRIPTION', 'Berekening van de vergoeding voor bestellingen met de betaalmethode termijnaankoop via BillPay');

  define('MODULE_ORDER_TOTAL_BILLPAYTC_SURCHARGE_STATUS_TITLE','Berekening van de vergoedingen voor aankopen op afbetaling (BillPay)');
  define('MODULE_ORDER_TOTAL_BILLPAYTC_SURCHARGE_STATUS_DESC','Kijk uit! Zodra deze overzichtsmodule gedeactiveerd is, zal de termijnaankoop met BillPay niet meer werken! Deactiveer deze module alleen als u de aankoop in termijnen NIET via BillPay wilt aanbieden!');

  define('MODULE_ORDER_TOTAL_BILLPAYTC_SURCHARGE_SORT_ORDER_TITLE','Sorteervolgorde');
  define('MODULE_ORDER_TOTAL_BILLPAYTC_SURCHARGE_SORT_ORDER_DESC','Weergavevolgorde');

  define('MODULE_ORDER_TOTAL_BILLPAYTC_SURCHARGE_TAX_CLASS_TITLE','Belastingklasse');
  define('MODULE_ORDER_TOTAL_BILLPAYTC_SURCHARGE_TAX_CLASS_DESC','Selecteer een belastingklasse.');

  // new
  define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_TRANSACTION_FEE', 'Verwerkingskosten');
  define('MODULE_ORDER_TOTAL_BILLPAYTC_SURCHARGE', 'Rentepremie');
  define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_TOTAL', 'Totaal bedrag termijnaankoop');
  
  define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_TRANSACTION_FEE_TAX1', 'incl.');
  define('MODULE_ORDER_TOTAL_BILLPAYTRANSACTIONCREDIT_TRANSACTION_FEE_TAX2', 'BTW.');

require_once('ot_billpay_fee.php');

$prefix = 'MODULE_ORDER_TOTAL_BILLPAYTC_SURCHARGE_';
$parent = 'MODULE_ORDER_TOTAL_BILLPAY_';

define($prefix.'FEE_TITLE', 'Berekening van de kosten voor huurkoop (BillPay)');
define($prefix.'FEE_DESCRIPTION', 'Berekening van de vergoeding voor bestellingen met de betaalmethode huurkoop via BillPay');

// config options
$fields = array(
    'FEE_STATUS_TITLE', 'FEE_STATUS_DESC', 'FEE_SORT_ORDER_TITLE', 'FEE_SORT_ORDER_DESC',
    'FEE_TYPE_TITLE', 'FEE_TYPE_DESC', 'FEE_PERCENT_TITLE', 'FEE_PERCENT_DESC', 'FEE_VALUE_TITLE', 'FEE_VALUE_DESC',
    'FEE_TAX_CLASS_TITLE', 'FEE_TAX_CLASS_DESC',
    'FEE_FROM_TOTAL'
);
foreach ($fields as $field)
{
    defined($prefix.$field) OR define($prefix.$field, constant($parent.$field));
}