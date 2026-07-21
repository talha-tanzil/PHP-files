<?php
//shuffle korle array key preserved hoina
//Associative array shuffling problems and solutions
$fruits= array ('a'=>'Array', 'b'=>'Banana', 'c'=>'Cherry', 'd'=>'Dates');
$_fruits = $fruits; // temporary array or temporary fruits
shuffle($_fruits);
$key = array_rand ($fruits);
echo $key;
echo "\n";
echo $fruits[$key]."\n";
print_r ($_fruits);

