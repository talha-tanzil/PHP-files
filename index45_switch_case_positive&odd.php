<?php
$n= -9;
switch(true) {
    case ($n%2!=0 && $n>0):
        echo "Positive and odd";
        break;
    case ($n%2==0 && $n>0):
        echo "Positive and even";
        break;
    case ($n%2!=0 && $n<0):
        echo "Negative and odd";
        break;
    case ($n%2==0 && $n<0):
        echo "Negative and even";
        break;
    default:
        echo "Zero"; 
        break;
}