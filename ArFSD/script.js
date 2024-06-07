// Event Load & Resize: Menetapkan tinggi untuk elemen main setelah halaman dimuat atau saat ukuran layar berubah
window.addEventListener("load", setMainHeight);
window.addEventListener("resize", setMainHeight);

function setMainHeight() {
  // Menghitung tinggi header
  const headerHeight = document.querySelector("body header").offsetHeight;
  // Menetapkan tinggi elemen main
  document.querySelector("body main").style.height = `${
    innerHeight - headerHeight
  }px`;
}

// Event Nav Active: Menandai tautan navigasi yang aktif berdasarkan URL saat ini
function setupNavEvents() {
  const currentUrl = document
    .querySelector("body main aside iframe")
    .getAttribute("src");
  document
    .querySelectorAll("body main nav div section a")
    .forEach((navLink) => {
      if (navLink.getAttribute("href") === currentUrl) {
        navLink.classList.add("navActive");
      }
      navLink.addEventListener("click", navActive);
      navLink.addEventListener("touchend", navActive);
    });
}

function navActive(event) {
  event.preventDefault();
  const targetUrl = event.currentTarget.getAttribute("href");
  document
    .querySelector("body main aside iframe")
    .setAttribute("src", targetUrl);
  document.querySelectorAll("body main nav div section a").forEach((link) => {
    if (link.getAttribute("href") === targetUrl) {
      link.classList.add("navActive");
    } else {
      link.classList.remove("navActive");
    }
  });
}

// Inisialisasi event navigasi
setupNavEvents();

// Event Profile: Menyiapkan event untuk membuka dan menutup profil
function setupProfile() {
  const profileWrapper = document.querySelector(
    "body header .HRight .profile .wrapper_profil_first "
  );
  // profileWrapper.classList.add("profileClose");

  window.addEventListener("click", toggleProfile);
  window.addEventListener("touchend", toggleProfile);

  const iframe = document.querySelector("body main aside iframe");
  if (iframe) {
    iframe.addEventListener("load", () => {
      iframe.contentWindow.document.addEventListener(
        "click",
        closeProfileOnIframeClick
      );
    });
  }
}

let touchEventProcessed = false;

function toggleProfile(event) {
  if (event.type === "touchend") {
    touchEventProcessed = true;
  } else if (event.type === "click" && touchEventProcessed) {
    touchEventProcessed = false;
    return;
  }

  const profileWrapper = document.querySelector(
    "body header .HRight .profile .wrapper_profil_first"
  );
  if (
    event.target === document.querySelector("body header .HRight .profile img")
  ) {
    profileWrapper.classList.toggle("profileClose");
    profileWrapper.classList.toggle("profileOpen");
  } else if (
    event.target.closest("body header .HRight .profile .wrapper_profil_first")
  ) {
    return;
  } else {
    profileWrapper.classList.add("profileClose");
    profileWrapper.classList.remove("profileOpen");
  }
}

function closeProfileOnIframeClick() {
  const profileWrapper = document.querySelector(
    "body header .HRight .profile .wrapper_profil_first"
  );
  profileWrapper.classList.add("profileClose");
  profileWrapper.classList.remove("profileOpen");
}

// Inisialisasi event profil
setupProfile();

// Device Break Point: Menentukan tata letak berdasarkan lebar layar perangkat
switch (true) {
  // Perangkat dengan lebar layar kurang dari 576px

  case innerWidth <= 575.99:
    // Fungsi untuk menyiapkan event pada navigasi kecil
    function setupSmallNavigation() {
      const hamburgerIcon = document.querySelector(".HLeft img");
      const navigationBar = document.querySelector("body main nav");
      hamburgerIcon.classList.add("rotateClose");
      navigationBar.classList.add("navClose");

      // Menambahkan event listener untuk event click dan touchstart pada window
      window.addEventListener("click", handleNavigationEvent);
      window.addEventListener("touchstart", handleNavigationEvent); // Menggunakan touchstart

      const iframe = document.querySelector("body main aside iframe");
      if (iframe) {
        iframe.addEventListener("load", () => {
          iframe.contentWindow.document.addEventListener(
            "click",
            closeNavigationOnIframeClick
          );
        });
      }
    }

    let touchEventProcessed = false;

    function handleNavigationEvent(event) {
      if (event.type === "touchstart") {
        // Menggunakan touchstart
        touchEventProcessed = true;
      } else if (event.type === "click" && touchEventProcessed) {
        touchEventProcessed = false;
        return;
      }

      const hamburgerIcon = document.querySelector(".HLeft img");
      const navigationBar = document.querySelector("body main nav");

      if (event.target === hamburgerIcon) {
        hamburgerIcon.classList.toggle("rotateOpen");
        hamburgerIcon.classList.toggle("rotateClose");
        navigationBar.classList.toggle("navOpen");
        navigationBar.classList.toggle("navClose");
      } else if (event.target.closest("body main nav")) {
        return;
      } else {
        hamburgerIcon.classList.remove("rotateOpen");
        hamburgerIcon.classList.add("rotateClose");
        navigationBar.classList.remove("navOpen");
        navigationBar.classList.add("navClose");
      }
    }

    function closeNavigationOnIframeClick() {
      const hamburgerIcon = document.querySelector(".HLeft img");
      const navigationBar = document.querySelector("body main nav");
      hamburgerIcon.classList.remove("rotateOpen");
      hamburgerIcon.classList.add("rotateClose");
      navigationBar.classList.remove("navOpen");
      navigationBar.classList.add("navClose");
    }
    // Inisialisasi
    setupSmallNavigation();
    break;

  // Perangkat dengan lebar layar lebih besar atau sama dengan 576px
  case innerWidth >= 576:
    // Set posisi default untuk ikon hamburger menu dan bilah navigasi
    document.querySelector(".HLeft img").classList.add("rotateOpen");
    document.querySelector("body main nav").classList.add("navOpen");

    // Event untuk mengatur tampilan ikon hamburger menu dan bilah navigasi
    document.querySelector(".HLeft img").addEventListener("click", () => {
      document.querySelector(".HLeft img").classList.toggle("rotateOpen");
      document.querySelector(".HLeft img").classList.toggle("rotateClose");
      document.querySelector("body main nav").classList.toggle("navOpen");
      document.querySelector("body main nav").classList.toggle("navClose");
    });
    break;
}
