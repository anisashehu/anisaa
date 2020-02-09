<?php
session_start();
include("connection.php")
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
			include("connection.php")
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
				   <form action="shtofshiporosi.php" method="get">
	  
		 <div> <label>ID PRODUKTI: <input type="text" name="item_id"></label></div>
		  
		  <div><label>EMRI I PRODUKTIT:  <input type="text" name="name"></label></div>
		   <div> <label>CMIMI: <input type="text" name="price"></label></div>
		   
         <input type="submit" value="SHTO" name="submit">
		 <input type="submit" value="FSHI" name="delete">
		
	  </form>
	  <?php

if(isset($_GET['submit'])){
 
 $item_id=$_GET['item_id'];
 $name_id=$_GET['name'];
 $price=$_GET['price'];
 $query="Insert into items(item_id,name,price)values('$item_id','$name','price')";
 mysqli_query($con,$query);
 header("Location:shtofshiporosi.php");
}

if(isset($_GET['submit'])){
 
  $item_id=$_GET['item_id'];
 $name_id=$_GET['name'];
 $price=$_GET['price'];
 $query="Delete from users_items(item_id,name,price)values('$item_id','$name','price')";
 mysqli_query($con,$query);
 header("Location:shtofshiporosi.php");
}


         
 
 


	
?>


 
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