<section class="experience-section">
  <div class="container">
    <h2 class="exp-heading">An Unmatched College Experience</h2>
    <div class="exp-grid">
      
      <div class="exp-card">
        <div class="exp-img">
          <img src="assets/image/dandiya-nights.webp" alt="Cultural Events">
        </div>
        <div class="exp-content">
          <h3>Cultural Extravaganza</h3>
          <p>Celebrate creativity through music, dance, art, and fests that make campus life unforgettable. Every event at GNC reflects energy, unity, and joy.</p>
        </div>
      </div>

      <div class="exp-card">
        <div class="exp-img">
          <img src="assets/image/pcm-head.webp" alt="Modern Labs">
        </div>
        <div class="exp-content">
          <h3>Advanced Lab Facilities</h3>
          <p>Empowering innovation with modern, fully equipped labs that bridge theory with real-world application and discovery.</p>
        </div>
      </div>

      <div class="exp-card">
        <div class="exp-img">
          <img src="assets/image/gobal.webp" alt="Global Partnership">
        </div>
        <div class="exp-content">
          <h3>Global Partnerships</h3>
          <p>Collaborate with leading institutions worldwide for exposure to diverse ideas, research, and global learning opportunities.</p>
        </div>
      </div>

      <div class="exp-card">
        <div class="exp-img">
          <img src="assets/image/innovative.webp" alt="Quality Education">
        </div>
        <div class="exp-content">
          <h3>Quality Education</h3>
          <p>Learn from experienced mentors through a curriculum that builds knowledge, creativity, and leadership for tomorrow’s world.</p>
        </div>
      </div>

    </div>
  </div>
</section>
<style>
/* Base Section */
.experience-section {
  background: #000;
  padding: 100px 20px;
  color: #fff;
  text-align: center;
  overflow: hidden;
}

.exp-heading {
  font-size: 2.5rem;
  font-weight: 700;
  margin-bottom: 60px;
  text-transform: uppercase;
  color: #fff;
  letter-spacing: 1px;
  position: relative;
}

.exp-heading::after {
  content: "";
  position: absolute;
  bottom: -10px;
  left: 50%;
  transform: translateX(-50%);
  width: 120px;
  height: 3px;
  background: linear-gradient(90deg, transparent, #00bfff, transparent);
  border-radius: 2px;
}

/* Card Grid */
.exp-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
  gap: 40px;
  justify-items: center;
}

/* Card Style */
.exp-card {
  background: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 16px;
  overflow: hidden;
  max-width: 350px;
  opacity: 0;
  transform: translateY(50px);
  transition: all 0.8s ease;
  filter: blur(6px);
}

/* Active Animation */
.exp-card.active {
  opacity: 1;
  transform: translateY(0);
  filter: blur(0);
  box-shadow: 0 0 25px rgba(0, 191, 255, 0.35);
}

/* Hover Effect */
.exp-card:hover {
  transform: translateY(-10px) scale(1.02);
  box-shadow: 0 0 40px rgba(0, 191, 255, 0.5);
}

/* Images */
.exp-img img {
  width: 100%;
  height: 220px;
  object-fit: cover;
  transition: all 0.6s ease;
  filter: brightness(0.8);
}

.exp-card:hover img {
  filter: brightness(1);
  transform: scale(1.05);
}

/* Content */
.exp-content {
  padding: 25px 20px 35px;
}

.exp-content h3 {
  font-size: 1.3rem;
  margin-bottom: 10px;
  color: #00bfff;
}

.exp-content p {
  font-size: 0.95rem;
  line-height: 1.6;
  color: #ccc;
}

@media (max-width: 768px) {
  .exp-heading {
    font-size: 2rem;
  }
  .exp-content h3 {
    font-size: 1.1rem;
  }
  .exp-content p {
    font-size: 0.9rem;
  }
}
</style>

<script>
window.addEventListener('scroll', revealCards);
window.addEventListener('load', revealCards);

function revealCards() {
  const cards = document.querySelectorAll('.exp-card');
  const triggerBottom = window.innerHeight * 0.8;

  let delay = 0;

  cards.forEach((card, index) => {
    const top = card.getBoundingClientRect().top;

    if (top < triggerBottom) {
      // staggered delay
      setTimeout(() => {
        card.classList.add('active');
      }, delay);
      delay += 200; // delay between each card
    } else {
      card.classList.remove('active');
    }
  });
}
</script>
