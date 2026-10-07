<?php
$filename = "C:/laragon/www/phpday1/php-file-session-date-exception/data/f1.txt";
if (is_readable($filename)) {
    //$fp = fopen($filename, 'r');
//VVI: ekhane "file" function directly file resource/path variable er sathe kaj kore puro file ke ekbare read kore array er moddhe print kore, erjonne print_r dite hobe, echo $data=file($filename) dile hobe na. kintu NOTE: ekhane file function diye array baniye shortly variable er offset bole alada alada line print kora jai, exp: echo $data[3];
// is_readable diye readable kina check kora jai
    $data = file($filename);
    echo $data[2];
    print_r($data);
    // file_get_contents function o puro file read kore, kintu array hisebe na, string hisebe. aita echo diye kore
    echo $data = file_get_contents($filename);
}