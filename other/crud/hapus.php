<?php
if(isset($_GET['id'])){
	include('koneksi.php');
	$id = $_GET['id'];
	$cek = mysql_query("SELECT a0 FROM a WHERE a0='$id'") or die(mysql_error());
	if(mysql_num_rows($cek) == 0){
		echo '<script>window.history.back()</script>';
	}
	else{
		$del = mysql_query("DELETE FROM a WHERE a0='$id'");
		if($del){
			echo 'Data siswa berhasil di hapus! ';
			echo '<a href="home.php">Kembali</a>';
		}
		else{
			echo 'Gagal menghapus data! ';
			echo '<a href="home.php">Kembali</a>';
		}
	}	
}
else{
	echo '<script>window.history.back()</script>';	
}
?>