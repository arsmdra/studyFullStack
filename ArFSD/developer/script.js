// API | Burger Menu & Nav Open/Close ====================================================
function OpenCloseNav() {
  const callback = function (mutationList, observer) {
    const nav = document.querySelector("nav");
    for (let mutation of mutationList) {
      if (mutation.target.className == "burgerClose") {
        nav.classList.add("navClose");
        nav.classList.remove("navOpen");
      } else if (mutation.target.className == "burgerOpen") {
        nav.classList.add("navOpen");
        nav.classList.remove("navClose");
      }
    }
  };

  const config = {
    attributes: true,
    attributeFilter: ["class"],
  };
  const emlentTarget = document.querySelector("#header_left img");
  const observer = new MutationObserver(callback);
  observer.observe(emlentTarget, config);
}
// Deklarasi
OpenCloseNav();

// Nav Active====================================================================
function navActive(event) {
  event.preventDefault();
  const targetUrl = event.currentTarget.getAttribute("href");
  document.querySelector(" main iframe").setAttribute("src", targetUrl);
}
function dirname(path) {
  // Split the path by '/' and remove empty strings
  const parts = path.split("/").filter((part) => part.length > 0);
  // Get the second last element which is the directory
  return parts[parts.length - 2] + "/" + parts[parts.length - 1];
}
// Event Nav Active: Menandai tautan navigasi yang aktif berdasarkan URL saat ini
function setupNavEvents() {
  const iframe = document.querySelector("main iframe");

  iframe.addEventListener("load", () => {
    let iframePath = iframe.contentWindow.location.pathname;
    // Dapatkan direktori dari path
    const directory = dirname(iframePath);
    document.querySelectorAll("nav div section a").forEach((navLink) => {
      if (navLink.getAttribute("href") === directory) {
        navLink.classList.add("navActive");
      } else {
        navLink.classList.remove("navActive");
      }
      navLink.addEventListener("click", navActive);
      navLink.addEventListener("touchstart", navActive);
    });
  });
}
// Inisialisasi event navigasi
setupNavEvents();

// API | Nav``/Iframe Content===============================================================``

// Function Humberger Icon================================================================
function HumberIconSmall(burgerImage, navSelector) {
  const nav = document.querySelector(navSelector);
  const burgerIcon = document.querySelector(burgerImage);

  nav.classList.add("navClose");
  burgerIcon.classList.add("burgerClose");

  // Humberger Menu
  window.addEventListener("click", (event) => {
    if (event.target === burgerIcon) {
      burgerIcon.classList.toggle("burgerClose");
      burgerIcon.classList.toggle("burgerOpen");
    } else if (event.target.closest(navSelector)) {
      // jangan lakukan apapun
      return;
    } else {
      burgerIcon.classList.add("burgerClose");
      burgerIcon.classList.remove("burgerOpen");
    }
  });

  // Event Iframe Click-------------------------------------------------
  const iframe = document.querySelector("main iframe");
  iframe.addEventListener("load", () => {
    iframe.contentWindow.document.addEventListener("click", () => {
      burgerIcon.classList.add("burgerClose");
      burgerIcon.classList.remove("burgerOpen");
    });
  });
}
function HumberIconLarge(burgerImage, navSelector) {
  const nav = document.querySelector(navSelector);
  const burgerIcon = document.querySelector(burgerImage);

  nav.classList.add("navOpen");
  burgerIcon.classList.add("burgerOpen");

  // Humberger Menu
  burgerIcon.addEventListener("click", () => {
    burgerIcon.classList.toggle("burgerClose");
    burgerIcon.classList.toggle("burgerOpen");
  });
}

// popup header (header right)====================================================================
function customePopup(iconSelector, contentSelector) {
  window.addEventListener("click", (event) => {
    popupOpenClose(event, iconSelector, contentSelector);
  });
}
function popupOpenClose(event, iconSelector, contentSelector) {
  const icon = document.querySelector(iconSelector);
  const content = document.querySelector(contentSelector);
  if (event.target.closest(iconSelector)) {
    content.classList.toggle("popupClose");
    content.classList.toggle("popupOpen");
  } else if (event.target.closest(contentSelector)) {
    // jangan lakukan apapun
    return;
  } else {
    content.classList.add("popupClose");
    content.classList.remove("popupOpen");
  }

  // Event Iframe Click-------------------------------------------------
  const iframe = document.querySelector("main iframe");
  iframe.contentWindow.document.addEventListener("click", () => {
    content.classList.add("popupClose");
    content.classList.remove("popupOpen");
  });
}
customePopup(".profile .icon_small", ".profile .HR_content");
customePopup(".notif .icon_small", ".notif .HR_content");

function closePopup(h, event) {
  const wrapper = h.parentElement;
  wrapper.classList.add("popupClose");
  wrapper.classList.remove("popupOpen");
}

// hilangkan pindah halaman dari tag <a> pada bilah navigasi =====================================
function perventDefault(event, tagSelector) {
  const elements = document.querySelectorAll(tagSelector);
  for (const element of elements) {
    element.addEventListener(event, function (e) {
      e.preventDefault();
    });
  }
}
perventDefault("click", "nav div section a");

// rubah isi kontent dengan doble klik===============================================================
function changeInnerContent(selector) {
  var oldElement = selector;
  var newElement = document.createElement("textarea");

  // Salin atribut-atribut yang ada dari elemen lama ke elemen baru
  for (var i = 0; i < oldElement.attributes.length; i++) {
    var attr = oldElement.attributes[i];
    newElement.setAttribute(attr.name, attr.value);
  }

  // Salin isi (child nodes) dari elemen lama ke elemen baru
  newElement.type = "text";
  newElement.value = oldElement.innerText;

  // Menyesuaikan font
  newElement.style.fontFamily = "inherit";
  newElement.style.fontSize = "inherit";
  newElement.style.resize = "none";
  newElement.setAttribute("spellcheck", "false");

  // Ganti elemen lama dengan elemen baru dalam DOM
  oldElement.style.display = "none";
  oldElement.parentNode.insertBefore(newElement, oldElement);

  newElement.addEventListener("blur", function () {
    oldElement.innerText = newElement.value;
    oldElement.style.display = "initial";
    newElement.remove();
  });

  newElement.addEventListener("keydown", function (e) {
    if (e.key === "Enter") {
      if (e.shiftKey) {
        // Tambahkan baris baru jika Shift + Enter ditekan
        var start = this.selectionStart;
        var end = this.selectionEnd;
        this.value =
          this.value.substring(0, start) + "\n" + this.value.substring(end);
        this.selectionStart = this.selectionEnd = start + 1;
      } else {
        // Blur elemen jika hanya Enter yang ditekan
        this.blur();
      }
      e.preventDefault(); // Mencegah perilaku default Enter
    } else if (e.key === "Tab") {
      // Tambahkan indentasi jika Tab ditekan
      e.preventDefault();
      var start = this.selectionStart;
      var end = this.selectionEnd;
      var tabCharacter = "    "; // 4 spasi atau gunakan "\t" untuk karakter tab

      // Menambahkan spasi di posisi kursor
      this.value =
        this.value.substring(0, start) +
        tabCharacter +
        this.value.substring(end);

      // Memindahkan posisi kursor
      this.selectionStart = this.selectionEnd = start + tabCharacter.length;
    }
  });
  newElement.focus();
}
function FunctionInputInline() {
  const inputs = document.querySelectorAll("#inputInline");
  // Variabel untuk mengatur durasi sentuhan panjang
  var touchDuration = 1500; // 2 detik
  var touchTimer; // Variabel untuk menyimpan timer
  var isTouchActive = false; // Flag untuk mengatur status sentuhan

  // Fungsi untuk menangani sentuhan mulai
  function handleTouchStart(e) {
    isTouchActive = true;
    touchTimer = setTimeout(function () {
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
  inputs.forEach((input) => {
    input.addEventListener("dblclick", (e) => {
      changeInnerContent(e.target);
    });
    input.addEventListener("touchstart", handleTouchStart);
    input.addEventListener("touchend", handleTouchEnd);
    input.addEventListener("touchmove", handleTouchMove);
  });
}
// Deklarasi
FunctionInputInline();

// \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
switch (true) {
  case innerWidth < 575.99:
    // Deklarasi (posisi function di luar switch)
    HumberIconSmall("#header_left img ", "nav");
    break;
  case innerWidth > 576:
    // Deklarasi (posisi function di luar switch)
    HumberIconLarge("#header_left img ", "nav");
    break;
}
