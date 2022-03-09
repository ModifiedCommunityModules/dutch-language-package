<?php
/* --------------------------------------------------------------
   $Id: banner_manager.php 10153 2016-07-27 07:55:34Z GTB $   

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(banner_manager.php,v 1.25 2003/02/16); www.oscommerce.com 
   (c) 2003	 nextcommerce (banner_manager.php,v 1.4 2003/08/14); www.nextcommerce.org
   (c) 2006 xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License 
   --------------------------------------------------------------*/

define('HEADING_TITLE', 'Banner Manager');

define('TABLE_HEADING_BANNERS', 'Banners');
define('TABLE_HEADING_GROUPS', 'Groepen');
define('TABLE_HEADING_STATISTICS', 'Weergaven / Clicks');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Actie');
define('TABLE_HEADING_LANGUAGE', 'Taal');
define('TABLE_HEADING_SORT', 'Bestel');
define('TABLE_HEADING_IMAGE', 'Afbeelding');

define('TEXT_BANNERS_TITLE', 'Titel van de Banner:'); 
define('TEXT_BANNERS_URL', 'Banner-URL:'); 
define('TEXT_BANNERS_URL_NOTE', 'URL-doel bij het klikken op de banner.'); 
define('TEXT_BANNERS_REDIRECT', 'Rechtstreekse koppeling:'); 
define('TEXT_BANNERS_REDIRECT_NOTE', 'De banner is direct gelinkt aan de opgegeven banner URL en niet met behulp van "redirect.php?action=banner&amp;goto=xxx".<br /><strong>ATTENTIE:</strong> "Advertenties / klikken" kunnen niet meer geteld worden wanneer "Direct linken" geactiveerd is!'); 
define('TEXT_BANNERS_GROUP', 'Banner-Groep:'); 
define('TEXT_BANNERS_NEW_GROUP', ', of geef een nieuwe banner groep in hieronder'); 
define('TEXT_BANNERS_NEW_GROUP_NOTE', 'Om een Banner in het sjabloon weer te geven, moet het sjabloon worden uitgebreid<br/>Exemplaar: Banner Group banner , de banner kan worden weergegeven in de template in de index.html met ${BANNER}');
define('TEXT_BANNERS_IMAGE', 'Afbeelding:'); 
define('TEXT_BANNERS_IMAGE_MOBILE', 'Mobiel beeld (bestand):'); 
define('TEXT_BANNERS_IMAGE_LOCAL', ', of geef een lokaal bestand in hieronder'); 
define('TEXT_BANNERS_IMAGE_TARGET', 'Afbeelding doel (Opslaan als):'); 
define('TEXT_BANNERS_HTML_TEXT', 'HTML Tekst:');
define('TEXT_BANNERS_HTML_TEXT_NOTE', 'Hier kunt u direct een HTML-code invoeren die u van een affiliateservice hebt ontvangen om de banner weer te geven.');
define('TEXT_BANNERS_EXPIRES_ON', 'Verloopt op:');
define('TEXT_BANNERS_OR_AT', ', of op');
define('TEXT_BANNERS_IMPRESSIONS', 'Impressies/weergaven.');
define('TEXT_BANNERS_SCHEDULED_AT', 'Gepland op:');
define('TEXT_BANNERS_BANNER_NOTE', '<b>Opmerking banner:</b><ul><li>Gebruik een afbeelding of HTML tekst voor de banner - niet beide.</li><li>HTML tekst heeft voorrang boven een afbeelding.</li></ul>');
define('TEXT_BANNERS_INSERT_NOTE', '<b>Opmerking afbeelding:</b><ul><li>Map voor afbeelding moet schrijfrechten hebben!</li><li>Veld \'Opslaan als\' niet invullen als u geen afbeelding wilt uploaden naar de webserver (b.v. als u een lokale (serverside) afbeelding gebruikt).</li><li>Het \'Opslaan als\' veld moet een bestaande directory met een slash \'/\' aan het einde zijn (b.v. banners/).</li></ul>'); 
define('TEXT_BANNERS_EXPIRCY_NOTE', '<b>Opmerking geldigheid:</b><ul><li>Slechts ייn van de twee velden invullen!</li><li>Indien de Banner onbeperkt getoond moet worden dan deze velden leeg laten.</li></ul>');
define('TEXT_BANNERS_SCHEDULE_NOTE', '<b>Opmerking schema:</b><ul><li>Indien een tijdschema is ingesteld, wordt de banner geactiveerd op die datum.</li><li>Alle ingestelde banners worden tot hun activering, als gedeactiveert aangeduid.</li></ul>');

define('TEXT_BANNERS_DATE_ADDED', 'Toegevoegd op:');
define('TEXT_BANNERS_SCHEDULED_AT_DATE', 'Gepland op: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_DATE', 'Geldig tot: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_IMPRESSIONS', 'Geldig tot: <b>%s</b> impressionen/anzeigen');
define('TEXT_BANNERS_STATUS_CHANGE', 'Status gewijzigd: %s');

define('TEXT_BANNERS_DATA', 'D<br />A<br />T<br />A');
define('TEXT_BANNERS_LAST_3_DAYS', 'Afgelopen 3 Dagen');
define('TEXT_BANNERS_BANNER_VIEWS', 'Banner Views');
define('TEXT_BANNERS_BANNER_CLICKS', 'Banner Clicks');
define('TEXT_BANNERS_SORT', 'Bestel:');
define('TEXT_BANNERS_SORT_NOTE', 'De volgorde heeft alleen invloed op dynamische sliders en niet op statische banners.');

define('TEXT_INFO_DELETE_INTRO', 'Weet u zeker dat u deze banner wilt verwijderen?');
define('TEXT_INFO_DELETE_IMAGE', 'Bannerafbeelding verwijderen');

define('SUCCESS_BANNER_INSERTED', 'Succes: De Banner werd ingevoegd.');
define('SUCCESS_BANNER_UPDATED', 'Succes: De Banner werd bijgewerkt.');
define('SUCCESS_BANNER_REMOVED', 'Succes: De Banner werd verwijderd.');
define('SUCCESS_BANNER_STATUS_UPDATED', 'Succes: De status van de banner werd bijgewerkt.');

define('ERROR_BANNER_TITLE_REQUIRED', 'Fout: Bannertitel vereist.');
define('ERROR_BANNER_GROUP_REQUIRED', 'Fout: Bannergroep vereist.');
define('ERROR_BANNER_IMAGE_HTML_REQUIRED', 'Fout: Bannerafbeelding of HTML-tekst vereist.');
define('ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Fout: doeldirectory %s bestaat niet.');
define('ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Fout: doeldirectory %s is niet beschrijfbaar.');
define('ERROR_IMAGE_DOES_NOT_EXIST', 'Fout: Afbeelding bestaat niet.');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', 'Fout: Afbeelding kan niet verwijderd worden.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'Fout: Onbekende Status Flag.');

define('ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST', 'Fout: De directory \'graphs\' bestaat niet! Maak directory \'graphs\' aan in directory \'images\'.');
define('ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE', 'Fout: De directory \'graphs\' is niet beschrijfbaar!');

// BOF - Tomcraft - 2009-11-06 - Use variable TEXT_BANNERS_DATE_FORMAT
define('TEXT_BANNERS_DATE_FORMAT', 'YYYY-MM-DD');
// EOF - Tomcraft - 2009-11-06 - Use variable TEXT_BANNERS_DATE_FORMAT

define('TEXT_BANNERS_LANGUAGE', 'Taal:');
define('TEXT_BANNERS_LANGUAGE_NOTE', 'Selecteer de taal waarin de banner moet worden weergegeven?');
define('TEXT_NO_FILE', '-- geen dossier --');
?>