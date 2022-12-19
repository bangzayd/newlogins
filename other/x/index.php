<?php session_start(); ?>
<!DOCTYPE html>
<html>

    <body>

                    
                    <form class="form-signin" action="validasi.php" method="POST">
                    <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                    <input type="password" class="form-control" name="password" placeholder="Password" required autofocus>
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
                    <button>Sign in</button>
                    </form>
    
    </body>
</html>