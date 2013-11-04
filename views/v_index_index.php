<?php if($user) router::redirect('/posts');;?>
<div id="content">
<div class="row">
<div class="col-md-10 col-md-offset-1">
<h1 class="page-header">Welcome to <?=APP_NAME?><?php if($user) echo ', '.$user->first_name; ?></h1>
</div>
</div>
<div class="row">
<div class="col-md-4 col-md-offset-1 centered">
<h2 class="centered">Sign Up</h2>
<p>Please sign in to Flabb on <i><strong>Flabber</strong></i> </p>
<a href="/users/signup" class="btn btn-custom">Create an Account</a>
</div>
<div class="col-md-4 col-md-offset-2 centered">
<h2>Log In</h2>
<p>Already have an account? Log into your Account</p>
<a href="/users/login" class="btn btn-custom">Log In</a>
</div>
</div>
<br><br><br>

<div class="panel panel-default">
	<div class="panel-body" style="left:7%; position:relative;">
                        
                        <ul>
							<li><h4>Flabber +1 Features:</h4></li>
                            <li>Sign up confirmation to the new user.</li>
                            <li>Editing your posts</li>
                        </ul>
	</div>
</div> 
</div>