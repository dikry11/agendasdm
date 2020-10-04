<?php
include 'koneksi.php';

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E-AGENDA | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>DM</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>E-AGENDA</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          

           
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/logo1.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Dikry</span>
            </a>
          
          
          <!-- Control Sidebar Toggle Button -->
           <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gears"></i><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="divider"></li>
                        <li>
                            <a href="login.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/logo1.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Dikry</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
     
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i>   Dashboard</a>
                    </li>

 
        <li class="treeview">
          <a href="#">
    <i class="fa fa-book"></i><span> Tabel Agenda</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="tasspmasuk.php"><i class="fa fa-files-o"></i></i> Surat Perintah Masuk</a></li>
            <li><a href="tasspkeluar.php"><i class="fa fa-files-o"></i> Surat Perintah Keluar</a></li>
            <li><a href="tasmasuk.php"><i class="fa fa-files-o"></i> Surat Masuk Biasa</a></li>
            <li><a href="taskeluar.php"><i class="fa fa-files-o"></i> Surat Keluar Biasa</a></li>
            <li><a href="taskeluarrahasia.php"><i class="fa fa-files-o"></i> Surat Keluar Rahasia</a></li>
            <li><a href="tasjalan.php"><i class="fa fa-files-o"></i> Surat Izin Jalan</a></li>
            <li><a href="tascuti.php"><i class="fa fa-files-o"></i> Surat Izin Cuti</a></li>
            <li><a href="tastelegram.php"><i class="fa fa-files-o"></i> Surat Telegram Masuk</a></li>
            <li><a href="tasrekomen.php"><i class="fa fa-files-o"></i> Surat Rekomendasi</a></li>
            <li><a href="ndmasuk.php"><i class="fa fa-files-o"></i> Nota Dinas Masuk</a></li>
            <li><a href="ndkeluar.php"><i class="fa fa-files-o"></i> Nota Dinas Keluar</a></li>
        
          </ul>
        </li>


    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Surat Agenda</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
         <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">

              <h3>2020</h3>
              <p><b>Total Surat Keseluruhan</b></p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="tasspkeluar.php" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          
        </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">

                <?php
              // mengambil data barang
              $sql = mysqli_query($koneksi,"SELECT * FROM tb_spmasuk");
               
              // menghitung data barang
              $data = mysqli_num_rows($sql);
              ?>
               
              <h3><b><?php echo $data; ?></b></h3>

              <p><b>Surat Perintah Masuk</b></p>
            </div>
            <div class="icon">
              <i class="ion ion-document-text"></i>
            </div>
            <a href="tasspmasuk.php" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
            <?php
              // mengambil data barang
              $sql = mysqli_query($koneksi,"SELECT * FROM tb_spkeluar");
               
              // menghitung data barang
              $data = mysqli_num_rows($sql);
              ?>
               
              <h3><b><?php echo $data; ?></b></h3>

              <p><b>Surat Perintah Keluar</b></p>
            </div>
            <div class="icon">
              <i class="ion ion-document-text"></i>
            </div>
            <a href="tasspkeluar.php" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">

            <?php
              // mengambil data barang
              $sql = mysqli_query($koneksi,"SELECT * FROM tb_sbmasuk");
               
              // menghitung data barang
              $data = mysqli_num_rows($sql);
              ?>
               
              <h3><b><?php echo $data; ?></b></h3>

              <p><b>Surat Masuk Biasa</b></p>
            </div>
            <div class="icon">
              <i class="ion ion-document-text"></i>
            </div>
            <a href="tasmasuk.php" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
        
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner" name="b" >
               <?php
              // mengambil data barang
              $sql = mysqli_query($koneksi,"SELECT * FROM tb_sbkeluar");
               
              // menghitung data barang
              $data = mysqli_num_rows($sql);
              ?>
               
              <h3><b><?php echo $data; ?></b></h3>

              <p><b>Surat Keluar Biasa</b></p>
            </div>
            <div class="icon">
              <i class="ion ion-document-text"></i>
            </div>
            <a href="taskeluar.php" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
        
          </div>
        </div>
        <!-- ./col -->
       <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner" name="c" >
            <?php
              // mengambil data barang
              $sql = mysqli_query($koneksi,"SELECT * FROM tb_sbrahasia");
               
              // menghitung data barang
              $data = mysqli_num_rows($sql);
              ?>
               
              <h3><b><?php echo $data; ?></b></h3>

              <p><b>Surat Keluar Rahasia</b></p>
            </div>
            <div class="icon">
              <i class="ion ion-document-text"></i>
            </div>
            <a href="taskeluarrahasia.php" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
        
          </div>
        </div>
          <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
            <?php
              // mengambil data barang
              $sql = mysqli_query($koneksi,"SELECT * FROM tb_sij");
               
              // menghitung data barang
              $data = mysqli_num_rows($sql);
              ?>
               
              <h3><b><?php echo $data; ?></b></h3>

              <p><b>Surat Izin Jalan</b></p>
            </div>
            <div class="icon">
              <i class="ion ion-document-text"></i>
            </div>
            <a href="tasjalan.php" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
        
          </div>
        </div>

          <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
            <?php
              // mengambil data barang
              $sql = mysqli_query($koneksi,"SELECT * FROM tb_sic");
               
              // menghitung data barang
              $data = mysqli_num_rows($sql);
              ?>
               
              <h3><b><?php echo $data; ?></b></h3>

              <p><b>Surat Izin Cuti</b></p>
            </div>
            <div class="icon">
              <i class="ion ion-document-text"></i>
            </div>
            <a href="tascuti.php" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
        
          </div>
        </div>

          <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
            <?php
              // mengambil data barang
              $sql = mysqli_query($koneksi,"SELECT * FROM tb_str");
               
              // menghitung data barang
              $data = mysqli_num_rows($sql);
              ?>
               
              <h3><b><?php echo $data; ?></b></h3>

              <p><b>Surat Telegram Masuk</b></p>
            </div>
            <div class="icon">
              <i class="ion ion-document-text"></i>
            </div>
            <a href="tastelegram.php" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
        
          </div>
        </div>

          <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
            <?php
              // mengambil data barang
              $sql = mysqli_query($koneksi,"SELECT * FROM tb_sr");
               
              // menghitung data barang
              $data = mysqli_num_rows($sql);
              ?>
               
              <h3><b><?php echo $data; ?></b></h3>

              <p><b>Surat Rekomendasi</b></p>
            </div>
            <div class="icon">
              <i class="ion ion-document-text"></i>
            </div>
            <a href="tasrekomen.php" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
        
          </div>
        </div>

          <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
            <?php
              // mengambil data barang
              $sql = mysqli_query($koneksi,"SELECT * FROM tb_ndmasuk");
               
              // menghitung data barang
              $data = mysqli_num_rows($sql);
              ?>
               
              <h3><b><?php echo $data; ?></b></h3>

              <p><b>Nota Dinas Masuk</b></p>
            </div>
            <div class="icon">
              <i class="ion ion-document-text"></i>
            </div>
            <a href="ndmasuk.php" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
        
          </div>
        </div>

          <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
            <?php
              // mengambil data barang
              $sql = mysqli_query($koneksi,"SELECT * FROM tb_ndkeluar");
               
              // menghitung data barang
              $data = mysqli_num_rows($sql);
              ?>
               
              <h3><b><?php echo $data; ?></b></h3>

              <p><b>Nota Dinas Keluar</b></p>
            </div>
            <div class="icon">
              <i class="ion ion-document-text"></i>
            </div>
            <a href="ndkeluar.php" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
        
          </div>
        </div>

         




    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2020 <a href="#">Dikry Maulana</a>.</strong> All rights
    reserved.
  </footer>


  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
