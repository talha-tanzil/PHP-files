<!DOCTYPE html>
<html>
<body>

<?php 
$favcolor = "red";

$text = match($favcolor) {
  "red" => "Your favorite color is red!",
  "blue" => "Your favorite color is blue!",
  "green" => "Your favorite color is green!",
  default => "Your favorite color is neither red, blue, nor green!",
};

echo $text;
?>
 
</body>
</html>