<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
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

    <section>
        <div class="container shadow p-3 mb-5 mt-4 bg-body-tertiary rounded">
            <h1 class="text-center"><i class="ion-android-cart"></i> Keranjang Anda</h1>

            <div class="card shadow-sm p-3 mb-5 bg-body-tertiary rounded" style="width: 18rem;">
                <div class="card-body">
                    <div class="col s4">
                        <a href="detail1.php" class="link-dark link-underline-opacity-0 link-underline-opacity-100-hover">
                            <h5 class="card-title">Kode Pembayaran</h5>
                            <p>ABC123</p>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Status</h6>
                            <p class="card-text">Lunas</p>
                        </a>
                    </div>
                </div>
            </div>

            <!-- <div class="card shadow-sm p-3 mb-5 bg-body-tertiary rounded" style="width: 18rem;">
                <div class="card-body">
                    <div class="col s4">
                        <a href="detail2.php" class="link-dark link-underline-opacity-0 link-underline-opacity-100-hover">
                            <h5 class="card-title">Kode Pembayaran</h5>
                            <p>ABC123</p>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Status</h6>
                            <p class="card-text">Lunas</p>
                        </a>
                    </div>
                </div>
            </div> -->

            <!-- <div class="card shadow-sm p-3 mb-5 bg-body-tertiary rounded" style="width: 18rem;">
                <div class="card-body">
                    <div class="col s4">
                        <a href="detail3.php" class="link-dark link-underline-opacity-0 link-underline-opacity-100-hover">
                            <h5 class="card-title">Kode Pembayaran</h5>
                            <p>ABC123</p>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Status</h6>
                            <p class="card-text">Lunas</p>
                        </a>
                    </div>
                </div>
            </div> -->
            
            <!-- <div class="card-panel red">
                <div class="col s4"> 
                    <a href="detail.php">
                        <div class="card-panel green">
                            <b class="white-text">Code Booking</b>
                            <b class="white-text">Status</b>
                            <p>12346</p>
                        </div>
                    </a>
                </div>
            </div> -->

        </div>
    </section>

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