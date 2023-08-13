<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari URL
$id_blog = $_GET['id'];
 
// menghapus data dari database
mysqli_query($koneksi, "DELETE FROM blog WHERE id_blog='$id_blog'");
 
// mengalihkan halaman kembali
header("location:blogpageadmin.php");
?>