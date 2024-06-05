// Tinggi main======================================================================================
window.addEventListener("load", mainHeight);
window.addEventListener("resize", mainHeight);
function mainHeight() {
  document.querySelector("body main").style.height = `${
    innerHeight - document.querySelector("header").offsetHeight
  }px`;
  if (document.querySelector("body main nav").style.position == "static") {
    document.querySelector("body main aside").style.width = `${
      document.querySelector("body main").offsetWidth -
      document.querySelector("body main nav").offsetWidth
    }px`;
  } else {
    document.querySelector("body main aside").style.width = "100%";
  }
}
// Listener Click & terima messege=======================================================================================
window.addEventListener("click", methode);
window.addEventListener("message", methode);
function methode(e) {
  // Profile----------------------------------------------------------------------
  if (e.target == document.querySelector("body header .HRight .profile img")) {
    document
      .querySelector("body header .HRight .profile div")
      .classList.toggle("showP");
    document
      .querySelector("body header .HRight .profile div")
      .classList.toggle("closeP");
  } else if (
    e.target.offsetParent ==
      document.querySelector("body header .HRight .profile div") ||
    e.target == document.querySelector("body header .HRight .profile div")
  ) {
    // jangan lakukan apapun
  } else if (e.data) {
    // ini saat menerima mesage
    document
      .querySelector("body header .HRight .profile div")
      .classList.add("closeP");
    document
      .querySelector("body header .HRight .profile div")
      .classList.remove("showP");
  } else {
    document
      .querySelector("body header .HRight .profile div")
      .classList.add("closeP");
    document
      .querySelector("body header .HRight .profile div")
      .classList.remove("showP");
  }

  // Humberger Menu(img)----------------------------------------------------------------------
  if (e.target == document.querySelector("body header .HLeft img")) {
    // toggle img humberger menunya
    document
      .querySelector("body header .HLeft img")
      .classList.toggle("rotateOpen");
    document
      .querySelector("body header .HLeft img")
      .classList.toggle("rotateClose");

    // toogle navigasinya
    document.querySelector("body main nav").classList.toggle("navOpen");
    document.querySelector("body main nav").classList.toggle("navClose");
  }
}

// Listener Click (a href) =======================================================================================
document.querySelectorAll("body main nav div section a").forEach((a) => {
  if (
    a.getAttribute("href") ==
    document.querySelector("aside iframe").getAttribute("src")
  ) {
    a.classList.add("navActive");
  }
  // Kasih Event-nya
  a.addEventListener("click", (b) => {
    b.preventDefault();
    document
      .querySelector("aside iframe")
      .setAttribute("src", `${a.getAttribute("href")}`);
    // Looping Ulang
    document.querySelectorAll("body main nav div section a").forEach((b) => {
      if (
        b.getAttribute("href") ==
        document.querySelector("aside iframe").getAttribute("src")
      ) {
        b.classList.add("navActive");
      } else if (
        b.getAttribute("href") !==
        document.querySelector("aside iframe").getAttribute("src")
      ) {
        b.classList.remove("navActive");
      }
    });
  });
});

/* Responsive Break Point ================================================================================= */
/*==========================================================================================================*/
