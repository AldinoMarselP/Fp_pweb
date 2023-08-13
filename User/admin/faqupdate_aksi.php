<?php 
// koneksi database
include 'koneksi.php';

// Menghindari serangan SQL Injection
$id_faq = mysqli_real_escape_string($koneksi, $_POST['id']);
$judul = mysqli_real_escape_string($koneksi, $_POST['judul']);
$jawaban = mysqli_real_escape_string($koneksi, $_POST['jawaban']);

// update data ke database
$query = "UPDATE faq SET judul='$judul', jawaban='$jawaban' WHERE id_faq='$id_faq'";
$result = mysqli_query($koneksi, $query);

// cek jika query update berhasil dijalankan
if ($result) {
    // mengalihkan halaman kembali ke faqpage_manage.php
    header("location: faqpage_manage.php");
    exit();
} else {
    // jika gagal, tampilkan pesan error
    echo "Error updating faq: " . mysqli_error($koneksi);
}
?>