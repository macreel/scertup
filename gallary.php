<?php
include('header.php');
?>


<style>
   #photo-gallery {
    background-color: #f8f9fa; /* Light background for better contrast */
    padding-top: 60px;
    padding-bottom: 60px;
    position: relative;
    overflow: hidden;
}

.section-title h5 {
    font-size: 16px;
    color: #333;
    text-transform: uppercase;
    font-weight: 600;
    letter-spacing: 1px;
}

.section-title h2 {
    font-size: 20px; /* Increase font size */
    font-weight: 700; /* Keep bold text */
    color: #333;
    margin-top: 10px;
    letter-spacing: 1px; /* Increase letter spacing */
    text-transform: uppercase; /* Make text uppercase */
    position: relative;
    font-family: 'Roboto', sans-serif; /* Custom font-family for modern look */
}

.section-title h2::after {
    content: '';
    position: absolute;
    bottom: -8px;
    left: 0;
    width: 29%;
    height: 3px;
    background: linear-gradient(to right, #ff7e5f, #feb47b); /* Gradient underline */
}

.section-title h2 {
    color: #333; /* Dark text color */
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2); /* Soft text shadow for a pop effect */
    transition: all 0.3s ease;
}

.section-title h2:hover {
    color: #ff7e5f; /* Change color on hover */
    transform: translateY(-5px); /* Slight upward movement on hover */
    text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3); /* More intense shadow on hover */
}


.gallery .single-photo {
    margin-bottom: 20px;
    overflow: hidden;
    border-radius: 12px; /* Rounded corners for photos */
    box-shadow: 0 0px 12px rgba(7, 41, 77, 0.9); /* Soft shadow */
    transition: all 0.3s ease;
}

.gallery .single-photo:hover {
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15); /* Darker shadow on hover */
    transform: scale(1.05); /* Slight zoom effect */
}

.gallery .single-photo img {
    width: 100%;
    height: 250px; /* Increased height */
    object-fit: cover; /* Ensure the image covers the container without stretching */
    border-radius: 12px; /* Match the rounded corners of the container */
    transition: transform 0.3s ease;
}

.gallery .single-photo:hover img {
    transform: scale(1.05); /* Zoom effect on image hover */
}

@media (max-width: 768px) {
    .gallery .col-lg-3 {
        margin-bottom: 30px; /* Add space between columns for mobile */
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
                    <h2>Our Gallary</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Our Gallary</li>
                        </ol>
                    </nav>
                </div> <!-- page banner cont -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>




<section id="photo-gallery" class="pt-40 pb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title pb-45">
                    <h5>Our Gallery</h5>
                    <h2>Photo Gallery</h2>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row gallery mt-30">
           <div class="col-xl-3 col-lg-4 col-sm-6">
           <div class="single-photo">
                    <img src="images/gal1.jpg" alt="Photo">
                </div>
           </div>


           <div class="col-xl-3 col-lg-4 col-sm-6">
           <div class="single-photo">
                    <img src="images/gal2.jpg" alt="Photo">
                </div>
           </div>


           <div class="col-xl-3 col-lg-4 col-sm-6">
           <div class="single-photo">
                    <img src="images/gal3.jpg" alt="Photo">
                </div>
           </div>


           <div class="col-xl-3 col-lg-4 col-sm-6">
           <div class="single-photo">
                    <img src="images/gal4.jpg" alt="Photo">
                </div>
           </div>


           <div class="col-xl-3 col-lg-4 col-sm-6">
           <div class="single-photo">
                    <img src="images/gal5.jpg" alt="Photo">
                </div>
           </div>

           <div class="col-xl-3 col-lg-4 col-sm-6">
           <div class="single-photo">
                    <img src="images/gal6.jpg" alt="Photo">
                </div>
           </div>


           <div class="col-xl-3 col-lg-4 col-sm-6">
           <div class="single-photo">
                    <img src="images/gal7.jpg" alt="Photo">
                </div>
           </div>

           <div class="col-xl-3 col-lg-4 col-sm-6">
           <div class="single-photo">
                    <img src="images/gal8.jpg" alt="Photo">
                </div>
           </div>
        </div> <!-- gallery row -->
    </div> <!-- container -->
</section>














<?php

include('footer.php');
?>