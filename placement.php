<section class="gnc-placement-section container mb-5">

  <!-- Main Heading -->
  <h2 class="gnc-main-heading mb-5 mt-2">
    Our Students, <br>
    <span>The Industry’s Future Leaders</span>
  </h2>

  <!-- Placement Slider + Content -->
  <div class="gnc-placement-wrapper">

    <!-- Left: Placement Slider -->
    <div class="gnc-slider-left">
      <div class="gnc-slider-track">

        <div class="gnc-slide-group">
          <div class="gnc-slide-card"><img src="assets/image/placement-1.webp" alt="Harsh Vardhan"></div>
          <div class="gnc-slide-card"><img src="assets/image/placement-2.webp" alt="Shanya Trehan"></div>
        </div>

        <div class="gnc-slide-group">
          <div class="gnc-slide-card"><img src="assets/image/placement-3.webp" alt="Another Student"></div>
          <div class="gnc-slide-card"><img src="assets/image/placement-4.webp" alt="Shanya Trehan"></div>
        </div>

        <div class="gnc-slide-group">
          <div class="gnc-slide-card"><img src="assets/image/placement-5.webp" alt="Shanya Trehan"></div>
          <div class="gnc-slide-card"><img src="assets/image/placement-6.webp" alt="Shanya Trehan"></div>
        </div>

      </div>

      <!-- Slider Navigation -->
      <div class="gnc-slider-nav">
        <span class="gnc-prev text-white">‹</span>
        <span class="gnc-next text-white">›</span>
      </div>
    </div>

    <!-- Right: Placement Content -->
    <div class="gnc-slider-right">
      <p class="gnc-overview text-white">Placements Overview</p>
      <h2 class="gnc-title text-white">The World's <strong>Leading Companies Hire Our Talent</strong></h2>
      <div class="gnc-buttons">
        <a href="#" class="gnc-btn-apply" onclick="event.preventDefault();">APPLY NOW →</a>
        <a href="#" class="gnc-btn-view" onclick="event.preventDefault();">VIEW PLACEMENT →</a>
      </div>

      <!-- Big Stats -->
      <div class="gnc-stats">
        <div class="gnc-stat"><h3 style="color: #fc8435;">900+</h3><p>Placement Offers</p></div>
        <div class="gnc-stat"><h3>100+</h3><p>Companies Visited</p></div>
        <div class="gnc-stat highlight"><h3>54.75 LPA</h3><p>Highest National Package</p></div>
        <div class="gnc-stat"><h3>12 LPA</h3><p>Average Placement Package</p></div>
      </div>

      <!-- Mini Stats -->
      <div class="gnc-mini-stats">
        <div><strong>12 LPA</strong><p>Offered by <span style="color: #fc8435;">20+</span> Companies</p></div>
        <div><strong>8 LPA</strong><p>Offered by <span style="color: #fc8435;">30+</span> Companies</p></div>
        <div><strong>6 LPA</strong><p>Offered by <span style="color: #fc8435;">70+</span> Companies</p></div>
      </div>
    </div>

  </div>

  <!-- Placement Verticals -->
  <div class="gnc-verticals mt-5 text-white">
    <h2>Placement Verticals</h2>
    <h3>Bridging The Gap By Aligning With The Industry</h3>
    <div class="gnc-verticals-grid">
      <!-- First Row: 4 Logos -->
      <div class="gnc-vertical-item"><img src="assets/image/practice.webp" alt="Training & Placements"><p>Training & Placements</p></div>
      <div class="gnc-vertical-item"><img src="assets/image/integration.webp" alt="Work Integrated Programs"><p>Work Integrated Programs</p></div>
      <div class="gnc-vertical-item"><img src="assets/image/industrial.webp" alt="Industry Collaborations"><p>Industry Collaborations</p></div>
      <div class="gnc-vertical-item"><img src="assets/image/outstanding.webp" alt="Centers of Excellence"><p>Centers of Excellence</p></div>

      <!-- Second Row: 5 Logos -->
      <div class="gnc-vertical-item"><img src="assets/image/users.webp" alt="Executive Development Programs"><p>Executive Development Programs</p></div>
      <div class="gnc-vertical-item"><img src="assets/image/community_1.webp" alt="Industry Visits"><p>Industry Visits</p></div>
      <div class="gnc-vertical-item"><img src="assets/image/building_1.webp" alt="Industry Advisory Board"><p>Industry Advisory Board</p></div>
      <div class="gnc-vertical-item"><img src="assets/image/creative-team.webp" alt="Career Competencies"><p>Career Competencies</p></div>
      <div class="gnc-vertical-item"><img src="assets/image/document.webp" alt="Skill Development"><p>Skill Development</p></div>
    </div>
  </div>

  <!-- Industry Collaboration Slider -->
  <h2 class="gnc-collab-title mt-5 text-white">Industry Collaboration</h2>
  <h3 class="text-white">Driving innovation through strategic industry collaboration and partnerships.</h3>

  <div class="gnc-top-companies-wrapper">
    <div class="gnc-top-companies-track">
      <?php
      for ($i = 1; $i <= 39; $i++) {
        $imageSrc = "./assets/image/company/c ($i).webp";
        echo '<div class="gnc-company-logo"><img src="' . $imageSrc . '" alt="GNC Top Recruiter"></div>';
      }
      for ($i = 1; $i <= 39; $i++) {
        $imageSrc = "./assets/image/company/c ($i).webp";
        echo '<div class="gnc-company-logo"><img src="' . $imageSrc . '" alt="GNC Top Recruiter"></div>';
      }
      ?>
    </div>
  </div>

</section>

<style>
/* -------------------- MAIN HEADING -------------------- */
.gnc-main-heading {
  font-size: 42px;
  font-weight: 700;
  line-height: 1.2;
  text-align: center;
  color: #fff;
}
.gnc-main-heading span {
  background: linear-gradient(90deg, #0f9af1, #00d4ff);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  position: relative;
}
.gnc-main-heading span::after {
  content: "";
  display: block;
  width: 50%;
  height: 4px;
  background: #0f9af1;
  margin-top: 5px;
  border-radius: 2px;
  transition: width 0.5s ease;
}
.gnc-main-heading:hover span::after { width: 100%; }

/* -------------------- PLACEMENT WRAPPER -------------------- */
.gnc-placement-wrapper { display: flex; flex-wrap: wrap; gap: 40px; max-width: 1350px; margin: auto; align-items: flex-start; }

/* -------------------- SLIDER -------------------- */
.gnc-slider-left { flex: 1 1 500px; position: relative; overflow: hidden; opacity: 0; transform: translateX(-100px); transition: all 1s ease; }
.gnc-slider-right { flex: 1 1 400px; opacity: 0; transform: translateX(100px); transition: all 1s ease; }

.gnc-slider-left.show-left { opacity: 1; transform: translateX(0); }
.gnc-slider-right.show-right { opacity: 1; transform: translateX(0); }

.gnc-slider-track { display: flex; transition: transform 0.6s ease-in-out; width: 100%; }
.gnc-slide-group { min-width: 100%; display: flex; gap: 20px; justify-content: center; }
.gnc-slide-card { flex: 0 0 45%; border-radius: 12px; box-shadow: 0 10px 25px rgba(0,0,0,0.1); overflow: hidden; }
.gnc-slide-card img { width: 100%; display: block; border-radius: 12px; }
.gnc-slider-nav { text-align: center; margin-top: 15px; }
.gnc-slider-nav span { display: inline-block; margin: 0 5px; font-size: 24px; cursor: pointer; }

/* -------------------- RIGHT CONTENT -------------------- */
.gnc-overview { font-size: 16px; font-weight: 500; }
.gnc-title { font-size: 36px; margin: 10px 0 20px; line-height: 1.3; }
.gnc-buttons a { padding: 15px; margin-right: 10px; border-radius: 5px; text-decoration: none; font-weight: 600; display: inline-block; }
.gnc-btn-apply { background: #0f9af1; color: #fff; }
.gnc-btn-view { background: #fff; color: #000; border: 1px solid #000; }

/* -------------------- STATS -------------------- */
.gnc-stats { display: flex; flex-wrap: wrap; gap: 15px; margin: 30px 0 15px; }
.gnc-stat { flex: 1 1 200px; padding: 20px; background: #fff; text-align: center; border-radius: 8px; }
.gnc-stat.highlight { background: #000; color: #fff; }
.gnc-stat h3 { margin: 0; font-size: 22px; }
.gnc-stat p { margin: 5px 0 0; font-size: 14px; }
.gnc-mini-stats { display: flex; flex-wrap: wrap; gap: 15px; margin-top: 20px; }
.gnc-mini-stats div { flex: 1 1 150px; padding: 10px; background: #f4f4f4; border-radius: 6px; text-align: center; }
.gnc-mini-stats strong { display: block; font-size: 16px; }
.gnc-mini-stats p { margin: 0; font-size: 12px; }

/* -------------------- VERTICALS -------------------- */
.gnc-verticals-grid { display: grid; grid-template-columns: repeat(5, 1fr); gap: 30px; justify-items: center; text-align: center; margin-top: 20px; }
.gnc-vertical-item img { width: 60px; height: 60px; filter: brightness(0) invert(1); margin-bottom: 10px; }
.gnc-vertical-item p { color: #fff; font-size: 14px; margin: 0; }
@media (max-width: 768px) {
  .gnc-verticals-grid { grid-template-columns: repeat(2, 1fr); gap: 20px; }
  .gnc-vertical-item img { width: 50px; height: 50px; }
  .gnc-vertical-item p { font-size: 12px; }
  .gnc-slider-left { flex: 1 1 300px; position: relative; overflow: hidden; opacity: 0; transform: translateX(-100px); transition: all 1s ease; }
}

/* -------------------- TOP COMPANIES -------------------- */
.gnc-top-companies-wrapper { overflow: hidden; width: 100%; margin-top: 20px; position: relative; }
.gnc-top-companies-track { display: flex; gap: 20px; animation: slideLeft 40s linear infinite; }
.gnc-company-logo { flex: 0 0 auto; width: 100px; text-align: center; }
.gnc-company-logo img { width: 100%; height: auto; display: block; }
@keyframes slideLeft { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }

/* -------------------- RESPONSIVE -------------------- */
@media (max-width: 992px) { .gnc-placement-wrapper { flex-direction: column; } }

</style>

<script>
document.addEventListener("DOMContentLoaded", () => {
  // Placement Slider
  const slider = document.querySelector(".gnc-slider-left");
  const track = slider.querySelector(".gnc-slider-track");
  const slides = slider.querySelectorAll(".gnc-slide-group");
  const prevBtn = slider.querySelector(".gnc-prev");
  const nextBtn = slider.querySelector(".gnc-next");
  let index = 0;
  const total = slides.length;
  let interval;

  function showSlide() { track.style.transform = `translateX(-${index * 100}%)`; }
  function nextSlide() { index = (index + 1) % total; showSlide(); resetInterval(); }
  function prevSlide() { index = (index - 1 + total) % total; showSlide(); resetInterval(); }

  nextBtn.addEventListener("click", nextSlide);
  prevBtn.addEventListener("click", prevSlide);

  function startAuto() { interval = setInterval(nextSlide, 6000); }
  function resetInterval() { clearInterval(interval); startAuto(); }
  startAuto();

  // Scroll Animations
  const leftSlider = document.querySelector(".gnc-slider-left");
  const rightContent = document.querySelector(".gnc-slider-right");

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if(entry.isIntersecting){
        leftSlider.classList.add("show-left");
        rightContent.classList.add("show-right");
      } else {
        leftSlider.classList.remove("show-left");
        rightContent.classList.remove("show-right");
      }
    });
  }, { threshold: 0.3 });

  observer.observe(leftSlider);
  observer.observe(rightContent);
});
</script>
