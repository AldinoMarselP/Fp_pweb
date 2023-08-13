<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$laporan = $_POST['laporan'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into pengaduan_user values('', '$nama', '$email', '$laporan')");
 
// mengalihkan halaman kembali ke index.php
header("location:userhome.php");

?>