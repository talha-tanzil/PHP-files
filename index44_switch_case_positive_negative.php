<?php
$n = 0;

switch (true) {

    case ($n > 0):
        echo "Positive";
        break;

    case ($n < 0):
        echo "Negative";
        break;

    default:
        echo "Zero";
}