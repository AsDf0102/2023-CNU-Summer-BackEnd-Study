<?php
  $data = array(array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12), array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12), array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12));
  for ($i = 0; $i <= 2; $i++) {
    $number = $i + 1;
    echo $number." : ";
    for ($j = 0; $j <= 11; $j++) {
      echo $data[$i][$j]." ";
    }
    echo "<br>";
  }
?>