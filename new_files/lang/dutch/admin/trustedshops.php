<?php
  /* --------------------------------------------------------------
   $Id$

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   --------------------------------------------------------------
   Released under the GNU General Public License
   --------------------------------------------------------------*/

define('HEADING_TITLE', 'Trusted Shops');
define('HEADING_TECHNOLOGIE', 'Trustbadge Technologie');
define('HEADING_PRODUCTS', 'Producten');

define('TABLE_HEADING_TRUSTEDSHOPS_ID', 'TS-ID');
define('TABLE_HEADING_LANGUAGE', 'Taal');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Actie');

define('HEADING_TRUSTBADGE', 'Trustbadge');
define('HEADING_ADVANCED', 'Uitgebreid');

define('TEXT_DATE_ADDED', 'Toegevoegd:');
define('TEXT_LAST_MODIFIED', 'Bijgewerkt:');
define('TEXT_TRUSTEDSHOPS_STATUS', 'Status:');
define('TEXT_TRUSTEDSHOPS_ID', 'TS-ID:');
define('TEXT_TRUSTEDSHOPS_LANGUAGES', 'Selecteer de taal:');
define('TEXT_TRUSTEDSHOPS_WIDGET', 'Activeer de widget voor klantenbeoordeling:');
define('TEXT_TRUSTEDSHOPS_SNIPPETS', 'Activeer Rich Snippets advertentie in Google:');
define('TEXT_TRUSTEDSHOPS_SNIPPETS_INFO', '<a href="https://developers.google.com/structured-data/rich-snippets/products" target="_blank">Google Rich Snippets Documentatie</a>');
define('TEXT_WIDGET_INFO', 'De widget toont uw waarderingssterren en de meest recente beoordeling naast de vertrouwensbadge in uw winkel.');
define('TEXT_TRUSTBADGE_INFO', 'In de standaardversie geeft de vertrouwensbadge uw keurmerk en uw klantenbeoordelingen weer en bevindt zich rechtsonder in uw winkel. U kunt hier kiezen of u de Trustbadge in de aanbevolen variant (standaard) wilt gebruiken, of u alleen uw klantenbeoordelingen wilt weergeven of dat u het uiterlijk en de positie wilt individualiseren (hiervoor zijn programmeervaardigheden vereist).');
define('TEXT_SNIPPETS_PRODUCTS', 'Product detailpagina\'s');
define('TEXT_SNIPPETS_CATEGORY', 'Categorie pagina\'s');
define('TEXT_SNIPPETS_INDEX', 'Startpagina (niet aanbevolen)');

define('TEXT_TRUSTEDSHOPS_BADGE', 'Optionele variant:');
define('TEXT_BADGE_DEFAULT', 'Standaard');
define('TEXT_BADGE_SMALL', 'Standaard (klein)');
define('TEXT_BADGE_REVIEWS', 'Beoordelingen');
define('TEXT_BADGE_CUSTOM', 'Aangepaste');
define('TEXT_BADGE_CUSTOM_REVIEWS', 'Aangepast (Beoordelingen)');
define('TEXT_BADGE_OFFSET', 'Y-as positie (max. 250px):');
define('TEXT_BADGE_INSTRUCTION', 'In ons Integratiecentrum vindt u een <a href="%s" target="_blank">Stap-voor-stap handleiding</a> voor individuele configuratie en integratie.');
define('TEXT_BADGE_CUSTOM_CODE', 'Voer hier de code van de vertrouwensbadge in:');

define('TEXT_PRODUCT_STICKER_API', 'Product Sticker API (beta):');
define('TEXT_PRODUCT_STICKER_API_INFO', 'Met onze API bieden wij u de interface om uw productreviews in uw eigen systeem te gebruiken.');
define('TEXT_PRODUCT_STICKER_STATUS', 'Product Sticker Status:');
define('TEXT_PRODUCT_STICKER', 'Product Sticker Code bewerking:');
define('TEXT_PRODUCT_STICKER_INFO', 'De Product Sticker toont de huidige productbeoordelingen in uw winkel.<br/>Met onze <a target="_blank" href="%s">Configureer Gids</a> uw Product Sticker');
define('TEXT_PRODUCT_STICKER_INTRO', 'Klantenbeoordelingen');

define('TEXT_REVIEW_STICKER_STATUS', 'Controleer de status van de sticker:');
define('TEXT_REVIEW_STICKER', 'Bewerk de code van de beoordelingssticker:');
define('TEXT_REVIEW_STICKER_INFO', 'De Recensie Sticker toont de huidige beoordelingen voor uw winkel.<br/>Met onze <a target="_blank" href="%s">Configureer Gids</a> uw Review Sticker.');
define('TEXT_REVIEW_STICKER_INTRO', 'Klantenbeoordelingen');

define('TEXT_HEADING_DELETE_TRUSTEDSHOPS', 'TS-ID verwijderen');
define('TEXT_DELETE_INTRO', 'Weet u zeker dat u deze TS-ID wilt verwijderen?');

define('TEXT_DISABLED', 'gedeactiveerd');
define('TEXT_ENABLED', 'geactiveerd');

define('TEXT_DISPLAY_NUMBER_OF_TRUSTEDSHOPS', 'Het volgende wordt weergegeven <b>%d</b> naar <b>%d</b> (van in totaal <b>%d</b> TS-ID)');

define('TEXT_TS_MAIN_INFO', '
<img src="images/trustedshops/trustmark-widget-de-AT-CH-DE-w300-h245-v1.png" style="width:200px;float:right;margin-top:30px;padding-left:30px;"/>
<h2>Trusted Shops</h2>
<b>Vertrouwen: de sleutel tot succes</b><br/>
<br/>
Met meer dan 15 jaar ervaring en meer dan 20.000 winkels is Trusted Shops het belangrijkste vertrouwensmerk van Europa op het gebied van e-commerce. Bied uw klanten met de Trusted Shops-module meer zekerheid bij online aankopen - voor een positieve winkelervaring en stijgende conversies.
<ul>
  <li><b>Zegel van goedkeuring met geld-terug-garantie:</b> Beveiliging voor meer verkooptransacties</li>
  <li><b>Klanten- en productbeoordelingen:</b> Vertrouwen voor meer verkeer</li>
  <li><b>Wettelijke copywriter en waarschuwingsbescherming:</b> Expertise voor meer rechtszekerheid</li>
</ul>');
define('TEXT_TS_BADGE_INFO', '
<img src="images/trustedshops/trustbadge_Review_Trustmark_de-DE.png" style="width:115px;float:right;margin-top:10px;padding-left:30px;"/>
<h2>Trustbadge Technologie</h2>
<b>Eenvoudig, flexibel, baanbrekend</b><br/>
<br/>
De Trusted Shops module integreert de Trustbadge technologie in uw shop: het toont uw zichtbare vertrouwenselementen op alle pagina\'s in de online shop en functioneert als een controlecentrum dat uw klanten de geld-terug-garantie op het juiste moment biedt of na de bestelling een waarderingsaanvraag uitvoert.<br/>
<br/>
En als dynamische code is de vertrouwensbadge goed uitgerust voor de toekomst: Functies kunnen eenvoudig worden bijgewerkt en nieuwe functies kunnen worden geïntegreerd. Met de Trustbadge-technologie kunt u er dus zeker van zijn dat u altijd optimaal gebruik kunt maken van de vertrouwensoplossingen van Trusted Shops.');
define('TEXT_TS_PRODUCT_INFO', '
<h2>Producten</h2>
<b>Uw voordelen met Trusted Shops</b><br/>
<br/>
<ul>
  <li><b>Kwaliteitszegel - meer vertrouwen, meer verkoop</b><br/>
      Meer dan 60% van de online shoppers vertrouwt op keurmerken. Ook u kunt dit vertrouwen gebruiken om hogere omrekeningskoersen te bereiken.</li>
  <li><b>klantenbeoordelingen - vijf sterren zeggen meer dan duizend woorden</b><br/>
      Professionele rating marketing voor meer aandacht in Google, meer SEO en meer analyse mogelijkheden.</li>
  <li><b>geld-terug-garantie - meer veiligheid, minder aankoopafbrekingen</b><br/>
      Hoe lager het financi&euml;le risico voor de koper, hoe groter het winkelmandje - en hoe gemakkelijker de weg door de kassa.</li>
</ul>');
define('TEXT_TS_SPECIAL_INFO', '
<b>Onze special voor u: <br/> permanent goedkoper voor gematigde gebruikers!</b><br/>
<a target="_blank" href="https://checkout.trustedshops.com/?a_aid=modified-shop"><img src="images/trustedshops/btn_330x40_de-DE_v2.png" style="margin-top:10px;"/></a>');
            
?>