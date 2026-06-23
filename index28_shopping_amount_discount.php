<?php
$itemPrice = 1000;
$discount = '';
if ($itemPrice >= 5000) {
    echo $discount = $itemPrice * 0.2;
} else if ($itemPrice >= 3000 && $itemPrice < 5000) {
    echo $discount = $itemPrice * 0.1;
} else if ($itemPrice >= 1000 && $itemPrice < 3000) {
    echo $discount = $itemPrice * .05;
} else {
    echo $discount = $itemPrice * 0;
}