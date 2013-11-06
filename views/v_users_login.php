<div class="col-md-4 col-md-offset-1 centered">
<form method='POST' action='/users/p_login'class="userform">
	<br>
	<h3>Please login to the site:</h3>
    Email<br>
    <input type='text' name='email' required="required">

    <br><br>

    Password<br>
    <input type='password' name='password' required="required">

    <br><br>
	
	<?php if(isset($error)): ?>
        <div class='error'>
            Login failed. Please double check your email and password.
        </div>
        <br>
    <?php endif; ?>
	
    <input type='submit' value='Log in'>

</form>
</div>