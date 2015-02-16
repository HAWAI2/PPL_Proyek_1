<?php
	include 'sql_connect.php';
	include 'print_tanggal.php';

	$sql="DELETE from pengaduan WHERE status = 'ditolak' AND datediff(NOW(), tanggal_dibuat) >= 7";

	if (!mysqli_query($con,$sql)) {
		die('Error: ' . mysqli_error($con));
	}
	
	mysqli_close($con);
?>