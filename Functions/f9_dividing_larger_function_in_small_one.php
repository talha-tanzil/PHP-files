<?php
function doTaskA(){
    echo "step A done\n";
}
function doTaskB(){
    echo "step B done\n";
}
function doTaskC(){
    echo "step C done\n";
}
function doTaskD(){
    echo "step D done\n";
}
function doTaskE(){
    echo "step E done\n";
}
function doTheLargerTask(){
     doTaskA ();
     doTaskB ();
     doTaskC ();
     doTaskD ();
     doTaskE ();
 }
doTheLargerTask ();