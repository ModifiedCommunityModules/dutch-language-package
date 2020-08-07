<?php
/* -----------------------------------------------------------------------------------------
   $Id: chronopost.php 5121 2013-07-18 11:38:19Z Tomcraft $   

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(chronopost.php,v 1.0 2002/04/01 07:07:45); www.oscommerce.com 
   (c) 2003	 nextcommerce (chronopost.php,v 1.4 2003/08/13); www.nextcommerce.org
   (c) 2006 xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License 
   -----------------------------------------------------------------------------------------
   Third Party contributions: 
   chronopost-1.0.1       	Autor:	devteam@e-network.fr | www.oscommerce-fr.info

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/
   


define('MODULE_SHIPPING_CHRONOPOST_TEXT_TITLE', 'Chronopost Zone Tarieven');
define('MODULE_SHIPPING_CHRONOPOST_TEXT_DESCRIPTION', 'Chronopost Zone Gebaseerde Tarieven');
define('MODULE_SHIPPING_CHRONOPOST_TEXT_WAY', 'Verzending naar');
define('MODULE_SHIPPING_CHRONOPOST_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_CHRONOPOST_INVALID_ZONE', 'Chronopost Geen verzending beschikbaar naar het geselecteerde land');
define('MODULE_SHIPPING_CHRONOPOST_UNDEFINED_RATE', 'Chronopost Het verzendtarief kan op dit moment niet worden bepaald.');

define('MODULE_SHIPPING_CHRONOPOST_STATUS_TITLE' , 'Acteur Chronopost');
define('MODULE_SHIPPING_CHRONOPOST_STATUS_DESC' , 'Wilt u de verzending via Chronopost activeren? (True, False)');
define('MODULE_SHIPPING_CHRONOPOST_HANDLING_TITLE' , 'Tarieven');
define('MODULE_SHIPPING_CHRONOPOST_HANDLING_DESC' , 'Prijzen voor verzending via chronopost');
define('MODULE_SHIPPING_CHRONOPOST_TAX_CLASS_TITLE' , 'Belastingklasse');
define('MODULE_SHIPPING_CHRONOPOST_TAX_CLASS_DESC' , 'Gebruik de volgende belastingklasse op de verzendkosten.');
define('MODULE_SHIPPING_CHRONOPOST_ZONE_TITLE' , 'Verzendingszone');
define('MODULE_SHIPPING_CHRONOPOST_ZONE_DESC' , 'Als een zone is geselecteerd, schakel dan alleen deze verzendmethode in voor die zone.');
define('MODULE_SHIPPING_CHRONOPOST_SORT_ORDER_TITLE' , 'Sorteeropdracht');
define('MODULE_SHIPPING_CHRONOPOST_SORT_ORDER_DESC' , 'Sorteervolgorde van de weergave.');
define('MODULE_SHIPPING_CHRONOPOST_ALLOWED_TITLE' , 'Individuele verzendzones');
define('MODULE_SHIPPING_CHRONOPOST_ALLOWED_DESC' , 'Voer <b>individueel</b> de zones in waarnaar verzending mogelijk moet zijn. bijv. AT,DE');

define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_1_TITLE' , 'Chronopost Zone 1 (land)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_1_DESC' , 'Voeg een komma in tussen 2 ISO-codes van landen die deel uitmaken van dezelfde zone (WERELD voor de rest van de wereld.).');
define('MODULE_SHIPPING_CHRONOPOST_COST_1_TITLE' , 'Chronopost Zone 1 (gewicht: tarra)');
define('MODULE_SHIPPING_CHRONOPOST_COST_1_DESC' , 'Chronopost tarieven voor Zone 1 bestemmingen. Principe: een gewichtsbereik (gram) gevolgd door het tarief (euro\'s inclusief belasting). Voorbeeld: 0-2000:28,71,2000-5000:34,38,... Voor pakketten met een gewicht van minder dan 2 kg wordt EUR 28,71 inclusief BTW in rekening gebracht voor bestemmingen in');

define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_2_TITLE' , 'Chronopost Zone 2 (land)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_2_DESC' , 'Voeg een komma in tussen 2 ISO-codes van landen die deel uitmaken van dezelfde zone (WERELD voor de rest van de wereld.).');
define('MODULE_SHIPPING_CHRONOPOST_COST_2_TITLE' , 'Chronopost Zone 2 (gewicht: tarra)');
define('MODULE_SHIPPING_CHRONOPOST_COST_2_DESC' , 'Chronopost tarieven voor Zone 2 bestemmingen. Principe: een gewichtsbereik (gram) gevolgd door het tarief (euro\'s incl. BTW). Voorbeeld: 0-2000:28,71,2000-5000:34,38,... Voor pakketten met een gewicht van minder dan 2 kg wordt 28,71 EUR inclusief BTW in rekening gebracht voor bestemmingen van');

define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_3_TITLE' , '');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_3_DESC' , 'Voeg een komma in tussen 2 ISO-codes van landen die deel uitmaken van dezelfde zone (WERELD voor de rest van de wereld.).');
define('MODULE_SHIPPING_CHRONOPOST_COST_3_TITLE' , 'Chronopost Zone 3 (gewicht: tarieven)');
define('MODULE_SHIPPING_CHRONOPOST_COST_3_DESC' , 'Chronopost tarieven voor Zone 3 bestemmingen. Principe: een gewichtsbereik (gram) gevolgd door het tarief (euro\'s incl. BTW). Voorbeeld: 0-2000:28,71,2000-5000:34,38,... Voor pakketten met een gewicht van minder dan 2 kg wordt 28,71 euro in rekening gebracht, inclusief de belasting voor bestemmingen in');

define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_4_TITLE' , 'Chronopost Zone 4 (landen)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_4_DESC' , 'Voeg een komma in tussen 2 ISO-landencodes die deel uitmaken van dezelfde zone (WERELD voor de rest van de wereld.).');
define('MODULE_SHIPPING_CHRONOPOST_COST_4_TITLE' , 'Chronopost Zone 4 (gewicht: tarieven)');
define('MODULE_SHIPPING_CHRONOPOST_COST_4_DESC' , 'Chronopost tarieven voor Zone 4 bestemmingen. Principe: een gewichtsbereik (gram) gevolgd door het tarief (euro\'s incl. BTW). Voorbeeld: 0-2000:28,71,2000-5000:34,38,... Voor pakketten met een gewicht van minder dan 2 kg wordt EUR 28,71 inclusief BTW in rekening gebracht voor bestemmingen in');

define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_5_TITLE' , 'Chronopost Zone 5 (landen)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_5_DESC' , 'Voeg een komma in tussen 2 ISO-landencodes die deel uitmaken van dezelfde zone (WERELD voor de rest van de wereld.).');
define('MODULE_SHIPPING_CHRONOPOST_COST_5_TITLE' , 'Chronopost Zone 5 (gewicht: tarieven)');
define('MODULE_SHIPPING_CHRONOPOST_COST_5_DESC' , 'Chronopost tarieven voor Zone 5 bestemmingen. Principe: een gewichtsbereik (gram) gevolgd door het tarief (euro\'s incl. BTW). Voorbeeld: 0-2000:28,71,2000-5000:34,38,... Voor pakketten met een gewicht van minder dan 2 kg wordt EUR 28,71 inclusief BTW in rekening gebracht voor bestemmingen in');

define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_6_TITLE' , 'Chronopost Zone 6 (landen)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_6_DESC' , 'Voeg een komma in tussen 2 ISO-codes van landen die deel uitmaken van dezelfde zone (WERELD voor de rest van de wereld.).');
define('MODULE_SHIPPING_CHRONOPOST_COST_6_TITLE' , 'Chronopost Zone 6 (gewicht: tarieven)');
define('MODULE_SHIPPING_CHRONOPOST_COST_6_DESC' , 'Chronopost tarieven voor Zone 6 bestemmingen. Principe: een gewichtsbereik (gram) gevolgd door het tarief (euro\'s incl. BTW). Voorbeeld: 0-2000:28,71,2000-5000:34,38,... Voor pakketten met een gewicht van minder dan 2 kg wordt EUR 28,71 inclusief BTW in rekening gebracht voor bestemmingen in');

define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_7_TITLE' , 'Chronopost Zone 7 (landen)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_7_DESC' , 'Voeg een komma in tussen 2 ISO-landencodes die deel uitmaken van dezelfde zone (WERELD voor de rest van de wereld.).');
define('MODULE_SHIPPING_CHRONOPOST_COST_7_TITLE' , 'Chronopost Zone 7 (gewicht: tarieven)');
define('MODULE_SHIPPING_CHRONOPOST_COST_7_DESC' , 'Chronopost tarieven voor Zone 7 bestemmingen. Principe: een gewichtsbereik (gram) gevolgd door het tarief (euro\'s inclusief belasting). Voorbeeld: 0-2000:28,71,2000-5000:34,38,... Voor pakketten met een gewicht van minder dan 2 kg wordt 28,71 euro in rekening gebracht, inclusief de belasting voor bestemmingen in');

define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_8_TITLE' , 'Chronopost Zone 8 (landen)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_8_DESC' , 'Voeg een komma in tussen 2 ISO-codes van landen die deel uitmaken van dezelfde zone (WERELD voor de rest van de wereld.).');
define('MODULE_SHIPPING_CHRONOPOST_COST_8_TITLE' , 'Chronopost Zone 8 (gewicht: tarieven)');
define('MODULE_SHIPPING_CHRONOPOST_COST_8_DESC' , 'Chronopost tarieven voor Zone 8 bestemmingen. Principe: een gewichtsbereik (gram) gevolgd door het tarief (euro\'s incl. BTW). Voorbeeld: 0-2000:28,71,2000-5000:34,38,... Voor pakketten met een gewicht van minder dan 2 kg wordt 28,71 euro in rekening gebracht, inclusief de belasting voor bestemmingen in');

define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_9_TITLE' , 'Chronopost Zone 9 (landen)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_9_DESC' , 'Voeg een komma in tussen 2 ISO-landencodes die deel uitmaken van dezelfde zone (WERELD voor de rest van de wereld.).');
define('MODULE_SHIPPING_CHRONOPOST_COST_9_TITLE' , 'Chronopost Zone 9 (gewicht: tarieven)');
define('MODULE_SHIPPING_CHRONOPOST_COST_9_DESC' , 'Chronopost tarieven voor Zone 9 bestemmingen. Principe: een gewichtsbereik (gram) gevolgd door het tarief (euro\'s incl. BTW). Voorbeeld: 0-2000:28,71,2000-5000:34,38,... Voor pakketten met een gewicht van minder dan 2 kg wordt EUR 28,71 inclusief BTW in rekening gebracht voor bestemmingen in');

define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_10_TITLE' , 'Chronopost Zone 10 (landen)');
define('MODULE_SHIPPING_CHRONOPOST_COUNTRIES_10_DESC' , 'Voeg een komma in tussen 2 ISO-landencodes die deel uitmaken van dezelfde zone (WERELD voor de rest van de wereld.).');
define('MODULE_SHIPPING_CHRONOPOST_COST_10_TITLE' , 'Chronopost Zone 10 (gewicht: tarieven)');
define('MODULE_SHIPPING_CHRONOPOST_COST_10_DESC' , 'Chronopost tarieven voor Zone 10 bestemmingen. Principe: een gewichtsbereik (gram) gevolgd door het tarief (euro\'s inclusief belasting). Voorbeeld: 0-2000:28,71,2000-5000:34,38,... Voor pakketten met een gewicht van minder dan 2 kg wordt 28,71 euro in rekening gebracht, inclusief de belasting voor bestemmingen in');
?>