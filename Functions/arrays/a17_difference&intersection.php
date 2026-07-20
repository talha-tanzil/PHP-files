<?php
//difference & intersection of indexed & associated array

$numbers1 = array(1,4,3,66,54,7,23,1,2);
$numbers2 = array(88,3,21,44,3,28,1,2,7);

$fruits1 = array("a"=>"apple","b"=>"banana","c"=>"lemon");
$fruits2 = array("d"=>"pineapple","b"=>"malta","g"=>"grapes","e"=>"lemon");

$common = array_intersect($numbers1, $numbers2);
$common1 = array_intersect($fruits2, $fruits1);
$commonf = array_intersect_assoc($fruits1, $fruits2);

print_r($common);
print_r($common1);
print_r($commonf);

$diff = array_diff($numbers1, $numbers2);
$difff = array_diff($fruits2, $fruits1);
$difference = array_diff_assoc($fruits1, $fruits2);

print_r($diff);
print_r($difff);
print_r($difference);

