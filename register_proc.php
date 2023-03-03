<?php 

//check if register form was submited
//by checking if the submit button element name was sent as part of the request

if (isset($_POST['register'])) 
{
	//collection form data
	$email =  $_POST['email'];
	$user_pass = $_POST['password'];
	$username = $_POST['username'];
	$country = $_POST['country'];

	//database connection parameters
	$servername = "localhost";
	$username = "root";
	$password = "Ad12@34.";
	$dbname = "kars";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		//stop executing the code and echo error
	  die("Connection failed: " . $conn->connect_error);
	} 

	//encrypt password
	//use the php password_hard function
	$encrypted_pass = password_hash($user_pass, PASSWORD_DEFAULT);

	//write query
	//user role (1 is admin, 2 is standard user)
	//user status( 1 is active, 2 is inactive)
	$sql = "INSERT INTO customer(username, user_pass, email, country, user_role, user_status)
	VALUES ('$user_name', '$encrypted_pass', '1', '1')";

	// check if query worked
	if ($conn->query($sql) === TRUE) {
	  
		//redirect to homepage
		header("Location: login.html");
		exit();

	} else {
		//echo error but continue executing the code to close the session
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

	//close database connection
	$conn->close();
}
else
{
	//redirect to register page
	header("Location: signup.html");
	exit();
}



?>