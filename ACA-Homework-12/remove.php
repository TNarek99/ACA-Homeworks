<!DOCTYPE html>
<html>
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
        <div class = "container">
            <div class = "row">
                <div class = "col-md-12 text-center">
                    <h1 class = "text-danger"><b>Remove User</b></h1>
                </div>
            </div>

            <div class = "row">
                <div class = "col-md-12">
                    <form action = "remove.php">
                        <h2 class = "text-warning">Type in the data of the user you want to remove:</h2>
                        <input type = "text" placeholder = "Firt Name" name = "removeFirstName" class = "form-control remove">
                        <input type = "text" placeholder = "Last Name" name = "removeLastName" class = "form-control remove">
                        <input type = "text" placeholder = "DD/MM/YY" name = "removeBirthday" class = "form-control remove">
                        <input type = "text" placeholder = "Age" name = "removeAge" class = "form-control remove">
                        <button type = "submit" class = "btn btn-danger">Remove</button>
                        <a href = "index.php" class = "btn btn-warning">Users List</a>
                    </form>
                </div>
            </div>
        </div>

        <?php

            if (isset($_GET["removeFirstName"]) && isset($_GET["removeLastName"]) && isset($_GET["removeBirthday"]) && isset($_GET["removeAge"])){
                $removeFirstName = $_GET["removeFirstName"];
                $removeLastName = $_GET["removeLastName"];
                $removeBirthday = $_GET["removeBirthday"];
                $removeAge = $_GET["removeAge"];
                $url = "users.txt";
                $content = file_get_contents($url);
                $lengthFirstName = strlen($removeFirstName);
                $lengthLastName = strlen($removeLastName);
                $lengthBirthday = strlen($removeBirthday);
                $lengthAge = strlen($removeAge);
                for ($i = 0; $i < strlen($content); $i++){
                    if (substr($content, $i, 10 + $lengthFirstName + 1) == "FirstName:" . $removeFirstName. "\n"){
                        /*$line = "FirstName:" . $removeFirstName;
                        $content = str_replace($line, '', $content);
                        file_put_contents($url, $content);*/
                        if (substr($content, $i + 10 + $lengthFirstName + 1, 9 + $lengthLastName + 1) == "LastName:" . $removeLastName. "\n"){
                            if (substr($content, $i + 10 + $lengthFirstName + 1 + 9 + $lengthLastName + 1, 9 + $lengthBirthday + 1) == "Birthday:" . $removeBirthday. "\n"){
                                $finalLength = $i + 10 + $lengthFirstName + 1 + 9 + $lengthLastName + 1;
                                if (substr($content, $finalLength + 9 + $lengthBirthday + 1, 4 + $lengthAge) == "Age:" . $removeAge){
                                    $line = "FirstName:" . $removeFirstName . "\n" . "LastName:" . $removeLastName . "\n" . "Birthday:" . $removeBirthday . "\n" . "Age:" . $removeAge;
                                    $content = str_replace($line, '', $content);
                                    file_put_contents($url, $content);
                                }
                            }
                        }
                    }
                }


            }

        ?>
    </body>
</html>
