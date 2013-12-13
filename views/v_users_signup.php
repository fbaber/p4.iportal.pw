
<div class="content">
<form method='POST' action='/users/p_signup'>
	<h3>Please sign up to start Dating</h3>
	<br>
    <label>First Name</label><br>
    <input class="input-large" type='text' name='first_name' required="required">
    <br><br>

    <label>Last Name</label><br>
    <input class="input-large" type='text' name='last_name' required="required">
    <br><br>

    <label>Email</label><br>
    <input class="input-large" type='text' name='email' required="required">
    <br><br>
	
	<label>Age</label><br>
    <input class="input-large" type='text' name='age' required="required">
    <br><br>
	<label>Country</label><br>
    <input class="input-large" type='text' name='country' required="required">
    <br><br><label>State</label><br>
    <input class="input-large" type='text' name='state' required="required">
    <br><br><label>City</label><br>
    <input class="input-large" type='text' name='city' required="required">
    <br><br>
	
	<label>I am a</label><br>
    <div class="row" style="padding-left: 20px;">
		<label class="radio-inline">
          <input name="radioGroup" id="radio1" value="option1" type="radio" checked=""> Male
        </label>
        <label class="radio-inline">
          <input name="radioGroup" id="radio2" value="option2" type="radio"> Female
        </label>
  	</div>
	<br><br>
	<label>Seeking a </label><br>
    
	<div class="row" style="padding-left: 20px;">
		<label class="radio-inline">
          <input name="radioGroup2" id="radio1" value="option1" type="radio"> Male
        </label>
        <label class="radio-inline">
          <input name="radioGroup2" id="radio2" value="option2" type="radio" checked=""> Female
        </label>
  	</div><br><br>
	<label>Chose a Password</label><br>
    <input class="input-large" type='password' name='password' required="required">
    <br><br>
	
	<label>Confirm Password</label><br>
    <input class="input-large" type='password' name='password' required="required">
    <br><br>
	
	<br><br>
            <?php if(isset($error)): ?>
                <div class='error'>
                        <?php echo $error; ?> 
                        <br>                     
                </div>
                <br>
            <?php endif; ?>
    <input type='submit' value='Sign up'>

</form>
</div>