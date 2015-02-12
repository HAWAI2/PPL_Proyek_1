<?php
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
			<input class="form-control" id="judul" name="judul" placeholder="Judul" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label">Isi</label>
		<div class="col-sm-10">
			<input class="form-control" id="isi" name="isi" placeholder="Isi" required>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default">Masukkan</button>
		</div>
	</div>
</form>
';
?>