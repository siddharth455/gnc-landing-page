<!-- COPY-PASTE: Exact-looking hero section (stats bar + protruding student image + overlapping white slider)
     Replace image URLs with your real assets (girl image and slides). Paste this where you want the section. -->
     <section class="hero-section">
  <!-- RED STATS BAR -->
  <div class="stats-bar">
    <div class="container">
      <div class="stats-row">
        <div class="stat">
          <div class="num">1700<span>+</span></div>
          <div class="label">Students availed of<br><small>100 Percent Scholarship</small></div>
        </div>

        <div class="divider" aria-hidden="true"></div>

        <div class="stat">
          <div class="num big"><span class="main">1.4</span> <span class="unit">Lakh+</span></div>
          <div class="label">Students availed<br><small>Scholarships</small></div>
        </div>

        <div class="divider" aria-hidden="true"></div>

        <div class="stat">
          <div class="num">26000<span>+</span></div>
          <div class="label">Students availed of<br><small>50 Percent Scholarship</small></div>
        </div>
      </div>
    </div>

    <!-- STUDENT IMAGE (protrudes above the red bar) -->
    <div class="student-figure" aria-hidden="true">
      <!-- replace src with your real 550px-high image -->
      <img src="assets/image/young-student.webp" alt="student" />
    </div>
  </div>

  <!-- WHITE SLIDER (overlaps red bar) -->
  <div class="slider-wrap">
    <div class="slider-card">
      <button class="arrow left" aria-label="Prev">&lt;</button>

      <div class="slides">
        <div class="slide active"><img src="https://via.placeholder.com/1400x420?text=Slide+1" alt=""></div>
        <div class="slide"><img src="https://via.placeholder.com/1400x420?text=Slide+2" alt=""></div>
        <div class="slide"><img src="https://via.placeholder.com/1400x420?text=Slide+3" alt=""></div>
      </div>

      <button class="arrow right" aria-label="Next">&gt;</button>
    </div>

    <div class="dots" role="tablist" aria-label="Slides"></div>
  </div>
</section>

<style>
  :root{
    --site-width: 1200px;
    --red: #d50d0d;
    --figure-h: 450px;        /* image height required */
    --figure-protrude: 160px; /* how many px of the image appear ABOVE the red bar */
    --figure-right-offset: 28px; /* distance from container right edge */
    --slider-overlap: 120px;  /* how much the white card overlaps the red bar */
    --card-radius: 12px;
    --card-shadow: 0 28px 60px rgba(10,20,30,0.12);
    --arrow-shadow: 0 10px 30px rgba(10,20,30,0.12);
  }

  /* Overall section spacing so protruding image doesn't collide with header */
  .hero-section { padding-top: calc(var(--figure-protrude) + 8px); background:#fff; }

  /* RED STATS BAR (full width) */
  .stats-bar{
    width:100%;
    background: var(--red);
    color:#fff;
    position: relative;
    height: calc(var(--figure-h)); /* same height as image for alignment */
    display:block;
    box-sizing: border-box;
  }

  /* center content */
  .container{ max-width:var(--site-width); margin:0 auto; padding:0px 20px; height:60%; }

  .stats-row{
    display:flex;
    align-items:center;
    gap:35px;
    height:100%;
  }

  .stat{ display:flex; flex-direction:column; align-items:flex-start; min-width:150px; }

  .num{
    font-weight:700;
    font-size:55px;
    line-height:1;
    letter-spacing:-1px;
    text-shadow: 0 8px 24px rgba(0,0,0,0.08);
    position:relative;
    z-index:20; /* keep above student figure */
  }
  .num span{ font-size:28px; margin-left:6px; vertical-align:super; }
  .num.big .main{ font-size:55px; vertical-align:middle; }
  .num.big .unit{ font-size:32px; margin-left:8px; vertical-align:super; font-weight:700; }

  .label{ margin-top:8px; font-size:13px; opacity:0.95; position:relative; z-index:20; }
  .divider{ width:1px; height:84px; background:rgba(255,255,255,0.16); align-self:center; }

  /* STUDENT FIGURE: absolutely positioned relative to page area so it can overflow top */
  .student-figure{
    position: absolute;
    top: calc(-1 * var(--figure-protrude));
    /* align to the right edge of the centered container */
    right: calc((100% - var(--site-width))/2 + var(--figure-right-offset));
    z-index:15; /* below numbers (20) */
    pointer-events:none;
    display:block;
  }
  .student-figure img{
    height:100%;
    width:auto;
    display:block;
    object-fit: contain; /* full image visible, not cropped */
  }

  /* SLIDER (white card) pulled up to overlap */
  .slider-wrap{
    max-width: var(--site-width);
    margin: 0 auto 68px;
    padding: 0 20px;
    transform: translateY(calc(-1 * var(--slider-overlap)));
    z-index: 30;
    position: relative;
  }
  .slider-card{
    background:#fff;
    border-radius: var(--card-radius);
    box-shadow: var(--card-shadow);
    margin-top: -80px;
    overflow:hidden;
    position:relative;
  }
  .slides{ position:relative; }
  .slide{ display:none; }
  .slide.active{ display:block; }
  .slide img{ display:block; width:100%; height:420px; object-fit:cover; }

  /* arrows */
  .arrow{
    position:absolute;
    top:50%;
    transform: translateY(-50%);
    width:56px; height:56px; border-radius:50%; border:0; background:#fff;
    box-shadow: var(--arrow-shadow); display:flex; align-items:center; justify-content:center;
    cursor:pointer; z-index:40; font-size:18px;
  }
  .arrow.left{ left:18px; }
  .arrow.right{ right:18px; }

  /* dots */
  .dots{ display:flex; justify-content:center; gap:10px; margin-top:12px; }
  .dots button{ width:8px; height:8px; border-radius:8px; border:0; background:#ddd; cursor:pointer; }
  .dots button.active{ background:#e11b1b; width:28px; height:8px; border-radius:4px; }

  /* ensure numbers always above the image */
  .num, .label { z-index: 50; position: relative; }

  /* RESPONSIVE */
  @media(max-width:1100px){
    :root{ --site-width: 100%;}
    .num{ font-size:52px; }
    .slide img{ height:360px; }
    .student-figure{ right: calc((100% - var(--site-width))/2 + 12px); max-width:420px; }
  }
  @media(max-width:820px){
    :root{ --site-width: 100%;}
    .container{ padding:26px 16px; }
    .stats-row{ gap:20px; flex-wrap:wrap; }
    .student-figure{ display:block; right:4%; top: calc(-1 * (var(--figure-protrude) / 2)); transform: translateY(calc(var(--figure-protrude) / 2)); height: 420px; }
    .slide img{ height:300px; }
  }
  @media(max-width:520px){
    .student-figure{ position: static; }
    .student-figure img{ width:100%; height:auto; }
    .stats-bar{ height:auto; padding: 28px 16px; }
    .slide img{ height:220px; }
    .num{ font-size:36px; }
    .slider-wrap{ transform:none; margin-top:12px; }
  }
</style>

<script>
  // simple slider: arrows, dots and autoplay
  (function(){
    const slides = Array.from(document.querySelectorAll('.slide'));
    const left = document.querySelector('.arrow.left');
    const right = document.querySelector('.arrow.right');
    const dotsWrap = document.querySelector('.dots');

    if (!slides.length) return;

    let idx = 0;
    slides.forEach((_, i) => {
      const b = document.createElement('button');
      b.setAttribute('aria-label','Go to slide '+(i+1));
      b.addEventListener('click', ()=> goto(i));
      dotsWrap.appendChild(b);
    });
    const dots = Array.from(dotsWrap.children);

    function refresh(){
      slides.forEach((s,i)=> s.classList.toggle('active', i===idx));
      dots.forEach((d,i)=> d.classList.toggle('active', i===idx));
    }
    function goto(i){
      idx = (i + slides.length) % slides.length;
      refresh();
    }
    left && left.addEventListener('click', ()=> goto(idx-1));
    right && right.addEventListener('click', ()=> goto(idx+1));
    refresh();
    let auto = setInterval(()=> goto(idx+1), 4500);
    const card = document.querySelector('.slider-card');
    card && card.addEventListener('mouseenter', ()=> clearInterval(auto));
    card && card.addEventListener('mouseleave', ()=> auto = setInterval(()=> goto(idx+1), 4500));
  })();
</script>
