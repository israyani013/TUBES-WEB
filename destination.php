<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinasi - MYLingka.com</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .destination-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 20px;
        }
        .destination-card {
            border: 1px solid #ccc;
            border-radius: 8px;
            margin: 10px;
            width: calc(30% - 20px);
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s;
        }
        .destination-card img {
            width: 100%;
            height: auto;
        }
        .destination-card h3 {
            margin: 10px;
            font-size: 18px;
        }
        .destination-card p {
            margin: 10px;
            font-size: 16px;
            color: #333;
        }
        .options-container {
            display: flex;
            justify-content: center;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            margin: 20px 0;
        }
        .option-card {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 15px;
            margin: 0 10px;
            text-align: center;
            width: 150px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .option-card img {
            width: 40px;
            height: 40px;
        }
        .option-card h4 {
            margin: 10px 0;
            font-size: 16px;
        }
        .option-card p {
            color: black; /* Mengatur warna teks menjadi hitam */
        }
        .highlight {
            background-color: #f0f0f0; /* Warna sorot untuk tempat wisata yang sesuai */
        }
    </style>
</head>
<body>

<!-- Header -->
<header>
    <div class="header-content">
        <h1>MYLingka.com</h1>
        <nav>
            <ul>
                <li><a href="beranda.php">Beranda</a></li>
                <li><a href="destinasi.php">Destinasi</a></li>
                <li><a href="mytrip.php">Buat Trip</a></li> <!-- Added hyperlink here -->
            </ul>
        </nav>
    </div>
</header>

<section>
    <div style="display: flex; justify-content: center; align-items: center; flex-wrap: wrap;">
        <div class="option-card">
            <img src="images/Island On Water.png" alt="Durasi Liburan">
            <h4>Durasi Liburan</h4>
            <input type="text" id="durasi" placeholder="Masukkan Durasi" style="width: 100%; padding: 8px; margin-top: 10px;">
        </div>
        <div class="option-card">
            <img src="images/Tall Person.png" alt="Jumlah Orang">
            <h4>Jumlah Orang</h4>
            <input type="number" id="jumlah_orang" placeholder="Masukkan Jumlah" style="width: 100%; padding: 8px; margin-top: 10px;">
        </div>
        <div class="option-card">
            <img src="images/Paper Money.png" alt="Estimasi Budget">
            <h4>Estimasi Budget</h4>
            <input type="text" id="estimasi_budget" placeholder="Masukkan Budget" style="width: 100%; padding: 8px; margin-top: 10px;">
        </div>
        <a href="mytrip.php" id="submitBtn" style="margin-left: 10px; padding: 10px; background-color: blue; color: white; text-decoration: none; border-radius: 4px; width: 100px; text-align: center; display: inline-block;">Kirim</a>
    </div>
</section>

<!-- Tempat Wisata Populer -->
<section class="destination-container">
    <h2 style="width: 100%; text-align: center;">Tempat Wisata Populer</h2>
    <div class="destination-card" data-budget="20000">
        <img src="images/Hutan_Mangrove.jpg" alt="Hutan Mangrove">
        <h3>Hutan Mangrove</h3>
        <p>Rp200.000</p>
    </div>
    <div class="destination-card" data-budget="20000">
        <img src="images/pantai_membuku.jpg" alt="Pantai Membuku">
        <h3>Pantai Membuku</h3>
        <p>Rp200.000</p>
    </div>
    <div class="destination-card" data-budget="15000">
        <img src="images/Pantai_Bone.jpg" alt="Pantai Bone">
        <h3>Pantai Bone</h3>
        <p>Rp200.000</p>
    </div>
    <div class="destination-card" data-budget="15000">
        <img src="images/Banda_Kawasa.webp" alt="Banda Kawasa">
        <h3>Banda Kawasa</h3>
        <p>Rp150.000</p>
    </div>
    <div class="destination-card" data-budget="20000">
        <img src="images/Danau-Moloku.webp" alt="Danau Moloku">
        <h3>Danau Moloku</h3>
        <p>Rp250.000</p>
    </div>
    <div class="destination-card" data-budget="20000">
        <img src="images/Matarombia.jpeg" alt="Matarombia">
        <h3>Matarombia</h3>
        <p>Rp200.000</p>
    </div>
    <div class="destination-card" data-budget="20000">
        <img src="images/Air_Terjun_La_Ocu.jpg" alt="Air Terjun La Ocu">
        <h3>Air Terjun La Ocu</h3>
        <p>Rp200.000</p>
    </div>
    <div class="destination-card" data-budget="20000">
        <img src="images/Benteng_Kulisusu.jpg" alt="Benteng Kulisusu">
        <h3>Benteng Kulisusu</h3>
        <p>Rp250.000</p>
    </div>
    <div class="destination-card" data-budget="20000">
        <img src="images/Pemandian_Air_Panas_Ee_Karede.webp" alt="Pemandian Eengkapala">
        <h3>Pemandian Eengkapala</h3>
        <p>Rp230.000</p>
    </div>
    <div class="destination-card" data-budget="20000">
        <img src="images/Kampung_Wisata_Desa_Mandala_dan_Desa_Nanua_Jaya.webp" alt="Kampung Wisata Desa Mandala dan Desa Nanua Jaya">
        <h3>Kampung Wisata Desa Mandala dan Desa Nanua Jaya</h3>
        <p>Rp150.000</p>
    </div>
    <div class="destination-card" data-budget="20000">
        <img src="images/Pantai_Mowuru.jpg" alt="Pantai Mowuru">
        <h3>Pantai Mowuru</h3>
        <p>Rp250.000</p>
    </div>
    <div class="destination-card" data-budget="20000">
        <img src="images/Pemandian_Air_Panas_Ee_Karede.webp" alt="Pemandian Air Panas Ee Karede">
        <h3>Pemandian Air Panas Ee Karede</h3>
        <p>Rp200.000</p>
    </div>
    <div class="destination-card" data-budget="20000">
        <img src="images/Pasarambolaea.jpg" alt="Pasarambolaea">
        <h3>Pasarambolaea</h3>
        <p>Rp200.000</p>
    </div>
    <div class="destination-card" data-budget="20000">
        <img src="images/Air terjun wakawea buton utara.jpeg" alt="Air terjun wakawea buton utara">
        <h3>Air terjun wakawea buton utara</h3>
        <p>Rp150.000</p>
    </div>
</section>

<!-- Footer -->
<footer class="footer-section" style="background-color: #F6F6F6; padding: 40px; text-align: center;">
    <div class="footer-content">
        <h1>MYLingka.com</h1>
        <div class="footer-links">
            <div class="footer-column">
                <h3>Layanan</h3>
                <p>Saran Destinasi</p>
                <p>Hubungi Kami</p>
            </div>
            <div class="footer-column">
                <h3>Dukungan</h3>
                <p>Tentang Getyourtrip.Com</p>
                <p>Ketentuan</p>
                <p>Kebijakan Privasi</p>
            </div>
            <div class="footer-column">
                <h3>Ikuti Kami Di</h3>
                <p>Instagram</p>
                <p>Facebook</p>
            </div>
        </div>
    </div>
</footer>

<script>
    document.getElementById('submitBtn').addEventListener('click', function() {
        const budgetInput = parseInt(document.getElementById('estimasi_budget').value.replace(/[^0-9]/g, '')); // Mengambil nilai budget
        const tourSpots = document.querySelectorAll('.destination-card');

        // Hapus highlight dari semua tempat wisata sebelum menambahkan yang baru
        tourSpots.forEach(spot => {
            spot.classList.remove('highlight'); // Hapus highlight dari semua
        });

        if (!isNaN(budgetInput) && budgetInput > 0) { // Pastikan budget valid
            tourSpots.forEach(spot => {
                const spotBudget = parseInt(spot.getAttribute('data-budget')); // Mengambil budget dari data attribute

                if (budgetInput >= spotBudget) {
                    spot.classList.add('highlight'); // Tambahkan highlight untuk yang sesuai
                }
            });
        } else {
            alert("Masukkan budget yang valid!"); // Pesan jika input tidak valid
        }
    });
</script>

</body>
</html>