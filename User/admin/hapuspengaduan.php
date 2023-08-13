<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari URL
$id_pengaduan_user = $_GET['id'];
 
// menghapus data dari database
mysqli_query($koneksi, "DELETE FROM pengaduan_user WHERE id_pengaduan_user='$id_pengaduan_user'");
 
// mengalihkan halaman kembali ke data_voucher.php
header("location:pengaduan_user.php");
?>