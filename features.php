<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CSI: Features</title>
	<link rel="stylesheet" href="css/milligram.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body align="center">
	<?php 
	 // The get method from index.php will coded here
		$username = $_GET["username"];
		$password = $_GET["password"];
	 ?>
	<div class="row">
		<div class="column">
			<h4>Pendaftaran Pasien</h4>
			<a class="button button-outline">buka</a>
		</div>
		<div class="column">
			<h4>Absen Dokter</h4>
			<a class="button button-outline">buka</a>
		</div>
		<div class="column">
			<h4>Data Pasien</h4>
			<a class="button button-outline">buka</a>
		</div>
		<div class="column">
			<h4>Data Antrian per hari</h4>
			<a class="button button-outline">buka</a>
		</div>
	</div>
</body>
</html>