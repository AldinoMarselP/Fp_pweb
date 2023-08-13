<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_blog = $_POST['id'];
$gambar = $_FILES['gambar']['name'];
$file_tmp = $_FILES['gambar']['tmp_name'];
$judul = $_POST['judul'];
$konten = $_POST['konten'];
 
$old_gambar = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT gambar FROM blog WHERE id_blog='$id_blog'"))['gambar'];
if ($old_gambar != '') {
    unlink("file_foto_blog/$old_gambar");
}

move_uploaded_file($file_tmp, 'file_foto_blog/'.$gambar);

// update data ke database
mysqli_query($koneksi,"update blog set gambar='$gambar', judul='$judul', konten='$konten' where id_blog='$id_blog'");
 
// mengalihkan halaman kembali ke index.php
header("location:blogpageadmin.php");
 
?> 