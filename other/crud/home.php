<!DOCTYPE html>
<html>
<head>
	<title>adezayd</title>
</head>
<body>
	<p><a href="tambah.php">Tambah Data</a></p>
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th>No</th>
			<th>a</th>
			<th>b</th>
			<th>Opsi</th>
		</tr>
		<?php
		include('koneksi.php');
		$query = mysql_query("SELECT * FROM a LEFT JOIN b ON a.a2 = b.b0 ORDER BY a0 ASC") or die(mysql_error());
		if(mysql_num_rows($query) == 0){
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
		}
		else{
			$no = 1;
			while($data = mysql_fetch_assoc($query)){
				echo '<tr>';
				echo '<td>'.$no.'</td>';
				echo '<td>'.$data['a1'].'</td>';
				echo '<td>'.$data['b1'].'</td>';
				echo '<td><a href="edit.php?id='.$data['a0'].'">Edit</a> / <a href="hapus.php?id='.$data['a0'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';
				$no++;
			}
		}
		?>
	</table>
</body>
</html>