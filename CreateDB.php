<?php

$servername = "localhost";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password);

$sql = "CREATE DATABASE codeCreate13";
$result = mysqli_query($conn, $sql);
echo var_dump($result);
echo "<br>";

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 

else {
    echo "Connected successfully";
}

?>