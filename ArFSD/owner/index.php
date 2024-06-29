<?php require 'fc.php'; ?>
<?php
session_start(); // Memulai sesi
if (!isset($_SESSION['loggedin'])) { // Memeriksa apakah pengguna sudah login
  header("Location: ../index.php"); // Mengarahkan ke halaman login jika belum login
  exit;
}
?>


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
    <section id="header_left">
      <img src="images/humberger_menu.png">
      <span>ArFSD</span>
    </section>
    <section id="header_center"></section>
    <section id="header_right">
      <div class="notif">
        <div class="icon_small">
          <img src="images/bell.png">
          <div class="notif_qtt">100</div>
        </div>
        <div class="HR_content popupClose">
          <img src="images/cross.png" class="closePopup" onclick="closePopup(this, event)">
          <div class="HR_wrapper">
            <span><b>Notifikasi</b></span>
            <div class="Content_HR">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore, molestiae culpa iste animi magnam facere porro dolores ex labore dolorum, dolorem consectetur veniam libero perferendis temporibus officia explicabo voluptates sit?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, exercitationem. At, velit quam, ad vel tempora commodi voluptatem ullam provident, nostrum labore sint deleniti earum qui eaque minima consequatur esse.
              Suscipit est sit voluptates obcaecati. Exercitationem temporibus alias facilis placeat, adipisci dicta quo sed blanditiis, eligendi similique reiciendis dignissimos at ipsum provident commodi. Repudiandae quae amet iure accusamus quis vitae.
              Expedita perferendis doloribus aperiam harum nobis veritatis alias hic deleniti dolor. Fugiat commodi, ratione fuga cupiditate et voluptatem quos, architecto praesentium voluptas fugit amet blanditiis maxime laboriosam nesciunt eligendi minima.
              Dolorem perspiciatis nesciunt aspernatur asperiores? Odio in doloribus labore eius corrupti a sunt. Dicta culpa, repellendus totam laudantium illum non possimus et fugit id dolor eum soluta ex sunt dolorum!
              Doloremque deserunt nihil modi? Inventore suscipit odio hic? Aperiam perspiciatis, ullam corporis dolorum autem, reiciendis magnam iure incidunt illo velit qui architecto, fuga possimus adipisci inventore obcaecati! Nihil, quos nemo?
              Sed nam ad id facere maiores totam dolorem aspernatur culpa obcaecati minus, ab incidunt corporis ex nostrum illum ipsa. Distinctio sunt ipsa adipisci eligendi commodi! Dolor eaque perferendis repellat doloribus!
              Aut incidunt quaerat nihil ratione itaque architecto necessitatibus officia amet dolore ea natus eum, inventore excepturi pariatur ipsum, impedit iusto omnis placeat modi expedita repellendus? Quam nam voluptatibus quasi dolores!
              Vel error placeat voluptatum, saepe quidem impedit accusantium pariatur commodi distinctio dicta quod hic ab voluptatem doloremque assumenda ipsum rem perferendis iste nisi provident enim? Debitis ratione eos natus exercitationem?
              Eum voluptate inventore adipisci, dolorem excepturi architecto earum aliquam! Eligendi error obcaecati quos! Dolorum officia nemo nulla non totam optio amet veniam, libero recusandae, sunt minima quae vero ipsa id?
              Alias, quod odit vitae, repellendus temporibus facilis adipisci necessitatibus ut dolorum quo quos perspiciatis? Fugiat animi alias, molestiae nesciunt, vitae consequatur dolorem ipsam ipsa expedita magnam adipisci vel, nisi temporibus?
              Dolores vero delectus eos, unde neque totam voluptatum officiis nulla quisquam sapiente nesciunt aliquid quas, expedita eveniet itaque quasi omnis maiores asperiores voluptatibus saepe at deleniti, beatae iste debitis! Consequatur?
              Omnis aut possimus voluptas tempore beatae minus officiis pariatur quibusdam mollitia animi veniam rerum quisquam, placeat architecto nihil veritatis facere quod, odit ipsam fuga reprehenderit, earum cum nostrum harum! Eaque.
              Dolor numquam nobis nihil debitis at eligendi repellendus! Consequatur voluptatum expedita laudantium. Accusamus nesciunt sapiente sit quo quisquam distinctio illo, rerum culpa mollitia dolor? Laborum pariatur ipsum doloribus adipisci vitae?
              Inventore deleniti expedita laudantium, quidem velit error, perferendis quisquam fuga possimus ea nam blanditiis atque eveniet, dolorem quas quo natus aperiam quia facere eum. Aspernatur officia qui fugit atque pariatur.
              Dolorum aliquam illo voluptas eos soluta ducimus temporibus voluptates, placeat ea dolorem magnam error minima culpa ipsam? Repellat, impedit distinctio? Quas similique ipsam earum, dolores optio excepturi soluta fugiat rem?
              Eaque distinctio doloremque perferendis aliquid porro in, impedit at iste temporibus, exercitationem facere reprehenderit suscipit est modi excepturi recusandae neque dignissimos ut. Quam est rem, expedita incidunt quasi quas nulla.
              Totam consequuntur hic amet quos suscipit mollitia similique libero commodi quae error repudiandae maiores officiis repellat porro nesciunt voluptatum, modi sapiente perferendis earum quidem. Molestiae cupiditate architecto ad optio pariatur?
              Minus, nesciunt dolorum, exercitationem dignissimos totam ipsam tenetur, libero officia doloremque est labore ducimus voluptatibus amet aperiam quis velit quidem. Quas explicabo harum necessitatibus porro qui. Eaque atque beatae eveniet?
              Quia itaque temporibus dignissimos! Provident iusto error, deserunt ad distinctio quaerat, voluptas tempore sunt et perspiciatis odit, necessitatibus odio? In quisquam nulla eos dolores repudiandae ea quis aspernatur veritatis! Perferendis.
              Ea facilis necessitatibus ipsam? Natus sit, culpa dolorum fugiat dolor soluta explicabo qui vero, fuga error pariatur quibusdam ut voluptates praesentium quas suscipit? Repellendus rerum mollitia magni illum quam suscipit.
              Quos, velit et quisquam doloribus debitis odio dolore delectus aliquid, voluptatem excepturi mollitia omnis voluptatibus rerum, exercitationem possimus quaerat? Doloremque reiciendis placeat quos deleniti magnam unde veniam nemo et ipsam?
              Consequuntur voluptas cum veritatis? Dicta, nostrum corrupti cum id numquam incidunt. Dignissimos nesciunt illo ut culpa rem? Veritatis ipsam quisquam, eaque asperiores voluptatum sequi, alias sunt hic, consequuntur exercitationem et.
              Deleniti delectus nam earum, est modi odio commodi quas autem obcaecati nemo cum sit quaerat molestias laboriosam aspernatur doloribus facilis? Animi asperiores placeat praesentium perferendis cum corporis nostrum fuga quibusdam?
              Consequatur eum distinctio vero magnam? Maiores nam error dolorum adipisci nisi corporis, libero molestiae, vero officia quos facilis magni illo commodi beatae blanditiis quasi. Dolorem amet labore accusamus quasi error.
              Blanditiis, modi voluptatum? Suscipit, amet unde optio saepe velit quod repudiandae, veritatis laboriosam eveniet accusamus pariatur quidem ipsam fuga iste in expedita. Odio impedit mollitia iusto sint eius inventore ut?
              Nostrum sint corrupti, quisquam officia quae optio quam provident perspiciatis quibusdam maiores architecto asperiores nemo magni voluptatem, similique quod. Cumque necessitatibus repellendus harum quaerat dolores obcaecati consequatur alias. Mollitia, ex!
              Et delectus numquam amet, nemo sequi accusantium, optio nobis placeat aspernatur hic sed, praesentium eos. Modi voluptatem soluta tenetur ratione non, pariatur natus blanditiis dolores, vel eius fugiat, voluptas expedita.
              Molestias fugit odit inventore, molestiae sapiente modi mollitia ipsam doloremque minus debitis! Minus iusto doloribus modi facilis. Ipsum beatae quam ipsam obcaecati quidem. Minima, dolore. Perspiciatis enim laborum recusandae rem?
              A, possimus perferendis. Cupiditate, ratione ducimus id deleniti quis praesentium voluptatum a optio animi laborum dolorum nisi dicta nihil assumenda quod beatae dolorem aliquam explicabo ipsum iure dignissimos! Doloremque, eius.
              Asperiores enim, officiis corrupti odio accusamus dolorem illo at recusandae esse, dicta, nisi placeat reiciendis! Rem perferendis ut aspernatur sapiente commodi nulla, ratione, consequuntur facilis sequi exercitationem architecto tempore in.
            </div>
          </div>
        </div>
      </div>
      <div class="profile">
        <div class="icon_small">
          <img src=<?php echo $profile_img; ?>>
        </div>
        <div class="HR_content popupClose">
          <img src="images/cross.png" class="closePopup" onclick="closePopup(this, event)">
          <div class="HR_wrapper">
            <img src=<?php echo $profile_img; ?>>
            <span>
              <b style="text-decoration: underline;">Aris Mardiana</b>
              <br>
              <i style="letter-spacing: 2px;">Developer</i>
            </span>
            <div class="Content_HR">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore, molestiae culpa iste animi magnam facere porro dolores ex labore dolorum, dolorem consectetur veniam libero perferendis temporibus officia explicabo voluptates sit?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, exercitationem. At, velit quam, ad vel tempora commodi voluptatem ullam provident, nostrum labore sint deleniti earum qui eaque minima consequatur esse.
              Suscipit est sit voluptates obcaecati. Exercitationem temporibus alias facilis placeat, adipisci dicta quo sed blanditiis, eligendi similique reiciendis dignissimos at ipsum provident commodi. Repudiandae quae amet iure accusamus quis vitae.
              Expedita perferendis doloribus aperiam harum nobis veritatis alias hic deleniti dolor. Fugiat commodi, ratione fuga cupiditate et voluptatem quos, architecto praesentium voluptas fugit amet blanditiis maxime laboriosam nesciunt eligendi minima.
              Dolorem perspiciatis nesciunt aspernatur asperiores? Odio in doloribus labore eius corrupti a sunt. Dicta culpa, repellendus totam laudantium illum non possimus et fugit id dolor eum soluta ex sunt dolorum!
              Doloremque deserunt nihil modi? Inventore suscipit odio hic? Aperiam perspiciatis, ullam corporis dolorum autem, reiciendis magnam iure incidunt illo velit qui architecto, fuga possimus adipisci inventore obcaecati! Nihil, quos nemo?
              Sed nam ad id facere maiores totam dolorem aspernatur culpa obcaecati minus, ab incidunt corporis ex nostrum illum ipsa. Distinctio sunt ipsa adipisci eligendi commodi! Dolor eaque perferendis repellat doloribus!
              Aut incidunt quaerat nihil ratione itaque architecto necessitatibus officia amet dolore ea natus eum, inventore excepturi pariatur ipsum, impedit iusto omnis placeat modi expedita repellendus? Quam nam voluptatibus quasi dolores!
              Vel error placeat voluptatum, saepe quidem impedit accusantium pariatur commodi distinctio dicta quod hic ab voluptatem doloremque assumenda ipsum rem perferendis iste nisi provident enim? Debitis ratione eos natus exercitationem?
              Eum voluptate inventore adipisci, dolorem excepturi architecto earum aliquam! Eligendi error obcaecati quos! Dolorum officia nemo nulla non totam optio amet veniam, libero recusandae, sunt minima quae vero ipsa id?
              Alias, quod odit vitae, repellendus temporibus facilis adipisci necessitatibus ut dolorum quo quos perspiciatis? Fugiat animi alias, molestiae nesciunt, vitae consequatur dolorem ipsam ipsa expedita magnam adipisci vel, nisi temporibus?
              Dolores vero delectus eos, unde neque totam voluptatum officiis nulla quisquam sapiente nesciunt aliquid quas, expedita eveniet itaque quasi omnis maiores asperiores voluptatibus saepe at deleniti, beatae iste debitis! Consequatur?
              Omnis aut possimus voluptas tempore beatae minus officiis pariatur quibusdam mollitia animi veniam rerum quisquam, placeat architecto nihil veritatis facere quod, odit ipsam fuga reprehenderit, earum cum nostrum harum! Eaque.
              Dolor numquam nobis nihil debitis at eligendi repellendus! Consequatur voluptatum expedita laudantium. Accusamus nesciunt sapiente sit quo quisquam distinctio illo, rerum culpa mollitia dolor? Laborum pariatur ipsum doloribus adipisci vitae?
              Inventore deleniti expedita laudantium, quidem velit error, perferendis quisquam fuga possimus ea nam blanditiis atque eveniet, dolorem quas quo natus aperiam quia facere eum. Aspernatur officia qui fugit atque pariatur.
              Dolorum aliquam illo voluptas eos soluta ducimus temporibus voluptates, placeat ea dolorem magnam error minima culpa ipsam? Repellat, impedit distinctio? Quas similique ipsam earum, dolores optio excepturi soluta fugiat rem?
              Eaque distinctio doloremque perferendis aliquid porro in, impedit at iste temporibus, exercitationem facere reprehenderit suscipit est modi excepturi recusandae neque dignissimos ut. Quam est rem, expedita incidunt quasi quas nulla.
              Totam consequuntur hic amet quos suscipit mollitia similique libero commodi quae error repudiandae maiores officiis repellat porro nesciunt voluptatum, modi sapiente perferendis earum quidem. Molestiae cupiditate architecto ad optio pariatur?
              Minus, nesciunt dolorum, exercitationem dignissimos totam ipsam tenetur, libero officia doloremque est labore ducimus voluptatibus amet aperiam quis velit quidem. Quas explicabo harum necessitatibus porro qui. Eaque atque beatae eveniet?
              Quia itaque temporibus dignissimos! Provident iusto error, deserunt ad distinctio quaerat, voluptas tempore sunt et perspiciatis odit, necessitatibus odio? In quisquam nulla eos dolores repudiandae ea quis aspernatur veritatis! Perferendis.
              Ea facilis necessitatibus ipsam? Natus sit, culpa dolorum fugiat dolor soluta explicabo qui vero, fuga error pariatur quibusdam ut voluptates praesentium quas suscipit? Repellendus rerum mollitia magni illum quam suscipit.
              Quos, velit et quisquam doloribus debitis odio dolore delectus aliquid, voluptatem excepturi mollitia omnis voluptatibus rerum, exercitationem possimus quaerat? Doloremque reiciendis placeat quos deleniti magnam unde veniam nemo et ipsam?
              Consequuntur voluptas cum veritatis? Dicta, nostrum corrupti cum id numquam incidunt. Dignissimos nesciunt illo ut culpa rem? Veritatis ipsam quisquam, eaque asperiores voluptatum sequi, alias sunt hic, consequuntur exercitationem et.
              Deleniti delectus nam earum, est modi odio commodi quas autem obcaecati nemo cum sit quaerat molestias laboriosam aspernatur doloribus facilis? Animi asperiores placeat praesentium perferendis cum corporis nostrum fuga quibusdam?
              Consequatur eum distinctio vero magnam? Maiores nam error dolorum adipisci nisi corporis, libero molestiae, vero officia quos facilis magni illo commodi beatae blanditiis quasi. Dolorem amet labore accusamus quasi error.
              Blanditiis, modi voluptatum? Suscipit, amet unde optio saepe velit quod repudiandae, veritatis laboriosam eveniet accusamus pariatur quidem ipsam fuga iste in expedita. Odio impedit mollitia iusto sint eius inventore ut?
              Nostrum sint corrupti, quisquam officia quae optio quam provident perspiciatis quibusdam maiores architecto asperiores nemo magni voluptatem, similique quod. Cumque necessitatibus repellendus harum quaerat dolores obcaecati consequatur alias. Mollitia, ex!
              Et delectus numquam amet, nemo sequi accusantium, optio nobis placeat aspernatur hic sed, praesentium eos. Modi voluptatem soluta tenetur ratione non, pariatur natus blanditiis dolores, vel eius fugiat, voluptas expedita.
              Molestias fugit odit inventore, molestiae sapiente modi mollitia ipsam doloremque minus debitis! Minus iusto doloribus modi facilis. Ipsum beatae quam ipsam obcaecati quidem. Minima, dolore. Perspiciatis enim laborum recusandae rem?
              A, possimus perferendis. Cupiditate, ratione ducimus id deleniti quis praesentium voluptatum a optio animi laborum dolorum nisi dicta nihil assumenda quod beatae dolorem aliquam explicabo ipsum iure dignissimos! Doloremque, eius.
              Asperiores enim, officiis corrupti odio accusamus dolorem illo at recusandae esse, dicta, nisi placeat reiciendis! Rem perferendis ut aspernatur sapiente commodi nulla, ratione, consequuntur facilis sequi exercitationem architecto tempore in.
            </div>
            <a id="pengaturan" href="">
              <img src="images/setting.png">
              <b>Pengaturan</b>
            </a>
            <a id="logout" href="../logout.php">
              <img src="images/log-out.png">
              <b>Logout</b>
            </a>
          </div>
        </div>
      </div>
    </section>
  </header>
  <nav>
    <div>
      <?php foreach ($navList as $i => $nav) { ?>
        <section>
          <span><?php echo $nav[0]; ?></span>
          <?php foreach ($nav[1] as $a => $navA) { ?>
            <a href=<?php echo $navA[2]; ?> class="navLink">
              <img src=<?php echo $navA[1]; ?> alt="">
              <p><?php echo $navA[0]; ?></p>
            </a>
          <?php } ?>
        </section>
      <?php } ?>
    </div>
    <footer>&copy;Aris Mardiana 2024</footer>
    <div id="footer_plus">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem ullam quibusdam quos officiis, accusamus eligendi quis facilis aspernatur quisquam exercitationem aliquid rerum quia facere dolor dolores ab praesentium placeat asperiores.</div>
  </nav>
  <main>
    <iframe src="halamanWeb/home.php" frameborder="0"></iframe>
  </main>
</body>

</html>
<script src="script.js"></script>