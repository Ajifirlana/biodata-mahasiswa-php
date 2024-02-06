<?php
include 'head.php';
$judul_halaman = "Tambah Mahasiswa";
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
if(isset($_POST['simpan'])){
  $id = $_POST['id'];
$nama = $_POST['nama'];
$ktp = $_POST['ktp'];
$ttl = $_POST['ttl'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];
$kecamatan = $_POST['kecamatan'];
 
mysqli_query($conn,"INSERT INTO mahasiswa SET nama='$nama', ktp='$ktp', ttl='$ttl', jenis_kelamin='$jenis_kelamin', no_hp='$no_hp', alamat='$alamat', pekerjaan='$pekerjaan', kecamatan='$kecamatan' WHERE id='$id'");
 
header("location:dashboard.php");
}

 ?>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light"><?=$judul_aplikasi?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block"><?= $_SESSION['username']?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
    <?php include"sidebar.php";?>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= $judul_halaman?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?= $judul_halaman?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?= $judul_halaman?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
          
                 <input type="text" class="form-control" name="nama" placeholder="Enter" >
                  </div>
                  <div class="form-group">
                    <label >KTP</label>
                    <input type="text" class="form-control"name="ktp">
                  </div>
                  <div class="form-group">
                    <label >Tempat Tanggal Lahir</label>
                    <input type="text" class="form-control"name="ttl">
                  </div>
                  <div class="form-group">
                    <label >Jenis Kelamin</label>
                    <input type="text" class="form-control" name="jenis_kelamin">
                  </div>
                  <div class="form-group">
                    <label >No Hp</label>
                    <input type="text" class="form-control" name="no_hp">
                  </div>
                  <div class="form-group">
                    <label >Alamat</label>
                    <input type="text" class="form-control" name="alamat">
                  </div>
                  <div class="form-group">
                    <label >Pekerjaan</label>
                    <input type="text" class="form-control" name="pekerjaan">
                  </div>
                  <div class="form-group">
                    <label >Kecamatan</label>
                    <input type="text" class="form-control" name="kecamatan">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="update" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- /.card -->

          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2024</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

</body>

<?php
include 'footer.php';?>
