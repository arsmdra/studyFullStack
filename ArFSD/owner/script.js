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

// API | Nav Active====================================================================
function NavActive() {
  const iframe = document.querySelector("main iframe");
  const navList = document.querySelectorAll("nav div section a");

  const callback = function (mutationList, observer) {
    for (let mutation of mutationList) {
      const urlIframe = mutation.target.getAttribute("src");
      for (const nav of navList) {
        if (urlIframe === nav.getAttribute("href")) {
          navList.forEach((N) => {
            if (N.getAttribute("href") == urlIframe) {
              N.classList.add("navActive");
            } else {
              N.classList.remove("navActive");
            }
          });
        }
      }
    }
  };

  const config = {
    attributes: true,
    attributeFilter: ["src"],
  };

  const emlentTarget = iframe;

  const observer = new MutationObserver(callback);

  observer.observe(emlentTarget, config);
}

// Event Nav Active: Menandai tautan navigasi yang aktif berdasarkan URL saat ini
function setupNavEvents() {
  const currentUrl = document.querySelector("main iframe").getAttribute("src");
  document.querySelectorAll("nav div section a").forEach((navLink) => {
    if (navLink.getAttribute("href") === currentUrl) {
      navLink.classList.add("navActive");
    }
    navLink.addEventListener("click", navActive);
    navLink.addEventListener("touchstart", navActive);
  });
}

function navActive(event) {
  event.preventDefault();
  const targetUrl = event.currentTarget.getAttribute("href");
  document.querySelector(" main iframe").setAttribute("src", targetUrl);
}

// Inisialisasi event navigasi
setupNavEvents();
NavActive();

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
