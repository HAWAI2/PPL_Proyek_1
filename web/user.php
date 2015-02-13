<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <script src="../assets/js/jquery.min.js"></script>
        <script type="../text/javascript" src="assets/js/index.js"></script>
        <!-- AJAX SCRIPTS -->
        <script type="text/javascript" src="../assets/js/ajax.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="../assets/css/menu.css" rel="stylesheet" />
		<link href="../assets/css/bootstrap.css" rel="stylesheet" />
		<link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="../assets/css/bootstrap-theme.css" rel="stylesheet" />
		<link href="../assets/css/bootstrap-theme.min.css" rel="stylesheet" />
        <title>Park Monitoring System</title>
    </head>

    <body onload="loadSemuaPengaduan()">
        <div class="header">
            <img src="../assets/img/Logo.png"/>DINAS PERTAMANAN DAN PEMAKAMAN KOTA BANDUNG
        </div>
        <br /><br /><br /><br />
        <div id='cssmenu'>
            <ul>
                <b><li style="font-size: 14px;"><a href='#' onclick="return formPengaduan();"><img src="../assets/img/add.png" width="40" >&nbsp;&nbsp;&nbsp;&nbsp;Tambah Pengaduan</a></li>
				<b><li style="font-size: 14px;"><a href='#' onclick="return loadSemuaPengaduan();"><img src="../assets/img/list.png" width="40" />&nbsp;&nbsp;&nbsp;&nbsp;Semua Pengaduan</a></li>
                <b><li style="font-size: 14px;"><a href='#' onclick="return loadSedangDiproses();"><img src="../assets/img/progress.png" width="40" />&nbsp;&nbsp;&nbsp;&nbsp;Dalam Proses</a></li>
                <b><li style="font-size: 14px;"><a href='#' onclick="return loadSudahSelesai();"><img src="../assets/img/approved.png" width="40" />&nbsp;&nbsp;&nbsp;&nbsp;Telah Ditangani]</a></li>
                <b><li style="font-size: 14px;"><a href='#' onclick="return loadDitolak();"><img src="../assets/img/deny.png" width="40" />&nbsp;&nbsp;&nbsp;&nbsp;Pengaduan Ditolak</a></li></b>
                <li style="font-size: 14px;" class='last'><a href='#' onclick="return statistik();"><img src="../assets/img/statistic.png" width="40"/>&nbsp;&nbsp;&nbsp;&nbsp;Statistik Taman</a></li>           
            </ul>
        </div>
        
        <div id="page-inner">
        </div>

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