<!doctype html>
<html>
<head>
    <title>Random Table</title>
    <style>
        td{
            border: 1px solid black;
            height: 20px;
            width: 20px;
        }

        tr{
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
    <?php

    $rows =  rand(10, 20);
    $cols =  rand(10, 20);

    echo "<table>";
    for ($i = 0; $i < $rows; $i++){
        echo "<tr>";
        for ($j = 0; $j < $cols; $j++){
            echo "<td>";

            echo "</td>";
        }

        echo "</tr>";
    }
    echo "</table>";
    ?>

</body>
</html>








