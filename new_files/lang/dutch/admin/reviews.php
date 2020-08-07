<?php
/* --------------------------------------------------------------
   $Id: reviews.php 899 2005-04-29 02:40:57Z hhgag $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(reviews.php,v 1.6 2002/02/06); www.oscommerce.com 
   (c) 2003	 nextcommerce (reviews.php,v 1.4 2003/08/14); www.nextcommerce.org

   Released under the GNU General Public License 
   --------------------------------------------------------------*/

define('HEADING_TITLE', 'Artikelreviews');

define('TABLE_HEADING_PRODUCTS', 'Artikelen');
define('TABLE_HEADING_CUSTOMER', 'Klant');
define('TABLE_HEADING_RATING', 'Beoordeling');
define('TABLE_HEADING_DATE_ADDED', 'toegevoegd op');
define('TABLE_HEADING_ACTION', 'Aktie');
define('TABLE_HEADING_STATUS', 'Status');

define('ENTRY_PRODUCT', 'Artikel:');
define('ENTRY_FROM', 'van:');
define('ENTRY_DATE', 'Datum:');
define('ENTRY_REVIEW', 'Beoordeling:');
define('ENTRY_REVIEW_TEXT', '<small><font color="#ff0000"><b>OPMERKING:</b></font></small>&nbsp;HTML wordt niet geconverteerd!&nbsp;');
define('ENTRY_RATING', 'Beoordeling:');

define('TEXT_INFO_DELETE_REVIEW_INTRO', 'Weet u zeker dat u deze beoordeling wilt verwijderen?');

define('TEXT_INFO_DATE_ADDED', 'toegevoegd op:');
define('TEXT_INFO_LAST_MODIFIED', 'laatste aanpassing:');
define('TEXT_IMAGE_NONEXISTENT', 'AFBEELDING BESTAAT NIET');
define('TEXT_INFO_REVIEW_AUTHOR', 'geschreven door:');
define('TEXT_INFO_REVIEW_RATING', 'Beoordeling:');
define('TEXT_INFO_REVIEW_READ', 'gelezen :');
define('TEXT_INFO_REVIEW_SIZE', 'Grootte:');
define('TEXT_INFO_PRODUCTS_AVERAGE_RATING', 'gemiddelde Beoordeling:');

define('TEXT_OF_5_STARS', '%s van 5 sterren!');
define('TEXT_GOOD', '<span class="smallText colorRed"><b>GOED</b></span>');
define('TEXT_BAD', '<span class="smallText colorRed"><b>BAD</b></span>');
define('TEXT_INFO_HEADING_DELETE_REVIEW', 'Beoordeling verwijderen');
?>