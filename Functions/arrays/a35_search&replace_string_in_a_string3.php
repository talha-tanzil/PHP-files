<?php
//VVI(very very important): ekhane str_replace/ str_ireplace function diye eki command/string/$variable er vitor koyekta replace korte pari dekhano hoise. eta array diye kora jai,, note: same word or sudhu 1ta word replace korle sudhu oi word dilei hobe, eta 2nd example e dekhano hoise
// exp1
$string = "Quick brown Brown Fox fox jumps over the lazy dog";
$string = str_ireplace(array('brown', 'fox', 'dog'), array('red', 'cat', 'hen'), $string, $count);

echo $string;
echo PHP_EOL;
echo "Total Replacement: {$count}";

echo PHP_EOL;
//exp2
$string1 = "Quick brown Brown Fox fox jumps over the lazy dog";
$string1 = str_ireplace(array('brown', 'fox', 'dog'),'word', $string, $count);

echo $string;
echo PHP_EOL;
echo "Total Replacement: {$count}";

