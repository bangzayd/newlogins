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
  <strong><a href="#">Program</a> | <a href="#">Dokumentasi</a> | <a href="/newlogin/logout.php">Log Out</a></strong>
  <nav class="p-3 mb-2 bg-info text-white">
    <ul class="nav nav-justified">
      <li><strong>Anda Login sebagai :<?php echo $_SESSION['username']; ?></strong></li>
      <li></li>
      <li>
        <button type="button" class="btn btn-default" aria-label="Left Align">
          <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
        </button>
        <button type="button" class="btn btn-default" aria-label="Left Align">
          <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
        </button>
        <button type="button" class="btn btn-default" aria-label="Left Align">
          <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
        </button>
        <button type="button" class="btn btn-default" aria-label="Left Align">
          <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
        </button>
        <button type="button" class="btn btn-default" aria-label="Left Align">
          <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>
        </button>
      </li>
      <li></li>
      <li><strong><?php echo date('l, d-m-Y'); ?></strong></li>
    </ul>
  </nav>
  <br>
  <div class="row">
    <div class="col-sm-0 col-md-2">
      <table class="table table-bordered table-condensed">
        <tr class="info">
          <th class="text-center">Aplikasi</th>
        </tr>
        <tr>
          <td>
            <ul>
             <li><a href="/newlogin/sadmin.php">Awal</a></li>
             <li><a href="/newlogin/user.php">Info User</a></li>
           </ul>
         </td>
       </tr>
       <tr class="info">
        <th class="text-center">Analisa</th>
      </tr>
      <tr>
        <td>
          <ul>
            <li><a href="#">Pencarian</a></li>
            <li><a href="/newlogin/1/pelanggan.php">Pelanggan Aktif</a></li>
          </ul>
        </td>
      </tr>
      <tr class="info">
        <th class="text-center">Administrasi</th>
      </tr>
      <tr>
        <td>
          <ul>
            <li><a href="home.php">Switch</a></li>
          </ul>
        </td>
      </tr>
    </table>
</div>
<div class="col-sm-5 col-sm-offset-2 col-md-8 col-md-offset-0">
  <table class="table table-bordered table-striped table-condensed">
   <tr class="info">
    <th colspan="5" class="text-center">Administrasi Data Switch</th>
  </tr>
  <tr>
    <th style="text-align: center">No</th>
    <th style="text-align: center">Kode Switch</th>
    <th style="text-align: center">Administrasi</th>
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
    echo '<td style="text-align: center"><a href="edit.php?id='.$data['b0'].'">Edit</a> / <a href="hapus.php?id='.$data['b0'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';
    $no++;
  }
  echo '<tr class="info"><th colspan="6" style="text-align: center"><a href="tambah.php">Tambah Data</a></th></tr>';
}
?>
</table>
</div>
<br>
</div>
<nav class="p-3 mb-2 bg-info text-white" align="center">
  <ul class="nav nav-justified">
    Design & Develop by <b>Ade Saputra</b> for <b>PT. Jetcoms Netindo</b>.<br>
    Copyright © <script>document.write(new Date().getFullYear());</script> All Rights Reserved. Last update <script>document.write(new Date().getFullYear());</script>. 
  </ul>
</nav>
</body>
</html>
<?php
}
else{
echo"Anda tidak berhak untuk melihat halaman ini";	
}
}
?>

