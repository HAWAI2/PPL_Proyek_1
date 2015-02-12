<?php

include 'sql_connect.php';
$resultTaman = mysqli_query($con,"SELECT * FROM taman");
$jumlahTaman = mysqli_num_rows($resultTaman);

for ($i = 1; $i <= $jumlahTaman; $i++){
	
	$resultPengaduan = mysqli_query($con,"SELECT * FROM pengaduan WHERE id_taman = " .$i);
	$jumlahSemuaPengaduan = mysqli_num_rows($resultPengaduan);

	$resultPengaduanMenunggu = mysqli_query($con,"SELECT * FROM pengaduan WHERE status='menunggu' AND id_taman = " .$i);
	$jumlahPengaduanMenunggu = mysqli_num_rows($resultPengaduanMenunggu);

	$resultPengaduanSedangDiproses = mysqli_query($con,"SELECT * FROM pengaduan WHERE status='sedang diproses' AND id_taman = " .$i);
	$jumlahPengaduanSedangDiproses = mysqli_num_rows($resultPengaduanSedangDiproses);

	$resultPengaduanSudahSelesai = mysqli_query($con,"SELECT * FROM pengaduan WHERE status='sudah selesai' AND id_taman = " .$i);
	$jumlahPengaduanSudahSelesai = mysqli_num_rows($resultPengaduanSudahSelesai);

	$resultPengaduanDitolak = mysqli_query($con,"SELECT * FROM pengaduan WHERE status='ditolak' AND id_taman = " .$i);
	$jumlahPengaduanDitolak = mysqli_num_rows($resultPengaduanDitolak);

	$namaTaman = mysqli_query($con,"SELECT nama FROM taman WHERE id_taman = " .$i);
	while($rowTaman = mysqli_fetch_array($namaTaman)){
		$Taman = $rowTaman['nama'];
	}

	echo'<table class="table table-hover">
		<caption><p style="font-size:24px"> '.$Taman.' <br><br><br></p></caption>
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
			<td>'.$jumlahSemuaPengaduan.'</td>
			<td>'.$jumlahPengaduanMenunggu.'</td>
			<td>'.$jumlahPengaduanSedangDiproses.'</td>
			<td>'.$jumlahPengaduanSudahSelesai.'</td>
			<td>'.$jumlahPengaduanDitolak.'</td>
		</tr>
		';
	}
?>