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
//ekhane 2bar while dileo ekbar print hobe, karon file open hoye cursor seshe giye abar back kore echo korbe na
while ($line=fgets($fp)){
    echo $line."\n";
}
while ($line=fgets($fq)){
    echo $line."\n";
}


fclose($fp);
