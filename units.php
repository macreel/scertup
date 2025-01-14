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
                    <h2 class="mb-3">UNITS</h2>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">UNITS</li>
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

                <!-- Director Name -->
                <h3 class="mb-3" style="color:#07294d;">UNITS</h3>

            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <!-- Responsive Table -->
                <div class="table-responsive">
                    <table id="dietTable" class="table table-bordered table-striped">
                        <thead>
                        <tr style="background-color: #022446; color:white">
                                <th>District</th>
                                <th>Institution Name </th>
                                <th>Address </th>
                                <th>Name of In-charge</th>
                                <th>Designation</th>
                                <th>Phone No.</th>
                                <th>Email </th>
                                <th>Website </th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <tr>
                                <td>Agra</td>
                                <td>Govt. Nursery Training College</td>
                                <td>Normal Compound, Near Juta Mandi, Shahganj, Agra</td>
                                <td>Reeta Yadav</td>
                                <td>In-Charge Principal (Lecturer)</td>
                                <td>9410030700</td>
                                <td>govtntc.agra@gmail.com</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Lucknow</td>
                                <td>College of Teacher Education (CTE)</td>
                                <td>City Station Road, Lucknow</td>
                                <td>Prabhawati Verma</td>
                                <td>Principal</td>
                                <td>7651895282</td>
                                <td>ctelucknow677@gmail.com</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Prayagraj</td>
                                <td>Bureau of Psychology</td>
                                <td>2 Louder Road, U.P., Prayagraj</td>
                                <td>Usha Chandra</td>
                                <td>Director</td>
                                <td>9450505278</td>
                                <td>brijesh11282@gmail.com</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Prayagraj</td>
                                <td>College of Teacher Education (CTE)</td>
                                <td>41 MG Marg, Prayagraj</td>
                                <td>Sheel Verma</td>
                                <td>Principal</td>
                                <td>9411685621</td>
                                <td>pcteallahabad@gmail.com</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Prayagraj</td>
                                <td>English Language Teaching Institute (ELTI)</td>
                                <td>23 Allenganj, Near Madhyamik Chayan Board, Prayagraj</td>
                                <td>Dr. Skand Shukla</td>
                                <td>Principal</td>
                                <td>9415254692</td>
                                <td>elti2006@rediffmail.com</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Prayagraj</td>
                                <td>Govt. Nursery Training College</td>
                                <td>MG Marg, Near Hanuman Mandir, Civil Lines, Prayagraj</td>
                                <td>Dr. Subhashni Prajapati</td>
                                <td>Principal</td>
                                <td>9335985975</td>
                                <td>gntcald@gmail.com</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Prayagraj</td>
                                <td>Govt. Women's Physical Training College</td>
                                <td>MG Road, Near Swarooprani Hospital, Prayagraj</td>
                                <td>kahkansaa Jabi</td>
                                <td>Principal</td>
                                <td>9450633432</td>
                                <td>scope.allahabad@gmail.com</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Prayagraj</td>
                                <td>Institute of Advanced Studies in Education (IASE)</td>
                                <td>53 MG Road, Prayagraj</td>
                                <td>Neena Srivastava</td>
                                <td>Principal</td>
                                <td>9450610003</td>
                                <td>iase.allahabad@gmail.com</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Prayagraj</td>
                                <td>Pariksha Niyamak Pradhikari </td>
                                <td></td>
                                <td>Dr. Anil Bhushan Chaturvedi</td>
                                <td>secretary</td>
                                <td>9415632732</td>
                                <td>secretarypnp.up@gmail.com</td>
                                <td>examregulatoryauthorityup.in</td>
                            </tr>
                            <tr>
                                <td>Prayagraj</td>
                                <td>State Institute of Education </td>
                                <td>Allenganj, Prayagraj, Uttar Pradesh</td>
                                <td>Dr. Ashutosh Dubey</td>
                                <td>-</td>
                                <td>9839064303</td>
                                <td>sieallahabad@gmail.com</td>
                                <td>www.sie.in</td>
                            </tr>
                            <tr>
                                <td>Prayagraj</td>
                                <td>State Institute of Science Education </td>
                                <td>-</td>
                                <td>Dr. Anil Bhushan Chaturvedi</td>
                                <td>Director</td>
                                <td>9415509556</td>
                                <td>siseup.alld@gmail.com</td>
                                <td>www.sie.in</td>
                            </tr>
                            <tr>
                                <td>Rampur</td>
                                <td>Govt. Physical Training College for men</td>
                                <td>Topkhana Road, Rampur</td>
                                <td>Shri Surendra Singh</td>
                                <td>Principal</td>
                                <td>-</td>
                                <td>physicaltrainingcollege.rampur@gmail.com </td>
                                <td>www.sie.in</td>
                            </tr>
                            <tr>
                                <td>Varanasi</td>
                                <td>College of Teacher Education - CTE</td>
                                <td>Ardali Bazar, Varanasi</td>
                                <td>Dr. Sarita Tiwari</td>
                                <td>Principal</td>
                                <td>9415234213</td>
                                <td>ctevns123@gmail.com</td>
                                <td>www.sie.in</td>
                            </tr>
                            <tr>
                                <td>Varanasi</td>
                                <td>Rajya Hindi Sansthan</td>
                                <td>Ardali Bazar, Near Police Line, Varanasi, Pin. 221001</td>
                                <td>Richa Joshi</td>
                                <td>Director</td>
                                <td>9451890034</td>
                                <td>rajyahindisansthan1975@gmail.com</td>
                                <td>www.sie.in</td>
                            </tr>
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