<?php
if(isset($_POST['simpan'])){
	include('koneksi.php');
	$id		= $_POST['id'];
	$_1		= $_POST['_a'];
	$_2		= $_POST['_b'];
	$update	= mysqli_query($koneksi, "UPDATE a SET a1='$_1', a2='$_2' WHERE a0='$id'") or die(mysql_error());
	if($update){
header('location:pelanggan.php');
	}

}

?>