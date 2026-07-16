<?php
function sum($x, $y, int ...$numbers): int {
    echo "$x";
    $result =0;
    for ($i=0; $i < count ($numbers); $i++) {
        $result += $numbers [$i];
    }
    return $result;
}
echo sum (5, 6,7,8);