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
  $pasien = array('Andre Christoga', '1234567890123456', '12345678901234567890', 'BPU');
 ?>
<center>
	<h3>Data Pasien Hari Ini</h3>
</center>	
 <table>
  <thead>
    <tr>
      <th>Nama</th>
      <th>NIK</th>
      <th>No BPJS</th>
      <th>Poli</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $pasien[0]; ?></td>
      <td><?php echo $pasien[1]; ?></td>
      <td><?php echo $pasien[2]; ?></td>
      <td><?php echo $pasien[3]; ?></td>
    </tr>
    <tr>
      <td>Dony Riyanto</td>
      <td>09876543210987654</td>
      <td>098765432109876543210</td>
      <td>BPG</td>
    </tr>
  </tbody>
</table>
</body>
</html>