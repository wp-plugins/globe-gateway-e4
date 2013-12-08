<?php
/*
Plugin Name: Global Gateway e4 | Hosted Payment Page |
Plugin URI: http://www.djkidnyce.com/plug-ins/
Description: This is for Global Gateway e4 Hosted Payment Page. Global Gateway Made easier for WordPress users to set-up a pay button on their website.
Author: Donnell Council
Version: 0.0.6
Author URI: http://www.djkidnyce.com
*/
add_action('admin_menu', 'e4hpp_admin_actions');
function e4hpp_admin_actions() 
{
add_options_page('Global Gateway e4 Hosted Payment Page', 'Global Gateway e4 Hosted Payment Page', 'manage_options', 'global-gateway-e4', 'e4hpp_admin');
}
function e4hpp_admin()
{
$dir = plugin_dir_path( __FILE__ );
$the_file = 'xlogin_transkey.php';
$filename = $dir. $the_file;
if (file_exists($filename)) 
{
include($dir. $the_file);
}
?>
<script type="text/javascript">
function wantedchecked() {
    if (document.getElementById('recurring_b_f_c').checked) {
        document.getElementById('recurring_billing_fields_checked').style.visibility = 'visible';	
    }
    else document.getElementById('recurring_billing_fields_checked').style.visibility = 'hidden';

	if (document.getElementById('header').checked) {
			document.getElementById('header_checked').style.visibility = 'visible';
	}
	else document.getElementById('header_checked').style.visibility = 'hidden';
	
	if (document.getElementById('back_color').checked) {
        document.getElementById('back_color_checked').style.visibility = 'visible';	
    }
    else document.getElementById('back_color_checked').style.visibility = 'hidden';
	
	if (document.getElementById('merchant_email_checked').checked) {
        document.getElementById('merchant_email').style.visibility = 'visible';	
    }
    else document.getElementById('merchant_email').style.visibility = 'hidden';
	}
</script>
<script type="text/javascript" src="<?php echo plugins_url('globe-gateway-e4/' .'js/jscolor/jscolor.js' ); ?>"></script>
	<div class="wrap">
	<h3>Global Gateway e4 Hosted Payment Page</h3>
<form name='verify_login_transkey' method='POST' action='<?php echo $_SERVER['REQUEST_URI']; ?>'>
<br>X Login: <input name="x_login_raw" value="<?php echo $x_login; ?>" size="30" autocomplete="off" required autofocus/><br/>
<br>Transaction Key: <input name="transaction_key_raw" value="<?php echo $transaction_key; ?>" size="25" autocomplete="off" required/><br/>
<input type='checkbox' name='attributes[]' value='2'> Company</input><br/>
<input type='checkbox' name='attributes[]' value='1'> First Name and Last Name</input><br/>
<input type='checkbox' name='attributes[]' value='3'> Billing Address Fields</input><br/>
<input type='checkbox' name='attributes[]' value='4'> Shipping Address Fields</input><br/>
<!-- 
<input type='checkbox' name='attributes[]' value='5'> Level 3 Fields</input><br />
-->
<input type='checkbox' name='attributes[]' value='7'> Country</input><br/>
<input type='checkbox' name='attributes[]' value='8'> Email</input><br/>
<input type='checkbox' name='attributes[]' value='9'> Invoice Number</input><br/>
<input type='checkbox' name='attributes[]' value='10'> PO Number</input><br/>
<input type='checkbox' name='attributes[]' value='11'> Reference 3</input><br/>
<input type='checkbox' name='attributes[]' value='20' onclick='javascript:wantedchecked();' id='header'> Show Your Logo On The Payment Page</input><br/>
<div id="header_checked" style="visibility:hidden">
Logo URL: <input type='text' id='x_logo_url' name='x_logo_url_raw' value='<?php echo $x_logo_url; ?>' size="100"/></div>

<input type='checkbox' name='attributes[]' value='15' onclick='javascript:wantedchecked();' id='recurring_b_f_c'> Recurring Billing Fields</input><br/>
<div id="recurring_billing_fields_checked" style="visibility:hidden">
Recurring Billing ID: <input type='text' id='x_recurring_billing_id' name='x_recurring_billing_id_raw' value='<?php echo $x_recurring_billing_id; ?>' size="30"/></div>

<input type='checkbox' name='attributes[]' value='21' onclick='javascript:wantedchecked();' id='back_color'> Background Color For Payment Page</input><br/>
<div id="back_color_checked" style="visibility:hidden">
Pick Your Background Color: <input type='text' id='x_color_background' name='x_color_background' value='<?php echo $x_color_background; ?>' class="color" size="7" readonly/></div>

<input type='checkbox' name='attributes[]' value='6' onclick='javascript:wantedchecked();' id='merchant_email_checked'> Merchant E-Mail</input><br/>
<div id="merchant_email" style="visibility:hidden">
E-Mail: <input type='text' id='x_merchant_email' name='x_merchant_email_raw' value='<?php echo $x_merchant_email; ?>' size="50"/>
<h5>Copy of the customer confirmation email should be sent to.</h5>
</div>

Live or Demo
<select name="live_demo" id="live_demo">
<option value="https://globalgatewaye4.firstdata.com/payment" selected>Live</option>
<option value="https://demo.globalgatewaye4.firstdata.com/payment">Demo</option>
</select></br>
Transaction Type
<select name="x_type" id="x_type">
<option value="AUTH_CAPTURE" selected>Purchase/Sale</option>
<option value="AUTH_ONLY">Pre-Authorization</option>
</select></br>
Currency
<select name="currency_code" id="currency_code">
				<option value="ADF">	Andorran Franc    (ADF)</option>
				<option value="ADP">	Andorran Peseta    (ADP)</option>
				<option value="AED">	Utd. Arab Emir. Dirham    (AED)</option>
				<option value="AFA">	Afghanistan Afghani    (AFA)</option>
				<option value="ALL">	Albanian Lek    (ALL)</option>
				<option value="ANG">	NL Antillian Guilder    (ANG)</option>
				<option value="AON">	Angolan New Kwanza    (AON)</option>
				<option value="ARS">	Argentine Peso    (ARS)</option>
				<option value="ATS">	Austrian Schilling    (ATS)</option>
				<option value="AUD">	Australian Dollar    (AUD)</option>
				<option value="AWG">	Aruban Florin    (AWG)</option>
				<option value="BBD">	Barbados Dollar    (BBD)</option>
				<option value="BDT">	Bangladeshi Taka    (BDT)</option>
				<option value="BEF">	Belgian Franc    (BEF)</option>
				<option value="BGL">	Bulgarian Lev    (BGL)</option>
				<option value="BHD">	Bahraini Dinar    (BHD)</option>
				<option value="BIF">	Burundi Franc    (BIF)</option>
				<option value="BMD">	Bermudian Dollar    (BMD)</option>
				<option value="BND">	Brunei Dollar    (BND)</option>
				<option value="BOB">	Bolivian Boliviano    (BOB)</option>
				<option value="BRL">	Brazilian Real    (BRL)</option>
				<option value="BSD">	Bahamanian Dollar    (BSD)</option>
				<option value="BTN">	Bhutan Ngultrum    (BTN)</option>
				<option value="BWP">	Botswana Pula    (BWP)</option>
				<option value="BZD">	Belize Dollar    (BZD)</option>
				<option value="CAD">	Canadian Dollar    (CAD)</option>
				<option value="CHF">	Swiss Franc    (CHF)</option>
				<option value="CLP">	Chilean Peso    (CLP)</option>
				<option value="CNY">	Chinese Yuan Renminbi    (CNY)</option>
				<option value="COP">	Colombian Peso    (COP)</option>
				<option value="CRC">	Costa Rican Colon    (CRC)</option>
				<option value="CSK">	Czech Koruna    (CSK)</option>
				<option value="CVE">	Cape Verde Escudo    (CVE)</option>
				<option value="CYP">	Cyprus Pound    (CYP)</option>
				<option value="DEM">	German Mark    (DEM)</option>
				<option value="DJF">	Djibouti Franc    (DJF)</option>
				<option value="DKK">	Danish Krone    (DKK)</option>
				<option value="DOP">	Dominican Peso    (DOP)</option>
				<option value="DZD">	Algerian Dinar    (DZD)</option>
				<option value="ECS">	Ecuador Sucre    (ECS)</option>
				<option value="EEK">	Estonian Kroon    (EEK)</option>
				<option value="EGP">	Egyptian Pound    EGP)</option>
				<option value="ESP">	Spanish Peseta    (ESP)</option>
				<option value="ETB">	Ethiopian Birr    (ETB)</option>
				<option value="EUR">	Euro    (EUR)</option>
				<option value="FIM">	Finnish Markka    (FIM)</option>
				<option value="FJD">	Fiji Dollar    (FJD)</option>
				<option value="FKP">	Falkland Islands Pound    (FKP)</option>
				<option value="FRF">	French Franc    (FRF)</option>
				<option value="GBP">	British Pound    (GBP)</option>
				<option value="GHC">	Ghanaian Cedi    (GHC)</option>
				<option value="GIP">	Gibraltar Pound    (GIP)</option>
				<option value="GMD">	Gambian Dalasi    (GMD)</option>
				<option value="GNF">	Guinea Franc    (GNF)</option>
				<option value="GRD">	Greek Drachma    (GRD)</option>
				<option value="GTQ">	Guatemalan Quetzal    (GTQ)</option>
				<option value="GYD">	Guyanan Dollar    (GYD)</option>
				<option value="HKD">	Hong Kong Dollar    (HKD)</option>
				<option value="HNL">	Honduran Lempira    (HNL)</option>
				<option value="HRK">	Croatian Kuna    (HRK)</option>
				<option value="HTG">	Haitian Gourde    (HTG)</option>
				<option value="HUF">	Hungarian Forint    (HUF)</option>
				<option value="IDR">	Indonesian Rupiah    (IDR)</option>
				<option value="IEP">	Irish Punt    (IEP)</option>
				<option value="ILS">	Israeli New Shekel    (ILS)</option>
				<option value="INR">	Indian Rupee    (INR)</option>
				<option value="ISK">	Iceland Krona    (ISK)</option>
				<option value="ITL">	Italian Lira    (ITL)</option>
				<option value="JMD">	Jamaican Dollar    (JMD)</option>
				<option value="JOD">	Jordanian Dinar    (JOD)</option>
				<option value="JPY">	Japanese Yen    (JPY)</option>
				<option value="KES">	Kenyan Shilling    (KES)</option>
				<option value="KHR">	Cambodian Riel    (KHR)</option>
				<option value="KMF">	Comoros Franc    (KMF)</option>
				<option value="KRW">	South-Korean Won    (KRW)</option>
				<option value="KWD">	Kuwaiti Dinar    (KWD)</option>
				<option value="KYD">	Cayman Islands Dollar    (KYD)</option>
				<option value="KZT">	Kazakhstan Tenge    (KZT)</option>
				<option value="LAK">	Lao Kip    (LAK)</option>
				<option value="LKR">	Sri Lanka Rupee    (LKR)</option>
				<option value="LRD">	Liberian Dollar    (LRD)</option>
				<option value="LSL">	Lesotho Loti    (LSL)</option>
				<option value="LTL">	Lithuanian Litas    (LTL)</option>
				<option value="LUF">	Luxembourg Franc    (LUF)</option>
				<option value="LVL">	Latvian Lats    (LVL)</option>
				<option value="MAD">	Moroccan Dirham    (MAD)</option>
				<option value="MGF">	Malagasy Franc    (MGF)</option>
				<option value="MMK">	Myanmar Kyat    (MMK)</option>
				<option value="MNT">	Mongolian Tugrik    (MNT)</option>
				<option value="MOP">	Macau Pataca    (MOP)</option>
				<option value="MRO">	Mauritanian Ouguiya    (MRO)</option>
				<option value="MTL">	Maltese Lira    (MTL)</option>
				<option value="MUR">	Mauritius Rupee    (MUR)</option>
				<option value="MVR">	Maldive Rufiyaa    (MVR)</option>
				<option value="MWK">	Malawi Kwacha    (MWK)</option>
				<option value="MXN">	Mexican Peso    (MXN)</option>
				<option value="MYR">	Malaysian Ringgit    (MYR)</option>
				<option value="MZM">	Mozambique Metical    (MZM)</option>
				<option value="NAD">	Namibia Dollar    (NAD)</option>
				<option value="NGN">	Nigerian Naira    (NGN)</option>
				<option value="NIO">	Nicaraguan Cordoba Oro    (NIO)</option>
				<option value="NLG">	Dutch Guilder    (NLG)</option>
				<option value="NOK">	Norwegian Kroner    (NOK)</option>
				<option value="NPR">	Nepalese Rupee    (NPR)</option>
				<option value="NZD">	New Zealand Dollar    (NZD)</option>
				<option value="OMR">	Omani Rial    (OMR)</option>
				<option value="PAB">	Panamanian Balboa    (PAB)</option>
				<option value="PEN">	Peruvian Nuevo Sol    (PEN)</option>
				<option value="PGK">	Papua New Guinea Kina    (PGK)</option>
				<option value="PHP">	Philippine Peso    (PHP)</option>
				<option value="PKR">	Pakistan Rupee    (PKR)</option>
				<option value="PLN">	Polish Zloty    (PLN)</option>
				<option value="PTE">	Portuguese Escudo    (PTE)</option>
				<option value="PYG">	Paraguay Guarani    (PYG)</option>
				<option value="QAR">	Qatari Rial    (QAR)</option>
				<option value="ROL">	Romanian Leu    (ROL)</option>
				<option value="RUB">	Russian Rouble    (RUB)</option>
				<option value="SAR">	Saudi Riyal    (SAR)</option>
				<option value="SBD">	Solomon Islands Dollar    (SBD)</option>
				<option value="SCR">	Seychelles Rupee    (SCR)</option>
				<option value="SEK">	Swedish Krona    (SEK)</option>
				<option value="SGD">	Singapore Dollar    (SGD)</option>
				<option value="SHP">	St. Helena Pound    (SHP)</option>
				<option value="SIT">	Slovenian Tolar    (SIT)</option>
				<option value="SKK">	Slovak Koruna    (SKK)</option>
				<option value="SLL">	Sierra Leone Leone    (SLL)</option>
				<option value="SRG">	Suriname Guilder    (SRG)</option>
				<option value="STD">	Sao Tome/Principe Dobra    (STD)</option>
				<option value="SVC">	El Salvador Colon    (SVC)</option>
				<option value="SZL">	Swaziland Lilangeni    (SZL)</option>
				<option value="THB">	Thai Baht    (THB)</option>
				<option value="TND">	Tunisian Dinar    (TND)</option>
				<option value="TOP">	Tonga Paanga    (TOP)</option>
				<option value="TRL">	Turkish Lira    (TRL)</option>
				<option value="TTD">	Trinidad/Tobago Dollar    (TTD)</option>
				<option value="TWD">	Taiwan Dollar    (TWD)</option>
				<option value="TZS">	Tanzanian Shilling    (TZS)</option>
				<option value="UAH">	Ukraine Hryvnia    (UAH)</option>
				<option value="UGS">	Uganda Shilling    (UGS)</option>
				<option value="USD" selected>	U.S. Dollar (USD)</option>
				<option value="UYP">	Uruguayan Peso    (UYP)</option>
				<option value="VEB">	Venezuelan Bolivar    (VEB)</option>
				<option value="VND">	Vietnamese Dong    (VND)</option>
				<option value="VUV">	Vanuatu Vatu    (VUV)</option>
				<option value="WST">	Samoan Tala    (WST)</option>
				<option value="XAF">	CFA Franc BEAC    (XAF)</option>
				<option value="XAG">	Silver (oz.)    (XAG)</option>
				<option value="XAU">	Gold (oz.)    (XAU)</option>
				<option value="XEU">	ECU    (XEU)</option>
				<option value="XOF">	CFA Franc BCEAO    (XOF)</option>
				<option value="XPD">	Palladium (oz.)    (XPD)</option>
				<option value="XPT">	Platinum (oz.)    (XPT)</option>
				<option value="YUN">	Yugoslav Dinar    (YUN)</option>
				<option value="ZAR">	South African Rand    (ZAR)</option>
				<option value="ZMK">	Zambian Kwacha    (ZMK)</option>
</select><h5>Please Note:The Currency Code MUST agree with the currency of the payment page.</h5>
<h5>Required Fields</h5>
<input type='checkbox' name='attributes[]' value='12' checked onclick='return false'> Amount</input><br/>
<input type='checkbox' name='attributes[]' value='16' checked onclick='return false'> FP Sequence</input><br/>
<input type='checkbox' name='attributes[]' value='17' checked onclick='return false'> Timestamp</input><br/>
<input type='checkbox' name='attributes[]' value='18' checked onclick='return false'> HMAC Data</input><br/>
<input type='checkbox' name='attributes[]' value='19' checked onclick='return false'> Hash</input><br/>

HMAC Calculation
<select name="hmac_calculation" id="hmac_calculation">
<option value="MD5" selected>MD5</option>
<option value="SHA1">SHA-1</option>
</select></br>
<input type='hidden' name='js_cal_css' value='<?php echo plugins_url('globe-gateway-e4/' .'js/calendar/tcal.css' );?>'>
<input type='hidden' name='js_cal_js' value='<?php echo plugins_url('globe-gateway-e4/' .'js/calendar/tcal.js' );?>'>
<input type='hidden' name='js_recurring' value='<?php echo plugins_url('globe-gateway-e4/' .'js/recurring/recurring.js' );?>'>
<input class='button-primary' type='submit' value='Generate Code' />
</form>
<h5 class="alignright" >Created By: Donnell Council | For Support : <a href="http://wordpress.org/support/plugin/globe-gateway-e4">Click Here </a></h5>
</div>

<?php
function get_code(){
		//get there selected checkboxes
		$code_wanted = $_POST['attributes'];
		$arrylen = count($code_wanted);
		
		if ($arrylen == 0){			//check if they didn't select anything and hit submit
			return "";
		}else{
		
			//set strings that will be used after the user checks the boxes
			
			$first_last = htmlspecialchars("<tr><td>First Name:</td><td><input type='text'name='x_first_name' required></td></tr>")."\n".htmlspecialchars("<tr><td>Last Name:</td><td><input type='text'name='x_last_name' required></td></tr>")."\n";
			$x_company = htmlspecialchars("<tr><td>Company:</td><td><input type='text'name='x_company' required></td></tr>")."\n";
			$x_address = htmlspecialchars("<th>Billing Address</th><th></th><tr><td>Billing Address:</td><td><input type='text'name='x_address' required></td></tr>").htmlspecialchars("<tr><td>City:</td><td><input type='text'name='x_city' required></td></tr>")."\n". 
																htmlspecialchars("<tr><td>State</td><td><select name='x_state' id='x_state'>
																<option value='..' selected='1'>
																<option value='AK'> AK </option>
																<option value='AL'> AL </option>
																<option value='AR'> AR </option>
																<option value='AZ'> AZ </option>
																<option value='CA'> CA </option>
																<option value='CO'> CO </option>
																<option value='CT'> CT </option>
																<option value='DC'> DC </option>
																<option value='DE'> DE </option>
																<option value='FL'> FL </option>
																<option value='GA'> GA </option>
																<option value='HI'> HI </option>
																<option value='IA'> IA </option>
																<option value='ID'> ID </option>
																<option value='IL'> IL </option>
																<option value='IN'> IN </option>
																<option value='KS'> KS </option>
																<option value='KY'> KY </option>
																<option value='LA'> LA </option>
																<option value='MA'> MA </option>
																<option value='MD'> MD </option>
																<option value='ME'> ME </option>
																<option value='MI'> MI </option>
																<option value='MN'> MN </option>
																<option value='MO'> MO </option>
																<option value='MS'> MS </option>
																<option value='MT'> MT </option>
																<option value='NC'> NC </option>
																<option value='ND'> ND </option>
																<option value='NE'> NE </option>
																<option value='NH'> NH </option>
																<option value='NJ'> NJ </option>
																<option value='NM'> NM </option>
																<option value='NV'> NV </option>
																<option value='NY'> NY </option>
																<option value='OH'> OH </option>
																<option value='OK'> OK </option>
																<option value='OR'> OR </option>
																<option value='PA'> PA </option>
																<option value='PR'> PR </option>
																<option value='RI'> RI </option>
																<option value='SC'> SC </option>
																<option value='SD'> SD </option>
																<option value='TN'> TN </option>
																<option value='TX'> TX </option>
																<option value='UT'> UT </option>
																<option value='VA'> VA </option>
																<option value='VI'> VI </option>
																<option value='VT'> VT </option>
																<option value='WA'> WA </option>
																<option value='WI'> WI </option>
																<option value='WV'> WV </option>
																<option value='WY'> WY </option>
																</select></tr></td>")."\n". 
																htmlspecialchars("<tr><td>Zip Code:</td><td><input type='text'name='x_zip' required></td></tr>")."\n";
			$x_ship_address =  htmlspecialchars("<th>Shipping Address </th><th></th><tr><td>Address:</td><td><input type='text'name='x_ship_to_address' required></td></tr>")."\n". htmlspecialchars("<tr><td>City:</td><td><input type='text'name='x_ship_to_city' required></td></tr>")."\n". 
																htmlspecialchars("<tr><td>State</td><td><select name='x_ship_to_state' id='x_ship_to_state'>
																<option value='..' selected='1'>
																<option value='AK'> AK </option>
																<option value='AL'> AL </option>
																<option value='AR'> AR </option>
																<option value='AZ'> AZ </option>
																<option value='CA'> CA </option>
																<option value='CO'> CO </option>
																<option value='CT'> CT </option>
																<option value='DC'> DC </option>
																<option value='DE'> DE </option>
																<option value='FL'> FL </option>
																<option value='GA'> GA </option>
																<option value='HI'> HI </option>
																<option value='IA'> IA </option>
																<option value='ID'> ID </option>
																<option value='IL'> IL </option>
																<option value='IN'> IN </option>
																<option value='KS'> KS </option>
																<option value='KY'> KY </option>
																<option value='LA'> LA </option>
																<option value='MA'> MA </option>
																<option value='MD'> MD </option>
																<option value='ME'> ME </option>
																<option value='MI'> MI </option>
																<option value='MN'> MN </option>
																<option value='MO'> MO </option>
																<option value='MS'> MS </option>
																<option value='MT'> MT </option>
																<option value='NC'> NC </option>
																<option value='ND'> ND </option>
																<option value='NE'> NE </option>
																<option value='NH'> NH </option>
																<option value='NJ'> NJ </option>
																<option value='NM'> NM </option>
																<option value='NV'> NV </option>
																<option value='NY'> NY </option>
																<option value='OH'> OH </option>
																<option value='OK'> OK </option>
																<option value='OR'> OR </option>
																<option value='PA'> PA </option>
																<option value='PR'> PR </option>
																<option value='RI'> RI </option>
																<option value='SC'> SC </option>
																<option value='SD'> SD </option>
																<option value='TN'> TN </option>
																<option value='TX'> TX </option>
																<option value='UT'> UT </option>
																<option value='VA'> VA </option>
																<option value='VI'> VI </option>
																<option value='VT'> VT </option>
																<option value='WA'> WA </option>
																<option value='WI'> WI </option>
																<option value='WV'> WV </option>
																<option value='WY'> WY </option>
																</select></td></tr>")."\n". 
																htmlspecialchars("<tr><td>Zip Code:</td><td><input type='text'name='x_ship_to_zip' required></td></tr>")."\n";
			$level_3_Fields = htmlspecialchars("<br>Tax Exempt<select name='x_tax_exempt' id='x_tax_exempt'>
																<option value='..' selected='1'>
																<option value='TRUE'> Yes </option>
																<option value='FALSE'> No </option>
																</select>")."\n".
																htmlspecialchars("<br>Tax  Amount:<input type='text' name='x_tax'>")."\n".
																htmlspecialchars("<br>Freight:<input type='text' name='x_freight'>")."\n".
																htmlspecialchars("<br>Duty:<input type='text' name='x_duty'>")."\n".
																htmlspecialchars("<br>Discount amount:<input type='text' name='discount_amount'>")."\n";
			$x_country = htmlspecialchars("<tr><td>Country:</td><td><input type='text' name='' required></td></tr>")."\n";
			$x_email = htmlspecialchars("<tr><td>E-Mail:</td><td><input type='text' name='x_email' required></td></tr>")."\n";
			$x_invoice_num = htmlspecialchars("<tr><td>Invoice Number:</td><td><input type='text' name='x_invoice_num' required></td></tr>")."\n";
			$x_po_num = htmlspecialchars("<tr><td>Po Number:</td><td><input type='text' name='x_po_num' required></td></tr>")."\n";
			$x_reference_3 = htmlspecialchars("<tr><td>Reference 3:</td><td><input type='text' name='x_reference_3' required></td></tr>")."\n";
			$x_amount = htmlspecialchars("<tr><td>Amount:</td><td><input type='text' name='x_amount' required></td></tr>")."\n";
			$js_cal_css =$_POST['js_cal_css'];
			$js_cal_js =$_POST['js_cal_js'];
			$js_recurring =$_POST['js_recurring'];
			$x_recurring_billing_fields = 
			htmlspecialchars("<script type='text/javascript' src=\"$js_cal_js\"></script>")."\n".
			htmlspecialchars("<link rel='stylesheet' type='text/css' href=\"$js_cal_css\"/>")."\n".
			htmlspecialchars("<th>Recurring Billing</th><th></th><tr><td>Recurring ?</td><td>
			<select name='recurring' id='recurring'>
			<option value='FALSE'>No</option>
			<option value='TRUE'>Yes</option></select>
			</td></tr>")."\n".
			htmlspecialchars("<tr><td>Start Date</td><td><input type='text' name='x_recurring_billing_start_date' class='tcal'></td></tr>")."\n".
			htmlspecialchars("<tr><td>End Date</td><td><input type='text' name='x_recurring_billing_end_date' class='tcal'></td></tr>")."\n".
			htmlspecialchars("<tr><td>Recurring Amount:</td><td><input type='text' name='x_recurring_billing_amount'></td></tr>")."\n";
			
			//strings for php codes
			$find_not_needed = [' '];
			$replace_all = ('');
			$x_login_raw = $_POST['x_login_raw'];
			$x_login = str_replace($find_not_needed,$replace_all,$x_login_raw);
			
			$transaction_key_raw = $_POST['transaction_key_raw'];
			$transaction_key = str_replace($find_not_needed,$replace_all,$transaction_key_raw);
			
			$x_recurring_billing_id_raw = $_POST['x_recurring_billing_id_raw'];
			$x_recurring_billing_id = str_replace($find_not_needed,$replace_all,$x_recurring_billing_id_raw);
			
			$x_currency_code =$_POST['currency_code'];
			$hmac_calculation =$_POST['hmac_calculation'];
			$live_demo =$_POST['live_demo'];
			$x_type =$_POST['x_type'];
			$time_stamp = time();
			// Confirm file and transaction key
			$confirm_file = 'confirm'.'.php';
			$my_file = plugins_url('globe-gateway-e4/') . $confirm_file;
			$xlogin_transkey = 'xlogin_transkey'.'.php';
			$xlogin_transkey_location = plugins_url('globe-gateway-e4/') . $xlogin_transkey;
			// Hosted payment page design
			$x_logo_url_raw =$_POST['x_logo_url_raw'];
			$x_logo_url = str_replace($find_not_needed,$replace_all,$x_logo_url_raw);
			$x_color_background =$_POST['x_color_background'];
			// E-Mail Setting Fields
			$x_merchant_email_raw =$_POST['x_merchant_email_raw'];
			$x_merchant_email = str_replace($find_not_needed,$replace_all,$x_merchant_email_raw);
			//$filename = uniqid('confirm', true) . '.php';
			
			$php_first_last = "\$x_first_name = \$_POST['x_first_name'];\n\$x_last_name = \$_POST['x_last_name']; \n".htmlspecialchars("echo ('<input type=\"hidden\" name=\"x_first_name\" value=\"' . \$x_first_name . '\">' );")."\n".htmlspecialchars("echo ('<input type=\"hidden\" name=\"x_last_name\" value=\"' . \$x_last_name . '\">' );")."\n";
			$php_x_company = "\$x_company = \$_POST['x_company'];\n".htmlspecialchars("echo ('<input type=\"hidden\" name=\"x_company\" value=\"' . \$x_company . '\">' );")."\n";
			$php_x_address = "\$x_address = \$_POST['x_address'];\n".htmlspecialchars("echo ('<input type=\"hidden\" name=\"x_address\" value=\"' . \$x_address . '\">' );")."\n"."\$x_city = \$_POST['x_city'];\n".
			htmlspecialchars("echo ('<input type=\"hidden\" name=\"x_city\" value=\"' . \$x_city . '\">' );")."\n"."\$x_state = \$_POST['x_state'];\n".
			htmlspecialchars("echo ('<input type=\"hidden\" name=\"x_state\" value=\"' . \$x_state . '\">' );")."\n".
			"\$x_zip = \$_POST['x_zip'];\n".htmlspecialchars("echo ('<input type=\"hidden\" name=\"x_zip\" value=\"' . \$x_zip . '\">' );")."\n";
			$php_x_ship_address= "\$x_ship_to_address = \$_POST['x_ship_to_address'];\n".htmlspecialchars("echo ('<input type=\"hidden\" name=\"x_ship_to_address\" value=\"' . \$x_ship_to_address . '\">' );")."\n"."\$x_ship_to_city = \$_POST['x_ship_to_city'];\n".
			htmlspecialchars("echo ('<input type=\"hidden\" name=\"x_ship_to_city\" value=\"' . \$x_ship_to_city . '\">' );")."\n"."\$x_ship_to_state = \$_POST['x_ship_to_state'];\n".
			htmlspecialchars("echo ('<input type=\"hidden\" name=\"x_ship_to_state\" value=\"' . \$x_ship_to_state . '\">' );")."\n".
			"\$x_ship_to_zip = \$_POST['x_ship_to_zip'];\n".htmlspecialchars("echo ('<input type=\"hidden\" name=\"x_ship_to_zip\" value=\"' . \$x_ship_to_zip . '\">' );")."\n";
			$php_level_3_Fields = "\$x_tax_exempt = \$_POST['x_tax_exempt'];\n".htmlspecialchars("echo ('<input type=\"hidden\" name=\"x_tax_exempt\" value=\"' . \$x_tax_exempt . '\">' );")."\n".
			"\$x_tax = \$_POST['x_tax'];\n".htmlspecialchars("echo ('<input type=\"hidden\" name=\"x_tax\" value=\"' . \$x_tax . '\">' );")."\n".
			"\$x_freight = \$_POST['x_freight'];\n".htmlspecialchars("echo ('<input type=\"hidden\" name=\"x_freight\" value=\"' . \$x_freight . '\">' );")."\n".
			"\$x_duty = \$_POST['x_duty'];\n".htmlspecialchars("echo ('<input type=\"hidden\" name=\"x_duty\" value=\"' . \$x_duty . '\">' );")."\n".
			"\$discount_amount = \$_POST['discount_amount'];\n".htmlspecialchars("echo ('<input type=\"hidden\" name=\"discount_amount\" value=\"' . \$discount_amount . '\">' );")."\n";
			$php_x_merchant_email = htmlspecialchars("echo ('<input type=\"hidden\" name=\"x_merchant_email\" value=\"' . \$x_merchant_email . '\">' );")."\n";
			$php_x_country= "\$x_country = \$_POST['x_country'];\n".htmlspecialchars("echo ('<input type=\"hidden\" name=\"x_country\" value=\"' . \$x_country . '\">' );")."\n";
			$php_x_email = "\$x_email = \$_POST['x_email'];\n".htmlspecialchars("echo ('<input type=\"hidden\" name=\"x_email\" value=\"' . \$x_email . '\">' );")."\n";
			$php_x_invoice_num = "\$x_invoice_num = \$_POST['x_invoice_num'];\n".htmlspecialchars("echo ('<input type=\"hidden\" name=\"x_invoice_num\" value=\"' . \$x_invoice_num . '\">' );")."\n";
			$php_x_po_num = "\$x_po_num = \$_POST['x_po_num'];\n".htmlspecialchars("echo ('<input type=\"hidden\" name=\"x_po_num\" value=\"' . \$x_po_num . '\">' );")."\n";
			$php_x_reference_3 = "\$x_reference_3 = \$_POST['x_reference_3'];\n".htmlspecialchars("echo ('<input type=\"hidden\" name=\"x_reference_3\" value=\"' . \$x_reference_3 . '\">' );")."\n";
			$php_x_amount = "\$x_amount = \$_POST['x_amount'];\n".htmlspecialchars("echo ('<input type=\"hidden\" name=\"x_amount\" value=\"' . \$x_amount . '\">' );")."\n";
			$php_x_recurring_billing_fields = "if ( \$recurring= \$_POST['recurring'] == 'TRUE'){
			//code to be executed if condition is true;
\$x_recurring_billing = 'TRUE'; \n
\$x_recurring_billing_start_date = \$_POST['x_recurring_billing_start_date']; \n
\$x_recurring_billing_end_date = \$_POST['x_recurring_billing_end_date']; \n
\$x_recurring_billing_amount = \$_POST['x_recurring_billing_amount']; \n"
			.htmlspecialchars("echo ('<input type=\"hidden\" name=\"x_recurring_billing\" value=\"' . \$x_recurring_billing . '\">' );")."\n"
			.htmlspecialchars("echo ('<input type=\"hidden\" name=\"x_recurring_billing_id\" value=\"' . \$x_recurring_billing_id . '\">' );")."\n"
			.htmlspecialchars("echo ('<input type=\"hidden\" name=\"x_recurring_billing_start_date\" value=\"' . \$x_recurring_billing_start_date . '\">' );")."\n"
			.htmlspecialchars("echo ('<input type=\"hidden\" name=\"x_recurring_billing_end_date\" value=\"' . \$x_recurring_billing_end_date . '\">' );")."\n"
			.htmlspecialchars("echo ('<input type=\"hidden\" name=\"x_recurring_billing_amount\" value=\"' . \$x_recurring_billing_amount . '\">' );}else{\n\n}")."\n";


			$php_x_fp_sequence = "\$x_fp_sequence = rand(1000, 100000) + 123456;\n".htmlspecialchars("echo ('<input type=\"hidden\" name=\"x_fp_sequence\" value=\"' . \$x_fp_sequence . '\">' );")."\n";
			$php_x_fp_timestamp = "\$x_fp_timestamp = time();\n".htmlspecialchars("echo ('<input type=\"hidden\" name=\"x_fp_timestamp\" value=\"' . \$x_fp_timestamp . '\">' );")."\n";															
			$php_hmac_data = "\$hmac_data = \$x_login . \"^\" . \$x_fp_sequence . \"^\". \$x_fp_timestamp . \"^\" . \$x_amount . \"^\" . \$x_currency_code;\n";
			$php_x_fp_hash = "\$x_fp_hash = hash_hmac('$hmac_calculation', \$hmac_data, \$transaction_key);\n".htmlspecialchars("echo ('<input type=\"hidden\" name=\"x_fp_hash\" value=\"' . \$x_fp_hash . '\" size=\"50\">' );")."\n".htmlspecialchars("echo ('<input type=\"hidden\" name=\"x_login\" value=\"' . \$x_login . '\">' );")."\n";
			$php_x_logo_url = htmlspecialchars("echo ('<input type=\"hidden\" name=\"x_logo_url\" value=\"' . \$x_logo_url . '\">' );")."\n";
			$php_x_color_background = htmlspecialchars("echo ('<input type=\"hidden\" name=\"x_color_background\" value=\"' . \$x_color_background . '\">' );")."\n";
			
			
			
			//set a code separate from what the php will be so it can be added together later
			$form_code = htmlspecialchars("<table align='center' border='1'>")."\n" .htmlspecialchars("<form method='POST' action='$my_file'>")."\n";
			
			//the php code that will go along with the form they created
			//will allow for you to easily add the form validation code for each one
			$php_code = htmlspecialchars(
			"<head>
<title>Confirmation</title>
<meta name='author' content='DonnellC'>
<meta name='description' content='This was created By:DonnellC Code-GEN'>
<meta name='keywords' content='bd0f1c08b0efcff31efb4867d9176e28'>
<style TYPE=\"text/css\"> #document { width: 700px; margin-left: auto; margin-right: auto; text-align: center; margin-top: 30px; } body { font: 1.25em arial,helvetica,sans-serif; color:#999; } </style> 
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" />
<SCRIPT LANGUAGE=\"JavaScript\"> setTimeout('document.confirm.submit()',10); 
</SCRIPT> </head> <body> <div id=\"document\"> 
<form name=\"confirm\" id=\"confirm\" action=\"$live_demo\">".
"\n<?php
//Created By: Donnell Council | | If you are looking at this. You seem to know what you are doing.//
srand(time());			
require('./xlogin_transkey.php'); 
\$x_type = \"$x_type\";
\$x_currency_code = \"$x_currency_code\";").
htmlspecialchars("echo ('<input type=\"hidden\" name=\"x_currency_code\" value=\"' . \$x_currency_code . '\">' );")."\n".
htmlspecialchars("echo ('<input type=\"hidden\" name=\"x_type\" value=\"' . \$x_type . '\">' );")."\n";
			$store_xlogin_trans_key = htmlspecialchars("<?php")."\n" .
			htmlspecialchars("\$x_login = \"$x_login\";\n\$transaction_key = \"$transaction_key\";\n\$x_recurring_billing_id = \"$x_recurring_billing_id\";\n\$x_logo_url = \"$x_logo_url\";\n\$x_color_background = \"$x_color_background\";\n\$x_merchant_email = \"$x_merchant_email\";\n");
			
			
			
			if ($arrylen == 1){	//check if they only selected one
				if($code_wanted[0] == 1){
					$form_code .= $first_last;
					$php_code .= $php_first_last;
				}
				if($code_wanted[0] == 2){
					$form_code .= $x_company;
					$php_code .= $php_x_company;
				}
				if($code_wanted[0] == 3){
					$form_code .= $x_address;
					$php_code .= $php_x_address;
				}
				if($code_wanted[0] == 4){
					$form_code .= $x_ship_address;
					$php_code .= $php_x_ship_address;
				}
				if($code_wanted[0] == 5){
					$form_code .= $level_3_Fields;
					$php_code .= $php_level_3_Fields;
				}
				if($code_wanted[0] == 6){
					$php_code .= $php_x_merchant_email;
				}
				if($code_wanted[0] == 7){
					$form_code .= $x_country;
					$php_code .= $php_x_country;
				}
				if($code_wanted[0] == 8){
					$form_code .= $x_email;
					$php_code .= $php_x_email;
				}
				if($code_wanted[0] == 9){
					$form_code .= $x_invoice_num;
					$php_code .= $php_x_invoice_num;
				}
				if($code_wanted[0] == 10){
					$form_code .= $x_po_num;
					$php_code .= $php_x_po_num;
				}
				if($code_wanted[0] == 11){
					$form_code .= $x_reference_3;
					$php_code .= $php_x_reference_3;
				}
				if($code_wanted[0] == 12){
					$form_code .= $x_amount;
					$php_code .= $php_x_amount;
				}
				if($code_wanted[0] == 13){
					$php_code .= $php_x_login;
				}
				if($code_wanted[0] == 14){
					$php_code .= $php_transaction_key;
				}
				if($code_wanted[0] == 15){
					$form_code .= $x_recurring_billing_fields;
					$php_code .= $php_x_recurring_billing_fields;
				}
				if($code_wanted[0] == 16){
					$php_code .= $php_x_fp_sequence;
				}
				if($code_wanted[0] == 17){
					$php_code .= $php_x_fp_timestamp;
				}
				if($code_wanted[0] == 18){
					$php_code .= $php_hmac_data;
				}
				if($code_wanted[0] == 19){
					$php_code .= $php_x_fp_hash;
				}
				if($code_wanted[0] == 20){
					$php_code .= $php_x_logo_url;
				}
				if($code_wanted[0] == 21){
					$php_code .= $php_x_color_background;
				}

			}else{						//if the selected multiple options for the form
				for ($x = 0; $x < $arrylen; $x++){
					if($code_wanted[$x] == 1){
						$form_code .= $first_last;
						$php_code .= $php_first_last;
					}      
					if($code_wanted[$x] == 2){
						$form_code .= $x_company;
						$php_code .= $php_x_company;
					}
					if($code_wanted[$x] == 3){
						$form_code .= $x_address;
						$php_code .= $php_x_address;
					}
					if($code_wanted[$x] == 4){
						$form_code .= $x_ship_address;
						$php_code .= $php_x_ship_address;
					}
					if($code_wanted[$x] == 5){
						$form_code .= $level_3_Fields;
						$php_code .= $php_level_3_Fields;
					}
					if($code_wanted[$x] == 6){
						$php_code .= $php_x_merchant_email;
					}
					if($code_wanted[$x] == 7){
						$form_code .= $x_country;
						$php_code .= $php_x_country;
					}
					if($code_wanted[$x] == 8){
						$form_code .= $x_email;
						$php_code .= $php_x_email;
					}
					if($code_wanted[$x] == 9){
						$form_code .= $x_invoice_num;
						$php_code .= $php_x_invoice_num;
					}
					if($code_wanted[$x] == 10){
						$form_code .= $x_po_num;
						$php_code .= $php_x_po_num;
					}
					if($code_wanted[$x] == 11){
						$form_code .= $x_reference_3;
						$php_code .= $php_x_reference_3;
					}
					if($code_wanted[$x] == 12){
						$form_code .= $x_amount;
						$php_code .= $php_x_amount;
					}
					if($code_wanted[$x] == 13){
						$php_code .= $php_x_login;
					}
					if($code_wanted[$x] == 14){
						$php_code .= $php_transaction_key;
					}
					if($code_wanted[$x] == 15){
						$form_code .= $x_recurring_billing_fields;
						$php_code .= $php_x_recurring_billing_fields;
					}
					if($code_wanted[$x] == 16){
						$php_code .= $php_x_fp_sequence;
					}
					if($code_wanted[$x] == 17){
						$php_code .= $php_x_fp_timestamp;
					}
					if($code_wanted[$x] == 18){
						$php_code .= $php_hmac_data;
					}
					if($code_wanted[$x] == 19){
						$php_code .= $php_x_fp_hash;
					}
					if($code_wanted[$x] == 20){
						$php_code .= $php_x_logo_url;
					}
					if($code_wanted[$x] == 21){
						$php_code .= $php_x_color_background;
					}
					}
				}
			}
			$form_code .= htmlspecialchars("<tr><td></td><td><div style='text-align:center'><input class='button' type='submit' value='Submit' /></div></tr></td></table>")."\n".htmlspecialchars("</form>");
$php_code .= $php_x_fp_timestamp.htmlspecialchars("?>"." <input type='hidden' name='x_show_form' value='PAYMENT_FORM'/>"."\n"."</form>"."Processing your \$ <?php echo \$x_amount ?> payment <?php echo \$x_first_name ?>, please wait..."."</div>
</body>
</html>");
			//$file_dir = dirname(__FILE__) . '\ ';      is for windows 
			$file_dir = dirname(__FILE__) . '/'; //      this is for servers with the forward / 
			
			$store_xlogin_trans_key .= htmlspecialchars("?>");
			//gives the name of the folder and how to name it
			$plugin_folder_name_with_autosubmit = $file_dir. $confirm_file;
			$plugin_folder_name_with_key = $file_dir. $xlogin_transkey;
			//Puts the file in to the plug-in Folder
			$uniqe_file = file_put_contents( $plugin_folder_name_with_autosubmit, htmlspecialchars_decode( $php_code) );
			$just_xlogin_transkey = file_put_contents( $plugin_folder_name_with_key, htmlspecialchars_decode( $store_xlogin_trans_key) );

			$full_code = "<table class='widefat'><br>
			<br>Here is your HTML code.<br/>You can put this anywhere on your website.<br/>
			<textarea id='codeTextArea' rows='30' cols='125'>$form_code</textarea>
			<br/>
			</form>
			</p>
			</table>
			"; 
			return $full_code;
		}

echo get_code();
?>

<?php
}
?>