<?php
$fruits = array('apple','banana','orange','plum','dates','mango');
$random = array("a"=>12,"b"=>45, "c"=>34,"d"=>22,"e"=>77, "f"=>31, 12=>78, "g"=>87);

$newFruits1 = array_slice($fruits,0,3);
$newFruits2 = array_slice($fruits,3, null, true);

$newFruits = array_merge($newFruits1, $newFruits2);

print_r($newFruits1);
print_r($newFruits2);
print_r($newFruits);

$newFruitsPlus = $newFruits1 + $newFruits2;
print_r ($newFruitsPlus);
