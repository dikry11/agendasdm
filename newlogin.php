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

  <h1><b>E-AGENDA</b></h1>
</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
    <div class="tooltip"></div>
  </div>
  <div class="form">
    <h2><center>Login to E-Agenda</center></h2>
    <form action="" method="POST">
       <input type="text" id="username" name="username" class="input"  placeholder="Username">
      <input type="password" id="password" name="password" class="input" data-toggle="password" placeholder="Password">
       <button type="submit" class="btn" name="submit">Login</button>
    </form>
  </div>
  <div class="form">
    <h2>Buat Akun</h2>
    <form>
      <input type="text" placeholder="Username" disabled="" />
      <input type="password" placeholder="Password" disabled="" />
      <input type="email" placeholder="Email" disabled="" />
      <input type="tel" placeholder="No Handphone" disabled="" />
      <button disabled="">Register</button>
    </form>
  </div>
  <div class="cta"><a href="http://andytran.me">Copyright &copy; PUSDIKMIN 2020</a></div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://codepen.io/andytran/pen/vLmRVp.js'></script><script  src="./script.js"></script>

</body>
</html>
