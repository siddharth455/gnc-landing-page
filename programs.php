<?php require 'wrapper.php'; ?>

<?php
// PHP course data array for dynamic display
$courses = [
    // ============================
    // PARAMEDICAL SCIENCES
    // ============================
    [
        "category" => "paramedical", 
        "name" => "Bachelor of Medical Laboratory Technology (BMLT)",
        "description" => "BMLT is a four-year undergraduate course training students to become skilled lab technologists proficient in conducting diagnostic tests, analyzing samples, and supporting accurate disease detection and treatment.",
        "duration" => "3+1 Years",
        "fees" => "₹65,000/",
        "power_degree" => true
    ],
    [
        "category" => "paramedical",
        "name" => "Bachelor of Medical Radio Diagnosis And Imaging Technology (BMRIT)",
        "description" => "BMRIT is a four-year undergraduate course preparing students to operate imaging equipment, perform diagnostic procedures, and assist physicians in identifying and managing internal medical conditions effectively.",
        "duration" => "3+0.5 Years",
        "fees" => "₹65,000/",
        "power_degree" => true
    ],
    [
        "category" => "paramedical",
        "name" => "Bachelor of Physiotherapy (BPT)",
        "description" => "BPT is a four-year of academic study and a 6-month internship, training in physical rehabilitation,focusing on training students in physical therapy techniques to help patients recover from injuries, improve mobility, and manage pain through personalized rehabilitation.",
        "duration" => "4+0.5 Years",
        "fees" => "₹65,000/",
        "power_degree" => true
    ],
    [
        "category" => "paramedical",
        "name" => "Bachelor of Optometry (BSc Optometry)",
        "description" => "BSc Optometry is a four-year undergraduate course training students to become eye care professionals skilled in vision testing, prescribing lenses, and diagnosing or treating various eye conditions and disorders.",
        "duration" => "3+1 Years",
        "fees" => "₹65,000/",
        "power_degree" => true
    ],
    [
        "category" => "paramedical",
        "name" => "Bachelor of Operation Theatre Technology (BOTT)",
        "description" => "Bachelor of Operation Theatre Technology is a four-year undergraduate program designed to train students in surgical assistance, sterilization techniques, and operation theatre management during medical and surgical procedures.",
        "duration" => "4 Years",
        "fees" => "₹65,000/",
        "power_degree" => true
    ],
    [
        "category" => "paramedical",
        "name" => "Master in Medical Laboratory Technology (MMLT)",
        "description" => "MMLT is a two-year postgraduate course enhancing students’ expertise in advanced diagnostic techniques, laboratory management, and biomedical research for precise disease detection and efficient healthcare support.",
        "duration" => "2 Years",
        "fees" => "₹65,000/",
        "power_degree" => false
    ],
    [
        "category" => "paramedical",
        "name" => "Master in Physiotherapy (MPT)",
        "description" => "MPT is a two-year postgraduate course designed to advance students’ knowledge in physiotherapy, enabling them to specialize in fields like orthopedics, neurology, or sports rehabilitation for patient recovery.",
        "duration" => "2 Years",
        "fees" => "₹75,000/",
        "power_degree" => false
    ],
    [
        "category" => "life", 
        "name" => "Bachelor of Science in Microbiology",
        "description" => "Bachelor of Science in Microbiology is a three-year undergraduate course focusing on microorganisms, training students in lab techniques to study bacteria, viruses, and fungi essential for research, healthcare, and biotechnology industries.",
        "duration" => "3 Years",
        "fees" => "₹65,000/",
        "power_degree" => true
    ],
    [
        "category" => "life",
        "name" => "B.Sc Biotechnology",
        "description" => "B.Sc Biotechnology is a three-year undergraduate course blending biology and technology to train students in genetic engineering, molecular biology, and bioprocessing for applications in medicine, agriculture, and research.",
        "duration" => "3 Years",
        "fees" => "₹65,000/",
        "power_degree" => true
    ],
    [
        "category" => "life",
        "name" => "Bachelor of Science in Food Technology",
        "description" => "B.Sc Food Technology is a three-year undergraduate course focusing on food production, preservation, and safety, training students to develop nutritious, high-quality food products using scientific and technological methods.",
        "duration" => "3 Years",
        "fees" => "₹60,000/",
        "power_degree" => true
    ],
    [
        "category" => "life",
        "name" => "Bachelor of Science in PCM",
        "description" => "B.Sc PCM is a three-year undergraduate course emphasizing Physics, Chemistry, and Mathematics, designed to strengthen students’ analytical, problem-solving, and scientific reasoning skills for diverse technical career paths.",
        "duration" => "3 Years",
        "fees" => "₹50,000/",
        "power_degree" => true
    ],
      [
        "category" => "life",
        "name" => "Bachelor of Science in CBZ",
        "description" => "B.Sc CBZ is a three-year undergraduate course combining Chemistry, Botany, and Zoology, aimed at developing students’ understanding of life sciences, environmental systems, and the chemical basis of biological functions.",
        "duration" => "3 Years",
        "fees" => "₹50,000/",
        "power_degree" => true
    ],

      [
        "category" => "life",
        "name" => "Bachelor of Science in Geology",
        "description" => "B.Sc Geology is a three-year undergraduate course training students to study earth materials, minerals, and geological processes, preparing them for careers in environmental science, mining, and natural resource exploration.",
        "duration" => "3 Years",
        "fees" => "₹65,000/",
        "power_degree" => true
    ],
      [
        "category" => "life",
        "name" => "Master of Science in Microbiology",
        "description" => "M.Sc Microbiology is a two-year postgraduate course focusing on microbial genetics, immunology, and biotechnology, equipping students with advanced research skills for careers in medicine, agriculture, and industry.",
        "duration" => "2 Years",
        "fees" => "₹60,000/",
        "power_degree" => false
    ],
    [
        "category" => "life",
        "name" => "Master of Science in Food Technology",
        "description" => "M.Sc Food Technology is a two-year postgraduate course emphasizing food chemistry, quality control, and product innovation, training students to enhance food safety standards and develop advanced food processing solutions.",
        "duration" => "2 Years",
        "fees" => "₹60,000/",
        "power_degree" => false
    ],
       
      [
        "category" => "life",
        "name" => "Master of Science in Chemistry",
        "description" => "M.Sc Chemistry is a two-year postgraduate course focusing on chemical analysis, organic synthesis, and spectroscopy, preparing students for research, teaching, and industrial roles in pharmaceuticals, energy, and materials science.",
        "duration" => "2 Years",
        "fees" => "₹40,000/",
        "power_degree" => false
    ],

      [
        "category" => "life",
        "name" => "Master of Science in Physics",
        "description" => "M.Sc Physics is a two-year postgraduate course emphasizing theoretical and experimental physics, helping students develop advanced analytical skills applicable in research, space science, electronics, and applied engineering fields.",
        "duration" => "2 Years",
        "fees" => "₹40,000/",
        "power_degree" => false
    ],

      [
        "category" => "life",
        "name" => "Master of Science in Botany",
        "description" => "M.Sc Botany is a two-year postgraduate course exploring plant biology, physiology, and ecology, training students in advanced botanical research, conservation, and applications in agriculture, forestry, and environmental sciences.",
        "duration" => "2 Years",
        "fees" => "₹40,000/",
        "power_degree" => false
    ],
   
     [
        "category" => "life",
        "name" => "Master of Science in Zoology",
        "description" => "M.Sc Zoology is a two-year postgraduate course focusing on animal biology, ecology, and physiology, preparing students for careers in wildlife research, environmental management, and teaching in biological sciences.",
        "duration" => "2 Years",
        "fees" => "₹40,000/",
        "power_degree" => false
    ],

    

    // Placeholder entries for other categories (for demonstration)
    [
        "category" => "agriculture", 
        "name" => "B.Sc Agriculture",
        "description" => "B.Sc Agriculture is a four-year undergraduate course focusing on crop science, soil management, and sustainable farming, training students in modern agricultural practices, agribusiness, and rural development techniques.",
        "duration" => "4 Years",
        "fees" => "₹69,000/",
        "power_degree" => true
    ],
       
      [
        "category" => "agriculture", 
        "name" => "B.Sc. Forestry",
        "description" => "B.Sc Forestry is a four-year undergraduate course centered on forest conservation, biodiversity management, and environmental sustainability, preparing students for careers in forestry services, research, and natural resource management.",
        "duration" => "4 Years",
        "fees" => "₹69,000/",
        "power_degree" => true
    ],
    
    [
        "category" => "agriculture", 
        "name" => "M.Sc Agriculture",
        "description" => "M.Sc Agriculture is a two-year postgraduate course emphasizing advanced agricultural research, crop improvement, and agronomy, training students in sustainable farming practices, soil science, and agri-based innovation strategies.",
        "duration" => "2 Years",
        "fees" => "₹65,000/",
        "power_degree" => false
    ],

     [
        "category" => "agriculture", 
        "name" => "M.Sc Horticulture",
        "description" => "M.Sc Horticulture is a two-year postgraduate course focusing on plant breeding, floriculture, and fruit and vegetable production, equipping students with skills for research, agri-entrepreneurship, and sustainable horticultural development.",
        "duration" => "2 Years",
        "fees" => "₹65,000/",
        "power_degree" => false
    ],

    [
        "category" => "nursing", 
        "name" => "Bachelor of Science in Nursing (B.Sc Nursing)",
        "description" => "B.Sc Nursing is a four-year undergraduate course preparing students for professional nursing careers through training in patient care, clinical practice, and healthcare management across hospitals and community health settings.",
        "duration" => "4 Years",
        "fees" => "₹2,50,000/",
        "power_degree" => true
    ],

     [
        "category" => "nursing", 
        "name" => "General Nursing and Midwifery (GNM)",
        "description" => "GNM is a three-year diploma course designed to train students in general nursing, maternity care, and patient assistance, developing essential clinical and interpersonal skills for healthcare and community service roles.",
        "duration" => "3 Years",
        "fees" => "₹1,25,000/",
        "power_degree" => true
    ],

     [
        "category" => "nursing", 
        "name" => "Post Basic B.Sc. Nursing",
        "description" => "Post Basic B.Sc Nursing is a two-year undergraduate program aimed at registered nurses, enhancing their clinical expertise, leadership, and critical thinking skills for advanced roles in patient care and hospital management.",
        "duration" => "2 Years",
        "fees" => "₹1,25,000/",
        "power_degree" => true
    ],          

       

    [
        "category" => "pharmacy", 
        "name" => "Bachelor of Pharmacy (B.Pharm)",
        "description" => "B.Pharm is a four-year undergraduate course focused on pharmaceutical sciences, drug formulation, and clinical pharmacy, training students to work in research, manufacturing, and healthcare sectors ensuring safe medicine use.",
        "duration" => "4 Years",
        "fees" => "₹85,000/",
        "power_degree" => true
    ],

      [
        "category" => "pharmacy", 
        "name" => " Lateral Entry in Pharmacy (B.Pharm LE)",
        "description" => "B.Pharm Lateral Entry is a three-year undergraduate course for diploma holders, providing advanced training in pharmacology, medicinal chemistry, and industrial pharmacy to enhance career opportunities in pharmaceutical industries.",
        "duration" => "3 Years",
        "fees" => "₹85,000/",
        "power_degree" => true
    ],

    [
        "category" => "pharmacy", 
        "name" => "Diploma in Pharmacy (D.Pharm)",
        "description" => "D.Pharm is a two-year diploma course introducing students to the fundamentals of pharmacy, including drug composition, dispensing, and healthcare ethics, preparing them for roles in retail, hospital, and clinical pharmacies.",
        "duration" => "2 Years",
        "fees" => "₹65,000/",
        "power_degree" => true
    ],
    [
        "category" => "health", 
        "name" => "Master of Public Health (MPH)",
        "description" => "MPH is a two-year postgraduate course focusing on public health policy, epidemiology, and disease prevention, training students to address global health challenges through research, healthcare planning, and community engagement.",
        "duration" => "2 Years",
        "fees" => "₹65,000/",
        "power_degree" => false
    ],

    [
        "category" => "health", 
        "name" => "Master of Hospital Administration (MHA)",
        "description" => "MHA is a two-year postgraduate course designed to develop managerial and administrative skills in healthcare operations, preparing students to lead hospitals, clinics, and health organizations with efficiency and professionalism.",
        "duration" => "2 Years",
        "fees" => "₹65,000/",
        "power_degree" => false
    ],
    [
        "category" => "cs", 
        "name" => "Bachelor of Computer Application (BCA)",
        "description" => "BCA is a three-year undergraduate course emphasizing computer programming, web development, and database management, preparing students for IT careers in software development, system analysis, and emerging digital technologies.",
        "duration" => "3 Years",
        "fees" => "₹45,000/",
        "power_degree" => true
    ],
    [
        "category" => "business", 
        "name" => "Bachelor of Business Administration (BBA)",
        "description" => "BBA is a three-year undergraduate course designed to build managerial, marketing, and entrepreneurial skills, offering students a strong foundation in business operations, leadership, and corporate decision-making strategies.",
        "duration" => "3 Years",
        "fees" => "₹45,000/",
        "power_degree" => true
    ],
    [
        "category" => "hotel", 
        "name" => "Diploma in Hotel Management (DHM)",
        "description" => "DHM is a  diploma course focusing on hospitality operations, food production, and customer service, training students for careers in hotels, restaurants, tourism, and event management industries worldwide.",
        "duration" => "1 Year",
        "fees" => "₹70,000/",
        "power_degree" => true
    ]
];

// PHP code to convert the array into a JSON object for JavaScript to use
$courses_json = json_encode($courses);
?>

<style>
   

    
    :root {
        --primary-color: #007bff;
        --text-color: #000;
        --bg-color: #f8f8f8;
        --white: #fff;
        --heading-font: 'Arial', sans-serif; 
    }

    
    .pgm-finder-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        box-sizing: border-box;
    }
    
    
    .pgm-header-controls-area {
        text-align: center;
        margin-top: -28rem; 
        padding: 20px 0 40px 0; 
        position: relative;
        z-index: 11;
    }

    
    .pgm-card-overlap {
        background-color: var(--bg-color);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        border-radius: 8px;
        padding: 0 60px 40px 60px; 
        margin-top: -10px; 
        position: relative;
        z-index: 10;
    }
    
    
    .pgm-header-controls-area h2 {
        font-family: var(--heading-font);
        font-size: 52px;
        color: var(--white);
        margin-bottom: 5px;
        font-weight: 900; 
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); 
    }
    
    .pgm-header-controls-area span {
        font-weight: 300;
        font-style: italic;
        font-family: inherit; 
    }

    .pgm-header-controls-area p {
        font-size: 1.1em;
        color: var(--white);
        margin-bottom: 30px; 
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7); 
    }


    .pgm-dropdown-search-row {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-bottom: 0; 
        flex-wrap: wrap;
    }


    .pgm-dropdown-wrapper {
        width: auto;
        max-width: 350px;
    }

    
    .pgm-custom-select {
        position: relative;
        width: 100%;
    }

    
    .pgm-custom-select select {
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        width: 100%;
        padding: 12px 16px;
        padding-right: 45px;
        border: 1px solid #ddd;
        border-radius: 8px;
        background: #fff;
        font-size: 16px;
        font-family: inherit;
        cursor: pointer;
        transition: 0.25s ease;
    }

    
    .pgm-custom-select select:focus,
    .pgm-custom-select select:hover {
        border-color: #0d6efd;
        box-shadow: 0 0 0 3px rgba(13, 110, 253, 0.2);
    }

   
    .pgm-custom-select .pgm-chevron {
        position: absolute;
        right: 16px;
        top: 50%;
        transform: translateY(-50%) rotate(45deg);
        width: 10px; 
        height: 10px;
        pointer-events: none;
        border-right: 2px solid #555;
        border-bottom: 2px solid #555;
        transition: 0.25s ease;
    }

    
    .pgm-search-wrapper {
        position: relative;
        width: 100%;
        max-width: 350px; 
    }

    .pgm-search-wrapper input[type="text"] {
        width: 100%;
        padding: 12px 16px;
        padding-right: 45px; 
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 16px;
        box-sizing: border-box;
        transition: 0.25s ease;
    }

    .pgm-search-wrapper input[type="text"]:focus {
        border-color: #0d6efd;
        box-shadow: 0 0 0 3px rgba(13, 110, 253, 0.2);
        outline: none;
    }

    .pgm-search-wrapper .pgm-search-icon {
        position: absolute;
        right: 16px;
        top: 50%;
        transform: translateY(-50%);
        color: #555;
        font-size: 1.1em;
        pointer-events: none;
    }
    
    /* 5. Course Results Area Styling */
    #course-results {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 25px;
        margin-top: 20px;
    }
    
    /* Separating line above results */
    .pgm-card-overlap::before {
        content: '';
        display: block;
        height: 1px;
        background-color: #ddd;
        margin-bottom: 20px;
        margin-top: 0;
    }

    .pgm-course-card {
        background-color: #fff;
        border: 1px solid #eee;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        transition: transform 0.2s;
        display: flex;
        flex-direction: column;
    }

    .pgm-course-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    }

    .pgm-course-card h4 {
        color: var(--primary-color);
        margin-top: 0;
        margin-bottom: 10px;
        font-size: 1.3em;
        min-height: 50px;
    }

    /* --- STYLES FOR POWER DEGREE TEXT --- */
    .pgm-power-degree-text {
        font-size: 0.75em; 
        color: #390fde; 
        margin-top: -5px;
        font-weight: normal; 
        text-align: right; 
    }

    .pgm-course-card p {
        font-size: 0.9em;
        color: #555;
        flex-grow: 1;
    }

    .pgm-course-details {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        padding-top: 15px;
        margin-top: 15px;
        border-top: 1px dashed #ddd;
    }

    .pgm-course-details > div {
        display: flex;
        flex-direction: column;
        align-items: flex-end; 
    }

    .pgm-course-details span {
        font-size: 0.9em;
        font-weight: 600; 
        color: var(--text-color);
    }
    
    /* Style for the clock icon to add spacing and color */
    .pgm-course-details .fas.fa-clock {
        margin-right: 5px;
        color: var(--primary-color); 
    }

    .pgm-course-details span strong {
        color: var(--primary-color);
        font-size: 1.1em;
        font-weight: normal; 
    }

    
    @media (max-width: 760px) {
        .pgm-card-overlap {
            padding: 0 20px 20px 20px;
            margin-top: 0; 
        }
        
        .pgm-header-controls-area {
            margin-top: -1rem; 
            padding-bottom: 20px;
        }

        .pgm-header-controls-area h2 {
            font-size: 36px;
        }

        
        .pgm-dropdown-search-row {
            flex-direction: column;
            gap: 15px;
        }

        .pgm-dropdown-wrapper, .pgm-search-wrapper {
            max-width: 100%;
        }
        .pgm-custom-select select, .pgm-search-wrapper input[type="text"] {
            width: 100%;
        }
        #course-results {
            grid-template-columns: 1fr;
        }
    }
</style>


<section class="pgm-finder-container">
    
    <div class="pgm-header-controls-area">
        <h2>Find Your <span>Program</span></h2>
        
        <p>Pursue the futuristic program of your choice. Select your Discipline <br>and Program from the list below:</p>

        <form action="#" method="GET">
            <div class="pgm-dropdown-search-row">
                <div class="pgm-dropdown-wrapper">
                    <div class="pgm-custom-select">
                        <select name="discipline" id="select-discipline">
                            <option value="paramedical" selected>Paramedical Sciences</option>
                            <option value="life">Life & Allied Sciences</option>
                            <option value="agriculture">Agriculture Sciences</option>
                            <option value="nursing">Nursing</option>
                            <option value="pharmacy">Pharmacy</option>
                            <option value="health">Health Science</option>
                            <option value="cs">Computer Science</option>
                            <option value="business">Business School</option>
                            <option value="hotel">Hotel Management</option>
                        </select>
                        <span class="pgm-chevron"></span>
                    </div>
                </div>

                <div class="pgm-search-wrapper">
                    <input type="text" id="course-search" placeholder="Search for a specific course" />
                    <i class="fas fa-search pgm-search-icon"></i>
                </div>

            </div>
        </form>
    </div>

    <div class="pgm-card-overlap">
        <div id="course-results">
        </div>
    </div>
</section>

<script>
    // JAVASCRIPT LOGIC
    $(document).ready(function() {
        // The PHP array is embedded directly as a JSON string
        const courses = <?php echo $courses_json; ?>;

        /**
         * Generates the HTML card for a single course.
         */
        function createCourseCard(course) {
            // ... (createCourseCard function remains the same as before)
            const powerDegreeText = course.power_degree
                ? '<div class="pgm-power-degree-text">(Included Power Degree Fee)</div>'
                : '<div class="pgm-power-degree-text"></div>';

            return `
                <div class="pgm-course-card" data-coursename="${course.name.toLowerCase()}">
                    <h4>${course.name}</h4>
                    <p>${course.description}</p>
                    <div class="pgm-course-details">
                        <span><i class="fas fa-clock"></i> <strong>${course.duration}</strong></span>
                        <div>
                            <span><strong>${course.fees}year</strong></span>
                            
                            ${powerDegreeText}
                            <button class="pgm-apply-btn btn btn-primary mt-2">Apply Now</button>
                        </div>
                    </div>
                </div>
            `;
        }

        /**
         * Filters the courses and updates the HTML display.
         * This function handles displaying the final list of courses.
         */
        function updateCourseDisplay(filteredCourses) {
            const resultsContainer = $('#course-results');

            resultsContainer.empty();

            if (filteredCourses.length > 0) {
                filteredCourses.forEach(course => {
                    resultsContainer.append(createCourseCard(course));
                });
            } else {
                resultsContainer.html('<p style="text-align: center; color: #888;">No courses found matching your criteria.</p>');
            }
        }
        
        // --- CORE FILTERING LOGIC ---

        /**
         * Main function to get filter states, process results, and update display/dropdown.
         */
        function applyFilters(isSearch = false) {
            const selectedCategory = $('#select-discipline').val();
            const searchTerm = $('#course-search').val();
            const lowerSearchTerm = searchTerm.toLowerCase().trim();
            
            let coursesToDisplay = [];

            if (lowerSearchTerm.length > 0) {
                // 1. SEARCH MODE: Search across the entire list first
                let searchResults = courses.filter(course =>
                    course.name.toLowerCase().includes(lowerSearchTerm)
                );

                if (searchResults.length === 1 && isSearch) {
                    // Search successful and only ONE result found
                    const foundCategory = searchResults[0].category;
                    
                    // A. Update the dropdown filter automatically
                    $('#select-discipline').val(foundCategory);
                    
                    // B. Only display the single found course
                    coursesToDisplay = searchResults;

                } else if (searchResults.length > 0) {
                    // Multiple results or search didn't originate from keyup (e.g., initial load with a term in URL)
                    // We still respect the current dropdown setting to refine the search results.
                    const currentFilter = $('#select-discipline').val();
                    coursesToDisplay = searchResults.filter(course => course.category === currentFilter);
                    
                } else {
                    // No results found
                    coursesToDisplay = [];
                }

            } else {
                // 2. FILTER MODE: If search box is empty, filter only by the selected category.
                coursesToDisplay = courses.filter(course => course.category === selectedCategory);
            }
            
            // Update the display with the final list of courses
            updateCourseDisplay(coursesToDisplay);
        }

        // --- EVENT HANDLERS ---

        // A. Initial load: Display courses for the default selected value ("paramedical")
        applyFilters(false);

        // B. Dropdown change event: Not a search, just a filter change.
        $('#select-discipline').on('change', function() {
            // Clear the search box when the category filter is changed
            $('#course-search').val(''); 
            applyFilters(false);
        });

        // C. Search input event: This is the search action.
        $('#course-search').on('keyup', function() {
            // Pass 'true' to indicate a search is happening, triggering the auto-update logic
            applyFilters(true);
        });
          

        // D. Smooth scroll to form on Apply Now button click
        $('.pgm-card-overlap').on('click', '.pgm-apply-btn', function(e) {
            e.preventDefault(); // Stop any default button action
            
            // Use jQuery's animate function to smoothly scroll the window to the form's position
            $('html, body').animate({
                // Get the top position of the target form container
                scrollTop: $('#form-container').offset().top - 50 // Subtract 50px for a slight buffer/padding above the form
            }, 800); // Scroll duration in milliseconds (800ms for smooth effect)
        });



    });
</script>