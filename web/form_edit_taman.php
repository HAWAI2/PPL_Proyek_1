<?php
include 'sql_connect.php';
include 'print_tanggal.php';

$id_taman = $_GET['id_taman'];
$res = mysqli_query($con,"SELECT * FROM taman WHERE id_taman='$id_taman'");
$taman = mysqli_fetch_array($res);

echo'
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<title>Park Monitoring System</title>
			<script src="../assets/js/jquery.min.js"></script>
			<!-- AJAX SCRIPTS -->
			<script type="text/javascript" src="../assets/js/ajax.js"></script>
			<link href="../assets/css/menu.css" rel="stylesheet" />
		</head>			
		<body>

		<div class="header">
            <img src="../assets/img/Logo.png"/><a href="homepage.php">DINAS PERTAMANAN DAN PEMAKAMAN KOTA BANDUNG</a>
			<center><p style="font-size:12px" >Jalan Ambon No 1 A, Bandung, Jawa Barat; Telepon: 0224231921</p></center>
        </div>
		<br/>
		
		<div class="formTaman">
		<center>
		<form method="post" action="edit_taman.php?id_taman='.$taman['id_taman'].'" >
			<h1>Edit Taman</h1>
			Nama Taman
			<input class="form-control" id="namaTaman" name="namaTaman" value="'.$taman['nama'].'" required>
			<br>Alamat Taman&nbsp;&nbsp;<br>
			<input class="form-control" id="alamatTaman" name="alamatTaman" value="'.$taman['alamat'].'" required>
			<input type="submit" value="Simpan" class="button">
		</form>
';
?>