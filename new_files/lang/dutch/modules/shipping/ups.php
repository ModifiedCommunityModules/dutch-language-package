<?php
/* -----------------------------------------------------------------------------------------
   $Id: ups.php 11585 2019-03-21 11:50:23Z GTB $   

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(UPS.php,v 1.4 2003/02/18 04:28:00); www.oscommerce.com 
   (c) 2003	 nextcommerce (UPS.php,v 1.5 2003/08/13); www.nextcommerce.org
   (c) 2006 xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License 
   -----------------------------------------------------------------------------------------
   Third Party contributions:
   German Post (Deutsche Post WorldNet)
   Autor:	Copyright (C) 2002 - 2003 TheMedia, Dipl.-Ing Thomas Plänkers | http://www.themedia.at & http://www.oscommerce.at
   Changes for personal use: Copyright (C) 2004 Comm4All, Bernd Blazynski | http://www.comm4all.com & http://www.cheapshirt.de

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/


define('MODULE_SHIPPING_UPS_TEXT_TITLE', 'United Parcel Service Standard');
define('MODULE_SHIPPING_UPS_TEXT_DESCRIPTION', 'United Parcel Service Standard - Verzendmodule');
define('MODULE_SHIPPING_UPS_TEXT_WAY', 'Verzending naar');
define('MODULE_SHIPPING_UPS_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_UPS_TEXT_FREE', 'Vanaf EUR ' . ((defined('MODULE_SHIPPING_UPS_FREEAMOUNT')) ? MODULE_SHIPPING_UPS_FREEAMOUNT : '') . ' bestelwaarde versturen wij uw bestelling zonder verzendkosten!');
define('MODULE_SHIPPING_UPS_TEXT_LOW', 'Vanaf EUR ' . ((defined('MODULE_SHIPPING_UPS_FREEAMOUNT')) ? MODULE_SHIPPING_UPS_FREEAMOUNT : '') . ' bestelwaarde versturen wij uw bestelling tegen gereduceerde verzendkosten!');
define('MODULE_SHIPPING_UPS_INVALID_ZONE', 'Helaas is er geen verzending naar dit land mogelijk.');
define('MODULE_SHIPPING_UPS_UNDEFINED_RATE', 'Die Versandkosten können im Moment nicht errechnet werden.');

define('MODULE_SHIPPING_UPS_STATUS_TITLE' , 'UPS Standard');
define('MODULE_SHIPPING_UPS_STATUS_DESC' , 'Wilt u verzending via UPS Standard aanbieden?');
define('MODULE_SHIPPING_UPS_HANDLING_TITLE' , 'Supplement');
define('MODULE_SHIPPING_UPS_HANDLING_DESC' , 'Verwerkingstoeslag voor deze verzendmethode in euro\'s');
define('MODULE_SHIPPING_UPS_TAX_CLASS_TITLE' , 'Belastingtarief');
define('MODULE_SHIPPING_UPS_TAX_CLASS_DESC' , 'Selecteer het BTW-tarief voor deze verzendmethode.');
define('MODULE_SHIPPING_UPS_ZONE_TITLE' , 'Verzendingszone');
define('MODULE_SHIPPING_UPS_ZONE_DESC' , 'Als u een zone selecteert, wordt deze verzendmethode alleen in deze zone aangeboden.');
define('MODULE_SHIPPING_UPS_SORT_ORDER_TITLE' , 'Weergavevolgorde');
define('MODULE_SHIPPING_UPS_SORT_ORDER_DESC' , 'Het laagst wordt het eerst weergegeven.');
define('MODULE_SHIPPING_UPS_ALLOWED_TITLE' , 'Individuele verzendzones');
define('MODULE_SHIPPING_UPS_ALLOWED_DESC' , 'Geef <b>individueel</b> aan naar welke zones verzending mogelijk moet zijn, bijv: AT,DE.');
define('MODULE_SHIPPING_UPS_FREEAMOUNT_TITLE' , 'Vrij van verzendkosten in het binnenland');
define('MODULE_SHIPPING_UPS_FREEAMOUNT_DESC' , 'Minimum bestelwaarde voor gratis verzending binnen Duitsland en gereduceerde verzending naar het buitenland.');

define('MODULE_SHIPPING_UPS_COUNTRIES_1_TITLE' , 'Landen voor UPS-standaardzone 1');
define('MODULE_SHIPPING_UPS_COUNTRIES_1_DESC' , 'Door een komma gescheiden ISO-afkortingen van de landen voor zone 1 (voer WORLD in voor de rest van de wereld):');
define('MODULE_SHIPPING_UPS_COST_1_TITLE' , 'Tarieven voor UPS-standaardzone 1');
define('MODULE_SHIPPING_UPS_COST_1_DESC' , 'Verzendkosten op basis van gewicht binnen zone 1. voorbeeld: verzending tussen 0 en 4kg kost EUR 5,15 = 4:5.15,...');

define('MODULE_SHIPPING_UPS_COUNTRIES_2_TITLE' , 'Landen voor UPS-standaardzone 3');
define('MODULE_SHIPPING_UPS_COUNTRIES_2_DESC' , 'Door een komma gescheiden ISO-afkortingen van de landen voor zone 3 (voer WORLD in voor de rest van de wereld):');
define('MODULE_SHIPPING_UPS_COST_2_TITLE' , 'Tarieven voor UPS-standaardzone 3');
define('MODULE_SHIPPING_UPS_COST_2_DESC' , 'Verzendkosten op basis van gewicht binnen zone 3. voorbeeld: verzending tussen 0 en 4kg kost EUR 13,75 = 4:13,75,...');

define('MODULE_SHIPPING_UPS_COUNTRIES_3_TITLE' , 'Landen voor UPS-standaardzone 31');
define('MODULE_SHIPPING_UPS_COUNTRIES_3_DESC' , 'Door een komma gescheiden ISO-afkortingen van de landen voor zone 31 (voer WORLD in voor de rest van de wereld):');
define('MODULE_SHIPPING_UPS_COST_3_TITLE' , 'Tarieven voor UPS-standaardzone 31');
define('MODULE_SHIPPING_UPS_COST_3_DESC' , 'Verzendkosten op basis van gewicht binnen zone 31 Voorbeeld: Verzending tussen 0 en 4 kg kost EUR 23,50 = 4:23,50,...');

define('MODULE_SHIPPING_UPS_COUNTRIES_4_TITLE' , 'Landen voor UPS-standaardzone 4');
define('MODULE_SHIPPING_UPS_COUNTRIES_4_DESC' , 'Door een komma gescheiden ISO-afkortingen van de landen voor zone 4 (voer WORLD in voor de rest van de wereld):');
define('MODULE_SHIPPING_UPS_COST_4_TITLE' , 'Tarieven voor UPS-standaardzone 4');
define('MODULE_SHIPPING_UPS_COST_4_DESC' , 'Verzendkosten op basis van gewicht binnen zone 4. voorbeeld: verzending tussen 0 en 4kg kost EUR 25,40 = 4:25,40,...');

define('MODULE_SHIPPING_UPS_COUNTRIES_5_TITLE' , 'Landen voor UPS-standaardzone 41');
define('MODULE_SHIPPING_UPS_COUNTRIES_5_DESC' , 'Komma-gescheiden ISO-afkortingen van de staten voor zone 41 (voer WORLD in voor de rest van de wereld):');
define('MODULE_SHIPPING_UPS_COST_5_TITLE' , 'Tarieven voor UPS-standaardzone 41');
define('MODULE_SHIPPING_UPS_COST_5_DESC' , 'Verzendkosten op basis van gewicht binnen zone 41. voorbeeld: verzending tussen 0 en 4kg kost EUR 30,00 = 4:30,00,...');

define('MODULE_SHIPPING_UPS_COUNTRIES_6_TITLE' , 'Landen voor UPS-standaardzone 5');
define('MODULE_SHIPPING_UPS_COUNTRIES_6_DESC' , 'Door een komma gescheiden ISO-afkortingen van de staten voor zone 5 (voer WORLD in voor de rest van de wereld):');
define('MODULE_SHIPPING_UPS_COST_6_TITLE' , 'Tarife für UPS Standard Zone 5');
define('MODULE_SHIPPING_UPS_COST_6_DESC' , 'Verzendkosten op basis van gewicht binnen zone 5 Voorbeeld: Verzending tussen 0 en 4kg kost EUR 34,35 = 4:34,35,...');

define('MODULE_SHIPPING_UPS_COUNTRIES_7_TITLE' , 'Landen voor UPS-standaardzone 6');
define('MODULE_SHIPPING_UPS_COUNTRIES_7_DESC' , 'Door een komma gescheiden ISO-afkortingen van de landen voor zone 6 (voer WORLD in voor de rest van de wereld):');
define('MODULE_SHIPPING_UPS_COST_7_TITLE' , 'Tarieven voor UPS-standaardzone 6');
define('MODULE_SHIPPING_UPS_COST_7_DESC' , 'Verzendkosten op basis van gewicht binnen zone 6 Voorbeeld: Verzending tussen 0 en 4 kg kost EUR 37,10 = 4:37,10,...');
?>