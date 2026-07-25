<?php
// Accessing characters within a string, eta array er vitor theke access korar moto
$string = "Hello World";
echo $string[0];
echo $string[-5];
$length = strlen($string);
echo substr($string, $length-3);
echo PHP_EOL;
echo substr($string, -3);
echo PHP_EOL;
echo substr($string, -3,2);// -3 theke 2ta access kore print korbe
echo PHP_EOL;
echo substr($string, 0,-3);// 0 theke -3 er age porjonto print korbe
echo "\n";
echo substr($string,-4,-7);//aita thik vabe run korbe na, khali string return kore
echo "\n";
echo substr($string,-7,-4);
