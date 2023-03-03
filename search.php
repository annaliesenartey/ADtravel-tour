<?php
//database connection parameters
$servername = "localhost";
$username = "root";
$password = "Ad12@34";
$dbname = "kars";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST['search']))
{
    echo $search = $_POST['search'];
}

input.addEventListener("keypress", function(event)) {
    // If the user presses the "Enter" key on the keyboard
    if (event.key === "Enter") {
      // Cancel the default action, if needed
      event.preventDefault();
      // Trigger the button element with a click
      document.getElementById("myBtn").click();
    }}
?>