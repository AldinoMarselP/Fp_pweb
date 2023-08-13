<!DOCTYPE html>
<html>
<head>
	<title>Pengaduan Mitra | IndoBus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-dark p-2" style="background-color: rgb(0, 164, 255);">
            <div class="container-fluid">
                <a class="navbar-brand ps-5" href="datamitra.php">
                    <img src="Asset 1.png" alt="Logo" height="45" class="d-inline-block align-text-top"> 
                    Admin
                </a>
                <div class="collapse navbar-collapse justify-content-end" id="nav">
                    <ul class="navbar-nav me-5">
                        <li class="nav-item">
                            <a href="#" class="nav-link active" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Menu Lain</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="user.png" width="30px" alt="Account">
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="http://localhost/pweb/User/admin/login.html#">Masuk</a></li>
                                <li><a class="dropdown-item" href="http://localhost/pweb/User/admin/register.html">Daftar</a></l>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="http://localhost/pweb/User/admin/multiuser.html">Keluar</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section>
    <div id="offcanvas">
            <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Menu Lain</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="offcanvas-list">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="datamitra.php" class="nav-link active">Data Mitra Bus</a>
                            </li>
                            <li class="nav-item">
                                <a href="datatransaksi.php" class="nav-link active">Data Transaksi</a>
                            </li>
                            <li class="nav-item">
                                <a href="data_voucher.php" class="nav-link active">Data Voucher</a>
                            </li>
                            <li class="nav-item">
                                <a href="faqpage_manage.php" class="nav-link active">Data FaQ</a>
                            </li>
                            <li class="nav-item">
                                <a href="blogpageadmin.php" class="nav-link active">Data Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="pengaduan_user.php" class="nav-link active">Pengaduan User</a>
                            </li>
                            <li class="nav-item">
                                <a href="pengaduanmitra.php" class="nav-link active">Pengaduan Mitra</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <form action="pengaduanmitra_aksi.php" method="POST">
            <div class="container mt-3 mb-3 shadow p-3 mb-3 bg-body rounded">
                <div class="row align-items-start">
                    <div class="col">
		            <h1 class="ms-5 pt-4 text-center">Form Pengaduan Mitra</h1>
                        <div class="row ms-4 mt-5 justify-content-center">
                            <div class="col-6">
                                <div class="container mt-4">
                                    <div class="row align-items-start">
                                        <div class="col">
                                            <label for="exampleFormControlInput1" class="form-label ms-2">Nama</label>
                                            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required>
                                        </div>
                                    </div>
                                </div>
                                    
                                <div class="container mt-4">
                                    <div class="row align-items-start">
                                        <div class="col">
                                            <label for="exampleFormControlInput1" class="form-label ms-2">email</label>
                                            <input type="text" class="form-control" name="email" placeholder="nama@contoh.com" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="container mt-4">
                                    <div class="row align-items-start">
                                        <div class="col">
                                            <label for="exampleFormControlInput1" class="form-label ms-2">Detail laporan</label>
                                            <textarea class="form-control" name="laporan" placeholder="tulis permasalahan" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                            <div class="mb-3 text-center p-3">
                                <a href="userhome.php"><button type="button" class="btn btn-outline-secondary btn-lg" id="batal" class="btn btn-outline-secondary btn-lg">Batal</button></a>
                                <button type="submit" class="btn btn-outline-success btn-lg ms-5" value="Simpan" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>