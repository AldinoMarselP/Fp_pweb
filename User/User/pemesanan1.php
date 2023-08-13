<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket Payment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .modal-dialog {
            max-width: 500px;
        }
        .container {
            max-width: 600px;
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
    <div class="container mt-4 mb-4 shadow p-3 mb-5 bg-body-tertiary rounded">
        <h1 class="mb-4">Pemesanan</h1>
        <form id="paymentForm" method="POST" action="proses_pemesanan.php">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" class="form-control" id="nama_pnp" name="nama_pnp" required>
            </div>

            <div class="mb-3">
                <label for="no" class="form-label">No HP:</label>
                <input type="text" class="form-control" id="no_tlp" name="no_tlp" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah Tiket:</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah" min="1" required>
            </div>

            <div class="mb-3 d-flex justify-content-between">
                <a href="busbrowse.php" class="btn btn-secondary">Sebelumnya</a>
                <div>
                    <button type="button" class="btn btn-danger" id="hapusPemesananBtn">HAPUS</button>
                    <button type="submit" class="btn btn-primary" id="pesan">PESAN</button>
                </div>
            </div>
        </form>
    </div>
    

    <!-- Modal -->
    <div class="modal fade" id="paymentDetailsModal" tabindex="-1" aria-labelledby="paymentDetailsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="paymentDetailsModalLabel">Pemesanan Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Nama:</strong> <span id="namaOutput"></span></p>
                    <p><strong>No HP:</strong> <span id="noHpOutput"></span></p>
                    <p><strong>Email:</strong> <span id="emailOutput"></span></p>
                    <p><strong>Jumlah Tiket:</strong> <span id="jumlahTiketOutput"></span></p>
                    <p><strong>Subtotal:</strong> <span id="subtotalOutput"></span></p>
                    <p><strong>Diskon:</strong> <span id="diskonOutput"></span></p>
                    <p><strong>Total:</strong> <span id="totalOutput"></span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <a href="kursi.html"><button type="button" class="btn btn-primary" id="pilihKursiBtn">Pilih Kursi</button></a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modal = new bootstrap.Modal(document.getElementById('paymentDetailsModal'));

            document.getElementById('paymentForm').addEventListener('submit', function(e) {
                e.preventDefault(); // Mencegah form dikirim secara default

                const nama = document.getElementById('nama_pnp').value;
                const noHp = document.getElementById('no_tlp').value;
                const email = document.getElementById('email').value;
                const jumlahTiket = parseInt(document.getElementById('jumlah').value);
                const tarif = 500000; // Ubah sesuai dengan tarif yang digunakan
                const subtotal = jumlahTiket * tarif;
                const diskon = subtotal >= 1 ? subtotal * 0.1 : 0;
                const total = subtotal - diskon;
                
                document.getElementById('namaOutput').textContent = nama;
                document.getElementById('noHpOutput').textContent = noHp;
                document.getElementById('emailOutput').textContent = email;
                document.getElementById('jumlahTiketOutput').textContent = jumlahTiket;
                document.getElementById('subtotalOutput').textContent = 'Rp ' + subtotal.toLocaleString();
                document.getElementById('diskonOutput').textContent = 'Rp ' + diskon.toLocaleString();
                document.getElementById('totalOutput').textContent = 'Rp ' + total.toLocaleString();

                modal.show();

                // Menggunakan AJAX untuk mengirim data ke file PHP yang menangani penyimpanan ke database
                const xhr = new XMLHttpRequest();
                xhr.open('POST', 'proses_pemesanan.php', true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        if (xhr.responseText === 'success') {
                            alert('Pemesanan berhasil!');
                            modal.hide();
                            document.getElementById('nama_pnp').value = '';
                            document.getElementById('no_tlp').value = '';
                            document.getElementById('email').value = '';
                            document.getElementById('jumlah').value = '';
                        } else {
                            alert('Gagal menyimpan data pemesanan: ' + xhr.responseText);
                        }
                    } else {
                        alert('Terjadi kesalahan koneksi!');
                    }
                };
                xhr.send(`nama_pnp=${nama}&no_tlp=${noHp}&email=${email}&jumlah=${jumlahTiket}&subtotal=${subtotal}&diskon=${diskon}&total=${total}`);
            });

            document.getElementById('hapusPemesananBtn').addEventListener('click', function() {
                document.getElementById('nama_pnp').value = '';
                document.getElementById('no_tlp').value = '';
                document.getElementById('email').value = '';
                document.getElementById('jumlah').value = '';
            });
        });
    </script>
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
