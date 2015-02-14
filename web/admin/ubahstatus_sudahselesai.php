<?php

include 'sql_connect.php';
$id = $_GET['id'];

$sql="UPDATE pengaduan SET status='sudah selesai' WHERE id_pengaduan='$id'";

if (!mysqli_query($con,$sql)) {
	die('Error: ' . mysqli_error($con));
}
mysqli_close($con);

?>