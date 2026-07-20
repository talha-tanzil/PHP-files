<?php
$students = [ 
    12 => 'hasan',
    'e'=> 'sajid, habib'
];
echo count($students) ."\n";
echo $students ['e']. "\n";
echo $students ['e'] = $students ['e'] .", kader". "\n";
//echo $students [15] .= ", kader". "\n";
foreach ($students as $key => $value) {
    echo $key. "=". $value. "\n";
}

$colors = array("red", "green", "blue", "yellow"); 

foreach ($colors as $value) {
  echo "$value \n";
}

