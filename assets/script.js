document.addEventListener("DOMContentLoaded", () => {
  const header = document.querySelector(".header");
  let lastScroll = 0;

  window.addEventListener("scroll", () => {
    const currentScroll = window.pageYOffset;

    if (currentScroll <= 0) {
      header.classList.remove("hide");
      return;
    }

    if (currentScroll > lastScroll && !header.classList.contains("hide")) {
      // Скролимо вниз — ховаємо хедер
      header.classList.add("hide");
    } else if (currentScroll < lastScroll && header.classList.contains("hide")) {
      // Скролимо вгору — показуємо хедер
      header.classList.remove("hide");
    }

    lastScroll = currentScroll;
  });
});




document.addEventListener("DOMContentLoaded", () => {
  const goTopBtn = document.getElementById("goTopBtn");

  window.addEventListener("scroll", () => {
    if (window.scrollY > 300) {
      goTopBtn.classList.add("show");
    } else {
      goTopBtn.classList.remove("show");
    }
  });

  goTopBtn.addEventListener("click", () => {
    window.scrollTo({
      top: 0,
      behavior: "smooth"
    });
  });
});

