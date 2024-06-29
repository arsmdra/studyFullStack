<?php
// Proses penggantian email
if (isset($_POST['changeEmail']) && isset($_SESSION['loggedin'])) {
    $newEmail = $_POST['newEmail'];
    $currentEmail = $_SESSION['email'];

    // Periksa apakah email baru sudah ada
    $sql_check = "SELECT * FROM account WHERE email = ?";
    $stmt_check = $conn->prepare($sql_check);
    $stmt_check->bind_param("s", $newEmail);
    $stmt_check->execute();
    $result_check = $stmt_check->get_result();

    if ($result_check->num_rows > 0) {
        // Email baru sudah terdaftar
        echo "<script>
        alert('Email baru sudah terdaftar. Silakan gunakan email lain.');
    </script>";
    } else {
        // Mengganti email di database
        $sql = "UPDATE account SET email = ? WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $newEmail, $currentEmail);
        if ($stmt->execute()) {
            $_SESSION['email'] = $newEmail; // Perbarui sesi email
            echo "<script>
        alert('Email berhasil diganti.');
    </script>";
        } else {
            echo "<script>
        alert('Gagal mengganti email: " . $stmt->error . "');
    </script>";
        }
    }
}

// Proses logout
if (isset($_GET['logout'])) {
    session_unset(); // Menghapus semua variabel sesi
    session_destroy(); // Menghancurkan sesi
    header("Location: " . $_SERVER['PHP_SELF']); // Kembali ke halaman utama
    exit;
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if (isset($_SESSION['loggedin'])) { ?>
        <header id="formHeader">Selamat Datang, <?php echo $_SESSION['email']; ?></header>
        <form id="changeEmailForm" action="" method="post">
            <label for="newEmail">Email Baru:</label>
            <input type="email" id="newEmail" name="newEmail" required>
            <button type="submit" name="changeEmail">Ganti Email</button>
        </form>
        <a href="?logout=true">Logout</a>
    <?php } ?>
</body>

</html>