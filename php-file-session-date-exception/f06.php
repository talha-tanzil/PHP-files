<?php
$handle = fopen("C:/laragon/www/phpday1/php-file-session-date-exception/data/f1.txt", "r");
while (!feof($handle)) { //file-end-of-file
    $buffer = fgets($handle);
    echo "Line: " . $buffer;
}
fclose($handle);