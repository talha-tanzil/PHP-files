<?php

//Associative Array to JSON Array Encode

$person=[
    ["name"=>"OSTAD","age"=>34],
    ["name"=>"OSTAD","age"=>34],
    ["name"=>"OSTAD","age"=>34],
    ["name"=>"OSTAD","age"=>34]
];

$JSON=json_encode($person);

echo $JSON;