<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$logomitra = $_FILES['logomitra']['name'];
$file_tmp = $_FILES['logomitra']['tmp_name'];
$namaper = $_POST['namaper'];
$namapem = $_POST['namapem'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];

move_uploaded_file($file_tmp, 'file_foto/'.$logomitra);

// menginput data ke database
mysqli_query($koneksi,"insert into mitra values('','$logomitra', '$namaper', '$namapem', '$alamat', '$email')");
 
// mengalihkan halaman kembali ke index.php
header("location:datamitra.php");
 
?>