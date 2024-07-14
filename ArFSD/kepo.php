<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Double Tap and Long Touch</title>
  <style>
    .myElement {
      width: 100px;
      height: 100px;
      background-color: lightblue;
      margin: 10px;
      display: inline-block;
      user-select: none; /* Disable text selection on double tap */
    }
  </style>
</head>
<body>
  <!-- Elemen-elemen dengan event listener -->
  <div class="myElement"></div>
  <div class="myElement"></div>
  <div class="myElement"></div>

  <script>
    // Variabel untuk mengatur durasi sentuhan panjang
    var touchDuration = 3000; // 3 detik
    var touchTimer; // Variabel untuk menyimpan timer
    var isTouchActive = false; // Flag untuk mengatur status sentuhan

    // Fungsi untuk menangani sentuhan mulai
    function handleTouchStart(e) {
      isTouchActive = true;
      touchTimer = setTimeout(function() {
        if (isTouchActive) {
          changeInnerContent(e.target);
        }
      }, touchDuration);
    }

    // Fungsi untuk menangani sentuhan berakhir
    function handleTouchEnd(e) {
      isTouchActive = false;
      if (touchTimer) {
        clearTimeout(touchTimer); // Menghapus timer
      }
    }

    // Fungsi untuk menangani sentuhan bergerak
    function handleTouchMove(e) {
      isTouchActive = false;
      if (touchTimer) {
        clearTimeout(touchTimer); // Menghapus timer
      }
    }

    // Fungsi untuk mengganti konten
    function changeInnerContent(element) {
      // Contoh: Mengganti teks elemen
      element.innerHTML = "Content Changed";
    }

    // Fungsi untuk menambahkan event listener pada setiap elemen
    function addEventListenersToElements(selector) {
      var elements = document.querySelectorAll(selector);
      elements.forEach(function(element) {
        element.addEventListener("dblclick", function(e) {
          if (!isTouchActive) {
            changeInnerContent(e.target);
          }
        });
        element.addEventListener("touchstart", handleTouchStart);
        element.addEventListener("touchend", handleTouchEnd);
        element.addEventListener("touchmove", handleTouchMove);
      });
    }

    // Panggil fungsi untuk menambahkan event listener ke elemen-elemen dengan class 'myElement'
    addEventListenersToElements('.myElement');
  </script>
</body>
</html>
