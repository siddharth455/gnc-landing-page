<section class="why-choose" id="why-choose">
  <div class="container">
    <div class="why-header-title">
      <h2>Why Should You Choose <br><span>Guru Nanak College?</span></h2>
    </div>

    <div class="why-content">
      <!-- Item 1 -->
      <div class="why-item active">
        <button class="why-question">
          <span class="why-number">01</span>
          <span class="why-text">Excellence in Every Endeavour 🌟</span>
          <span class="arrow">→</span>
        </button>
        <div class="why-answer">
          <div class="why-answer-inner">
            <div class="why-text-content">
              <p>
              Guru Nanak College strives to cultivate excellence in academics, innovation, and personal growth. Through dedicated faculty, modern infrastructure, and value-based education, students are inspired to achieve their highest potential and contribute meaningfully to society.
              </p>
            </div>
            <div class="why-img">
              <img src="assets/image/faq-1.webp" alt="Networking">
            </div>
          </div>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="why-item">
        <button class="why-question">
          <span class="why-number">02</span>
          <span class="why-text">Your Career, Our Commitment🎯</span>
          <span class="arrow">→</span>
        </button>
        <div class="why-answer">
          <div class="why-answer-inner">
            <div class="why-text-content">
              <p>
              We focus on guiding students toward fulfilling careers through structured training, expert mentorship, and industry-integrated programs. Our dedicated Career Development Cell ensures every student gains the skills, confidence, and exposure needed to excel in the professional world.
              </p>
            </div>
            <div class="why-img">
              <img src="assets/image//faq-2.webp" alt="Learning">
            </div>
          </div>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="why-item">
        <button class="why-question">
          <span class="why-number">03</span>
          <span class="why-text">Learning Beyond Classrooms💡</span>
          <span class="arrow">→</span>
        </button>
        <div class="why-answer">
          <div class="why-answer-inner">
            <div class="why-text-content">
              <p>
              At Guru Nanak College, education extends far beyond textbooks. Students engage in experiential learning, research, internships, and creative projects that build critical thinking, problem-solving abilities, and a passion for continuous growth and discovery.
              </p>
            </div>
            <div class="why-img">
              <img src="assets/image//faq-3.webp" alt="Industry Partnership">
            </div>
          </div>
        </div>
      </div>
      <div class="why-item">
        <button class="why-question">
          <span class="why-number">04</span>
          <span class="why-text">Global Outlook, Local Roots🌏</span>
          <span class="arrow">→</span>
        </button>
        <div class="why-answer">
          <div class="why-answer-inner">
            <div class="why-text-content">
              <p>
              We prepare students to thrive in an interconnected world while staying grounded in strong cultural and ethical values. Our global collaborations and exchange programs offer exposure to diverse perspectives and international learning experiences.
              </p>
            </div>
            <div class="why-img">
              <img src="assets/image//faq-4.webp" alt="Learning">
            </div>
          </div>
        </div>
      </div>
      <div class="why-item">
        <button class="why-question">
          <span class="why-number">05</span>
          <span class="why-text">Where Potential Meets Opportunity🎓</span>
          <span class="arrow">→</span>
        </button>
        <div class="why-answer">
          <div class="why-answer-inner">
            <div class="why-text-content">
              <p>
              Guru Nanak College provides a nurturing environment where talent, determination, and opportunity come together. With comprehensive academic support, skill development programs, and real-world exposure, students are empowered to turn aspirations into lifelong achievements.
              </p>
            </div>
            <div class="why-img">
              <img src="assets/image//faq-5.webp" alt="Learning">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
.why-choose.visible {
  opacity: 1;
  transform: translateY(0);
}

/* ===== Title ===== */
.why-header-title {
  text-align: left;
  margin-bottom: 60px;
  padding-left: 20px;
}
.why-header-title h2 {
  font-size: 2.8rem;
  font-weight: 200;
  line-height: 1.3;
  color: rgb(255, 255, 255);
}
.why-header-title span {
  color: #0f9af1;
  font-weight: 700;
}

/* ===== Accordion Wrapper ===== */
.why-content {
  display: flex;
  flex-direction: column;
  margin-left: 200px;
}

/* ===== Accordion Item ===== */
/* .why-item {
  background: #fff;
  border-bottom: 1px solid #000; 
  transition: all 0.4s ease;
} */

/* ===== Accordion Header (Button) ===== */
.why-question {
  width: 100%;
  background: none;
  color: #fff;
  border: none;
  outline: none;
  display: flex;
  align-items: center;
  gap: 20px;
  padding: 20px 0;
  cursor: pointer;
  font-size: 1.1rem;
  font-weight: 600;
  text-align: left;
  transition: all 0.3s ease;
}
.why-question:hover {
  background-color:#0f9af1;
}
/* Default number */
.why-number {
  font-size: 2.5rem;
  color: rgba(255, 255, 255, 0.25);
  font-weight: 800;
  width: 80px;
  text-align: left;
  transition: all 0.5s ease;
  align-self: flex-start;
}

/* When accordion is active — number moves to full vertical center */
.why-item.active .why-number {
  position: absolute;
  left: 0;
  top: 50%;
  transform: translateY(-50%);
  text-align: center;
  color: #0f9af1;
  font-size: 3.5rem;
  opacity: 0.15;
}

/* Parent relative to position number properly */
.why-item {
  position: relative;
  transition: all 0.4s ease;
  border-bottom: 1px solid #222;
}

/* Add space so text doesn't overlap number when active */
.why-item.active .why-answer-inner,
.why-item.active .why-question {
  padding-left: 100px;
}

.arrow {
  margin-left: auto;
  font-size: 2.2rem;
  color: rgb(255, 255, 255);
  transition: transform 0.3s ease;
}

/* ===== Accordion Body ===== */
.why-answer {
  max-height: 0;
  overflow: hidden;
  opacity: 0;
  transform: translateY(-10px);
  transition: all 0.5s ease;
}

/* Inner Content (Text + Image side by side) */
.why-answer-inner {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 30px;
  padding: 0 0 20px 80px;
}

.why-text-content {
  flex: 1;
}

.why-text-content p {
  line-height: 1.6;
  font-size: 0.95rem;
  color: #fff;
  margin: 0;
}

.why-img img {
  width: 200px;
  height: 200px;
  object-fit: cover;
  border-radius: 10px;
}

/* ===== Active Accordion ===== */
.why-item.active .why-answer {
  max-height: 400px;
  opacity: 1;
  transform: translateY(0);
  padding-bottom: 25px;
}
.why-item.active .arrow {
  transform: rotate(90deg);
}

/* ===== Responsive ===== */
@media (max-width: 768px) {
  .why-header-title h2 {
    font-size: 2rem;
  }
  .why-content {
    margin-left: 0;
  }
  .why-answer-inner {
    flex-direction: column;
    align-items: flex-start;
    padding-left: 0;
  }
  .why-img img {
    width: 100%;
    height: auto;
  }
}
/* Remove the section-level animation */
.why-choose {
  background-color:rgb(0, 0, 0);
  padding: 100px 0;
  font-family: "Poppins", sans-serif;
  color: #222;
}

/* ===== Item-level animation ===== */
.why-item {
  background: rgb(0, 0, 0);
  border-bottom: 1px solid #000;
  transition: all 0.4s ease;
  opacity: 0;
  transform: translateY(60px);
  transition: all 0.8s ease-out;
}

/* When visible (via JS) */
.why-item.visible {
  opacity: 1;
  transform: translateY(0);
}

/* Optional: small stagger for nice effect */
.why-item.visible:nth-child(1) { transition-delay: 0.1s; }
.why-item.visible:nth-child(2) { transition-delay: 0.2s; }
.why-item.visible:nth-child(3) { transition-delay: 0.3s; }
.why-item.visible:nth-child(4) { transition-delay: 0.4s; }
.why-item.visible:nth-child(5) { transition-delay: 0.5s; }

</style>
<script>
/* Accordion functionality */
document.addEventListener("DOMContentLoaded", () => {
  const accordions = document.querySelectorAll(".why-item");
  accordions.forEach(item => {
    const btn = item.querySelector(".why-question");
    btn.addEventListener("click", () => {
      const isActive = item.classList.contains("active");
      accordions.forEach(i => i.classList.remove("active"));
      if (!isActive) item.classList.add("active");
    });
  });

  /* Animate each item individually when in view */
  const items = document.querySelectorAll(".why-item");

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible");
      } else {
        entry.target.classList.remove("visible"); // remove when scrolled away
      }
    });
  }, {
    threshold: 0.3,
    rootMargin: "0px 0px -50px 0px"
  });

  items.forEach(item => observer.observe(item));
});
</script>