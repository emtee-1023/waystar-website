document.addEventListener("DOMContentLoaded", function () {
  const urlParams = new URLSearchParams(window.location.search);
  const id = parseInt(urlParams.get("id"));
  const slug = urlParams.get("slug");
  if (!id || !slug) return;

  fetch("assets/data/services.json")
    .then((response) => response.json())
    .then((services) => {
      const service = services.find((s) => s.id === id && s.slug === slug);
      if (!service) return;

      // Title and description
      const breadcrumbCurrent = document.querySelector(
        ".breadcrumb-item.current, .breadcrumb-item.active.current"
      );
      if (breadcrumbCurrent)
        breadcrumbCurrent.textContent = service.short_name + " Service Details";
      document.querySelector(".title-wrapper h1").textContent = service.title;
      document.querySelector(".title-wrapper p").textContent =
        service.short_desc;
      const serviceTitle = document.querySelector(".service-content h2");
      if (serviceTitle) serviceTitle.textContent = service.title;
      document.querySelector(".service-content .lead").textContent =
        service.long_desc;

      // What's included
      const featuresContainer = document.querySelector(
        ".service-features .row"
      );
      if (featuresContainer) {
        featuresContainer.innerHTML = service.whats_included
          .map(
            (feature) => `
          <div class="col-md-6">
            <div class="feature-item">
              <i class="bi bi-check2-circle flex-shrink-0"></i>
              <div>
                <h5>${feature}</h5>
              </div>
            </div>
          </div>
        `
          )
          .join("");
      }

      // Process steps
      const processSteps = document.querySelector(".process-steps");
      if (processSteps) {
        processSteps.innerHTML = service.process
          .map(
            (step, idx) => `
          <div class="step-item">
            <div class="step-number">${String(idx + 1).padStart(2, "0")}</div>
            <div class="step-content">
              <h5>${step}</h5>
            </div>
          </div>
        `
          )
          .join("");
      }

      // Service details sidebar
      const facts = document.querySelector(".service-facts");
      if (facts) {
        facts.innerHTML = `
          <li><span class="fact-label">Duration:</span><span class="fact-value">${service.details.duration}</span></li>
          <li><span class="fact-label">Delivery:</span><span class="fact-value">${service.details.delivery}</span></li>
          <li><span class="fact-label">Team Size:</span><span class="fact-value">${service.details.team_size}</span></li>
          <li><span class="fact-label">Support:</span><span class="fact-value">${service.details.support}</span></li>
        `;
      }
    });
});
