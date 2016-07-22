<html>
<head>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <?php

    $content = file_get_contents("lipsum.txt");
    $content = strtolower($content);
    $letters = [];
    $wordCount = [];
    $sentenceCount = [];
    $words = str_word_count($content, 1);

    for ($i = 0; $i < strlen($content); $i++){
        $letters[$content[$i]]++;
    }
    //ksort($letters);
    arsort($letters);
    $letters = array_slice($letters, 0, 5, true);
    //var_dump($letters);

    foreach ($words as $index => $value){
        $wordCount[strlen($value)]++;
    }
    ksort($wordCount);

    $topWords = $wordCount;
    arsort($topWords);
    $topWords = array_slice($topWords, 0, 5, true);

    $sentences = explode(".", $content);

    foreach ($sentences as $index => $sentence){
        $sentenceCount[strlen($sentence)]++;
    }

    krsort($sentenceCount);

    ?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {

            var dataLetters = google.visualization.arrayToDataTable([

                <?php
                echo '["Letter", "count"], ';
                foreach($letters as $key => $value){
                    if(ctype_alpha($key)) {
                        echo "[";
                        echo "'" . $key . "', " . $value;
                        echo "], ";
                    }
                }
                ?>
            ]);

            var dataWords = google.visualization.arrayToDataTable([

                <?php
                echo '["Word", "count"], ';
                foreach($wordCount as $key => $value){

                        echo "[";
                        echo "'" . $key . "', " . $value;
                        echo "], ";

                }
                ?>
            ]);

            var dataTopWords = google.visualization.arrayToDataTable([

                <?php
                echo '["Top", "Words"], ';
                foreach($topWords as $key => $value){

                    echo "[";
                    echo "'" . $key . "', " . $value;
                    echo "], ";

                }
                ?>
            ]);

            var dataSentences = google.visualization.arrayToDataTable([

                <?php
                echo '["Sentences", "Count"], ';
                foreach($sentenceCount as $key => $value){

                    echo "[";
                    echo "'" . $key . "', " . $value;
                    echo "], ";

                }
                ?>
            ]);

            var optionsLetters = {
                title: 'Top Letters'
            };

            var optionsWords = {
                title: 'Word Count'
            };

            var optionsTopWords = {
                title: 'Top Words'
            };

            var optionsSentences = {
                title: 'Sentences Count'
            };


            var chartLetters = new google.visualization.PieChart(document.getElementById('letterChart'));
            var chartWords = new google.visualization.PieChart(document.getElementById('wordChart'));
            var chartTopWords = new google.visualization.PieChart(document.getElementById('topWordChart'));
            var chartSentences = new google.visualization.PieChart(document.getElementById('sentenceChart'));

            chartLetters.draw(dataLetters, optionsLetters);
            chartWords.draw(dataWords, optionsWords);
            chartTopWords.draw(dataTopWords, optionsTopWords);
            chartSentences.draw(dataSentences, optionsSentences);

        }
    </script>

</head>

<body>

    <div class = "container-fluid">
        <div class = "row">
            <div class = "col-md-12 text-center">
                <h1 class = "text-primary"><b>Some Information About the Dummy "Lorem Ipsum" Text</b></h1>
            </div>
        </div>
        <div class = "row">
            <div class = "col-md-6">
                <div id="letterChart" style="width: 900px; height: 500px;"></div>
            </div>

            <div class = "col-md-6">
                <div id="wordChart" style="width: 900px; height: 500px;"></div>
            </div>
        </div>

        <div class = "row">
            <div class = "col-md-6">
                <div id="topWordChart" style="width: 900px; height: 500px;"></div>
            </div>

            <div class = "col-md-6">
                <div id="sentenceChart" style="width: 900px; height: 500px;"></div>
            </div>
        </div>
    </div>
</body>
</html>