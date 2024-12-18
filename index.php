<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <!-- Bagian Gambar -->
        <div class="image-section">
            <img src="images/Bone.jpeg" alt="Gambar Wisata">
        </div>

        <!-- Bagian Login -->
        <div class="login-section">
            <div class="login-content">
                <div class="login-header">
                    <img src="images/Saly.png" alt="Logo" class="logo">
                </div>
                <h2>Masuk</h2>
                <form action="login.php" method="POST">
                    <div class="input-box">
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="input-box">
                        <input type="password" name="password" placeholder="Kata sandi" required>
                    </div>
                    <button type="submit" class="btn">MASUK</button>
                </form>
                <a href="#" class="forgot-password">Lupa kata sandi</a>
                <p>ATAU MASUK DENGAN</p>
                <div class="social-icons">
                    <a href="#"><img src="images/googgle.png" alt="Google"></a>
                    <a href="#"><img src="images/facebook.png" alt="Facebook"></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
