<nav class="navbar navbar-inverse navabar-fixed-top">
               <div class="container">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>
                       <a href="index.php" class="navbar-brand"> <img src="images/anisa.png"></a>
                   </div>
                   
                   <div class="collapse navbar-collapse" id="myNavbar">
                       <ul class="nav navbar-nav navbar-right">
					  
                           <?php
                           if(isset($_SESSION['email'])){
                           ?>
                           <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> SHPORTA</a></li>
                           <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> TE DHENAT</a></li>
                           <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> DIL</a></li>
                           <?php
                           }else{
                            ?>
						   <li><a href="rrethnesh.php">RRETH NESH</a></li>
                           <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> REGJISTROHU</a></li>
                           <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> HYR</a></li>
					
						   <li><a href="admin.php"> ADMIN</a></li>
                           <?php
                           }
                           ?>
                           
                       </ul>
                   </div>
               </div>
</nav>