<?php
$severname = "localhost";
$username = "root";
$password = "*rajan12345#";
$dbname = "foodOrderingSystem";

$conn = mysqli_connect($severname, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
?>