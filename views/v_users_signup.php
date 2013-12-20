
<div class="content" style="margin-top: 5px; border-left-width: 50px; padding-left: 50px;">
<form method='POST' action='/users/p_signup'>
	<h3>Please sign up to transfer money</h3>
	<br>
    <label>First Name</label><br>
    <input class="input-large" type='text' name='first_name' required="required" placeholder="First Name" id="first_name">
	<div id="fname_msg"style="color:#FF0040; font-family: "Arial";"></div>
    <br><br>

    <label>Last Name</label><br>
    <input class="input-large" type='text' name='last_name' required="required" placeholder="Last Name" id="last_name">
	<div id="lname_msg"style="color:#FF0040; font-family: "Arial";"></div>
    <br><br>

    <label>Email</label><br>
    <input class="input-large" type='email' name='email' required="required" placeholder="Email address" id="email">
	<div id="email_msg"style="color:#FF0040; font-family: "Arial";"></div>
    <br><br>
	
	<label>Age</label><br>
    <input class="input-large" type='number' name='age' required="required" placeholder="Age 18-99" id="age">
	<div id="age_msg"style="color:#FF0040; font-family: "Arial";"></div>
    <br><br>
	<label>Country</label><br>
    <input class="input-large" type='text' name='country' required="required" placeholder="Country" id="country">
	<div id="country_msg"style="color:#FF0040; font-family: "Arial";"></div>
    <br><br><label>State</label><br>
    <input class="input-large" type='text' name='state' required="required" placeholder="State" id="state">
	<div id="state_msg"style="color:#FF0040; font-family: "Arial";"></div>
    <br><br><label>City</label><br>
    <input class="input-large" type='text' name='city' required="required" placeholder="City" id="city">
	<div id="city_msg"style="color:#FF0040; font-family: "Arial";"></div>
    <br><br>
<!--	
	<label>I am a</label><br>
    <div class="row" style="padding-left: 20px;">
		<label class="radio-inline">
          <input name="self_gender" id="self_gender" value="Male" type="radio" checked=""> Male
        </label>
        <label class="radio-inline">
          <input name="self_gender" id="self_gender" value="Female" type="radio"> Female
        </label>
  	</div>
	<br><br>
	<label>Seeking a </label><br>
    
	<div class="row" style="padding-left: 20px;">
		<label class="radio-inline">
          <input name="seeking_gender" id="seeking_gender" value="Male" type="radio"> Male
        </label>
        <label class="radio-inline">
          <input name="seeking_gender" id="seeking_gender" value="Female" type="radio" checked=""> Female
        </label>
  	</div><br><br> -->
	<label>Chose a Password</label><br>
    <input class="input-large" type='password' name='password' required="required" placeholder="Password" id="password">
	<div id="password_msg"style="color:#FF0040; font-family: "Arial";"></div>
    <br><br>
	
	<label>Confirm Password</label><br>
    <input class="password" type='password' required="required" placeholder="Confirm Password" id="cpassword">
	<div id="cpassword_msg"style="color:#FF0040; font-family: "Arial";"></div>
	<br><br>
            <?php if(isset($error)): ?>
                <div class='error'>
                        <?php echo $error; ?> 
                        <br>                     
                </div>
                <br>
            <?php endif; ?>
    <input type='submit' class="btn btn-primary" value='Sign up'>

</form>
</div>