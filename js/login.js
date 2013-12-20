$("#first_name").change(function() {
			  //xTriggered++;
			  
		var first_name = $("#first_name").val();
			 // alert("Hello");
		if($.isNumeric(parseInt(first_name)) || first_name==null || first_name=="" || !(first_name.match(/^[A-z]+$/)))
			{
			//alert("Please enter a valid first name!");
			$('#fname_msg').html("Please enter a valid first name.");
			}
			else
			{
			$('#fname_msg').html(" ");
			}
		});
$("#last_name").change(function() {
			  //xTriggered++;
			  
		var first_name = $("#last_name").val();
			 // alert("Hello");
		if($.isNumeric(parseInt(first_name)) || first_name==null || first_name=="" || !(first_name.match(/^[A-z]+$/)))
			{
			//alert("Please enter a valid first name!");
			$('#lname_msg').html("Please enter a valid last name.");
			}
			else
			{
			$('#lname_msg').html(" ");
			}
		});

// Validate Email address field 
$("#email").change(function() {
			  //xTriggered++;
			  
		var email = $("#email").val();
			 // alert("Hello");
		if($.isNumeric(email) || email==null || email=="" || !(email.match(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/)))
			{
			//alert("Please enter a valid first name!");
			$('#email_msg').html("Please enter a valid email.");
			}
			else
			{
			$('#email_msg').html(" ");
			}
		});
// Validate the password lenght 
$("#password").change(function(){
		//$("#cpassword").validate();
		var password = $("#password").val();
		console.log(password);
		if((password.length < 7)){
		//alert(" pw <5");
		$('#password_msg').html("Password must be 7 characters in length.");
		}
		else
		{
		$('#password_msg').html(" ");
		}
});

$("#cpassword").change(function(){
		//$("#cpassword").validate();
		var cpassword = $("#cpassword").val();
		var password = $("#password").val();
		console.log(password);
		if((password.length < 7) || !(cpassword == password)){
		//alert(" pw <5");
		$('#cpassword_msg').html("Please enter the same Password as above.");
		}
		else
		{
		$('#cpassword_msg').html(" ");
		}
});


// Validate the Age of the user

$("#age").change(function() {
			  //xTriggered++;
			  
		var age = $("#age").val();
			 // alert("Hello");
			 //console.log(age);
		if(!($.isNumeric(age)) || age<18 || age>99)
			{
			//alert("Please enter a valid first name!");
			$('#age_msg').html("Please enter a valid age.");
			}
			else
			{
			$('#age_msg').html(" ");
			}
		});

// Validate the City 		
$("#city").change(function() {
			  //xTriggered++;
			  
		var city = $("#city").val();
			 // alert("Hello");
		if($.isNumeric(parseInt(city)) || city==null || city=="" || !(city.match(/^[a-zA-Z0-9- ]+$/)))
			{
			//alert("Please enter a valid first name!");
			$('#city_msg').html("Please enter a valid City name.");
			}
			else
			{
			$('#city_msg').html(" ");
			}
		});


// Validate the country 		
$("#country").change(function() {
			  //xTriggered++;
			  
		var country = $("#country").val();
			 // alert("Hello");
		if($.isNumeric(parseInt(country)) || country==null || country=="" || !(country.match(/^[a-zA-Z0-9- ]+$/)))
			{
			//alert("Please enter a valid first name!");
			$('#country_msg').html("Please enter a valid country name.");
			}
			else
			{
			$('#country_msg').html(" ");
			}
		});

// Validate the state 		
$("#state").change(function() {
			  //xTriggered++;
			  
		var state = $("#state").val();
			 // alert("Hello");
		if($.isNumeric(parseInt(state)) || state==null || state=="" || !(state.match(/^[a-zA-Z0-9- ]+$/)))
			{
			//alert("Please enter a valid first name!");
			$('#state_msg').html("Please enter a valid state name.");
			}
			else
			{
			$('#state_msg').html(" ");
			}
		});