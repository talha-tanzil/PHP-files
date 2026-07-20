<?php
//array splice
$fruits = array('apple', 'banana', 'orange', 'plum', 'dates', 'mango');
$random = array("a"=>12, "b"=>45, "c"=>34, "d"=>22, "e"=>77, 12=>78, "g"=>87);

$newFruits = array("jackfruit", "tamarind", "pineapple");
//$someFruits = array_splice($fruits, -5, 2);
$someFruits = array_splice($fruits, -5, 2, $newFruits);

print_r($someFruits);
print_r($fruits);
