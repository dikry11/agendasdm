<?php

if (isset($_POST['submit'])) {
   include "koneksi.php";
   $username    = $_POST['username'];
   $password    = $_POST['password'];

   $cek_user    = mysqli_query($koneksi, "SELECT * FROM tb_login WHERE username='$username'");
    $row    = mysqli_num_rows($cek_user);

    if ($row === 1) {
        //seleksi password
        $fetch_pass = mysqli_fetch_assoc($cek_user);
        $cek_pass   = $fetch_pass['password'];
        if ($cek_pass <> $password) {
          echo "<script>alert('Password Salah');</script>";   
        } else
        {
             echo "<script>alert('Login Berhasil');document.location='index.php'</script>";
        }
    } else {
        echo "<script>alert('Username Salah');</script>";
    }

     

}
    ?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
	<link rel="stylesheet" type="text/css" href="dist/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="img/wave1.png">
	<div class="container">
		<div class="img">
			<img src="img/polisi.png">
		</div>
		<div class="login-content">
		 <form action="" method="POST">
				<img src="img/logoo.jpg">
				<h2 class="title">Welcome To E-AGENDA</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" name="username">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>

           		    	<input type="password" id="password" name="password" class="input" data-toggle="password">

            	   </div>
            	</div>

            	<a href="#">Forgot Password?</a>
            <button type="submit" class="btn" name="submit">Login</button>
            </form>
        </div>
    </div>
 <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2020 <a href="https://adminlte.io">Dikry Maulana</a>.</strong> All rights
    reserved.
  </footer>
    
    <script type="text/javascript" src="js/main.js">
</script>
</body>
</html>