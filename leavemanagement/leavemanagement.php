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
                background-color:#2E2D88;
                color:white;
            }
            .center {
                margin: auto;
                width: 100%;
                padding: 10px;
            }
        </style>
    </head>



    <body>
        <div class="container">
            <div class="jumbotron">
                <h1>Elites</h1>
            </div>

            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#demo"><h3>APPLICATION FOR LEAVE</h3></button>
            <div id="demo" class="collapse">
                <div class="well">
                    <form class="form-horizontal" action="">
                        <label class="control-label" for="name">Name: </label>
                        <div>
                            <input type="text" class="form-control" id="name" placeholder="Ezio Auditore De Firenze" REQUIRED>
                        </div>
                        <p><br></p>
                        <div class="dropdown">
                            Type of leave:
                            <button id="btn3" class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                                <span class="caret"></span></button>
                            <ul id="btn4" class="dropdown-menu">
                                <li><a href="#">Casual Leave</a></li>
                                <li><a href="#">Emergency Leave</a></li>
                                <li><a href="#">CO</a></li>
                                <li><a href="#">On Duty</a></li>
                            </ul>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="date">Date:</label>
                            <div class="col-sm-3">
                                <input type="date" class="form-control" id="date" REQUIRED>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label class="custom-control custom-radio">*First Half:<input id="radioStacked1" name="radio-stacked" type="radio" class="custom-control-input"></label>
                        </div>                                                        
                        <div class="col-sm-3">
                            <label class="custom-control custom-radio">*Second Half:<input id="radioStacked" name="radio-stacked" type="radio" class="custom-control-input"></label>
                        </div>
                        <a>*Only in case of half-day leave</a>
                        <p><br></p>
                        <div class="dropdown">
                            Leave Status:
                            <button id="btn5" class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                                <span class="caret"></span></button>
                            <ul id="btn6" class="dropdown-menu">
                                <li><a href="#">Proposed</a></li>
                                <li><a href="#">Availed</a></li>
                            </ul>
                        </div>
                        <p><br></p>
                        <label class="control-label col-sm-1" for="comments">Reason:</label>
                        <div class="col-sm-10"> 
                            <input type="text" class="form-control" id="comments" placeholder="Reason Here" REQUIRED>
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
                $("#btn6 li a").click(function(){
                    $("#btn5").text($(this).text());
                    $("#btn5").val($(this).text());
                });
            });
        </script>
    </body>
</html>
