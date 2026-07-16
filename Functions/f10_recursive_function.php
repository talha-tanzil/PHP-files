<?php
function printN ($i) {
    if ($i>=10) {
        return;
    }
    echo $i. "\n";
    $i++;
    printN ($i);
}

printN(5);
echo "=======\n";
function printNumber ($counter, $end, $step=1) {
    if ($counter>=$end) {
        return;
    }
    echo $counter. "\n";
    $counter+= $step;
    printNumber ($counter, $end, $step);
}
printNumber (6, 13, 2);