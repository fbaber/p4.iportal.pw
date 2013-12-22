<?php
class currency_controller extends base_controller {

    public function __construct() {
        parent::__construct();

        # Make sure user is logged in if they want to use anything in this controller
        if(!$this->user) {
            die("Members only. <a href='/users/login'>Login</a>");
        }
    }

    public function swap() {
		
				# Create an array of 1 or many client files to be included before the closing </body> tag
		$client_files_body = Array(
			'/js/bootstrap.min.js',
			'/js/login.js'
			);

		# Use load_client_files to generate the links from the above array
		$this->template->client_files_body = Utils::load_client_files($client_files_body); 
		
        # Setup view
        $this->template->content = View::instance('v_currency_exchange_form');
        $this->template->title   = "currency exchange";

        # Render template
        echo $this->template;

    }

    public function p_add() {
			
			
		if(isset($_POST['currency1'])) {
	    $currency1 = $_POST['currency1'];
		} else {
		   echo '<pre>';
			print_r($_POST);
			echo '</pre>';
		}
		
			// echo $Currecy1.' '.$Currency2.' '.$Value;
			 
			$currency1 = $_POST['currency1'];
			$currency2 = $_POST['currency2'];
			$value = $_POST['value'];
		 
			// echo $currency1.'---'.$currency2.'--'.$value;
			
			
			#echo "<h1> Currency converted per your request: </h1>";

		// Create an object to convert source currency to target currency
			require 'fx.php';
			$fx = new ForeignExchange($currency1, $currency2);

		// This function formats a value with 2 decimal places.
			function fmtMoney($amount)
			{
				return sprintf('%.2f', $amount);
			}

			$auPrice = $value;
			$exchange_value= fmtMoney($fx->toForeign($auPrice));
			//echo '<p>'.fmtMoney($auPrice).' '.$currency1.' is approximately '. fmtMoney($fx->toForeign($auPrice))
			//    .' in '. $currency2.' Currency'.'</p>';
			#echo '<br/>';
			#echo '<p>'.'<b>'.fmtMoney($auPrice).'</b>'.' '.$currency1.' is approximately '.'<b>'. fmtMoney($fx->toForeign($auPrice))
			#.'</b>'.' in '. $currency2.' Currency'.'</p>';
			#echo '<br/>';
			#echo '<p3>'.'*Note:The Exchange rates are delayed by 20 mins when markets are open.'.'</p3>';
		$this->template->content = View::instance('v_currency_exchange_result');
            $this->template->title = "currency exchange results";
		
		# Associate this post with this user
        
		$_POST['user_id']  = $this->user->user_id;
		
		$_POST['exchange_value'] = $exchange_value;

        # Unix timestamp of when this post was created / modified
        $_POST['as_of_date']  = Time::now();
		
		# Pass data to the View
			$this->template->content->value = $value;
            $this->template->content->currency1 = $currency1;    
			$this->template->content->currency2 = $currency2;
			$this->template->content->exchange_value = $exchange_value;
			$this->template->content->time_stamp = $_POST['as_of_date'];
		
		# **************
		 # Render template
			echo $this->template;
		
        
        #$_POST['modified'] = Time::now();

        # Insert
        # Note we didn't have to sanitize any of the $_POST data because we're using the insert method which does it for us
        DB::instance(DB_NAME)->insert('currency_tbl', $_POST);

        # Quick and dirty feedback
        # echo "Your post has been added. <a href='/posts/add'>Add another</a>";
		
		# Send the user to profile page where they can see the posts
		#Router::redirect("/currency/swap");
    }
	
	public function currency_exchange_history() {

	# Set up the View
    $this->template->content = View::instance('v_currency_exchange_history');
    $this->template->title   = "Your Currency exchange history";

    # Query
    $q = 'SELECT 
            posts.content,
            posts.created,
			posts.post_id,
            posts.user_id AS post_user_id,
            users_users.user_id AS follower_id,
            users.first_name,
            users.last_name
        FROM posts
        INNER JOIN users_users 
            ON posts.user_id = users_users.user_id_followed
        INNER JOIN users 
            ON posts.user_id = users.user_id
        WHERE users_users.user_id = '.$this->user->user_id;
	
	$q2 = "SELECT * 
        FROM currency_tbl
        WHERE user_id = ".$this->user->user_id;
    # Run the query, store the results in the variable $posts
    $posts = DB::instance(DB_NAME)->select_rows($q2);

    # Pass data to the View
    $this->template->content->posts = $posts;

    # Render the View
    echo $this->template;

	}
	
	# Adding function to follow users
	
	public function users() {

    # Set up the View
    $this->template->content = View::instance("v_posts_users");
    $this->template->title   = "Users";

    # Build the query to get all the users
    $q = "SELECT *
        FROM users";

    # Execute the query to get all the users. 
    # Store the result array in the variable $users
    $users = DB::instance(DB_NAME)->select_rows($q);

    # Build the query to figure out what connections does this user already have? 
    # I.e. who are they following
    $q = "SELECT * 
        FROM users_users
        WHERE user_id = ".$this->user->user_id;

    # Execute this query with the select_array method
    # select_array will return our results in an array and use the "users_id_followed" field as the index.
    # This will come in handy when we get to the view
    # Store our results (an array) in the variable $connections
    $connections = DB::instance(DB_NAME)->select_array($q, 'user_id_followed');

    # Pass data (users and connections) to the view
    $this->template->content->users       = $users;
    $this->template->content->connections = $connections;

    # Render the view
    echo $this->template;
	}
	
	# Function to follow a users posts
	
	public function follow($user_id_followed) {

    # Prepare the data array to be inserted
    $data = Array(
        "created" => Time::now(),
        "user_id" => $this->user->user_id,
        "user_id_followed" => $user_id_followed
        );

    # Do the insert
    DB::instance(DB_NAME)->insert('users_users', $data);

    # Send them back
    Router::redirect("/posts/users");

	}

	# Function to unfollow a users posts
	public function unfollow($user_id_followed) {

    # Delete this connection
    $where_condition = 'WHERE user_id = '.$this->user->user_id.' AND user_id_followed = '.$user_id_followed;
    DB::instance(DB_NAME)->delete('users_users', $where_condition);

    # Send them back
    Router::redirect("/posts/users");

	}
	
	# Add functionality to edit posts 2ns +1 feature
	
	public function edit($edited) {
            # Set up the View
            $this->template->content = View::instance('v_posts_edit');
                    
            # Build the query to get the post
            $q = "SELECT *
         FROM posts
         WHERE user_id = ".$this->user->user_id. " AND
         post_id = ".$edited;

            # Execute the query to get all the users.
            # Store the result array in the variable $post
            $_POST['editable'] = DB::instance(DB_NAME)->select_row($q);
            
            # Pass data to the view
            $this->template->content->post = $_POST['editable'];
            
			# print_r($_POST);
            # Render template
                echo $this->template;         

    }
    
    public function p_edit($id) {
			
			
			#print_r($id);
			#die();
            # Prevent SQL injection attacks by sanitizing the data the user entered in the form
            #    $_POST = DB::instance(DB_NAME)->sanitize($_POST);
    
            # Set up the View
            # Delete 
			#$this->template->content = View::instance('v2_posts_2_edit');
                  
                  # Set the modified time
            $_POST['modified'] = Time::now();
            
            # Be sure to Associate this post with this user
        $_POST['user_id'] = $this->user->user_id;
         
                # set up the where conditon and update the post.
                $where_condition = 'WHERE post_id = '.$id;
                $updated_post = DB::instance(DB_NAME)->update('posts', $_POST, $where_condition);

                # Send them back
               Router::redirect('/users/profile');
    }
	
	# +1 functionality end 
}