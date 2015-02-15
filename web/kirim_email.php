<?php
	include 'sql_connect.php';
	include 'print_tanggal.php';
	
	$id_pengaduan = $_GET['id'];
	$res = mysqli_query($con,"SELECT * FROM pengaduan NATURAL JOIN taman WHERE id_pengaduan='$id_pengaduan'");
	$pengaduan = mysqli_fetch_array($res);
	
	require_once '../Swift-5.1.0/lib/swift_required.php';
	// Create the Transport
	$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl");
	$transport->setUsername('parkmonitoringsystem@gmail.com');
	$transport->setPassword('pplhawai');

	$mailer = Swift_Mailer::newInstance($transport);
	$message = Swift_Message::newInstance();
	$message->setSubject('Laporan Aduan');
	$message->setFrom(array('parkmonitoringsystem@gmail.com' => 'Park Monitoring System'));
	$message->setTo('gifari13@gmail.com');
	$message->setBody('
	
Judul Pengaduan		: '.$pengaduan["judul"].'
Tanggal Pengaduan	: '.$pengaduan["tanggal_dibuat"].'
	
'.$pengaduan["isi"].'
	
	');
	
	$result = $mailer->send($message);
	echo $result;
?>