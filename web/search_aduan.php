<?php

include 'sql_connect.php';
include 'print_tanggal.php';
$searchquery = explode(" ", $_GET['search']);
$tipeuser = $_GET['user'];

$querysql = "SELECT * FROM pengaduan NATURAL JOIN taman WHERE ";
$i = 0;
while ($i+1 < count($searchquery)) {
	$scurrent = $searchquery[$i] . "";
	$querysql = $querysql . "judul LIKE '%" . $scurrent . "%' OR isi LIKE '%" . $scurrent . "%' OR nama LIKE '%" . $scurrent . "%' OR ";
	$i++;
}
$querysql = $querysql . "judul LIKE '%" . end($searchquery) . "%' OR isi LIKE '%" . end($searchquery) . "%' OR nama LIKE '%" . end($searchquery) . "%'";

$resultPengaduan = mysqli_query($con, $querysql);

echo'
	<div class="contentBox">
		<h2> Hasil pencarian : '.$searchquery[0].' 
';
$i=1;
while ($i < count($searchquery)){
	echo ', '.$searchquery[$i].'';
	$i++;
}
echo'
	</h2>
	</div>
';

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
				<h1>'.$rowPengaduan['judul'].'
				<hr color="white" />
				<p>Lokasi : '.$rowPengaduan['nama'].'<br/>Status : '.$rowPengaduan['status'].'<br/>Tanggal Dibuat : '.PrintTanggal($rowPengaduan['tanggal_dibuat']).'</p>
	';
	if($tipeuser == 2 && $idstatus == "menunggu"){
		echo '
			<a class="button" href="kirim_email.php?id='.$rowPengaduan['id_pengaduan'].'">Terima</a>
			<a class="button" id="ditolak" href="tolak_taman.php?id='.$rowPengaduan['id_pengaduan'].'">Tolak</a>
		';
	}
	echo'
			</font>
		</div>
	';
}
mysqli_close($con);
?>