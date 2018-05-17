<?php
if (isset($_POST['input'])) {
	if (!empty($_POST['brand']) && !empty($_POST['model']) && !empty($_POST['price'])){

		$brand = $_POST['brand'];
		$model = $_POST['model'];
		$price = $_POST['price'];
		if(preg_match("/^[0-9]+$/", $price)){
			require 'connection.php';
			
			$query = "INSERT INTO vehicles (brand, model, price) VALUES ('$brand', '$model', '$price')";
			mysqli_query($conn, $query);
			?>
			<div id="box4">
				<br>
				<br>
				<p>You entered <?php echo $brand . ' ' . $model . ' ' . $price . '€' ?></p>
			</div>
			<?php
		}
		else{
			?>
			<div id="box4">
				<br>
				<br>
				<p>Invalid input.</p>
			</div>
			<?php
		}
		

	}
	else{
		?>
		<div id="box4">
			<br>
			<br>
			<p>Invalid input.</p>
		</div>
		<?php
	}
}

?>