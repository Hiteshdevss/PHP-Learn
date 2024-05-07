<?php

    $fptr = fopen("myfile.txt", "r");
    // echo var_dump($fptr);
    
    if (!$fptr){
        die ("File not found!");
    }

    $content = fread($fptr, filesize("myfile.txt"));
    fclose($fptr);

    echo $content;
?>