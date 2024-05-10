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
                <button class="btn btn-light text-primary mx-2" data-bs-toggle="modal" data-bs-target="#login" data type="button"><i class="fa fa-sign-in"></i> Login</button>
                <button class="btn btn-light text-primary" data-bs-toggle="modal" data-bs-target="#register" type="button"><i class="fa fa-edit"></i> Register</button>
              </div>
           </div>
            
        </div>
    </div>
    <hr style="margin-top: -1px;">
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="" class="text-primary" style="text-decoration: none; font-size: 18px;">Home</a>
                <a href="" class="text-dark mx-3" style="text-decoration: none; font-size: 18px;">List Kamar</a>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
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
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            
        </div>
    </div>

    <div class="container mt-4">
      <h4 class="mt-4">Kamar Tersedia</h4>
        <div class="row row-cols-2 row-cols-md-4 g-4">
            <div class="col">
              <div class="card">
                <a href="detail_kamar.html">
                  <div class="zoom-container">
                    <img src="<?= base_url('assets/img/gambar1.jpg') ?>" class="card-img-top" alt="gambar1">
                    <div class="zoom-overlay"></div>
                  </div>
                </a>
                <div class="card-body">
                  <h5 class="card-title text-center">KM-001</h5>
                  <p class="card-text text-center">Rp. 1.500.000</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <a href="">
                  <div class="zoom-container">
                    <img src="<?= base_url('assets/img/gambar2.jpg') ?>" class="card-img-top" alt="...">
                    <div class="zoom-overlay"></div>
                  </div>
                </a>
                <div class="card-body">
                  <h5 class="card-title text-center">KM-002</h5>
                  <p class="card-text text-center">Rp. 1.000.000</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <a href="">
                  <div class="zoom-container">
                    <img src="<?= base_url('assets/img/gambar3.jpg') ?>" class="card-img-top" alt="...">
                    <div class="zoom-overlay"></div>
                  </div>
                </a>
                <div class="card-body">
                  <h5 class="card-title text-center">KM-003</h5>
                  <p class="card-text text-center">Rp. 2.000.000</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <a href="">
                  <div class="zoom-container">
                    <img src="<?= base_url('assets/img/gambar3.jpg') ?>" class="card-img-top" alt="...">
                    <div class="zoom-overlay"></div>
                  </div>
                </a>
                <div class="card-body">
                  <h5 class="card-title text-center">KM-004</h5>
                  <p class="card-text text-center">Rp. 2.200.000</p>
                </div>
              </div>
            </div>
          </div>
    </div>

    <section class="mt-4" style="background-color: rgb(221, 246, 255);">
        <h2 class="py-4 px-4 text-center border border-2">LOGIN AKUN</h2>
        <p class="text-center">Login untuk melakukan order Design Brand Anda!</p>
       
        <div class="d-grid gap-2 col-6 mx-auto">
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#login" style="border-radius: 30px;" type="button">LOGIN <I class="fa fa-arrow-right"></I></button>
        </div>
        <br><br>
    </section>

    <section class="mt-4 d-md-none d-lg-none d-sm-none d-xl-none" style="background-color: rgb(221, 246, 255);">
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
          <a href="#" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
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

    <!-- Modal Login -->
    <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Login Sekarang</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="">Email :</label>
                  <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group mt-2">
                  <label for="">Password :</label>
                  <input type="password" class="form-control" name="password">
                </div>
                <a href="" class="text-primary mt-2" style="text-decoration: none;">Lupa Password?</a>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <div class="d-grid gap-2 col-8 mx-auto">
              <button type="button" class="btn btn-primary">Login</button>
            </div>
          </div>
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
            <form action="" method="POST">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="nama">
                  </div>
                  <div class="form-group mt-2">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email">
                  </div>
                  <div class="form-group mt-2">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tgl_lahir">
                  </div>
                  <div class="form-group mt-2">
                    <label for="">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tmpt_lahir">
                  </div>
                  <div class="form-group mt-2">
                    <label for="">NIK</label>
                    <input type="text" class="form-control" name="nik">
                  </div>
                  <div class="form-group mt-2">
                    <label for="">Nomor Telepon</label>
                    <input type="text" class="form-control" name="no_telp">
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
              <button type="button" class="btn btn-primary">Register</button>
            </div>
          </div>
        </form>

        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>