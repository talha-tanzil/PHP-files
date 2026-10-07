<?php
$filename= "C:/laragon/www/phpday1/php-file-session-date-exception/data/f2.txt";
//r+ er kaj
$fp= fopen($filename, 'r+');
$line= fgets($fp);
echo $line;
fwrite($fp, "Uranus\n");
$line= fgets($fp);
echo $line;
fseek($fp, 0);// rewind ($fp);
fwrite($fp, "Venus");// fput
fclose($fp);
