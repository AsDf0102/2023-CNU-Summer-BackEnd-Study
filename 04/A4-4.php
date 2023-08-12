<?php
  function ticket1($a) {
    if ($a <= 18) $pay = 7000;
    elseif($a >= 65) $pay = 7000;
    else $pay = 9000;

    return $pay;
  }

  function ticket2($a) {
    if ($a <= 18) $pay = 10000;
    elseif($a >= 65) $pay = 7000;
    else $pay = 13000;

    return $pay;
  }

  $cat = "일반";
  $age = 70;

  if ($cat == "조조") $pay = ticket1($age);
  elseif ($cat == "일반") $pay = ticket2($age);

  echo "구분 : ".$cat."<br>";
  echo "나이 : ".$age."<br>";
  echo "입장료는 ".$pay."원 입니다.";
?>