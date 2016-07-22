<?php

session_start();

$firstName = $_POST["first_name"];
$lastName = $_POST["last_name"];
$year = $_POST["bdyear"];
$month = $_POST["bdmonth"];
$day = $_POST["bdday"];
$gender = $_POST["gender"];

$_SESSION["first_name"] = $firstName;
$_SESSION["last_name"] = $lastName;
$_SESSION["year"] = $year;
$_SESSION["month"] = $month;
$_SESSION["day"] = $day;
$_SESSION["gender"] = $gender;


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
        <div class = "col-md-4"></div>
        <div class = "col-md-4 formContainer">
            <br>
            <h1 class = "heading"><b>Registration</b></h1>
            <form method="post" action = "results.php">
                <label for="Username">Username</label>
                <input name = "username" type = "text" title = "Username" class = "form-control">
                <label for="password">Password</label>
                <input name = "password" type = "password" title = "password" class = "form-control">
                <input type = "submit" value = "Next >>" class = "btn btn-success">
            </form>
        </div>
        <div class = "col-md-4"></div>
    </div>
</div>

</body>

</html>

