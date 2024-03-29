<?php
/* --------------------------------------------------------------
   $Id: cross_sell_groups.php 1231 2005-09-21 13:05:36Z mz $   

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

define('HEADING_TITLE', 'Cross-sell groepen');
define('TABLE_HEADING_XSELL_GROUP_ID', 'ID');
define('TABLE_HEADING_XSELL_GROUP_NAME', 'Groepsnaam');
define('TABLE_HEADING_XSELL_GROUP_SORT_ORDER', 'Sorteren');
define('TABLE_HEADING_ACTION', 'Actie');

define('TEXT_INFO_EDIT_INTRO', 'Gelieve de nodige wijzigingen aan te brengen');
define('TEXT_INFO_XSELL_GROUP_NAME', 'Groepsnaam:');
define('TEXT_INFO_XSELL_GROUP_SORT_ORDER', 'Sorteren:');
define('TEXT_INFO_INSERT_INTRO', 'Voer de nieuwe groepsnaam in met de bijbehorende gegevens');
define('TEXT_INFO_DELETE_INTRO', 'Weet u zeker dat u deze orderstatus wilt verwijderen?');
define('TEXT_INFO_HEADING_NEW_XSELL_GROUP', 'Nieuwe naam');
define('TEXT_INFO_HEADING_EDIT_XSELL_GROUP', 'Bewerk de gruppenaam');
define('TEXT_INFO_HEADING_DELETE_XSELL_GROUP', 'Verwijder de gruppenaam');
define('ERROR_STATUS_USED_IN_ORDERS', 'Fout: Deze groep wordt momenteel gebruikt in cross-sell artikelen.');
define('ERROR_STATUS_USED_IN_CROSS_SELLS', 'Fout: Deze groep wordt momenteel nog gebruikt voor cross-marketing artikelen.');

?>