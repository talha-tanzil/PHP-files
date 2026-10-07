<?php
$filename= "C:/laragon/www/phpday1/php-file-session-date-exception/data/f2.txt";
if(is_writable($filename)){
$existingData= file_get_contents($filename);
$fp= fopen($filename, 'a');// a means append mood, w means write mood. append ortho holo: already ja ase tar nich theke lekha start korbe. or existing data ke save rekhe er nich theke lekha start korbe

//fwrite($fp, $existingData);
fwrite($fp, "Mercury\n");
fwrite($fp, "Venus\n");
fwrite($fp, "Earth\n");
fclose($fp);
}