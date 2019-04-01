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
            <h2>HARRY POTTER AND THE CURSED CHILD: PARTS ONE AND TWO</h2>
            <h3>Author: <em>J.K. Rowling</em><br>
                Publisher: <em>Little, Brown</em><br>
                Date published: <em>31 July 2016</em><br>
                Language: <em>English</em><br>
                Format: <em>Book</em><br>
                Genre: <em>Adventure</em><br>
                Location: <em>H10</em><br>
                ISBN: <em>0751565350</em></h3>
            <p>
            <h3> Status: <strong>AVAILABLE</strong>
                <br><br>
            <a class="btn btn-primary btn-default" href="LogInPage.php" role="button">Borrow book &raquo;</a>
          </div>
             <div class="col-md-9 col-md-offset-1">
                 <br><br> <p> Based on an original new story by J.K. Rowling, John Tiffany and Jack Thorne, a new play by Jack Thorne, Harry Potter and the Cursed Child is the eighth story in the Harry Potter series and the first official Harry Potter story to be presented on stage. The play will receive its world premiere in London's West End on 30th July 2016. </p>
                 <a class="btn btn-secondary" href="#" role="button">Return to catalogue &raquo;</a>
            </div>
        </div>
      </div>
  <?php 
 require_once 'footer.php';
 ?> 
     
    </body>
</html>