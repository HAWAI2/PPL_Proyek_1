<?php

include 'sql_connect.php';
$resultTaman = mysqli_query($con,"SELECT * FROM taman");
$jumlahTaman = mysqli_num_rows($resultTaman);

$resultPengaduan = mysqli_query($con,"SELECT * FROM pengaduan");
$jumlahSemuaPengaduan = mysqli_num_rows($resultPengaduan);

$resultPengaduanMenunggu = mysqli_query($con,"SELECT * FROM pengaduan WHERE status='menunggu'");
$jumlahPengaduanMenunggu = mysqli_num_rows($resultPengaduanMenunggu);

$resultPengaduanSedangDiproses = mysqli_query($con,"SELECT * FROM pengaduan WHERE status='sedang diproses'");
$jumlahPengaduanSedangDiproses = mysqli_num_rows($resultPengaduanSedangDiproses);

$resultPengaduanSudahSelesai = mysqli_query($con,"SELECT * FROM pengaduan WHERE status='menunggu'");
$jumlahPengaduanSudahSelesai = mysqli_num_rows($resultPengaduanSudahSelesai);

$resultPengaduanDitolak = mysqli_query($con,"SELECT * FROM pengaduan WHERE status='menunggu'");
$jumlahPengaduanDitolak = mysqli_num_rows($resultPengaduanDitolak);

echo'<div class="contentBox" id="sudah_selesai">
	<table class="table">
	<caption><center><h1 style="color:white">Berdasarkan Status Semua Laporan yang Ada</h1></center></caption>
	<thead>
		<tr>
			<th>Jumlah</th>
			<th>Menunggu</th>
			<th>Sedang diproses</th>
			<th>Sudah selesai</th>
			<th>Ditolak</th>
		</tr>
	</thead>
	<tbody>
	<tr>
		<td align="center">'.$jumlahSemuaPengaduan.'</td>
		<td align="center">'.$jumlahPengaduanMenunggu.'</td>
		<td align="center">'.$jumlahPengaduanSedangDiproses.'</td>
		<td align="center">'.$jumlahPengaduanSudahSelesai.'</td>
		<td align="center">'.$jumlahPengaduanDitolak.'</td>
	</tr>
	</div>';

for ($i = 1; $i <= $jumlahTaman; $i++){
	
	$resultPengaduan2 = mysqli_query($con,"SELECT * FROM pengaduan WHERE id_taman = " .$i);
	$jumlahSemuaPengaduan2 = mysqli_num_rows($resultPengaduan2);

	$resultPengaduanMenunggu2 = mysqli_query($con,"SELECT * FROM pengaduan WHERE status='menunggu' AND id_taman = " .$i);
	$jumlahPengaduanMenunggu2 = mysqli_num_rows($resultPengaduanMenunggu2);

	$resultPengaduanSedangDiproses2 = mysqli_query($con,"SELECT * FROM pengaduan WHERE status='sedang diproses' AND id_taman = " .$i);
	$jumlahPengaduanSedangDiproses2 = mysqli_num_rows($resultPengaduanSedangDiproses2);

	$resultPengaduanSudahSelesai2 = mysqli_query($con,"SELECT * FROM pengaduan WHERE status='sudah selesai' AND id_taman = " .$i);
	$jumlahPengaduanSudahSelesai2 = mysqli_num_rows($resultPengaduanSudahSelesai2);

	$resultPengaduanDitolak2 = mysqli_query($con,"SELECT * FROM pengaduan WHERE status='ditolak' AND id_taman = " .$i);
	$jumlahPengaduanDitolak2 = mysqli_num_rows($resultPengaduanDitolak2);

	$namaTaman = mysqli_query($con,"SELECT nama FROM taman WHERE id_taman = " .$i);
	
	while($rowTaman = mysqli_fetch_array($namaTaman)){
		$Taman = $rowTaman['nama'];
	}
	
	echo'<div class="contentBox" id="sudah_selesai">
		<table class="table">
		<caption><center><h1 style="color:white"> '.$Taman.'</h1></center></caption>
		<thead>
			<tr>
				<th>Jumlah</th>
				<th>Menunggu</th>
				<th>Sedang diproses</th>
				<th>Sudah selesai</th>
				<th>Ditolak</th>
			</tr>
		</thead>
		<tbody>
		<tr>
			<td align="center">'.$jumlahSemuaPengaduan2.'</td>
			<td align="center">'.$jumlahPengaduanMenunggu2.'</td>
			<td align="center">'.$jumlahPengaduanSedangDiproses2.'</td>
			<td align="center">'.$jumlahPengaduanSudahSelesai2.'</td>
			<td align="center">'.$jumlahPengaduanDitolak2.'</td>
		</tr>
		</div>';
	}
?>