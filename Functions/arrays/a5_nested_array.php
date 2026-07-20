<?php
## PHP: multidimensional array or nested array 
$foods = [
    'vegetables' => explode(', ', 'onion, banana, ginger'),
    'drinks' => explode(', ', 'water, milk'),
];

array_push($foods['drinks'], 'orange juice');
print_r($foods);

$sample2 = [
    [1, 2, 3, 4],
    [11, 22, 33, 44],
    [111, 222, 333, 444],
    [1111, 2222, 3333, [5, 6, 7]]
];
print_r($sample2);
echo $sample2 [3][3][2];

