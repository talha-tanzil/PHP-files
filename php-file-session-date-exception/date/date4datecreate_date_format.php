<?php
// date_create & date_format function // date_create diye previous or future date create kora jai.. date create e year-month-day pass korte hobe
//$date= date_create("2026-08-04");
//$date= date_create("2026-08-04 10:18:00");
//$date= date_create("2027-11-17", new DateTimeZone("Asia/Dhaka"));// ekhane timezone lagano optional, na dileo hoi, dile specific hoi
$date= date_create("2027-11-17", timezone_open("Asia/Dhaka"));
echo date_format($date, "d-m-Y l H:i:sa");