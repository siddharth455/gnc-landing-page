<section class="gnc-scholarship-section">
  <!-- ✅ Include Slick Slider (CDN) -->
  <link
    rel="stylesheet"
    type="text/css"
    href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
  />
  <link
    rel="stylesheet"
    type="text/css"
    href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"
  />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <style>
   
    body {
      /* margin: 0; */
      /* font-family: "Poppins", sans-serif; */
      /* background: #fff; */
      /* overflow-x: hidden; */
    }

    .gnc-scholarship-section {
      background: #da6b2a;
      padding: 60px 0 40px;
      position: relative;
      overflow: hidden;
    }

    .text-white {
      color: #fff;
    }

    .text-center {
      text-align: center;
    }

    .container {
      max-width: 1350px;
      margin: 0 auto;
      padding: 0 15px;
    }

    /* ==============================
       ENTREPRENEURSHIP SECTION
    =============================== */
    .gnc-scholarship__heading h2 {
      font-size: 38px;
      font-weight: 700;
      color: #fff;
    }

    .gnc-scholarship__heading span {
      font-family: "Playfair Display", serif;
      font-style: italic;
      font-weight: 500;
      color: #fff;
    }

    .gnc-scholarship__description p {
      color: #fff;
      opacity: 0.9;
      font-size: 16px;
      line-height: 1.7;
      margin-top: 10px;
      margin-bottom: 40px;
    }

    .gnc-scholarship__cards {
      display: flex;
      gap: 30px;
      justify-content: center;
      flex-wrap: wrap;
    }

    .gnc-scholarship__card {
      width: 30%;
      height: 420px;
      border-radius: 8px;
      overflow: hidden;
      position: relative;
      transition: transform 0.3s ease-in-out;
      flex: 1 1 300px;
      min-width: 280px;
      max-width: 400px;
    }

    .gnc-scholarship__card:hover {
      transform: translateY(-5px);
    }

    .gnc-scholarship__card-bg {
      position: relative;
      height: 100%;
      background-size: cover;
      background-position: center;
    }

    .entrepreneurship__card-bg::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.5);
    }

    .gnc-scholarship__card-content {
      position: absolute;
      bottom: 40px;
      left: 0;
      right: 0;
      text-align: center;
    }

    .gnc-scholarship__card-content h3 {
      font-size: 48px;
      font-weight: 700;
      color: #fff;
      margin-bottom: 10px;
    }

    .gnc-scholarship__card-content p {
      font-size: 15px;
      color: #fff;
      margin: 0;
    }

    /* ==============================
       SPACE INTRO SECTION
    =============================== */
    .gnc-scholarship-intro {
      background: #da6b2a;
      color: #fff;
      text-align: center;
      padding-top: 80px;
      padding-bottom: 220px;
      position: relative;
      z-index: 2;
    }

    .gnc-scholarship-intro__heading h2 {
      font-size: 34px;
      font-weight: 700;
    }

    .gnc-scholarship-intro__heading span {
      font-style: italic;
      color: #ffcc00;
    }

    .gnc-scholarship-intro__description {
      max-width: 950px;
      margin: 0 auto;
      font-size: 16px;
      line-height: 1.8;
      opacity: 0.95;
      position: relative;
      z-index: 2;
      padding: 0 10px;
    }

    /* ==============================
       KALPANA CHAWLA SECTION
    =============================== */
    .gnc-kalpana-section {
      background: #0000;
      position: relative;
      z-index: 3;
    }

    .gnc-kalpana-card {
      position: relative;
      background-size: cover;
      background-position: center;
      overflow: hidden;
      height: 520px;
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      color: #fff;
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
      transform: translateY(-160px);
      border-radius: 12px;
    }

    .gnc-kalpana-card::before {
      content: "";
      position: absolute;
      inset: 0;
      /* background: rgba(0, 0, 0, 0.55); */
    }

    .gnc-kalpana-card__content {
      position: relative;
      z-index: 3;
      padding: 60px 70px;
    }

    .gnc-kalpana-card__title h2 {
      font-size: 26px;
      font-weight: 600;
      margin-bottom: 25px;
      border-left: 4px solid #ffcc00;
      padding-left: 12px;
    }

    .gnc-kalpana-card__features ul {
      list-style: none;
      padding-left: 40px;
      margin: 0;
    }

    .gnc-kalpana-card__features li {
      position: relative;
      margin-bottom: 12px;
      font-size: 16px;
      line-height: 24px;
      color: #eee;
      white-space: normal;
      overflow-wrap: break-word;
      list-style: none;
    }

    .gnc-kalpana-card__features li::before {
      content: "";
      position: absolute;
      left: -30px;
      top: 2px;
      background: url("assets/image/yellow-star.webp") no-repeat;
      background-size: contain;
      width: 20px;
      height: 20px;
    }

    .gnc-kalpana-card__logo {
      position: absolute;
      right: 60px;
      bottom: 60px;
      width: 240px;
      z-index: 4;
      mix-blend-mode: multiply;
    }

    /* ==============================
       RESPONSIVE STYLES
    =============================== */
    @media (max-width: 991px) {
      .gnc-scholarship__heading h2 {
        font-size: 32px;
      }

      .gnc-scholarship__card-content h3 {
        font-size: 42px;
      }

      .gnc-scholarship__card-content p {
        font-size: 14px;
      }

      .gnc-scholarship-intro {
        padding-top: 60px;
        padding-bottom: 180px;
      }

      .gnc-scholarship-intro__heading h2 {
        font-size: 28px;
      }

      .gnc-kalpana-card {
        height: auto;
        transform: translateY(-120px);
      }

      .gnc-kalpana-card__content {
        padding: 40px 40px;
      }

      .gnc-kalpana-card__logo {
        width: 180px;
        right: 30px;
        bottom: 30px;
      }
    }

    @media (max-width: 768px) {
      .gnc-scholarship__cards {
        display: block; /* Slick will take over layout */
      }

    
      .gnc-scholarship__heading h2 {
        font-size: 26px;
      }

      .gnc-scholarship__card-content h3 {
        font-size: 36px;
      }

      .gnc-scholarship__card {
        height: 380px;
        margin: 0 auto;
        /* display: flex !important;
        gap: 2rem !important; */
      }

       .gnc-scholarship__cards .gnc-scholarship__card {
        margin: 0 10px; /* gives 20px total gap between slides */
       }

      .gnc-scholarship-intro {
        padding-bottom: 160px;
      }

      .gnc-scholarship-intro__description {
        font-size: 12px;
      }

      .gnc-kalpana-card {
        transform: translateY(-100px);
      }

      .gnc-kalpana-card__content {
        padding: 30px 25px;
      }

      .gnc-kalpana-card__logo {
        display: none;
      }

    .slick-dots li button:before {
     color: #fff !important;
     font-size: 10px;
     opacity: 0.8;
    }

    .slick-dots li.slick-active button:before {
      color: #ffcc00 !important;
      opacity: 1;
     }
    }

    @media (max-width: 480px) {
      .gnc-scholarship__heading h2 {
        font-size: 22px;
      }

      .gnc-scholarship__card-content h3 {
        font-size: 30px;
      }

      /* Slick dots */
      .slick-dots li button:before {
        color: #fff !important;
        font-size: 10px;
        opacity: 0.8;
    }

   .slick-dots li.slick-active button:before {
        color: #ffcc00 !important;
        opacity: 1;
    }

      .gnc-kalpana-card__title h2 {
        font-size: 20px;
      }

      .gnc-kalpana-card__features li {
        font-size: 14px;
        line-height: 22px;
      }

    .gnc-kalpana-card {
        transform: translateY(-90px);
        width: 100vw;
        margin-left: calc(-50vw + 50%);
        border-radius: 0;
      }

      .gnc-scholarship-intro {
        padding-top: 40px;
        padding-bottom: 120px;
      }
    }
  </style>

  <div class="container">
    <!-- Entrepreneurship Heading -->
    <div class="text-center gnc-scholarship__heading">
      <h2>Venture into <span>Entrepreneurship</span></h2>
    </div>
    <div class="gnc-scholarship__description text-center">
      <p>
        Nurturing leaders of tomorrow, by building the foundation for their dreams and equipping them
        <br />with global exposure and industry support.
      </p>
    </div>

    <!-- Entrepreneurship Cards -->
    <div class="gnc-scholarship__cards">
      <div class="gnc-scholarship__card">
        <div class="gnc-scholarship__card-bg" data-bg="assets/image/event-1.webp">
          <div class="gnc-scholarship__card-content">
            <h3>150+</h3>
            <p>Start-ups running successfully</p>
          </div>
        </div>
      </div>
      <div class="gnc-scholarship__card">
        <div class="gnc-scholarship__card-bg" data-bg="assets/image/event-2.webp">
          <div class="gnc-scholarship__card-content">
            <h3>7</h3>
            <p>Start-ups Recognised by Start-up India</p>
          </div>
        </div>
      </div>
      <div class="gnc-scholarship__card">
        <div class="gnc-scholarship__card-bg" data-bg="assets/image/event-3.webp">
          <div class="gnc-scholarship__card-content">
            <h3>50+</h3>
            <p>Companies with more than 50 Lakh Turnover</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Space Intro Section -->
    <div class="gnc-scholarship-intro">
      <div class="gnc-scholarship-intro__heading">
        <h2>Space Science <span>&amp; Technology Research Center</span></h2>
      </div>
      <p class="gnc-scholarship-intro__description">
        Kalpana Chawla Centre for Research in Space Science and Technology is paving the way for advancement in space
        technology with discovery, research, and education. The Centre is providing satellite design training to
        students from 21 nations and communicating with 28 countries that are part of the Satellite Networked Open
        Ground Station (SatNOGS). Hon’ble Defence Minister of India, Shri Rajnath Singh inaugurated the KCCRSST at
        Chandigarh University.
      </p>
    </div>
  </div>
</section>

<!-- KALPANA CHAWLA RESEARCH SECTION -->
<section class="gnc-kalpana-section">
  <div class="container">
    <div class="gnc-kalpana-card" data-bg="assets/image/computer-lab.webp">
      <div class="gnc-kalpana-card__content">
        <div class="gnc-kalpana-card__title">
          <h2>Distinctive Feature of the Ground Station</h2>
        </div>
        <div class="row">
          <div class="col-md-6">
            <ul class="gnc-kalpana-card__features">
              <li>Can communicate with SatNOGS networked ground stations across the globe</li>
              <li>Research on 3D Printed Aluminum / Plastic structures that can be used in SPACE explorations</li>
              <li>Thermal study of materials in vacuum</li>
              <li>Star gazing centre</li>
            </ul>
          </div>
          <div class="col-md-6">
            <ul class="gnc-kalpana-card__features">
              <li>Experimental studies on compact structures of satellite for LEO</li>
              <li>Experimental materials for antennae and deployment methods</li>
              <li>Unmanned aerial vehicle design</li>
              <li>Model rocketry lab</li>
            </ul>
          </div>
        </div>
      </div>
      <img
        class="gnc-kalpana-card__logo"
        src="assets/image/logo/27.webp"
        alt="Kalpana Chawla Center for Research in Space Science & Technology"
      />
    </div>
  </div>
</section>

<script>
  // Auto-apply background images
  document.querySelectorAll("[data-bg]").forEach((el) => {
    el.style.backgroundImage = `url(${el.getAttribute("data-bg")})`;
  });

  // ✅ Slick Slider only for mobile devices (<=768px)
  $(document).ready(function () {
    const $slider = $(".gnc-scholarship__cards");

    function initSlick() {
      if ($(window).width() <= 768) {
        if (!$slider.hasClass("slick-initialized")) {
          $slider.slick({
            dots: true,
            arrows: false,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 2500,
            slidesToShow: 1,
            slidesToScroll: 1,
            adaptiveHeight: true,
            mobileFirst: true,
          });
        }
      } else {
        // destroy slick if it's active on desktop/laptop
        if ($slider.hasClass("slick-initialized")) {
          $slider.slick("unslick");
        }
      }
    }

    // Initialize on load
    initSlick();

    // Re-check on window resize
    $(window).on("resize", function () {
      initSlick();
    });
   });
</script>
