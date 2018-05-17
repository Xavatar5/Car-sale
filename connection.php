<?php 
$conn = mysqli_connect('localhost', 'root', '', 'corephp_db');
if (!$conn) {
	die("Connection failed!" . mysqli_connect_error());
}
 ?>
