 <?php
$n = 18;
$r = $n % 2;

switch ($r) {
    case 1:
    case -1:
        if ($n > 0) {
            echo "$n is an odd & positive number";
        } else {
            echo "$n is an odd & negative number";
        }
        break;

    case 0:
        if ($n > 0) {
            echo "$n is an even & positive number";
        } elseif ($n < 0) {
            echo "$n is an even & negative number";
        } else {
            echo "$n is neither odd nor even & is a neutral number";
        }
        break;
}