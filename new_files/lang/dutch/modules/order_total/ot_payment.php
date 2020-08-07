<?php
/* -----------------------------------------------------------------------------------------
   $Id: ot_payment.php 12344 2019-10-30 11:14:09Z Tomcraft $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   -----------------------------------------------------------------------------------------
   based on:
   (C) 2007 Estelco - Ebusiness & more - http://www.estelco.de
   (C) 2004 IT eSolutions Andreas Zimmermann - http://www.it-esolutions.de

   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/

define('MODULE_ORDER_TOTAL_PAYMENT_HELP_LINK', ' <a onclick="window.open(\'popup_help.php?type=order_total&modul=ot_payment&lng=dutch\', \'Help\', \'scrollbars=yes,resizable=yes,menubar=yes,width=800,height=600\'); return false" target="_blank" href="popup_help.php?type=order_total&modul=ot_payment&lng=dutch"><b>[HELP]</b></a>');
define('MODULE_ORDER_TOTAL_PAYMENT_HELP_TEXT', '<h2>Korting en toeslag op betaalmethoden</h2>
Als er meer kortingsniveaus mogelijk zijn (standaard zijn <b>3</b>), moet de waarde van de variabele $num (taalbestanden) of $this-&gt;num (modulebestand) in alle bestanden worden gewijzigd in de gewenste waarde voor de installatie.
<hr>
<h3>Velden met kortingsschaal</h3>
<p class="red">Let op: het afleveradres is bepalend voor de landcodes. Indien een korting of toeslag voor alle landen geldt, moet ofwel 00 als code worden gebruikt, ofwel moet de landencode volledig worden weggelaten (inclusief &quot;|&quot;)!</p>
<h4>Gebruik de volgende notatie voor kortingen:</h4>
<pre>   <span class="blue">DE</span>|<span class="green">100</span>:<span class="red">4</span>,<span class="green">200</span>:<span class="red">5</span></pre>
<p>betekenis:</p>
<p>Voor klanten van <span class="blue">Duitsland</span> zal komen van <span class="green">100&euro;</span> een korting van <span class="red">4%</span>, van <span class="green">200&euro;</span> een korting van <span class="red">5%</span> Ik denk het wel.</p>
<pre>   <span class="green">100</span>:<span class="red">2</span>,<span class="green">200</span>:<span class="red">3</span></pre>
<p>Dat betekent:</p>
<p>Voor klanten uit alle landen van <span class="green">100&euro;</span> een korting van <span class="red">2%</span>, van <span class="green">200&euro;</span> een korting van <span class="red">3%</span> Ik denk het wel.</p>
<h4>Gebruik de volgende notatie voor toeslagen:</h4>
<pre>   <span class="blue">DE</span>|<span class="green">100</span>:<span class="red">-3</span></pre>
<p>Dat betekent:</p>
<p>Voor klanten van <span class="blue">Duitsland</span> zal komen van <span class="green">100&euro;</span> een premie van <span class="red">3%</span> berekend.</p>
<h4>Voorbeeld voor Paypal</h4>
1. Kortingsschaal
<pre>   <span class="blue">DE</span>|<span class="green">0</span>:<span class="red">-1.9</span>&amp;<span class="lila">-0.35</span></pre>
2. Kortingsschaal
<pre>   <span class="blue">00</span>|<span class="green">0</span>:<span class="red">-3.4</span>&amp;<span class="lila">-0.35</span></pre>
<p>Dat betekent:</p>
<p>Voor klanten van <span class="blue">Duitsland</span> zal komen van <span class="green">0&euro;</span> (dus altijd) een premie van <span class="red">1,9%</span> plus <span class="lila">0,35&euro;</span> berekend.</p>
<p>Voor klanten van <span class="blue">alle andere landen (00=alle)</span> zal komen van <span class="green">0&euro;</span> een premie van <span class="red">3,4%</span> plus <span class="lila">0,35&euro;</span> berekend.</p>
<p>Belangrijk is de volgorde van de vermeldingen (alle andere landen altijd als laatste) en dat "meervoudige berekening" is ingesteld op "false", anders worden beide toeslagen berekend.</p>.
<h4>Exemplaar voor vaste bedragen</h4>
<pre>   <span class="green">0</span>:<span class="red">0</span>&amp;<span class="lila">-2</span></pre>
<p>Dat betekent:</p>
<p>Voor klanten uit alle landen van <span class="green">0&euro;</span> (dus altijd) een premie van <span class="red">0%</span> (dus geen procentuele toeslag) plus <span class="lila">2,00&euro;</span> (de vaste opslag).</p>
<hr>
<h3>Velden met betrekking tot de betalingswijze</h3>
<p>Voer de <b>interne code</b> van de betalingsmethode in de velden in, bijvoorbeeld <b>geldorder</b> voor vooruitbetaling of <b>cod</b> voor rembourszendingen. Scheid verschillende betalingstypes met komma\'s</p> Doelmodules -&gt; Betalingsopties -&gt; Kolom &quot;Naam van de module (voor intern gebruik)&quot;.<br/><br/>
<hr>
<h3>Weergave voor betalingsmethode in het bestelproces</h3>
Als u wilt dat de bijbehorende korting wordt weergegeven tijdens de betalingsselectie in het bestelproces, dan is de optie &quot;Weergave in de betaalmethoden&quot; op &quot;true&quot; plaats. <br/><br/>
Verder kunt u gebruik maken van de optie &quot;Weergave van het type in het bestelproces tijdens de selectie van de betaling&quot; om het type display in te stellen:
<p> -- standaard: percentage of bedrag, afhankelijk van de vermeldingen voor de kortingsschaal</p>
<p> -- Prijs: Het werkelijke bedrag wordt altijd weergegeven</p>'
);

define('MODULE_ORDER_TOTAL_PAYMENT_TITLE', 'Korting &amp; toeslag op betalingsmethoden');
define('MODULE_ORDER_TOTAL_PAYMENT_DESCRIPTION', 'Korting en toeslag op betaalmethoden'.MODULE_ORDER_TOTAL_PAYMENT_HELP_LINK);

define('MODULE_ORDER_TOTAL_PAYMENT_STATUS_TITLE', 'Toon korting');
define('MODULE_ORDER_TOTAL_PAYMENT_STATUS_DESC', 'Wilt u de betalingsmethodekorting activeren?');

define('MODULE_ORDER_TOTAL_PAYMENT_SORT_ORDER_TITLE', '<hr>Sorteervolgorde');
define('MODULE_ORDER_TOTAL_PAYMENT_SORT_ORDER_DESC', 'Weergavevolgorde');

if (defined('MODULE_ORDER_TOTAL_PAYMENT_NUMBER')) {
  for ($j=1; $j<=MODULE_ORDER_TOTAL_PAYMENT_NUMBER; $j++) {
    define('MODULE_ORDER_TOTAL_PAYMENT_PERCENTAGE' . $j . '_TITLE', '<hr>'.$j . '. Kortingsschaal');
    define('MODULE_ORDER_TOTAL_PAYMENT_PERCENTAGE' . $j . '_DESC', 'Korting (minimumwaarde:procent)');
    define('MODULE_ORDER_TOTAL_PAYMENT_TYPE' . $j . '_TITLE', $j . '. Betalingswijze');
    define('MODULE_ORDER_TOTAL_PAYMENT_TYPE' . $j . '_DESC', 'Betaalmethoden waarop korting moet worden gegeven');
  }
}

define('MODULE_ORDER_TOTAL_PAYMENT_INC_SHIPPING_TITLE', '<hr>Inclusief verzendkosten');
define('MODULE_ORDER_TOTAL_PAYMENT_INC_SHIPPING_DESC', 'Verzendkosten worden verdisconteerd');

define('MODULE_ORDER_TOTAL_PAYMENT_INC_TAX_TITLE', '<hr>Inclusief BTW');
define('MODULE_ORDER_TOTAL_PAYMENT_INC_TAX_DESC', 'BTW is verdisconteerd');

define('MODULE_ORDER_TOTAL_PAYMENT_CALC_TAX_TITLE', '<hr>BTW-berekening');
define('MODULE_ORDER_TOTAL_PAYMENT_CALC_TAX_DESC', 'het BTW-totaal herberekenen');

define('MODULE_ORDER_TOTAL_PAYMENT_ALLOWED_TITLE', '<hr>Toegestane zones');
define('MODULE_ORDER_TOTAL_PAYMENT_ALLOWED_DESC' , 'Voer <b>individueel</b> de zones in die voor deze module moeten worden toegestaan. (bijv. AT,DE (indien leeg, zijn alle zones toegestaan))');

define('MODULE_ORDER_TOTAL_PAYMENT_DISCOUNT', 'Korting');
define('MODULE_ORDER_TOTAL_PAYMENT_FEE', 'Supplement');

define('MODULE_ORDER_TOTAL_PAYMENT_TAX_CLASS_TITLE','<hr>Belastingklasse');
define('MODULE_ORDER_TOTAL_PAYMENT_TAX_CLASS_DESC','De belastingklasse is niet belangrijk en wordt alleen gebruikt om een foutmelding te vermijden.');

define('MODULE_ORDER_TOTAL_PAYMENT_BREAK_TITLE','<hr>Meervoudige berekening');
define('MODULE_ORDER_TOTAL_PAYMENT_BREAK_DESC','Moeten er meerdere berekeningen mogelijk zijn? Zo niet, dan wordt de berekening geannuleerd na de eerste passende korting.');

define('MODULE_ORDER_TOTAL_PAYMENT_SHOW_IN_CHECKOUT_PAYMENT_TITLE', '<hr>Weergave in de betaalmethoden');
define('MODULE_ORDER_TOTAL_PAYMENT_SHOW_IN_CHECKOUT_PAYMENT_DESC', 'Weergave in het bestelproces tijdens de selectie van de betaling');

define('MODULE_ORDER_TOTAL_PAYMENT_SHOW_TYPE_TITLE', '<hr>Weergave type voor de betaalmethoden');
define('MODULE_ORDER_TOTAL_PAYMENT_SHOW_TYPE_DESC', 'Weergave van het type in het bestelproces tijdens de selectie van de betaling <br />-- standaard: percentage of bedrag, afhankelijk van de vermeldingen voor de kortingsschaal<br />-- Prijs: Het werkelijke bedrag wordt altijd weergegeven');

define('MODULE_ORDER_TOTAL_PAYMENT_NUMBER_TITLE', 'Aantal betaalmethoden');
define('MODULE_ORDER_TOTAL_PAYMENT_NUMBER_DESC', 'Aantal korting &amp; toeslag op betalingsmethoden');
?>