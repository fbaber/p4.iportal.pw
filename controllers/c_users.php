<?php
class users_controller extends base_controller {
	
	
    public function __construct() {
        parent::__construct();
        # echo "users_controller construct called<br><br>";
    } 

	public function new_user_id(){
		global $new_user_id;
	}
    public function index() {
        echo "This is the index page";
    }

    public function signup() {
        
		# echo "This is the signup page";
		
		# Setup view
            $this->template->content = View::instance('v_users_signup');
            $this->template->title   = "Sign Up";
		
        # Render template
            echo $this->template;
    }
	
	# Capture User preference who they are seeking and their biographical details 
	public function user_signup_details() {

        # setup the view
        #------------------------------------------------------------------
        $this->template->content = View::instance('v_users_details');
        $this->template->title = "Your Profile Details";
				
			
		// check whether this user's email already exists (sanitize input first)
        $_POST = DB::instance(DB_NAME)->sanitize($_POST);
        # echo $new_user_id;
		# Associate this post with this user
        #$_POST['user_id']  = $GLOBALS['new_user_id'];
		
		# Dump out the results of POST to see what the form submitted
        #echo '<pre>';
        #print_r($_POST);
        #echo '</pre>';   

		# Insert this user details into the database 
		$user_id = DB::instance(DB_NAME)->insert("user_details", $_POST);

		# Added this code 10-24-13 to display a page when user have singed up for the app 
		# Setup view
            $this->template->content = View::instance('v_users_signed_up');
            $this->template->title   = "Sign Up Success";
			
		# Render template
            echo $this->template;
		
    }
	
	# User Details function ends here
	public function p_signup() {

        # setup the view
        #------------------------------------------------------------------
        $this->template->content = View::instance('v_users_signup');
        $this->template->title = "Signed-up";
				
		# set error var to false
        $error = false;
		
		# initiate error
        $this->template->content->error = '<br>';
		
		
		// check whether this user's email already exists (sanitize input first)
        $_POST = DB::instance(DB_NAME)->sanitize($_POST);
        $exists = DB::instance(DB_NAME)->select_field("SELECT email FROM users WHERE email = '" . $_POST['email'] . "'");
		
		
		if (isset($exists)) {
            $error = true;
            $this->template->content->error = 'This email address is already registered with the site, please log in.';
            echo $this->template;          
            }
        else{	
		# Dump out the results of POST to see what the form submitted
        #echo '<pre>';
        #print_r($_POST);
        #echo '</pre>';   
		#$GLOBALS['new_user_id']= $_POST['user_id'];
		# More data we want stored with the user
		$_POST['created']  = Time::now();
		$_POST['modified'] = Time::now();

		# Encrypt the password  
		$_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);            

		# Create an encrypted token via their email address and a random string
		$_POST['token'] = sha1(TOKEN_SALT.$_POST['email'].Utils::generate_random_string()); 

		# Insert this user into the database 
		$user_id = DB::instance(DB_NAME)->insert("users", $_POST);
		
		# Build a multi-dimension array of recipients of this email
		$to[] = Array("name" => $_POST['first_name'], "email" => $_POST['email']);
				
		# Build a single-dimension array of who this email is coming from
		# note it's using the constants we set in the configuration above)
		$from = Array("name" => APP_NAME, "email" => APP_EMAIL);

		# Subject
		$subject = "Welcome to P4 Dating Site";

		# You can set the body as just a string of text
		$body = "Welcome to P4 Dating Site! We hope you find the person you are looking for. Be sure to visit us often by visiting http://p4.iportal.pw
		";

		# OR, if your email is complex and involves HTML/CSS, you can build the body via a View just like we do in our controllers
		# $body = View::instance('e_users_welcome');

		# Build multi-dimension arrays of name / email pairs for cc / bcc if you want to 
		$cc  = "";
		$bcc = "";

		# With everything set, send the email
		$email = Email::send($to, $from, $subject, $body, true, $cc, $bcc);
		
		## Test email 
		 
		 # Added this code 10-24-13 to display a page when user have singed up for the app 
		# Setup view
            $this->template->content = View::instance('v_users_details');
            $this->template->title   = "STEP 2. Your Basic Details";
			
		# Render template
            echo $this->template;
		}
    }
	
    public function login($error = NULL) {
        # echo "This is the login page:<br>";
		# echo "<br>";
		
		# If user is logged in, redirect them to the profile page
		if($this->user) {
        Router::redirect('/users/profile');
		}
		
		
		# Create an array of 1 or many client files to be included in the head
		$client_files_head = Array(
			'/css/bootstrap.min.css',
			'css/font-awesome.css',
			'/css/bootstrap-responsive.min.css',
			'/css/font-awesome-ie7.css',
			'/css/boot-business.css'
			);

		# Use load_client_files to generate the links from the above array
		$this->template->client_files_head = Utils::load_client_files($client_files_head);  

		# Create an array of 1 or many client files to be included before the closing </body> tag
		$client_files_body = Array(
			'/js/bootstrap.min.js',
			'/js/profile.min.js'
			);

		# Use load_client_files to generate the links from the above array
		$this->template->client_files_body = Utils::load_client_files($client_files_body);  
		
		# Setup view
        $this->template->content = View::instance('v_users_login');
        $this->template->title   = "Login";

		# Pass data to the view
		$this->template->content->error = $error;
		# Render template
		echo $this->template;
    }
	
	public function p_login() {

    # Sanitize the user entered data to prevent any funny-business (re: SQL Injection Attacks)
    $_POST = DB::instance(DB_NAME)->sanitize($_POST);

    # Hash submitted password so we can compare it against one in the db
    $_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);

    # Search the db for this email and password
    # Retrieve the token if it's available
    $q = "SELECT token 
        FROM users 
        WHERE email = '".$_POST['email']."' 
        AND password = '".$_POST['password']."'";

    $token = DB::instance(DB_NAME)->select_field($q);

    # If we didn't find a matching token in the database, it means login failed
    if(!$token) {

        # Send them back to the login page
		# 10.22.13 added the parameter error
        Router::redirect("/users/login/error");

    # But if we did, login succeeded! 
    } else {

        /* 
        Store this token in a cookie using setcookie()
        Important Note: *Nothing* else can echo to the page before setcookie is called
        Not even one single white space.
        param 1 = name of the cookie
        param 2 = the value of the cookie
        param 3 = when to expire
        param 4 = the path of the cooke (a single forward slash sets it for the entire domain)
        */
        setcookie("token", $token, strtotime('+2 weeks'), '/');

        # Send them to the main page - or whever you want them to go
        Router::redirect("/");

		}

	}
	
    public function logout() {
        
		# echo "This is the logout page";
		# Generate and save a new token for next login
		$new_token = sha1(TOKEN_SALT.$this->user->email.Utils::generate_random_string());

		# Create the data array we'll use with the update method
		# In this case, we're only updating one field, so our array only has one entry
		$data = Array("token" => $new_token);

		# Do the update
		DB::instance(DB_NAME)->update("users", $data, "WHERE token = '".$this->user->token."'");

		# Delete their token cookie by setting it to a date in the past - effectively logging them out
		setcookie("token", "", strtotime('-1 year'), '/');

		# Send them back to the main index.
		Router::redirect("/");
    }

    public function profile() {
	
		# If user is blank, they're not logged in; redirect them to the login page
		if(!$this->user) {
        Router::redirect('/users/login');
		}

    # If they weren't redirected away, continue:

    # Setup view
    $this->template->content = View::instance('v_users_profile');
    $this->template->title   = "Profile of ".$this->user->first_name." ".$this->user->last_name;

   
		# Create an array of 1 or many client files to be included in the head
		$client_files_head = Array(
			'/css/bootstrap.min.css',
			'/css/bootstrap-theme.min.css'
			);

		# Use load_client_files to generate the links from the above array
		$this->template->client_files_head = Utils::load_client_files($client_files_head);  

		# Create an array of 1 or many client files to be included before the closing </body> tag
		$client_files_body = Array(
			'/js/bootstrap.min.js',
			'/js/profile.min.js'
			);

		# Use load_client_files to generate the links from the above array
		$this->template->client_files_body = Utils::load_client_files($client_files_body);  
		
		# ********* for Editing Post function 
		
		# Build the query
            $q = 'SELECT
            posts.user_id,
			posts.content,
            posts.created,
            posts.post_id
                FROM posts
        WHERE posts.user_id = '.$this->user->user_id.' 
            ORDER BY posts.created DESC' ;

            # Run the query
            $posts = DB::instance(DB_NAME)->select_rows($q);

            # Pass data to the View
            $this->template->content->posts = $posts;    
		
		# **************
		 # Render template
		echo $this->template;
    }

} # end of the class