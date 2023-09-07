<?php

for ($x = 33; $x <= 543; $x++) { // for loop van getallen 33 t/m 543
    if ($x % 5 == 0 && $x % 9 == 0) { // als het getal deel baar is door 5 en 9 dan is "web" zichtbaar op het scherm
        echo "web <br>";
    } 
    elseif ($x % 5 == 0) { // als het getal deerbaar is door 5 toont "software" op het scherm
        if ($x % 2 == 0) { // Als het getal een even nummer is dan wordt het dikgedrukt 
            echo "<b>software </b><br>";

        } else // anders krijg je software niet dikgedrukt
            echo "software <br>";
    } 
    elseif ($x % 9 == 0) { // Als het getal deelbaar is door 9 toont "developer" op het scherm
        if ($x % 2 == 0) { // Als het getal een even nummer is dan wordt het dikgedrukt
            echo "<b>developer </b><br>";

        } else // anders krijg je developer niet dikgedrukt
            echo "developer <br>";

    } elseif ($x % 2 == 0) { // even getallen worden hier dikgedrukt
        echo "<b> $x </b> <br>";
    } else { // anders wordt het niet dikgedrukt
        echo "$x <br>";
    }
}



?>