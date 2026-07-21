<?php
//How to Write Strings Differently in PHP
//string holo character set
//A Nowdoc begins with <<<'IDENTIFIER' (using single quotes) and ends with the exact same identifier on its own line.php<?php
//identifier er age kono line gap thakbe na, tab na rakhao valo
//A heredoc begins with <<<IDENTIFIER (without single or double quotes)
/*$myString = <<<'NOWDOC'
This is a Nowdoc string.
It supports multiple lines.
Variables like $example are not parsed.
NOWDOC;*/
$name = "Rakib";

$string01 = "my name is $name \n \t New data\n";
echo $string01;

$heredoc = <<< EOD
data 1
new line {$name} \n
more text
EOD;
echo $heredoc."\n";
$str1 = <<<STRING
   Hello World
      PHP Tutorial
   by TutorialsPoint\n
   
   STRING;
         
   echo $str1;

?>
 