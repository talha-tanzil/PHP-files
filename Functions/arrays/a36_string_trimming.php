<?php
//Discussion of string trimming, uses of some utility function
$string= " Hello \n,";
//echo $string= trim($string);
//$string= trim($string,' \n');// ai line ta comment kore sudhu echo korle bojha jabe trimming. NOTE: 1. sudhu trim korle both side theke trim hobe, 2. r ltrim korle left side theke trim hobe, 3. rtrim korle right side theke trim hobe
echo $string1= rtrim($string,",\n"); // \n, \t etc double quote er vitor rakte hobe, single quote er vitor kaj korbe na
// echo $string2= trim($string,' ,');
echo "Data";