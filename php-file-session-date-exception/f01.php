<?php
// fgets read learning
$filename = "C:/laragon/www/phpday1/php-file-session-date-exception/data/f1.txt";
// ekahne forward slash diye kaj korte hobe, backslash e hobe na
// echo getcwd();

// text file read korte r dilei hobe, binary file jemon jpeg, png etc hole 'rb' dite hobe, write hole 'w', append (songjojon kora) mood hole 'a' dile hobe. append bolte file e ja lekha ase ta seshe rakha 

$fp = fopen($filename, 'r');
$line = fgets($fp, 3);// 1st line er 1st 2character print korbe
echo $line;
$lin = fgets($fp, 3);// erporer 2character print korbe
echo $lin;
$line = fgets($fp);// 1st line er porer baki shob characters print korbe
echo $line;
$line = fgets($fp);// 2nd line er porer baki shob characters print korbe
echo $line;

while ($line=fgets($fp)){
    echo $line."\n";
}

fclose($fp);
