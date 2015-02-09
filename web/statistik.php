<?php
$con=mysqli_connect("localhost", "root", "", "ppl_proyek_1");
// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	echo "<br>";
}

$resultPengaduan = mysqli_query($con,"SELECT * FROM pengaduan");
$jumlahSemuaPengaduan = mysqli_num_rows($resultPengaduan);

$resultPengaduanMenunggu = mysqli_query($con,"SELECT * FROM pengaduan WHERE status='menunggu'");
$jumlahPengaduanMenunggu = mysqli_num_rows($resultPengaduanMenunggu);

$resultPengaduanSedangDiproses = mysqli_query($con,"SELECT * FROM pengaduan WHERE status='sedang diproses'");
$jumlahPengaduanSedangDiproses = mysqli_num_rows($resultPengaduanSedangDiproses);

$resultPengaduanSudahSelesai = mysqli_query($con,"SELECT * FROM pengaduan WHERE status='sudah selesai'");
$jumlahPengaduanSudahSelesai = mysqli_num_rows($resultPengaduanSudahSelesai);

$resultPengaduanDitolak = mysqli_query($con,"SELECT * FROM pengaduan WHERE status='ditolak'");
$jumlahPengaduanDitolak = mysqli_num_rows($resultPengaduanDitolak);

echo'<table class="table table-hover">
	<caption><p style="font-size:36px">Jumlah Semua Pengaduan Berdasar Status<br><br><br></p></caption>
	<thead>
		<tr>
			<th>jumlah</th>
			<th>menunggu</th>
			<th>sedang_diproses</th>
			<th>sudah_selesai</th>
			<th>ditolak</th>
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
?>