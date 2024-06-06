window.addEventListener("click", (e) => {
  window.parent.postMessage(`${e.target}`);
});
