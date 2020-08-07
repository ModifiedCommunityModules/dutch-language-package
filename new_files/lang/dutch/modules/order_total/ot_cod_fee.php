<?php
/* -----------------------------------------------------------------------------------------
   $Id: ot_cod_fee.php 10553 2017-01-11 13:45:14Z web28 $

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(ot_cod_fee.php,v 1.02 2003/02/24); www.oscommerce.com
   (C) 2001 - 2003 TheMedia, Dipl.-Ing Thomas Plänkers ; http://www.themedia.at & http://www.oscommerce.at

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

  define('MODULE_ORDER_TOTAL_COD_FEE_TITLE', 'Rembourskosten');
  define('MODULE_ORDER_TOTAL_COD_FEE_DESCRIPTION', 'Berekening van de rembourskosten');

  define('MODULE_ORDER_TOTAL_COD_FEE_STATUS_TITLE','rembourskosten');
  define('MODULE_ORDER_TOTAL_COD_FEE_STATUS_DESC','Berekening van de rembourskosten');

  define('MODULE_ORDER_TOTAL_COD_FEE_SORT_ORDER_TITLE','Sorteervolgorde');
  define('MODULE_ORDER_TOTAL_COD_FEE_SORT_ORDER_DESC','Weergavevolgorde');

  define('MODULE_ORDER_TOTAL_COD_FEE_TAX_CLASS_TITLE','Belastingklasse');
  define('MODULE_ORDER_TOTAL_COD_FEE_TAX_CLASS_DESC','Selecteer een belastingklasse.');

  function define_shipping_titles_cod() {
    $module_keys = str_replace('.php','',MODULE_SHIPPING_INSTALLED);
    $installed_shipping_modules = explode(';',$module_keys);
    //support for ot_shipping
    $installed_shipping_modules[] = 'free';

    if (count($installed_shipping_modules) > 0) {
      foreach($installed_shipping_modules as $shipping_code) {
        $module_type = 'shipping';
        $file = $shipping_code.'.php';
        $shipping_code = strtoupper($shipping_code);
        $title = '';

        if (defined('DIR_FS_LANGUAGES') && file_exists(DIR_FS_LANGUAGES . 'dutch/modules/' . $module_type . '/' . $file)) {
            include_once(DIR_FS_LANGUAGES . 'dutch/modules/' . $module_type . '/' . $file);
            $title = constant('MODULE_SHIPPING_'.$shipping_code.'_TEXT_TITLE');
        }
        //support for ot_shipping
        $title = $shipping_code == 'FREE' ? 'Gratis verzending (samenvatting module ot_shipping)' : $title;
        
        $shipping_code = ($shipping_code == 'FREEAMOUNT') ? 'FREEAMOUNT_FREE' : 'FEE_' . $shipping_code;

        define('MODULE_ORDER_TOTAL_COD_'.$shipping_code.'_TITLE',$title);
        define('MODULE_ORDER_TOTAL_COD_'.$shipping_code.'_DESC','&lt;ISO2-Code&gt;:&lt;Prijs&gt;, ....<br />
        00 als ISO2-code maakt het mogelijk om onder rembours te leveren in alle landen. Als
        00 wordt gebruikt, dit moet als laatste argument worden ingevoerd. Als
        nr. 00:9.99 wordt ingevuld, verzending onder rembours naar het buitenland wordt niet in rekening gebracht
        (niet mogelijk). Om slechts &eacute;&eacute;n land uit te sluiten, geen kosten voor dit land
        binnenkomen. Voorbeeld: DE:4.00,CH:,00:9.99<br />-&gt; Uitleg: Verzending naar DE: 4&euro; /
        Verzending naar CH: niet mogelijk / Verzending naar de rest van de wereld: 9,99&euro;');
      }
    }
  }
  define_shipping_titles_cod();
?>