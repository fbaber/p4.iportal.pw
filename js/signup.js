$("#signup").submit(function(){
		var first_name = $("#first_name").val();
		var last_name = $("#last_name").val();
		var email = $("#email").val();
		var cpassword = $("#cpassword").val();
		var password = $("#password").val();
		var age = $("#age").val();
		var city = $("#city").val();
		var state = $("#state").val();
		var country = $("#country").val();
			 // alert("Hello");
		if($.isNumeric(parseInt(first_name)) || first_name==null || first_name=="" || !(first_name.match(/^[A-z]+$/)))
			{
			return false;
			}
		else if($.isNumeric(parseInt(last_name)) || last_name==null || last_name=="" || !(last_name.match(/^[A-z]+$/)))
			{
			return false;
			}
		else if($.isNumeric(email) || email==null || email=="" || !(email.match(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/)))
			{
			return false;
			}
		else if((password.length < 7) || !(cpassword == password))
			{
			return false;
			}
		else if(!($.isNumeric(age)) || age<18 || age>99)
			{
			return false;
			}
		else if($.isNumeric(parseInt(city)) || city==null || city=="" || !(city.match(/^[a-zA-Z0-9- ]+$/)))
			{
			return false;
			}
		else if($.isNumeric(parseInt(state)) || state==null || state=="" || !(state.match(/^[a-zA-Z0-9- ]+$/)))
			{
			return false;
			}
		else if($.isNumeric(parseInt(country)) || country==null || country=="" || !(country.match(/^[a-zA-Z0-9- ]+$/)))
			{
			return false;
			}
		else
			{
			return true;
			}
});	

