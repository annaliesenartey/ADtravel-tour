<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register Page</title>
</head>
<body>



	<h2>Register Here</h2>
	<!-- register form -->
	<form>
	  <label>User Name:</label><br>
	  <input type="text"name="uname" id="uname"><br>
	  <label>User Pass:</label><br>
	  <input type="password" name="upass" id="upass"><br><br>
	  <input type="submit" name="register" value="Register" onclick="validateandpost()" id="register">
	</form> 

	<!-- link to register -->
	<a href="login.php">Go to Login Page</a>


	<script type="text/javascript">
		function validateandpost(){
			//get form data
			var uemail = document.getElementById('uname');
			var upass = document.getElementById('upass');
			var regbutton = document.getElementById('register');

			var mailformat =/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/ ;

			if (mailformat.test(uemail.value)){
				alert('email is valid');
				//call the post method
				loadDoc(uemail, upass, regbutton);

			}else{
				alert('email is wrong');
				return false;
			}
			alert('this is after validation');



			//make a post request to register_proc page
			function loadDoc(uemail, upass, regbutton){  
				const request = new XMLHttpRequest();          
				const requestData = `uname=${uemail.value}&upass=${upass.value}&register=${regbutton.value}`;

				request.open('POST', 'register_proc.php');
				request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				request.send(requestData);
			}

			alert('User added successfully');


		}
	</script>

</body>
</html>