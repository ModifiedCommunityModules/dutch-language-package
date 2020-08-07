<?php
/* --------------------------------------------------------------
   $Id: whos_online.php 10502 2016-12-14 16:25:46Z GTB $   

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(whos_online.php,v 1.7 2002/03/30); www.oscommerce.com 
   (c) 2003	 nextcommerce (whos_online.php,v 1.4 2003/08/14); www.nextcommerce.org
   (c) 2006 xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License 
   --------------------------------------------------------------*/

define('HEADING_TITLE', 'Wie is Online');

define('TABLE_HEADING_ONLINE', 'Online');
define('TABLE_HEADING_CUSTOMER_ID', 'ID');
define('TABLE_HEADING_FULL_NAME', 'Naam');
define('TABLE_HEADING_IP_ADDRESS', 'IP Adres');
define('TABLE_HEADING_COUNTRY', 'Land');
define('TABLE_HEADING_ENTRY_TIME', 'Starttijd');
define('TABLE_HEADING_LAST_CLICK', 'Laatst geklikt');
define('TABLE_HEADING_LAST_PAGE_URL', 'Laatste URL');
define('TABLE_HEADING_HTTP_REFERER', 'HTTP Referer');
define('TABLE_HEADING_ACTION', 'Aktie');
define('TABLE_HEADING_SHOPPING_CART', 'Winkelwagen');
define('TEXT_SHOPPING_CART_SUBTOTAL', 'SubTotaal');
define('TEXT_NUMBER_OF_CUSTOMERS', 'Er zijn momenteel %s Klanten online');
define('TEXT_EMPTY_CART', 'Winkelwagen van de klant is leeg');
define('TEXT_SESSION_IS_ENCRYPTED', '<hr><b>HINT</b>:<br />De inhoud van de winkelwagen kan niet worden weergegeven.<br />De sessie is met Suhosin beveiligd.<br />(suhosin.session.encrypt = On)<br />Om de beveiliging op te heffen moet u contact opnemen met uw provider.');
define('TEXT_ACTIVATE_WHOS_ONLINE', 'Wie is er online te activeren:');
?>