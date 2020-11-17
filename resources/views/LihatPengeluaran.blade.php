<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Lihat Pengeluaran</title>
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

      <div class="collapse navbar-collapse order-3" id="navbarCollapse" style="justify-content: center;">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="/homepage" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="/kas" class="nav-link" >Uang Kas Anggota</a>
          </li>
          <li class="nav-item">
            <a href="/anggota" class="nav-link">Anggota</a>
          </li>
          <li class="nav-item">
            <a href="/PendapatanLain" class="nav-item nav-link">Pendapatan Lain</a>
          </li>
          <li class="nav-item active">
            <a href="/LihatPengeluaran" class="nav-link">Pengeluaran</a>
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
            <a href="#" class="dropdown-item">
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
  <br> 
</div>
<br>
<br>
<br>
<div class="container">
<form  >
      <br><br> <br>
  <table class="table table-striped">
  <thead>
    <tr>

      <th scope="col">No</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Program Kerja</th>
      <th scope="col">Jumlah Pengeluaran</th>
      <th scope="col">Tanggal Pengeluaran</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    
      <td>1</td>
      <td>Dekorasi</td>
      <td>KYIS</td>
      <td>Rp 150.000</td>
      <td>17/11/2020</td>
      <td style="color: green;">Approved</td>
    </tr>

    <tr>
    <td>2</td>
      <td>Konsumsi</td>
      <td>KYIS</td>
      <td>Rp 300.000</td>
      <td>17/11/2020</td>
      <td style="color: green;">Approved</td>
    </tr>

    <tr>
    <td>3</td>
      <td>Sewa Tempat</td>
      <td>Lomba Futsal</td>
      <td>Rp 150.000</td>
      <td>19/11/2020</td>
      <td style="color: green;">Approved</td>
    </tr>

    <tr>
    <td>4</td>
      <td>Dekorasi</td>
      <td>Lomba Futsal</td>
      <td>Rp 50.000</td>
      <td>19/11/2020</td>
      <td style="color: red;">Not Approved</td>
    </tr>

   <tr>
    <td>5</td>
      <td>Konsumsi</td>
      <td>TPB Heroes</td>
      <td>Rp 100.000</td>
      <td>22/11/2020</td>
      <td style="color: red;">Not Approved</td>
    </tr>
    
    <tr>
    <td>6</td>
      <td>Alat Tulis</td>
      <td>TPB Heroes</td>
      <td>Rp 20.000</td>
      <td>22/11/2020</td>
      <td style="color: green;">Approved</td>
    </tr>

   <tr>
    <td>7</td>
      <td>Fotocopy Soal</td>
      <td>TPB Heroes</td>
      <td>Rp 15.000</td>
      <td>22/11/2020</td>
      <td style="color: green;">Approved</td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>