<?php
//
$count= 0;
for ($i = 1; $i<=100; $i++) {

    if ($i%7==0) {
        $count++;
    
    }
}

echo "Total number divisible by 7 is $count";
