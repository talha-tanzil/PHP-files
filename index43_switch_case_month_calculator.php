<?php
$Month = 3;
$Days = '';
switch ($Month) {
    case 1:
        echo "Days = ". "31 days";
        break;
    case 2:
        echo "Days = ". "28 or 29";
        break;
    case 3:
        echo "Days = ". 31;
        break;
    case 4:
        echo "Days = 30";
        break;
    case 5:
        echo "Days = 31";
        break;
    case 6:
        echo "Days = 30";
        break;
    case 7:
        echo "Days = 31";
        break;
    case 8:
        echo "Days = 31";
        break;
    case 9:
        echo "Days = 30";
        break;
    case 10:
        echo "Days = 31";
        break;
    case 11:
        echo "Days = 30";
        break;
    case 12:
        echo "Days = 31";
        break;
    default:
        echo "Invalid input";
}
