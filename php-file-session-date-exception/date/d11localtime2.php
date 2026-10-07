<?php
$olddate= mktime(0,0,0,3,15,2015);
$date= localtime($olddate);
echo $date ['month'];
echo "<pre>";
print_r (localtime($olddate, true));// structure: localtime($olddate, true=associative_array/false= indexed_array);
echo "</pre>";