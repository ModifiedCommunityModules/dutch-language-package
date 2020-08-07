<?php
/*
  $Id: backup.php,v 1.16 2002/03/16 21:30:02 hpdl Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Database Backup Manager');

define('TEXT_INFO_DO_BACKUP', 'Er wordt een back-up gemaakt van de database!');
define('TEXT_INFO_DO_BACKUP_OK', 'De database is succesvol ondersteund!');
define('TEXT_INFO_DO_GZIP', 'Het back-upbestand is ingepakt!');
define('TEXT_INFO_WAIT', 'Wacht even, alsjeblieft!');

define('TEXT_INFO_DO_RESTORE', 'De database wordt hersteld!');
define('TEXT_INFO_DO_RESTORE_OK', 'De database is met succes gerestaureerd!');
define('TEXT_INFO_DO_GUNZIP', 'De database wordt uitgepakt!');

define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', 'Fout: De map voor de back-up bestaat niet. Corrigeer de fout in uw configure.php.');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', 'Fout: Niet in staat om naar de back-up map te schrijven.');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', 'Fout: De downloadlink is niet acceptabel.');
define('ERROR_DECOMPRESSOR_NOT_AVAILABLE', 'Fout: Geen geschikte uitpakker beschikbaar.');
define('ERROR_UNKNOWN_FILE_TYPE', 'Fout: Onbekend bestandstype.');
define('ERROR_RESTORE_FAILES', 'Fout: Herstel mislukt.');
define('ERROR_DATABASE_SAVED', 'Fout: Er kon geen back-up worden gemaakt van de database.');
define('ERROR_TEXT_PATH', 'Fout: Het pad naar mysqldump niet gevonden of gegeven!');

define('SUCCESS_LAST_RESTORE_CLEARED', 'Succesvol: De laatste restauratiedatum is vrijgemaakt.');
define('SUCCESS_DATABASE_SAVED', 'Succesvol: Er werd een back-up gemaakt van de database.');
define('SUCCESS_DATABASE_RESTORED', 'Succesvol: De database is hersteld.');
define('SUCCESS_BACKUP_DELETED', 'Succesvol: De back-up is verwijderd.');

define('TEXT_BACKUP_UNCOMPRESSED', 'Het back-upbestand is uitgepakt: ');

define('TEXT_SIMULATION', '<br>(Simulatie met logboekbestand)');

?>