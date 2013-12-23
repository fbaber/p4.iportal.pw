<div class="content" style="height:720px;">
<form method='POST' action='/users/p_login'class="userform">
	<br>
	<h3>Please login to the site:</h3>
    Email<br>
    <input type='text' name='email' required="required" placeholder="Email address">
    <br><br>
    Password<br>
    <input type='password' name='password' required="required" placeholder="Password">
    <br><br>
	<?php if(isset($error)): ?>
        <div class='error'>
            Login failed. Please double check your email and password.
        </div>
        <br>
    <?php endif; ?>
    <input type='submit' class="btn btn-primary" value='Log in'>
</form>
</div>