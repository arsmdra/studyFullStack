<?php require 'fc.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <div class="HLeft">
      <img src="images/humberger_menu.png">
      <span>ArFSD</span>
    </div>
    <div class="HCenter"></div>
    <div class="HRight">
      <div class="profile">
        <img src="images/profile.jpg">
        <div>
          <iframe src="profile.php" frameborder="0" height="100%" width="100%"></iframe>
        </div>
      </div>
    </div>
  </header>
  <main>
    <nav>
      <div>
        <?php foreach ($navList as $i => $nav) { ?>
          <section>
            <span><?php echo $nav[0] ?></span>
            <?php foreach ($nav[1] as $a => $navA) { ?>
              <a href="<?php echo $navA[2] ?>" class="navLink">
                <img src="<?php echo $navA[1] ?>" alt="">
                <p><?php echo $navA[0] ?></p>
              </a>
            <?php }; ?>
          </section>
        <?php }; ?>
      </div>
      <footer>&copy; Aris Mardiana 2024 </footer>
    </nav>
    <aside><iframe src="halamanWeb/home.php" frameborder="0"></iframe></aside>
  </main>

</body>

</html>
<script src="script.js"></script>