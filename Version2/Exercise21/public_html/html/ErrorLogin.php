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
        
        <div class="error" align="center">
            <div class="container" >
                <div class="row">
                <div class="container-fluid" class="text-center" class="align-center">
                    <h1>Uh oh!</h1>
                </div>
                    <iframe src="https://giphy.com/embed/vqgVGAol6Upj2" width="300" height="300" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
                    <div class="container-fluid" class="text-center" class="align-center"> <br>
                    <p>Sorry your login is not working! Please ensure you're registered or contact the library.</p>
                    <br>
                    <a class="btn btn-primary btn-default" href="#" role="button">Register</a>
                    <a class="btn btn-primary btn-default" href="#" role="button">Contact</a>
                    </div>
                </div>
            </div>
        </div>      
   <?php 
 require_once 'footer.php';
 ?> 
      </body>
</html>