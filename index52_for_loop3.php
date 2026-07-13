<?php
for ($i = 1; $i <= 5; $i += 1) {
    //echo $i;
    echo PHP_EOL;
    for ($j = 0; $j < 12; $j += 1) {
        echo "*";
    }
}
echo "\n";
$i = 0;
while ($i < 10) {
    $i++;
    echo $i . PHP_EOL;
}
echo PHP_EOL;
$i = 0;
do {
    $i++;
    echo $i . PHP_EOL;
} while ($i < 10);

echo "Go_To\n";
$i = 0;
a:
$i++;
echo $i . PHP_EOL;
if ($i < 10)
    goto a;

