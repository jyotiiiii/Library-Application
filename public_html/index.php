<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Whakatane Library</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/stylesheet.css">
        <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    </head>
    <body>
 <?php 
 require_once 'header.php';
 ?>

      <div class="jumbotron">
        <div class="container justify-content-center">
          <h1 class="display-3">Welcome to the Library!</h1>
          <form class="search-query input-mysize" role="search">
    <div class="input-group input-large search-query add-on">
      <input class="form-control" placeholder="Search by Title or Author" name="srch-term" id="srch-term" type="text">
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
      </div>
    </div>
  </form>
          <br><a class="btn btn-primary btn-lg" href="#" role="button">View the full catalogue &raquo;</a></p>
        </div>
      </div>

      <div id="container2" class="container">
        <div class="row">
          <div id="library" class="col-md-8">
            <h2>NEW LIBRARY ADDITIONS</h2>
            <p> The library has a wide selection of both books and DVD's in its catalogue which are updated weekly. </p>
            <p>
                <a class="btn btn-secondary" href="#" role="button">View full library &raquo;</a></p>
            <div class="col-md-8">
                <img src="../images/book1.jpg" height="200px" width="120px">
                <img src="../images/book2.jpg" height="200px" width="120px">
                <a href="itemdetail.php"><img src="../images/book3.jpg" height="200px" width="120px"></a>
            </div>
          </div>
          <div class="col-md-4">
            <h2>OPENING HOURS</h2>
            <p>Monday: 9am - 5pm<br>
            Tuesday: 9am - 5pm<br>
            Wednesday: 9am - 5pm<br>
            Thursday: 9am - 5pm<br>
            Friday: 9am - 5pm<br>
            Saturday: 9am - 5pm<br>
            Sunday: Closed</p>
            <p>
            <a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div>
        </div>
      </div>
        
     <?php 
 require_once 'footer.php';
 ?> 
        
    </body>
</html>
