<?php





// Set Session Store 
if($_SERVER['REQUEST_METHOD']=="POST"){
   
    $PlainText=file_get_contents("php://input");
    $PlainArray=json_decode($PlainText,true);
    $username=$PlainArray['username'];
    session_start();
    $_SESSION['username']=$username;
    echo "Success";
}


// Read From Session Store 
if($_SERVER['REQUEST_METHOD']=="GET"){

   session_start();
   echo $_SESSION['username'];
}


// Read From Session Store 
if($_SERVER['REQUEST_METHOD']=="DELETE"){

    session_start();
    unset($_SESSION['username']);
    session_destroy();
    echo "session destroyed";
 }
 


