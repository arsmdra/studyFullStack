<?php
$servername = 'localhost';
$username = 'root';
$password = '';
// koneksi ke database
$conn = mysqli_connect($servername, $username, $password);
// Memeriksa apakah koneksi berhasil
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
