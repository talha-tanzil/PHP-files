<?php
// Numbers from 1 to 100 that are divisible by 5 but not by 10.
for ($i = 1; $i <= 100; $i += 1) {
    if ($i % 5 == 0 && $i % 10 != 0) {
        echo $i . "\n";
    }
}
echo "=========\n";
//Print numbers between 1 and 100 that are not divisible by 3
for ($i = 1; $i <= 100; $i += 1) {
    if ($i % 3 == 0) {
       continue;
    }
    echo $i. "\n";
}