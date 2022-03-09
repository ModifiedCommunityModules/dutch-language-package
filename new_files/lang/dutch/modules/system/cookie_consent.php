<?php
  /* --------------------------------------------------------------
   $Id: cookie_consent.js.php $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2019 [www.modified-shop.org]
   --------------------------------------------------------------
   Released under the GNU General Public License
   --------------------------------------------------------------*/

  define('MODULE_COOKIE_CONSENT_STATUS_TITLE', 'Status van de module');
  define('MODULE_COOKIE_CONSENT_STATUS_DESC', 'Module activeren?');
  define('MODULE_COOKIE_CONSENT_SET_READABLE_COOKIE_TITLE', 'Stel leesbare cookie in');
  define('MODULE_COOKIE_CONSENT_SET_READABLE_COOKIE_DESC', '');

  define('MODULE_COOKIE_CONSENT_SET_READABLE_COOKIE_DETAIL', 'Als u de Google Tag Manager of andere software gebruikt, mag ook die alleen scripts invoegen en cookies plaatsen als de bezoeker dat toestaat. Er kan een extra, leesbare cookie worden ingesteld, zodat de tagmanager het verzoek van de klant kan uitlezen.<br /><br />Setup in de Google Tag Manager:<br />Ga naar het menu &quot;Variabelen&quot; en maak een nieuwe variabele aan onder &quot;Door gebruiker gedefinieerde variabelen&quot;. Noem ze bijvoorbeeld &quot;Cookieconsent&quot;.<br />Klik dan op &quot;Configure Variable&quot; en selecteer het type &quot;First-Party-Cookie&quot;. Voer de naam van de cookie in &quot;MODOilTrack&quot;.<br /><br />U kunt dan uw triggers bewerken..<br />Setzen Sie den Triggertyp &quot;Seitenaufruf&quot; und wahlen Sie die Option &quot;Einige Seitenaufrufe&quot;.<br />Geef als voorwaarde op: <em>&quot;Cookieconsent&quot;</em> (naam van de variabele) bevat <em>[&quot;1&quot;:true]</em>. U kunt de waarde per cookie vinden in de cookie-toestemmingsconfiguratie.<br /><br />Geïllustreerde instructies vindt u hier: <a href="https://www.dair-media.net/blog/dsgvo-cookie-einwilligung-im-google-tag-manager-beruecksichtigen/" target="_blank">https://www.dair-media.net/blog/dsgvo-cookie-einwilligung-im-google-tag-manager-beruecksichtigen/</a>');

  define('MODULE_COOKIE_CONSENT_EXTENDED_DESCRIPTION', '<strong><font color="red">ATTENTIE:</font></strong> Maak de instellingen onder "Configuratie" -> <a href="'.xtc_href_link(FILENAME_COOKIE_CONSENT).'"><strong>"Cookie Toestemming"</strong></a> van!');
  define('MODULE_COOKIE_CONSENT_MORE_INFO', 'Meer informatie:');