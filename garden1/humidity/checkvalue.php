<?php
	include_once ('db.php');
	if (isset($_GET['connection'])) {
$query = "SELECT den1 FROM control ";
		$result = mysqli_query($con, $query);
		$result = mysqli_fetch_assoc($result);
		$dieukhien = $result['den1'];
		if($dieukhien==0) echo "x";


		if($dieukhien==1){
		$query = "SELECT value FROM humidity1 ORDER BY ID DESC LIMIT 1";
		$result = mysqli_query($con, $query);
		$result = mysqli_fetch_assoc($result);
		$result = $result['value'];
		echo $result;}
	}
?>