@extends('layout.maininti')
@section('title')
Homepage
@endsection()
@section('container')
 
  <!-- Content Wrapper. Contains page content -->
    <div>
    <h2 style="text-align:center">Sistem Informasi Manajemen Keuangan Organisasi</h2>
    <h3 style="text-align:center">Bendahara Inti</h3>
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
              <h5 class="card-title"style="color:white">Total Pengeluaran</h5>
                <p class="card-text"style="color:white">
                  Rp. 10.000
                </p>
              </div>
            </div>

            <div class="card" style="background-color:#00AAAA; width: 25rem;">
              <div class="card-body">
              <h5 class="card-title"style="color:white">Approved</h5>
                <p class="card-text"style="color:white">
                  3 Anggota
                </p>
                <h5 class="card-title"style="color:white">Not Approved</h5>
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

@endsection()