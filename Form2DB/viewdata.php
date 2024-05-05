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

$sql = "SELECT * FROM `userdata`";
//$sql = "SELECT * FROM `userdata` WHERE `name` = 'Tanvi'";
$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);
echo $num . " records found successfully <br>";
$no = 1;
if($num >0) {
    while($row = mysqli_fetch_assoc($result)){
        echo "<br> Hello ". $row['name']. " your email address is ". $row['email']. " and your message is ". $row['message']. "<br>";
        echo "<br>";
        $no += 1;

    }
}
?>
