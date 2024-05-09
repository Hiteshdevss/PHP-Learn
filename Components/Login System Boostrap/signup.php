<?php
require './Partials/dbcon.php';

$showAlert = false; // Initialize showAlert variable

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];

    // Check if passwords match
    if($password == $c_password){
        // Inserting details
        $sql = "INSERT INTO users (username, password, tstamp) VALUES ('$username', '$password',  current_timestamp())";
        $result = mysqli_query($conn, $sql);

        if ($result){
          $showAlert = true;
          header("Location: ./welcome.php");
        }
    }
    else {
        $err = "Passwords do not match";
    }
}?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>iSecure | Login System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <?php require './Partials/Navbar.php';
  if($GLOBALS['showAlert'] == true){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> You have been registered successfully.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
  }?>
  <h1 class="mt-5 text-center">Signup</h1>

  <div class="conatiner d-flex justify-content-center align-items-center">
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <div class="mb-3 mt-5">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Choose your username carefully and wisely.</div>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="password">
      </div>
      <div class="mb-3">
        <label for="c_password" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" name="c_password" id="c_password">
      </div>
           
      <button type="submit" class="btn btn-primary">Signup</button>
    </form>
  </div>

  <!-- scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
