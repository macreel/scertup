<?php
include('header.php');
?>


<style>
    .about-section {
    background-color: #f8f9fa;
}

.content-box {
    background: #ffffff;
    border-left: 5px solid #022446;
}

h2 {
    font-size: 2rem;
    font-weight: bold;
}

.lead {
    font-size: 1.2rem;
    color: #555555;
}

.text-primary {
    color: #022446 !important;
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
    .lead {
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
                    <h2>About Us</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                </div> <!-- page banner cont -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>


<section class="about-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto">
                <div class="content-box p-4 bg-light shadow rounded">
                    <h2 class="text-center text-primary mb-4">About SCERT</h2>
                    <p class="lead text-justify">
                        The State Council of Educational Research and Training also oversees and provides necessary 
                        guidance toward the effective functioning of nine District Institutes of Education and Training 
                        of Delhi, which among other activities also conducts a two-year pre-service Diploma Course in 
                        Elementary Teacher Education.
                    </p>
                    <p class="text-justify">
                        Over more than two decades, the State Council of Educational Research and Training has made a 
                        significant contribution in the area of school education in general and teacher education in 
                        particular. It has been performing a pioneering role in pre-service and in-service training of 
                        teachers and other stakeholders.
                    </p>
                    <p class="text-justify">
                        The Council provides academic support to the Department of Education, Government of National Capital 
                        Territory of Delhi, in formulating policies and planning procedures. Other key functions include 
                        developing curricular materials like textbooks, supplementary materials, teacher handbooks, manuals, 
                        and modules. Materials have also been developed for audio and visual media.
                    </p>
                    <p class="text-justify">
                        Additionally, numerous research projects have been undertaken and completed by the State Council of 
                        Educational Research and Training and the District Institutes of Education and Training faculty, 
                        contributing significantly to the betterment of education in the region.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>













<?php

include('footer.php');
?>