<!DOCTYPE html>
<html>
<head>
	<title>adezayd</title>
</head>
<body>
	<p><a href="home.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	<?php
	include('koneksi.php');
	$id = $_GET['id'];
	$show = mysql_query("SELECT * FROM a WHERE a0='$id'");
	if(mysql_num_rows($show) == 0){
		echo '<script>window.history.back()</script>';
	}
	else{
		$data = mysql_fetch_assoc($show);
	}
	?>
	<form action="edit-proses.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>a</td>
				<td>:</td>
				<td><input type="text" name="_a" value="<?php echo $data['a1']; ?>" required></td>
			</tr>
			<tr>
				<td>b</td>
				<td>:</td>
				<td>
					<select name="_b"> 
						<option value="<?php echo $data['a2']; ?>"> 
							<?php 
							include('koneksi.php');
							$id = $_GET['id'];
							$show = mysql_query("SELECT * FROM a LEFT JOIN b ON b.b0=a.a2 WHERE a0='$id'");
							if(mysql_num_rows($show) == 0){
								echo '<script>window.history.back()</script>';
							}
							else{
								$data = mysql_fetch_assoc($show);
							}
							echo $data['b1']; 
							$q=mysql_query("SELECT * FROM b");
							while($d=mysql_fetch_array($q))
							{
								echo "<option value='$d[b0]'> $d[b1] </option>";
							}
							?>
						</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>