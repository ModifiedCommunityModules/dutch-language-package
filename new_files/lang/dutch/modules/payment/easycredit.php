<?php
/* -----------------------------------------------------------------------------------------
   $Id: easycredit.php 12400 2019-11-08 13:28:49Z Tomcraft $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


$lang_array = array(
  'MODULE_PAYMENT_EASYCREDIT_TEXT_TITLE' => 'ratenkauf door easyCredit',
  'MODULE_PAYMENT_EASYCREDIT_TEXT_INFO' => '',
  'MODULE_PAYMENT_EASYCREDIT_TEXT_DESCRIPTION' => '',
  'MODULE_PAYMENT_EASYCREDIT_ALLOWED_TITLE' => 'Toegestane zones',
  'MODULE_PAYMENT_EASYCREDIT_ALLOWED_DESC' => 'Geef <b>individueel</b> aan welke zones voor deze module moeten worden toegestaan. (bijv. AT,DE (indien leeg, zijn alle zones toegestaan))',
  'MODULE_PAYMENT_EASYCREDIT_STATUS_TITLE' => 'Activeer de module',
  'MODULE_PAYMENT_EASYCREDIT_STATUS_DESC' => 'Wilt u betalingen met huurkoop via easyCredit accepteren?',
  'MODULE_PAYMENT_EASYCREDIT_SORT_ORDER_TITLE' => 'Weergavevolgorde',
  'MODULE_PAYMENT_EASYCREDIT_SORT_ORDER_DESC' => 'Weergavevolgorde. Het kleinste cijfer wordt als eerste weergegeven.',
  'MODULE_PAYMENT_EASYCREDIT_ZONE_TITLE' => 'Betalingszone',
  'MODULE_PAYMENT_EASYCREDIT_ZONE_DESC' => 'Als een zone is geselecteerd, is de betalingsmethode alleen geldig voor deze zone.',
  'MODULE_PAYMENT_EASYCREDIT_ORDER_STATUS_ID_TITLE' => 'Tijdelijke orderstatus',
  'MODULE_PAYMENT_EASYCREDIT_ORDER_STATUS_ID_DESC' => 'Voer de orderstatus in voor onbevestigde orders.',
  'MODULE_PAYMENT_EASYCREDIT_ORDER_STATUS_SUCCESS_ID_TITLE' => 'Succesvolle orderstatus',
  'MODULE_PAYMENT_EASYCREDIT_ORDER_STATUS_SUCCESS_ID_DESC' => 'Geef de orderstatus aan voor succesvolle orders.',
  'MODULE_PAYMENT_EASYCREDIT_SHOP_ID_TITLE' => 'Webshop ID',
  'MODULE_PAYMENT_EASYCREDIT_SHOP_ID_DESC' => 'U vindt uw Webshop-ID in de easyCredit retailer interface in de sub-item Shop Administration.',
  'MODULE_PAYMENT_EASYCREDIT_SHOP_TOKEN_TITLE' => 'API-wachtwoord',
  'MODULE_PAYMENT_EASYCREDIT_SHOP_TOKEN_DESC' => 'U definieert uw API-wachtwoord zelf in de easyCredit merchant interface in het subitem Shop Administration.',
  'MODULE_PAYMENT_EASYCREDIT_LOG_LEVEL_TITLE' => 'Logboekniveau',
  'MODULE_PAYMENT_EASYCREDIT_LOG_LEVEL_DESC' => 'Geef het logboekniveau op. Standaard: "fout"',

  'MODULE_PAYMENT_EASYCREDIT_TEXT_ERROR_HEADING' => 'Noot:',
  'MODULE_PAYMENT_EASYCREDIT_TEXT_ERROR_MESSAGE' => 'De betaling met ratenkauf door easyCredit werd geannuleerd.',
  'MODULE_PAYMENT_EASYCREDIT_TEXT_ERROR_CHECKBOX' => 'Accepteer a.u.b. de aanvullende noodzakelijke overeenkomsten voor huurkoop door easyCredit',
  'MODULE_PAYMENT_EASYCREDIT_TEXT_LEGAL' => 'Precontractuele informatie over aankopen op afbetaling vindt u hier',

  'TEXT_EASYCREDIT_TBAID' => 'Procesidentificatie',
  'TEXT_EASYCREDIT_RATING_PLAN' => 'Financiering uit %s in %s Inrichtingen met huurkoop door easyCredit',
  'TEXT_EASYCREDIT_RATING_PLAN_SHORT' => 'Financiering uit %s per maand',
  'TEXT_EASYCREDIT_RATING_PLAN_CALC' => 'meer informatie over de aankoop op afbetaling',
  'TEXT_EASYCREDIT_LEGAL' => 'Representatief voorbeeld volgens &sect; 6a PAngV',
  'TEXT_EASYCREDIT_NOMINAL_RATE' => 'Debetrentevoet p.a. vast voor de gehele looptijd',
  'TEXT_EASYCREDIT_EFFECTIVE_RATE' => 'jaarlijks percentage',
  'TEXT_EASYCREDIT_TOTAL_COST' => 'Totaal bedrag',
  'TEXT_EASYCREDIT_TOTAL_NETTO' => 'Netto leenbedrag',
  'TEXT_EASYCREDIT_TOTAL_INTEREST' => 'Rentebedrag',
  'TEXT_EASYCREDIT_MONTHLY_PAYMENT' => 'maandelijkse termijnen ten belope van',
  'TEXT_EASYCREDIT_LAST_PAYMENT' => 'slottermijn',  
);


foreach ($lang_array as $key => $val) {
  defined($key) or define($key, $val);
}
?>