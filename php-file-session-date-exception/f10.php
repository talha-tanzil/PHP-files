<?php
$filename = "C:/laragon/www/phpday1/php-file-session-date-exception/data/f2.txt";
//w+, a+ er
$fp = fopen($filename, 'w+');
fwrite($fp, "Uranus\n");
rewind($fp);// ekhane rewind deyai cursor abar suru te chole ashbe, tai fgets read korte parbe. ekhane rewind/fseek na dile echo kisui hobe na
$line = fgets ($fp);
echo $line;