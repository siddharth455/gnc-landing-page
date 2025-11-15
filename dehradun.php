<!-- Dehradun Section -->
<section class="dehradun-section position-relative text-white">
  <div class="dehradun-overlay"></div>

  <div class="container text-center position-relative z-1 d-flex flex-column justify-content-center align-items-center h-100">
    <div>
      <h2 class="fw-bold display-5 mb-3">Dehradun, The City Capital Of Uttarakhand</h2>
      <p class="lead mb-5 px-md-5">
        Dehradun, known as the “School Capital of India,” blends natural beauty, quality education, and modern growth in perfect harmony.
      </p>

      <div class="row g-0 justify-content-center dehradun-grid mt-3">
        <div class="col-md-3 col-sm-6 border-end dehradun-card">
          <h5 class="fw-bold mb-2">Explore</h5>
          <p>Discover the serene charm of Dehradun — from its colleges/universities and lush greenery to nearby hill stations and natural wonders.</p>
        </div>

        <div class="col-md-3 col-sm-6 border-end dehradun-card">
          <h5 class="fw-bold mb-2">Well-Connected</h5>
          <p>Dehradun is connected by road, rail, and air, with an international airport linking the city seamlessly to major destinations.</p>
        </div>

        <div class="col-md-3 col-sm-6 border-end dehradun-card">
          <h5 class="fw-bold mb-2">Travel</h5>
          <p>Nestled in the Himalayas’ foothills, Dehradun offers quick access to Mussoorie, Rishikesh, and Haridwar — perfect for weekend escapes.</p>
        </div>

        <div class="col-md-3 col-sm-6 dehradun-card">
          <h5 class="fw-bold mb-2">Business</h5>
          <p>The city is emerging as a hub for education, tourism, and IT — creating promising career opportunities for young professionals.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .dehradun-section {
    background: url('assets/image/dehradun-gnc.webp') center/cover no-repeat;
    position: relative;
    overflow: hidden;
    height: 100vh;
  }

  .dehradun-overlay {
    position: absolute;
    inset: 0;
    background: rgba(96, 95, 95, 0.25);
    z-index: 0;
  }

  .dehradun-grid {
    padding: 30px 0;
    
  }

  .dehradun-card {
    padding: 0 25px;
  }

  .dehradun-card h5 {
    font-size: 1.2rem;
    margin-bottom: 10px;
  }

  .dehradun-card p {
    font-size: 0.95rem;
    color: #f1f1f1;
    line-height: 1.6;
    margin-bottom: 0;
  }

  /* Vertical dividing borders */
  .dehradun-grid .border-end {
    border-right: 1.8px solid #f4f4f4 !important;
  }

  /* Adjust spacing for large screens */
  @media (min-width: 992px) {
    .dehradun-section h2 {
      margin-bottom: 1rem;
    }

    .dehradun-section p.lead {
      margin-bottom: 3rem;
      max-width: 900px;
      margin-left: auto;
      margin-right: auto;
    }
  }

  /* Responsive layout for tablets and mobiles */
  @media (max-width: 768px) {
    .dehradun-grid .border-end {
      border-right: none !important;
      border-bottom: 1px solid rgba(255, 255, 255, 0.15);
      padding-bottom: 15px;
      margin-bottom: 15px;
    }

    .dehradun-grid .dehradun-card:last-child {
      border-bottom: none;
    }

    .dehradun-section {
      height: auto; /* fallback for smaller screens */
      padding: 60px 0;
    }
  }
</style>
