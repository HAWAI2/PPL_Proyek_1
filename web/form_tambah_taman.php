<?php
echo'
	<div class="formTaman">
		<form method="post" action="taman_baru.php">
			<h1>Entri Taman</h1>
';
echo'
			Nama Taman
			<input class="form-control" id="namaTaman" name="namaTaman" placeholder="Nama taman" required>
			<br>Alamat Taman&nbsp;&nbsp;<br>
			<input class="form-control" id="alamatTaman" name="alamatTaman" placeholder="Alamat taman" required>
			<input type="submit" name="submitTaman" value="Simpan" class="button">
		</form>
	</div>
';
?>