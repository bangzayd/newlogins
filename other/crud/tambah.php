<!DOCTYPE html>
<html>
<head>
	<title>adezayd</title>
</head>
<body>
<p><a href="home.php">Beranda</a></p>
	<form action="tambah-proses.php" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>A</td>
				<td>:</td>
				<td><input type="text" name="_a" required></td>
			</tr>
			<tr>
				<td>B</td>
				<td>:</td>
				<td><select name="_b"> 
					<option>Select</option>
					<?php
					include('koneksi.php');
					$q=mysql_query("SELECT * FROM b");
					while($d=mysql_fetch_array($q))
					{
						echo "<option value='$d[b0]'> $d[b1] </option>";
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td></td>
			<td><input type="submit" name="tambah" value="Tambah"></td>
		</tr>
	</table>
</form>
</body>
</html>