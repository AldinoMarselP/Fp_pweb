<!DOCTYPE html>
<html>

<head>
    <title>Edit voucher</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        h1 {
            text-align: center;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
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
    $id_voucher = $_GET['id'];
    $data = mysqli_query($koneksi, "SELECT * FROM voucher WHERE id_voucher='$id_voucher'");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <form method="post" action="update_voucher.php">
            <div class="container mt-3 mb-3 shadow p-3 mb-3 bg-body rounded">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <h3 class="text-center mb-4">Ubah Data Voucher</h3>
                        <div class="mb-3">
                            <label for="id_voucher" class="form-label">Kode Voucher</label>
                            <input type="text" class="form-control" id="id_voucher" name="id_voucher" value="<?php echo $d['id_voucher']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="diskon" class="form-label">Diskon</label>
                            <input type="text" class="form-control" id="diskon" name="diskon" value="<?php echo $d['diskon']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
                            <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" value="<?php echo $d['tanggal_mulai']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
                            <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" value="<?php echo $d['tanggal_selesai']; ?>" required>
                        </div>

                        <div class="text-center">
                            <a href="data_voucher.php" class="btn btn-secondary">Batal</a>
                            <button type="submit" class="btn btn-success ms-3">Ubah</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    <?php
    }
    ?>
</body>

</html>
