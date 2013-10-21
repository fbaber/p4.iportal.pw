<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	
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

	<?php if(isset($content)) echo $content; ?>

	<?php if(isset($client_files_body)) echo $client_files_body; ?>
</body>
</html>