<?php include"koneksi.php";?>
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
          <th class="text-center">Aplikasi</th>
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
        <th class="text-center">Program</th>
      </tr>
      <tr>
        <td>
          <ul>
            <li><a href="#">Pencarian</a></li>
            <li><a href="1/pelanggan.php">Jadwal Imam Sholat</a></li>
          </ul>
        </td>
      </tr>
      <tr class="info">
        <th class="text-center">Administrasi</th>
      </tr>
      <tr>
        <td>
          <ul>
            <li><a href="1/Switch/home.php">Laporan Keuangan</a></li>
            <li><a href="1/Switch/home.php">Laporan Kegiatan</a></li>
          </ul>
        </td>
      </tr>
    </table>
  </div>
  <div class="col-sm-5 col-sm-offset-2 col-md-8 col-md-offset-0">
    <table class="table table-bordered table-condensed">
     <tr class="info">
      <th colspan="5" class="text-center">Informasi Program</th>
    </tr>
    <tr>
      <td style="text-align: Center">
        <h3>SISTEM INFORMASI PROFIL MASJID JAMI AT-TAUHID TANGSEL BERBASIS WEB</h3>
        <br>
       Masjid Jami At Tauhid Merupakan masjid tertua yang beralamat di Jl. Masjid At-Tauhid No.57, RW.1, Kedaung, Kec. Pamulang, Kota Tangerang Selatan, Banten 15415
        <br>
        <br>
        <b>Ade Saputra</b>
        <br>
        (Admin DKM)
        <br>
        <br>
      </td>
    </tr>	
  </table>
</div>
<br>
</div>
<nav class="p-3 mb-2 bg-info text-white" align="center">
  <ul class="nav nav-justified">
    Design & Develop by <b>Ade Saputra</b> for <b>Testing</b>.<br>
    Copyright © <script>document.write(new Date().getFullYear());</script> All Rights Reserved. Last update <script>document.write(new Date().getFullYear());</script>. 
  </ul>
</nav>

</body>
</html>
<?php } ?>