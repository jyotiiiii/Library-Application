<!DOCTYPE html>
<html>
    <head>
        <title>Log In Page</title>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
         <link href="../css/stylesheet.css" rel="stylesheet" type="text/css"/>
         <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <body>
    <?php  
    require_once 'header.php'; 
 //login_success.php  
 session_start();  
 ?>
      <div class="container">
          <div class="col-md-9 col-md-offset-1">  
<?php
 if(isset($_SESSION["username"]))  
 {  
      echo '<h3>Login Success, Welcome - '.$_SESSION["username"].'</h3>';  
      $logout = '<br /><br /><a href="logout.php">Logout</a>';  
 }  
 else  
 {  
      header("location:LogInPage.php");  
 }  
 ?>
          <br>
          <a class="btn btn-info btn-lg" style="color: black;" href="index.php" role="button">Homepage &raquo;</a>
          <?php echo $logout; ?>
          <br>
          <br>
          </div>
      </div>
        
<?php 
 require_once 'footer.php';
 ?> 
  </body>
</html>