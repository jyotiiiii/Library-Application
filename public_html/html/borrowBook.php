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
        <link href="../css/stylesheet.css" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    </head>
    <body>       
 <?php 
 require_once 'header.php';
 ?>
        
        <div id="container2" class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-1">
              <br>
            <div class="col-md-4">
                <img src="../images/content/book3.jpg" height="400px" width="240px">
            </div>
          </div>
          <div class="col-md-6">

              <h3>HARRY POTTER AND THE CURSED CHILD: PARTS ONE AND TWO<br>
                  Author: J.K. Rowling</h3><br><br>
               <h2>Loan completed successfully <br>
                  Start date: <?php echo date("d-m-Y"); ?> <br>
                  Due date: <?php $d=strtotime("+3 weeks"); echo date("d-m-Y", $d); ?>
              </h2>
              
                <br><br>
            <a class="btn btn-primary btn-default" href="index.php" role="button">Search for more books &raquo;</a>
          </div>
     
        </div>
      </div>
  <?php 
 require_once 'footer.php';
 ?> 
     
    </body>
</html>
