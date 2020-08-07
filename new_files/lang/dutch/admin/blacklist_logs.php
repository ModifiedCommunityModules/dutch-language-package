<?php
  /* --------------------------------------------------------------
   $Id: blacklist_logs.php 10584 2017-01-20 10:45:19Z Tomcraft $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   --------------------------------------------------------------
   Released under the GNU General Public License
   --------------------------------------------------------------*/

define('HEADING_TITLE', 'Zwarte lijst Logboeken'); 

define('TABLE_HEADING_IP', 'IP-adres');
define('TABLE_HEADING_BANNED', 'Tijd verboden');
define('TABLE_HEADING_ACTION', 'Actie');

define('TEXT_EDIT_ENTRY', 'Bewerken');
define('TEXT_NEW_ENTRY', 'Nieuw item');
define('TEXT_ENTRY_IP', 'IP-adres');
define('TEXT_ENTRY_IP_INFO', 'Voer het IP-adres in om te blokkeren.');
define('TEXT_ENTRY_TIME', 'Tijd');
define('TEXT_ENTRY_TIME_INFO', 'Voer de datum en tijd in waarop het IP-adres moet worden geblokkeerd.');

define('TEXT_DELETE_INTRO', 'Weet u zeker dat u dit IP-adres wilt verwijderen?');

define('ERROR_LOG_DIRECTORY_DOES_NOT_EXIST', 'Fout: Logboekdirectory bestaat niet. Gelieve dit in te stellen in configure.php.');
define('ERROR_LOG_DIRECTORY_NOT_WRITEABLE', 'Fout: Logboekdirectory is niet beschrijfbaar.');
?>