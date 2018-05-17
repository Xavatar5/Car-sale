<?php

?>
  <!DOCTYPE html>
  <html>
  <head>
  	<title>Car sale</title>
  	<link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
  
    <h1>CAR SALE</h1>
  	<div id="box">
  		<a href="delete.php"><img style="padding-bottom: 5px" width="40px" height="40px" src="delete.png"></a>
  		<a href="input.php"><img  width="50" height="50" src="input.png"></a>
      <form id="box3" action="" method="POST">

        <h1>Search</h1>
        <input id="textbox" type="text" name="search" placeholder=" enter vehicle name">
        <input id="dugme" type="submit" name="search2" value="Search">
        
  		
  		</form>
      
  	</div>
    <?php require 'results.php';  ?>
  </body>
  </html>
