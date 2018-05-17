<?php
require 'connection.php';
if(isset($_POST['delete'])){
	$selected = $_POST['vehicle'];
	$query2 = "DELETE FROM vehicles WHERE id = $selected";
	mysqli_query($conn, $query2);
}
$query = "SELECT * FROM vehicles";
$res = mysqli_query($conn, $query);
if (mysqli_num_rows($res) > 0) {
	?><select name="vehicle"><?php
	while ($row = mysqli_fetch_assoc($res)) {
		?>
		<div>
			
				<option value="<?php echo $row['id'] ?>"><?php echo $row['brand'] . ' ' . $row['model'] . ' ' .  $row['price'] . ' €' ?></option>
			
		</div>
		<?php
	}
	?></select><br><?php

}
else{
	echo "No results";
} 


?>