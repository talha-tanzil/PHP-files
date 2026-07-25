<?php
//breaking strings into fragments - tokenization
$string = "Hello World,world how are you";
$parts = explode(" ", $string);
$part = explode(",", $string);
$part2 = str_split($string);// str_split diye string $variable er prottekta character ke chaile tokenization kora jabe
print_r($parts);
echo "\n";
print_r($part);
//$original= join(" ", $parts);
$original = implode(" ", $parts);
echo $original;
echo "\n";
print_r($part2);
echo "\n";
//multiple delimiter diye vangle strtok ba preg_split regular expression, strtok diye object hisebe vangbe kintu count kora jaina, count korte preg_split function lagbei
$parts3 = strtok($string, " ,");
while ($parts3 != false) {
    echo $parts3 . "\n"; // iterator
    $parts3 = strtok(" ,");
}
//echo count ($parts3);
echo "=====\n";
// preg_split regular expression pattern
$parts4 = preg_split("/\s+|,/",$string);//s+ diye white space more than one time bujhai
//$parts4 = preg_split("/ |,/",$string);// eki kotha
print_r($parts4);
echo count ($parts4);


