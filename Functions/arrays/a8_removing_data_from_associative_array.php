<?php
// removing data from associative array
$person = array('fname'=>'said', 'lname'=>'ahmed');
print_r($person);
unset ($person['lname']);
print_r($person);