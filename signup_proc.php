<?php
//database connection parameters
$servername = "localhost";
$username = "root";
$password = "Ad12@34.";
$dbname = "kars";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    //stop executing the code and echo error
    die("Connection failed: " . $conn->connect_error);
}


//check if register form was submited
//by checking if the submit button element name was sent as part of the request

if (isset($_POST['register'])) {
    //collection form data
    $user_name =  $_POST['username'];
    $user_email = $_POST['Email'];
    //encrypt password
    //use the php password_hard function
    $user_country = $_POST['country'];
    $encrypted_pass = password_hash($_POST['Password'], PASSWORD_DEFAULT);
    $conf_pass = $_POST['Password'];

    // var_dump($user_name, $user_email, $user_pass);
    //write query
    $sql = "INSERT INTO `customer` (username, user_pass,email, country, user_role)
    VALUES ('$user_name', '$encrypted_pass','$user_email','$user_country', '1')";
}

if ($conn->query($sql) == TRUE) {

    //redirect to homepage
    header("Location: login.php");
    exit();
} else {
    //redirect to register page
    header("Location: signup.php");
    $conn->close();
    exit();
}
?>