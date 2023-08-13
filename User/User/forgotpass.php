<?php
// Ambil data dari formulir lupa kata sandi
if(isset($_POST['submit'])){
    $email = $_POST['email'];

    // Proses validasi email, misalnya periksa kecocokan dengan database pengguna

    // Kirim email dengan tautan reset password
    // Kode untuk mengirim email reset password akan berbeda tergantung pada konfigurasi email server Anda
    // Berikut ini adalah contoh sederhana untuk mengirim email menggunakan fungsi mail() PHP:
    $subject = "Reset Password";
    $message = "Klik tautan berikut untuk mereset kata sandi Anda: <a href='http://www.example.com/reset-password.php'>Reset Password</a>";
    $headers = "From: noreply@example.com" . "\r\n" .
               "Reply-To: noreply@example.com" . "\r\n" .
               "Content-type: text/html; charset=UTF-8" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if(mail($email, $subject, $message, $headers)){
        echo "Email reset password telah dikirim ke alamat email Anda.";
    } else {
        echo "Gagal mengirim email reset password. Silakan coba lagi.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
    <link href="stylelogin.css" rel="stylesheet">
</head>
<body>
    <script>
        // Fungsi untuk menampilkan pop-up pesan berhasil atau gagal
        function showPopup(message) {
            alert(message);
        }
        
        // Memeriksa apakah ada pesan kesalahan atau berhasil, lalu menampilkan pop-up sesuai pesan
        <?php if(isset($success_message)): ?>
            window.onload = function() {
                showPopup("<?php echo $success_message; ?>");
            };
        <?php elseif(isset($error_message)): ?>
            window.onload = function() {
                showPopup("<?php echo $error_message; ?>");
            };
        <?php endif; ?>
    </script>
    <div class="container">
        <h2>Lupa Kata Sandi</h2>
        <form method="POST" action="">
            <label for="email">Email:</label>
            <input type="email" name="email" required><br><br>
            <input type="submit" name="submit" value="Kirim">
        </form>
    </div>
</body>
</html>
