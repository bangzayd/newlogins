<!-- 
Author 	: Singgih Saputro
Twitter : @singgihsap
URI		: www.about.me/singgihsaputra
-->
<?php session_start(); include"koneksi.php";?>
<html>

<body>

 <?php
 $id=$_GET['id'];
 
 $data=mysql_fetch_array(mysql_query("SELECT * FROM user WHERE username='$id'"));
 ?>   
	<h3>Edit User</h3>
	<form method="POST" action="">
    	<label>Nama</label>
		<input type="text" class="form-control" name="nama" placeholder="Nama" value="<?php echo $data['nama'] ?>">
		<label>Username</label>
		<input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $data['username'] ?>">
		<label>Password</label>
		<input type="password" class="form-control" name="password" placeholder="Password">
		<label>Level</label>
		<select name="level" class="form-control">
			<option <?php echo $data['level'] == "super_admin"  ? 'selected="selected"' : '';?> value="super_admin">Super Admin</option>
			<option <?php echo $data['level'] == "admin"  ? 'selected="selected"' : '';?> value="admin">Admin</option>
			<option <?php echo $data['level'] == "operator"  ? 'selected="selected"' : '';?> value="operator">Operator</option>
		</select><br>
		<button type="submit" class="btn btn-primary">Edit</button>
	</form>
	

<?php 
if($_POST){
	$id=$data['username'];
	
	$nama=$_POST['nama'];
	$username=$_POST['username'];
	$pass=$_POST['password'];
	$level=$_POST['level'];
	
	if($pass==''){
		$password=$data['password'];
	}else{
		$password=md5($pass);
	}
	
	$insert=mysql_query("UPDATE user SET username='$username',password='$password',nama='$nama',level='$level' WHERE username='$id'");
	
	if($insert){
		header('location:user.php');
	}else{
		echo'ERROR'.mysql_error();
	}
}
?>
</body>
</html>
