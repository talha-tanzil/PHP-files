<?php
session_start(['cookie_lifetime' => 300]);//300=5minutes
$error = false;
//session_destroy();
if (!isset($_SESSION['loggedin'])) {
    $_SESSION['loggedin'] = false;
}
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$fp = fopen("./data/users.txt", 'r');
if ($username && $password) { //2nd password: starlord
    $_SESSION['loggedin'] = false;
    $_SESSION['user'] = false;
    $_SESSION['role'] = false;
    while ($data = fgetcsv($fp)) {
        if ($data[0] == $username && $data[1] == sha1($password)) {
            $_SESSION['loggedin'] = true;
            $_SESSION['user'] = $username;
            $_SESSION['role'] = $data[2];
            header('location: index.php');
        }
    }
    if (!$_SESSION['loggedin']) {
        $error = true;
    }
}

if (isset($_GET['logout'])) {
    $_SESSION['loggedin'] = false;
    $_SESSION['user'] = false;
    $_SESSION['role'] = false;
    session_destroy();
    header('location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form Example</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
    <style>
        body {
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2>Simple Auth Example</h2>
            </div>
        </div>

        <div class="row">
            <div class="column column-60 column-offset-20">
                <?php
                //echo sha1("123456")."<br>";
                if ($_SESSION['loggedin'] == true) {
                    echo "Hello admin, welcome!";
                } else {
                    echo "Hello Stranger, login below";
                }
                ?>
            </div>
        </div>
        <div class="row" style="...">
            <div class="column column-60 column-offset-20">
                <?php
                if ($error) {
                    echo "<blockquote> Username and Password didn't match </blockquote>";
                }
                if ($_SESSION['loggedin'] == false):
                    ?>
                    <form method="POST">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username">

                        <label for="password">Password</label>
                        <input type="password" name="password" id="password">

                        <button type="submit" class="button-primary" name="submit">Log In</button>
                    </form>
                    <?php
                else:
                    ?>
                    <form action="s5_auth.php?" method="POST">
                        <input type="hidden" name="logout" value="1">
                        <button type="submit" class="button-primary" name="submit">Log Out</button>
                    </form>
                    <?php
                endif;
                ?>
            </div>
        </div>