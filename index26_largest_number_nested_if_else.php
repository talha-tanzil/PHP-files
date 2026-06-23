<?php
$number1 = -4;
$number2=  -4;
$number3= -4 ;
if ($number1 > $number2) {
    if ($number1 > $number3){
        echo "largest is $number1";
    } else {
        echo "largest is $number3";
    }
}
else if ($number2 > $number1){
    if ($number2 > $number3) {
        echo "largest is $number2";
    } else {
        echo "largest is $number3";
    }
} else {
    echo "invalid input or more than one values are same";
}