<?php
$numbers= array (1,2,3,4,5);
function sum ($oldValue, $newValue) {
    return $oldValue+$newValue;
}
$sum = array_reduce ($numbers, 'sum');
echo $sum;
echo "\n";
echo count ($numbers);