
<div class="payload">
<form method='POST' action='/users/p_signup'>
	<h3>Please sign up to start flabbing:</h3>
    <label>First Name</label><br>
    <input class="input-small" type='text' name='first_name' required="required">
    <br><br>

    <label>Last Name</label><br>
    <input class="input-small" type='text' name='last_name' required="required">
    <br><br>

    <label>Email</label><br>
    <input class="input-small" type='text' name='email' required="required">
    <br><br>

    <label>Password</label><br>
    <input class="input-small" type='password' name='password' required="required">
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