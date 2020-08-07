<?php
/* -----------------------------------------------------------------------------------------
   $Id: moneyorder.php 12439 2019-12-02 17:40:51Z GTB $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(moneyorder.php,v 1.8 2003/02/16); www.oscommerce.com 
   (c) 2003	 nextcommerce (moneyorder.php,v 1.4 2003/08/13); www.nextcommerce.org

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

  define('MODULE_PAYMENT_MONEYORDER_TEXT_TITLE', 'Vooruitbetaling per overboeking');
  define('MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION', 'Rekening:<br />' . MODULE_PAYMENT_MONEYORDER_PAYTO . '<br /><br />Tenaamstelling:<br />' . nl2br(STORE_NAME_ADDRESS) . '<br /><br />' . 'Uw bestelling wordt na ontvangst van de betaling verstuurd.');
  define('MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER', "Rekening: ". MODULE_PAYMENT_MONEYORDER_PAYTO . "\n\Tenaamstelling:\n" . STORE_NAME_ADDRESS . "\n\n" . 'Uw bestelling wordt na ontvangst van de betaling verstuurd.');
  if (defined('MODULE_PAYMENT_MONEYORDER_SUCCESS') && MODULE_PAYMENT_MONEYORDER_SUCCESS == 'True') {
    define('MODULE_PAYMENT_MONEYORDER_TEXT_INFO','Wij verzenden uw bestelling na ontvangst van de betaling. U ontvangt de accountgegevens in de laatste stap van de bestelling.');
  } else {
    define('MODULE_PAYMENT_MONEYORDER_TEXT_INFO','Wij verzenden uw bestelling na ontvangst van de betaling. U ontvangt de accountgegevens per e-mail nadat uw bestelling is geaccepteerd.');
  }
  define('MODULE_PAYMENT_MONEYORDER_STATUS_TITLE' , 'Module vooruitbetaling activeren');
  define('MODULE_PAYMENT_MONEYORDER_STATUS_DESC' , 'Wilt u betalingen per vooruitbetaling accepteren?');
  define('MODULE_PAYMENT_MONEYORDER_ALLOWED_TITLE' , 'Toegestane zones');
  define('MODULE_PAYMENT_MONEYORDER_ALLOWED_DESC' , 'Geef de zones <b>individiueel</b> aan welke voor deze module toegestaan zijn. (bijv. AT,DE (laat leeg voor toestaan van alle zones))');
  define('MODULE_PAYMENT_MONEYORDER_PAYTO_TITLE' , 'Te betalen aan:');
  define('MODULE_PAYMENT_MONEYORDER_PAYTO_DESC' , 'Aan wie moet betaald worden?');
  define('MODULE_PAYMENT_MONEYORDER_SORT_ORDER_TITLE' , 'Sorteervolgorde van weergave');
  define('MODULE_PAYMENT_MONEYORDER_SORT_ORDER_DESC' , 'Sorteervolgorde van weergave. Kleinste wordt eerst getoond.');
  define('MODULE_PAYMENT_MONEYORDER_ZONE_TITLE' , 'Betaalzone');
  define('MODULE_PAYMENT_MONEYORDER_ZONE_DESC' , 'Als een zone gekozen is geldt deze betaalwijze alleen voor deze zone.');
  define('MODULE_PAYMENT_MONEYORDER_ORDER_STATUS_ID_TITLE' , 'Bestelstatus vastleggen');
  define('MODULE_PAYMENT_MONEYORDER_ORDER_STATUS_ID_DESC' , 'Bestellingen, welke met deze module gemaakt werden op deze status zetten');
  define('MODULE_PAYMENT_MONEYORDER_SUCCESS_TITLE' , 'Toon bankgegevens');
  define('MODULE_PAYMENT_MONEYORDER_SUCCESS_DESC' , 'Moeten de bankgegevens op de succespagina worden weergegeven?');
?>