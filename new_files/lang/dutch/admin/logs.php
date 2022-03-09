<?php
  /* --------------------------------------------------------------
   $Id: logs.php 12439 2019-12-02 17:40:51Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   --------------------------------------------------------------
   Released under the GNU General Public License
   --------------------------------------------------------------*/

define('HEADING_TITLE', 'Logbestanden'); 

define('TABLE_HEADING_TITLE', 'Titel');
define('TABLE_HEADING_FILE_DATE', 'Datum');
define('TABLE_HEADING_FILE_SIZE', 'Grootte');

define('TEXT_LOG_DIRECTORY', 'Logboekregister:');
define('TEXT_DELETE_INTRO', 'Weet u zeker dat u dit Logbestand wilt verwijderen?');

define('SUCCESS_LOG_DELETED', 'Succes: De Logfile is verwijderd.');

define('ERROR_LOG_DIRECTORY_DOES_NOT_EXIST', 'Fout: de back-upmap bestaat niet.');
define('ERROR_LOG_DIRECTORY_NOT_WRITEABLE', 'Fout: de back-upmap is schrijfbeveiligd.');
define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', 'Fout: Logboekdirectory bestaat niet. Stel dit in op configure.php.');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', 'Fout: Logboekdirectory is niet beschrijfbaar.');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', 'Fout: Downloadlink niet aanvaardbaar.');
?>