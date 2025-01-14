<?php
include('header.php');
?>

<style>
/* General Styling */
body {
    font-family: 'Poppins', sans-serif;
    background-color: #f3f4f6;
}

h2, h3 {
    color: #07294d;
}

/* Banner Section */
#page-banner {
    background-image: url('images/taj.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    padding: 100px 0;
    color: #fff;
}
.page-banner-cont h2 {
    font-size: 48px;
    font-weight: bold;
}
.breadcrumb-item a {
    color: #fff;
    text-decoration: none;
}

/* Director Section */
.director-section {
    padding: 50px 0;
}
.director-section h3 {
    margin-bottom: 30px;
    font-weight: 600;
}

/* Curriculum Cards */
.curriculum-card {
    background: #fff;
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    overflow: hidden;
    transition: transform 0.3s;
}
.curriculum-card:hover {
    transform: translateY(-5px);
}
.card-header {
    background-color: #07294d;
    color: #fff;
    padding: 15px;
    font-size: 20px;
    font-weight: bold;
    text-align: center;
}
.card-body {
    padding: 20px;
    text-align: center;
}
.download-btn {
    background-color: #82A974;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    text-transform: uppercase;
    transition: background-color 0.3s;
}
.download-btn:hover {
    background-color: #6f8c62;
}
</style>

<!-- Page Banner -->
<section id="page-banner" data-overlay="8">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="page-banner-cont">
                    <h2 class="mb-3">D.El.Ed. 3rd Semester</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">D.El.Ed. 3rd Semester</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Curriculum Section -->
<section class="director-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h3 class="mb-3">D.El.Ed. 3rd Semester</h3>
            </div>
        </div>
        <div class="row">
            <!-- Curriculum Cards -->
            <div class="col-lg-4 col-sm-6">
                <div class="curriculum-card">
                    <div class="card-header">बी०टी०सी० कक्षा-शिक्षणःविषयवस्तु (संस्कृत)</div>
                    <div class="card-body">
                        <p>Download the complete बी०टी०सी० कक्षा-शिक्षणःविषयवस्तु (संस्कृत) material in PDF format.</p>
                        <a href="https://scert-up.in/DledContent/iii-2.pdf" target="_blank" class="download-btn">View</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="curriculum-card">
                    <div class="card-header">दैनिक जीवन में विज्ञान और प्रौद्योगिकी</div>
                    <div class="card-body">
                        <p>Download the complete दैनिक जीवन में विज्ञान और प्रौद्योगिकी material in PDF format.</p>
                        <a href="https://scert-up.in/DledContent/iii-3.pdf" target="_blank" class="download-btn">View</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="curriculum-card">
                    <div class="card-header">शैक्षिक मूल्यांकन, क्रियात्मक शोध एवं नवाचार</div>
                    <div class="card-body">
                        <p>Download the complete शैक्षिक मूल्यांकन, क्रियात्मक शोध एवं नवाचार material in PDF format.</p>
                        <a href="https://scert-up.in/DledContent/iii-4.pdf" target="_blank" class="download-btn">View</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="curriculum-card">
                    <div class="card-header">समावेशी शिक्षा एवं विशिष्ट आवश्यकता वाले बच्चों की शिक्षा</div>
                    <div class="card-body">
                        <p>Download the complete समावेशी शिक्षा एवं विशिष्ट आवश्यकता वाले बच्चों की शिक्षा material in PDF format.</p>
                        <a href="https://scert-up.in/DledContent/iii-5.pdf" target="_blank" class="download-btn">View</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="curriculum-card">
                    <div class="card-header">सामाजिक अध्ययन</div>
                    <div class="card-body">
                        <p>Download the complete सामाजिक अध्ययन material in PDF format.</p>
                        <a href="https://scert-up.in/DledContent/iii-6.pdf" target="_blank" class="download-btn">View</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="curriculum-card">
                    <div class="card-header">कंप्यूटर शिक्षा</div>
                    <div class="card-body">
                        <p>Download the complete कंप्यूटर शिक्षा material in PDF format.</p>
                        <a href="https://scert-up.in/DledContent/iii-7.pdf" target="_blank" class="download-btn">View</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="curriculum-card">
                    <div class="card-header">सेवापूर्व शिक्षक प्रशिक्षुओं के लिए पाठ्यपुस्तक (गणित तृतीय सेमेस्टर)</div>
                    <div class="card-body">
                        <p>Download the complete गणित (तृतीय सेमेस्टर) material in PDF format.</p>
                        <a href="https://scert-up.in/DledContent/iii-8.pdf" target="_blank" class="download-btn">View</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include('footer.php');
?>
