<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title . " - "; ?>To Flabber</title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	<meta name="viewport" content="width=device-width; initial-scale=0.9; maximum-scale=1.0; minimum-scale=0.7;">
	<!-- Google Web Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Belleza' rel='stylesheet' type='text/css'>
	
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
	
</head>

<body>	
	
	<div id='menu'>
		<center>
			<a href='/'>Home</a>

			<!-- Menu for users who are logged in -->
			<?php if($user): ?>

				<a href='/users/logout'>Logout</a>
				<a href='/users/profile'>Profile</a>
				<a href='/posts/add'>Flabb</a>
				<a href='/posts/users'>Flabbers</a>
				<a href='/users/profile'>Profile</a>

			<!-- Menu options for users who are not logged in -->
			<?php else: ?>

				<a href='/users/signup'>Sign up</a>
				<a href='/users/login'>Log in</a>

			<?php endif; ?>
		</center>
    </div>

    <br>

    <?php if(isset($content)) echo $content; ?>

	<?php if(isset($client_files_body)) echo $client_files_body; ?>
	<hr/>
	<div id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <p class="right pull-right">Flabber<br>Project 2<br>
                        Furrukh Baber<br>
                        <a href="mailto:furrukh.baber@gmail.com">Furrukh.baber@gmail.com</a>
                        </p>
                    </div>
                </div>
            </div>
    </div> <!-- footer -->
	
	 <script src="/js/bootstrap.min.js"></script>
</body>
</html>