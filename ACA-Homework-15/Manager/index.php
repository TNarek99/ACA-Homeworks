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

        /*.list-group-item:hover{
            background-color: black;
            color: white;
            cursor: pointer;
        }*/

        span{
            margin-right: 10px;
        }
        
        .btn{
            background: none;
            width: 45px;
        }

        .btn:hover{
            background-color: black;
            color: white;
        }
        
        .form-control{
            display: inline-block;
            width: 200px;
        }
    </style>

</head>

<body>
    <br>
    <div class = "container">

        <div class = "row">
            <div class = "col-md-12 text-center">
                <h1><b>FILE MANAGER</b></h1>
            </div>
        </div>

        <div class = "row">

            <div class = "col-md-3">
                <form action = "search.php">
                    <input class = "form-control" placeholder = "Search in local server" name = "search">
                    <button class = "btn btn-default" type = "submit">
                        <span class = "glyphicon glyphicon-search"></span>
                    </button>
                </form>
            </div>

            <div class = "col-md-6">

                <?php

                //define("ROOT_PATH", "/var/www/html/DAY19/");
                define("ROOT_PATH", $_GET["path"]);
                define("BASE_PATH", "http://localhost/DAY19/Manager/?path="); // your initial directory here
                //echo '<pre>';
                //var_dump($result);
                //echo '</pre>';
                function myScanDir($path = '""'){
                    if($path == '""'){
                        $path = ROOT_PATH;
                    }

                    $result = scandir($path);

                    $dot = array_search('.', $result);
                    //$twodot = array_search('..', $result);

                    unset($result[$dot]);
                    //unset($result[$twodot]);

                    echo '<ul class = "list-group">';

                    foreach ($result as $index => $item){
                        if(is_dir($path . $item .  "/")){

                            $link = BASE_PATH . ROOT_PATH . $item . "/";
                            echo '<a class = "list-group-item" href = "'.$link.'">';
                            //echo '<li class = "list-group-item">';
                            echo '<span class = "glyphicon glyphicon-folder-open"></span>';
                            echo $item;
                            //echo '</li>';
                            echo '</a>';

                        } else {

                            $path_parts = pathinfo(BASE_PATH . ROOT_PATH . $item);
                            if($path_parts['extension'] == "jpg")
                            {
                                $imageLink = $link = BASE_PATH . ROOT_PATH . $item;
                                $link = "image.php?image=" . ROOT_PATH . $item;
                                $link = str_replace("/var/www/html", "http://localhost" , $link);
                                echo '<a class = "list-group-item" href = "'.$link.'">';
                                echo '<span class = "glyphicon glyphicon-picture"></span>';
                                echo $item;
                                echo '</a>';
                            } else{
                                $path_parts = pathinfo(BASE_PATH . ROOT_PATH . $item);
                                if($path_parts['extension'] == "png")
                                {
                                    $imageLink = $link = BASE_PATH . ROOT_PATH . $item . ".png";
                                    $link = "image.php?image=" . ROOT_PATH . $item;
                                    $link = str_replace("/var/www/html", "http://localhost" , $link);
                                    echo '<a class = "list-group-item" href = "'.$link.'">';
                                    echo '<span class = "glyphicon glyphicon-picture"></span>';
                                    echo $item;
                                    echo '</a>';
                                } else{
                                    echo '<li class = "list-group-item">';
                                    echo '<span class = "glyphicon glyphicon-file"></span>';
                                    echo $item;
                                    echo '</li>';
                        }}}
                    }

                    echo '</ul>';

                    return $result;
                }

                /*echo '<pre>';
                var_dump(myScanDir());
                echo '</pre>';*/

                myScanDir();
                ?>

            </div>

            <div class = "col-md-3"></div>

        </div>

    </div>

</body>

</html>

