<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "FORMDATABASE";

// Connect to MySQL server
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
    echo "<br>";
}


$sql = "UPDATE `userdata` SET `message` = 'i hate u' WHERE `userdata`.`sno` = 9;";
$result = mysqli_query($conn, $sql);
echo var_dump($result);
$affected_rows = mysqli_affected_rows($conn);
echo "Number of affected rows:". $affected_rows ."<br>";
if ($result) {
    echo "records affected successfully <br>";
}
else {
    echo "Error: ". $sql. "<br>". mysqli_error($conn);
}

// $sql = mysqli_num_rows($result);
// echo $num;
// echo "records affected successfully <br>";



?>