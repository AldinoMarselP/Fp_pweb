<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$namapem = $_POST['namapem'];
$tanggal = $_POST['tanggal'];
$namabus = $_POST['namabus'];
$rute = $_POST['rute'];
$harga = $_POST['harga'];
$status = $_POST['status'];
 
// update data ke database
mysqli_query($koneksi,"update transaksi set namapem='$namapem', tanggal='$tanggal', namabus='$namabus', rute='$rute', harga='$harga', status='$status' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:datatransaksi.php");
 
?>