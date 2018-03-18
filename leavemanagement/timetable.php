<!DOCTYPE html>
<?php 
    include("timetabledata.php");
    error_reporting(0);
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1">
        <title>Elites</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
         a {
            color: #fff;
        }
            .jumbotron{
                background-color:#2E2D88;
                color:white;
            }
            .jumbotron table{
                color:black;
            }
            .jumbotron h2{
                color:black;
            }
            .other-color{
                background-color:black;
                color:white;
            }
            .center {
                margin: auto;
                width: 100%;
                padding: 10px;
            }
            .dropdown-menu {
                left: 50%;
                right: auto;
                text-align: center;
                transform: translate(-50%, 0);
            }
        </style>
    </head>



    <body>
        <div class="container">
            <div class="jumbotron">
                <h1>Welcome!</h1>
            </div>

            <div class="well well-lg">
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal2">Timetable</button>
            </div>

            <div>
                <!-- <form action="timetabledata.php" method="POST"> -->
                <h4>Phone: 9029128836<br></h4>
                <h4>Name: Dilesh Tanna</h4>
                <h4>Department: IT</h4>
                <h4>E-Mail Id: dilesh@gmail.com </h4>
                <h4>Leaves Availed: 8</h4>
                <img src="">
                
                <!-- </form> -->
            </div>

            <div class="modal fade" id="myModal2" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h2 class="modal-title">Timetable</h2>
                        </div>
                        <div class="modal-body">
                            <div class="col-md-4 text-center"> 
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Monday</th>
                                            <th>Tuesday</th>
                                            <th>Wednesday</th>
                                            <th>Thursday</th>
                                            <th>Friday</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><button type="button" class="btn  btn-default btn-xs" data-toggle="modal" data-target="#tti"><a href="#"><span class="glyphicon glyphicon-info-sign"></span></a></button>
                                            </td>
                                            <td><button type="button" class="btn  btn-default btn-xs" data-toggle="modal" data-target="#tti"><a href="#"><span class="glyphicon glyphicon-info-sign"></span></a></button>
                                            </td>
                                            <td><button type="button" class="btn  btn-default btn-xs" data-toggle="modal" data-target="#tti"><a href="#"><span class="glyphicon glyphicon-info-sign"></span></a></button>
                                            </td>
                                            <td><button type="button" class="btn  btn-default btn-xs" data-toggle="modal" data-target="#tti"><a href="#"><span class="glyphicon glyphicon-info-sign"></span></a></button>
                                            </td>
                                            <td><button type="button" class="btn  btn-default btn-xs" data-toggle="modal" data-target="#tti"><a href="#"><span class="glyphicon glyphicon-info-sign"></span></a></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><button type="button" class="btn  btn-default btn-xs" data-toggle="modal" data-target="#tti"><a href="#"><span class="glyphicon glyphicon-info-sign"></span></a></button>
                                            </td>
                                            <td><button type="button" class="btn  btn-default btn-xs" data-toggle="modal" data-target="#tti"><a href="#"><span class="glyphicon glyphicon-info-sign"></span></a></button>
                                            </td>
                                            <td><button type="button" class="btn  btn-default btn-xs" data-toggle="modal" data-target="#tti"><a href="#"><span class="glyphicon glyphicon-info-sign"></span></a></button>
                                            </td>
                                            <td><button type="button" class="btn  btn-default btn-xs" data-toggle="modal" data-target="#tti"><a href="#"><span class="glyphicon glyphicon-info-sign"></span></a></button>
                                            </td>
                                            <td><button type="button" class="btn  btn-default btn-xs" data-toggle="modal" data-target="#tti"><a href="#"><span class="glyphicon glyphicon-info-sign"></span></a></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><button type="button" class="btn  btn-default btn-xs" data-toggle="modal" data-target="#tti"><a href="#"><span class="glyphicon glyphicon-info-sign"></span></a></button>
                                            </td>
                                            <td><button type="button" class="btn  btn-default btn-xs" data-toggle="modal" data-target="#tti"><a href="#"><span class="glyphicon glyphicon-info-sign"></span></a></button>
                                            </td>
                                            <td><button type="button" class="btn  btn-default btn-xs" data-toggle="modal" data-target="#tti"><a href="#"><span class="glyphicon glyphicon-info-sign"></span></a></button>
                                            </td>
                                            <td><button type="button" class="btn  btn-default btn-xs" data-toggle="modal" data-target="#tti"><a href="#"><span class="glyphicon glyphicon-info-sign"></span></a></button>
                                            </td>
                                            <td><button type="button" class="btn  btn-default btn-xs" data-toggle="modal" data-target="#tti"><a href="#"><span class="glyphicon glyphicon-info-sign"></span></a></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><button type="button" class="btn  btn-default btn-xs" data-toggle="modal" data-target="#tti"><a href="#"><span class="glyphicon glyphicon-info-sign"></span></a></button>
                                            </td>
                                            <td><button type="button" class="btn  btn-default btn-xs" data-toggle="modal" data-target="#tti"><a href="#"><span class="glyphicon glyphicon-info-sign"></span></a></button>
                                            </td>
                                            <td><button type="button" class="btn  btn-default btn-xs" data-toggle="modal" data-target="#tti"><a href="#"><span class="glyphicon glyphicon-info-sign"></span></a></button>
                                            </td>
                                            <td><button type="button" class="btn  btn-default btn-xs" data-toggle="modal" data-target="#tti"><a href="#"><span class="glyphicon glyphicon-info-sign"></span></a></button>
                                            </td>
                                            <td><button type="button" class="btn  btn-default btn-xs" data-toggle="modal" data-target="#tti"><a href="#"><span class="glyphicon glyphicon-info-sign"></span></a></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><button type="button" class="btn  btn-default btn-xs" data-toggle="modal" data-target="#tti"><a href="#"><span class="glyphicon glyphicon-info-sign"></span></a></button>
                                            </td>
                                            <td><button type="button" class="btn  btn-default btn-xs" data-toggle="modal" data-target="#tti"><a href="#"><span class="glyphicon glyphicon-info-sign"></span></a></button>
                                            </td>
                                            <td><button type="button" class="btn  btn-default btn-xs" data-toggle="modal" data-target="#tti"><a href="#"><span class="glyphicon glyphicon-info-sign"></span></a></button>
                                            </td>
                                            <td><button type="button" class="btn  btn-default btn-xs" data-toggle="modal" data-target="#tti"><a href="#"><span class="glyphicon glyphicon-info-sign"></span></a></button>
                                            </td>
                                            <td><button type="button" class="btn  btn-default btn-xs" data-toggle="modal" data-target="#tti"><a href="#"><span class="glyphicon glyphicon-info-sign"></span></a></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" data-dismiss="modal">Submit</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
            
<!-- TIMETABLE INFO STARTS -->
            <div class="modal fade" id="tti" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h2 class="modal-title">Timetable Info</h2>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" action="/action_page.php">
                                <a>Time:</a>
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="time">From: 10:50 </label>
                                    <label class="control-label col-sm-4" for="time">To: 11:50 </label>
                                    <label class="control-label col-sm-4" for="time">Status: Free</label>
                                </div>
                               
                                <p><br></p>
                                <div class="form-group">
                                    <label class="control-label col-sm-12" for="comments">Comments: DSA SEIT 206</label>
                                </div>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tte">Edit</button>
                                <button type="button" class="btn pull-right" data-dismiss="modal">Close</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<!-- TIMETABLE INFO ENDS -->            
            

            
<!-- TIMETABLE EDITOR STARTS -->            
            <div class="modal fade" id="tte" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h2 class="modal-title">Timetable Editor</h2>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" action="/action_page.php">
                                <a>Time:</a>
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="time">from: </label>
                                    <div class="col-sm-5">
                                        <input type="time" class="form-control" id="timefrom" value="00:00:00">
                                    </div>
                                    <label class="control-label col-sm-4" for="time">To: </label>
                                    <div class="col-sm-5">
                                        <input type="time" class="form-control" id="timeto" value="00:00:00">
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle center" id="btn3" type="button" data-toggle="dropdown">Status
                                        <span class="caret"></span></button>
                                    <ul id="btn4" class="dropdown-menu">
                                        <li><a href="#">Free</a></li>
                                        <li><a href="#">Lecture</a></li>
                                        <li><a href="#">Practical</a></li>
                                        <li><a href="#">Supervision</a></li>
                                        <li><a href="#">Assessment</a></li>
                                    </ul>                                    
                                </div>
                                <p><br></p>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="comments">Comments: </label>
                                    <div class="col-sm-10"> 
                                        <input type="text" class="form-control" id="comments" placeholder="Comments (Optional)">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary" data-dismiss="modal" onclick="btnSubmit()">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
                <div class="btn-group">
                <button class="btn btn-primary btn-md" ><a href="leavemanagement.php">Leave Application</a></button>
                <button class="btn btn-primary btn-md" ><a href="loadmanagement.php">Load Management</a></button>
                </div>

                <button class="btn btn-danger btn-md" id="logout"><a href="index.php">LOGOUT</a></button>
        </div>    
        
        
<!-- TIMETABLE EDITOR ENDS -->        

        <script>
            $(function(){
                $("#btn4 li a").click(function(){
                    $("#btn3").text($(this).text());
                    $("#btn3").val($(this).text());
                });
            }); 
            function btnSubmit(){
                var timef= document.getElementById("#timefrom");
                var timet= document.getElementById("#timeto");
                console.log(timef,timet);
            }
            $(document).ready(function(){
                $('[data-toggle="popover"]').popover();   
            });

            // function btnLeaveApplication(){
            //     window.location.href("leavemanagement.php");
            // }

            // function btnLoad(){
            //     window.location.href("loadmanagement.php");
            // }

        </script>
    </body>
</html>