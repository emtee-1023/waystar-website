document.addEventListener("DOMContentLoaded", function () {
  const urlParams = new URLSearchParams(window.location.search);
  const id = parseInt(urlParams.get("id"));
  const slug = urlParams.get("slug");
  if (!id || !slug) return;

  fetch("assets/data/portfolio.json")
    .then((response) => response.json())
    .then((portfolios) => {
      const project = portfolios.find((p) => p.id === id && p.slug === slug);
      if (!project) return;

      // Title and description
      const breadcrumbCurrent = document.querySelector(
        ".breadcrumb-item.current, .breadcrumb-item.active.current"
      );
      if (breadcrumbCurrent) breadcrumbCurrent.textContent = project.title;
      document.querySelector(".title-wrapper h1").textContent = project.title;
      document.querySelector(".title-wrapper p").textContent =
        project.short_desc;
      document.querySelector(".project-title").textContent = project.title;
      document.querySelector(".project-overview .lead").textContent =
        project.long_desc;

      // Project meta
      const metaItems = document.querySelectorAll(
        ".date-client .meta-item span"
      );
      if (metaItems.length >= 2) {
        metaItems[0].textContent = project.date;
        metaItems[1].textContent = project.client;
      }

      // Project website
      const projectWebsite = document.querySelector(".project-website a");
      if (projectWebsite) {
        projectWebsite.href = project.website;
        projectWebsite.textContent = project.website.replace(
          /^https?:\/\//,
          ""
        );
      }

      // Images slider
      const swiperWrapper = document.querySelector(".swiper-wrapper");
      if (swiperWrapper) {
        swiperWrapper.innerHTML = project.images
          .map(
            (img) => `
          <div class="swiper-slide">
            <img src="${img}" alt="Portfolio Image" class="img-fluid">
          </div>
        `
          )
          .join("");
      }

      // Gallery thumbnails
      const galleryGrid = document.querySelector(".thumbnail-grid .row");
      if (galleryGrid) {
        galleryGrid.innerHTML = project.gallery
          .map(
            (img) => `
          <div class="col-3">
            <img src="${img}" alt="Gallery Image" class="img-fluid glightbox">
          </div>
        `
          )
          .join("");
      }

      // Tech stack badges
      const techStack = document.querySelector(".tech-stack-badges");
      if (techStack) {
        techStack.innerHTML = project.tech_stack
          .map((tech) => `<span>${tech}</span>`)
          .join("");
      }

      // Features
      const featureLists = document.querySelectorAll(
        ".project-features .feature-list"
      );
      if (featureLists.length) {
        const half = Math.ceil(project.features.length / 2);
        featureLists[0].innerHTML = project.features
          .slice(0, half)
          .map((f) => `<li><i class="bi bi-check2-circle"></i> ${f}</li>`)
          .join("");
        if (featureLists[1])
          featureLists[1].innerHTML = project.features
            .slice(half)
            .map((f) => `<li><i class="bi bi-check2-circle"></i> ${f}</li>`)
            .join("");
      }

      // Accordion: Overview, Challenge, Solution
      const accordionBodies = document.querySelectorAll(".accordion-body");
      if (accordionBodies.length >= 3) {
        accordionBodies[0].innerHTML = `<p>${project.long_desc}</p>`;
        accordionBodies[1].innerHTML = `<p>${project.challenge}</p>`;
        accordionBodies[2].innerHTML = `<p>${project.solution}</p>`;
      }

      // Live project link
      const viewProjectBtn = document.querySelector(".btn-view-project");
      if (viewProjectBtn) {
        viewProjectBtn.href = project.live_url;
        viewProjectBtn.style.display = "inline-block";
      }
    });
});
