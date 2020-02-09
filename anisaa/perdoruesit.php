<?php
include("connection.php")
?>
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
                require 'header3.php';
            ?> 
			
		<br><br>
			<div class="container">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
		    <tr><td>ID</td><td>EMRI I PËRDORUESIT</td><td>EMAIL</td><td>FJALËKALIMI</td><td>KONTAKTI</td><td>QYTETI</td><td>ADRESA</td></tr>
		 </thead>
		 <tbody> 
		<?php
         $query1="Select * From users";
         $result=mysqli_query($con,$query1);
		 while($row=mysqli_fetch_assoc($result))
         {    
        echo"
		 <tr>
		 <td>".$row['user_id']."</td>
		 <td>".$row['name']."</td>
		 <td>".$row['email']."</td>
		 <td>".$row['password']."</td>
		 <td>".$row['contact']."</td>
		 <td>".$row['city']."</td>
		 <td>".$row['address']."</td>
		 
		  
		 </tr>";
		 
           }
		  
           echo"</tbody>
		   </center>
        </table>";
		
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


         
 
 


