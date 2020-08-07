<?php
/* --------------------------------------------------------------
   $Id: orders_status.php 899 2005-04-29 02:40:57Z hhgag $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(orders_status.php,v 1.7 2002/01/30); www.oscommerce.com 
   (c) 2003	 nextcommerce (orders_status.php,v 1.4 2003/08/14); www.nextcommerce.org

   Released under the GNU General Public License 
   --------------------------------------------------------------*/

define('HEADING_TITLE', 'Bestelstatus');

define('TABLE_HEADING_ORDERS_STATUS', 'Bestelstatus');
define('TABLE_HEADING_SORT', 'Sorteren');
define('TABLE_HEADING_ACTION', 'Actie');

define('TEXT_INFO_EDIT_INTRO', 'Breng de benodigde wijzigingen aan');
define('TEXT_INFO_ORDERS_STATUS_NAME', 'Status bestellingen:');
define('TEXT_INFO_INSERT_INTRO', 'Geef de nieuwe bestelstatus met alle relevante gegevens in');
define('TEXT_INFO_DELETE_INTRO', 'Weet u zeker dat u deze bestelstatus wilt verwijderen?');
define('TEXT_INFO_HEADING_NEW_ORDERS_STATUS', 'Nieuwe bestelstatus');
define('TEXT_INFO_HEADING_EDIT_ORDERS_STATUS', 'Bestelstatus bewerken');
define('TEXT_INFO_HEADING_DELETE_ORDERS_STATUS', 'Bestelstatus verwijderen');
define('TEXT_INFO_ORDERS_STATUS_SORT_ORDER', 'Sorteren:');

define('ERROR_REMOVE_DEFAULT_ORDER_STATUS', 'Fout: De Standaard-Bestelstatus kan niet verwijderd worden. Kies een andere bestelstatus als standaard en probeer het nog eens.');
define('ERROR_STATUS_USED_IN_ORDERS', 'Fout: Deze bestelstatus is momenteel in gebruik bij bestellingen.');
define('ERROR_STATUS_USED_IN_HISTORY', 'Fout: Deze bestelstatus is momenteel in gebruik bij de bestelhistorie.');
?>