<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$gambar = $_FILES['gambar']['name'];
$file_tmp = $_FILES['gambar']['tmp_name'];
$judul = $_POST['judul'];
$konten = $_POST['konten'];

move_uploaded_file($file_tmp, 'file_foto_blog/'.$gambar);

// insert data ke database
$query = "INSERT INTO blog (gambar, judul, konten) VALUES ('$gambar', '$judul', '$konten')";
$result = mysqli_query($koneksi, $query);

// cek apakah query berhasil dijalankan
if ($result) {
    // mengalihkan halaman kembali ke index.php jika berhasil
    header("location: blogpageadmin.php");
    exit();
} else {
    // tampilkan pesan error jika query gagal dijalankan
    echo "Error: " . mysqli_error($koneksi);
}
?>