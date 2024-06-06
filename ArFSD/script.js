// Event Load & Resize Setting Tinggi Main
window.addEventListener("load", tinggiMain);
window.addEventListener("resize", tinggiMain);
function tinggiMain(f) {
  // Untuk tinggi main tag, main kita akan setting degan javascript
  document.querySelector("body main").style.height = `${
    innerHeight - document.querySelector("body header").offsetHeight
  }px`;
}

// Event Nav Active
document.querySelectorAll("body main nav div section a").forEach((navL) => {
  if (
    navL.getAttribute("href") ==
    document.querySelector("body main aside iframe").getAttribute("src")
  ) {
    navL.classList.add("navActive");
  }

  navL.addEventListener("click", navActive);
  navL.addEventListener("touchend", navActive);
  function navActive(p) {
    p.preventDefault();
    document
      .querySelector("body main aside iframe")
      .setAttribute("src", `${p.target.getAttribute("href")}`);
    document.querySelectorAll("body main nav div section a").forEach((c) => {
      if (
        c.getAttribute("href") ==
        document.querySelector("body main aside iframe").getAttribute("src")
      ) {
        c.classList.add("navActive");
      } else {
        c.classList.remove("navActive");
      }
    });
  }
});

// Device Break Point================================================================================================================
switch (true) {
  /* Extra small devices (phones, less than 576px) ------------------------------------------------------------------------*/
  case innerWidth <= 575.99:
    // posisi default rotate image humberger menu
    document.querySelector(".HLeft img").classList.add("rotateClose");
    // posisi default bilah navigasi
    document.querySelector("body main nav").classList.add("navClose");
    // Event Humberger menu dan Bilah Navigasinya
    window.addEventListener("click", eventNav);
    window.addEventListener("message", eventNav);
    window.addEventListener("touchend", eventNav);
    function eventNav(e) {
      if (e.target == document.querySelector(".HLeft img")) {
        document.querySelector(".HLeft img").addEventListener("click", () => {
          document.querySelector(".HLeft img").classList.toggle("rotateOpen");
          document.querySelector(".HLeft img").classList.toggle("rotateClose");

          document.querySelector("body main nav").classList.toggle("navOpen");
          document.querySelector("body main nav").classList.toggle("navClose");
        });
      } else if (
        e.target.offsetParent == document.querySelector("body main nav")
      ) {
        // biarin jangan lakukan apapun
      } else if (e.data) {
        if (e.origin === window.location.origin) {
          console.log(e.data);
          document.querySelector(".HLeft img").classList.remove("rotateOpen");
          document.querySelector(".HLeft img").classList.add("rotateClose");

          document.querySelector("body main nav").classList.remove("navOpen");
          document.querySelector("body main nav").classList.add("navClose");
        } else {
          alert("Sumber pesan tidak dikenal:", e.origin);
        }
      } else {
        document.querySelector(".HLeft img").classList.remove("rotateOpen");
        document.querySelector(".HLeft img").classList.add("rotateClose");

        document.querySelector("body main nav").classList.remove("navOpen");
        document.querySelector("body main nav").classList.add("navClose");
      }
    }
    break;
  /* Small devices (tablets, 576px and up) --------------------------------------------------------------------------------*/
  case innerWidth >= 576:
    // posisi default rotate image humberger menu
    document.querySelector(".HLeft img").classList.add("rotateOpen");
    // posisi default bilah navigasi
    document.querySelector("body main nav").classList.add("navOpen");
    // Event Humberger menu dan Bilah Navigasinya
    document.querySelector(".HLeft img").addEventListener("click", () => {
      document.querySelector(".HLeft img").classList.toggle("rotateOpen");
      document.querySelector(".HLeft img").classList.toggle("rotateClose");

      document.querySelector("body main nav").classList.toggle("navOpen");
      document.querySelector("body main nav").classList.toggle("navClose");
    });
    break;
}
// End Device Break Point=====================================================================================================================================
