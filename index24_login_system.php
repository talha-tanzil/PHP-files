<?php
$username = '';
$password = 'Talha';
if ($username == '' && $password == '') {
    echo "Enter both username & password";
} else if ($username == "Tanzil" && $password == '') {
    echo "username is correct, now enter password";
} else if ($username == "Tanzil" && $password == "Talha") {
    echo "Login successful";
} else {
    echo "Login unsuccessful";
}