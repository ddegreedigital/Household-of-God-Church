document.addEventListener("DOMContentLoaded", () => {
  // ✅ NAVBAR TOGGLER
  const toggler = document.getElementById("navbar-toggler");
  const navbarNav = document.getElementById("navbarNav");
  if (toggler && navbarNav) {
    toggler.addEventListener("click", () => {
      navbarNav.classList.toggle("show");
      toggler.innerHTML = navbarNav.classList.contains("show")
        ? '<span class="lni lni-close"></span>'
        : '<span class="navbar-toggler-icon"></span>';
    });
  }

  // ✅ DROPDOWN SUBMENU
  let lastMode = null;
  function setupDropdownBehavior() {
    const isDesktop = window.innerWidth >= 992;
    if (isDesktop === lastMode) return; // prevent rebinding
    lastMode = isDesktop;

    document.querySelectorAll(".dropdown-submenu").forEach((item) => {
      const link = item.querySelector("a");
      const submenu = item.querySelector(".dropdown-menu");

      // Reset events by cloning
      const newLink = link.cloneNode(true);
      link.replaceWith(newLink);

      if (isDesktop) {
        item.onmouseenter = () => submenu.classList.add("show");
        item.onmouseleave = () => submenu.classList.remove("show");
      } else {
        newLink.onclick = (e) => {
          e.preventDefault();
          e.stopPropagation();

          // Close other submenus
          document
            .querySelectorAll(".dropdown-submenu .dropdown-menu.show")
            .forEach((openMenu) => {
              if (openMenu !== submenu) openMenu.classList.remove("show");
            });

          submenu.classList.toggle("show");
        };
      }
    });
  }

  // Outside click closes all
  document.addEventListener("click", (e) => {
    if (!e.target.closest(".dropdown-submenu")) {
      document
        .querySelectorAll(".dropdown-submenu .dropdown-menu.show")
        .forEach((submenu) => submenu.classList.remove("show"));
    }
  });

  // Run on load + resize
  setupDropdownBehavior();
  window.addEventListener("resize", setupDropdownBehavior);

  // ✅ CUSTOM INDICATOR FOR MAIN CAROUSEL
  const churchCarousel = document.getElementById("churchCarousel");
  const indicators = document.querySelectorAll(".custom-indicator");

  if (churchCarousel && indicators.length) {
    const churchCarouselObj = new bootstrap.Carousel(churchCarousel);

    churchCarousel.addEventListener("slid.bs.carousel", function () {
      const activeIndex = Array.from(
        churchCarousel.querySelectorAll(".carousel-item")
      ).findIndex((item) => item.classList.contains("active"));

      indicators.forEach((indicator, index) => {
        indicator.classList.toggle("active", index === activeIndex);
      });
    });

    indicators.forEach((indicator) => {
      indicator.addEventListener("click", function () {
        const targetSlide = this.getAttribute("data-bs-slide-to");
        churchCarouselObj.to(targetSlide);
      });
    });
  }

  // ✅ SERMON CAROUSEL PAGINATION
  const sermonCarousel = document.getElementById("sermonCarousel");
  const paginationText = document.getElementById("paginationText");

  if (sermonCarousel && paginationText) {
    const totalItems =
      sermonCarousel.querySelectorAll(".carousel-item").length || 0;

    function updatePagination() {
      const activeIndex =
        Array.from(sermonCarousel.querySelectorAll(".carousel-item")).findIndex(
          (item) => item.classList.contains("active")
        ) + 1;

      paginationText.textContent = `◄ ${activeIndex} ${
        activeIndex < totalItems ? activeIndex + 1 : ""
      } ... ${totalItems - 1} ${totalItems} ►`;
    }

    sermonCarousel.addEventListener("slid.bs.carousel", updatePagination);
    updatePagination();
  }
});
