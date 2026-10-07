<?php
session_name('my_app');
session_start(['cookie_lifetime'=>60]);
$_SESSION['name']='Ruby';
echo $_SESSION['name'];
