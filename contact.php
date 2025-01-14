<?php
include('header.php');
?>

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
                    <h2>Contact Us</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                </div> <!-- page banner cont -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== CONTACT PART START ======-->
<section id="contact-page" class="pt-90 pb-120 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="contact-from mt-30">
                    <div class="section-title">
                        <h5>Contact Us</h5>
                        <h2>Keep in touch</h2>
                    </div> <!-- section title -->
                    <div class="main-form pt-45">
                        <form id="contact-form" action="#" method="post" data-toggle="validator">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="singel-form form-group">
                                        <input name="name" type="text" placeholder="Your name" data-error="Name is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- singel form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="singel-form form-group">
                                        <input name="email" type="email" placeholder="Email" data-error="Valid email is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- singel form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="singel-form form-group">
                                        <input name="subject" type="text" placeholder="Subject" data-error="Subject is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- singel form --> 
                                </div>
                                <div class="col-md-6">
                                    <div class="singel-form form-group">
                                        <input name="phone" type="text" placeholder="Phone" data-error="Phone is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- singel form -->
                                </div>
                                <div class="col-md-12">
                                    <div class="singel-form form-group">
                                        <textarea name="messege" placeholder="Message" data-error="Please, leave us a message." required="required"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- singel form -->
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="singel-form">
                                        <button type="submit" class="main-btn">Send</button>
                                    </div> <!-- singel form -->
                                </div>
                            </div> <!-- row -->
                        </form>
                    </div> <!-- main form -->
                </div> <!-- contact from -->
            </div>
            <div class="col-lg-5">
                <div class="contact-address mt-30">
                    <ul>
                        <li>
                            <div class="singel-address">
                                <div class="icon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="cont">
                                    <p>143 Castle Road, 517 District, Kiyv Port, South Canada</p>
                                </div>
                            </div> <!-- singel address -->
                        </li>
                        <li>
                            <div class="singel-address">
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="cont">
                                    <p>+3 123 456 789</p>
                                    <p>+1 222 345 342</p>
                                </div>
                            </div> <!-- singel address -->
                        </li>
                        <li>
                            <div class="singel-address">
                                <div class="icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="cont">
                                    <p>info@yourmail.com</p>
                                    <p>info@yourmail.com</p>
                                </div>
                            </div> <!-- singel address -->
                        </li>
                    </ul>
                </div> <!-- contact address -->
                <div class="map mt-30">
                    <div >
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5941.264291289961!2d80.954713!3d26.865471!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd6de48289ed%3A0x62b7502ed67d2193!2sState%20Council%20for%20Education%20Research%20and%20Training%20UP!5e1!3m2!1sen!2sus!4v1736159418312!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div> <!-- map -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== CONTACT PART ENDS ======-->

<?php
include('footer.php');
?>
