<?php
/* -----------------------------------------------------------------------------------------
   $Id: gv_queue.php 899 2005-04-29 02:40:57Z hhgag $

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(gv_queue.php,v 1.2.2.1 2003/04/27); www.oscommerce.com

   Released under the GNU General Public License
   -----------------------------------------------------------------------------------------
   Third Party contributions:

   Credit Class/Gift Vouchers/Discount Coupons (Version 5.10)
   http://www.oscommerce.com/community/contributions,282
   Copyright (c) Strider | Strider@oscworks.com
   Copyright (c  Nick Stanko of UkiDev.com, nick@ukidev.com
   Copyright (c) Andre ambidex@gmx.net
   Copyright (c) 2001,2002 Ian C Wilson http://www.phesis.org

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


define('HEADING_TITLE', 'Vergiftigingsbonnen Vrijgavewachtrij');

define('TABLE_HEADING_CUSTOMERS', 'Klanten');
define('TABLE_HEADING_ORDERS_ID', 'Bestel-nee.');
define('TABLE_HEADING_VOUCHER_VALUE', 'Waardebon');
define('TABLE_HEADING_DATE_PURCHASED', 'Datum Gekocht');
define('TABLE_HEADING_ACTION', 'Actie');

define('TEXT_REDEEM_COUPON_MESSAGE_HEADER', 'U heeft onlangs een cadeaubon gekocht in onze online winkel.' . "\n"
                                          . 'Om veiligheidsredenen is dit niet direct aan u ter beschikking gesteld.' . "\n"
                                          . 'Dit bedrag is nu echter wel vrijgekomen. U kunt nu onze winkel bezoeken' . "\n"
                                          . 'en stuur de waarde via e-mail naar iemand anders' . "\n\n");

define('TEXT_REDEEM_COUPON_MESSAGE_AMOUNT', 'De cadeaubon(nen) die u heeft gekocht zijn %s waard.' . "\n\n");

define('TEXT_REDEEM_COUPON_MESSAGE_BODY', '');
define('TEXT_REDEEM_COUPON_MESSAGE_FOOTER', '');
define('TEXT_REDEEM_COUPON_SUBJECT', 'Aankoop van gifbonnen');
?>