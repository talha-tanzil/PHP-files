<?php
//mktime er vitor 6ta parameter thake ai serial e-->, hour,min,sec, month, day, year. egulo past time er parameter
//gmmktime er vitoreo 6ta parameter thake ai serial e-->, hour,min,sec, month, day, year. aita GMT date(Greenwich Mean Time)
// structure of mktime/gmmktime: date(format, timestamp)
echo "Time & date is ".date("d-m-Y h:i:sa e"). "\n";
echo date("d-m-Y h:i:sa e l",mktime(0,0,0,10,15,2003)). "\n";
echo date("d-m-Y h:i:sa e l",gmmktime(0,0,0,10,15,2003)). "\n";