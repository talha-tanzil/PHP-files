<?php
echo "Cookie value: " .$_COOKIE["user"];
// cookie delete korar way: time() function er sathe minus sign diye time ke previous time e niye jawa lagbe, this is how cookie is deleted:
setcookie("user","",time()-3600*24,"/");
?>