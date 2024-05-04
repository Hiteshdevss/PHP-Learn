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

$name = "Komal";
$destination = "gumgaon";

$sql = "INSERT INTO `loginuser` (`name`, `dest`) VALUES ('$name', '$destination')";
$result = mysqli_query($conn, $sql);

if (!$result){
    echo "Record is Insertion Failed ". mysqli_error($conn);
}
else {
    echo "Record is Inserted successfully";
    echo "<br>";
}


?>