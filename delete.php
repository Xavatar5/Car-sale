
  <!DOCTYPE html>
  <html>
  <head>
  	<title>Car Sale</title>
  	<link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <h1>CAR SALE</h1>
  	<div id="box">
      <a href="input.php"><img  width="50" height="50" src="icons/input.png"></a>
      <a href="index.php"><img style="padding-bottom: 5px" width="40px" height="40px" src="icons/search.png"></a>
          <div id="box3">
      <form action="" method="POST">

          <h1>Delete vehicle</h1>
          <?php require 'all.php';  ?>
        <input type="submit" name="delete" value="Delete">

        
      </form>
      
    </div>
  	</div>

  </body>
  </html>