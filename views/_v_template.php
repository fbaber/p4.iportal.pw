<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title . " - "; ?>Currency Exchange</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	<meta name="viewport" content="width=device-width, initial-scale=0.9, maximum-scale=1.0, minimum-scale=0.7">
	<!-- Google Web Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Belleza' rel='stylesheet' type='text/css'>
	<!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" media="all">
    <!-- Bootstrap responsive -->
    <link href="/css/bootstrap-responsive.min.css" rel="stylesheet">
    <!-- Font awesome - iconic font with IE7 support --> 
    <link href="/css/font-awesome.css" rel="stylesheet">
    <link href="/css/font-awesome-ie7.css" rel="stylesheet">
	<link href="/fonts/fontawesome-webfont.woff" rel="stylesheet">
	<link href="/fonts/fontawesome-webfont.ttf" rel="stylesheet">
    <!-- Bootbusiness theme -->
    <link href="/css/boot-business.css" rel="stylesheet">
	<!-- Common CSS/JSS -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</head>
<body>
    <!-- Start: HEADER -->
    <header>
      <!-- Start: Navigation wrapper -->
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <a href="/" class="brand brand-bootbus">Currency Exchange App</a>
			<div class="fillspace"></div>
            <!-- Below button used for responsive navigation -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Start: Primary navigation -->
            <div class="nav-collapse collapse">        
              <ul class="nav pull-right">
                <!-- Menu for users who are logged in -->
				<?php if($user): ?>
                <li><a href='/users/logout'>Logout</a></li>
                <li><a href='/currency/swap'>Exchange Currency</a></li>
				<li><a href='/currency/currency_exchange_history'>Your Currency Exchange History</a></li>
				<li><a href='/posts/add'>Post a note</a></li>
				<li><a href='/posts/users'>Browse members</a></li>
				<li><a href='/posts'>Members Posts</a></li>
				<li><a href='/users/profile'>My Posts</a></li>
				<!-- Menu options for users who are not logged in -->
				<?php else: ?>
				<li><a href='/users/signup'>Sign up</a></li>
				<li><a href='/users/login'>Log in</a></li>
				<?php endif; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- End: Navigation wrapper -->   
    </header>
	<?php if(isset($content)) echo $content; ?>
	<?php if(isset($client_files_body)) echo $client_files_body; ?>
    <!-- Start: FOOTER -->
    <footer>
	<div id="footer">
      <div class="container" style="bottom:0px;">
        <div class="row">
          <div class="span2">
            <h4>About</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="http://finance.yahoo.com/currency-converter/#from=USD;to=EUR;amt=1" target="_blank">Patnerships</a></li>
                <li><a href="http://finance.yahoo.com/" target="_blank">News</a></li>
                </ul>
            </nav>          
          </div>
        </div>
      </div>
	  </div>
      <hr class="footer-divider">
      <div class="container">
        <p>
          &copy; Developed by : Furrukh Baber for CSCIE-150 
        </p>
      </div>
    </footer>
    <!-- End: FOOTER -->
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/boot-business.js"></script>
 </body>
</html>