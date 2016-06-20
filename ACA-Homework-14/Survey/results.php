<?php

session_start();

$username = $_POST["username"];
$password = $_POST["password"];

$_SESSION["username"] = $username;
$_SESSION["password"] = $password;

$file = fopen("data.txt","a+");
$data = "First name: " . $_SESSION["first_name"] . " " . "Last name:" . $_SESSION["last_name"] . " " . "Birthday: ". $_SESSION["day"] . "/" . $_SESSION["month"] . "/" . $_SESSION["year"] . " " . "Gender: " . $_SESSION["gender"] . " " . "Username: " . $_SESSION["username"] . " " . "Password: " . $_SESSION["password"] . "\n";
fwrite($file,$data);
//fclose($file);


?>


<!doctype html>
<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link rel = "stylesheet" href = "style.css">
</head>

<body>
<br>

<div class = "container">
    <div class = "row">
        <div class = "col-md-12 text-center">
            <h1 class = "text-info" style = "font-size: 30px;" align = "left">User Details</h1>
        </div>
    </div>

    <div class = "row">
        <b>First Name: <?= $_SESSION["first_name"] ?></b>
        <br>
        <b>Last Name: <?= $_SESSION["last_name"] ?></b>
        <br>
        <b>Birthday: <?= $_SESSION["day"] . "/" . $_SESSION["month"] . "/" . $_SESSION["year"] ?></b>
        <br>
        <b>Gender: <?= $_SESSION["gender"] ?></b>
        <br>
        <b>Username: <?= $_SESSION["username"] ?></b>
        <br>
        <b>Password: <?= $_SESSION["password"] ?></b>
    </div>
</div>

</body>

</html>