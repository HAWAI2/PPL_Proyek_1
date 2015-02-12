<?php

include 'sql_connect.php';

$resultPengaduan = mysqli_query($con,"SELECT * FROM pengaduan NATURAL JOIN taman WHERE status = 'ditolak'");

echo'<table class="table table-hover">
	<caption><p style="font-size:36px">Ditolak<br><br><br></p></caption>
	<thead>
		<tr>
			<th>Tanggal dibuat</th>
			<th>Nama taman</th>
			<th>Judul</th>
			<th>Status</th>						
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