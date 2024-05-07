<?php
  $fptr = fopen("myfile2.txt", 'w');
  fwrite($fptr," lorem ipsum dolor sit amet.\n");
  fwrite($fptr," lorem ipsum dolor sit amet.\n");
  fwrite($fptr," lorem ipsum dolor sit amet.\n");


  //Appending to a file in php
  $fptr = fopen("myfile2.txt", 'a');
  fwrite($fptr," lorem ipsum dolor sit amet.\n");
  fwrite($fptr," lorem ipsum dolor sit amet.\n");
  fwrite($fptr," lorem ipsum dolor sit amet.\n");
  fclose($fptr);
?>
