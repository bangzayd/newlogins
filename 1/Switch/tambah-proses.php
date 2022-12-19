<?php
if(isset($_POST['tambah'])){
include('koneksi.php');

$_1		= $_POST['_a'];

$input = mysqli_query($koneksi, "INSERT INTO b VALUES(NULL, '$_1')") or die(mysql_error());

if($input){
header('location:home.php');
}

}

?>