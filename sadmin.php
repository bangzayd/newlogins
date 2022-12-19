<?php session_start(); include"koneksi.php";?>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body class="p-3 mb-2 bg-succes text-white">
		<?php 
		if($_SESSION['level']=='super_admin'){ 
			$query = mysqli_query($koneksi, "SELECT * FROM user ORDER BY username");
			?>
			<?php include"1.php";?>
		<?php }
		else if($_SESSION['level']=='admin'){
			?>
			<?php include"2.php";?>
		<?php }
		else if($_SESSION['level']=='operator'){
			?>
			<?php include"3.php";?>	
			<?php
		}else{
			echo"Anda tidak berhak untuk melihat halaman ini";	
		}
	 ?>
</body>
</html>