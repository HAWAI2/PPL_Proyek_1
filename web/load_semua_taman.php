<?php

include 'sql_connect.php';
include 'print_tanggal.php';

$resultTaman = mysqli_query($con,"SELECT * FROM taman ORDER BY nama ASC");

while($rowTaman = mysqli_fetch_array($resultTaman)){
	echo'	
		<div class="contentBox" id="sudah_selesai"><a href="form_edit_taman.php?id_taman='.$rowTaman['id_taman'].'">
			<font color="#FFFFFF">
				<h1>'.$rowTaman['nama'].'</h1>
				<p>Lokasi : '.$rowTaman['alamat'].'<br/>
				<hr color="white"/>
			</font>
		</div>
	';
}
?>