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
                    <h1 class = "heading"><b>Personal Information</b></h1>
                    <form method="post" action = "page2.php">
                        <label for="first_name">First Name</label>
                        <input name = "first_name" type = "text" title = "First Name" class = "form-control">
                        <label for="last_name">Last Name</label>
                        <input name = "last_name" type = "text" title = "Last Name" class = "form-control">
                        <label for="bdyear">Birthday</label>
                        <select name = "bdyear" class = "form-control bd">
                            <option value = "1991">1991</option>
                            <option value = "1992">1992</option>
                            <option value = "1993">1993</option>
                            <option value = "1994">1994</option>
                            <option value = "1995">1995</option>
                            <option value = "1996">1996</option>
                            <option value = "1997">1997</option>
                            <option value = "1998">1998</option>
                            <option value = "1999">1999</option>
                            <option value = "2000">2000</option>
                        </select>
                        <select name = "bdmonth" class = "form-control bd">
                            <option value = "jan">Jan</option>
                            <option value = "fev">Feb</option>
                            <option value = "mar">Mar</option>
                            <option value = "apr">Apr</option>
                            <option value = "may">May</option>
                            <option value = "jun">Jun</option>
                            <option value = "jul">Jul</option>
                            <option value = "aug">Aug</option>
                            <option value = "sep">Sep</option>
                            <option value = "oct">Oct</option>
                            <option value = "nov">Nov</option>
                            <option value = "dec">Dec</option>
                        </select>
                        <select name = "bdday" class = "form-control bd">
                            <option value = "1">1</option>
                            <option value = "2">2</option>
                            <option value = "3">3</option>
                            <option value = "4">4</option>
                            <option value = "5">5</option>
                            <option value = "6">6</option>
                            <option value = "7">7</option>
                            <option value = "8">8</option>
                            <option value = "9">9</option>
                            <option value = "10">10</option>
                            <option value = "11">11</option>
                            <option value = "12">12</option>
                            <option value = "13">13</option>
                            <option value = "14">14</option>
                            <option value = "15">15</option>
                            <option value = "16">16</option>
                            <option value = "17">17</option>
                            <option value = "18">18</option>
                            <option value = "19">19</option>
                            <option value = "20">20</option>
                            <option value = "21">21</option>
                            <option value = "22">22</option>
                            <option value = "23">23</option>
                            <option value = "24">24</option>
                            <option value = "25">25</option>
                            <option value = "26">26</option>
                            <option value = "27">27</option>
                            <option value = "28">28</option>
                            <option value = "29">29</option>
                            <option value = "30">30</option>
                            <option value = "31">31</option>
                        </select>
                        <br>
                        <input type = "radio" value = "female" name = "gender"> Female
                        <input type = "radio" value = "male" name = "gender"> Male
                        <br>
                        <br>
                        <input type = "submit" value = "Next >>" class = "btn btn-success">
                    </form>
                </div>
                <div class = "col-md-4"></div>
            </div>
        </div>

    </body>

</html>

