<?php
/* -----------------------------------------------------------------------------------------
   $Id: ot_gv.php 11640 2019-03-28 10:38:31Z GTB $

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(ot_gv.php,v 1.1.2.1 2003/05/15); www.oscommerce.com

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

  define('MODULE_ORDER_TOTAL_GV_TITLE', 'Vouchers');
  define('MODULE_ORDER_TOTAL_GV_HEADER', 'Vouchers');
  define('MODULE_ORDER_TOTAL_GV_DESCRIPTION', 'Vouchers');
  define('MODULE_ORDER_TOTAL_GV_USER_PROMPT', 'Kies wanneer u uw krediet wilt gebruiken');
  define('TEXT_ENTER_GV_CODE', 'Vul hier uw vouchercode in &nbsp;&nbsp;');

  define('MODULE_ORDER_TOTAL_GV_STATUS_TITLE', 'Weergavewaarde');
  define('MODULE_ORDER_TOTAL_GV_STATUS_DESC', 'Wilt u de waarde van de cadeaubon laten zien?');
  define('MODULE_ORDER_TOTAL_GV_SORT_ORDER_TITLE', 'Sorteervolgorde');
  define('MODULE_ORDER_TOTAL_GV_SORT_ORDER_DESC', 'Weergavevolgorde');
  define('MODULE_ORDER_TOTAL_GV_QUEUE_TITLE', 'Release lijst');
  define('MODULE_ORDER_TOTAL_GV_QUEUE_DESC', 'Moeten bestelde cadeaubonnen eerst worden toegevoegd aan de releaselijst?');
  define('MODULE_ORDER_TOTAL_GV_INC_SHIPPING_TITLE', 'Inclusief verzendkosten');
  define('MODULE_ORDER_TOTAL_GV_INC_SHIPPING_DESC', 'Verzendkosten toevoegen aan de waarde van de goederen');
  define('MODULE_ORDER_TOTAL_GV_INC_TAX_TITLE', 'BTW inbegrepen');
  define('MODULE_ORDER_TOTAL_GV_INC_TAX_DESC', 'BTW naar de waarde van de goederen.');
  define('MODULE_ORDER_TOTAL_GV_CALC_TAX_TITLE', 'BTW herberekenen');
  define('MODULE_ORDER_TOTAL_GV_CALC_TAX_DESC', 'BTW herberekenen');
  define('MODULE_ORDER_TOTAL_GV_TAX_CLASS_TITLE', 'BTW-tarief');
  define('MODULE_ORDER_TOTAL_GV_TAX_CLASS_DESC', 'De volgende BTW tarief als u de bon als creditnota gebruikt.');
  define('MODULE_ORDER_TOTAL_GV_CREDIT_TAX_TITLE', 'Kredietbalans bevat BTW');
  define('MODULE_ORDER_TOTAL_GV_CREDIT_TAX_DESC', 'Crediteer de BTW op de waarde van de voucher');
?>