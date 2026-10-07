<?php



/* Parse Error (Syntax Error):

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Hello, World"
}
*/




/* Fatal Error:
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  echo myUndefinedFunction();
}
*/





/* Warning Error

if ($_SERVER["REQUEST_METHOD"] ="GET") {
    include("abc.php");
    echo "Hello";
}
*/


/* Notice Error
if ($_SERVER["REQUEST_METHOD"] == "GET") {
$x = "Hello, World!";
echo $y;
}
*/




/* Deprecated Error:
if ($_SERVER["REQUEST_METHOD"] == "GET") {
$lat = 34.0522;
$lon = -118.2437;
$sunrise = date_sunrise(time(), SUNFUNCS_RET_STRING, $lat, $lon);
echo "Sunrise time in Los Angeles is: $sunrise";
}
*/





/*Strict Error
if ($_SERVER["REQUEST_METHOD"] == "GET") {
 class MyClass {
    function nonStaticMethod() {
        echo "nonStaticMethod";
    }
 }
 MyClass::nonStaticMethod();
}
*/







