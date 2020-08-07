<?php
/*------------------------------------------------------------------------------
   v 1.0 
   XTC-DPD Shipping Module - Contribution for XT-Commerce http://xt-commerce.com
   modified by http://www.hwangelshop.de

   Copyrigt (c) 2004 cigamth
  ------------------------------------------------------------------------------
   $Id: dpd.php 2751 2012-04-12 13:28:06Z Tomcraft1980 $

   XTC-GLS Shipping Module - Contribution for XT-Commerce http://www.xt-commerce.com
   modified by http://www.hhgag.com

   Copyright (c) 2004 H.H.G.
   -----------------------------------------------------------------------------
   based on:
   (c) 2003 Deutsche Post Module
   Original written by Marcel Bossert-Schwab (webmaster@wernich.de), Version 1.2b
   Addon Released under GLSL V2.0 by Gunter Sammet (Gunter@SammySolutions.com)

   Contribution based on:

   osCommerce, Open Source E-Commerce Solutions
   http://www.oscommerce.com

   Copyright (c) 2002 - 2003 osCommerce

   Released under the GNU General Public License

   ---------------------------------------------------------------------------*/
define('MODULE_SHIPPING_DPD_TEXT_TITLE', 'DPD Dynamic Parcel Distribution');
define('MODULE_SHIPPING_DPD_TEXT_DESCRIPTION', 'DPD Dynamic Parcel Distribution - Module voor wereldwijde verzending');
define('MODULE_SHIPPING_DPD_TEXT_WAY', 'Verzending naar');
define('MODULE_SHIPPING_DPD_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_DPD_INVALID_ZONE', 'Sorry, verzending naar dit land is niet mogelijk.');
define('MODULE_SHIPPING_DPD_UNDEFINED_RATE', 'De verzendkosten kunnen op dit moment niet worden berekend');
define('MODULE_SHIPPING_DPD_FREE_SHIPPING', 'Wij nemen de verzendkosten voor onze rekening');
define('MODULE_SHIPPING_DPD_SUBSIDIZED_SHIPPING', 'Wij betalen een deel van de verzendkosten.');

define('MODULE_SHIPPING_DPD_STATUS_TITLE', 'DPD Dynamic Parcel Distribution');
define('MODULE_SHIPPING_DPD_STATUS_DESC', 'Wilt u verzending via DPD Dynamic Parcel Distribution aanbieden?');
define('MODULE_SHIPPING_DPD_HANDLING_TITLE', 'Verwerkingskosten');
define('MODULE_SHIPPING_DPD_HANDLING_DESC', 'Verwerkingskosten voor deze verzendmethode in euro\'s');
define('MODULE_SHIPPING_DPD_ALLOWED_TITLE' , 'Toegestane verzendzones');
define('MODULE_SHIPPING_DPD_ALLOWED_DESC' , 'Voer <b>individueel</b> de zones in waarheen verzending mogelijk moet zijn. (bijv. AT,DE (laat dit veld leeg als u alle zones wilt toestaan))');
define('MODULE_SHIPPING_DPD_SORT_ORDER_TITLE', 'Weergavevolgorde');
define('MODULE_SHIPPING_DPD_SORT_ORDER_DESC', 'Het laagst wordt het eerst weergegeven.');
define('MODULE_SHIPPING_DPD_TAX_CLASS_TITLE', 'Belastingtarief');
define('MODULE_SHIPPING_DPD_TAX_CLASS_DESC', 'Selecteer het BTW-tarief voor deze verzendmethode.');
define('MODULE_SHIPPING_DPD_ZONE_TITLE', 'Verzendingszone');
define('MODULE_SHIPPING_DPD_ZONE_DESC', 'Als u een zone selecteert, wordt deze verzendmethode alleen in deze zone aangeboden.');

?>