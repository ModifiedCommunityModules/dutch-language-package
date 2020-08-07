<?php
/* -----------------------------------------------------------------------------------------
   $Id: chp.php 5123 2013-07-18 11:49:11Z Tomcraft $   

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(chp.php,v 1.01 2003/02/18 03:30:00); www.oscommerce.com 
   (c) 2003  nextcommerce (chp.php,v 1.4 2003/08/1); www.nextcommerce.org
   (c) 2006 xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License 
   -----------------------------------------------------------------------------------------
   Third Party contributions:
   swiss_post_1.02         Autor:   Copyright (C) 2002 - 2003 TheMedia, Dipl.-Ing Thomas Plänkers | http://www.themedia.at & http://www.oscommerce.at

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/


define('MODULE_SHIPPING_CHP_TEXT_TITLE', 'De Zwitserse Post');
define('MODULE_SHIPPING_CHP_TEXT_DESCRIPTION', 'De Zwitserse Post');
define('MODULE_SHIPPING_CHP_TEXT_WAY', 'Verzending naar');
define('MODULE_SHIPPING_CHP_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_CHP_INVALID_ZONE', 'Helaas is het niet mogelijk om naar dit land te verzenden...');
define('MODULE_SHIPPING_CHP_UNDEFINED_RATE', 'Expeditiekosten kunnen momenteel niet worden berekend.');

define('MODULE_SHIPPING_CHP_STATUS_TITLE' , 'De Zwitserse Post');
define('MODULE_SHIPPING_CHP_STATUS_DESC' , 'Wilt u verzending met De Zwitserse Post aanbieden?');
define('MODULE_SHIPPING_CHP_HANDLING_TITLE' , 'Behandelingsvergoeding');
define('MODULE_SHIPPING_CHP_HANDLING_DESC' , 'Behandelingsvergoeding in CHF');
define('MODULE_SHIPPING_CHP_TAX_CLASS_TITLE' , 'Belasting');
define('MODULE_SHIPPING_CHP_TAX_CLASS_DESC' , 'Kies het belastingtarief voor de scheepvaart.');
define('MODULE_SHIPPING_CHP_ZONE_TITLE' , 'Verzendingszone');
define('MODULE_SHIPPING_CHP_ZONE_DESC' , 'Als u een zone kiest worden alleen deze verzendzones gebruikt.');
define('MODULE_SHIPPING_CHP_SORT_ORDER_TITLE' , 'Weergavevolgorde');
define('MODULE_SHIPPING_CHP_SORT_ORDER_DESC' , 'De onderste is als eerste te zien.');
define('MODULE_SHIPPING_CHP_ALLOWED_TITLE' , 'Individuele verzendzones');
define('MODULE_SHIPPING_CHP_ALLOWED_DESC' , 'Voer a.u.b. de zones <b>afzonderlijk</b> in die deze modul moeten mogen gebruiken (bijv. AT,DE (laat leeg als u alle zones wilt toestaan))');

define('MODULE_SHIPPING_CHP_COUNTRIES_1_TITLE' , 'Zone 0 Landen');
define('MODULE_SHIPPING_CHP_COUNTRIES_1_DESC' , 'Binnenzone');
define('MODULE_SHIPPING_CHP_COST_ECO_1_TITLE' , 'Zone 0 Tabel voor verzending tot 30 kg ECO');
define('MODULE_SHIPPING_CHP_COST_ECO_1_DESC' , 'Scheepvaarttabel voor Binnenvaartzone, gebaseerd op <b>\'ECO\'</b> tot 30 kg scheepsgewicht.');
define('MODULE_SHIPPING_CHP_COST_PRI_1_TITLE' , 'Zone 0 Tabel voor verzending tot 30 kg PRI');
define('MODULE_SHIPPING_CHP_COST_PRI_1_DESC' , 'Scheepvaarttabel voor de binnenvaartzone, gebaseerd op <b>\'PRI\'</b> tot 30 kg scheepsgewicht.');

define('MODULE_SHIPPING_CHP_COUNTRIES_2_TITLE' , 'Zone 1 Landen');
define('MODULE_SHIPPING_CHP_COUNTRIES_2_DESC' , 'Kommagescheiden lijst van twee karakters ISO-landencodes die deel uitmaken van Zone 1 (Voer WERELD in voor de rest van de wereld).');
define('MODULE_SHIPPING_CHP_COST_ECO_2_TITLE' , 'Zone 1 Tabel voor verzending tot 30 kg ECO');
define('MODULE_SHIPPING_CHP_COST_ECO_2_DESC' , 'Verzendingstabel voor Zone 1, gebaseerd op <b>\'ECO\'</b> tot 30 kg Verzendgewicht.');
define('MODULE_SHIPPING_CHP_COST_PRI_2_TITLE' , 'Zone 1 Tabel voor verzending tot 30 kg PRI');
define('MODULE_SHIPPING_CHP_COST_PRI_2_DESC' , 'Verzendingstabel voor Zone 1, gebaseerd op <b>\'PRI\'</b> tot 30 kg Verzendgewicht.');
define('MODULE_SHIPPING_CHP_COST_URG_2_TITLE' , 'Zone 1 Tabel voor verzending tot 30 kg URG');
define('MODULE_SHIPPING_CHP_COST_URG_2_DESC' , 'Verzendingstabel voor Zone 1, gebaseerd op <b>\'URG\'</b> tot 30 kg Verzendgewicht.');

define('MODULE_SHIPPING_CHP_COUNTRIES_3_TITLE' , 'Zone 2 Landen');
define('MODULE_SHIPPING_CHP_COUNTRIES_3_DESC' , 'Kommagescheiden lijst van twee karakters ISO-landencodes die deel uitmaken van Zone 2 (Voer WERELD in voor de rest van de wereld).');
define('MODULE_SHIPPING_CHP_COST_ECO_3_TITLE' , 'Zone 2 Tabel voor verzending tot 30 kg ECO');
define('MODULE_SHIPPING_CHP_COST_ECO_3_DESC' , 'Verzendingstabel voor Zone 2, gebaseerd op <b>\'ECO\'</b> tot 30 kg Verzendgewicht.');
define('MODULE_SHIPPING_CHP_COST_PRI_3_TITLE' , 'Zone 2 Tabel voor verzending tot 30 kg PRI');
define('MODULE_SHIPPING_CHP_COST_PRI_3_DESC' , 'Verzendingstabel voor Zone 2, gebaseerd op <b>\'PRI\'</b> tot 30 kg Verzendgewicht.');
define('MODULE_SHIPPING_CHP_COST_URG_3_TITLE' , 'Zone 2 Tabel voor verzending tot 30 kg URG');
define('MODULE_SHIPPING_CHP_COST_URG_3_DESC' , 'Verzendingstabel voor Zone 2, gebaseerd op <b>\'URG\'</b> tot 30 kg Verzendgewicht.');

define('MODULE_SHIPPING_CHP_COUNTRIES_4_TITLE' , 'Zone 3 Landen');
define('MODULE_SHIPPING_CHP_COUNTRIES_4_DESC' , 'Kommagescheiden lijst van twee karakters ISO-landencodes die deel uitmaken van Zone 3 (Voer WERELD in voor de rest van de wereld).');
define('MODULE_SHIPPING_CHP_COST_ECO_4_TITLE' , 'Zone 3 Tabel voor verzending tot 30 kg ECO');
define('MODULE_SHIPPING_CHP_COST_ECO_4_DESC' , 'Verzendingstabel voor Zone 3, gebaseerd op <b>\'ECO\'</b> tot 30 kg Verzendgewicht.');
define('MODULE_SHIPPING_CHP_COST_PRI_4_TITLE' , 'Zone 3 Tabel voor verzending tot 30 kg PRI');
define('MODULE_SHIPPING_CHP_COST_PRI_4_DESC' , 'Verzendingstabel voor Zone 3, gebaseerd op <b>\'PRI\'</b> tot 30 kg Verzendgewicht.');
define('MODULE_SHIPPING_CHP_COST_URG_4_TITLE' , 'Zone 3 Tabel voor verzending tot 30 kg URG');
define('MODULE_SHIPPING_CHP_COST_URG_4_DESC' , 'Verzendingstabel voor Zone 3, gebaseerd op <b>\'URG\'</b> tot 30 kg Verzendgewicht.');

define('MODULE_SHIPPING_CHP_COUNTRIES_5_TITLE' , 'Zone 4 Landen');
define('MODULE_SHIPPING_CHP_COUNTRIES_5_DESC' , 'Kommagescheiden lijst van twee karakters ISO-landencodes die deel uitmaken van Zone 4 (Voer WERELD in voor de rest van de wereld).');
define('MODULE_SHIPPING_CHP_COST_ECO_5_TITLE' , 'Zone 4 Tabel voor verzending tot 30 kg ECO');
define('MODULE_SHIPPING_CHP_COST_ECO_5_DESC' , 'Verzendtabel voor Zone 4, gebaseerd op <b>\'ECO\'</b> tot 30 kg Verzendgewicht.');
define('MODULE_SHIPPING_CHP_COST_PRI_5_TITLE' , 'Zone 4 Tabel voor verzending tot 30 kg PRI');
define('MODULE_SHIPPING_CHP_COST_PRI_5_DESC' , 'Zone 4 tabel voor verzending tot 30 kg PRIShipping tabel voor zone 4, gebaseerd op <b>\'PRI\'</b> tot 30 kg verzendingsgewicht.');
define('MODULE_SHIPPING_CHP_COST_URG_5_TITLE' , 'Zone 4 Tabel voor verzending tot 30 kg URG');
define('MODULE_SHIPPING_CHP_COST_URG_5_DESC' , 'Verzendingstabel voor Zone 4, gebaseerd op <b>\'URG\'</b> tot 30 kg Verzendgewicht.');

define('MODULE_SHIPPING_CHP_COUNTRIES_6_TITLE' , 'Zone 4 Landen');
define('MODULE_SHIPPING_CHP_COUNTRIES_6_DESC' , 'Kommagescheiden lijst van twee karakters ISO-landencodes die deel uitmaken van Zone 4 (Voer WERELD in voor de rest van de wereld).');
define('MODULE_SHIPPING_CHP_COST_ECO_6_TITLE' , 'Zone 4 Tabel voor verzending tot 30 kg ECO');
define('MODULE_SHIPPING_CHP_COST_ECO_6_DESC' , 'Verzendtabel voor Zone 4, gebaseerd op <b>\'ECO\'</b> tot 30 kg Verzendgewicht.');
define('MODULE_SHIPPING_CHP_COST_PRI_6_TITLE' , 'Zone 4 Tabel voor verzending tot 30 kg PRI');
define('MODULE_SHIPPING_CHP_COST_PRI_6_DESC' , 'Verzendingstabel voor Zone 4, gebaseerd op <b>\'PRI\'</b> tot 30 kg Verzendgewicht.');
define('MODULE_SHIPPING_CHP_COST_URG_6_TITLE' , 'Zone 4 Tabel voor verzending tot 30 kg URG');
define('MODULE_SHIPPING_CHP_COST_URG_6_DESC' , 'Verzendingstabel voor Zone 4, gebaseerd op <b>\'URG\'</b> tot 30 kg Verzendgewicht.');

define('MODULE_SHIPPING_CHP_COUNTRIES_7_TITLE' , 'Zone 5 Landen');
define('MODULE_SHIPPING_CHP_COUNTRIES_7_DESC' , 'Kommagescheiden lijst van twee karakters ISO-landencodes die deel uitmaken van Zone 5 (Voer WERELD in voor de rest van de wereld).');
define('MODULE_SHIPPING_CHP_COST_ECO_7_TITLE' , 'Zone 5 Tabel voor verzending tot 30 kg ECO');
define('MODULE_SHIPPING_CHP_COST_ECO_7_DESC' , 'Verzendingstabel voor Zone 5, gebaseerd op <b>\'ECO\'</b> tot 30 kg Verzendgewicht.');
define('MODULE_SHIPPING_CHP_COST_PRI_7_TITLE' , 'Zone 5 Tabel voor verzending tot 30 kg PRI');
define('MODULE_SHIPPING_CHP_COST_PRI_7_DESC' , 'Verzendingstabel voor Zone 5, gebaseerd op <b>\'PRI\'</b> tot 30 kg Verzendgewicht.');
define('MODULE_SHIPPING_CHP_COST_URG_7_TITLE' , 'Zone 5 Tabel voor verzending tot 30 kg URG');
define('MODULE_SHIPPING_CHP_COST_URG_7_DESC' , 'Verzendingstabel voor Zone 5, gebaseerd op <b>\'URG\'</b> tot 30 kg Verzendgewicht.');
?>