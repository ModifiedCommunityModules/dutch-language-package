<?php
/* --------------------------------------------------------------
   $Id: backup.php 10762 2017-06-07 11:57:15Z web28 $

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(backup.php,v 1.21 2002/06/15); www.oscommerce.com
   (c) 2003	 nextcommerce (backup.php,v 1.4 2003/08/14); www.nextcommerce.org

   Released under the GNU General Public License
   --------------------------------------------------------------*/

define('HEADING_TITLE', 'Database Backup Manager');

define('TABLE_HEADING_TITLE', 'Titel');
define('TABLE_HEADING_FILE_DATE', 'Datum');
define('TABLE_HEADING_FILE_SIZE', 'Grootte');
define('TABLE_HEADING_ACTION', 'Actie');

define('TEXT_INFO_HEADING_NEW_BACKUP', 'Nieuwe backup');
define('TEXT_INFO_HEADING_RESTORE_LOCAL', 'herstellen');
define('TEXT_INFO_NEW_BACKUP', 'Backup proces in GEEN ENKEL GEVAL onderbreken. Dit kan enkele minuten duren.');
define('TEXT_INFO_UNPACK', '<br /><br />(na uitpakken van bestanden uit archief)');
define('TEXT_INFO_RESTORE', 'Terugzetten in GEEN ENKEL GEVAL onderbreken.<br /><br />Hoe groter de backup hoe langer dit proces duurt!<br /><br />Indien mogelijk de mysql client gebruiken.<br /><br />Bijvoorbeeld:<br /><br /><b>mysql -h' . DB_SERVER . ' -u' . DB_SERVER_USERNAME . ' -p ' . DB_DATABASE . ' < %s </b> %s');
define('TEXT_INFO_RESTORE_LOCAL', 'Terugzetten in GEEN ENKEL GEVAL onderbreken.<br /><br />Hoe groter de backup hoe langer dit proces duurt!');
define('TEXT_INFO_RESTORE_LOCAL_RAW_FILE', 'Bestand welke geupload word moet een. raw sql (text) bestand zijn.');
define('TEXT_INFO_DATE', 'Datum:');
define('TEXT_INFO_SIZE', 'Grootte:');
define('TEXT_INFO_COMPRESSION', 'Comprimeren:');
define('TEXT_INFO_USE_GZIP', 'Met GZIP');
define('TEXT_INFO_USE_ZIP', 'Met ZIP');
define('TEXT_INFO_USE_NO_COMPRESSION', 'Geen compressie (Raw SQL)');
define('TEXT_INFO_DOWNLOAD_ONLY', 'Alleen downloaden (niet op server opslaan)');
define('TEXT_INFO_BEST_THROUGH_HTTPS', 'Een HTTPS Verbinding gebruiken!');
define('TEXT_DELETE_INTRO', 'Weet u zeker dat u deze back-up wilt verwijderen?');
define('TEXT_NO_EXTENSION', 'Geen');
define('TEXT_BACKUP_DIRECTORY', 'Backup Map:');
define('TEXT_LAST_RESTORATION', 'Laatste Herstelling:');
define('TEXT_FORGET', '(<u>vergeten</u>)');

define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', 'Fout: Backup map bestaat niet. Wijzig dit in configure.php.');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', 'Fout: Backup map is niet beschrijfbaar.');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', 'Fout: Download Link niet acceptabel.');

define('SUCCESS_LAST_RESTORE_CLEARED', 'Succes: De laatste hersteldatum is gewist.');
define('SUCCESS_DATABASE_SAVED', 'Succes: De Database is opgeslagen.');
define('SUCCESS_DATABASE_RESTORED', 'Succes: De Database is hersteld.');
define('SUCCESS_BACKUP_DELETED', 'Succes: De backup is verwijderd.');
define('SUCCESS_BACKUP_UPLOAD', 'Succes: Het back-upbestand is ge&uuml;pload.');

//TEXT_COMPLETE_INSERTS
define('TEXT_COMPLETE_INSERTS', "<b>Volledige 'INSERT's</b><br> - veldnamen werden in elke INSERT-rij ingevoerd (toegenomen Backup)");

define('TEXT_INFO_TABLES_IN_BACKUP', '<br />' . "\n" .'<b>Tabellen in deze back-up:</b>' . "\n");
define('TEXT_INFO_NO_INFORMATION', 'Geen informatie beschikbaar');
//UTF-8 convert
define('TEXT_CONVERT_TO_UTF', 'Converteer database naar UTF-8');
define('TEXT_IMPORT_UTF', 'UTF-8-database herstellen');

//TEXT_REMOVE_COLLATE
define('TEXT_REMOVE_COLLATE', "<b>Zonder codering 'COLLATE' en 'DEFAULT CHARSET'</b><br> - De coderingsgegevens worden niet ingevoegd. Dit is handig bij het migreren naar een andere databasecodering.");

//TEXT_REMOVE_ENGINE
define('TEXT_REMOVE_ENGINE', "<b>Zonder opslagmotoren 'ENGINE'</b><br> - De verklaringen van de opslagmotor (MyISAM,InnoDB) worden niet ingevoegd.");
define('TEXT_IMPORT_UTF8_NOTICE', '<b>Attentie:</b> de database is geconverteerd naar UTF-8.');
define('TEXT_INFO_CHARSET', 'Charset:');

define('TEXT_TABLES_BACKUP_TYPE', '<b>Zekering</b><br> - Welke tabellen moeten worden opgeslagen?');
define('TEXT_BACKUP_ALL', 'Alle tabellen');
define('TEXT_BACKUP_CUSTOM', 'Geselecteerde tabellen');
define('TEXT_TABLES_TO_BACKUP', '<b>De volgende tabellen moeten worden opgeslagen:</b>');
?>