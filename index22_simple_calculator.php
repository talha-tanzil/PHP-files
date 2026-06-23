<?php
$x = 5;
$y = 10;
$type = "division";
$result = '';
if ($type == "addition") {
    echo $result = $x + $y;
} else if ($type == "subtraction") {
    echo $result = $x - $y;
} else if ($type == "multiplication") {
    echo $result = $x * $y;
} else if ($type == "division") {
    if ($y==0){
        echo $result = "divisor zero is error";
    } else {
        echo $result = $x / $y;
    }
} else {
    echo $result = "invalid operator selected";
}