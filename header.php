<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Edubin - LMS Education HTML Template</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="css/slick.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="css/animate.css">

    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="css/nice-select.css">

    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="css/jquery.nice-number.min.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="css/style.css">

    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">



    <style>
        .navigation .navbar .navbar-nav li .sub-menu .sub-menu-right {
            position: absolute;
            top: 0;
            left: 100%;
            /* Submenu ko right side pe show karne ke liye */
            background-color: rgb(6, 18, 31);
            width: 200px;
            opacity: 0;
            visibility: hidden;
            -webkit-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
            z-index: 99;
        }

        .navigation .navbar .navbar-nav li .sub-menu li:hover .sub-menu-right {
            opacity: 1;
            visibility: visible;
            left: 100%;
            /* Ensures submenu appears to the right */
        }
/* 
        .navigation .navbar .navbar-nav li .sub-menu li {
            position: relative;
           
        } */


        .navigation .navbar .navbar-nav li .sub-menu .sub-menu-right .sub-menu-right-right {
            position: absolute;
            top: 0;
            left: 100%;
            /* Submenu ko right side pe show karne ke liye */
            background-color: rgb(28, 47, 68);
            width: 200px;
            opacity: 0;
            visibility: hidden;
            -webkit-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
            z-index: 99;
        }

        .navigation .navbar .navbar-nav li .sub-menu li:hover .sub-menu-right li:hover .sub-menu-right-right {
            opacity: 1;
            visibility: visible;
            left: 100%;
            /* Ensures submenu appears to the right */
        }

        .navigation .navbar .navbar-nav li .sub-menu li a .sub-nav-right-toggler {
               
                display: none;
                
            }




        /* 
        .navigation .navbar .navbar-nav{}
.navigation .navbar .navbar-nav li{
    margin-right: 23px;
    position: relative;
} */

        @media (min-width: 992px) and (max-width: 1199.98px) {

            .navigation .navbar .navbar-nav li {
                margin-right: 20px;
            }

            .navigation .navbar .navbar-nav li a {
                font-size: 12px;

            }





        }


        @media (min-width: 768px) and (max-width: 991.98px) {

            .navigation .navbar .navbar-nav li .sub-menu li .sub-menu-right {
                position: absolute !important;
                width: 100% !important;
                left: 0 !important;
                top: auto !important;
                opacity: 1 !important;
                visibility: visible !important;
                display: none;
                right: auto;
                transition: none;
                transform: translateX(0%);
                text-align: left;
            }

            /* Sub-menu Right-Right (Positioning it to right inside sub-menu-right) */
            .navigation .navbar .navbar-nav li .sub-menu li .sub-menu-right li .sub-menu-right-right {
                position: absolute;
                top: 0;
                left: 100%;
                /* Positioning it to the right of sub-menu-right */
                width: 100%;
                /* Ensuring full width inside sub-menu-right */
                opacity: 0;
                visibility: hidden;
                display: none;
                transition: none;
                transform: translateX(0%);
            }

            /* Making the sub-menu-right visible when hovering over its parent sub-menu */
            .navigation .navbar .navbar-nav li:hover .sub-menu-right {
                opacity: 1;
                visibility: visible;
                left: 100%;
                /* Opening right of sub-menu */
            }

            /* Making the sub-menu-right-right visible when hovering over its parent sub-menu-right */
            .navigation .navbar .navbar-nav li:hover .sub-menu-right .sub-menu-right-right {
                opacity: 1;
                visibility: visible;
                left: 100%;
                /* Opening right of sub-menu-right */
            }

            /* Sub-menu Toggler Button for small screens */
            .navigation .navbar .navbar-nav li .sub-menu li a .sub-nav-right-toggler {
                position: absolute;
                padding: 5px;
                background: none;
                border: 0;
                top: 5px;
                right: 0;
                cursor: pointer;
                display: block;
                color: #fff;
            }

        }


        @media (min-width: 1199.98px) {
            .navigation .navbar .navbar-nav li {
                margin-right: 20px;
            }

            .navigation {
                height: 40px;
                padding: 0 5px;
            }

            .navigation .navbar .navbar-nav li a {
                padding: 12px 0;

            }


        }





        .navigation .navbar .navbar-nav li a {
            font-size: 12px;

        }

        .header-top {
            background-color: #07294d;
            padding-top: 0px;
            padding-bottom: 0px;
        }


        .lang-dropdown-select-element {
            width: 100% !important;
            /* Adjust the width as needed */
        }





        /* for select  */

        .nice-select {
            background-color: transparent;
            border-radius: 0px;

            border: 0;
            box-sizing: border-box;
            clear: both;
            cursor: pointer;
            display: block;
            float: left;
            font-family: inherit;
            font-size: 14px;
            font-weight: normal;
            height: auto;
            line-height: 1;
            outline: none;
            padding-left: 18px;
            padding-right: 30px;
            position: relative;
            text-align: left !important;
            -webkit-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            white-space: nowrap;
            width: auto;
            color: #fff;
        }

        .nice-select .list {
            color: #000;

        }

        .nice-select .option {
            cursor: pointer;
            font-weight: 400;
            line-height: 25px;
            list-style: none;
            min-height: 25px;
            outline: none;
            padding-left: 18px;
            padding-right: 29px;
            text-align: left;
            -webkit-transition: all 0.2s;
            transition: all 0.2s;
        }



        .right-icon ul li {
            display: inline-block;

            padding: 10px 0;
        }

  


    </style>



</head>

<body>

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader rubix-cube">
            <div class="layer layer-1"></div>
            <div class="layer layer-2"></div>
            <div class="layer layer-3 color-1"></div>
            <div class="layer layer-4"></div>
            <div class="layer layer-5"></div>
            <div class="layer layer-6"></div>
            <div class="layer layer-7"></div>
            <div class="layer layer-8"></div>
        </div>
    </div>

    <!--====== PRELOADER PART START ======-->

    <!--====== HEADER PART START ======-->

    <header id="header-part">

        <div class="header-top ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6  d-none d-lg-block">
                        <!-- <div class="header-contact text-lg-left text-center">
                            <ul>
                                <li><img src="images/all-icon/map.png" alt="icon"><span>127/5 Mark street, New
                                        york</span></li>
                                <li><img src="images/all-icon/email.png" alt="icon"><span>info@yourmail.com</span></li>
                            </ul>
                        </div> -->
                    </div>
                    <div class="col-lg-6">
                        <!-- <div class="header-opening-time text-lg-right text-center">
                            <p>Opening Hours : Monday to Saturay - 8 Am to 5 Pm</p>
                        </div> -->
                        <div class="d-flex justify-content-end align-items-center gap-3">

                            <div class="mr-3">
                                <button style="height:auto; line-height:1;">A-</button>
                                <button style="height:auto; line-height:1;">A</button>
                                <button style="height:auto; line-height:1;">A+</button>
                            </div>

                            <form action="">
                                <select name="" id="">
                                    <option value="">English</option>
                                    <option value="">Hindi</option>
                                </select>
                            </form>

                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header top -->

        <div class="header-logo-support pt-7 pb-7" >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-7 col-md-7 m-auto">
                        <div class="logo">
                            <a href="index.php">
                                <img src="images/uplogo.png" alt="Logo" style="max-width:59%; width:100%;">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <div class="support-button float-right d-none d-md-block">

                            <div style="display:flex; justify-content:center; align-items:center; gap:5px;">

                                <div class="float-left">
                                    <!-- <a href="#" class="main-btn">Apply Now</a> -->
                                    <div class="icon">
                                        <img src="images/uplogo4.jpg" alt="icon"
                                            style="max-width:95px; width: 100%; height:auto;">
                                    </div>
                                </div>

                                <div class="float-left">
                                    <div class="icon">
                                        <img src="images/uplogo2.png" alt="icon" style="width: 60px; height:auto; padding-top: 5px;
    padding-bottom: 5px;">
                                    </div>
                                    <!-- <div class="cont">
                                    <p>Need Help? call us free</p>
                                    <span>321 325 5678</span>
                                </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header logo support -->

        <div class="navigation" >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-9 col-8">
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item">
                                        <a class="active" href="index.php">Home
                                            <!-- <i class="fa fa-caret-down"></i> -->
                                        </a>

                                    </li>
                                    <li class="nav-item">
                                        <a href="#">
                                            About us
                                            <i class="fa fa-caret-down d-none d-lg-inline"></i>
                                        </a>
                                        <ul class="sub-menu">
                                            <li><a class="active" href="about_us.php">About Us</a></li>
                                            <li>
                                                <a href="#">About SCERT <i
                                                        class="fa fa-caret-right float-right d-none d-lg-inline"></i></a>
                                                <ul class="sub-menu-right">
                                                    <li>
                                                        <a href="about_scert.php">About SCERT</a>
                                                      
                                                    </li>
                                                    <li><a href="mission.php">Mission</a></li>
                                                    <li><a href="vision.php">Vision</a></li>
                                                    <li><a href="objective.php">Objectives</a></li>
                                                    <li><a href="strategies.php">Strategies</a></li>
                                                    <li><a href="organization_structure.php">Organisational Structure</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="faculty.php">Our Faculty</a></li>
                                            <li><a href="director_message.php">Directors Message</a></li>
                                           
                                            <li>
                                                <a href="index-4.html">Teacher Trainning<i
                                                class="fa fa-caret-right float-right d-none d-lg-inline"></i></a>

                                                <ul class="sub-menu-right">
                                                    <li><a href="pre_services.php">Pre Service</a></li>
                                                    
                                                    <li><a href="in_services.php">In Service</a></li>
                                                    
                                                    
                                                </ul>
                                            </li>
                                            <li><a href="whos-who.php">Who's Who</a></li>
                                            
                                            <li><a href="index-4.html">Citizen Charter</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="courses.html">Constituents <i class="fa fa-caret-down d-none d-lg-inline"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="courses-singel.html">Constituents</a></li>
                                            <li><a href="director.php">
                                                    Director, SCERT

                                                </a>

                                            </li>
                                            <li><a href="courses-singel.html">Secretary, SCERT</a></li>
                                            <li><a href="joint_director.php">Joint Director, SCERT</a></li>
                                            <li><a href="courses-singel.html">Deputy Director, SCERT</a></li>
                                            <li><a href="units.php">UNITS</a></li>
                                            <li><a href="pvt_institute.php">pvt. institute</a></li>
                                            <li>
                                                <a href="diet.php">DIETs </a>

                                                <!-- <ul class="sub-menu-right">
                                                    <li><a href="courses-singel.html">DIETs</a></li>
                                                    <li><a href="courses-singel.html">DIET Darya Ganj</a></li>
                                                    <li><a href="courses-singel.html">DIET Bhola Nath Nagar</a></li>
                                                    <li><a href="courses-singel.html">DIET Ghumanhera</a></li>
                                                    <li><a href="courses-singel.html">Faculty &amp; Staff</a></li>
                                                    <li><a href="courses-singel.html">Department</a></li>
                                                    <li><a href="courses-singel.html">Publications</a></li>
                                                    <li><a href="courses-singel.html">Courses</a></li>
                                                    <li><a href="courses-singel.html">RTI</a></li>
                                                    <li><a href="courses-singel.html">Contact Us</a></li>

                                                </ul> -->


                                            </li>
                                            <li><a href="courses-singel.html">Divisions of SCERT </a></li>
                                            <li><a href="courses-singel.html">Cells </a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="events.html">Programmes <i class="fa fa-caret-down d-none d-lg-inline"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="events.html">Innovation</a></li>
                                            <li>
                                                <a href="events-singel.html">Happiness Curriculum<i
                                                        class="fa fa-caret-right float-right d-none d-lg-inline"></i></a>

                                                <ul class="sub-menu-right">
                                                    <li><a href="events.html">Happiness Curriculum</a></li>
                                                    <li><a href="events.html">Awards &amp; Recognitions</a></li>
                                                    <li><a href="events.html">Research</a></li>
                                                    <li><a href="events.html">Resources</a></li>
                                                    <li><a href="events.html">Contact Us - Happiness Curriculum</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="events-singel.html">Desh Bhakti Curriculum <i
                                                        class="fa fa-caret-right float-right d-none d-lg-inline"></i></a>
                                                <ul class="sub-menu-right">
                                                    <li><a href="events.html">Desh Bhakti Curriculum</a></li>
                                                    <li><a href="events.html">About Curriculumn</a></li>
                                                    <li><a href="events.html">Components of Curriculum</a></li>
                                                    <li><a href="events.html">Resources</a></li>
                                                    <li><a href="events.html">Contact Us - DBC</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="events-singel.html">Emc <i
                                                        class="fa fa-caret-right float-right d-none d-lg-inline"></i></a>

                                                <ul class="sub-menu-right">
                                                    <li><a href="events.html">EMC</a></li>
                                                    <li><a href="events.html">About Program</a></li>
                                                    <li><a href="events.html">EMC Pedagogy</a></li>
                                                    <li><a href="events.html">Components of EMC</a></li>
                                                    <li><a href="events.html">Digital EMC</a></li>

                                                    <li><a href="events.html">Researches</a></li>
                                                    <li><a href="events.html">EMC Gallery</a></li>
                                                    <li><a href="events.html">Resources</a></li>
                                                    <li><a href="events.html">Contact Us- EMC</a></li>



                                                </ul>

                                            </li>
                                            <li><a href="events-singel.html">MT Program <i
                                                        class="fa fa-caret-right float-right d-none d-lg-inline"></i></a>
                                                <ul class="sub-menu-right">
                                                    <li><a href="events.html">MT Program</a></li>
                                                    <li><a href="events.html">How Program Works</a></li>
                                                    <li><a href="events.html">Activities</a></li>
                                                    <li><a href="events.html">Program Structure</a></li>
                                                    <li><a href="events.html">Resources</a></li>





                                                </ul>
                                            </li>
                                            <li><a href="events-singel.html">TDC Program <i
                                                        class="fa fa-caret-right float-right d-none d-lg-inline"></i></a>
                                                <ul class="sub-menu-right">
                                                    <li><a href="events.html">TDC Program</a></li>
                                                    <li><a href="events.html">About Program</a></li>
                                                    <li><a href="events.html">TDC Facilitators</a></li>
                                                    <li><a href="events.html">How Program Works</a></li>
                                                    <li><a href="events.html">Activities</a></li>
                                                    <li><a href="events.html">Program Framework</a></li>
                                                    <li><a href="events.html">Lifelong Learning Unit</a></li>
                                                    <li><a href="events.html">Researches</a></li>
                                                    <li><a href="events.html">Resources</a></li>
                                                    <li><a href="events.html">Report</a></li>
                                                    <li><a href="events.html">Newsletter</a></li>
                                                    <li><a href="events.html">Gallery</a></li>

                                                </ul>
                                            </li>
                                            <li><a href="events-singel.html">CLDP <i
                                                        class="fa fa-caret-right float-right d-none d-lg-inline"></i></a>
                                                <ul class="sub-menu-right">
                                                    <li><a href="events.html">CLDP</a></li>
                                                    <li><a href="events.html">About Program</a></li>
                                                    <li><a href="events.html">How Program Works</a></li>
                                                    <li><a href="events.html">Program Framework</a></li>
                                                    <li><a href="events.html">Researches</a></li>
                                                    <li><a href="events.html">Gallery</a></li>


                                                </ul>
                                            </li>
                                            <li><a href="events-singel.html">PLDP</a></li>
                                            <li><a href="events-singel.html">Competency Building Modules <i
                                                        class="fa fa-caret-right float-right d-none d-lg-inline"></i></a>
                                                <ul class="sub-menu-right">
                                                    <li><a href="events.html">Competency Building Modules</a></li>
                                                    <li><a href="events.html">About Program</a></li>
                                                    <li><a href="events.html">How Program Works</a></li>
                                                    <li><a href="events.html">Online Module (AY 2021-22)</a></li>
                                                    <li><a href="events.html">Offline Module 1 (AY 2022-23)</a></li>
                                                    <li><a href="events.html">Competency Building Module Gallery</a>
                                                    </li>


                                                </ul>
                                            </li>
                                            <li><a href="events-singel.html">Exposures (FDP) <i
                                                        class="fa fa-caret-right float-right d-none d-lg-inline"></i></a>
                                                <ul class="sub-menu-right">
                                                    <li><a href="events.html">Exposures (FDP)</a></li>
                                                    <li><a href="events.html">National Exposure</a></li>
                                                    <li><a href="events.html"> International Exposure</a></li>



                                                </ul>
                                            </li>
                                            <li><a href="events-singel.html">NEP 2020 <i
                                                        class="fa fa-caret-right float-right d-none d-lg-inline"></i></a>
                                                <ul class="sub-menu-right">
                                                    <li><a href="events.html">About NEP 2020</a></li>
                                                    <li><a href="events.html">Documents</a></li>
                                                    <li><a href="events.html">NEP 2020 Task Implementation </a></li>



                                                </ul>
                                            </li>
                                            <li><a href="events-singel.html">Vidyanjali</a></li>


                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="teachers.html">Publications<i class="fa fa-caret-down d-none d-lg-inline"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="teachers.html">Publication</a></li>
                                            <li><a href="curriculum.php">Curriculum</a></li>
                                            <li>
                                                <a href="javascript:void(0)">D.El.Ed. Content Material<i
                                                class="fa fa-caret-right float-right d-none d-lg-inline"></i></a>

                                                <ul class="sub-menu-right">
                                                    <li><a href="delsem1.php">Ist Semester</a></li>
                                                    <li><a href="delsem2.php">2nd Semester</a></li>
                                                    
                                                    <li><a href="delsem3.php">3rd Semester</a></li>
                                                    <li><a href="delsem4.php">4th Semester</a></li>
                                                </ul>

                                            </li>
                                            <li><a href="trainning_module.php">Training Module</a></li>
                                            <li><a href="e-book.php">E-BOOK</a></li>
                                            <li><a href="teachers-singel.html">Manual for Teachers</a></li>
                                            <li><a href="teachers-singel.html">School Kits</a></li>
                                            <li><a href="teachers-singel.html">Children&#039;s Book</a></li>
                                            <li><a href="teachers-singel.html">List of Publication</a></li>
                                            <li><a href="teachers-singel.html">Other Publications</a></li>
                                            <li><a href="teachers-singel.html">Non-Print Materials</a></li>
                                            <li><a href="teachers-singel.html">Bridge Course Package</a></li>
                                            <li><a href="teachers-singel.html">Annual Report</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="rti.php">RTI</a>

                                    </li>
                                    <li class="nav-item">
                                        <a href="shop.html"> Notice Board<i class="fa fa-caret-down d-none d-lg-inline"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="shop.html">Tenders</a></li>
                                            <li><a href="shop-singel.html">Recruitment</a></li>
                                            <li><a href="gov_order.php">Government Orders</a></li>
                                            <li><a href="shop-singel.html">Transfers</a></li>
                                            <li><a href="shop-singel.html">Circulars</a></li>
                                            <li><a href="shop-singel.html">Gazette Notifications</a></li>
                                            <li><a href="shop-singel.html">Formats</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a href="gallary.php">Photo Gallery </a>

                                    </li>

                                    <li class="nav-item">
                                        <a href="contact.php">Contact </a>

                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                  
                </div> <!-- row -->
            </div> <!-- container -->
        </div>

    </header>

    <!--====== HEADER PART ENDS ======-->









    <!--====== SLIDER PART START ======-->



   


   

    <!-- <div class="container-fluid pb-3">
        <div class="row">
            <div class="col-2 p-0 d-flex align-items-center justify-content-center" style="background:#ffc404;">
                <h4 class="mb-0">Latest News</h4>
            </div>
            <div class="col-10 p-0"
                style="background:#07294d; display: flex; align-items: center; justify-content: center;">
                <marquee scrollamount="6" behavior="scroll" direction="left" onmouseover="this.stop();"
                    onmouseout="this.start();">
                    <img src="images/new_red.gif" alt="Announcement" class="mr-3" style="height: 30px;">
                    <a href="/Calender/Calendar 19-04-2024.pdf" target="_blank" class="font-weight-bold hover-effect"
                        style="color: #ffffff;">
                        SCERT में वर्ष 2024-25 में प्रस्तावित कार्यक्रम
                        <i class="fa-solid fa-download"></i>
                    </a>
                </marquee>
            </div>
        </div>
    </div> -->








    <!--====== SLIDER PART ENDS ======-->