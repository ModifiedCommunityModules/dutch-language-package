<?php
  /* --------------------------------------------------------------
   $Id: cookie_consent.php 13006 2020-12-06 15:26:30Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2019 [www.modified-shop.org]
   --------------------------------------------------------------
   Copyright (c) 2019, Andreas Guder [info@andreas-guder.de]     
   --------------------------------------------------------------   
   Released under the GNU General Public License
   --------------------------------------------------------------*/

  define('HEADING_TITLE', 'Cookie-toestemming');
  define('HEADING_TITLE_DETAIL', 'Cookie-Toestemming - Cookies');

  define('TABLE_HEADING_ACTION', 'Actie');
  define('TABLE_HEADING_STATUS', 'Status');
  define('TABLE_HEADING_SORT', 'Sorteren');

  define('TABLE_HEADING_VALUES_CONTENT', 'Cookies/Groep');
  define('TABLE_HEADING_VALUES_NAME', 'Naam');
  define('TABLE_HEADING_VALUES_DESCRIPTION', 'Beschrijving');
  define('TABLE_HEADING_VALUES_COOKIES', 'Cookies');

  define('TABLE_HEADING_OPTIONS_NAME', 'Naam');
  define('TABLE_HEADING_OPTIONS_DESCRIPTION', 'Beschrijving');

  define('TEXT_INFO_DATE_ADDED', 'toegevoegd:');
  define('TEXT_INFO_LAST_MODIFIED', 'laatste wijziging:');

  define('TEXT_INFO_VALUE_NAME', 'Naam:');
  define('TEXT_INFO_VALUE_DESCRIPTION', 'Beschrijving:');
  define('TEXT_INFO_VALUE_COOKIES', 'Cookies:');
  define('TEXT_INFO_VALUE_SORT', 'Sorteren:');
  define('TEXT_INFO_VALUE_COOKIES_DESC', 'Voer de naam in van het cookie dat moet worden verwijderd. Er kunnen meerdere namen worden ingevoerd, gescheiden door komma\'s. U kunt ook alleen de eerste letters van de namen invoeren, maar deze mogen niet overlappen met de namen van andere cookies om niet de verkeerde cookies te verwijderen.');

  define('TEXT_INFO_HEADING_NEW_VALUE', 'Nieuw cookie/groep');
  define('TEXT_INFO_NEW_VALUE_INTRO', 'Voer de nieuwe cookie/cookiegroep in met alle relevante gegevens');
  define('TEXT_INFO_HEADING_EDIT_VALUE', 'cookie bewerken');
  define('TEXT_INFO_EDIT_VALUE_INTRO', 'Breng alstublieft alle noodzakelijke veranderingen aan..');
  define('TEXT_INFO_HEADING_DELETE_VALUE', 'Cookie/groep verwijderen');
  define('TABLE_HEADING_VALUES_PURPOSEID', 'DOEL-ID');
  define('TEXT_INFO_HEADING_JSCRIPT_SRC', 'Javascript tag voor te laden scripts');
  define('TEXT_INFO_HEADING_JSCRIPT_DIRECT', 'Javascript tag voor directe scripts');
  define('TEXT_INFO_HEADING_JSCRIPT_OTHER_CODE', 'Code voor andere traceerelementen');
  define('TEXT_INFO_DELETE_VALUE_INTRO', 'Weet u zeker dat u dit cookie wilt verwijderen?');
  define('TEXT_INFO_HEADING_EXTERNAL_TRIGGER', '&quot;MODOilTrack&quot; enth&auml;lt');

  define('TEXT_DISPLAY_NUMBER_OF_VALUES', 'Weergegeven zijn <b>%d</b> tot <b>%d</b> (van een totaal van <b>%d</b> cookies/groepen)');
  define('TEXT_INFO_WARNING_COOKIES', '<b>WAARSCHUWING:</b> Er zijn nog %s cookies verbonden aan deze categorie! Deze cookies worden samen met de categorie verwijderd.');

  define('TEXT_INFO_OPTION_NAME', 'Naam:');
  define('TEXT_INFO_OPTION_DESCRIPTION', 'Beschrijving:');
  define('TEXT_INFO_OPTION_SORT', 'Sorteren:');

  define('TEXT_INFO_NUMBER_OPTION', 'Aantal cookies:');
  define('TEXT_INFO_HEADING_NEW_OPTION', 'Nieuwe categorie');
  define('TEXT_INFO_NEW_OPTION_INTRO', 'Voer de nieuwe categorie in met alle relevante gegevens');
  define('TEXT_INFO_HEADING_EDIT_OPTION', 'Categorie bewerken');
  define('TEXT_INFO_EDIT_OPTION_INTRO', 'Breng alstublieft alle noodzakelijke veranderingen aan..');
  define('TEXT_INFO_HEADING_DELETE_OPTION', 'Categorie losmaken');
  define('TEXT_INFO_DELETE_OPTION_INTRO', 'Weet u zeker dat u deze categorie wilt verwijderen?');

  define('TEXT_DISPLAY_NUMBER_OF_OPTIONS', 'Getoond worden <b>%d</b> tot <b>%d</b> (van een totaal van <b>%d</b> eigenschappen)');

  define('SORT_ORDER','Bestel');
  define('TEXT_SORTORDER', 'Sorteren');
  define('BUTTON_COOKIES', 'Cookies');
