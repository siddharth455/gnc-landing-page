<!-- map.php -->
<section class="contact-section">
  <div class="contact-container">
    <!-- LEFT SIDE -->
    <div class="contact-header">
      <h2>Visit GNC Dehradun 📍</h2>
      <p>
        Step into an environment where innovation meets inspiration. Explore our lush green campus and discover how GNC Dehradun nurtures excellence in every field.
      </p>
    </div>

    <!-- INFO CARDS -->
    <div class="contact-info">
      <div class="info-card">
        <div class="icon">📍</div>
        <h3>Our Address</h3>
        <p>Chakrata Rd, Jhajra, Dehradun, Uttarakhand 248015</p>
      </div>

      <div class="info-card">
        <div class="icon">📞</div>
        <h3>Contact Info</h3>
        <p>+91 98765 43210<br />info@gncdehradun.ac.in</p>
      </div>

      <div class="info-card">
        <div class="icon">🎓</div>
        <h3>About College</h3>
        <p>
          GNC Dehradun fosters excellence through innovation, inspiration, and
          quality education in a serene campus environment.
        </p>
      </div>
    </div>
  </div>

  <!-- MAP SECTION -->
  <div class="map-wrapper">
    <div class="map-card">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3443.210854635884!2d77.90451237535711!3d30.344956874773626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390f2b308a7f7bc7%3A0xdd1898ddcd5d933c!2sGNC%20Dehradun!5e0!3m2!1sen!2sin!4v1761844264963!5m2!1sen!2sin"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
    </div>
  </div>
</section>

<style>
  .contact-section {
    background-color: #000000;
    color: #f5f5f5;
    padding: 80px 60px;
    font-family: "Poppins", sans-serif;
  }

  .contact-container {
    text-align: center;
  }

  .contact-header h2 {
    font-size: 2.2rem;
    font-weight: 600;
    color: #4854c4ff;
    margin-bottom: 12px;
  }

  .contact-header p {
    color: #aaa;
    font-size: 1rem;
    line-height: 1.6;
    max-width: 750px;
    margin: 0 auto 50px;
  }

  .contact-info {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 30px;
    margin-bottom: 50px;
  }

  .info-card {
    background: #1a1a1a;
    border: 1px solid #2e2e2e;
    border-radius: 12px;
    padding: 30px 25px;
    width: 280px;
    box-shadow: 0 4px 15px rgba(255, 255, 255, 0.05);
    transition: all 0.3s ease;
    text-align: center;
  }

  .info-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 20px rgba(255, 180, 0, 0.2);
  }

  .info-card .icon {
    font-size: 2rem;
    color: #ffb400;
    margin-bottom: 12px;
  }

  .info-card h3 {
    font-size: 1.1rem;
    font-weight: 600;
    color: #fff;
    margin-bottom: 8px;
  }

  .info-card p {
    color: #bbb;
    font-size: 0.95rem;
    line-height: 1.6;
  }

  .map-wrapper {
    display: flex;
    justify-content: center;
  }

  .map-card {
    background: #1a1a1a;
    border-radius: 5px;
    border: 1px solid #2e2e2e;
    width: 1024px;
    height: 400px;
    overflow: hidden;
    box-shadow: 0 0 25px rgba(255, 255, 255, 0.08);
  }

  .map-card iframe {
    width: 100%;
    height: 100%;
    border: 0;
    display: block;
    filter: grayscale(20%) brightness(0.9);
  }

  /* 💻 Tablet & below */
  @media (max-width: 900px) {
    .contact-section {
      padding: 50px 30px;
    }

    /* Make a side-by-side layout for header + map */
    .contact-container {
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      text-align: left;
      margin-bottom: 40px;
    }

    .contact-header {
      flex: 1;
      padding-right: 20px;
      max-width: 450px;
    }

    .contact-header h2 {
      font-size: 1.8rem;
      margin-bottom: 15px;
    }

    .contact-header p {
      margin: 0;
      font-size: 0.95rem;
      line-height: 1.5;
      color: #ccc;
    }

    .contact-info {
      display: none; /* Hide info cards */
    }

    .map-wrapper {
      flex: 1;
    }

    .map-card {
      width: 100%;
      height: 350px;
    }
  }

  /* 📱 Mobile */
  @media (max-width: 600px) {
    .contact-container {
      flex-direction: column;
      text-align: center;
    }

    .contact-header {
      padding: 0;
      text-align: center;
      max-width: 100%;
      margin-bottom: 25px;
    }

    .map-card {
      height: 400px;
    }
  }
</style>
