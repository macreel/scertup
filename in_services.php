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
        font-size: 1rem;
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
                    <h2>In Services</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">In Services</li>
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
                    <h2 class="text-center text-primary mb-4">In Services</h2>
                    <h4 class="text-left text-dark mb-3">In-Service Teacher Training</h4>

                    <p class="text-justify">State Council of Educational Research and Training (SCERT), Uttar Pradesh, Lucknow its units and
                        District Education and Training Institutes (DIET) organize various training programs and
                        workshops for capacity building of educational administrators, DIET faculty,
                        Principal/Headmasters of Secondary, Upper Primary and Primary Schools. Trainings are mainly
                        subject-based and skill-based. Through these trainings and workshops participants are oriented
                        and trained on new education policies and programmes, educational pedagogy and classroom
                        management. District level master trainers are trained at state level. Further district level
                        master trainers provide training to block level master trainers in their respective districts.
                        These master trainers provide training to teachers. Trainings are conducted on the basis of
                        training modules. Main trainings under in-service training programmes are as follows:</p>
                    <ul class="list-arrow ml-3">
                        <li class="text-justify">Capacity Building Training
                        </li>
                        <li class="text-justify">Leadership Training For Officials And Principals
                        </li>
                        <li class="text-justify">Subject-based Trainings (Science, Mathematics, English, Hindi, Sanskrit, Social Science)
                        </li>
                        <li class="text-justify">Need-based Trainings
                        </li>
                        <li class="text-justify">Early Grade Reading (EGR) (Primary level)
                        </li>
                        <li class="text-justify">Early numeracy (Primary level)
                        </li>
                        <li class="text-justify">Continuous and Comprehensive Evaluation Training (Primary and upper primary level)
                        </li>
                        <li class="text-justify">Health and Hygiene Training (Upper Primary level)
                        </li>
                        <li class="text-justify">Inclusive Education Training (Primary And Upper Primary level)
                        </li>
                        <li class="text-justify">Online Course Enhancing Teacher Education Through OER (DIETs Faculties, Teachers and BTC
                            Trainee)
                        </li>
                        <li class="text-justify">Training of Madrassa/Maktab Teachers
                        </li>
                        <li class="text-justify">Master Trainer’s Training on Environmental Studies
                        </li>
                        <li class="text-justify">Art/Craft, Puppetry and Music Training
                        </li>
                        <li  class="text-justify">Yoga Training</li>
                    </ul>





                    <h4 class="text-left text-dark mb-3 mt-3">Development of Training modules</h4>
                    <p class="text-justify">SCERT designs and develops training modules and materials for various teacher trainings. Training
                        modules are prepared by experts from national level institutions, reputed institutions and NGOs,
                        teachers and SCERT faculty members. Field testing is done before finalization of modules.
                        Modules are updated regularly and new strategies and teaching techniques are included in modules
                        on time to time or whenever needed. Following are the main modules prepared in past years:
                        (click here)</p>
                    <ul class="list-arrow ml-3">
                        <li class="text-justify">Continuous and Comprehensive Evaluation
                        </li>
                        <li class="text-justify">Health and Hygiene
                        </li>
                        <li class="text-justify">Inclusive Education
                        </li>
                        <li class="text-justify">Early Numeracy
                        </li>
                        <li class="text-justify">Science (class 6, 7, 8)
                        </li>
                        <li class="text-justify">Mathematics (Class 6, 7, 8)
                        </li>
                        <li class="text-justify">Environmental Studies
                        </li>
                        <li class="text-justify">Social Science
                        </li>
                        <li class="text-justify">CCE based Early Grade Reading Development
                        </li>
                        <li class="text-justify">Art/Craft, Music and Puppetry
                        </li>
                        <li class="text-justify">Yoga
                        </li>
                        <li class="text-justify">Early Grade Reading (English)
                        </li>
                        <li class="text-justify">Early Grade Reading (Hindi)
                        </li>
                        <li class="text-justify">Foundation Training for DIET Lecturers
                        </li>
                        <li class="text-justify">Ethics and Values</li>
                    </ul>

                    


                    
                </div>
            </div>
        </div>
    </div>
</section>










<?php

include('footer.php');
?>