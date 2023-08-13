<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari URL
$id_faq = $_GET['id'];
 
// menghapus data dari database
mysqli_query($koneksi, "DELETE FROM faq WHERE id_faq='$id_faq'");
 
// mengalihkan halaman kembali ke data_voucher.php
header("location:faqpage_manage.php");
?>