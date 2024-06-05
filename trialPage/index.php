<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div id="main-content">
        <?php include 'content.php'; ?> <!-- Mulai dengan memuat halaman PHP yang berisi konten utama -->
    </div>

    <button id="refreshButton">Refresh Konten</button>

    <script>
        $(document).ready(function() {
            $('#refreshButton').click(function() {
                $('#main-content').load('content.php'); // Memuat ulang konten utama saat tombol diklik
            });
        });
    </script>
</body>

</html>