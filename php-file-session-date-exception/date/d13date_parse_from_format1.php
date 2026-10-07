<?php
echo "<pre>";
print_r (date_parse_from_format("ddmmyyyy","15032015"));
echo "</pre>";
$date = date_parse("2015-03-15 12:25:32.45");
echo $date ['month'];