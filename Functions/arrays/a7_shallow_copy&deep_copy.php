<?php
// array cloning
# shallow copy & deep copy
//deep copy or copy by value
$person = array('fname' => 'Hello', 'lname' => 'World');
$newPerson = $person;
$newPerson['lname'] = 'Pluto';
print_r($newPerson);
echo "=====\n";
$people = array('fname' => 'Hi', 'lname' => 'World');
$newPeople = &$people;
$newPeople['lname'] = 'Pluto';

print_r($people);
print_r($newPeople);

//shallow copy or copy by reference
function printData(&$people)
{
    $people['fname'] .= ' Changed';
    print_r($people);
}
;
printData($people);
print_r($people);

/* function printData($people)
{
    $people['fname'] .= ' Changed';
    print_r($people);
}
;
printData($people);
print_r($people); */

