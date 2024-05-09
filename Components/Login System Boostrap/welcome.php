<?php  
session_start();

// Check if the user is logged in, and if not, redirect to the login page
if (!isset($_SESSION['login']) || $_SESSION['login'] !== true){
  header("Location: login.php");
  exit();
}

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>iSecure | Hi <?php echo $_SESSION['username']; ?> </title> <!-- Fixed: Added echo to display the username -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <?php require './Partials/Navbar.php'; ?>
  <div class="container my-5 mx-5 h-auto w-auto">
    <h1>Welcome to iSecure</h1>
    <p>Hi <?php echo $_SESSION['username']; ?> How are you.</p>
    <a href="./logout.php">
    <button class="btn btn-danger">Logout</button>
    </a>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
