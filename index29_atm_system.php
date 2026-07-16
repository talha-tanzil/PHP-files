<?php

$PinInput = '';
$CorrectPass = "Tanzil";
$Balance = 3000;
$Withdraw = '';
if ($PinInput != "") {
    if ($PinInput == $CorrectPass) {
        if ($Withdraw <= $Balance) {
            echo "check $Balance & allow withdraw amount";
        }else{
            echo "insufficient balance";
        }
    }else{
        echo "Incorrect Pass";
    }
}else{
    echo "Pin Can not be empty";
}