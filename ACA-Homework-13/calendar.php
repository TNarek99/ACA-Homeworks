<!doctype html>
<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>

<style>
    td, th{
        width: 70px;
        height: 70px;
        font-size: 27px;
        text-align: center;
    }

    td{
        color: white;
        background: #006699;
    }

    th{
        background: mediumaquamarine;
        color: white;
    }

    .prev{
        float: right;
        font-size: 20px;
    }

    .next{
        float: left;
        font-size: 20px;
    }

    .center{
        font-size: 20px;
    }

    a{
        text-decoration: none;
    }

    a:hover{
        text-decoration: none;
    }
</style>

<body>
<?php
$mMonth = $_GET["month"];
$header;
$year = $_GET["year"];

switch ($mMonth){

    case "01":
        $header = "January $year";
        break;

    case "02":
        $header = "February $year";
        break;

    case "03":
        $header = "March $year";
        break;

    case "04":
        $header = "April $year";
        break;

    case "05":
        $header = "May $year";
        break;

    case "06":
        $header = "June $year";
        break;

    case "07":
        $header = "July $year";
        break;

    case "08":
        $header = "August $year";
        break;

    case "09":
        $header = "September $year";
        break;

    case "10":
        $header = "October $year";
        break;

    case "11":
        $header = "November $year";
        break;

    case "12":
        $header = "December $year";
        break;
}
?>

<div class = "container">

    <div class = "row">
        <br>
        <div class = "col-md-4">
            <a href = "table.php?year=<?= $year ?>"><span class="label label-primary center">Month List</span></a>
        </div>

        <div class = "col-md-4">

        <?php
        echo '<h1 align = "center" class = "text-info">';
        echo $header;
        echo '</h1>';
        ?>

        </div>

    </div>

</div>

<div class = "container">
    <br>
    <table class = "table-bordered" align="center">
        <thead>
        <th>Sun</th>
        <th>Mon</th>
        <th>Tue</th>
        <th>Wed</th>
        <th>Thu</th>
        <th>Fri</th>
        <th>Sat</th>
        </thead>


        <?php




        function draw($month){
            $year = $_GET["year"];
            $yearVal = intval($year);
            $first = strtotime("$month/01/$year");
            $startingDay = date("D", $first);
            $startingCell = 0;
            $dayCount = cal_days_in_month(CAL_GREGORIAN, $month, $yearVal);
            switch ($startingDay){
                case "Sun":
                    $startingCell = 1;
                    break;

                case "Mon":
                    $startingCell = 2;
                    break;

                case "Tue":
                    $startingCell = 3;
                    break;

                case "Wed":
                    $startingCell = 4;
                    break;

                case "Thu":
                    $startingCell = 5;
                    break;

                case "Fri":
                    $startingCell = 6;
                    break;

                case "Sat":
                    $startingCell = 7;
                    break;
            }

            //for ($i = 1; $i < $dayCount; $i++){
            $day = 1;
            //if ($i == 1){
            echo "<tr>";
            for ($j = 1; $j <=$startingCell - 1; $j++){
                echo "<td>" . "</td>";
            }

            for ($j = $startingCell; $j <=7; $j++){
                echo "<td>";
                echo $day;
                echo "</td>";
                $day++;
            }

            $day;

            $rowCount = ceil(($dayCount - $day + 1)/7);

            for ($i = 1; $i <= $rowCount; $i++){
                echo "<tr>";
                echo "<td>" . $day++ . "</td>";
                if ($day > $dayCount){break;}
                echo "<td>" . $day++ . "</td>";
                if ($day > $dayCount){break;}
                echo "<td>" . $day++ . "</td>";
                if ($day > $dayCount){break;}
                echo "<td>" . $day++ . "</td>";
                if ($day > $dayCount){break;}
                echo "<td>" . $day++ . "</td>";
                if ($day > $dayCount){break;}
                echo "<td>" . $day++ . "</td>";
                if ($day > $dayCount){break;}
                echo "<td>" . $day++ . "</td>";
                //if ($day > $dayCount){break;}
                echo "</tr>";
            }
            //}
            //}
        }

        draw($mMonth);


        ?>

    </table>

    <br>

    <?php

    $monthNum = intval($mMonth);
    $prevLinkVal;
    $nextLinkVal;
    $prevLink;
    $nextLink;
    if ($monthNum == 1){
        $prevLinkVal = 12;
        $nextLinkVal = $monthNum + 1;
    } else if ($monthNum == 12){
        $prevLinkVal = $monthNum - 1;
        $nextLinkVal = 1;
    } else {
        $prevLinkVal = $monthNum - 1;
        $nextLinkVal = $monthNum + 1;
    }
    
    if ($prevLinkVal < 10){
        $prevLink = "calendar.php?month=" . "0" . strval($prevLinkVal) . "&year=" . $year;
    } else{
        $prevLink = "calendar.php?month=" . strval($prevLinkVal) . "&year=" . $year;
    }

    if ($nextLinkVal < 10){
        $nextLink = "calendar.php?month=" . "0" . strval($nextLinkVal) . "&year=" . $year;
    } else{
        $nextLink = "calendar.php?month=" . strval($nextLinkVal) . "&year=" . $year;
    }

    ?>

    <div class = "row">
        <div class = "col-md-6">
            <?php
            echo '<a href="' . $prevLink . '">';
            ?>
            <span class="label label-primary prev">Prev month</span>
            <?php
            echo '</a>';
            ?>
        </div>

        <div class = "col-md-6">
            <?php
            echo '<a href="' . $nextLink . '">';
            ?>
            <span class="label label-primary next">Next month</span>
            <?php
            echo '</a>';
            ?>
        </div>
    </div>

    

</div>
</body>
</html>