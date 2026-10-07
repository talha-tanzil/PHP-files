<?php
$olddate = mktime(0,0,0,3,15,2015); //structure: mktime (hour,min,sec,month,day,year);
$date= getdate($olddate);
echo $date['month']. "-". $date['year'];
echo "<pre>";
print_r(getdate($olddate));
echo "</pre>";