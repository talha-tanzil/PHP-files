<?php
/* array shift= goes away value from top
array unshift= 
array pop= goes away value from bottom
array push */

$students = array("akash", "batash", 123, "sanjida");
//$students = ["akash", "batash", 123, "sanjida"];
echo $students[0] . "\n";


$students[2] = "shafik";

$n = count($students);
for ($i = 0; $i < $n; $i++) {
    echo $students[$i] . "\n";
}

$student = array_pop($students);
echo $student . "\n";
$students[] = "jamal";
array_push($students, "kamal");
array_unshift ($students, "salam");
array_unshift ($students, "salma");


$n = count($students);
for ($i = 0; $i < $n; $i++) {
    echo $students[$i] . "\n";
}