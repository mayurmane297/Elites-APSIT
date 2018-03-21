<? php
    include("validate.php");
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            .jumbotron{
                background-color:#000;
                color:white;
            }
           
            .image{
                margin-left: 70%;
                padding: auto;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
             
                <h1>APSIT</h1>
                <!-- <div class="image">
                    <img src="apsit.png" alt="Image" height=150px width=150px>
                </div> -->
            
            </div>




                <div class="well">

                    <form class="form-horizontal" method="POST" action="validate.php">
                        <h2><p class="text-center">LOGIN</p></h2>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="phone" class="text-center">Phone:</label>
                            <div class="col-sm-4">
                                <input type="id" class="form-control" id="id" placeholder="Enter Phone Number" name="phone">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-sm-4" for="pwd">Password:</label>
                            <div class="col-sm-4">          
                                <input type="password" class="form-control" id="password" placeholder="Enter Password" name="pwd">
                            </div>
                        </div>
                        <div class="form-group">        
                            <div class="col-sm-offset-5 col-sm-10">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="remember"> Remember me</label>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">        
                            <div class="col-sm-offset-5 col-sm-10">
                                <button class="btn btn-default" type="submit" name="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
         
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    
    </body>
</html>