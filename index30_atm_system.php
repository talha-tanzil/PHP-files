<?php

$PinInput = "Tanzil";
$CorrectPass = "Tanzil";
$Balance = 3000;
$Withdraw = 4000;

if ($PinInput !=''){
    if ($PinInput == $CorrectPass) {
        if ($Withdraw <= $Balance) {
            echo "check $Balance and allow withdraw";
    } else {
        echo "Insufficient balance";
    } 

    } else {
        echo "Wrong Password";
    }
} else {
    echo "Password cannot be empty";
}