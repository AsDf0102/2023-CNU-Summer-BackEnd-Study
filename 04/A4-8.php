<?php
  $data = array(0,0,0,0,0,60,60,60,60,70,70,70,70,70,70,70,80,80,80,80,80,80,90,90,90,90,90,90,90,90);
  $a = 0;
  $b = 0;
  $c = 0;
  $d = 0;
  $e = 0;

  for ($i=0; $i<30; $i++) {
    if ($data[$i] >= 90 and $data[$i] <= 100) $a++;
    elseif ($data[$i] >= 80 and $data[$i] <= 89) $b++;
    elseif ($data[$i] >= 70 and $data[$i] <= 79) $c++;
    elseif ($data[$i] >= 60 and $data[$i] <= 69) $d++;
    else $e++;
  }

  echo "수 : ".$a."명"."<br>";
  echo "우 : ".$b."명"."<br>";
  echo "미 : ".$c."명"."<br>";
  echo "양 : ".$d."명"."<br>";
  echo "가 : ".$e."명"."<br>";
?>