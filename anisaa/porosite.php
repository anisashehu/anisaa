<?php
include("connection.php")
?>
<html>
   <head>
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
			
		<br><br>
			<div class="container">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th>ID POROSI</th><th>ID PËRDORUESI</th><th>ID PRODUKTI</th>
                        </tr>
						<tbody>
		<?php
         $query1="Select * From users_items";
         $result=mysqli_query($con,$query1);
		 while($row=mysqli_fetch_assoc($result))
         {    
        echo"
		 <tr>
		 <td>".$row['id']."</td>
		 <td>".$row['user_id']."</td>
		 <td>".$row['item_id']."</td>
	
		 
		 
		  
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



         