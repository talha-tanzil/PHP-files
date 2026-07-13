<?php
$Grade= 'F';
switch ($Grade) {
    case 'A':
        echo "Excellent";
        break;
    case "A-":
        echo "Convenient";
        break;
    case "B":
        echo "Good";
        break;
    case "C":
        echo "Not much good";
        // break;
    case "D":
        echo "Passed barely";
        break;
    case "F":
        echo "Failed, better luck next time";
        // break;
    default:
        echo "Invalid value";
        break;
}