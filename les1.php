<?php

for ($x = 33; $x <= 543; $x++) {
    if ($x % 5 == 0 && $x % 9 == 0) {
        echo "web <br>";
    } elseif ($x % 5 == 0) {
        if ($x % 2 == 0){
            echo "<b>software </b><br>";
            
        }else echo "software <br>";
    }


     elseif ($x % 9 == 0) {
        if ($x % 2 == 0){
            echo "<b>developer </b><br>";
            
        }else echo "developer <br>";
        
    } elseif ($x % 2 == 0) {
        echo "<b> $x </b> <br>";
    } else {
        echo "$x <br>";
    }
}



?>