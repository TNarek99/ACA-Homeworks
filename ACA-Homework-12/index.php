<!DOCTYPE html>
<html>

    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <link rel = "stylesheet" href = "main.css">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </head>

    <body>
    <div class = "container">
        <br>
        <div class = "col-md-3"></div>
        <div class = "col-md-8">

            <h1 class = "text-info"><b>Users</b></h1>
        <?php

            define("ITEMS_PER_PAGE", 3);

            $number = 0;
            $firstNameValue = [];
            $lastNameValue = [];
            $birthdayValue = [];
            $ageValue = [];
            $url = "users.txt";
            $content = file_get_contents($url);
            $users = [];


            for ($i = 0; $i < strlen($content); $i++){
                if ($content[$i] . $content[$i+1] . $content[$i+2] . $content[$i+3] == 'Firs'){
                    for ($j = $i; $j < strlen($content); $j++) {
                        if ($content[$j] == "\n") {
                            $firstNameValue[$number] = str_replace("FirstName:","", $firstNameValue[$number]);
                            $users[$number]["firstName"] = $firstNameValue[$number];
                            $firstNameValue[$number] = $firstNameValue[$number] . "\n";
                            break;
                        }
                        $firstNameValue[$number] = $firstNameValue[$number] . $content[$j];//$content[$index];

                    }
                }

                if ($content[$i] . $content[$i+1] . $content[$i+2] . $content[$i+3] == 'Last'){
                    for ($j = $i; $j < strlen($content); $j++) {
                        if ($content[$j] == "\n") {
                            $lastNameValue[$number] = str_replace("LastName:","", $lastNameValue[$number]);
                            $users[$number]["lastName"] = $lastNameValue[$number];
                            $lastNameValue[$number] = $lastNameValue[$number] . "\n";
                            break;
                        }
                        $lastNameValue[$number] = $lastNameValue[$number] . $content[$j];//$content[$index];
                    }
                }

                if ($content[$i] . $content[$i+1] . $content[$i+2] . $content[$i+3] == 'Birt'){
                    for ($j = $i; $j < strlen($content); $j++) {
                        if ($content[$j] == "\n") {
                            $birthdayValue[$number] = str_replace("Birthday:","", $birthdayValue[$number]);
                            $users[$number]["birthday"] = $birthdayValue[$number];
                            $birthdayValue[$number] = $birthdayValue[$number] . "\n";
                            break;
                        }
                        $birthdayValue[$number] = $birthdayValue[$number] . $content[$j];//$content[$index];
                    }
                }

                if ($content[$i] . $content[$i+1] . $content[$i+2] == 'Age'){
                    for ($j = $i; $j < strlen($content); $j++) {
                        if ($content[$j] == "\n") {
                            $ageValue[$number] = str_replace("Age:","", $ageValue[$number]);
                            $users[$number]["age"] = $ageValue[$number];
                            $ageValue[$number] = $ageValue[$number] . "\n";
                            break;
                        }
                        $ageValue[$number] = $ageValue[$number] . $content[$j];//$content[$index];
                    }

                    $number++;
                }
            }


            $currentPage = 1;

            if (isset($_GET["page"])){
                $currentPage = $_GET["page"];
            }

            $totalPageCount = ceil(count($users) / ITEMS_PER_PAGE);


            $start = ($currentPage - 1) * ITEMS_PER_PAGE;
            $limit = ITEMS_PER_PAGE;

            if ($start + $limit > count($users)){
                $limit = count($users) - 1;
            }


            /*if ($start + $limit - 1> count($users)){
                echo "not valid";
                die;
            }

            if ($start < 1){
                echo "not valid";
                die;
            }*/


            echo '<table class = "table-bordered">';
            echo "<thead>";
            echo '<th>' . 'First' . '</th>';
            echo '<th>' . 'Last' . '</th>';
            echo '<th>' . 'Birthday' . '</th>';
            echo '<th>' . 'Age' . '</th>';
            echo "</thead>";


            for ($i = $start; $i < $start + $limit; $i++){
                if (isset($users[$i]["firstName"]) && isset($users[$i]["lastName"]) && isset($users[$i]["birthday"]) &&isset($users[$i]["age"])) {
                    echo "<tr>";
                    echo "<td>" . $users[$i]["firstName"] . "</td>";
                    echo "<td>" . $users[$i]["lastName"] . "</td>";
                    echo "<td>" . $users[$i]["birthday"] . "</td>";
                    echo "<td>" . $users[$i]["age"] . "</td>";
                    echo "</tr>";
                }
            }

            echo "</table>";

            echo '<ul class = "pagination">';
            if ($currentPage == 1){
                echo '<li>
                        <a href = "http://localhost/DAY16/index.php?page= ' . $totalPageCount . '" aria-label="Next">
                          <span aria-hidden="true">&laquo;</span>
                        </a>
                      </li>';
            }else{
            echo '<li>
                    <a href = "http://localhost/DAY16/index.php?page= ' . ($currentPage - 1) . '" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>';}

            for ($i = 1; $i <= $totalPageCount; $i++){
                $style = '';
                if ($i == $currentPage){
                    $style = "font-weight: bold;";
                }
                echo "<li>";
                echo '<a href = "http://localhost/DAY16/index.php?page= ' . $i . '" style = "' . $style . '">' . $i . '</a>';
                echo "</li>";
            }

            if ($currentPage == $totalPageCount){
                echo '<li>
                    <a href = "http://localhost/DAY16/index.php?page= ' . 1 . '" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span> 
                    </a> 
                  </li>';
            }else{
            echo '<li>
                    <a href = "http://localhost/DAY16/index.php?page= ' . ($currentPage + 1) . '" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>';}
            echo "</ul>";
        ?>
        </div>
    </div>

    <br>

    <div class = "container">
        <div class = "row">
            <div class = "col-md-6 text-center">
                <a href = "add.php"><button class = "btn btn-lg btn-success">Add User</button></a>
            </div>

            <div class = "col-md-6 text-center">
                <a href = "remove.php"><button class = "btn btn-lg btn-danger">Delete User</button></a>
            </div>
        </div>
    </div>
    </body>

</html>
