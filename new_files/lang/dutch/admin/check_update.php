<?php
/* --------------------------------------------------------------
   $Id: check_update.php 11690 2019-04-02 14:36:47Z Tomcraft $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   --------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(customers.php,v 1.13 2002/06/15); www.oscommerce.com
   (c) 2003	 nextcommerce (customers.php,v 1.8 2003/08/15); www.nextcommerce.org
   (c) 2006 xt:Commerce; www.xt-commerce.com

   Released under the GNU General Public License
   --------------------------------------------------------------*/

define('HEADING_TITLE', 'Software-update');
define('HEADING_SUBTITLE', 'Update controle');

define('TEXT_DB_VERSION','Database versie:');
define('TEXT_INFO_UPDATE_RECOMENDED', '<div class="error_message">Er is een nieuwe versie beschikbaar. U kunt deze hier downloaden: <a rel="nofollow noopener" href="https://www.modified-shop.org/download" target="_blank">https://www.modified-shop.org/download</a></div>');
define('TEXT_INFO_UPDATE_NOT_POSSIBLE', '<div class="error_message">Sorry, er was geen controle mogelijk. Bezoek onze <a rel="nofollow noopener" target="_blank" href="https://www.modified-shop.org"><b>Website</b></a>.</div>');
define('TEXT_INFO_UPDATE', '<div class="success_message">Uw versie is up-to-date.</div>');

define('TEXT_HEADING_DEVELOPERS', 'Ontwikkelaars van de aangepaste eCommerce Shopsoftware:');
define('TEXT_HEADING_FORMER_DEVELOPERS', 'Voormalig ontwikkelaars van de aangepaste eCommerce Shopsoftware:');
define('TEXT_HEADING_SUPPORT', 'Steun de verdere ontwikkeling:');
define('TEXT_HEADING_DONATIONS', 'Donaties:');
define('TEXT_HEADING_BASED_ON', 'De winkelsoftware is gebaseerd op:');

define('TEXT_INFO_THANKS', 'We willen alle programmeurs en ontwikkelaars die betrokken zijn bij dit project bedanken. In het geval dat we iemand vergeten zijn te vermelden in de onderstaande lijst, gelieve een bericht te posten naar de <a rel="nofollow noopener" style="font-size: 12px; text-decoration: underline;" href="https://www.modified-shop.org/forum/" target="_blank">forum</a> of aan een van de genoemde ontwikkelaars.');
define('TEXT_INFO_DISCLAIMER', 'Dit programma wordt verspreid in de hoop dat het nuttig zal zijn. Toch geven we geen garantie dat het zonder bugs is.');
define('TEXT_INFO_DONATIONS', 'De aangepaste eCommerce Shopsoftware is een open source project, maar toch gaat er veel werk en vrije tijd in dit project zitten. Daarom zouden we u dankbaar zijn als u uw waardering toont door te doneren aan het project.');
define('TEXT_INFO_DONATIONS_IMG_ALT', 'Steun dit project met uw donatie.');
define('BUTTON_DONATE', '<a rel="nofollow noopener" href="https://www.modified-shop.org/spenden"><img src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" alt="' . TEXT_INFO_DONATIONS_IMG_ALT . '" border="0"></a>');
?>