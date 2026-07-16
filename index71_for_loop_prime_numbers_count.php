<?php
$count = 0;
for ($i = 1; $i <= 100; $i++) {

    if ($i == 1) {
        continue;
    }
    $isPrime = true; 

    for ($j = 2; $j < $i; $j++) {

        if ($i % $j == 0) {
            $isPrime = false;
            break;
        }
    }

    if ($isPrime) {
        $count++;
    }
}
echo "Total prime numbers between 1 to 100 is $count";
