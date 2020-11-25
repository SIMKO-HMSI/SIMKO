<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Top Navigation</title>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="/" class="navbar-brand">
        <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light"><b>SIMKO</b></span>
      </a>
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="homepagebiro" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="kasbiro" class="nav-link">Uang Kas Anggota</a>
          </li>
          <li class="nav-item">
            <a href="anggotabiro" class="nav-link">Anggota</a>
          </li>
          <li class="nav-item">
            <a href="pendapatanbiro" class="nav-link">Pendapatan Lain</a>
          </li>
          <li class="nav-item">
            <a href="pengeluaranbiro" class="nav-link">Pengeluaran</a>
          </li>
        </ul>
      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
          <img src="/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle">
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="profilbiro" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Akun Profil
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Detail</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i>Online</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->
 
  <!-- Content Wrapper. Contains page content -->
    <div>
    <h2 style="text-align:center">Sistem Informasi Manajemen Keuangan Organisasi</h2>
    <h3 style="text-align:center">Bendahara Departemen</h3>
    <p> </p>
    </div>
    <!-- /.content-header -->

  <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="card" style="background-color:#00AAAA; width: 25rem;">
              <div class="card-body">
                <h5 class="card-title"style="color:white">Total Uang Kas Anggota</h5>
                <p class="card-text"style="color:white">
                  Rp. 10.000
                </p>
              </div>
            </div>

            <div class="card" style="background-color:#00AAAA; width: 25rem;">
              <div class="card-body">
              <h5 class="card-title"style="color:white">Total Jumlah Anggota</h5>
                <p class="card-text"style="color:white">
                  5 Anggota
                </p>
              </div>
            </div>

            <div class="card" style="background-color:#00AAAA; width: 25rem;">
              <div class="card-body">
              <h5 class="card-title"style="color:white">Total Pendapatan Lain</h5>
                <p class="card-text"style="color:white">
                  Rp. 90.000
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
          <div class="card" style="background-color:#00AAAA; width: 25rem;">
              <div class="card-body">
              <h5 class="card-title"style="color:white">Anggota Belum Bayar</h5>
                <p class="card-text"style="color:white">
                  2 Anggota
                </p>
              </div>
            </div>

            <div class="card" style="background-color:#00AAAA; width: 25rem;">
              <div class="card-body">
              <h5 class="card-title"style="color:white">Anggota Sudah Bayar</h5>
                <p class="card-text"style="color:white">
                  3 Anggota
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
