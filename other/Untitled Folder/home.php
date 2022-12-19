<?php include"koneksi.php";?>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head> 

  <strong><a href="#">Program</a> | <a href="#">Dokumentasi</a> | <a href="logout.php">Log Out</a></strong>
  <nav class="p-3 mb-2 bg-info text-white">
    <ul class="nav nav-justified">
      <li>Anda Login sebagai :<?php echo $_SESSION['username']; ?></li>
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
    <table class="table table-bordered">
     <tr class="info">
      <th colspan="5" class="text-center">Informasi Program</th>
    </tr>
    <tr>
      <td style="text-align: Center">
        <h3>Jetcoms Network Management System (NetMan)</h3>
        <br>
        Jetcoms Network Management System adalah program aplikasi berbasis web yang dibuat khusus untuk diterapkan pada infrastruktur jaringan PT. Jetcoms Netindo. Program ini dapat digunakan untuk membantu proses trouble-shooting permasalahan internet sekaligus berfungsi sebagai pusat data pelanggan maupun perangkat jaringan.
        <br>
        <br>pada perangkat 
        <br>
        Untuk menggunakan program ini, anda harus login terlebih dahulu melalui menu yang telah disediakan di sebelah kiri layar pada bagian <b>Login</b>. Jika anda belum mempunyai akses untuk login, silakan menghubungi Administrator.
        <br>
        <br>
        <br>
        Petunjuk cara penggunakan program ini dapat dilihat melalui menu <b>Bantuan</b>.
        <br>
        <br>
        Terima kasih.
        <br>
        <br>
        <b>Ade Saputra</b>
        <br>
        (Netman Experiment)
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
    Design & Develop by <b>Ade Saputra</b> for <b>PT. Jetcoms Netindo</b>.<br>
    Copyright © <script>document.write(new Date().getFullYear());</script> All Rights Reserved. Last update <script>document.write(new Date().getFullYear());</script>. 
  </ul>
</nav>

</body>
</html>
