<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Trip - Filter</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            display: flex;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .filter {
            flex: 1;
            padding-right: 20px;
            border-right: 1px solid #ccc;
        }

        .filter h2 {
            text-align: left;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .checkbox-group {
            display: flex;
            flex-wrap: wrap;
        }

        .checkbox-group label {
            flex: 0 0 50%;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        input[type="checkbox"] {
            margin-right: 10px;
        }

        .submit-btn {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        .submit-btn:hover {
            background-color: #0056b3;
        }

        .destination-grid {
            flex: 2;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            margin-left: 20px;
        }

        .destination-item {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 10px;
            text-align: center;
            transition: transform 0.2s;
        }

        .destination-item:hover {
            transform: scale(1.05);
        }

        .destination-item img {
            max-width: 100%;
            border-radius: 8px;
        }

        .destination-item h3 {
            margin: 10px 0;
        }

        .destination-item p {
            color: #555;
        }

        .destination-item .price {
            font-weight: bold;
            color: #007bff;
        }

        .footer {
            text-align: center;
            padding: 20px;
            background-color: #f1f1f1;
            border-top: 1px solid #ccc;
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
                <li><a href="destination.php">Destinasi</a></li>
                <li><a href="mytrip.php">Buat Trip</a></li>
            </ul>
        </nav>
    </div>
</header>

<div class="container">
    <div class="filter">
        <h2>Filter</h2>
        <div class="form-group">
            <label for="durasi">Durasi Liburan</label>
            <input type="text" id="durasi" placeholder="02 Hari">
        </div>
        
        <div class="form-group">
            <label for="budget">Estimasi Budget</label>
            <input type="text" id="budget" placeholder="Rp 5.000.000">
        </div>
        
        <div class="form-group">
            <label for="jumlah_orang">Jumlah Orang</label>
            <input type="text" id="jumlah_orang" placeholder="02 Orang">
        </div>
        </div>

    <div class="destination-grid">
        <div class="destination-item">
            <img src="images/Pasarambolaea.jpg" alt="Destinasi 1">
            <h3>Pasarambolaea</h3>
            <p class="price">Rp 500.000</p>
        </div>
        <div class="destination-item">
            <img src="images/Hutan_Mangrove.jpg" alt="Destinasi 2">
            <h3>Hutan Mangrove</h3>
            <p class="price">Rp 300.000</p>
        </div>
        <div class="destination-item">
            <img src="images/Pantai_Mowuru.jpg" alt="Destinasi 3">
            <h3>Pantai Mowuru</h3>
            <p class="price">Rp 400.000</p>
        </div>
        <div class="destination-item">
            <img src="images/Banda_Kawasa.webp" alt="Destinasi 4">
            <h3>Banda Kawasa</h3>
            <p class="price">Rp 350.000</p>
        </div>
        <div class="destination-item">
            <img src="images/Pantai_Bone.jpg" alt="Destinasi 5">
            <h3> Pantai Bone</h3>
            <p class="price">Rp 450.000</p>
        </div>
        <div class="destination-item">
            <img src="images/pantai_membuku.jpg" alt="Destinasi 5">
            <h3> Pantai Mowuru</h3>
            <p class="price">Rp 450.000</p>
        </div>
    </div>
</div>

</body>
</html>