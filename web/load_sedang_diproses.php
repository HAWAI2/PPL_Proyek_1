<?php

include 'sql_connect.php';

$resultPengaduan = mysqli_query($con,"SELECT * FROM pengaduan NATURAL JOIN taman WHERE status = 'sedang diproses'");

while($rowPengaduan = mysqli_fetch_array($resultPengaduan)){
	if ($rowPengaduan['status'] == "sedang_diproses") {
		echo'	
			<div class="contentBox" id="'.$rowPengaduan['status'].'">
			<h1>'.$rowPengaduan['judul'].'</h1>
			<hr color="white" />
			<p>Lokasi : '.$rowPengaduan['nama'].'<br/>Status : '.$rowPengaduan['status'].'<br/>Tanggal Dibuat : '.$rowPengaduan['tanggal_dibuat'].'</p>
			</div>
		';
	}
}
?>