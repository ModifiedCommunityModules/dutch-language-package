<?php
/* -----------------------------------------------------------------------------------------
   $Id: gv_mail.php 12130 2019-09-20 12:41:01Z Tomcraft $

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(gv_mail.php,v 1.5.2.2 2003/04/27); www.oscommerce.com

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

define('HEADING_TITLE', 'Stuur tegoedbon naar klanten');
define('HEADING_COUPON_TITLE', 'Coupon naar klanten sturen');

define('TEXT_CUSTOMER_GROUP', 'Klantengroep:');
define('TEXT_CUSTOMER', 'Klanten:');
define('TEXT_SUBJECT', 'Onderwerp:');
define('TEXT_FROM', 'Afzender:');
define('TEXT_TO', 'E-Mail aan:');
define('TEXT_AMOUNT', 'Waarde:');
define('TEXT_MESSAGE', 'Bericht:');
define('TEXT_SINGLE_EMAIL', '<span class="smallText">Gebruik dit voor het versturen van enkele E-Mails, in andere gevallen gebruik bovenstaand dropdown menu</span>');
define('TEXT_SELECT_CUSTOMER', 'Klant selecteren');
define('TEXT_SELECT_CUSTOMER_GROUP', 'Selecteer Klantengroep');

define('TEXT_ALL_CUSTOMERS', 'Alle Klanten');
define('TEXT_NEWSLETTER_CUSTOMERS', 'Aan alle Nieuwsbrief abonnees');

define('NOTICE_EMAIL_SENT_TO', 'Mededeling: E-Mail werd verstuurd naar: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Fout: Er is geen klant geselecteerd.');
define('ERROR_NO_AMOUNT_SELECTED', 'Fout: U heeft geen bedrag voor de tegoedbon opgegeven.');

define('TEXT_GV_WORTH', 'De waarde voor de tegoedbon bedraagt ');
define('TEXT_TO_REDEEM', 'Om uw tegoedbon in te wisselen, klikt u op onderstaande link. Noteer voor de zekerheid uw Tegoedbon-Code.');
define('TEXT_WHICH_IS', 'Uw tegoedbon coder is: ');
define('TEXT_IN_CASE', ' in geval van problemen.');
define('TEXT_OR_VISIT', 'bezoek onze website ');
define('TEXT_ENTER_CODE', ' en geef de code handmatig in tijdens de bestelling ');

define ('TEXT_REDEEM_COUPON_MESSAGE_HEADER', 'U heeft onlangs een Geschenkbon gekocht op onze site, om zekerheidsredenen is deze niet direct bijgeschreven op uw rekening.De shopeigenaar heeft het bedrag inmiddels bijgeschreven.');
define ('TEXT_REDEEM_COUPON_MESSAGE_AMOUNT', "\n\n" . 'De waarde van de Geschenkbon bedraagt %s');
define ('TEXT_REDEEM_COUPON_MESSAGE_BODY', "\n\n" . 'U kunt nu onze site bezoeken, inloggen en de Geschenkbon naar iemand versturen.');
define ('TEXT_REDEEM_COUPON_MESSAGE_FOOTER', "\n\n");

define('COUPON_INFO', "\nCouponbedrag: "); 
define('COUPON_FREE_SHIPPING', 'Gratis verzending');
define('COUPON_MINORDER_INFO', "\nCoupon Minimale bestelling: ");
define('COUPON_RESTRICT_INFO', "\nDeze coupon is alleen geldig voor bepaalde producten!"); 
?>