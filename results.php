<?php
	if (isset($_POST['search']) && !empty($_POST['search'])){
		$brand = trim($_POST['search']);
		require 'connection.php';
		$query = "SELECT * FROM vehicles WHERE brand LIKE '%{$brand}%' OR model LIKE '%{$brand}%' OR price LIKE '%{$brand}%'";
		$res = mysqli_query($conn, $query);
		if (mysqli_num_rows($res) > 0) {
			while ($row = mysqli_fetch_assoc($res)) {
			?>

			<div id="box4">
				<h2>Vozilo:</h2>
				<p><b>Brand: </b><?php echo $row['brand'] ?></p>
				<p><b>Model: </b><?php echo $row['model'] ?></p>
				<p><b>Price: </b><?php echo $row['price'] ?> Euro</p>
			</div>

			<?php
		}

		}
		else{
			?>

			<div id="box4">
				<br>
				<br>
				<p>No results.</p>
			</div>

			<?php
		} 
  }
		
  ?>