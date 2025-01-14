<?php
include('header.php');
?>


<style>
    .mission-section {
    background-color: #f8f9fa;
}

.content-box {
    background: #ffffff;
    border-left: 5px solid #022446;
    border-radius: 5px;
}

h2 {
    font-size: 2rem;
    font-weight: bold;
    margin-bottom: 20px;
}

.list-arrow {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.list-arrow li {
    position: relative;
    margin-bottom: 15px;
    padding-left: 30px;
    font-size: 1.1rem;
    color: #555555;
    line-height: 1.6;
}

.list-arrow li:before {
    content: "➤";
    position: absolute;
    left: 0;
    top: 0;
    font-size: 1.5rem;
    color: #022446;
}

.text-justify {
    text-align: justify;
}

.shadow {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

@media (max-width: 768px) {
    h2 {
        font-size: 1.5rem;
    }
    .list-arrow li {
        font-size: 1rem;
    }
}

</style>


<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url('images/taj.jpg'); 
           background-size: cover; 
           background-position: center; 
           background-repeat: no-repeat; object-fit:cover;
           width:100%;
           height:100%;
           ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont text-center">
                    <h2>Objective</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Objective</li>
                        </ol>
                    </nav>
                </div> <!-- page banner cont -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>


<section class="mission-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-10 m-auto">
                <div class="content-box p-4 bg-light shadow rounded">
                <h2 class="text-center text-primary mb-4">Our Objective</h2>
                    <h4 class="text-left text-dark mb-4">The council's objectives as enshrined in its Memorandum of Association are:</h4>
                    <ul class="list-arrow">
                        <li class="text-justify">
                        To assist and advise the administration of Delhi in the implementation of its policies and major programmes for human resource development especially in the field of education.
                        </li>
                        <li class="text-justify">
                        To promote educational researches and training of teachers and other personnel.
                        </li>

                        <li class="text-justify">
                        To develop the curriculum aiming at an all-round development of the child, and at all levels of education.
                       </li>

                       <li class="text-justify">
                       To develop educational technology for use in the teaching-learning activities and in the training programmes, and to provide distance education.
                       
                       </li>

                       <li class="text-justify">
                       To devise the systems and approaches for qualitative improvement of education.
                       </li>

                       <li class="text-justify">
                       To develop a scientific process of evaluation of the pupil and of the educational programmes and institutions.
                       </li>

                       <li class="text-justify">
                       To establish linkages with NCERT, various departments of the University of Delhi, Department of Education, Delhi Administration and other educational institutions of the Central Government and Delhi Administration.
                       </li>

                       <li class="text-justify">
                       To develop, adopt/adapt and produce curricular materials, text books and other related instructional materials.
                       </li>

                       <li class="text-justify">
                       To guide, develop and provide educational materials for non-formal education and functional literacy.
                       </li>

                       <li class="text-justify">
                       To provide pre-service and in-service training to teachers at all levels of school education.
                       </li>
                        
                      
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>










<?php

include('footer.php');
?>