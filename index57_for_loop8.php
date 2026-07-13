<?php
/*for ($i = 20; $i<30; $i+=1) {
    if ($i<27){
        continue;
    }
    echo $i. "\n";
}*/

for ($i = 20; $i<30; $i+=1) {
    if ($i<27){
        goto a;
    }
    echo $i. "\n";
    a: '';
}

