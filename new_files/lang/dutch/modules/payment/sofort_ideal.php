<?php
/* -----------------------------------------------------------------------------------------
   $Id: sofort_ideal.php 12398 2019-11-08 13:12:43Z Tomcraft $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

$sofort_code = 'SOFORT_IDEAL';

define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_TITLE', 'iDEAL');
define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION', '<b>iDEAL</b><br />Zodra de klant deze betaalmethode en zijn bank heeft gekozen, wordt hij door SOFORT GmbH doorgestuurd naar zijn bank. Daar doet hij zijn betaling en wordt dan teruggestuurd naar het winkelsysteem. Na een succesvolle betalingsbevestiging vindt een zogenaamde callback naar het shopsysteem plaats door SOFORT GmbH, die de betalingsstatus van de bestelling dienovereenkomstig wijzigt.<br />Verstrekken door SOFORT GmbH');
define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_INFO', 'iDEAL.nl - Online bankoverschrijvingen voor e-commerce in Nederland. Om met iDEAL te kunnen betalen heeft u een rekening nodig bij een van de bovengenoemde banken. U maakt de overschrijving rechtstreeks met uw bank. Diensten/goederen worden ONMIDDELLIJK geleverd of verzonden wanneer ze beschikbaar zijn!');

// checkout
define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGE', '
  <table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td valign="bottom">
	      <a onclick="javascript:window.open(\'http://www.ideal.nl\',\'Information\',\'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1020, height=900\');" style="float:left; width:auto;">{{image}}</a>
	    </td>
	  </tr>
	  <tr>
	    <td class="main">{{text}}</td>
	  </tr>
	</table>');
define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_IMAGEALT', 'iDeal');
define('MODULE_PAYMENT_'.$sofort_code.'_TEXT_DESCRIPTION_CHECKOUT_PAYMENT_TEXT', '
  <ul>
    <li>Online bankoverschrijvingen voor elektronische handel in Nederland</li>
    <li>Om met iDEAL te betalen heeft u een rekening nodig bij een van de bovengenoemde banken.</li>
    <li>U maakt de overschrijving rechtstreeks bij uw bank</li>
    <li>Diensten/goederen worden ONMIDDELLIJK geleverd of verzonden wanneer ze beschikbaar zijn.</li>
  </ul>');

define('MODULE_PAYMENT_'.$sofort_code.'_SELECTBOX', 'Selecteer uw bank');

// admin
define('MODULE_PAYMENT_'.$sofort_code.'_STATUS_TITLE', 'Activeer de iDeal-module');
define('MODULE_PAYMENT_'.$sofort_code.'_STATUS_DESC', 'Wilt u betalingen via iDeal accepteren?');

include(DIR_FS_CATALOG.'lang/dutch/modules/payment/sofort_payment.php');

?>