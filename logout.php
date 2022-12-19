<!-- 
Author 	: Singgih Saputro
Twitter : @singgihsap
URI		: www.about.me/singgihsaputra
-->
<?php
session_start();
// apabila ditekan tombol logout paka session username & level akan hilang 
unset($_SESSION['username']);
unset($_SESSION['level']);
header("location:index.php");
?>