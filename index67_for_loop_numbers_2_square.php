<?php
/*drawing square */
$num =1;
for ( $i=1; $i <=3; $i+=1) {
    for ($j=1; $j<=3; $j+=1) {
        echo $num; $num++;
    }
    echo PHP_EOL;
}

echo "=====\n";
//drawing triangle
$num = 1;
for ($i=1; $i<=4; $i++) {
    echo PHP_EOL;
    for ($j= 1; $j<= $i; $j+= 1){
        echo $num."\t"; $num++;
    }
}