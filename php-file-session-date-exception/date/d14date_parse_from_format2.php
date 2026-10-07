<?php
echo "<pre>";
print_r (date_parse_from_format("d.n.Y","15.3.2015"));
echo "</pre>";
$date = date_parse_from_format("d.n.Y","15.3.2015");
echo $date ['month'];