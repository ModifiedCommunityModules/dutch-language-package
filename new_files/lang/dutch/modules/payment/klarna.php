<?php
/* -----------------------------------------------------------------------------------------
   $Id: klarna.php 13152 2021-01-12 11:53:34Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

$lang_array = array(
  'MODULE_PAYMENT_'.$klarna_code.'_TEXT_TITLE' => '',
  'MODULE_PAYMENT_'.$klarna_code.'_TEXT_DESCRIPTION' => 'Voordat u de betaalmethoden van Klarna Payments kunt instellen, moet u een account voor webwinkeliers bij Klarna openen. U ontvangt dan informatie en toegangsgegevens die u nodig hebt om uw account in te stellen. Als u al een klantnummer van Klarna hebt, maar het is niet in het formaat Kxxxxxx, stuur dan een e-mail naar <a href="mailto:vertrieb@klarna.com">vertrieb@klarna.com</a>.<br /><br />
    <img src="../lang/german/admin/images/icon.gif" border="0" />
    <a href="https://www.klarna.com/de/verkaeufer/" target="_blank" style="text-decoration: underline; font-weight: bold;">Maak hier een Klarna-account aan.</a>
    <img src="images/icon_popup.gif" border="0" />',
  'MODULE_PAYMENT_'.$klarna_code.'_TEXT_INFO' => '',
  'MODULE_PAYMENT_'.$klarna_code.'_ALLOWED_TITLE' => 'Toegestane zones',
  'MODULE_PAYMENT_'.$klarna_code.'_ALLOWED_DESC' => 'Specificeer <b>individueel</b> de zones die voor deze module moeten worden toegestaan. (b.v. AT,DE (indien leeg, zijn alle zones toegestaan)).',
  'MODULE_PAYMENT_'.$klarna_code.'_STATUS_TITLE' => 'Module activeren',
  'MODULE_PAYMENT_'.$klarna_code.'_STATUS_DESC' => 'Wilt u betalingen aanvaarden met deze module?',
  'MODULE_PAYMENT_'.$klarna_code.'_SORT_ORDER_TITLE' => 'Volgorde weergeven',
  'MODULE_PAYMENT_'.$klarna_code.'_SORT_ORDER_DESC' => 'Toon volgorde. Kleinste cijfer wordt eerst weergegeven',
  'MODULE_PAYMENT_'.$klarna_code.'_ZONE_TITLE' => 'Betalingszone',
  'MODULE_PAYMENT_'.$klarna_code.'_ZONE_DESC' => 'Wanneer een zone is geselecteerd, geldt de betalingsmethode alleen voor die zone.',
  'MODULE_PAYMENT_'.$klarna_code.'_ORDER_STATUS_ID_TITLE' => 'Bestelstatus instellen',
  'MODULE_PAYMENT_'.$klarna_code.'_ORDER_STATUS_ID_DESC' => 'Zet orders die met deze module zijn gemaakt op deze status.',
  'MODULE_PAYMENT_'.$klarna_code.'_CAPTURE_TITLE' => 'Activeer',
  'MODULE_PAYMENT_'.$klarna_code.'_CAPTURE_DESC' => 'Moet de bestelling automatisch worden geactiveerd?',

  'MODULE_PAYMENT_'.$klarna_code.'_TEXT_ERROR_HEADING' => 'Klarna',
  'MODULE_PAYMENT_'.$klarna_code.'_TEXT_ERROR_MESSAGE' => 'De betaling werd geannuleerd.',

  'MODULE_PAYMENT_'.$klarna_code.'_TEXT_VERSION' => '<b>Module-versie</b><br/>',

  'MODULE_PAYMENT_KLARNA_MERCHANT_ID_TITLE' => 'Gebruikersnaam',
  'MODULE_PAYMENT_KLARNA_MERCHANT_ID_DESC' => 'Klarna API gebruikersnaam',
  'MODULE_PAYMENT_KLARNA_SHARED_SECRET_TITLE' => 'Wachtwoord',
  'MODULE_PAYMENT_KLARNA_SHARED_SECRET_DESC' => 'Klarna API Wachtwoord',
  'MODULE_PAYMENT_KLARNA_MODE_TITLE' => 'Mode',
  'MODULE_PAYMENT_KLARNA_MODE_DESC' => 'Klarna Fashion',
);
