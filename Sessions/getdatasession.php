<?php

session_start();
if(isset($_SESSION['username'])){
    echo "Welcome ". $_SESSION['username'];
    echo "<br>";
}
else{
    echo "You are not logged in, please log in to continue";
    echo "<br>";
}

?>