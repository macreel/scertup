<?php

include('header.php');
?>

<style>
    .about .container {
        max-width: 1200px;
        margin: 50px auto;
        padding: 20px;
        background: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    .about .container h3,
    h4 {
        text-align: center;
        color: #0056b3;
        margin-bottom: 10px;
    }

    .about .container h3 {
        font-size: 2rem;
        text-transform: uppercase;
    }

    .about .container h4 {
        font-size: 1.5rem;
        font-weight: 300;
    }

    .about .container .row {
        display: flex;
        flex-wrap: wrap;
        margin: 20px 0;
    }

    .about .container .col-12 {
        flex: 100%;
    }

    .about .container p {
        line-height: 1.8;
        font-size: 1.1rem;
        text-align: justify;
    }

    .about .container ul.list {
        margin-top: 20px;
        padding: 0;
        list-style-type: none;
        margin-left: 33px;
    }

    .about .container ul.list li {
        position: relative;
        padding: 10px 20px;
        margin-bottom: 10px;
        background: #e9f4ff;
        border-left: 5px solid #0056b3;
        border-radius: 4px;
        transition: transform 0.2s ease;
    }

    .about .container ul.list li:hover {
        transform: translateX(10px);
        background: #cce7ff;
    }

    .about .container ul.list li::before {
        content: "\2022";
        color: #0056b3;
        font-weight: bold;
        display: inline-block;
        width: 1em;
        margin-left: -1em;
    }

    .about .container .list.text-dark li {
        color: #333;
    }

    .about .container a {
        color: #0056b3;
        text-decoration: underline;
        cursor: pointer;
    }

    .about .container a:hover {
        color: #003d7a;
    }

    @media (max-width: 768px) {
        .about .container h3 {
            font-size: 1.6rem;
        }

        .about .container h4 {
            font-size: 1.2rem;
        }

        .about .container p,
        ul.list li {
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
                    <h2>About SCERT</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About SCERT</li>
                        </ol>
                    </nav>
                </div> <!-- page banner cont -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>


<section class="about">
    <div class="container">
        <h3>State Council of Educational Research and Training</h3>
        <h4>Uttar Pradesh, Lucknow</h4>
        <div class="row">
            <div class="col-12">
                <p>
                    State Council of Educational Research and Training (SCERT), Uttar Pradesh was established in 1981
                    for development of curriculum and textbooks for school education in the State, teacher's training,
                    educational evaluation, educational research, and innovation in teaching & learning. Main functions
                    of SCERT, UP are ,
                </p>
                <ul class="list text-dark">
                    <li>Organizing in-service and pre-service training programmes for elementary teachers.</li>
                    <li>Developing syllabus, textbooks, teacher's guides, and other useful materials for primary & upper
                        primary classes.</li>
                    <li>Conducting researches, surveys, and innovative programmes.</li>
                    <li>Capacity building of teacher educators and educational administrators.</li>
                    <li>Organizing Teacher Eligibility Test (TET) in the State.</li>
                    <li>Granting affiliation to private institutes (recognized by NCTE) for running BTC / NTT courses.
                    </li>
                    <li>Deciding curriculum & evaluation process for education in the light of Part 7 Article 29 of
                        Uttar Pradesh Right of Children to Free & Compulsory Education Rules 2011.</li>
                </ul>
                <p>
                    Head of SCERT is the Director. Joint Director (Training), Assistant Director, Assistant Deputy
                    Director,
                    Research Professors, and Lecturers (Research) work under the Director. SCERT accomplishes all its
                    academic activities through its various Units.
                </p>
            </div>
            <div class="col-12">
                
                <h4 style="text-align: left;  margin-top: 10px; color:#07294d; font-weight:bold; text-decoration:underline;">Units under SCERT</h4>
              
                <ul class="list text-dark">
                    <li><strong>Institute of Advanced Studies in Education (IASE), Prayagraj-</strong> Conducts
                        trainings for quality enhancement for administrative and academic faculty of DIETs and Basic
                        Shiksha Adhikari, subject based training programmes/workshops, researches for development of
                        teaching skill and competency in secondary level teachers.
                    </li>
                    <li><strong>College of Teacher Education (CTE) Lucknow, Prayagraj &amp; Varanasi-</strong> Conduct
                        training programmes/workshops and researches for subject and skill based teaching competency
                        enhancement for DIET faculty, teachers of upper primary and secondary level.
                    </li>
                    <li><strong>State Institute of Science (SISE), Prayagraj-</strong> Designs Science and Mathematics
                        textbooks, conducts trainings on Science and Mathematics, research studies, surveys, workshops,
                        seminars and other activities to make Science and Mathematics easy, interesting and
                        comprehensive. It also conducts Science Exhibition every year.
                    </li>
                    <li><strong>State Institute of Education (SIE), Prayagraj-</strong> Prepares curriculum and designs
                        textbooks for primary and upper primary classes, develops training modules and teacher guides,
                        conducts research/studies &amp; various training workshops.
                    </li>
                    <li><strong>Bureau of Psychology, Prayagraj-</strong> Develops teaching material related to
                        psychological test in order to solve various types of psychological problems of school going
                        children, ogranises diagnostic tests, provides guidance and counseling, conducts National Talent
                        Search Examination (NTSE) and 'Diploma in Guidance and Psychology' (DGP) training.
                    </li>
                    <li><strong>State Institute of Hindi, Varanasi-</strong> Develops textbooks and supplementary-books
                        of Hindi and Sanskrit language, acquaints teachers with latest techniques of teaching Hindi,
                        organizes various teacher's training programmes, workshops and researches related to Hindi and
                        Sanskrit Language.
                    </li>
                    <li><strong>State Institute of Educational Technology (SIET), Lucknow-</strong> Develops educational
                        videos/CDs related to curriculum of primary and upper primary level and other works related to
                        educational technology.
                    </li>
                    <li><strong>English Language Teaching Institute (ELTI), Prayagraj-</strong>Develops and reviews
                        English Language textbooks/reading materials and teaching-learning materials, organizes
                        teacher's training, educational workshops and seminars for enhancing quality of English Language
                        teaching. It also develops teaching-learning materials for English language teaching.
                    </li>
                    <li><strong>Government Physical Training College, Rampur &amp; Prayagraj-</strong> Conducts two
                        years D.P.Ed. course and in-service trainings related to games and physical education for
                        teachers of upper primary and secondary schools.
                    </li>
                    <li><strong>Government Nursery Training College, Prayagraj &amp; Agra-</strong> Conducts CT(Nursery)
                        training alongwith other in-service training programmes.
                    </li>
                    <li>
                        <strong>District Institute of Education and Training (DIET)-</strong> DIETs have been
                        established in different phases by Government of India under centrally sponsored scheme to
                        provide academic support to primary and upper primary teachers by conducting in-service and
                        pre-service training, adult education programmes and training for other academic staff. At
                        present 70 DIETs are functioning under SCERT in the State.<br>
                        DIET conducts 2 years BTC training. It also conducts Special BTC and Urdu BTC trainings time to
                        time according to the directions of State Government. Besides these, DIET provides
                        subject-based, skill-based and competency-based in-service training to the teachers of primary
                        and upper primary schools, conducts training for Shiksha Mitras, BRC and NPRC coordinators,
                        extends academic support to instructors of alternative education and literacy, anganbadi workers
                        and village education committee. The main functions of DIETs are as follows:-
                        <ul class="list">
                            <li>Pre-service training</li>
                            <li>In-service training</li>
                            <li>Research/ Study/Survey</li>
                            <li>Academic Support</li>
                            <li>Development of training modules and tools</li>
                        </ul>
                    </li>
                    <li>Examination Controlling Authority, Uttar Pradesh, Prayagraj- The office of Examination
                        Controlling Authority, Uttar Pradesh is situated in Prayagraj. This office conducts regular
                        exams and various other exams in accordance with GOs issued time to time. Director, State
                        Institute of Science Education, Uttar Pradesh, Prayagraj is the Ex-officio Secretary,
                        Examination Controlling Authority, Uttar Pradesh. The main functions of Examination Controlling
                        Authority, Uttar Pradesh are as follows :-</li>
                </ul>
            </div>

            <div class="col-12">
        <ul type="1" class="list text-dark">
            <li>BTC training </li>
            <li>Granting affiliation to the private institutes which are recognised from NCTE for conducting BTC and NTT course.</li>
            <li>Conducting Teacher Eligibility Test (TET).</li>
            <li>Conducting examination for BTC, Special BTC, Two years Urdu BTC 2005, 2006 (Ist) and 2006 (IInd).</li>
            <li>Conducting examination for Shiksha Mitras, who got BTC training through distant mode.</li>
            <li>Conducting examination for trainees of Prashikshu Shikshak Chayan 2011.</li>
            <li>Conducting examination for trainees who got BTC training as dependant of diseased (Mritak Ashrit).</li>
            <li>Conducting examination for various scholarship programmes. </li>
            <li>Assistant Teacher Recruitment Examination.</li>
        </ul>
            </div>
        </div>
    </div>
</section>






<?php

include('footer.php');
?>