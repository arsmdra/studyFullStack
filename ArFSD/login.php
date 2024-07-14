<?php
session_start(); // Memulai sesi di bagian paling atas
include 'config.php'; // Menghubungkan ke file konfigurasi database
mysqli_select_db($conn, 'ArFSD'); // Memilih database


if (isset($_SESSION['loggedin'])) { // Memeriksa apakah pengguna sudah login
    header("Location: " . $_SESSION['role']); // Mengarahkan ke halaman utama sesuai dengan rolenya
    exit;
}

$eror_password = false;
$eror_email = false;
$registration_success = false;

// Proses login
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Mencari pengguna dengan email yang sesuai
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // Memeriksa apakah password sesuai
        if (password_verify($password, $user['password'])) {
            $_SESSION['loggedin'] = true; // Menyimpan status login di sesi
            $_SESSION['email'] = $email; // Menyimpan email di sesi
            $_SESSION['role'] = $user['role']; // Menyimpan role di sesi
            header("Location: " . $user['role']); // Refresh halaman
            exit;
        } else {
            $eror_password = true; // Password salah
        }
    } else {
        $eror_email = true; // Email tidak ditemukan
    }
}

// Proses registrasi
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $newemail = $_POST['newemail'];
    $password = $_POST['newPassword'];
    $newPassword = password_hash($_POST['newPassword'], PASSWORD_DEFAULT); // Meng-hash password

    // Periksa apakah email sudah ada
    $sql_check = "SELECT * FROM users WHERE email = ?";
    $stmt_check = $conn->prepare($sql_check);
    $stmt_check->bind_param("s", $newemail);
    $stmt_check->execute();
    $result_check = $stmt_check->get_result();

    if ($result_check->num_rows > 0) {
        // Email sudah terdaftar
        echo "<script>alert('Email sudah terdaftar. Silakan gunakan email lain.');</script>";
    } else {
        // Menyimpan pengguna baru di database
        $sql = "INSERT INTO users (username, email, show_password, password) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $username, $newemail, $password, $newPassword);
        if ($stmt->execute()) {
            $registration_success = true;
        } else {
            echo "<script>alert('Pendaftaran gagal: " . $stmt->error . "');</script>";
        }
    }
}

// Proses penggantian email
if (isset($_POST['changeEmail']) && isset($_SESSION['loggedin'])) {
    $newEmail = $_POST['newEmail'];
    $currentEmail = $_SESSION['email'];

    // Periksa apakah email baru sudah ada
    $sql_check = "SELECT * FROM users WHERE email = ?";
    $stmt_check = $conn->prepare($sql_check);
    $stmt_check->bind_param("s", $newEmail);
    $stmt_check->execute();
    $result_check = $stmt_check->get_result();

    if ($result_check->num_rows > 0) {
        // Email baru sudah terdaftar
        echo "<script>alert('Email baru sudah terdaftar. Silakan gunakan email lain.');</script>";
    } else {
        // Mengganti email di database
        $sql = "UPDATE userss SET email = ? WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $newEmail, $currentEmail);
        if ($stmt->execute()) {
            $_SESSION['email'] = $newEmail; // Perbarui sesi email
            echo "<script>alert('Email berhasil diganti.');</script>";
        } else {
            echo "<script>alert('Gagal mengganti email: " . $stmt->error . "');</script>";
        }
    }
}

// Proses logout
if (isset($_GET['logout'])) {
    session_unset(); // Menghapus semua variabel sesi
    session_destroy(); // Menghancurkan sesi
    header("Location: " . $_SERVER['PHP_SELF']); // Kembali ke halaman utama
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login, Registrasi, Ganti Email, dan Logout</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #5CAF50;
            font-family: Arial, sans-serif;
        }

        main {
            outline: 3px solid;
            max-width: 300px;
            width: 100%;
            padding: 20px;
            background-color: #dcdcdc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        header {
            text-align: center;
            font-weight: bold;
            font-size: large;
            margin-bottom: 10px;
        }

        form {
            display: grid;
            grid-gap: 10px;
        }

        label {
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"] {
            padding: 8px;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
        }

        button {
            padding: 10px;
            font-size: 1em;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: green;
        }

        .password-toggle {
            position: relative;
            cursor: pointer;
            user-select: none;
        }

        .password-toggle img {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            width: 20px;
            height: auto;
        }

        .toggle-link {
            text-align: center;
            margin-top: 10px;
            cursor: pointer;
            color: blue;
        }

        a {
            text-decoration: none;
            color: blue;
        }

        a:hover,
        button:hover {
            color: white;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <main>
        <header id="formHeader">Login</header>
        <?php if ($eror_password) { ?>
            <span style="display:block; background-color: red; margin:5px 0; padding: 2px; outline:1px solid; font-weight:bold;">Password anda salah</span>
        <?php } else if ($eror_email) { ?>
            <span style="display:block; background-color: red; margin:5px 0; padding: 2px; outline:1px solid; font-weight:bold;">Email anda salah</span>
        <?php } ?>

        <form id="loginForm" action="" method="post">
            <label for="email">E-Mail:</label>
            <input type="text" id="email" name="email" required>

            <label for="password">Kata Sandi:</label>
            <div class="password-toggle">
                <input type="password" id="password" name="password" required>
                <img src="eye-close.png" alt="Tampilkan Kata Sandi" id="togglePassword">
            </div>

            <button type="submit" name="login">Masuk</button>
        </form>

        <div class="toggle-link" id="showRegister">Belum punya akun? Daftar di sini</div>

        <form id="registerForm" action="" method="post" style="display: none;">
            <label for="username">Nama Pengguna:</label>
            <input type="text" id="username" name="username" required>

            <label for="newemail">Email:</label>
            <input type="email" id="newemail" name="newemail" required>

            <label for="newPassword">Kata Sandi:</label>
            <div class="password-toggle">
                <input type="password" id="newPassword" name="newPassword" required>
                <img src="eye-close.png" alt="Tampilkan Kata Sandi" id="toggleNewPassword">
            </div>

            <button type="submit" name="register">Daftar</button>
        </form>

        <div class="toggle-link" id="showLogin" style="display: none;">Sudah punya akun? Masuk di sini</div>
        <?php if ($registration_success) { ?>
            <script>
                alert("Pendaftaran berhasil! Silakan login.");
                document.getElementById('showLogin').click();
            </script>
        <?php } ?>

    </main>

    <script>
        // Fungsi untuk toggle visibility password
        var togglePassword = document.getElementById('togglePassword');
        var passwordField = document.getElementById('password');
        var toggleNewPassword = document.getElementById('toggleNewPassword');
        var newPasswordField = document.getElementById('newPassword');

        togglePassword.addEventListener('click', function() {
            var type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);
            this.src = type === 'password' ? 'eye-close.png' : 'eye-open.png';
        });

        toggleNewPassword.addEventListener('click', function() {
            var type = newPasswordField.getAttribute('type') === 'password' ? 'text' : 'password';
            newPasswordField.setAttribute('type', type);
            this.src = type === 'password' ? 'eye-close.png' : 'eye-open.png';
        });

        // Fungsi untuk toggle form login dan registrasi
        var showRegister = document.getElementById('showRegister');
        var showLogin = document.getElementById('showLogin');
        var loginForm = document.getElementById('loginForm');
        var registerForm = document.getElementById('registerForm');
        var formHeader = document.getElementById('formHeader');

        showRegister.addEventListener('click', function() {
            loginForm.style.display = 'none';
            registerForm.style.display = 'grid';
            showRegister.style.display = 'none';
            showLogin.style.display = 'block';
            formHeader.textContent = 'Daftar';
        });

        showLogin.addEventListener('click', function() {
            registerForm.style.display = 'none';
            loginForm.style.display = 'grid';
            showLogin.style.display = 'none';
            showRegister.style.display = 'block';
            formHeader.textContent = 'Login';
        });
    </script>
</body>

</html>