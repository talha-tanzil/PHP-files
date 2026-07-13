<?php
//Count from 1 to 100 and print only numbers ending in 0
for ($i = 1; $i <= 100; $i += 1) {
    if ($i % 10 == 0) {
        echo $i . "\n";
    }
}
echo "=========\n";
for ($i = 1; $i <= 100; $i += 1) {
    if ($i % 10 == 7) {
        echo $i . "\n";
    }
}
echo "====\n";
//print numbers ending in 2 or 8 from 1 to 100.
for ($i = 1; $i <=100; $i +=1) {
    if ($i%10== 2 || $i%10== 8) {
        echo $i . "\n";
    }
}
