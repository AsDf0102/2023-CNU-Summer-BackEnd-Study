<?php
    $file = fopen("hello2.txt","w");
    
    $str = "Hello World";
    fwrite($file, $str);

    echo "파일쓰기 완료!";
    fclose($file);
?>