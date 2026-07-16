<?php
//encapsulation means code er kono kisu hide kora
//determines the argument is even or odd
function isEven($n) //parameter
{
    if ($n % 2 == 0) {
        return true;
    }
    else {
        return false;
    }
}
$x =14;
if (isEven ($x)){   //argument
        echo "$x is an even number";
    }
    else {
        echo "$x is an odd number";
    }