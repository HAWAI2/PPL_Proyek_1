<?php

include 'sql_connect.php';
include 'print_tanggal.php';

$id_pengaduan = $_GET['id'];
$res = mysqli_query($con,"SELECT * FROM pengaduan NATURAL JOIN taman WHERE id_pengaduan='$id_pengaduan'");
$pengaduan = mysqli_fetch_array($res);

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
		<img src="../assets/img/Logo.png"/>&nbsp;&nbsp;DINAS PERTAMANAN DAN PEMAKAMAN KOTA BANDUNG
	</div>
	<br />
    <div class="mainLayer">
    <center>
    	<h1>Judul: '.$pengaduan['judul'].'</h1>
        <hr color="white" />
        <h2>Tanggal Aduan: '.PrintTanggal($pengaduan['tanggal_dibuat']).'</h2>
        <h2>Status: '.$pengaduan['status'].'</h2>
        <p>Isi Aduan: '.$pengaduan['isi'].'</p>
        <hr color="white"/>
    </center>
	<h2>Lokasi: '.$pengaduan['nama'].'</h2>
    </div>
</body>
</html>
';

?>