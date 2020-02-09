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
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>TE VESHESH ENDRRAT ME KLAS</h1>
                      
                       <a href="products3.php" class="btn btn-danger">KOLEKSION I VECANTE</a>
					   
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="images/uean5.jpg" alt="Veshje">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">VESHJE</p>
                                        <p>KOLEKSIONET E FUNDIT</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products1.php">
                               <img src="images/taka13.jpg" alt="Kepuce">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">KEPUCE</p>
                                    <p>TRENDI I MOMENTIT</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products2.php">
                               <img src="images/canta1.jpg" alt="Aksesore">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">AKSESORE</p>
                                   <p>KOMPLETIMI PERFEKT</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
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