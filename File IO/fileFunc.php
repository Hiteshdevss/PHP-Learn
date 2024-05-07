<?php
    $fptr = fopen("myfile.txt", "r");
    // echo fgets($fptr);
    // echo "<br>";
    // echo fgets($fptr);

    // while ($a < fgeta($fptr)) {
    //     echo $a;
    // }

    while ($a = fgets($fptr)) {
        echo $a;
        break;
    }

    // read file until fullstop

    while ($a = fgetc($fptr)) {
        echo $a;
        if ($a == ".") {
            break;
        }
    }

    fclose($fptr);
?>