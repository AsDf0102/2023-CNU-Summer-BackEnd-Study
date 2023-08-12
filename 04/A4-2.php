<?php
  function hap($n1, $n2) {
    $result = 0;
    for ($i=$n1; $i<=$n2; $i++) {
      $result += $i;
    }
    return $result;
  }

  $a = 10;
  $b = 50;
  $sum = hap($a, $b);

  echo $a."에서 ".$b."까지의 정수 합계 : ".$sum."<br>";
?>