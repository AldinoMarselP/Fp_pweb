<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | IndoBus</title>
    <link rel="icon" href="gambar/Asset 2.png">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        .banner {
            background-image: url("../gambar/GunungHarta-1.jpeg");
            height: 70vh;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }

        .banner h2 {
            text-align: center;
            text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.3);
            padding-top: 100px;
            margin-bottom: 90px;
            font-size: 40px;
            color: #fff;
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

    <section>
        <div class="banner">
            <h2>Pesan Tiket Bus di IndoBus!</h2>
            <div class="container mt-3 mb-3 shadow p-3 mb-3 bg-body rounded">
                <div class="row align-items-start ms-4 mt-2">
                    <div class="col">
                        <div class="mb-3">
                            <label for="FormControlInput1" class="form-label ms-2">Asal</label>
                            <input class="form-control me-2" type="search" id="asal" placeholder="Kota Asal"
                                aria-label="Search" value="Jakarta">
                        </div>
                    </div>
                    <div class="col-auto text-center">
                        <div class="mt-4 pt-2">
                            <button class="button1" id="swap">
                                <img src="../gambar/SwapButton.png" width="35px" alt="swap">
                            </button>
                            <script>
                                document.getElementById("swap").onclick =
                                function (e) {
                                    e.preventDefault();
                                    var inputAsal = document.getElementById("asal");
                                    var fromVal = inputAsal.value;

                                    var inputTujuan = document.getElementById("tujuan");
                                    var toVal = inputTujuan.value;

                                    inputAsal.value = toVal;
                                    inputTujuan.value = fromVal;
                                };
                            </script>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="FormControlInput2" class="form-label ms-2">Tujuan</label>
                            <input class="form-control me-2" type="search" id="tujuan" placeholder="Kota Tujuan"
                                aria-label="Search" value="Yogyakarta">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="FormControlInput3" class="form-label ms-2">Tanggal Berangkat</label>
                            <input type="date" class="form-control" id="berangkat" placeholder="berangkat" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <input class="form-check-input ms-1" type="checkbox" value="" id="flexCheck"
                                onclick="myFunction()">
                            <label for="flexCheck" class="form-label ms-1">Tanggal Kembali</label>
                            <input type="date" class="form-control" style="display: none;" id="date" placeholder="pulang">
                        </div>
                        <script>
                            function myFunction() {
                                var CheckBox = document.getElementById("flexCheck");
                                var date = document.getElementById("date");

                                if (CheckBox.checked == true) {
                                    date.style.display = "block";
                                } else {
                                    date.style.display = "none";
                                }
                            }
                        </script>
                    </div>
                    <div class="col-auto">
                        <div class="mb-3">
                            <label for="FormControlInput5" class="form-label ms-2">Penumpang</label>
                            <select class="form-select" id="penumpang" aria-label="Default select">
                                <option value="1">Dewasa</option>
                                <option value="2">Anak-anak</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3 ms-4">
                            <a href="busbrowse.php"><button type="submit" id="cari" class="btn btn-warning btn-lg mt-3 text-light ps-5 pe-5">Cari</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mt-5 pt-5">
        <div class="mb-5 pb-5">
            <h1 class="p-5 text-center">Mitra Kami</h1> 
            <div class="row justify-content-center">
                <div class="col-10 col-md-8 col-lg-6" id="mitralist">
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <?php 
                        include 'koneksi.php';
                        $no = 1;
                        $data = mysqli_query($koneksi,"select * from mitra");
                        while($d = mysqli_fetch_array($data)){
                        ?>
                        <div class="col">
                            <div class="card h-100 hover-shadow">
                                <img src="../admin/file_foto/<?php echo $d['logomitra']; ?>" class="card-img-top" alt="Logo Mitra">
                                <div class="card-body">
                                <h5 class="card-title"><?php echo $d['namaper']; ?></h5>
                                <p class="card-text"><?php echo $d['email']; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
            <hr>
        <div class="content mb-5">
            <h1 class="p-5 text text-center">Rekomendasi Destinasi</h1>
            <div class="container text-center">
                <div class="row">
                    <div class="col align-self-center">
                        <div id="carouselExample" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="../gambar/Yogyakarta_Indonesia_Tugu-Yogyakarta-02.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Yogyakarta</h5>
                                        <p>Malioboro, Keraton, Tamansari</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="../gambar/Lawang_Sewu_in_Semarang_City.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Semarang</h5>
                                        <p>Lawang sewu, Kota lama Semarang, Museum Ranggawarsita</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="../gambar/large_45183_xxfbnnwobhrqeh2lexni8eko4.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Jakarta</h5>
                                        <p>Monas, Dunia Fantasi, Setu Babakan</p>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>
