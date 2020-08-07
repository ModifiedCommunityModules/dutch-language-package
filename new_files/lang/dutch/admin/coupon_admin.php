<?php
/* -----------------------------------------------------------------------------------------
   $Id: coupon_admin.php 12413 2019-11-13 21:11:31Z Tomcraft $

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(coupon_admin.php,v 1.1.2.5 2003/05/13); www.oscommerce.com

   Released under the GNU General Public License
   -----------------------------------------------------------------------------------------
   Third Party contributions:

   Credit Class/Gift Vouchers/Discount Coupons (Version 5.10)
   http://www.oscommerce.com/community/contributions,282
   Copyright (c) Strider | Strider@oscworks.com
   Copyright (c  Nick Stanko of UkiDev.com, nick@ukidev.com
   Copyright (c) Andre ambidex@gmx.net
   Copyright (c) 2001,2002 Ian C Wilson http://www.phesis.org

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

define('TOP_BAR_TITLE', 'Statistieken');
define('HEADING_TITLE', 'Kortings Bonnen');
define('HEADING_TITLE_STATUS', 'Status : ');
define('TEXT_CUSTOMER', 'Klant:');
define('TEXT_COUPON', 'Coupon Naam');
define('TEXT_COUPON_ALL', 'Alle Coupons');
define('TEXT_COUPON_ACTIVE', 'Actieve Coupons');
define('TEXT_COUPON_INACTIVE', 'Inactieve Coupons');
define('TEXT_SUBJECT', 'Onderwerp:');
define('TEXT_FROM', 'van:');
define('TEXT_FREE_SHIPPING', 'Gratis Verzending');
define('TEXT_MESSAGE', 'Bericht:');
define('TEXT_SELECT_CUSTOMER', 'Klant Kiezen');
define('TEXT_ALL_CUSTOMERS', 'Alle Klanten');
define('TEXT_NEWSLETTER_CUSTOMERS', 'Alle Nieuwsbrief Abonnees');
define('TEXT_CONFIRM_DELETE', 'Dient deze Coupon echt verwijderd te worden?');

define('TEXT_TO_REDEEM', 'U kunt deze coupon inwisselen bij een bestelling. Geef de code op in het hiervoor bestemde veld en klik vervolgens op de knop.');
define('TEXT_IN_CASE', ' in geval van problemen.');
define('TEXT_VOUCHER_IS', 'Uw Coupon-code is: ');
define('TEXT_REMEMBER', 'Bewaar de Coupon-code goed zodat u van dit aanbod gebruik kunt maken');
define('TEXT_VISIT', 'als u ' . HTTP_SERVER . DIR_WS_CATALOG. ' bezoekt.');
define('TEXT_ENTER_CODE', ' en de Code ingeven ');

define('TABLE_HEADING_ACTION', 'Actie');

define('CUSTOMER_ID', 'Klant Nr.');
define('CUSTOMER_NAME', 'Klant Naam');
define('REDEEM_DATE', 'ingewisseld op');
define('IP_ADDRESS', 'IP Adres');

define('TEXT_REDEMPTIONS', 'Inwisseling');
define('TEXT_REDEMPTIONS_TOTAL', 'In Totaal');
define('TEXT_REDEMPTIONS_CUSTOMER', 'Voor deze Klant');
define('TEXT_NO_FREE_SHIPPING', 'Geen gratis verzending');

define('NOTICE_EMAIL_SENT_TO', 'Notie: E-Mail verstuurd naar: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Fout: Geen klant geselecteerd.');
define('COUPON_NAME', 'Coupon Name');
//define('Kupon_VALUE', 'Coupon Waarde');
define('COUPON_AMOUNT', 'Coupon Hoeveelheid');
define('COUPON_CODE', 'Coupon Code');
define('COUPON_STARTDATE', 'geldig vanaf');
define('COUPON_FINISHDATE', 'geldig tot');
define('COUPON_FREE_SHIP', 'Gratis Verzending');
define('COUPON_DESC', 'Coupon Omschrijving');
define('COUPON_MIN_ORDER', 'Coupon Minimum Bestelling');
define('COUPON_USES_COUPON', 'Aantal gebruikt per Coupon');
define('COUPON_USES_USER', 'Aantal gebruikt per Klant');
define('COUPON_PRODUCTS', 'Lijst Geldige Artikelen');
define('COUPON_CATEGORIES', 'Lijst van geldige Categorie&euml;n');
define('COUPON_CUSTOMERS', 'Geldige klantenlijst');
define('VOUCHER_NUMBER_USED', 'Aantal gebruikt');
define('DATE_CREATED', 'Aangemaakt op');
define('DATE_MODIFIED', 'Gewijzigd op');
define('TEXT_HEADING_NEW_COUPON', 'Nieuwe Coupon aanmaken');
define('TEXT_NEW_INTRO', 'Geef de volgende info op voor de nieuwe coupon.<br />');


define('COUPON_NAME_HELP', 'Een korte omschrijving voor de coupon');
define('COUPON_AMOUNT_HELP', 'De waarde van de korting van de coupon, ofwel een vast bedrag of een percentagekorting bijv. 10%');
define('COUPON_CODE_HELP', 'Hier kunt u een eigen code ingeven (max.16 tekens) of open laten (code wordt dan automatisch aangemaakt).');
define('COUPON_STARTDATE_HELP', 'De datum vanaf wanneer de coupon geldig is');
define('COUPON_FINISHDATE_HELP', 'Datum wanneer  de coupon afloopt');
define('COUPON_FREE_SHIP_HELP', 'De coupon geeft recht op gratis verzending bij een bestelling. <strong>Opgelet:</strong> De waarde van de coupon wordt overschreven! De minimale bestelwaarde blijft echter geldig.');
define('COUPON_DESC_HELP', 'Beschrijving van de coupon voor de klant');
define('COUPON_MIN_ORDER_HELP', 'Minimale bestelwaarde voor geldigheid coupon');
define('COUPON_USES_COUPON_HELP', 'Het maximale aantal malen dat de coupon gebruikt kan worden, laat open voor onbeperkt gebruik.');
define('COUPON_USES_USER_HELP', 'Aantal malen dat een klant de coupon kan gebruiken, laat open voor onbeperkt gebruik.');
define('COUPON_PRODUCTS_HELP', 'Een komma gescheiden lijst van artikel_ids waarbij deze coupon gebruikt kan worden, laat open voor geen restricties.');
define('COUPON_CATEGORIES_HELP', 'Een komma gescheiden lijst van categorie&euml;n (cpaths) waarmee deze coupon gebruikt kan worden, laat open voor geen restricties.');
define('COUPON_CUSTOMERS_HELP', 'Kies de geldige klantgroepen voor deze coupon.');

define('COUPON_ID', 'cID');
define('BUTTON_DELETE_NO_CONFIRM', 'Verwijderen zonder bevestiging');
define('TEXT_NONE', 'geen beperkingen');
define('TEXT_COUPON_DELETE', 'Verwijder');
define('TEXT_COUPON_STATUS', 'Status');
define('TEXT_COUPON_DETAILS', 'Coupongegevens');
define('TEXT_COUPON_EMAIL', 'mailen');
define('TEXT_COUPON_OVERVIEW', 'Overzicht');
define('TEXT_COUPON_EMAIL_PREVIEW', 'Bevestiging');
define('TEXT_COUPON_MINORDER', 'min. Waarde van de bestelling');
define('TEXT_VIEW', 'Lijstweergave');
define('TEXT_VIEW_SHORT', 'Toon');

//BOF - web28 - 2011-04-13 - ADD Coupon message infos
define('COUPON_MINORDER_INFO', "\nCoupon Minimale bestelling: ");
define('COUPON_RESTRICT_INFO', "\nDeze coupon is alleen geldig voor bepaalde producten!"); 
define('COUPON_INFO', "\nCouponbedrag: "); 
define('COUPON_FREE_SHIPPING', 'Gratis verzending');
define('COUPON_LINK_TEXT', '\n\nDetails');
define('COUPON_CATEGORIES_RESTRICT', '\nGeldig voor deze categorie&euml;n');
define('COUPON_PRODUCTS_RESTRICT', '\nGeldig voor deze producten');
define('COUPON_NO_RESTRICT', '\nGeldig voor alle producten');
//EOF - web28 - 2011-04-13 - ADD Coupon message infos

//BOF - web28 - 2011-07-05 - ADD error message
define('ERROR_NO_COUPON_NAME', 'Fout: Geen couponnaam ');
define('ERROR_NO_COUPON_AMOUNT', 'Fout: Geen couponbedrag');
//EOF - web28 - 2011-07-05 - ADD error message

define('COUPON_DATE_START_TT', 'Beginnend bij 00:00:00');
define('COUPON_DATE_END_TT', 'Eindigend om middernacht (23:59:59)');
define('ERROR_COUPON_DATE', 'FOUT: Vervaldatum is ouder dan de begindatum');

define('TEXT_OT_COUPON_STATUS_INFO', 'De couponmodule (ot_coupon) moet nog worden ge&iuml;nstalleerd. (Module -> <a href="'.xtc_href_link('modules.php','set=ordertotal').'">Bestelling Totaal</a>)');
?>