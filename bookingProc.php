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

if (isset($_POST['submit'])) {
    //collection form data
    $event_name =  $_POST['eventname'];
    $fname = $_POST['fname'];
    $lname =  $_POST['lname'];
    $user_email =  $_POST['email'];
    $user_no =  $_POST['number'];
    $cars =  $_POST['cars'];
    //encrypt password
    //use the php password_hard function
   

    // var_dump($user_name, $user_email, $user_pass);
    //write query
    $sql = "INSERT INTO `book_trip` (package_name,first_name, last_name, email, phone, vehicle_type)
    VALUES ('$event_name','$fname','$lname', '$user_email', '$user_no','$cars')";
}

if ($conn->query($sql) == TRUE) {

    //redirect to homepage
    header("Location: indextt.php");
    exit();
} else {
    //redirect to register page
    echo "Bookung Failed";
    header("Location: events.php");
    $conn->close();
    exit();
}?>