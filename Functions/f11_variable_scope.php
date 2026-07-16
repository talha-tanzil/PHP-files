<?php
$name = "Earth";
function doSomething() { //global scope
     global $name;
     echo $name. "\n";
    // echo $GLOBALS ['name']; //super global
}
doSomething ();

echo "====\n";
function doThis() {
    $name = "Earth\n";
    echo $name;
}
doThis ();
echo "====\n";

//static scope example
function doNothing () {
    static $i;
    $i = $i ?? 0;
    $i++;
    echo $i. "\n"; 
}
function doExtra () {
    static $i;
    $i = $i ?? 0;
    $i++;
    echo $i. "\n"; 
}

doNothing ();
doNothing();
doNothing ();
doNothing ();
doExtra ();
doNothing ();
doExtra();
