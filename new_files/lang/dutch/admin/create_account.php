<?php
/* --------------------------------------------------------------
   $Id: create_account.php 11649 2019-03-28 14:36:34Z GTB $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(create_account.php,v 1.13 2003/05/19); www.oscommerce.com 
   (c) 2003	 nextcommerce (create_account.php,v 1.4 2003/08/14); www.nextcommerce.org

   Released under the GNU General Public License 
   --------------------------------------------------------------*/

define('NAVBAR_TITLE', 'Account aanmaken');

define('HEADING_TITLE', 'Klanten Account Admin');

define('TEXT_ORIGIN_LOGIN', '<span class="col-red"><small><b>OPMERKING:</b></small></span> Als u al een account bij ons heeft, kunt u inloggen bij de <a href="%s"><u>inlogpagina</u></a>.');

define('EMAIL_SUBJECT', 'Welom bij ' . STORE_NAME);
define('EMAIL_WELCOME', 'Welkom bij <b>' . STORE_NAME . '</b>.' . "\n\n");
define('EMAIL_TEXT', 'U kunt deelnemen aan de  <b>verschillende online services</b> die we aanbieden. Deze Services zijn o.a.:' . "\n\n" . '<li><b>Vaste winkelwagen</b> - Elk Artikel blijft hierin geregistreert tot aan de betaling of als u het artikel verwijderd.' . "\n" . '<li><b>Adresboek</b> - U kunt uw artikelen ook elders laten bezorgen ipv op uw eigen adres!De perfecte manier om een verjaardagsgeschenk aan de jarige zelf te sturen.' . "\n" . '<li><b>Eerdere Bestellingen</b> - Bekijk uw bestelhistorie bij ons.' . "\n" . '<li><b>Artikel reviews</b> - Deel uw mening met andere klanten van ons.' . "\n\n");
define('EMAIL_CONTACT', 'Als u vragen heeft over onze online services, neem dan contact op met: ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n\n");
define('EMAIL_WARNING', '<b>Attentie:</b> Dit E-Mail-Adres werd door een klant opgegeven. In het geval dat u zich niet heeft aangemeld als lid stuur dan een  E-Mail naar ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n");
define('ENTRY_PAYMENT_UNALLOWED','Niet toegestane Betaalmodules:');
define('ENTRY_SHIPPING_UNALLOWED','Niet toegestane Verzendmodules:');
?>