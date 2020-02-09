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
				   <form action="shtofshiperdorues.php" method="get">
	  
		 <div> <label>ID PËRDORUESI: <input type="text" name="user_id"></label></div>
		  
		  <div><label>EMRI I PËRDORUESIT:  <input type="text" name="name"></label></div>
		  <div><label>E-MAIL:  <input type="text" name="email"></label></div>
		  <div><label>FJALËKALIMI:  <input type="password" name="password"></label></div>
		  <div><label>NR. KONTAKTI:  <input type="text" name="contact"></label></div>
		  <div><label>QYTETI:  <input type="text" name="city"></label></div>
		  <div><label>ADRESA:  <input type="text" name="address"></label></div>
		  
         <input type="submit" value="SHTO" name="submit">
		 <input type="submit" value="FSHI" name="delete">
		
	  </form>
	  <?php

if(isset($_GET['submit'])){
 
 $user_id=$_GET['user_id'];
 $name=$_GET['name'];
 $email=$_GET['email'];
 $pasword=$_GET['password'];
 $contact=$_GET['contact'];
 $city=$_GET['city'];
 $address=$_GET['address'];
 $query="Insert into users(user_id,name,email,password,contact,city,address)values('$user_id','$name','$email','$password','$contact','$city','$address;)";
 mysqli_query($con,$query);
 header("Location:shtofshiperdorues.php");
}

if(isset($_GET['submit'])){
 
$user_id=$_GET['user_id'];
 $name=$_GET['name'];
 $email=$_GET['email'];
 $pasword=$_GET['password'];
 $contact=$_GET['contact'];
 $city=$_GET['city'];
 $address=$_GET['address'];
 $query="Delete from users(user_id,name,email,password,contact,city,address)values('$user_id','$name','$email','$password','$contact','$city','$address;)";
 mysqli_query($con,$query);
 header("Location:shtofshiperdorues.php");
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