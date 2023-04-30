<?php
$server= "localhost";
$user = "root";
$password = "";
$database = "crud";

$conn = new mysqli($server, $user, $password, $database);
if($conn -> connect_error){
     die("connection failed" . $conn -> connect_error);
}
?>