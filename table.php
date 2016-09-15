<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CSI: Data Pasien</title>
	<link rel="stylesheet" href="css/milligram.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php 
  // mysql_connect('https://stronghold-donyriyanto.c9users.io/api.php', 'donyriyanto', '', 'c9')
  $pasien1 = array('1', 'Andre Christoga', '1234567890123456', '12345678901234567890', 'Aktif');
  $pasien2 = array('2', 'Andre Christoga', '0234567890123456', '12345678901234567891', 'Aktif');
 ?>
<center>
	<h3>Data Pasien Hari Ini</h3>
</center>	
 <table>
  <thead>
    <tr>
      <th>ID Pasien</th>
      <th>Nama</th>
      <th>NIK</th>
      <th>No BPJS</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $pasien1[0]; ?></td>
      <td><?php echo $pasien1[1]; ?></td>
      <td><?php echo $pasien1[2]; ?></td>
      <td><?php echo $pasien1[3]; ?></td>
      <td><?php echo $pasien1[4] ?></td>
    </tr>
    <tr>
      <td><?php echo $pasien2[0]; ?></td>
      <td><?php echo $pasien2[1]; ?></td>
      <td><?php echo $pasien2[2]; ?></td>
      <td><?php echo $pasien2[3]; ?></td>
      <td><?php echo $pasien2[4]; ?></td>
    </tr>
  </tbody>
</table>
</body>
</html>