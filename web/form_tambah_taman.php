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
			<textarea class="form-controlTextArea" id="alamatTaman" name="alamatTaman" required></textarea>
			<input type="submit" name="submitTaman" value="Simpan" class="submit-button">
		</form>
	</div>
';
?>