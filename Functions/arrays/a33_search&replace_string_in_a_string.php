<?php
//Searching and replacing strings within strings
// 1. str_replace case sensitive search & 2. str_ireplace case insensitive search
$string= "Quick Brown brown Fox fox jumps over the lazy dog";
echo $replacedString= str_replace('brown','Brown', $string).'\n';// structure: $newReplace= str_replace('$search', '$replace', '$subject/$haystack', $count[optional] ); according to vs code autopilot. structure: str_replace(jake replace korte hobe, jake diye replace korbo, '$subject/$haystack').. NOTE: 1. ekhane original $string or $variable ta intact thakbe. 2. 'str_replace' case sensitive replace, str_ireplace case insensitive replace
echo PHP_EOL;
echo $replacedString1= str_ireplace('brown','red', $string, $count)."\n";
echo $string."\n";
echo "Total replace: $count";

