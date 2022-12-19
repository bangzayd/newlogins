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
            <li><a href="pelanggan.php">Pelanggan Aktif</a></li>
          </ul>
        </td>
      </tr>
      <tr class="info">
        <th class="text-center">Administrasi</th>
      </tr>
      <tr>
        <td>
          <ul>
            <li><a href="Switch/home.php">Switch</a></li>
          </ul>
        </td>
      </tr>
    </table>
  </div>
  <div class="col-sm-5 col-sm-offset-2 col-md-8 col-md-offset-0">
    <table class="table table-bordered">
     <tr class="info">
      <th colspan="5" class="text-center">Edit Data Pelanggan</th>
    </tr>
    
    <tr> 
      <?php
      include('koneksi.php');
      $id = $_GET['id'];
      $show = mysqli_query($koneksi, "SELECT * FROM a WHERE a0='$id'");
      if(mysqli_num_rows($show) == 0){
        echo '<script>window.history.back()</script>';
      }
      else{
        $data = mysqli_fetch_assoc($show);
      }
      ?>
      <form action="edit-proses.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <tr>
          <td style="text-align: right">Nama Pelanggan</td>
          <td><input type="text" name="_a" value="<?php echo $data['a1']; ?>" required></td>
        </tr>
        <tr>
          <td style="text-align: right">Nama Kendaraan</td>
          <td>
				<select name="_b"> 
					<option value="<?php echo $data['a2']; ?>"> 
					<?php 
					include('koneksi.php');
					$id = $_GET['id'];
					$show = mysqli_query($koneksi, "SELECT * FROM a LEFT JOIN b ON b.b0=a.a2 WHERE a0='$id'");
					if(mysqli_num_rows($show) == 0){
						echo '<script>window.history.back()</script>';
					}
					else{
						$data = mysqli_fetch_assoc($show);
					}
					echo $data['b1']; 
					$q=mysqli_query($koneksi, "SELECT * FROM b");
					while($d=mysqli_fetch_array($q))
					{
						echo "<option value='$d[b0]'> $d[b1] </option>";
					}
					?>
					</option>
				</select>
        </td>
      </tr>
      <tr>
       <td>&nbsp;</td>
       <td><input type="submit" name="simpan" value="Simpan"></td>
     </tr>
   </table>
 </form>
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
<?php
}
else{
echo"Anda tidak berhak untuk melihat halaman ini";	
}
}
?>