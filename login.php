<?php
// Sertakan file koneksi database
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = $_POST['password'];
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);  // Hash password

        // Query untuk menyimpan data pengguna ke database
        $query = "INSERT INTO users (email, password) VALUES ('$email', '$hashed_password')";
        if (mysqli_query($conn, $query)) {
            echo "<script>alert('Registrasi berhasil!'); window.location.href = 'beranda.php';</script>";
        } else {
            echo "<script>alert('Terjadi kesalahan saat registrasi.');</script>";
        }
    }
}
?>

<!-- Form Registrasi -->
<form method="POST" action="register.php">
    <label for="email">Email:</label>
    <input type="email" name="email" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" name="password" required>
    <br>
    <button type="submit">Daftar</button>
</form>
