 <!--====== FOOTER PART START ======-->

 <footer id="footer-part">
     <div class="footer-top pt-40 pb-70">
         <div class="container">
             <div class="row">

                 <div class="col-lg-4 col-md-6 col-sm-6">
                     <div class="footer-link mt-40">
                         <div class="footer-title pb-25">
                             <h6>Quick Links</h6>
                         </div>
                         <ul>
                             <li><a href="index-2.html"><i class="fa fa-angle-right"></i>Feedback</a></li>
                             <li><a href="about.html"><i class="fa fa-angle-right"></i>Accessibility Statement</a></li>
                             <li><a href="courses.html"><i class="fa fa-angle-right"></i>Copyright Policy</a></li>
                             <li><a href="blog.html"><i class="fa fa-angle-right"></i>Disclaimer</a></li>
                             <li><a href="events.html"><i class="fa fa-angle-right"></i>Help</a></li>

                         </ul>
                         <ul>
                             <li><a href="#"><i class="fa fa-angle-right"></i>Hyperlink Policy</a></li>
                             <li><a href="shop.html"><i class="fa fa-angle-right"></i>Privacy Policy</a></li>
                             <li><a href="teachers.html"><i class="fa fa-angle-right"></i>Security Policy</a></li>
                             <li><a href="#"><i class="fa fa-angle-right"></i>Terms &amp; Conditions</a></li>
                             <li><a href="contact.html"><i class="fa fa-angle-right"></i>Terms of Use</a></li>

                         </ul>
                     </div> <!-- footer link -->
                 </div>
                 <div class="col-lg-4 col-md-6 col-sm-6">
                     <div class="footer-link support mt-40">
                         <div class="footer-title pb-25">
                             <h6>Support</h6>
                         </div>
                         <ul>
                             <li><a href="#"><i class="fa fa-angle-right"></i>FAQS</a></li>
                             <li><a href="#"><i class="fa fa-angle-right"></i>Privacy</a></li>
                             <li><a href="#"><i class="fa fa-angle-right"></i>Policy</a></li>
                             <li><a href="#"><i class="fa fa-angle-right"></i>Support</a></li>
                             <li><a href="#"><i class="fa fa-angle-right"></i>Documentation</a></li>
                         </ul>
                     </div> <!-- support -->
                 </div>
                 <div class="col-lg-4 col-md-6">
                     <div class="footer-address mt-40">
                         <div class="footer-title pb-25">
                             <h6>Contact Us</h6>
                         </div>
                         <ul>
                             <li>
                                 <div class="icon">
                                     <i class="fa fa-home"></i>
                                 </div>
                                 <div class="cont">
                                     <p>143 castle road 517 district, kiyev port south Canada</p>
                                 </div>
                             </li>
                             <li>
                                 <div class="icon">
                                     <i class="fa fa-phone"></i>
                                 </div>
                                 <div class="cont">
                                     <p>+3 123 456 789</p>
                                 </div>
                             </li>
                             <li>
                                 <div class="icon">
                                     <i class="fa fa-envelope-o"></i>
                                 </div>
                                 <div class="cont">
                                     <p>info@yourmail.com</p>
                                 </div>
                             </li>
                         </ul>
                     </div> <!-- footer address -->
                 </div>
             </div> <!-- row -->
         </div> <!-- container -->
     </div> <!-- footer top -->


 </footer>

 <!--====== FOOTER PART ENDS ======-->

 <!--====== BACK TO TP PART START ======-->

 <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

 <!--====== BACK TO TP PART ENDS ======-->








 <!--====== jquery js ======-->
 <script src="js/vendor/modernizr-3.6.0.min.js"></script>
 <script src="js/vendor/jquery-1.12.4.min.js"></script>

 <!--====== Bootstrap js ======-->
 <script src="js/bootstrap.min.js"></script>

 <!--====== Slick js ======-->
 <script src="js/slick.min.js"></script>

 <!--====== Magnific Popup js ======-->
 <script src="js/jquery.magnific-popup.min.js"></script>

 <!--====== Counter Up js ======-->
 <script src="js/waypoints.min.js"></script>
 <script src="js/jquery.counterup.min.js"></script>

 <!--====== Nice Select js ======-->
 <script src="js/jquery.nice-select.min.js"></script>

 <!--====== Nice Number js ======-->
 <script src="js/jquery.nice-number.min.js"></script>

 <!--====== Count Down js ======-->
 <script src="js/jquery.countdown.min.js"></script>

 <!--====== Validator js ======-->
 <script src="js/validator.min.js"></script>

 <!--====== Ajax Contact js ======-->
 <script src="js/ajax-contact.js"></script>

 <!--====== Main js ======-->
 <script src="js/main.js"></script>

 <!--====== Map js ======-->
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
 <script src="js/map-script.js"></script>



 <script>
     $(".navbar-toggler").on('click', function() {
         $(this).toggleClass("active");
     });

     var subMenu = $('.sub-menu-bar .navbar-nav .sub-menu');

     if (subMenu.length) {
         subMenu.parent('li').children('a').append(function() {
             return '<button class="sub-nav-toggler"> <i class="fa fa-chevron-down"></i> </button>';
         });

         var subMenuToggler = $('.sub-menu-bar .navbar-nav .sub-nav-toggler');

         subMenuToggler.on('click', function() {
             $(this).parent().parent().children('.sub-menu').slideToggle();
             return false;
         });

         // Sub-menu-right ke liye toggle functionality
         var subMenuRight = $('.sub-menu-bar .navbar-nav .sub-menu .sub-menu-right');

         if (subMenuRight.length) {
             subMenuRight.parent('li').children('a').append(function() {
                 return '<button class="sub-nav-right-toggler"> <i class="fa fa-chevron-down"></i> </button>';
             });

             var subMenuRightToggler = $('.sub-menu-bar .navbar-nav .sub-nav-right-toggler');

             subMenuRightToggler.on('click', function() {
                 $(this).parent().parent().children('.sub-menu-right').slideToggle();
                 return false;
             });

             // Sub-menu-right-right ke liye toggle functionality
             var subMenuRightRight = $('.sub-menu-bar .navbar-nav .sub-menu .sub-menu-right .sub-menu-right-right');

             if (subMenuRightRight.length) {
                 subMenuRightRight.parent('li').children('a').append(function() {
                     return '<button class="sub-nav-right-right-toggler"> <i class="fa fa-chevron-down"></i> </button>';
                 });

                 var subMenuRightRightToggler = $('.sub-menu-bar .navbar-nav .sub-nav-right-right-toggler');

                 subMenuRightRightToggler.on('click', function() {
                     $(this).parent().parent().children('.sub-menu-right-right').slideToggle();
                     return false;
                 });
             }
         }
     }
 </script>





 <script>
     $(document).ready(function() {
         $('#testimonial-slide').slick({
             dots: true, // Show navigation dots
             infinite: true, // Infinite looping
             speed: 600, // Transition speed
             slidesToShow: 6, // Number of visible slides
             slidesToScroll: 1, // Number of slides to scroll at a time
             autoplay: true, // Enable autoplay
             autoplaySpeed: 4000, // Time between slides (in ms)
             arrows: false, // Disable "Next" and "Previous" buttons
             responsive: [{
                     breakpoint: 992, // For tablets
                     settings: {
                         slidesToShow: 2
                     }
                 },
                 {
                     breakpoint: 768, // For mobile devices
                     settings: {
                         slidesToShow: 1
                     }
                 }
             ]
         });
     });
 </script>


 <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>



 <!-- Initialize DataTable -->
 <script>
     $(document).ready(function() {
         $('#dietTable').DataTable();
     });
 </script>


 <script>
     // Function to handle tab switching
     function openCity(cityName, button) {
         var i;
         var x = document.getElementsByClassName("city-content");
         var tabs = document.getElementsByClassName("btn");

         // Hide all city contents
         for (i = 0; i < x.length; i++) {
             x[i].classList.remove("active");
         }

         // Remove active class from all tabs
         for (i = 0; i < tabs.length; i++) {
             tabs[i].classList.remove("active");
         }

         // Show the clicked city content
         document.getElementById(cityName).classList.add("active");

         // Add active class to the clicked tab
         button.classList.add("active");
     }

     // Set default city to London
     document.addEventListener('DOMContentLoaded', function() {
         // Trigger the 'London' tab to be active
         document.querySelector('.btn').classList.add('active');
         openCity('London', document.querySelector('.btn'));
     });
 </script>



 </body>

 </html>