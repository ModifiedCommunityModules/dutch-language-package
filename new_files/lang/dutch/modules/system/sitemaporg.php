<?php
/* -----------------------------------------------------------------------------------------
   
   $Id: sitemaporg.php 
   XML-Sitemap.org for xt:Commerce SP2.1a
   by Mathis Klooss
   V1.2
   -----------------------------------------------------------------------------------------
      Original Script:
   $Id: gsitemaps.php 
   Google Sitemaps by hendrik.koch@gmx.de
   V1.1 August 2006
   -----------------------------------------------------------------------------------------
   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(cod.php,v 1.28 2003/02/14); www.oscommerce.com 
   (c) 2003	 nextcommerce (invoice.php,v 1.6 2003/08/24); www.nextcommerce.org

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

define('MODULE_SITEMAPORG_TEXT_DESCRIPTION', 'De standaarddefinitie is hier te vinden: <a href="http://www.sitemaps.org/" target="_blank">www.sitemap.org</a>');
define('MODULE_SITEMAPORG_TEXT_TITLE', 'XML Sitemap.org');
define('MODULE_SITEMAPORG_FILE_TITLE' , '<hr />Bestandsnaam');
define('MODULE_SITEMAPORG_FILE_DESC' , 'Voer een bestandsnaam in als het exportbestand op de server moet worden opgeslagen.<br />(directory "exporteren/")');
define('MODULE_SITEMAPORG_STATUS_DESC','Modulestatus');
define('MODULE_SITEMAPORG_STATUS_TITLE','Status');
define('MODULE_SITEMAPORG_ROOT_TITLE', '<hr /><b>Installatie in de wortel?</b>');
define('MODULE_SITEMAPORG_ROOT_DESC', 'Moet het sitemap-bestand meteen in de hoofdmap worden geplaatst?');
define('MODULE_SITEMAPORG_GZIP_TITLE', '<b>gzip-compressie?</b>');
define('MODULE_SITEMAPORG_GZIP_DESC', 'De extensie ".gz" wordt automatisch toegevoegd aan het einde van het bestand!');
define('MODULE_SITEMAPORG_EXPORT_TITLE', '<hr /><b>Download?</b>');
define('MODULE_SITEMAPORG_EXPORT_DESC', 'Wilt u het bestand downloaden?');
define('MODULE_SITEMAPORG_CUSTOMERS_STATUS_TITLE', 'Klantengroep');
define('MODULE_SITEMAPORG_CUSTOMERS_STATUS_DESC','Geef hier aan welke klantgroep gebruikt moet worden voor de export van de sitemap.xml.');
define('MODULE_SITEMAPORG_LANGUAGE_TITLE', 'Taal');
define('MODULE_SITEMAPORG_LANGUAGE_DESC','Voer de taal in waarin de sitemap.xml moet worden ge&euml;xporteerd.');
?>