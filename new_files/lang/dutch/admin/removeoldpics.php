<?php
/* --------------------------------------------------------------
   $Id: removeoldpics.php 3503 2012-08-23 11:24:07Z dokuman $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   --------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(manufacturers.php,v 1.14 2003/02/16); www.oscommerce.com
   (c) 2003 nextcommerce (manufacturers.php,v 1.4 2003/08/14); www.nextcommerce.org
   (c) 2006 xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License
   --------------------------------------------------------------*/

define('HEADING_TITLE', 'Oude artikelafbeeldingen verwijderen');
define('LINK_INFO_TEXT', '<p>Met deze functie kunt u overbodige artikelafbeeldingen in de directories verwijderen:</p>
- /images/product_images/info_images<br/>
- /images/product_images/original_images<br/>
- /images/product_images/popup_images<br/>
- /images/product_images/thumbnail_images<br/>
<p>kan van de webserver worden verwijderd als er geen verwijzing meer is naar deze artikelafbeeldingen in de database.<br/> Als een afbeelding door geen enkel product meer wordt gebruikt, kan de afbeelding veilig van de webserver worden verwijderd.</p><br/>');
define('LINK_ORIGINAL', 'Oude originele afbeeldingen verwijderen');
define('LINK_INFO', 'Oude info-afbeeldingen verwijderen');
define('LINK_THUMBNAIL', 'Verwijderen van oude miniatuurafbeeldingen');
define('LINK_POPUP', 'Oude pop-up afbeeldingen verwijderen');
define('LINK_MESSAGE', 'Overbodige artikelafbeeldingen uit de directory "/images/product_images/%s_images" ');
define('LINK_MESSAGE_NO_DELETE', 'Er zijn geen overbodige artikelafbeeldingen toegevoegd aan de "/images/product_images/%s_images" gevonden.');
?>