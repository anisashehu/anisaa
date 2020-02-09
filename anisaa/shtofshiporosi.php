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
	  
		 <div> <label>ID PËRDORUESI: <input type="text" name="user_id"></label></div>
		  
		  <div><label>ID POROSI:  <input type="text" name="item_id"></label></div>
		   <div><label for="status">STATUSI: </label>

           <select id="status">
  <option value="1">Added to Cart</option>
  <option value="2">Confirmed</option>
 
</select>
  </div>
         <input type="submit" value="SHTO" name="submit">
		 <input type="submit" value="FSHI" name="delete">
		
	  </form>
	  <?php

if(isset($_GET['submit'])){
 
 $user_id=$_GET['user_id'];
 $item_id=$_GET['item_id'];
 $status=$_GET['status'];
 $query="Insert into users_items(user_id,item_id,status)values('$user_id','$item_id','$status')";
 mysqli_query($con,$query);
 header("Location:shtofshiporosi.php");
}

if(isset($_GET['submit'])){
 
 $user_id=$_GET['user_id'];
 $item_id=$_GET['item_id'];
 $status=$_GET['status'];
 $query="delete from users_items(user_id,item_id,status)values('$user_id','$item_id','$status')";
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