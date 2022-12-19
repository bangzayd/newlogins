<?php
if(isset($_POST['tambah'])){
	include('koneksi.php');
	$_1		= $_POST['_a'];
	$_2		= $_POST['_b'];
	$input	= mysqli_query($koneksi, "INSERT INTO a VALUES('', '$_1', '$_2')") or die(mysql_error());
	if($input){
header('location:pelanggan.php');
	}

}

?>