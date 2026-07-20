<?php
$fruits = array('a' => 'apple', 'b' => 'banana', 'f' => 'orange', 'p' => 'plum', 'd' => 'dates', 'm' => 'mango');
$numbers = array(1, 11, 2, 2, '56', 3, 4, 2, 77, 5);

/* if (in_array(mixed $needle, array $haystack)) {
    echo '56 is found' . "\n";
}*/
/* if (in_array(56, $numbers)) {
    echo '56 is found' . "\n";
}*/

if (in_array(56, $numbers, true)) {
    echo '56 is found' . "\n";
}

$offset = array_search(56, $numbers, true);
echo $offset . "\n";

$offset = array_search(56, $numbers);
echo $offset . "\n";

$offset = array_search(2, $numbers);
echo $offset . "\n";

if (key_exists('b', $fruits)) {
    echo "Key b exists";
}


?>
