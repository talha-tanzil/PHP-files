<?php

//What is $_SERVER["REQUEST_METHOD"]

if($_SERVER['REQUEST_METHOD']=="POST"){

    echo "This is post";
}


if($_SERVER['REQUEST_METHOD']=="GET"){

    echo "This is GET";
}


if($_SERVER['REQUEST_METHOD']=="PUT"){

    echo "This is PUT";
}



if($_SERVER['REQUEST_METHOD']=="DELETE"){
    echo "This is DELETE";
    
}


if($_SERVER['REQUEST_METHOD']=="PATCH"){
    echo "This is PATCH";
    
}
