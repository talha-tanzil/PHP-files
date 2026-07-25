<?php
$filename = "C:/laragon/www/phpday1/php-file-session-date-exception/data/f1.txt";
$fp = fopen($filename, 'r');
$fq = fopen($filename, 'r');
//ekhane 2bar print korbe, karon alada alada vabe save korse
$line = fgets($fp, 3);
echo $line;
$lin = fgets($fp, 3);
echo $lin;
$line = fgets($fp);
echo $line;
$line = fgets($fp);
echo $line;

while ($line=fgets($fp)){
    echo $line."\n";
}
while ($line=fgets($fq)){
    echo $line."\n";
}


fclose($fp);
