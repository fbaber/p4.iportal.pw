
<form id="form" method='POST' action='/currency/p_add'>
	<br>
	<div class="content" style="height:500px">
	<h2>Easy currency converter for major currencies</h2>
	<br><br>
	<input type="hidden" name="exchange_value" value="1">
	Currency Value:
    <input type='number' id='value' name="value" maxlength="10" size="10" placeholder="numeric value only"style="margin-right: 50px;" required>
	Convert from: 
	<select id="currency1" name="currency1" autofocus>
	<option title="US Dollar $" value="USD">USD</option>
	<option title="EU Euro €" value="EUR">EUR</option>
	<option title="British Pound £" value="GBP">GBP</option>
	<option title="Canadian Dollar $" value="CAD">CAD</option>
	<option title="Australian Dollar $" value="AUD">AUD</option>
	<option title="Japanese Yen ¥" value="JPY">JPY</option>
	<option title="Swiss Frank S$" value="CHF">CHF</option>
	<option title="Sweden Krona kr" value="SEK">SEK</option>
	</select>
	<br><br>
	<div id="value_msg" style="color:#FF0040; font-family: "Arial";"></div>
	<br><br>
	Convert to:
	<select id="currency2" name="currency2" autofocus>
	<option title="EU Euro €" value="EUR">EUR</option>
	<option title="British Pound £" value="GBP">GBP</option>
	<option title="Canadian Dollar $" value="CAD">CAD</option>
	<option title="Australian Dollar $" value="AUD">AUD</option>
	<option title="Japanese Yen ¥" value="JPY">JPY</option>
	<option title="Swiss Frank S$" value="CHF">CHF</option>
	<option title="Sweden Krona kr" value="SEK">SEK</option>
	<option title="US Dollar $" value="USD">USD</option>
	</select>
	<br><br><br>
<!--	<button id="button" > Calculate </button> -->
	<input type="submit" id="button" class="btn btn-primary" value=" Calculate with the current exchange rates ">

</form>
</div>