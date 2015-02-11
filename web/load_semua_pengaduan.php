<?php

include 'sql_connect.php';

$resultPengaduan = mysqli_query($con,"SELECT * FROM pengaduan NATURAL JOIN taman");

echo'<table class="table table-hover">
	<caption><p style="font-size:36px">Semua Pengaduan<br><br><br></p></caption>
	<thead>
		<tr>
			<th>tanggal_dibuat</th>
			<th>nama_taman</th>
			<th>judul</th>
			<th>status</th>						
		</tr>
	</thead>
	<tbody>
	';

while($rowPengaduan = mysqli_fetch_array($resultPengaduan)){
	echo'			
		<tr>
			<td>'.$rowPengaduan['tanggal_dibuat'].'</td>
			<td>'.$rowPengaduan['nama'].'</td>
			<td>'.$rowPengaduan['judul'].'</td>
			<td>'.$rowPengaduan['status'].'</td>
		</tr>
	';
}
echo'
		</tbody>
	</table>
	';
?>