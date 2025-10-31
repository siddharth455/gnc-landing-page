<!-- section.php -->
<section id="skills-showcase" class="skills-section">
  <h2>
    Experience Top Notch Facilities for <br>
    <span class="js-text-animation"></span>
  </h2>

  <div class="skills-container">
    <!-- Left Side for Desktop -->
    <div class="skills-left">
      <ul>
        <li data-img="skill-1.jpg" class="active">Exploring the Brain</li>
        <li data-img="skill-2.jpg">Tiny Words Unveiled</li>
        <li data-img="skill-3.jpg">Bones and Ambition</li>
        <li data-img="skill-4.jpg">Nurture Nature's Gift</li>
        <li data-img="skill-5.jpg">Health In Action</li>
        <li data-img="skill-6.jpg">Heart in Hand</li>
      </ul>
    </div>

    <!-- Right Side Images for Desktop -->
    <div class="skills-right">
      <?php 
        $skills = [
          ["title" => "Exploring the Brain", "desc" => "A future neurologist examines a model skull, poised to discover the brain's secrets.", "img" => "skill-2.jpg"],
          ["title" => "Tiny Words Unveiled", "desc" => "Microscopic wonders and linguistic breakthroughs in one frame.", "img" => "skill-3.jpg"],
          ["title" => "Bones and Ambition", "desc" => "Hands steady, dreams sturdy — anatomy in motion.", "img" => "skill-4.jpg"],
          ["title" => "Nurture Nature's Gift", "desc" => "Preserving the planet, one green thought at a time.", "img" => "skill-5.jpg"],
          ["title" => "Health In Action", "desc" => "Dynamic moments from training labs to patient care.", "img" => "skill-7.jpg"],
          ["title" => "Heart in Hand", "desc" => "Empathy meets precision — the art of healing.", "img" => "skill-6.jpg"],
        ];

        foreach ($skills as $index => $skill) {
          echo '
          <div class="skill-image '.($index === 0 ? 'active' : '').'" style="background-image: url(\'assets/image/'.$skill['img'].'\');">
            <div class="overlay">
              <h3>'.$skill['title'].'</h3>
              <p>'.$skill['desc'].'</p>
            </div>
          </div>';
        }
      ?>
    </div>
  </div>

  <!-- Mobile View: Show all images with text overlays -->
  <div class="skills-mobile">
    <?php 
      foreach ($skills as $skill) {
        echo '
        <div class="mobile-skill-item" style="background-image: url(\'assets/image/'.$skill['img'].'\');">
          <div class="mobile-overlay">
            <h3>'.$skill['title'].'</h3>
            <p>'.$skill['desc'].'</p>
          </div>
        </div>';
      }
    ?>
  </div>
</section>

<style>
  .skills-section {
    position: relative;
    width: 100%;
    background: #000000;
    font-family: 'Poppins', sans-serif;
    overflow: hidden;
  }

  .skills-section h2 {
    text-align: center;
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 50px;
    color: #fff;
  }

  .skills-container {
    display: flex;
    justify-content: center;
    align-items: stretch;
    gap: 30px;
    max-width: 1300px;
    margin: 0 auto;
  }

  .skills-left {
    flex: 1;
    display: flex;
    justify-content: flex-end;
  }

  .skills-left ul {
    list-style: none;
    margin: 0;
    padding: 0;
    width: 80%;
  }

  .skills-left li {
    padding: 18px 25px;
    margin-bottom: 12px;
    background: #fff;
    border-radius: 10px;
    font-weight: 600;
    color: #374151;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .skills-left li:hover,
  .skills-left li.active {
    background: #0f9af1;
    color: #fff;
    transform: translateX(5px);
  }

  .skills-right {
    flex: 2;
    position: relative;
    height: 420px;
    border-radius: 16px;
    overflow: hidden;
  }

  .skill-image {
    position: absolute;
    inset: 0;
    background-size: cover;
    background-position: center;
    opacity: 0;
    transform: scale(1.05);
    transition: all 0.7s ease;
  }

  .skill-image.active {
    opacity: 1;
    transform: scale(1);
  }

  .overlay {
    position: absolute;
    bottom: 0;
    width: 100%;
    background: rgba(0,0,0,0.75);
    color: #fff;
    padding: 25px 30px;
    text-align: left;
  }

  .overlay h3 {
    font-size: 1.5rem;
    font-weight: 600;
    margin: 0 0 8px;
  }

  .overlay p {
    font-size: 1rem;
    line-height: 1.5;
    color: #e5e7eb;
    margin: 0;
  }

  /* Typed.js text style */
  .js-text-animation {
    color: #0f9af1;
    font-weight: 700;
    border-right: 2px solid #0f9af1;
    white-space: nowrap;
    overflow: hidden;
  }

  /* ==== Mobile View ==== */
  .skills-mobile {
    display: none;
  }

  @media (max-width: 900px) {
    .skills-container { display: none; }
    .skills-mobile {
      display: flex;
      flex-direction: column;
      gap: 20px;
      padding: 0 15px;
    }
    .mobile-skill-item {
      position: relative;
      width: 100%;
      height: 280px;
      background-size: cover;
      background-position: center;
      border-radius: 12px;
      overflow: hidden;
    }
    .mobile-overlay {
      position: absolute;
      bottom: 0;
      width: 100%;
      padding: 15px;
      background: rgba(0,0,0,0.65);
      color: #fff;
    }
    .mobile-overlay h3 {
      font-size: 1.2rem;
      font-weight: 600;
      margin: 0 0 5px;
    }
    .mobile-overlay p {
      font-size: 0.95rem;
      line-height: 1.4;
      color: #f3f4f6;
      margin: 0;
    }
  }

  @media (max-width: 500px) {
    .skills-section h2 { font-size: 1.5rem; line-height: 1.4; }
    .mobile-skill-item { height: 220px; }
  }

  body, html { overflow-x: hidden; }
</style>

<!-- Include Typed.js -->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

<script>
  // Desktop image hover logic
  const skillItems = document.querySelectorAll('.skills-left li');
  const skillImages = document.querySelectorAll('.skill-image');

  skillItems.forEach((item, i) => {
    item.addEventListener('mouseenter', () => {
      skillItems.forEach(li => li.classList.remove('active'));
      skillImages.forEach(img => img.classList.remove('active'));
      item.classList.add('active');
      skillImages[i].classList.add('active');
    });
  });

  // Typed.js initialization
  document.addEventListener("DOMContentLoaded", function () {
    var typed = new Typed(".js-text-animation", {
      strings: [
        "Skill Enhancement & Training",
        "Career Growth & Opportunities",
        "Innovation & Research",
        "Practical Learning Experiences"
      ],
      typeSpeed: 60,
      backSpeed: 25,
      backDelay: 1500,
      loop: true
    });
  });
</script>
