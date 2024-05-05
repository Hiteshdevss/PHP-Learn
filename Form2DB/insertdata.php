<?php

$servername = "localhost";
$username = "root";
$password = "";

// Connect to MySQL server
$conn = mysqli_connect($servername, $username, $password);

// Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// } else {
//     echo "Connected successfully";
//     echo "<br>";
// }

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS FORMDATABASE"; 
$result = mysqli_query($conn, $sql);

// if (!$result) {
//     echo "Error creating database: " . mysqli_error($conn);
// } else {
//     echo "Database created successfully";
//     echo "<br>";
// }

// Select the database
mysqli_select_db($conn, "FORMDATABASE");

// Create table
$sql = "CREATE TABLE `USERDATA` (`sno` INT(6) NOT NULL AUTO_INCREMENT, `name` VARCHAR(255) NOT NULL, `email` VARCHAR(255) NOT NULL, `message` VARCHAR(255) NOT NULL, PRIMARY KEY (`sno`))";

$result = mysqli_query($conn, $sql);

// if (!$result) {
//     echo "Error creating table: " . mysqli_error($conn);
// } else {
//     echo "Table created successfully";
//     echo "<br>";
// }

// Sample data (replace with actual data received from the UI)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
}

// Insert data
$sql = "INSERT INTO USERDATA (name, email, message) VALUES ('$name', '$email', '$message')";
$result = mysqli_query($conn, $sql);

if (!$result) {
    echo '<script src="https://cdn.tailwindcss.com"></script><br><div class="mr-20 ml-20 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
    <strong class="font-bold">DATA IS NOT INSERTED!</strong>
    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
      <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
    </span>';
} else {
    echo '<script src="https://cdn.tailwindcss.com"></script><br><div class="mr-20 ml-20 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
    <strong class="font-bold">DATA INSERTED!</strong>
    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
      <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
    </span>';
}

// Close connection
mysqli_close($conn);

?>
