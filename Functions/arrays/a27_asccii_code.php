<?php
//ascii code, 0-127--> 128 ta code er character ase
echo ord('A');
echo PHP_EOL;
echo ord('a');
echo PHP_EOL;
echo chr (13);
echo PHP_EOL;
echo chr (98);
echo PHP_EOL;
//printing all the ascii characters using a for loop
for ($i=0;$i<=127; $i++) {
    echo $i."=". chr($i)."\n";
}