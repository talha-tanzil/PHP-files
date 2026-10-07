<?php

//What is file_get_contents()
// JSON Request->Response
// JSON Decode()




if($_SERVER['REQUEST_METHOD']=="POST"){

    $PlainText=file_get_contents("php://input");
    $PlainArray=json_decode($PlainText,true);
    
    
    $sum=$PlainArray['num1']+$PlainArray['num2'];
    $sub=$PlainArray['num1']-$PlainArray['num2'];
    $mul=$PlainArray['num1']*$PlainArray['num2'];
    $div=$PlainArray['num1']/$PlainArray['num2'];

    $result=["sum"=>$sum,"sub"=>$sub,"mul"=>$mul,"div"=>$div];

    $JSON=json_encode($result);

    echo $JSON;


}


