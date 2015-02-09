<?php
$id_taman = $_GET["id_taman"];
$judul = $_GET["judul"];
$isi = $_GET["isi"];

$con=mysqli_connect("localhost", "root", "", "ppl_proyek_1");
// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	echo "<br>";
}

echo'
<form class="form-horizontal">
	<div class="form-group">
		<label class="col-sm-2 control-label">Taman</label> &nbsp;&nbsp;&nbsp;&nbsp;
		<select id="inputTaman">
			<option value="1">Taman Jomblo</option>
			<option value="2">Taman Musik</option>
			<option value="3">Taman Persib</option>
			<option value="4">Taman Kota Bandung</option>
			<option value="5">Taman Lalu Lintas</option>
			<option value="6">Taman Ganesha</option>
		</select> 
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label">Judul</label>
		<div class="col-sm-10">
			<input class="form-control" id="inputJudul" placeholder="Judul" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label">Isi</label>
		<div class="col-sm-10">
			<input class="form-control" id="inputIsi" placeholder="Isi" required>
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
VALUES ("menunggu", NOW(), '$judul', '$isi')";

if (!mysqli_query($con,$sql)) {
	die('Error: ' . mysqli_error($con));
}
mysqli_close($con);
?>