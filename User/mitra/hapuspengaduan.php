<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari URL
$id_pengaduan_mitra = $_GET['id'];
 
// menghapus data dari database
mysqli_query($koneksi, "DELETE FROM pengaduan_mitra WHERE id_pengaduan_mitra='$id_pengaduan_mitra'");
 
// mengalihkan halaman kembali ke data_voucher.php
header("location:pengaduan_mitra.php");
?>