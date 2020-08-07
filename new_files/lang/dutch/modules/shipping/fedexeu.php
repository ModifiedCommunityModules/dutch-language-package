<?php
/* -----------------------------------------------------------------------------------------
   $Id: fedexeu.php 5123 2013-07-18 11:49:11Z Tomcraft $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce( fedexeu.php,v 1.01 2003/02/18 03:25:00); www.oscommerce.com
   (c) 2003	 nextcommerce (fedexeu.php,v 1.5 2003/08/1); www.nextcommerce.org
   (c) 2006 xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License
   -----------------------------------------------------------------------------------------
   Third Party contributions:
   fedex_europe_1.02        	Autor:	Copyright (C) 2002 - 2003 TheMedia, Dipl.-Ing Thomas Plänkers | http://www.themedia.at & http://www.oscommerce.at

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/



define('MODULE_SHIPPING_FEDEXEU_TEXT_TITLE', 'FedEx Express Europa');
define('MODULE_SHIPPING_FEDEXEU_TEXT_DESCRIPTION', 'FedEx Express Europa');
define('MODULE_SHIPPING_FEDEXEU_TEXT_WAY', 'Verzending naar');
define('MODULE_SHIPPING_FEDEXEU_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_FEDEXEU_INVALID_ZONE', 'Sorry, verzending naar dit land is niet mogelijk.');
define('MODULE_SHIPPING_FEDEXEU_UNDEFINED_RATE', 'De verzendkosten kunnen op dit moment niet worden berekend');

define('MODULE_SHIPPING_FEDEXEU_STATUS_TITLE' , 'FedEx Express Europe');
define('MODULE_SHIPPING_FEDEXEU_STATUS_DESC' , 'Wilt u verzending via FedEx Express Europe aanbieden?');
define('MODULE_SHIPPING_FEDEXEU_HANDLING_TITLE' , 'Administratiekosten');
define('MODULE_SHIPPING_FEDEXEU_HANDLING_DESC' , 'Verwerkingskosten voor deze verzendmethode in euro\'s');
define('MODULE_SHIPPING_FEDEXEU_TAX_CLASS_TITLE' , 'Belastingtarief');
define('MODULE_SHIPPING_FEDEXEU_TAX_CLASS_DESC' , 'Selecteer het BTW-tarief voor deze verzendmethode.');
define('MODULE_SHIPPING_FEDEXEU_ZONE_TITLE' , 'Verzendingszone');
define('MODULE_SHIPPING_FEDEXEU_ZONE_DESC' , 'Als u een zone selecteert, wordt deze verzendmethode alleen in deze zone aangeboden.');
define('MODULE_SHIPPING_FEDEXEU_SORT_ORDER_TITLE' , 'Weergavevolgorde');
define('MODULE_SHIPPING_FEDEXEU_SORT_ORDER_DESC' , 'Het laagst wordt het eerst weergegeven.');
define('MODULE_SHIPPING_FEDEXEU_ALLOWED_TITLE' , 'Individuele verzendzones');
define('MODULE_SHIPPING_FEDEXEU_ALLOWED_DESC' , 'Geben Sie <b>einzeln</b> die Zonen an, in welche ein Versand möglich sein soll. z.B. AT,DE');

define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_1_TITLE' , 'Europa zone 1 landen');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_1_DESC' , 'Kommagescheiden lijst van landen als twee karakters ISO-code Landencodes die deel uitmaken van zone 1 (voer WORLD in voor de rest van de wereld).');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_1_TITLE' , 'Tarieftabel voor zone 1 tot 2.50 kg PAK');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_1_DESC' , 'Tarieftabel voor zone 1, gebaseerd op <b>\'PAK\'</b> tot 2.50 kg verzendgewicht');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_1_TITLE' , 'Tarieftabel voor zone 1 tot 0.50 kg ENV');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_1_DESC' , 'Tarieftabel voor zone 1, gebaseerd op <b>\'ENV\'</b> tot 60 pagina\'s in DIN A4 formaat & 0.50 kg verzendgewicht');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_1_TITLE' , 'Tarieftabel voor zone 1 tot 10 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_1_DESC' , 'Tarieftabel voor zone 1, gebaseerd op <b>\'BOX\'</b> tot 10 kg verzendgewicht');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_1_TITLE' , 'Verhoog de toeslag tot 20 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_1_DESC' , 'Verhoging van de toeslag per kg meer dan 0,50 kg in EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_1_TITLE' , 'Verhoog de toeslag tot 40 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_1_DESC' , 'Verhoging van de toeslag per kg meer dan 0,50 kg in EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_1_TITLE' , 'Verhoging van de toeslag tot 70 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_1_DESC' , 'Verhoging van de toeslag per kg meer dan 0,50 kg in EUR');

define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_2_TITLE' , 'Europa zone 2 landen');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_2_DESC' , 'Kommagescheiden lijst van landen als twee karakters ISO-code Landencodes die deel uitmaken van zone 2 (voer WORLD in voor de rest van de wereld).');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_2_TITLE' , 'Tarieftabel voor zone 2 tot 2.50 kg PAK');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_2_DESC' , 'Tarieftabel voor zone 2, gebaseerd op <b>\'PAK\'</b> tot 2.50 kg verzendingsgewicht');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_2_TITLE' , 'Tarieftabel voor zone 2 tot 0.50 kg ENV');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_2_DESC' , 'Tarieftabel voor zone 2, gebaseerd op <b>\'ENV\'</b> tot 60 pagina\'s in DIN A4 formaat & 0.50 kg verzendgewicht');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_2_TITLE' , 'Tarieftabel voor zone 2 tot 10 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_2_DESC' , 'Tarieftabel voor zone 2, gebaseerd op <b>\'BOX\'</b> tot 10 kg verzendgewicht');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_2_TITLE' , 'Verhoog de toeslag tot 20 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_2_DESC' , 'Verhoging van de toeslag per kg meer dan 0,50 kg in EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_2_TITLE' , 'Verhoog de toeslag tot 40 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_2_DESC' , 'Verhoging van de toeslag per kg meer dan 0,50 kg in EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_2_TITLE' , 'Verhoging van de toeslag tot 70 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_2_DESC' , 'Verhoging van de toeslag per kg meer dan 0,50 kg in EUR');

define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_3_TITLE' , 'Europa zone 3 landen');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_3_DESC' , 'Kommagescheiden lijst van landen als twee karakters ISO-code Landencodes die deel uitmaken van zone 3 (voer WORLD in voor de rest van de wereld).');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_3_TITLE' , 'Tarieftabel voor zone 3 tot 2.50 kg PAK');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_3_DESC' , 'Tarieftabel voor zone 3, gebaseerd op <b>\'PAK\'</b> tot 2.50 kg verzendingsgewicht');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_3_TITLE' , 'Tarieftabel voor zone 3 tot 0.50 kg ENV');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_3_DESC' , 'Tarieftabel voor zone 3, gebaseerd op <b>\'ENV\'</b> tot 60 pagina\'s in DIN A4 formaat & 0.50 kg verzendgewicht');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_3_TITLE' , 'Tarieftabel voor zone 3 tot 10 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_3_DESC' , 'Tarieftabel voor zone 3, gebaseerd op <b>\'BOX\'</b> tot 10 kg verzendgewicht');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_3_TITLE' , 'Verhoog de toeslag tot 20 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_3_DESC' , 'Verhoging van de toeslag per kg meer dan 0,50 kg in EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_3_TITLE' , 'Verhoog de toeslag tot 40 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_3_DESC' , 'Verhoging van de toeslag per kg meer dan 0,50 kg in EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_3_TITLE' , 'Verhoging van de toeslag tot 70 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_3_DESC' , 'Verhoging van de toeslag per kg meer dan 0,50 kg in EUR');

define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_4_TITLE' , 'Wereld Zone A Landen');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_4_DESC' , 'Kommagescheiden lijst van landen als twee karakters ISO-code Landencodes die deel uitmaken van zone A (voer WORLD in voor de rest van de wereld).');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_4_TITLE' , 'Tarieftabel voor zone A tot 2.50 kg PAK');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_4_DESC' , 'Tarieftabel voor zone A, gebaseerd op <b>\'PAK\'</b> tot 2.50 kg verzendgewicht.');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_4_TITLE' , 'Tarieftabel voor zone A tot 0.50 kg ENV');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_4_DESC' , 'Tarieftabel voor zone A, gebaseerd op <b>\'ENV\'</b> tot 60 pagina\'s in DIN A4 formaat & 0.50 kg verzendgewicht');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_4_TITLE' , 'Tarieftabel voor zone A tot 10 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_4_DESC' , 'Tarieftabel voor zone A, gebaseerd op een <b>\'BOX\'</b> maximaal 10 kg zwaar transportgewicht.');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_4_TITLE' , 'Verhoog de toeslag tot 20 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_4_DESC' , 'Verhoging van de toeslag per kg meer dan 0,50 kg in EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_4_TITLE' , 'Verhoog de toeslag tot 40 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_4_DESC' , 'Verhoging van de toeslag per kg meer dan 0,50 kg in EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_4_TITLE' , 'Verhoog de toeslag tot 70 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_4_DESC' , 'Verhoging van de toeslag per kg meer dan 0,50 kg in EUR');

define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_5_TITLE' , 'Wereld Zone B Landen');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_5_DESC' , 'Kommagescheiden lijst van landen als twee karakters ISO-code Landencodes die deel uitmaken van zone B (voer WORLD in voor de rest van de wereld).');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_5_TITLE' , 'Tarieftabel voor zone B tot 2.50 kg PAK');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_5_DESC' , 'Tarieftabel voor zone B, gebaseerd op <b>\'PAK\'</b> tot 2,50 kg verzendgewicht.');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_5_TITLE' , 'Tarieftabel voor zone B tot 0,50 kg ENV');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_5_DESC' , 'Tarieftabel voor zone B, gebaseerd op <b>\'ENV\'</b> tot 60 pagina\'s in DIN A4 formaat & 0.50 kg verzendgewicht');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_5_TITLE' , 'Tarieftabel voor zone B tot 10 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_5_DESC' , 'Tarieftabel voor zone B, gebaseerd op <b>\'BOX\'</b> tot 10 kg verzendgewicht.');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_5_TITLE' , 'Verhoog de toeslag tot 20 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_5_DESC' , 'Verhoging van de toeslag per kg meer dan 0,50 kg in EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_5_TITLE' , 'Verhoog de toeslag tot 40 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_5_DESC' , 'Verhoging van de toeslag per kg meer dan 0,50 kg in EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_5_TITLE' , 'Verhoog de toeslag tot 70 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_5_DESC' , 'Verhoging van de toeslag per kg meer dan 0,50 kg in EUR');

define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_6_TITLE' , 'Wereld Zone C Landen');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_6_DESC' , 'Kommagescheiden lijst van landen als twee karakters ISO-code Landencodes die deel uitmaken van zone C (voer WORLD in voor de rest van de wereld).');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_6_TITLE' , 'Tarieftabel voor zone C tot 2,50 kg PAK');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_6_DESC' , 'Tarieftabel voor zone C, gebaseerd op <b>\'PAK\'</b> tot 2,50 kg verzendgewicht.');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_6_TITLE' , 'Tarieftabel voor zone C tot 0,50 kg ENV');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_6_DESC' , 'Tarieftabel voor zone C, gebaseerd op <b>\'ENV\'</b> tot 60 pagina\'s in DIN A4 formaat & 0.50 kg verzendgewicht');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_6_TITLE' , 'Tarieftabel voor zone C tot 10 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_6_DESC' , 'Tarieftabel voor zone C, gebaseerd op een <b>\'BOX\'</b> maximaal 10 kg zwaar transportgewicht.');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_6_TITLE' , 'Verhoog de toeslag tot 20 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_6_DESC' , 'Verhoging van de toeslag per kg meer dan 0,50 kg in EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_6_TITLE' , 'Verhoog de toeslag tot 40 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_6_DESC' , 'Verhoging van de toeslag per kg meer dan 0,50 kg in EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_6_TITLE' , 'Verhoog de toeslag tot 70 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_6_DESC' , 'Verhoging van de toeslag per kg meer dan 0,50 kg in EUR');

define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_7_TITLE' , 'Wereld Zone D Landen');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_7_DESC' , 'Kommagescheiden lijst van landen als twee karakters ISO-code Landencodes die deel uitmaken van zone D (voer WORLD in voor de rest van de wereld).');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_7_TITLE' , 'Tarieftabel voor zone D tot 2,50 kg PAK');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_7_DESC' , 'Tarieftabel voor zone D, gebaseerd op <b>\'PAK\'</b> tot 2.50 kg verzendgewicht.');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_7_TITLE' , 'Tarieftabel voor zone D tot 0.50 kg ENV');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_7_DESC' , 'Tarieftabel voor zone D, gebaseerd op <b>\'ENV\'</b> tot 60 pagina\'s in DIN A4 formaat & 0.50 kg verzendgewicht');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_7_TITLE' , 'Tarieftabel voor zone D tot 10 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_7_DESC' , 'Tarieftabel voor zone D, gebaseerd op een <b>\'BOX\'</b> maximaal 10 kg zwaar transportgewicht.');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_7_TITLE' , 'Verhoog de toeslag tot 20 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_7_DESC' , 'Verhoging van de toeslag per kg meer dan 0,50 kg in EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_7_TITLE' , 'Verhoog de toeslag tot 40 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_7_DESC' , 'Verhoging van de toeslag per kg meer dan 0,50 kg in EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_7_TITLE' , 'Verhoog de toeslag tot 70 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_7_DESC' , 'Verhoging van de toeslag per kg meer dan 0,50 kg in EUR');

define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_8_TITLE' , 'Wereld Zone E Landen');
define('MODULE_SHIPPING_FEDEXEU_COUNTRIES_8_DESC' , 'Kommagescheiden lijst van landen als twee karakters ISO-code Landencodes die deel uitmaken van zone E (voer WORLD in voor de rest van de wereld).');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_8_TITLE' , 'Tarieftabel voor zone E tot 2.50 kg PAK');
define('MODULE_SHIPPING_FEDEXEU_COST_PAK_8_DESC' , 'Tarieftabel voor zone E, gebaseerd op <b>\'PAK\'</b> tot 2.50 kg verzendgewicht.');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_8_TITLE' , 'Tarieftabel voor zone E tot 0.50 kg ENV');
define('MODULE_SHIPPING_FEDEXEU_COST_ENV_8_DESC' , 'Tarieftabel voor zone E, gebaseerd op <b>\'ENV\'</b> tot 60 pagina\'s in DIN A4 formaat & 0.50 kg verzendgewicht');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_8_TITLE' , 'Tarieftabel voor zone E tot 10 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_COST_BOX_8_DESC' , 'Tarieftabel voor zone E, gebaseerd op een <b>\'BOX\'</b> maximaal 10 kg zwaar transportgewicht.');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_8_TITLE' , 'Erhöhungszuschlag bis 20 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_20_8_DESC' , 'Verhoging van de toeslag per kg meer dan 0,50 kg in EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_8_TITLE' , 'Verhoog de toeslag tot 30 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_40_8_DESC' , 'Verhoging van de toeslag per kg meer dan 0,50 kg in EUR');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_8_TITLE' , 'Verhoging van de toeslag tot 50 kg BOX');
define('MODULE_SHIPPING_FEDEXEU_STEP_BOX_70_8_DESC' , 'Verhoging van de toeslag per kg meer dan 0,50 kg in EUR');
?>