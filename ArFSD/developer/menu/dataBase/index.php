<?php require '../../../config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <section id="serverConn">
      <!-- beri informasi apakah berhasil terkoneksi ke server -->
      <?php $conn ? $serverconn = true : $serverconn = false; ?>
      <?php if ($serverconn) { ?>
        <div style="background-color: greenyellow; text-align: center;"><?php echo $servername; ?><br>Connected</div>
      <?php } else { ?>
        <div style="background-color: red; text-align: center;"><?php echo $servername; ?><br> Unconnected</div>
      <?php }; ?>
    </section>
    <span>Data Base</span>
  </header>
  <nav>
    <div id="wrapper">
      <!-- ambil semua database yg ada di lokalhost -->
      <?php $result = mysqli_query($conn, "SHOW DATABASES"); ?>
      <!-- Ceka apakah databasenya ada lebih dari 0(data > 0) -->
      <?php if (mysqli_num_rows($result) > 0) { ?>
        <!-- Tampilakan dalam bentuk table -->
        <table>
          <?php while ($db = mysqli_fetch_assoc($result)) { ?>
            <tr>
              <td><?php echo $db["Database"] ?></td>
            </tr>
          <?php }; ?>
        </table>
      <?php } else { ?>
        <!-- Tampilan alert jika databse tidaka ada  -->
        <script>
          alert("Tidak ada database yang ditemukan.")
        </script>
      <?php }; ?>
    </div>
  </nav>

  <main>
    <div id="wrapper">
      <!-- Pilih database -->
      <?php mysqli_select_db($conn, "ArFSD"); ?>
      <!-- Query untuk mendapatkan daftar tabel -->
      <?php $tables = mysqli_query($conn, "SHOW TABLES"); ?>

      <!-- Loop melalui setiap tabel -->
      <?php while ($table = mysqli_fetch_array($tables)) { ?>

        <?php $tableName = $table[0]; ?>
        <span id="headTable">Table <?php echo $tableName; ?></span>
        <!-- Query untuk mendapatkan data dari tabel -->
        <?php $result = mysqli_query($conn, "SELECT * FROM $tableName"); ?>
        <?php if (mysqli_num_rows($result) > 0) { ?>
          <table id="tableData">
            <tr>
              <!-- Ambil nama kolom menggunakan mysqli_fetch_fields -->
              <?php $fileds = mysqli_fetch_fields($result); ?>
              <?php foreach ($fileds as $filed) { ?>
                <th><?php echo ($filed->name); ?></th>
              <?php }; ?>
            </tr>
            <!-- Tampilkan data dalam bentuk tabel -->
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
              <tr>
                <?php foreach ($row as $cell) { ?>
                  <td><?php echo $cell; ?></td>
                <?php }; ?>
              </tr>
            <?php }; ?>
          </table>
        <?php } else { ?>
          <span>(Tidak ada data di table ini)</span>
          <table id="tableData">
            <tr>
              <!-- Ambil nama kolom menggunakan mysqli_fetch_fields -->
              <?php $fileds = mysqli_fetch_fields($result); ?>
              <?php foreach ($fileds as $filed) { ?>
                <th><?php echo ($filed->name); ?></th>
              <?php }; ?>
            </tr>
            <table>
            <?php }; ?>
          <?php }; ?>
    </div>
  </main>
</body>

</html>