<?php
$n = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$length = count($n);
for ($i = 0; $i < $length; $i++) {
    if ($n[$i] == 5) {
        echo "$n[$i] is true\n";
    } else
        echo "$n[$i] is false\n";
}
