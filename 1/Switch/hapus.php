<?php
if(isset($_GET['id'])){
include('koneksi.php');

$id = $_GET['id'];
$cek = mysqli_query($koneksi, "SELECT b0 FROM b WHERE b0='$id'") or die(mysqli_error());

if(mysqli_num_rows($cek) == 0){
echo '<script>window.history.back(home.php)</script>';
}
else{
$del = mysqli_query($koneksi, "DELETE FROM b WHERE b0='$id'");
if($del){
header('location:home.php');
}
}	
}
?>