<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$armada = $_FILES['armada']['name'];
$file_tmp = $_FILES['armada']['tmp_name'];
$plat = $_POST['plat'];
$asal = $_POST['asal'];
$berangkat = $_POST['berangkat'];
$tujuan = $_POST['tujuan'];
$tiba = $_POST['tiba'];
$kelas = $_POST['kelas'];
$tarif = $_POST['tarif'];

move_uploaded_file($file_tmp, 'file_foto/'.$armada);
 
// menginput data ke database
mysqli_query($koneksi,"insert into rute values('', '$armada', '$plat', '$asal', '$berangkat', '$tujuan', '$tiba', '$kelas', '$tarif')");
 
// mengalihkan halaman kembali ke index.php
header("location:datarute.php");
 
?>