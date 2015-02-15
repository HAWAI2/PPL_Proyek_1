<?php
$namaTaman = $_POST["namaTaman"];
$alamatTaman = $_POST["alamatTaman"];

include 'sql_connect.php';

// Insert into taman
$sql="INSERT INTO taman (nama, alamat)
VALUES ('$namaTaman', '$alamatTaman')";

if (!mysqli_query($con,$sql)) {
	die('Error: ' . mysqli_error($con));
}
mysqli_close($con);

header('Location:admin.php');
?>