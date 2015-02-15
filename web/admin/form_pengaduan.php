<?php
echo'
	<div class="formAduan">
		<form action="pengaduan_baru.php">
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
		</form>
		<right><a href="#"><div class="button"><center>MASUKKAN</center></div></a></right>
	</div>
';
?>