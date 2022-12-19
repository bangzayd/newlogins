<?php session_start(); include"koneksi.php";?>
<?PHP
if (isset($_SESSION['username'])&&(isset($_SESSION['level']))){
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
        <th class="text-center">Analisa</th>
      </tr>
      <tr>
        <td>
          <ul>
           <li><a href="sadmin.php">Awal</a></li>
           <li><a href="user.php">Info User</a></li>
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
          <li><a href="1/pelanggan.php">Pelanggan Aktif</a></li>
        </ul>
      </td>
    </tr>
    <tr class="info">
      <th class="text-center">Analisa</th>
    </tr>
    <tr>
      <td>
        <ul>
          <li><a href="1/pelanggan.php">Pelanggan Aktif</a></li>
        </ul>
      </td>
    </tr>
  </table>
</div>
<div class="col-sm-5 col-sm-offset-2 col-md-8 col-md-offset-0">
     <table class="table table-bordered table-striped table-condensed" >
        <tr class="info">
      <th colspan="2" class="text-center">Tambah Data Pelanggan</th>
    </tr>
      <form method="POST" action="">
        <tr>
          <td style="text-align: right">Nama</td>
          <td><input type="text" name="nama" required="" ></td>
        </tr>
        <tr>
          <td style="text-align: right">Username</td>
          <td> <input type="text" name="username"></td>
        </tr>
        <tr>
          <td style="text-align: right">Password</td>
          <td><input type="password"  name="password"></td>
        </tr>
        <tr>
          <td style="text-align: right">Level</td>
          <td>
            <select name="level">
              <option value="super_admin">Super Admin</option>
              <option value="admin">Admin</option>
              <option value="operator">Operator</option>
            </select></td>
          </td>
        </tr>		
        <tr> 
          <td>&nbsp;</td>
          <td><input type="submit" name="tambah" value="Tambah"></td>
        </tr>
      </form>
    <?php 
    if($_POST){
      $nama=$_POST['nama'];
      $username=$_POST['username'];
      $password=md5($_POST['password']);
      $level=$_POST['level'];
      $insert=mysqli_query($koneksi, "INSERT INTO user (nama,username,password,level) VALUES ('$nama','$username','$password','$level')");
      if($insert){
        header('location:user.php');
      }else{
        echo'ERROR'.mysql_error();
      }
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
<?php } ?>