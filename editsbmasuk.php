<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E-AGENDA | EDIT SB MASUK</title>
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
        Surat Biasa Masuk
        <small>Edit Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Data</li>
      </ol>
    </section>

    <!-- Main content -->
     <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">  
  
    
    <?php
    //jika sudah mendapatkan parameter GET id dari URL
    if(isset($_GET['id'])){
      //membuat variabel $id untuk menyimpan id dari GET id di URL
      $id = $_GET['id'];
      
      //query ke database SELECT tabel mahasiswa berdasarkan id = $id
      $select = mysqli_query($koneksi, "SELECT * FROM tb_sbmasuk WHERE id='$id'") or die(mysqli_error($koneksi));
      
      //jika hasil query = 0 maka muncul pesan error
      if(mysqli_num_rows($select) == 0){
        echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
        exit();
      //jika hasil query > 0
      }else{
        //membuat variabel $data dan menyimpan data row dari query
        $data = mysqli_fetch_assoc($select);
      }
    }
    ?>
    
    <?php
    //jika tombol simpan di tekan/klik
  if(isset($_POST['bsimpan'])){
      $tgl     = $_POST['tgl'];
      $no_surat      = $_POST['no_surat'];
      $dari    = $_POST['dari'];
      $perihal    = $_POST['perihal'];
      
      $sql = mysqli_query($koneksi, "UPDATE tb_sbmasuk SET tgl='$tgl', no_surat='$no_surat',dari='$dari', perihal='$perihal' WHERE id='$id'") or die(mysqli_error($koneksi));
      
      if($sql){
        echo '<script>alert("Berhasil menyimpan data."); document.location="tasmasuk.php?id='.$id.'";</script>';
      }else{
        echo '<div class="alert alert-warning">Gagal melakukan proses Edit Data.</div>';
      }
    }
    ?>
    
    <form action="editsbmasuk.php?id=<?php echo $id; ?>" method="post">
    
      


<div class="form-group">
<label><b>TANGGAL</b></label>
<input type="date" name="tgl" class="form-control" placeholder="" value="<?php echo $data['tgl'] ?>"
</div>

<div class="form-group">
<label><b>NO SURAT</b></label>
  <input type="text" name="no_surat" class="form-control" placeholder="" value="<?php echo $data['no_surat'] ?>">
</div>

<div class="form-group">
<label><b>DARI</b></label>
<input type="text" name="dari" class="form-control" placeholder="" value="<?php echo $data['dari'] ?>">
</div>


<div class="form-group">
<label><b>PERIHAL</b></label>
<input type="text" name="perihal" class="form-control" placeholder="" value="<?php echo $data['perihal'] ?>">
</div>



      <a href="tasmasuk.php" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Cancel</a>
<button type="submit" class="btn btn-primary" name="bsimpan" ><span class="glyphicon glyphicon-ok"></span> Simpan</button>
        </div>
      </div>
    </form>
    
  </div>

</form></div></div></section>


    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2020 <a href="http://pusdikmin.com/index.php?r=site/home" target="_blank">PUSDIKMIN</a>.</strong> All rights
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
