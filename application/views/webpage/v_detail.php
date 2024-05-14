<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Icon Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/home.css') ?>">
    <title><?= $title; ?></title>
  </head>
  <body>
    
    <div class="container mt-2">
        <div class="row">
            <div class="col-3">
                <h4 class="text-primary text-logo d-sm-block d-none"><b>Web Kos</b></h4>
            </div>
            <div class="col-3">
                <input type="text" name="range_awal" id="range_awal" class="form-control" placeholder="Range Harga Awal">
            </div>
            <div class="col-3">
                <input type="text" name="range_akhir" id="range_akhir" class="form-control" placeholder="Range Harga Akhir">
            </div>
            <div class="col-3">
                <button class="btn btn-light text-primary" type="submit"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row" style="margin-top: -10px;">
            <div class="col-6">
                <p>Lokasi Kos</p>
                <p class="text-primary" style="margin-top: -18px;"><i class="fas fa-map-marker-alt"></i> Kab. Tangerang</p>
            </div>
           <div class="col-6 text-end">
              <div class="d-flex justify-content-end">
                <?php if($this->session->userdata('nama')): ?>
                  <div class="dropdown">
                      <button class="btn btn-light text-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                       <i class="fa fa-user"></i> <?php echo $this->session->userdata('nama') ?>
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Dashboard Penghuni</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('Page/logout') ?>">Logout</a></li>
                      </ul>
                  </div>
                <?php else : ?>
                  <button class="btn btn-light text-primary mx-2" data-bs-toggle="modal" data-bs-target="#login" data type="button"><i class="fa fa-sign-in"></i> Login</button>
                  <button class="btn btn-light text-primary" data-bs-toggle="modal" data-bs-target="#register" type="button"><i class="fa fa-edit"></i> Register</button>
                <?php endif; ?>
              </div>
           </div>
            
        </div>
    </div>
    <hr style="margin-top: -1px;">
    <div class="container">
          <div class="row">
            <div class="col">
                <?php if($this->session->userdata('nama')): ?>
                <a href="<?= base_url('Page/home') ?>" class="text-primary" style="text-decoration: none; font-size: 18px;">Home</a>
                <a href="" class="text-dark mx-3" style="text-decoration: none; font-size: 18px;">Penyewaan Saya</a>
                <a href="<?= base_url('ListKamar') ?>" class="text-dark mx-3" style="text-decoration: none; font-size: 18px;">List Kamar</a>
                <?php else : ?>
                  <a href="<?= base_url('Page/home') ?>" class="text-primary" style="text-decoration: none; font-size: 18px;">Home</a>
                  <a href="<?= base_url('ListKamar') ?>" class="text-dark mx-3" style="text-decoration: none; font-size: 18px;">List Kamar</a>
                <?php endif; ?>
            </div>
        </div>
        <a href="<?= base_url('Page/home') ?>" class="btn btn-light text-primary"><i class="fa fa-arrow-left"></i></a>

        <div class="row mt-4">
            <h4><?= $detail_kamar->nomor_kamar ?></h4>
            <div class="col-md-6 col-sm-6">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="<?= base_url('assets/img/gambar2.jpg') ?>" style="border-radius: 20px; width: 100%; height: auto; background-size: cover; background-position: center; background-repeat: no-repeat;" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>First slide label</h5>
                          <p>Some representative placeholder content for the first slide.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="<?= base_url('assets/img/gambar2.jpg') ?>" style="border-radius: 20px; width: 100%; height: auto; background-size: cover; background-position: center; background-repeat: no-repeat;" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Second slide label</h5>
                          <p>Some representative placeholder content for the second slide.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="<?= base_url('assets/img/gambar3.jpg') ?>" style="border-radius: 20px; width: 100%; height: auto; background-size: cover; background-position: center; background-repeat: no-repeat;" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Third slide label</h5>
                          <p>Some representative placeholder content for the third slide.</p>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                      <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-6 mt-2 col-sm-6">
              <button class="btn btn-outline-primary" type="button">Keterangan Kamar</button>
              <button class="btn btn-outline-primary rounded-3" type="button"><?= $detail_kamar->nama ?></button>

              <h4 class="mt-3 fw-bold"><?= $detail_kamar->harga ?></h4>
              <p class="fw-bold"><?= $detail_kamar->nomor_kamar ?> | <?= $detail_kamar->jumlah_fasilitas ?> Fasilitas</p>
              <p class="mt-3 fw-bold">Keterangan : <?= $detail_kamar->keterangan ?></p>
              <p class="fw-bold">Fasilitas : </p>
              <p style="margin-top: -12px;"><i class="fa fa-check text-primary"></i> <?php
              $fasilitas = $detail_kamar->nama_fasilitas;
              $fasilitas_array = explode(',', $fasilitas); 
              echo implode("<br> <i class='fa fa-check text-primary'></i>", $fasilitas_array);
              ?></p>
              <p class="fw-bold">Alamat : </p>
              <p><?= $detail_kamar->alamat ?></p>
              <?php if($this->session->userdata('nama')) : ?>
              <div class="d-grid gap-2 mx-auto">
                <button type="button" data-bs-toggle="modal" data-bs-target="#modalSewa" class="btn btn-primary">Lanjut Sewa <i class="fa fa-arrow-right"></i></button>
              </div>
             <?php else: ?>
              <div class="d-grid gap-2 mx-auto">
                <button type="button" data-bs-toggle="modal" data-bs-target="#login" class="btn btn-primary">Login Sekarang <i class="fa fa-arrow-right"></i></button>
              </div>
              <?php endif; ?>
            </div>
        </div>
    </div>


    <section class="mt-4" style="background-color: rgb(221, 246, 255);">
      <div class="container">
        <footer class="row row-cols-1 row-cols-md-5 py-5 border-top">
          <div class="col footer-column">
            <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
              <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
            </a>
            <h2>WEB KOS</h2>
            <p>Perum Talaga Bestari Blok G1/10 RT03/03 Kabupaten Tangerang Banten</p>
            <p><i class="fa fa-envelope text-primary"></i> web_kost@gmail.com</p>
            <p><i class="fa fa-phone text-primary"></i> +62895336769180</p>
          </div>
      
          <div class="col footer-column">
      
          </div>
      
          <div class="col footer-column">
            <h5 class="fw-bold">Use Full Links</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">> Home</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">> Penyewaan Saya</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">> Kamar Kos</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">> Login</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">> Register</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">> Dashboard</a></li>

            </ul>
          </div>

          <div class="col">
            <h5 class="fw-bold">Masuk - Signin</h5>
            <ul class="nav flex-column">
              <li class="nav-item"><a href="#" class="nav-link p-0 text-dark"><i class="fa fa-user"></i> Admin</a></li>
              <li class="nav-item"><a href="#" class="nav-link p-0 text-dark"><i class="fa fa-user"></i> Penyewa</a></li>
            </ul>
          </div>
      
         
        </footer>
      </div>
      
    </section>
   
    <!-- navbar bottom -->
    <br><br>
    <nav class="navbar navbar-light bg-white fixed-bottom border border-3 shadow-lg navbar-expand d-md-none d-lg-none d-xl-none">
      <ul class="navbar-nav nav-justified w-100">
        <li class="nav-item">
          <a href="<?= base_url('Page/home') ?>" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
          </svg><br> <b>Beranda</b></a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
          </svg><br> <b>History</b></a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
          </svg><br> <b>Profil</b></a>
        </li>
        
      </ul>
    </nav>

  <!-- Modal Sewa -->
    <div class="modal fade" id="modalSewa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header bg-primary text-white">
            <h5 class="modal-title" id="exampleModalLabel">Sewa Kost | Penyewaan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="sewa_form">
            <div class="row">
              <div class="col-md-12">
                <div class="border border-3 border-primary rounded-pill">
                  <h4 class="text-center"><?= $detail_kamar->harga ?></h4>
                  <input type="hidden" class="form-control" name="harga" id="harga" value="<?= $detail_kamar->harga ?>">
                </div>
                <h4 class="fw-bold mt-2"><?= $detail_kamar->nomor_kamar ?></h4>
                <input type="hidden" class="form-control" name="nomor_kamar" id="nomor_kamar" value="<?= $detail_kamar->nomor_kamar ?>">
                <p class="fw-bold">Tarif per Bulan : <?= $detail_kamar->harga ?></p>
                <div class="form-group">
                  <label for="">Tanggal Sewa</label>
                  <input type="date" class="form-control" name="tgl_sewa" id="tgl_sewa">
                </div>
                <p class="mt-3">Pembayaran Kost : </p>
                <p style="margin-top: -14px;">1. Online = Upload Bukti Pembayaran</p>
                <p style="margin-top: -14px;">2. Offline = Terima Uang Tunai</p>
                <p>Keterangan : <?= $detail_kamar->keterangan ?></p>
                <input type="hidden" class="form-control" name="keterangan" id="keterangan" value="<?= $detail_kamar->keterangan ?>">
                <p style="margin-top: -14px;">Kriteria &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Kost <?= $detail_kamar->nama ?></p>
                <p style="margin-top: -14px;">Alamat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?= $detail_kamar->alamat ?></p>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <div class="d-grid gap-2 col-12 mx-auto">
              <button type="submit" class="btn btn-primary">Sewa Sekarang</button>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Modal Login -->
    <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Login Sekarang</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="login_form">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="">Email :</label>
                  <input type="email" class="form-control" name="email" id="email">
                </div>
                <div class="form-group mt-2">
                  <label for="">Password :</label>
                  <input type="password" class="form-control" name="password" id="password">
                </div>
                <a href="" class="text-primary mt-2" style="text-decoration: none;">Lupa Password?</a>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <div class="d-grid gap-2 col-8 mx-auto">
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Modal Register -->
    <div class="modal fade" id="register" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Register Akun</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="formRegister">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama">
                  </div>
                  <div class="form-group mt-2">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" id="email">
                  </div>
                  <div class="form-group mt-2">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                  </div>
                  <div class="form-group mt-2">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir">
                  </div>
                  <div class="form-group mt-2">
                    <label for="">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir">
                  </div>
                  <div class="form-group mt-2">
                    <label for="">NIK</label>
                    <input type="text" class="form-control" name="nik" id="nik">
                  </div>
                  <div class="form-group mt-2">
                    <label for="">Nomor Telepon</label>
                    <input type="text" class="form-control" name="telepon" id="telepon">
                  </div>
                  <div class="form-group mt-2">
                    <label for="">Alamat</label>
                    <textarea name="alamat" class="form-control" id="alamat"></textarea>
                  </div>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <div class="d-grid gap-2 col-8 mx-auto">
              <button type="submit" class="btn btn-primary">Register</button>
            </div>
          </div>
        </form>

        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="<?php $this->load->view('webpage/js_custom.php') ?>"></script>
    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>