<?php
/* --------------------------------------------------------------
   $Id: specials.php 899 2005-04-29 02:40:57Z hhgag $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(specials.php,v 1.10 2002/01/31); www.oscommerce.com 
   (c) 2003	 nextcommerce (specials.php,v 1.4 2003/08/14); www.nextcommerce.org

   Released under the GNU General Public License 
   --------------------------------------------------------------*/

define('SPECIALS_TITLE', 'Speciale aanbieding aanmaken/bewerken');

define('TEXT_SPECIALS_PRODUCT', 'Artikel:');
define('TEXT_SPECIALS_SPECIAL_PRICE', 'Speciale Prijs:');
define('TEXT_SPECIALS_SPECIAL_QUANTITY', 'Aantal:');
define('TEXT_SPECIALS_START_DATE', 'Startdatum: <small>(YYYY-MM-DD)</small>');
define('TEXT_SPECIALS_EXPIRES_DATE', 'Geldig tot');

define('TEXT_INFO_DATE_ADDED', 'Toegevoegd Op:');
define('TEXT_INFO_LAST_MODIFIED', 'Laatst Aangepast:');
define('TEXT_INFO_NEW_PRICE', 'Nieuwe Prijs:');
define('TEXT_INFO_ORIGINAL_PRICE', 'Originele Prijs:');
define('TEXT_INFO_PERCENTAGE', 'Percentage:');
define('TEXT_INFO_START_DATE', 'Begin bij:');
define('TEXT_INFO_EXPIRES_DATE', 'Geldig tot:');

define('TEXT_INFO_HEADING_DELETE_SPECIALS', 'Speciale aanbieding verwijderen');
define('TEXT_INFO_DELETE_INTRO', 'Weet u zeker dat de speciale aanbieding wilt verwijderen?');

define ('TEXT_SPECIALS_NO_PID', 'Het artikel moet eerst worden opgeslagen, anders kan de korting niet correct worden toegepast.');

define('TEXT_CATSPECIALS_START_DATE_TT', 'Vul de datum in vanaf wanneer de aanbiedingsprijs van toepassing is.<br>');
define('TEXT_CATSPECIALS_EXPIRES_DATE_TT', 'Laat de <strong>vervaldatum</strong> leeg voor geen vervaldatum.<br>');
define('TEXT_CATSPECIALS_SPECIAL_QUANTITY_TT', 'U kunt het aantal artikelen invoeren in het veld <strong>Kwaliteit</strong> voor producten waarvoor de speciale prijs van toepassing is.<br>U kunt zelf bepalen of u de voorraad specials wilt controleren of niet onder "Configuratie" -> "Voorraadopties" -> "Voorraad specials" aanvinken.');
define('TEXT_CATSPECIALS_SPECIAL_PRICE_TT', 'U kunt bijvoorbeeld in het veld Specials Price een af te trekken percentage invullen: <strong>20%</strong><br>Als u een nieuwe prijs invoert, moet het decimaalteken een \'.\' (decimaalpunt), voorbeeld: <strong>49.99</strong>');

?>