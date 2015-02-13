<?php

include 'sql_connect.php';
include 'print_tanggal.php';

$resultPengaduan = mysqli_query($con,"SELECT * FROM pengaduan NATURAL JOIN taman ORDER BY tanggal_dibuat DESC");

while($rowPengaduan = mysqli_fetch_array($resultPengaduan)){
	$idstatus = $rowPengaduan['status'];
	if($idstatus == "sedang diproses"){
		$idstatus = "sedang_diproses";
	}
	else if($idstatus == "sudah selesai"){
		$idstatus = "sudah_selesai";
	}
	
	echo'	
		<div class="contentBox" id="'.$idstatus.'"><a href="laporan_aduan.php?id='.$rowPengaduan['id_pengaduan'].'">
			<h1>'.$rowPengaduan['judul'].'</h1>
			<hr color="white" />
			<p>Lokasi : '.$rowPengaduan['nama'].'<br/>Status : '.$rowPengaduan['status'].'<br/>Tanggal Dibuat : '.PrintTanggal($rowPengaduan['tanggal_dibuat']).'</p>
		</a></div>
	';
}
?>
