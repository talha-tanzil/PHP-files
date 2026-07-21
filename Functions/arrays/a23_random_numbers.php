<?php
// Discussion of shuffling arrays and random numbers
$numbers = range(40,72);
$random = mt_rand(0,32);
echo "$random\n";
echo $numbers[$random]."\n";

$random = mt_rand(0,32);
echo $numbers[$random];
