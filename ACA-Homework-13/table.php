<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List of Months</title>
    <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
</head>

<style>
    h1, h2, h3{
        font-family: 'Montserrat', sans-serif;
    }

    h1{
        font-size: 70px;
    }

    .list-group-item{
        text-align: center;
        font-weight: bold;
        font-size: 18px;
        font-family: 'Montserrat', sans-serif;
    }

    .list-group-item:hover{
        background: #006699;
        cursor: pointer;
        color: white;
    }

    a{
        text-decoration: none;
    }

    a:hover{
        text-decoration: none;
    }

    .center{
        font-size: 20px;
    }
</style>
<body>

    <?php

    $year = $_GET["year"];

    ?>

    <div class = "container">
        <div class = "row text-center">
            <div class = "col-md-3">
                <br>
                <a href = "year.html" class = "center"><span class="label label-primary center">Year Selection</span></a>
            </div>
            <div class = "col-md-6">
                <h1 class = "text-info"><b>Months of <?= $year ?></b></h1>
            </div>
        </div>

        <div class = "row">
            <div class = "col-md-4"></div>
            <div class = "col-md-4">
                <ul class="list-group">
                    <a href = "calendar.php?month=01&year=<?= $year ?>"><li class="list-group-item">January</li></a>
                    <a href = "calendar.php?month=02&year=<?= $year ?>"><li class="list-group-item">February</li></a>
                    <a href = "calendar.php?month=03&year=<?= $year ?>"><li class="list-group-item">March</li></a>
                    <a href = "calendar.php?month=04&year=<?= $year ?>"><li class="list-group-item">April</li></a>
                    <a href = "calendar.php?month=05&year=<?= $year ?>"><li class="list-group-item">May</li></a>
                    <a href = "calendar.php?month=06&year=<?= $year ?>"><li class="list-group-item">June</li></a>
                    <a href = "calendar.php?month=07&year=<?= $year ?>"><li class="list-group-item">July</li></a>
                    <a href = "calendar.php?month=08&year=<?= $year ?>"><li class="list-group-item">August</li></a>
                    <a href = "calendar.php?month=09&year=<?= $year ?>"><li class="list-group-item">September</li></a>
                    <a href = "calendar.php?month=10&year=<?= $year ?>"><li class="list-group-item">October</li></a>
                    <a href = "calendar.php?month=11&year=<?= $year ?>"><li class="list-group-item">November</li></a>
                    <a href = "calendar.php?month=12&year=<?= $year ?>"><li class="list-group-item">December</li></a>
                </ul>
            </div>
        </div>



    </div>

</body>
</html>