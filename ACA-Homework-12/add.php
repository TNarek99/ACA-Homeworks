<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <link rel = "stylesheet" href = "main.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</head>
<body>
<br>
<div class = "container-fluid">
    <div class = "row">
        <div class = "col-md-4"></div>
        <div class = "col-md-4">
            <h1 class = "text-info text-center"><b>Sign In Form</b></h1>
        </div>
    </div>

    <div class = "row">
        <div class = "col-md-4"></div>
        <div class = "col-md-4">
            <form action = "add.php">
                <input type = "text" placeholder = "First Name" class = "form-control" name = "firstName">
                <input type = "text" placeholder = "Last Name" class = "form-control" name = "lastName">
                <input type = "text" placeholder = "DD/MM/YYYY" class = "form-control" name = "birthday">
                <input type = "text" placeholder = "Age" class = "form-control" name = "age">
                <button type = "submit" class = "btn btn-info">Submit</button>
            </form>
        </div>
    </div>

    <div class = "row">
        <div class = "col-md-4"></div>
        <div class = "col-md-4 text-center">
            <a href = "index.php" class = "btn btn-primary">Users List</a>
        </div>
    </div>
</div>

<?php

    if (isset($_GET["firstName"]) && isset($_GET["lastName"]) && isset($_GET["birthday"]) && isset($_GET["age"])) {

        $firstName = $_GET["firstName"] . PHP_EOL;
        $lastName = $_GET["lastName"] . PHP_EOL;
        $birthday = $_GET["birthday"] . PHP_EOL;
        $age = $_GET["age"] . PHP_EOL;

        $file = fopen("users.txt", "a+");
        fwrite($file, "FirstName:" . $firstName);
        fwrite($file, "LastName:" . $lastName);
        fwrite($file, "Birthday:" . $birthday);
        fwrite($file, "Age:" . $age);
        fclose($file);
    }
?>

</body>
</html>