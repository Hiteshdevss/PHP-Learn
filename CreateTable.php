<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "gform";

$conn = mysqli_connect($servername, $username, $password, $database);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 

else {
    echo "Connected successfully";
    echo "<br>";
}

$sql = "CREATE TABLE `loginUser1` (`sno` INT(6) NOT NULL AUTO_INCREMENT, `name` VARCHAR(255) NOT NULL, `dest` VARCHAR(255) NOT NULL, PRIMARY KEY (`sno`))";
$result = mysqli_query($conn, $sql);


if (!$result){
    echo "Error creating Table: ". mysqli_error($conn);
}
else {
    echo "Table created successfully";
    echo "<br>";
}

?>