<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$logomitra = $_FILES['logomitra']['name'];
$file_tmp = $_FILES['logomitra']['tmp_name'];
$namaper = $_POST['namaper'];
$namapem = $_POST['namapem'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
 
$old_logomitra = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT logomitra FROM mitra WHERE id='$id'"))['logomitra'];
if ($old_logomitra != '') {
    unlink("file_foto/$old_logomitra");
}

move_uploaded_file($file_tmp, 'file_foto/'.$logomitra);

// update data ke database
mysqli_query($koneksi,"update mitra set logomitra='$logomitra', namaper='$namaper', namapem='$namapem', alamat='$alamat', email='$email' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:datamitra.php");
 
?> 