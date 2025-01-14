<?php

include("header.php");

?>

<style>
    /* Styling for the paragraph text */
    .intro-text {
        font-size: 16px;
        line-height: 1.8;
        color: #555;
        margin-bottom: 2px;
        font-family: 'Roboto', sans-serif;
    }

    /* Styling for the list items under SCERT functions */
    .scert-functions ul {
        list-style: none;
        padding-left: 0;
    }

    .scert-functions li {
        font-size: 15px;
        color: #333;
        margin-bottom: 8px;
        line-height: 1.6;
        font-family: 'Arial', sans-serif;
    }

    .scert-functions li i {
        color: #ffc600;
        margin-right: 10px;
    }

    /* Button styling */
    .main-btn {
        background-color: #ffc600;
        color: #07294d;
        padding: 15px 40px;
        border-radius: 5px;
        font-size: 16px;
        font-weight: bold;
        text-transform: uppercase;
        text-align: center;
        display: inline-block;
        margin-top: 20px;
        transition: background-color 0.3s ease;
    }

    .main-btn:hover {
        background-color: #07294d;
        color: #fff;
    }

    /* Section title styles */
    .section-title h5 {
        color: #07294d;
        font-size: 18px;
        font-weight: 500;
    }

    .section-title h2 {
        font-size: 28px;
        font-weight: 700;
        color: #07294d;
        margin-top: 10px;
    }

    /* Styling the teachers section */
    .teachers {
        padding: 40px 0;
    }

    .singel-teachers {
        transition: all 0.3s ease;
        border-radius: 10px;
        box-shadow: 1px 4px 10px rgba(12, 12, 12, 0.1);
        overflow: hidden;
        background-color: #fff;
    }

    .singel-teachers:hover {
        transform: translateY(-10px);
        box-shadow: 0px 6px 15px rgba(24, 23, 23, 0.15);
    }

    .singel-teachers .image {
        width: 150px;
        height: 150px;
        margin: 0 auto;
        overflow: hidden;
        border-radius: 50%;

        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }

    .singel-teachers .image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .singel-teachers:hover .image img {
        transform: scale(1.05);
    }

    .singel-teachers .cont {
        position: unset;
        bottom: 15px;
        left: 0;
        right: 0;
        width: 80%;
        background-color: #fff;
        border-radius: 5px;
        margin: 0 auto;
        padding: 15px;
    }

    .singel-teachers .teacher-name {
        font-size: 18px;
        font-weight: 700;
        color: #333;
        margin-bottom: 5px;
        text-transform: capitalize;
        transition: color 0.3s ease;
    }

    .singel-teachers .teacher-name:hover {
        color: #ffc600;
    }

    .singel-teachers .teacher-title {
        font-size: 14px;
        color: #777;
        font-weight: 500;
    }

    /* Responsive Styling */
    @media (max-width: 768px) {
        .singel-teachers .image {
            width: 120px;
            height: 120px;
        }

        .singel-teachers .teacher-name {
            font-size: 16px;
        }

        .singel-teachers .teacher-title {
            font-size: 13px;
        }
    }



    .singel-course-2 {
        background: #fff;
        position: relative;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        border-radius: 8px;
        /* Optional: to round the edges of the box */
        overflow: hidden;
        /* Ensures shadow is contained within the box */
        margin-bottom: 30px;
        /* Space between courses */
        transition: all 0.3s ease;
        /* Smooth hover transition */
    }

    .singel-course-2:hover {
        box-shadow: 2px 2px black;
    }

    .singel-course-2 .thum .image {
        width: 150px;
        /* Adjust based on your needs */
        height: 150px;
        /* Adjust based on your needs */
        border-radius: 50%;
        /* Circle shape */
        overflow: hidden;
        /* Ensures the image fits in the circle */
        margin: 5px auto;
        /* Center the circle */
        box-shadow: 0px 0px 5px #000;
        transition: all 0.3s ease;
        /* Smooth hover transition */
    }

    .singel-course-2 .thum .image img {
        width: 100%;
        /* Ensure the image covers the full circle */
        height: 100%;
        /* Ensure the image covers the full circle */
        object-fit: cover;
        /* Crop the image if necessary to fit inside the circle */
    }

    .singel-course-2 .cont {
        text-align: center;
        /* Center align the title */
        /* margin-top: 10px; */
        /* Adjust spacing between image and title */
    }

    .singel-course-2 .cont h4 {
        font-size: 18px;
        /* Adjust font size as needed */
        color: #fff;
        /* Adjust title color */
        text-shadow: 0px 0px 5px rgba(0, 0, 0, 0.15);
    }


    #photo-gallery {
        background-color: #f8f9fa;
        /* Light background for better contrast */
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
        font-size: 20px;
        /* Increase font size */
        font-weight: 700;
        /* Keep bold text */
        color: #333;
        margin-top: 10px;
        letter-spacing: 1px;
        /* Increase letter spacing */
        text-transform: uppercase;
        /* Make text uppercase */
        position: relative;
        font-family: 'Roboto', sans-serif;
        /* Custom font-family for modern look */
    }

    .section-title h2::after {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 0;
        width: 29%;
        height: 3px;
        background: linear-gradient(to right, #ff7e5f, #feb47b);
        /* Gradient underline */
    }

    .section-title h2 {
        color: #333;
        /* Dark text color */
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        /* Soft text shadow for a pop effect */
        transition: all 0.3s ease;
    }

    .section-title h2:hover {
        color: #ff7e5f;
        /* Change color on hover */
        transform: translateY(-5px);
        /* Slight upward movement on hover */
        text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
        /* More intense shadow on hover */
    }


    .gallery .single-photo {
        margin-bottom: 20px;
        overflow: hidden;
        border-radius: 12px;
        /* Rounded corners for photos */
        box-shadow: 0 0px 12px rgba(7, 41, 77, 0.9);
        /* Soft shadow */
        transition: all 0.3s ease;
    }

    .gallery .single-photo:hover {
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        /* Darker shadow on hover */
        transform: scale(1.05);
        /* Slight zoom effect */
    }

    .gallery .single-photo img {
        width: 100%;
        height: 250px;
        /* Increased height */
        object-fit: cover;
        /* Ensure the image covers the container without stretching */
        border-radius: 12px;
        /* Match the rounded corners of the container */
        transition: transform 0.3s ease;
    }

    .gallery .single-photo:hover img {
        transform: scale(1.05);
        /* Zoom effect on image hover */
    }

    @media (max-width: 768px) {
        .gallery .col-lg-3 {
            margin-bottom: 30px;
            /* Add space between columns for mobile */
        }
    }







    .content {
        padding: 50px 0;
        background: #f5f5f5;
    }

    .section-sub-title {
        font-size: 28px;
        font-weight: 700;
        color: #333;
        margin-bottom: 20px;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-family: poppins;
        text-shadow: 1px 1px 5px #000;
        text-decoration: underline;
        text-decoration-color: #07294d;
    }

    .testimonial-slide .item {
        text-align: center;
        padding: 20px;
        background: #fff;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        margin: 0 15px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .testimonial-slide .item:hover {
        transform: translateY(-10px);
        box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
    }



    .item:hover .testimonial-thumb {
        transform: scale(1.1);
    }

    .quote-text {
        font-size: 16px;
        font-style: italic;
        color: #555;
        margin-top: 10px;
    }

    .slick-dots {
        text-align: center;
        margin-top: 20px;
    }

    .slick-dots li {
        display: inline-block;
        margin: 0 5px;
    }

    .slick-dots li button {
        width: 10px;
        height: 10px;
        border: none;
        border-radius: 50%;
        background: gray;
        cursor: pointer;
        font-size: 0;
        /* Hide text inside button */
    }

    .slick-dots li.slick-active button {
        background: #07294d;
        /* Highlight active dot */
    }

    .slick-dots li button:before {
        content: '';
        /* Ensure no text is displayed */
    }


    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        padding: 5px;
        transition: background-color 0.3s ease;
        /* Smooth transition for background color */
    }

    .carousel-control-prev-icon:hover,
    .carousel-control-next-icon:hover {
        background-color: #07294d;
        /* Change background to blue on hover */
        color: #fff;
        /* Change the icon color to white */
    }






    .tabs .btn {
        width: 100%;
        padding: 4px;
        font-size: 18px;
        border-radius: 10px;
        text-align: center;
        background-color: #f8f9fa;
        border: 1px solid #ddd;
        transition: all 0.3s ease;
    }

    .tabs .btn:hover {
        background-color: #07294d;
        color: #fff;
        transform: translateY(-2px);
    }

    .tabs .btn.active {
        background-color: #07294d;
        color: #fff;
        box-shadow: 0 4px 10px rgba(0, 123, 255, 0.2);
        border-color: #07294d;
        transform: translateY(0);
    }

    .tabs .city-content {
        display: none;
        opacity: 0;
    }

    .tabs .city-content.active {
        display: block;
        opacity: 1;
    }

    .tabs .city-content .fix-height {

        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        margin-top: 20px;

        transition: opacity 0.3s ease;
        height: 370px;
        /* Fixed height for the content */
        overflow-y: auto;
        /* Enable scrolling */

    }




    /* Notification styling */
    .notification-view {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        /* Align title and link on the same line */
        align-items: center;
        padding: 10px 15px;
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 8px;
        margin-bottom: 10px;
        transition: background-color 0.3s ease;
    }

    .notification-view:hover {
        background-color: #e9ecef;
    }

    .tab-title {
        font-size: 1.2rem;
        font-weight: bold;
        color: #333;
        margin-bottom: 5px;
        flex: 1;
        /* Ensures the title takes available space */
    }

    .tab-date {
        font-size: 1rem;
        color: #777;
    }

    .tab-view {
        font-size: 14px;
        color: #007bff;
        text-decoration: none;
    }

    .tab-view:hover {
        text-decoration: underline;
    }

    .city-title {
        font-size: 2.5rem;
        color: #333;
        margin-bottom: 15px;
    }

    .city-description {
        font-size: 1.2rem;
        color: #555;
    }

    .view-all-btn {
        display: block;
        float: right;
        width: 100px;
        padding: 8px;
        margin-top: 6px;
        font-size: 16px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 10px;
        text-align: center;
        transition: all 0.3s ease;
    }

    .view-all-btn:hover {
        background-color: #0056b3;
        cursor: pointer;
    }



    .news {
        background: #f9f9f9;

        border-radius: 8px;
        border: 1px solid #ddd;
        height: 306px;
        overflow: hidden;
        position: relative;
    }

    .news-heading {
        background-color: #17a2b8 !important;
        /* Solid background */
        color: #fff;
        padding: 10px;
        margin: 0;
        border-radius: 5px;
        border: 1px solid #ccc;
        z-index: 1;
        position: relative;
    }





    .news-panel {
        list-style: none;
        padding: 0;
        margin: 0;
        position: absolute;
        width: 100%;
        display: flex;
        flex-direction: column;
        animation: scrollUp 20s linear infinite;
    }

    .news-item {
        padding: 10px;
        font-size: 16px;
        display: flex;
        align-items: center;
        border-bottom: 1px solid #ddd;
    }

    .adtext {
        font-weight: bold;
        color: #333;
        text-decoration: none;
        flex: 1;
    }

    .adtext:hover {
        text-decoration: underline;
    }

    .ndate {
        font-size: 12px;
        color: #777;
    }

    /* Keyframes for continuous scrolling */
    @keyframes scrollUp {
        0% {
            transform: translateY(0);
        }

        100% {
            transform: translateY(-100%);
        }
    }

    /* Stop animation on hover */
    .news:hover .news-panel {
        animation-play-state: paused;
    }

    /* Duplicate the list for smooth scrolling */
    .news-panel::after {
        content: "";
        display: block;
        position: relative;
        width: 100%;
    }




    .card-scroll {
        height: 500px;
        /* Fixed height for the card */
        border: 1px solid #ddd;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .sticky-header {
        position: sticky;
        top: 0;
        background-color: #f8f9fa;
        padding: 10px;
        font-weight: bold;
        border-bottom: 1px solid #ddd;
        z-index: 10;
        text-align: center;
        text-shadow: 2px 2px white;
    }

    .list-group {
        height: calc(100% - 50px);
        /* Adjust based on header height */
        overflow-y: auto;
    }

    .sticky-footer {
        position: sticky;
        bottom: 0;
        background-color: #f8f9fa;
        padding: 10px;
        border-top: 1px solid #ddd;
        z-index: 10;
        display: block;
        box-shadow: 0 -1px 5px rgba(0, 0, 0, 0.1);
        /* Adds a subtle shadow */
    }

    .btn-primary,
    .btn-primary:hover,
    .btn-primary:focus {
        background-color: #07294d !important;
        border-color: #07294d !important;
        color: #fff !important;
    }
</style>

<section id="slider-part" class="slider-active">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 h-100" src="images/bb1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 h-100" src="images/bb3.jpg" alt="Second slide">
            </div>

            <div class="carousel-item">
                <img class="d-block w-100 h-100" src="images/bb4.jpg" alt="Second slide">
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>


<!-- notification and tender and new Announcements -->

<section class="tabs pb-40 pt-40" style="background: #ebe2e3;">
    <div class="container">

        <div class="row ">
            <div class="col-md-8 mt-2">
                <div class="row">
                    <div class="col-md-6 col-12 ">
                        <button class="btn w3-bar-item w3-button"
                            onclick="openCity('London', this)">Notifications</button>
                    </div>
                    <div class="col-md-6 col-12 ">
                        <button class="btn w3-bar-item w3-button" onclick="openCity('Paris', this)">Tender</button>
                    </div>
                </div>


                <div id="London" class="city-content">
                    <ul class="fix-height">
                        <li>
                            <div class="notification-view">
                                <div>
                                    <div class="tab-title">Filling up posts of Assistant Professor in SCERT</div>
                                    <div class="tab-date">Date: 17-12-2024</div>
                                </div>
                                <a class="tab-view"
                                    href="/scert/filling-posts-assistant-professor-academic-level-10-ugc-pay-matrix-rs57700-182400-0">View</a>
                            </div>
                        </li>
                        <li>
                            <div class="notification-view">
                                <div>
                                    <div class="tab-title">Filling up posts of Assistant Professor in SCERT</div>
                                    <div class="tab-date">Date: 17-12-2024</div>
                                </div>
                                <a class="tab-view"
                                    href="/scert/filling-posts-assistant-professor-academic-level-10-ugc-pay-matrix-rs57700-182400-0">View</a>
                            </div>
                        </li>
                        <li>
                            <div class="notification-view">
                                <div>
                                    <div class="tab-title">Filling up posts of Assistant Professor in SCERT</div>
                                    <div class="tab-date">Date: 17-12-2024</div>
                                </div>
                                <a class="tab-view"
                                    href="/scert/filling-posts-assistant-professor-academic-level-10-ugc-pay-matrix-rs57700-182400-0">View</a>
                            </div>
                        </li>

                        <li>
                            <div class="notification-view">
                                <div>
                                    <div class="tab-title">Filling up posts of Assistant Professor in SCERT</div>
                                    <div class="tab-date">Date: 17-12-2024</div>
                                </div>
                                <a class="tab-view"
                                    href="/scert/filling-posts-assistant-professor-academic-level-10-ugc-pay-matrix-rs57700-182400-0">View</a>
                            </div>
                        </li>
                        <!-- Add more notifications as needed -->
                    </ul>

                    <button class="view-all-btn" onclick="window.location.href='/city/london/notifications'">View
                        All</button>

                </div>

                <div id="Paris" class="city-content">
                    <ul class="fix-height">
                        <li>
                            <div class="notification-view">
                                <div>
                                    <div class="tab-title">Tender for outsourced Junior Assistant through GeM</div>
                                    <div class="tab-date">Date: 15-11-2024</div>
                                </div>
                                <a class="tab-view"
                                    href="/tender/tender-outsourced-junior-assistant-through-gem-bid-no-gem2024b5142041">View</a>
                            </div>
                        </li>
                        <li>
                            <div class="notification-view">
                                <div>
                                    <div class="tab-title">Tender for outsourced Junior Assistant through GeM</div>
                                    <div class="tab-date">Date: 15-11-2024</div>
                                </div>
                                <a class="tab-view"
                                    href="/tender/tender-outsourced-junior-assistant-through-gem-bid-no-gem2024b5142041">View</a>
                            </div>
                        </li>

                        <li>
                            <div class="notification-view">
                                <div>
                                    <div class="tab-title">Tender for outsourced Junior Assistant through GeM</div>
                                    <div class="tab-date">Date: 15-11-2024</div>
                                </div>
                                <a class="tab-view"
                                    href="/tender/tender-outsourced-junior-assistant-through-gem-bid-no-gem2024b5142041">View</a>
                            </div>
                        </li>

                        <li>
                            <div class="notification-view">
                                <div>
                                    <div class="tab-title">Tender for outsourced Junior Assistant through GeM</div>
                                    <div class="tab-date">Date: 15-11-2024</div>
                                </div>
                                <a class="tab-view"
                                    href="/tender/tender-outsourced-junior-assistant-through-gem-bid-no-gem2024b5142041">View</a>
                            </div>
                        </li>
                        <!-- Add more notifications as needed -->
                    </ul>
                    <!-- View All Button -->
                    <button class="view-all-btn" onclick="window.location.href='/city/paris/notifications'">View
                        All</button>
                </div>
            </div>

            <div class="col-md-4 mt-2">
                <div class="border news">
                    <h5 class="news-heading text-center">News & Announcements</h5>
                    <div class="panel panel-warning">

                        <div class="bdr">
                            <div class="panel-body text-dark">
                                <ul class="news-panel">
                                    <li class="news-item">
                                        <a class="adtext" href="#">State Council of Educational Research and Training
                                            Uttar Pradesh. 1<br><span class="dtype spn">[ Announcements ]</span></a> <i
                                            class="fa fa-file-pdf-o"></i>
                                        <p class="ndate"> <i class="fa-regular fa-calendar fa-lg"
                                                style="color: #f08484;"></i> Date : 01/12/2018</p>
                                    </li>
                                    <li class="news-item">
                                        <a class="adtext" href="#">State Council of Educational Research and Training
                                            Uttar Pradesh. 2<br><span class="dtype spn">[ Announcements ]</span></a> <i
                                            class="fa fa-file-pdf-o"></i>
                                        <p class="ndate"> <i class="fa-regular fa-calendar fa-lg"
                                                style="color: #f08484;"></i> Date : 01/12/2018</p>
                                    </li>
                                    <li class="news-item">
                                        <a class="adtext" href="#">State Council of Educational Research and Training
                                            Uttar Pradesh. 3<br><span class="dtype spn">[ Announcements ]</span></a> <i
                                            class="fa fa-file-pdf-o"></i>
                                        <p class="ndate"> <i class="fa-regular fa-calendar fa-lg"
                                                style="color: #f08484;"></i> Date : 01/12/2018</p>
                                    </li>
                                    <li class="news-item">
                                        <a class="adtext" href="#">State Council of Educational Research and Training
                                            Uttar Pradesh. 4<br><span class="dtype spn">[ Announcements ]</span></a> <i
                                            class="fa fa-file-pdf-o"></i>
                                        <p class="ndate"> <i class="fa-regular fa-calendar fa-lg"
                                                style="color: #f08484;"></i> Date : 01/12/2018</p>
                                    </li>
                                    <li class="news-item">
                                        <a class="adtext" href="#">State Council of Educational Research and Training
                                            Uttar Pradesh. 5<br><span class="dtype spn">[ Announcements ]</span></a> <i
                                            class="fa fa-file-pdf-o"></i>
                                        <p class="ndate"> <i class="fa-regular fa-calendar fa-lg"
                                                style="color: #f08484;"></i> Date : 01/12/2018</p>
                                    </li>
                                    <li class="news-item">
                                        <a class="adtext" href="#">State Council of Educational Research and Training
                                            Uttar Pradesh. 6<br><span class="dtype spn">[ Announcements ]</span></a> <i
                                            class="fa fa-file-pdf-o"></i>
                                        <p class="ndate"> <i class="fa-regular fa-calendar fa-lg"
                                                style="color: #f08484;"></i> Date : 01/12/2018</p>
                                    </li>
                                    <li class="news-item">
                                        <a class="adtext" href="#">State Council of Educational Research and Training
                                            Uttar Pradesh. 7<br><span class="dtype spn">[ Announcements ]</span></a> <i
                                            class="fa fa-file-pdf-o"></i>
                                        <p class="ndate"> <i class="fa-regular fa-calendar fa-lg"
                                                style="color: #f08484;"></i> Date : 01/12/2018</p>
                                    </li>
                                    <li class="news-item">
                                        <a class="adtext" href="#">State Council of Educational Research and Training
                                            Uttar Pradesh. 8<br><span class="dtype spn">[ Announcements ]</span></a> <i
                                            class="fa fa-file-pdf-o"></i>
                                        <p class="ndate"> <i class="fa-regular fa-calendar fa-lg"
                                                style="color: #f08484;"></i> Date : 01/12/2018</p>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
</section>

<!--====== TEACHERS PART START ======-->

<section id="teachers-part" class="pt-30 pb-40">
    <div class="container">
        <div class="row">

            <div class="col-sm-3">
                <div class="singel-teachers mt-30 text-center">
                    <div class="image">
                        <img src="images/dire.jpg" alt="Mr. Ganesh Kumar" class="img-fluid rounded-circle">
                    </div>
                    <div class="cont">
                        <a href="teachers-singel.html">
                            <h6 class="teacher-name">Mr. Ganesh Kumar</h6>
                        </a>
                        <span class="teacher-title">Director</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="singel-teachers mt-30 text-center">
                    <div class="image">
                        <img src="images/joint_dir.jpg" alt="David Card" class="img-fluid rounded-circle">
                    </div>
                    <div class="cont">
                        <a href="teachers-singel.html">
                            <h6 class="teacher-name">Shri Pavan Sachan</h6>
                        </a>
                        <span class="teacher-title">Joint Director</span>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="singel-teachers mt-30 text-center">
                    <div class="image">
                        <img src="images/joint_dir.jpg" alt="David Card" class="img-fluid rounded-circle">
                    </div>
                    <div class="cont">
                        <a href="teachers-singel.html">
                            <h6 class="teacher-name">Shri Pavan Sachan</h6>
                        </a>
                        <span class="teacher-title">Joint Director</span>
                    </div>
                </div>
            </div>


            <div class="col-sm-3">
                <div class="singel-teachers mt-30 text-center">
                    <div class="image">
                        <img src="images/joint_dir.jpg" alt="David Card" class="img-fluid rounded-circle">
                    </div>
                    <div class="cont">
                        <a href="teachers-singel.html">
                            <h6 class="teacher-name">Shri Pavan Sachan</h6>
                        </a>
                        <span class="teacher-title">Joint Director</span>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="section-title mt-50">

                    <h5>State Council of Educational Research and Training, U.P.</h5>
                </div> <!-- section title -->

                <div class="teachers-cont">
                    <p class="intro-text">
                        State Council of Educational Research and Training, U.P. (SCERT) was established in 1981 for the
                        development of curriculum and textbooks for school education in the State, teacher's training,
                        educational evaluation, educational research, and innovation in teaching & learning. The main
                        functions of SCERT, UP are:
                    </p>

                    <div class="scert-functions ml-4">
                        <ul>
                            <li><i class="fa fa-check-circle"></i> Organizing in-service and pre-service training
                                programs for elementary teachers.</li>
                            <li><i class="fa fa-check-circle"></i> Developing syllabus, textbooks, teacher's guides, and
                                other materials for primary & upper primary classes.</li>
                            <li><i class="fa fa-check-circle"></i> Conducting research, surveys, and innovative
                                programs.</li>
                            <li><i class="fa fa-check-circle"></i> Capacity building of teacher educators and
                                educational administrators.</li>
                            <li><i class="fa fa-check-circle"></i> Organizing Teacher Eligibility Test (TET) in the
                                State.</li>
                            <li><i class="fa fa-check-circle"></i> Granting affiliation to private institutes
                                (recognized by NCTE) for running BTC / NTT courses.</li>
                        </ul>
                    </div>


                </div> <!-- teachers cont -->
            </div>





        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== TEACHERS PART ENDS ======-->








<!-- lastest update and diet update -->

<section class="tabs pb-40 pt-40" style="background: #dae0e7;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-md-6 mt-2">
                <div class="card card-scroll">
                    <div class="card-header sticky-header bg-warning h3">
                        Requirment
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul>

                    <div class="sticky-footer">
                        <button class="btn btn-primary">View All</button>
                    </div>
                </div>
            </div>



            <div class="col-lg-6 col-md-6 col-md-6 mt-2">
                <div class="card card-scroll">
                    <div class="card-header sticky-header bg-warning h3">
                        Government Order
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul>

                    <div class="sticky-footer">
                        <button class="btn btn-primary">View All</button>
                    </div>
                </div>
            </div>



        </div>
    </div>
</section>










<section id="course-part" class="pt-40 pb-40" style="background:#efefef;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title pb-45">
                    <h5>Our Link</h5>

                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row course-slied mt-30">
            <div class="col-lg-4">
                <div class="singel-course-2">
                    <div class="thum">
                        <div class="image">
                            <img src="images/ebook.jpg" alt="Course">
                        </div>

                    </div>
                    <div class="cont mb-2">
                        <a href="#" class="btn" style=" background-color: #07294d; ">
                            <h4>E-Books</h4>
                        </a>
                    </div>
                </div> <!-- singel course -->
            </div>
            <div class="col-lg-4">
                <div class="singel-course-2">
                    <div class="thum">
                        <div class="image">
                            <img src="images/pvt.jpg" alt="Course">
                        </div>

                    </div>
                    <div class="cont mb-2">
                        <a href="#" class="btn" style=" background-color: #07294d;">
                            <h4>Pvt. Institutions</h4>
                        </a>
                    </div>
                </div> <!-- singel course -->
            </div>

            <div class="col-lg-4">
                <div class="singel-course-2">
                    <div class="thum">
                        <div class="image">
                            <img src="images/gal.jpg" alt="Course">
                        </div>

                    </div>
                    <div class="cont mb-2">
                        <a href="#" class="btn" style=" background-color: #07294d;">
                            <h4>Gallery</h4>
                        </a>
                    </div>
                </div> <!-- singel course -->
            </div>

            <div class="col-lg-4">
                <div class="singel-course-2">
                    <div class="thum">
                        <div class="image">
                            <img src="images/fac.jpg" alt="Course">
                        </div>

                    </div>
                    <div class="cont mb-2">
                        <a href="#" class="btn" style=" background-color: #07294d;">
                            <h4>Our faculty</h4>
                        </a>
                    </div>
                </div> <!-- singel course -->
            </div>

            <div class="col-lg-4">
                <div class="singel-course-2">
                    <div class="thum">
                        <div class="image">
                            <img src="images/tra.jpeg" alt="Course">
                        </div>

                    </div>
                    <div class="cont mb-2">
                        <a href="#" class="btn" style=" background-color: #07294d;">
                            <h4>Training Module</h4>
                        </a>
                    </div>
                </div> <!-- singel course -->
            </div>

            <div class="col-lg-4">
                <div class="singel-course-2">
                    <div class="thum">
                        <div class="image">
                            <img src="images/ser.jpg" alt="Course">
                        </div>

                    </div>
                    <div class="cont mb-2">
                        <a href="#" class="btn" style=" background-color: #07294d;">
                            <h4>Pre Service</h4>
                        </a>
                    </div>
                </div> <!-- singel course -->
            </div>


            <div class="col-lg-4">
                <div class="singel-course-2">
                    <div class="thum">
                        <div class="image">
                            <img src="images/faq.jpg" alt="Course">
                        </div>

                    </div>
                    <div class="cont mb-2">
                        <a href="#" class="btn" style=" background-color: #07294d;">
                            <h4>FAQ
                            </h4>
                        </a>
                    </div>
                </div> <!-- singel course -->
            </div>


            <div class="col-lg-4">
                <div class="singel-course-2">
                    <div class="thum">
                        <div class="image">
                            <img src="images/ttms.jpg" alt="Course">
                        </div>

                    </div>
                    <div class="cont mb-2">
                        <a href="#" class="btn" style=" background-color: #07294d;">
                            <h4>T.T.M.S.</h4>
                        </a>
                    </div>
                </div> <!-- singel course -->
            </div>


            <div class="col-lg-4">
                <div class="singel-course-2">
                    <div class="thum">
                        <div class="image">
                            <img src="images/rti.jpg" alt="Course">
                        </div>

                    </div>
                    <div class="cont mb-2">
                        <a href="#" class="btn" style=" background-color: #07294d;">
                            <h4>RTI</h4>
                        </a>
                    </div>
                </div> <!-- singel course -->
            </div>

        </div> <!-- course slied -->
    </div> <!-- container -->
</section>



<section id="photo-gallery" class="pt-40 pb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title pb-45">
                    <h5>Our Gallery</h5>

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



<section id="about-page" class=" pb-20" style="background: #f1eced;">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="section-title mt-50">

                    <h2>Welcome to State Council of Educational Research and Training (SCERT)</h2>
                </div> <!-- section title -->
                <div class="about-cont">
                    <p>The State Council of Educational Research and Training, Delhi an autonomous body, established in
                        May 1988 has been providing academic resource support to the Directorate of Education and the
                        Education Departments of MCD and NDMC and the Cantonment Board so as to achieve an overall
                        improvement in the quality of school education. The State Council of Educational Research and
                        Training support is available through various programmes which include continuing education of
                        teachers, development of appropriate material for teachers and students and undertaking research
                        studies on the problems related to school education in Delhi.</p>
                </div>
                <div class="button">
                    <a href="#" class="btn btn-small " style="background:#07294d; color:#fff;">Know More</a>

                </div>
            </div> <!-- about cont -->
            <div class="col-lg-5">
                <div class="about-image mt-50">
                    <img src="images/res.png" alt="About">
                </div> <!-- about imag -->
            </div>
        </div>

    </div> <!-- container -->
</section>



<section class="content solid-bg toppp">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h5 class="section-sub-title hd text-center pb-4">Important Website</h5>
                <div id="testimonial-slide" class="testimonial-slide">
                    <!-- Carousel Items -->
                    <div class="item">
                        <div class="quote-item testimg">
                            <div class="quote-item-footer">
                                <img loading="lazy" class="testimonial-thumb" src="images/web1.jpg" alt="testimonial">

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="quote-item testimg">
                            <div class="quote-item-footer">
                                <img loading="lazy" class="testimonial-thumb" src="images/web2.jpg" alt="testimonial">

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="quote-item testimg">
                            <div class="quote-item-footer">
                                <img loading="lazy" class="testimonial-thumb" src="images/web3.jpg" alt="testimonial">

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="quote-item testimg">
                            <div class="quote-item-footer">
                                <img loading="lazy" class="testimonial-thumb" src="images/web4.jpg" alt="testimonial">

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="quote-item testimg">
                            <div class="quote-item-footer">
                                <img loading="lazy" class="testimonial-thumb" src="images/web5.jpg" alt="testimonial">

                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="quote-item testimg">
                            <div class="quote-item-footer">
                                <img loading="lazy" class="testimonial-thumb" src="images/web5.jpg" alt="testimonial">

                            </div>
                        </div>
                    </div>


                    <div class="item">
                        <div class="quote-item testimg">
                            <div class="quote-item-footer">
                                <img loading="lazy" class="testimonial-thumb" src="images/web5.jpg" alt="testimonial">

                            </div>
                        </div>
                    </div>


                    <div class="item">
                        <div class="quote-item testimg">
                            <div class="quote-item-footer">
                                <img loading="lazy" class="testimonial-thumb" src="images/web5.jpg" alt="testimonial">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>














<?php

include("footer.php");

?>