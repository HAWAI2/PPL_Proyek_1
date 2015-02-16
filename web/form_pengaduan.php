<?php
$tipeuser = $_GET['user'];

echo'
	<div class="formAduan">
		<form method="post" action="pengaduan_baru.php?user='.$tipeuser.'">
			<h1>Entri Pengaduan</h1>
			Taman &nbsp;&nbsp;&nbsp;&nbsp;
			<select name="id_taman">
';
			require 'list_taman.php';
echo'
			</select> 
			<br><br>Judul&nbsp;&nbsp;
			<input class="form-control" id="judul" name="judul" placeholder="Judul" required>
			<br>Isi&nbsp;&nbsp;<br>
			<textarea class="form-controlTextArea" id="isi" name="isi" required></textarea>
			<input type="submit" name="submit" value="Simpan" class="button">
		</form>
	</div>
';
?>