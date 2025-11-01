<section class="contact-section">
  <!-- Section Heading -->
  <div class="section-header">
    <h2>Visit GNC Dehradun 📍</h2>
    <p>
      Step into an environment where innovation meets inspiration. Explore our lush
      green campus and discover how GNC Dehradun nurtures excellence in every field.
    </p>
  </div>

  <div class="contact-row">
    <!-- MAP LEFT -->
    <div class="map-wrapper fade-left">
      <div class="map-card">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3443.210854635884!2d77.90451237535711!3d30.344956874773626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390f2b308a7f7bc7%3A0xdd1898ddcd5d933c!2sGNC%20Dehradun!5e0!3m2!1sen!2sin!4v1761844264963!5m2!1sen!2sin"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>
    </div>

    <!-- CONTENT RIGHT -->
    <div class="contact-content fade-right">
      <div class="content-card">
        <div class="info-item">
          <div class="icon">📍</div>
          <div>
            <h3>Our Address</h3>
            <p>Chakrata Rd, Jhajra, Dehradun, Uttarakhand 248007</p>
          </div>
        </div>

        <div class="info-item">
          <div class="icon">📞</div>
          <div>
            <h3>Contact Info</h3>
            <p>+91 7300900900<br />info@gnc.edu.in</p>
          </div>
        </div>

        <div class="info-item">
          <div class="icon">🎓</div>
          <div>
            <h3>About College</h3>
            <p>
              GNC Dehradun fosters excellence through innovation, inspiration, and
              quality education in a serene campus environment.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .contact-section {
    background: #000;
    color: #f5f5f5;
    padding: 80px 60px;
    font-family: "Poppins", sans-serif;
    overflow: hidden;
  }

  .section-header {
    text-align: center;
    max-width: 800px;
    margin: 0 auto 60px;
  }

  .section-header h2 {
    font-size: 2.5rem;
    color: #0f9af1;
    margin-bottom: 15px;
    font-weight: 600;
  }

  .section-header p {
    color: #ccc;
    font-size: 1.05rem;
    line-height: 1.7;
  }

  .contact-row {
    display: flex;
    align-items: stretch;
    justify-content: center;
    gap: 50px;
    flex-wrap: wrap;
  }

  .map-wrapper,
  .contact-content {
    flex: 1 1 500px;
    max-width: 600px;
  }

  /* Map */
  .map-card {
    background: #1a1a1a;
    border-radius: 12px;
    overflow: hidden;
    border: 1px solid #2e2e2e;
    box-shadow: 0 0 25px rgba(255, 255, 255, 0.08);
    height: 100%;
  }

  .map-card iframe {
    width: 100%;
    height: 100%;
    min-height: 420px;
    border: 0;
    filter: grayscale(20%) brightness(0.9);
  }

  /* Content */
  .content-card {
    background: #121212;
    border: 1px solid #2a2a2a;
    border-radius: 12px;
    padding: 40px;
    box-shadow: 0 4px 20px rgba(255, 255, 255, 0.05);
    height: 100%;
  }

  .info-item {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    margin-bottom: 20px;
  }

  .icon {
    font-size: 1.6rem;
    color: #ffb400;
  }

  .info-item h3 {
    font-size: 1rem;
    font-weight: 600;
    color: #fff;
    margin-bottom: 4px;
  }

  .info-item p {
    font-size: 0.95rem;
    color: #bbb;
    line-height: 1.5;
  }

  /* Animation base */
  .fade-left,
  .fade-right {
    opacity: 0;
    transition: all 0.9s ease;
  }
  .fade-left {
    transform: translateX(-80px);
  }
  .fade-right {
    transform: translateX(80px);
  }

  .show {
    opacity: 1;
    transform: translateX(0);
  }

  /* Responsive */
  @media (max-width: 900px) {
    .contact-row {
      flex-direction: column;
      gap: 30px;
    }
    .map-card iframe {
      min-height: 350px;
    }
  }

  @media (max-width: 600px) {
    .contact-section {
      padding: 50px 25px;
    }

    .section-header h2 {
      font-size: 2rem;
    }

    .section-header p {
      font-size: 0.95rem;
    }
  }
</style>

<script>
  const fadeEls = document.querySelectorAll(".fade-left, .fade-right");

  function handleScroll() {
    const triggerBottom = window.innerHeight * 0.8;

    fadeEls.forEach((el) => {
      const boxTop = el.getBoundingClientRect().top;
      const boxBottom = el.getBoundingClientRect().bottom;

      if (boxTop < triggerBottom && boxBottom > 0) {
        el.classList.add("show");
      } else {
        el.classList.remove("show");
      }
    });
  }

  window.addEventListener("scroll", handleScroll);
  window.addEventListener("load", handleScroll);
</script>
