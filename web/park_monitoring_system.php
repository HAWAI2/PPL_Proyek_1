<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Park Monitoring System</title>
		<!-- BOOTSTRAP STYLES-->
		<link href="../assets/css/bootstrap.css" rel="stylesheet" />
		 <!-- FONTAWESOME STYLES-->
		<link href="../assets/css/font-awesome.css" rel="stylesheet" />
			<!-- CUSTOM STYLES-->
		<link href="../assets/css/custom.css" rel="stylesheet" />
		<link href="../assets/css/mycss.css" rel="stylesheet" />
		 <!-- GOOGLE FONTS-->
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin"> 
		<!-- AJAX Functions -->
	</head>

	<body onload="formPengaduan()">
		<div id="wrapper">
			<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html"><img height="100" width="100" src="../assets/img/Pemerintah Kota Bandung.png"></a>
				</div>

				<div style="color: white;">
					<br>
					<p style="font-size: 40px;" class="text-center"> Pemerintahan Kota Bandung - Park Monitoring System </p>
				</div>
			</nav>   
			
			<!-- /. NAV TOP  -->
			<nav class="navbar-default navbar-side" role="navigation">
				<div class="sidebar-collapse">
					<ul class="nav" id="main-menu">
						<li>
							<a href="#" onclick="return formPengaduan();"> <img src="../assets/img/tambah.png" height="50" width="50"> &nbsp;&nbsp;&nbsp;&nbsp; Tambah Pengaduan</a>
						</li>
						<li>
							<a href="#" onclick="return loadSemuaPengaduan();"> <img src="../assets/img/full.png" height="50" width="50"> &nbsp;&nbsp;&nbsp;&nbsp; Semua Pengaduan</a>
						</li>
						  <li>
							<a href="#" onclick="return loadSedangDiproses();"> <img src="../assets/img/proses.png" height="50" width="50"> &nbsp;&nbsp;&nbsp;&nbsp; Dalam Proses</a>
						</li>
						<li>
							<a href="#" onclick="return loadSudahSelesai();"> <img src="../assets/img/check.png" height="50" width="50"> &nbsp;&nbsp;&nbsp;&nbsp; Telah Ditangani</a>
						</li>
						  <li>
							<a href="#" onclick="return loadDitolak();"> <img src="../assets/img/tolak.png" height="50" width="50"> &nbsp;&nbsp;&nbsp;&nbsp; Pengaduan Ditolak</a>
						</li>
						<li>
							<a href="#" onclick="return statistik();"> <img src="../assets/img/statistik.png" height="50" width="50"> &nbsp;&nbsp;&nbsp;&nbsp; Statistik Taman</a>
						</li>
					</ul>
				</div>
			</nav>
			
			<!-- /. NAV SIDE  -->
			<div id="page-wrapper">
				<div id="page-inner">
					<form class="form-horizontal" action="pengaduan_baru.php">
						<div class="form-group">
							<label class="col-sm-2 control-label">Taman</label> &nbsp;&nbsp;&nbsp;&nbsp;
							<select name="id_taman">
								<?php require 'list_taman.php' ?>
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
				</div>
				 <!-- /. PAGE INNER  -->
			</div>
			 <!-- /. PAGE WRAPPER  -->
		</div>
		
		<!-- /. WRAPPER  -->
		<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
		<!-- JQUERY SCRIPTS -->
		<script src="assets/js/jquery-1.10.2.js"></script>
        <!-- AJAX SCRIPTS -->
        <script type="text/javascript" src="../assets/js/ajax.js"></script>
		  <!-- BOOTSTRAP SCRIPTS -->
		<script src="assets/js/bootstrap.min.js"></script>
		<!-- METISMENU SCRIPTS -->
		<script src="assets/js/jquery.metisMenu.js"></script>
		  <!-- CUSTOM SCRIPTS -->
		<script src="assets/js/custom.js"></script>
	</body>	
</html>