window.addEventListener("click", (e) => {
  const message = "Halo dari iframe!";
  // Mengirim pesan ke dokumen induk
  window.parent.postMessage(message, window.location.origin);
});
