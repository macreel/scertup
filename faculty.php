<?php
include('header.php');
?>


<style>
    .custom-table {
    width: 100%;
    border-collapse: collapse;
    font-family: Arial, sans-serif;
    font-size: 16px;
    text-align: left;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.custom-table thead {
    background-color: #343a40;
    color: #fff;
    text-transform: uppercase;
}

.custom-table th, 
.custom-table td {
    padding: 12px 15px;
    border: 1px solid #ddd;
}

.custom-table tbody tr:nth-child(odd) {
    background-color: #f9f9f9;
}

.custom-table tbody tr:nth-child(even) {
    background-color: #fff;
}

.custom-table tbody tr:hover {
    background-color: #f1f1f1;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.custom-table th {
    font-weight: bold;
    text-align: center;
}

.custom-table td {
    text-align: center;
}

.faculty-heading {
    font-size: 2rem;
    font-weight: bold;
    margin-bottom: 10px;
    color: #07294d;
    text-transform: uppercase;
    letter-spacing: 2px;
    text-decoration: underline;
}

.faculty-subheading {
    font-size: 1rem;
    color: #6c757d;
    margin-bottom: 30px;
    font-style: italic;
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
                    <h2>Our Faculty</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Our Faculty</li>
                        </ol>
                    </nav>
                </div> <!-- page banner cont -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>



<section class="faculty mt-5 mb-5">
    <div class="row">
        <div class="col-10 m-auto text-center">
            <h2 class="faculty-heading">Our Faculty Members</h2>
            <p class="faculty-subheading">Meet our dedicated team of professionals</p>
        </div>
    </div>
    <div class="row">
        <div class="col-10 m-auto">
            <table class="table custom-table">
                <thead style="background:#07294d;">
                    <tr>
                        <th>S.NO.</th>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Joining Date</th>
                        <th>Mobile Number</th>
                        <th>Email ID</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>श्री गणेश कुमार</td>
                        <td>निदेशक</td>
                        <td>-</td>
                        <td>9415289139</td>
                        <td>dscertup@gmail.com</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>डॉ पवन सचान</td>
                        <td>संयुक्त शिक्षा निदेशक (एस0एस0ए0)</td>
                        <td>-</td>
                        <td>9410216555</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>श्री आशुतोष दुबे</td>
                        <td>उप शिक्षा निदेशक</td>
                        <td>-</td>
                        <td>9839064303</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>श्रीमती दीपा तिवारी</td>
                        <td>सहायक शिक्षा निदेशक</td>
                        <td>10-08-2016</td>
                        <td>7376270401</td>
                        <td>deepatiwari.scertup@gmail.com</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>श्री मनोज कुमार अहिरवार</td>
                        <td>सहायक निदेशक</td>
                        <td>-</td>
                        <td>9453140047</td>
                        <td>dscertup@gmail.com</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>श्रीमती पुष्पा रंजन</td>
                        <td>सहायक उप शिक्षा निदेशक प्रशिक्षण</td>
                        <td>14-08-2012</td>
                        <td>7376270411</td>
                        <td>push.pradeep07@gmail.com</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>श्रीमती सीमा शुक्ला</td>
                        <td>सहायक उप शिक्षा निदेशक</td>
                        <td>29-01-2009</td>
                        <td>8574783826</td>
                        <td>shivani.scertup@gmail.com</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>श्री रामचन्द्रेश्वर दत्त बाजपेयी</td>
                        <td>सहायक उप शिक्षा निदेशक</td>
                        <td>05-07-2016</td>
                        <td>7376270413</td>
                        <td>rcdbajpai70@gmail.com</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>श्री अजय कुमार गुप्ता</td>
                        <td>सहायक उप शिक्षा निदेशक</td>
                        <td>17-07-2014</td>
                        <td>7985480037</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>श्री हरीश चंद्र नाथ</td>
                        <td>विधि अधिकारी</td>
                        <td>20-07-2016</td>
                        <td>7905752115</td>
                        <td>-</td>
                    </tr>
                    <!-- Add remaining rows here -->
                </tbody>
            </table>
        </div>
    </div>
</section>














<?php

include('footer.php');
?>