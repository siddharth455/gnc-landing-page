<section id="hero-section-embed" aria-label="Hero with stats and slider">
  <style>
    /* Scoped variables + reset */
    #hero-section-embed{
      --site-width: 1200px;
      --red: #da6b2a;
      --figure-h: 450px;            /* desktop student height (restored) */
      --figure-protrude: 140px;     /* desktop protrude (restored) */
      --figure-right-offset: 28px;
      --figure-extend-below: 140px; /* how much the girl extends below slider */
      --slider-overlap: 100px;
      --card-radius: 12px;
      --card-shadow: 0 28px 60px rgba(10,20,30,0.12);
      --fade-duration: 600ms;
      display:block;
      margin:0;
      padding:0; /* section itself has no top/bottom padding */
      background:black;
      overflow:visible;
    }

    /* hero container: no top padding (you asked earlier to remove top padding) */
    #hero-section-embed .hero-section { padding-top: 0; margin:0; }

    /* RED STATS BAR */
    #hero-section-embed .stats-bar{
      width:100%;
      background: var(--red);
      color:#fff;
      position: relative;
      height: var(--figure-h);
      box-sizing: border-box;
    }

    #hero-section-embed .container{
      max-width: var(--site-width);
      margin: 0 auto;
      padding: 0 20px;
      height: 60%;
      display: flex;
      align-items: center;
    }

    /* Desktop stats row (horizontal) */
    #hero-section-embed .stats-row{
      display:flex;
      align-items:center;
      gap:35px;
      height:100%;
    }
    #hero-section-embed .stat{
      display:flex;
      flex-direction:column;
      align-items:flex-start;
      min-width:150px;
    }
    #hero-section-embed .num{
      font-weight:700;
      font-size:55px;
      line-height:1;
      letter-spacing:-1px;
      text-shadow: 0 8px 24px rgba(0,0,0,0.08);
      z-index:20;
    }
    #hero-section-embed .num span{ font-size:28px; margin-left:6px; vertical-align:super; }
    #hero-section-embed .label{ margin-top:8px; font-size:13px; opacity:0.95; z-index:20; }
    #hero-section-embed .divider{ width:1px; height:84px; background:rgba(255,255,255,0.16); }

    /* STUDENT FIGURE (desktop) - bigger and extends below slider (placed behind slider) */
    #hero-section-embed .student-figure{
      position: absolute;
      top: calc(-1 * var(--figure-protrude));
      right: calc((100% - var(--site-width))/2 + var(--figure-right-offset));
      z-index: 10; /* keep below slider which is z-index: 40 */
      pointer-events: none;
      display:block;
      /* make it taller so lower part extends under the slider */
      height: calc(var(--figure-h) + var(--figure-extend-below));
    }
    #hero-section-embed .student-figure img{
      height:100%;
      width:auto;
      display:block;
      object-fit: cover; /* covers the taller area to look natural */
      -webkit-backface-visibility: hidden;
    }

    /* SLIDER area on top */
    #hero-section-embed .slider-wrap{
      max-width: var(--site-width);
      margin: 0 auto;
      padding: 0 20px;
      transform: translateY(calc(-1 * var(--slider-overlap)));
      z-index: 40; /* above student figure */
      position: relative;
    }
    #hero-section-embed .slider-card{
      background: #fff;
      border-radius: var(--card-radius);
      box-shadow: var(--card-shadow);
      margin-top: -80px;
      overflow:hidden;
      position: relative;
      z-index: 40;
    }

    /* Desktop slides: fixed height, cover */
    #hero-section-embed .slides{
      position: relative;
      width:100%;
      height:420px;
      background: transparent;
    }
    #hero-section-embed .slide{
      position:absolute;
      inset:0;
      opacity:0;
      visibility:hidden;
      transition: opacity var(--fade-duration) ease, visibility var(--fade-duration) ease;
      display:flex;
      align-items:center;
      justify-content:center;
      background: transparent;
    }
    #hero-section-embed .slide.active{ opacity:1; visibility:visible; }
    #hero-section-embed .slide img{
      width:100%;
      height:100%;
      object-fit:cover;
      display:block;
      background: transparent;
    }

    /* dots */
    #hero-section-embed .dots{ display:flex; justify-content:center; gap:10px; margin-top:12px; }
    #hero-section-embed .dots button{ width:8px; height:8px; border-radius:8px; border:0; background:#ddd; cursor:pointer; transition: all .18s ease; }
    #hero-section-embed .dots button.active{ background:#e11b1b; width:28px; height:8px; border-radius:4px; }

    /* ===== MOBILE LAYOUT (≤650px) =====
 /* ===== REPLACE MOBILE STYLES (only) ===== */
@media (max-width:650px){
  /* reduce the red bar to content height */
  #hero-section-embed .stats-bar { height: auto; padding: 8px 0 0; }

  /* container: left: image removed on mobile, stats row becomes horizontal */
  #hero-section-embed .container{
    display:flex;
    flex-direction: row;
    align-items: center;
    gap: 12px;
    padding: 12px;
    height: auto;
    box-sizing: border-box;
  }

  /* HIDE student figure on mobile (remove the girl) */
  #hero-section-embed .student-figure{ display: none !important; }

  /* Stats row: horizontal numbers across the top (compact) */
  #hero-section-embed .stats-row{
    display:flex;
    flex-direction: row;
    gap: 18px;
    width:100%;
    justify-content: flex-end; /* keep numbers on the right similar to desktop feel */
    align-items: center;
    height: auto;
    margin: 0;
    padding: 0;
  }
  #hero-section-embed .stat{ min-width: 0; text-align: right; }
  #hero-section-embed .num{ font-size: 26px; line-height:1; }
  #hero-section-embed .num span{ font-size:14px; margin-left:6px; vertical-align:super; }
  #hero-section-embed .label{ font-size:11px; opacity:.95; }

  /* hide dividers on small screens */
  #hero-section-embed .divider{ display:none; }

  /* slider: remove translate overlap and let the slider-card size to the active image's natural height (JS will update) */
  #hero-section-embed .slider-wrap{ transform:none; padding:8px 12px 0; margin-top:8px; z-index:40; }
  #hero-section-embed .slider-card{ margin-top:0; border-radius:8px; overflow:hidden; position:relative; }

  /* slides: keep position absolute so slides overlay at same spot.
     We won't set a fixed height — JS will measure active image and set .slider-card height. */
  #hero-section-embed .slides{
    position:relative;
    width:100%;
    height:auto;  /* let JS set slider-card height */
    background:transparent;
    overflow:visible;
  }
  #hero-section-embed .slide{
    position:absolute; /* overlay each slide on top of each other */
    inset:0;
    opacity:0;
    visibility:hidden;
    transition: opacity var(--fade-duration) ease, visibility var(--fade-duration) ease;
    display:flex;
    align-items:center;
    justify-content:center;
    background:transparent;
  }
  #hero-section-embed .slide.active{ opacity:1; visibility:visible; }
  #hero-section-embed .slide img{
    width:100%;
    margin-top: 125px;
    height:auto;         /* natural image height */
    object-fit:contain;  /* show full image */
    display:block;
    background:transparent;
  }

  /* dots: placed immediately after slider with no bottom gap */
  #hero-section-embed .dots{ margin-top:8px; margin-bottom:0; gap:8px; display:flex; justify-content:center; }
  #hero-section-embed .dots button{ width:8px; height:8px; }
  #hero-section-embed .dots button.active{ width:22px; height:8px; }

  /* tiny screen tweak */
  @media (max-width:380px){
    #hero-section-embed .num{ font-size:22px; }
  }
}

  </style>

  <div class="hero-section">
    <!-- RED STATS BAR -->
    <div class="stats-bar" role="region" aria-label="Student statistics">
      <div class="container">
        <!-- Student figure sits first in DOM. On desktop it's absolutely positioned and taller to extend below the slider.
             On mobile CSS makes it static left column 250x300. -->
        <div class="student-figure" aria-hidden="true">
          <img src="assets/image/student-gnc.webp" alt="student">
        </div>

        <!-- Stats row -->
        <div class="stats-row" role="list">
          <div class="stat" role="listitem">
            <div class="num">1700<span>+</span></div>
            <div class="label">Students availed of<br><small>100 Percent Scholarship</small></div>
          </div>

          <div class="divider" aria-hidden="true"></div>

          <div class="stat" role="listitem">
            <div class="num big"><span class="main">1.4</span> <span class="unit">Lakh+</span></div>
            <div class="label">Students availed<br><small>Scholarships</small></div>
          </div>

          <div class="divider" aria-hidden="true"></div>

          <div class="stat" role="listitem">
            <div class="num">26000<span>+</span></div>
            <div class="label">Students availed of<br><small>50 Percent Scholarship</small></div>
          </div>
        </div>
      </div>
    </div>

    <!-- WHITE SLIDER -->
    <div class="slider-wrap">
      <div class="slider-card" aria-roledescription="carousel" aria-label="Highlights slider">
        <div class="slides" aria-live="polite">
          <div class="slide active" role="group" aria-roledescription="slide" aria-label="Slide 1 of 3">
            <img src="assets/image/ranking.webp" alt="Ranking">
          </div>
          <div class="slide" role="group" aria-roledescription="slide" aria-label="Slide 2 of 3">
            <img src="assets/image/awards.webp" alt="Awards">
          </div>
          <div class="slide" role="group" aria-roledescription="slide" aria-label="Slide 3 of 3">
            <img src="assets/image/dandiya-nights.webp" alt="Dandiya Nights">
          </div>
        </div>
      </div>

      <div class="dots" role="tablist" aria-label="Slides"></div>
    </div>
  </div>
  <script>
(function(){
  const root = document.getElementById('hero-section-embed');
  if (!root) return;

  // proceed only on small screens for sizing behavior, but carousel controls work on all sizes
  function isMobile(){ return window.innerWidth <= 650; }

  const sliderCard = root.querySelector('.slider-card');
  const slides = Array.from(root.querySelectorAll('.slide'));
  const dotsContainer = root.querySelector('.dots');

  if (!sliderCard || slides.length === 0 || !dotsContainer) {
    // nothing to do
    return;
  }

  // Ensure each slide has a data-index
  slides.forEach((s, i) => s.dataset.index = i);

  // --- Size helpers (unchanged logic, slightly hardened) ---
  function sizeToActiveImage(){
    // Only set explicit height on mobile per your CSS intent
    if (!isMobile() || !sliderCard) {
      if (sliderCard) sliderCard.style.height = '';
      return;
    }
    const active = root.querySelector('.slide.active');
    if (!active) return;
    const img = active.querySelector('img');
    if (!img) {
      sliderCard.style.height = '';
      return;
    }

    if (!img.complete || img.naturalWidth === 0) {
      // wait for load then resize
      img.onload = () => {
        requestAnimationFrame(()=> setCardHeightForImg(img));
      };
      return;
    }
    setCardHeightForImg(img);
  }

  function setCardHeightForImg(img){
    const wrapRect = sliderCard.getBoundingClientRect();
    const availableWidth = Math.max(0, Math.round(wrapRect.width));
    const natW = img.naturalWidth || availableWidth || 1;
    const natH = img.naturalHeight || Math.round(availableWidth * 9 / 16);
    const renderedHeight = Math.round((natH / natW) * availableWidth);
    sliderCard.style.height = renderedHeight + 'px';
  }

  // --- Carousel control: set active slide by index ---
  function setActive(index, {announce = true} = {}){
    index = (index + slides.length) % slides.length; // wrap
    slides.forEach((s, i) => {
      if (i === index) {
        s.classList.add('active');
        s.setAttribute('aria-hidden', 'false');
        s.setAttribute('aria-current', 'true');
      } else {
        s.classList.remove('active');
        s.setAttribute('aria-hidden', 'true');
        s.removeAttribute('aria-current');
      }
    });

    // update dots
    const dotButtons = Array.from(dotsContainer.querySelectorAll('button'));
    dotButtons.forEach((b, i) => {
      b.classList.toggle('active', i === index);
      b.setAttribute('aria-selected', String(i === index));
      b.setAttribute('tabindex', i === index ? '0' : '-1');
    });

    // size to image if on mobile
    sizeToActiveImage();

    if (announce) {
      // update aria-label on slides container if needed (polite)
      const slidesCount = slides.length;
      sliderCard.setAttribute('aria-roledescription', `carousel, slide ${index+1} of ${slidesCount}`);
    }
  }

  // --- Create dots if there are none (or populate) ---
  function ensureDots(){
    // clear existing children (we'll recreate) to ensure sync
    dotsContainer.innerHTML = '';
    slides.forEach((s, idx) => {
      const btn = document.createElement('button');
      btn.type = 'button';
      btn.setAttribute('aria-label', `Go to slide ${idx+1}`);
      btn.setAttribute('role', 'tab');
      btn.dataset.index = idx;
      btn.addEventListener('click', (e) => {
        const i = Number(btn.dataset.index);
        setActive(i);
      });
      // keyboard support for dots
      btn.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft' || e.key === 'ArrowUp') {
          e.preventDefault();
          const prev = (idx - 1 + slides.length) % slides.length;
          setActive(prev);
          dotsContainer.querySelectorAll('button')[prev].focus();
        } else if (e.key === 'ArrowRight' || e.key === 'ArrowDown') {
          e.preventDefault();
          const next = (idx + 1) % slides.length;
          setActive(next);
          dotsContainer.querySelectorAll('button')[next].focus();
        }
      });
      dotsContainer.appendChild(btn);
    });
  }

  // --- Touch swipe support (simple) ---
  let touchStartX = 0;
  let touchEndX = 0;
  const SWIPE_THRESHOLD = 30; // px

  function onTouchStart(e){
    if (!isMobile()) return;
    touchStartX = e.touches ? e.touches[0].clientX : e.clientX;
  }
  function onTouchMove(e){
    if (!isMobile()) return;
    touchEndX = e.touches ? e.touches[0].clientX : e.clientX;
  }
  function onTouchEnd(){
    if (!isMobile()) return;
    const dx = touchEndX - touchStartX;
    if (Math.abs(dx) > SWIPE_THRESHOLD) {
      const activeIndex = slides.findIndex(s => s.classList.contains('active'));
      if (dx < 0) {
        // swipe left -> next
        setActive(activeIndex + 1);
      } else {
        // swipe right -> prev
        setActive(activeIndex - 1);
      }
    }
    touchStartX = touchEndX = 0;
  }

  // --- Keyboard left/right for the slider card ---
  function onKeyDown(e){
    if (e.key === 'ArrowLeft') {
      const idx = slides.findIndex(s => s.classList.contains('active'));
      setActive(idx - 1);
    } else if (e.key === 'ArrowRight') {
      const idx = slides.findIndex(s => s.classList.contains('active'));
      setActive(idx + 1);
    }
  }

  // --- Mutation observer to react if something else toggles active class ---
  const slidesContainer = root.querySelector('.slides');
  if (slidesContainer) {
    const obs = new MutationObserver(muts => {
      // on active class change, run sizing on mobile
      for (const m of muts) {
        if (m.type === 'attributes' || m.type === 'childList') {
          if (isMobile()) sizeToActiveImage();
        }
      }
    });
    obs.observe(slidesContainer, { attributes: true, subtree: true, attributeFilter: ['class'], childList: true });
  }

  // --- Initialization ---
  ensureDots();

  // make sure an initial active exists (if not, use first)
  if (!root.querySelector('.slide.active')) {
    slides[0].classList.add('active');
  }

  // set ARIA roles and attributes for slides
  slides.forEach((s, i) => {
    s.setAttribute('role', 'group');
    s.setAttribute('aria-roledescription', 'slide');
    s.setAttribute('aria-label', `Slide ${i+1} of ${slides.length}`);
    s.setAttribute('aria-hidden', s.classList.contains('active') ? 'false' : 'true');
  });

  // set initial dot active states
  setActive(slides.findIndex(s => s.classList.contains('active')) || 0, {announce:false});

  // events: resize/orientation/load
  window.addEventListener('load', () => { setTimeout(sizeToActiveImage, 60); });
  window.addEventListener('resize', () => { setTimeout(sizeToActiveImage, 120); });
  window.addEventListener('orientationchange', () => { setTimeout(sizeToActiveImage, 200); });

  // hide/show student figure same as before
  function hideGirlOnMobile(){
    const girl = root.querySelector('.student-figure');
    if (!girl) return;
    if (isMobile()) {
      girl.style.display = 'none';
    } else {
      girl.style.display = '';
    }
  }
  hideGirlOnMobile();
  window.addEventListener('resize', hideGirlOnMobile);

  // attach touch + keyboard handlers to sliderCard
  sliderCard.addEventListener('touchstart', onTouchStart, {passive: true});
  sliderCard.addEventListener('touchmove', onTouchMove, {passive: true});
  sliderCard.addEventListener('touchend', onTouchEnd, {passive: true});
  sliderCard.addEventListener('mousedown', (e) => {
    // allow desktop click-drag to behave similar to touch (optional)
    touchStartX = e.clientX;
    const onMouseMove = (ev) => touchEndX = ev.clientX;
    const onMouseUp = () => {
      onTouchEnd();
      window.removeEventListener('mousemove', onMouseMove);
      window.removeEventListener('mouseup', onMouseUp);
    };
    window.addEventListener('mousemove', onMouseMove);
    window.addEventListener('mouseup', onMouseUp);
  });

  sliderCard.addEventListener('keydown', onKeyDown);
  // make sliderCard focusable for keyboard
  if (!sliderCard.hasAttribute('tabindex')) sliderCard.setAttribute('tabindex', '0');

  // observe images in slides: when each image loads, recalc size if it's the active one
  slides.forEach(s => {
    const img = s.querySelector('img');
    if (img) {
      if (!img.complete) {
        img.addEventListener('load', () => {
          if (s.classList.contains('active')) sizeToActiveImage();
        });
      }
    }
  });

  // expose a tiny API in case you want to programmatically change slides elsewhere
  root._heroSlider = {
    next(){ setActive(slides.findIndex(s => s.classList.contains('active')) + 1); },
    prev(){ setActive(slides.findIndex(s => s.classList.contains('active')) - 1); },
    go(index){ setActive(index); },
    resize(){ sizeToActiveImage(); }
  };

})();
</script>

</section>
