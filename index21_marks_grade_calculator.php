<?php
$n = 110;
if ($n >= 80 && $n <=100) {
    echo "A+";
} else if ($n >= 70 && $n < 80) {
    echo "A";
} else if ($n >= 60 && $n < 70) {
    echo "A-";
} else if ($n>= 50 && $n<60) {
    echo "B";
} else if ($n>= 40 && $n<50) {
    echo "C";
} else if ($n>= 0 && $n<40) {
    echo "F";
} else {
    echo "invalid number";
}