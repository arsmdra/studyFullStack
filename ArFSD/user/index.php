<?php
session_start(); // Memulai sesi
if (!isset($_SESSION['loggedin'])) { // Memeriksa apakah pengguna sudah login
    header("Location: ../index.php"); // Mengarahkan ke halaman login jika belum login
    exit;
}

// Memeriksa apakah nama file sama
if ($_SESSION['role'] !== basename(__DIR__)) {
    header("Location: ../" . $_SESSION['role']); // Mengarahkan ke halaman login jika belum login
    exit;
}
?>

<p>user</p>
<a href="../logout.php">logout</a>