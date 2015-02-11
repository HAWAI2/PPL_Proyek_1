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
		<script>
			function tambahPengaduan() {
				// Create an XMLHttpRequest Object
				if (window.XMLHttpRequest) {
					xmlHttpObj = new XMLHttpRequest( );
				} else {
					try {
						xmlHttpObj = new ActiveXObject("Msxml2.XMLHTTP");
					} catch (e) {
						try {
							xmlHttpObj = new ActiveXObject("Microsoft.XMLHTTP");
						} catch (e) {
							xmlHttpObj = false;
						}
					}
				}
				
				var id_taman = document.getElementById('inputTaman').value;
				var judul = document.getElementById('inputJudul').value;
				var isi = document.getElementById('inputIsi').value;
				
				// Create a function that will receive data sent from the server
				xmlHttpObj.open("GET", "pengaduan_baru.php?id_taman=" + inputTaman + "&judul=" + inputJudul + "&isi=" + inputIsi, true);
				xmlHttpObj.send(null);
				xmlHttpObj.onreadystatechange = function() {
					if (xmlHttpObj.readyState == 4 && xmlHttpObj.status == 200) {
						document.getElementById("inner-page").innerHTML=xmlHttpObj.responseText;
					}
				}
			}
			function loadSemuaPengaduan() {
				// Create an XMLHttpRequest Object
				if (window.XMLHttpRequest) {
					xmlHttpObj = new XMLHttpRequest( );
				} else {
					try {
						xmlHttpObj = new ActiveXObject("Msxml2.XMLHTTP");
					} catch (e) {
						try {
							xmlHttpObj = new ActiveXObject("Microsoft.XMLHTTP");
						} catch (e) {
							xmlHttpObj = false;
						}
					}
				}
				
				// Create a function that will receive data sent from the server
				xmlHttpObj.open("GET", "load_semua_pengaduan.php", true);
				xmlHttpObj.send();
				xmlHttpObj.onreadystatechange = function() {
					if (xmlHttpObj.readyState == 4 && xmlHttpObj.status == 200) {
						document.getElementById("page-inner").innerHTML=xmlHttpObj.responseText;
					}
				}
			}
			function loadSedangDiproses() {
				// Create an XMLHttpRequest Object
				if (window.XMLHttpRequest) {
					xmlHttpObj = new XMLHttpRequest( );
				} else {
					try {
						xmlHttpObj = new ActiveXObject("Msxml2.XMLHTTP");
					} catch (e) {
						try {
							xmlHttpObj = new ActiveXObject("Microsoft.XMLHTTP");
						} catch (e) {
							xmlHttpObj = false;
						}
					}
				}
				
				// Create a function that will receive data sent from the server
				xmlHttpObj.open("GET", "load_sedang_diproses.php", true);
				xmlHttpObj.send();
				xmlHttpObj.onreadystatechange = function() {
					if (xmlHttpObj.readyState == 4 && xmlHttpObj.status == 200) {
						document.getElementById("page-inner").innerHTML=xmlHttpObj.responseText;
					}
				}
			}
			function loadSudahSelesai() {
				// Create an XMLHttpRequest Object
				if (window.XMLHttpRequest) {
					xmlHttpObj = new XMLHttpRequest( );
				} else {
					try {
						xmlHttpObj = new ActiveXObject("Msxml2.XMLHTTP");
					} catch (e) {
						try {
							xmlHttpObj = new ActiveXObject("Microsoft.XMLHTTP");
						} catch (e) {
							xmlHttpObj = false;
						}
					}
				}
				
				// Create a function that will receive data sent from the server
				xmlHttpObj.open("GET", "load_sudah_selesai.php", true);
				xmlHttpObj.send();
				xmlHttpObj.onreadystatechange = function() {
					if (xmlHttpObj.readyState == 4 && xmlHttpObj.status == 200) {
						document.getElementById("page-inner").innerHTML=xmlHttpObj.responseText;
					}
				}
			}
			function loadDitolak() {
				// Create an XMLHttpRequest Object
				if (window.XMLHttpRequest) {
					xmlHttpObj = new XMLHttpRequest( );
				} else {
					try {
						xmlHttpObj = new ActiveXObject("Msxml2.XMLHTTP");
					} catch (e) {
						try {
							xmlHttpObj = new ActiveXObject("Microsoft.XMLHTTP");
						} catch (e) {
							xmlHttpObj = false;
						}
					}
				}
				
				// Create a function that will receive data sent from the server
				xmlHttpObj.open("GET", "load_ditolak.php", true);
				xmlHttpObj.send();
				xmlHttpObj.onreadystatechange = function() {
					if (xmlHttpObj.readyState == 4 && xmlHttpObj.status == 200) {
						document.getElementById("page-inner").innerHTML=xmlHttpObj.responseText;
					}
				}
			}
			function statistik() {
				// Create an XMLHttpRequest Object
				if (window.XMLHttpRequest) {
					xmlHttpObj = new XMLHttpRequest( );
				} else {
					try {
						xmlHttpObj = new ActiveXObject("Msxml2.XMLHTTP");
					} catch (e) {
						try {
							xmlHttpObj = new ActiveXObject("Microsoft.XMLHTTP");
						} catch (e) {
							xmlHttpObj = false;
						}
					}
				}
				
				// Create a function that will receive data sent from the server
				xmlHttpObj.open("GET", "statistik.php", true);
				xmlHttpObj.send();
				xmlHttpObj.onreadystatechange = function() {
					if (xmlHttpObj.readyState == 4 && xmlHttpObj.status == 200) {
						document.getElementById("page-inner").innerHTML=xmlHttpObj.responseText;
					}
				}
			}
		</script>
	</head>

	<body onload="loadSemuaPengaduan">
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
					<p style="font-size: 50px;" class="text-center"> Park Monitoring System </p>
				</div>
			</nav>   
			
			<!-- /. NAV TOP  -->
			<nav class="navbar-default navbar-side" role="navigation">
				<div class="sidebar-collapse">
					<ul class="nav" id="main-menu">
						<li>
							<a href="#"> <img src="../assets/img/tambah.png" height="50" width="50" onclick="return tambahPengaduan();"> &nbsp;&nbsp;&nbsp;&nbsp; Tambah Pengaduan</a>
						</li>
						<li>
							<a href="#"> <img src="../assets/img/full.png" height="50" width="50" onclick="return loadSemuaPengaduan();"> &nbsp;&nbsp;&nbsp;&nbsp; Semua Pengaduan</a>
						</li>
						  <li>
							<a href="#"> <img src="../assets/img/proses.png" height="50" width="50" onclick="return loadSedangDiproses();"> &nbsp;&nbsp;&nbsp;&nbsp; Dalam Proses</a>
						</li>
						<li>
							<a href="#"> <img src="../assets/img/check.png" height="50" width="50" onclick="return loadSudahSelesai();"> &nbsp;&nbsp;&nbsp;&nbsp; Telah Ditangani</a>
						</li>
						  <li>
							<a href="#"> <img src="../assets/img/tolak.png" height="50" width="50" onclick="return loadDitolak();"> &nbsp;&nbsp;&nbsp;&nbsp; Pengaduan Ditolak</a>
						</li>
						<li>
							<a href="#"> <img src="../assets/img/statistik.png" height="50" width="50" onclick="return statistik();"> &nbsp;&nbsp;&nbsp;&nbsp; Statistik Taman</a>
						</li>
					</ul>
				</div>
			</nav>
			
			<!-- /. NAV SIDE  -->
			<div id="page-wrapper" >
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
		  <!-- BOOTSTRAP SCRIPTS -->
		<script src="assets/js/bootstrap.min.js"></script>
		<!-- METISMENU SCRIPTS -->
		<script src="assets/js/jquery.metisMenu.js"></script>
		  <!-- CUSTOM SCRIPTS -->
		<script src="assets/js/custom.js"></script>
	</body>	
</html>