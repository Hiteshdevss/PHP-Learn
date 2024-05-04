<?php

$servername = "localhost";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 

else {
    echo "Connected successfully";
}


$sql = "CREATE DATABASE codeCreate13";
$result = mysqli_query($conn, $sql);
echo var_dump($result);
echo "<br>";

if (!$result){
    echo "Error creating database: ". mysqli_error($conn);
}
else {
    echo "Database created successfully";
}

?>
