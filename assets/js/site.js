(function () {
  "use strict";

  const menuToggle = document.querySelector(".menu-toggle");
  const navigation = document.querySelector(".site-nav");
  const contrastToggle = document.querySelector(".accessibility-toggle");

  if (menuToggle && navigation) {
    menuToggle.addEventListener("click", function () {
      const isOpen = menuToggle.getAttribute("aria-expanded") === "true";
      menuToggle.setAttribute("aria-expanded", String(!isOpen));
      navigation.classList.toggle("is-open", !isOpen);
    });

    navigation.addEventListener("click", function (event) {
      if (event.target.closest("a") && window.innerWidth <= 980) {
        menuToggle.setAttribute("aria-expanded", "false");
        navigation.classList.remove("is-open");
      }
    });

    window.addEventListener("resize", function () {
      if (window.innerWidth > 980) {
        menuToggle.setAttribute("aria-expanded", "false");
        navigation.classList.remove("is-open");
      }
    });
  }

  if (contrastToggle) {
    contrastToggle.addEventListener("click", function () {
      const isPressed = contrastToggle.getAttribute("aria-pressed") === "true";
      contrastToggle.setAttribute("aria-pressed", String(!isPressed));
      document.body.classList.toggle("jay-high-contrast", !isPressed);
    });
  }
})();
