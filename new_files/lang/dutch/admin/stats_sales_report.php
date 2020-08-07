<?php
/* --------------------------------------------------------------
   $Id: stats_sales_report.php 1311 2005-10-18 12:30:40Z mz $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(stats_sales_report.php,v 1.6 2002/03/30); www.oscommerce.com 
   (c) 2003	 nextcommerce (stats_sales_report.php,v 1.4 2003/08/14); www.nextcommerce.org

   Released under the GNU General Public License 
   --------------------------------------------------------------*/
 

define('REPORT_DATE_FORMAT', 'd. m. Y');

define('HEADING_TITLE', 'Omzet Rapport');

define('REPORT_SALES_STATISTICS', 'Filter voor verkoopstatistieken');
define('REPORT_TYPE_YEARLY', 'Jaarlijks');
define('REPORT_TYPE_MONTHLY', 'Maandelijks');
define('REPORT_TYPE_WEEKLY', 'Wekelijks');
define('REPORT_TYPE_DAILY', 'Dagelijks');
define('REPORT_START_DATE', 'van Datum');
define('REPORT_END_DATE', 'tot Datum (inclusief)');
define('REPORT_DETAIL', 'Detail');
define('REPORT_MAX', 'Toon Hoogste');
define('REPORT_ALL', 'Alle');
define('REPORT_SORT', 'Sortering');
define('REPORT_EXP', 'Export');
define('REPORT_SEND', 'Versturen');
define('EXP_NORMAL', 'Normaal');
define('EXP_HTML', 'HTML only');
define('EXP_CSV', 'CSV');

define('TABLE_HEADING_DATE', 'Datum');
define('TABLE_HEADING_ORDERS', '# Bestellingen');
define('TABLE_HEADING_ITEMS', '# Artikelen');
define('TABLE_HEADING_REVENUE', 'Omzet');
define('TABLE_HEADING_SHIPPING', 'Verzonden');
define('TABLE_HEADING_ADDITIONAL', 'Diversen');
define('TABLE_HEADING_TOTAL', 'Totaal');

define('DET_HEAD_ONLY', 'geen Details');
define('DET_DETAIL', 'Toon Details');
define('DET_DETAIL_ONLY', 'Details met bedrag');

define('SORT_VAL0', 'Standaard');
define('SORT_VAL1', 'Beschrijving');
define('SORT_VAL2', 'Beschrijving aflopend');
define('SORT_VAL3', '# Artikelen');
define('SORT_VAL4', '# Artikelen aflopend');
define('SORT_VAL5', 'Omzet');
define('SORT_VAL6', 'Omzet aflopend');

define('REPORT_STATUS_FILTER', 'Status');
define('REPORT_PAYMENT_FILTER','Betaalwijze');

define('SR_SEPARATOR1', ';');
define('SR_SEPARATOR2', ';');
define('SR_NEWLINE', '<br />');
?>