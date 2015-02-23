<?php

include 'sql_connect.php';
include 'print_tanggal.php';

$resultTaman = mysqli_query($con,"SELECT * FROM taman ORDER BY nama ASC");

if(mysqli_num_rows($resultTaman) != 0) {
	while($rowTaman = mysqli_fetch_array($resultTaman)){
		echo'
			<div class="contentBox" id="sudah_selesai">
				<font color="#FFFFFF">
					<h1>'.$rowTaman['nama'].'</h1>
					<p>Lokasi : '.$rowTaman['alamat'].'<br/>
				</font>
				<br/>
				<a href="form_edit_taman.php?id_taman='.$rowTaman['id_taman'].'" class="button" id="menunggu"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a>
				<a class="button" id="ditolak" href="#" onclick=" return deletetaman('.$rowTaman['id_taman'].');"><span class="glyphicon glyphicon-floppy-remove" aria-hidden="true"></span> Hapus</a>
			</div>
		';
	}
}
else {
	echo'
		<div class="contentBox" id="sudah_selesai">
			<font color="#FFFFFF">
				<h1>Tidak ada taman yang terdaftar
				<hr color="white" />
				<p>Silahkan masukkan pengaduan lewat pilihan "Tambah Pengaduan"</p>
			</font>
		</div>
	';
}
?>