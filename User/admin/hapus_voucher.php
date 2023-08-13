<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari URL
$id_voucher = $_GET['id'];
 
// menghapus data dari database
mysqli_query($koneksi, "DELETE FROM voucher WHERE id_voucher='$id_voucher'");
 
// mengalihkan halaman kembali ke data_voucher.php
header("location:data_voucher.php");
?>
