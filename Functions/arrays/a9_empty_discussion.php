<?php
//empty & set kora ase kina check kora
$name = false;
/*$name= null, false, '', 0,5, "earth" */
/*isset($name)
echo "";
*/
if(isset($name)){
    echo "name is set";
} else {
    echo "name is not set";
}
echo "\n";
if(empty($name)){
    echo "name is empty";
} else {
    echo "name is not empty";
}

echo "\n";
if (isset($name) && (is_numeric($name) || $name !='')) {
    echo "name is set & not empty";
} else {
    echo "name is either not set or empty";
}