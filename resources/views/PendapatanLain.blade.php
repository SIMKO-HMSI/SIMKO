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
          <li class="nav-item active">
            <a href="/PendapatanLain" class="nav-item nav-link">Pendapatan Lain</a>
          </li>
          <li class="nav-item">
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
<nav class=" navbar navbar-expand navbar-white navbar-light">
      <div class="input-group input-group-sm" style="margin-right: 50px;">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit" style="width:50px;">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
     <!-- Tombol Add Pendapatan -->
      <div>
      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-Tambah">Add Pendapatan</button>
      </div>
  </nav>
</div>

<!-- Tabel Pendapatan -->
<div class="container">
<form >
  <table class="table table-striped">
  <thead>
    <tr>

      <th scope="col">Produk</th>
      <th scope="col">Jumlah Penjualan</th>
      <th scope="col">Pendapatan Bersih</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Risol</td>
      <td>100</td>
      <td>Rp 200.000</td>
      <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-Edit">
                  Edit
                </button></td>
    </tr>
    
    <tr>
      <td>Tahu</td>
      <td>100</td>
      <td>Rp 200.000</td>
      <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-Edit">
                  Edit
                </button></td>
    </tr>

    <tr>
      <td>Sosis</td>
      <td>100</td>
      <td>Rp 200.000</td>
      <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-Edit">
                  Edit
                </button></td>
    </tr>

    <tr>
      <td>Kripik</td>
      <td>100</td>
      <td>Rp 350.000</td>
      <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-Edit">
                  Edit
                </button></td>
    </tr>

    <tr>
      <td>Cheese Stick</td>
      <td>100</td>
      <td>Rp 200.000</td>
      <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-Edit">
                  Edit
                </button></td>
    </tr>

    <tr>
      <td>Sosis Solo</td>
      <td>100</td>
      <td>Rp 400.000</td>
      <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-Edit">
                  Edit
                </button></td>
    </tr>

    <tr>
      <td>Bakwan Udang</td>
      <td>100</td>
      <td>Rp 500.000</td>
      <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-Edit">
                  Edit
                </button></td>
    </tr>

    <tr>
      <td>Air Mineral</td>
      <td>100</td>
      <td>Rp 300.000</td>
      <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-Edit">
                  Edit
                </button></td>
    </tr>
  </tbody>
</table>
</form >
</div>
</div>

<!-- Modal Add Pendapatan -->
<div class="modal fade" id="modal-Tambah">
        <div class="modal-dialog">
          <div class="modal-content bg-light">
            <div class="modal-header">
              <h4 class="modal-title" style="text-align: center;"><b>Tambah Pendapatan</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
            <div class=" card-light">
              <!-- form -->
              <form role="form">
                <div class="card-body" >
                  <div class="form-group">
                    <label for="Nama Produk">Nama Produk</label>
                    <input type="text" class="form-control" id="Nama Produk" placeholder="Nama Produk">
                  </div>
                  <div class="form-group">
                    <label for="Jumlah Produk">Jumlah Produk</label>
                    <input type="text" class="form-control" id="Jumlah Produk" placeholder="Jumlah Produk">
                  </div>
                  <div class="form-group">
                    <label for="Pendapatan Bersih">Pendapatan Bersih</label>
                    <input type="text" class="form-control" id="Pendapatan Bersih" placeholder="Pendapatan Bersih">
                  </div>
                </div>
              </form>
              <div class="form-group" style="justify-content: center;">
              <!-- Tombol Submit -->
              <button type="submit" value="Selesai" id="submit">Submit</button>
              </div>
            </div>
            </div>
          </div>
        </div>
</div>

<!-- Modal Edit Pendapatan -->
<div class="modal fade" id="modal-Edit">
        <div class="modal-dialog">
          <div class="modal-content bg-light">
            <div class="modal-header">
              <h4 class="modal-title" style="text-align: center;"><b>Edit Pendapatan</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
            <div class=" card-light">
              <!-- form -->
              <form role="form">
                <div class="card-body" >
                  <div class="form-group">
                    <label for="Nama Produk">Nama Produk</label>
                    <input type="text" class="form-control" id="Nama Produk" placeholder="Nama Produk">
                  </div>
                  <div class="form-group">
                    <label for="Jumlah Produk">Jumlah Produk</label>
                    <input type="text" class="form-control" id="Jumlah Produk" placeholder="Jumlah Produk">
                  </div>
                  <div class="form-group">
                    <label for="Pendapatan Bersih">Pendapatan Bersih</label>
                    <input type="text" class="form-control" id="Pendapatan Bersih" placeholder="Pendapatan Bersih">
                  </div>
                </div>
              </form>
              <div class="form-group" style="justify-content: center;">
              <!-- Tombol Submit -->
              <button type="submit" value="Selesai" id="submit">Submit</button>
              </div>
            </div>
            </div>
          </div>
        </div>
</div>

            
<!-- <form class="form-inline ml-3">
  <nav class=" navbar navbar-expand navbar-white navbar-light"> -->
   <!-- SEARCH FORM -->
<!--   
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
   
 
  </nav>
  
    <form  >
      <br><br> <br>
  <table class="table table-striped">
  <thead>
    <tr>

      <th scope="col">Nama Anggota</th>
      <th scope="col">Nim</th>
      <th scope="col">Departemen</th>
      <th scope="col">Jumlah Kas</th>
      <th scope="col">Status Departemen</th>
      <th scope="col">Tanggal Bayar </th>
      <th scope="col">Status </th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    
      <td>Ahmad purnawan</td>
      <td>120216789</td>
      <td>Enterpreneur</td>
      <td>Rp 15.000</td>
      <td style="color:green;">dibayar</td>
      <td>02/07/2020</td>
      <td style="color:green;">aprovved</td>
      <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-primary">
                  Edit
                </button></td>
    </tr>
    <tr>
    
    <td>jokowi dodo</td>
      <td>120216789</td>
      <td>HRD</td>
      <td>Rp 15.000</td>
      <td style="color:green;">dibayar</td>
      <td>02/07/2020</td>
      <td style="color:green;">aprovved</td>
      <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-primary">
                  Edit
                </button></td>
    </tr>
    <tr>
     
    <td>Luhut Panjaitan</td>
      <td>120216789</td>
      <td>Kamsis</td>
      <td>Rp 15.000</td>
      <td style="color:red;">Belum Bayar</td>
      <td>-</td>
      <td style="color:green;">-</td>
      <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-primary">
                  Edit
                </button></td>
    </tr>
    <tr>
     
    <td>wulun wahyu </td>
      <td>120216789</td>
      <td>Kominfo</td>
      <td>Rp 15.000</td>
      <td style="color:green;">dibayar</td>
      <td>02/07/2020</td>
      <td style="color:green;">aprovved</td>
      <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-primary">
                  Edit
                </button></td>
   </tr>
   <tr>
     
   <td>Raihan Januar</td>
      <td>120216789</td>
      <td>Kominfo</td>
      <td>Rp 15.000</td>
      <td style="color:green;">dibayar</td>
      <td>02/07/2020</td>
      <td style="color:green;">aprovved</td>
      <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-primary">
                  Edit
                </button></td>
   </tr>
   <tr>
     
   <td>Rizky</td>
      <td>120216789</td>
      <td>Dedikasi MAsyarakat</td>
      <td>Rp 15.000</td>
      <td style="color:green;">dibayar</td>
      <td>02/07/2020</td>
      <td style="color:green;">aprovved</td>
      <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-primary">
                  Edit
                </button></td>
   </tr>
   <tr>
     
   <td>Budi</td>
      <td>120216789</td>
      <td>Kominfo</td>
      <td>Rp 15.000</td>
      <td style="color:green;">dibayar</td>
      <td>02/07/2020</td>
      <td style="color:green;">aprovved</td>
      <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-primary">
                  Edit
                </button></td>
   <tr>
     
   <td>Bujang</td>
      <td>120216789</td>
      <td>Kamsis</td>
      <td>Rp 15.000</td>
      <td style="color:green;">dibayar</td>
      <td>02/07/2020</td>
      <td style="color:green;">aprovved</td>
      <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-primary">
                  Edit
                </button></td>
   </tr>
  </tbody>
</table>
</form >
<div class="modal fade" id="modal-primary">
        <div class="modal-dialog">
          <div class="modal-content bg-light">
            <div class="modal-header">
              <h4 class="modal-title" style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Edit</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
            <div class=" card-light"> -->
             
              <!-- /.card-header -->
              <!-- form start -->
              <!-- <form role="form">
                <div class="card-body" >
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" id="Nama Anda" placeholder="Nama Anda">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nim</label>
                    <input type="text" class="form-control" id="Nim Anda" placeholder="Nim Anda">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Departemen</label>
                    <select class="custom-select" id="inputGroupSelect03" aria-label="Example select with button addon">
    <option selected="">Choose...</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
                    
                    
                    
                   
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jumlah Kas</label>
                    <select class="custom-select" id="inputGroupSelect03" aria-label="Example select with button addon">
    <option selected="">Choose...</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
                   
                  </div>
                  
                    <label for="exampleInputPassword1">Tanggal Bayar</label>
                    <input type="date" class="form-control" id="" placeholder="">
                    <br>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Status Departemen</label>
                    <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
    Dibayar
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
 Belum Bayar
  </label> 
</div> -->
                   
                  
            
                
                 
                <!-- /.card-body -->

              <!-- </form>
            </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-info" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-outline-info">Save changes</button>
            </div>
       
      </div> -->
</body>
</html>