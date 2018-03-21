<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1">
        <title>Elites</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            .jumbotron{
                background-color:#000;
                color:white;
            }
            .bl{
                color: #000;
            }
        </style>
    </head>



    <body>
        <div class="container">
            <div class="jumbotron">
                <h1>APSIT</h1>
            </div>

            <button type="button" class="btn btn-link bl" data-toggle="collapse" data-target="#demo"><h3>LOAD ADJUSTMENT</h3></button>
            <div id="demo" class="collapse">
                <div class="well">
                    <form class="form-horizontal" action="/action_page.php">
                        <!-- <div class="dropdown">
                            Type of leave:
                            <button id="btn3" class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                                <span class="caret"></span></button>
                            <ul id="btn4" class="dropdown-menu">
                                <li><a href="#">Casual Leave</a></li>
                                <li><a href="#">Emergency Leave</a></li>
                                <li><a href="#">CO</a></li>
                                <li><a href="#">On Duty</a></li>
                            </ul>
                        </div> -->
                        <h3>Time:</h3>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="time">From: </label>
                            <div class="col-sm-3">
                                <input type="time" class="form-control" id="timefrom" value="00:00:00">
                            </div>
                            <label class="control-label col-sm-3" for="time">To: </label>
                            <div class="col-sm-3">
                                <input type="time" class="form-control" id="timeto" value="00:00:00">
                            </div>
                        </div>
                        <h3>Date:</h3>
                        <div class="form-group">

                            <label class="control-label col-sm-3" for="date">Date:</label>
                            <div class="col-sm-3">
                                <input type="date" class="form-control" id="date">
                            </div>
                        </div>
                        <div class="dropdown">
                            Faculty:
                            <button id="btn1" class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Available Faculty
                                <span class="caret"></span></button>
                            <ul id="btn2" class="dropdown-menu">
                                <!-- <li><a href="#">Engaged</a></li> -->
                            </ul>
                        </div>
                    </form>
                    <p><br></p>
                    <button class="btn btn-default" type="submit"><a href="timetable.php">Submit</a></button>
                </div>
            </div>





        </div>
        <script>
            $(function(){
                $("#btn4 li a").click(function(){
                    $("#btn3").text($(this).text());
                    $("#btn3").val($(this).text());
                });
                $("#btn2 li a").click(function(){
                    $("#btn1").text($(this).text());
                    $("#btn1").val($(this).text());
                });
            });
        </script>
    </body>
</html>
