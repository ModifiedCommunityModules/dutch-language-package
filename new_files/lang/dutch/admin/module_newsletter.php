<?php
/* --------------------------------------------------------------
  $Id: module_newsletter.php 2515 2011-12-12 16:15:44Z dokuman $

  modified eCommerce Shopsoftware
  http://www.modified-shop.org

  Copyright (c) 2009 - 2013 [www.modified-shop.org]
  --------------------------------------------------------------
  based on:
  (c) 2006 xt:Commerce

  Released under the GNU General Public License
  --------------------------------------------------------------*/

  define('HEADING_TITLE','Nieuwsbrief');
  define('TITLE_CUSTOMERS','Klanten Groep');
  define('TITLE_STK','Geabonneerd');
  define('TEXT_TITLE','Onderwerp:');
  define('TEXT_TO','Aan...: ');
  define('TEXT_CC','Cc...: ');
  define('TEXT_BODY','Inhoud: ');
  define('TITLE_NOT_SEND','Titel');
  define('TITLE_ACTION','Actie');
  define('TEXT_EDIT','Bewerken');
  define('TEXT_DELETE','Verwijderen');
  define('TEXT_SEND','Verstuur');
  define('CONFIRM_DELETE','Weet u het zeker?');
  define('TITLE_SEND','Verstuurd');
  define('TEXT_NEWSLETTER_ONLY','Ook aan groepsleden welke geen nieuwsbriefabonnement hebben');
  define('TEXT_USERS',' Abonnees van ');
  define('TEXT_CUSTOMERS',' Klanten )</i>');
  define('TITLE_DATE','Datum');
  define('TEXT_SEND_TO','Ontvanger:');
  define('TEXT_PREVIEW','<b>Voorbeeld:</b>');
  define('TEXT_REMOVE_LINK', 'Nieuwsbrief afmelden');

// BOF - DokuMan - 2011-12-12 - Texts for Newsletter E-Mail send status
  define('INFO_NEWSLETTER_SEND', '%d nieuwsbrieven verstuurd');
  define('INFO_NEWSLETTER_LEFT', '%d nieuwsbrieven over');
// EOF - DokuMan - 2011-12-12 - Texts for Newsletter E-Mail send status
  define('TEXT_NEWSLETTER_INFO', '<strong>ATTENTIE:</strong> Voor het verzenden van nieuwsbrieven wordt het gebruik van externe programma\'s aanbevolen!<br /><br />Als de Nieuwsbrief Shop module wordt gebruikt, moet u uw provider vragen hoeveel e-mails in een bepaalde periode mogen worden verzonden.<br />Veel providers hebben beperkingen, of verzenden is alleen toegestaan via speciale e-mail servers.<br /><br />Standaard is de handtekening al bij de nieuwsbrief gevoegd. Wenn Sie die Signatur jedoch anders formatiert &uuml;ber den Editor einfugen mochten, dann fugen Sie bitte an das Ende des Newsletters den Code [NOSIGNATUR] (inkl. eckiger Klammern) ein. U kunt ook de plaatshouder voor handtekeningen [SIGNATUR] (incl. vierkante haakjes) gebruiken en deze op de gewenste plaats zetten. Voor onze standaard templates tpl_modified &amp; tpl_modified_responsive wordt aanbevolen om de inhoud van de nieuwsbrief in de broncode-weergave in een DIV met een breedte van 700px te plaatsen, zodat de nieuwsbrief en de handtekening zichtbaar zijn:<br /><pre style="border: #999999 dotted; border-width:1px; background-color:#F1F1F1; color:#000000; padding:10px;"><code>&lt;div style="width:700px;margin: 0px auto;"&gt;...&lt;/div&gt;</code></pre>');
  define('TEXT_INFO_SENDING', 'Even geduld, de nieuwsbrief wordt verzonden. Dit kan enige tijd duren.');

  define('TEXT_NEWSLETTER_INFO', '<strong>ATTENTIE:</strong> Voor het versturen van nieuwsbrieven wordt het gebruik van externe toepassingen aangeraden!<br /><br />Indien het Newsletter Shop Module gebruikt wordt, is het raadzaam de provider te vragen hoeveel emails in een bepaalde tijd verstuurd kunnen worden.<br />Bij veel providers zijn er beperkingen of is het versturen alleen via speciale email-servers toegestaan.');

?>