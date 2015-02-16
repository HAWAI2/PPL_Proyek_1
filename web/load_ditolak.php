<?php

include 'sql_connect.php';
include 'print_tanggal.php';

$resultPengaduan = mysqli_query($con,"SELECT * FROM pengaduan NATURAL JOIN taman WHERE status = 'ditolak' ORDER BY tanggal_dibuat DESC");

if(mysqli_num_rows($resultPengaduan) != 0) {
	while($rowPengaduan = mysqli_fetch_array($resultPengaduan)){
		echo'	
			<div class="contentBox" id="'.$rowPengaduan['status'].'"><a href="laporan_aduan.php?id='.$rowPengaduan['id_pengaduan'].'">
				<font color="#FFFFFF">
				<h1>'.$rowPengaduan['judul'].'</h1>
				<hr color="white" />
				<p>Lokasi : '.$rowPengaduan['nama'].'<br/>Status : '.$rowPengaduan['status'].'<br/>Tanggal Dibuat : '.PrintTanggal($rowPengaduan['tanggal_dibuat']).'</p>
			</a>
				</font>
			</div>
		';
	}
}
else {
	echo'
		<div class="contentBox" id="sudah_selesai">
			<font color="#FFFFFF">
				<h1>Tidak ada pengaduan
				<hr color="white" />
				<p>Silahkan masukkan pengaduan lewat pilihan "Tambah Pengaduan"</p>
			</font>
		</div>
	';
}
?>