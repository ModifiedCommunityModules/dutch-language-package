<?php
/* -----------------------------------------------------------------------------------------
   $Id: semknox_system.php 13231 2021-01-26 07:56:21Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

  define('MODULE_SEMKNOX_SYSTEM_TEXT_TITLE', 'Site zoeken 360 Product zoeken');
  define('MODULE_SEMKNOX_SYSTEM_TEXT_DESCRIPTION', 'Revolutionair productonderzoek van de volgende generatie voor uw bedrijf met volledig geautomatiseerde gegevensvoorbereiding.');
  define('MODULE_SEMKNOX_SYSTEM_STATUS_TITLE', 'Status van de module');
  define('MODULE_SEMKNOX_SYSTEM_STATUS_DESC', 'Activeer Site zoeken 360 Product zoeken');
  define('MODULE_SEMKNOX_SYSTEM_DEFAULT_CSS_TITLE', 'Standaard CSS');
  define('MODULE_SEMKNOX_SYSTEM_DEFAULT_CSS_DESC', 'Als de standaard CSS van Site Search 360 moet worden geladen ?');
  define('MODULE_SEMKNOX_SYSTEM_COLOR_TITLE', 'Accent kleur');
  define('MODULE_SEMKNOX_SYSTEM_COLOR_DESC', 'Specificeer de accentkleur voor titels en knoppen (instelling alleen van toepassing als de standaard CSS is geladen).');
  
  $languages = xtc_get_languages();
  foreach ($languages as $language) {
    define('MODULE_SEMKNOX_SYSTEM_API_'.$language['id'].'_TITLE', '['.strtoupper($language['code']).'] API Sleutel');
    define('MODULE_SEMKNOX_SYSTEM_API_'.$language['id'].'_DESC', 'API-sleutel voor '.strtoupper($language['code']).'');

    define('MODULE_SEMKNOX_SYSTEM_PROJECT_'.$language['id'].'_TITLE', '['.strtoupper($language['code']).'] Project-ID');
    define('MODULE_SEMKNOX_SYSTEM_PROJECT_'.$language['id'].'_DESC', 'Project-ID voor '.strtoupper($language['code']).'');
  }