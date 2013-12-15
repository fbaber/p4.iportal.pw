<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title . " - "; ?>To P4 Dating Site</title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	<meta name="viewport" content="width=device-width; initial-scale=0.9; maximum-scale=1.0; minimum-scale=0.7;">
	<!-- Google Web Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Belleza' rel='stylesheet' type='text/css'>
	
	<link href="/css/sample-app.css" rel="stylesheet" media="all">
	<!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" media="all">
    <!-- Bootstrap responsive -->
    <link href="/css/bootstrap-responsive.min.css" rel="stylesheet">
    <!-- Font awesome - iconic font with IE7 support --> 
    <link href="/css/font-awesome.css" rel="stylesheet">
    <link href="/css/font-awesome-ie7.css" rel="stylesheet">
    <!-- Bootbusiness theme -->
    <link href="/css/boot-business.css" rel="stylesheet">
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
    <!-- Start: HEADER -->
    <header>
      <!-- Start: Navigation wrapper -->
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <a href="/" class="brand brand-bootbus">P4 - Dating</a>
            <!-- Below button used for responsive navigation -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Start: Primary navigation -->
            <div class="nav-collapse collapse">        
              <ul class="nav pull-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li class="nav-header">SERVICES</li>
                    <li><a href="#">Meet ups</a></li>
                    <li><a href="#">Match making</a></li>
                  </ul>                  
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Our works</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Blog</a></li>
                  </ul>
                </li>
				<!-- Menu for users who are logged in -->
				<?php if($user): ?>
                <li><a href='/users/logout'>Logout</a></li>
                <li><a href='/users/profile'>Profile</a></li>
                <li><a href='/posts/add'>Ping Someone</a></li>
				<li><a href='/posts/users'>Browse members</a></li>
				<li><a href='/currency/swap'>All services</a></li>
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
    <!-- End: HEADER -->
	
	
    <!-- Start: MAIN CONTENT 
    <div class="content">
      <!-- Start: slider 
      <div class="slider">
        <div class="container-fluid">
          <div id="heroSlider" class="carousel slide">
            <div class="carousel-inner">
              <div class="active item">
                <div class="hero-unit">
                  <div class="row-fluid">
                    <div class="span7 marketting-info">
                      <h1>TELL ABOUT YOUR BUSINESS AND CORPORATE.</h1>
                      <p>
                        We are Bootbusiness and we are awesome.We solve your technology problems by our awesome products.
                        We are Bootbusiness and we are awesome.We solve your technology problems by our awesome products.
                      </p>
                      <h3>
                        <a href="#" class="btn">Learn more</a>
                      </h3>                      
                    </div>
                    <div class="span5">
                      <img src="/img/placeholder.jpg" class="thumbnail">
                    </div>
                  </div>                  
                </div>
              </div>
              <div class="item">
                <div class="hero-unit">
                  <div class="row-fluid">
                    <div class="span7 marketting-info">
                      <h1>TELL ABOUT YOUR NATURE OF WORK</h1>
                      <p>
                        We are Bootbusiness and we design ultimate website applications.
                        We are Bootbusiness and we design ultimate website applications.
                      </p>
                      <h3>
                        <a href="#" class="btn">Learn more</a>
                      </h3>                      
                    </div>
                    <div class="span5">
                      <img src="/img/placeholder.jpg" class="thumbnail">
                    </div>
                  </div>                  
                </div>
              </div>
              <div class="item">
                <div class="hero-unit">
                  <div class="row-fluid">
                    <div class="span7 marketting-info">
                      <h1>TELL ABOUT YOUR PRODUCT</h1>
                      <p>
                        Get excited about our products.We build awesome products in mobile.
                        We build awesome products in mobile.We build awesome products in mobile.
                      </p>
                      <h3>
                        <a href="#" class="btn btn-primary">Buy now</a>
                        <a href="#" class="btn">Learn more</a>
                      </h3>                      
                    </div>
                    <div class="span5">
                      <img src="/img/placeholder.jpg" class="thumbnail">
                    </div>
                  </div>                  
                </div>
              </div>
              <div class="item">
                <div class="hero-unit">
                  <div class="row-fluid">
                    <div class="span7 marketting-info">
                      <h1>TELL ABOUT YOUR ANOTHER PRODUCT</h1>
                      <p>
                        Get excited about our products.We build awesome products in mobile.
                        We build awesome products in mobile.We build awesome products in mobile.
                      </p>
                      <h3>
                        <a href="#" class="btn btn-primary">Buy now</a>
                        <a href="#" class="btn">Learn more</a>
                      </h3>                      
                    </div>
                    <div class="span5">
                      <img src="/img/placeholder.jpg" class="thumbnail">
                    </div>
                  </div>                  
                </div>
              </div>
            </div>
            <a class="left carousel-control" href="#heroSlider" data-slide="prev">‹</a>
            <a class="right carousel-control" href="#heroSlider" data-slide="next">›</a>
          </div>
        </div>
      </div>
      End: slider -->
     
	 <!-- Start: Services LIST 
        <div class="container">
          <div class="page-header">
            <h2>Our Services</h2>
          </div>
          <div class="row-fluid">
            <ul class="thumbnails">
              <li class="span4">
                <div class="thumbnail">
                  <img src="/img/placeholder-360x200.jpg" alt="product name">
                  <div class="caption">
                    <h3>Service title</h3>
                    <p>
                      Few attractive words about your service.Few attractive words about your service.
                      Few attractive words about your service.Few attractive words about your service.
                    </p>
                  </div>
                  <div class="widget-footer">
                    <p>
                      <a href="#" class="btn btn-primary">Try for free</a>&nbsp;
                      <a href="#" class="btn">Read more</a>
                    </p>
                  </div>
                </div>
              </li>
              <li class="span4">
                <div class="thumbnail">
                  <img src="/img/placeholder-360x200.jpg" alt="product name">
                  <div class="caption">
                    <h3>Service title</h3>
                    <p>
                      Few attractive words about your service.Few attractive words about your service.
                      Few attractive words about your service.Few attractive words about your service.
                    </p>
                  </div>
                  <div class="widget-footer">
                    <p>
                      <a href="#" class="btn btn-primary">Try for free</a>&nbsp;
                      <a href="#" class="btn">Read more</a>
                    </p>
                  </div>
                </div>
              </li>
              <li class="span4">
                <div class="thumbnail">
                  <img src="/img/placeholder-360x200.jpg" alt="product name">
                  <div class="caption">
                    <h3>Service title</h3>
                    <p>
                      Few attractive words about your service.Few attractive words about your service.
                      Few attractive words about your service.Few attractive words about your service.
                    </p>
                  </div>
                  <div class="widget-footer">
                    <p>
                      <a href="#" class="btn btn-primary">Try for free</a>&nbsp;
                      <a href="product.html" class="btn">Read more</a>
                    </p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      <!-- End: services LIST 
    </div>
    <!-- End: MAIN CONTENT 
-->
	<?php if(isset($content)) echo $content; ?>

	<?php if(isset($client_files_body)) echo $client_files_body; ?>
    <!-- Start: FOOTER -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="span2">
            <h4><i class="icon-cogs icon-white"></i> Services</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="#">Service1</a></li>
                <li><a href="#">Service2</a></li>
                <li><a href="#">Service3</a></li>
                <li><a href="#">All services</a></li>              
              </ul>
            </nav>
          </div>
          <div class="span2">
            <h4><i class="icon-beaker icon-white"></i> About</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="#">Our works</a></li>
                <li><a href="#">Patnerships</a></li>
                <li><a href="#">Leadership</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Blog</a></li>
              <ul>
            </nav>          
          </div>
          <div class="span2">
            <h4><i class="icon-thumbs-up icon-white"></i> Support</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Contact us</a></li>            
              </ul>
            </nav>
            <h4><i class="icon-legal icon-white"></i> Legal</h4>
            <nav>
              <ul class="quick-links">
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Security</a></li>      
              </ul>
            </nav>            
          </div>
          <div class="span3">
            <h4>Get in touch</h4>
            <div class="social-icons-row">
              <a href="#"><i class="icon-twitter"></i></a>
              <a href="#"><i class="icon-facebook"></i></a>
              <a href="#"><i class="icon-linkedin"></i></a>                                         
            </div>
            <div class="social-icons-row">
              <a href="#"><i class="icon-google-plus"></i></a>              
              <a href="#"><i class="icon-github"></i></a>
              <a href="mailto:soundar.yourmailid@gmail.com"><i class="icon-envelope"></i></a>        
            </div>
            <div class="social-icons-row">
              <i class="icon-phone icon-large phone-number"></i> +000000000000
            </div>
          </div>      
          <div class="span3">
            <h4>Get updated by email</h4>
            <form>
              <input type="text" name="email" placeholder="Email address">
              <input type="submit" class="btn btn-primary" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
      <hr class="footer-divider">
      <div class="container">
        <p>
          &copy; Developed by : 
        </p>
      </div>
    </footer>
    <!-- End: FOOTER -->
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/boot-business.js"></script>
  </body>
</html>