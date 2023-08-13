<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_voucher = $_POST['id_voucher'];
$diskon = $_POST['diskon'];
$tanggal_mulai = $_POST['tanggal_mulai'];
$tanggal_selesai = $_POST['tanggal_selesai'];
 
// menginput data ke database
mysqli_query($koneksi, "INSERT INTO voucher (id_voucher, diskon, tanggal_mulai, tanggal_selesai) VALUES ('$id_voucher', '$diskon', '$tanggal_mulai', '$tanggal_selesai')");
 
// mengalihkan halaman kembali ke index.php
header("location:data_voucher.php");

?>