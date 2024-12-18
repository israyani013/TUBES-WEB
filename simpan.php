<?php
include 'db_config.php'; // Mengimpor file konfigurasi database

// Mengambil data dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $durasi = $_POST['durasi'];
    $jumlah_orang = $_POST['jumlah_orang'];
    $estimasi_budget = $_POST['estimasi_budget'];

    // Menyimpan data ke dalam tabel
    $sql = "INSERT INTO liburan (durasi, jumlah_orang, estimasi_budget) VALUES ('$durasi', '$jumlah_orang', '$estimasi_budget')";

    // Mengeksekusi query dan memeriksa hasilnya
    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Menutup koneksi
    $conn->close();
}
?>