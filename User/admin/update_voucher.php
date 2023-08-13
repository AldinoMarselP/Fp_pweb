<?php
include 'koneksi.php';

// Menangkap data yang dikirim dari form
$id_voucher = $_POST['id_voucher'];
$diskon = $_POST['diskon'];
$tanggal_mulai = $_POST['tanggal_mulai'];
$tanggal_selesai = $_POST['tanggal_selesai'];

// Update data ke database
$query = "UPDATE voucher SET diskon='$diskon', tanggal_mulai='$tanggal_mulai', tanggal_selesai='$tanggal_selesai' WHERE id_voucher='$id_voucher'";
$result = mysqli_query($koneksi, $query);

// Cek jika query update berhasil dijalankan
if ($result) {
    // Jika berhasil, redirect ke halaman data_voucher.php
    header("location:data_voucher.php");
} else {
    // Jika gagal, tampilkan pesan error
    echo "Error updating voucher: " . mysqli_error($koneksi);
}
?>