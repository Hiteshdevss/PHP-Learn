<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "gform"; // change database as per requirements

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}

?>
