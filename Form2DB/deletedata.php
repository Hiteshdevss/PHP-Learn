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

// if you want to set limit deletion use LIMIT
$sql = "DELETE FROM `userdata` WHERE `name` = 'Hitesh bhagwat' LIMIT 1";
$result = mysqli_query($conn, $sql);
$aff = mysqli_affected_rows($conn);
echo "<br> Deleted Data : ".$aff;


//check if userdata exists data is deleted or not
if($result)
{
    echo "<br> Data Deleted Successfully";
}
else
{
    echo "<br> Data Deletion Failed";
}

?>