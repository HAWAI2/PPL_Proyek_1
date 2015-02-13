<?php
$id_taman = $_GET["id_taman"];
$judul = $_GET["judul"];
$isi = $_GET["isi"];

include 'sql_connect.php';

// Insert into pengaduan
$sql="INSERT INTO pengaduan (status, tanggal_dibuat, judul, isi, id_taman)
VALUES ('menunggu', NOW(), '$judul', '$isi', '$id_taman')";

if (!mysqli_query($con,$sql)) {
	die('Error: ' . mysqli_error($con));
}
mysqli_close($con);

header('Location:user.php');
?>