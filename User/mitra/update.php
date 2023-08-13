<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$armada = $_FILES['armada']['name'];
$file_tmp = $_FILES['armada']['tmp_name'];
$plat = $_POST['plat'];
$asal = $_POST['asal'];
$berangkat = $_POST['berangkat'];
$tujuan = $_POST['tujuan'];
$tiba = $_POST['tiba'];
$kelas = $_POST['kelas'];
$tarif = $_POST['tarif'];

// Menghapus gambar lama
$old_armada = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT armada FROM rute WHERE id='$id'"))['armada'];
if ($old_armada != '') {
    unlink("file_foto/$old_armada");
}

// Upload gambar baru
move_uploaded_file($file_tmp, 'file_foto/'.$armada);

// update data ke database
mysqli_query($koneksi, "UPDATE rute SET armada='$armada', plat='$plat', asal='$asal', berangkat='$berangkat', tujuan='$tujuan', tiba='$tiba', kelas='$kelas', tarif='$tarif' WHERE id='$id'");
 
// mengalihkan halaman kembali ke datarute.php
header("location:datarute.php");
?> 