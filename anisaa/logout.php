<?php
    session_start();
    session_unset();
    session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title>ELEGANCE NGA ANISA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <br>
		<div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>ELEGANCE NGA ANISA</h1>
                      
                       <p>Ju keni dalë nga llogaria.<a href="login.php">Hyni përsëri.</a></p>
					   <p>Kthehuni në <a href="index.php">faqen fillestare.</a></p>
                   </div>
                   </center>
               </div>
           </div>
           
			
            <footer class="footer">
               <div class="container">
                <center>
                  <p><i>ELEGANCE NGA ANISA SHEHU</i></p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
