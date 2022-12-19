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
           <li><a href="home.php">Awal</a></li>
           <li><a href="#">Bantuan</a></li>
           <li><a href="#">Info User</a></li>
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
          <li><a href="#">Pelanggan Aktif</a></li>
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
          <li><a href="#">Pelanggan Aktif</a></li>
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
  <table class="table table-bordered table-striped table-condensed">
   <tr class="info">
    <th colspan="5" class="text-center">Administrasi Data Pelanggan</th>
  </tr>
  <tr>
    <th style="text-align: center">No</th>
    <th style="text-align: center">Nama Pelanggan	</th>
    <th style="text-align: center">Nama Kendaraan</th>
    <th style="text-align: center">Opsi</th>
  </tr>
  <?php
  include('koneksi.php');
  $query = mysql_query("SELECT * FROM a LEFT JOIN b ON a.a2 = b.b0 ORDER BY a0 ASC") or die(mysql_error());
  if(mysql_num_rows($query) == 0){
   echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
 }
 else{
   $no = 1;
   while($data = mysql_fetch_assoc($query)){
    echo '<tr>';
    echo '<td style="text-align: center">'.$no.'</td>';
    echo '<td style="text-align: center">'.$data['a1'].'</td>';
    echo '<td style="text-align: center">'.$data['b1'].'</td>';
    echo '<td style="text-align: center"><a href="edit.php?id='.$data['a0'].'">Edit</a> / <a href="hapus.php?id='.$data['a0'].'" onclick="return confirm(\'Yakin?\')">Hapus</a> / <a href="tambah.php">Tambah</a></td>';
    $no++;
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