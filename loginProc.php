<?php
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

//check if login form was submitted
//by checking if the submit button element name was sent as part of the request
if (isset($_POST['login'])) {
    //collect form data
    $user_name =  $_POST['username'];
    $user_pass = $_POST['Password'];

    //write query
    $sql = "SELECT * FROM `customer` WHERE username = '$user_name'";

    //execute query and fetch results
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $userPass = $row['user_pass'];
        $verify = password_verify($user_pass, $userPass);
        echo (" I odnt know why");        
        if ($verify) {
          
            //redirect to homepage
            header("Location: index.php");
            exit();
        } else {
            //redirect to loginpage
            echo (" I odnt know why");            
            header("Location: login.php");
            $conn->close();
            exit();
        }
    } else {
        echo (" I odnt know why");
        //redirect to login page
        header("Location: index.php");
        $conn->close();
        exit();
    }
}

?>