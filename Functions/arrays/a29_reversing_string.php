<?php
// reversing string
$string = "Hello World";
$length= strlen($string)-1;
echo $length."\n";
for ($i=$length;$i>=0;$i--) {
    echo $string [$i];
}
echo PHP_EOL;
$length= strlen($string);
for ($i=1; $i<=$length; $i++) {
    echo $string[$i*-1];
}
echo "\n";
echo strrev($string);