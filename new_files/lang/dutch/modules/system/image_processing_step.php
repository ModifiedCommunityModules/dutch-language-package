<?php
/* -----------------------------------------------------------------------------------------
   $Id: image_processing_step.php 2992 2012-06-07 16:59:49Z web28 $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(cod.php,v 1.28 2003/02/14); www.oscommerce.com
   (c) 2003	 nextcommerce (invoice.php,v 1.6 2003/08/24); www.nextcommerce.org
   (c) 2006 XT-Commerce (image_processing_step.php 950 2005-05-14; www.xt-commerce.com
   --------------------------------------------------------------
   Contribution
   image_processing_step (step-by-step Variante B) by INSEH 2008-03-26

   new javascript reload / only missing image/ max images  by web28 2011-03-17

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

define('MODULE_STEP_IMAGE_PROCESS_TEXT_DESCRIPTION', 'Alle afbeeldingen in de mappen<br /><br />
/images/product_images/popup_images/<br />
/images/product_images/info_images/<br />
/images/product_images/thumbnail_images/ <br /> <br /> nieuw gecreëerd.<br /> <br />
Hiervoor verwerkt het script slechts een beperkt aantal %s beelden en roept zichzelf vervolgens opnieuw op.<br /> <br />');
define('MODULE_STEP_IMAGE_PROCESS_TEXT_TITLE', 'Imageprocessing - Productfoto\'s');
define('MODULE_STEP_IMAGE_PROCESS_STATUS_DESC','Modulestatus');
define('MODULE_STEP_IMAGE_PROCESS_STATUS_TITLE','Status');
define('IMAGE_EXPORT','Druk op Start om de batchverwerking te starten. Dit proces kan enige tijd duren - onderbreek het nooit!');
define('IMAGE_EXPORT_TYPE','<hr noshade><strong>Batchverwerking:</strong>');

define('IMAGE_STEP_INFO','Foto\'s: ');
define('IMAGE_STEP_INFO_READY',' - Klaar!');
define('TEXT_MAX_IMAGES','max. afbeeldingen per pagina herladen');
define('TEXT_ONLY_MISSING_IMAGES','Cre&euml;er alleen ontbrekende beelden');
define('MODULE_STEP_READY_STYLE_TEXT', '<div class="ready_info">%s</div>');
define('MODULE_STEP_READY_STYLE_BACK', MODULE_STEP_READY_STYLE_TEXT);
define('TEXT_LOWER_FILE_EXT','Bestandsextensie omzetten naar kleine letters Voorbeeld: <b> JPG -> jpg</b>');
define('IMAGE_COUNT_INFO','Aantal beelden in %s: %s st. ');

define('TEXT_LOGFILE','Schakel logging in, nuttig voor het oplossen van problemen. Het logbestand wordt opgeslagen in de map /log in de hoofdmap.');

?>