<?php
/* -----------------------------------------------------------------------------------------
   $Id$

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

if (defined('_VALID_XTC')) {
  define('MODULE_SHIPCLOUD_TEXT_TITLE', 'shipcloud - de nieuwe generatie van pakketvervoer');
  define('MODULE_SHIPCLOUD_TEXT_DESCRIPTION', 'Gemakshalve afdrukken van pakketetiketten vanuit de winkel.');
  define('MODULE_SHIPCLOUD_STATUS_TITLE', 'Status');
  define('MODULE_SHIPCLOUD_STATUS_DESC', 'Activeer de module');
  define('MODULE_SHIPCLOUD_API_TITLE', '<hr noshade>API');
  define('MODULE_SHIPCLOUD_API_DESC', 'API Key von shipcloud');
  define('MODULE_SHIPCLOUD_PARCEL_TITLE', '<hr noshade>Verpakkingsgroottes');
  define('MODULE_SHIPCLOUD_PARCEL_DESC', 'Gelieve de verpakkingsgroottes in cm als volgt in te voeren: Lengte, breedte, hoogte;<br/> Meerdere perceelafmetingen kunnen gescheiden door puntkomma (;) worden ingevoerd, bijvoorbeeld: 20,40,30;15,20,20;');
  define('MODULE_SHIPCLOUD_COMPANY_TITLE', '<hr noshade>Klantgegevens<br/>');
  define('MODULE_SHIPCLOUD_COMPANY_DESC', 'Bedrijf:');
  define('MODULE_SHIPCLOUD_FIRSTNAME_TITLE', '');
  define('MODULE_SHIPCLOUD_FIRSTNAME_DESC', 'Voornaam:');
  define('MODULE_SHIPCLOUD_LASTNAME_TITLE', '');
  define('MODULE_SHIPCLOUD_LASTNAME_DESC', 'Achternaam:');
  define('MODULE_SHIPCLOUD_ADDRESS_TITLE', '');
  define('MODULE_SHIPCLOUD_ADDRESS_DESC', 'Adres:');
  define('MODULE_SHIPCLOUD_POSTCODE_TITLE', '');
  define('MODULE_SHIPCLOUD_POSTCODE_DESC', 'POSTCODE:');
  define('MODULE_SHIPCLOUD_CITY_TITLE', '');
  define('MODULE_SHIPCLOUD_CITY_DESC', 'Stad:');
  define('MODULE_SHIPCLOUD_TELEPHONE_TITLE', '');
  define('MODULE_SHIPCLOUD_TELEPHONE_DESC', 'Telefoon:');
  define('MODULE_SHIPCLOUD_ACCOUNT_IBAN_TITLE', '');
  define('MODULE_SHIPCLOUD_ACCOUNT_IBAN_DESC', 'IBAN:');
  define('MODULE_SHIPCLOUD_ACCOUNT_BIC_TITLE', '');
  define('MODULE_SHIPCLOUD_ACCOUNT_BIC_DESC', 'BIC:');
  define('MODULE_SHIPCLOUD_BANK_NAME_TITLE', '<hr noshade>Bankgegevens<br/>');
  define('MODULE_SHIPCLOUD_BANK_NAME_DESC', 'Bank:');
  define('MODULE_SHIPCLOUD_BANK_HOLDER_TITLE', '');
  define('MODULE_SHIPCLOUD_BANK_HOLDER_DESC', 'Rekeninghouder:');
  define('MODULE_SHIPCLOUD_LOG_TITLE', '<hr noshade>Logboek');
  define('MODULE_SHIPCLOUD_LOG_DESC', 'het logbestand wordt opgeslagen in de map /logboek');
  define('MODULE_SHIPCLOUD_EMAIL_TITLE', '<hr noshade>Kennisgeving per e-mail');
  define('MODULE_SHIPCLOUD_EMAIL_DESC', 'Moet de klant per e-mail op de hoogte worden gesteld?');
  define('MODULE_SHIPCLOUD_EMAIL_TYPE_TITLE', '<hr noshade>Kennisgeving');
  define('MODULE_SHIPCLOUD_EMAIL_TYPE_DESC', 'Indien de klant door de shop of door de shipcloud wordt verwittigd? <br>>Aanwijzing:</b>Om door de shop te worden verwittigd, moet een webhook op deze URL worden geplaatst: '.xtc_catalog_href_link('callback/shipcloud/callback.php', '', 'SSL', false).' in de shipcloud.');
}

define('SHIPMENT.TRACKING.SHIPCLOUD_LABEL_CREATED', 'Pakketlabel aangemaakt bij shipcloud');
define('SHIPMENT.TRACKING.LABEL_CREATED', 'Pakketetiket aangemaakt');
define('SHIPMENT.TRACKING.PICKED_UP', 'Pakket opgehaald door bezorger');
define('SHIPMENT.TRACKING.TRANSIT', 'Pakket is onderweg');
define('SHIPMENT.TRACKING.OUT_FOR_DELIVERY', 'Het pakket wordt geleverd');
define('SHIPMENT.TRACKING.DELIVERED', 'geleverd pakket');
define('SHIPMENT.TRACKING.AWAITS_PICKUP_BY_RECEIVER', 'Wachten op ophaling door klanten');
define('SHIPMENT.TRACKING.CANCELED', 'Pakketlabel wasl&uuml;l&uuml;cht');
define('SHIPMENT.TRACKING.DELAYED', 'Levering vertraagd');
define('SHIPMENT.TRACKING.EXCEPTION', 'Er is een probleem vastgesteld');
define('SHIPMENT.TRACKING.NOT_DELIVERED', 'onbestelbaar');
define('SHIPMENT.TRACKING.NOTIFICATION', 'Intern bericht: het volgen van gebeurtenissen binnen de zending vraagt om meer complexe informatie.');
define('SHIPMENT.TRACKING.UNKNOWN', 'status onbekend');
?>