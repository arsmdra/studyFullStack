<?php require 'fc.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Utama</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <div class="HLeft">
      <img src="images/humberger_menu.png" class="rotateOpen">
      <span>ArFSD</span>
    </div>
    <div class="HCenter"></div>
    <div class="HRight">
      <div class="profile">
        <img src="images/profile.jpg">
        <div class="closeP">
          <iframe src="profile.php" frameborder="0" height="100%" width="100%"></iframe>
        </div>
      </div>
    </div>
  </header>
  <main>
    <nav class="navOpen">
      <div>
        <?php for ($i = 0; $i < count($navList); $i++) { ?>
          <section>
            <span><?php echo ($navList[$i][0]) ?></span>
            <?php for ($a = 0; $a < count($navList[$i][1]); $a++) { ?>
              <a href="<?php echo ($navList[$i][1][$a][2]) ?>">
                <img src="<?php echo ($navList[$i][1][$a][1]) ?>">
                <p><?php echo ($navList[$i][1][$a][0]) ?></p>
              </a>
            <?php  }; ?>
          </section>
        <?php }; ?>

      </div>
      <footer>&copy;Aris Mardiana 2024</footer>
    </nav>
    <aside>
      <iframe src="halamanWeb/home.php" frameborder="100vw" width="100%" height="100%"></iframe>
    </aside>
  </main>
</body>
<script src="script.js"></script>

</html>