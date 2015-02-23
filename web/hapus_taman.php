<?php
	include 'sql_connect.php';

	$idtaman = $_GET['id'];

	$sql="DELETE from taman WHERE id_taman=".$idtaman;

	if (!mysqli_query($con,$sql)) {
		die('Error: ' . mysqli_error($con));
	}
	
	mysqli_close($con);
?>