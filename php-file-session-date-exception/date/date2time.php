<?php
//all about time
echo "Hour is ".date("h"). "\n";
echo "Hour is ".date("H"). "\n";
echo "Minutes is ".date("i"). "\n";
echo "Seconds is ".date("s"). "\n";
echo "Meridiem is ".date("A"). "\n";
echo "Time is ".date("h:i:sa"). "\n";
//ekhane 10 no. line e kono timezone set kora nai, tai ai default timezone er time e dekhabe
echo "Time & date is ".date("d-m-Y h:i:sa e"). "\n";
date_default_timezone_set("Asia/Dhaka");
//ekhane 13 no. line e dhakar timezone set korsi, tai ekhane dhakar current time dekhabe
echo "Time & date is ".date("d-m-Y h:i:sa e"). "\n";
