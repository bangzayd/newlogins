<?php
if(isset($_POST['simpan'])){
	include('koneksi.php');
	$id		= $_POST['id'];
	$_1		= $_POST['_a'];
	$_2		= $_POST['_b'];
	$update	= mysql_query("UPDATE a SET a1='$_1', a2='$_2' WHERE a0='$id'") or die(mysql_error());
	if($update){
		echo 'Data berhasil di simpan! ';
		echo '<a href="edit.php?id='.$id.'">Kembali</a>';
	}
	else{
		echo 'Gagal menyimpan data! ';
		echo '<a href="edit.php?id='.$id.'">Kembali</a>';
	}
}
else{
	echo '<script>window.history.back()</script>';
}
?>