<!DOCTYPE html>
<html>
<head>
	<title>Data Transaksi</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark p-2" style="background-color: rgb(0, 164, 255);">
            <a class="navbar-brand ps-5" href="datarute.php">
                <img src="Asset 1.png" alt="Logo" height="45" class="d-inline-block align-text-top">
                Mitra
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav"
                aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="nav">
                <ul class="navbar-nav me-5 pe-2">
                    <li class="nav-item">
                        <a href="faqpage.php" class="nav-link active">Help</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link active" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Menu Lain</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
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
        </nav>
    </header>

	<section>
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from rute where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php" enctype="multipart/form-data">
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
                        <h1 class="ms-5 pt-4 text-center">Ubah Data Bus</h1>
                    <div class="row ms-4 mt-5 justify-content-center">
                        <div class="col-6">
                            <div class="container mt-4">
                                <div class="row align-items-start">
                                    <div class="col">
                                        <label for="formFile" class="form-label">Foto Armada</label>
                                        <input class="form-control" type="file" name="armada" id="formFile" accept="image/*">
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-start">
                                <div class="col text-center">
                                    <?php
                                    if (!empty($d['armada'])) {
                                        echo '<img src="file_foto/' . $d['armada'] . '" class="img-thumbnail" alt="Armada">';
                                    } else {
                                        echo '<img src="placeholder.png" class="img-thumbnail" alt="Armada">';
                                    }
                                    ?>
                                </div>
                            </div>

                            <div class="container mt-4">
                                <div class="row align-items-start">
                                    <div class="col">
                                        <label for="exampleFormControlInput1" class="form-label ms-2">Plat Nomor</label>
                                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						                <input type="text" class="form-control" name="plat" value="<?php echo $d['plat']; ?>">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <div class="container mt-4">
                                    <div class="row align-items-start">
                                        <div class="col">
                                            <label for="inputAsal" class="form-label ms-2">Asal</label>
                                            <input type="text" class="form-control" name="asal" value="<?php echo $d['asal']; ?>">
                                        </div>
                                        <div class="col">
                                            <label for="waktuBerangkat" class="form-label ms-2">Jam Berangkat</label>
                                            <input type="time" class="form-control" name="berangkat" value="<?php echo $d['berangkat']; ?>">
                                        </div>
                                    </div>
                                </div>

                            <div class="mb-3">
                                <div class="container mt-4">
                                    <div class="row align-items-start">
                                        <div class="col">
                                            <label for="inputTujuan" class="form-label ms-2">Tujuan</label>
                                            <input type="text" class="form-control" name="tujuan" value="<?php echo $d['tujuan']; ?>">
                                        </div>
                                        <div class="col">
                                            <label for="waktuTiba" class="form-label ms-2">Jam Tiba</label>
                                            <input type="time" class="form-control" name="tiba" value="<?php echo $d['tiba']; ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="container mt-4">
                                    <div class="row align-items-start">
                                        <div class="col">
                                            <label for="exampleFormControlInput1" class="form-label ms-2">Kelas</label>
                                            <select class="form-select" name="kelas" aria-label="Default select" value="<?php echo $d['kelas']; ?>">
                                                <option value="VIP">VIP</option>
                                                <option value="Ekse">Eksekutif</option>
                                                <option value="Eko">Ekonomi</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="container mt-4">
                                    <div class="row align-items-start">
                                        <div class="col">
                                            <label for="inputTarif" class="form-label ms-2">Tarif (Rp)</label>
                                            <input type="number" class="form-control" name="tarif" value="<?php echo $d['tarif']; ?>">
                                        </div>
                                    </div>
                                </div>

                            </div>
                                <div class="mb-3 text-center p-3">
                                    <a href="index.php"><button type="submit" class="btn btn-outline-secondary btn-lg">Batal</button></a>
                                    <button type="submit" value="SIMPAN" class="btn btn-outline-success btn-lg ms-5">Ubah</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
		</form>
		<?php 
	}
	?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
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