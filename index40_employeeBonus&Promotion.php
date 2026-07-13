<?php
$Bonus = '';
$Rate = 1.5;
$Experience = 2.5;
// Bonus Rules
if ($Rate >= 9) {
    if ($Experience >= 5) {
        echo "Bonus is 25%";
    } else {
        echo "Bonus is 20%";
    }
} else if ($Experience >= 5) {
    if ($Rate >= 9) {
        echo "Bonus is 25%";
    } else {
        echo "Bonus is 20%";
    }
} else if ($Rate >= 7 && $Rate < 9) {
    if ($Experience >= 3 && $Experience < 5) {
        echo "Bonus is 15%";
    } else {
        echo "Bonus is 10%";
    }
} else if ($Experience >= 3 && $Experience < 5) {
    if ($Rate >= 7 && $Rate < 9) {
        echo "Bonus is 15%";
    } else {
        echo "Bonus is 10%";
    }
} else if ($Rate >= 5 && $Rate < 7) {
    if ($Experience >= 2 && $Experience < 3) {
        echo "Bonus is 5%";
    } else {
        echo "Bonus is 0%";
    }
} else if ($Experience >= 2 && $Experience < 3) {
    if ($Rate >= 5 && $Rate < 7) {
        echo "Bonus is 5%";
    } else {
        echo "Bonus is 0%";
    }
} else {
    echo "Bonus is 0%";
}

echo PHP_EOL;
//Promotion Policy
if ($Rate >= 8 && $Experience >= 4) {
    echo "Promoted";
} else if ($Rate >= 7 && $Rate < 8) {
    if ($Experience >= 2 && $Experience < 4) {
        echo "Promotion under review";
    }
} else {
    echo "Not eligible for promotion";
}