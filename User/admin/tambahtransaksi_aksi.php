<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$namapem = $_POST['namapem'];
$tanggal = $_POST['tanggal'];
$namabus = $_POST['namabus'];
$rute = $_POST['rute'];
$harga = $_POST['harga'];
$status = $_POST['status'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into transaksi values('','$namapem', '$tanggal', '$namabus', '$rute','$harga', '$status')");
 
// mengalihkan halaman kembali ke index.php
header("location:datatransaksi.php");
 
?>