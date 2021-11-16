<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE E-Farma | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed ">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <p><b>Halo <?php echo $_SESSION['level'];?></b>, <?php echo $_SESSION['username']; ?></p>
          <a href="logout.php" style="text-decoration: none;" >
              <p>Logout</p>
            </a>
        </div>
        
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2 color-succes">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-th-large"></i>
              <p>
                Dashboard
              </p>
            </a>
            <ul class="nav nav-treeview">
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-alt"></i>
              <p>Akun</p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-envelope"></i>
              <p>Message</p>
            </a>
          </li> 

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: #7BC2FF;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small box -->
             <?php
                            

                            
                                include './koneksi.php';
                                $employee = mysqli_query($conn,"select * from admin");
                                while($row = mysqli_fetch_array($employee))
                                {
                                    echo "
                            <div class='small-box bg-white'>
                                <div class='inner'>
                                  <h3>".$row['total_orderan']."</h3>

                                  <h5>Total Orderan</h5>
                                </div>
                                <div class='icon'>
                                    <i class='fas fa-shopping-cart'></i>
                                </div>
                            </div>
                  
                              ";
                                }
                            ?>
            
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
               <?php
                            

                            
                                include './koneksi.php';
                                $employee = mysqli_query($conn,"select * from admin");
                                while($row = mysqli_fetch_array($employee))
                                {
                                    echo "

                                    <div class='small-box bg-white'>
            
                                      <div class='inner'>
                                        <h3>".$row['total_pengguna']."</h3>

                                        <h5>Total Pengguna</h5>
                                      </div>
                                      <div class='icon'>
                                        <i class='fas fa-user'></i>
                                      </div>
                                    </div>

                              ";
                                }
                            ?>
           
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-8">
            <!-- small box -->
             <?php
                            

                            
                                include './koneksi.php';
                                $employee = mysqli_query($conn,"select * from admin");
                                while($row = mysqli_fetch_array($employee))
                                {
                                    echo "

                                <div class='small-box bg-white'>
                                  <div class='inner'>
                                    <h3>".$row['total_produk']."</h3>

                                    <h5>Total Produk</h5>
                                  </div>
                                  <div class='icon'>
                                    <i class='fas fa-shopping-bag'></i>
                                  </div>
                                </div>

                              ";
                                }
              ?>
            
          </div>
          <!-- ./col -->
          <!-- ./col -->
                        <table class="table table-bordered mt-4">
                            <thead class="bg-blue">
                                <tr>
                                    <th>Nama Produk</th>
                                    <th>Harga Produk</th>
                                    <th>Stok</th>
                                    <th>Gambar Produk</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            <?php
                            

                            
                                include './koneksi.php';
                                $employee = mysqli_query($conn,"select * from admin");
                                while($row = mysqli_fetch_array($employee))
                                {
                                    echo "<tr>
                                     <td>".$row['id_admin']."</td>
                                     <td>".$row['id_admin']."</td>
                                     <td>".$row['id_admin']."</td>
                                    <td> <img src='images/".$row['gambar_buku']."' class='card-img-top' style='width: 80px;'></td>
                                    <td> <a href='ubah_data.php?id_buku= $row[id_buku]' class='btn btn-warning btn-sm'>Ubah</a>&nbsp&nbsp&nbsp<a href='hapus.php?id_buku=$row[id_buku]' class='btn btn-warning btn-sm'>Hapus</a></td>

                                </tr>";
                                }
                            ?>
                            </tbody>
                           

                            <script>
                            $(document).ready(function(){
                                $('#tabel-data').DataTable();
                            });
                            </script>

                        </table>
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
