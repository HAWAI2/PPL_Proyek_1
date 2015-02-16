<?php

include 'sql_connect.php';
include 'print_tanggal.php';

$sql="DELETE from pengaduan WHERE status = 'ditolak' AND datediff(NOW(), tanggal_dibuat) >= 7";

if (!mysqli_query($con,$sql)) {
	die('Error: ' . mysqli_error($con));
}

$resultPengaduan = mysqli_query($con,"SELECT * FROM pengaduan NATURAL JOIN taman ORDER BY tanggal_dibuat DESC, id_pengaduan DESC");

if(mysqli_num_rows($resultPengaduan) != 0) {
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
				<font color="#FFFFFF">
					<span>
					<h1>'.$rowPengaduan['judul'].'
					<hr color="white" />
					<p>Lokasi : '.$rowPengaduan['nama'].'<br/>Status : '.$rowPengaduan['status'].'<br/>Tanggal Dibuat : '.PrintTanggal($rowPengaduan['tanggal_dibuat']).'</p>
					</span>
			';		
			
		if($idstatus == "menunggu"){
			echo '
				<span>
				<a class="button" href="kirim_email.php?id='.$rowPengaduan['id_pengaduan'].'">Terima</a>
				<a href="tolak_taman.php?id='.$rowPengaduan['id_pengaduan'].'" class="button" id="ditolak">Tolak</a>
				</span>
			';
		}
		echo'
				</font>
			</div>
		
		';
	}
}
else {
	echo'
		<div class="contentBox">
			<font color="#FFFFFF">
				<h1>Tidak ada pengaduan
				<hr color="white" />
				<p>Silahkan masukkan pengaduan lewat pilihan "Tambah Pengaduan"</p>
			</font>
		</div>
	';
}
mysqli_close($con);
?>