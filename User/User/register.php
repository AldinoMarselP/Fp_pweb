<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bus";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

// Simpan data pendaftaran ke dalam tabel users
if (isset($_POST['submit'])) {
    $fullName = $_POST['fullName'];
    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query untuk menyimpan data pendaftaran ke dalam tabel users
    $sql = "INSERT INTO users (fullName, userName, email, password) VALUES ('$fullName', '$userName', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "Pendaftaran berhasil!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
	// Simpan data pendaftaran ke dalam tabel users
	if (isset($_POST['submit'])) {
    // ...
    
    if ($conn->query($sql) === TRUE) {
        // Pendaftaran berhasil, arahkan ke halaman login
        header("Location: login.html");
        exit; // Penting untuk menghentikan eksekusi kode setelah redirect
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

}
?>



<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
        .container {
            margin-top: 50px;
        }
        .text-center {
            margin-bottom: 30px;
        }
        .form-input {
            margin-bottom: 15px;
        }
        .btn-block {
            width: 100%;
        }
        .text-center.mb-2 {
            margin-top: 20px;
            margin-bottom: 10px;
        }
        .text-center.mb-5 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <!-- <header>
        <nav class="navbar navbar-expand-lg navbar-dark p-2" style="background-color: rgb(0, 164, 255);">
            <a class="navbar-brand ps-5" href="userhome.php">
                <img src="../gambar/Asset 1.png" alt="Logo" height="45" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav"
                aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="nav">
                <ul class="navbar-nav me-5 pe-2">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="true">Travel Add-ons</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="Xperience.html">Xperience</a></li>
                            <li><a class="dropdown-item" href="Voucher.php">Gift Voucher</a></li>
                            <li><a class="dropdown-item" href="Rental bus.html">Bus Rental</a></li>
                            <li><a class="dropdown-item" href="Panduan Wisata.html">Panduan Wisata</a></li>
                            <li><a class="dropdown-item" href="Antar Jemput Pelanggan.html">Antar Jemput Pelanggan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="about.html" class="nav-link active">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="keranjang0.php" class="nav-link active">Keranjang</a>
                    </li>
                    <li class="nav-item">
                        <a href="faqpage.html" class="nav-link active">Help</a>
                    </li>
                    <li class="nav-item">
                        <a href="blog.html" class="nav-link active">Blog</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header> -->

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <!-- Company Logo -->
                <div class="text-center mb-3">
                    <img src="../gambar/Asset 2.png" width="150px">
                </div>
                <div class="text-center mb-4">
                    <h4>Create an account</h4>
                </div>
                <!-- Form -->
                <form method="POST" action="">
                    <!-- Input Box -->
                    <div class="form-input">
                        <span><i class="fa fa-user"></i></span>
                        <input type="text" name="fullName" class="form-control" placeholder="Full Name" required>
                    </div>
                    <div class="form-input">
                        <span><i class="fa fa-user"></i></span>
                        <input type="text" name="userName" class="form-control" placeholder="User Name" required>
                    </div>
                    <div class="form-input">
                        <span><i class="fa fa-envelope"></i></span>
                        <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                    </div>
                    <div class="form-input">
                        <span><i class="fa fa-lock"></i></span>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <!--div class="form-input">
                        <span><i class="fa fa-lock"></i></span>
                        <input type="password" name="confirmPassword" class="form-control" placeholder="Confirm Password" required>
                    </div-->

                    <!-- Register Button -->
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary btn-block" name="submit">Register</button>
                    </div>
                    <div class="text-center mb-2">
                        <div class="text-center mb-3" style="color: #777;">or register with</div>

                        <!-- Facebook Button -->
                        <a href="https://id-id.facebook.com/" class="btn btn-social btn-facebook"><i class="fa fa-facebook"></i></a>

                        <!-- Google Button -->
                        <a href="https://accounts.google.com/" class="btn btn-social btn-google"><i class="fa fa-google"></i></a>

                        <!-- Twitter Button -->
                        <a href="https://twitter.com/" class="btn btn-social btn-twitter"><i class="fa fa-twitter"></i></a>
                    </div>
                    <div class="text-center mb-5" style="color: #777;">Already have an account?
                        <a class="login-link" href="login.php">Login here</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
