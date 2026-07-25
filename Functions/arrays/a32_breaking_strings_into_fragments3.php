<?php
//note: strpos use korar somoi shob somoi comparison er khetre data type shoho check korte hobe (===, !==).
$string= "Quick brown Fox Fox jumps over the Fox lazy dog";
echo $string[12]."\n"; //kintu evabe manually position na diye character diyeo check kora jai
echo strpos ($string, "fox");// strpos (string $haystack, string mixed needle, int offset), aita print hobe na, karon strpos function case sensitive, aita suru theke search/count korbe
echo strpos ($string, "fox");// aita print hobe, 1st fox or 1st f er offset print hobe
echo stripos ($string, "fox");// aita print hobe, karon stripos function case insensitive
echo "\n";
echo stripos ($string, "fox", 13); //stripos (string $haystack, string mixed needle, int offset), aita dile ai offset er por theke khoja shuru korbe. etao shuru theke count/search korbe
$word= strpos($string, "Quick");
echo "\n";
$word2= strrpos($string, "Fox");// eta end theke search korbe, kintu offset count korbe suru theke
echo $word2."\n";
echo $word3= strripos($string, "Fox")."\n";// etao end theke search. case insensitive

if($word){ //এখানে $offset যদি true হয়, তাহলে "Word was found" print করবে; না হলে "Word was not found" print করবে। ekhane offset 0 boolian false er equivalent



    echo "\nWord was found\n";
}else{
    echo "\nWord was not found\n";
}
if($word!==false){// !== use korte hobe, != na. karon $word er value 0 false er equivalent, kintu eta boolean false na
    echo "\nWord was found\n";
}else{
    echo "\nWord was not found\n";
}


