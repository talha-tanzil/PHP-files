<?php
//checkdate 2ta result dei, either true or false. true hole 1 r false hole 0 or kichui print hobena. structure: checkdate(month, day, year)
//date_diff er structure: date_diff(datetime1, datetime2, absolute); ekhane datetime2 theke datetime1 subtract hobe. absolute ta optional, na dileo hoi, er value false dile positive negative both value e pass korbe, er value true dile sudhu positive value/difference pass korbe. absolute er by default value false
echo checkdate(2, 28, 2014). "\n";
$date1 = date_create("2013-03-15");
$date2 = date_create("2013-12-12");
$diff = date_diff($date1, $date2);

// eta echo diye hobe na, print_r dite hobe, karon date_diff object/array hisebe print kore

echo $diff->days ."<br>";
echo $diff-> format("%r%a"). "<br>";
 echo "<pre>";
 print_r ($diff);
 echo "</pre>";