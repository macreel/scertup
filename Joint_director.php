<?php
include('header.php');
?>


<style>
.director-section {
    background-color: #f8f9fa;
}

.director-image img {
    width: 150px;
    height: 150px;
    border: 3px solid #000;
}

.table-bordered th,
.table-bordered td {
    vertical-align: middle;
}

.list-group-item {
    font-size: 1rem;
    line-height: 1.6;
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
                    <h2>Joint Director</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Joint Director</li>
                        </ol>
                    </nav>
                </div> <!-- page banner cont -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>


<section class="director-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <!-- Director Image -->
                <div class="director-image mb-4">
                    <img src="images/joint_dir.jpg" alt="Director Image" class="rounded-circle img-fluid shadow">
                </div>
                <!-- Director Name -->
                <h3 style="color:#07294d;">Joint Director, SCERT</h3>
                <p class="text-dark font-weight-bold">Shree Pavan Sachan</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <!-- Responsive Table -->
                <div class="table-responsive">
                    <table class="table table-bordered text-center">
                        <thead class=" text-white" style="background:#07294d;">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact No.</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Shree Pavan Sachan</td>
                                <td></td>
                                <td></td>
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