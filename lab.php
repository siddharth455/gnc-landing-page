<style>
    /* Header styling */
    .header-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #ffffffff;
    }
    .header-title-italic {
        font-style: italic;
        font-weight: 400;
        color: #ffffffff;
    }

    /* Carousel container adjustments for overflow and positioning */
    .carousel-wrapper {
        overflow: hidden;
        position: relative;
    }

    /* Carousel Inner - holds all lab items and handles the sliding transition */
    .carousel-inner-custom {
        display: flex;
        transition: transform 0.5s ease-in-out;
        width: 100%; /* Initially 100% of the wrapper width */
    }

    /* Lab Item Card Styling */
    .lab-item {
        flex: 0 0 100%; /* Default: 100% width on mobile (1 item) */
        max-width: 100%;
        height: 500px; /* Fixed height for visual consistency */
        position: relative;
        padding: 1rem;
        box-sizing: border-box;
    }

    .lab-card {
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        border-radius: 0.5rem; /* Rounded corners */
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        overflow: hidden;
    }

    /* Overlay for text and dark effect - MODIFIED FOR CENTER ALIGNMENT */
    .lab-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.3); /* Dark overlay */
        display: flex;
        align-items: center; /* Center text vertically */
        justify-content: center; /* Center text horizontally */
        padding: 1rem; /* Added padding to prevent title from touching edges */
    }

    .lab-title {
        color: #fff;
        font-size: 1.8rem;
        font-weight: 600;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.6);
        text-align: center; /* Ensure text is centered if it spans multiple lines */
    }

    /* Navigation Button Styling */
    .carousel-control-custom {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 10;
        width: 40px;
        height: 40px;
        background-color: white;
        border-radius: 50%;
        border: 1px solid #ccc;
        opacity: 0.8;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: opacity 0.2s;
        cursor: pointer;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .carousel-control-custom:hover {
        opacity: 1;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    .carousel-control-prev-custom { left: 0; margin-left: -20px; }
    .carousel-control-next-custom { right: 0; margin-right: -20px; }
    .carousel-control-custom i {
        color: #333;
        font-size: 1rem;
    }

    /* Media Query for Desktop/Tablet (Bootstrap 'md' breakpoint and up) */
    @media (min-width: 768px) {
        .lab-item {
            flex: 0 0 50%; /* Desktop: 50% width (2 items visible) */
            max-width: 50%;
        }
        .carousel-control-prev-custom { left: 0; margin-left: -40px; }
        .carousel-control-next-custom { right: 0; margin-right: -40px; }
    }
</style>

<!-- MAIN SECTION START -->
<section>
    <div class="container-fluid px-md-5">

        <!-- HEADER SECTION -->
        <div class="text-center mb-5 px-3">
            <h2 class="header-title">Advancing Research and Innovation  <span class="header-title-italic">Through<br> Advanced Innovation Centers.</span></h2>
            <p class="text-secondary mx-auto mt-3" style="max-width: 700px;">
                Guru Nanak College offers modern lab infrastructure with well-equipped facilities across various disciplines. Our labs provide hands-on experience, fostering practical learning and innovation to support students’ academic and professional growth.
            </p>
        </div>

        <!-- CAROUSEL SECTION -->
        <div id="labCarousel" class="carousel-wrapper">
            
            <!-- This is the container that holds all 14 labs and moves left/right -->
            <div class="carousel-inner-custom" id="carouselInner">
                <!-- Labs will be injected here by JavaScript -->
            </div>

            <!-- Previous Button -->
            <div class="carousel-control-custom carousel-control-prev-custom d-none d-md-flex" role="button" onclick="prevSlide()">
                <i class="fas fa-chevron-left" aria-hidden="true"></i>
                <span class="visually-hidden">Previous</span>
            </div>
            
            <!-- Next Button -->
            <div class="carousel-control-custom carousel-control-next-custom d-none d-md-flex" role="button" onclick="nextSlide()">
                <i class="fas fa-chevron-right" aria-hidden="true"></i>
                <span class="visually-hidden">Next</span>
            </div>
        </div>

    </div>
</section>
<!-- MAIN SECTION END -->

<!-- JavaScript Dependencies and Logic (Place these before the closing </body> tag) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eE7uF36tW5m3g8k5tI8d" crossorigin="anonymous"></script>

<script>
    // Data for the 14 labs
    const labData = [
        { title: "Pharmaceutics-I", imageUrl: "assets/image/lab-1.webp" },
        { title: "Pharmaceutics-II", imageUrl: "assets/image/lab-2.webp" },
        { title: "Pharmaceutics-III", imageUrl: "assets/image/lab-3.webp" },
        { title: "Pharmacognosy", imageUrl: "assets/image/lab-4.webp" },
        { title: "Pharmaceutical Chemistry-I", imageUrl: "assets/image/lab-5.webp" },
        { title: "Pharmaceutical Chemistry-II", imageUrl: "assets/image/lab-6.webp" },
        { title: "Pharmacology-I", imageUrl: "assets/image/lab-8.webp" },
        { title: "Pharmacology-II", imageUrl: "assets/image/lab-9.webp" },
        { title: "Human Anatomy and Physiology", imageUrl: "assets/image/lab-10.webp" },
        { title: "Machine Room", imageUrl: "assets/image/lab-11.webp" },
        { title: "Computer and Fundamental Lab", imageUrl: "assets/image/lab-12.webp" },
        { title: "Pediatric Lab", imageUrl: "assets/image/lab-13.webp" },
        { title: "Nutrition Lab", imageUrl: "assets/image/lab-14.webp" },
        { title: "Fundamental of Nursing Lab", imageUrl: "assets/image/lab-15.webp" }
    ];

    let currentIndex = 0;
    let itemsPerSlide = 1; // Default for mobile
    let isMobile = false;
    let autoSlideInterval;
    const carouselInner = document.getElementById('carouselInner');
    const mediaQuery = window.matchMedia('(min-width: 768px)');
    const totalItems = labData.length;

    /**
     * Renders the lab cards into the carousel inner container.
     */
    function renderLabs() {
        carouselInner.innerHTML = ''; // Clear existing content
        labData.forEach(lab => {
            const labHtml = `
                <div class="lab-item" role="group">
                    <div class="lab-card" style="background-image: url('${lab.imageUrl}')" 
                            title="View ${lab.title}"
                            onerror="this.style.backgroundImage='url(\'https://placehold.co/800x600/94a3b8/ffffff?text=Lab+Facility\')'">
                        <div class="lab-overlay">
                            <span class="lab-title">${lab.title}</span>
                        </div>
                    </div>
                </div>
            `;
            carouselInner.insertAdjacentHTML('beforeend', labHtml);
        });
    }

    /**
     * Updates the `transform` property to slide the carousel based on the current index.
     */
    function updateCarouselPosition() {
        // Calculate the percentage to translate (move) the carousel inner
        // The item width is itemsPerSlide (100% on mobile, 50% on desktop)
        const slideWidth = 100 / itemsPerSlide;
        const translateValue = currentIndex * slideWidth;
        carouselInner.style.transform = `translateX(-${translateValue}%)`;
    }

    /**
     * Navigates to the next slide.
     */
    function nextSlide() {
        // Calculate the max index we can show without wrapping
        const maxIndex = totalItems - itemsPerSlide;
        currentIndex = (currentIndex < maxIndex) ? currentIndex + 1 : 0;
        updateCarouselPosition();
    }

    /**
     * Navigates to the previous slide.
     */
    function prevSlide() {
        const maxIndex = totalItems - itemsPerSlide;
        currentIndex = (currentIndex > 0) ? currentIndex - 1 : maxIndex;
        updateCarouselPosition();
    }

    /**
     * Starts the auto-looping feature for all screen sizes.
     */
    function startAutoLoop() {
        if (autoSlideInterval) {
            clearInterval(autoSlideInterval);
        }
        // Auto-loop for both mobile and desktop (3000ms interval)
        autoSlideInterval = setInterval(nextSlide, 4000);
    }

    /**
     * Handles screen size changes (responsive logic).
     */
    function handleScreenChange(e) {
        // Check if screen is desktop/tablet (768px or wider)
        if (e.matches) {
            // Desktop/Tablet setup
            itemsPerSlide = 2;
            isMobile = false;
        } else {
            // Mobile setup
            itemsPerSlide = 1;
            isMobile = true;
        }

        // Always restart the auto-loop to ensure it's active regardless of device.
        startAutoLoop(); 

        // Reset current index to 0 when breakpoint changes
        currentIndex = 0;
        updateCarouselPosition();
    }
    
    // --- Initialization ---
    
    // 1. Initial render of labs
    renderLabs();

    // 2. Initial screen check and setup
    handleScreenChange(mediaQuery);

    // 3. Add listener for screen size changes
    mediaQuery.addListener(handleScreenChange);

    // Expose functions globally for the onclick attributes in HTML
    window.nextSlide = nextSlide;
    window.prevSlide = prevSlide;

</script>