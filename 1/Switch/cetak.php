<?php session_start(); include"koneksi.php";?>
<?PHP
if (isset($_SESSION['username'])&&(isset($_SESSION['level']))){
	if($_SESSION['level']=='super_admin'){
?>

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
  

<div class="col-sm-5 col-sm-offset-2 col-md-8 col-md-offset-0">
  <table class="table table-bordered table-striped table-condensed">
   <tr class="info">
    <th colspan="5" class="text-center">Administrasi Data Switch</th>
  </tr>
  <tr>
    <th style="text-align: center">No</th>
    <th style="text-align: center">Kode Switch</th>
  </tr>
  <?php
  include('koneksi.php');
  $query = mysqli_query($koneksi, "SELECT * FROM b ORDER BY b1 DESC") or die(mysql_error());
  if(mysqli_num_rows($query) == 0){
   echo '<tr><td colspan="6"><a href="tambah.php">Tambah Data</a></td></tr>';
 }
 else{
   $no = 1;
   while($data = mysqli_fetch_assoc($query)){
    echo '<tr>';
    echo '<td style="text-align: center">'.$no.'</td>';
    echo '<td style="text-align: center">'.$data['b1'].'</td>';
    $no++;
  }
}
?>
</table>
</div>
<br>
</div>

<script>
window.print();
</script>
</body>
</html>
<?php
}
else{
echo"Anda tidak berhak untuk melihat halaman ini";	
}
}
?>

