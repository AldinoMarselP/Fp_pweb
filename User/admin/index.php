<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Data Trayek | IndoBus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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
                            <a href="#" class="nav-link active">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active">Help</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Menu Lain</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="user.png" width="30px" alt="Account">
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Masuk</a></li>
                                <li><a class="dropdown-item" href="#">Daftar</a></l>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Keluar</a></li>
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
                                <a href="pengaduanmitra.php" class="nav-link active">Pengaduan Mitra</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </section>
</body>
</html>