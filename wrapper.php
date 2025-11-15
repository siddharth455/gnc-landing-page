<?php
// PHP Course Data (Used for context, but hardcoded content will be used as requested)
$courses = [
    // Placeholder entries for brevity
    [ "category" => "paramedical", "name" => "BMLT", "fees" => "₹65,000 /-" ],
    [ "category" => "cs", "name" => "B.Tech CSE", "fees" => "₹95,000 /-" ],
    [ "category" => "business", "name" => "BBA", "fees" => "₹45,000 /-" ],
    [ "category" => "nursing", "name" => "B.Sc Nursing", "fees" => "₹2,50,000 /-" ],
    [ "category" => "life", "name" => "B.Sc Biotechnology", "fees" => "₹65,000 /-" ]
];

// PHP code to convert the array into a JSON object for JavaScript to use
$courses_json = json_encode($courses);
?>

<style>
    /* CSS Variables */
    :root {
        --red: #d80000;
        --dark-bg: #222; 
        --gold: #fff;
        --white: #fff;
        --transparent-gold: rgba(255, 204, 0, 0.6);
        --transparent-red: rgba(216, 0, 0, 0.6);
        /* NEW: Define a more transparent dark background for the other card */
        --transparent-dark: rgba(24, 24, 24, 0.6); 
    }

    /* ------------------------------------------------------------------ */
    /* WRAPPER AND BLUR EFFECT */
    /* ------------------------------------------------------------------ */

    .vertical-wrapper {
        max-width: 1599px;
        width: 100%;
        min-height: 1100px;
        background-color: var(--dark-bg); 
        padding: 40px 15px; 
        position: relative;
        z-index: 1;
        margin: 0 auto; 
        display: flex;
        justify-content: center;
        align-items: flex-start; 
        box-sizing: border-box;
        overflow: hidden; 
    }

    /* Pseudo-element for the Blurred Background Image */
    .vertical-wrapper::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('assets/image/college_gnc.webp');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        /* Apply Blur Filter */
        /* filter: blur(3px);  */
        z-index: -1; 
    }

    /* Content container to constrain the cards and set up the side-by-side grid */
    .card-content-area {
        max-width: 700px;
        width: 100%;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        align-items: stretch; 
        z-index: 2; 
    }

   

    .vertical-card {
        
        background-color: var(--transparent-dark); 
        color: var(--white);
        border-radius: 8px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        padding: 20px;
        width: 100%;
        display: flex;
        flex-direction: column;
    }

    

    .scholarship-card {
       background-color: var(--transparent-red); 
    }

    .scholarship-card h3 {
        color: var(--gold);
        margin-top: 0;
        font-size: 1.3em;
        text-align: center;
        border-bottom: 2px solid var(--gold);
        padding-bottom: 10px;
        margin-bottom: 15px;
    }

    .scholarship-card p {
        font-size: 0.85em;
    }

    .scholarship-card ul {
        list-style: none;
        padding: 0;
        flex-grow: 1; 
        font-size: 0.9em;
    }

    .scholarship-card ul li {
        padding: 6px 0;
        display: flex;
        justify-content: space-between;
    }
    .scholarship-card .mark-range {
        width: 65%;
    }
    .scholarship-card .scholarship-percentage {
        font-size: 1em;
        font-weight: 700;
        color: var(--gold);
        text-align: right;
    }
    
    
    
    .courses-card {
        
        background-color: var(--transparent-dark);
    }

    .courses-card h3 {
        font-size: 1.3em;
        padding-bottom: 10px;
        margin-bottom: 15px;
        border-bottom: 2px solid var(--gold);
        
    }

    .courses-card h4 {
        font-size: 1em;
        border-left: 2px solid var(--gold);
        padding-left: 8px;
        
    }

    .courses-card ul {
        font-size: 0.85em;
        margin-bottom: 10px;
        
    }
    .courses-card ul li {
        padding: 3px 0;
        
    }
    
    /* ------------------------------------------------------------------ */
    /* RESPONSIVE */
    /* ------------------------------------------------------------------ */

    @media (max-width: 650px) {
        .vertical-wrapper {
            min-height: auto;
            padding: 20px 10px;
            align-items: flex-start;
        }
        .card-content-area {
            grid-template-columns: 1fr;
            gap: 20px;
        }
        .vertical-card {
            min-height: auto; 
            max-width: 100%;
        }
    }
</style>

<div class="vertical-wrapper">
    <div class="card-content-area">
        
        <div class="vertical-card scholarship-card">
            <h3>Diploma / UG / PG Scholarship Criteria</h3>
            
            <p style="color: var(--white); text-align: center; margin-top: -5px; margin-bottom: 10px; font-size: 0.85em;">Scholarships based on Academic Merit, Domicile, and Activities.</p>

            <ul>
                <li><span class="mark-range">Academic Score: 65% - 75%</span> <span class="scholarship-percentage">15%</span></li>
                <li><span class="mark-range">Academic Score: 75% - 90%</span> <span class="scholarship-percentage">20%</span></li>
                <li><span class="mark-range">Academic Score: 90% - 95%</span> <span class="scholarship-percentage">50%</span></li>
                <li><span class="mark-range">Academic Score: 95% - 100%</span> <span class="scholarship-percentage">Free Education</span></li>
                
                <li style="border-top: 1px dashed rgba(255, 255, 255, 0.4); margin-top: 8px; padding-top: 8px;">
                    <span class="mark-range">Sports Category</span> <span class="scholarship-percentage">5-10%</span>
                </li>
                <li><span class="mark-range">Uttarakhand Domicile</span> <span class="scholarship-percentage">15%</span></li>
                <li><span class="mark-range">Extracurricular</span> <span class="scholarship-percentage">5-10%</span></li>
                <li><span class="mark-range">Social Service (NCC/NSS)</span> <span class="scholarship-percentage">10%</span></li>
            </ul>

            </div>

        <div class="vertical-card courses-card">
            <h3>Featured Program Disciplines</h3>
            
            <div class="program-group">
                <h4>Paramedical Sciences</h4>
                <ul>
                    <li>Bachelor of Medical Laboratory Technology (BMLT)</li>
                    <li>Bachelor of Physiotherapy (BPT)</li>
                    <li>Bachelor of Optometry (BSc Optometry)</li>
                </ul>

                <h4>Computer Science & IT</h4>
                <ul>
                    
                    <li>BCA (Computer Application)</li>
                </ul>

                <h4>Business & Management</h4>
                <ul>
                    <li>Bachelor of Business Administration (BBA)</li>
                    
                </ul>
                
                <h4>Nursing</h4>
                <ul>
                    <li>Bachelor of Science in Nursing (B.Sc Nursing)</li>
                    <li>General Nursing and Midwifery (GNM)</li>
                </ul>
            </div>
            
            </div>

    </div>
</div>