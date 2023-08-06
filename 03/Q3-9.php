<?php
    $string = "";
    $string .= "<table border='1'>";
    $string .= "<tr><th width='100'>달러</th><th width='100'>원화</th><th width='100'>유로</th></tr>";

    for($dollar=10; $dollar<=20; $dollar+= 2) {
        $won = $dollar * 1180.60;
        $euro = $dollar * 1350.30;
        $string .= "<tr><td>$dollar</td><td>$won</td><td>$euro</td>";
    }
    $string .= "</table>";
    
    echo $string;
?>