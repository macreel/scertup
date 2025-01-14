<?php
include('header.php');
?>


<style>


.custom-table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0 15px;
    background-color: #f8f9fa;
    text-align: left;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.custom-table caption {
    caption-side: top;
    font-size: 24px;
    font-weight: bold;
    color: #34495e;
    padding-bottom: 15px;
}

.custom-table thead th {
    background-color: #022446;
    color: #fff;
    padding: 12px 15px;
    font-size: 18px;
}

.custom-table tbody td {
    background-color: #ffffff;
    padding: 5px 9px;
    font-size: 16px;
    color: #333;
    border-top: 1px solid #e5e5e5;
}

.custom-table tbody tr {
    transition: all 0.2s ease-in-out;
}

.custom-table tbody tr:hover {
    background-color: #f1f1f1;
}

.custom-table tbody tr:nth-child(even) td {
    background-color: #f9f9f9;
}

.custom-table td {
    border-radius: 5px;
}

.custom-table th:first-child,
.custom-table td:first-child {
    border-radius: 10px 0 0 10px;
}

.custom-table th:last-child,
.custom-table td:last-child {
    border-radius: 0 10px 10px 0;
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
                    <h2>Who's Who</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Who's Who</li>
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
            <div class="col-12">
               <div class="table-responsive">
               <table class="table custom-table">
                    <caption>Head of the Institute and Departments</caption>
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Designation</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Sh. Samwartak Singh, HCS</td>
                            <td>Director</td>
                            <td>dirscerthr[at]gmail[dot]com</td>
                        </tr>
                        <tr>
                            <td>Sh. Sunil Bajaj</td>
                            <td>Joint Director</td>
                            <td>dirscerthr[at]gmail[dot]com</td>
                        </tr>
                        <tr>
                            <td>Smt. Kalpana Ranga</td>
                            <td>Dy. Director</td>
                            <td>scertharyana122001[at]gmail[dot]com</td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
               </div>
            </div>
        </div>
    </div>
</section>









<?php

include('footer.php');
?>