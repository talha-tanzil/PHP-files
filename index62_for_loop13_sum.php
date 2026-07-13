<?php
// sum from 1 to 100
$sum = 0;
for ($i=1; $i<=100; $i++){
    $sum= $sum + $i;
}
echo $sum ."\n";
// sum of even numbers from 1 to 100
echo "======\n";
$sum = 0;
for ($i= 1; $i<= 100; $i++){
    if ($i%2 == 0) {
        $sum = $sum + $i;
    }
}
echo $sum;