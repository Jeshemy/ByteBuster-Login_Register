<?php

$host = "localhost";
$user= "root";
$password= "";
$database= "users.db";

$conn = new mysqli("localhost", "root", "", "users_db");

if($conn->connect_error){
  die("Connection failed: ".$conn->connect_error);
}

?>
