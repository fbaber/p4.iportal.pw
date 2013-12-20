<?php if($user) router::redirect('/currency/swap');;?>
<div class="content" style="height:560px;">
<div class="row" style="margin-right: 24px; margin-left: 24px;margin-top: 50px;">
<div class="col-md-10 col-md-offset-1">
<h1 class="page-header">Welcome to <?=APP_NAME?><?php if($user) echo ', '.$user->first_name; ?></h1>
</div>
</div>
<div class="row" style="padding-right: 15px; padding-left: 15px; border-right-width: 45px; border-left-width: 45px; margin-left: 24px; margin-right: 24px;">
<div class="col-md-4 col-md-offset-1 centered">
<h2 class="centered">Sign Up</h2>
<p>Please sign in to Exchange <i><strong>Currencies using real time rates</strong></i> </p>
<a href="/users/signup" class="btn btn-custom">Create an Account</a>
</div>
<div class="col-md-4 col-md-offset-2 centered">
<h2>Log In</h2>
<p>Already have an account? Log into your Account</p>
<a href="/users/login" class="btn btn-custom">Log In</a>
</div>
</div>
</div>
<br><br><br>
