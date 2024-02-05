<?php
$servername = "php24-db-1";
$username = "ravindu";
$password = "password";
$dbname = "ravindu";

// create database connection
$conn = new mysqli($servername,$username,$password,$dbname);

//check connection
if ($conn->connect_error){
    die("Connection Failed:" . $conn->connect_error);
}

?>