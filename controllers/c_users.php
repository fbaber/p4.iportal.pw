<?php
class users_controller extends base_controller {

    public function __construct() {
        parent::__construct();
        echo "users_controller construct called<br><br>";
    } 

    public function index() {
        echo "This is the index page";
    }

    public function signup() {
        echo "This is the signup page";
		
		# Setup view
            $this->template->content = View::instance('v_users_signup');
            $this->template->title   = "Sign Up";

        # Render template
            echo $this->template;
    }

	public function p_signup() {

        # Dump out the results of POST to see what the form submitted
        #echo '<pre>';
        #print_r($_POST);
        #echo '</pre>';   

		# More data we want stored with the user
		$_POST['created']  = Time::now();
		$_POST['modified'] = Time::now();

		# Encrypt the password  
		$_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);            

		# Create an encrypted token via their email address and a random string
		$_POST['token'] = sha1(TOKEN_SALT.$_POST['email'].Utils::generate_random_string()); 

		# Insert this user into the database 
		$user_id = DB::instance(DB_NAME)->insert("users", $_POST);

		# For now, just confirm they've signed up - 
		# You should eventually make a proper View for this
		echo 'You are signed up';
		
    }
	
    public function login() {
        echo "This is the login page:<br>";
		echo "<br>";
				
		# Setup view
        $this->template->content = View::instance('v_users_login');
        $this->template->title   = "Login";

		# Render template
		echo $this->template;
    }

    public function logout() {
        echo "This is the logout page";
    }

    public function profile($user_name = NULL) {
		
		/*
		If you look at _v_template you'll see it prints a $content variable in the <body>
		Knowing that, let's pass our v_users_profile.php view fragment to $content so 
		it's printed in the <body>
		*/
		$this->template->content = View::instance('v_users_profile');

		#$title is another variable used in _v_template to set the <title> of the page
		$this->template->title = "Profile";
		
		# ****************************** #
		
		# Create an array of 1 or many client files to be included in the head
		$client_files_head = Array(
			'/css/widgets.css',
			'/css/profile.css'
			);

		# Use load_client_files to generate the links from the above array
		$this->template->client_files_head = Utils::load_client_files($client_files_head);  

		# Create an array of 1 or many client files to be included before the closing </body> tag
		$client_files_body = Array(
			'/js/widgets.min.js',
			'/js/profile.min.js'
			);

		# Use load_client_files to generate the links from the above array
		$this->template->client_files_body = Utils::load_client_files($client_files_body);  

		# ****************************** #
		
		# Pass information to the view fragment
		$this->template->content->user_name = $user_name;

		# Render View
		echo $this->template;
		
		
		
		# Create a new View instance
		# Do *not* include .php with the view name
		#$view = View::instance('v_users_profile');

		# Pass information to the view instance
		#$view->user_name = $user_name;

		# Render View
		#echo $view;
	
		
		/*
        if($user_name == NULL) {
            echo "No user specified";
        }
        else {
            echo "This is the profile for ".$user_name;
        } */
    }

} # end of the class