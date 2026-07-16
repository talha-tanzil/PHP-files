<?php
//how to find factorial of $n

function factorial($n)
{
    if (gettype($n) != "integer") {
        return "invalid";
    }
    $fac = 1;
    for ($i = $n; $i >= 1; $i--) {
        $fac = $fac * $i;
    }
    return $fac;
}

//robot for serving food
function serve ($foodType= "Coffee", $numberOfItem= "1 cup"){
    echo "$numberOfItem of $foodType have been served";
}

