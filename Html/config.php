<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mynewdb";
$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "SELECT * FROM users WHERE username='" . $_POST["user"] . "' and password = '". $_POST["pass"]."'";
$result = $conn->query($sql);
$count  = mysqli_num_rows($result);

if($count==0) {
    echo "Invalid Username or Password!";
} else {
    echo "You are successfully authenticated!";
    header("Location: home.php"); 
  
    exit; 
}

$conn->close();
?>




