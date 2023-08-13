<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Tersedia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" integrity="sha512-McCJDVSHMnlaK/ym1utE5mEs3M3ncvPRjUaowh6h4lylXc3V6q5bWSwGzeoX6uRJU1IGlG8J1sAzkkCyzzLZpA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Custom CSS */
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }

        .filter-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 2rem;
        }
    </style>
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-dark p-2" style="background-color: rgb(0, 164, 255);">
            <a class="navbar-brand ps-5" href="userhome.php">
                <img src="../gambar/Asset 1.png" alt="Logo" height="45" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav"
                aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="nav">
                <ul class="navbar-nav me-5 pe-2">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="true">Travel Add-ons</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="Xperience.php">Xperience</a></li>
                            <li><a class="dropdown-item" href="Voucher.php">Gift Voucher</a></li>
                            <li><a class="dropdown-item" href="Rental bus.html">Bus Rental</a></li>
                            <li><a class="dropdown-item" href="Panduan Wisata.php">Panduan Wisata</a></li>
                            <li><a class="dropdown-item" href="Antar Jemput Pelanggan.html">Antar Jemput
                                    Pelanggan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="about.html" class="nav-link active">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="keranjang.php" class="nav-link active">Keranjang</a>
                    </li>
                    <li class="nav-item">
                        <a href="PusatBantuan.html" class="nav-link active">Help</a>
                    </li>
                    <li class="nav-item">
                        <a href="blog.php" class="nav-link active">Blog</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src="../gambar/user.png" width="30px" alt="Account">
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="login.php">Masuk</a></li>
                            <li><a class="dropdown-item" href="register.php">Daftar</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="multiuser.html">Keluar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="container my-4">
        <h2 class="mb-4 mt-4 text-center">Bus Tersedia</h2>
    <div class="row" id="busList">
        <?php 
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from rute");
        while($d = mysqli_fetch_array($data)){
            ?>
            <div class="col-md-4">
                <div class="card h-100 shadow">
                    <img src="../mitra/file_foto/<?php echo $d['armada']; ?> " class="card-img-top">
                    <div class="card-body">
                        <h6><?php echo $d['kelas']; ?></h6><br>
                        <p><?php echo $d['plat']; ?></p>
                        <div class="container">
                            <div class="row justify-content-between">
                                <div class="col-4">
                                    Berangkat
                                </div>
                                <div class="col-4">
                                    <?php echo $d['berangkat']; ?>
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-4">
                                    Tiba
                                </div>
                                <div class="col-4">
                                    <?php echo $d['tiba']; ?>
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-4">
                                    Harga
                                </div>
                                <div class="col-4">
                                    Rp. <?php echo $d['tarif']; ?>
                                </div>
                            </div>
                        </div>
                        <a href="pemesanan1.php" class="btn btn-primary mt-4">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
    </div>
    
    <nav aria-label=" ">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled">
            <a class="page-link">Previous</a>
          </li>
          <li class="page-item active" aria-current="page">
            <a class="page-link" href="#">1</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
    </nav>
    <footer class="text-center text-lg-start text-white mt-5" style="background-color: #3e4551">
        <div class="container-footer p-4">
            <section class=" ps-5">
                <div class="row">
                    <div class="col-lg-4">
                        <h5 class="mb-3 fw-bold">Tujuan Populer</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#!" class="link-light link-underline-opacity-0">Yogyakarta</a>
                            </li>
                            <li>
                                <a href="#!" class="link-light link-underline-opacity-0">Bandung</a>
                            </li>
                            <li>
                                <a href="#!" class="link-light link-underline-opacity-0">Semarang</a>
                            </li>
                            <li>
                                <a href="#!" class="link-light link-underline-opacity-0">Surabaya</a>
                            </li>
                            <li>
                                <a href="#!" class="link-light link-underline-opacity-0">Malang</a>
                            </li>
                            <li>
                                <a href="#!" class="link-light link-underline-opacity-0">Denpasar</a>
                            </li>
                            <li>
                                <a href="#!" class="link-light link-underline-opacity-0">Solo</a>
                            </li>
                            <li>
                                <a href="#!" class="link-light link-underline-opacity-0">Medan</a>
                            </li>
                        </ul>
                    </div>
                <div class="col-lg-4">
                    <h5 class="mb-3 fw-bold">Operator Populer</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!" class="link-light link-underline-opacity-0">Agra Mas</a>
                        </li>
                        <li>
                            <a href="#!" class="link-light link-underline-opacity-0">SAN</a>
                        </li>
                        <li>
                            <a href="#!" class="link-light link-underline-opacity-0">Gunung Harta</a>
                        </li>
                        <li>
                            <a href="#!" class="link-light link-underline-opacity-0">Harapan Jaya</a>
                        </li>
                        <li>
                            <a href="#!" class="link-light link-underline-opacity-0">Nusantara</a>
                        </li>
                        <li>
                            <a href="#!" class="link-light link-underline-opacity-0">ALS</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4">
                  <h5 class="mb-3 fw-bold">ABOUT IndoBus</h5>
                      <p>This web was created to finish our final project <br>
                         we're sorry if there is an issue
                      </p>
                      <li>
                            <a href="faqpage.php" class="link-light link-underline-opacity-0 link-underline-opacity-100-hover">FaQ</a>
                      </li>
                      <li>
                            <a href="about.html" class="link-light link-underline-opacity-0 link-underline-opacity-100-hover">About Us</a>
                      </li>
                      <li>
                            <a href="contactpage.html" class="link-light link-underline-opacity-0 link-underline-opacity-100-hover">Contact</a>
                      </li>
                  </div>
              </section>
          </div>
          <div class="text-center p-3" style="background-color: rgba(29, 29, 29, 0.2)">
              © Copyrights Kelompok4.All Rights Reserved
          </div>
    </footer>
</body>
</html>