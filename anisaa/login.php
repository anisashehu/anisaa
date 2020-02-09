<?php
    require 'connection.php';
    session_start();
	
	

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
            <br><br><br>
           <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3>HYR</h3>
                            </div>
                            <div class="panel-body">
                                <p>HYR NE LLOGARINË TËNDE PËR TË KRYER BLERJEN.</p>
                                <form method="post" action="login_submit.php">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="Fjalëkalimi(8 karaktere)" size="8">
                                    </div>
								
                                    <div class="form-group">
                                        <input type="submit" value="HYR" class="btn btn-primary">
                                    </div>
									

   

								
 

                              </form>
                            </div>
                            <div class="panel-footer">NUK KE NJË LLOGARI? <a href="signup.php">REGJISTROHU</a></div>
                        </div>
                    </div>
                </div>
           </div>
           <br><br><br><br><br>
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
