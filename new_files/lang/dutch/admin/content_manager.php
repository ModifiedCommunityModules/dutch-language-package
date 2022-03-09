<?php
/* --------------------------------------------------------------
   $Id: content_manager.php 12258 2019-10-07 14:16:24Z GTB $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on:
   (c) 2003	 nextcommerce (content_manager.php,v 1.8 2003/08/25); www.nextcommerce.org
   
   Released under the GNU General Public License 
   --------------------------------------------------------------*/
   
 defined('HEADING_TITLE') OR define('HEADING_TITLE','Content Manager');
 define('HEADING_CONTENT','Site Content');
 define('HEADING_PRODUCTS_CONTENT','Artikel Content');
 define('HEADING_CONTENT_MANAGER_CONTENT','Inhoud van de site');
 define('HEADING_EMAIL_CONTENT','E-mail inhoud');
 define('TABLE_HEADING_CONTENT_ID','Link ID');
 define('TABLE_HEADING_CONTENT_TITLE','Titel');
 define('TABLE_HEADING_CONTENT_FILE','Bestand');
 define('TABLE_HEADING_CONTENT_STATUS','Zichtbaar in box');
 define('TABLE_HEADING_CONTENT_BOX','Box');
 define('TABLE_HEADING_PRODUCTS_ID','ID');
 define('TABLE_HEADING_PRODUCTS','Artikel');
 define('TABLE_HEADING_PRODUCTS_CONTENT_ID','ID');
 define('TABLE_HEADING_CONTENT_MANAGER_ID','ID');
 define('TABLE_HEADING_CONTENT_MANAGER','Zetel');
 define('TABLE_HEADING_CONTENT_MANAGER_CONTENT_ID','ID');
 define('TABLE_HEADING_EMAIL_ID','ID');
 define('TABLE_HEADING_EMAIL','E-Mail');
 define('TABLE_HEADING_LANGUAGE','Taal');
 define('TABLE_HEADING_CONTENT_NAME','Naam/Bestandsnaam');
 define('TABLE_HEADING_CONTENT_LINK','Link');
 define('TABLE_HEADING_CONTENT_HITS','Hits');
 define('TABLE_HEADING_CONTENT_GROUP','Groep');
 define('TABLE_HEADING_CONTENT_SORT','Sorteervolgorde');
 defined('TEXT_YES') OR define('TEXT_YES','Ja');
 defined('TEXT_NO') OR define('TEXT_NO','Nee');
 define('TABLE_HEADING_CONTENT_ACTION','Actie');
 defined('TEXT_DELETE') OR define('TEXT_DELETE','Verwijderen');
 define('TEXT_EDIT','Bewerken');
 define('TEXT_PREVIEW','Voorvertoning');
 define('CONFIRM_DELETE','Inhoud verwijderen ?');
 define('CONTENT_NOTE','Inhoud gemarkeerd met <font color="#ff0000">*</font> is een deel van het systeem en kan niet verwijderd worden!');


 // edit
 define('TEXT_LANGUAGE','Taal:');
 define('TEXT_STATUS','Zichtbaar:');
 define('TEXT_STATUS_DESCRIPTION','Indien aangevinkt zal er een link worden getoond in de informatiebox');
 define('TEXT_TITLE','Titel:');
 define('TEXT_TITLE_FILE','Titel/Bestandsnaam:');
 define('TEXT_SELECT','-Selecteren-');
 define('TEXT_HEADING','Hoofdtitel:');
 define('TEXT_CONTENT','Tekst:');
 define('TEXT_UPLOAD_FILE','Bestand Uploaden:');
 define('TEXT_UPLOAD_FILE_LOCAL','(van uw lokaal systeem)');
 define('TEXT_CHOOSE_FILE','Kies bestand:');
 define('TEXT_CHOOSE_FILE_DESC','U kunt ook een reeds bestaand bestand uit de lijst kiezen.');
 defined('TEXT_NO_FILE') OR define('TEXT_NO_FILE','Selectie verwijderen');
 define('TEXT_CHOOSE_FILE_SERVER','(Indien u uw bestanden reeds via FTP naar <i>(media/content)</i> heeft geladen, kunt u hier het bestand uitkiezen.');
 define('TEXT_CURRENT_FILE','Aktueel Bestand:');
 define('TEXT_FILE_DESCRIPTION','<b>Info:</b><br />U heeft tevens de mogelijkheid om een <b>.html</b> of <b>.htm</b> bestand te uploaden en te tonen als content.<br /> Als u een bestand selecteerd of upload, zal de tekst in de box genegeerd worden.<br /><br />');
 define('ERROR_FILE','Verkeerd bestandsformaat (alleen .html of .htm)');
 define('ERROR_TITLE','Geef een titel op');
 define('ERROR_COMMENT','Geef een bestandsomschrijving!');
 define('TEXT_FILE_FLAG','Box:');
 define('TEXT_PARENT','Hoofddocument:');
 define('TEXT_PARENT_DESCRIPTION','Aan dit document toewijzen');
 define('TEXT_PRODUCT','Artikel:');
 define('TEXT_LINK','Link:');
 defined('TEXT_SORT_ORDER') OR define('TEXT_SORT_ORDER','Sortering:');
 define('TEXT_GROUP','Taal Groep:');
 define('TEXT_GROUP_DESC','Met deze ID worden gelijke onderwerpen met verschillende talen aan elkaar gelinkt.');

 define('TEXT_CONTENT_DESCRIPTION','Met deze Content Manager heeft u de mogelijkheid om elk bestandstype aan een artikel toe te voegen zoals Artikelbeschrijvingen, Handboeken, Videos, enz...<br />Deze elementen worden in de artikel-detailpagina getoond.<br /><br />');
 define('TEXT_CONTENT_MANAGER_CONTENT', 'Inhoud:');
 define('TEXT_CONTENT_MANAGER_DESCRIPTION','Met deze Content Manager kunt u elk bestandstype aan een contentpagina toevoegen.<br />Bv. PDF voor juridische teksten, etc...<br />Deze elementen worden weergegeven op de inhoudsopgave.<br /><br />');
 define('TEXT_EMAIL_CONTENT', 'E-Mail inhoud:');
 define('TEXT_EMAIL_DESCRIPTION','Met deze Content Manager kunt u elk type filetype toevoegen als een E-Mail attachment.<br />Bv. PDF voor juridische teksten, etc...<br /><br />');

 define('TEXT_FILENAME','Gebruikt  bestand:');
 define('TEXT_FILE_DESC','Beschrijving:');
 define('USED_SPACE','Verbruikte Opslagruimte:');
 define('TABLE_HEADING_CONTENT_FILESIZE','Bestandsgrootte');
 define('TEXT_CONTENT_NOINDEX','noindex (Laat zoekmachines deze pagina niet tonen in hun resultaten).');
 define('TEXT_CONTENT_NOFOLLOW','nofollow (Vertelt de zoekmachinerobots om geen enkele link op de pagina te volgen).');
 define('TEXT_CONTENT_NOODP','noodp (Blokkeert zoekmachines door de beschrijving voor deze pagina in DMOZ (ook wel ODP genoemd) te gebruiken als snippet voor uw pagina in de zoekresultaten).');
 define('TEXT_CONTENT_META_ROBOTS','Meta Robots');
 
 define('TABLE_HEADING_STATUS_ACTIVE', 'Status');
 define('TEXT_STATUS_ACTIVE', 'Status actief:'); 	 
 define('TEXT_STATUS_ACTIVE_DESCRIPTION', 'Inhoud mogelijk maken?');
 
 define('TEXT_CONTENT_DOUBLE_GROUP_INDEX', 'Duplicate Content Group Index! Sla alstublieft weer op. Het probleem is dus automatisch opgelost!');
 defined('TEXT_CHARACTERS') OR define('TEXT_CHARACTERS','Borden');
 define('TEXT_KEEP_FILENAME', 'Houd de bestandsnaam:');
?>