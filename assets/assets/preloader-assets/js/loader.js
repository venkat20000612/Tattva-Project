window.addEventListener("load", () => {
    const preloader = document.getElementById("preloader");
    preloader.classList.add("loaded");

    setTimeout(() => {
      preloader.style.display = "none";
    }, 1000); // Match with the CSS transition delay
  });