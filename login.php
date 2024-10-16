<?php
// Capture the form data from POST request
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
    
    // Database connection
    $ser = "localhost";
    $usr = "root";
    $pass = "";
    $dbname = "emp";
    
    // Create connection
    $conn = mysqli_connect($ser, $usr, $pass, $dbname);
    
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $email = $_POST['email'];
    $password = $_POST['password'];
     
    $result = "SELECT email FROM usergeg" 
    
    

}