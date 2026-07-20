<?php
//array to string, serialize & json
//javascript object oriented notation
$student = [
    'fname' => 'Jamal',
    'lname' => 'Ahmed',
    'age' => '21',
    'class' => '13',
    'section' => 'B',
];
print_r($student);
echo $student['fname'] . " " . $student['lname'] . "\n";
printf("%s  %s\n", $student['fname'], $student['lname']);
echo serialize($student);
echo "\n";
$serialized = serialize($student);
$newStudent = unserialize($serialized);
print_r($newStudent) . "\n";
$newStudent2 = json_encode($newStudent);
echo $newStudent2;
$newStudent3 = json_decode($newStudent2, true);
print_r($newStudent3);




