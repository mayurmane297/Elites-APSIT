
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
            <h1>Welcme!</h1>
        </div>





        <div class="container">
            

          <form class="form-horizontal" action = "validate.php" method = "POST">
              <h2><p class="text-center">LOGIN</p></h2>


            <div class="form-group">
              <label class="control-label col-sm-2" for="phone">Username:</label>
              <div class="col-sm-4">          
                <input type="text" class="form-control" id="user" placeholder="Enter Phone number" name="phone"/>
              </div>
            </div>


            <div class="form-group">
              <label class="control-label col-sm-2" for="pwd">Password:</label>
              <div class="col-sm-4">          
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="pwd"/>
              </div>
            </div>


            <div class="form-group">        
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                  <label><input type="checkbox" name="remember"/> Remember me</label>
                </div>
              </div>
            </div>

            <div class="form-group">        
              <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" name="submit" class="btn btn-default" value="Submit">
              </div>
            </div>
          </form>

        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    </body>
</html>
