<?php
echo "Enter name and age: ";
$line = trim(fgets(STDIN));

sscanf($line, "%s %d", $name, $age);

echo "Using input line + sscanf:\n";
echo "Name: " . $name . "\n";
echo "Age: " . $age . "\n";
?>
