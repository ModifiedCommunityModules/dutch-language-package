<?php
/**
 * @version sofortüberweisung.de 4.0 - $Date: 2010-03-19 12:54:13 +0100 (Fr, 19 Mrz 2010) $
 * @author Payment Network AG (integration@payment-network.com)
 * @link http://www.payment-network.com/
 *
 * @copyright 2006 - 2007 Henri Schmidhuber
 * @link http://www.in-solution.de
 *
 * @link http://www.xt-commerce.com
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; version 2 of the License
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307
 * USA
 *
 ***********************************************************************************
 * this file contains code based on:
 * (c) 2000 - 2001 The Exchange Project
 * (c) 2001 - 2003 osCommerce, Open Source E-Commerce Solutions
 * (c) 2003	 nextcommerce (account_history_info.php,v 1.17 2003/08/17); www.nextcommerce.org
 * (c) 2003 - 2006 XT-Commerce
 * Released under the GNU General Public License
 ***********************************************************************************
 *
 * $Id: pn_sofortueberweisung.php 94 2010-03-19 11:54:13Z thoma $
 *
 */

define('MODULE_PAYMENT_PN_SOFORTUEBERWEISUNG_TEXT_TITLE', 'DIRECTebanking.com');
define('MODULE_PAYMENT_PN_SOFORTUEBERWEISUNG_TEXT_DESCRIPTION', '<div align="center">' . (MODULE_PAYMENT_PN_SOFORTUEBERWEISUNG_STATUS != 'True' ? '<a class="button" href=' . xtc_href_link(FILENAME_MODULES, 'set=payment&module=pn_sofortueberweisung&action=install&autoinstall=1', 'SSL') . '>Autoinstaller (aanbevolen)</a><br />' : ''). '<br /><b>payment-network.com</b></div>');

define('MODULE_PAYMENT_PN_SOFORTUEBERWEISUNG_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGE', '
     <table border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td valign="bottom"><a href="https://www.sofortueberweisung.de/funktionsweise" target="_blank">{{image}}</a></td>
      </tr>
      <tr>
	 <td class="main"><br />%s</td>
      </tr>
    </table>');
	
define('MODULE_PAYMENT_PN_SOFORTUEBERWEISUNG_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_TEXT', 'DIRECTebanking.com is een ISO gecertificeerd, Online-betaalsysteem zonder registrering. Voordelen: geen registrering, automatische afschrijving van uw Online-Banrekening, hoogste veilgheidsstandaards en directe verzending van voorradige goederen. Om met payment-network.com te betalen houd u u login data zoals accountnummer,PIN en TAN) bij de hand.  Dienstverleningen/Goederen worden indien beschikbaar DIRECT geleverd c.q. verzonden!');
define('MODULE_PAYMENT_PN_SOFORTUEBERWEISUNG_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGEALT', 'DIRECTebanking.com is een ISO gecertificeerd, Online-betaalsysteem zonder registrering. Voordelen: geen registrering, automatische afschrijving van uw Online-Banrekening, hoogste veilgheidsstandaards en directe verzending van voorradige goederen. Om met payment-network.com te betalen houd u u login data zoals accountnummer,PIN en TAN) bij de hand.  Dienstverleningen/Goederen worden indien beschikbaar DIRECT geleverd c.q. verzonden!');
define('MODULE_PAYMENT_PN_SOFORTUEBERWEISUNG_ALLOWED_TITLE', 'Toegestane zones');
define('MODULE_PAYMENT_PN_SOFORTUEBERWEISUNG_ALLOWED_DESC', 'Geef <b>separaat</b> die Zones aan, welke voor deze Module toegestaan zijn. (b.v. AT,DE (indien leeg gelaten worden alle zones toegestaan))');
define('MODULE_PAYMENT_PN_SOFORTUEBERWEISUNG_STATUS_TITLE', 'Activeer DIRECTebanking.com direct module');
define('MODULE_PAYMENT_PN_SOFORTUEBERWEISUNG_STATUS_DESC', 'Accepteer betaling via prepayment met integrated DIRECTebanking.com?');
define('MODULE_PAYMENT_PN_SOFORTUEBERWEISUNG_USER_ID_TITLE' , 'Klant ID');
define('MODULE_PAYMENT_PN_SOFORTUEBERWEISUNG_USER_ID_DESC' , 'Uw klant ID bij DIRECTebanking.com');
define('MODULE_PAYMENT_PN_SOFORTUEBERWEISUNG_PROJECT_ID_TITLE' , 'Project ID');
define('MODULE_PAYMENT_PN_SOFORTUEBERWEISUNG_PROJECT_ID_DESC' , 'Het project ID bij DIRECTebanking.com, waaraan de betaling is gekoppeld');
define('MODULE_PAYMENT_PN_SOFORTUEBERWEISUNG_PROJECT_PASSWORD_TITLE' , 'Project wachtwoord:');
define('MODULE_PAYMENT_PN_SOFORTUEBERWEISUNG_PROJECT_PASSWORD_DESC' , 'Het project wachtwoord (onder uitgebreide instellingen / wachtwoorden en hash algoritme)');
define('MODULE_PAYMENT_PN_SOFORTUEBERWEISUNG_PROJECT_NOTIF_PASSWORD_TITLE', 'Aanmelding wachtwoord:');
define('MODULE_PAYMENT_PN_SOFORTUEBERWEISUNG_PROJECT_NOTIF_PASSWORD_DESC', 'Het aanmeldings wachtwoord (uitgebreide instellingen / wachtwoorden en hash algoritme)');
define('MODULE_PAYMENT_PN_SOFORTUEBERWEISUNG_HASH_ALGORITHM_TITLE', 'Hashing algoritme:');
define('MODULE_PAYMENT_PN_SOFORTUEBERWEISUNG_HASH_ALGORITHM_DESC', 'Het hashing algoritme (uitgebreide instellingen / wachtwoorden en hash algoritme)');
define('MODULE_PAYMENT_PN_SOFORTUEBERWEISUNG_SORT_ORDER_TITLE' , 'Volgorde van weergave');
define('MODULE_PAYMENT_PN_SOFORTUEBERWEISUNG_SORT_ORDER_DESC' , 'Volgorde van weergave. Laagste getal verschijnt het eerst.');
define('MODULE_PAYMENT_PN_SOFORTUEBERWEISUNG_ZONE_TITLE', 'Hashing algoritme: '.MODULE_PAYMENT_PN_SOFORTUEBERWEISUNG_HASH_ALGORITHM. '<br /><br />Betalings zone');
define('MODULE_PAYMENT_PN_SOFORTUEBERWEISUNG_ZONE_TITLE' , 'Betalings zone');
define('MODULE_PAYMENT_PN_SOFORTUEBERWEISUNG_ZONE_DESC' , 'Indien een zone is geselecteerd, geldt de betalingsmethode alleen voor deze zone.');

define('MODULE_PAYMENT_PN_SOFORTUEBERWEISUNG_ORDER_STATUS_ID_TITLE' , 'Bestelstatus bevestigd');
define('MODULE_PAYMENT_PN_SOFORTUEBERWEISUNG_ORDER_STATUS_ID_DESC' , 'Bestelstatus na binnenkomst van een bestelling, waarvoor DIRECTebanking.com een geslaagde betalingsbevestiging verstuurde');
define('MODULE_PAYMENT_PN_SOFORTUEBERWEISUNG_TMP_STATUS_ID_TITLE','Tijdelijke bestel status');
define('MODULE_PAYMENT_PN_SOFORTUEBERWEISUNG_TMP_STATUS_ID_DESC','Bestel status voor transacties welke nog niet zijn afgerond');
define('MODULE_PAYMENT_PN_SOFORTUEBERWEISUNG_UNC_STATUS_ID_TITLE','Onbevestigde bestel status');
define('MODULE_PAYMENT_PN_SOFORTUEBERWEISUNG_UNC_STATUS_ID_DESC','Bestelstatus na binnenkomst van een bestelling, waarvoor geen of een verkeerde betalingsbevestiging is overgedragen');

define('MODULE_PAYMENT_PN_SOFORTUEBERWEISUNG_REASON_1_TITLE','Doeleinden regel 1');
define('MODULE_PAYMENT_PN_SOFORTUEBERWEISUNG_REASON_1_DESC', 'In de doeleinden regel 1 zijn de volgende opties beschikbaar');
define('MODULE_PAYMENT_PN_SOFORTUEBERWEISUNG_TEXT_REASON_2_TITLE','Doeleinden regel 2');
define('MODULE_PAYMENT_PN_SOFORTUEBERWEISUNG_TEXT_REASON_2_DESC', 'In de doeleinden (max 27 karakters) worden de volgende tijdelijke aanduidingen vervangen:<br /> {{order_id}}<br />{{order_date}}<br />{{customer_id}}<br />{{customer_name}}<br />{{customer_company}}<br />{{customer_email}}');
define('MODULE_PAYMENT_PN_SOFORTUEBERWEISUNG_IMAGE_TITLE','Betalings selectie afbeelding / tekst');
define('MODULE_PAYMENT_PN_SOFORTUEBERWEISUNG_IMAGE_DESC','Getoonde afbeelding / tekst in de selectie van de betaling opties');

define('MODULE_PAYMENT_PN_SOFORTUEBERWEISUNG_TEXT_ERROR_HEADING', 'De volgende fout is gemeld door DIRECTebanking.com tijdens het verwerkingsproces:');
define('MODULE_PAYMENT_PN_SOFORTUEBERWEISUNG_TEXT_ERROR_MESSAGE', 'Betaling via DIRECTebanking.com is helaas niet mogelijk of is geannuleerd door de klant. Selecteer een andere betaalmethode.');
?>
