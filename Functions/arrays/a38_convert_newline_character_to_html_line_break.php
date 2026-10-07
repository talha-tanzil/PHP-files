<?php
// Convert newline character to HTML line break
$string= "Lorem ipsum dolor sit amet\n consectetur adipisicing elit. Eos, ne\nmo \naliquid! Quasi sint qui provident magnam non illo sit molestiae.";// kintu evabe sudhu '\n' likle website e new line create hoina. rather sudhu white space create hoi, etake convert korar function holo "nl2br"
//echo $string;
echo nl2br($string);