<?php session_start(); include"koneksi.php";?>

<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="assets/bootstrap.min.css" rel="stylesheet">
  <script src="assets/jquery.min.js"></script>
  <script src="assets/bootstrap.min.js"></script>
</head>
<body class="p-3 mb-2 bg-succes text-white">
  <strong><a href="#">Program</a> | <a href="#">Dokumentasi</a></strong>
  <nav class="p-3 mb-2 bg-info text-white">
    <ul class="nav nav-justified">
      <li><strong>Silakan Login</strong></li>
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
             <li><a href="home.php">Awal</a></li>
             <li><a href="#">Bantuan</a></li>
             <li><a href="user.php">Info User</a></li>
             <li><a href="#">Ubah Profil</a></li>
             <li><a href="#">Login</a></li>
           </ul>
         </td>
       </tr>
       <tr class="info">
        <th class="text-center">Analisa</th>
      </tr>
      <tr>
        <td>
          <ul>
            <li><a href="home.php">Awal</a></li>
            <li><a href="#">Pencarian</a></li>
            <li><a href="#">All Pelanggan</a></li>
            <li><a href="pelanggan.php">Pelanggan Aktif</a></li>
            <li><a href="#">Perangkat</a></li>
            <li><a href="#">Alat Bantu</a></li>
          </ul>
        </td>
      </tr>
      <tr class="info">
        <th class="text-center">Analisa</th>
      </tr>
      <tr>
        <td>
          <ul>
            <li><a href="#">All Pelanggan</a></li>
            <li><a href="pelanggan.php">Pelanggan Aktif</a></li>
            <li><a href="#">Produk</a></li>
            <li><a href="#">POP/Area</a></li>
            <li><a href="#">Router</a></li>
            <li><a href="#">Switch</a></li>
            <li><a href="#">Base Station</a></li>
            <li><a href="#">Remote Unit</a></li>
            <li><a href="#">Backhaul</a></li>
            <li><a href="#">Operator</a></li>
            <li><a href="#">Laporan</a></li>
          </ul>
        </td>
      </tr>
    </table>
  </div>
  <div class="col-sm-5 col-sm-offset-2 col-md-8 col-md-offset-0">
    <table class="table table-bordered">
     <tr class="info">
      <th class="text-center">Informasi Program</th>
    </tr>
 <form class="form-signin" action="validasi.php" method="POST">
                <tr style="text-align: Center"> <td>  <input type="text"  name="username" placeholder="Username" required autofocus></td></tr>
                <tr style="text-align: Center">  <td>  <input type="password"  name="password" placeholder="Password" required autofocus></td></tr>
                    <?php
                    // menampilkan validasi jika username atau password salah
                    if(isset($_SESSION['pesan'])){
                        echo $_SESSION['pesan'];
                        unset($_SESSION['pesan']);
                    }
                    else{
                    // apabila login gagal lanjut tampilkan form login
                    }
                    ?>
              <tr style="text-align: Center">    <td>  <button>Sign in</button></td></tr>
                    </form>
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

