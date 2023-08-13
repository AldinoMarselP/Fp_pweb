<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Blog</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
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
    <?php
	include 'koneksi.php';
	$id_blog = $_GET['id'];
	$data = mysqli_query($koneksi,"SELECT * from blog where id_blog='$id_blog'");
	while($d = mysqli_fetch_array($data)){
		?>
        <form enctype="multipart/form-data" method="post" action="blogupdate_aksi.php">
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
                                        <a href="pengaduan_user.php" class="nav-link active">Pengaduan User</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pengaduan_mitra.php" class="nav-link active">Pengaduan Mitra</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="row align-items-start">
                <div class="col">
                    <h1 class="ms-5 pt-4 text-center">Ubah Blog</h1>
                <div class="row ms-4 mt-5 justify-content-center">
                    <div class="col-6">
                        <div class="container mt-4">
                            <div class="row align-items-start">
                                <div class="col">
                                    <label for="formFile" class="form-label">Gambar</label>
                                    <input class="form-control" type="file" name="gambar" id="formFile" accept="image/*">
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-start">
                            <div class="col text-center">
                                <?php
                                if (!empty($d['gambar'])) {
                                    echo '<img src="file_foto_blog/' . $d['gambar'] . '" class="img-thumbnail" alt="gambar">';
                                } else {
                                    echo '<img src="placeholder.png" class="img-thumbnail" alt="gambar">';
                                }
                                ?>
                            </div>
                        </div>

                        <div class="container mt-4">
                            <div class="row align-items-start">
                                <div class="col">
                                    <label for="exampleFormControlInput1" class="form-label ms-2">Judul</label>
                                    <input type="hidden" name="id" value="<?php echo $d['id_blog']; ?>">
						            <input type="text" class="form-control" name="judul" value="<?php echo $d['judul']; ?>">
                                </div>
                            </div>
                        </div>
                            
                        <div class="mb-3">
                            <div class="container mt-4">
                                <div class="row align-items-start">
                                    <div class="col">
                                        <label for="konten" class="form-label ms-2">Konten</label>
                                        <textarea class="form-control" name="konten" value="<?php echo $d['konten']; ?>"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                            <div class="mb-3 text-center p-3">
                                <a href="blogpageadmin.php"><button type="submit" class="btn btn-outline-secondary btn-lg">Batal</button></a>
                                <button type="submit" value="SIMPAN" class="btn btn-outline-success btn-lg ms-5">Ubah</button>
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
</body>
</html>