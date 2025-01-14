<?php
include('header.php');
?>

<style>
/* Section Styling */
.director-section {
    background-color: #f8f9fa;
    padding: 50px 0;
}

/* Heading Styling */
.director-section h3 {
    color: #07294d;
    text-align: center;
    margin-bottom: 30px;
    font-weight: bold;
}

/* Ordered List Styling */
.training-list {
    list-style: decimal;
    padding-left: 40px;
}

.training-list li {
    background-color: #ffffff;
    border: 1px solid #dcdcdc;
    margin: 10px 0;
    padding: 15px 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s ease-in-out;
    position: relative;
    font-size: 16px;
    top: 50%;
    bottom: 50%;

}

/* Button Styling */
.training-list a {
    float: right;
    background-color: #82A974;
    color: #ffffff;
    padding: 8px 12px;
    border-radius: 4px;
    text-decoration: none;
    font-weight: bold;
    line-height: 1;

}

.training-list a:hover {
    background-color: #6e8c5f;
}

/* Hover Effect */
.training-list li:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
}

/* Responsive Styling */
@media (max-width: 768px) {
    .training-list {
        padding-left: 20px;
    }

    .training-list li {
        text-align: center;
    }

    .training-list a {
        float: none;
        display: inline-block;
        margin-top: 10px;
    }
}
</style>

<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url('images/taj.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; object-fit: cover; width: 100%; height: 100%;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont text-center">
                    <h2 class="mb-3">Training Module</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Training Module</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="director-section">
    <div class="container">
        <h3>Training Module List</h3>
        <ol class="training-list">
            <li>
                Cutting Concerns
                <a href="https://scert-up.in/OtherContent/mod-1.pdf" target="_blank">View</a>
            </li>
            <li>
                Developing Personal-Social Qualities
                <a href="https://scert-up.in/OtherContent/mod-2.pdf" target="_blank">View</a>
            </li>
            <li>
                Art Integrated Learning
                <a href="https://scert-up.in/OtherContent/mod-3.pdf" target="_blank">View</a>
            </li>
            <li>
                School Based Assessment
                <a href="https://scert-up.in/OtherContent/mod-4.pdf" target="_blank">View</a>
            </li>
            <li>
                Health and Well-being in Schools
                <a href="https://scert-up.in/OtherContent/mod-5.pdf" target="_blank">View</a>
            </li>
            <li>
                Integration of ICT in Teaching
                <a href="https://scert-up.in/OtherContent/mod-6.pdf" target="_blank">View</a>
            </li>
            <li>
                Initiatives in School Education
                <a href="https://scert-up.in/OtherContent/mod-7.pdf" target="_blank">View</a>
            </li>
            <li>
                Pedagogy Concerns
                <a href="https://scert-up.in/OtherContent/mod-8.pdf" target="_blank">View</a>
            </li>
            <li>
                Pedagogy of Mathematics
                <a href="https://scert-up.in/OtherContent/mod-9.pdf" target="_blank">View</a>
            </li>
            <li>
                Pedagogy of Languages
                <a href="https://scert-up.in/OtherContent/mod-10.pdf" target="_blank">View</a>
            </li>
            <li>
                Pedagogy of Science
                <a href="https://scert-up.in/OtherContent/mod-11.pdf" target="_blank">View</a>
            </li>
            <li>
                Pedagogy of Social Sciences
                <a href="https://scert-up.in/OtherContent/mod-12.pdf" target="_blank">View</a>
            </li>
            <li>
                Teaching of English Language at Early Grades
                <a href="https://scert-up.in/OtherContent/t-3.pdf" target="_blank">View</a>
            </li>
            <li>
                स्वास्थ्य एवं स्वच्छता प्रशिक्षण मॉड्यूल 2017-18
                <a href="https://scert-up.in/OtherContent/t-1.pdf" target="_blank">View</a>
            </li>
            <li>
                पर्यावरण अध्ययन प्रशिक्षण मॉड्यूल कक्षा 3 से 5
                <a href="https://scert-up.in/OtherContent/t-2.pdf" target="_blank">View</a>
            </li>
        </ol>
    </div>
</section>

<?php
include('footer.php');
?>
