<?php

include 'sql_connect.php';

$query = mysqli_query($con, "SELECT * FROM taman ORDER BY nama ASC");

while($row = mysqli_fetch_array($query))
{
	$namataman = $row['nama'];
	$idtaman = $row['id_taman'];
	echo '<option value="'. $idtaman .'">'. $namataman .'</option>';
}

?>