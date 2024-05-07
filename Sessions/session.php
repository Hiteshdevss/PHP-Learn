<?php

session_start();
$_SESSION['username'] = "johannes";
$_SESSION['Book'] = "johannes Book";
echo "We have saved your session";
?>