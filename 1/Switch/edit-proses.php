<?php
if(isset($_POST['simpan'])){
include('koneksi.php');

	$id		= $_POST['id'];
	$_1		= $_POST['_a'];

$update = mysql_query("UPDATE b SET b1='$_1' WHERE b0='$id'") or die(mysql_error());

if($update){
header('location:home.php');
}
}
?>