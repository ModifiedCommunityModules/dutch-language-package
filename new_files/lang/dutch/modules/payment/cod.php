<?php
/* -----------------------------------------------------------------------------------------
   $Id: cod.php 11649 2019-03-28 14:36:34Z GTB $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(cod.php,v 1.7 2002/04/17); www.oscommerce.com 
   (c) 2003	 nextcommerce (cod.php,v 1.5 2003/08/13); www.nextcommerce.org

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

define('MODULE_PAYMENT_COD_TEXT_TITLE', 'Onder rembours');
define('MODULE_PAYMENT_COD_TEXT_DESCRIPTION', 'Betaling onder rembours');
define('MODULE_PAYMENT_COD_TEXT_INFO', 'Houd er rekening mee dat er een extra leveringskosten van 2 Euro moeten worden betaald aan de bezorger ter plaatse.');
define('MODULE_PAYMENT_COD_ZONE_TITLE', 'Betalingszone');
define('MODULE_PAYMENT_COD_ZONE_DESC', 'Als een zone is geselecteerd, is de betalingsmethode alleen geldig voor deze zone.');
define('MODULE_PAYMENT_COD_ALLOWED_TITLE', 'Toegestane zones');
define('MODULE_PAYMENT_COD_ALLOWED_DESC', 'Geef <b>individueel</b> aan welke zones voor deze module moeten worden toegestaan. (bijv. AT,DE (indien leeg, zijn alle zones toegestaan))');
define('MODULE_PAYMENT_COD_STATUS_TITLE', 'Activeer remboursmodule');
define('MODULE_PAYMENT_COD_STATUS_DESC', 'Wilt u betalingen onder rembours accepteren?');
define('MODULE_PAYMENT_COD_SORT_ORDER_TITLE', 'Weergavevolgorde');
define('MODULE_PAYMENT_COD_SORT_ORDER_DESC', 'Weergavevolgorde. Het kleinste cijfer wordt als eerste weergegeven.');
define('MODULE_PAYMENT_COD_ORDER_STATUS_ID_TITLE', 'Stel de status van de bestelling in');
define('MODULE_PAYMENT_COD_ORDER_STATUS_ID_DESC', 'Stel de orders, die met deze module worden gemaakt, in op deze status');
define('MODULE_PAYMENT_COD_LIMIT_ALLOWED_TITLE', 'Maximumbedrag');
define('MODULE_PAYMENT_COD_LIMIT_ALLOWED_DESC', 'Voor welk bedrag is geen rembourszending meer toegestaan? <br />De ingevoerde waarde wordt vergeleken met het subtotaal, dat wordt afgerond.<br /> Dit betekent dat alleen de zuivere waarde van de goederen, zonder verzendkosten en eventuele toeslagen, in aanmerking wordt genomen.');
define('MODULE_PAYMENT_COD_DISPLAY_INFO_TITLE', 'Weergave bij de kassa');
define('MODULE_PAYMENT_COD_DISPLAY_INFO_DESC', 'Moet er bij de kassa een aantekening over de extra kosten worden gemaakt?');
define('MODULE_PAYMENT_COD_DISPLAY_INFO_TEXT', 'Houd er rekening mee dat er een extra leveringskosten van 2 Euro moeten worden betaald aan de bezorger ter plaatse.<br/>');
?>