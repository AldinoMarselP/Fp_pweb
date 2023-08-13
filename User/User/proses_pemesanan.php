<?php
// koneksi database
include 'koneksi.php';
 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_pnp = $_POST['nama_pnp'];
    $no_tlp = $_POST['no_tlp'];
    $email = $_POST['email'];
    $jumlah = $_POST['jumlah'];
    $subtotal = $_POST['subtotal'];
    $diskon = $_POST['diskon'];
    $total = $_POST['total'];

    // Proses penyimpanan data ke database atau langkah selanjutnya
    $query = "INSERT INTO pemesanan (nama_pnp, no_tlp, email, jumlah, subtotal, diskon, total) 
              VALUES ('$nama_pnp', '$no_tlp', '$email', $jumlah, $subtotal, $diskon, $total)";
    $result = mysqli_query($koneksi, $query);
    if ($result) {
        echo "success";
    } else {
        echo mysqli_error($koneksi);
    }
}
?>
