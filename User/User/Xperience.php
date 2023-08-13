<?php
session_start();
include 'koneksi.php';
$sql = "SELECT * FROM experience";
$hasil = mysqli_query($koneksi, $sql);
?>
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xperience</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <link rel="icon" href="info-wisata-pantai-ancol-lengkap.jpeg">
    <link rel="stylesheet" href="style-tama.css">
    <link rel="stylesheet" href="wisata.css">
    <style>
    input[type="submit"] {
    background-color: #1983d3;
    color: #fff;
    padding: 5px 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    }

    input[type="submit"]:hover {
    background-color: #3da2ef;
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
    <div class="center jumbotron text-center">
        <br><br>
        
        <section>
            <div class="banner">
                <div class="container mt-3 mb-3 shadow p-3 mb-5 bg-body rounded">
                    <div class="row align-items-start ms-4 mt-2">
                        <div class="col">
                            <div class="mb-3">
                            </div>

        
                            <div class="content">
                                <h1 class="p-3 text-lg-start">Jelajahi Kategori di Xperience</h1>
                                <p class="p-3 text-lg-start">Koleksi beberapa destinasi yang tersedia dan banyak di jelajahi oleh penjelajah</p>
                                <div class="container-card">
                                    <!-- Tambahkan konten card di sini -->
                                    <?php
                                if(isset($_POST['upload'])) {
                                    $foto = $_FILES['uploadfile']['name'];
                                    $filetmpname = $_FILES['uploadfile']['tmp_name'];
                                    $folder = 'img/';
                                    move_uploaded_file($filetmpname, $folder.$foto);
                                    $sql = "INSERT INTO `experience` (`foto`) VALUES ('$foto')";
                                    $qry = mysqli_query($koneksi, $sql);
                                    if($qry) {
                                        echo '<script>alert("Foto berhasil di upload");</script>';
                                        echo '<script language = "Javascript">document.location="Xperience.php";</script>';
                                    }
                                    else {
                                        echo '<script>alert("Foto gagal di upload!");</script>';
                                        echo '<script language = "Javascript">document.location="Xperience.php";</script>';
                                    }
                                }
                                ?>
                                <div class="container py-5">
                                            <div class="col-lg-5 col-md-8 mx-auto shadow border bg-white p-4 rounded">
                                            <center><h1>Upload Xperience</h1></center>
                                            <center><h4>Bagikan Foto Anda</h4></center>
                                                <br>
                                                <form method="post" enctype="multipart/form-data">
                                                <div class="form-group mb-3">
                                                    <!-- <label class="form-label" for="foto">Foto</label> <br> -->
                                                    <input type="file" name="uploadfile" required/>
                                                </div>
                                                <div class="form-group mb-3">
                                                <center><input  type="submit" name="upload" value="Upload" /></center>
                                                </div>
                                                </div>
                                                </form>
                                            </div>
                                    </div>
    
                                </div>
                            </div>
                            <div class="container">
    <div class="photo-collage">
        <?php
        $jmlFoto = mysqli_num_rows($hasil);
        if ($jmlFoto > 0) {
            while ($row = mysqli_fetch_assoc($hasil)) {
        ?>
                <div class="photo">
                    <img src="img/<?= $row["foto"]; ?>" alt="">
                    <div class="photo-overlay" style= "font-family: 'Helvetica Neue', sans-serif;">
                    </div>
                </div>
        <?php
            }
        }
        ?>
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
                          <a href="faqpage.html" class="link-light link-underline-opacity-0 link-underline-opacity-100-hover">FaQ</a>
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