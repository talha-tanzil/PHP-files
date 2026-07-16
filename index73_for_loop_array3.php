<?php
$arr = [25, 7, 91, 13, 50];
$largest = $arr[0];
for ($i=1; $i< count ($arr); $i++) {
    if ($arr[$i] > $largest) {
        $largest = $arr[$i];
    }
}

echo "largest number is $largest";