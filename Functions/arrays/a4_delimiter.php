<?php
//delimiter- bivedok
// explode delimiter diye string theke array te convert kora hoi, r implode or join diye array ke string e convert kora hoi
$foods = explode(', ','broccoli, brinjal, carrot');
var_dump ($foods)."\n";
echo $foods [0]. "\n";
//$vegetablesString = implode(', ', $foods);
$vegetablesString = join(', ', $foods);
echo $vegetablesString. "\n";
echo count ($foods)."\n";
$vegetables = preg_split('/(, |,)/','broccoli, brinjal, carrot,tomato,mango');
print_r ($vegetables);
echo "\n";
$string = "Hello World, how are you";
$parts = explode(" ", $string);
$part = explode(",", $string);
print_r($parts);
echo "\n";
print_r($part);
