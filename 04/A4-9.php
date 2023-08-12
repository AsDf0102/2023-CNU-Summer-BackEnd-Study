<?php
  $seat = array(array(0, 0, 1, 0, 0, 0, 0, 1, 0, 0),
  array(0, 0, 0, 0, 1, 0, 1, 1, 0, 0),
  array(0, 0, 1, 1, 0, 0, 0, 0, 1, 0),
  array(0, 1, 0, 0, 0, 0, 1, 0, 0, 0),
  array(0, 0, 0, 0, 1, 0, 0, 0, 1, 0));

  for ($i = 0; $i < 5; $i++) {
    for ($j=0; $j<10; $j++) {
      if ($seat[$i][$j] == 0) echo "□ ";
      elseif ($seat[$i][$j] == 1) echo "■ ";
    }
    echo "<br>";
  }
  echo "<br>";
  echo "□ : 예약 가능, ■ : 예약 불가능";
?>