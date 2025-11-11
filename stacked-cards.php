<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Sticky Stacking Cards (Lucknow & Dehradun)</title>
<style>
  :root {
    --stack-cards: 2;
    --stack-card-height: 82vh;
    --stack-gap: 4vh;
    --stack-shadow: 0 12px 35px rgba(0, 0, 0, .35);
    --stack-bg: #101215;
    --stack-fg: #fff;
  }

  body {
    margin: 0;
    font-family: "Poppins", sans-serif;
    background: var(--stack-bg);
    color: var(--stack-fg);
  }

  /* Section setup */
  .stack-section {
    position: relative;
    overflow: hidden;
  }

  .stack-scroll {
    overflow-y: auto;
    height: 100vh;
    scrollbar-width: none;
    scroll-behavior: smooth;
  }
  .stack-scroll::-webkit-scrollbar {
    display: none;
  }

  .stack-list {
    list-style: none;
    display: grid;
    grid-template-columns: 1fr;
    grid-auto-rows: var(--stack-card-height);
    gap: var(--stack-gap);
    margin: 0;
    padding: 0;
   
  }

  /* Sticky Card Base */
  .stack-card {
    position: sticky;
    height: var(--stack-card-height);
    width: 100%;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    transition: transform 0.35s ease, box-shadow 0.35s ease;
    box-shadow: var(--stack-shadow);
  }

  /* Hover lift effect */
  .stack-card:hover {
    transform: scale(1.01);
    box-shadow: 0 16px 45px rgba(0, 0, 0, .5);
  }

  /* Natural stagger for clean stacking */
  #stack-card1 { top: 0; }
  #stack-card2 { top: 6vh; }

  /* Softer overlays for readability */
  #stack-card1 {
    background-image:
      linear-gradient(rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.55)),
      url("assets/image/lucknow.webp");
  }

  #stack-card2 {
    background-image:
      linear-gradient(rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.55)),
      url("assets/image/dehradun.webp");
  }

  /* Card Body */
  .stack-card__body {
    max-width: 1200px;
    text-align: center;
    padding: 80px 5%;
    color: #fff;
  }

  /* Main Heading */
  .stack-card__body h2 {
    font-size: clamp(2rem, 4vw, 3.2rem);
    font-weight: 700;
    margin-bottom: 15px;
    color: #fff;
    line-height: 1.2;
  }

  .stack-card__body h2 span {
    font-style: italic;
    font-weight: 400;
  }

  /* Subheading */
  .stack-card__body > p {
    font-size: 1rem;
    color: #f0f0f0;
    max-width: 900px;
    margin: 0 auto 60px;
    line-height: 1.8;
  }

  /* Info Grid */
  .info-grid {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 30px;
    border-top: 1px solid rgba(255, 255, 255, 0.25);
    padding-top: 40px;
  }

  .info-item {
    flex: 1;
    min-width: 220px;
    display: flex;
    flex-direction: column;
    text-align: left;
    padding: 0 20px;
    border-left: 1px solid rgba(255, 255, 255, 0.25);
  }

  .info-item:first-child {
    border-left: none;
    padding-left: 0;
  }

  .info-item h3 {
    font-size: 1.25rem;
    font-weight: 700;
    margin-bottom: 12px;
  }

  .info-item p {
    font-size: 15px;
    line-height: 22px;
    font-weight: 300;
    color: #ddd;
    margin: 0;
  }

  /* ✅ Responsive Design */
  @media (max-width: 992px) {
    .stack-card__body {
      padding: 60px 5%;
    }

    .stack-card__body h2 {
      font-size: clamp(1.8rem, 3.8vw, 2.5rem);
    }

    .stack-card__body > p {
      font-size: 0.95rem;
      margin-bottom: 40px;
      line-height: 1.7;
    }

    .info-grid {
      flex-wrap: wrap;
      gap: 20px;
    }

    .info-item {
      flex: 1 1 45%;
      border-left: none;
      border-top: 1px solid rgba(255, 255, 255, 0.25);
      padding-top: 20px;
    }

    .info-item:first-child {
      border-top: none;
      padding-top: 0;
    }
  }

  @media (max-width: 600px) {
    .stack-card {
      height: auto;
      min-height: 100vh; 
      align-items: flex-start;
    }

    .stack-card__body {
      padding: 60px 20px;
      text-align: center;
    }

    .stack-card__body h2 {
      font-size: 1.8rem;
      margin-bottom: 12px;
    }

    .stack-card__body > p {
      font-size: 0.9rem;
      line-height: 1.6;
      margin-bottom: 40px;
    }

    .info-grid {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 25px;
      border-top: 1px solid rgba(255, 255, 255, 0.25);
      padding-top: 30px;
    }

    .info-item {
      width: 100%;
      border: none;
      text-align: center;
      padding: 0;
    }

    .info-item h3 {
      font-size: 1.1rem;
      margin-bottom: 10px;
    }

    .info-item p {
      font-size: 0.9rem;
      line-height: 1.5;
      max-width: 90%;
      margin: 0 auto;
    }
  }
</style>
</head>
<body>

<section class="stack-section">
  <div class="stack-scroll">
    <ul class="stack-list">

      <!-- Lucknow Card -->
      <li class="stack-card" id="stack-card1">
        <div class="stack-card__body">
          <h2>Lucknow, <span>A Hub of Cultural Heritage</span></h2>
          <p>
            Lucknow is a city that seamlessly blends its historical grandeur with modern development,
            making it a unique and vibrant place for both residents and visitors. – World Tourism Organization
          </p>

          <div class="info-grid">
            <div class="info-item">
              <h3>Explore</h3>
              <p>
                Discover the vibrant city of Lucknow, where history and modernity converge,
                offering students a rich cultural experience. From iconic monuments like
                the Bara Imambara and Rumi Darwaza to its unique blend of tradition and innovation.
              </p>
            </div>
            <div class="info-item">
              <h3>Well-Connected</h3>
              <p>
                Experience the convenience of Lucknow's exceptional connectivity, featuring a
                well-developed network of roads, railways, and airways. Its strategic location
                makes it a perfect hub for business and leisure alike.
              </p>
            </div>
            <div class="info-item">
              <h3>Travel</h3>
              <p>
                Venture into Lucknow, a city beautifully showcasing its historical charm and modern vibrancy.
                From scenic parks to bustling markets, every corner offers a unique experience.
              </p>
            </div>
            <div class="info-item">
              <h3>Smart City</h3>
              <p>
                Uncover the future of innovation in Lucknow, an emerging AI city in India.
                With advanced infrastructure and a focus on AI-driven advancements,
                it presents limitless opportunities for students to thrive in the digital economy.
              </p>
            </div>
          </div>
        </div>
      </li>

      <!-- Dehradun Card -->
      <li class="stack-card" id="stack-card2">
        <div class="stack-card__body">
          <h2>Dehradun, <span>The Education Capital of India</span></h2>
          <p>
            Nestled in the foothills of the Himalayas, Dehradun is known for its serene beauty,
            world-class educational institutions, and modern infrastructure — a city that inspires learning and growth.
          </p>

          <div class="info-grid">
            <div class="info-item">
              <h3>Education Hub</h3>
              <p>
                Dehradun is home to some of India’s most prestigious schools and universities,
                including Doon School, Welham, and UPES. The city’s learning environment attracts students nationwide.
              </p>
            </div>
            <div class="info-item">
              <h3>Scenic Environment</h3>
              <p>
                Surrounded by lush green hills and pleasant weather, Dehradun offers a calm and peaceful atmosphere
                that enhances creativity, focus, and a healthy lifestyle for students.
              </p>
            </div>
            <div class="info-item">
              <h3>Connectivity</h3>
              <p>
                With excellent road, rail, and air connectivity to Delhi, Mussoorie, and Rishikesh,
                Dehradun serves as the perfect gateway to both education and adventure.
              </p>
            </div>
            <div class="info-item">
              <h3>Modern Living</h3>
              <p>
                A blend of tradition and progress, Dehradun provides all modern amenities while preserving its natural beauty —
                making it an ideal place for learning, living, and exploring.
              </p>
            </div>
          </div>
        </div>
      </li>

    </ul>
  </div>
</section>

</body>
</html>
