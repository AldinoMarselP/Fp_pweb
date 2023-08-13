<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pengaduan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-dark p-2" style="background-color: rgb(0, 164, 255);">
            <div class="container-fluid">
                <a class="navbar-brand ps-5" href="datamitra.php">
                    <img src="Asset 1.png" alt="Logo" height="45" class="d-inline-block align-text-top">
                    Mitra
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
                </div>
        <div class="container shadow p-3 mb-5 mt-4 bg-body-tertiary rounded">
            <h1 class="mb-5 text-center">Detail Laporan</h1>
            <div class="row justify-content-center">
                <div class="col-6">
                    <?php
                    include 'koneksi.php';
                    $id_pengaduan_mitra = $_GET['id'];
                    $data = mysqli_query($koneksi, "SELECT * FROM pengaduan_mitra WHERE id_pengaduan_mitra='$id_pengaduan_mitra'");
                    while ($d = mysqli_fetch_array($data)) {
                        ?>
                        <h6><?php echo $d['nama']; ?></h6>
                        <p><?php echo $d['laporan']; ?></p>
                        <hr>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
</body>
</html>