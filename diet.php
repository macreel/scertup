<?php
include('header.php');
?>

<style>
    .rtia-section {
        background-color: #f9f9f9;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .rtia-section h3 {
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .table th,
    .table td {
        vertical-align: middle;
        text-align: center;
    }

    .table th {
        font-size: 16px;
        font-weight: 600;
    }

    .table td {
        font-size: 14px;
    }

    .table a {
        text-decoration: none;
    }

    .table a:hover {
        text-decoration: underline;
    }




    .hero {
        background-image: linear-gradient(to right, #007bff, #0056b3);
        color: white;
        padding: 80px 20px;
        text-align: center;
    }

    .hero h1 {
        font-size: 48px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .hero p {
        font-size: 20px;
        margin-bottom: 0;
    }

    .section-main-title {
        background-color: #07294d;
        color: white;
        text-align: center;
        padding: 2px 0;
        text-decoration: underline;
        text-decoration-color: yellow;
        margin-bottom: 18px;
        box-shadow: -1px 0px 10px black;
    }

    .section-title {
        margin-top: 40px;
        margin-bottom: 30px;
        text-align: center;
        font-weight: 700;
        font-size: 28px;
        color: #333;
        text-transform: uppercase;
        position: relative;
        padding-bottom: 15px;
        letter-spacing: 1px;
    }

    .section-title::after {
        content: '';
        position: absolute;
        width: 100px;
        height: 5px;
        background: linear-gradient(90deg, #0066cc, #00cc99);
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
    }

    .card {
        border: none;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
    }

    .card-title {
        font-size: 22px;
        font-weight: bold;
        color: #0056b3;
    }

    .list-group-item {
        font-size: 18px;
        border: none;
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
                    <h2>District Institute of Education & Training (DIET)</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">DIETs</li>
                        </ol>
                    </nav>
                </div> <!-- page banner cont -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>


<section class="pt-5 pb-5" style="background: #ede7e8">
    <!-- Main Content -->
    <div class="container ">
        <!-- Introduction Section -->
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-main-title">Overview</h2>
                <p>DIET (District Institute of Education and Training) is an essential part of the State Council of
                    Educational Research and Training (SCERT), Uttar Pradesh, aimed at improving the quality of teacher
                    education and school education at the district level. There are 91 DIETs across various districts in
                    Uttar Pradesh, functioning as nodal centers to enhance primary education, pre-service, and
                    in-service teacher training programs.</p>
            </div>
        </div>

        <!-- Objectives Section -->
        <div class="row">
            <div class="col-md-12">
                <h4 class="section-title">Primary Objectives of DIETs in Uttar Pradesh</h4>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Teacher Training</h5>
                        <p class="card-text">Conducts pre-service and in-service training programs for teachers at the
                            primary and upper primary levels to improve teaching skills and classroom practices.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Curriculum Implementation</h5>
                        <p class="card-text">Ensures effective implementation of the curriculum and educational policies
                            designed by SCERT UP and provides feedback for improvements.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Research and Innovation</h5>
                        <p class="card-text">Conducts action research to address local educational challenges and
                            introduce innovative teaching practices.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Key Programs Section -->
        <div class="row">
            <div class="col-md-12">
                <h4 class="section-title">Key Programs Conducted by DIETs</h4>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">Pre-Service Teacher Education (PSTE): A two-year Diploma in
                                Elementary Education (D.El.Ed) program for aspiring teachers.</li>
                            <li class="list-group-item">In-Service Teacher Training: Refresher courses and
                                capacity-building programs for working teachers.</li>
                            <li class="list-group-item">School Leadership Development: Training programs for headmasters
                                and school principals in school management and leadership skills.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">Community Engagement: Promoting awareness about child education,
                                girls' education, and inclusive learning within local communities.</li>
                            <li class="list-group-item">Monitoring and Evaluation: Evaluating school performance,
                                learning outcomes, and providing academic support.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Role in Nipun Bharat Mission Section -->
        <div class="row mt-5">
            <div class="col-md-12">
                <h4 class="section-title">Role of DIETs in Nipun Bharat Mission</h4>
                <p>DIETs play a crucial role in foundational literacy and numeracy programs under the Nipun Bharat
                    Mission, aiming to achieve learning outcomes for children by Class 3. They train teachers to enhance
                    their pedagogical skills for early-grade education.</p>
            </div>
        </div>

        <!-- Importance Section -->
        <div class="row">
            <div class="col-md-12">
                <h4 class="section-title">Importance of DIETs in Uttar Pradesh</h4>
                <div class="card">
                    <div class="card-body">
                        <div class="list-group">
                            <div class="list-group-item">✅ Improving Teacher Quality</div>
                            <div class="list-group-item">✅ Promoting Innovative Teaching Practices</div>
                            <div class="list-group-item">✅ Strengthening Primary Education</div>
                            <div class="list-group-item">✅ Bridging Gaps in Rural and Urban Education</div>
                            <div class="list-group-item">✅ Providing Academic Support to Schools</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="py-5">
    <div class="container-fluid">
        <div class="table-responsive">
            <table id="dietTable" class="table table-striped table-bordered">
                <thead>
                    <tr style="background-color: #022446; color: white;">
                        <th>S.No</th>
                        <th>Name of the DIET</th>
                        <th>Full Postal Address</th>
                        <th>Name of Incharge</th>
                        <th>Designation</th>
                        <th>Contact No.</th>
                        <th>Email Address</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>1</td>
                        <td>DIET AGRA</td>
                        <td>Panchkunya Shahganj,Agra,Pincode-282001,Uttar Pradesh&nbsp;</td>
                        <td>Shri Ahivaran Singh</td>
                        <td>Principal</td>
                        <td>7376270457</td>
                        <td><a href="mailto:diet.agra@gmail.com">diet.agra@gmail.com</a></td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>DIET ALIGARH</td>
                        <td>DIET&nbsp; Madrak Agra Road Aligarh 202001</td>
                        <td>Dr. Indra Prakash Singh Solanki</td>
                        <td>Principal</td>
                        <td>7376270453</td>
                        <td><a href="mailto:diet.aligarh@gmail.com">diet.aligarh@gmail.com</a></td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>DIET PRAYAGRAJ&nbsp;</td>
                        <td>Civil Line, Prayagraj, Pin Code - 211001</td>
                        <td>Shri Praveen Kumar Tiwari</td>
                        <td>Sr. Lecturer</td>
                        <td>7376270456</td>
                        <td><a href="mailto:diet.allahabad1@gmail.com">diet.allahabad1@gmail.com</a></td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>DIET AMBEDKAR NAGAR</td>
                        <td>DIET Alapur, Post-Baskhari, Ambedkar Nagar 224145</td>
                        <td>Shri Hridray Narayan Tripathi</td>
                        <td>Vice Principal</td>
                        <td>7376270440</td>
                        <td><a href="mailto:ambedkarnagar.diet@gmail.com">ambedkarnagar.diet@gmail.com</a></td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>DIET AURAIYA</td>
                        <td>Diet Ajitmal Auraiya Near Kotwali Ajitmal Auraiya 206121</td>
                        <td>Shri Devendra Prakash</td>
                        <td>Vice Principal</td>
                        <td>7376270459</td>
                        <td>diet.auraiya1@gmail.com</td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>DIET AZAMGARH</td>
                        <td>Jaafarpur, Near RTO Office Azamgarh Uttar Pradesh 276001</td>
                        <td>Shri Amarnath Rai</td>
                        <td>Vice Principal</td>
                        <td>7376270443</td>
                        <td><a href="mailto:diet.azamgarh@gmail.com">diet.azamgarh@gmail.com&nbsp;</a></td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>DIET BAGHPAT</td>
                        <td>Baraut , Bagpat, Pincode-25061,Uttar Pradesh</td>
                        <td>Shri Vinay Kumar Gill</td>
                        <td>Principal</td>
                        <td>7376270437</td>
                        <td><a href="mailto:diet.baghpat@gmail.com">diet.baghpat@gmail.com</a></td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>DIET BAHRAICH</td>
                        <td>Payagpur, Bahraich,Uttar Pradesh Pincode-271871</td>
                        <td>Shri Uday Raj</td>
                        <td>Principal</td>
                        <td>7376270431</td>
                        <td>diet.bahraich@gmail.com</td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>DIET BALLIA</td>
                        <td>Navapura Pakwainaar, Ballia, Uttar Pradesh 277001</td>
                        <td>Shri Surya Bhan Singh</td>
                        <td>Sr. Lecturer</td>
                        <td>7376270463</td>
                        <td><a href="mailto:diet.ballia1@gmail.com">diet.ballia1@gmail.com</a></td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>DIET BALRAMPUR</td>
                        <td>Balrampur, Pincode-27120,Uttar Pradesh</td>
                        <td>Shri Vishnu Shyam Dwivedi</td>
                        <td>Principal</td>
                        <td>7376270442</td>
                        <td>diet.balrampur@gmail.com</td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>DIET BANDA</td>
                        <td>Principal, Diet Civil Line Banda, Uttar Pradesh Pincode- 210001</td>
                        <td>Shri Harish Chandra</td>
                        <td>B.S.A.</td>
                        <td>7376270465</td>
                        <td><a href="mailto:diet.banda@gmail.com">diet.banda@gmail.com</a></td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>DIET BARABANKI</td>
                        <td>Bahram Ghat, Ganeshpur, Tahseel Ramnagar, Barabanki Pin-225201</td>
                        <td>Hifurgur Rahman</td>
                        <td>Principal</td>
                        <td>7376270551</td>
                        <td><a href="mailto:diet.barabanki1@gmail.com">diet.barabanki1@gmail.com</a></td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>DIET BAREILLY</td>
                        <td>Near SDM Court Faridpur Bareilly, Uttar Pradesh Pincode- 243503</td>
                        <td>Smt. Shashi Devi Sharma</td>
                        <td>Principal</td>
                        <td>7376270484</td>
                        <td><a href="mailto:diet.bareilly@gmail.com">diet.bareilly@gmail.com</a></td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>DIET BASTI</td>
                        <td>Plastic Complex, Basti, Pin- 27200,Uttar Pradesh</td>
                        <td>Masoud Akhtar Ansari</td>
                        <td>Sr. Lecturer</td>
                        <td>7376270449</td>
                        <td>diet.basti@gmail.com</td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>DIET BIJNOR</td>
                        <td>DIET ISMAILPUR DIST BIJNOR&nbsp;</td>
                        <td>Girwar Singh</td>
                        <td>Vice Principal</td>
                        <td>7376270438</td>
                        <td><a href="mailto:diet.bijnor@gmail.com">diet.bijnor@gmail.com</a></td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>DIET BADAUN</td>
                        <td>Badaun Pincode- 243601,Uttar Pradesh</td>
                        <td>Rajeev Diwakar</td>
                        <td>Sr. Lecturer</td>
                        <td>7376270461</td>
                        <td>diet.budaun@gmail.com</td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>DIET BULANDSHAHR</td>
                        <td>Dm Road Bulandshahr</td>
                        <td>Mahendra Singh Rana</td>
                        <td>Principal</td>
                        <td>7376270470</td>
                        <td><a href="mailto:diet.bulandshahar@gmail.com">diet.bulandshahar@gmail.com</a></td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>DIET CHANDAULI</td>
                        <td>Sarnath, Varanasi Pincode- 221007,Uttar Pradesh</td>
                        <td>Bhupendra Singh</td>
                        <td>Principal</td>
                        <td>7376270472</td>
                        <td>diet.chandauli@gmail.com</td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>DIET CHITRAKOOT</td>
                        <td>Station Road Shivrampur, Chitrakoot, Uttar Pradesh Pincode-210205</td>
                        <td>C.L Chaurasiya&nbsp;</td>
                        <td>Principal</td>
                        <td>7376270476</td>
                        <td>diet.chitrakoot@gmail.com</td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>20</td>
                        <td>DIET DEORIA</td>
                        <td>Rampur Karkhana, Deoria, Pincode-274405,Uttar Pradesh</td>
                        <td>Shri Rajendra Prasad Yadav</td>
                        <td>Vice Principal</td>
                        <td>7376270416</td>
                        <td>diet.deoria@gmail.com</td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>21</td>
                        <td>DIET ETAH</td>
                        <td>Kuch-Much Kalan, Etah, Uttar Pradesh Pincode- 207001</td>
                        <td>Shri Manoj Kumar Giri</td>
                        <td>Principal</td>
                        <td>7379270479</td>
                        <td><a href="mailto:diet.etah@gmail.com">diet.etah@gmail.com</a></td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>22</td>
                        <td>DIET ETAWAH</td>
                        <td>Near Kachahari Etawah, Uttar Pradesh Pincode-206001</td>
                        <td>Shri Shyam Prakash Yadav</td>
                        <td>Vice Principal</td>
                        <td>7376270483</td>
                        <td>diet.etawah@gmail.com</td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>23</td>
                        <td>DIET AYODHYA&nbsp;</td>
                        <td>JTC Field Haiderganj Faizabad, Pincode-224205,Uttar Pradesh</td>
                        <td>Sandhya Srivastava</td>
                        <td>Principal</td>
                        <td>7376270484</td>
                        <td><a href="mailto:diet.faizabad@gmail.com">diet.faizabad@gmail.com</a></td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>24</td>
                        <td>DIET FARRUKHABAD</td>
                        <td>GT Road, Chhibramau, Kannauj, Pincode- 209721,Uttar Pradesh</td>
                        <td>Shri Vijay Pal Singh</td>
                        <td>Vice Principal</td>
                        <td>7376270485</td>
                        <td><a href="mailto:diet.farrukhabad@gmail.com">diet.farrukhabad@gmail.com</a></td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>25</td>
                        <td>DIET FATEHPUR</td>
                        <td>Kanpur Road Fatehpur, Pincode- 212601,Uttar Pradesh</td>
                        <td>Shri Anandkar Pandey</td>
                        <td>Principal</td>
                        <td>7376270489</td>
                        <td>diet.fatehpur@gmail.com</td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>26</td>
                        <td>DIET FIROZABAD</td>
                        <td>Kapawali, Firozabad, Uttar Pradesh Pincode- 283203</td>
                        <td>Smt. Vimlesh Vijay Shree</td>
                        <td>Incharge Principal</td>
                        <td>7376270491</td>
                        <td>diet.firozabad@gmail.com</td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>27</td>
                        <td>DIET GAUTAM BUDDHA NAGAR</td>
                        <td>Town Area Dankaur,G.B.Nagar, Pincode- 201301,Uttar Pradesh</td>
                        <td>Shri Sanjay Upadhyay</td>
                        <td>Principal</td>
                        <td>7376270492</td>
                        <td>diet.gbnagar@gmail.com</td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>28</td>
                        <td>DIET Hapur (GHAZIABAD)</td>
                        <td>Kothigate Hapur, Uttar Pradesh Pincode- 245304</td>
                        <td>Shri Dinesh Singh</td>
                        <td>Principal</td>
                        <td>7376270498</td>
                        <td>diet.ghaziabad@gmail.com</td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>29</td>

                        <td>DIET GHAZIPUR</td>
                        <td>Saidpur, Ghazipur, Uttar Pradesh Pincode-233304</td>
                        <td>Shri Rakesh Singh</td>
                        <td>Sr. Lecturer</td>
                        <td>7376270493</td>
                        <td><a href="mailto:diet.ghazipur@gmail.com">diet.ghazipur@gmail.com</a></td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>30</td>
                        <td>DIET GONDA</td>
                        <td>Darji Kunwa, Gonda, Pincode-271123, Uttar Pradesh</td>
                        <td>Vinay Mohan Van</td>
                        <td>Vice Principal</td>
                        <td>7376270428</td>
                        <td>diet.gonda@gamil.com</td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>31</td>
                        <td>DIET GORAKHPUR</td>
                        <td>Lailatpur, GORAKHPUR, Uttar Pradesh Pincode-273001</td>
                        <td>Shri Jai Prakash</td>
                        <td>Sr. Lecturer</td>
                        <td>7376270496</td>
                        <td>diet.gorakhpur1@gmail.com</td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>32</td>
                        <td>DIET HAMIRPUR</td>
                        <td>Sumerpur, Hamirpur Uttar Pradesh Pincode- 21042</td>
                        <td>Shri Prem Chandra Yadav</td>
                        <td>Sr. Lecturer</td>
                        <td>7376270497</td>
                        <td><a href="mailto:diet.hamirpur@gmail.com">diet.hamirpur@gmail.com</a></td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>33</td>
                        <td>DIET HARDOI</td>
                        <td>Cinema Chauraha, Nagheta Road, Hardoi, Uttar Pradesh Pincode- 241001</td>
                        <td>Shri Virendra Kumar Dubey</td>
                        <td>Incharge Principal (DIOS)</td>
                        <td>7376270448</td>
                        <td>diet.hardoi@gmail.com</td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>34</td>
                        <td>DIET JAUNPUR</td>
                        <td>Alfastenganj, Kotwali,&nbsp; Jaunpur, Uttar Pradesh Pincode- 222001</td>
                        <td>Shri Nand Lal Yadav</td>
                        <td>Vice Principal</td>
                        <td>7376270445</td>
                        <td><a href="mailto:diet.jaunpur@gmail.com">diet.jaunpur@gmail.com</a></td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>35</td>
                        <td>DIET JHANSI</td>
                        <td>Baruasagar, Jhansi, Uttar Pradesh Pincode-284201</td>
                        <td>Shri Mukesh Kumar Raijaida&nbsp;</td>
                        <td>Principal</td>
                        <td>7376270503</td>
                        <td><a href="mailto:diet.jhansi@gmail.com">diet.jhansi@gmail.com</a></td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>36</td>
                        <td>DIET J.P. Nagar (AMROHA)</td>
                        <td>Budanpur, J.P Nagar, Uttar Pradesh Pincode- 244221&nbsp;</td>
                        <td>Dr. Pravesh Kumar</td>
                        <td>Sr. Lecturer</td>
                        <td>7376270440</td>
                        <td>diet.jpnagar1@gmail.com</td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>37</td>
                        <td>DIET JALAUN</td>
                        <td>Pindari Jalaun</td>
                        <td></td>
                        <td>Incharge Principal (DIOS)</td>
                        <td>7376270502</td>
                        <td><a href="mailto:diet.jalaun@gmail.com">diet.jalaun@gmail.com</a></td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>38</td>
                        <td>DIET Kanpur Nagar&nbsp;</td>
                        <td>Narval, Kanpur Nagar, Uttar Pradesh</td>
                        <td>Smt. Rekha Srivastava</td>
                        <td>Principal</td>
                        <td>7376270452</td>
                        <td><a href="mailto:diet.kanpurnagar@gmail.com">diet.kanpurnagar@gmail.com</a></td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>39</td>
                        <td>DIET Kanpur Dehat&nbsp;</td>
                        <td>Main Road Pukhrayan Kanpur Dehat, Uttar Pradesh Pincode 209111</td>
                        <td>Shri Sacchidanand Yadav</td>
                        <td>Sr. Lecturer</td>
                        <td>7376270425</td>
                        <td><a href="mailto:diet.kanpurdehat1@gmail.com">diet.kanpurdehat1@gmail.com</a></td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>40</td>
                        <td>DIET KANNAUJ</td>
                        <td>GT Road, Chhibramau, Kannauj, Uttar-Pradesh,Pincode-209721,Uttar Pradesh&nbsp;</td>
                        <td></td>
                        <td>Incharge Principal (BSA)</td>
                        <td>7376270504</td>
                        <td>diet.kannauj@gmail.com</td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>41</td>
                        <td>DIET KAUSHAMBI</td>
                        <td>Manihanpur, Kaushambi, Uttar-Pradesh, Pincode- 212207</td>
                        <td>Shri Swadesh Kumar</td>
                        <td>Sr. Lecturer</td>
                        <td>7376270418</td>
                        <td><a href="mailto:diet.kaushambi@gmail.com">diet.kaushambi@gmail.com</a></td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>42</td>
                        <td>DIET LAKHIMPUR KHERI</td>
                        <td>Rajapur, Lakhimpur, Uttar-Pradesh, Pincode- 262701</td>
                        <td>Shri Om Prakash Gupta</td>
                        <td>Principal</td>
                        <td>7376270447</td>
                        <td>diet.lakhimpur@gmail.com</td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>43</td>
                        <td>DIET KUSHI NAGAR</td>
                        <td>Padrauna Road, Arjunaham Kasia, Kushinagar, Uttar Pradesh Pincode-274402</td>
                        <td>Shri Manmohan Sharma</td>
                        <td>Vice Principal</td>
                        <td>7376270430</td>
                        <td><a href="mailto:diet.kushinagar@gmail.com">diet.kushinagar@gmail.com</a></td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>44</td>
                        <td>DIET LALITPUR</td>
                        <td>Civil Line Ghusyana, Near Bus Stand, Lalitpur, Uttar Pradesh Pincode-284403</td>
                        <td>Shri Maharaj Swami</td>
                        <td>Sr. Lecturer</td>
                        <td>7376270508</td>
                        <td>diet.lalitpur1@gmail.com</td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>45</td>
                        <td>DIET LUCKNOW</td>
                        <td>Jbtc Campus Nishtaganj Lucknow 226007</td>
                        <td>Shri Pawan Sachan</td>
                        <td>Principal</td>
                        <td>7376270511</td>
                        <td>diet.lucknow@gmail.com</td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>46</td>
                        <td>&nbsp;DIET Hathras</td>
                        <td>Ramanpur, Hathras 204101</td>
                        <td>Smt. Richa Gupta</td>
                        <td>Principal</td>
                        <td>7376270450</td>
                        <td>diet.hts@gmail.com</td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>47</td>
                        <td>DIET MAHARAJGANJ</td>
                        <td>Danewa Dhanei Nichlaul Road, Maharajganj, Uttar Pradesh Pincode -273301</td>
                        <td>Shri Amarnath Rai</td>
                        <td>Vice Principal</td>
                        <td>7376270419</td>
                        <td>diet.maharajganj@gmail.com</td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>48</td>
                        <td>DIET MAHOBA</td>
                        <td>Muhalla-Suharyawn Near Bsnl Exchange Charkhari, Mahoba, Uttar Pradesh Pincode-
                            210421</td>
                        <td>Shri Suresh Pratap</td>
                        <td>P.I.O.S.</td>
                        <td align="right">7376270433</td>
                        <td><a href="mailto:diet.mahoba@gmail.com">diet.mahoba@gmail.com</a></td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>49</td>
                        <td>DIET MAINPURI</td>
                        <td>Bongaon, Mainpuri, Uttar Pradesh Pincode-205262</td>
                        <td>Shri Narendra Pal Singh</td>
                        <td>Vice Principal</td>
                        <td>7376270516</td>
                        <td><a href="mailto:diet.mainpuri@gmail.com">diet.mainpuri@gmail.com</a></td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>50</td>
                        <td>DIET MATHURA</td>
                        <td>Opposite Mathura Refinary Township Gate Baad 281006</td>
                        <td>Shri Mahendra Kumar Singh</td>
                        <td>Principal</td>
                        <td>7376270521</td>
                        <td><a href="mailto:diet.mathura@gmail.com">diet.mathura@gmail.com</a></td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>51</td>
                        <td>DIET MAU</td>
                        <td>Imiliya, Mau, Pincode-275101,Uttar Pradesh</td>
                        <td>S.P. Singh</td>
                        <td>Sr. Lecturer</td>
                        <td>7376270525</td>
                        <td><a href="mailto:diet.mau@gmail.com">diet.mau@gmail.com&nbsp;</a></td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>52</td>
                        <td>DIET MEERUT</td>
                        <td>Chota Mawana, Meeruth, Pincode- 250002 ,Uttar Pradesh</td>
                        <td>Shri Shrawan Kumar</td>
                        <td>Principal</td>
                        <td>7376270526</td>
                        <td>diet.meerut@gmail.com</td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>53</td>
                        <td>DIET MIRZAPUR</td>
                        <td>Patehara Kalan Mirzapur, Uttar Pradesh Pincode-231001</td>
                        <td>Shri Fateh Bahadur Singh</td>
                        <td>Vice Principal</td>
                        <td>7376270434</td>
                        <td><a href="mailto:diet.mirzapur@gmail.com">diet.mirzapur@gmail.com</a></td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>54</td>
                        <td>DIET MORADABAD</td>
                        <td>Kanth, Post-Kanth, Moradabad,&nbsp; PIN 244501&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>7376270416</td>
                        <td><a href="mailto:diet.moradabad@gmail.com">diet.moradabad@gmail.com</a></td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>55</td>
                        <td>DIET MUZAFFARNAGAR</td>
                        <td>Circular Road, Muzaffarnagar, Uttar Pradesh Pincode- 251001</td>
                        <td>Shri Bheem Singh</td>
                        <td>Principal</td>
                        <td>7376270529</td>
                        <td><a href="mailto:diet.muzaffarnagar@gmail.com">diet.muzaffarnagar@gmail.com</a></td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>56</td>
                        <td>DIET PILIBHIT</td>
                        <td>Bisalpur Distt Pilibhit, Uttar Pradesh, Pincode- 262201</td>
                        <td>Shri Shafique Mohammad Siddiqui</td>
                        <td>Principal</td>
                        <td>7376270530</td>
                        <td>diet.pilibhit@gmail.com</td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>57</td>
                        <td>DIET PRATAPGARH</td>
                        <td>Vill &amp; Post - Atarsand, Pratapgarh, Uttar Pradesh Pincode- 230401</td>
                        <td>Mohd. Ibrahim</td>
                        <td>Principal</td>
                        <td>7376270535</td>
                        <td>diet.pratapgarh@gmail.com</td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>58</td>
                        <td>DIET RAE BARELI</td>
                        <td>Door Bhash Nager, Raebareli, Uttar Pradesh Pincode- 229001</td>
                        <td>Shri Rajendra Prasad</td>
                        <td>Principal</td>
                        <td>7376270536</td>
                        <td>diet.raebareli@gmail.com</td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>59</td>
                        <td>DIET RAMPUR</td>
                        <td>NEAR BSA OFFICE RAMPUR CIVIL LINES RAMPUR, Uttar Pradesh Pincode- 244901</td>
                        <td>Smt. Neelam Rani Tamta</td>
                        <td>Vice Principal</td>
                        <td>7376270451</td>
                        <td>diet.rampur@gmail.com</td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>60</td>
                        <td>DIET SAHARANPUR</td>
                        <td>Patni, Saharanpur, Pincode-24700,Uttar Pradesh</td>
                        <td>Shri Raj Singh Yadav</td>
                        <td>Principal</td>
                        <td>7376270539</td>
                        <td>diet.saharanpur@gmail.com</td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>61</td>
                        <td>DIET SANT KABEER NAGAR</td>
                        <td>Khalilabad, Santkabeer Nagar, Uttar Pradesh Pincode-272175</td>
                        <td>Shri Pratap Singh Baghel</td>
                        <td>Principal</td>
                        <td>8765148025</td>
                        <td>diet.sknagar@gmail.com</td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>62</td>
                        <td>DIET SANT RAVIDAS NAGAR (Bhadohi)&nbsp;</td>
                        <td>Diet Gyanpur Bhadohi</td>
                        <td>Amit Kumar</td>
                        <td>B.S.A.</td>
                        <td>7376270436</td>
                        <td>diet.srnagar@gmail.com</td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>63</td>
                        <td>DIET SHAHJAHANPUR</td>
                        <td>Dadraul Shahjahanpur Uttar Pradesh Pincode-242001</td>
                        <td>Anchal Mishra</td>
                        <td>Vice Principal</td>
                        <td>7376270547</td>
                        <td><a href="mailto:diet.shahjahanpur@gmail.com">diet.shahjahanpur@gmail.com</a></td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>64</td>
                        <td>DIET SHRAVASTI</td>
                        <td>Ikauna, Shrawasti, Uttar Pradesh Pincode-271831</td>
                        <td>Shri Kamlesh Kumar</td>
                        <td>Principal</td>
                        <td>7376270429</td>
                        <td><a href="mailto:diet.shrawasti@gmail.com">diet.shrawasti@gmail.com</a></td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>65</td>
                        <td>DIET SIDDHARTH NAGAR</td>
                        <td>District Institute Of Education &amp; Training Bansi District-Siddhartha Nagar Pin
                            -272153</td>
                        <td>Suryakant Tirpat</td>
                        <td>B.S.A.</td>
                        <td>7376270548</td>
                        <td>dietbansisiddharthnagar@gmail.com</td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>66</td>
                        <td>DIET SITAPUR</td>
                        <td>Khairabad Sitapur Pin Code 261131</td>
                        <td>J.P. Singh</td>
                        <td>&nbsp;</td>
                        <td>7376270446</td>
                        <td>diet.sitapur@gmail.com</td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>67</td>
                        <td>DIET SONBHADRA</td>
                        <td>Badauli Chauraha Tata Agenci Ke Samane, Pincode-231216,Uttar Pradesh</td>
                        <td>Shri Rajendra Prasad</td>
                        <td>Principal</td>
                        <td>7376270435</td>
                        <td><a href="mailto:diet.sonbhadra@gmail.com">diet.sonbhadra@gmail.com</a></td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>68</td>
                        <td>DIET SULTANPUR</td>
                        <td>Vivek Nagar Near Railway Station Sultanpur, Uttar Pradesh Pincode- 228001</td>
                        <td>Shri Ramu Prasad Verma</td>
                        <td>Principal</td>
                        <td>7376270424</td>
                        <td><a href="mailto:diet.sultanpur@gmail.com">diet.sultanpur@gmail.com</a></td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>69</td>
                        <td>DIET UNNAO</td>
                        <td>Near GGIC, Moti Nagar Unnao Uttar Pradesh Pincode- 209801</td>
                        <td>Shri Prem Praksah Maurya</td>
                        <td>Principal</td>
                        <td>7376270549</td>
                        <td><a href="mailto:diet.unnao@gmail.com">diet.unnao@gmail.com</a></td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                    <tr>
                        <td>70</td>
                        <td>DIET VARANASI</td>
                        <td>Sarnath Varanasi, Uttar Pradesh Pincode- 221007</td>
                        <td>Shri Umesh Kumar Shukla</td>
                        <td>Vice Principal</td>
                        <td>7376270421</td>
                        <td><a href="mailto:diet.varanasi1@gmail.com">diet.varanasi1@gmail.com</a></td>
                        <td><button class="btn btn-sm btn-primary">View Details</button></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</section>





















<?php

include('footer.php');
?>