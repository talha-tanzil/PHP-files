<?php
// extracting some data from an array while keeping the original

$fruits = array('apple', 'banana', 'orange', 'plum', 'dates', 'mango');
$random = array('e'=>'apple', 'd'=>'banana', 'a'=>'orange', 'b'=>'plum', 12=>78, 'c'=>'dates', 'f'=>'mango');

// $someFruits = array_slice($fruits, 2);
// $someFruits = array_slice($fruits, 2, 2);
//$someFruits = array_slice($fruits, -4, 2);
//$someFruits = array_slice($fruits, -5, -1);
$someFruits = array_slice($fruits, 3, 3, true);

print_r($someFruits);

echo "\n";
//$newRandom = array_slice($random, 3, 4);
//$newRandom = array_slice($random, 3, null, true);
$newRandom = array_slice($random, 3, 4, true);
print_r ($newRandom);