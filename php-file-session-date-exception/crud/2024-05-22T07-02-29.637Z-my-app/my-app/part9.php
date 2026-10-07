<?php

try{
    if ($_SERVER["REQUEST_METHOD"] ="GET") {
        include("abc.php");
        echo "Hello";
    }

}
catch(Exception $e){
   echo $e;
}