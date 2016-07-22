<!doctype html>

<html>

<head>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <style>
        a{
            text-decoration: none;
            color: black;
        }
    </style>

</head>

<body>


    <div class = "container">
        <div class = "row">
            <div class = "col-md-12 text-center">
                <h1>Search results for <?=$_GET["search"]; ?></h1>
            </div>
        </div>

        <div class = "row">

            <ul class = "list-group">
            <?php

            $searchFileName = $_GET["search"];
            define ("SEARCH_NAME", $searchFileName);
            define("ROOT_PATH", "/var/www/html/");

            function search($path = '""'){

                if($path == '""'){
                    $path = ROOT_PATH;
                }

                $scan = scandir($path);


                $dot = array_search('.', $scan);
                $twodot = array_search('..', $scan);

                unset($scan[$dot]);
                unset($scan[$twodot]);

                foreach ($scan as $index => $item) {


                    if (strpos($item, SEARCH_NAME) !== false){
                        echo '<a href = "index.php?path='.$path . $item . "/".'" class = "list-group-item">';
                        echo $path . $item . "/";
                        echo '</a>';

                    }
                    if (is_dir($path . $item . "/")) {
                        search($path . $item . "/");
                    }

                }

                return $results;
            }

              search();

            ?>
            </ul>

        </div>
    </div>

</body>

</html>


