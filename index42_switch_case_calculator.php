<?php
$x= 6;
$y= 2;
$operator = '-';
switch ($operator) {
    case '+':
        echo "$x + $y = ". ($x +$y);
        break;
    case '-':
        echo '$x - $y = '. ($x - $y);
        break;
    case '*':
        echo "$x * $y = ". ($x*$y);
        break;
    case "/":
        echo "$x / $y = ". ($x / $y);
}