<?php
  function hap($n) {
    $result = 0;
    for ($i=1; $i<=100; $i++) {
      if ($i % $n == 0) {
        $result += $i;
      }
    }
    return $result;
  }

  $number = 5;
  $sum = hap($number);
  echo "1~100 정수 중 ".$number."의 배수 합계 : ".$sum."<br>";
?>