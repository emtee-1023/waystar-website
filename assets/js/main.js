(function () {
  /**
   * Dynamically load and render services from JSON
   */
  document.addEventListener("DOMContentLoaded", function () {
    // Dynamically render testimonials from JSON and initialize Swiper
    const testimonialsWrapper = document.getElementById(
      "testimonials-swiper-wrapper"
    );
    if (testimonialsWrapper) {
      fetch("assets/data/testimonials.json?v=" + Date.now())
        .then((response) => response.json())
        .then((testimonials) => {
          testimonialsWrapper.innerHTML = testimonials
            .map(
              (t, idx) => `
                  <div class="swiper-slide">
                    <div class="testimonial-card" data-aos="zoom-in" data-aos-delay="${
                      100 + (idx % 3) * 100
                    }">
                      <div class="testimonial-header">
                        <div class="user-avatar">
                          <img src="${t.avatar}" alt="Profile Image" />
                        </div>
                        <div class="user-info">
                          <h3>${t.name}</h3>
                          <span class="user-role">${t.role}</span>
                          <div class="rating">
                            ${'<i class="bi bi-star-fill"></i>'.repeat(
                              t.rating
                            )}
                          </div>
                        </div>
                      </div>
                      <div class="testimonial-content">
                        <div class="quote-mark"><i class="bi bi-quote"></i></div>
                        <p>${t.quote}</p>
                      </div>
                      <div class="testimonial-footer">
                        <div class="company-badge"><i class="bi bi-building"></i><span>${
                          t.company
                        }</span></div>
                        <div class="verified-badge"><i class="bi bi-patch-check-fill"></i><span>Verified</span></div>
                      </div>
                    </div>
                  </div>
                `
            )
            .join("");
          // Initialize Swiper after testimonials are rendered
          setTimeout(() => {
            if (window.Swiper) {
              new Swiper(".testimonials-slider", {
                loop: true,
                speed: 600,
                autoplay: { delay: 4000 },
                slidesPerView: 1,
                centeredSlides: true,
                spaceBetween: 20,
                pagination: {
                  el: ".swiper-pagination",
                  type: "bullets",
                  clickable: true,
                },
                breakpoints: {
                  768: { slidesPerView: 1.5, spaceBetween: 30 },
                  1200: { slidesPerView: 3, spaceBetween: 40 },
                },
              });
            }
          }, 100);
        });
    }
    // Dynamically render portfolio filter categories and items from JSON, then initialize Isotope
    const portfolioFilters = document.getElementById("portfolio-filters");
    const portfolioList = document.getElementById("portfolio-list");
    if (portfolioFilters && portfolioList) {
      fetch("assets/data/portfolio.json?v=" + Date.now())
        .then((response) => response.json())
        .then((projects) => {
          // Render filters
          const categories = [...new Set(projects.map((p) => p.category))];
          let filtersHtml =
            '<li data-filter="*" class="filter-active">All Projects</li>';
          categories.forEach((cat) => {
            const filterClass = `.filter-${cat
              .toLowerCase()
              .replace(/[^a-z0-9]+/g, "-")}`;
            filtersHtml += `<li data-filter="${filterClass}">${cat}</li>`;
          });
          portfolioFilters.innerHTML = filtersHtml;
          // Render items
          portfolioList.innerHTML = projects
            .map(
              (project, idx) => `
                  <div class="col-xl-4 col-lg-6 portfolio-item isotope-item filter-${project.category
                    .toLowerCase()
                    .replace(/[^a-z0-9]+/g, "-")}">
                    <div class="portfolio-wrapper">
                      <div class="portfolio-image">
                        <img src="${project.images[0]}" alt="${
                project.title
              }" class="img-fluid" loading="lazy" />
                        <div class="portfolio-hover">
                          <div class="portfolio-actions">
                            <a href="${
                              project.images[0]
                            }" class="glightbox action-btn preview-btn" title="Preview Project">
                              <i class="bi bi-eye"></i>
                            </a>
                            <a href="portfolio-details?id=${project.id}&slug=${
                project.slug
              }" class="action-btn details-btn" title="View Details">
                              <i class="bi bi-arrow-up-right"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="portfolio-content">
                        <div class="portfolio-meta">
                          <span class="project-type">${project.category}</span>
                          <div class="project-rating">
                            <i class="bi bi-star-fill"></i>
                            <span>5.0</span>
                          </div>
                        </div>
                        <h3>${project.title}</h3>
                        <p>${project.short_desc}</p>
                        <div class="portfolio-tech">
                          ${project.tech_stack
                            .map(
                              (tech) =>
                                `<span class='tech-badge'>${tech}</span>`
                            )
                            .join("")}
                        </div>
                      </div>
                    </div>
                  </div>
                `
            )
            .join("");
          // Now initialize Isotope after DOM update
          setTimeout(function () {
            if (
              typeof Isotope === "undefined" ||
              typeof imagesLoaded === "undefined"
            ) {
              console.error("Isotope or imagesLoaded library is missing!");
              return;
            }
            document
              .querySelectorAll(".isotope-layout")
              .forEach(function (isotopeItem) {
                let layout =
                  isotopeItem.getAttribute("data-layout") ?? "masonry";
                let filter =
                  isotopeItem.getAttribute("data-default-filter") ?? "*";
                let sort =
                  isotopeItem.getAttribute("data-sort") ?? "original-order";
                let initIsotope;
                imagesLoaded(
                  isotopeItem.querySelector(".isotope-container"),
                  function () {
                    initIsotope = new Isotope(
                      isotopeItem.querySelector(".isotope-container"),
                      {
                        itemSelector: ".isotope-item",
                        layoutMode: layout,
                        filter: filter,
                        sortBy: sort,
                      }
                    );
                    isotopeItem
                      .querySelectorAll(".isotope-filters li")
                      .forEach(function (filters) {
                        filters.addEventListener(
                          "click",
                          function () {
                            isotopeItem
                              .querySelector(".isotope-filters .filter-active")
                              .classList.remove("filter-active");
                            this.classList.add("filter-active");
                            initIsotope.arrange({
                              filter: this.getAttribute("data-filter"),
                            });
                            if (typeof aosInit === "function") {
                              aosInit();
                            }
                          },
                          false
                        );
                      });
                  }
                );
              });
          }, 100); // Allow DOM to update
        });
    }
    const servicesList = document.getElementById("services-list");
    if (servicesList) {
      fetch("assets/data/services.json?v=" + Date.now())
        .then((response) => response.json())
        .then((services) => {
          servicesList.innerHTML = services
            .map(
              (service, idx) => `
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="${
              200 + (idx % 3) * 100
            }">
              <div class="service-card">
                <div class="service-icon"><i class="bi ${
                  service.icon
                }"></i></div>
                <h4><a href="service-details?id=${service.id}&slug=${
                service.slug
              }">${service.short_name}</a></h4>
                <p>${service.short_desc}</p>
                ${
                  service.short_name === "POS Systems"
                    ? '<div class="service-badge">Retail Revolution</div>'
                    : ""
                }
                ${
                  service.short_name === "Hospital Management Systems"
                    ? '<div class="service-badge">New</div>'
                    : ""
                }
                ${
                  service.short_name === "AI Integration"
                    ? '<div class="service-badge">Future-Ready</div>'
                    : ""
                }
                <a href="service-details?id=${service.id}&slug=${
                service.slug
              }" class="service-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          `
            )
            .join("");
        });
    }
  });
  ("use strict");

  /**
   * Apply .scrolled class to the body as the page is scrolled down
   */
  function toggleScrolled() {
    const selectBody = document.querySelector("body");
    const selectHeader = document.querySelector("#header");
    if (
      !selectHeader.classList.contains("scroll-up-sticky") &&
      !selectHeader.classList.contains("sticky-top") &&
      !selectHeader.classList.contains("fixed-top")
    )
      return;
    window.scrollY > 100
      ? selectBody.classList.add("scrolled")
      : selectBody.classList.remove("scrolled");
  }

  document.addEventListener("scroll", toggleScrolled);
  window.addEventListener("load", toggleScrolled);

  /**
   * Mobile nav toggle
   */
  const mobileNavToggleBtn = document.querySelector(".mobile-nav-toggle");

  function mobileNavToogle() {
    document.querySelector("body").classList.toggle("mobile-nav-active");
    mobileNavToggleBtn.classList.toggle("bi-list");
    mobileNavToggleBtn.classList.toggle("bi-x");
  }
  if (mobileNavToggleBtn) {
    mobileNavToggleBtn.addEventListener("click", mobileNavToogle);
  }

  /**
   * Hide mobile nav on same-page/hash links
   */
  document.querySelectorAll("#navmenu a").forEach((navmenu) => {
    navmenu.addEventListener("click", () => {
      if (document.querySelector(".mobile-nav-active")) {
        mobileNavToogle();
      }
    });
  });

  /**
   * Toggle mobile nav dropdowns
   */
  document.querySelectorAll(".navmenu .toggle-dropdown").forEach((navmenu) => {
    navmenu.addEventListener("click", function (e) {
      e.preventDefault();
      this.parentNode.classList.toggle("active");
      this.parentNode.nextElementSibling.classList.toggle("dropdown-active");
      e.stopImmediatePropagation();
    });
  });

  /**
   * Preloader
   */
  const preloader = document.querySelector("#preloader");
  if (preloader) {
    window.addEventListener("load", () => {
      preloader.remove();
    });
  }

  /**
   * Scroll top button
   */
  let scrollTop = document.querySelector(".scroll-top");

  function toggleScrollTop() {
    if (scrollTop) {
      window.scrollY > 100
        ? scrollTop.classList.add("active")
        : scrollTop.classList.remove("active");
    }
  }
  scrollTop.addEventListener("click", (e) => {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });

  window.addEventListener("load", toggleScrollTop);
  document.addEventListener("scroll", toggleScrollTop);

  /**
   * Animation on scroll function and init
   */
  function aosInit() {
    AOS.init({
      duration: 600,
      easing: "ease-in-out",
      once: true,
      mirror: false,
    });
  }
  window.addEventListener("load", aosInit);

  /**
   * Initiate Pure Counter
   */
  new PureCounter();

  /**
   * Initiate glightbox
   */
  const glightbox = GLightbox({
    selector: ".glightbox",
  });

  /**
   * Init isotope layout and filters
   */
  document.querySelectorAll(".isotope-layout").forEach(function (isotopeItem) {
    let layout = isotopeItem.getAttribute("data-layout") ?? "masonry";
    let filter = isotopeItem.getAttribute("data-default-filter") ?? "*";
    let sort = isotopeItem.getAttribute("data-sort") ?? "original-order";

    let initIsotope;
    imagesLoaded(isotopeItem.querySelector(".isotope-container"), function () {
      initIsotope = new Isotope(
        isotopeItem.querySelector(".isotope-container"),
        {
          itemSelector: ".isotope-item",
          layoutMode: layout,
          filter: filter,
          sortBy: sort,
        }
      );
    });

    isotopeItem
      .querySelectorAll(".isotope-filters li")
      .forEach(function (filters) {
        filters.addEventListener(
          "click",
          function () {
            isotopeItem
              .querySelector(".isotope-filters .filter-active")
              .classList.remove("filter-active");
            this.classList.add("filter-active");
            initIsotope.arrange({
              filter: this.getAttribute("data-filter"),
            });
            if (typeof aosInit === "function") {
              aosInit();
            }
          },
          false
        );
      });
  });

  /**
   * Init swiper sliders
   */
  function initSwiper() {
    document.querySelectorAll(".init-swiper").forEach(function (swiperElement) {
      let config = JSON.parse(
        swiperElement.querySelector(".swiper-config").innerHTML.trim()
      );

      if (swiperElement.classList.contains("swiper-tab")) {
        initSwiperWithCustomPagination(swiperElement, config);
      } else {
        new Swiper(swiperElement, config);
      }
    });
  }

  window.addEventListener("load", initSwiper);

  /**
   * Correct scrolling position upon page load for URLs containing hash links.
   */
  window.addEventListener("load", function (e) {
    if (window.location.hash) {
      if (document.querySelector(window.location.hash)) {
        setTimeout(() => {
          let section = document.querySelector(window.location.hash);
          let scrollMarginTop = getComputedStyle(section).scrollMarginTop;
          window.scrollTo({
            top: section.offsetTop - parseInt(scrollMarginTop),
            behavior: "smooth",
          });
        }, 100);
      }
    }
  });

  /**
   * Navmenu Scrollspy
   */
  let navmenulinks = document.querySelectorAll(".navmenu a");

  function navmenuScrollspy() {
    navmenulinks.forEach((navmenulink) => {
      if (!navmenulink.hash) return;
      let section = document.querySelector(navmenulink.hash);
      if (!section) return;
      let position = window.scrollY + 200;
      if (
        position >= section.offsetTop &&
        position <= section.offsetTop + section.offsetHeight
      ) {
        document
          .querySelectorAll(".navmenu a.active")
          .forEach((link) => link.classList.remove("active"));
        navmenulink.classList.add("active");
      } else {
        navmenulink.classList.remove("active");
      }
    });
  }
  window.addEventListener("load", navmenuScrollspy);
  document.addEventListener("scroll", navmenuScrollspy);
})();
