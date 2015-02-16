<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <script src="../assets/js/jquery.min.js"></script>
        <script type="../text/javascript" src="../assets/js/index.js"></script>
        <!-- AJAX SCRIPTS -->
        <script type="text/javascript" src="../assets/js/ajax.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="../assets/css/menu.css" rel="stylesheet" />
        <link href="../assets/css/bootstrap.css" rel="stylesheet" />
        <title>Park Monitoring System</title>
    </head>

    <body onload="loadSemuaPengaduanAdmin();">
        <div class="header">
            <span><img src="../assets/img/Logo.png" /></span>
            <span><a href="homepage.php">DINAS PERTAMANAN DAN PEMAKAMAN KOTA BANDUNG</a>
			<center><p style="font-size:14px" >Jalan Ambon No 1 A, Bandung, Jawa Barat; Telepon: 0224231921</p></center>
            </span>
        </div>
        <br /><br /><br /><br />
        <div id='cssmenu'>
            <ul class="nav nav-pills nav-stacked text-center">
                <form method="post" class="navbar-form navbar-left" role="search" action="#" onsubmit="return false;">
                    <div class="input-group custom-search-form">

                        <input class="form-control" name="query" id="query" placeholder="Search" style="width:90%" required />
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-default" onClick = "return searchPengaduan(2);" >
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>  
                    </div>
                </form>
            </ul>
            <ul>
                <b><li><a href='#' onclick="return formPengaduan(2);"><span><img src="../assets/img/add.png" width="30" ><span>&nbsp;&nbsp;&nbsp;&nbsp;Tambah Pengaduan</span></span></a></li></b>
				<b><li><a href='#' onclick="return formTaman();"><span><img src="../assets/img/add.png" width="30" ><span>&nbsp;&nbsp;Tambah Taman</span></span></a></li></b>
				<b><li><a href='#' onclick="return loadSemuaTaman();"><span><img src="../assets/img/list.png" width="30" /><span>&nbsp;&nbsp;Semua Taman</span></span></a></li></b>
				<b><li><a href='#' onclick="return loadSemuaPengaduanAdmin();"><span><img src="../assets/img/list.png" width="30" /><span>&nbsp;&nbsp;&nbsp;&nbsp;Semua Pengaduan</span></span></a></li></b>
				<b><li><a href='#' onclick="return loadMenunggu(2);"><span><img src="../assets/img/hourglass.png" width="30" /><span>&nbsp;&nbsp;Menunggu</span></span></a></li></b>
                <b><li><a href='#' onclick="return loadSedangDiproses();"><span><img src="../assets/img/progress.png" width="30" /><span>&nbsp;&nbsp;Dalam Proses</span></span></a></li></b>
                <b><li><a href='#' onclick="return loadSudahSelesai();"><span><img src="../assets/img/approved.png" width="30" /><span>&nbsp;&nbsp;Telah Ditangani</span></span></a></li></b>
                <b><li><a href='#' onclick="return loadDitolak();"><span><img src="../assets/img/deny.png" width="30" /><span>&nbsp;&nbsp;&nbsp;&nbsp;Pengaduan Ditolak</span></span></a></li></b>
                <b><li class='last'><a href='#' onclick="return statistik();"><span><img src="../assets/img/statistic.png" width="30"/><span>&nbsp;&nbsp;Statistik Taman</span></span></a></li></b>
            </ul>
        </div>
        
        <div id="page-inner">
        </div>
    </body>
</html>