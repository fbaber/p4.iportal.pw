<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title . " - "; ?>To Flabber</title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	<meta name="viewport" content="width=device-width; initial-scale=0.9; maximum-scale=1.0; minimum-scale=0.7;">
	<!-- Google Web Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Belleza' rel='stylesheet' type='text/css'>
	
	<link href="/css/sample-app.css" rel="stylesheet" media="all">
	<!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" media="all">
		
	<!-- Common JS/CSS: In the previous examples, we were loading hypothetical CSS and JS files that were specific to profile. It's likely though, 
	that you may have CSS and JS that needs to be loaded on every page of your app such as a master StyleSheet or jQuery. In this 
	case, you can just hard code the includes into your _v_template.php file rather than invoking it from the controllers each time. -->
	
	<!-- Common CSS/JSS -->
    <link rel="stylesheet" href="/css/app.css" type="text/css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>


</head>

<body>	
	
	<div id="header">
	<div id='menu' style="background-color:#A9F5E1;text-align:center;height:50px;width:1250px;float:center; font-family:Georgia Bold; font-size: 18px;position:fixed; margin-right: 50px; margin-left: 50px;border: 2px solid;
    border-radius: 20px 20px 20px 20px;">
			<a href='/'>Home</a>

			
			<!-- Menu for users who are logged in -->
			<?php if($user): ?>

				<a href='/users/logout'>Logout</a>
				<a href='/users/profile'>Profile</a>
				<a href='/posts/add'>Flabb</a>
				<a href='/posts/users'>Flabbers</a>
				
			<!-- Menu options for users who are not logged in -->
			<?php else: ?>

				<a href='/users/signup'>Sign up</a>
				<a href='/users/login'>Log in</a>

			<?php endif; ?>
			
    </div>
	</div>

    <br>
	
    <?php if(isset($content)) echo $content; ?>

	<?php if(isset($client_files_body)) echo $client_files_body; ?>
	
<!-- <div class="footer" style="clear:both;text-align:center;width:1500px;position:absolute;op: 50px;
		right: 50px;">
Copyright © Flabber</div>
-->

<div class="footer" style="clear:both;text-align:center;width:1200px;position:fixed;op: 50px;
		right: 50px; bottom:0px; margin-right: 24px; margin-left: 24px;">
Copyright © Flabber</div>
	<!-- footer -->

	 <script src="/js/bootstrap.min.js"></script>
</body>
</html>