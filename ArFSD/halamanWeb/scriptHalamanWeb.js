const navA = document.querySelectorAll("body main nav div section a");
const iframeA = document.querySelector("body main aside iframe");
// Callback yang akan dijalankan saat terjadi perubahan
const mutationCallback = (mutationsList, observer) => {
  mutationsList.forEach((mutation) => {
    if (mutation.type === "attributes") {
      console.log(`Attribute ${mutation.attributeName} was modified.`);
    }
  });
};

// Membuat instance dari MutationObserver
const observer = new MutationObserver(mutationCallback);

// Konfigurasi untuk mengamati perubahan atribut
const config = { attributes: true };

// Elemen-elemen target yang ingin diamati
const targets = document.querySelectorAll("iframe"); // Misalnya semua elemen <iframe>

// Iterasi melalui setiap elemen target dan mulai mengamati
targets.forEach((target) => {
  observer.observe(target, config);
});
