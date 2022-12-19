<html>
<body>
<?php 
	include('koneksi.php');
			$query = mysql_query("SELECT * FROM user ORDER BY username");
		?>
			<br />
		    <hr />
		    <label><h3>Daftar User</h3></label>
			<table>
		  
		         <tr>
		         	<th>Username</th>
		         	<th>Nama Admin</th>
		            <th>Level Admin</th>
		            <th>Action</th>
		         </tr>

		      
<?php 
while($data=mysql_fetch_array($query)){
echo"
					<tr>
					<td>".$data['username']."</td>
					<td>".$data['nama']."</td>
					<td>".$data['level']."</td>
					<td>
					<a class='btn btn-success' href='edit_user.php?id=".$data['username']."'>Edit</a> 
					<a class='btn btn-danger' href='delete.php?sesi=user&id=".$data['username']."'>Hapus</a>
					</td>
					</tr>
				";
			}
		?>
		


		    </table>
		    <a href="tambah_user.php">Tambah User</a>
		    </body>
		    </html>
		    
		    
		    
