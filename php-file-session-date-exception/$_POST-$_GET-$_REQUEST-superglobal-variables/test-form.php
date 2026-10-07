<?php
echo "<pre>";
print_r($_GET);
echo "</pre>";
echo "<pre>";
print_r($_SERVER);
echo "</pre>";

echo $_GET['fname']."<br>";
echo $_SERVER['PHP_SELF']."<br>";
echo $_SERVER ['HTTP_HOST'];