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
                background-color:#2E2D88;
                color:white;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <h1>Elites</h1>
            </div>





            <div class="container">
                <div class="well">

                    <form class="form-horizontal" method="POST" action="validate.php">
                        <h2><p class="text-center">LOGIN</p></h2>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="phone" class="text-center">ID:</label>
                            <div class="col-sm-4">
                                <input type="id" class="form-control" id="id" placeholder="Enter id" name="phone">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-sm-4" for="pwd">Password:</label>
                            <div class="col-sm-4">          
                                <input type="password" class="form-control" id="password" placeholder="Enter password" name="pwd">
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
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    
    </body>
</html>