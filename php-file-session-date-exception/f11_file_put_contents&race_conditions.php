<?php
$filename= "C:/laragon/www/phpday1/php-file-session-date-exception/data/f2.txt";
//file_put_contents function er kaj 
file_put_contents($filename, "Mars\n", FILE_APPEND);// FILE_APPEND dile ager data save soho porer lekha print hobe
//file_put_contents($filename, "Mars\n", LOCK_EX); //lock_ex diye race condition meet kore, ete koyekjon eki file e at a time entry dite thakle/race korle kono writer er lekha sesh howar age porjonto file lock rakhbe
//file_put_contents($filename, "Mars\n", FILE_APPEND | LOCK_EX);
file_put_contents($filename, "Jupiter\n", FILE_APPEND);