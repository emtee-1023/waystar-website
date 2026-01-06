<!DOCTYPE html>
<html lang="en">

<?php include 'includes/head.php' ?>

<body class="index-page">
  <?php include 'includes/header.php' ?>

  <main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <div class="hero-content">
              <h1>Transforming Ambition Into Digital Reality</h1>
              <p>
                At Waystar Technologies, we don’t just build tech—we architect possibility. From the heart of Nairobi, our team fuses creativity, code, and strategy to craft solutions that redefine how Africa does business. Whether you need seamless POS, intelligent ERP, human-centered CRM, or visionary AI, we turn your boldest ideas into powerful digital experiences. Let’s shape the future, together.
              </p>
              <div class="hero-buttons">
                <a href="#about" class="btn btn-primary">Learn More</a>
                <a href="#services" class="btn btn-outline">Our Solutions</a>
              </div>
              <div class="hero-stats">
                <!-- <div class="stat-item">
                  <span
                    class="stat-number purecounter"
                    data-purecounter-start="0"
                    data-purecounter-end="500"
                    data-purecounter-duration="1"></span>
                  <span class="stat-label">Ideas Engineered</span>
                </div> -->
                <div class="stat-item">
                  <div class="d-flex">
                    <span
                      class="stat-number purecounter"
                      data-purecounter-start="0"
                      data-purecounter-end="100"
                      data-purecounter-duration="1.5"></span>
                    <span
                      class="stat-number ms-2">+</span>
                  </div>
                  <span class="stat-label">Businesses Elevated</span>
                </div>
                <!-- <div class="stat-item">
                  <span
                    class="stat-number purecounter"
                    data-purecounter-start="0"
                    data-purecounter-end="10"
                    data-purecounter-duration="1"></span>
                  <span class="stat-label">Years of Innovation</span>
                </div> -->
              </div>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
            <div class="hero-visual">
              <div class="hero-image">
                <img
                  src="assets/img/misc/undraw_programming_j1zw.svg"
                  alt="Digital Agency Hero"
                  class="img-fluid" />
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="hero-bg-elements">
        <div class="bg-shape shape-1"></div>
        <div class="bg-shape shape-2"></div>
        <div class="bg-particles"></div>
      </div>
    </section>
    <!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5 align-items-center">
          <div class="col-lg-5" data-aos="fade-right" data-aos-delay="200">
            <div class="content">
              <h6 class="subtitle">Who We Are</h6>
              <h2>Waystar: Where Vision Meets Technology</h2>
              <p>
                Born in Nairobi, Waystar Technologies is the creative force behind Africa’s digital transformation. We blend bold ideas with technical mastery to deliver solutions that don’t just solve problems—they spark progress. From smart POS and seamless ERPs to AI-powered insights and stunning digital experiences, we help businesses leap ahead in a fast-changing world. Our passion? Turning your ambition into tomorrow’s technology.
              </p>

              <ul class="features-list">
                <li>
                  <i class="bi bi-check-circle-fill"></i><span>End-to-end business automation & workflow design</span>
                </li>
                <li>
                  <i class="bi bi-check-circle-fill"></i><span>Custom web, mobile, and AI-driven solutions</span>
                </li>
                <li>
                  <i class="bi bi-check-circle-fill"></i><span>Human-centered UI/UX for real impact</span>
                </li>
              </ul>

              <a href="#services" class="btn btn-primary">Discover Our Edge</a>
            </div>
          </div>

          <div class="col-lg-7" data-aos="fade-left" data-aos-delay="300">
            <div class="image-composition">
              <div class="image-main">
                <img
                  src="assets/img/about/africa.avif"
                  alt="Modern office with a team working"
                  class="img-fluid"
                  loading="lazy" />
              </div>
              <div class="image-secondary">
                <img
                  src="assets/img/about/work mates.avif"
                  alt="Collaborative discussion"
                  class="img-fluid"
                  loading="lazy" />
              </div>
              <div class="stats-card">
                <div class="stats-item">
                  <h3>9</h3>
                  <p>Core Services</p>
                </div>
                <div class="stats-item">
                  <h3>100%</h3>
                  <p>Client Retention</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /About Section -->

    <!-- Services Section -->
    <section id="services" class="services section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Our Digital Solutions</h2>
        <p>
          At Waystar, we don’t just deliver services—we engineer digital revolutions. Explore our suite of future-ready solutions designed to accelerate your business, delight your customers, and unlock new possibilities.
        </p>
      </div>
      <!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4" id="services-list"></div>
      </div>

    </section>
    <!-- /Services Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Digital Success Stories</h2>
        <p>
          Explore our portfolio to see how Waystar brings ideas to life. From websites and platforms to digital experiences, each project reflects our commitment to quality, creativity, and client success. Discover the results we deliver for businesses ready to grow and innovate.
        </p>
      </div>
      <!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="isotope-layout" data-layout="masonry" data-default-filter="*">
          <ul id="portfolio-filters" class="portfolio-filters isotope-filters list-inline text-center mb-4"></ul>
          <div class="row g-4 isotope-container" id="portfolio-list"></div>
        </div>
        <div
          class="portfolio-cta text-center"
          data-aos="fade-up"
          data-aos-delay="400">
          <h4>Ready to start your next project?</h4>
          <p>Let's work together to bring your digital vision to life</p>
          <div class="cta-buttons">
            <a href="#contact" class="btn btn-primary">Start a Project</a>
            <a href="#portfolio" class="btn btn-outline">View All Work</a>
          </div>
        </div>
      </div>
    </section>
    <!-- /Portfolio Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="why-us section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Why Waystar?</h2>
        <p>
          Nairobi-born, Africa-focused, and future-driven—Waystar Technologies is more than a tech company. We’re your innovation partner, blending creativity, expertise, and relentless support to help you outpace the ordinary. Here’s why businesses choose us to lead their digital transformation.
        </p>
      </div>
      <!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-4">
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="feature-card">
              <div class="icon-wrapper"><i class="bi bi-lightbulb"></i></div>
              <h4>Inventive Mindset</h4>
              <p>
                We challenge convention and invent new ways to solve your toughest business problems. Every solution is crafted for impact, not just implementation.
              </p>
              <div class="feature-stats">
                <span class="stat-number" data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="2">100</span>
                <span class="stat-label">% Custom-Built</span>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="feature-card">
              <div class="icon-wrapper"><i class="bi bi-rocket"></i></div>
              <h4>Results That Matter</h4>
              <p>
                Our work moves the needle. From startups to enterprises, we deliver measurable growth, efficiency, and digital transformation—fast.
              </p>
              <div class="feature-stats">
                <span class="stat-number" data-purecounter-start="0" data-purecounter-end="99" data-purecounter-duration="2">99</span>
                <span class="stat-label">% Client Success</span>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="feature-card">
              <div class="icon-wrapper"><i class="bi bi-people-fill"></i></div>
              <h4>Human-First Approach</h4>
              <p>
                We put people at the center of every solution—designing tech that’s intuitive, inclusive, and built for real-world success.
              </p>
              <div class="feature-stats">
                <span class="stat-number" data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="2">10</span>
                <span class="stat-label">Years Elevating Businesses</span>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <div class="feature-showcase">
              <img
                src="assets/img/illustration/undraw_work-chat_hc3y.svg"
                alt="Creative Process"
                class="img-fluid" />
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="feature-content">
              <h3>What Makes Waystar Different?</h3>
              <p class="lead">
                We don’t just deliver tech—we deliver transformation. Our clients trust us because we listen, innovate, and never settle for less than extraordinary.
              </p>
              <div class="feature-list">
                <div class="feature-item">
                  <div class="feature-icon"><i class="bi bi-check-circle-fill"></i></div>
                  <div class="feature-text">
                    <h5>Strategic Partnership</h5>
                    <p>We work with you, not just for you—aligning every solution to your vision and goals.</p>
                  </div>
                </div>
                <div class="feature-item">
                  <div class="feature-icon"><i class="bi bi-check-circle-fill"></i></div>
                  <div class="feature-text">
                    <h5>Agile Innovation</h5>
                    <p>We move fast, adapt quickly, and bring the latest tech to your doorstep—so you’re always ahead.</p>
                  </div>
                </div>
                <div class="feature-item">
                  <div class="feature-icon"><i class="bi bi-check-circle-fill"></i></div>
                  <div class="feature-text">
                    <h5>Unmatched Support</h5>
                    <p>Our team is with you every step of the way, from first idea to final launch and beyond.</p>
                  </div>
                </div>
              </div>
              <div class="cta-wrapper">
                <a href="#contact" class="btn btn-primary">Start Your Transformation</a>
                <a href="#portfolio" class="btn btn-outline">See Our Impact</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Why Us Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Real Results. Real Voices.</h2>
        <p>
          Discover how Waystar Technologies transforms ambition into digital reality. Our clients share their stories of innovation, partnership, and measurable results—proof that with Waystar, your vision is always our mission.
        </p>
      </div>
      <!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="testimonials-slider swiper">
          <div id="testimonials-swiper-wrapper" class="swiper-wrapper"></div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>
    <!-- /Testimonials Section -->

    <!-- Team Section -->
    <section id="team" class="team section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>
          Get in touch with Hill Bay Technologies to discuss your geospatial
          project, request a quote, or learn more about our services. We look
          forward to partnering with you for innovative, data-driven
          solutions.
        </p>
      </div>
      <!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-4">
          <div class="col-lg-6">
            <div
              class="team-intro"
              data-aos="fade-right"
              data-aos-delay="150">
              <div class="intro-content">
                <h3>Meet Our Exceptional Team</h3>
                <p>
                  Temporibus autem quibusdam et aut officiis debitis aut rerum
                  necessitatibus saepe eveniet ut et voluptates repudiandae
                  sint et molestiae non recusandae.
                </p>
                <div class="stats-row">
                  <div class="stat-item">
                    <span class="stat-number">50+</span>
                    <span class="stat-label">Team Members</span>
                  </div>
                  <div class="stat-item">
                    <span class="stat-number">8</span>
                    <span class="stat-label">Departments</span>
                  </div>
                  <div class="stat-item">
                    <span class="stat-number">15+</span>
                    <span class="stat-label">Countries</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="team-grid" data-aos="fade-left" data-aos-delay="200">
              <div
                class="member-hexagon"
                data-aos="zoom-in"
                data-aos-delay="250">
                <div class="hexagon-inner">
                  <!-- <img
                    src="assets/img/person/person-f-3.webp"
                    alt="Team member" /> -->
                  <div class="member-overlay">
                    <h5>Sarah Chen</h5>
                    <span>Creative Director</span>
                    <div class="social-icons">
                      <a href="#"><i class="bi bi-linkedin"></i></a>
                      <a href="#"><i class="bi bi-twitter"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- <div class="row mt-5">
          <div class="col-12">
            <div
              class="team-carousel-wrapper"
              data-aos="fade-up"
              data-aos-delay="200">
              <h4 class="carousel-title">Leadership Team</h4>

              <div class="leadership-slider swiper init-swiper">
                <script type="application/json" class="swiper-config">
                  {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                      "delay": 4000
                    },
                    "slidesPerView": 1,
                    "spaceBetween": 0,
                    "pagination": {
                      "el": ".swiper-pagination",
                      "clickable": true
                    },
                    "breakpoints": {
                      "768": {
                        "slidesPerView": 2
                      },
                      "1024": {
                        "slidesPerView": 3
                      }
                    }
                  }
                </script>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="leader-card">
                      <div class="leader-image">
                        <img
                          src="assets/img/person/person-f-14.webp"
                          alt="Leader" />
                      </div>
                      <div class="leader-info">
                        <h5>Jennifer Walsh</h5>
                        <span class="position">Chief Executive Officer</span>
                        <p>
                          Excepteur sint occaecat cupidatat non proident sunt
                          in culpa qui officia deserunt mollit anim id.
                        </p>
                        <div class="leader-contact">
                          <a href="#" class="contact-btn">
                            <i class="bi bi-envelope"></i>
                          </a>
                          <a href="#" class="contact-btn">
                            <i class="bi bi-linkedin"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="leader-card">
                      <div class="leader-image">
                        <img
                          src="assets/img/person/person-m-13.webp"
                          alt="Leader" />
                      </div>
                      <div class="leader-info">
                        <h5>Robert Martinez</h5>
                        <span class="position">Chief Technology Officer</span>
                        <p>
                          Sed do eiusmod tempor incididunt ut labore et dolore
                          magna aliqua ut enim ad minim veniam quis.
                        </p>
                        <div class="leader-contact">
                          <a href="#" class="contact-btn">
                            <i class="bi bi-envelope"></i>
                          </a>
                          <a href="#" class="contact-btn">
                            <i class="bi bi-github"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="leader-card">
                      <div class="leader-image">
                        <img
                          src="assets/img/person/person-f-5.webp"
                          alt="Leader" />
                      </div>
                      <div class="leader-info">
                        <h5>Lisa Thompson</h5>
                        <span class="position">Head of Operations</span>
                        <p>
                          Duis aute irure dolor in reprehenderit in voluptate
                          velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                        <div class="leader-contact">
                          <a href="#" class="contact-btn">
                            <i class="bi bi-envelope"></i>
                          </a>
                          <a href="#" class="contact-btn">
                            <i class="bi bi-twitter"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="leader-card">
                      <div class="leader-image">
                        <img
                          src="assets/img/person/person-m-9.webp"
                          alt="Leader" />
                      </div>
                      <div class="leader-info">
                        <h5>Alex Garcia</h5>
                        <span class="position">VP of Marketing</span>
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipiscing
                          elit sed do eiusmod tempor incididunt ut labore.
                        </p>
                        <div class="leader-contact">
                          <a href="#" class="contact-btn">
                            <i class="bi bi-envelope"></i>
                          </a>
                          <a href="#" class="contact-btn">
                            <i class="bi bi-instagram"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
          </div>
        </div> -->

        <div class="row mt-4">
          <div class="col-lg-8 offset-lg-2">
            <div
              class="join-team-cta"
              data-aos="fade-up"
              data-aos-delay="300">
              <div class="cta-icon">
                <i class="bi bi-rocket-takeoff"></i>
              </div>
              <div class="cta-content">
                <h4>Ready to Join Our Mission?</h4>
                <p>
                  At vero eos et accusamus et iusto odio dignissimos ducimus
                  qui blanditiis praesentium voluptatum deleniti atque
                  corrupti quos dolores.
                </p>
                <div class="cta-actions">
                  <a href="#" class="btn btn-primary">View Open Roles</a>
                  <a href="#" class="btn btn-outline">Learn Our Culture</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Team Section -->
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        var teamSection = document.getElementById("team");
        if (teamSection) {
          teamSection.style.display = "none";
        }
      });
    </script>

    <!-- Contact Section -->
    <section id="contact" class="contact section">
      <!-- Section Title -->
      <!-- <div class="container section-title" data-aos="fade-up">
          <h2>Contact</h2>
          <p>
            Necessitatibus eius consequatur ex aliquid fuga eum quidem sint
            consectetur velit
          </p>
        </div> -->
      <!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-center">
          <!-- <div class="col-lg-5" data-aos="fade-right" data-aos-delay="200">
              <div class="contact-form-card">
                <div class="form-header">
                  <div class="header-icon">
                    <i class="bi bi-chat-dots-fill"></i>
                  </div>
                  <h3>Let's Start a Conversation</h3>
                  <p>
                    Duis aute irure dolor in reprehenderit in voluptate velit
                    esse cillum dolore eu fugiat nulla pariatur excepteur sint.
                  </p>
                </div>

                <form
                  action="forms/contact.php"
                  method="post"
                  class="php-email-form"
                >
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <input
                        type="text"
                        name="name"
                        class="form-control"
                        placeholder="Your Name"
                        required=""
                      />
                    </div>
                    <div class="col-md-6 mb-3">
                      <input
                        type="email"
                        class="form-control"
                        name="email"
                        placeholder="Email Address"
                        required=""
                      />
                    </div>
                  </div>

                  <div class="mb-3">
                    <input
                      type="text"
                      class="form-control"
                      name="subject"
                      placeholder="What's this about?"
                      required=""
                    />
                  </div>

                  <div class="mb-4">
                    <textarea
                      class="form-control"
                      name="message"
                      rows="4"
                      placeholder="Tell us more about your project..."
                      required=""
                    ></textarea>
                  </div>

                  <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">
                      Your message has been sent. Thank you!
                    </div>
                  </div>

                  <button type="submit" class="submit-btn">
                    <span>Send Message</span>
                    <i class="bi bi-send-fill"></i>
                  </button>
                </form>
              </div>
            </div> -->

          <div class="col-lg-12" data-aos="fade-left" data-aos-delay="200">
            <div class="contact-info-area">
              <div class="info-header">
                <h3>Let’s Connect & Create</h3>
                <p>
                  Ready to transform your business, launch a new idea, or just curious about what’s possible? The Waystar team in Nairobi is here to listen, collaborate, and deliver. Reach out and let’s build something extraordinary together.
                </p>
              </div>

              <div class="contact-methods">
                <a href="mailto:info@waystar.co.ke" target="_blank" rel="noopener">
                  <div class="method-card" data-aos="zoom-in" data-aos-delay="250">
                    <div class="card-icon"><i class="bi bi-envelope-at"></i></div>
                    <div class="card-content">
                      <h5>Email Us</h5>
                      <p>info@waystar.co.ke</p>
                      <span class="response-time">Replies within 2 hours</span>
                    </div>
                  </div>
                </a>
                <a href="tel:+254792314330">
                  <div class="method-card" data-aos="zoom-in" data-aos-delay="300">
                    <div class="card-icon"><i class="bi bi-telephone"></i></div>
                    <div class="card-content">
                      <h5>Call Us</h5>
                      <p>+254 792 314 330</p>
                      <span class="response-time">Mon-Fri, 8AM–6PM EAT</span>
                    </div>
                  </div>
                </a>
                <a href="https://wa.me/254792314330?text=Hello%2C%20I%20clicked%20this%20link%20from%20your%20website%20and%20I%20have%20an%20inquiry%20on%20..." target="_blank" rel="noopener">
                  <div class="method-card" data-aos="zoom-in" data-aos-delay="300">
                    <div class="card-icon"><i class="bi bi-whatsapp"></i></div>
                    <div class="card-content">
                      <h5>Chat with Us</h5>
                      <p>+254 792 314 330</p>
                      <span class="response-time">Replies within 2 hours</span>
                    </div>
                  </div>
                </a>
                <!-- <div class="method-card" data-aos="zoom-in" data-aos-delay="350">
                  <div class="card-icon"><i class="bi bi-geo-alt"></i></div>
                  <div class="card-content">
                    <h5>Visit Us</h5>
                    <p>Waystar Technologies, Nairobi, Kenya</p>
                    <span class="response-time">Open Weekdays</span>
                  </div>
                </div> -->

                <!-- <div
                    class="method-card"
                    data-aos="zoom-in"
                    data-aos-delay="350"
                  >
                    <div class="card-icon">
                      <i class="bi bi-geo-alt"></i>
                    </div>
                    <div class="card-content">
                      <h5>Visit Our Office</h5>
                      <p>4821 Broadway Street, New York, NY 10013</p>
                      <span class="response-time">Open Monday - Friday</span>
                    </div>
                  </div> -->
              </div>

              <div
                class="additional-info"
                data-aos="fade-up"
                data-aos-delay="400">
                <div class="info-stats col-2">
                  <div class="stat-item">
                    <div class="stat-number">1h</div>
                    <div class="stat-label">Avg. Response Time</div>
                  </div>
                  <!-- <div class="stat-item">
                    <div class="stat-number">100%</div>
                    <div class="stat-label">Client Retention</div>
                  </div> -->
                  <!-- <div class="stat-item">
                    <div class="stat-number">300+</div>
                    <div class="stat-label">Solutions Launched</div>
                  </div> -->
                </div>

                <div class="social-connect">
                  <h6>Connect With Us</h6>
                  <div class="social-links">
                    <a href="#" class="social-link"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-github"></i></a>
                    <a href="#" class="social-link"><i class="bi bi-discord"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Contact Section -->
  </main>

  <?php include 'includes/footer.php' ?>

  <!-- Scroll Top -->
  <a
    href="#"
    id="scroll-top"
    class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <?php include 'includes/scripts.php' ?>
</body>

</html>