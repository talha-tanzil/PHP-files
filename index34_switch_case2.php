<?php
$n = 0;

echo $r = $n % 2;

switch ($r) {
    case 1:
    case -1:
        switch ($n) {
            case ($n > 0):
                echo "$n is an odd & positive number";
                break;
            case ($n < 0):
                echo "$n is an odd & negative number";
                break;
           break;
        }
        break;
    case 0:
        switch ($n) {
            case ($n > 0):
                echo "$n is an even & positive number";
                break;
            case ($n < 0):
                echo "$n is an even & negative number";
                break;
            case ($n == 0):
                echo "$n is a nor odd neither even & is a neutral number";
                break;
        }
}
