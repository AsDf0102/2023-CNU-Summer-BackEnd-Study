<?php
  function area($a, $b) {
    $result = $a * $b / 2;
    return $result;
  }

  $weight = 12;
  $height = 10;
  echo "삼각형의 너비 : ".$weight."cm"."<br>";
  echo "삼각형의 높이 : ".$height."cm"."<br>";
  echo "삼각형의 넓이는 ".area($weight, $height)."cm2 입니다."."<br>";
?>