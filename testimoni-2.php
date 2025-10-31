<section class="success-showcase container">
    <div id="successParticles" class="success-bg"></div>

    <div class="success-info">
        <h1>Our Students Success Story!</h1>
        <p>
        Hear from our students as they share their experiences, achievements, and the journey that shaped their success. Their stories reflect the learning, growth, and community that define our campus life.
        </p>
    </div>

    <div class="success-slider swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="assets/image/testi-1.webp" />
                <div class="success-overlay">
                    <h1>Avinash Takhellambam</h1>
                    <p>
                    Guru Nanak College gave me the confidence to grow as a skilled and compassionate nurse through hands-on training and great faculty support.
                    </p>
                    <div class="success-ratings">
                        <div class="success-stars">
                            <ion-icon class="success-star" name="star"></ion-icon>
                            <ion-icon class="success-star" name="star"></ion-icon>
                            <ion-icon class="success-star" name="star"></ion-icon>
                            <ion-icon class="success-star" name="star"></ion-icon>
                            <ion-icon class="success-star" name="star-half-outline"></ion-icon>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <img src="assets/image/testi-2.webp" />
                <div class="success-overlay">
                    <h1>Soni Rautan</h1>
                    <p>
                    The college focuses on overall development — not just studies, but confidence, skills, and character.
                    </p>
                    <div class="success-ratings">
                        <div class="success-stars">
                            <ion-icon class="success-star" name="star"></ion-icon>
                            <ion-icon class="success-star" name="star"></ion-icon>
                            <ion-icon class="success-star" name="star"></ion-icon>
                            <ion-icon class="success-star" name="star"></ion-icon>
                            <ion-icon class="success-star" name="star"></ion-icon>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <img src="assets/image/testi-3.webp" />
                <div class="success-overlay">
                    <h1>Rishikesh Kumar</h1>
                    <p>
                    The supportive environment and approachable teachers make learning enjoyable and stress-free.
                    </p>
                    <div class="success-ratings">
                        <div class="success-stars">
                            <ion-icon class="success-star" name="star"></ion-icon>
                            <ion-icon class="success-star" name="star"></ion-icon>
                            <ion-icon class="success-star" name="star"></ion-icon>
                            <ion-icon class="success-star" name="star"></ion-icon>
                            <ion-icon class="success-star" name="star-half-outline"></ion-icon>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <img src="assets/image/testi-6.webp" />
                <div class="success-overlay">
                    <h1>Shamsad Aalam</h1>
                    <p>
                    Life at GNC is truly transformative — from academics to personal growth, every experience has shaped me for the better.
                    </p>
                    <div class="success-ratings">
                        <div class="success-stars">
                            <ion-icon class="success-star" name="star"></ion-icon>
                            <ion-icon class="success-star" name="star"></ion-icon>
                            <ion-icon class="success-star" name="star"></ion-icon>
                            <ion-icon class="success-star" name="star"></ion-icon>
                            <ion-icon class="success-star" name="star-outline"></ion-icon>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/tsparticles@2.12.0/tsparticles.bundle.min.js"></script>


<style>
    /* RENAMED CLASSES */
    .success-showcase {
        position: relative;
        display: grid;
        grid-template-columns: 50% 45%;
        place-items: center;
        gap: 60px;
        min-height: 60vh;
        padding: 40px 60px;
        overflow: hidden;
    }

    .success-bg {
        position: absolute;
        inset: 0;
        z-index: 0;
    }

    .success-info {
        position: relative;
        z-index: 1;
        max-width: 600px;
    }

    .success-info h1 {
        font-family: "Comfortaa", sans-serif;
        font-size: clamp(2rem, 4vw, 3.5rem);
        margin-bottom: 24px;
        color: #fff;
    }

    .success-info p {
        font-size: clamp(0.9rem, 3vw, 1.2rem);
        font-weight: 300;
        line-height: 1.5;
        color: #fff;
        margin-bottom: 24px;
    }

    .success-btn {
        background: #0f9af1;
        color: #fff;
        font-size: 1rem;
        font-weight: 600;
        border: none;
        padding: 10px 16px;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    .success-btn a{
        background: #0f9af1;
        color: #fff;
    }
    .success-btn a :hover{
        transform: scale(0.98);
        background-color: #6f7aa6;
    }
    .success-btn:hover {
        transform: scale(0.98);
        background-color: #6f7aa6;
    }

    .success-slider {
        position: relative;
        width: 350px;
        height: 400px;
        z-index: 1;
    }
    
    /* Specific styling for slides inside the success-slider to avoid conflicts */
    .success-slider .swiper-slide {
        border: 1px solid rgba(142, 142, 142, 0.3);
        border-radius: 20px;
        overflow: hidden;
    }

    .success-slider .swiper-slide img {
        width: 100%;
        height: 100%;
        border-radius: 20px; 
        object-fit: cover;
    }

    .success-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 150px;
        padding: 12px 20px;
        background: rgba(93, 95, 145, 0.7);
        backdrop-filter: blur(20px);
        border-top: 1px solid rgba(255, 255, 255, 0.3);
        color: #fff;
        border-radius: 0 0 20px 20px;
    }

    .success-overlay h1 {
        font-size: 1.2rem;
        font-weight: 600;
    }

    .success-overlay p {
        font-size: 0.9rem;
        line-height: 1.4;
    }

    .success-ratings {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-top: 6px;
    }

    .success-star {
        color: #afe312;
    }

    @media (max-width: 930px) {
        .success-showcase {
            grid-template-columns: 1fr;
            grid-template-rows: auto auto;
            text-align: center;
            gap: 60px;
        }

        .success-slider {
            width: 340px;
            height: 440px;
        }
    }

    @media (max-width: 470px) {
        .success-slider {
            width: 300px;
            height: 400px;
        }

        .success-showcase {
            padding: 30px;
        }
    }
</style>

<script>
    // ✅ Initialize Swiper - UPDATED CLASS NAME
    var swiper = new Swiper(".success-slider", {
        effect: "cube",
        grabCursor: true,
        loop: true,
        speed: 1000,
        cubeEffect: {
            shadow: false,
            slideShadows: true,
            shadowOffset: 10,
            shadowScale: 0.94,
        },
        autoplay: {
            delay: 2600,
            pauseOnMouseEnter: true,
        },
    });

    // ✅ Localized particles background - UPDATED ID
    // NOTE: This relies on the tsParticles script link added above the <style> block.
    // Ensure the external script loads before this function runs.
    if (window.tsParticles) {
        tsParticles.load("successParticles", {
            fullScreen: { enable: false },
            background: { color: "transparent" },
            particles: {
                number: { value: 25 },
                color: { value: ["#3998D0", "#A9BD33", "#F45623"] },
                opacity: { value: 0.6 },
                size: { value: 4, random: true },
                move: { enable: true, speed: 1.5 },
            },
        });
    }
</script>