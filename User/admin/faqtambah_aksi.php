<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$judul = $_POST['judul'];
$jawaban = $_POST['jawaban'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into faq values('', '$judul', '$jawaban')");
 
// mengalihkan halaman kembali ke index.php
header("location:faqpage_manage.php");
 
?>