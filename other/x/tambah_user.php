<!-- 
Author 	: Singgih Saputro
Twitter : @singgihsap
URI		: www.about.me/singgihsaputra
-->

<?php session_start(); include"koneksi.php";?>
<html>

<body>

<?PHP
// apa bila login berhasil tampilkan Pesan 
if (isset($_SESSION['username'])&&(isset($_SESSION['level']))){
	
	?>

	<form method="POST" action="">
    	<label>Nama</label>
        <input type="text" class="form-control" name="nama" placeholder="Nama">
		<label>Username</label>
		 <input type="text" class="form-control" name="username" placeholder="Username">
		<label>Password</label>
		<input type="password" class="form-control" name="password" placeholder="Password">
		<label>Level</label>
		<select name="level" class="form-control">
			<option value="super_admin">Super Admin</option>
			<option value="admin">Admin</option>
			<option value="operator">Operator</option>
		</select><br>
		<button type="submit" class="btn btn-primary">Tambah</button>
	</form>

<?php } ?>
<?php 
if($_POST){
	
	$nama=$_POST['nama'];
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	$level=$_POST['level'];
	
	$insert=mysql_query("INSERT INTO user (nama,username,password,level) VALUES ('$nama','$username','$password','$level')");
	
	if($insert){
		header('location:user.php');
	}else{
		echo'ERROR'.mysql_error();
	}
}
?>

</body>
</html>

