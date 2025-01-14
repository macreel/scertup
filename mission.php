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
                    <h2>Mission</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Mission</li>
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
                    <h2 class="text-center text-primary mb-4">Our Mission</h2>
                    <ul class="list-arrow">
                        <li class="text-justify">
                            To raise the quality of school education by improving the attitudes, increasing the application 
                            of knowledge, and enhancing the teaching skills of teachers.
                        </li>
                        <li class="text-justify">
                            To provide academic and professional support and guidance to agencies and institutions working 
                            in the field of education, population and development education, child rights and environmental 
                            protection, eco-friendly lifestyle, community education, etc.
                        </li>
                        <li class="text-justify">
                            To collaborate with other agencies, institutions, and organizations for the cause of quality in 
                            school education and teacher education programmes.
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