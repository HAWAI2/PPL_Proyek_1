<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <script src="../../assets/js/jquery.min.js"></script>
        <script type="../../text/javascript" src="../../assets/js/index.js"></script>
        <!-- AJAX SCRIPTS -->
        <script type="text/javascript" src="../../assets/js/ajax.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="../../assets/css/menu.css" rel="stylesheet" />
        <title>Park Monitoring System</title>
    </head>

    <body onload="loadSemuaPengaduan()">
        <div class="header">
            <img src="../../assets/img/Logo.png"/>DINAS PERTAMANAN DAN PEMAKAMAN KOTA BANDUNG
        </div>
        <br /><br /><br /><br />
        <div id='cssmenu'>
            <ul>
                <b><li><a href='#' onclick="return formPengaduan();"><span><img src="../../assets/img/add.png" width="40" ><span>&nbsp;&nbsp;&nbsp;&nbsp;Tambah Pengaduan</span></span></a></li>
				<b><li><a href='#' onclick="return loadSemuaPengaduan();"><span><img src="../../assets/img/list.png" width="40" /><span>&nbsp;&nbsp;&nbsp;&nbsp;Semua Pengaduan</span></span></a></li>
                <b><li><a href='#' onclick="return loadSedangDiproses();"><span><img src="../../assets/img/progress.png" width="40" /><span>&nbsp;&nbsp;&nbsp;&nbsp;Dalam Proses</span></span></a></li>
                <b><li><a href='#' onclick="return loadSudahSelesai();"><span><img src="../../assets/img/approved.png" width="40" /><span>&nbsp;&nbsp;&nbsp;&nbsp;Telah Ditangani</span></span></a></li>
                <b><li><a href='#' onclick="return loadDitolak();"><span><img src="../../assets/img/deny.png" width="40" /><span>&nbsp;&nbsp;&nbsp;&nbsp;Pengaduan Ditolak</span></span></a></li></b>
                <li class='last'><a href='#' onclick="return statistik();"><span><img src="../../assets/img/statistic.png" width="40"/><span>&nbsp;&nbsp;&nbsp;&nbsp;Statistik Taman</span></span></a></li>           
            </ul>
        </div>
        
        <div id="page-inner">
        </div>
    </body>
</html>