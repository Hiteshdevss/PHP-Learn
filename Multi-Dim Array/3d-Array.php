<?php
echo "Multi-dimensional array";

$multi_array = array(
  array(
    array(1,2,3,4),
    array(5,6,7,8),
    array(9,10,1,2)
  ),
  array(
    array(1,2,3,4),
    array(5,6,7,8),
    array(9,10,1,2)
  ),
  array(
    array(1,2,3,4),
    array(5,6,7,8),
    array(9,10,1,2)
  )
);

for($i=0; $i < count($multi_array); $i++) {
  for($j=0; $j < count($multi_array[$i]); $j++) {
    for($k=0; $k < count($multi_array[$i][$j]); $k++) {
      echo $multi_array[$i][$j][$k] . " ";
    }
    echo "<br>";
  }
  echo "<br>";
}
?>
