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
      // if (navLink.getAttribute("href") === currentUrl) {
      //   navLink.classList.add("navActive");
      // }
      navLink.addEventListener("click", navActive);
      navLink.addEventListener("touchstart", navActive);
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

// Fungsi untuk menyiapkan event untuk elemen yang bisa dibuka dan ditutup (profil dan notifikasi)
function setupToggleEvent(wrapperSelector, triggerSelector) {
  const wrapper = document.querySelector(wrapperSelector);
  const trigger = document.querySelector(triggerSelector);

  // Menambahkan event listener untuk klik dan sentuhan pada window
  window.addEventListener("click", (event) =>
    handleToggleEvent(event, wrapperSelector, triggerSelector)
  );

  // Menambahkan event listener untuk klik di dalam iframe jika iframe ada
  const iframe = document.querySelector("body main aside iframe");
  if (iframe) {
    iframe.addEventListener("load", () => {
      iframe.contentWindow.document.addEventListener("click", () =>
        closeElementOnIframeClick(wrapperSelector)
      );
    });
  }
}

// Fungsi untuk mengelola logika buka/tutup elemen
function handleToggleEvent(event, wrapperSelector, triggerSelector) {
  const wrapper = document.querySelector(wrapperSelector);
  const trigger = document.querySelector(triggerSelector);

  // Jika target event adalah elemen pemicu (misalnya gambar profil atau notifikasi)
  if (event.target === trigger) {
    // Toggle kelas untuk membuka/menutup elemen
    wrapper.classList.toggle("popupClose");
    wrapper.classList.toggle("popupOpen");
  } else if (event.target.closest(wrapperSelector)) {
    // Jika klik terjadi di dalam elemen wrapper, jangan lakukan apa-apa
    return;
  } else {
    // Jika klik terjadi di luar elemen wrapper, tutup elemen
    wrapper.classList.add("popupClose");
    wrapper.classList.remove("popupOpen");
  }
}

// Fungsi untuk menutup elemen ketika klik terjadi di dalam iframe
function closeElementOnIframeClick(wrapperSelector) {
  const wrapper = document.querySelector(wrapperSelector);
  wrapper.classList.add("popupClose");
  wrapper.classList.remove("popupOpen");
}

// Inisialisasi event untuk profil
setupToggleEvent(
  "body header .HRight .profile #profil",
  "body header .HRight .profile img"
);

// Inisialisasi event untuk notifikasi
setupToggleEvent(
  "body header .HRight .notifikasi #notif",
  "body header .HRight .notifikasi img"
);
// -------------------------------------------------------------------------------
// Close Button (#closeWraperFirst)
function closeWrapper(This, Event) {
  const wrapper = This.parentElement.parentElement;

  wrapper.classList.add("popupClose");
  wrapper.classList.remove("popupOpen");
}
// -------------------------------------------------------------------------------

// Fungsi untuk pindah ke halaman sebelumnya di iframe
function goBack() {
  iframe.contentWindow.history.back();
}

// Fungsi untuk pindah ke halaman setelahnya di iframe
function goForward() {
  iframe.contentWindow.history.forward();
}

// Fungsi untuk me-reload halaman di iframe
function reload() {
  iframe.contentWindow.location.reload();
}
// -------------------------------------------------------------------------------

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

    function handleNavigationEvent(event) {
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
