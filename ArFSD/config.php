<?php
// Informasi koneksi ke database
$servername = "localhost"; // Nama server database
$username = "root"; // Username database
$password = ""; // Password database
$dbname = "ArFSD"; // Nama database

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa apakah koneksi berhasil
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
