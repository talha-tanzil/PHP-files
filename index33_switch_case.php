<?php
$color = "green";
switch ($color) {
    case 'red':
    case 'green':
       echo ucwords($color). " is my fav color \n";
       break;
    case 'Blue':
       echo "Blue is my color";
       break;
    
    default:
        echo "This color is ok";
        break;
}

echo "\n";
$x = 12;
$r = $x % 2;
switch ($r) {
    case 0: 
        echo "$x is an even number";
        break;
    default :
        echo "$x is an odd number";

}