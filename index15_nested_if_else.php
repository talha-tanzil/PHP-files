<?php
$condition1 = false;
$condition2 = true;
$condition3 = true;
if ($condition1) {
    if ($condition2) {
        if ($condition3) {
            echo "Hello";
        } else {
            echo "no 1";
        }
    } else {
        echo "no 2";
    }
} else if ($condition2) {
    if ($condition3) {
        echo "Hi";
    }
} else {
    echo "no 4";
}
echo "\n";
echo "<br>";

if ($condition1 && $condition2 && $condition3) {
    echo "Hello";
} else if ($condition1 && $condition2) {
    echo "no 1";
} else if ($condition1) {
    echo "no 2";
} else {
    echo "no 3";
}
