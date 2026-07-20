<?php
//delimiter
$foods = explode(', ','broccoli, brinjal, carrot');
var_dump ($foods)."\n";
echo $foods [0]. "\n";
$vegetablesString = join(', ', $foods);
echo $vegetablesString. "\n";
echo count ($foods)."\n";
$vegetables = preg_split('/(, |,)/','broccoli, brinjal, carrot,tomato,mango');
print_r ($vegetables);
