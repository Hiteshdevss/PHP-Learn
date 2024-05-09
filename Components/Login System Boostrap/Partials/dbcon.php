<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "login";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    echo "<center>";
    echo "<span class='text-danger'><b>System offline : Connection Failed !!</b><span> ";
    echo "</center>";
}

// else {
//     echo "<center>";
//     echo "<span class='text-success'><b>System online :<span> </b> Live !!";
//     echo "</center>";
// }
?>