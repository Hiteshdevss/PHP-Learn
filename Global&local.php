<?php
echo "Local & Global Variables <br>";

$a = 10;
$b = 20;

function add(){
    global $a, $b;
    $c = $a + $b; 
    echo "Addition of $a and $b is $c <br>";
}

add();
?>
