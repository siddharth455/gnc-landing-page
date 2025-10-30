<!-- 🌟 GNC 3D Logo Carousel -->
<div class="gnc-stage" id="gnc-carousel-section">
  <div class="gnc-container-wrapper">
    <div class="gnc-container">
      <div class="gnc-ring">
        <div class="gnc-img"></div>
        <div class="gnc-img"></div>
        <div class="gnc-img"></div>
        <div class="gnc-img"></div>
        <div class="gnc-img"></div>
        <div class="gnc-img"></div>
        <div class="gnc-img"></div>
        <div class="gnc-img"></div>
        <div class="gnc-img"></div>
        <div class="gnc-img"></div>
      </div>
    </div>
  </div>
</div>

<style>
/* ==== Base ==== */
html, body {
  margin: 0;
  padding: 0;
  scroll-behavior: smooth;
  overflow-x: hidden;
}

.gnc-stage {
  width: 100%; /* full width section */
  display: flex;
  justify-content: center;
  padding: 30px 0;
  overflow: hidden;
  opacity: 0;
  transform: translateY(80px);
  transition: all 1s ease-out;
}

.gnc-stage.visible {
  opacity: 1;
  transform: translateY(0);
}

/* wrapper to center carousel */
.gnc-container-wrapper {
  width: 100%; /* wider section width */
  max-width: 1500px; /* optional max width */
  display: flex;
  justify-content: center;
}

/* 3D container */
.gnc-container {
  perspective: 2500px;
  width: 300px; /* same image size */
  height: 400px;
  position: relative;
}

.gnc-ring {
  width: 100%;
  height: 100%;
  position: absolute;
  transform-style: preserve-3d;
}

/* images on ring */
.gnc-img {
  width: 100%;
  height: 100%;
  background-size: cover;
  background-position: center center;
  border-radius: 15px;
  position: absolute;
  backface-visibility: hidden;
  box-shadow: 0 0 20px rgba(255,255,255,0.15);
}
</style>

<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>

<script>
let gncXPos = 0;

const gncImagePaths = [
  "assets/image/1l.webp",
  "assets/image/2l.webp",
  "assets/image/3l.webp",
  "assets/image/4l.webp",
  "assets/image/5l.webp",
  "assets/image/6l.webp",
  "assets/image/4.webp"
];

gsap.timeline()
  .set('.gnc-ring', { rotationY: 180, cursor: 'grab' })
  .set('.gnc-img', {
    rotateY: (i) => i * -36,
    transformOrigin: '50% 50% 500px',
    z: -500,
    backgroundImage: (i) => `url('${gncImagePaths[i % gncImagePaths.length]}')`,
    backgroundPosition: 'center center',
    backfaceVisibility: 'hidden'
  })
  .from('.gnc-img', {
    duration: 1.5,
    y: 200,
    opacity: 0,
    stagger: 0.1,
    ease: 'expo'
  })
  .add(() => {
    $('.gnc-img').on('mouseenter', (e) => {
      let current = e.currentTarget;
      gsap.to('.gnc-img', { opacity: (i, t) => (t === current ? 1 : 0.5), ease: 'power3' });
    });
    $('.gnc-img').on('mouseleave', () => {
      gsap.to('.gnc-img', { opacity: 1, ease: 'power2.inOut' });
    });
  }, '-=0.5');

/* Drag controls */
$(window).on('mousedown touchstart', gncDragStart);
$(window).on('mouseup touchend', gncDragEnd);

function gncDragStart(e) {
  if (e.touches) e.clientX = e.touches[0].clientX;
  gncXPos = Math.round(e.clientX);
  gsap.set('.gnc-ring', { cursor: 'grabbing' });
  $(window).on('mousemove touchmove', gncDrag);
}

function gncDrag(e) {
  if (e.touches) e.clientX = e.touches[0].clientX;
  gsap.to('.gnc-ring', {
    rotationY: '-=' + ((Math.round(e.clientX) - gncXPos) % 360),
    onUpdate: () => {
      gsap.set('.gnc-img', { backgroundPosition: 'center center' });
    }
  });
  gncXPos = Math.round(e.clientX);
}

function gncDragEnd() {
  $(window).off('mousemove touchmove', gncDrag);
  gsap.set('.gnc-ring', { cursor: 'grab' });
}

/* infinite rotation */
let gncAutoRotate = gsap.to('.gnc-ring', {
  rotationY: '+=360',
  duration: 80,
  ease: 'none',
  repeat: -1,
  paused: true
});

/* scroll-trigger animation */
const gncStage = document.querySelector('.gnc-stage');
const gncObserver = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      gncStage.classList.add('visible');
      gncAutoRotate.play();
    } else {
      gncStage.classList.remove('visible');
      gncAutoRotate.pause();
    }
  });
}, { threshold: 0.4 });

gncObserver.observe(gncStage);
</script>
