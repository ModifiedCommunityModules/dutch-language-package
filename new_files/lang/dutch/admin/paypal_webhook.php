<?php
/* -----------------------------------------------------------------------------------------
   $Id$

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


$lang_array = array(
  'TEXT_PAYPAL_WEBHOOK_HEADING_TITLE' => 'PayPal Webhooks',

  'TEXT_PAYPAL_WEBHOOK_STATUS_NOT_DEFINED' => 'ongeconfigureerd',
  'TEXT_PAYPAL_WEBHOOK_INFO' => '<ul><li>Er zijn geen Webhooks beschikbaar</li><li>Met Webhooks ontvangt u wijzigingen in de bestelstatus en betalingsupdates</li><li>Om gebruik te maken van Webhooks is het verplicht om een geldig SSL-certificaat te hebben.</li></ul>',
  'TEXT_PAYPAL_WEBHOOK_CREDENTIAL_INFO' => 'Er konden geen beschikbare Webhooks worden ontvangen van PayPal. Controleer de instellingen.',
  
  'TABLE_HEADING_URL' => 'URL',
  'TABLE_HEADING_WEBHOOK' => 'Webhook',
  'TABLE_HEADING_STATUS' => 'Status',
  'TABLE_HEADING_DESCRIPTION' => 'Beschrijving',
  
);


foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>