<?php
// evabe main string keo replace kore save kora jai
$string = "Quick brown Brown Fox fox jumps over the lazy dog";
$string = str_replace('brown', 'red', $string, $count);
$string = str_replace('fox', 'cat', $string, $count);

echo $string;
echo PHP_EOL;
echo "Total Replacement: {$count}";
