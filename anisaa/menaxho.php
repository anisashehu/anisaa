<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>ELEGANCE NGA ANISA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
      
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
       
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
       
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header3.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>PËRSHENDETJE ADMIN! FUNKSIONALITETET E MËPOSHTME</h1>
                      
                       <a href="shtofshiprodukt.php" class="btn btn-danger">SHTO/FSHI PRODUKT</a>
					   <a href="shtofshiperdorues.php" class="btn btn-danger">SHTO/FSHI PËRDORUES</a>
					   <a href="shtofshiporosi.php" class="btn btn-danger">SHTO/FSHI POROSI</a>
					   
                   </div>
                   </center>
               </div>
           </div>
		   
 
           <footer class="footer">
               <div class="container">
                <center>
                   <p><i> ELEGANCE NGA ANISA SHEHU</i></p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>