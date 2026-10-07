<?php
$filename = "C:/laragon/www/phpday1/php-file-session-date-exception/data/f1.txt";
$fp = fopen($filename, 'r');
$fp = fopen($filename, 'r');

$line = fgets($fp, 3);
echo $line;
$lin = fgets($fp, 3);
echo $lin;
$line = fgets($fp);
echo $line;
$line = fgets($fp);
echo $line;
//ekhane 2bar while dile 2bar print hobe, karon rewind() function use kora hoise
rewind($fp); 
while ($line=fgets($fp)){
    echo $line."\n";
}
rewind($fp);
while ($line=fgets($fp)){
    echo $line."\n";
}


fclose($fp);