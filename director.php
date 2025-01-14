<?php
include('header.php');
?>


<style>
.director-section {
    background-color: #f8f9fa;
    padding: 60px 0;
}

.director-card {
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    border: none;
    margin-top: 25px;
}

.director-card img {
    width: 180px;
    height: 180px;
    border-radius: 50%;
    border: 4px solid #07294d;
    margin-top: -80px;
}

.director-card h3 {
    color: #07294d;
    font-weight: bold;
}

.director-card p {
    font-size: 18px;
    color: #333;
}

.table {
    background-color: #fff;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.table th {
    background-color: #07294d;
    color: #fff;
}

.list-group-item {
    font-size: 16px;
    line-height: 1.8;
    background-color: #fff;
    border: none;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
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
                    <h2>Director</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Director</li>
                        </ol>
                    </nav>
                </div> <!-- page banner cont -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>


<section class="director-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card director-card text-center">
                    <div class="card-body">
                        <img src="images/dire.jpg" alt="Director Image" class="rounded-circle img-fluid shadow">
                        <h3>Director, SCERT</h3>
                        <p>Mr. Ganesh Kumar</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-10">
                <!-- Table -->
                <div class="table-responsive">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact No.</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Mr. Ganesh Kumar</td>
                                <td>ganesh.kumar@example.com</td>
                                <td>+91-1234567890</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Responsibilities List -->
                <ul class="list-group mt-4">
                    <li class="list-group-item">Overall responsibility for SCERT and to ensure it functions as an institution with academic excellence</li>
                    <li class="list-group-item">Developing annual plans, securing timely funding, ongoing monitoring of all activities and ensuring targets are achieved</li>
                    <li class="list-group-item">Lead the coordination with high-level government and academic institutions – locally, nationally and internationally</li>
                    <li class="list-group-item">Implementing progressive human resources and performance management policies at SCERT and DIETs</li>
                </ul>
            </div>
        </div>
    </div>
</section>











<?php

include('footer.php');
?>