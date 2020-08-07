<?php
/* -----------------------------------------------------------------------------------------
   $Id: paypal_profile.php 12464 2019-12-05 10:48:17Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


$lang_array = array(
  'TEXT_PAYPAL_PROFILE_HEADING_TITLE' => 'PayPal Profiel',

  'TEXT_PAYPAL_PROFILE_STATUS' => 'Standaard:',
  'TEXT_PAYPAL_PROFILE_STATUS_INFO' => 'Moet dit profiel standaard worden gebruikt? <br/><br/><b>Aanwijzing:</b> Voor elke module kan een individueel profiel worden toegewezen, afhankelijk van de taal.',
  
  'TEXT_PAYPAL_PROFILE_NAME' => 'Interne naam:',
  'TEXT_PAYPAL_PROFILE_NAME_INFO' => '',
  
  'TEXT_PAYPAL_PROFILE_BRAND' => 'Weergegeven naam:',
  'TEXT_PAYPAL_PROFILE_BRAND_INFO' => 'Deze naam wordt aan de klant getoond bij PayPal (max. 127 tekens)',
  
  'TEXT_PAYPAL_PROFILE_LOGO' => 'Logo URL:',
  'TEXT_PAYPAL_PROFILE_LOGO_INFO' => 'Volledige URL (max. 127 tekens)<br/><br/><b>Aanwijzing:</b> Om het logo te kunnen weergeven, moet de URL worden opgegeven als https://.',
  
  'TEXT_PAYPAL_PROFILE_LOCALE' => 'Taal:',
  'TEXT_PAYPAL_PROFILE_LOCALE_INFO' => '',
  
  'TEXT_PAYPAL_PROFILE_PAGE' => 'Pagina:',
  'TEXT_PAYPAL_PROFILE_PAGE_INFO' => '<b>Standaard:</b>Aanmelden<br/><br/>Voor facturering is betaling zonder klantaccount voorgeselecteerd.',

  'TEXT_PAYPAL_PROFILE_ADDRESS' => 'Overschrijf het adres:',
  'TEXT_PAYPAL_PROFILE_ADDRESS_INFO' => 'Moet het verzendadres worden overgenomen door PayPal?',
  
  'TEXT_PAYPAL_PROFILE_INFO' => 'Er is geen PayPal-profiel beschikbaar.<br/><br/>Met een PayPal-profiel kunt u:<ul><li> de naam wijzigen die wordt weergegeven bij PayPal</li><li>logo de PayPal-pagina </li><li> instellen op de bestemmingspagina bij PayPal</li></ul>.',
);


foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>