<?php
/* -----------------------------------------------------------------------------------------
   $Id: it_recht_kanzlei.php 11998 2019-07-23 16:07:31Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

require_once(DIR_FS_CATALOG.'api/it-recht-kanzlei/classes/class.api_it_recht_kanzlei.php');
$api_it_recht_kanzlei = new api_it_recht_kanzlei();

define('MODULE_API_IT_RECHT_KANZLEI_TEXT_TITLE', 'IT-Recht Kanzlei AGB-Schnittstelle v'.$api_it_recht_kanzlei->modulversion);
define('MODULE_API_IT_RECHT_KANZLEI_TEXT_DESCRIPTION', 'IT-Recht Kanzlei - Auto Updater voor automatische wetteksten<br/><br/><b> BELANGRIJK: </b> Voordat de module wordt gebruikt, moet de toewijzing van de inhoudspagina\'s worden gemaakt.<hr noshade>');
define('MODULE_API_IT_RECHT_KANZLEI_STATUS_TITLE', 'Status');
define('MODULE_API_IT_RECHT_KANZLEI_STATUS_DESC', 'Modulestatus');
define('MODULE_API_IT_RECHT_KANZLEI_TOKEN_TITLE', 'Authenticatie penning');
define('MODULE_API_IT_RECHT_KANZLEI_TOKEN_DESC', 'Authenticatietoken dat u aan de IT-Recht Kanzlei verstrekt.');
define('MODULE_API_IT_RECHT_KANZLEI_VERSION_TITLE', 'API-versie');
define('MODULE_API_IT_RECHT_KANZLEI_VERSION_DESC', 'Dit dient alleen te worden gewijzigd als u hierom wordt verzocht door het IT-Recht Kanzlei. (standaard: 1.0)');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_AGB_TITLE', '<hr noshade>Wettelijke tekst AGB');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_AGB_DESC', 'Geef aan op welke pagina deze wettekst automatisch moet worden ingevoegd.');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_DSE_TITLE', 'Wettelijke tekst gegevensbescherming');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_DSE_DESC', 'Geef aan op welke pagina deze wettekst automatisch moet worden ingevoegd.');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_WRB_TITLE', 'Wettelijke tekst Intrekking');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_WRB_DESC', 'Geef aan op welke pagina deze wettekst automatisch moet worden ingevoegd.');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_IMP_TITLE', 'Juridische tekst Afdruk');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_IMP_DESC', 'Geef aan op welke pagina deze wettekst automatisch moet worden ingevoegd.');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_AGB_TITLE', '<hr noshade>Selectie AGB PDF juridische tekst');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_AGB_DESC', 'Vermelding of AGB als PDF beschikbaar moet zijn.');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_DSE_TITLE', 'Selectie van gegevensbescherming PDF-wettekst');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_DSE_DESC', 'Vermelding of de gegevensbeveiligingstekst als PDF beschikbaar moet zijn.');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_WRB_TITLE', 'Selectie Herroeping PDF Wettelijke tekst');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_WRB_DESC', 'Vermelding of de herroepingstekst als PDF beschikbaar moet zijn.');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_FILE_TITLE', '<hr noshade>Opslaglocatie PDF');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_FILE_DESC', 'Geeft de locatie van de PDF-wetteksten aan.');

?>