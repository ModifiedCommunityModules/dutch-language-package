<?php
/* -----------------------------------------------------------------------------------------
   $Id: paypal_module.php 11044 2017-12-26 20:35:47Z Tomcraft $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


$lang_array = array(
  'TEXT_PAYPAL_MODULE_HEADING_TITLE' => 'PayPal Producten',
  
  'TABLE_HEADING_MODULES' => 'Module',
  'TABLE_HEADING_FILENAME' => 'Naam van de module (voor intern gebruik)',
  'TABLE_HEADING_SORT_ORDER' => 'Sorteren',
  'TABLE_HEADING_STATUS' => 'Status',
  'TABLE_HEADING_ACTION' => 'Actie',

  'TABLE_HEADING_WALL_STATUS' => 'Weergave op de betaalmuur',
  'TABLE_HEADING_WALL_DESCRIPTION' => 'Beschrijving',
  
  'TEXT_PAYPAL_MODULE_PROFILE' => 'Profiel',
  'TEXT_PAYPAL_NO_PROFILE' => 'geen web-profiel',
  'TEXT_PAYPAL_STANDARD_PROFILE' => 'Standaard web profiel',
  
  'TEXT_PAYPAL_MODULE_LINK_SUCCESS' => 'Link in Afrekenen',
  'TEXT_PAYPAL_MODULE_LINK_SUCCESS_INFO' => 'Moet de betalingslink in de kassa worden weergegeven?',

  'TEXT_PAYPAL_MODULE_LINK_ACCOUNT' => 'Link in rekening',
  'TEXT_PAYPAL_MODULE_LINK_ACCOUNT_INFO' => 'Moet de betalingslink in de rekening worden weergegeven?',

  'TEXT_PAYPAL_MODULE_LINK_PRODUCT' => 'Express-knop bij het artikel',
  'TEXT_PAYPAL_MODULE_LINK_PRODUCT_INFO' => 'Moet de PayPal Express-knop worden weergegeven in de iteminfo?',

  'TEXT_PAYPAL_MODULE_USE_TABS' => 'Accordeon / Tabbladen',
  'TEXT_PAYPAL_MODULE_USE_TABS_INFO' => 'Maakt het sjabloon gebruik van Accordion of Tabs in de kassa?',

  'TEXT_PAYPAL_MODULE_SHIPPING_COST' => 'Voorlopige verzendkosten',
  'TEXT_PAYPAL_MODULE_SHIPPING_COST_INFO' => 'Vul het bedrag voor tijdelijke verzendkosten in.',

  'TEXT_PAYPAL_MODULE_ORDER_STATUS_ACCEPTED' => 'Bestelstatus',
  'TEXT_PAYPAL_MODULE_ORDER_STATUS_ACCEPTED_INFO' => 'Selecteer de bestelstatus.<br/><b>In de beschrijving mag het woord "betaald" niet voorkomen.',
  
  'TEXT_PAYPAL_MODULE_UPSTREAM_PRODUCT' => 'Financieringsbox bij het artikel',
  'TEXT_PAYPAL_MODULE_UPSTREAM_PRODUCT_INFO' => 'Moeten de details van de betaling in termijnen bij het artikel worden getoond?',

  'TEXT_PAYPAL_MODULE_UPSTREAM_CART' => 'Financieringsbox in winkelwagen',
  'TEXT_PAYPAL_MODULE_UPSTREAM_CART_INFO' => 'Moeten de details van de betaling in termijnen in het winkelwagentje worden weergegeven?',

  'TEXT_PAYPAL_MODULE_UPSTREAM_PAYMENT' => 'Financieringsbox in de kassa',
  'TEXT_PAYPAL_MODULE_UPSTREAM_PAYMENT_INFO' => 'Moeten de details van de betaling in termijnen worden weergegeven in de kassa?',
);


foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>