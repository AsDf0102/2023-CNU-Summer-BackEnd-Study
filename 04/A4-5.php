<?php
  function ticket1($member, $age) {
    if ($member == "개인") {
      if ($age <= 7) $pay = 6000;
      elseif ($age >= 19) $pay = 9500;
      else $pay = 7000;
    }
    elseif ($member == "단체") {
      if ($age <= 7) $pay = 5000;
      elseif ($age >= 19) $pay = 8500;
      else $pay = 6000;
    }
    return $pay;
  }

  function ticket2($member, $age) {
    if ($member == "개인") {
      if ($age <= 7) $pay = 5000;
      elseif ($age >= 19) $pay = 8500;
      else $pay = 6000;
    }
    elseif ($member == "단체") {
      if ($age <= 7) $pay = 4000;
      elseif ($age >= 19) $pay = 7500;
      else $pay = 5000;
    }
    return $pay;
  }

  $cat = "일반";
  $mem = "개인";
  $age = 15;
  
  if ($cat == "일반") $pay = ticket1($mem, $age);
  elseif ($cat == "단체") $pay = ticket2($mem, $age);

  echo "구분 : ".$cat."<br>";
  echo "개인/단체 : ".$mem."<br>";
  echo "나이 : ".$age."<br>";
  echo "입장료는 ".$pay."원 입니다."."<br>";
?>