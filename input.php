
  <!DOCTYPE html>
  <html>
  <head>
  	<title>Car sale</title>
  	<link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <h1>CAR SALE</h1>
  	<div id="box">
  		<a href="delete.php"><img width="40px" height="40px" src="icons/delete.png"></a>
      <a href="index.php"><img width="40px" height="40px" src="icons/search.png"></a>
  		<a href=""></a>
  		<form id="box3" action="" method="POST">
          <h1>Add vehicle</h1>
          <p>Enter vehicle brand:</p>
        <input type="text" name="brand">
        <p>Enter vehicle model:</p>
        <input type="text" name="model">
        <p>Enter vehicle price:</p>
        <input type="text" name="price"><br>
        <input id="button" type="submit" name="input" value="Add">

  		</form>
  	</div>
            <?php 
require 'input2.php';
 ?> 

  </body>
  </html>