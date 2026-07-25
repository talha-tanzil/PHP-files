<?php
//how to print how many numbers of each character
$string = "Hello World, how are you";

$characters = str_split(strtolower($string));
$count = [];

foreach ($characters as $character) {

    if ($character == " ") {
        continue;
    }

    if (isset($count[$character])) {
        $count[$character]++;
    } else {
        $count[$character] = 1;
    }
}

foreach ($count as $character => $number) {
    echo "$character = $number<br>";
}

?>