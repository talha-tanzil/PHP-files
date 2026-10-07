<?php
$filename = "C:/laragon/www/phpday1/php-file-session-date-exception/data/f1.txt";
$fp = fopen($filename, 'r');
//$fp = fopen($filename, 'r');

$line = fgets($fp, 3);
echo $line;
$lin = fgets($fp, 3);
echo $lin;
$line = fgets($fp);
echo $line;
$line = fgets($fp);
echo $line;
//ekhane 2bar while dile 2bar print hobe, karon rewind() function use kora hoise, ekhane prottek 4character or new line e ekbar "-" print hobe
//rewind($fp);
fseek($fp, 10);
//fseek($fp, -2, SEEK_END); 
while ($line=fgets($fp,5)){
    echo $line."-";
}


fclose($fp);