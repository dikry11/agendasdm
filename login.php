<?php
//Mengaktifkan Session


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
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login E-Agenda</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->
<div class="pen-title">
<img src="img/log.png" height="120px" width="170px">
  <h1></h1>
</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
    <div class="tooltip"></div>
  </div>
  <div class="form">
    <h2><center>Login to E-Agenda</center></h2>
    <form action="" method="POST">
       <input type="text" id="username" name="username" class="input"  placeholder="Username" required="" autofocus="">
      <input type="password" id="password" name="password" class="input" data-toggle="password" placeholder="Password" required="">
       <button type="submit" class="btn" name="submit">Login</button>
    </form>
  </div>
  <div class="form">
    
  </div>
  <div class="cta"><strong>Copyright &copy; 2020 <a href="http://pusdikmin.com/index.php?r=site/home" target="_blank">PUSDIKMIN</a>.</strong> </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://codepen.io/andytran/pen/vLmRVp.js'></script><script  src="./script.js"></script>

</body>
</html>
