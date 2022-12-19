<?php
if(isset($_POST['tambah'])){
	include('koneksi.php');
	$_1		= $_POST['_a'];
	$_2		= $_POST['_b'];
	$input	= mysql_query("INSERT INTO a VALUES(0, '$_1', '$_2')") or die(mysql_error());
	if($input){
		echo 'Data berhasil di tambahkan!';
		echo '<a href="tambah.php">Kembali</a>';
	}
	else{
		echo 'Gagal menambahkan data! ';
		echo '<a href="tambah.php">Kembali</a>';
	}
}
else{
	echo '<script>window.history.back()</script>';
}
?>