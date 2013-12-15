<!DOCTYPE html>
<html>
<body>
<div class="content" style="margin-top: 5px; border-left-width: 50px; padding-left: 50px;">
<form method='POST' action='/users/user_signup_details'>
	<h3>STEP 2. Your Basic Details</h3>
	<br>
	<ul>
	<input type="hidden" name="user_id" id="user_id" value=" ">
    <li id="memberAttributeFormHeading">Your Appearance</li>
    <li class="clearfix">
        <label id="memberAttributeFormLabel">Hair color:</label>
        <span id="hairColor_validate"> 
                        <select name="haircolor" id="haircolor">
                            <option value="" >Please Select...</option>                             
                                <option value="Bald / Shaved" >Bald / Shaved</option>
                                <option value="Black" >Black</option>
                                <option value="Blonde" >Blonde</option>
                                <option value="Brown" >Brown</option>
                                <option value="Grey / White" >Grey / White</option>
                                <option value="Light Brown" >Light Brown</option>
                                <option value="Red" >Red</option>
                                <option value="Changes frequently" >Changes frequently</option>
                                <option value="Other" >Other</option>
                                <option value="Prefer not to say" >Prefer not to say</option>
                	</select>
                    </span>
                    <script type="text/javascript">
                    <!--
                    var hairColor = new Spry.Widget.ValidationSelect("hairColor_validate", {isRequired:true , validateOn:
					['change']});
                    //-->
                    </script>
    </li>
    <li class="clearfix">
        <label id="memberAttributeFormLabel">Eye color:</label>
        <span id="eyeColor_validate"> 
                        <select name="eyecolor" id="eyecolor">
                            <option value="" >Please Select...</option>
                                <option value="Black" >Black</option>
                                <option value="Blue" >Blue</option>
                                <option value="Brown" >Brown</option>
                                <option value="Green" >Green</option>
                                <option value="Grey" >Grey</option>
                                <option value="Hazel" >Hazel</option>
                                <option value="Other" >Other</option>
                	</select>
                    </span>
                    <script type="text/javascript">
                    <!--
                    var eyeColor = new Spry.Widget.ValidationSelect("eyeColor_validate", {isRequired:true , validateOn:['change']});
                    //-->
                    </script>
    </li>
    <li class="clearfix">
        <label id="memberAttributeFormLabel">Height:</label>
        <span id="height_validate"> 
                        <select 
                        	name="height" 
                        	id="height"
                        >
                            <option value="" >Please Select...</option>
                                <option value="140" >4'7" (140 cm)</option>
                                <option value="143" >4'8" (143 cm)</option>
                                <option value="145" >4'9" (145 cm)</option>
                                <option value="148" >4'10" (148 cm)</option>
                                <option value="150" >4'11" (150 cm)</option>
                                <option value="153" >5' (153 cm)</option>
                                <option value="155" >5'1" (155 cm)</option>
                                <option value="158" >5'2" (158 cm)</option>
                                <option value="161" >5'3" (161 cm)</option>
                                <option value="163" >5'4" (163 cm)</option>
                                <option value="166" >5'5" (166 cm)</option>
                                <option value="168" >5'6" (168 cm)</option>
                                <option value="171" >5'7" (171 cm)</option>
                                <option value="173" >5'8" (173 cm)</option>
                                <option value="176" >5'9" (176 cm)</option>
                                <option value="178" >5'10" (178 cm)</option>
                                <option value="181" >5'11" (181 cm)</option>
                                <option value="183" >6' (183 cm)</option>
                                <option value="186" >6'1" (186 cm)</option>
                                <option value="188" >6'2" (188 cm)</option>
                                <option value="191" >6'3" (191 cm)</option>
                                <option value="194" >6'4" (194 cm)</option>
                                <option value="196" >6'5" (196 cm)</option>
                                <option value="199" >6'6" (199 cm)</option>
                                <option value="201" >6'7" (201 cm)</option>
                                <option value="204" >6'8" (204 cm)</option>
                                <option value="206" >6'9 (206 cm)</option>
                                <option value="209" >6'10" (209 cm)</option>
                                <option value="211" >6'11" (211 cm)</option>
                                <option value="214" >7' (214 cm)</option>
                                <option value="216" >7'1" (216 cm)</option>
                                <option value="219" >7'2" (219 cm)</option>
                	</select>
                    </span>
                    <script type="text/javascript">
                    <!--
                    var height = new Spry.Widget.ValidationSelect("height_validate", {isRequired:true , validateOn:['change']});
                    //-->
                    </script>
    </li>
    <li class="clearfix">
        <label id="memberAttributeFormLabel">Weight:</label>
        <span id="weight_validate"> 
                        <select name="weight" id="weight">
                            <option value="" >Please Select...</option>
                                <option value="40" >40 kg (88 lb)</option>
                                <option value="41" >41 kg (90 lb)</option>
                                <option value="42" >42 kg (93 lb)</option>
                                <option value="43" >43 kg (95 lb)</option>
                                <option value="44" >44 kg (97 lb)</option>
                                <option value="45" >45 kg (99 lb)</option>
                                <option value="46" >46 kg (101 lb)</option>
                                <option value="47" >47 kg (104 lb)</option>
                                <option value="48" >48 kg (106 lb)</option>
                                <option value="49" >49 kg (108 lb)</option>
                                <option value="50" >50 kg (110 lb)</option>
                                <option value="51" >51 kg (112 lb)</option>
                                <option value="52" >52 kg (115 lb)</option>
                                <option value="53" >53 kg (117 lb)</option>
                                <option value="54" >54 kg (119 lb)</option>
                                <option value="55" >55 kg (121 lb)</option>
                                <option value="56" >56 kg (123 lb)</option>
                                <option value="57" >57 kg (126 lb)</option>
                                <option value="58" >58 kg (128 lb)</option>
                                <option value="59" >59 kg (130 lb)</option>
                                <option value="60" >60 kg (132 lb)</option>
                                <option value="61" >61 kg (134 lb)</option>
                                <option value="62" >62 kg (137 lb)</option>
                                <option value="63" >63 kg (139 lb)</option>
                                <option value="64" >64 kg (141 lb)</option>
                                <option value="65" >65 kg (143 lb)</option>
                                <option value="66" >66 kg (146 lb)</option>
                                <option value="67" >67 kg (148 lb)</option>
                                <option value="68" >68 kg (150 lb)</option>
                                <option value="69" >69 kg (152 lb)</option>
                                <option value="70" >70 kg (154 lb)</option>
                                <option value="71" >71 kg (157 lb)</option>
                                <option value="72" >72 kg (159 lb)</option>
                                <option value="73" >73 kg (161 lb)</option>
                                <option value="74" >74 kg (163 lb)</option>
                                <option value="75" >75 kg (165 lb)</option>
                                <option value="76" >76 kg (168 lb)</option>
                                <option value="77" >77 kg (170 lb)</option>
                                <option value="78" >78 kg (172 lb)</option>
                                <option value="79" >79 kg (174 lb)</option>
                                <option value="80" >80 kg (176 lb)</option>
                                <option value="81" >81 kg (179 lb)</option>
                                <option value="82" >82 kg (181 lb)</option>
                                <option value="83" >83 kg (183 lb)</option>
                                <option value="84" >84 kg (185 lb)</option>
                                <option value="85" >85 kg (187 lb)</option>
                                <option value="86" >86 kg (190 lb)</option>
                                <option value="87" >87 kg (192 lb)</option>
                                <option value="88" >88 kg (194 lb)</option>
                                <option value="89" >89 kg (196 lb)</option>
                                <option value="90" >90 kg (198 lb)</option>
                                <option value="91" >91 kg (201 lb)</option>
                                <option value="92" >92 kg (203 lb)</option>
                                <option value="93" >93 kg (205 lb)</option>
                                <option value="94" >94 kg (207 lb)</option>
                                <option value="95" >95 kg (209 lb)</option>
                                <option value="96" >96 kg (212 lb)</option>
                                <option value="97" >97 kg (214 lb)</option>
                                <option value="98" >98 kg (216 lb)</option>
                                <option value="99" >99 kg (218 lb)</option>
                                <option value="100" >100 kg (220 lb)</option>
                                <option value="101" >101 kg (223 lb)</option>
                                <option value="102" >102 kg (225 lb)</option>
                                <option value="103" >103 kg (227 lb)</option>
                                <option value="104" >104 kg (229 lb)</option>
                                <option value="105" >105 kg (231 lb)</option>
                                <option value="106" >106 kg (234 lb)</option>
                                <option value="107" >107 kg (236 lb)</option>
                                <option value="108" >108 kg (238 lb)</option>
                                <option value="109" >109 kg (240 lb)</option>
                                <option value="110" >110 kg (243 lb)</option>
                                <option value="111" >111 kg (245 lb)</option>
                                <option value="112" >112 kg (247 lb)</option>
                                <option value="113" >113 kg (249 lb)</option>
                                <option value="114" >114 kg (251 lb)</option>
                                <option value="115" >115 kg (254 lb)</option>
                                <option value="116" >116 kg (256 lb)</option>
                                <option value="117" >117 kg (258 lb)</option>
                                <option value="118" >118 kg (260 lb)</option>
                                <option value="119" >119 kg (262 lb)</option>
                                <option value="120" >120 kg (265 lb)</option>
                                <option value="121" >121 kg (267 lb)</option>
                                <option value="122" >122 kg (269 lb)</option>
                                <option value="123" >123 kg (271 lb)</option>
                                <option value="124" >124 kg (273 lb)</option>
                                <option value="125" >125 kg (276 lb)</option>
                                <option value="126" >126 kg (278 lb)</option>
                                <option value="127" >127 kg (280 lb)</option>
                                <option value="128" >128 kg (282 lb)</option>
                                <option value="129" >129 kg (284 lb)</option>
                                <option value="130" >130 kg (287 lb)</option>
                                <option value="131" >131 kg (289 lb)</option>
                                <option value="132" >132 kg (291 lb)</option>
                                <option value="133" >133 kg (293 lb)</option>
                                <option value="134" >134 kg (295 lb)</option>
                                <option value="135" >135 kg (298 lb)</option>
                                <option value="136" >136 kg (300 lb)</option>
                                <option value="137" >137 kg (302 lb)</option>
                                <option value="138" >138 kg (304 lb)</option>
                                <option value="139" >139 kg (306 lb)</option>
                                <option value="140" >140 kg (309 lb)</option>
                                <option value="141" >141 kg (311 lb)</option>
                                <option value="142" >142 kg (313 lb)</option>
                                <option value="143" >143 kg (315 lb)</option>
                                <option value="144" >144 kg (317 lb)</option>
                                <option value="145" >145 kg (320 lb)</option>
                                <option value="146" >146 kg (322 lb)</option>
                                <option value="147" >147 kg (324 lb)</option>
                                <option value="148" >148 kg (326 lb)</option>
                                <option value="149" >149 kg (328 lb)</option>
                                <option value="150" >150 kg (331 lb)</option>
                                <option value="151" >151 kg (333 lb)</option>
                                <option value="152" >152 kg (335 lb)</option>
                                <option value="153" >153 kg (337 lb)</option>
                                <option value="154" >154 kg (340 lb)</option>
                                <option value="155" >155 kg (342 lb)</option>
                                <option value="156" >156 kg (344 lb)</option>
                                <option value="157" >157 kg (346 lb)</option>
                                <option value="158" >158 kg (348 lb)</option>
                                <option value="159" >159 kg (351 lb)</option>
                                <option value="160" >160 kg (353 lb)</option>
                                <option value="161" >161 kg (355 lb)</option>
                                <option value="162" >162 kg (357 lb)</option>
                                <option value="163" >163 kg (359 lb)</option>
                                <option value="164" >164 kg (362 lb)</option>
                                <option value="165" >165 kg (364 lb)</option>
                                <option value="166" >166 kg (366 lb)</option>
                                <option value="167" >167 kg (368 lb)</option>
                                <option value="168" >168 kg (370 lb)</option>
                                <option value="169" >169 kg (373 lb)</option>
                                <option value="170" >170 kg (375 lb)</option>
                                <option value="171" >171 kg (377 lb)</option>
                                <option value="172" >172 kg (379 lb)</option>
                                <option value="173" >173 kg (381 lb)</option>
                                <option value="174" >174 kg (384 lb)</option>
                                <option value="175" >175 kg (386 lb)</option>
                                <option value="176" >176 kg (388 lb)</option>
                                <option value="177" >177 kg (390 lb)</option>
                                <option value="178" >178 kg (392 lb)</option>
                                <option value="179" >179 kg (395 lb)</option>
                                <option value="180" >180 kg (397 lb)</option>
                                <option value="181" >181 kg (399 lb)</option>
                                <option value="182" >182 kg (401 lb)</option>
                                <option value="183" >183 kg (403 lb)</option>
                                <option value="184" >184 kg (406 lb)</option>
                                <option value="185" >185 kg (408 lb)</option>
                                <option value="186" >186 kg (410 lb)</option>
                                <option value="187" >187 kg (412 lb)</option>
                                <option value="188" >188 kg (414 lb)</option>
                                <option value="189" >189 kg (417 lb)</option>
                                <option value="190" >190 kg (419 lb)</option>
                                <option value="191" >191 kg (421 lb)</option>
                                <option value="192" >192 kg (423 lb)</option>
                                <option value="193" >193 kg (425 lb)</option>
                                <option value="194" >194 kg (428 lb)</option>
                                <option value="195" >195 kg (430 lb)</option>
                                <option value="196" >196 kg (432 lb)</option>
                                <option value="197" >197 kg (434 lb)</option>
                                <option value="198" >198 kg (437 lb)</option>
                                <option value="199" >199 kg (439 lb)</option>
                                <option value="200" >200 kg (441 lb)</option>
                                <option value="201" >201 kg (443 lb)</option>
                                <option value="202" >202 kg (445 lb)</option>
                                <option value="203" >203 kg (448 lb)</option>
                                <option value="204" >204 kg (450 lb)</option>
                                <option value="205" >205 kg (452 lb)</option>
                                <option value="206" >206 kg (454 lb)</option>
                                <option value="207" >207 kg (456 lb)</option>
                                <option value="208" >208 kg (459 lb)</option>
                                <option value="209" >209 kg (461 lb)</option>
                                <option value="210" >210 kg (463 lb)</option>
                                <option value="211" >211 kg (465 lb)</option>
                                <option value="212" >212 kg (467 lb)</option>
                                <option value="213" >213 kg (470 lb)</option>
                                <option value="214" >214 kg (472 lb)</option>
                                <option value="215" >215 kg (474 lb)</option>
                                <option value="216" >216 kg (476 lb)</option>
                                <option value="217" >217 kg (478 lb)</option>
                                <option value="218" >218 kg (481 lb)</option>
                                <option value="219" >219 kg (483 lb)</option>
                                <option value="220" >220 kg (485 lb)</option>
                	</select>
                    </span>
                    <script type="text/javascript">
                    <!--
                    var weight = new Spry.Widget.ValidationSelect("weight_validate", {isRequired:true , validateOn:['change']});
                    //-->
                    </script>
    </li>
	<class="clearfix">
        <label id="memberAttributeFormLabel">Body type:</label>
        <span id="bodyStyle_validate"> 
                        <select name="bodystyle" id="bodystyle">
                            <option value="" >Please Select...</option>
                                <option value="Petite" >Petite</option>
                                <option value="Slim" >Slim</option>
                                <option value="Athletic" >Athletic</option>
                                <option value="Average" >Average</option>
                                <option value="Few Extra Pounds" >Few Extra Pounds</option>
                                <option value="Full Figured" >Full Figured</option>
                                <option value="Large and Lovely" >Large and Lovely</option>
                	</select>
                    </span>
                    <script type="text/javascript">
                    <!--
                    var bodyStyle = new Spry.Widget.ValidationSelect("bodyStyle_validate", {isRequired:true , validateOn:['change']});
                    //-->
                    </script>
    </li>
    <li class="clearfix">
        <label id="memberAttributeFormLabel">Your ethnicity is mostly:</label>
        <span id="ethnicity_validate"> 
                        <select name="ethnicity" id="ethnicity">
                            <option value="" >Please Select...</option>
                                <option value="Arab (Middle Eastern)" >Arab (Middle Eastern)</option>
                                <option value="Asian" >Asian</option>
                                <option value="Black" >Black</option>
                                <option value="Caucasian (White)" >Caucasian (White)</option>
                                <option value="Hispanic / Latino" >Hispanic / Latino</option>
                                <option value="Indian" >Indian</option>
                                <option value="Mixed" >Mixed</option>
                                <option value="Pacific Islander" >Pacific Islander</option>
                                <option value="Other" >Other</option>
						</select>
                    </span>
                    <script type="text/javascript">
                    <!--
                    var ethnicity = new Spry.Widget.ValidationSelect("ethnicity_validate", {isRequired:true , validateOn:['change']});
                    //-->
                    </script>
    </li>
    <li class="clearfix">
        <label id="memberAttributeFormLabel">I consider my appearance as:</label>
        <span id="appearance_validate"> 
                        <select name="appearance" id="appearance">
                            <option value="" >Please Select...</option>
                                <option value="Below average" >Below average</option>
                                <option value="Average" >Average</option>
                                <option value="Attractive" >Attractive</option>
                                <option value="Very attractive" >Very attractive</option>
                	</select>
                    </span>
                    <script type="text/javascript">
                    <!--
                    var appearance = new Spry.Widget.ValidationSelect("appearance_validate", {isRequired:true , validateOn:['change']});
                    //-->
                    </script>
    </li>
    <div class="clear"></div>
    <li id="memberAttributeFormHeading">Your Lifestyle</li>
    <li class="clearfix">
        <label id="memberAttributeFormLabel">Do you smoke?</label>
        <span id="smoke_validate"> 
                        <select name="smoke" id="smoke">
                            <option value="" >Please Select...</option>
                                <option value="Do smoke" >Do smoke</option>
                                <option value="Don't smoke" >Don't smoke</option>
                                <option value="Occasionally smoke" >Occasionally smoke</option>
						</select>
                    </span>
                    <script type="text/javascript">
                    <!--
                    var smoke = new Spry.Widget.ValidationSelect("smoke_validate", {isRequired:true , validateOn:['change']});
                    //-->
                    </script>
    </li>
    <li class="clearfix">
        <label id="memberAttributeFormLabel">Marital Status:</label>
        <span id="maritalStatus_validate"> 
                        <select name="maritalstatus" id="maritalstatus">
                            <option value="" >Please Select...</option>
                                <option value="Single" >Single</option>
                                <option value="Separated" >Separated</option>
                                <option value="Widowed" >Widowed</option>
                                <option value="Divorced" >Divorced</option>
                                <option value="Married" >Married</option>
                	</select>
                    </span>
                    <script type="text/javascript">
                    <!--
                    var maritalStatus = new Spry.Widget.ValidationSelect("maritalStatus_validate", {isRequired:true , validateOn:['change']});
                    //-->
                    </script>
    </li>
    <li class="clearfix">
        <label id="memberAttributeFormLabel">Do you have children?</label>
        <span id="childrenHave_validate"> 
                        <select name="childrenhave" id="childrenhave">
                            <option value="" >Please Select...</option>
                                <option value="No" >No</option>
                                <option value="Yes - don't live at home" >Yes - don't live at home</option>
                                <option value="Yes - sometimes live at home" >Yes - sometimes live at home</option>
                                <option value="Yes - live at home" >Yes - live at home</option>
                	</select>
                    </span>
                    <script type="text/javascript">
                    <!--
                    var childrenHave = new Spry.Widget.ValidationSelect("childrenHave_validate", {isRequired:true , validateOn:['change']});
                    //-->
                    </script>
    </li>
    <li class="clearfix">
        <label id="memberAttributeFormLabel">Do you want (more) children?</label>
        <span id="childrenWant_validate"> 
                        <select name="childrenwant" id="childrenwant">
                            <option value="" >Please Select...</option>
                                <option value="Yes" >Yes</option>
                                <option value="Not Sure" >Not Sure</option>
                                <option value="No" >No</option>
                	</select>
                    </span>
                    <script type="text/javascript">
                    <!--
                    var childrenWant = new Spry.Widget.ValidationSelect("childrenWant_validate", {isRequired:true , validateOn:['change']});
                    //-->
                    </script>
    </li>
    <li class="clearfix">
        <label id="memberAttributeFormLabel">Occupation:</label>
        <span id="occupation_validate"> 
                        <select name="occupation" id="occupation">
                            <option value="" >Please Select...</option>
                                <option value="563" >Administrative / Secretarial / Clerical</option>
                                <option value="564" >Advertising / Media</option>
                                <option value="565" >Artistic / Creative / Performance</option>
                                <option value="566" >Construction / Trades</option>
                                <option value="567" >Domestic Helper</option>
                                <option value="568" >Education / Academic</option>
                                <option value="1510" >Entertainment / Media</option>
                                <option value="569" >Executive / Management / HR</option>
                                <option value="570" >Farming / Agriculture</option>
                                <option value="572" >Finance / Banking / Real Estate</option>
                                <option value="571" >Fire / law enforcement / security</option>
                                <option value="1509" >Hair Dresser / Personal Grooming</option>
                                <option value="573" >IT / Communications</option>
                                <option value="574" >Laborer / Manufacturing</option>
                                <option value="575" >Legal</option>
                                <option value="576" >Medical / Dental / Veterinary</option>
                                <option value="1620" >Military</option>
                                <option value="577" >Nanny / Child care</option>
                                <option value="588" >No occupation / Stay at home</option>
                                <option value="578" >Non-profit / clergy / social services</option>
                                <option value="579" >Political / Govt / Civil Service</option>
                                <option value="580" >Retail / Food services</option>
                                <option value="581" >Retired</option>
                                <option value="582" >Sales / Marketing</option>
                                <option value="1511" >Self Employed</option>
                                <option value="583" >Sports / recreation</option>
                                <option value="584" >Student</option>
                                <option value="585" >Technical / Science / Engineering</option>
                                <option value="1508" >Transportation</option>
                                <option value="586" >Travel / Hospitality</option>
                                <option value="587" >Unemployed</option>
                                <option value="252" >Other</option>
                	</select>
                    </span>
                    <script type="text/javascript">
                    <!--
                    var occupation = new Spry.Widget.ValidationSelect("occupation_validate", {isRequired:true , validateOn:['change']});
                    //-->
                    </script>
    </li>
    <li class="clearfix">
        <label id="memberAttributeFormLabel">Willing to relocate:</label>
        <span id="relocate_validate"> 
                        <select name="relocate" id="relocate">
                            <option value="" >Please Select...</option>
                                <option value="Willing to relocate within my country">Willing to relocate within my country</option>
                                <option value="Willing to relocate to another country">Willing to relocate to another country</option>
                                <option value="Not willing to relocate">Not willing to relocate</option>
                                <option value="Not sure about relocating">Not sure about relocating</option>
                	</select>
                    </span>
                    <script type="text/javascript">
                    <!--
                    var relocate = new Spry.Widget.ValidationSelect("relocate_validate", {isRequired:true , validateOn:['change']});
                    //-->
                    </script>
    </li>
    <li class="clearfix">
        <label id="memberAttributeFormLabel">Relationship you're looking for:</label>
        <span id="searchingFor_validate"> 
                    <input type="checkbox" name="searchingFor" id="searchingFor_712" value="Marriage"  />&nbsp;<label for="searchingFor_712" style="cursor:hand">Marriage</label>
                    <input type="checkbox" name="searchingFor" id="searchingFor_710" value="Friendship"  />&nbsp;<label for="searchingFor_710" style="cursor:hand">Friendship</label>
                <span class="checkboxRequiredMsg">A value is required.</span> 
                    </span>
                    <script type="text/javascript">
                    <!--
                    var searchingFor = new Spry.Widget.ValidationCheckbox("searchingFor_validate", {isRequired:true , validateOn:['change']});
                    //-->
                    </script>
    </li>
    <div class="clear"></div>
    <li id="memberAttributeFormHeading">Your Background / Cultural Values</li>
    <li class="clearfix">
        <label id="memberAttributeFormLabel">Nationality:</label>
        <span id="nationality_validate"> 
                        <select 
                        	name="nationality" 
                        	id="nationality"
                        >
                            <option value="" >Please Select...</option>
                                <option value="4" >Afghanistan</option>
                                <option value="7" >Albania</option>
                                <option value="5" >Algeria</option>
                                <option value="11" >American Samoa</option>
                                <option value="9" >Andorra</option>
                                <option value="10" >Angola</option>
                                <option value="15" >Anguilla</option>
                                <option value="16" >Antarctica</option>
                                <option value="2" >Antigua and Barbuda</option>
                                <option value="12" >Argentina</option>
                                <option value="8" >Armenia</option>
                                <option value="1" >Aruba</option>
                                <option value="13" >Australia</option>
                                <option value="14" >Austria</option>
                                <option value="6" >Azerbaijan</option>
                                <option value="22" >Bahamas</option>
                                <option value="17" >Bahrain</option>
                                <option value="23" >Bangladesh</option>
                                <option value="18" >Barbados</option>
                                <option value="28" >Belarus</option>
                                <option value="21" >Belgium</option>
                                <option value="24" >Belize</option>
                                <option value="27" >Benin</option>
                                <option value="20" >Bermuda</option>
                                <option value="31" >Bhutan</option>
                                <option value="26" >Bolivia</option>
                                <option value="25" >Bosnia & Herzegovina</option>
                                <option value="19" >Botswana</option>
                                <option value="33" >Bouvet Island</option>
                                <option value="30" >Brazil</option>
                                <option value="104" >British Indian Ocean</option>
                                <option value="34" >Brunei</option>
                                <option value="32" >Bulgaria</option>
                                <option value="224" >Burkina Faso</option>
                                <option value="35" >Burundi</option>
                                <option value="37" >Cambodia</option>
                                <option value="46" >Cameroon</option>
                                <option value="36" selected>Canada</option>
                                <option value="53" >Cape Verde</option>
                                <option value="44" >Cayman Islands</option>
                                <option value="51" >Central African Rep.</option>
                                <option value="38" >Chad</option>
                                <option value="43" >Chile</option>
                                <option value="42" >China</option>
                                <option value="119" >Christmas Island</option>
                                <option value="45" >Cocos (Keeling) Is.</option>
                                <option value="48" >Colombia</option>
                                <option value="47" >Comoros</option>
                                <option value="41" >Congo, Dem. Rep</option>
                                <option value="40" >Congo, Republic</option>
                                <option value="54" >Cook Islands</option>
                                <option value="50" >Costa Rica</option>
                                <option value="108" >Cote d'Ivoire</option>
                                <option value="98" >Croatia</option>
                                <option value="52" >Cuba</option>
                                <option value="55" >Cyprus</option>
                                <option value="68" >Czech Republic</option>
                                <option value="56" >Denmark</option>
                                <option value="57" >Djibouti</option>
                                <option value="58" >Dominica</option>
                                <option value="59" >Dominican Republic</option>
                                <option value="213" >East Timor</option>
                                <option value="60" >Ecuador</option>
                                <option value="61" >Egypt</option>
                                <option value="66" >El Salvador</option>
                                <option value="63" >Equatorial Guinea</option>
                                <option value="65" >Eritrea</option>
                                <option value="64" >Estonia</option>
                                <option value="67" >Ethiopia</option>
                                <option value="72" >Falkland Islands</option>
                                <option value="74" >Faroe Islands</option>
                                <option value="71" >Fiji</option>
                                <option value="70" >Finland</option>
                                <option value="76" >France</option>
                                <option value="77" >French Antarctic</option>
                                <option value="69" >French Guiana</option>
                                <option value="75" >French Polynesia</option>
                                <option value="79" >Gabon</option>
                                <option value="78" >Gambia</option>
                                <option value="80" >Georgia</option>
                                <option value="86" >Germany</option>
                                <option value="81" >Ghana</option>
                                <option value="82" >Gibraltar</option>
                                <option value="89" >Greece</option>
                                <option value="85" >Greenland</option>
                                <option value="83" >Grenada</option>
                                <option value="87" >Guadeloupe</option>
                                <option value="88" >Guam</option>
                                <option value="90" >Guatemala</option>
                                <option value="84" >Guernsey</option>
                                <option value="91" >Guinea</option>
                                <option value="175" >Guinea-Bissau</option>
                                <option value="92" >Guyana</option>
                                <option value="94" >Haiti</option>
                                <option value="96" >Heard & McDonald Is</option>
                                <option value="232" >Holy See (Vatican City)</option>
                                <option value="97" >Honduras</option>
                                <option value="95" >Hong Kong</option>
                                <option value="99" >Hungary</option>
                                <option value="100" >Iceland</option>
                                <option value="103" >India</option>
                                <option value="101" >Indonesia</option>
                                <option value="105" >Iran</option>
                                <option value="109" >Iraq</option>
                                <option value="62" >Ireland</option>
                                <option value="102" >Isle of Man</option>
                                <option value="106" >Israel</option>
                                <option value="107" >Italy</option>
                                <option value="112" >Jamaica</option>
                                <option value="110" >Japan</option>
                                <option value="111" >Jersey</option>
                                <option value="113" >Jordan</option>
                                <option value="121" >Kazakhstan</option>
                                <option value="114" >Kenya</option>
                                <option value="117" >Kiribati</option>
                                <option value="116" >Korea, North</option>
                                <option value="118" >Korea, South</option>
                                <option value="120" >Kuwait</option>
                                <option value="115" >Kyrgyzstan</option>
                                <option value="122" >Laos</option>
                                <option value="124" >Latvia</option>
                                <option value="123" >Lebanon</option>
                                <option value="129" >Lesotho</option>
                                <option value="126" >Liberia</option>
                                <option value="131" >Libya</option>
                                <option value="128" >Liechtenstein</option>
                                <option value="125" >Lithuania</option>
                                <option value="130" >Luxembourg</option>
                                <option value="134" >Macau</option>
                                <option value="140" >Macedonia (FYR)</option>
                                <option value="132" >Madagascar</option>
                                <option value="139" >Malawi</option>
                                <option value="150" >Malaysia</option>
                                <option value="148" >Maldives</option>
                                <option value="141" >Mali</option>
                                <option value="146" >Malta</option>
                                <option value="178" >Marshall Islands</option>
                                <option value="133" >Martinique</option>
                                <option value="145" >Mauritania</option>
                                <option value="144" >Mauritius</option>
                                <option value="136" >Mayotte</option>
                                <option value="149" >Mexico</option>
                                <option value="73" >Micronesia</option>
                                <option value="135" >Moldova</option>
                                <option value="142" >Monaco</option>
                                <option value="137" >Mongolia</option>
                                <option value="138" >Montserrat</option>
                                <option value="143" >Morocco</option>
                                <option value="151" >Mozambique</option>
                                <option value="242" >Myanmar</option>
                                <option value="233" >Namibia</option>
                                <option value="161" >Nauru</option>
                                <option value="160" >Nepal</option>
                                <option value="158" >Netherlands</option>
                                <option value="163" >Netherlands Antilles</option>
                                <option value="152" >New Caledonia</option>
                                <option value="165" >New Zealand</option>
                                <option value="164" >Nicaragua</option>
                                <option value="155" >Niger</option>
                                <option value="157" >Nigeria</option>
                                <option value="153" >Niue</option>
                                <option value="154" >Norfolk Island</option>
                                <option value="49" >Northern Mariana Is.</option>
                                <option value="159" >Norway</option>
                                <option value="147" >Oman</option>
                                <option value="169" >Pakistan</option>
                                <option value="174" >Palau</option>
                                <option value="93" >Palestine</option>
                                <option value="171" >Panama</option>
                                <option value="173" >Papua New Guinea</option>
                                <option value="166" >Paraguay</option>
                                <option value="168" >Peru</option>
                                <option value="180" >Philippines</option>
                                <option value="167" >Pitcairn Islands</option>
                                <option value="170" >Poland</option>
                                <option value="172" >Portugal</option>
                                <option value="181" >Puerto Rico</option>
                                <option value="176" >Qatar</option>
                                <option value="177" >Reunion</option>
                                <option value="179" >Romania</option>
                                <option value="182" >Russia</option>
                                <option value="183" >Rwanda</option>
                                <option value="190" >Saint Helena</option>
                                <option value="197" >Saint Lucia</option>
                                <option value="236" >Samoa</option>
                                <option value="193" >San Marino</option>
                                <option value="211" >Sao Tome & Principe</option>
                                <option value="184" >Saudi Arabia</option>
                                <option value="189" >Senegal</option>
                                <option value="238" >Serbia</option>
                                <option value="187" >Seychelles</option>
                                <option value="192" >Sierra Leone</option>
                                <option value="194" >Singapore</option>
                                <option value="127" >Slovakia</option>
                                <option value="191" >Slovenia</option>
                                <option value="29" >Solomon Islands</option>
                                <option value="195" >Somalia</option>
                                <option value="188" >South Africa</option>
                                <option value="201" >South Georgia Island</option>
                                <option value="196" >Spain</option>
                                <option value="39" >Sri Lanka</option>
                                <option value="186" >St Kitts & Nevis</option>
                                <option value="185" >St Pierre &  Miquelon</option>
                                <option value="227" >St Vincent Grenadines</option>
                                <option value="198" >Sudan</option>
                                <option value="162" >Suriname</option>
                                <option value="199" >Svalbard & Jan Mayen</option>
                                <option value="237" >Swaziland</option>
                                <option value="200" >Sweden</option>
                                <option value="203" >Switzerland</option>
                                <option value="202" >Syria</option>
                                <option value="216" >Taiwan</option>
                                <option value="206" >Tajikistan</option>
                                <option value="218" >Tanzania</option>
                                <option value="205" >Thailand</option>
                                <option value="210" >Togo</option>
                                <option value="208" >Tokelau</option>
                                <option value="209" >Tonga</option>
                                <option value="204" >Trinidad and Tobago</option>
                                <option value="212" >Tunisia</option>
                                <option value="214" >Turkey</option>
                                <option value="217" >Turkmenistan</option>
                                <option value="207" >Turks & Caicos Is.</option>
                                <option value="215" >Tuvalu</option>
                                <option value="219" >Uganda</option>
                                <option value="222" >Ukraine</option>
                                <option value="3" >United Arab Emirates</option>
                                <option value="220" >United Kingdom</option>
                                <option value="223" >United States</option>
                                <option value="225" >Uruguay</option>
                                <option value="221" >US Minor Outlying Is</option>
                                <option value="226" >Uzbekistan</option>
                                <option value="156" >Vanuatu</option>
                                <option value="228" >Venezuela</option>
                                <option value="230" >Vietnam</option>
                                <option value="229" >Virgin Islands (British)</option>
                                <option value="231" >Virgin Islands (US)</option>
                                <option value="234" >Wallis and Futuna</option>
                                <option value="235" >Western Sahara</option>
                                <option value="239" >Yemen</option>
                                <option value="240" >Zambia</option>
                                <option value="241" >Zimbabwe</option>
                	</select>
                    </span>
                    <script type="text/javascript">
                    <!--
                    var nationality = new Spry.Widget.ValidationSelect("nationality_validate", {isRequired:true , validateOn:['change']});
                    //-->
                    </script>
    </li>
    <li class="clearfix">
        <label id="memberAttributeFormLabel">Education:</label>
        <span id="education_validate"> 
                        <select 
                        	name="education" 
                        	id="education"
                        >
                            <option value="" >Please Select...</option>
                                <option value="312" >Primary (Elementary) School</option>
                                <option value="313" >Middle School / Junior High</option>
                                <option value="314" >High School</option>
                                <option value="315" >Vocational College</option>
                                <option value="316" >Bachelors Degree</option>
                                <option value="317" >Masters Degree</option>
                                <option value="318" >PhD or Doctorate</option>
                	</select>
                    </span>
                    <script type="text/javascript">
                    <!--
                    var education = new Spry.Widget.ValidationSelect("education_validate", {isRequired:true , validateOn:['change']});
                    //-->
                    </script>
    </li>
    <div class="clear"></div>
    <li id="memberAttributeFormHeading">In your own words</li>
    <li class="clearfix">
		<label id="memberAttributeFormLabel">Your profile heading:<div class="characterLimitInfo">Maximum 50 characters</div></label>
		<span id="catchPhrase_validate"> <input name="catchPhrase" type="text" class="textwidth"  id="catchPhrase"  size="52"  /> 
                    	<div class="formclear"></div>
                    <span class="textfieldRequiredMsg">A value is required.</span> <span class="textfieldMaxCharsMsg">Maximum 50 characters</span> 
                    	<div class="formclear"></div>
                    </span>
                    <script type="text/javascript">
                    <!--
                    var catchPhrase = new Spry.Widget.ValidationTextField("catchPhrase_validate", "none", {isRequired:true , validateOn:['change'],maxChars:50});
                    //-->
                    </script>
    </li>
    <li class="clearfix">
        <label id="memberAttributeFormLabel">A little about yourself:</label>
        <span id="selfDescription_validate"> <textarea name="selfDescription" class="textwidth" rows="5" cols="50" id="selfDescription" onBlur="" ></textarea> 
                    	<div class="formclear"></div>
                    <span class="textareaRequiredMsg">A value is required.</span> 
                    	<div class="formclear"></div>
                    </span>
                    <script type="text/javascript">
                    <!--
                    var selfDescription = new Spry.Widget.ValidationTextarea("selfDescription_validate", {isRequired:true , validateOn:['blur']});
                    //-->
                    </script>
    </li>
    <li class="clearfix" style="margin-bottom:10px">
        <label id="memberAttributeFormLabel">What you're looking for in a partner:</label>
        <span id="whoDescription_validate"> <textarea name="whoDescription" class="textwidth" rows="5" cols="50" id="whoDescription" onBlur="" ></textarea> 
                    	<div class="formclear"></div>
                    <span class="textareaRequiredMsg">A value is required.</span> 
                    	<div class="formclear"></div>
                    </span>
                    <script type="text/javascript">
                    <!--
                    var whoDescription = new Spry.Widget.ValidationTextarea("whoDescription_validate", {isRequired:true , validateOn:['blur']});
                    //-->
                    </script>
    </li>
	</ul>
	</body>
    <input type='submit' value='Complete your profile'>
</form>
</div>
</body>
</html>