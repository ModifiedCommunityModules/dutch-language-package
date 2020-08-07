<?php
/* --------------------------------------------------------------
   $Id: currencies.php 899 2005-04-29 02:40:57Z hhgag $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   --------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(currencies.php,v 1.15 2003/05/02); www.oscommerce.com 
   (c) 2003	 nextcommerce (currencies.php,v 1.4 2003/08/14); www.nextcommerce.org

   Released under the GNU General Public License 
   --------------------------------------------------------------*/
   
define('HEADING_TITLE', 'Valuta`s');

define('TABLE_HEADING_CURRENCY_NAME', 'Valuta');
define('TABLE_HEADING_CURRENCY_CODES', 'Code');
define('TABLE_HEADING_CURRENCY_VALUE', 'Waarde');
define('TABLE_HEADING_ACTION', 'Actie');
define('TABLE_HEADING_CURRENCY_STATUS', 'Status');

define('TEXT_INFO_EDIT_INTRO', 'Breng de benodigde wijzigingen aan');
define('TEXT_INFO_CURRENCY_TITLE', 'Titel:');
define('TEXT_INFO_CURRENCY_CODE', 'Code:');
define('TEXT_INFO_CURRENCY_SYMBOL_LEFT', 'Symbol Links:');
define('TEXT_INFO_CURRENCY_SYMBOL_RIGHT', 'Symbol Rechts:');
define('TEXT_INFO_CURRENCY_DECIMAL_POINT', 'Decimale komma:');
define('TEXT_INFO_CURRENCY_THOUSANDS_POINT', 'Duizend Punt:');
define('TEXT_INFO_CURRENCY_DECIMAL_PLACES', 'Decimale plaatsen:');
define('TEXT_INFO_CURRENCY_LAST_UPDATED', 'Laatste wijziging:');
define('TEXT_INFO_CURRENCY_VALUE', 'Waarde:');
define('TEXT_INFO_CURRENCY_EXAMPLE', 'Voorbeeld Output:');
define('TEXT_INFO_INSERT_INTRO', 'Geef de nieuwe valuta met relevante Data in');
define('TEXT_INFO_DELETE_INTRO', 'Weet u zeker dat u deze valuta wilt verwijderen?');
define('TEXT_INFO_HEADING_NEW_CURRENCY', 'Nieuwe Valuta');
define('TEXT_INFO_HEADING_EDIT_CURRENCY', 'Valuta bewerken');
define('TEXT_INFO_HEADING_DELETE_CURRENCY', 'Valuta verwijderen');
define('TEXT_INFO_SET_AS_DEFAULT', TEXT_SET_DEFAULT . ' (vereist handmatige wijziging van wisselkoersen.)');
define('TEXT_INFO_CURRENCY_UPDATED', 'De wisselkoers %s (%s) werd met succes bijgewerkt');

define('ERROR_REMOVE_DEFAULT_CURRENCY', 'Fout: De Standaard valuta kan niet verwijderd worden.Stel een andere valuta als standaard in en probeer het opnieuw.');
define('ERROR_CURRENCY_INVALID', 'Fout: De wisselkoers voor %s (%s) werd niet bijgewerkt. Is dit een geldige valuta code?');
define('WARNING_PRIMARY_SERVER_FAILED', 'De primaire dienst "%s" kon de wisselkoers %s (%s) niet bepalen of is momenteel niet beschikbaar. Het wordt opgehaald op de secundaire dienst');
?>