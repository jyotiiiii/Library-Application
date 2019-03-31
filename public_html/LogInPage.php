<!DOCTYPE html>
<html>
    <head>
        <title>Log In Page</title>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
         <link rel="stylesheet" href="../css/stylesheet.css">
         <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <body>
    <?php 
 require_once 'header.php';
 ?>
    <div class="login" style="margin-top: 80px;">
  <h2 class="text-center">Log In To Whakatane Public Library</h2>
  <div id="login-row" class="row justify-content-center align-items-center">
      <div id="login-column" class="col-md-6 col-md-offset-3">
                    <div id="login-box" class="col-md-6 col-md-offset-3">
   <form action="ErrorLogin.php" method="post">
    <div class="form-group">
      <label for="email">Username:</label>
      <input type="text" class="form-control" id="username" placeholder="Username" name="Username" autofocus="true">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
    <button type="submit" class="btn btn-default">Register</button>
  </form>
        </div>
     </div>
  </div>
</div>
<?php 
 require_once 'footer.php';
 ?> 
  </body>
</html>
