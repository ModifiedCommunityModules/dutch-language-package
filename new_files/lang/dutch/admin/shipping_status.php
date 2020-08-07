<?php
/* --------------------------------------------------------------
   $Id: shipping_status.php 899 2005-04-29 02:40:57Z hhgag $

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

define('HEADING_TITLE', 'Verzendstatus');

define('TABLE_HEADING_SHIPPING_STATUS_IMAGE', 'Afbeelding');
define('TABLE_HEADING_SHIPPING_STATUS', 'Verzendstatus');
define('TABLE_HEADING_SORT', 'Sorteren');
define('TABLE_HEADING_ACTION', 'Actie');

define('TEXT_INFO_EDIT_INTRO', 'Breng de benodigde wijzigingen aan');
define('TEXT_INFO_SHIPPING_STATUS_NAME', 'Verzendstatus:');
define('TEXT_INFO_INSERT_INTRO', 'Breng de verzendstatus met alle relevante Data in');
define('TEXT_INFO_DELETE_INTRO', 'Weet u zeker dat deze Verzend status wilt verwijderen?');
define('TEXT_INFO_HEADING_NEW_SHIPPING_STATUS', 'Nieuwe verzendstatus');
define('TEXT_INFO_HEADING_EDIT_SHIPPING_STATUS', 'Verzendstatus bewerken');
define('TEXT_INFO_SHIPPING_STATUS_IMAGE', 'Afbeelding:');
define('TEXT_INFO_HEADING_DELETE_SHIPPING_STATUS', 'Verzendstatus verwijderen');
define('TEXT_DELETE_IMAGE', 'Afbeelding verwijderen');
define('TEXT_INFO_SHIPPING_STATUS_SORT_ORDER', 'Sorteren:');

define('ERROR_REMOVE_DEFAULT_SHIPPING_STATUS', 'Fout: De Default-Verzendstatus kan niet verwijderd worden. Maak een andere verzendstatus default en probeer het opnieuw.');
define('ERROR_STATUS_USED_IN_ORDERS', 'Fout: Deze verzendstatus wordt nog gebruikt door artikelen.');
define('ERROR_STATUS_USED_IN_HISTORY', 'Fout: Deze verzendstatus wordt nog gebruikt door artikelen.');
?>