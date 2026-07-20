<?php
//jekono string ke khub sohojei array hisebe treat kora jai php te
//array utility function-
$numbers = array(1,2,3,4,5,6,7,8,9,10,11);
function square ($n) {
    printf("square of %d is %d\n", $n, $n*$n);
}
function cube ($n) {
    printf("cube of %d is %d\n", $n, $n*$n*$n);
}
function cubes ($n) {
    return $n*$n*$n;
}
function even($n){
    return $n%2==0;
}

$evenNumbers = array_filter($numbers, 'even'); //callback function


$persons = array('sujon','kabir','sabab','selim','roni','jamal','kamal','sayma');

function filterByS($name){
    return $name[0]=='s';
}

$newPersons = array_filter($persons, 'filterByS');


$newArray = array_map('cubes',$numbers);
array_walk ($numbers, 'square'); //callback function
array_walk ($numbers, 'cube');
print_r($numbers);
print_r($newArray);
print_r($evenNumbers);
print_r($newPersons);
