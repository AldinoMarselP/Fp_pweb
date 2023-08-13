<!DOCTYPE html>
<html>
<head>
	<title>Mitra Data Trayek | IndoBus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark p-2" style="background-color: rgb(0, 164, 255);">
            <div class="container-fluid">
                <a class="navbar-brand ps-5" href="datarute.php">
                    <img src="Asset 1.png" alt="Logo" height="45" class="d-inline-block align-text-top"> 
                    Mitra
                </a>
                <div class="collapse navbar-collapse justify-content-end" id="nav">
                    <ul class="navbar-nav me-5">
                        <li class="nav-item">
                            <a href="faqpage.php" class="nav-link active">Help</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Menu Lain</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="user.png" width="30px" alt="Account">
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="login.html#">Masuk</a></li>
                                <li><a class="dropdown-item" href="register.html">Daftar</a></l>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="multiuser.html">Keluar</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    <section>
        <div class="container mt-3 mb-3 shadow p-3 mb-3 bg-body rounded">
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
                                <a href="tambah.php" class="nav-link active">Tambah Bus</a>
                            </li>
                            <li class="nav-item">
                                <a href="datarute.php" class="nav-link active">Data Rute Bus</a>
                            </li>
                            <li class="nav-item">
                                <a href="inputiklanmitra.html" class="nav-link active">Pengajuan Iklan</a>
                            </li>
                            <li class="nav-item">
                                <a href="mitracustomer.html" class="nav-link active">Data Pengguna</a>
                            </li>
                            <li class="nav-item">
                                <a href="pengaduan_mitra.php" class="nav-link active">Pengaduan</a>
                            </li>
                            <li class="nav-item">
                                <a href="pengaduanpengguna.php" class="nav-link active">Pengaduan Pelanggan</a>
                            </li>
                            <li class="nav-item">
                                <a href="mitrapembayaran.html" class="nav-link active">Pembayaran</a>
                            </li>
                        </ul>
                        </div>
            </div>
        </div>

            <div class="row align-items-start">
                <div class="col">
                    <b><h1 class="mt-5 text-center">Selamat Datang Mitra IndoBus</h1></b>
                    <hr>
                    <h1 class="ms-5 pt-4 text-center">Data Rute Bus</h1>
                    <div class="row ms-4 mt-5 justify-content-center">
                        <div class="mb-3 text-center">
                            <a href="tambah.php"><button type="submit" class="btn btn-success">+ Tambah</button></a>
                        </div>
                        <div class="col-11">
                            <table class="table text-center table-striped">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>Armada</th>
                                        <th>Plat Nomor</th>
                                        <th>Asal</th>
                                        <th>Berangkat</th>
                                        <th>Tujuan</th>
                                        <th>Tiba</th>
                                        <th>Kelas</th>
                                        <th>Tarif</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                            <?php 
                            include 'koneksi.php';
                            $no = 1;
                            $data = mysqli_query($koneksi,"select * from rute");
                            while($d = mysqli_fetch_array($data)){
                                ?>
                            <tr>
                                <th scope="row"><?php echo $no++; ?></th>
                                <td><img src="file_foto/<?php echo $d['armada']; ?>" style="height: 100px"></td>
                                <td><?php echo $d['plat']; ?></td>
                                <td><?php echo $d['asal']; ?></td>
                                <td><?php echo $d['berangkat']; ?></td>
                                <td><?php echo $d['tujuan']; ?></td>
                                <td><?php echo $d['tiba']; ?></td>
                                <td><?php echo $d['kelas']; ?></td>
                                <td>Rp <?php echo $d['tarif']; ?></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $d['id']; ?>"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
                                    <a href="hapus.php?id=<?php echo $d['id']; ?>"><button type="button" class="btn btn-danger btn-sm">Hapus</button></a>
                                </td>
                            </tr>
                            <?php 
                        }
                        ?>
                        </table>
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
                        <a href="#!" class="link-light link-underline-opacity-0 link-underline-opacity-100-hover">FaQ</a>
                    </li>
                    <li>
                        <a href="#!" class="link-light link-underline-opacity-0 link-underline-opacity-100-hover">Account</a>
                    </li>
                    <li>
                        <a href="#!" class="link-light link-underline-opacity-0 link-underline-opacity-100-hover">About Us</a>
                    </li>
                    <li>
                        <a href="PusatBantuan.html" class="link-light link-underline-opacity-0 link-underline-opacity-100-hover">Pusat Bantuan</a>
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