<?php
$id_taman = $_GET["id_taman"];
$judul = $_GET["judul"];
$isi = $_GET["isi"];

include 'sql_connect.php';

echo'
<form class="form-horizontal" action="pengaduan_baru.php">
	<div class="form-group">
		<label class="col-sm-2 control-label">Taman</label> &nbsp;&nbsp;&nbsp;&nbsp;
		<select name="id_taman">';
			require 'list_taman.php';
echo'
		</select> 
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label">Judul</label>
		<div class="col-sm-10">
			<input class="form-control" id="judul" name="judul" placeholder="Judul">
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label">Isi</label>
		<div class="col-sm-10">
			<input class="form-control" id="isi" name="isi" placeholder="Isi">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default">Masukkan</button>
		</div>
	</div>
</form>
';

// Insert into pengaduan
$sql="INSERT INTO pengaduan (status, tanggal_dibuat, judul, isi, id_taman)
VALUES ('menunggu', NOW(), '$judul', '$isi', '$id_taman')";

if (!mysqli_query($con,$sql)) {
	die('Error: ' . mysqli_error($con));
}
mysqli_close($con);

header('Location:user.php');
?>