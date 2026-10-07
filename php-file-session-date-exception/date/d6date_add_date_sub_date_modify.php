<?php
$date = date_create("2015-05-15");
date_add($date, date_interval_create_from_date_string("30 days"));
echo date_format($date, "d-m-Y")."<br>";
date_sub($date, date_interval_create_from_date_string("30 days"));
echo date_format($date, "d-m-Y")."<br>";
date_modify($date, "-10 days");
echo date_format ($date, "d-m-Y");