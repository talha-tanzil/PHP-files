<?php

$n = 18;
$r = $n % 2;

switch (true) {

    case ($r != 0 && $n > 0):
        echo "$n is an odd & positive number";
        break;

    case ($r != 0 && $n < 0):
        echo "$n is an odd & negative number";
        break;

    case ($r == 0 && $n > 0):
        echo "$n is an even & positive number";
        break;

    case ($r == 0 && $n < 0):
        echo "$n is an even & negative number";
        break;

    case ($n == 0):
        echo "$n is neither odd nor even and is a neutral number";
        break;
}