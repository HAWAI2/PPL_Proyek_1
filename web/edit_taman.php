<?php
include 'sql_connect.php';
include 'print_tanggal.php';

$id_taman = $_GET['id_taman'];
$nama = $_POST['namaTaman'];
$alamat = $_POST['alamatTaman'];

$sql="UPDATE taman SET nama = '$nama', alamat = '$alamat' WHERE id_taman = '$id_taman'";

if (!mysqli_query($con,$sql)) {
	die('Error: ' . mysqli_error($con));
}
mysqli_close($con);

header('Location:admin.php');
?>
